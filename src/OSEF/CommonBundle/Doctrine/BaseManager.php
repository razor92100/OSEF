<?php
/**
 * Created by PhpStorm.
 * User: Razor
 * Date: 03/12/14
 * Time: 11:01
 */

namespace OSEF\CommonBundle\Doctrine;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;

abstract class BaseManager
{
    /**
     * @var EntityManager
     */
    protected $em;

    /**
     * @var String
     */
    protected $class;

    /**
     * @var EntityRepository
     */
    protected $repository;

    /**
     * @param EntityManager $em
     * @param $class
     */
    public function __construct(EntityManager $em, $class)
    {
        $this->em = $em;
        $this->class = $class;
        $this->repository = $em->getRepository($class);
    }

    public function refresh($entity)
    {
        $this->em->refresh($entity);
    }

    public function create($entity, $flush = true)
    {
        $this->em->persist($entity);
        if (true === $flush) {
            $this->em->flush($entity);
        }
    }

    public function update($entity)
    {
        $this->em->flush($entity);
    }

    public function delete($entity, $flush = true)
    {
        $this->em->remove($entity);
        if (true === $flush) {
            $this->em->flush($entity);
        }
    }

    public function flush($entity = null)
    {
        $this->em->flush($entity);
    }

    /**
     * @return String
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * @return EntityRepository
     */
    public function getRepository()
    {
        return $this->repository;
    }

} 