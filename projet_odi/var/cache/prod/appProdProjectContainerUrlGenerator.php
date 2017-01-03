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
        'listProduit' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ProduitController::listProduitAction',    '_format' => 'html',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/produits/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'panier_client' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\CreationPanierController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/client/panier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'creation_panier_client' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\CreationPanierController::newPanierAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/client/creation_panier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajout_dans_panier_client' => array (  0 =>   array (    0 => 'id_panier',    1 => 'ref',    2 => 'qtt',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\CreationPanierController::addToPanierAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'qtt',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'ref',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_panier',    ),    3 =>     array (      0 => 'text',      1 => '/client/ajout_panier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'liste_paniers_client' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ListePaniersController::listPaniersAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/client/liste_paniers',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contenu_panier_client' => array (  0 =>   array (    0 => 'id_panier',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ListePaniersController::viewPanierAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_panier',    ),    1 =>     array (      0 => 'text',      1 => '/client/panier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'delete_panier_client' => array (  0 =>   array (    0 => 'id_panier',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\CreationPanierController::delPanierAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_panier',    ),    1 =>     array (      0 => 'text',      1 => '/client/delete_panier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'validate_panier_client' => array (  0 =>   array (    0 => 'id_panier',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\CreationPanierController::validatePanierAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_panier',    ),    1 =>     array (      0 => 'text',      1 => '/client/validate_panier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'liste_paniers_magasinier' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\GestionPaniersMagasinierController::listPaniersAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/magasinier/liste_paniers',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gestion_panier_magasinier' => array (  0 =>   array (    0 => 'id_panier',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\GestionPaniersMagasinierController::gestionPanierAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_panier',    ),    1 =>     array (      0 => 'text',      1 => '/magasinier/gestion_panier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gestion_panier_produit_magasinier' => array (  0 =>   array (    0 => 'id_panier',    1 => 'ref',    2 => 'qtt',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\GestionPaniersMagasinierController::gestionPanierProduitAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'qtt',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'ref',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_panier',    ),    3 =>     array (      0 => 'text',      1 => '/magasinier/produit_gestion_panier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gestion_panier_valider_magasinier' => array (  0 =>   array (    0 => 'id_panier',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\GestionPaniersMagasinierController::gestionPanierValiderAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_panier',    ),    1 =>     array (      0 => 'text',      1 => '/magasinier/valider_gestion_panier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'listMagasinierProduit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ProduitController::listMagasinierProduitAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/magasinier/produits/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'listStockProduit' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ProduitController::listStocksProduitAction',    '_format' => 'html',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/magasinier/produits/list/stock',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'listAlerte' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/magasinier/alertes/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'updateProduit' => array (  0 =>   array (    0 => 'numero',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ProduitController::updateProduitAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'numero',    ),    1 =>     array (      0 => 'text',      1 => '/magasinier/produits/update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'updateStock' => array (  0 =>   array (    0 => 'numero',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ProduitController::updateStockProduitAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'numero',    ),    1 =>     array (      0 => 'text',      1 => '/magasinier/produits/update/stock',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajoutProduit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ProduitController::addProduitAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/magasinier/produits/ajout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'affichePersonne' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PersonneController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/personne/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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
