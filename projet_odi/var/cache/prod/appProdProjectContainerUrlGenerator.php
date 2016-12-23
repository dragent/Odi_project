<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
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
        'liste_produits' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ListeProduitsController::listAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/produits/liste_produits',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'panier_client' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\CreationPanierController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/client/panier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'creation_panier_client' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\CreationPanierController::newPanierAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/client/creation_panier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajout_dans_panier_client' => array (  0 =>   array (    0 => 'id_panier',    1 => 'ref',    2 => 'qtt',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\CreationPanierController::addToPanierAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'qtt',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'ref',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_panier',    ),    3 =>     array (      0 => 'text',      1 => '/client/ajout_panier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'liste_paniers_client' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ListePaniersController::listPaniersAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/client/liste_paniers',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contenu_panier_client' => array (  0 =>   array (    0 => 'id_panier',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ListePaniersController::viewPanierAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_panier',    ),    1 =>     array (      0 => 'text',      1 => '/client/panier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'delete_panier_client' => array (  0 =>   array (    0 => 'id_panier',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\CreationPanierController::delPanierAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_panier',    ),    1 =>     array (      0 => 'text',      1 => '/client/delete_panier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'validate_panier_client' => array (  0 =>   array (    0 => 'id_panier',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\CreationPanierController::validatePanierAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_panier',    ),    1 =>     array (      0 => 'text',      1 => '/client/validate_panier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'liste_paniers_magasinier' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\GestionPaniersMagasinierController::listPaniersAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/magasinier/liste_paniers',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gestion_panier_magasinier' => array (  0 =>   array (    0 => 'id_panier',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\GestionPaniersMagasinierController::gestionPanierAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_panier',    ),    1 =>     array (      0 => 'text',      1 => '/magasinier/gestion_panier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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
