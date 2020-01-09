# Shopware6SDK\OrderDeliveryPositionApi

All URIs are relative to *http://shopware.test/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrderDeliveryPosition**](OrderDeliveryPositionApi.md#createorderdeliveryposition) | **POST** /order-delivery-position | Create a new Order Delivery Position resources
[**deleteOrderDeliveryPosition**](OrderDeliveryPositionApi.md#deleteorderdeliveryposition) | **DELETE** /order-delivery-position/{id} | Delete a Order Delivery Position resource
[**getOrderDeliveryPosition**](OrderDeliveryPositionApi.md#getorderdeliveryposition) | **GET** /order-delivery-position/{id} | Detailed information about a Order Delivery Position resource
[**getOrderDeliveryPositionList**](OrderDeliveryPositionApi.md#getorderdeliverypositionlist) | **GET** /order-delivery-position | List with basic information of Order Delivery Position resources
[**updateOrderDeliveryPosition**](OrderDeliveryPositionApi.md#updateorderdeliveryposition) | **PATCH** /order-delivery-position/{id} | Partially update information about a Order Delivery Position resource

# **createOrderDeliveryPosition**
> \Shopware6SDK\Model\InlineResponse200159 createOrderDeliveryPosition($body, $_response)

Create a new Order Delivery Position resources

Create a new Order Delivery Position resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\OrderDeliveryPositionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Shopware6SDK\Model\Body104(); // \Shopware6SDK\Model\Body104 | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createOrderDeliveryPosition($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderDeliveryPositionApi->createOrderDeliveryPosition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Shopware6SDK\Model\Body104**](../Model/Body104.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Shopware6SDK\Model\InlineResponse200159**](../Model/InlineResponse200159.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createOrderDeliveryPosition**
> \Shopware6SDK\Model\InlineResponse200159 createOrderDeliveryPosition($body, $_response)

Create a new Order Delivery Position resources

Create a new Order Delivery Position resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\OrderDeliveryPositionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Shopware6SDK\Model\OrderDeliveryPositionFlat(); // \Shopware6SDK\Model\OrderDeliveryPositionFlat | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createOrderDeliveryPosition($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderDeliveryPositionApi->createOrderDeliveryPosition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Shopware6SDK\Model\OrderDeliveryPositionFlat**](../Model/OrderDeliveryPositionFlat.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Shopware6SDK\Model\InlineResponse200159**](../Model/InlineResponse200159.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOrderDeliveryPosition**
> deleteOrderDeliveryPosition($id, $_response)

Delete a Order Delivery Position resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\OrderDeliveryPositionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the order_delivery_position
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteOrderDeliveryPosition($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling OrderDeliveryPositionApi->deleteOrderDeliveryPosition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the order_delivery_position |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderDeliveryPosition**
> \Shopware6SDK\Model\InlineResponse200159 getOrderDeliveryPosition($id)

Detailed information about a Order Delivery Position resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\OrderDeliveryPositionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the order_delivery_position

try {
    $result = $apiInstance->getOrderDeliveryPosition($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderDeliveryPositionApi->getOrderDeliveryPosition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the order_delivery_position |

### Return type

[**\Shopware6SDK\Model\InlineResponse200159**](../Model/InlineResponse200159.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderDeliveryPositionList**
> \Shopware6SDK\Model\InlineResponse200157 getOrderDeliveryPositionList($limit, $page, $query)

List with basic information of Order Delivery Position resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\OrderDeliveryPositionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getOrderDeliveryPositionList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderDeliveryPositionApi->getOrderDeliveryPositionList: ', $e->getMessage(), PHP_EOL;
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

[**\Shopware6SDK\Model\InlineResponse200157**](../Model/InlineResponse200157.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOrderDeliveryPosition**
> \Shopware6SDK\Model\InlineResponse200159 updateOrderDeliveryPosition($id, $body, $_response)

Partially update information about a Order Delivery Position resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\OrderDeliveryPositionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the order_delivery_position
$body = new \Shopware6SDK\Model\Body105(); // \Shopware6SDK\Model\Body105 | Partially update information about a Order Delivery Position resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateOrderDeliveryPosition($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderDeliveryPositionApi->updateOrderDeliveryPosition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the order_delivery_position |
 **body** | [**\Shopware6SDK\Model\Body105**](../Model/Body105.md)| Partially update information about a Order Delivery Position resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Shopware6SDK\Model\InlineResponse200159**](../Model/InlineResponse200159.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOrderDeliveryPosition**
> \Shopware6SDK\Model\InlineResponse200159 updateOrderDeliveryPosition($id, $body, $_response)

Partially update information about a Order Delivery Position resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\OrderDeliveryPositionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the order_delivery_position
$body = new \Shopware6SDK\Model\OrderDeliveryPositionFlat(); // \Shopware6SDK\Model\OrderDeliveryPositionFlat | Partially update information about a Order Delivery Position resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateOrderDeliveryPosition($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderDeliveryPositionApi->updateOrderDeliveryPosition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the order_delivery_position |
 **body** | [**\Shopware6SDK\Model\OrderDeliveryPositionFlat**](../Model/OrderDeliveryPositionFlat.md)| Partially update information about a Order Delivery Position resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Shopware6SDK\Model\InlineResponse200159**](../Model/InlineResponse200159.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

