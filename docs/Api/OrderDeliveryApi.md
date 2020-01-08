# ShopwareSDK6\OrderDeliveryApi

All URIs are relative to *http://shopware.test/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrderDelivery**](OrderDeliveryApi.md#createorderdelivery) | **POST** /order-delivery | Create a new Order Delivery resources
[**deleteOrderDelivery**](OrderDeliveryApi.md#deleteorderdelivery) | **DELETE** /order-delivery/{id} | Delete a Order Delivery resource
[**getOrderDelivery**](OrderDeliveryApi.md#getorderdelivery) | **GET** /order-delivery/{id} | Detailed information about a Order Delivery resource
[**getOrderDeliveryList**](OrderDeliveryApi.md#getorderdeliverylist) | **GET** /order-delivery | List with basic information of Order Delivery resources
[**updateOrderDelivery**](OrderDeliveryApi.md#updateorderdelivery) | **PATCH** /order-delivery/{id} | Partially update information about a Order Delivery resource

# **createOrderDelivery**
> \ShopwareSDK6\Model\InlineResponse200156 createOrderDelivery($body, $_response)

Create a new Order Delivery resources

Create a new Order Delivery resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\OrderDeliveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ShopwareSDK6\Model\Body102(); // \ShopwareSDK6\Model\Body102 | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createOrderDelivery($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderDeliveryApi->createOrderDelivery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ShopwareSDK6\Model\Body102**](../Model/Body102.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200156**](../Model/InlineResponse200156.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createOrderDelivery**
> \ShopwareSDK6\Model\InlineResponse200156 createOrderDelivery($body, $_response)

Create a new Order Delivery resources

Create a new Order Delivery resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\OrderDeliveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ShopwareSDK6\Model\OrderDeliveryFlat(); // \ShopwareSDK6\Model\OrderDeliveryFlat | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createOrderDelivery($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderDeliveryApi->createOrderDelivery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ShopwareSDK6\Model\OrderDeliveryFlat**](../Model/OrderDeliveryFlat.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200156**](../Model/InlineResponse200156.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOrderDelivery**
> deleteOrderDelivery($id, $_response)

Delete a Order Delivery resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\OrderDeliveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the order_delivery
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteOrderDelivery($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling OrderDeliveryApi->deleteOrderDelivery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the order_delivery |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderDelivery**
> \ShopwareSDK6\Model\InlineResponse200156 getOrderDelivery($id)

Detailed information about a Order Delivery resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\OrderDeliveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the order_delivery

try {
    $result = $apiInstance->getOrderDelivery($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderDeliveryApi->getOrderDelivery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the order_delivery |

### Return type

[**\ShopwareSDK6\Model\InlineResponse200156**](../Model/InlineResponse200156.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderDeliveryList**
> \ShopwareSDK6\Model\InlineResponse200154 getOrderDeliveryList($limit, $page, $query)

List with basic information of Order Delivery resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\OrderDeliveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getOrderDeliveryList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderDeliveryApi->getOrderDeliveryList: ', $e->getMessage(), PHP_EOL;
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

[**\ShopwareSDK6\Model\InlineResponse200154**](../Model/InlineResponse200154.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOrderDelivery**
> \ShopwareSDK6\Model\InlineResponse200156 updateOrderDelivery($id, $body, $_response)

Partially update information about a Order Delivery resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\OrderDeliveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the order_delivery
$body = new \ShopwareSDK6\Model\Body103(); // \ShopwareSDK6\Model\Body103 | Partially update information about a Order Delivery resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateOrderDelivery($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderDeliveryApi->updateOrderDelivery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the order_delivery |
 **body** | [**\ShopwareSDK6\Model\Body103**](../Model/Body103.md)| Partially update information about a Order Delivery resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200156**](../Model/InlineResponse200156.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOrderDelivery**
> \ShopwareSDK6\Model\InlineResponse200156 updateOrderDelivery($id, $body, $_response)

Partially update information about a Order Delivery resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\OrderDeliveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the order_delivery
$body = new \ShopwareSDK6\Model\OrderDeliveryFlat(); // \ShopwareSDK6\Model\OrderDeliveryFlat | Partially update information about a Order Delivery resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateOrderDelivery($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderDeliveryApi->updateOrderDelivery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the order_delivery |
 **body** | [**\ShopwareSDK6\Model\OrderDeliveryFlat**](../Model/OrderDeliveryFlat.md)| Partially update information about a Order Delivery resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200156**](../Model/InlineResponse200156.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

