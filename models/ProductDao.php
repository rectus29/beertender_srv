<?php

namespace BeerTender\models\dao;
/*-----------------------------------------------------*/
/*      _____           _               ___   ___      */
/*     |  __ \         | |             |__ \ / _ \     */
/*     | |__) |___  ___| |_ _   _ ___     ) | (_) |    */
/*     |  _  // _ \/ __| __| | | / __|   / / \__, |    */
/*     | | \ \  __/ (__| |_| |_| \__ \  / /_   / /     */
/*     |_|  \_\___|\___|\__|\__,_|___/ |____| /_/      */
/*                                                     */
/*                Date: 29/09/2015 10:55               */
/*                 All right reserved                  */
/*-----------------------------------------------------*/

use BeerTender\model\Product;
use Doctrine\Common\Collections\Criteria;

class ProductDao extends GenericDao {

    /**
     * @inheritdoc
     * @param $product
     */
    public function __construct($em) {
        parent::__construct($em);
    }

    /**
     * @inheritdoc
     * @param $product
     * @return Product
     */
    public function getByPrimaryKey($id) {
        return parent::findByPrimaryKey(Product::class, $id);
    }

    /**
     * @inheritdoc
     * @param $product
     */
    public function save($product) {
        parent::save($product);
    }

    /**
     * @inheritdoc
     * @param $product
     */
    public function delete($product) {
        parent::delete($product);
    }

    /**
     * Find All Product
     * @return Product[]
     */
    public function getAll() {
        return parent::findAll(Product::class);
    }

    /**
     * find Product by productCategory
     * @param $productCategList[] the list of categ to find
     * @return Product[]
     */
    public function getProductByProductCateg($productCategList) {
        $out = [];
        if ($productCategList != null) {
            $qb = $this->entityManager->createQueryBuilder();
            $qb->addCriteria($criteria = Criteria::create());
            $criteria->where(Criteria::expr()->in('productCategory', $productCategList));
            $out = $qb->getResult();
        }
        return $out;
    }
}