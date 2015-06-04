<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
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

        // a2fSofia_dispatch
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'a2fSofia_dispatch');
            }

            return array (  '_controller' => 'A2F\\SofiaBundle\\Controller\\DefaultController::dispatchAction',  '_route' => 'a2fSofia_dispatch',);
        }

        // a2fSofia_a2flandingpage
        if ($pathinfo === '/a2f') {
            return array (  '_controller' => 'A2F\\SofiaBundle\\Controller\\DefaultController::indexA2fAction',  '_route' => 'a2fSofia_a2flandingpage',);
        }

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/contracttype')) {
                // a2fSofia_contracttype_update
                if ($pathinfo === '/contracttype/update') {
                    return array (  '_controller' => 'A2F\\SofiaBundle\\Controller\\ContractTypeController::updateAction',  '_route' => 'a2fSofia_contracttype_update',);
                }

                // a2fSofia_contracttype_list
                if ($pathinfo === '/contracttype/list') {
                    return array (  '_controller' => 'A2F\\SofiaBundle\\Controller\\ContractTypeController::listAction',  '_route' => 'a2fSofia_contracttype_list',);
                }

            }

            // a2fSofia_clientlandingpage
            if (0 === strpos($pathinfo, '/client') && preg_match('#^/client/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'a2fSofia_clientlandingpage')), array (  '_controller' => 'A2F\\SofiaBundle\\Controller\\DefaultController::indexClientAction',));
            }

        }

        if (0 === strpos($pathinfo, '/user')) {
            // a2fSofia_user_list
            if (0 === strpos($pathinfo, '/user/list') && preg_match('#^/user/list(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'a2fSofia_user_list')), array (  '_controller' => 'A2F\\SofiaBundle\\Controller\\UserController::listAction',  'id' => NULL,));
            }

            // a2fSofia_user_view
            if (0 === strpos($pathinfo, '/user/view') && preg_match('#^/user/view(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'a2fSofia_user_view')), array (  '_controller' => 'A2F\\SofiaBundle\\Controller\\UserController::viewAction',  'id' => 1,));
            }

            // a2fSofia_user_update
            if (0 === strpos($pathinfo, '/user/update') && preg_match('#^/user/update(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'a2fSofia_user_update')), array (  '_controller' => 'A2F\\SofiaBundle\\Controller\\UserController::updateAction',  'id' => 1,));
            }

            // a2fSofia_user_remove
            if (0 === strpos($pathinfo, '/user/remove') && preg_match('#^/user/remove(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'a2fSofia_user_remove')), array (  '_controller' => 'A2F\\SofiaBundle\\Controller\\UserController::removeAction',  'id' => 1,));
            }

            // a2fSofia_user_add
            if ($pathinfo === '/user/add') {
                return array (  '_controller' => 'A2F\\SofiaBundle\\Controller\\UserController::addAction',  '_route' => 'a2fSofia_user_add',);
            }

        }

        if (0 === strpos($pathinfo, '/scope')) {
            // a2fSofia_scope_list
            if (0 === strpos($pathinfo, '/scope/list') && preg_match('#^/scope/list(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'a2fSofia_scope_list')), array (  '_controller' => 'A2F\\SofiaBundle\\Controller\\ScopeController::listAction',  'id' => NULL,));
            }

            // a2fSofia_scope_view
            if (0 === strpos($pathinfo, '/scope/view') && preg_match('#^/scope/view(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'a2fSofia_scope_view')), array (  '_controller' => 'A2F\\SofiaBundle\\Controller\\ScopeController::viewAction',  'id' => 1,));
            }

            // a2fSofia_scope_update
            if (0 === strpos($pathinfo, '/scope/update') && preg_match('#^/scope/update(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'a2fSofia_scope_update')), array (  '_controller' => 'A2F\\SofiaBundle\\Controller\\ScopeController::updateAction',  'id' => 1,));
            }

            // a2fSofia_scope_remove
            if (0 === strpos($pathinfo, '/scope/remove') && preg_match('#^/scope/remove(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'a2fSofia_scope_remove')), array (  '_controller' => 'A2F\\SofiaBundle\\Controller\\ScopeController::removeAction',  'id' => 1,));
            }

            // a2fSofia_scope_add
            if ($pathinfo === '/scope/add') {
                return array (  '_controller' => 'A2F\\SofiaBundle\\Controller\\ScopeController::addAction',  '_route' => 'a2fSofia_scope_add',);
            }

        }

        if (0 === strpos($pathinfo, '/client')) {
            // a2fSofia_client_list
            if ($pathinfo === '/client/list') {
                return array (  '_controller' => 'A2F\\SofiaBundle\\Controller\\ClientController::listAction',  '_route' => 'a2fSofia_client_list',);
            }

            // a2fSofia_client_update
            if (0 === strpos($pathinfo, '/client/update') && preg_match('#^/client/update(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'a2fSofia_client_update')), array (  '_controller' => 'A2F\\SofiaBundle\\Controller\\ClientController::updateAction',  'id' => 1,));
            }

        }

        // a2fSofia_client_remove
        if (0 === strpos($pathinfo, '/scope/remove') && preg_match('#^/scope/remove(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'a2fSofia_client_remove')), array (  '_controller' => 'A2F\\SofiaBundle\\Controller\\ClientController::removeAction',  'id' => 1,));
        }

        // a2fSofia_client_add
        if ($pathinfo === '/client/add') {
            return array (  '_controller' => 'A2F\\SofiaBundle\\Controller\\ClientController::addAction',  '_route' => 'a2fSofia_client_add',);
        }

        if (0 === strpos($pathinfo, '/incident')) {
            // a2fSofia_incident_list
            if (0 === strpos($pathinfo, '/incident/list') && preg_match('#^/incident/list(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'a2fSofia_incident_list')), array (  '_controller' => 'A2F\\SofiaBundle\\Controller\\IncidentController::listAction',  'id' => NULL,));
            }

            // a2fSofia_incident_full_list
            if (0 === strpos($pathinfo, '/incident/fulllist') && preg_match('#^/incident/fulllist(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'a2fSofia_incident_full_list')), array (  '_controller' => 'A2F\\SofiaBundle\\Controller\\IncidentController::listAction',  'id' => NULL,));
            }

            // a2fSofia_incident_view
            if (0 === strpos($pathinfo, '/incident/view') && preg_match('#^/incident/view(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'a2fSofia_incident_view')), array (  '_controller' => 'A2F\\SofiaBundle\\Controller\\IncidentController::viewAction',  'id' => 1,));
            }

            // a2fSofia_incident_update
            if (0 === strpos($pathinfo, '/incident/update') && preg_match('#^/incident/update(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'a2fSofia_incident_update')), array (  '_controller' => 'A2F\\SofiaBundle\\Controller\\IncidentController::updateAction',  'id' => 1,));
            }

            // a2fSofia_incident_remove
            if (0 === strpos($pathinfo, '/incident/remove') && preg_match('#^/incident/remove(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'a2fSofia_incident_remove')), array (  '_controller' => 'A2F\\SofiaBundle\\Controller\\IncidentController::removeAction',  'id' => 1,));
            }

            if (0 === strpos($pathinfo, '/incident/a')) {
                // a2fSofia_incident_add
                if ($pathinfo === '/incident/add') {
                    return array (  '_controller' => 'A2F\\SofiaBundle\\Controller\\IncidentController::addAction',  '_route' => 'a2fSofia_incident_add',);
                }

                // a2fSofia_incident_assign
                if (0 === strpos($pathinfo, '/incident/assign') && preg_match('#^/incident/assign/(?P<incidentId>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'a2fSofia_incident_assign')), array (  '_controller' => 'A2F\\SofiaBundle\\Controller\\IncidentController::assignAction',));
                }

            }

        }

        // a2fSofia_client_detail
        if (0 === strpos($pathinfo, '/client/detail') && preg_match('#^/client/detail/(?P<type>[^/]++)(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'a2fSofia_client_detail')), array (  '_controller' => 'A2F\\SofiaBundle\\Controller\\ClientController::detailAction',  'id' => 1,));
        }

        // a2fSofia_user_detail
        if (0 === strpos($pathinfo, '/user/detail') && preg_match('#^/user/detail/(?P<type>[^/]++)/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'a2fSofia_user_detail')), array (  '_controller' => 'A2F\\SofiaBundle\\Controller\\UserController::detailAction',));
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'A2F\\SofiaBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
