<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdDebugProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'listProduit' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ProduitController::listProduitAction',    '_format' => 'html',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'affichePersonne' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PersonneController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/personne',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'montrePersonne' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PersonneController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/personne/show',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'personne_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PersonneController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/personne/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'identification' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PersonneController::identificationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/identification',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
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
