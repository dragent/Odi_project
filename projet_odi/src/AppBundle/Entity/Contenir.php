<?php

namespace AppBundle\Entity;

/**
 * Contenir
 */
class Contenir
{
    /**
     * @var string
     */
    private $manyToOne;

    /**
     * @var integer
     */
    private $quantite_produit;

    /**
     * @var \DateTime
     */
    private $date_panier;


    /**
     * Set manyToOne
     *
     * @param string $manyToOne
     *
     * @return Contenir
     */
    public function setManyToOne($manyToOne)
    {
        $this->manyToOne = $manyToOne;

        return $this;
    }

    /**
     * Get manyToOne
     *
     * @return string
     */
    public function getManyToOne()
    {
        return $this->manyToOne;
    }

    /**
     * Set quantiteProduit
     *
     * @param integer $quantiteProduit
     *
     * @return Contenir
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
     * Set datePanier
     *
     * @param \DateTime $datePanier
     *
     * @return Contenir
     */
    public function setDatePanier($datePanier)
    {
        $this->date_panier = $datePanier;

        return $this;
    }

    /**
     * Get datePanier
     *
     * @return \DateTime
     */
    public function getDatePanier()
    {
        return $this->date_panier;
    }
}

