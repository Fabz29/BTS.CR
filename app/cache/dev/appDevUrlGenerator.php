<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        '_assetic_bootstrap_js' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'bootstrap_js',    'pos' => NULL,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/assetic/bootstrap_js.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_bootstrap_js_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'bootstrap_js',    'pos' => 0,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/assetic/bootstrap_js_bootstrap_1.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_bootstrap_css' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'bootstrap_css',    'pos' => NULL,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/assetic/bootstrap_css.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_bootstrap_css_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'bootstrap_css',    'pos' => 0,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/assetic/bootstrap_css_bootstrap_1.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_bootstrap_css_1' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'bootstrap_css',    'pos' => 1,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/assetic/bootstrap_css_style_2.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_style_css' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'style_css',    'pos' => NULL,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/assetic/style_css.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_style_css_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'style_css',    'pos' => 0,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/assetic/style_css_styles_1.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_bootstrap_glyphicons_ttf' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'bootstrap_glyphicons_ttf',    'pos' => NULL,    '_format' => 'ttf',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/fonts/glyphicons-halflings-regular.ttf',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_bootstrap_glyphicons_ttf_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'bootstrap_glyphicons_ttf',    'pos' => 0,    '_format' => 'ttf',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/fonts/glyphicons-halflings-regular_glyphicons-halflings-regular_1.ttf',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_bootstrap_glyphicons_eot' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'bootstrap_glyphicons_eot',    'pos' => NULL,    '_format' => 'eot',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/fonts/glyphicons-halflings-regular.eot',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_bootstrap_glyphicons_eot_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'bootstrap_glyphicons_eot',    'pos' => 0,    '_format' => 'eot',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/fonts/glyphicons-halflings-regular_glyphicons-halflings-regular_1.eot',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_bootstrap_glyphicons_svg' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'bootstrap_glyphicons_svg',    'pos' => NULL,    '_format' => 'svg',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/fonts/glyphicons-halflings-regular.svg',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_bootstrap_glyphicons_svg_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'bootstrap_glyphicons_svg',    'pos' => 0,    '_format' => 'svg',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/fonts/glyphicons-halflings-regular_glyphicons-halflings-regular_1.svg',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_bootstrap_glyphicons_woff' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'bootstrap_glyphicons_woff',    'pos' => NULL,    '_format' => 'woff',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/fonts/glyphicons-halflings-regular.woff',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_bootstrap_glyphicons_woff_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'bootstrap_glyphicons_woff',    'pos' => 0,    '_format' => 'woff',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/fonts/glyphicons-halflings-regular_glyphicons-halflings-regular_1.woff',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_jquery' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'jquery',    'pos' => NULL,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/assetic/jquery.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_jquery_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'jquery',    'pos' => 0,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/assetic/jquery_jquery_1.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_5cb626c' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '5cb626c',    'pos' => NULL,    '_format' => 'jpg',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/images/5cb626c.jpg',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_5cb626c_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '5cb626c',    'pos' => 0,    '_format' => 'jpg',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/images/5cb626c_web-medecine_1.jpg',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_fddb9b6' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'fddb9b6',    'pos' => NULL,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/fddb9b6.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_fddb9b6_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'fddb9b6',    'pos' => 0,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/fddb9b6_part_1.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_4a837c2' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '4a837c2',    'pos' => NULL,    '_format' => 'png',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/images/4a837c2.png',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_4a837c2_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '4a837c2',    'pos' => 0,    '_format' => 'png',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/images/4a837c2_logo_1.png',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_a56fa94' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'a56fa94',    'pos' => NULL,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/a56fa94.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_a56fa94_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'a56fa94',    'pos' => 0,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/a56fa94_part_1.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_a56fa94_1' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'a56fa94',    'pos' => 1,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/a56fa94_part_2.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_step' => array (  0 =>   array (    0 => 'index',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'index',    ),    1 =>     array (      0 => 'text',      1 => '/_configurator/step',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_final' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/final',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'crgsbr_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CR\\GSBRBundle\\Controller\\HomeController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'crgsbr_profil' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CR\\GSBRBundle\\Controller\\HomeController::profilAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profil',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'crgsbr_medicament_consulter' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CR\\GSBRBundle\\Controller\\MedicamentController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/medicament',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'crgsbr_medicament_rechercher' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CR\\GSBRBundle\\Controller\\MedicamentController::rechercheAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/medicament/recherche',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'crgsbr_medicament_resultat' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CR\\GSBRBundle\\Controller\\MedicamentController::resultatAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/medicament/recherche/resultat',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'crgsbr_praticien_consulter' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CR\\GSBRBundle\\Controller\\PraticienController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/praticien',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'crgsbr_praticien_rechercher' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CR\\GSBRBundle\\Controller\\PraticienController::rechercheAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/praticien/recherche',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'crgsbr_praticien_resultat' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CR\\GSBRBundle\\Controller\\PraticienController::resultatAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/praticien/recherche/resultat',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'crgsbr_praticien_rechercher_avance' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CR\\GSBRBundle\\Controller\\PraticienController::rechercheAvanceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/praticien/recherche/avance',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'crgsbr_praticien_resultat_avance' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CR\\GSBRBundle\\Controller\\PraticienController::resultat_avanceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/praticien/resultat_avance/resultat',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'crgsbr_rapportVisite_consulter' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CR\\GSBRBundle\\Controller\\RapportVisiteController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/rapport-de-visite',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'crgsbr_rapportVisite_ajouter' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CR\\GSBRBundle\\Controller\\RapportVisiteController::ajouterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/rapport-de-visite/ajouter',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'crgsbr_rapportVisite_supprimer' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CR\\GSBRBundle\\Controller\\RapportVisiteController::supprimerAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '-',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/rapport-de-visite/supprimer-rapport',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'crgsbr_rapportVisite_modifier' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CR\\GSBRBundle\\Controller\\RapportVisiteController::modifierAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '-',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/rapport-de-visite/modifier-rapport',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/app/example',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'crgsbr_connexion' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CR\\GSBRBundle\\Controller\\HomeController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/connexion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'crgsbr_connexion_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/connexion_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'crgsbr_deconnexion' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/deconnexion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
