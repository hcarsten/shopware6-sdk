# Swagger\Client\PromotionDiscountPricesApi

All URIs are relative to *http://shopware.test/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPromotionDiscountPrices**](PromotionDiscountPricesApi.md#createpromotiondiscountprices) | **POST** /promotion-discount-prices | Create a new Promotion Discount Prices resources
[**deletePromotionDiscountPrices**](PromotionDiscountPricesApi.md#deletepromotiondiscountprices) | **DELETE** /promotion-discount-prices/{id} | Delete a Promotion Discount Prices resource
[**getPromotionDiscountPrices**](PromotionDiscountPricesApi.md#getpromotiondiscountprices) | **GET** /promotion-discount-prices/{id} | Detailed information about a Promotion Discount Prices resource
[**getPromotionDiscountPricesList**](PromotionDiscountPricesApi.md#getpromotiondiscountpriceslist) | **GET** /promotion-discount-prices | List with basic information of Promotion Discount Prices resources
[**updatePromotionDiscountPrices**](PromotionDiscountPricesApi.md#updatepromotiondiscountprices) | **PATCH** /promotion-discount-prices/{id} | Partially update information about a Promotion Discount Prices resource

# **createPromotionDiscountPrices**
> \Swagger\Client\Model\InlineResponse200219 createPromotionDiscountPrices($body, $_response)

Create a new Promotion Discount Prices resources

Create a new Promotion Discount Prices resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PromotionDiscountPricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Body144(); // \Swagger\Client\Model\Body144 | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createPromotionDiscountPrices($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionDiscountPricesApi->createPromotionDiscountPrices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body144**](../Model/Body144.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200219**](../Model/InlineResponse200219.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPromotionDiscountPrices**
> \Swagger\Client\Model\InlineResponse200219 createPromotionDiscountPrices($body, $_response)

Create a new Promotion Discount Prices resources

Create a new Promotion Discount Prices resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PromotionDiscountPricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\PromotionDiscountPricesFlat(); // \Swagger\Client\Model\PromotionDiscountPricesFlat | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createPromotionDiscountPrices($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionDiscountPricesApi->createPromotionDiscountPrices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PromotionDiscountPricesFlat**](../Model/PromotionDiscountPricesFlat.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200219**](../Model/InlineResponse200219.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePromotionDiscountPrices**
> deletePromotionDiscountPrices($id, $_response)

Delete a Promotion Discount Prices resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PromotionDiscountPricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the promotion_discount_prices
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deletePromotionDiscountPrices($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling PromotionDiscountPricesApi->deletePromotionDiscountPrices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the promotion_discount_prices |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPromotionDiscountPrices**
> \Swagger\Client\Model\InlineResponse200219 getPromotionDiscountPrices($id)

Detailed information about a Promotion Discount Prices resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PromotionDiscountPricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the promotion_discount_prices

try {
    $result = $apiInstance->getPromotionDiscountPrices($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionDiscountPricesApi->getPromotionDiscountPrices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the promotion_discount_prices |

### Return type

[**\Swagger\Client\Model\InlineResponse200219**](../Model/InlineResponse200219.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPromotionDiscountPricesList**
> \Swagger\Client\Model\InlineResponse200217 getPromotionDiscountPricesList($limit, $page, $query)

List with basic information of Promotion Discount Prices resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PromotionDiscountPricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getPromotionDiscountPricesList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionDiscountPricesApi->getPromotionDiscountPricesList: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse200217**](../Model/InlineResponse200217.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePromotionDiscountPrices**
> \Swagger\Client\Model\InlineResponse200219 updatePromotionDiscountPrices($id, $body, $_response)

Partially update information about a Promotion Discount Prices resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PromotionDiscountPricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the promotion_discount_prices
$body = new \Swagger\Client\Model\Body145(); // \Swagger\Client\Model\Body145 | Partially update information about a Promotion Discount Prices resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updatePromotionDiscountPrices($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionDiscountPricesApi->updatePromotionDiscountPrices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the promotion_discount_prices |
 **body** | [**\Swagger\Client\Model\Body145**](../Model/Body145.md)| Partially update information about a Promotion Discount Prices resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200219**](../Model/InlineResponse200219.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePromotionDiscountPrices**
> \Swagger\Client\Model\InlineResponse200219 updatePromotionDiscountPrices($id, $body, $_response)

Partially update information about a Promotion Discount Prices resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PromotionDiscountPricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the promotion_discount_prices
$body = new \Swagger\Client\Model\PromotionDiscountPricesFlat(); // \Swagger\Client\Model\PromotionDiscountPricesFlat | Partially update information about a Promotion Discount Prices resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updatePromotionDiscountPrices($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionDiscountPricesApi->updatePromotionDiscountPrices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the promotion_discount_prices |
 **body** | [**\Swagger\Client\Model\PromotionDiscountPricesFlat**](../Model/PromotionDiscountPricesFlat.md)| Partially update information about a Promotion Discount Prices resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200219**](../Model/InlineResponse200219.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

