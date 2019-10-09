<?php
/**
 * ReportsApi
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CyberSource Merged Spec
 *
 * All CyberSource API specs merged together. These are available at https://developer.cybersource.com/api/reference/api-reference.html
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CyberSource\Api;

use \CyberSource\ApiClient;
use \CyberSource\ApiException;
use \CyberSource\Configuration;
use \CyberSource\ObjectSerializer;

/**
 * ReportsApi Class Doc Comment
 *
 * @category Class
 * @package  CyberSource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReportsApi
{
    /**
     * API Client
     *
     * @var \CyberSource\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \CyberSource\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\CyberSource\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \CyberSource\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \CyberSource\ApiClient $apiClient set the API client
     *
     * @return ReportsApi
     */
    public function setApiClient(\CyberSource\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createReport
     *
     * Create Adhoc Report
     *
     * @param \CyberSource\Model\CreateAdhocReportRequest $createAdhocReportRequest Report subscription request payload (required)
     * @param string $organizationId Valid Cybersource Organization Id (optional)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of void, HTTP status code, HTTP response headers (array of strings)
     */
    public function createReport($createAdhocReportRequest, $organizationId = null)
    {
        list($response, $statusCode, $httpHeader) = $this->createReportWithHttpInfo($createAdhocReportRequest, $organizationId);
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation createReportWithHttpInfo
     *
     * Create Adhoc Report
     *
     * @param \CyberSource\Model\CreateAdhocReportRequest $createAdhocReportRequest Report subscription request payload (required)
     * @param string $organizationId Valid Cybersource Organization Id (optional)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function createReportWithHttpInfo($createAdhocReportRequest, $organizationId = null)
    {
        // verify the required parameter 'createAdhocReportRequest' is set
        if ($createAdhocReportRequest === null) {
            throw new \InvalidArgumentException('Missing the required parameter $createAdhocReportRequest when calling createReport');
        }
        if (!is_null($organizationId) && (strlen($organizationId) > 32)) {
            throw new \InvalidArgumentException('invalid length for "$organizationId" when calling ReportsApi.createReport, must be smaller than or equal to 32.');
        }
        if (!is_null($organizationId) && (strlen($organizationId) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$organizationId" when calling ReportsApi.createReport, must be bigger than or equal to 1.');
        }
        if (!is_null($organizationId) && !preg_match("/[a-zA-Z0-9-_]+/", $organizationId)) {
            throw new \InvalidArgumentException("invalid value for \"organizationId\" when calling ReportsApi.createReport, must conform to the pattern /[a-zA-Z0-9-_]+/.");
        }

        // parse inputs
        $resourcePath = "/reporting/v3/reports";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/hal+json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($organizationId !== null) {
            $queryParams['organizationId'] = $this->apiClient->getSerializer()->toQueryValue($organizationId);
        }
        // body params
        $_tempBody = null;
        if (isset($createAdhocReportRequest)) {
            $_tempBody = $createAdhocReportRequest;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/reporting/v3/reports'
            );

            return [$response, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\Reportingv3ReportDownloadsGet400Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getReportByReportId
     *
     * Get Report based on reportId
     *
     * @param string $reportId Valid Report Id (required)
     * @param string $organizationId Valid Cybersource Organization Id (optional)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\ReportingV3ReportsIdGet200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function getReportByReportId($reportId, $organizationId = null)
    {
        list($response, $statusCode, $httpHeader) = $this->getReportByReportIdWithHttpInfo($reportId, $organizationId);
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation getReportByReportIdWithHttpInfo
     *
     * Get Report based on reportId
     *
     * @param string $reportId Valid Report Id (required)
     * @param string $organizationId Valid Cybersource Organization Id (optional)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\ReportingV3ReportsIdGet200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function getReportByReportIdWithHttpInfo($reportId, $organizationId = null)
    {
        // verify the required parameter 'reportId' is set
        if ($reportId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $reportId when calling getReportByReportId');
        }
        if (!is_null($organizationId) && (strlen($organizationId) > 32)) {
            throw new \InvalidArgumentException('invalid length for "$organizationId" when calling ReportsApi.getReportByReportId, must be smaller than or equal to 32.');
        }
        if (!is_null($organizationId) && (strlen($organizationId) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$organizationId" when calling ReportsApi.getReportByReportId, must be bigger than or equal to 1.');
        }
        if (!is_null($organizationId) && !preg_match("/[a-zA-Z0-9-_]+/", $organizationId)) {
            throw new \InvalidArgumentException("invalid value for \"organizationId\" when calling ReportsApi.getReportByReportId, must conform to the pattern /[a-zA-Z0-9-_]+/.");
        }

        // parse inputs
        $resourcePath = "/reporting/v3/reports/{reportId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/hal+json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // query params
        if ($organizationId !== null) {
            $queryParams['organizationId'] = $this->apiClient->getSerializer()->toQueryValue($organizationId);
        }
        // path params
        if ($reportId !== null) {
            $resourcePath = str_replace(
                "{" . "reportId" . "}",
                $this->apiClient->getSerializer()->toPathValue($reportId),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\ReportingV3ReportsIdGet200Response',
                '/reporting/v3/reports/{reportId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\ReportingV3ReportsIdGet200Response', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\ReportingV3ReportsIdGet200Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\Reportingv3ReportDownloadsGet400Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation searchReports
     *
     * Retrieve available reports
     *
     * @param \DateTime $startTime Valid report Start Time in **ISO 8601 format** Please refer the following link to know more about ISO 8601 format.[Rfc Date Format](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14)  **Example date format:**   - yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ (e.g. 2018-01-01T00:00:00.000Z) (required)
     * @param \DateTime $endTime Valid report End Time in **ISO 8601 format** Please refer the following link to know more about ISO 8601 format.[Rfc Date Format](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14)  **Example date format:**   - yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ (e.g. 2018-01-01T00:00:00.000Z) (required)
     * @param string $timeQueryType Specify time you would like to search  Valid values: - reportTimeFrame - executedTime (required)
     * @param string $organizationId Valid Cybersource Organization Id (optional)
     * @param string $reportMimeType Valid Report Format  Valid values: - application/xml - text/csv (optional)
     * @param string $reportFrequency Valid Report Frequency  Valid values: - DAILY - WEEKLY - MONTHLY - ADHOC (optional)
     * @param string $reportName Valid Report Name (optional)
     * @param int $reportDefinitionId Valid Report Definition Id (optional)
     * @param string $reportStatus Valid Report Status  Valid values: - COMPLETED - PENDING - QUEUED - RUNNING - ERROR - NO_DATA (optional)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\ReportingV3ReportsGet200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function searchReports($startTime, $endTime, $timeQueryType, $organizationId = null, $reportMimeType = null, $reportFrequency = null, $reportName = null, $reportDefinitionId = null, $reportStatus = null)
    {
        list($response, $statusCode, $httpHeader) = $this->searchReportsWithHttpInfo($startTime, $endTime, $timeQueryType, $organizationId, $reportMimeType, $reportFrequency, $reportName, $reportDefinitionId, $reportStatus);
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation searchReportsWithHttpInfo
     *
     * Retrieve available reports
     *
     * @param \DateTime $startTime Valid report Start Time in **ISO 8601 format** Please refer the following link to know more about ISO 8601 format.[Rfc Date Format](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14)  **Example date format:**   - yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ (e.g. 2018-01-01T00:00:00.000Z) (required)
     * @param \DateTime $endTime Valid report End Time in **ISO 8601 format** Please refer the following link to know more about ISO 8601 format.[Rfc Date Format](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14)  **Example date format:**   - yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ (e.g. 2018-01-01T00:00:00.000Z) (required)
     * @param string $timeQueryType Specify time you would like to search  Valid values: - reportTimeFrame - executedTime (required)
     * @param string $organizationId Valid Cybersource Organization Id (optional)
     * @param string $reportMimeType Valid Report Format  Valid values: - application/xml - text/csv (optional)
     * @param string $reportFrequency Valid Report Frequency  Valid values: - DAILY - WEEKLY - MONTHLY - ADHOC (optional)
     * @param string $reportName Valid Report Name (optional)
     * @param int $reportDefinitionId Valid Report Definition Id (optional)
     * @param string $reportStatus Valid Report Status  Valid values: - COMPLETED - PENDING - QUEUED - RUNNING - ERROR - NO_DATA (optional)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\ReportingV3ReportsGet200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function searchReportsWithHttpInfo($startTime, $endTime, $timeQueryType, $organizationId = null, $reportMimeType = null, $reportFrequency = null, $reportName = null, $reportDefinitionId = null, $reportStatus = null)
    {
        // verify the required parameter 'startTime' is set
        if ($startTime === null) {
            throw new \InvalidArgumentException('Missing the required parameter $startTime when calling searchReports');
        }
        // verify the required parameter 'endTime' is set
        if ($endTime === null) {
            throw new \InvalidArgumentException('Missing the required parameter $endTime when calling searchReports');
        }
        // verify the required parameter 'timeQueryType' is set
        if ($timeQueryType === null) {
            throw new \InvalidArgumentException('Missing the required parameter $timeQueryType when calling searchReports');
        }
        if (!is_null($organizationId) && (strlen($organizationId) > 32)) {
            throw new \InvalidArgumentException('invalid length for "$organizationId" when calling ReportsApi.searchReports, must be smaller than or equal to 32.');
        }
        if (!is_null($organizationId) && (strlen($organizationId) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$organizationId" when calling ReportsApi.searchReports, must be bigger than or equal to 1.');
        }
        if (!is_null($organizationId) && !preg_match("/[a-zA-Z0-9-_]+/", $organizationId)) {
            throw new \InvalidArgumentException("invalid value for \"organizationId\" when calling ReportsApi.searchReports, must conform to the pattern /[a-zA-Z0-9-_]+/.");
        }

        // parse inputs
        $resourcePath = "/reporting/v3/reports";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/hal+json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // query params
        if ($organizationId !== null) {
            $queryParams['organizationId'] = $this->apiClient->getSerializer()->toQueryValue($organizationId);
        }
        // query params
        if ($startTime !== null) {
            $queryParams['startTime'] = $this->apiClient->getSerializer()->toQueryValue($startTime);
        }
        // query params
        if ($endTime !== null) {
            $queryParams['endTime'] = $this->apiClient->getSerializer()->toQueryValue($endTime);
        }
        // query params
        if ($timeQueryType !== null) {
            $queryParams['timeQueryType'] = $this->apiClient->getSerializer()->toQueryValue($timeQueryType);
        }
        // query params
        if ($reportMimeType !== null) {
            $queryParams['reportMimeType'] = $this->apiClient->getSerializer()->toQueryValue($reportMimeType);
        }
        // query params
        if ($reportFrequency !== null) {
            $queryParams['reportFrequency'] = $this->apiClient->getSerializer()->toQueryValue($reportFrequency);
        }
        // query params
        if ($reportName !== null) {
            $queryParams['reportName'] = $this->apiClient->getSerializer()->toQueryValue($reportName);
        }
        // query params
        if ($reportDefinitionId !== null) {
            $queryParams['reportDefinitionId'] = $this->apiClient->getSerializer()->toQueryValue($reportDefinitionId);
        }
        // query params
        if ($reportStatus !== null) {
            $queryParams['reportStatus'] = $this->apiClient->getSerializer()->toQueryValue($reportStatus);
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\ReportingV3ReportsGet200Response',
                '/reporting/v3/reports'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\ReportingV3ReportsGet200Response', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\ReportingV3ReportsGet200Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\Reportingv3ReportDownloadsGet400Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
