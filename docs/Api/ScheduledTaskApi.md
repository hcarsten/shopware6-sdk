# Shopware6SDK\ScheduledTaskApi

All URIs are relative to *http://shopware.test/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createScheduledTask**](ScheduledTaskApi.md#createscheduledtask) | **POST** /scheduled-task | Create a new Scheduled Task resources
[**deleteScheduledTask**](ScheduledTaskApi.md#deletescheduledtask) | **DELETE** /scheduled-task/{id} | Delete a Scheduled Task resource
[**getScheduledTask**](ScheduledTaskApi.md#getscheduledtask) | **GET** /scheduled-task/{id} | Detailed information about a Scheduled Task resource
[**getScheduledTaskList**](ScheduledTaskApi.md#getscheduledtasklist) | **GET** /scheduled-task | List with basic information of Scheduled Task resources
[**updateScheduledTask**](ScheduledTaskApi.md#updatescheduledtask) | **PATCH** /scheduled-task/{id} | Partially update information about a Scheduled Task resource

# **createScheduledTask**
> \Shopware6SDK\Model\InlineResponse200255 createScheduledTask($body, $_response)

Create a new Scheduled Task resources

Create a new Scheduled Task resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\ScheduledTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Shopware6SDK\Model\Body168(); // \Shopware6SDK\Model\Body168 | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createScheduledTask($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledTaskApi->createScheduledTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Shopware6SDK\Model\Body168**](../Model/Body168.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Shopware6SDK\Model\InlineResponse200255**](../Model/InlineResponse200255.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createScheduledTask**
> \Shopware6SDK\Model\InlineResponse200255 createScheduledTask($body, $_response)

Create a new Scheduled Task resources

Create a new Scheduled Task resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\ScheduledTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Shopware6SDK\Model\ScheduledTaskFlat(); // \Shopware6SDK\Model\ScheduledTaskFlat | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createScheduledTask($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledTaskApi->createScheduledTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Shopware6SDK\Model\ScheduledTaskFlat**](../Model/ScheduledTaskFlat.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Shopware6SDK\Model\InlineResponse200255**](../Model/InlineResponse200255.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteScheduledTask**
> deleteScheduledTask($id, $_response)

Delete a Scheduled Task resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\ScheduledTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the scheduled_task
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteScheduledTask($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledTaskApi->deleteScheduledTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the scheduled_task |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getScheduledTask**
> \Shopware6SDK\Model\InlineResponse200255 getScheduledTask($id)

Detailed information about a Scheduled Task resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\ScheduledTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the scheduled_task

try {
    $result = $apiInstance->getScheduledTask($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledTaskApi->getScheduledTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the scheduled_task |

### Return type

[**\Shopware6SDK\Model\InlineResponse200255**](../Model/InlineResponse200255.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getScheduledTaskList**
> \Shopware6SDK\Model\InlineResponse200253 getScheduledTaskList($limit, $page, $query)

List with basic information of Scheduled Task resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\ScheduledTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getScheduledTaskList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledTaskApi->getScheduledTaskList: ', $e->getMessage(), PHP_EOL;
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

[**\Shopware6SDK\Model\InlineResponse200253**](../Model/InlineResponse200253.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateScheduledTask**
> \Shopware6SDK\Model\InlineResponse200255 updateScheduledTask($id, $body, $_response)

Partially update information about a Scheduled Task resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\ScheduledTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the scheduled_task
$body = new \Shopware6SDK\Model\Body169(); // \Shopware6SDK\Model\Body169 | Partially update information about a Scheduled Task resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateScheduledTask($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledTaskApi->updateScheduledTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the scheduled_task |
 **body** | [**\Shopware6SDK\Model\Body169**](../Model/Body169.md)| Partially update information about a Scheduled Task resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Shopware6SDK\Model\InlineResponse200255**](../Model/InlineResponse200255.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateScheduledTask**
> \Shopware6SDK\Model\InlineResponse200255 updateScheduledTask($id, $body, $_response)

Partially update information about a Scheduled Task resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\ScheduledTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the scheduled_task
$body = new \Shopware6SDK\Model\ScheduledTaskFlat(); // \Shopware6SDK\Model\ScheduledTaskFlat | Partially update information about a Scheduled Task resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateScheduledTask($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduledTaskApi->updateScheduledTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the scheduled_task |
 **body** | [**\Shopware6SDK\Model\ScheduledTaskFlat**](../Model/ScheduledTaskFlat.md)| Partially update information about a Scheduled Task resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Shopware6SDK\Model\InlineResponse200255**](../Model/InlineResponse200255.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

