<?php namespace Cyclos;

/**
 * System monitor/status service. Only available for global admins in
 * global mode
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/SystemMonitorService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class SystemMonitorService extends Service {

    function __construct() {
        parent::__construct('systemMonitorService');
    }
    
    /**
     * Generates a PDF report containing the whole system information:
     * general information, recurring tasks, background tasks, database
     * upgrades, etc.

     * @return Java type: org.cyclos.model.system.monitor.SystemMonitorExportResult
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/SystemMonitorService.html#export()
     */
    public function export() {
        return $this->__run('export', array());
    }
    
    /**
     * Returns general information about Cyclos.
     * @param clusterMembers Java type: java.util.List
     * @return Java type: org.cyclos.model.system.monitor.SystemInformationData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/SystemMonitorService.html#getSystemInformation(java.util.List)
     */
    public function getSystemInformation($clusterMembers) {
        return $this->__run('getSystemInformation', array($clusterMembers));
    }
    
    /**
     * Lists all background tasks applying the given filter
     * @param query Java type: org.cyclos.model.system.monitor.BackgroundTaskQuery
     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/SystemMonitorService.html#listBackgroundTasks(org.cyclos.model.system.monitor.BackgroundTaskQuery)
     */
    public function listBackgroundTasks($query) {
        return $this->__run('listBackgroundTasks', array($query));
    }
    
    /**
     * Lists all polling tasks but applying the given filter
     * @param query Java type: org.cyclos.model.system.monitor.PollingTaskQuery
     * @return Java type: java.util.List
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/SystemMonitorService.html#listPollingTasks(org.cyclos.model.system.monitor.PollingTaskQuery)
     */
    public function listPollingTasks($query) {
        return $this->__run('listPollingTasks', array($query));
    }
    
    /**
     * Schedules a rebuild of the all closed account balances.

     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/SystemMonitorService.html#rebuildClosedAccountBalances()
     */
    public function rebuildClosedAccountBalances() {
        $this->__run('rebuildClosedAccountBalances', array());
    }
    
    /**
     * Schedules a new execution to run as soon as possible for the given
     * task
     * @param taskType Java type: java.lang.String
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/SystemMonitorService.html#scheduleExecution(java.lang.String)
     */
    public function scheduleExecution($taskType) {
        $this->__run('scheduleExecution', array($taskType));
    }
    
    /**
     * Searches for the the database upgrades that were applied.
     * @param query Java type: org.cyclos.model.system.monitor.DatabaseUpgradeQuery
     * @return Java type: org.cyclos.utils.Page
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/SystemMonitorService.html#searchDatabaseHistoryLogs(org.cyclos.model.system.monitor.DatabaseUpgradeQuery)
     */
    public function searchDatabaseHistoryLogs($query) {
        return $this->__run('searchDatabaseHistoryLogs', array($query));
    }
    
    /**
     * Executes a vacuum and an analyze of the database.

     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/SystemMonitorService.html#vacuumDatabase()
     */
    public function vacuumDatabase() {
        $this->__run('vacuumDatabase', array());
    }
    
}

?>