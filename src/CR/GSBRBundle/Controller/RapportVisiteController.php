<?php

/**
 * Contrôleur de gestion des rapports de visite 

 * Hérite des services du contrôleur de symfony
 * pour l'application GSB-Report
 * Fait parti du namespace CR\GSBRBundle\Controller
 * Utilise les services de Controller, Request, NotFoundHttpException

 * @package     symfony2
 * @author      Fabien ZANETTI et Lucas SAINTIER
 * @version     1.0
 * @link        http://symfony.com/
 */

namespace CR\GSBRBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use CR\GSBRBundle\Entity\rapportVisite;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * Classe contrôleur de consultation et de gsetion des rapports de visite
 */
class RapportVisiteController extends Controller {

    /**
     * Cette fonction affiche la page rapport-de-visite
     * @return view La vue rapportVisite.html.twig
     */
    public function indexAction() {

        $visiteur = $this->getUser();
        $id = $visiteur->getId();
        $lesRapports = $this->getDoctrine()->getRepository('CRGSBRBundle:rapportVisite')->findByVisiteur($id); // on récupère tous les rapports de visites par rapport à l'id du visiteur
        // on retourne la vue avec les résultats
        return $this->render('CRGSBRBundle:RapportVisite:rapportVisite.html.twig', array(
                    'mesRapports' => $lesRapports
        ));
    }

    /**
     * Cette fonction ajoute un rapport de visite
     * @param Request $request La requête construite à partir de la saisie de l'utilisateur
     * @return view la vue ajouterRapportVisite.html.twig 
     */
    public function ajouterAction(Request $request) {

        $visiteur = $this->getUser();
        $rapportVisite = new rapportVisite(); // on créer un nouvel objet rapportVisite
        // on créer le formulaire par rapport à l'entité rapportVisite
        $form = $this->get('form.factory')->createBuilder('form', $rapportVisite)
                ->add('dateRapport', 'date', array(
                    'widget' => 'single_text',
                ))
                ->add('bilan', 'textarea')
                ->add('motif', 'textarea')
                ->add('medecin', 'entity', array(
                    'class' => 'CRGSBRBundle:praticien',
                    'property' => 'PrenomNom',
                    'multiple' => false)
                )
                ->add('Enregistrer', 'submit')
                ->getForm();

        if ($form->handleRequest($request)->isValid()) { // on vérifie que le formulaire est valide
            $em = $this->getDoctrine()->getManager(); // on récupère l'ORM Doctrine
            $rapportVisite->setVisiteur($visiteur); // on définit à quel visiteur appartientl'entité rapport de visite
            $em->persist($rapportVisite); // on persiste la donnée
            $em->flush(); // on enregistre dans la BDD
            $request->getSession()->getFlashBag()->add('success', 'Rapport de visite bien enregistré');
        }

        // on retourne la vue avec le formulaire généré est éventuellement un message
        return $this->render('CRGSBRBundle:RapportVisite:ajouterRapportVisite.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

    /**
     * Cette fonction supprime un rapport de visite
     * @param int $id identifiant
     * @param Request $request La requête construite à partir de la saisie de l'utilisateur
     * @return view supprimer.html.twig La vue qui supprime le rapport de visite
     */
    public function supprimerAction($id, Request $request) {
        $em = $this->getDoctrine()->getManager();

        // On récupère l'annonce $id
        $rapportVisite = $em->getRepository('CRGSBRBundle:rapportVisite')->find($id);

        if (null === $rapportVisite) {
            throw new NotFoundHttpException("Le rapport avec l'id " . $id . " n'existe pas.");
        }

        // On crée un formulaire vide, qui ne contiendra que le champ CSRF
        // Cela permet de protéger la suppression d'annonce contre cette faille
        $form = $this->createFormBuilder()->getForm();

        if ($form->handleRequest($request)->isValid()) {
            $em->remove($rapportVisite);
            $em->flush();

            $request->getSession()->getFlashBag()->add('success', "Le rapport a bien été supprimé.");

            return $this->redirect($this->generateUrl('crgsbr_rapportVisite_consulter'));
        }

        // Si la requête est en GET, on affiche une page de confirmation avant de supprimer
        return $this->render('CRGSBRBundle:RapportVisite:supprimer.html.twig', array(
                    'rapportVisite' => $rapportVisite,
                    'form' => $form->createView()
        ));
    }

    /**
     * Cette fonction modifie un rapport de visite
     * @param int $id identifiant
     * @param Request $request La requête construite à partir de la saisie de l'utilisateur
     * @return view modifier.html.twig La vue qui supprime le rapport de visite
     */
    public function modifierAction($id, Request $request) {
        $em = $this->getDoctrine()->getManager();

        // On récupère l'annonce $id
        $rapportVisite = $em->getRepository('CRGSBRBundle:rapportVisite')->find($id);

        if (null === $rapportVisite) {
            throw new NotFoundHttpException("Le rapport avec l'id " . $id . " n'existe pas.");
        }

        // On créé le formulaire
        $form = $this->get('form.factory')->createBuilder('form', $rapportVisite)
                ->add('dateRapport', 'date', array(
                    'widget' => 'single_text',
                ))
                ->add('bilan', 'textarea')
                ->add('motif', 'textarea')
                ->add('medecin', 'entity', array(
                    'class' => 'CRGSBRBundle:praticien',
                    'property' => 'PrenomNom',
                    'multiple' => false)
                )
                ->add('Enregistrer', 'submit')
                ->getForm();

        if ($form->handleRequest($request)->isValid()) {

            $em->flush();
            $request->getSession()->getFlashBag()->add('success', "Le rapport a bien été modifié.");

            return $this->redirect($this->generateUrl('crgsbr_rapportVisite_consulter'));
        }

        // Si la requête est en GET, on affiche une page de confirmation avant de supprimer
        return $this->render('CRGSBRBundle:RapportVisite:modifier.html.twig', array(
                    'rapportVisite' => $rapportVisite,
                    'form' => $form->createView()
        ));
    }

}
