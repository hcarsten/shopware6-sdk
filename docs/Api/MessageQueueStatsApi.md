# Shopware6SDK\MessageQueueStatsApi

All URIs are relative to *http://shopware.test/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createMessageQueueStats**](MessageQueueStatsApi.md#createmessagequeuestats) | **POST** /message-queue-stats | Create a new Message Queue Stats resources
[**deleteMessageQueueStats**](MessageQueueStatsApi.md#deletemessagequeuestats) | **DELETE** /message-queue-stats/{id} | Delete a Message Queue Stats resource
[**getMessageQueueStats**](MessageQueueStatsApi.md#getmessagequeuestats) | **GET** /message-queue-stats/{id} | Detailed information about a Message Queue Stats resource
[**getMessageQueueStatsList**](MessageQueueStatsApi.md#getmessagequeuestatslist) | **GET** /message-queue-stats | List with basic information of Message Queue Stats resources
[**updateMessageQueueStats**](MessageQueueStatsApi.md#updatemessagequeuestats) | **PATCH** /message-queue-stats/{id} | Partially update information about a Message Queue Stats resource

# **createMessageQueueStats**
> \Shopware6SDK\Model\InlineResponse200129 createMessageQueueStats($body, $_response)

Create a new Message Queue Stats resources

Create a new Message Queue Stats resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\MessageQueueStatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Shopware6SDK\Model\Body84(); // \Shopware6SDK\Model\Body84 | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createMessageQueueStats($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageQueueStatsApi->createMessageQueueStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Shopware6SDK\Model\Body84**](../Model/Body84.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Shopware6SDK\Model\InlineResponse200129**](../Model/InlineResponse200129.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createMessageQueueStats**
> \Shopware6SDK\Model\InlineResponse200129 createMessageQueueStats($body, $_response)

Create a new Message Queue Stats resources

Create a new Message Queue Stats resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\MessageQueueStatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Shopware6SDK\Model\MessageQueueStatsFlat(); // \Shopware6SDK\Model\MessageQueueStatsFlat | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createMessageQueueStats($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageQueueStatsApi->createMessageQueueStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Shopware6SDK\Model\MessageQueueStatsFlat**](../Model/MessageQueueStatsFlat.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Shopware6SDK\Model\InlineResponse200129**](../Model/InlineResponse200129.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMessageQueueStats**
> deleteMessageQueueStats($id, $_response)

Delete a Message Queue Stats resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\MessageQueueStatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the message_queue_stats
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteMessageQueueStats($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling MessageQueueStatsApi->deleteMessageQueueStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the message_queue_stats |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMessageQueueStats**
> \Shopware6SDK\Model\InlineResponse200129 getMessageQueueStats($id)

Detailed information about a Message Queue Stats resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\MessageQueueStatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the message_queue_stats

try {
    $result = $apiInstance->getMessageQueueStats($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageQueueStatsApi->getMessageQueueStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the message_queue_stats |

### Return type

[**\Shopware6SDK\Model\InlineResponse200129**](../Model/InlineResponse200129.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMessageQueueStatsList**
> \Shopware6SDK\Model\InlineResponse200127 getMessageQueueStatsList($limit, $page, $query)

List with basic information of Message Queue Stats resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\MessageQueueStatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getMessageQueueStatsList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageQueueStatsApi->getMessageQueueStatsList: ', $e->getMessage(), PHP_EOL;
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

[**\Shopware6SDK\Model\InlineResponse200127**](../Model/InlineResponse200127.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMessageQueueStats**
> \Shopware6SDK\Model\InlineResponse200129 updateMessageQueueStats($id, $body, $_response)

Partially update information about a Message Queue Stats resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\MessageQueueStatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the message_queue_stats
$body = new \Shopware6SDK\Model\Body85(); // \Shopware6SDK\Model\Body85 | Partially update information about a Message Queue Stats resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateMessageQueueStats($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageQueueStatsApi->updateMessageQueueStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the message_queue_stats |
 **body** | [**\Shopware6SDK\Model\Body85**](../Model/Body85.md)| Partially update information about a Message Queue Stats resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Shopware6SDK\Model\InlineResponse200129**](../Model/InlineResponse200129.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMessageQueueStats**
> \Shopware6SDK\Model\InlineResponse200129 updateMessageQueueStats($id, $body, $_response)

Partially update information about a Message Queue Stats resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\MessageQueueStatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the message_queue_stats
$body = new \Shopware6SDK\Model\MessageQueueStatsFlat(); // \Shopware6SDK\Model\MessageQueueStatsFlat | Partially update information about a Message Queue Stats resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateMessageQueueStats($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageQueueStatsApi->updateMessageQueueStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the message_queue_stats |
 **body** | [**\Shopware6SDK\Model\MessageQueueStatsFlat**](../Model/MessageQueueStatsFlat.md)| Partially update information about a Message Queue Stats resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Shopware6SDK\Model\InlineResponse200129**](../Model/InlineResponse200129.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

