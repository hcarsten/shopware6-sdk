# Swagger\Client\SeoUrlTemplateApi

All URIs are relative to *http://shopware.test/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSeoUrlTemplate**](SeoUrlTemplateApi.md#createseourltemplate) | **POST** /seo-url-template | Create a new Seo Url Template resources
[**deleteSeoUrlTemplate**](SeoUrlTemplateApi.md#deleteseourltemplate) | **DELETE** /seo-url-template/{id} | Delete a Seo Url Template resource
[**getSeoUrlTemplate**](SeoUrlTemplateApi.md#getseourltemplate) | **GET** /seo-url-template/{id} | Detailed information about a Seo Url Template resource
[**getSeoUrlTemplateList**](SeoUrlTemplateApi.md#getseourltemplatelist) | **GET** /seo-url-template | List with basic information of Seo Url Template resources
[**updateSeoUrlTemplate**](SeoUrlTemplateApi.md#updateseourltemplate) | **PATCH** /seo-url-template/{id} | Partially update information about a Seo Url Template resource

# **createSeoUrlTemplate**
> \Swagger\Client\Model\InlineResponse200261 createSeoUrlTemplate($body, $_response)

Create a new Seo Url Template resources

Create a new Seo Url Template resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SeoUrlTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Body172(); // \Swagger\Client\Model\Body172 | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createSeoUrlTemplate($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeoUrlTemplateApi->createSeoUrlTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body172**](../Model/Body172.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200261**](../Model/InlineResponse200261.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSeoUrlTemplate**
> \Swagger\Client\Model\InlineResponse200261 createSeoUrlTemplate($body, $_response)

Create a new Seo Url Template resources

Create a new Seo Url Template resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SeoUrlTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\SeoUrlTemplateFlat(); // \Swagger\Client\Model\SeoUrlTemplateFlat | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createSeoUrlTemplate($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeoUrlTemplateApi->createSeoUrlTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SeoUrlTemplateFlat**](../Model/SeoUrlTemplateFlat.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200261**](../Model/InlineResponse200261.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSeoUrlTemplate**
> deleteSeoUrlTemplate($id, $_response)

Delete a Seo Url Template resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SeoUrlTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the seo_url_template
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteSeoUrlTemplate($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling SeoUrlTemplateApi->deleteSeoUrlTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the seo_url_template |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSeoUrlTemplate**
> \Swagger\Client\Model\InlineResponse200261 getSeoUrlTemplate($id)

Detailed information about a Seo Url Template resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SeoUrlTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the seo_url_template

try {
    $result = $apiInstance->getSeoUrlTemplate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeoUrlTemplateApi->getSeoUrlTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the seo_url_template |

### Return type

[**\Swagger\Client\Model\InlineResponse200261**](../Model/InlineResponse200261.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSeoUrlTemplateList**
> \Swagger\Client\Model\InlineResponse200259 getSeoUrlTemplateList($limit, $page, $query)

List with basic information of Seo Url Template resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SeoUrlTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getSeoUrlTemplateList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeoUrlTemplateApi->getSeoUrlTemplateList: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse200259**](../Model/InlineResponse200259.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSeoUrlTemplate**
> \Swagger\Client\Model\InlineResponse200261 updateSeoUrlTemplate($id, $body, $_response)

Partially update information about a Seo Url Template resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SeoUrlTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the seo_url_template
$body = new \Swagger\Client\Model\Body173(); // \Swagger\Client\Model\Body173 | Partially update information about a Seo Url Template resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateSeoUrlTemplate($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeoUrlTemplateApi->updateSeoUrlTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the seo_url_template |
 **body** | [**\Swagger\Client\Model\Body173**](../Model/Body173.md)| Partially update information about a Seo Url Template resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200261**](../Model/InlineResponse200261.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSeoUrlTemplate**
> \Swagger\Client\Model\InlineResponse200261 updateSeoUrlTemplate($id, $body, $_response)

Partially update information about a Seo Url Template resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SeoUrlTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the seo_url_template
$body = new \Swagger\Client\Model\SeoUrlTemplateFlat(); // \Swagger\Client\Model\SeoUrlTemplateFlat | Partially update information about a Seo Url Template resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateSeoUrlTemplate($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeoUrlTemplateApi->updateSeoUrlTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the seo_url_template |
 **body** | [**\Swagger\Client\Model\SeoUrlTemplateFlat**](../Model/SeoUrlTemplateFlat.md)| Partially update information about a Seo Url Template resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200261**](../Model/InlineResponse200261.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

