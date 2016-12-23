<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // listProduit
        if (0 === strpos($pathinfo, '/list') && preg_match('#^/list(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'listProduit')), array (  '_controller' => 'AppBundle\\Controller\\ProduitController::listProduitAction',  '_format' => 'html',));
        }

        if (0 === strpos($pathinfo, '/personne')) {
            // affichePersonne
            if ($pathinfo === '/personne') {
                return array (  '_controller' => 'AppBundle\\Controller\\PersonneController::indexAction',  '_route' => 'affichePersonne',);
            }

            // montrePersonne
            if ($pathinfo === '/personne/show') {
                return array (  '_controller' => 'AppBundle\\Controller\\PersonneController::showAction',  '_route' => 'montrePersonne',);
            }

            // personne_new
            if ($pathinfo === '/personne/new') {
                return array (  '_controller' => 'AppBundle\\Controller\\PersonneController::newAction',  '_route' => 'personne_new',);
            }

        }

        // identification
        if ($pathinfo === '/identification') {
            return array (  '_controller' => 'AppBundle\\Controller\\PersonneController::identificationAction',  '_route' => 'identification',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
