# ShopwareSDK6\PromotionSetgroupApi

All URIs are relative to *http://shopware.test/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPromotionSetgroup**](PromotionSetgroupApi.md#createpromotionsetgroup) | **POST** /promotion-setgroup | Create a new Promotion Setgroup resources
[**deletePromotionSetgroup**](PromotionSetgroupApi.md#deletepromotionsetgroup) | **DELETE** /promotion-setgroup/{id} | Delete a Promotion Setgroup resource
[**getPromotionSetgroup**](PromotionSetgroupApi.md#getpromotionsetgroup) | **GET** /promotion-setgroup/{id} | Detailed information about a Promotion Setgroup resource
[**getPromotionSetgroupList**](PromotionSetgroupApi.md#getpromotionsetgrouplist) | **GET** /promotion-setgroup | List with basic information of Promotion Setgroup resources
[**updatePromotionSetgroup**](PromotionSetgroupApi.md#updatepromotionsetgroup) | **PATCH** /promotion-setgroup/{id} | Partially update information about a Promotion Setgroup resource

# **createPromotionSetgroup**
> \ShopwareSDK6\Model\InlineResponse200228 createPromotionSetgroup($body, $_response)

Create a new Promotion Setgroup resources

Create a new Promotion Setgroup resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\PromotionSetgroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ShopwareSDK6\Model\Body150(); // \ShopwareSDK6\Model\Body150 | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createPromotionSetgroup($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionSetgroupApi->createPromotionSetgroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ShopwareSDK6\Model\Body150**](../Model/Body150.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200228**](../Model/InlineResponse200228.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPromotionSetgroup**
> \ShopwareSDK6\Model\InlineResponse200228 createPromotionSetgroup($body, $_response)

Create a new Promotion Setgroup resources

Create a new Promotion Setgroup resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\PromotionSetgroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ShopwareSDK6\Model\PromotionSetgroupFlat(); // \ShopwareSDK6\Model\PromotionSetgroupFlat | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createPromotionSetgroup($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionSetgroupApi->createPromotionSetgroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ShopwareSDK6\Model\PromotionSetgroupFlat**](../Model/PromotionSetgroupFlat.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200228**](../Model/InlineResponse200228.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePromotionSetgroup**
> deletePromotionSetgroup($id, $_response)

Delete a Promotion Setgroup resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\PromotionSetgroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the promotion_setgroup
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deletePromotionSetgroup($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling PromotionSetgroupApi->deletePromotionSetgroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the promotion_setgroup |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPromotionSetgroup**
> \ShopwareSDK6\Model\InlineResponse200228 getPromotionSetgroup($id)

Detailed information about a Promotion Setgroup resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\PromotionSetgroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the promotion_setgroup

try {
    $result = $apiInstance->getPromotionSetgroup($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionSetgroupApi->getPromotionSetgroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the promotion_setgroup |

### Return type

[**\ShopwareSDK6\Model\InlineResponse200228**](../Model/InlineResponse200228.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPromotionSetgroupList**
> \ShopwareSDK6\Model\InlineResponse200226 getPromotionSetgroupList($limit, $page, $query)

List with basic information of Promotion Setgroup resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\PromotionSetgroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getPromotionSetgroupList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionSetgroupApi->getPromotionSetgroupList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Max amount of resources to be returned in a page | [optional]
 **page** | **int**| The page to be returned | [optional]
 **query** | **string**| Encoded SwagQL in JSON | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200226**](../Model/InlineResponse200226.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePromotionSetgroup**
> \ShopwareSDK6\Model\InlineResponse200228 updatePromotionSetgroup($id, $body, $_response)

Partially update information about a Promotion Setgroup resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\PromotionSetgroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the promotion_setgroup
$body = new \ShopwareSDK6\Model\Body151(); // \ShopwareSDK6\Model\Body151 | Partially update information about a Promotion Setgroup resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updatePromotionSetgroup($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionSetgroupApi->updatePromotionSetgroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the promotion_setgroup |
 **body** | [**\ShopwareSDK6\Model\Body151**](../Model/Body151.md)| Partially update information about a Promotion Setgroup resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200228**](../Model/InlineResponse200228.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePromotionSetgroup**
> \ShopwareSDK6\Model\InlineResponse200228 updatePromotionSetgroup($id, $body, $_response)

Partially update information about a Promotion Setgroup resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\PromotionSetgroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the promotion_setgroup
$body = new \ShopwareSDK6\Model\PromotionSetgroupFlat(); // \ShopwareSDK6\Model\PromotionSetgroupFlat | Partially update information about a Promotion Setgroup resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updatePromotionSetgroup($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionSetgroupApi->updatePromotionSetgroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the promotion_setgroup |
 **body** | [**\ShopwareSDK6\Model\PromotionSetgroupFlat**](../Model/PromotionSetgroupFlat.md)| Partially update information about a Promotion Setgroup resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200228**](../Model/InlineResponse200228.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

