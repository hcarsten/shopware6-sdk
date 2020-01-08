# ShopwareSDK6\SalesChannelDomainApi

All URIs are relative to *http://shopware.test/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSalesChannelDomain**](SalesChannelDomainApi.md#createsaleschanneldomain) | **POST** /sales-channel-domain | Create a new Sales Channel Domain resources
[**deleteSalesChannelDomain**](SalesChannelDomainApi.md#deletesaleschanneldomain) | **DELETE** /sales-channel-domain/{id} | Delete a Sales Channel Domain resource
[**getSalesChannelDomain**](SalesChannelDomainApi.md#getsaleschanneldomain) | **GET** /sales-channel-domain/{id} | Detailed information about a Sales Channel Domain resource
[**getSalesChannelDomainList**](SalesChannelDomainApi.md#getsaleschanneldomainlist) | **GET** /sales-channel-domain | List with basic information of Sales Channel Domain resources
[**updateSalesChannelDomain**](SalesChannelDomainApi.md#updatesaleschanneldomain) | **PATCH** /sales-channel-domain/{id} | Partially update information about a Sales Channel Domain resource

# **createSalesChannelDomain**
> \ShopwareSDK6\Model\InlineResponse200246 createSalesChannelDomain($body, $_response)

Create a new Sales Channel Domain resources

Create a new Sales Channel Domain resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\SalesChannelDomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ShopwareSDK6\Model\Body162(); // \ShopwareSDK6\Model\Body162 | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createSalesChannelDomain($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesChannelDomainApi->createSalesChannelDomain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ShopwareSDK6\Model\Body162**](../Model/Body162.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200246**](../Model/InlineResponse200246.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSalesChannelDomain**
> \ShopwareSDK6\Model\InlineResponse200246 createSalesChannelDomain($body, $_response)

Create a new Sales Channel Domain resources

Create a new Sales Channel Domain resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\SalesChannelDomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ShopwareSDK6\Model\SalesChannelDomainFlat(); // \ShopwareSDK6\Model\SalesChannelDomainFlat | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createSalesChannelDomain($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesChannelDomainApi->createSalesChannelDomain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ShopwareSDK6\Model\SalesChannelDomainFlat**](../Model/SalesChannelDomainFlat.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200246**](../Model/InlineResponse200246.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSalesChannelDomain**
> deleteSalesChannelDomain($id, $_response)

Delete a Sales Channel Domain resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\SalesChannelDomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the sales_channel_domain
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteSalesChannelDomain($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling SalesChannelDomainApi->deleteSalesChannelDomain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the sales_channel_domain |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSalesChannelDomain**
> \ShopwareSDK6\Model\InlineResponse200246 getSalesChannelDomain($id)

Detailed information about a Sales Channel Domain resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\SalesChannelDomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the sales_channel_domain

try {
    $result = $apiInstance->getSalesChannelDomain($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesChannelDomainApi->getSalesChannelDomain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the sales_channel_domain |

### Return type

[**\ShopwareSDK6\Model\InlineResponse200246**](../Model/InlineResponse200246.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSalesChannelDomainList**
> \ShopwareSDK6\Model\InlineResponse200244 getSalesChannelDomainList($limit, $page, $query)

List with basic information of Sales Channel Domain resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\SalesChannelDomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getSalesChannelDomainList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesChannelDomainApi->getSalesChannelDomainList: ', $e->getMessage(), PHP_EOL;
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

[**\ShopwareSDK6\Model\InlineResponse200244**](../Model/InlineResponse200244.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSalesChannelDomain**
> \ShopwareSDK6\Model\InlineResponse200246 updateSalesChannelDomain($id, $body, $_response)

Partially update information about a Sales Channel Domain resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\SalesChannelDomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the sales_channel_domain
$body = new \ShopwareSDK6\Model\Body163(); // \ShopwareSDK6\Model\Body163 | Partially update information about a Sales Channel Domain resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateSalesChannelDomain($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesChannelDomainApi->updateSalesChannelDomain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the sales_channel_domain |
 **body** | [**\ShopwareSDK6\Model\Body163**](../Model/Body163.md)| Partially update information about a Sales Channel Domain resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200246**](../Model/InlineResponse200246.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSalesChannelDomain**
> \ShopwareSDK6\Model\InlineResponse200246 updateSalesChannelDomain($id, $body, $_response)

Partially update information about a Sales Channel Domain resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\SalesChannelDomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the sales_channel_domain
$body = new \ShopwareSDK6\Model\SalesChannelDomainFlat(); // \ShopwareSDK6\Model\SalesChannelDomainFlat | Partially update information about a Sales Channel Domain resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateSalesChannelDomain($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesChannelDomainApi->updateSalesChannelDomain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the sales_channel_domain |
 **body** | [**\ShopwareSDK6\Model\SalesChannelDomainFlat**](../Model/SalesChannelDomainFlat.md)| Partially update information about a Sales Channel Domain resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200246**](../Model/InlineResponse200246.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

