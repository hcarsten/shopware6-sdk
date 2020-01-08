# ShopwareSDK6\RuleApi

All URIs are relative to *http://shopware.test/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createRule**](RuleApi.md#createrule) | **POST** /rule | Create a new Rule resources
[**deleteRule**](RuleApi.md#deleterule) | **DELETE** /rule/{id} | Delete a Rule resource
[**getRule**](RuleApi.md#getrule) | **GET** /rule/{id} | Detailed information about a Rule resource
[**getRuleList**](RuleApi.md#getrulelist) | **GET** /rule | List with basic information of Rule resources
[**updateRule**](RuleApi.md#updaterule) | **PATCH** /rule/{id} | Partially update information about a Rule resource

# **createRule**
> \ShopwareSDK6\Model\InlineResponse200237 createRule($body, $_response)

Create a new Rule resources

Create a new Rule resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\RuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ShopwareSDK6\Model\Body156(); // \ShopwareSDK6\Model\Body156 | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createRule($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RuleApi->createRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ShopwareSDK6\Model\Body156**](../Model/Body156.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200237**](../Model/InlineResponse200237.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRule**
> \ShopwareSDK6\Model\InlineResponse200237 createRule($body, $_response)

Create a new Rule resources

Create a new Rule resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\RuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ShopwareSDK6\Model\RuleFlat(); // \ShopwareSDK6\Model\RuleFlat | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createRule($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RuleApi->createRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ShopwareSDK6\Model\RuleFlat**](../Model/RuleFlat.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200237**](../Model/InlineResponse200237.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRule**
> deleteRule($id, $_response)

Delete a Rule resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\RuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the rule
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteRule($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling RuleApi->deleteRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the rule |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRule**
> \ShopwareSDK6\Model\InlineResponse200237 getRule($id)

Detailed information about a Rule resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\RuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the rule

try {
    $result = $apiInstance->getRule($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RuleApi->getRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the rule |

### Return type

[**\ShopwareSDK6\Model\InlineResponse200237**](../Model/InlineResponse200237.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRuleList**
> \ShopwareSDK6\Model\InlineResponse200235 getRuleList($limit, $page, $query)

List with basic information of Rule resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\RuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getRuleList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RuleApi->getRuleList: ', $e->getMessage(), PHP_EOL;
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

[**\ShopwareSDK6\Model\InlineResponse200235**](../Model/InlineResponse200235.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRule**
> \ShopwareSDK6\Model\InlineResponse200237 updateRule($id, $body, $_response)

Partially update information about a Rule resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\RuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the rule
$body = new \ShopwareSDK6\Model\Body157(); // \ShopwareSDK6\Model\Body157 | Partially update information about a Rule resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateRule($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RuleApi->updateRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the rule |
 **body** | [**\ShopwareSDK6\Model\Body157**](../Model/Body157.md)| Partially update information about a Rule resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200237**](../Model/InlineResponse200237.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRule**
> \ShopwareSDK6\Model\InlineResponse200237 updateRule($id, $body, $_response)

Partially update information about a Rule resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\RuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the rule
$body = new \ShopwareSDK6\Model\RuleFlat(); // \ShopwareSDK6\Model\RuleFlat | Partially update information about a Rule resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateRule($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RuleApi->updateRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the rule |
 **body** | [**\ShopwareSDK6\Model\RuleFlat**](../Model/RuleFlat.md)| Partially update information about a Rule resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200237**](../Model/InlineResponse200237.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

