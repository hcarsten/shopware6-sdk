# ShopwareSDK6\ImportExportLogApi

All URIs are relative to *http://shopware.test/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createImportExportLog**](ImportExportLogApi.md#createimportexportlog) | **POST** /import-export-log | Create a new Import Export Log resources
[**deleteImportExportLog**](ImportExportLogApi.md#deleteimportexportlog) | **DELETE** /import-export-log/{id} | Delete a Import Export Log resource
[**getImportExportLog**](ImportExportLogApi.md#getimportexportlog) | **GET** /import-export-log/{id} | Detailed information about a Import Export Log resource
[**getImportExportLogList**](ImportExportLogApi.md#getimportexportloglist) | **GET** /import-export-log | List with basic information of Import Export Log resources
[**updateImportExportLog**](ImportExportLogApi.md#updateimportexportlog) | **PATCH** /import-export-log/{id} | Partially update information about a Import Export Log resource

# **createImportExportLog**
> \ShopwareSDK6\Model\InlineResponse20078 createImportExportLog($body, $_response)

Create a new Import Export Log resources

Create a new Import Export Log resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\ImportExportLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ShopwareSDK6\Model\Body50(); // \ShopwareSDK6\Model\Body50 | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createImportExportLog($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportExportLogApi->createImportExportLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ShopwareSDK6\Model\Body50**](../Model/Body50.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse20078**](../Model/InlineResponse20078.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createImportExportLog**
> \ShopwareSDK6\Model\InlineResponse20078 createImportExportLog($body, $_response)

Create a new Import Export Log resources

Create a new Import Export Log resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\ImportExportLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ShopwareSDK6\Model\ImportExportLogFlat(); // \ShopwareSDK6\Model\ImportExportLogFlat | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createImportExportLog($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportExportLogApi->createImportExportLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ShopwareSDK6\Model\ImportExportLogFlat**](../Model/ImportExportLogFlat.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse20078**](../Model/InlineResponse20078.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteImportExportLog**
> deleteImportExportLog($id, $_response)

Delete a Import Export Log resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\ImportExportLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the import_export_log
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteImportExportLog($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling ImportExportLogApi->deleteImportExportLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the import_export_log |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getImportExportLog**
> \ShopwareSDK6\Model\InlineResponse20078 getImportExportLog($id)

Detailed information about a Import Export Log resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\ImportExportLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the import_export_log

try {
    $result = $apiInstance->getImportExportLog($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportExportLogApi->getImportExportLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the import_export_log |

### Return type

[**\ShopwareSDK6\Model\InlineResponse20078**](../Model/InlineResponse20078.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getImportExportLogList**
> \ShopwareSDK6\Model\InlineResponse20076 getImportExportLogList($limit, $page, $query)

List with basic information of Import Export Log resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\ImportExportLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getImportExportLogList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportExportLogApi->getImportExportLogList: ', $e->getMessage(), PHP_EOL;
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

[**\ShopwareSDK6\Model\InlineResponse20076**](../Model/InlineResponse20076.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateImportExportLog**
> \ShopwareSDK6\Model\InlineResponse20078 updateImportExportLog($id, $body, $_response)

Partially update information about a Import Export Log resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\ImportExportLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the import_export_log
$body = new \ShopwareSDK6\Model\Body51(); // \ShopwareSDK6\Model\Body51 | Partially update information about a Import Export Log resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateImportExportLog($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportExportLogApi->updateImportExportLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the import_export_log |
 **body** | [**\ShopwareSDK6\Model\Body51**](../Model/Body51.md)| Partially update information about a Import Export Log resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse20078**](../Model/InlineResponse20078.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateImportExportLog**
> \ShopwareSDK6\Model\InlineResponse20078 updateImportExportLog($id, $body, $_response)

Partially update information about a Import Export Log resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\ImportExportLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the import_export_log
$body = new \ShopwareSDK6\Model\ImportExportLogFlat(); // \ShopwareSDK6\Model\ImportExportLogFlat | Partially update information about a Import Export Log resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateImportExportLog($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportExportLogApi->updateImportExportLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the import_export_log |
 **body** | [**\ShopwareSDK6\Model\ImportExportLogFlat**](../Model/ImportExportLogFlat.md)| Partially update information about a Import Export Log resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse20078**](../Model/InlineResponse20078.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

