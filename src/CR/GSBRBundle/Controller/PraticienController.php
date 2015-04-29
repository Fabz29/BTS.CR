<?php

/** 
 * Contrôleur de gestion des praticiens 
 
 * Hérite des services du contrôleur de symfony
 * pour l'application GSB-Report
 * Fait parti du namespace CR\GSBRBundle\Controller
 * Utilise les services de Controller et Request
 
 * @package     symfony2
 * @author      Fabien ZANETTI et Lucas SAINTIER
 * @version     1.0
 * @link        http://symfony.com/
 */

namespace CR\GSBRBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Classe contrôleur de consultation et rechercher des praticiens
 */
class PraticienController extends Controller {

    /**
     * Cette fonction affiche la page /praticien/
     * @return view La vue praticien.html.twig       
     */
    public function indexAction() {

        $lesPraticiens = $this->getDoctrine()->getRepository('CRGSBRBundle:praticien')->findAll(); // on récupère tous les praticiens
        // on retourne la vue des praticiens
        return $this->render('CRGSBRBundle:Praticien:praticien.html.twig', array(
                    'mesPrat' => $lesPraticiens
        ));
    }

    /**
     * Cette fonction recherche l'ensemble des praticiens 
     * @return view recherchePraticien.html.twig la vue de recherche de praticiens
     */
    public function rechercheAction() {

        $lesTypes = $this->getDoctrine()->getRepository('CRGSBRBundle:typePraticien')->findAll(); // récupère tous les types de praticiens de la BDD  
        // retourne la vue de recherche par types de praticiens·
        return $this->render('CRGSBRBundle:Praticien:recherchePraticien.html.twig', array(
                    'mesTypes' => $lesTypes,
                    'avance' => false
        ));
    }

    /**
     * Cette fonction recherche l'ensemble des praticiens 
     * @return view recherchePraticien.html.twig la vue de recherche avancée de praticiens
     */
    public function rechercheAvanceAction() {

        $lesMedecins = $this->getDoctrine()->getRepository('CRGSBRBundle:praticien')->findAll(); // récupère tous les médecins de la BDD
        // retourne la vue de recherche avancé par nom et ville et indique la recherche est avancée
        return $this->render('CRGSBRBundle:Praticien:recherchePraticien.html.twig', array(
                    'mesMedecins' => $lesMedecins,
                    'avance' => true
        ));
    }

    /**
     * Cette fonction retourne le résultat de la recherche de praticien
     * 
     * @param Request $request La requête construite à partir de la séléction de l'utilisateur
     * @return view recherchePraticien.html.twig la vue avec le résultat
     */
    public function resultatAction(Request $request) {
        
        $type = $request->request->get('idTypeMedecin'); // récupère l'id du type de médecin
        $lesTypes = $this->getDoctrine()->getRepository('CRGSBRBundle:typePraticien')->findAll(); // récupère tous les tyes de médecins de la BDD

        if ($request->isMethod('POST')) {

            // retourne les médecins par rapport son type demandé est trié par ordre alphabétique
            $res = $this->getDoctrine()->getRepository('CRGSBRBundle:praticien')->findBy(array(
                'typeMedecin' => $type
                    ), array(
                'nomMedecin' => 'ASC'
            ));

            // retourne la vue avec les résultats et une variable qui indique que la recherche n'est pas avancée
            return $this->render('CRGSBRBundle:praticien:recherchePraticien.html.twig', array(
                        'mesTypes' => $lesTypes,
                        'mesResultats' => $res,
                        'avance' => false
            ));
        }
    }

    /**
     * Cette fonction retourne le résultat de la recherche avancée de praticiens
     * 
     * @param Request $request La requête construite à partir de la séléction de l'utilisateur
     * @return view recherchePraticien.html.twig la vue avec le résultat
     */
    public function resultat_avanceAction(Request $request) {

        $nomMedecin = $request->request->get('nomMedecin'); // on récupère la valeur du nom du médecin
        $villeMedecin = $request->request->get('nomVille'); // on récupère la ville du médecin


        $lesMedecins = $this->getDoctrine()->getRepository('CRGSBRBundle:praticien')->findAll(); // on récupère tous les médecins de la BDD

        if ($request->isMethod('POST')) { // on véririfie si la méthode est bien POST
            $res = "";

            // ici on vérifie quels champs sont remplis et on définis les requêtes correspondant
            if ($nomMedecin != "" && $villeMedecin != "") {

                $res = $this->getDoctrine()->getRepository('CRGSBRBundle:praticien')->findBy(array(
                    'nomMedecin' => $nomMedecin,
                    'villeMedecin' => $villeMedecin), array('nomMedecin' => 'ASC'));
            } else if ($nomMedecin != "" && $villeMedecin == "") {

                $res = $this->getDoctrine()->getRepository('CRGSBRBundle:praticien')->findBy(array(
                    'nomMedecin' => $nomMedecin), array('nomMedecin' => 'ASC'));
            } else if ($nomMedecin == "" && $villeMedecin != "") {

                $res = $this->getDoctrine()->getRepository('CRGSBRBundle:praticien')->findBy(array(
                    'villeMedecin' => $villeMedecin), array('nomMedecin' => 'ASC'));
            } else if ($nomMedecin == "" && $villeMedecin == "") {

                $request->getSession()->getFlashBag()->add('danger', 'Veuiller renseigner au moins le nom ou la ville');
            }

            if (!$res) { // on vérifie qu'il y est pas de résultats 
                $request->getSession()->getFlashBag()->add('danger', 'Aucun résultats');
            }

            // on retourne la vue avec les résultats et on indique que la recherche est avancée
            return $this->render('CRGSBRBundle:praticien:recherchePraticien.html.twig', array(
                        'mesMedecin' => $lesMedecins,
                        'mesResultats' => $res,
                        'avance' => true,
            ));
        }
    }

}
