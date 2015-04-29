<?php

/** 
 * Contrôleur de gestion des médicaments
 
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
 * Classe contrôleur de consultation et recherche des médicaments
 */
class MedicamentController extends Controller {

    /**
     * Cette fonction affiche la page /medicament/
     * @return view Retourne la vue medicament.html.twig
     */
    public function indexAction() {

        $lesMedicaments = $this->getDoctrine()->getRepository('CRGSBRBundle:medicament')->findAll(); // récupère tous les médicaments de la BDD
        // retourne la vue des médicaments
        return $this->render('CRGSBRBundle:Medicament:medicament.html.twig', array(
                    'mesMed' => $lesMedicaments,
        ));
    }

    /**
     * Cette fonction recherche l'ensemble des familles
     * @return array $lesFamilles Les familles de médicaments
     * 
     */
    public function rechercheAction() {

        $lesFamilles = $this->getDoctrine()->getRepository('CRGSBRBundle:famille')->findAll(); // récupère toutes les familles de médicaments de la BDD
        // retourne la vue de recherche par famille
        return $this->render('CRGSBRBundle:Medicament:rechercheMedicament.html.twig', array(
                    'mesFamilles' => $lesFamilles,
        ));
    }

    /**
     * Cette fonction retourne le résultat de la recherche de médicament
     * 
     * @param Request $request La requête construite à partir de la séléction de l'utilisateur
     * @return view rechercheMedicament.html.twig la vue avec le résultat
     */
    public function resultatAction(Request $request) {
        $famille = $request->request->get('idFamille'); // récupère l'id de la famille séléctionné
        $lesFamilles = $this->getDoctrine()->getRepository('CRGSBRBundle:famille')->findAll(); /// récupère toutes les familles de médicaments de la BDD

        if ($request->isMethod('POST')) { // vérifie que le formulaire est valide
            $res = $this->getDoctrine()->getRepository('CRGSBRBundle:medicament')->findByFamille($famille); // retourne les médicaments par rapport à la famille demandé
            // retourne la vue avec les résultats de la recherche
            return $this->render('CRGSBRBundle:Medicament:rechercheMedicament.html.twig', array(
                        'mesFamilles' => $lesFamilles,
                        'mesResultats' => $res,
            ));
        }
    }

}
