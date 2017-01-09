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
        'listeProduit' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ProduitController::listProduitAction',    '_format' => 'html',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/produits/liste',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'panierClient' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\CreationPanierController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/client/paniers',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'creationPanierClient' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\CreationPanierController::newPanierAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/client/paniers/creation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajoutPanierClient' => array (  0 =>   array (    0 => 'id_panier',    1 => 'ref',    2 => 'qtt',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\CreationPanierController::addToPanierAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'qtt',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'ref',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_panier',    ),    3 =>     array (      0 => 'text',      1 => '/client/paniers/ajout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'listePaniersClient' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ListePaniersController::listPaniersAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/client/paniers/liste',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contenuPanierClient' => array (  0 =>   array (    0 => 'id_panier',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ListePaniersController::viewPanierAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_panier',    ),    1 =>     array (      0 => 'text',      1 => '/client/paniers',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'suppressionPanierClient' => array (  0 =>   array (    0 => 'id_panier',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\CreationPanierController::delPanierAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_panier',    ),    1 =>     array (      0 => 'text',      1 => '/client/paniers/supprimer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'validationPanierClient' => array (  0 =>   array (    0 => 'id_panier',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\CreationPanierController::validatePanierAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_panier',    ),    1 =>     array (      0 => 'text',      1 => '/client/paniers/valider',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'listePaniersMagasinier' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\GestionPaniersMagasinierController::listPaniersAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/magasinier/paniers/liste',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gestionPanierMagasinier' => array (  0 =>   array (    0 => 'id_panier',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\GestionPaniersMagasinierController::gestionPanierAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_panier',    ),    1 =>     array (      0 => 'text',      1 => '/magasinier/paniers/gestion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gestionPanierProduitMagasinier' => array (  0 =>   array (    0 => 'id_panier',    1 => 'ref',    2 => 'qtt',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\GestionPaniersMagasinierController::gestionPanierProduitAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'qtt',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'ref',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_panier',    ),    3 =>     array (      0 => 'text',      1 => '/magasinier/paniers/gestion/produits',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gestionPanierValidationMagasinier' => array (  0 =>   array (    0 => 'id_panier',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\GestionPaniersMagasinierController::gestionPanierValiderAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id_panier',    ),    1 =>     array (      0 => 'text',      1 => '/magasinier/paniers/gestion/validation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'listeMagasinierProduit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ProduitController::listMagasinierProduitAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/magasinier/produits/liste',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'listeStocksProduit' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ProduitController::listStocksProduitAction',    '_format' => 'html',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/magasinier/produits/liste/stocks',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'listeAlerte' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/magasinier/alertes/liste',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'updateProduit' => array (  0 =>   array (    0 => 'numero',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ProduitController::updateProduitAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'numero',    ),    1 =>     array (      0 => 'text',      1 => '/magasinier/produits/update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'updateStock' => array (  0 =>   array (    0 => 'numero',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ProduitController::updateStockProduitAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'numero',    ),    1 =>     array (      0 => 'text',      1 => '/magasinier/produits/update/stocks',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajoutProduit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ProduitController::addProduitAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/magasinier/produits/ajout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'affichePersonne' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PersonneController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/personne/liste',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'montrePersonne' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PersonneController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/personne/profil',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'creationPersonne' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PersonneController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/personne/creation',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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
