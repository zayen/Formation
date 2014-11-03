<?php
namespace Application\ProductBundle\Manager;

class BaseManager
{
    /**
     * @param $entity
     */
    Protected function persistAndFlush($entity)
    {
        $this->em->persist($entity);
        $this->em->flush();
    }

}