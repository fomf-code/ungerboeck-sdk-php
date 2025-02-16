# FomF\Ungerboeck\Client\SpaceFeaturesApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**spaceFeaturesGetSpaceFeature**](SpaceFeaturesApi.md#spaceFeaturesGetSpaceFeature) | **GET** /api/v1/SpaceFeatures/{OrgCode}/{Code} | Basic - Get a single space feature by its parameters
[**spaceFeaturesGetSpaceFeatureList**](SpaceFeaturesApi.md#spaceFeaturesGetSpaceFeatureList) | **GET** /api/v1/SpaceFeatures/{OrgCode} | Basic - Search for space features using OData.


# **spaceFeaturesGetSpaceFeature**
> \FomF\Ungerboeck\Client\Model\SpaceFeaturesModel spaceFeaturesGetSpaceFeature($org_code, $code)

Basic - Get a single space feature by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\SpaceFeaturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the space feature.
$code = "code_example"; // string | The code of the space feature.

try {
    $result = $apiInstance->spaceFeaturesGetSpaceFeature($org_code, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpaceFeaturesApi->spaceFeaturesGetSpaceFeature: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the space feature. |
 **code** | **string**| The code of the space feature. |

### Return type

[**\FomF\Ungerboeck\Client\Model\SpaceFeaturesModel**](../Model/SpaceFeaturesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **spaceFeaturesGetSpaceFeatureList**
> \FomF\Ungerboeck\Client\Model\SpaceFeaturesModel[] spaceFeaturesGetSpaceFeatureList($org_code, $search)

Basic - Search for space features using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\SpaceFeaturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->spaceFeaturesGetSpaceFeatureList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpaceFeaturesApi->spaceFeaturesGetSpaceFeatureList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\SpaceFeaturesModel[]**](../Model/SpaceFeaturesModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

