# Swagger\Client\TaxRuleTypeApi

All URIs are relative to *http://shopware.test/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTaxRuleType**](TaxRuleTypeApi.md#createtaxruletype) | **POST** /tax-rule-type | Create a new Tax Rule Type resources
[**deleteTaxRuleType**](TaxRuleTypeApi.md#deletetaxruletype) | **DELETE** /tax-rule-type/{id} | Delete a Tax Rule Type resource
[**getTaxRuleType**](TaxRuleTypeApi.md#gettaxruletype) | **GET** /tax-rule-type/{id} | Detailed information about a Tax Rule Type resource
[**getTaxRuleTypeList**](TaxRuleTypeApi.md#gettaxruletypelist) | **GET** /tax-rule-type | List with basic information of Tax Rule Type resources
[**updateTaxRuleType**](TaxRuleTypeApi.md#updatetaxruletype) | **PATCH** /tax-rule-type/{id} | Partially update information about a Tax Rule Type resource

# **createTaxRuleType**
> \Swagger\Client\Model\InlineResponse200300 createTaxRuleType($body, $_response)

Create a new Tax Rule Type resources

Create a new Tax Rule Type resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TaxRuleTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Body198(); // \Swagger\Client\Model\Body198 | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createTaxRuleType($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxRuleTypeApi->createTaxRuleType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body198**](../Model/Body198.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200300**](../Model/InlineResponse200300.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createTaxRuleType**
> \Swagger\Client\Model\InlineResponse200300 createTaxRuleType($body, $_response)

Create a new Tax Rule Type resources

Create a new Tax Rule Type resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TaxRuleTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\TaxRuleTypeFlat(); // \Swagger\Client\Model\TaxRuleTypeFlat | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createTaxRuleType($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxRuleTypeApi->createTaxRuleType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\TaxRuleTypeFlat**](../Model/TaxRuleTypeFlat.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200300**](../Model/InlineResponse200300.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTaxRuleType**
> deleteTaxRuleType($id, $_response)

Delete a Tax Rule Type resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TaxRuleTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the tax_rule_type
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteTaxRuleType($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling TaxRuleTypeApi->deleteTaxRuleType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the tax_rule_type |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTaxRuleType**
> \Swagger\Client\Model\InlineResponse200300 getTaxRuleType($id)

Detailed information about a Tax Rule Type resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TaxRuleTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the tax_rule_type

try {
    $result = $apiInstance->getTaxRuleType($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxRuleTypeApi->getTaxRuleType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the tax_rule_type |

### Return type

[**\Swagger\Client\Model\InlineResponse200300**](../Model/InlineResponse200300.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTaxRuleTypeList**
> \Swagger\Client\Model\InlineResponse200298 getTaxRuleTypeList($limit, $page, $query)

List with basic information of Tax Rule Type resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TaxRuleTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getTaxRuleTypeList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxRuleTypeApi->getTaxRuleTypeList: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse200298**](../Model/InlineResponse200298.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTaxRuleType**
> \Swagger\Client\Model\InlineResponse200300 updateTaxRuleType($id, $body, $_response)

Partially update information about a Tax Rule Type resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TaxRuleTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the tax_rule_type
$body = new \Swagger\Client\Model\Body199(); // \Swagger\Client\Model\Body199 | Partially update information about a Tax Rule Type resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateTaxRuleType($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxRuleTypeApi->updateTaxRuleType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the tax_rule_type |
 **body** | [**\Swagger\Client\Model\Body199**](../Model/Body199.md)| Partially update information about a Tax Rule Type resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200300**](../Model/InlineResponse200300.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTaxRuleType**
> \Swagger\Client\Model\InlineResponse200300 updateTaxRuleType($id, $body, $_response)

Partially update information about a Tax Rule Type resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TaxRuleTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the tax_rule_type
$body = new \Swagger\Client\Model\TaxRuleTypeFlat(); // \Swagger\Client\Model\TaxRuleTypeFlat | Partially update information about a Tax Rule Type resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateTaxRuleType($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxRuleTypeApi->updateTaxRuleType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the tax_rule_type |
 **body** | [**\Swagger\Client\Model\TaxRuleTypeFlat**](../Model/TaxRuleTypeFlat.md)| Partially update information about a Tax Rule Type resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200300**](../Model/InlineResponse200300.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

