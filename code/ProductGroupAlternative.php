<?php
 /**
 * @author nicolaas[at]sunnysideup.co.nz
 * @package ecommerce
 * @subpackage ecommerce_alternativeproductgroup
 **/
class ProductGroupAlternative extends ProductGroup {

	static $icon = "ecommerce_alternativeproductgroup/images/treeicons/ProductGroupAlternative";

	static $add_action = 'alternative products overview';


}
class ProductGroupAlternative_Controller extends ProductGroup_Controller {

	function init() {
		parent::init();
		Requirements::themedCSS("ProductGroupAlternative");
	}

}
