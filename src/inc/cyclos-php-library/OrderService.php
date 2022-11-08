<?php namespace Cyclos;

/**
 * Service interface for web shop orders. Orders can be created via the
 * logged user's shopping cart (with status OrderStatus#SHOPPING_CART) or
 * as a new sale by the seller (with status OrderStatus#DRAFT). <br> <br>
 * Shopping carts are always for a logged user, and contains one order
 * per seller and currency. The workflow is: <ul> <li>Initially, the
 * status is OrderStatus#SHOPPING_CART when the first product is added,
 * via #addToCart. Product quantity can be modified with
 * #modifyQuantityOnCart or removed with #removeCartItem. Alternatively,
 * an entire cart can be removed with #removeCart.</li> <li>Once the cart
 * is ok, it can be checked out with the #checkout method. This will
 * change the order status to OrderStatus#PENDING_SELLER. If the delivery
 * price is known, the total order amount is reserved on the buyer's
 * account, the confirmation password (if any) is checked and the stock
 * is updated.</li> <li>If the delivery price was not known, the seller
 * will then need to fill in the delivery price and accept. In that case,
 * the order will return for buyer's confirm (the status will be set to
 * OrderStatus#PENDING_BUYER). Otherwise, if the delivery price was
 * known, the amount reservation will be returned and the actual payment
 * will be performed, and the new status will be
 * OrderStatus#COMPLETED.</li> <li>If the delivery price was previously
 * set by the seller, the buyer will need to provide the confirmation
 * password (if any) and accept. The actual payment will then be
 * performed and the stock will be updated. The final status will be
 * OrderStatus#COMPLETED.</li> </ul> <br> When a seller is creating an
 * order: <ul> <li>The order may be saved as many times as the seller
 * wants, by using the CRUDService#save method. Only orders with the
 * OrderStatus#DRAFT status can be created / modified. No deeper
 * validation is performed on draft orders. <li>When the order is ready,
 * the seller submits it for the buyer to approve, using the
 * #submitToBuyer method. At that point, the order needs the list of
 * products and the delivery address, price and time set.</li> <li>The
 * buyer selects the payment type and inputs the confirmation password
 * (if any). The stock is then updated, the payment is performed and the
 * new status will be OrderStatus#COMPLETED. </ul> <br> When the status
 * is OrderStatus#PENDING_BUYER, the buyer may reject the order, and the
 * new status will be OrderStatus#REJECTED_BY_BUYER. The same accounts
 * for OrderStatus#PENDING_SELLER and OrderStatus#REJECTED_BY_SELLER.
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/marketplace/OrderService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class OrderService extends Service {

    function __construct() {
        parent::__construct('orderService');
    }
    
    /**
     * Accepts the given order, which should be in either
     * OrderStatus#PENDING_BUYER or OrderStatus#PENDING_SELLER status, and
     * needs the delivery price to be already set. When the buyer hasn't yet
     * chosen a payment type, it is required now. Also, when no amount was
     * reserved, the confirmation password will be checked before performing
     * the actual payment.
     * @param params Java type: org.cyclos.model.marketplace.webshoporders.AcceptOrderParams
     * @return Java type: org.cyclos.model.marketplace.webshoporders.OrderStatus
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/marketplace/OrderService.html#accept(org.cyclos.model.marketplace.webshoporders.AcceptOrderParams)
     */
    public function accept($params) {
        return $this->__run('accept', array($params));
    }
    
    /**
     * Adds the given product to the logged user's shopping cart, returning
     * the total count of ads in the cart.<br> When the given quantity is
     * null, the minimum allowed quantity on the shopping cart for the given
     * product is assumed
     * @param adVO Java type: org.cyclos.model.marketplace.advertisements.BasicAdVO     * @param quantity Java type: java.math.BigDecimal
     * @return Java type: int
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/marketplace/OrderService.html#addToCart(org.cyclos.model.marketplace.advertisements.BasicAdVO,%20java.math.BigDecimal)
     */
    public function addToCart($adVO, $quantity) {
        return $this->__run('addToCart', array($adVO, $quantity));
    }
    
    /**
     * Returns the current logged user's shopping cart, adjusting all
     * quantities

     * @return Java type: org.cyclos.model.marketplace.webshoporders.ShoppingCartDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/marketplace/OrderService.html#adjustAndGetMyCart()
     */
    public function adjustAndGetMyCart() {
        return $this->__run('adjustAndGetMyCart', array());
    }
    
    /**
     * Perform adjustments to the shopping cart quantities and returns the
     * data for it
     * @param vo Java type: org.cyclos.model.marketplace.webshoporders.OrderVO
     * @return Java type: org.cyclos.model.marketplace.webshoporders.OrderData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/marketplace/OrderService.html#adjustShoppingCartAndGetData(org.cyclos.model.marketplace.webshoporders.OrderVO)
     */
    public function adjustShoppingCartAndGetData($vo) {
        return $this->__run('adjustShoppingCartAndGetData', array($vo));
    }
    
    /**
     * Checks that all items on the given cart are still on stock
     * @param seller Java type: org.cyclos.model.users.users.UserLocatorVO     * @param currency Java type: org.cyclos.model.banking.currencies.CurrencyVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/marketplace/OrderService.html#checkCartStock(org.cyclos.model.users.users.UserLocatorVO,%20org.cyclos.model.banking.currencies.CurrencyVO)
     */
    public function checkCartStock($seller, $currency) {
        $this->__run('checkCartStock', array($seller, $currency));
    }
    
    /**
     * Checks out the logged user's shopping cart with the given seller and
     * currency, checking the confirmation password (if any), and reserving
     * the amount when the delivery price is previously known (otherwise, the
     * buyer still needs to confirm before the payment is done).<br> @return
     * A result containing the order and the remaining webshop ads added to
     * the shopping cart.
     * @param dto Java type: org.cyclos.model.marketplace.webshoporders.ShoppingCartCheckoutParams
     * @return Java type: org.cyclos.model.marketplace.webshoporders.ShoppingCartCheckoutResult
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/marketplace/OrderService.html#checkout(org.cyclos.model.marketplace.webshoporders.ShoppingCartCheckoutParams)
     */
    public function checkout($dto) {
        return $this->__run('checkout', array($dto));
    }
    
    /**
     * Returns the total number of items in the logged user's shopping cart

     * @return Java type: int
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/marketplace/OrderService.html#countCartItems()
     */
    public function countCartItems() {
        return $this->__run('countCartItems', array());
    }
    
    /**
     * Exports the given order to file
     * @param format Java type: org.cyclos.model.system.exportformats.ExportFormatVO     * @param order Java type: org.cyclos.model.marketplace.webshoporders.OrderVO
     * @return Java type: org.cyclos.model.utils.FileInfo
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/marketplace/OrderService.html#exportOrder(org.cyclos.model.system.exportformats.ExportFormatVO,%20org.cyclos.model.marketplace.webshoporders.OrderVO)
     */
    public function exportOrder($format, $order) {
        return $this->__run('exportOrder', array($format, $order));
    }
    
    /**
     * Returns data for checkout the cart items of the given seller and
     * currency
     * @param seller Java type: org.cyclos.model.users.users.UserLocatorVO     * @param currency Java type: org.cyclos.model.banking.currencies.CurrencyVO
     * @return Java type: org.cyclos.model.marketplace.webshoporders.OrderData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/marketplace/OrderService.html#getCheckoutData(org.cyclos.model.users.users.UserLocatorVO,%20org.cyclos.model.banking.currencies.CurrencyVO)
     */
    public function getCheckoutData($seller, $currency) {
        return $this->__run('getCheckoutData', array($seller, $currency));
    }
    
    /**
     * Returns data for details of the given entity
     * @param id Java type: java.lang.Long
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/marketplace/OrderService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->__run('getData', array($id));
    }
    
    /**
     * Returns data for a new entity with the given context parameters
     * @param params Java type: DP
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/marketplace/OrderService.html#getDataForNew(DP)
     */
    public function getDataForNew($params) {
        return $this->__run('getDataForNew', array($params));
    }
    
    /**
     * Returns the current logged user's shopping cart, without adjusting any
     * quantity

     * @return Java type: org.cyclos.model.marketplace.webshoporders.ShoppingCartDTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/marketplace/OrderService.html#getMyCart()
     */
    public function getMyCart() {
        return $this->__run('getMyCart', array());
    }
    
    /**
     * Returns data of an order
     * @param vo Java type: org.cyclos.model.marketplace.webshoporders.OrderVO
     * @return Java type: org.cyclos.model.marketplace.webshoporders.OrderData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/marketplace/OrderService.html#getOrderData(org.cyclos.model.marketplace.webshoporders.OrderVO)
     */
    public function getOrderData($vo) {
        return $this->__run('getOrderData', array($vo));
    }
    
    /**
     * Return the id of the given order only if the logged user can see the
     * order.
     * @param order Java type: org.cyclos.model.marketplace.webshoporders.OrderVO
     * @return Java type: long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/marketplace/OrderService.html#getOrderId(org.cyclos.model.marketplace.webshoporders.OrderVO)
     */
    public function getOrderId($order) {
        return $this->__run('getOrderId', array($order));
    }
    
    /**
     * Returns data for searching orders / sales
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO     * @param sales Java type: boolean
     * @return Java type: org.cyclos.model.marketplace.webshoporders.OrderSearchData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/marketplace/OrderService.html#getSearchData(org.cyclos.model.users.users.UserLocatorVO,%20boolean)
     */
    public function getSearchData($locator, $sales) {
        return $this->__run('getSearchData', array($locator, $sales));
    }
    
    /**
     * Loads a DTO for the entity with the given id, ensuring that the logged
     * user can see the record
     * @param id Java type: java.lang.Long
     * @return Java type: DTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/marketplace/OrderService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->__run('load', array($id));
    }
    
    /**
     * Updates the quantity for the given product on the logged user's
     * shopping cart returning the total count of ads in the cart.
     * @param adVO Java type: org.cyclos.model.marketplace.advertisements.BasicAdVO     * @param quantity Java type: java.math.BigDecimal
     * @return Java type: int
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/marketplace/OrderService.html#modifyQuantityOnCart(org.cyclos.model.marketplace.advertisements.BasicAdVO,%20java.math.BigDecimal)
     */
    public function modifyQuantityOnCart($adVO, $quantity) {
        return $this->__run('modifyQuantityOnCart', array($adVO, $quantity));
    }
    
    /**
     * Rejects the given order
     * @param params Java type: org.cyclos.model.marketplace.webshoporders.RejectOrderParams
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/marketplace/OrderService.html#reject(org.cyclos.model.marketplace.webshoporders.RejectOrderParams)
     */
    public function reject($params) {
        $this->__run('reject', array($params));
    }
    
    /**
     * Removes the entity associated with the given identifier
     * @param id Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/marketplace/OrderService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->__run('remove', array($id));
    }
    
    /**
     * Removes the entities associated with the given identifiers
     * @param ids Java type: java.util.Collection
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/marketplace/OrderService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->__run('removeAll', array($ids));
    }
    
    /**
     * Removes the logged user's shopping cart for the given seller and
     * currency returning the remaining count of ads in the cart
     * @param seller Java type: org.cyclos.model.users.users.UserLocatorVO     * @param currency Java type: org.cyclos.model.banking.currencies.CurrencyVO
     * @return Java type: int
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/marketplace/OrderService.html#removeCart(org.cyclos.model.users.users.UserLocatorVO,%20org.cyclos.model.banking.currencies.CurrencyVO)
     */
    public function removeCart($seller, $currency) {
        return $this->__run('removeCart', array($seller, $currency));
    }
    
    /**
     * Same as #remove but returning the total count of items present the
     * whole shopping cart
     * @param id Java type: java.lang.Long
     * @return Java type: int
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/marketplace/OrderService.html#removeCartById(java.lang.Long)
     */
    public function removeCartById($id) {
        return $this->__run('removeCartById', array($id));
    }
    
    /**
     * Removes the given product from the logged user's shopping cart
     * returning the remaining count of ads in the cart.
     * @param adVO Java type: org.cyclos.model.marketplace.advertisements.BasicAdVO
     * @return Java type: int
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/marketplace/OrderService.html#removeCartItem(org.cyclos.model.marketplace.advertisements.BasicAdVO)
     */
    public function removeCartItem($adVO) {
        return $this->__run('removeCartItem', array($adVO));
    }
    
    /**
     * Saves the given object, returning the generated identifier
     * @param object Java type: DTO
     * @return Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/marketplace/OrderService.html#save(DTO)
     */
    public function save($object) {
        return $this->__run('save', array($object));
    }
    
    /**
     * Searches for orders based on OrderQuery
     * @param query Java type: org.cyclos.model.marketplace.webshoporders.OrderQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/marketplace/OrderService.html#search(org.cyclos.model.marketplace.webshoporders.OrderQuery)
     */
    public function search($query) {
        return $this->__run('search', array($query));
    }
    
    /**
     * Updates the delivery method information of an order when it is on the
     * OrderStatus#PENDING_SELLER status and there is no delivery information
     * yet. Afterwards, the new status will be OrderStatus#PENDING_BUYER for
     * final approval.
     * @param params Java type: org.cyclos.model.marketplace.webshoporders.SetDeliveryMethodParams
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/marketplace/OrderService.html#setDeliveryMethod(org.cyclos.model.marketplace.webshoporders.SetDeliveryMethodParams)
     */
    public function setDeliveryMethod($params) {
        $this->__run('setDeliveryMethod', array($params));
    }
    
    /**
     * Submits the given order for buyer approval
     * @param order Java type: org.cyclos.model.marketplace.webshoporders.OrderDTO
     * @return Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/marketplace/OrderService.html#submitToBuyer(org.cyclos.model.marketplace.webshoporders.OrderDTO)
     */
    public function submitToBuyer($order) {
        return $this->__run('submitToBuyer', array($order));
    }
    
}

?>