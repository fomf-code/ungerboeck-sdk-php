<?php
/**
 * VoucherDistributionApi
 * PHP version 5
 *
 * @category Class
 * @package  FomF\Ungerboeck\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Ungerboeck API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.19
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace FomF\Ungerboeck\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use FomF\Ungerboeck\Client\ApiException;
use FomF\Ungerboeck\Client\Configuration;
use FomF\Ungerboeck\Client\HeaderSelector;
use FomF\Ungerboeck\Client\ObjectSerializer;

/**
 * VoucherDistributionApi Class Doc Comment
 *
 * @category Class
 * @package  FomF\Ungerboeck\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VoucherDistributionApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation voucherDistributionGetVoucherDistribution
     *
     * Standard - Get a voucher distribution by its parameters
     *
     * @param  string $org_code The organization code of the voucher distribution. (required)
     * @param  int $voucher The voucher number of the voucher distribution entry. (required)
     * @param  int $sequence The sequence number of the voucher distribution entry. (required)
     *
     * @throws \FomF\Ungerboeck\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \FomF\Ungerboeck\Client\Model\VoucherDistributionModel
     */
    public function voucherDistributionGetVoucherDistribution($org_code, $voucher, $sequence)
    {
        list($response) = $this->voucherDistributionGetVoucherDistributionWithHttpInfo($org_code, $voucher, $sequence);
        return $response;
    }

    /**
     * Operation voucherDistributionGetVoucherDistributionWithHttpInfo
     *
     * Standard - Get a voucher distribution by its parameters
     *
     * @param  string $org_code The organization code of the voucher distribution. (required)
     * @param  int $voucher The voucher number of the voucher distribution entry. (required)
     * @param  int $sequence The sequence number of the voucher distribution entry. (required)
     *
     * @throws \FomF\Ungerboeck\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \FomF\Ungerboeck\Client\Model\VoucherDistributionModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function voucherDistributionGetVoucherDistributionWithHttpInfo($org_code, $voucher, $sequence)
    {
        $returnType = '\FomF\Ungerboeck\Client\Model\VoucherDistributionModel';
        $request = $this->voucherDistributionGetVoucherDistributionRequest($org_code, $voucher, $sequence);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\FomF\Ungerboeck\Client\Model\VoucherDistributionModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation voucherDistributionGetVoucherDistributionAsync
     *
     * Standard - Get a voucher distribution by its parameters
     *
     * @param  string $org_code The organization code of the voucher distribution. (required)
     * @param  int $voucher The voucher number of the voucher distribution entry. (required)
     * @param  int $sequence The sequence number of the voucher distribution entry. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function voucherDistributionGetVoucherDistributionAsync($org_code, $voucher, $sequence)
    {
        return $this->voucherDistributionGetVoucherDistributionAsyncWithHttpInfo($org_code, $voucher, $sequence)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation voucherDistributionGetVoucherDistributionAsyncWithHttpInfo
     *
     * Standard - Get a voucher distribution by its parameters
     *
     * @param  string $org_code The organization code of the voucher distribution. (required)
     * @param  int $voucher The voucher number of the voucher distribution entry. (required)
     * @param  int $sequence The sequence number of the voucher distribution entry. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function voucherDistributionGetVoucherDistributionAsyncWithHttpInfo($org_code, $voucher, $sequence)
    {
        $returnType = '\FomF\Ungerboeck\Client\Model\VoucherDistributionModel';
        $request = $this->voucherDistributionGetVoucherDistributionRequest($org_code, $voucher, $sequence);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'voucherDistributionGetVoucherDistribution'
     *
     * @param  string $org_code The organization code of the voucher distribution. (required)
     * @param  int $voucher The voucher number of the voucher distribution entry. (required)
     * @param  int $sequence The sequence number of the voucher distribution entry. (required)
     *
     * @throws \InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function voucherDistributionGetVoucherDistributionRequest($org_code, $voucher, $sequence)
    {
        // verify the required parameter 'org_code' is set
        if ($org_code === null || (is_array($org_code) && count($org_code) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $org_code when calling voucherDistributionGetVoucherDistribution'
            );
        }
        // verify the required parameter 'voucher' is set
        if ($voucher === null || (is_array($voucher) && count($voucher) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $voucher when calling voucherDistributionGetVoucherDistribution'
            );
        }
        // verify the required parameter 'sequence' is set
        if ($sequence === null || (is_array($sequence) && count($sequence) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sequence when calling voucherDistributionGetVoucherDistribution'
            );
        }

        $resourcePath = '/api/v1/VoucherDistribution/{OrgCode}/{Voucher}/{Sequence}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($org_code !== null) {
            $resourcePath = str_replace(
                '{' . 'OrgCode' . '}',
                ObjectSerializer::toPathValue($org_code),
                $resourcePath
            );
        }
        // path params
        if ($voucher !== null) {
            $resourcePath = str_replace(
                '{' . 'Voucher' . '}',
                ObjectSerializer::toPathValue($voucher),
                $resourcePath
            );
        }
        // path params
        if ($sequence !== null) {
            $resourcePath = str_replace(
                '{' . 'Sequence' . '}',
                ObjectSerializer::toPathValue($sequence),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'text/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

   
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Token');
        if ($apiKey !== null) {
            $headers['Token'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);


        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation voucherDistributionGetVoucherDistributionList
     *
     * Standard - Search for voucher distributions using OData.
     *
     * @param  string $org_code The organization code in which the search will take place (required)
     * @param  string $search Search string using OData with model properties for the filter, Page and Page_Size to navigate (required)
     *
     * @throws \FomF\Ungerboeck\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \FomF\Ungerboeck\Client\Model\VoucherDistributionModel
     */
    public function voucherDistributionGetVoucherDistributionList($org_code, $search)
    {
        list($response) = $this->voucherDistributionGetVoucherDistributionListWithHttpInfo($org_code, $search);
        return $response;
    }

    /**
     * Operation voucherDistributionGetVoucherDistributionListWithHttpInfo
     *
     * Standard - Search for voucher distributions using OData.
     *
     * @param  string $org_code The organization code in which the search will take place (required)
     * @param  string $search Search string using OData with model properties for the filter, Page and Page_Size to navigate (required)
     *
     * @throws \FomF\Ungerboeck\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \FomF\Ungerboeck\Client\Model\VoucherDistributionModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function voucherDistributionGetVoucherDistributionListWithHttpInfo($org_code, $search)
    {
        $returnType = '\FomF\Ungerboeck\Client\Model\VoucherDistributionModel';
        $request = $this->voucherDistributionGetVoucherDistributionListRequest($org_code, $search);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\FomF\Ungerboeck\Client\Model\VoucherDistributionModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation voucherDistributionGetVoucherDistributionListAsync
     *
     * Standard - Search for voucher distributions using OData.
     *
     * @param  string $org_code The organization code in which the search will take place (required)
     * @param  string $search Search string using OData with model properties for the filter, Page and Page_Size to navigate (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function voucherDistributionGetVoucherDistributionListAsync($org_code, $search)
    {
        return $this->voucherDistributionGetVoucherDistributionListAsyncWithHttpInfo($org_code, $search)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation voucherDistributionGetVoucherDistributionListAsyncWithHttpInfo
     *
     * Standard - Search for voucher distributions using OData.
     *
     * @param  string $org_code The organization code in which the search will take place (required)
     * @param  string $search Search string using OData with model properties for the filter, Page and Page_Size to navigate (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function voucherDistributionGetVoucherDistributionListAsyncWithHttpInfo($org_code, $search)
    {
        $returnType = '\FomF\Ungerboeck\Client\Model\VoucherDistributionModel';
        $request = $this->voucherDistributionGetVoucherDistributionListRequest($org_code, $search);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'voucherDistributionGetVoucherDistributionList'
     *
     * @param  string $org_code The organization code in which the search will take place (required)
     * @param  string $search Search string using OData with model properties for the filter, Page and Page_Size to navigate (required)
     *
     * @throws \InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function voucherDistributionGetVoucherDistributionListRequest($org_code, $search)
    {
        // verify the required parameter 'org_code' is set
        if ($org_code === null || (is_array($org_code) && count($org_code) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $org_code when calling voucherDistributionGetVoucherDistributionList'
            );
        }
        // verify the required parameter 'search' is set
        if ($search === null || (is_array($search) && count($search) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $search when calling voucherDistributionGetVoucherDistributionList'
            );
        }

        $resourcePath = '/api/v1/VoucherDistribution/{OrgCode}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($search !== null) {
            $queryParams['search'] = ObjectSerializer::toQueryValue($search);
        }

        // path params
        if ($org_code !== null) {
            $resourcePath = str_replace(
                '{' . 'OrgCode' . '}',
                ObjectSerializer::toPathValue($org_code),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'text/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

   
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Token');
        if ($apiKey !== null) {
            $headers['Token'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);


        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
