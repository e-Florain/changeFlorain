<?php namespace Cyclos;

/**
 * Service interface for Records
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/RecordService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class RecordService extends Service {

    function __construct() {
        parent::__construct('recordService');
    }
    
    /**
     * Generates a file with the query result
     * @param format Java type: org.cyclos.model.system.exportformats.ExportFormatVO     * @param query Java type: org.cyclos.model.users.records.RecordQuery
     * @return Java type: org.cyclos.model.utils.FileInfo
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/RecordService.html#exportRecords(org.cyclos.model.system.exportformats.ExportFormatVO,%20org.cyclos.model.users.records.RecordQuery)
     */
    public function exportRecords($format, $query) {
        return $this->__run('exportRecords', array($format, $query));
    }
    
    /**
     * Returns data for details of the given entity
     * @param id Java type: java.lang.Long
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/RecordService.html#getData(java.lang.Long)
     */
    public function getData($id) {
        return $this->__run('getData', array($id));
    }
    
    /**
     * Returns data for a new entity with the given context parameters
     * @param params Java type: DP
     * @return Java type: D
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/RecordService.html#getDataForNew(DP)
     */
    public function getDataForNew($params) {
        return $this->__run('getDataForNew', array($params));
    }
    
    /**
     * Returns, for each visible record type, the count and permissions over
     * records of the given owner (either system or user)
     * @param locator Java type: org.cyclos.model.banking.accounts.InternalAccountOwner
     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/RecordService.html#getRecordTypeCount(org.cyclos.model.banking.accounts.InternalAccountOwner)
     */
    public function getRecordTypeCount($locator) {
        return $this->__run('getRecordTypeCount', array($locator));
    }
    
    /**
     * Returns data for searching records, if the given locator is null it
     * returns system record data
     * @param recordType Java type: org.cyclos.model.users.recordtypes.RecordTypeVO     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: org.cyclos.model.users.records.RecordSearchData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/RecordService.html#getSearchData(org.cyclos.model.users.recordtypes.RecordTypeVO,%20org.cyclos.model.users.users.UserLocatorVO)
     */
    public function getSearchData($recordType, $locator) {
        return $this->__run('getSearchData', array($recordType, $locator));
    }
    
    /**
     * Returns data for searching records with shared record fields

     * @return Java type: org.cyclos.model.users.records.SharedRecordFieldsSearchData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/RecordService.html#getSharedFieldsSearchData()
     */
    public function getSharedFieldsSearchData() {
        return $this->__run('getSharedFieldsSearchData', array());
    }
    
    /**
     * Returns data for listing tiled records of a given user or system
     * @param recordType Java type: org.cyclos.model.users.recordtypes.RecordTypeVO     * @param locator Java type: org.cyclos.model.users.users.UserLocatorVO
     * @return Java type: org.cyclos.model.users.records.TiledRecordsData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/RecordService.html#getTiledRecordsData(org.cyclos.model.users.recordtypes.RecordTypeVO,%20org.cyclos.model.users.users.UserLocatorVO)
     */
    public function getTiledRecordsData($recordType, $locator) {
        return $this->__run('getTiledRecordsData', array($recordType, $locator));
    }
    
    /**
     * Loads a DTO for the entity with the given id, ensuring that the logged
     * user can see the record
     * @param id Java type: java.lang.Long
     * @return Java type: DTO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/RecordService.html#load(java.lang.Long)
     */
    public function load($id) {
        return $this->__run('load', array($id));
    }
    
    /**
     * Loads a VO, by id
     * @param id Java type: java.lang.Long
     * @return Java type: org.cyclos.model.users.records.RecordVO
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/RecordService.html#loadVO(java.lang.Long)
     */
    public function loadVO($id) {
        return $this->__run('loadVO', array($id));
    }
    
    /**
     * Removes the entity associated with the given identifier
     * @param id Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/RecordService.html#remove(java.lang.Long)
     */
    public function remove($id) {
        $this->__run('remove', array($id));
    }
    
    /**
     * Removes the entities associated with the given identifiers
     * @param ids Java type: java.util.Collection
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/RecordService.html#removeAll(java.util.Collection)
     */
    public function removeAll($ids) {
        $this->__run('removeAll', array($ids));
    }
    
    /**
     * Saves the given object, returning the generated identifier
     * @param object Java type: DTO
     * @return Java type: java.lang.Long
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/RecordService.html#save(DTO)
     */
    public function save($object) {
        return $this->__run('save', array($object));
    }
    
    /**
     * Searches for records
     * @param query Java type: org.cyclos.model.users.records.RecordQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/users/RecordService.html#search(org.cyclos.model.users.records.RecordQuery)
     */
    public function search($query) {
        return $this->__run('search', array($query));
    }
    
}

?>