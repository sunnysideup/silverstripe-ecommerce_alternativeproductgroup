<?php
 /**
 * @author nicolaas[at]sunnysideup.co.nz
 * @package ecommerce
 * @subpackage ecommerce_alternativeproductgroup
 **/
class ProductGroupAlternative extends ProductGroup
{

    /**
     * Standard SS variable.
     */
    public static $singular_name = "Product Category Page Alternative View";
    public function i18n_singular_name()
    {
        return _t("ProductGroup.PRODUCTGROUPALTERNATIVE", "Product Category Page Alternative View");
    }

    /**
     * Standard SS variable.
     */
    public static $plural_name = "Product Category Pages Alternative View";
    public function i18n_plural_name()
    {
        return _t("ProductGroup.PRODUCTGROUPSALTERNATIVE", "Product Category Pages Alternative View");
    }


    public static $icon = "ecommerce_alternativeproductgroup/images/treeicons/ProductGroupAlternative";
}
class ProductGroupAlternative_Controller extends ProductGroup_Controller
{
    public function init()
    {
        parent::init();
        Requirements::themedCSS("ProductGroupAlternative");
    }
}
