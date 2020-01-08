# ShopwareSDK6\ProductSearchKeywordApi

All URIs are relative to *http://shopware.test/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProductSearchKeyword**](ProductSearchKeywordApi.md#createproductsearchkeyword) | **POST** /product-search-keyword | Create a new Product Search Keyword resources
[**deleteProductSearchKeyword**](ProductSearchKeywordApi.md#deleteproductsearchkeyword) | **DELETE** /product-search-keyword/{id} | Delete a Product Search Keyword resource
[**getProductSearchKeyword**](ProductSearchKeywordApi.md#getproductsearchkeyword) | **GET** /product-search-keyword/{id} | Detailed information about a Product Search Keyword resource
[**getProductSearchKeywordList**](ProductSearchKeywordApi.md#getproductsearchkeywordlist) | **GET** /product-search-keyword | List with basic information of Product Search Keyword resources
[**updateProductSearchKeyword**](ProductSearchKeywordApi.md#updateproductsearchkeyword) | **PATCH** /product-search-keyword/{id} | Partially update information about a Product Search Keyword resource

# **createProductSearchKeyword**
> \ShopwareSDK6\Model\InlineResponse200201 createProductSearchKeyword($body, $_response)

Create a new Product Search Keyword resources

Create a new Product Search Keyword resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\ProductSearchKeywordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ShopwareSDK6\Model\Body132(); // \ShopwareSDK6\Model\Body132 | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createProductSearchKeyword($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSearchKeywordApi->createProductSearchKeyword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ShopwareSDK6\Model\Body132**](../Model/Body132.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200201**](../Model/InlineResponse200201.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createProductSearchKeyword**
> \ShopwareSDK6\Model\InlineResponse200201 createProductSearchKeyword($body, $_response)

Create a new Product Search Keyword resources

Create a new Product Search Keyword resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\ProductSearchKeywordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ShopwareSDK6\Model\ProductSearchKeywordFlat(); // \ShopwareSDK6\Model\ProductSearchKeywordFlat | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createProductSearchKeyword($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSearchKeywordApi->createProductSearchKeyword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ShopwareSDK6\Model\ProductSearchKeywordFlat**](../Model/ProductSearchKeywordFlat.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200201**](../Model/InlineResponse200201.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProductSearchKeyword**
> deleteProductSearchKeyword($id, $_response)

Delete a Product Search Keyword resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\ProductSearchKeywordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the product_search_keyword
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteProductSearchKeyword($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling ProductSearchKeywordApi->deleteProductSearchKeyword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the product_search_keyword |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductSearchKeyword**
> \ShopwareSDK6\Model\InlineResponse200201 getProductSearchKeyword($id)

Detailed information about a Product Search Keyword resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\ProductSearchKeywordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the product_search_keyword

try {
    $result = $apiInstance->getProductSearchKeyword($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSearchKeywordApi->getProductSearchKeyword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the product_search_keyword |

### Return type

[**\ShopwareSDK6\Model\InlineResponse200201**](../Model/InlineResponse200201.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductSearchKeywordList**
> \ShopwareSDK6\Model\InlineResponse200199 getProductSearchKeywordList($limit, $page, $query)

List with basic information of Product Search Keyword resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\ProductSearchKeywordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getProductSearchKeywordList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSearchKeywordApi->getProductSearchKeywordList: ', $e->getMessage(), PHP_EOL;
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

[**\ShopwareSDK6\Model\InlineResponse200199**](../Model/InlineResponse200199.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProductSearchKeyword**
> \ShopwareSDK6\Model\InlineResponse200201 updateProductSearchKeyword($id, $body, $_response)

Partially update information about a Product Search Keyword resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\ProductSearchKeywordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the product_search_keyword
$body = new \ShopwareSDK6\Model\Body133(); // \ShopwareSDK6\Model\Body133 | Partially update information about a Product Search Keyword resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateProductSearchKeyword($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSearchKeywordApi->updateProductSearchKeyword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the product_search_keyword |
 **body** | [**\ShopwareSDK6\Model\Body133**](../Model/Body133.md)| Partially update information about a Product Search Keyword resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200201**](../Model/InlineResponse200201.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProductSearchKeyword**
> \ShopwareSDK6\Model\InlineResponse200201 updateProductSearchKeyword($id, $body, $_response)

Partially update information about a Product Search Keyword resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\ProductSearchKeywordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the product_search_keyword
$body = new \ShopwareSDK6\Model\ProductSearchKeywordFlat(); // \ShopwareSDK6\Model\ProductSearchKeywordFlat | Partially update information about a Product Search Keyword resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateProductSearchKeyword($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSearchKeywordApi->updateProductSearchKeyword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the product_search_keyword |
 **body** | [**\ShopwareSDK6\Model\ProductSearchKeywordFlat**](../Model/ProductSearchKeywordFlat.md)| Partially update information about a Product Search Keyword resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200201**](../Model/InlineResponse200201.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

