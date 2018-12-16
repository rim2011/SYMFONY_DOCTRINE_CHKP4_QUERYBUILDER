<?php

namespace gmc\FirstBundle\Repository;

/**
 * PersonneDbRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PersonneDbRepository extends \Doctrine\ORM\EntityRepository
{
    public function getPersonByAgeInterval ($ageMin,$ageMax){
        $query= $this->createQueryBuilder('p')
                     ->where('p.age <= :agemax')
                     ->andwhere('p.age >= :agemin')
                     ->setParameters(
                         array(
                             'agemin'=>$ageMin,
                             'agemax'=>$ageMax,
                         )
                     )
                     ->getQuery();
        return $query->getResult();
    }
}
