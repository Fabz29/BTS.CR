<?php

namespace CR\GSBRBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * typePraticienRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class typePraticienRepository extends EntityRepository {

    public function findAll() {
        return $this->findBy(array(), array('libelleType' => 'ASC'));
    }

}