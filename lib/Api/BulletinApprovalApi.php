<?php
/**
 * BulletinApprovalApi
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
 * BulletinApprovalApi Class Doc Comment
 *
 * @category Class
 * @package  FomF\Ungerboeck\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BulletinApprovalApi
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
     * Operation bulletinApprovalGetBulletinApproval
     *
     * Standard - Get a single bulletin approval by its parameters
     *
     * @param  string $org_code The organization code of the bulletin approval. (required)
     * @param  int $meeting_sequence_number The meeting sequence number of the bulletin approval. (required)
     * @param  int $bulletin_sequence_number The bulletin sequence number of the bulletin approval. (required)
     * @param  int $sequence_number The sequence number of the bulletin approval. (required)
     * @param  string $bulletin_file_id The bulletin file ID of the bulletin approval. (required)
     *
     * @throws \FomF\Ungerboeck\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \FomF\Ungerboeck\Client\Model\BulletinApprovalModel
     */
    public function bulletinApprovalGetBulletinApproval($org_code, $meeting_sequence_number, $bulletin_sequence_number, $sequence_number, $bulletin_file_id)
    {
        list($response) = $this->bulletinApprovalGetBulletinApprovalWithHttpInfo($org_code, $meeting_sequence_number, $bulletin_sequence_number, $sequence_number, $bulletin_file_id);
        return $response;
    }

    /**
     * Operation bulletinApprovalGetBulletinApprovalWithHttpInfo
     *
     * Standard - Get a single bulletin approval by its parameters
     *
     * @param  string $org_code The organization code of the bulletin approval. (required)
     * @param  int $meeting_sequence_number The meeting sequence number of the bulletin approval. (required)
     * @param  int $bulletin_sequence_number The bulletin sequence number of the bulletin approval. (required)
     * @param  int $sequence_number The sequence number of the bulletin approval. (required)
     * @param  string $bulletin_file_id The bulletin file ID of the bulletin approval. (required)
     *
     * @throws \FomF\Ungerboeck\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \FomF\Ungerboeck\Client\Model\BulletinApprovalModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function bulletinApprovalGetBulletinApprovalWithHttpInfo($org_code, $meeting_sequence_number, $bulletin_sequence_number, $sequence_number, $bulletin_file_id)
    {
        $returnType = '\FomF\Ungerboeck\Client\Model\BulletinApprovalModel';
        $request = $this->bulletinApprovalGetBulletinApprovalRequest($org_code, $meeting_sequence_number, $bulletin_sequence_number, $sequence_number, $bulletin_file_id);

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
                        '\FomF\Ungerboeck\Client\Model\BulletinApprovalModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation bulletinApprovalGetBulletinApprovalAsync
     *
     * Standard - Get a single bulletin approval by its parameters
     *
     * @param  string $org_code The organization code of the bulletin approval. (required)
     * @param  int $meeting_sequence_number The meeting sequence number of the bulletin approval. (required)
     * @param  int $bulletin_sequence_number The bulletin sequence number of the bulletin approval. (required)
     * @param  int $sequence_number The sequence number of the bulletin approval. (required)
     * @param  string $bulletin_file_id The bulletin file ID of the bulletin approval. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function bulletinApprovalGetBulletinApprovalAsync($org_code, $meeting_sequence_number, $bulletin_sequence_number, $sequence_number, $bulletin_file_id)
    {
        return $this->bulletinApprovalGetBulletinApprovalAsyncWithHttpInfo($org_code, $meeting_sequence_number, $bulletin_sequence_number, $sequence_number, $bulletin_file_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation bulletinApprovalGetBulletinApprovalAsyncWithHttpInfo
     *
     * Standard - Get a single bulletin approval by its parameters
     *
     * @param  string $org_code The organization code of the bulletin approval. (required)
     * @param  int $meeting_sequence_number The meeting sequence number of the bulletin approval. (required)
     * @param  int $bulletin_sequence_number The bulletin sequence number of the bulletin approval. (required)
     * @param  int $sequence_number The sequence number of the bulletin approval. (required)
     * @param  string $bulletin_file_id The bulletin file ID of the bulletin approval. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function bulletinApprovalGetBulletinApprovalAsyncWithHttpInfo($org_code, $meeting_sequence_number, $bulletin_sequence_number, $sequence_number, $bulletin_file_id)
    {
        $returnType = '\FomF\Ungerboeck\Client\Model\BulletinApprovalModel';
        $request = $this->bulletinApprovalGetBulletinApprovalRequest($org_code, $meeting_sequence_number, $bulletin_sequence_number, $sequence_number, $bulletin_file_id);

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
     * Create request for operation 'bulletinApprovalGetBulletinApproval'
     *
     * @param  string $org_code The organization code of the bulletin approval. (required)
     * @param  int $meeting_sequence_number The meeting sequence number of the bulletin approval. (required)
     * @param  int $bulletin_sequence_number The bulletin sequence number of the bulletin approval. (required)
     * @param  int $sequence_number The sequence number of the bulletin approval. (required)
     * @param  string $bulletin_file_id The bulletin file ID of the bulletin approval. (required)
     *
     * @throws \InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function bulletinApprovalGetBulletinApprovalRequest($org_code, $meeting_sequence_number, $bulletin_sequence_number, $sequence_number, $bulletin_file_id)
    {
        // verify the required parameter 'org_code' is set
        if ($org_code === null || (is_array($org_code) && count($org_code) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $org_code when calling bulletinApprovalGetBulletinApproval'
            );
        }
        // verify the required parameter 'meeting_sequence_number' is set
        if ($meeting_sequence_number === null || (is_array($meeting_sequence_number) && count($meeting_sequence_number) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $meeting_sequence_number when calling bulletinApprovalGetBulletinApproval'
            );
        }
        // verify the required parameter 'bulletin_sequence_number' is set
        if ($bulletin_sequence_number === null || (is_array($bulletin_sequence_number) && count($bulletin_sequence_number) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $bulletin_sequence_number when calling bulletinApprovalGetBulletinApproval'
            );
        }
        // verify the required parameter 'sequence_number' is set
        if ($sequence_number === null || (is_array($sequence_number) && count($sequence_number) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sequence_number when calling bulletinApprovalGetBulletinApproval'
            );
        }
        // verify the required parameter 'bulletin_file_id' is set
        if ($bulletin_file_id === null || (is_array($bulletin_file_id) && count($bulletin_file_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $bulletin_file_id when calling bulletinApprovalGetBulletinApproval'
            );
        }

        $resourcePath = '/api/v1/BulletinApproval/{OrgCode}/{MeetingSequenceNumber}/{BulletinSequenceNumber}/{SequenceNumber}/{BulletinFileID}';
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
        if ($meeting_sequence_number !== null) {
            $resourcePath = str_replace(
                '{' . 'MeetingSequenceNumber' . '}',
                ObjectSerializer::toPathValue($meeting_sequence_number),
                $resourcePath
            );
        }
        // path params
        if ($bulletin_sequence_number !== null) {
            $resourcePath = str_replace(
                '{' . 'BulletinSequenceNumber' . '}',
                ObjectSerializer::toPathValue($bulletin_sequence_number),
                $resourcePath
            );
        }
        // path params
        if ($sequence_number !== null) {
            $resourcePath = str_replace(
                '{' . 'SequenceNumber' . '}',
                ObjectSerializer::toPathValue($sequence_number),
                $resourcePath
            );
        }
        // path params
        if ($bulletin_file_id !== null) {
            $resourcePath = str_replace(
                '{' . 'BulletinFileID' . '}',
                ObjectSerializer::toPathValue($bulletin_file_id),
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
     * Operation bulletinApprovalGetBulletinApprovalList
     *
     * Standard - Search for bulletin approval using OData.
     *
     * @param  string $org_code The organization code in which the search will take place (required)
     * @param  string $search &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; (required)
     *
     * @throws \FomF\Ungerboeck\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \FomF\Ungerboeck\Client\Model\BulletinApprovalModel[]
     */
    public function bulletinApprovalGetBulletinApprovalList($org_code, $search)
    {
        list($response) = $this->bulletinApprovalGetBulletinApprovalListWithHttpInfo($org_code, $search);
        return $response;
    }

    /**
     * Operation bulletinApprovalGetBulletinApprovalListWithHttpInfo
     *
     * Standard - Search for bulletin approval using OData.
     *
     * @param  string $org_code The organization code in which the search will take place (required)
     * @param  string $search &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; (required)
     *
     * @throws \FomF\Ungerboeck\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \FomF\Ungerboeck\Client\Model\BulletinApprovalModel[], HTTP status code, HTTP response headers (array of strings)
     */
    public function bulletinApprovalGetBulletinApprovalListWithHttpInfo($org_code, $search)
    {
        $returnType = '\FomF\Ungerboeck\Client\Model\BulletinApprovalModel[]';
        $request = $this->bulletinApprovalGetBulletinApprovalListRequest($org_code, $search);

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
                        '\FomF\Ungerboeck\Client\Model\BulletinApprovalModel[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation bulletinApprovalGetBulletinApprovalListAsync
     *
     * Standard - Search for bulletin approval using OData.
     *
     * @param  string $org_code The organization code in which the search will take place (required)
     * @param  string $search &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function bulletinApprovalGetBulletinApprovalListAsync($org_code, $search)
    {
        return $this->bulletinApprovalGetBulletinApprovalListAsyncWithHttpInfo($org_code, $search)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation bulletinApprovalGetBulletinApprovalListAsyncWithHttpInfo
     *
     * Standard - Search for bulletin approval using OData.
     *
     * @param  string $org_code The organization code in which the search will take place (required)
     * @param  string $search &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function bulletinApprovalGetBulletinApprovalListAsyncWithHttpInfo($org_code, $search)
    {
        $returnType = '\FomF\Ungerboeck\Client\Model\BulletinApprovalModel[]';
        $request = $this->bulletinApprovalGetBulletinApprovalListRequest($org_code, $search);

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
     * Create request for operation 'bulletinApprovalGetBulletinApprovalList'
     *
     * @param  string $org_code The organization code in which the search will take place (required)
     * @param  string $search &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; (required)
     *
     * @throws \InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function bulletinApprovalGetBulletinApprovalListRequest($org_code, $search)
    {
        // verify the required parameter 'org_code' is set
        if ($org_code === null || (is_array($org_code) && count($org_code) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $org_code when calling bulletinApprovalGetBulletinApprovalList'
            );
        }
        // verify the required parameter 'search' is set
        if ($search === null || (is_array($search) && count($search) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $search when calling bulletinApprovalGetBulletinApprovalList'
            );
        }

        $resourcePath = '/api/v1/BulletinApproval/{OrgCode}';
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
