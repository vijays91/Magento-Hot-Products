<?php
class Learn_Hotproducts_Block_Hotproducts extends Mage_Core_Block_Template
{
    /*
        Get Hot Products
    */
    public function getHotproductsItems($limt = 5)
    {
        $storeID = Mage::app()->getStore()->getId();
        $product = Mage::getModel('catalog/product')->setStoreId($storeID)->getCollection();
        $product->addAttributeToSelect('*');
        $product->addAttributeToFilter(
                    'status',
                    array('eq' => Mage_Catalog_Model_Product_Status::STATUS_ENABLED)
                );
        $product->getSelect()->order('rand()');        
        $product->getSelect()->limit($limt);
        return $product;
    }
    
    public function getProductUrl($product)
    {
        if ($product instanceof Mage_Catalog_Model_Product) {
            return $product->getProductUrl();
        }
        elseif (is_numeric($product)) {
            return Mage::getModel('catalog/product')->load($product)->getProductUrl();
        }
        return false;
    }
}