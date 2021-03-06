# Shopware6SDK\CmsSectionApi

All URIs are relative to *http://shopware.test/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCmsSection**](CmsSectionApi.md#createcmssection) | **POST** /cms-section | Create a new Cms Section resources
[**deleteCmsSection**](CmsSectionApi.md#deletecmssection) | **DELETE** /cms-section/{id} | Delete a Cms Section resource
[**getCmsSection**](CmsSectionApi.md#getcmssection) | **GET** /cms-section/{id} | Detailed information about a Cms Section resource
[**getCmsSectionList**](CmsSectionApi.md#getcmssectionlist) | **GET** /cms-section | List with basic information of Cms Section resources
[**updateCmsSection**](CmsSectionApi.md#updatecmssection) | **PATCH** /cms-section/{id} | Partially update information about a Cms Section resource

# **createCmsSection**
> \Shopware6SDK\Model\InlineResponse20018 createCmsSection($body, $_response)

Create a new Cms Section resources

Create a new Cms Section resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\CmsSectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Shopware6SDK\Model\Body10(); // \Shopware6SDK\Model\Body10 | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createCmsSection($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CmsSectionApi->createCmsSection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Shopware6SDK\Model\Body10**](../Model/Body10.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Shopware6SDK\Model\InlineResponse20018**](../Model/InlineResponse20018.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCmsSection**
> \Shopware6SDK\Model\InlineResponse20018 createCmsSection($body, $_response)

Create a new Cms Section resources

Create a new Cms Section resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\CmsSectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Shopware6SDK\Model\CmsSectionFlat(); // \Shopware6SDK\Model\CmsSectionFlat | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createCmsSection($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CmsSectionApi->createCmsSection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Shopware6SDK\Model\CmsSectionFlat**](../Model/CmsSectionFlat.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Shopware6SDK\Model\InlineResponse20018**](../Model/InlineResponse20018.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCmsSection**
> deleteCmsSection($id, $_response)

Delete a Cms Section resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\CmsSectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the cms_section
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteCmsSection($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling CmsSectionApi->deleteCmsSection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the cms_section |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCmsSection**
> \Shopware6SDK\Model\InlineResponse20018 getCmsSection($id)

Detailed information about a Cms Section resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\CmsSectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the cms_section

try {
    $result = $apiInstance->getCmsSection($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CmsSectionApi->getCmsSection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the cms_section |

### Return type

[**\Shopware6SDK\Model\InlineResponse20018**](../Model/InlineResponse20018.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCmsSectionList**
> \Shopware6SDK\Model\InlineResponse20016 getCmsSectionList($limit, $page, $query)

List with basic information of Cms Section resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\CmsSectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getCmsSectionList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CmsSectionApi->getCmsSectionList: ', $e->getMessage(), PHP_EOL;
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

[**\Shopware6SDK\Model\InlineResponse20016**](../Model/InlineResponse20016.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCmsSection**
> \Shopware6SDK\Model\InlineResponse20018 updateCmsSection($id, $body, $_response)

Partially update information about a Cms Section resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\CmsSectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the cms_section
$body = new \Shopware6SDK\Model\Body11(); // \Shopware6SDK\Model\Body11 | Partially update information about a Cms Section resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateCmsSection($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CmsSectionApi->updateCmsSection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the cms_section |
 **body** | [**\Shopware6SDK\Model\Body11**](../Model/Body11.md)| Partially update information about a Cms Section resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Shopware6SDK\Model\InlineResponse20018**](../Model/InlineResponse20018.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCmsSection**
> \Shopware6SDK\Model\InlineResponse20018 updateCmsSection($id, $body, $_response)

Partially update information about a Cms Section resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\CmsSectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the cms_section
$body = new \Shopware6SDK\Model\CmsSectionFlat(); // \Shopware6SDK\Model\CmsSectionFlat | Partially update information about a Cms Section resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateCmsSection($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CmsSectionApi->updateCmsSection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the cms_section |
 **body** | [**\Shopware6SDK\Model\CmsSectionFlat**](../Model/CmsSectionFlat.md)| Partially update information about a Cms Section resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Shopware6SDK\Model\InlineResponse20018**](../Model/InlineResponse20018.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

