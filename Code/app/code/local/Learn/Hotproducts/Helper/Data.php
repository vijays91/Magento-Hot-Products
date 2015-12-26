<?php
class Learn_Hotproducts_Helper_Data extends Mage_Core_Helper_Abstract
{
    const XML_PATH_HOT_PROD_ENABLE     = 'hotproducts_tab/hotproducts_setting/hotproducts_active';
    const XML_PATH_HOT_PROD_POSITION   = 'hotproducts_tab/hotproducts_setting/hotproducts_position';
    const XML_PATH_HOT_PROD_TITLE      = 'hotproducts_tab/hotproducts_setting/hotproducts_title';
    const XML_PATH_HOT_PROD_DISPLAY_COUNT = 'hotproducts_tab/hotproducts_setting/hotproducts_display_count';
    
	
	public function conf($code, $store = null) {
        return Mage::getStoreConfig($code, $store);
    }
	
	public function hotproducts_enable($store) {
		return $this->conf(self::XML_PATH_HOT_PROD_ENABLE, $store);
	}
    
	public function hotproducts_position($store) {
		return $this->conf(self::XML_PATH_HOT_PROD_POSITION, $store);
	}
    
    public function hotproducts_title() {
		return $this->conf(self::XML_PATH_HOT_PROD_TITLE, $store);
	}
        
    public function hotproducts_display_count() {
		return $this->conf(self::XML_PATH_HOT_PROD_DISPLAY_COUNT, $store);
	}
    
	public function postion_left() {
		if(self::hotproducts_enable() == 1 && self::hotproducts_position() == 1) {
			return "hotproducts/hotproducts.phtml";
		}
		return false;
	}
    
	public function postion_right() {
		if(self::hotproducts_enable() == 1 && self::hotproducts_position() == 2) {
			return "hotproducts/hotproducts.phtml";
		}
		return false;
	}
	
}