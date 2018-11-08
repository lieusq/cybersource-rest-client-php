<?php
/**
 * RefundApi
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CyberSource Flex API
 *
 * Simple PAN tokenization service
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
 * RefundApi Class Doc Comment
 *
 * @category Class
 * @package  CyberSource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RefundApi
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
     * @return RefundApi
     */
    public function setApiClient(\CyberSource\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation refundCapture
     *
     * Refund a Capture
     *
     * @param \CyberSource\Model\RefundCaptureRequest $refundCaptureRequest  (required)
     * @param string $id The capture ID. This ID is returned from a previous capture request. (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return \CyberSource\Model\PtsV2PaymentsRefundPost201Response
     */
    public function refundCapture($refundCaptureRequest, $id)
    {
        list($response, $statusCode, $httpHeader) = $this->refundCaptureWithHttpInfo($refundCaptureRequest, $id);
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation refundCaptureWithHttpInfo
     *
     * Refund a Capture
     *
     * @param \CyberSource\Model\RefundCaptureRequest $refundCaptureRequest  (required)
     * @param string $id The capture ID. This ID is returned from a previous capture request. (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\PtsV2PaymentsRefundPost201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function refundCaptureWithHttpInfo($refundCaptureRequest, $id)
    {
        // verify the required parameter 'refundCaptureRequest' is set
        if ($refundCaptureRequest === null) {
            throw new \InvalidArgumentException('Missing the required parameter $refundCaptureRequest when calling refundCapture');
        }
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling refundCapture');
        }
        // parse inputs
        $resourcePath = "/pts/v2/captures/{id}/refunds";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/hal+json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($refundCaptureRequest)) {
            $_tempBody = $refundCaptureRequest;
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
                '\CyberSource\Model\PtsV2PaymentsRefundPost201Response',
                '/pts/v2/captures/{id}/refunds'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\PtsV2PaymentsRefundPost201Response', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PtsV2PaymentsRefundPost201Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PtsV2PaymentsRefundPost400Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PtsV2PaymentsPost502Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation refundPayment
     *
     * Refund a Payment
     *
     * @param \CyberSource\Model\RefundPaymentRequest $refundPaymentRequest  (required)
     * @param string $id The payment ID. This ID is returned from a previous payment request. (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return \CyberSource\Model\PtsV2PaymentsRefundPost201Response
     */
    public function refundPayment($refundPaymentRequest, $id)
    {
        list($response, $statusCode, $httpHeader) = $this->refundPaymentWithHttpInfo($refundPaymentRequest, $id);
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation refundPaymentWithHttpInfo
     *
     * Refund a Payment
     *
     * @param \CyberSource\Model\RefundPaymentRequest $refundPaymentRequest  (required)
     * @param string $id The payment ID. This ID is returned from a previous payment request. (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\PtsV2PaymentsRefundPost201Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function refundPaymentWithHttpInfo($refundPaymentRequest, $id)
    {
        // verify the required parameter 'refundPaymentRequest' is set
        if ($refundPaymentRequest === null) {
            throw new \InvalidArgumentException('Missing the required parameter $refundPaymentRequest when calling refundPayment');
        }
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling refundPayment');
        }
        // parse inputs
        $resourcePath = "/pts/v2/payments/{id}/refunds";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/hal+json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($refundPaymentRequest)) {
            $_tempBody = $refundPaymentRequest;
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
                '\CyberSource\Model\PtsV2PaymentsRefundPost201Response',
                '/pts/v2/payments/{id}/refunds'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\PtsV2PaymentsRefundPost201Response', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PtsV2PaymentsRefundPost201Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PtsV2PaymentsRefundPost400Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 502:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\PtsV2PaymentsPost502Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
