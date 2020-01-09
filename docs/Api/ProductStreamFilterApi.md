# Shopware6SDK\ProductStreamFilterApi

All URIs are relative to *http://shopware.test/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProductStreamFilter**](ProductStreamFilterApi.md#createproductstreamfilter) | **POST** /product-stream-filter | Create a new Product Stream Filter resources
[**deleteProductStreamFilter**](ProductStreamFilterApi.md#deleteproductstreamfilter) | **DELETE** /product-stream-filter/{id} | Delete a Product Stream Filter resource
[**getProductStreamFilter**](ProductStreamFilterApi.md#getproductstreamfilter) | **GET** /product-stream-filter/{id} | Detailed information about a Product Stream Filter resource
[**getProductStreamFilterList**](ProductStreamFilterApi.md#getproductstreamfilterlist) | **GET** /product-stream-filter | List with basic information of Product Stream Filter resources
[**updateProductStreamFilter**](ProductStreamFilterApi.md#updateproductstreamfilter) | **PATCH** /product-stream-filter/{id} | Partially update information about a Product Stream Filter resource

# **createProductStreamFilter**
> \Shopware6SDK\Model\InlineResponse200207 createProductStreamFilter($body, $_response)

Create a new Product Stream Filter resources

Create a new Product Stream Filter resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\ProductStreamFilterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Shopware6SDK\Model\Body136(); // \Shopware6SDK\Model\Body136 | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createProductStreamFilter($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductStreamFilterApi->createProductStreamFilter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Shopware6SDK\Model\Body136**](../Model/Body136.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Shopware6SDK\Model\InlineResponse200207**](../Model/InlineResponse200207.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createProductStreamFilter**
> \Shopware6SDK\Model\InlineResponse200207 createProductStreamFilter($body, $_response)

Create a new Product Stream Filter resources

Create a new Product Stream Filter resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\ProductStreamFilterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Shopware6SDK\Model\ProductStreamFilterFlat(); // \Shopware6SDK\Model\ProductStreamFilterFlat | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createProductStreamFilter($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductStreamFilterApi->createProductStreamFilter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Shopware6SDK\Model\ProductStreamFilterFlat**](../Model/ProductStreamFilterFlat.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Shopware6SDK\Model\InlineResponse200207**](../Model/InlineResponse200207.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProductStreamFilter**
> deleteProductStreamFilter($id, $_response)

Delete a Product Stream Filter resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\ProductStreamFilterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the product_stream_filter
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteProductStreamFilter($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling ProductStreamFilterApi->deleteProductStreamFilter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the product_stream_filter |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductStreamFilter**
> \Shopware6SDK\Model\InlineResponse200207 getProductStreamFilter($id)

Detailed information about a Product Stream Filter resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\ProductStreamFilterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the product_stream_filter

try {
    $result = $apiInstance->getProductStreamFilter($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductStreamFilterApi->getProductStreamFilter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the product_stream_filter |

### Return type

[**\Shopware6SDK\Model\InlineResponse200207**](../Model/InlineResponse200207.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductStreamFilterList**
> \Shopware6SDK\Model\InlineResponse200205 getProductStreamFilterList($limit, $page, $query)

List with basic information of Product Stream Filter resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\ProductStreamFilterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getProductStreamFilterList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductStreamFilterApi->getProductStreamFilterList: ', $e->getMessage(), PHP_EOL;
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

[**\Shopware6SDK\Model\InlineResponse200205**](../Model/InlineResponse200205.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProductStreamFilter**
> \Shopware6SDK\Model\InlineResponse200207 updateProductStreamFilter($id, $body, $_response)

Partially update information about a Product Stream Filter resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\ProductStreamFilterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the product_stream_filter
$body = new \Shopware6SDK\Model\Body137(); // \Shopware6SDK\Model\Body137 | Partially update information about a Product Stream Filter resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateProductStreamFilter($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductStreamFilterApi->updateProductStreamFilter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the product_stream_filter |
 **body** | [**\Shopware6SDK\Model\Body137**](../Model/Body137.md)| Partially update information about a Product Stream Filter resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Shopware6SDK\Model\InlineResponse200207**](../Model/InlineResponse200207.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProductStreamFilter**
> \Shopware6SDK\Model\InlineResponse200207 updateProductStreamFilter($id, $body, $_response)

Partially update information about a Product Stream Filter resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\ProductStreamFilterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the product_stream_filter
$body = new \Shopware6SDK\Model\ProductStreamFilterFlat(); // \Shopware6SDK\Model\ProductStreamFilterFlat | Partially update information about a Product Stream Filter resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateProductStreamFilter($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductStreamFilterApi->updateProductStreamFilter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the product_stream_filter |
 **body** | [**\Shopware6SDK\Model\ProductStreamFilterFlat**](../Model/ProductStreamFilterFlat.md)| Partially update information about a Product Stream Filter resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Shopware6SDK\Model\InlineResponse200207**](../Model/InlineResponse200207.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

