<?php
/**
 * AccountMailingListsApi
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
 * Swagger Codegen version: 2.4.1-SNAPSHOT
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
 * AccountMailingListsApi Class Doc Comment
 *
 * @category Class
 * @package  FomF\Ungerboeck\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountMailingListsApi
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
     * Operation accountMailingListsGetAccountMailing
     *
     * Get a account mailing list by its parameters
     *
     * @param  string $org_code The organization code of the account mailing list. (required)
     * @param  int $id The ID of the account mailing list. (required)
     *
     * @throws \FomF\Ungerboeck\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \FomF\Ungerboeck\Client\Model\AccountMailingListsModel
     */
    public function accountMailingListsGetAccountMailing($org_code, $id)
    {
        list($response) = $this->accountMailingListsGetAccountMailingWithHttpInfo($org_code, $id);
        return $response;
    }

    /**
     * Operation accountMailingListsGetAccountMailingWithHttpInfo
     *
     * Get a account mailing list by its parameters
     *
     * @param  string $org_code The organization code of the account mailing list. (required)
     * @param  int $id The ID of the account mailing list. (required)
     *
     * @throws \FomF\Ungerboeck\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \FomF\Ungerboeck\Client\Model\AccountMailingListsModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function accountMailingListsGetAccountMailingWithHttpInfo($org_code, $id)
    {
        $returnType = '\FomF\Ungerboeck\Client\Model\AccountMailingListsModel';
        $request = $this->accountMailingListsGetAccountMailingRequest($org_code, $id);

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
                        '\FomF\Ungerboeck\Client\Model\AccountMailingListsModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation accountMailingListsGetAccountMailingAsync
     *
     * Get a account mailing list by its parameters
     *
     * @param  string $org_code The organization code of the account mailing list. (required)
     * @param  int $id The ID of the account mailing list. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function accountMailingListsGetAccountMailingAsync($org_code, $id)
    {
        return $this->accountMailingListsGetAccountMailingAsyncWithHttpInfo($org_code, $id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation accountMailingListsGetAccountMailingAsyncWithHttpInfo
     *
     * Get a account mailing list by its parameters
     *
     * @param  string $org_code The organization code of the account mailing list. (required)
     * @param  int $id The ID of the account mailing list. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function accountMailingListsGetAccountMailingAsyncWithHttpInfo($org_code, $id)
    {
        $returnType = '\FomF\Ungerboeck\Client\Model\AccountMailingListsModel';
        $request = $this->accountMailingListsGetAccountMailingRequest($org_code, $id);

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
     * Create request for operation 'accountMailingListsGetAccountMailing'
     *
     * @param  string $org_code The organization code of the account mailing list. (required)
     * @param  int $id The ID of the account mailing list. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function accountMailingListsGetAccountMailingRequest($org_code, $id)
    {
        // verify the required parameter 'org_code' is set
        if ($org_code === null || (is_array($org_code) && count($org_code) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $org_code when calling accountMailingListsGetAccountMailing'
            );
        }
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling accountMailingListsGetAccountMailing'
            );
        }

        $resourcePath = '/api/v1/AccountMailingLists/{OrgCode}/{ID}';
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
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'ID' . '}',
                ObjectSerializer::toPathValue($id),
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
     * Operation accountMailingListsGetAccountMailingList
     *
     * Search for account mailing list using OData.
     *
     * @param  string $org_code The organization code in which the search will take place (required)
     * @param  string $search Search string using OData with model properties for the filter, Page and Page_Size to navigate (required)
     *
     * @throws \FomF\Ungerboeck\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \FomF\Ungerboeck\Client\Model\AccountMailingListsModel[]
     */
    public function accountMailingListsGetAccountMailingList($org_code, $search)
    {
        list($response) = $this->accountMailingListsGetAccountMailingListWithHttpInfo($org_code, $search);
        return $response;
    }

    /**
     * Operation accountMailingListsGetAccountMailingListWithHttpInfo
     *
     * Search for account mailing list using OData.
     *
     * @param  string $org_code The organization code in which the search will take place (required)
     * @param  string $search Search string using OData with model properties for the filter, Page and Page_Size to navigate (required)
     *
     * @throws \FomF\Ungerboeck\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \FomF\Ungerboeck\Client\Model\AccountMailingListsModel[], HTTP status code, HTTP response headers (array of strings)
     */
    public function accountMailingListsGetAccountMailingListWithHttpInfo($org_code, $search)
    {
        $returnType = '\FomF\Ungerboeck\Client\Model\AccountMailingListsModel[]';
        $request = $this->accountMailingListsGetAccountMailingListRequest($org_code, $search);

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
                        '\FomF\Ungerboeck\Client\Model\AccountMailingListsModel[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation accountMailingListsGetAccountMailingListAsync
     *
     * Search for account mailing list using OData.
     *
     * @param  string $org_code The organization code in which the search will take place (required)
     * @param  string $search Search string using OData with model properties for the filter, Page and Page_Size to navigate (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function accountMailingListsGetAccountMailingListAsync($org_code, $search)
    {
        return $this->accountMailingListsGetAccountMailingListAsyncWithHttpInfo($org_code, $search)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation accountMailingListsGetAccountMailingListAsyncWithHttpInfo
     *
     * Search for account mailing list using OData.
     *
     * @param  string $org_code The organization code in which the search will take place (required)
     * @param  string $search Search string using OData with model properties for the filter, Page and Page_Size to navigate (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function accountMailingListsGetAccountMailingListAsyncWithHttpInfo($org_code, $search)
    {
        $returnType = '\FomF\Ungerboeck\Client\Model\AccountMailingListsModel[]';
        $request = $this->accountMailingListsGetAccountMailingListRequest($org_code, $search);

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
     * Create request for operation 'accountMailingListsGetAccountMailingList'
     *
     * @param  string $org_code The organization code in which the search will take place (required)
     * @param  string $search Search string using OData with model properties for the filter, Page and Page_Size to navigate (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function accountMailingListsGetAccountMailingListRequest($org_code, $search)
    {
        // verify the required parameter 'org_code' is set
        if ($org_code === null || (is_array($org_code) && count($org_code) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $org_code when calling accountMailingListsGetAccountMailingList'
            );
        }
        // verify the required parameter 'search' is set
        if ($search === null || (is_array($search) && count($search) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $search when calling accountMailingListsGetAccountMailingList'
            );
        }

        $resourcePath = '/api/v1/AccountMailingLists/{OrgCode}';
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
