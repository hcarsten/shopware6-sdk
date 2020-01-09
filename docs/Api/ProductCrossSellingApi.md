# Shopware6SDK\ProductCrossSellingApi

All URIs are relative to *http://shopware.test/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProductCrossSelling**](ProductCrossSellingApi.md#createproductcrossselling) | **POST** /product-cross-selling | Create a new Product Cross Selling resources
[**deleteProductCrossSelling**](ProductCrossSellingApi.md#deleteproductcrossselling) | **DELETE** /product-cross-selling/{id} | Delete a Product Cross Selling resource
[**getProductCrossSelling**](ProductCrossSellingApi.md#getproductcrossselling) | **GET** /product-cross-selling/{id} | Detailed information about a Product Cross Selling resource
[**getProductCrossSellingList**](ProductCrossSellingApi.md#getproductcrosssellinglist) | **GET** /product-cross-selling | List with basic information of Product Cross Selling resources
[**updateProductCrossSelling**](ProductCrossSellingApi.md#updateproductcrossselling) | **PATCH** /product-cross-selling/{id} | Partially update information about a Product Cross Selling resource

# **createProductCrossSelling**
> \Shopware6SDK\Model\InlineResponse200180 createProductCrossSelling($body, $_response)

Create a new Product Cross Selling resources

Create a new Product Cross Selling resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\ProductCrossSellingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Shopware6SDK\Model\Body118(); // \Shopware6SDK\Model\Body118 | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createProductCrossSelling($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCrossSellingApi->createProductCrossSelling: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Shopware6SDK\Model\Body118**](../Model/Body118.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Shopware6SDK\Model\InlineResponse200180**](../Model/InlineResponse200180.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createProductCrossSelling**
> \Shopware6SDK\Model\InlineResponse200180 createProductCrossSelling($body, $_response)

Create a new Product Cross Selling resources

Create a new Product Cross Selling resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\ProductCrossSellingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Shopware6SDK\Model\ProductCrossSellingFlat(); // \Shopware6SDK\Model\ProductCrossSellingFlat | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createProductCrossSelling($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCrossSellingApi->createProductCrossSelling: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Shopware6SDK\Model\ProductCrossSellingFlat**](../Model/ProductCrossSellingFlat.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Shopware6SDK\Model\InlineResponse200180**](../Model/InlineResponse200180.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProductCrossSelling**
> deleteProductCrossSelling($id, $_response)

Delete a Product Cross Selling resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\ProductCrossSellingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the product_cross_selling
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteProductCrossSelling($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling ProductCrossSellingApi->deleteProductCrossSelling: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the product_cross_selling |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductCrossSelling**
> \Shopware6SDK\Model\InlineResponse200180 getProductCrossSelling($id)

Detailed information about a Product Cross Selling resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\ProductCrossSellingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the product_cross_selling

try {
    $result = $apiInstance->getProductCrossSelling($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCrossSellingApi->getProductCrossSelling: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the product_cross_selling |

### Return type

[**\Shopware6SDK\Model\InlineResponse200180**](../Model/InlineResponse200180.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductCrossSellingList**
> \Shopware6SDK\Model\InlineResponse200178 getProductCrossSellingList($limit, $page, $query)

List with basic information of Product Cross Selling resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\ProductCrossSellingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getProductCrossSellingList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCrossSellingApi->getProductCrossSellingList: ', $e->getMessage(), PHP_EOL;
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

[**\Shopware6SDK\Model\InlineResponse200178**](../Model/InlineResponse200178.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProductCrossSelling**
> \Shopware6SDK\Model\InlineResponse200180 updateProductCrossSelling($id, $body, $_response)

Partially update information about a Product Cross Selling resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\ProductCrossSellingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the product_cross_selling
$body = new \Shopware6SDK\Model\Body119(); // \Shopware6SDK\Model\Body119 | Partially update information about a Product Cross Selling resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateProductCrossSelling($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCrossSellingApi->updateProductCrossSelling: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the product_cross_selling |
 **body** | [**\Shopware6SDK\Model\Body119**](../Model/Body119.md)| Partially update information about a Product Cross Selling resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Shopware6SDK\Model\InlineResponse200180**](../Model/InlineResponse200180.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProductCrossSelling**
> \Shopware6SDK\Model\InlineResponse200180 updateProductCrossSelling($id, $body, $_response)

Partially update information about a Product Cross Selling resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\ProductCrossSellingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the product_cross_selling
$body = new \Shopware6SDK\Model\ProductCrossSellingFlat(); // \Shopware6SDK\Model\ProductCrossSellingFlat | Partially update information about a Product Cross Selling resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateProductCrossSelling($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCrossSellingApi->updateProductCrossSelling: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the product_cross_selling |
 **body** | [**\Shopware6SDK\Model\ProductCrossSellingFlat**](../Model/ProductCrossSellingFlat.md)| Partially update information about a Product Cross Selling resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Shopware6SDK\Model\InlineResponse200180**](../Model/InlineResponse200180.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

