<?php

namespace Application\ProductBundle\Manager;

use Doctrine\ORM\EntityManager;
use Application\ProductBundle\Manager\BaseManager;
use Application\ProductBundle\Entity\Product;

/**
 * Class ProductManager
 * @package Application\ProductBundle\Manager
 */
class ProductManager extends BaseManager
{
    /**
     * @var EntityManager
     */
    protected $em;

    /**
     * @param EntityManager $em
     */
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    /**
     * @return mixed
     */
    public function loadProduct()
    {
        return $this->getRepository()->listProduct();
    }

    /**
     * @return \Doctrine\ORM\EntityRepository
     */
    public function getRepository()
    {
        return $this->em->getRepository('ApplicationProductBundle:Product');
    }


}