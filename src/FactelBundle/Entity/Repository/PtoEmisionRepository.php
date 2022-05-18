<?php

namespace FactelBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * PtoEmisionRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PtoEmisionRepository extends EntityRepository {

    public function findPtosEmision() {
        $em = $this->getEntityManager();
        $qb = $em->createQueryBuilder();
        $qb->select("pto,estab.nombre, emisor.razonSocial")
                ->from("FactelBundle:PtoEmision", "pto")
                ->join('pto.establecimiento', 'estab')
                ->join('estab.emisor', 'emisor');

        return $qb->getQuery()->getResult();
    }

    public function findPtosEmisionEmisor($emisorId) {
        $em = $this->getEntityManager();
        $qb = $em->createQueryBuilder();
        $qb->select("pto,estab.nombre, emisor.razonSocial")
                ->from("FactelBundle:PtoEmision", "pto")
                ->join('pto.establecimiento', 'estab')
                ->join('estab.emisor', 'emisor')
                ->where('emisor.id = :emisorId')
                ->setParameter('emisorId', $emisorId);

        return $qb->getQuery()->getResult();
    }

    public function findPtoEmisionEstabEmisorByUsuario($usuarioId) {
        $em = $this->getEntityManager();
        $qb = $em->createQueryBuilder();
        $qb->select("pto,estab, emisor")
                ->from("FactelBundle:PtoEmision", "pto")
                ->join('pto.establecimiento', 'estab')
                ->join('estab.emisor', 'emisor')
                ->join("pto.usuario", "usuario")
                ->where('usuario.id = :usuarioId')
                ->setParameter('usuarioId', $usuarioId);
        return $qb->getQuery()->getResult();
    }

    public function findIdPtoEmisionByUsuario($usuarioId) {
        $em = $this->getEntityManager();
        $qb = $em->createQueryBuilder();
        $qb->select("pto.id")
                ->from("FactelBundle:PtoEmision", "pto")
                ->join("pto.usuario", "usuario")
                ->where('usuario.id = :usuarioId')
                ->setParameter('usuarioId', $usuarioId);
        try {
            return $qb->getQuery()->getSingleScalarResult();
        } catch (\Doctrine\ORM\NoResultException $e) {
            return 0;
        }
    }

}
