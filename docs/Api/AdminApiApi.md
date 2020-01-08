# ShopwareSDK6\AdminApiApi

All URIs are relative to *http://shopware.test/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**compositeSearch**](AdminApiApi.md#compositesearch) | **GET** /_search | 

# **compositeSearch**
> \ShopwareSDK6\Model\InlineResponse200[] compositeSearch($term, $limit)



Search for multiple entites by a given term

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\AdminApiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$term = "term_example"; // string | The term to search for
$limit = 56; // int | Max amount of resources per entity

try {
    $result = $apiInstance->compositeSearch($term, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApiApi->compositeSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **term** | **string**| The term to search for |
 **limit** | **int**| Max amount of resources per entity | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200[]**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/vnd.api+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

