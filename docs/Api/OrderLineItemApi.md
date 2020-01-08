# ShopwareSDK6\OrderLineItemApi

All URIs are relative to *http://shopware.test/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrderLineItem**](OrderLineItemApi.md#createorderlineitem) | **POST** /order-line-item | Create a new Order Line Item resources
[**deleteOrderLineItem**](OrderLineItemApi.md#deleteorderlineitem) | **DELETE** /order-line-item/{id} | Delete a Order Line Item resource
[**getOrderLineItem**](OrderLineItemApi.md#getorderlineitem) | **GET** /order-line-item/{id} | Detailed information about a Order Line Item resource
[**getOrderLineItemList**](OrderLineItemApi.md#getorderlineitemlist) | **GET** /order-line-item | List with basic information of Order Line Item resources
[**updateOrderLineItem**](OrderLineItemApi.md#updateorderlineitem) | **PATCH** /order-line-item/{id} | Partially update information about a Order Line Item resource

# **createOrderLineItem**
> \ShopwareSDK6\Model\InlineResponse200162 createOrderLineItem($body, $_response)

Create a new Order Line Item resources

Create a new Order Line Item resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\OrderLineItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ShopwareSDK6\Model\Body106(); // \ShopwareSDK6\Model\Body106 | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createOrderLineItem($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderLineItemApi->createOrderLineItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ShopwareSDK6\Model\Body106**](../Model/Body106.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200162**](../Model/InlineResponse200162.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createOrderLineItem**
> \ShopwareSDK6\Model\InlineResponse200162 createOrderLineItem($body, $_response)

Create a new Order Line Item resources

Create a new Order Line Item resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\OrderLineItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ShopwareSDK6\Model\OrderLineItemFlat(); // \ShopwareSDK6\Model\OrderLineItemFlat | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createOrderLineItem($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderLineItemApi->createOrderLineItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ShopwareSDK6\Model\OrderLineItemFlat**](../Model/OrderLineItemFlat.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200162**](../Model/InlineResponse200162.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOrderLineItem**
> deleteOrderLineItem($id, $_response)

Delete a Order Line Item resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\OrderLineItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the order_line_item
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteOrderLineItem($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling OrderLineItemApi->deleteOrderLineItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the order_line_item |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderLineItem**
> \ShopwareSDK6\Model\InlineResponse200162 getOrderLineItem($id)

Detailed information about a Order Line Item resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\OrderLineItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the order_line_item

try {
    $result = $apiInstance->getOrderLineItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderLineItemApi->getOrderLineItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the order_line_item |

### Return type

[**\ShopwareSDK6\Model\InlineResponse200162**](../Model/InlineResponse200162.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderLineItemList**
> \ShopwareSDK6\Model\InlineResponse200160 getOrderLineItemList($limit, $page, $query)

List with basic information of Order Line Item resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\OrderLineItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getOrderLineItemList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderLineItemApi->getOrderLineItemList: ', $e->getMessage(), PHP_EOL;
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

[**\ShopwareSDK6\Model\InlineResponse200160**](../Model/InlineResponse200160.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOrderLineItem**
> \ShopwareSDK6\Model\InlineResponse200162 updateOrderLineItem($id, $body, $_response)

Partially update information about a Order Line Item resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\OrderLineItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the order_line_item
$body = new \ShopwareSDK6\Model\Body107(); // \ShopwareSDK6\Model\Body107 | Partially update information about a Order Line Item resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateOrderLineItem($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderLineItemApi->updateOrderLineItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the order_line_item |
 **body** | [**\ShopwareSDK6\Model\Body107**](../Model/Body107.md)| Partially update information about a Order Line Item resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200162**](../Model/InlineResponse200162.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOrderLineItem**
> \ShopwareSDK6\Model\InlineResponse200162 updateOrderLineItem($id, $body, $_response)

Partially update information about a Order Line Item resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\OrderLineItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the order_line_item
$body = new \ShopwareSDK6\Model\OrderLineItemFlat(); // \ShopwareSDK6\Model\OrderLineItemFlat | Partially update information about a Order Line Item resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateOrderLineItem($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderLineItemApi->updateOrderLineItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the order_line_item |
 **body** | [**\ShopwareSDK6\Model\OrderLineItemFlat**](../Model/OrderLineItemFlat.md)| Partially update information about a Order Line Item resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200162**](../Model/InlineResponse200162.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

