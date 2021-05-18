<?php
/**
 * GLDeferralRevenueDetailsApi
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
 * GLDeferralRevenueDetailsApi Class Doc Comment
 *
 * @category Class
 * @package  FomF\Ungerboeck\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GLDeferralRevenueDetailsApi
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
     * Operation gLDeferralRevenueDetailsGetGlDeferralRevenueDetail
     *
     * Standard - Get an GlDeferral Revenue Detail by its parameters
     *
     * @param  int $hdr_sequence The Header Sequence of the GlDeferral Revenue Detail. (required)
     * @param  int $sequence The sequence of the GlDeferral Revenue Detail. (required)
     *
     * @throws \FomF\Ungerboeck\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \FomF\Ungerboeck\Client\Model\GLDeferralRevenueDetailsModel
     */
    public function gLDeferralRevenueDetailsGetGlDeferralRevenueDetail($hdr_sequence, $sequence)
    {
        list($response) = $this->gLDeferralRevenueDetailsGetGlDeferralRevenueDetailWithHttpInfo($hdr_sequence, $sequence);
        return $response;
    }

    /**
     * Operation gLDeferralRevenueDetailsGetGlDeferralRevenueDetailWithHttpInfo
     *
     * Standard - Get an GlDeferral Revenue Detail by its parameters
     *
     * @param  int $hdr_sequence The Header Sequence of the GlDeferral Revenue Detail. (required)
     * @param  int $sequence The sequence of the GlDeferral Revenue Detail. (required)
     *
     * @throws \FomF\Ungerboeck\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \FomF\Ungerboeck\Client\Model\GLDeferralRevenueDetailsModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function gLDeferralRevenueDetailsGetGlDeferralRevenueDetailWithHttpInfo($hdr_sequence, $sequence)
    {
        $returnType = '\FomF\Ungerboeck\Client\Model\GLDeferralRevenueDetailsModel';
        $request = $this->gLDeferralRevenueDetailsGetGlDeferralRevenueDetailRequest($hdr_sequence, $sequence);

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
                        '\FomF\Ungerboeck\Client\Model\GLDeferralRevenueDetailsModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation gLDeferralRevenueDetailsGetGlDeferralRevenueDetailAsync
     *
     * Standard - Get an GlDeferral Revenue Detail by its parameters
     *
     * @param  int $hdr_sequence The Header Sequence of the GlDeferral Revenue Detail. (required)
     * @param  int $sequence The sequence of the GlDeferral Revenue Detail. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function gLDeferralRevenueDetailsGetGlDeferralRevenueDetailAsync($hdr_sequence, $sequence)
    {
        return $this->gLDeferralRevenueDetailsGetGlDeferralRevenueDetailAsyncWithHttpInfo($hdr_sequence, $sequence)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation gLDeferralRevenueDetailsGetGlDeferralRevenueDetailAsyncWithHttpInfo
     *
     * Standard - Get an GlDeferral Revenue Detail by its parameters
     *
     * @param  int $hdr_sequence The Header Sequence of the GlDeferral Revenue Detail. (required)
     * @param  int $sequence The sequence of the GlDeferral Revenue Detail. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function gLDeferralRevenueDetailsGetGlDeferralRevenueDetailAsyncWithHttpInfo($hdr_sequence, $sequence)
    {
        $returnType = '\FomF\Ungerboeck\Client\Model\GLDeferralRevenueDetailsModel';
        $request = $this->gLDeferralRevenueDetailsGetGlDeferralRevenueDetailRequest($hdr_sequence, $sequence);

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
     * Create request for operation 'gLDeferralRevenueDetailsGetGlDeferralRevenueDetail'
     *
     * @param  int $hdr_sequence The Header Sequence of the GlDeferral Revenue Detail. (required)
     * @param  int $sequence The sequence of the GlDeferral Revenue Detail. (required)
     *
     * @throws \InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function gLDeferralRevenueDetailsGetGlDeferralRevenueDetailRequest($hdr_sequence, $sequence)
    {
        // verify the required parameter 'hdr_sequence' is set
        if ($hdr_sequence === null || (is_array($hdr_sequence) && count($hdr_sequence) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $hdr_sequence when calling gLDeferralRevenueDetailsGetGlDeferralRevenueDetail'
            );
        }
        // verify the required parameter 'sequence' is set
        if ($sequence === null || (is_array($sequence) && count($sequence) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sequence when calling gLDeferralRevenueDetailsGetGlDeferralRevenueDetail'
            );
        }

        $resourcePath = '/api/v1/GLDeferralRevenueDetails/{HdrSequence}/{Sequence}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($hdr_sequence !== null) {
            $resourcePath = str_replace(
                '{' . 'HdrSequence' . '}',
                ObjectSerializer::toPathValue($hdr_sequence),
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
     * Operation gLDeferralRevenueDetailsGetGlDeferralRevenueDetailList
     *
     * Standard - Search for GlDeferral Revenue Details using OData.
     *
     * @param  string $search &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; (required)
     *
     * @throws \FomF\Ungerboeck\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \FomF\Ungerboeck\Client\Model\GLDeferralRevenueDetailsModel[]
     */
    public function gLDeferralRevenueDetailsGetGlDeferralRevenueDetailList($search)
    {
        list($response) = $this->gLDeferralRevenueDetailsGetGlDeferralRevenueDetailListWithHttpInfo($search);
        return $response;
    }

    /**
     * Operation gLDeferralRevenueDetailsGetGlDeferralRevenueDetailListWithHttpInfo
     *
     * Standard - Search for GlDeferral Revenue Details using OData.
     *
     * @param  string $search &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; (required)
     *
     * @throws \FomF\Ungerboeck\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \FomF\Ungerboeck\Client\Model\GLDeferralRevenueDetailsModel[], HTTP status code, HTTP response headers (array of strings)
     */
    public function gLDeferralRevenueDetailsGetGlDeferralRevenueDetailListWithHttpInfo($search)
    {
        $returnType = '\FomF\Ungerboeck\Client\Model\GLDeferralRevenueDetailsModel[]';
        $request = $this->gLDeferralRevenueDetailsGetGlDeferralRevenueDetailListRequest($search);

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
                        '\FomF\Ungerboeck\Client\Model\GLDeferralRevenueDetailsModel[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation gLDeferralRevenueDetailsGetGlDeferralRevenueDetailListAsync
     *
     * Standard - Search for GlDeferral Revenue Details using OData.
     *
     * @param  string $search &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function gLDeferralRevenueDetailsGetGlDeferralRevenueDetailListAsync($search)
    {
        return $this->gLDeferralRevenueDetailsGetGlDeferralRevenueDetailListAsyncWithHttpInfo($search)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation gLDeferralRevenueDetailsGetGlDeferralRevenueDetailListAsyncWithHttpInfo
     *
     * Standard - Search for GlDeferral Revenue Details using OData.
     *
     * @param  string $search &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function gLDeferralRevenueDetailsGetGlDeferralRevenueDetailListAsyncWithHttpInfo($search)
    {
        $returnType = '\FomF\Ungerboeck\Client\Model\GLDeferralRevenueDetailsModel[]';
        $request = $this->gLDeferralRevenueDetailsGetGlDeferralRevenueDetailListRequest($search);

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
     * Create request for operation 'gLDeferralRevenueDetailsGetGlDeferralRevenueDetailList'
     *
     * @param  string $search &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; (required)
     *
     * @throws \InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function gLDeferralRevenueDetailsGetGlDeferralRevenueDetailListRequest($search)
    {
        // verify the required parameter 'search' is set
        if ($search === null || (is_array($search) && count($search) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $search when calling gLDeferralRevenueDetailsGetGlDeferralRevenueDetailList'
            );
        }

        $resourcePath = '/api/v1/GLDeferralRevenueDetails';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($search !== null) {
            $queryParams['search'] = ObjectSerializer::toQueryValue($search);
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