<?php

namespace HeticBundle\Repository;

/**
 * StudentRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class StudentRepository extends \Doctrine\ORM\EntityRepository
{
    public function findAllStudentByDate ()
    {
        return $this->getEntityManager()->createQuery('SELECT s FROM HeticBundle:Student s ORDER BY s.dateOfBirth DESC')->getResult();
    }
}
