<?php
/**
 * APPaymentTaxesApi
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
 * APPaymentTaxesApi Class Doc Comment
 *
 * @category Class
 * @package  FomF\Ungerboeck\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class APPaymentTaxesApi
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
     * Operation aPPaymentTaxesGetAPPaymentTax
     *
     * Standard - Retrieve a APPaymentTaxes record
     *
     * @param  string $org_code The organization code of the APPaymentTaxes entry. (required)
     * @param  int $sequence The sequence of the APPaymentTaxes entry. (required)
     * @param  int $voucher The voucher sequence of the APPaymentTaxes entry. (required)
     * @param  int $voucher_tax_seq The voucher tax Sequence of the APPaymentTaxes entry. (required)
     *
     * @throws \FomF\Ungerboeck\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \FomF\Ungerboeck\Client\Model\APPaymentTaxesModel
     */
    public function aPPaymentTaxesGetAPPaymentTax($org_code, $sequence, $voucher, $voucher_tax_seq)
    {
        list($response) = $this->aPPaymentTaxesGetAPPaymentTaxWithHttpInfo($org_code, $sequence, $voucher, $voucher_tax_seq);
        return $response;
    }

    /**
     * Operation aPPaymentTaxesGetAPPaymentTaxWithHttpInfo
     *
     * Standard - Retrieve a APPaymentTaxes record
     *
     * @param  string $org_code The organization code of the APPaymentTaxes entry. (required)
     * @param  int $sequence The sequence of the APPaymentTaxes entry. (required)
     * @param  int $voucher The voucher sequence of the APPaymentTaxes entry. (required)
     * @param  int $voucher_tax_seq The voucher tax Sequence of the APPaymentTaxes entry. (required)
     *
     * @throws \FomF\Ungerboeck\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \FomF\Ungerboeck\Client\Model\APPaymentTaxesModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function aPPaymentTaxesGetAPPaymentTaxWithHttpInfo($org_code, $sequence, $voucher, $voucher_tax_seq)
    {
        $returnType = '\FomF\Ungerboeck\Client\Model\APPaymentTaxesModel';
        $request = $this->aPPaymentTaxesGetAPPaymentTaxRequest($org_code, $sequence, $voucher, $voucher_tax_seq);

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
                        '\FomF\Ungerboeck\Client\Model\APPaymentTaxesModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation aPPaymentTaxesGetAPPaymentTaxAsync
     *
     * Standard - Retrieve a APPaymentTaxes record
     *
     * @param  string $org_code The organization code of the APPaymentTaxes entry. (required)
     * @param  int $sequence The sequence of the APPaymentTaxes entry. (required)
     * @param  int $voucher The voucher sequence of the APPaymentTaxes entry. (required)
     * @param  int $voucher_tax_seq The voucher tax Sequence of the APPaymentTaxes entry. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function aPPaymentTaxesGetAPPaymentTaxAsync($org_code, $sequence, $voucher, $voucher_tax_seq)
    {
        return $this->aPPaymentTaxesGetAPPaymentTaxAsyncWithHttpInfo($org_code, $sequence, $voucher, $voucher_tax_seq)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation aPPaymentTaxesGetAPPaymentTaxAsyncWithHttpInfo
     *
     * Standard - Retrieve a APPaymentTaxes record
     *
     * @param  string $org_code The organization code of the APPaymentTaxes entry. (required)
     * @param  int $sequence The sequence of the APPaymentTaxes entry. (required)
     * @param  int $voucher The voucher sequence of the APPaymentTaxes entry. (required)
     * @param  int $voucher_tax_seq The voucher tax Sequence of the APPaymentTaxes entry. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function aPPaymentTaxesGetAPPaymentTaxAsyncWithHttpInfo($org_code, $sequence, $voucher, $voucher_tax_seq)
    {
        $returnType = '\FomF\Ungerboeck\Client\Model\APPaymentTaxesModel';
        $request = $this->aPPaymentTaxesGetAPPaymentTaxRequest($org_code, $sequence, $voucher, $voucher_tax_seq);

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
     * Create request for operation 'aPPaymentTaxesGetAPPaymentTax'
     *
     * @param  string $org_code The organization code of the APPaymentTaxes entry. (required)
     * @param  int $sequence The sequence of the APPaymentTaxes entry. (required)
     * @param  int $voucher The voucher sequence of the APPaymentTaxes entry. (required)
     * @param  int $voucher_tax_seq The voucher tax Sequence of the APPaymentTaxes entry. (required)
     *
     * @throws \InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function aPPaymentTaxesGetAPPaymentTaxRequest($org_code, $sequence, $voucher, $voucher_tax_seq)
    {
        // verify the required parameter 'org_code' is set
        if ($org_code === null || (is_array($org_code) && count($org_code) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $org_code when calling aPPaymentTaxesGetAPPaymentTax'
            );
        }
        // verify the required parameter 'sequence' is set
        if ($sequence === null || (is_array($sequence) && count($sequence) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sequence when calling aPPaymentTaxesGetAPPaymentTax'
            );
        }
        // verify the required parameter 'voucher' is set
        if ($voucher === null || (is_array($voucher) && count($voucher) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $voucher when calling aPPaymentTaxesGetAPPaymentTax'
            );
        }
        // verify the required parameter 'voucher_tax_seq' is set
        if ($voucher_tax_seq === null || (is_array($voucher_tax_seq) && count($voucher_tax_seq) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $voucher_tax_seq when calling aPPaymentTaxesGetAPPaymentTax'
            );
        }

        $resourcePath = '/api/v1/APPaymentTaxes/{OrgCode}/{Sequence}/{Voucher}/{VoucherTaxSeq}';
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
        if ($sequence !== null) {
            $resourcePath = str_replace(
                '{' . 'Sequence' . '}',
                ObjectSerializer::toPathValue($sequence),
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
        if ($voucher_tax_seq !== null) {
            $resourcePath = str_replace(
                '{' . 'VoucherTaxSeq' . '}',
                ObjectSerializer::toPathValue($voucher_tax_seq),
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
     * Operation aPPaymentTaxesGetAPPaymentTaxList
     *
     * Standard - Search for APPaymentTaxes using OData.
     *
     * @param  string $org_code The organization code in which the search will take place (required)
     * @param  string $search &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; (required)
     *
     * @throws \FomF\Ungerboeck\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \FomF\Ungerboeck\Client\Model\APPaymentTaxesModel[]
     */
    public function aPPaymentTaxesGetAPPaymentTaxList($org_code, $search)
    {
        list($response) = $this->aPPaymentTaxesGetAPPaymentTaxListWithHttpInfo($org_code, $search);
        return $response;
    }

    /**
     * Operation aPPaymentTaxesGetAPPaymentTaxListWithHttpInfo
     *
     * Standard - Search for APPaymentTaxes using OData.
     *
     * @param  string $org_code The organization code in which the search will take place (required)
     * @param  string $search &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; (required)
     *
     * @throws \FomF\Ungerboeck\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \FomF\Ungerboeck\Client\Model\APPaymentTaxesModel[], HTTP status code, HTTP response headers (array of strings)
     */
    public function aPPaymentTaxesGetAPPaymentTaxListWithHttpInfo($org_code, $search)
    {
        $returnType = '\FomF\Ungerboeck\Client\Model\APPaymentTaxesModel[]';
        $request = $this->aPPaymentTaxesGetAPPaymentTaxListRequest($org_code, $search);

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
                        '\FomF\Ungerboeck\Client\Model\APPaymentTaxesModel[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation aPPaymentTaxesGetAPPaymentTaxListAsync
     *
     * Standard - Search for APPaymentTaxes using OData.
     *
     * @param  string $org_code The organization code in which the search will take place (required)
     * @param  string $search &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function aPPaymentTaxesGetAPPaymentTaxListAsync($org_code, $search)
    {
        return $this->aPPaymentTaxesGetAPPaymentTaxListAsyncWithHttpInfo($org_code, $search)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation aPPaymentTaxesGetAPPaymentTaxListAsyncWithHttpInfo
     *
     * Standard - Search for APPaymentTaxes using OData.
     *
     * @param  string $org_code The organization code in which the search will take place (required)
     * @param  string $search &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function aPPaymentTaxesGetAPPaymentTaxListAsyncWithHttpInfo($org_code, $search)
    {
        $returnType = '\FomF\Ungerboeck\Client\Model\APPaymentTaxesModel[]';
        $request = $this->aPPaymentTaxesGetAPPaymentTaxListRequest($org_code, $search);

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
     * Create request for operation 'aPPaymentTaxesGetAPPaymentTaxList'
     *
     * @param  string $org_code The organization code in which the search will take place (required)
     * @param  string $search &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; (required)
     *
     * @throws \InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function aPPaymentTaxesGetAPPaymentTaxListRequest($org_code, $search)
    {
        // verify the required parameter 'org_code' is set
        if ($org_code === null || (is_array($org_code) && count($org_code) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $org_code when calling aPPaymentTaxesGetAPPaymentTaxList'
            );
        }
        // verify the required parameter 'search' is set
        if ($search === null || (is_array($search) && count($search) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $search when calling aPPaymentTaxesGetAPPaymentTaxList'
            );
        }

        $resourcePath = '/api/v1/APPaymentTaxes/{OrgCode}';
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
