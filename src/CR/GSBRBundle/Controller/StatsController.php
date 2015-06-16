<?php

/**
 * Contrôleur d'affichage des statistiques

 * Hérite des services du contrôleur de symfony
 * pour l'application GSB-Report
 * Fait parti du namespace CR\GSBRBundle\Controller
 * Utilise les services de Controller, Request et SecurirtyContext

 * @package     symfony2
 * @author      Fabien ZANETTI
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
class StatsController extends Controller {

    /**
     * Cette fonction affiche la page d'accueil
     * @return view Retourne la vue accueil.html.twig
     */
    public function indexAction() {

        $visiteur = $this->getUser();
        $id = $visiteur->getId();
        $lesRapports = $this->getDoctrine()->getRepository('CRGSBRBundle:rapportVisite')->getRapportByVisiteur($id);
        $nb = count($lesRapports);

        if ($nb > 0) {
            return $this->render('CRGSBRBundle:Statistiques:stats.html.twig', array(
                        'mesRapports' => $lesRapports,
                        'nbRapport' => $nb));
        } else {
            return $this->render('CRGSBRBundle:Statistiques:stats.html.twig');
        }
    }

}
