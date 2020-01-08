# ShopwareSDK6\DeliveryTimeApi

All URIs are relative to *http://shopware.test/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDeliveryTime**](DeliveryTimeApi.md#createdeliverytime) | **POST** /delivery-time | Create a new Delivery Time resources
[**deleteDeliveryTime**](DeliveryTimeApi.md#deletedeliverytime) | **DELETE** /delivery-time/{id} | Delete a Delivery Time resource
[**getDeliveryTime**](DeliveryTimeApi.md#getdeliverytime) | **GET** /delivery-time/{id} | Detailed information about a Delivery Time resource
[**getDeliveryTimeList**](DeliveryTimeApi.md#getdeliverytimelist) | **GET** /delivery-time | List with basic information of Delivery Time resources
[**updateDeliveryTime**](DeliveryTimeApi.md#updatedeliverytime) | **PATCH** /delivery-time/{id} | Partially update information about a Delivery Time resource

# **createDeliveryTime**
> \ShopwareSDK6\Model\InlineResponse20057 createDeliveryTime($body, $_response)

Create a new Delivery Time resources

Create a new Delivery Time resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\DeliveryTimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ShopwareSDK6\Model\Body36(); // \ShopwareSDK6\Model\Body36 | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createDeliveryTime($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryTimeApi->createDeliveryTime: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ShopwareSDK6\Model\Body36**](../Model/Body36.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse20057**](../Model/InlineResponse20057.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createDeliveryTime**
> \ShopwareSDK6\Model\InlineResponse20057 createDeliveryTime($body, $_response)

Create a new Delivery Time resources

Create a new Delivery Time resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\DeliveryTimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ShopwareSDK6\Model\DeliveryTimeFlat(); // \ShopwareSDK6\Model\DeliveryTimeFlat | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createDeliveryTime($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryTimeApi->createDeliveryTime: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ShopwareSDK6\Model\DeliveryTimeFlat**](../Model/DeliveryTimeFlat.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse20057**](../Model/InlineResponse20057.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDeliveryTime**
> deleteDeliveryTime($id, $_response)

Delete a Delivery Time resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\DeliveryTimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the delivery_time
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteDeliveryTime($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryTimeApi->deleteDeliveryTime: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the delivery_time |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDeliveryTime**
> \ShopwareSDK6\Model\InlineResponse20057 getDeliveryTime($id)

Detailed information about a Delivery Time resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\DeliveryTimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the delivery_time

try {
    $result = $apiInstance->getDeliveryTime($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryTimeApi->getDeliveryTime: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the delivery_time |

### Return type

[**\ShopwareSDK6\Model\InlineResponse20057**](../Model/InlineResponse20057.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDeliveryTimeList**
> \ShopwareSDK6\Model\InlineResponse20055 getDeliveryTimeList($limit, $page, $query)

List with basic information of Delivery Time resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\DeliveryTimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getDeliveryTimeList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryTimeApi->getDeliveryTimeList: ', $e->getMessage(), PHP_EOL;
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

[**\ShopwareSDK6\Model\InlineResponse20055**](../Model/InlineResponse20055.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDeliveryTime**
> \ShopwareSDK6\Model\InlineResponse20057 updateDeliveryTime($id, $body, $_response)

Partially update information about a Delivery Time resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\DeliveryTimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the delivery_time
$body = new \ShopwareSDK6\Model\Body37(); // \ShopwareSDK6\Model\Body37 | Partially update information about a Delivery Time resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateDeliveryTime($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryTimeApi->updateDeliveryTime: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the delivery_time |
 **body** | [**\ShopwareSDK6\Model\Body37**](../Model/Body37.md)| Partially update information about a Delivery Time resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse20057**](../Model/InlineResponse20057.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDeliveryTime**
> \ShopwareSDK6\Model\InlineResponse20057 updateDeliveryTime($id, $body, $_response)

Partially update information about a Delivery Time resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\DeliveryTimeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the delivery_time
$body = new \ShopwareSDK6\Model\DeliveryTimeFlat(); // \ShopwareSDK6\Model\DeliveryTimeFlat | Partially update information about a Delivery Time resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateDeliveryTime($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryTimeApi->updateDeliveryTime: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the delivery_time |
 **body** | [**\ShopwareSDK6\Model\DeliveryTimeFlat**](../Model/DeliveryTimeFlat.md)| Partially update information about a Delivery Time resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse20057**](../Model/InlineResponse20057.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

