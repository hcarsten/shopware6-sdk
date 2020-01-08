# ShopwareSDK6\StateMachineApi

All URIs are relative to *http://shopware.test/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createStateMachine**](StateMachineApi.md#createstatemachine) | **POST** /state-machine | Create a new State Machine resources
[**deleteStateMachine**](StateMachineApi.md#deletestatemachine) | **DELETE** /state-machine/{id} | Delete a State Machine resource
[**getStateMachine**](StateMachineApi.md#getstatemachine) | **GET** /state-machine/{id} | Detailed information about a State Machine resource
[**getStateMachineList**](StateMachineApi.md#getstatemachinelist) | **GET** /state-machine | List with basic information of State Machine resources
[**updateStateMachine**](StateMachineApi.md#updatestatemachine) | **PATCH** /state-machine/{id} | Partially update information about a State Machine resource

# **createStateMachine**
> \ShopwareSDK6\Model\InlineResponse200276 createStateMachine($body, $_response)

Create a new State Machine resources

Create a new State Machine resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\StateMachineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ShopwareSDK6\Model\Body182(); // \ShopwareSDK6\Model\Body182 | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createStateMachine($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StateMachineApi->createStateMachine: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ShopwareSDK6\Model\Body182**](../Model/Body182.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200276**](../Model/InlineResponse200276.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createStateMachine**
> \ShopwareSDK6\Model\InlineResponse200276 createStateMachine($body, $_response)

Create a new State Machine resources

Create a new State Machine resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\StateMachineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ShopwareSDK6\Model\StateMachineFlat(); // \ShopwareSDK6\Model\StateMachineFlat | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createStateMachine($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StateMachineApi->createStateMachine: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ShopwareSDK6\Model\StateMachineFlat**](../Model/StateMachineFlat.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200276**](../Model/InlineResponse200276.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteStateMachine**
> deleteStateMachine($id, $_response)

Delete a State Machine resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\StateMachineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the state_machine
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteStateMachine($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling StateMachineApi->deleteStateMachine: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the state_machine |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStateMachine**
> \ShopwareSDK6\Model\InlineResponse200276 getStateMachine($id)

Detailed information about a State Machine resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\StateMachineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the state_machine

try {
    $result = $apiInstance->getStateMachine($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StateMachineApi->getStateMachine: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the state_machine |

### Return type

[**\ShopwareSDK6\Model\InlineResponse200276**](../Model/InlineResponse200276.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStateMachineList**
> \ShopwareSDK6\Model\InlineResponse200274 getStateMachineList($limit, $page, $query)

List with basic information of State Machine resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\StateMachineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getStateMachineList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StateMachineApi->getStateMachineList: ', $e->getMessage(), PHP_EOL;
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

[**\ShopwareSDK6\Model\InlineResponse200274**](../Model/InlineResponse200274.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateStateMachine**
> \ShopwareSDK6\Model\InlineResponse200276 updateStateMachine($id, $body, $_response)

Partially update information about a State Machine resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\StateMachineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the state_machine
$body = new \ShopwareSDK6\Model\Body183(); // \ShopwareSDK6\Model\Body183 | Partially update information about a State Machine resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateStateMachine($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StateMachineApi->updateStateMachine: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the state_machine |
 **body** | [**\ShopwareSDK6\Model\Body183**](../Model/Body183.md)| Partially update information about a State Machine resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200276**](../Model/InlineResponse200276.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateStateMachine**
> \ShopwareSDK6\Model\InlineResponse200276 updateStateMachine($id, $body, $_response)

Partially update information about a State Machine resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\StateMachineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the state_machine
$body = new \ShopwareSDK6\Model\StateMachineFlat(); // \ShopwareSDK6\Model\StateMachineFlat | Partially update information about a State Machine resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateStateMachine($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StateMachineApi->updateStateMachine: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the state_machine |
 **body** | [**\ShopwareSDK6\Model\StateMachineFlat**](../Model/StateMachineFlat.md)| Partially update information about a State Machine resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200276**](../Model/InlineResponse200276.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

