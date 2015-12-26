<?php 
/* @var $installer Mage_Catalog_Model_Resource_Eav_Mysql4_Setup */

$installer = $this;
$installer->startSetup();

$installer->addAttribute('catalog_product', 'hot_products', array(
    'type'              => 'int', //Database type
    'backend'           => '',
    'frontend'          => '',
    'label'             => 'Hot Products',//backend_type
    'input'             => 'select',	//frontend_input
    'frontend_class'    => '',
    'source'            => 'catalog/product_status', /*- getOptionArray -*/
    'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'visible'           => true,
    'required'          => true,
    'user_defined'      => false,
    'default'           => '',
    'searchable'        => false,
    'filterable'        => false,
    'comparable'        => false,
    'visible_on_front'  => false,
    'unique'            => false,
    'sort_order'        => 18,
    /*'option'            => array (
                            'values' => 
                                array (
                                    0 => 'Yes',
                                    1 => 'No',
                                ),
                            ),
                            */
    'group'             => 'General'
));

$installer->endSetup();