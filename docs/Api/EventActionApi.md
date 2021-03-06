# Shopware6SDK\EventActionApi

All URIs are relative to *http://shopware.test/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createEventAction**](EventActionApi.md#createeventaction) | **POST** /event-action | Create a new Event Action resources
[**deleteEventAction**](EventActionApi.md#deleteeventaction) | **DELETE** /event-action/{id} | Delete a Event Action resource
[**getEventAction**](EventActionApi.md#geteventaction) | **GET** /event-action/{id} | Detailed information about a Event Action resource
[**getEventActionList**](EventActionApi.md#geteventactionlist) | **GET** /event-action | List with basic information of Event Action resources
[**updateEventAction**](EventActionApi.md#updateeventaction) | **PATCH** /event-action/{id} | Partially update information about a Event Action resource

# **createEventAction**
> \Shopware6SDK\Model\InlineResponse20072 createEventAction($body, $_response)

Create a new Event Action resources

Create a new Event Action resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\EventActionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Shopware6SDK\Model\Body46(); // \Shopware6SDK\Model\Body46 | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createEventAction($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventActionApi->createEventAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Shopware6SDK\Model\Body46**](../Model/Body46.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Shopware6SDK\Model\InlineResponse20072**](../Model/InlineResponse20072.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createEventAction**
> \Shopware6SDK\Model\InlineResponse20072 createEventAction($body, $_response)

Create a new Event Action resources

Create a new Event Action resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\EventActionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Shopware6SDK\Model\EventActionFlat(); // \Shopware6SDK\Model\EventActionFlat | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createEventAction($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventActionApi->createEventAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Shopware6SDK\Model\EventActionFlat**](../Model/EventActionFlat.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Shopware6SDK\Model\InlineResponse20072**](../Model/InlineResponse20072.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteEventAction**
> deleteEventAction($id, $_response)

Delete a Event Action resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\EventActionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the event_action
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteEventAction($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling EventActionApi->deleteEventAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the event_action |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEventAction**
> \Shopware6SDK\Model\InlineResponse20072 getEventAction($id)

Detailed information about a Event Action resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\EventActionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the event_action

try {
    $result = $apiInstance->getEventAction($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventActionApi->getEventAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the event_action |

### Return type

[**\Shopware6SDK\Model\InlineResponse20072**](../Model/InlineResponse20072.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEventActionList**
> \Shopware6SDK\Model\InlineResponse20070 getEventActionList($limit, $page, $query)

List with basic information of Event Action resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\EventActionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getEventActionList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventActionApi->getEventActionList: ', $e->getMessage(), PHP_EOL;
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

[**\Shopware6SDK\Model\InlineResponse20070**](../Model/InlineResponse20070.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEventAction**
> \Shopware6SDK\Model\InlineResponse20072 updateEventAction($id, $body, $_response)

Partially update information about a Event Action resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\EventActionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the event_action
$body = new \Shopware6SDK\Model\Body47(); // \Shopware6SDK\Model\Body47 | Partially update information about a Event Action resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateEventAction($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventActionApi->updateEventAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the event_action |
 **body** | [**\Shopware6SDK\Model\Body47**](../Model/Body47.md)| Partially update information about a Event Action resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Shopware6SDK\Model\InlineResponse20072**](../Model/InlineResponse20072.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEventAction**
> \Shopware6SDK\Model\InlineResponse20072 updateEventAction($id, $body, $_response)

Partially update information about a Event Action resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\EventActionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the event_action
$body = new \Shopware6SDK\Model\EventActionFlat(); // \Shopware6SDK\Model\EventActionFlat | Partially update information about a Event Action resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateEventAction($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventActionApi->updateEventAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the event_action |
 **body** | [**\Shopware6SDK\Model\EventActionFlat**](../Model/EventActionFlat.md)| Partially update information about a Event Action resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Shopware6SDK\Model\InlineResponse20072**](../Model/InlineResponse20072.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

