# ShopwareSDK6\MediaFolderConfigurationApi

All URIs are relative to *http://shopware.test/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createMediaFolderConfiguration**](MediaFolderConfigurationApi.md#createmediafolderconfiguration) | **POST** /media-folder-configuration | Create a new Media Folder Configuration resources
[**deleteMediaFolderConfiguration**](MediaFolderConfigurationApi.md#deletemediafolderconfiguration) | **DELETE** /media-folder-configuration/{id} | Delete a Media Folder Configuration resource
[**getMediaFolderConfiguration**](MediaFolderConfigurationApi.md#getmediafolderconfiguration) | **GET** /media-folder-configuration/{id} | Detailed information about a Media Folder Configuration resource
[**getMediaFolderConfigurationList**](MediaFolderConfigurationApi.md#getmediafolderconfigurationlist) | **GET** /media-folder-configuration | List with basic information of Media Folder Configuration resources
[**updateMediaFolderConfiguration**](MediaFolderConfigurationApi.md#updatemediafolderconfiguration) | **PATCH** /media-folder-configuration/{id} | Partially update information about a Media Folder Configuration resource

# **createMediaFolderConfiguration**
> \ShopwareSDK6\Model\InlineResponse200120 createMediaFolderConfiguration($body, $_response)

Create a new Media Folder Configuration resources

Create a new Media Folder Configuration resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\MediaFolderConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ShopwareSDK6\Model\Body78(); // \ShopwareSDK6\Model\Body78 | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createMediaFolderConfiguration($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaFolderConfigurationApi->createMediaFolderConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ShopwareSDK6\Model\Body78**](../Model/Body78.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200120**](../Model/InlineResponse200120.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createMediaFolderConfiguration**
> \ShopwareSDK6\Model\InlineResponse200120 createMediaFolderConfiguration($body, $_response)

Create a new Media Folder Configuration resources

Create a new Media Folder Configuration resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\MediaFolderConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ShopwareSDK6\Model\MediaFolderConfigurationFlat(); // \ShopwareSDK6\Model\MediaFolderConfigurationFlat | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createMediaFolderConfiguration($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaFolderConfigurationApi->createMediaFolderConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ShopwareSDK6\Model\MediaFolderConfigurationFlat**](../Model/MediaFolderConfigurationFlat.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200120**](../Model/InlineResponse200120.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMediaFolderConfiguration**
> deleteMediaFolderConfiguration($id, $_response)

Delete a Media Folder Configuration resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\MediaFolderConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the media_folder_configuration
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteMediaFolderConfiguration($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling MediaFolderConfigurationApi->deleteMediaFolderConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the media_folder_configuration |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMediaFolderConfiguration**
> \ShopwareSDK6\Model\InlineResponse200120 getMediaFolderConfiguration($id)

Detailed information about a Media Folder Configuration resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\MediaFolderConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the media_folder_configuration

try {
    $result = $apiInstance->getMediaFolderConfiguration($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaFolderConfigurationApi->getMediaFolderConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the media_folder_configuration |

### Return type

[**\ShopwareSDK6\Model\InlineResponse200120**](../Model/InlineResponse200120.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMediaFolderConfigurationList**
> \ShopwareSDK6\Model\InlineResponse200118 getMediaFolderConfigurationList($limit, $page, $query)

List with basic information of Media Folder Configuration resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\MediaFolderConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getMediaFolderConfigurationList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaFolderConfigurationApi->getMediaFolderConfigurationList: ', $e->getMessage(), PHP_EOL;
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

[**\ShopwareSDK6\Model\InlineResponse200118**](../Model/InlineResponse200118.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMediaFolderConfiguration**
> \ShopwareSDK6\Model\InlineResponse200120 updateMediaFolderConfiguration($id, $body, $_response)

Partially update information about a Media Folder Configuration resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\MediaFolderConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the media_folder_configuration
$body = new \ShopwareSDK6\Model\Body79(); // \ShopwareSDK6\Model\Body79 | Partially update information about a Media Folder Configuration resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateMediaFolderConfiguration($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaFolderConfigurationApi->updateMediaFolderConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the media_folder_configuration |
 **body** | [**\ShopwareSDK6\Model\Body79**](../Model/Body79.md)| Partially update information about a Media Folder Configuration resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200120**](../Model/InlineResponse200120.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMediaFolderConfiguration**
> \ShopwareSDK6\Model\InlineResponse200120 updateMediaFolderConfiguration($id, $body, $_response)

Partially update information about a Media Folder Configuration resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\MediaFolderConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the media_folder_configuration
$body = new \ShopwareSDK6\Model\MediaFolderConfigurationFlat(); // \ShopwareSDK6\Model\MediaFolderConfigurationFlat | Partially update information about a Media Folder Configuration resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateMediaFolderConfiguration($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaFolderConfigurationApi->updateMediaFolderConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the media_folder_configuration |
 **body** | [**\ShopwareSDK6\Model\MediaFolderConfigurationFlat**](../Model/MediaFolderConfigurationFlat.md)| Partially update information about a Media Folder Configuration resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200120**](../Model/InlineResponse200120.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

