<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/assetic')) {
            if (0 === strpos($pathinfo, '/assetic/bootstrap_')) {
                if (0 === strpos($pathinfo, '/assetic/bootstrap_js')) {
                    // _assetic_bootstrap_js
                    if ($pathinfo === '/assetic/bootstrap_js.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js',);
                    }

                    // _assetic_bootstrap_js_0
                    if ($pathinfo === '/assetic/bootstrap_js_bootstrap_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_0',);
                    }

                }

                if (0 === strpos($pathinfo, '/assetic/bootstrap_css')) {
                    // _assetic_bootstrap_css
                    if ($pathinfo === '/assetic/bootstrap_css.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_css',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_bootstrap_css',);
                    }

                    if (0 === strpos($pathinfo, '/assetic/bootstrap_css_')) {
                        // _assetic_bootstrap_css_0
                        if ($pathinfo === '/assetic/bootstrap_css_bootstrap_1.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_css',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_bootstrap_css_0',);
                        }

                        // _assetic_bootstrap_css_1
                        if ($pathinfo === '/assetic/bootstrap_css_style_2.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_css',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_bootstrap_css_1',);
                        }

                    }

                }

            }

            if (0 === strpos($pathinfo, '/assetic/style_css')) {
                // _assetic_style_css
                if ($pathinfo === '/assetic/style_css.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'style_css',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_style_css',);
                }

                // _assetic_style_css_0
                if ($pathinfo === '/assetic/style_css_styles_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'style_css',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_style_css_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/fonts/glyphicons-halflings-regular')) {
            // _assetic_bootstrap_glyphicons_ttf
            if ($pathinfo === '/fonts/glyphicons-halflings-regular.ttf') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_glyphicons_ttf',  'pos' => NULL,  '_format' => 'ttf',  '_route' => '_assetic_bootstrap_glyphicons_ttf',);
            }

            // _assetic_bootstrap_glyphicons_ttf_0
            if ($pathinfo === '/fonts/glyphicons-halflings-regular_glyphicons-halflings-regular_1.ttf') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_glyphicons_ttf',  'pos' => 0,  '_format' => 'ttf',  '_route' => '_assetic_bootstrap_glyphicons_ttf_0',);
            }

            // _assetic_bootstrap_glyphicons_eot
            if ($pathinfo === '/fonts/glyphicons-halflings-regular.eot') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_glyphicons_eot',  'pos' => NULL,  '_format' => 'eot',  '_route' => '_assetic_bootstrap_glyphicons_eot',);
            }

            // _assetic_bootstrap_glyphicons_eot_0
            if ($pathinfo === '/fonts/glyphicons-halflings-regular_glyphicons-halflings-regular_1.eot') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_glyphicons_eot',  'pos' => 0,  '_format' => 'eot',  '_route' => '_assetic_bootstrap_glyphicons_eot_0',);
            }

            // _assetic_bootstrap_glyphicons_svg
            if ($pathinfo === '/fonts/glyphicons-halflings-regular.svg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_glyphicons_svg',  'pos' => NULL,  '_format' => 'svg',  '_route' => '_assetic_bootstrap_glyphicons_svg',);
            }

            // _assetic_bootstrap_glyphicons_svg_0
            if ($pathinfo === '/fonts/glyphicons-halflings-regular_glyphicons-halflings-regular_1.svg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_glyphicons_svg',  'pos' => 0,  '_format' => 'svg',  '_route' => '_assetic_bootstrap_glyphicons_svg_0',);
            }

            // _assetic_bootstrap_glyphicons_woff
            if ($pathinfo === '/fonts/glyphicons-halflings-regular.woff') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_glyphicons_woff',  'pos' => NULL,  '_format' => 'woff',  '_route' => '_assetic_bootstrap_glyphicons_woff',);
            }

            // _assetic_bootstrap_glyphicons_woff_0
            if ($pathinfo === '/fonts/glyphicons-halflings-regular_glyphicons-halflings-regular_1.woff') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_glyphicons_woff',  'pos' => 0,  '_format' => 'woff',  '_route' => '_assetic_bootstrap_glyphicons_woff_0',);
            }

            // _assetic_bootstrap_glyphicons_woff2
            if ($pathinfo === '/fonts/glyphicons-halflings-regular.woff2') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_glyphicons_woff2',  'pos' => NULL,  '_format' => 'woff2',  '_route' => '_assetic_bootstrap_glyphicons_woff2',);
            }

            // _assetic_bootstrap_glyphicons_woff2_0
            if ($pathinfo === '/fonts/glyphicons-halflings-regular_glyphicons-halflings-regular_1.woff2') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_glyphicons_woff2',  'pos' => 0,  '_format' => 'woff2',  '_route' => '_assetic_bootstrap_glyphicons_woff2_0',);
            }

        }

        if (0 === strpos($pathinfo, '/assetic/jquery')) {
            // _assetic_jquery
            if ($pathinfo === '/assetic/jquery.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'jquery',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_jquery',);
            }

            // _assetic_jquery_0
            if ($pathinfo === '/assetic/jquery_jquery_1.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'jquery',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_jquery_0',);
            }

        }

        if (0 === strpos($pathinfo, '/images/5cb626c')) {
            // _assetic_5cb626c
            if ($pathinfo === '/images/5cb626c.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '5cb626c',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_5cb626c',);
            }

            // _assetic_5cb626c_0
            if ($pathinfo === '/images/5cb626c_web-medecine_1.jpg') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '5cb626c',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_5cb626c_0',);
            }

        }

        if (0 === strpos($pathinfo, '/css/fddb9b6')) {
            // _assetic_fddb9b6
            if ($pathinfo === '/css/fddb9b6.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'fddb9b6',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_fddb9b6',);
            }

            // _assetic_fddb9b6_0
            if ($pathinfo === '/css/fddb9b6_part_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'fddb9b6',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_fddb9b6_0',);
            }

        }

        if (0 === strpos($pathinfo, '/images/4a837c2')) {
            // _assetic_4a837c2
            if ($pathinfo === '/images/4a837c2.png') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '4a837c2',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_4a837c2',);
            }

            // _assetic_4a837c2_0
            if ($pathinfo === '/images/4a837c2_logo_1.png') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '4a837c2',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_4a837c2_0',);
            }

        }

        if (0 === strpos($pathinfo, '/js/a56fa94')) {
            // _assetic_a56fa94
            if ($pathinfo === '/js/a56fa94.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'a56fa94',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_a56fa94',);
            }

            if (0 === strpos($pathinfo, '/js/a56fa94_part_')) {
                // _assetic_a56fa94_0
                if ($pathinfo === '/js/a56fa94_part_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a56fa94',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_a56fa94_0',);
                }

                // _assetic_a56fa94_1
                if ($pathinfo === '/js/a56fa94_part_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a56fa94',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_a56fa94_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // crgsbr_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'crgsbr_homepage');
            }

            return array (  '_controller' => 'CR\\GSBRBundle\\Controller\\HomeController::indexAction',  '_route' => 'crgsbr_homepage',);
        }

        // crgsbr_profil
        if ($pathinfo === '/profil') {
            return array (  '_controller' => 'CR\\GSBRBundle\\Controller\\HomeController::profilAction',  '_route' => 'crgsbr_profil',);
        }

        if (0 === strpos($pathinfo, '/medicament')) {
            // crgsbr_medicament_consulter
            if ($pathinfo === '/medicament') {
                return array (  '_controller' => 'CR\\GSBRBundle\\Controller\\MedicamentController::indexAction',  '_route' => 'crgsbr_medicament_consulter',);
            }

            if (0 === strpos($pathinfo, '/medicament/recherche')) {
                // crgsbr_medicament_rechercher
                if ($pathinfo === '/medicament/recherche') {
                    return array (  '_controller' => 'CR\\GSBRBundle\\Controller\\MedicamentController::rechercheAction',  '_route' => 'crgsbr_medicament_rechercher',);
                }

                // crgsbr_medicament_resultat
                if ($pathinfo === '/medicament/recherche/resultat') {
                    return array (  '_controller' => 'CR\\GSBRBundle\\Controller\\MedicamentController::resultatAction',  '_route' => 'crgsbr_medicament_resultat',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/praticien')) {
            // crgsbr_praticien_consulter
            if ($pathinfo === '/praticien') {
                return array (  '_controller' => 'CR\\GSBRBundle\\Controller\\PraticienController::indexAction',  '_route' => 'crgsbr_praticien_consulter',);
            }

            if (0 === strpos($pathinfo, '/praticien/re')) {
                if (0 === strpos($pathinfo, '/praticien/recherche')) {
                    // crgsbr_praticien_rechercher
                    if ($pathinfo === '/praticien/recherche') {
                        return array (  '_controller' => 'CR\\GSBRBundle\\Controller\\PraticienController::rechercheAction',  '_route' => 'crgsbr_praticien_rechercher',);
                    }

                    // crgsbr_praticien_resultat
                    if ($pathinfo === '/praticien/recherche/resultat') {
                        return array (  '_controller' => 'CR\\GSBRBundle\\Controller\\PraticienController::resultatAction',  '_route' => 'crgsbr_praticien_resultat',);
                    }

                    // crgsbr_praticien_rechercher_avance
                    if ($pathinfo === '/praticien/recherche/avance') {
                        return array (  '_controller' => 'CR\\GSBRBundle\\Controller\\PraticienController::rechercheAvanceAction',  '_route' => 'crgsbr_praticien_rechercher_avance',);
                    }

                }

                // crgsbr_praticien_resultat_avance
                if ($pathinfo === '/praticien/resultat_avance/resultat') {
                    return array (  '_controller' => 'CR\\GSBRBundle\\Controller\\PraticienController::resultat_avanceAction',  '_route' => 'crgsbr_praticien_resultat_avance',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/rapport-de-visite')) {
            // crgsbr_rapportVisite_consulter
            if ($pathinfo === '/rapport-de-visite') {
                return array (  '_controller' => 'CR\\GSBRBundle\\Controller\\RapportVisiteController::indexAction',  '_route' => 'crgsbr_rapportVisite_consulter',);
            }

            // crgsbr_rapportVisite_ajouter
            if ($pathinfo === '/rapport-de-visite/ajouter') {
                return array (  '_controller' => 'CR\\GSBRBundle\\Controller\\RapportVisiteController::ajouterAction',  '_route' => 'crgsbr_rapportVisite_ajouter',);
            }

            // crgsbr_rapportVisite_supprimer
            if (0 === strpos($pathinfo, '/rapport-de-visite/supprimer-rapport') && preg_match('#^/rapport\\-de\\-visite/supprimer\\-rapport\\-(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'crgsbr_rapportVisite_supprimer')), array (  '_controller' => 'CR\\GSBRBundle\\Controller\\RapportVisiteController::supprimerAction',));
            }

            // crgsbr_rapportVisite_modifier
            if (0 === strpos($pathinfo, '/rapport-de-visite/modifier-rapport') && preg_match('#^/rapport\\-de\\-visite/modifier\\-rapport\\-(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'crgsbr_rapportVisite_modifier')), array (  '_controller' => 'CR\\GSBRBundle\\Controller\\RapportVisiteController::modifierAction',));
            }

        }

        // crgsbr_stats
        if ($pathinfo === '/statistiques') {
            return array (  '_controller' => 'CR\\GSBRBundle\\Controller\\StatsController::indexAction',  '_route' => 'crgsbr_stats',);
        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/connexion')) {
            // crgsbr_connexion
            if ($pathinfo === '/connexion') {
                return array (  '_controller' => 'CR\\GSBRBundle\\Controller\\HomeController::loginAction',  '_route' => 'crgsbr_connexion',);
            }

            // crgsbr_connexion_check
            if ($pathinfo === '/connexion_check') {
                return array('_route' => 'crgsbr_connexion_check');
            }

        }

        // crgsbr_deconnexion
        if ($pathinfo === '/deconnexion') {
            return array('_route' => 'crgsbr_deconnexion');
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
