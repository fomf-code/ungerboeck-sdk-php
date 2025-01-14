# FomF\Ungerboeck\Client\PaymentPlanDetailsApi

All URIs are relative to *https://fomf.ungerboeck.com/TEST*

Method | HTTP request | Description
------------- | ------------- | -------------
[**paymentPlanDetailsGetPaymentPlanDetail**](PaymentPlanDetailsApi.md#paymentPlanDetailsGetPaymentPlanDetail) | **GET** /api/v1/PaymentPlanDetails/{OrgCode}/{PayPlanID}/{PayNumber}/{Sequence} | Standard - Get a single payment plan detail by its parameters
[**paymentPlanDetailsGetPaymentPlanDetailList**](PaymentPlanDetailsApi.md#paymentPlanDetailsGetPaymentPlanDetailList) | **GET** /api/v1/PaymentPlanDetails/{OrgCode} | Standard - Search for payment plan details using OData.


# **paymentPlanDetailsGetPaymentPlanDetail**
> \FomF\Ungerboeck\Client\Model\PaymentPlanDetailsModel paymentPlanDetailsGetPaymentPlanDetail($org_code, $pay_plan_id, $pay_number, $sequence)

Standard - Get a single payment plan detail by its parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\PaymentPlanDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code of the payment plan detail.
$pay_plan_id = 56; // int | The plan ID for the payment plan the step is associated with.
$pay_number = 56; // int | The step number of the payment plan step the step detail is associated with.
$sequence = 56; // int | The sequence of the payment plan detail.

try {
    $result = $apiInstance->paymentPlanDetailsGetPaymentPlanDetail($org_code, $pay_plan_id, $pay_number, $sequence);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentPlanDetailsApi->paymentPlanDetailsGetPaymentPlanDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code of the payment plan detail. |
 **pay_plan_id** | **int**| The plan ID for the payment plan the step is associated with. |
 **pay_number** | **int**| The step number of the payment plan step the step detail is associated with. |
 **sequence** | **int**| The sequence of the payment plan detail. |

### Return type

[**\FomF\Ungerboeck\Client\Model\PaymentPlanDetailsModel**](../Model/PaymentPlanDetailsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentPlanDetailsGetPaymentPlanDetailList**
> \FomF\Ungerboeck\Client\Model\PaymentPlanDetailsModel[] paymentPlanDetailsGetPaymentPlanDetailList($org_code, $search)

Standard - Search for payment plan details using OData.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new FomF\Ungerboeck\Client\Api\PaymentPlanDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$org_code = "org_code_example"; // string | The organization code in which the search will take place
$search = "search_example"; // string | <a href=\"https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\">How to make an Ungerboeck API search</a>

try {
    $result = $apiInstance->paymentPlanDetailsGetPaymentPlanDetailList($org_code, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentPlanDetailsApi->paymentPlanDetailsGetPaymentPlanDetailList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_code** | **string**| The organization code in which the search will take place |
 **search** | **string**| &lt;a href&#x3D;\&quot;https://supportcenter.ungerboeck.com/hc/en-us/articles/115010610608-Searching-Using-the-API\&quot;&gt;How to make an Ungerboeck API search&lt;/a&gt; |

### Return type

[**\FomF\Ungerboeck\Client\Model\PaymentPlanDetailsModel[]**](../Model/PaymentPlanDetailsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

