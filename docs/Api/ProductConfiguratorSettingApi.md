# ShopwareSDK6\ProductConfiguratorSettingApi

All URIs are relative to *http://shopware.test/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProductConfiguratorSetting**](ProductConfiguratorSettingApi.md#createproductconfiguratorsetting) | **POST** /product-configurator-setting | Create a new Product Configurator Setting resources
[**deleteProductConfiguratorSetting**](ProductConfiguratorSettingApi.md#deleteproductconfiguratorsetting) | **DELETE** /product-configurator-setting/{id} | Delete a Product Configurator Setting resource
[**getProductConfiguratorSetting**](ProductConfiguratorSettingApi.md#getproductconfiguratorsetting) | **GET** /product-configurator-setting/{id} | Detailed information about a Product Configurator Setting resource
[**getProductConfiguratorSettingList**](ProductConfiguratorSettingApi.md#getproductconfiguratorsettinglist) | **GET** /product-configurator-setting | List with basic information of Product Configurator Setting resources
[**updateProductConfiguratorSetting**](ProductConfiguratorSettingApi.md#updateproductconfiguratorsetting) | **PATCH** /product-configurator-setting/{id} | Partially update information about a Product Configurator Setting resource

# **createProductConfiguratorSetting**
> \ShopwareSDK6\Model\InlineResponse200177 createProductConfiguratorSetting($body, $_response)

Create a new Product Configurator Setting resources

Create a new Product Configurator Setting resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\ProductConfiguratorSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ShopwareSDK6\Model\Body116(); // \ShopwareSDK6\Model\Body116 | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createProductConfiguratorSetting($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductConfiguratorSettingApi->createProductConfiguratorSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ShopwareSDK6\Model\Body116**](../Model/Body116.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200177**](../Model/InlineResponse200177.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createProductConfiguratorSetting**
> \ShopwareSDK6\Model\InlineResponse200177 createProductConfiguratorSetting($body, $_response)

Create a new Product Configurator Setting resources

Create a new Product Configurator Setting resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\ProductConfiguratorSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ShopwareSDK6\Model\ProductConfiguratorSettingFlat(); // \ShopwareSDK6\Model\ProductConfiguratorSettingFlat | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createProductConfiguratorSetting($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductConfiguratorSettingApi->createProductConfiguratorSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ShopwareSDK6\Model\ProductConfiguratorSettingFlat**](../Model/ProductConfiguratorSettingFlat.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200177**](../Model/InlineResponse200177.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProductConfiguratorSetting**
> deleteProductConfiguratorSetting($id, $_response)

Delete a Product Configurator Setting resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\ProductConfiguratorSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the product_configurator_setting
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteProductConfiguratorSetting($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling ProductConfiguratorSettingApi->deleteProductConfiguratorSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the product_configurator_setting |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductConfiguratorSetting**
> \ShopwareSDK6\Model\InlineResponse200177 getProductConfiguratorSetting($id)

Detailed information about a Product Configurator Setting resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\ProductConfiguratorSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the product_configurator_setting

try {
    $result = $apiInstance->getProductConfiguratorSetting($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductConfiguratorSettingApi->getProductConfiguratorSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the product_configurator_setting |

### Return type

[**\ShopwareSDK6\Model\InlineResponse200177**](../Model/InlineResponse200177.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductConfiguratorSettingList**
> \ShopwareSDK6\Model\InlineResponse200175 getProductConfiguratorSettingList($limit, $page, $query)

List with basic information of Product Configurator Setting resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\ProductConfiguratorSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getProductConfiguratorSettingList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductConfiguratorSettingApi->getProductConfiguratorSettingList: ', $e->getMessage(), PHP_EOL;
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

[**\ShopwareSDK6\Model\InlineResponse200175**](../Model/InlineResponse200175.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProductConfiguratorSetting**
> \ShopwareSDK6\Model\InlineResponse200177 updateProductConfiguratorSetting($id, $body, $_response)

Partially update information about a Product Configurator Setting resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\ProductConfiguratorSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the product_configurator_setting
$body = new \ShopwareSDK6\Model\Body117(); // \ShopwareSDK6\Model\Body117 | Partially update information about a Product Configurator Setting resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateProductConfiguratorSetting($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductConfiguratorSettingApi->updateProductConfiguratorSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the product_configurator_setting |
 **body** | [**\ShopwareSDK6\Model\Body117**](../Model/Body117.md)| Partially update information about a Product Configurator Setting resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200177**](../Model/InlineResponse200177.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProductConfiguratorSetting**
> \ShopwareSDK6\Model\InlineResponse200177 updateProductConfiguratorSetting($id, $body, $_response)

Partially update information about a Product Configurator Setting resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\ProductConfiguratorSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the product_configurator_setting
$body = new \ShopwareSDK6\Model\ProductConfiguratorSettingFlat(); // \ShopwareSDK6\Model\ProductConfiguratorSettingFlat | Partially update information about a Product Configurator Setting resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateProductConfiguratorSetting($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductConfiguratorSettingApi->updateProductConfiguratorSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the product_configurator_setting |
 **body** | [**\ShopwareSDK6\Model\ProductConfiguratorSettingFlat**](../Model/ProductConfiguratorSettingFlat.md)| Partially update information about a Product Configurator Setting resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200177**](../Model/InlineResponse200177.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

