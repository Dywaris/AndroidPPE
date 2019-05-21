<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        // epsi_first_homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'epsi_first_homepage');
            }

            return array (  '_controller' => 'Epsi\\FirstBundle\\Controller\\DefaultController::indexAction',  '_route' => 'epsi_first_homepage',);
        }

        // epsi_first_utilisateur
        if ('/utilisateur' === $pathinfo) {
            return array (  '_controller' => 'Epsi\\FirstBundle\\Controller\\UtilisateurController::utilisateurAction',  '_route' => 'epsi_first_utilisateur',);
        }

        // epsi_first_theme
        if ('/theme' === $pathinfo) {
            return array (  '_controller' => 'Epsi\\FirstBundle\\Controller\\ThemeController::themeAction',  '_route' => 'epsi_first_theme',);
        }

        // epsi_first_entreprise
        if ('/entreprise' === $pathinfo) {
            return array (  '_controller' => 'Epsi\\FirstBundle\\Controller\\EntrepriseController::entrepriseAction',  '_route' => 'epsi_first_entreprise',);
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
