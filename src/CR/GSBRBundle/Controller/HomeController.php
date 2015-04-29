<?php

/** 
 * Contrôleur de gestion des utilisateurs 
 
 * Hérite des services du contrôleur de symfony
 * pour l'application GSB-Report
 * Fait parti du namespace CR\GSBRBundle\Controller
 * Utilise les services de Controller, Request et SecurirtyContext
 
 * @package     symfony2
 * @author      Fabien ZANETTI et Lucas SAINTIER
 * @version     1.0
 * @link        http://symfony.com/
 */

namespace CR\GSBRBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;


/**
 * Classe contrôleur d'accès à l'application et de gestion du profil
 */
class HomeController extends Controller {

    /**
     * Cette fonction affiche la page d'accueil
     * @return view Retourne la vue accueil.html.twig
     */
    public function indexAction() {
        return $this->render('CRGSBRBundle:Home:accueil.html.twig');
    }

    /**
     * Cette fonction gère la connexion à l'application
     * @return view Retourne la vue connexion.html.twig
     */
    public function loginAction() {

        $request = $this->getRequest();
        $session = $request->getSession();
        // On vérifie s'il y a des erreurs d'une précédente soumission du formulaire
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }
        return $this->render('CRGSBRBundle:Home:connexion.html.twig', array(
                    'last_username' => $session->get(SecurityContext::LAST_USERNAME),
                    'error' => $error,
        ));
    }

    /**
     * Cette fonction affiche la page du formulaire du profil
     * @return view Retourne la vue profil.html.twig
     */
    public function profilAction(Request $request) {

        $visiteur = $this->getUser();
        // on vérifie que l'utilisateur est bien connécté
        $em = $this->getDoctrine()->getManager(); // récupère l'objet ORM Doctrine
        // créer le formulaire 
        $form = $this->get('form.factory')->createBuilder('form', $visiteur)
                ->add('nom', 'text')
                ->add('prenom', 'text')
                ->add('adresse', 'text')
                ->add('cp', 'number')
                ->add('ville', 'text')
                ->add('dateEmbauche', 'date', array(
                    'widget' => 'single_text'))
                ->add('username', 'text')
                ->add('mdp', 'password')
                ->add('Mettre_à_jour', 'submit')
                ->getForm();

        if ($form->handleRequest($request)->isValid()) { // vérifie que le formulaire est valide
            $em->persist($visiteur); // persiste la nouvelle entité modifié
            $em->flush(); // enregistre en BDD
            $request->getSession()->getFlashBag()->add('success', 'Le profil a bien été modifié');
        }

        return $this->render('CRGSBRBundle:Home:profil.html.twig', array(
                    'form' => $form->createView(), // créer la vue du formulaire
        ));
    }

}
