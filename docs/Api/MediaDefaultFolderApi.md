# Shopware6SDK\MediaDefaultFolderApi

All URIs are relative to *http://shopware.test/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createMediaDefaultFolder**](MediaDefaultFolderApi.md#createmediadefaultfolder) | **POST** /media-default-folder | Create a new Media Default Folder resources
[**deleteMediaDefaultFolder**](MediaDefaultFolderApi.md#deletemediadefaultfolder) | **DELETE** /media-default-folder/{id} | Delete a Media Default Folder resource
[**getMediaDefaultFolder**](MediaDefaultFolderApi.md#getmediadefaultfolder) | **GET** /media-default-folder/{id} | Detailed information about a Media Default Folder resource
[**getMediaDefaultFolderList**](MediaDefaultFolderApi.md#getmediadefaultfolderlist) | **GET** /media-default-folder | List with basic information of Media Default Folder resources
[**updateMediaDefaultFolder**](MediaDefaultFolderApi.md#updatemediadefaultfolder) | **PATCH** /media-default-folder/{id} | Partially update information about a Media Default Folder resource

# **createMediaDefaultFolder**
> \Shopware6SDK\Model\InlineResponse200114 createMediaDefaultFolder($body, $_response)

Create a new Media Default Folder resources

Create a new Media Default Folder resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\MediaDefaultFolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Shopware6SDK\Model\Body74(); // \Shopware6SDK\Model\Body74 | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createMediaDefaultFolder($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaDefaultFolderApi->createMediaDefaultFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Shopware6SDK\Model\Body74**](../Model/Body74.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Shopware6SDK\Model\InlineResponse200114**](../Model/InlineResponse200114.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createMediaDefaultFolder**
> \Shopware6SDK\Model\InlineResponse200114 createMediaDefaultFolder($body, $_response)

Create a new Media Default Folder resources

Create a new Media Default Folder resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\MediaDefaultFolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Shopware6SDK\Model\MediaDefaultFolderFlat(); // \Shopware6SDK\Model\MediaDefaultFolderFlat | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createMediaDefaultFolder($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaDefaultFolderApi->createMediaDefaultFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Shopware6SDK\Model\MediaDefaultFolderFlat**](../Model/MediaDefaultFolderFlat.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Shopware6SDK\Model\InlineResponse200114**](../Model/InlineResponse200114.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMediaDefaultFolder**
> deleteMediaDefaultFolder($id, $_response)

Delete a Media Default Folder resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\MediaDefaultFolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the media_default_folder
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteMediaDefaultFolder($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling MediaDefaultFolderApi->deleteMediaDefaultFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the media_default_folder |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMediaDefaultFolder**
> \Shopware6SDK\Model\InlineResponse200114 getMediaDefaultFolder($id)

Detailed information about a Media Default Folder resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\MediaDefaultFolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the media_default_folder

try {
    $result = $apiInstance->getMediaDefaultFolder($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaDefaultFolderApi->getMediaDefaultFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the media_default_folder |

### Return type

[**\Shopware6SDK\Model\InlineResponse200114**](../Model/InlineResponse200114.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMediaDefaultFolderList**
> \Shopware6SDK\Model\InlineResponse200112 getMediaDefaultFolderList($limit, $page, $query)

List with basic information of Media Default Folder resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\MediaDefaultFolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getMediaDefaultFolderList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaDefaultFolderApi->getMediaDefaultFolderList: ', $e->getMessage(), PHP_EOL;
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

[**\Shopware6SDK\Model\InlineResponse200112**](../Model/InlineResponse200112.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMediaDefaultFolder**
> \Shopware6SDK\Model\InlineResponse200114 updateMediaDefaultFolder($id, $body, $_response)

Partially update information about a Media Default Folder resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\MediaDefaultFolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the media_default_folder
$body = new \Shopware6SDK\Model\Body75(); // \Shopware6SDK\Model\Body75 | Partially update information about a Media Default Folder resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateMediaDefaultFolder($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaDefaultFolderApi->updateMediaDefaultFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the media_default_folder |
 **body** | [**\Shopware6SDK\Model\Body75**](../Model/Body75.md)| Partially update information about a Media Default Folder resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Shopware6SDK\Model\InlineResponse200114**](../Model/InlineResponse200114.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMediaDefaultFolder**
> \Shopware6SDK\Model\InlineResponse200114 updateMediaDefaultFolder($id, $body, $_response)

Partially update information about a Media Default Folder resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\MediaDefaultFolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the media_default_folder
$body = new \Shopware6SDK\Model\MediaDefaultFolderFlat(); // \Shopware6SDK\Model\MediaDefaultFolderFlat | Partially update information about a Media Default Folder resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateMediaDefaultFolder($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaDefaultFolderApi->updateMediaDefaultFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the media_default_folder |
 **body** | [**\Shopware6SDK\Model\MediaDefaultFolderFlat**](../Model/MediaDefaultFolderFlat.md)| Partially update information about a Media Default Folder resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Shopware6SDK\Model\InlineResponse200114**](../Model/InlineResponse200114.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

