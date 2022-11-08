<?php namespace Cyclos;

/**
 * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/ReportService.html
 * 
 * Generated with Cyclos 4.15.8
 * 
 * WARNING: The API is subject to change between revision versions
 * (for example, 4.5 to 4.6).
 */
class ReportService extends Service {

    function __construct() {
        parent::__construct('reportService');
    }
    
    /**
     * Gets the data for system reports.

     * @return Java type: org.cyclos.model.system.reports.SystemReportData
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/ReportService.html#getSystemReportData()
     */
    public function getSystemReportData() {
        return $this->__run('getSystemReportData', array());
    }
    
    /**
     * Generates a PDF content for a system report, showing reports on the
     * complete system. Note that if the query has no groups selected, the
     * method assumes that all visible groups are to be selected.
     * @param query Java type: org.cyclos.model.system.reports.SystemReportQuery
     * @return Java type: org.cyclos.server.utils.SerializableInputStream
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/ReportService.html#readSystemReport(org.cyclos.model.system.reports.SystemReportQuery)
     */
    public function readSystemReport($query) {
        return $this->__run('readSystemReport', array($query));
    }
    
    /**
     * Validates the system reports. this must be called before calling
     * #readSystemReport.
     * @param query Java type: org.cyclos.model.system.reports.SystemReportQuery
     * @see http://documentation.cyclos.org/4.15.8/ws-api-docs/org/cyclos/services/system/ReportService.html#validate(org.cyclos.model.system.reports.SystemReportQuery)
     */
    public function validate($query) {
        $this->__run('validate', array($query));
    }
    
}

?>