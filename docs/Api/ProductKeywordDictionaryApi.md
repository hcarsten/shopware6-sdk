# Shopware6SDK\ProductKeywordDictionaryApi

All URIs are relative to *http://shopware.test/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProductKeywordDictionary**](ProductKeywordDictionaryApi.md#createproductkeyworddictionary) | **POST** /product-keyword-dictionary | Create a new Product Keyword Dictionary resources
[**deleteProductKeywordDictionary**](ProductKeywordDictionaryApi.md#deleteproductkeyworddictionary) | **DELETE** /product-keyword-dictionary/{id} | Delete a Product Keyword Dictionary resource
[**getProductKeywordDictionary**](ProductKeywordDictionaryApi.md#getproductkeyworddictionary) | **GET** /product-keyword-dictionary/{id} | Detailed information about a Product Keyword Dictionary resource
[**getProductKeywordDictionaryList**](ProductKeywordDictionaryApi.md#getproductkeyworddictionarylist) | **GET** /product-keyword-dictionary | List with basic information of Product Keyword Dictionary resources
[**updateProductKeywordDictionary**](ProductKeywordDictionaryApi.md#updateproductkeyworddictionary) | **PATCH** /product-keyword-dictionary/{id} | Partially update information about a Product Keyword Dictionary resource

# **createProductKeywordDictionary**
> \Shopware6SDK\Model\InlineResponse200186 createProductKeywordDictionary($body, $_response)

Create a new Product Keyword Dictionary resources

Create a new Product Keyword Dictionary resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\ProductKeywordDictionaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Shopware6SDK\Model\Body122(); // \Shopware6SDK\Model\Body122 | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createProductKeywordDictionary($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductKeywordDictionaryApi->createProductKeywordDictionary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Shopware6SDK\Model\Body122**](../Model/Body122.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Shopware6SDK\Model\InlineResponse200186**](../Model/InlineResponse200186.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createProductKeywordDictionary**
> \Shopware6SDK\Model\InlineResponse200186 createProductKeywordDictionary($body, $_response)

Create a new Product Keyword Dictionary resources

Create a new Product Keyword Dictionary resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\ProductKeywordDictionaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Shopware6SDK\Model\ProductKeywordDictionaryFlat(); // \Shopware6SDK\Model\ProductKeywordDictionaryFlat | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createProductKeywordDictionary($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductKeywordDictionaryApi->createProductKeywordDictionary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Shopware6SDK\Model\ProductKeywordDictionaryFlat**](../Model/ProductKeywordDictionaryFlat.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Shopware6SDK\Model\InlineResponse200186**](../Model/InlineResponse200186.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProductKeywordDictionary**
> deleteProductKeywordDictionary($id, $_response)

Delete a Product Keyword Dictionary resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\ProductKeywordDictionaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the product_keyword_dictionary
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteProductKeywordDictionary($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling ProductKeywordDictionaryApi->deleteProductKeywordDictionary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the product_keyword_dictionary |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductKeywordDictionary**
> \Shopware6SDK\Model\InlineResponse200186 getProductKeywordDictionary($id)

Detailed information about a Product Keyword Dictionary resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\ProductKeywordDictionaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the product_keyword_dictionary

try {
    $result = $apiInstance->getProductKeywordDictionary($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductKeywordDictionaryApi->getProductKeywordDictionary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the product_keyword_dictionary |

### Return type

[**\Shopware6SDK\Model\InlineResponse200186**](../Model/InlineResponse200186.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductKeywordDictionaryList**
> \Shopware6SDK\Model\InlineResponse200184 getProductKeywordDictionaryList($limit, $page, $query)

List with basic information of Product Keyword Dictionary resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\ProductKeywordDictionaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getProductKeywordDictionaryList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductKeywordDictionaryApi->getProductKeywordDictionaryList: ', $e->getMessage(), PHP_EOL;
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

[**\Shopware6SDK\Model\InlineResponse200184**](../Model/InlineResponse200184.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProductKeywordDictionary**
> \Shopware6SDK\Model\InlineResponse200186 updateProductKeywordDictionary($id, $body, $_response)

Partially update information about a Product Keyword Dictionary resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\ProductKeywordDictionaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the product_keyword_dictionary
$body = new \Shopware6SDK\Model\Body123(); // \Shopware6SDK\Model\Body123 | Partially update information about a Product Keyword Dictionary resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateProductKeywordDictionary($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductKeywordDictionaryApi->updateProductKeywordDictionary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the product_keyword_dictionary |
 **body** | [**\Shopware6SDK\Model\Body123**](../Model/Body123.md)| Partially update information about a Product Keyword Dictionary resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Shopware6SDK\Model\InlineResponse200186**](../Model/InlineResponse200186.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProductKeywordDictionary**
> \Shopware6SDK\Model\InlineResponse200186 updateProductKeywordDictionary($id, $body, $_response)

Partially update information about a Product Keyword Dictionary resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\ProductKeywordDictionaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the product_keyword_dictionary
$body = new \Shopware6SDK\Model\ProductKeywordDictionaryFlat(); // \Shopware6SDK\Model\ProductKeywordDictionaryFlat | Partially update information about a Product Keyword Dictionary resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateProductKeywordDictionary($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductKeywordDictionaryApi->updateProductKeywordDictionary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the product_keyword_dictionary |
 **body** | [**\Shopware6SDK\Model\ProductKeywordDictionaryFlat**](../Model/ProductKeywordDictionaryFlat.md)| Partially update information about a Product Keyword Dictionary resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Shopware6SDK\Model\InlineResponse200186**](../Model/InlineResponse200186.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

