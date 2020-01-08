# ShopwareSDK6\NumberRangeStateApi

All URIs are relative to *http://shopware.test/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createNumberRangeState**](NumberRangeStateApi.md#createnumberrangestate) | **POST** /number-range-state | Create a new Number Range State resources
[**deleteNumberRangeState**](NumberRangeStateApi.md#deletenumberrangestate) | **DELETE** /number-range-state/{id} | Delete a Number Range State resource
[**getNumberRangeState**](NumberRangeStateApi.md#getnumberrangestate) | **GET** /number-range-state/{id} | Detailed information about a Number Range State resource
[**getNumberRangeStateList**](NumberRangeStateApi.md#getnumberrangestatelist) | **GET** /number-range-state | List with basic information of Number Range State resources
[**updateNumberRangeState**](NumberRangeStateApi.md#updatenumberrangestate) | **PATCH** /number-range-state/{id} | Partially update information about a Number Range State resource

# **createNumberRangeState**
> \ShopwareSDK6\Model\InlineResponse200141 createNumberRangeState($body, $_response)

Create a new Number Range State resources

Create a new Number Range State resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\NumberRangeStateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ShopwareSDK6\Model\Body92(); // \ShopwareSDK6\Model\Body92 | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createNumberRangeState($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberRangeStateApi->createNumberRangeState: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ShopwareSDK6\Model\Body92**](../Model/Body92.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200141**](../Model/InlineResponse200141.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createNumberRangeState**
> \ShopwareSDK6\Model\InlineResponse200141 createNumberRangeState($body, $_response)

Create a new Number Range State resources

Create a new Number Range State resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\NumberRangeStateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ShopwareSDK6\Model\NumberRangeStateFlat(); // \ShopwareSDK6\Model\NumberRangeStateFlat | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createNumberRangeState($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberRangeStateApi->createNumberRangeState: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ShopwareSDK6\Model\NumberRangeStateFlat**](../Model/NumberRangeStateFlat.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200141**](../Model/InlineResponse200141.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteNumberRangeState**
> deleteNumberRangeState($id, $_response)

Delete a Number Range State resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\NumberRangeStateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the number_range_state
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteNumberRangeState($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling NumberRangeStateApi->deleteNumberRangeState: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the number_range_state |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNumberRangeState**
> \ShopwareSDK6\Model\InlineResponse200141 getNumberRangeState($id)

Detailed information about a Number Range State resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\NumberRangeStateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the number_range_state

try {
    $result = $apiInstance->getNumberRangeState($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberRangeStateApi->getNumberRangeState: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the number_range_state |

### Return type

[**\ShopwareSDK6\Model\InlineResponse200141**](../Model/InlineResponse200141.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNumberRangeStateList**
> \ShopwareSDK6\Model\InlineResponse200139 getNumberRangeStateList($limit, $page, $query)

List with basic information of Number Range State resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\NumberRangeStateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getNumberRangeStateList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberRangeStateApi->getNumberRangeStateList: ', $e->getMessage(), PHP_EOL;
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

[**\ShopwareSDK6\Model\InlineResponse200139**](../Model/InlineResponse200139.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateNumberRangeState**
> \ShopwareSDK6\Model\InlineResponse200141 updateNumberRangeState($id, $body, $_response)

Partially update information about a Number Range State resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\NumberRangeStateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the number_range_state
$body = new \ShopwareSDK6\Model\Body93(); // \ShopwareSDK6\Model\Body93 | Partially update information about a Number Range State resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateNumberRangeState($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberRangeStateApi->updateNumberRangeState: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the number_range_state |
 **body** | [**\ShopwareSDK6\Model\Body93**](../Model/Body93.md)| Partially update information about a Number Range State resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200141**](../Model/InlineResponse200141.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateNumberRangeState**
> \ShopwareSDK6\Model\InlineResponse200141 updateNumberRangeState($id, $body, $_response)

Partially update information about a Number Range State resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\NumberRangeStateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the number_range_state
$body = new \ShopwareSDK6\Model\NumberRangeStateFlat(); // \ShopwareSDK6\Model\NumberRangeStateFlat | Partially update information about a Number Range State resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateNumberRangeState($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberRangeStateApi->updateNumberRangeState: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the number_range_state |
 **body** | [**\ShopwareSDK6\Model\NumberRangeStateFlat**](../Model/NumberRangeStateFlat.md)| Partially update information about a Number Range State resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200141**](../Model/InlineResponse200141.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

