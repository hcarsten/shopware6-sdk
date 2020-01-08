# ShopwareSDK6\SeoUrlApi

All URIs are relative to *http://shopware.test/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSeoUrl**](SeoUrlApi.md#createseourl) | **POST** /seo-url | Create a new Seo Url resources
[**deleteSeoUrl**](SeoUrlApi.md#deleteseourl) | **DELETE** /seo-url/{id} | Delete a Seo Url resource
[**getSeoUrl**](SeoUrlApi.md#getseourl) | **GET** /seo-url/{id} | Detailed information about a Seo Url resource
[**getSeoUrlList**](SeoUrlApi.md#getseourllist) | **GET** /seo-url | List with basic information of Seo Url resources
[**updateSeoUrl**](SeoUrlApi.md#updateseourl) | **PATCH** /seo-url/{id} | Partially update information about a Seo Url resource

# **createSeoUrl**
> \ShopwareSDK6\Model\InlineResponse200258 createSeoUrl($body, $_response)

Create a new Seo Url resources

Create a new Seo Url resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\SeoUrlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ShopwareSDK6\Model\Body170(); // \ShopwareSDK6\Model\Body170 | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createSeoUrl($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeoUrlApi->createSeoUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ShopwareSDK6\Model\Body170**](../Model/Body170.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200258**](../Model/InlineResponse200258.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSeoUrl**
> \ShopwareSDK6\Model\InlineResponse200258 createSeoUrl($body, $_response)

Create a new Seo Url resources

Create a new Seo Url resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\SeoUrlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ShopwareSDK6\Model\SeoUrlFlat(); // \ShopwareSDK6\Model\SeoUrlFlat | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createSeoUrl($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeoUrlApi->createSeoUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ShopwareSDK6\Model\SeoUrlFlat**](../Model/SeoUrlFlat.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200258**](../Model/InlineResponse200258.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSeoUrl**
> deleteSeoUrl($id, $_response)

Delete a Seo Url resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\SeoUrlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the seo_url
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteSeoUrl($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling SeoUrlApi->deleteSeoUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the seo_url |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSeoUrl**
> \ShopwareSDK6\Model\InlineResponse200258 getSeoUrl($id)

Detailed information about a Seo Url resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\SeoUrlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the seo_url

try {
    $result = $apiInstance->getSeoUrl($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeoUrlApi->getSeoUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the seo_url |

### Return type

[**\ShopwareSDK6\Model\InlineResponse200258**](../Model/InlineResponse200258.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSeoUrlList**
> \ShopwareSDK6\Model\InlineResponse200256 getSeoUrlList($limit, $page, $query)

List with basic information of Seo Url resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\SeoUrlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getSeoUrlList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeoUrlApi->getSeoUrlList: ', $e->getMessage(), PHP_EOL;
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

[**\ShopwareSDK6\Model\InlineResponse200256**](../Model/InlineResponse200256.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSeoUrl**
> \ShopwareSDK6\Model\InlineResponse200258 updateSeoUrl($id, $body, $_response)

Partially update information about a Seo Url resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\SeoUrlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the seo_url
$body = new \ShopwareSDK6\Model\Body171(); // \ShopwareSDK6\Model\Body171 | Partially update information about a Seo Url resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateSeoUrl($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeoUrlApi->updateSeoUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the seo_url |
 **body** | [**\ShopwareSDK6\Model\Body171**](../Model/Body171.md)| Partially update information about a Seo Url resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200258**](../Model/InlineResponse200258.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSeoUrl**
> \ShopwareSDK6\Model\InlineResponse200258 updateSeoUrl($id, $body, $_response)

Partially update information about a Seo Url resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\SeoUrlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the seo_url
$body = new \ShopwareSDK6\Model\SeoUrlFlat(); // \ShopwareSDK6\Model\SeoUrlFlat | Partially update information about a Seo Url resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateSeoUrl($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeoUrlApi->updateSeoUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the seo_url |
 **body** | [**\ShopwareSDK6\Model\SeoUrlFlat**](../Model/SeoUrlFlat.md)| Partially update information about a Seo Url resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200258**](../Model/InlineResponse200258.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

