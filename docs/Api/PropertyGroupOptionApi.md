# ShopwareSDK6\PropertyGroupOptionApi

All URIs are relative to *http://shopware.test/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPropertyGroupOption**](PropertyGroupOptionApi.md#createpropertygroupoption) | **POST** /property-group-option | Create a new Property Group Option resources
[**deletePropertyGroupOption**](PropertyGroupOptionApi.md#deletepropertygroupoption) | **DELETE** /property-group-option/{id} | Delete a Property Group Option resource
[**getPropertyGroupOption**](PropertyGroupOptionApi.md#getpropertygroupoption) | **GET** /property-group-option/{id} | Detailed information about a Property Group Option resource
[**getPropertyGroupOptionList**](PropertyGroupOptionApi.md#getpropertygroupoptionlist) | **GET** /property-group-option | List with basic information of Property Group Option resources
[**updatePropertyGroupOption**](PropertyGroupOptionApi.md#updatepropertygroupoption) | **PATCH** /property-group-option/{id} | Partially update information about a Property Group Option resource

# **createPropertyGroupOption**
> \ShopwareSDK6\Model\InlineResponse200234 createPropertyGroupOption($body, $_response)

Create a new Property Group Option resources

Create a new Property Group Option resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\PropertyGroupOptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ShopwareSDK6\Model\Body154(); // \ShopwareSDK6\Model\Body154 | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createPropertyGroupOption($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyGroupOptionApi->createPropertyGroupOption: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ShopwareSDK6\Model\Body154**](../Model/Body154.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200234**](../Model/InlineResponse200234.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPropertyGroupOption**
> \ShopwareSDK6\Model\InlineResponse200234 createPropertyGroupOption($body, $_response)

Create a new Property Group Option resources

Create a new Property Group Option resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\PropertyGroupOptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ShopwareSDK6\Model\PropertyGroupOptionFlat(); // \ShopwareSDK6\Model\PropertyGroupOptionFlat | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createPropertyGroupOption($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyGroupOptionApi->createPropertyGroupOption: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ShopwareSDK6\Model\PropertyGroupOptionFlat**](../Model/PropertyGroupOptionFlat.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200234**](../Model/InlineResponse200234.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePropertyGroupOption**
> deletePropertyGroupOption($id, $_response)

Delete a Property Group Option resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\PropertyGroupOptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the property_group_option
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deletePropertyGroupOption($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling PropertyGroupOptionApi->deletePropertyGroupOption: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the property_group_option |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPropertyGroupOption**
> \ShopwareSDK6\Model\InlineResponse200234 getPropertyGroupOption($id)

Detailed information about a Property Group Option resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\PropertyGroupOptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the property_group_option

try {
    $result = $apiInstance->getPropertyGroupOption($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyGroupOptionApi->getPropertyGroupOption: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the property_group_option |

### Return type

[**\ShopwareSDK6\Model\InlineResponse200234**](../Model/InlineResponse200234.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPropertyGroupOptionList**
> \ShopwareSDK6\Model\InlineResponse200232 getPropertyGroupOptionList($limit, $page, $query)

List with basic information of Property Group Option resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\PropertyGroupOptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getPropertyGroupOptionList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyGroupOptionApi->getPropertyGroupOptionList: ', $e->getMessage(), PHP_EOL;
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

[**\ShopwareSDK6\Model\InlineResponse200232**](../Model/InlineResponse200232.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePropertyGroupOption**
> \ShopwareSDK6\Model\InlineResponse200234 updatePropertyGroupOption($id, $body, $_response)

Partially update information about a Property Group Option resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\PropertyGroupOptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the property_group_option
$body = new \ShopwareSDK6\Model\Body155(); // \ShopwareSDK6\Model\Body155 | Partially update information about a Property Group Option resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updatePropertyGroupOption($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyGroupOptionApi->updatePropertyGroupOption: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the property_group_option |
 **body** | [**\ShopwareSDK6\Model\Body155**](../Model/Body155.md)| Partially update information about a Property Group Option resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200234**](../Model/InlineResponse200234.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePropertyGroupOption**
> \ShopwareSDK6\Model\InlineResponse200234 updatePropertyGroupOption($id, $body, $_response)

Partially update information about a Property Group Option resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\PropertyGroupOptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the property_group_option
$body = new \ShopwareSDK6\Model\PropertyGroupOptionFlat(); // \ShopwareSDK6\Model\PropertyGroupOptionFlat | Partially update information about a Property Group Option resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updatePropertyGroupOption($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyGroupOptionApi->updatePropertyGroupOption: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the property_group_option |
 **body** | [**\ShopwareSDK6\Model\PropertyGroupOptionFlat**](../Model/PropertyGroupOptionFlat.md)| Partially update information about a Property Group Option resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200234**](../Model/InlineResponse200234.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

