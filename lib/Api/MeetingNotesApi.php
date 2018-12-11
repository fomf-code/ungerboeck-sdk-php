<?php
/**
 * MeetingNotesApi
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
 * MeetingNotesApi Class Doc Comment
 *
 * @category Class
 * @package  FomF\Ungerboeck\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MeetingNotesApi
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
     * Operation meetingNotesGetMeetingNotes
     *
     * Get a meeting note by its parameters
     *
     * @param  string $org_code The organization code of the meeting note. (required)
     * @param  string $bulletin_application The bulletin application of the meeting note. (required)
     * @param  int $meeting The meeting ID of the meeting note. (required)
     * @param  int $bulletin_seq_nbr The bulletin sequence number of the meeting note. (required)
     * @param  int $sequence_nbr The sequence number of the meeting note. (required)
     *
     * @throws \FomF\Ungerboeck\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \FomF\Ungerboeck\Client\Model\MeetingNotesModel
     */
    public function meetingNotesGetMeetingNotes($org_code, $bulletin_application, $meeting, $bulletin_seq_nbr, $sequence_nbr)
    {
        list($response) = $this->meetingNotesGetMeetingNotesWithHttpInfo($org_code, $bulletin_application, $meeting, $bulletin_seq_nbr, $sequence_nbr);
        return $response;
    }

    /**
     * Operation meetingNotesGetMeetingNotesWithHttpInfo
     *
     * Get a meeting note by its parameters
     *
     * @param  string $org_code The organization code of the meeting note. (required)
     * @param  string $bulletin_application The bulletin application of the meeting note. (required)
     * @param  int $meeting The meeting ID of the meeting note. (required)
     * @param  int $bulletin_seq_nbr The bulletin sequence number of the meeting note. (required)
     * @param  int $sequence_nbr The sequence number of the meeting note. (required)
     *
     * @throws \FomF\Ungerboeck\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \FomF\Ungerboeck\Client\Model\MeetingNotesModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function meetingNotesGetMeetingNotesWithHttpInfo($org_code, $bulletin_application, $meeting, $bulletin_seq_nbr, $sequence_nbr)
    {
        $returnType = '\FomF\Ungerboeck\Client\Model\MeetingNotesModel';
        $request = $this->meetingNotesGetMeetingNotesRequest($org_code, $bulletin_application, $meeting, $bulletin_seq_nbr, $sequence_nbr);

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
                        '\FomF\Ungerboeck\Client\Model\MeetingNotesModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation meetingNotesGetMeetingNotesAsync
     *
     * Get a meeting note by its parameters
     *
     * @param  string $org_code The organization code of the meeting note. (required)
     * @param  string $bulletin_application The bulletin application of the meeting note. (required)
     * @param  int $meeting The meeting ID of the meeting note. (required)
     * @param  int $bulletin_seq_nbr The bulletin sequence number of the meeting note. (required)
     * @param  int $sequence_nbr The sequence number of the meeting note. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function meetingNotesGetMeetingNotesAsync($org_code, $bulletin_application, $meeting, $bulletin_seq_nbr, $sequence_nbr)
    {
        return $this->meetingNotesGetMeetingNotesAsyncWithHttpInfo($org_code, $bulletin_application, $meeting, $bulletin_seq_nbr, $sequence_nbr)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation meetingNotesGetMeetingNotesAsyncWithHttpInfo
     *
     * Get a meeting note by its parameters
     *
     * @param  string $org_code The organization code of the meeting note. (required)
     * @param  string $bulletin_application The bulletin application of the meeting note. (required)
     * @param  int $meeting The meeting ID of the meeting note. (required)
     * @param  int $bulletin_seq_nbr The bulletin sequence number of the meeting note. (required)
     * @param  int $sequence_nbr The sequence number of the meeting note. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function meetingNotesGetMeetingNotesAsyncWithHttpInfo($org_code, $bulletin_application, $meeting, $bulletin_seq_nbr, $sequence_nbr)
    {
        $returnType = '\FomF\Ungerboeck\Client\Model\MeetingNotesModel';
        $request = $this->meetingNotesGetMeetingNotesRequest($org_code, $bulletin_application, $meeting, $bulletin_seq_nbr, $sequence_nbr);

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
     * Create request for operation 'meetingNotesGetMeetingNotes'
     *
     * @param  string $org_code The organization code of the meeting note. (required)
     * @param  string $bulletin_application The bulletin application of the meeting note. (required)
     * @param  int $meeting The meeting ID of the meeting note. (required)
     * @param  int $bulletin_seq_nbr The bulletin sequence number of the meeting note. (required)
     * @param  int $sequence_nbr The sequence number of the meeting note. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function meetingNotesGetMeetingNotesRequest($org_code, $bulletin_application, $meeting, $bulletin_seq_nbr, $sequence_nbr)
    {
        // verify the required parameter 'org_code' is set
        if ($org_code === null || (is_array($org_code) && count($org_code) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $org_code when calling meetingNotesGetMeetingNotes'
            );
        }
        // verify the required parameter 'bulletin_application' is set
        if ($bulletin_application === null || (is_array($bulletin_application) && count($bulletin_application) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $bulletin_application when calling meetingNotesGetMeetingNotes'
            );
        }
        // verify the required parameter 'meeting' is set
        if ($meeting === null || (is_array($meeting) && count($meeting) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $meeting when calling meetingNotesGetMeetingNotes'
            );
        }
        // verify the required parameter 'bulletin_seq_nbr' is set
        if ($bulletin_seq_nbr === null || (is_array($bulletin_seq_nbr) && count($bulletin_seq_nbr) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $bulletin_seq_nbr when calling meetingNotesGetMeetingNotes'
            );
        }
        // verify the required parameter 'sequence_nbr' is set
        if ($sequence_nbr === null || (is_array($sequence_nbr) && count($sequence_nbr) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sequence_nbr when calling meetingNotesGetMeetingNotes'
            );
        }

        $resourcePath = '/api/v1/MeetingNotes/{OrgCode}/{BulletinApplication}/{Meeting}/{BulletinSeqNbr}/{SequenceNbr}';
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
        if ($bulletin_application !== null) {
            $resourcePath = str_replace(
                '{' . 'BulletinApplication' . '}',
                ObjectSerializer::toPathValue($bulletin_application),
                $resourcePath
            );
        }
        // path params
        if ($meeting !== null) {
            $resourcePath = str_replace(
                '{' . 'Meeting' . '}',
                ObjectSerializer::toPathValue($meeting),
                $resourcePath
            );
        }
        // path params
        if ($bulletin_seq_nbr !== null) {
            $resourcePath = str_replace(
                '{' . 'BulletinSeqNbr' . '}',
                ObjectSerializer::toPathValue($bulletin_seq_nbr),
                $resourcePath
            );
        }
        // path params
        if ($sequence_nbr !== null) {
            $resourcePath = str_replace(
                '{' . 'SequenceNbr' . '}',
                ObjectSerializer::toPathValue($sequence_nbr),
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
     * Operation meetingNotesGetMeetingNotesList
     *
     * Search for meeting note using OData.
     *
     * @param  string $org_code The organization code in which the search will take place (required)
     * @param  string $search Search string using OData with model properties for the filter, Page and Page_Size to navigate (required)
     *
     * @throws \FomF\Ungerboeck\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \FomF\Ungerboeck\Client\Model\MeetingNotesModel[]
     */
    public function meetingNotesGetMeetingNotesList($org_code, $search)
    {
        list($response) = $this->meetingNotesGetMeetingNotesListWithHttpInfo($org_code, $search);
        return $response;
    }

    /**
     * Operation meetingNotesGetMeetingNotesListWithHttpInfo
     *
     * Search for meeting note using OData.
     *
     * @param  string $org_code The organization code in which the search will take place (required)
     * @param  string $search Search string using OData with model properties for the filter, Page and Page_Size to navigate (required)
     *
     * @throws \FomF\Ungerboeck\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \FomF\Ungerboeck\Client\Model\MeetingNotesModel[], HTTP status code, HTTP response headers (array of strings)
     */
    public function meetingNotesGetMeetingNotesListWithHttpInfo($org_code, $search)
    {
        $returnType = '\FomF\Ungerboeck\Client\Model\MeetingNotesModel[]';
        $request = $this->meetingNotesGetMeetingNotesListRequest($org_code, $search);

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
                        '\FomF\Ungerboeck\Client\Model\MeetingNotesModel[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation meetingNotesGetMeetingNotesListAsync
     *
     * Search for meeting note using OData.
     *
     * @param  string $org_code The organization code in which the search will take place (required)
     * @param  string $search Search string using OData with model properties for the filter, Page and Page_Size to navigate (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function meetingNotesGetMeetingNotesListAsync($org_code, $search)
    {
        return $this->meetingNotesGetMeetingNotesListAsyncWithHttpInfo($org_code, $search)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation meetingNotesGetMeetingNotesListAsyncWithHttpInfo
     *
     * Search for meeting note using OData.
     *
     * @param  string $org_code The organization code in which the search will take place (required)
     * @param  string $search Search string using OData with model properties for the filter, Page and Page_Size to navigate (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function meetingNotesGetMeetingNotesListAsyncWithHttpInfo($org_code, $search)
    {
        $returnType = '\FomF\Ungerboeck\Client\Model\MeetingNotesModel[]';
        $request = $this->meetingNotesGetMeetingNotesListRequest($org_code, $search);

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
     * Create request for operation 'meetingNotesGetMeetingNotesList'
     *
     * @param  string $org_code The organization code in which the search will take place (required)
     * @param  string $search Search string using OData with model properties for the filter, Page and Page_Size to navigate (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function meetingNotesGetMeetingNotesListRequest($org_code, $search)
    {
        // verify the required parameter 'org_code' is set
        if ($org_code === null || (is_array($org_code) && count($org_code) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $org_code when calling meetingNotesGetMeetingNotesList'
            );
        }
        // verify the required parameter 'search' is set
        if ($search === null || (is_array($search) && count($search) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $search when calling meetingNotesGetMeetingNotesList'
            );
        }

        $resourcePath = '/api/v1/MeetingNotes/{OrgCode}';
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
