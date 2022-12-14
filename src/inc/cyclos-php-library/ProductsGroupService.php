<?php namespace Cyclos;

/**
 * Service used to view / manage products assigned to a group / group set
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/ProductsGroupService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class ProductsGroupService extends Service {

    function __construct() {
        parent::__construct('productsGroupService');
    }
    
    /**
     * Assigns the given product to the product owner.
     * @param product Java type: org.cyclos.model.users.products.ProductVO     * @param owner Java type: VO
     * @return Java type: boolean
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/ProductsGroupService.html#assign(org.cyclos.model.users.products.ProductVO,%20VO)
     */
    public function assign($product, $owner) {
        return $this->__run('assign', array($product, $owner));
    }
    
    /**
     * Returns the ActiveProductsData, containing all the actual product data
     * for the user/group with the given id and the specified channel (if
     * null then it doesn't filter the products by channel) and principal
     * type (if null then it doesn't filter the products by principal type).
     * @param owner Java type: VO     * @param channel Java type: org.cyclos.model.access.channels.ChannelVO     * @param principalType Java type: org.cyclos.model.access.principaltypes.PrincipalTypeVO
     * @return Java type: org.cyclos.model.users.products.ActiveProductsData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/ProductsGroupService.html#getActiveProducts(VO,%20org.cyclos.model.access.channels.ChannelVO,%20org.cyclos.model.access.principaltypes.PrincipalTypeVO)
     */
    public function getActiveProducts($owner, $channel, $principalType) {
        return $this->__run('getActiveProducts', array($owner, $channel, $principalType));
    }
    
    /**
     * Returns the data used to view / manage an owner's individual products
     * @param ownerVO Java type: VO
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/ProductsGroupService.html#getData(VO)
     */
    public function getData($ownerVO) {
        return $this->__run('getData', array($ownerVO));
    }
    
    /**
     * Returns the log for the individually assigned products to the given
     * user.
     * @param owner Java type: VO
     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/ProductsGroupService.html#getLogs(VO)
     */
    public function getLogs($owner) {
        return $this->__run('getLogs', array($owner));
    }
    
    /**
     * Unassigns the given product from the owner
     * @param product Java type: org.cyclos.model.users.products.ProductVO     * @param ownerId Java type: VO
     * @return Java type: boolean
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/ProductsGroupService.html#unassign(org.cyclos.model.users.products.ProductVO,%20VO)
     */
    public function unassign($product, $ownerId) {
        return $this->__run('unassign', array($product, $ownerId));
    }
    
}

?>