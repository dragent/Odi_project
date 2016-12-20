<?php

namespace AppBundle\Entity;

/**
 * Produit
 */
class Produit
{
    /**
     * @var string
     */
    private $ref_produit;

    /**
     * @var string
     */
    private $nom_produit;

    /**
     * @var string
     */
    private $description_produit;

    /**
     * @var string
     */
    private $categorie_produit;

    /**
     * @var integer
     */
    private $quantite_produit;

    /**
     * @var integer
     */
    private $quantite_min_produit;

    /**
     * @var integer
     */
    private $prix_produit;

    /**
     * @var \DateTime
     */
    private $date_peremption_prduit;

    /**
     * @var string
     */
    private $photo_produit;

    /**
     * @var boolean
     */
    private $visible_produit;


    /**
     * Set refProduit
     *
     * @param string $refProduit
     *
     * @return Produit
     */
    public function setRefProduit($refProduit)
    {
        $this->ref_produit = $refProduit;

        return $this;
    }

    /**
     * Get refProduit
     *
     * @return string
     */
    public function getRefProduit()
    {
        return $this->ref_produit;
    }

    /**
     * Set nomProduit
     *
     * @param string $nomProduit
     *
     * @return Produit
     */
    public function setNomProduit($nomProduit)
    {
        $this->nom_produit = $nomProduit;

        return $this;
    }

    /**
     * Get nomProduit
     *
     * @return string
     */
    public function getNomProduit()
    {
        return $this->nom_produit;
    }

    /**
     * Set descriptionProduit
     *
     * @param string $descriptionProduit
     *
     * @return Produit
     */
    public function setDescriptionProduit($descriptionProduit)
    {
        $this->description_produit = $descriptionProduit;

        return $this;
    }

    /**
     * Get descriptionProduit
     *
     * @return string
     */
    public function getDescriptionProduit()
    {
        return $this->description_produit;
    }

    /**
     * Set categorieProduit
     *
     * @param string $categorieProduit
     *
     * @return Produit
     */
    public function setCategorieProduit($categorieProduit)
    {
        $this->categorie_produit = $categorieProduit;

        return $this;
    }

    /**
     * Get categorieProduit
     *
     * @return string
     */
    public function getCategorieProduit()
    {
        return $this->categorie_produit;
    }

    /**
     * Set quantiteProduit
     *
     * @param integer $quantiteProduit
     *
     * @return Produit
     */
    public function setQuantiteProduit($quantiteProduit)
    {
        $this->quantite_produit = $quantiteProduit;

        return $this;
    }

    /**
     * Get quantiteProduit
     *
     * @return integer
     */
    public function getQuantiteProduit()
    {
        return $this->quantite_produit;
    }

    /**
     * Set quantiteMinProduit
     *
     * @param integer $quantiteMinProduit
     *
     * @return Produit
     */
    public function setQuantiteMinProduit($quantiteMinProduit)
    {
        $this->quantite_min_produit = $quantiteMinProduit;

        return $this;
    }

    /**
     * Get quantiteMinProduit
     *
     * @return integer
     */
    public function getQuantiteMinProduit()
    {
        return $this->quantite_min_produit;
    }

    /**
     * Set prixProduit
     *
     * @param integer $prixProduit
     *
     * @return Produit
     */
    public function setPrixProduit($prixProduit)
    {
        $this->prix_produit = $prixProduit;

        return $this;
    }

    /**
     * Get prixProduit
     *
     * @return integer
     */
    public function getPrixProduit()
    {
        return $this->prix_produit;
    }

    /**
     * Set datePeremptionPrduit
     *
     * @param \DateTime $datePeremptionPrduit
     *
     * @return Produit
     */
    public function setDatePeremptionPrduit($datePeremptionPrduit)
    {
        $this->date_peremption_prduit = $datePeremptionPrduit;

        return $this;
    }

    /**
     * Get datePeremptionPrduit
     *
     * @return \DateTime
     */
    public function getDatePeremptionPrduit()
    {
        return $this->date_peremption_prduit;
    }

    /**
     * Set photoProduit
     *
     * @param string $photoProduit
     *
     * @return Produit
     */
    public function setPhotoProduit($photoProduit)
    {
        $this->photo_produit = $photoProduit;

        return $this;
    }

    /**
     * Get photoProduit
     *
     * @return string
     */
    public function getPhotoProduit()
    {
        return $this->photo_produit;
    }

    /**
     * Set visibleProduit
     *
     * @param boolean $visibleProduit
     *
     * @return Produit
     */
    public function setVisibleProduit($visibleProduit)
    {
        $this->visible_produit = $visibleProduit;

        return $this;
    }

    /**
     * Get visibleProduit
     *
     * @return boolean
     */
    public function getVisibleProduit()
    {
        return $this->visible_produit;
    }
}

