<?php

namespace AppBundle\Repository;

/**
 * PersonneRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PersonneRepository extends \Doctrine\ORM\EntityRepository
{
	public function findList(){
        
        $orderby = array('ref_produit' => 'ASC');
        
        return $this->findBy(array(), $orderby);
    }
}
