# ShopwareSDK6\SalesChannelTypeApi

All URIs are relative to *http://shopware.test/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSalesChannelType**](SalesChannelTypeApi.md#createsaleschanneltype) | **POST** /sales-channel-type | Create a new Sales Channel Type resources
[**deleteSalesChannelType**](SalesChannelTypeApi.md#deletesaleschanneltype) | **DELETE** /sales-channel-type/{id} | Delete a Sales Channel Type resource
[**getSalesChannelType**](SalesChannelTypeApi.md#getsaleschanneltype) | **GET** /sales-channel-type/{id} | Detailed information about a Sales Channel Type resource
[**getSalesChannelTypeList**](SalesChannelTypeApi.md#getsaleschanneltypelist) | **GET** /sales-channel-type | List with basic information of Sales Channel Type resources
[**updateSalesChannelType**](SalesChannelTypeApi.md#updatesaleschanneltype) | **PATCH** /sales-channel-type/{id} | Partially update information about a Sales Channel Type resource

# **createSalesChannelType**
> \ShopwareSDK6\Model\InlineResponse200249 createSalesChannelType($body, $_response)

Create a new Sales Channel Type resources

Create a new Sales Channel Type resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\SalesChannelTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ShopwareSDK6\Model\Body164(); // \ShopwareSDK6\Model\Body164 | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createSalesChannelType($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesChannelTypeApi->createSalesChannelType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ShopwareSDK6\Model\Body164**](../Model/Body164.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200249**](../Model/InlineResponse200249.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSalesChannelType**
> \ShopwareSDK6\Model\InlineResponse200249 createSalesChannelType($body, $_response)

Create a new Sales Channel Type resources

Create a new Sales Channel Type resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\SalesChannelTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ShopwareSDK6\Model\SalesChannelTypeFlat(); // \ShopwareSDK6\Model\SalesChannelTypeFlat | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createSalesChannelType($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesChannelTypeApi->createSalesChannelType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ShopwareSDK6\Model\SalesChannelTypeFlat**](../Model/SalesChannelTypeFlat.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200249**](../Model/InlineResponse200249.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSalesChannelType**
> deleteSalesChannelType($id, $_response)

Delete a Sales Channel Type resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\SalesChannelTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the sales_channel_type
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteSalesChannelType($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling SalesChannelTypeApi->deleteSalesChannelType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the sales_channel_type |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSalesChannelType**
> \ShopwareSDK6\Model\InlineResponse200249 getSalesChannelType($id)

Detailed information about a Sales Channel Type resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\SalesChannelTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the sales_channel_type

try {
    $result = $apiInstance->getSalesChannelType($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesChannelTypeApi->getSalesChannelType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the sales_channel_type |

### Return type

[**\ShopwareSDK6\Model\InlineResponse200249**](../Model/InlineResponse200249.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSalesChannelTypeList**
> \ShopwareSDK6\Model\InlineResponse200247 getSalesChannelTypeList($limit, $page, $query)

List with basic information of Sales Channel Type resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\SalesChannelTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getSalesChannelTypeList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesChannelTypeApi->getSalesChannelTypeList: ', $e->getMessage(), PHP_EOL;
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

[**\ShopwareSDK6\Model\InlineResponse200247**](../Model/InlineResponse200247.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSalesChannelType**
> \ShopwareSDK6\Model\InlineResponse200249 updateSalesChannelType($id, $body, $_response)

Partially update information about a Sales Channel Type resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\SalesChannelTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the sales_channel_type
$body = new \ShopwareSDK6\Model\Body165(); // \ShopwareSDK6\Model\Body165 | Partially update information about a Sales Channel Type resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateSalesChannelType($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesChannelTypeApi->updateSalesChannelType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the sales_channel_type |
 **body** | [**\ShopwareSDK6\Model\Body165**](../Model/Body165.md)| Partially update information about a Sales Channel Type resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200249**](../Model/InlineResponse200249.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSalesChannelType**
> \ShopwareSDK6\Model\InlineResponse200249 updateSalesChannelType($id, $body, $_response)

Partially update information about a Sales Channel Type resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\SalesChannelTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the sales_channel_type
$body = new \ShopwareSDK6\Model\SalesChannelTypeFlat(); // \ShopwareSDK6\Model\SalesChannelTypeFlat | Partially update information about a Sales Channel Type resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateSalesChannelType($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesChannelTypeApi->updateSalesChannelType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the sales_channel_type |
 **body** | [**\ShopwareSDK6\Model\SalesChannelTypeFlat**](../Model/SalesChannelTypeFlat.md)| Partially update information about a Sales Channel Type resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200249**](../Model/InlineResponse200249.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

