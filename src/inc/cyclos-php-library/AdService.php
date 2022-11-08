<?php namespace Cyclos;

/**
 * Service interface for advertisements
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/marketplace/AdService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class AdService extends Service {

    function __construct() {
        parent::__construct('productsAndServices');
    }
    
    /**
     * Approves the publication of an advertisement in status
     * AdStatus#PENDING. The new status will be AdStatus#ACTIVE.
     * @param adVO Java type: org.cyclos.model.marketplace.advertisements.BasicAdVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/marketplace/AdService.html#approve(org.cyclos.model.marketplace.advertisements.BasicAdVO)
     */
    public function approve($adVO) {
        $this->__run('approve', array($adVO));
    }
    
    /**
     * Exports the given advertisement to file
     * @param format Java type: org.cyclos.model.system.exportformats.ExportFormatVO     * @param adVO Java type: org.cyclos.model.marketplace.advertisements.BasicAdVO
     * @return Java type: org.cyclos.model.utils.FileInfo
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/marketplace/AdService.html#exportAd(org.cyclos.model.system.exportformats.ExportFormatVO,%20org.cyclos.model.marketplace.advertisements.BasicAdVO)
     */
    public function exportAd($format, $adVO) {
        return $this->__run('exportAd', array($format, $adVO));
    }
    
    /**
     * Returns data for searching advertisements
     * @param type Java type: org.cyclos.model.marketplace.advertisements.AdType     * @param overBrokeredUsers Java type: boolean
     * @return Java type: org.cyclos.model.marketplace.advertisements.AdSearchData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/marketplace/AdService.html#getAdSearchData(org.cyclos.model.marketplace.advertisements.AdType,%20boolean)
     */
    public function getAdSearchData($type, $overBrokeredUsers) {
        return $this->__run('getAdSearchData', array($type, $overBrokeredUsers));
    }
    
    /**
     * Returns data for details of the given entity
     * @param id Java type: java.lang.Long
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/marketplace/AdService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->__run('getData', array($id));
    }
    
    /**
     * Returns data for a new entity with the given context parameters
     * @param params Java type: DP
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/marketplace/AdService.html#getDataForNew(DP)
     */
    public function getDataForNew($params) {
        return $this->__run('getDataForNew', array($params));
    }
    
    /**
     * Returns data for searching advertisements
     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO     * @param type Java type: org.cyclos.model.marketplace.advertisements.AdType
     * @return Java type: org.cyclos.model.marketplace.advertisements.UserAdsSearchData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/marketplace/AdService.html#getUserAdsSearchData(org.cyclos.model.users.users.UserLocatorVO,%20org.cyclos.model.marketplace.advertisements.AdType)
     */
    public function getUserAdsSearchData($locator, $type) {
        return $this->__run('getUserAdsSearchData', array($locator, $type));
    }
    
    /**
     * Returns data for viewing details of an advertisement
     * @param adVO Java type: org.cyclos.model.marketplace.advertisements.BasicAdVO
     * @return Java type: org.cyclos.model.marketplace.advertisements.AdViewData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/marketplace/AdService.html#getViewData(org.cyclos.model.marketplace.advertisements.BasicAdVO)
     */
    public function getViewData($adVO) {
        return $this->__run('getViewData', array($adVO));
    }
    
    /**
     * Loads a DTO for the entity with the given id, ensuring that the logged
     * user can see the record
     * @param id Java type: java.lang.Long
     * @return Java type: DTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/marketplace/AdService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->__run('load', array($id));
    }
    
    /**
     * Loads a VO, by id
     * @param adVO Java type: org.cyclos.model.marketplace.advertisements.BasicAdVO
     * @return Java type: org.cyclos.model.marketplace.advertisements.BasicAdVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/marketplace/AdService.html#loadVO(org.cyclos.model.marketplace.advertisements.BasicAdVO)
     */
    public function loadVO($adVO) {
        return $this->__run('loadVO', array($adVO));
    }
    
    /**
     * Rejects the publication of an advertisement in status
     * AdStatus#PENDING. The new status will be AdStatus#DRAFT.
     * @param adVO Java type: org.cyclos.model.marketplace.advertisements.BasicAdVO     * @param comments Java type: java.lang.String
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/marketplace/AdService.html#reject(org.cyclos.model.marketplace.advertisements.BasicAdVO,%20java.lang.String)
     */
    public function reject($adVO, $comments) {
        $this->__run('reject', array($adVO, $comments));
    }
    
    /**
     * Removes the entity associated with the given identifier
     * @param id Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/marketplace/AdService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->__run('remove', array($id));
    }
    
    /**
     * Removes the entities associated with the given identifiers
     * @param ids Java type: java.util.Collection
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/marketplace/AdService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->__run('removeAll', array($ids));
    }
    
    /**
     * Saves the given object, returning the generated identifier
     * @param object Java type: DTO
     * @return Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/marketplace/AdService.html#save(DTO)
     */
    public function save($object) {
        return $this->__run('save', array($object));
    }
    
    /**
     * Searches for advertisements, according to the given query parameters
     * @param params Java type: org.cyclos.model.marketplace.advertisements.BasicAdQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/marketplace/AdService.html#search(org.cyclos.model.marketplace.advertisements.BasicAdQuery)
     */
    public function search($params) {
        return $this->__run('search', array($params));
    }
    
    /**
     * Sets the ad back to draft status.
     * @param adVO Java type: org.cyclos.model.marketplace.advertisements.BasicAdVO     * @param comments Java type: java.lang.String
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/marketplace/AdService.html#setAsDraft(org.cyclos.model.marketplace.advertisements.BasicAdVO,%20java.lang.String)
     */
    public function setAsDraft($adVO, $comments) {
        $this->__run('setAsDraft', array($adVO, $comments));
    }
    
    /**
     * Hides or unhides the ad according to given hidden parameter.
     * @param adVO Java type: org.cyclos.model.marketplace.advertisements.BasicAdVO     * @param hidden Java type: boolean
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/marketplace/AdService.html#setHidden(org.cyclos.model.marketplace.advertisements.BasicAdVO,%20boolean)
     */
    public function setHidden($adVO, $hidden) {
        $this->__run('setHidden', array($adVO, $hidden));
    }
    
    /**
     * Submits the given ad for authorization. Only available if the logged
     * user can manage the given ad and in case it isn't the owner it can't
     * manage pending ads. NOTE: The main web doesn't use this method instead
     * it saves the ad with the AdStatus#PENDING status. This is used only by
     * the REST services but we should refactor the marketplace module too to
     * use actions instead of save the ad each time the status changes.
     * @param adVO Java type: org.cyclos.model.marketplace.advertisements.BasicAdVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/marketplace/AdService.html#submitForAuthorization(org.cyclos.model.marketplace.advertisements.BasicAdVO)
     */
    public function submitForAuthorization($adVO) {
        $this->__run('submitForAuthorization', array($adVO));
    }
    
}

?>