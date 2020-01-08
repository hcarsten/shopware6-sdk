# Swagger\Client\TaxRuleApi

All URIs are relative to *http://shopware.test/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTaxRule**](TaxRuleApi.md#createtaxrule) | **POST** /tax-rule | Create a new Tax Rule resources
[**deleteTaxRule**](TaxRuleApi.md#deletetaxrule) | **DELETE** /tax-rule/{id} | Delete a Tax Rule resource
[**getTaxRule**](TaxRuleApi.md#gettaxrule) | **GET** /tax-rule/{id} | Detailed information about a Tax Rule resource
[**getTaxRuleList**](TaxRuleApi.md#gettaxrulelist) | **GET** /tax-rule | List with basic information of Tax Rule resources
[**updateTaxRule**](TaxRuleApi.md#updatetaxrule) | **PATCH** /tax-rule/{id} | Partially update information about a Tax Rule resource

# **createTaxRule**
> \Swagger\Client\Model\InlineResponse200297 createTaxRule($body, $_response)

Create a new Tax Rule resources

Create a new Tax Rule resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TaxRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Body196(); // \Swagger\Client\Model\Body196 | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createTaxRule($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxRuleApi->createTaxRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body196**](../Model/Body196.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200297**](../Model/InlineResponse200297.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createTaxRule**
> \Swagger\Client\Model\InlineResponse200297 createTaxRule($body, $_response)

Create a new Tax Rule resources

Create a new Tax Rule resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TaxRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\TaxRuleFlat(); // \Swagger\Client\Model\TaxRuleFlat | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createTaxRule($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxRuleApi->createTaxRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\TaxRuleFlat**](../Model/TaxRuleFlat.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200297**](../Model/InlineResponse200297.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTaxRule**
> deleteTaxRule($id, $_response)

Delete a Tax Rule resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TaxRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the tax_rule
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteTaxRule($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling TaxRuleApi->deleteTaxRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the tax_rule |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTaxRule**
> \Swagger\Client\Model\InlineResponse200297 getTaxRule($id)

Detailed information about a Tax Rule resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TaxRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the tax_rule

try {
    $result = $apiInstance->getTaxRule($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxRuleApi->getTaxRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the tax_rule |

### Return type

[**\Swagger\Client\Model\InlineResponse200297**](../Model/InlineResponse200297.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTaxRuleList**
> \Swagger\Client\Model\InlineResponse200295 getTaxRuleList($limit, $page, $query)

List with basic information of Tax Rule resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TaxRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getTaxRuleList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxRuleApi->getTaxRuleList: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse200295**](../Model/InlineResponse200295.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTaxRule**
> \Swagger\Client\Model\InlineResponse200297 updateTaxRule($id, $body, $_response)

Partially update information about a Tax Rule resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TaxRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the tax_rule
$body = new \Swagger\Client\Model\Body197(); // \Swagger\Client\Model\Body197 | Partially update information about a Tax Rule resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateTaxRule($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxRuleApi->updateTaxRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the tax_rule |
 **body** | [**\Swagger\Client\Model\Body197**](../Model/Body197.md)| Partially update information about a Tax Rule resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200297**](../Model/InlineResponse200297.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTaxRule**
> \Swagger\Client\Model\InlineResponse200297 updateTaxRule($id, $body, $_response)

Partially update information about a Tax Rule resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TaxRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the tax_rule
$body = new \Swagger\Client\Model\TaxRuleFlat(); // \Swagger\Client\Model\TaxRuleFlat | Partially update information about a Tax Rule resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateTaxRule($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxRuleApi->updateTaxRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the tax_rule |
 **body** | [**\Swagger\Client\Model\TaxRuleFlat**](../Model/TaxRuleFlat.md)| Partially update information about a Tax Rule resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200297**](../Model/InlineResponse200297.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

