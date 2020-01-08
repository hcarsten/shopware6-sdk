# ShopwareSDK6\StateMachineStateApi

All URIs are relative to *http://shopware.test/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createStateMachineState**](StateMachineStateApi.md#createstatemachinestate) | **POST** /state-machine-state | Create a new State Machine State resources
[**deleteStateMachineState**](StateMachineStateApi.md#deletestatemachinestate) | **DELETE** /state-machine-state/{id} | Delete a State Machine State resource
[**getStateMachineState**](StateMachineStateApi.md#getstatemachinestate) | **GET** /state-machine-state/{id} | Detailed information about a State Machine State resource
[**getStateMachineStateList**](StateMachineStateApi.md#getstatemachinestatelist) | **GET** /state-machine-state | List with basic information of State Machine State resources
[**updateStateMachineState**](StateMachineStateApi.md#updatestatemachinestate) | **PATCH** /state-machine-state/{id} | Partially update information about a State Machine State resource

# **createStateMachineState**
> \ShopwareSDK6\Model\InlineResponse200282 createStateMachineState($body, $_response)

Create a new State Machine State resources

Create a new State Machine State resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\StateMachineStateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ShopwareSDK6\Model\Body186(); // \ShopwareSDK6\Model\Body186 | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createStateMachineState($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StateMachineStateApi->createStateMachineState: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ShopwareSDK6\Model\Body186**](../Model/Body186.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200282**](../Model/InlineResponse200282.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createStateMachineState**
> \ShopwareSDK6\Model\InlineResponse200282 createStateMachineState($body, $_response)

Create a new State Machine State resources

Create a new State Machine State resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\StateMachineStateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ShopwareSDK6\Model\StateMachineStateFlat(); // \ShopwareSDK6\Model\StateMachineStateFlat | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createStateMachineState($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StateMachineStateApi->createStateMachineState: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ShopwareSDK6\Model\StateMachineStateFlat**](../Model/StateMachineStateFlat.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200282**](../Model/InlineResponse200282.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteStateMachineState**
> deleteStateMachineState($id, $_response)

Delete a State Machine State resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\StateMachineStateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the state_machine_state
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteStateMachineState($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling StateMachineStateApi->deleteStateMachineState: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the state_machine_state |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStateMachineState**
> \ShopwareSDK6\Model\InlineResponse200282 getStateMachineState($id)

Detailed information about a State Machine State resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\StateMachineStateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the state_machine_state

try {
    $result = $apiInstance->getStateMachineState($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StateMachineStateApi->getStateMachineState: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the state_machine_state |

### Return type

[**\ShopwareSDK6\Model\InlineResponse200282**](../Model/InlineResponse200282.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStateMachineStateList**
> \ShopwareSDK6\Model\InlineResponse200280 getStateMachineStateList($limit, $page, $query)

List with basic information of State Machine State resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\StateMachineStateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getStateMachineStateList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StateMachineStateApi->getStateMachineStateList: ', $e->getMessage(), PHP_EOL;
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

[**\ShopwareSDK6\Model\InlineResponse200280**](../Model/InlineResponse200280.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateStateMachineState**
> \ShopwareSDK6\Model\InlineResponse200282 updateStateMachineState($id, $body, $_response)

Partially update information about a State Machine State resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\StateMachineStateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the state_machine_state
$body = new \ShopwareSDK6\Model\Body187(); // \ShopwareSDK6\Model\Body187 | Partially update information about a State Machine State resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateStateMachineState($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StateMachineStateApi->updateStateMachineState: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the state_machine_state |
 **body** | [**\ShopwareSDK6\Model\Body187**](../Model/Body187.md)| Partially update information about a State Machine State resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200282**](../Model/InlineResponse200282.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateStateMachineState**
> \ShopwareSDK6\Model\InlineResponse200282 updateStateMachineState($id, $body, $_response)

Partially update information about a State Machine State resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\StateMachineStateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the state_machine_state
$body = new \ShopwareSDK6\Model\StateMachineStateFlat(); // \ShopwareSDK6\Model\StateMachineStateFlat | Partially update information about a State Machine State resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateStateMachineState($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StateMachineStateApi->updateStateMachineState: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the state_machine_state |
 **body** | [**\ShopwareSDK6\Model\StateMachineStateFlat**](../Model/StateMachineStateFlat.md)| Partially update information about a State Machine State resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200282**](../Model/InlineResponse200282.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

