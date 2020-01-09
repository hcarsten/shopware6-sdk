# Shopware6SDK\ImportExportProfileApi

All URIs are relative to *http://shopware.test/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createImportExportProfile**](ImportExportProfileApi.md#createimportexportprofile) | **POST** /import-export-profile | Create a new Import Export Profile resources
[**deleteImportExportProfile**](ImportExportProfileApi.md#deleteimportexportprofile) | **DELETE** /import-export-profile/{id} | Delete a Import Export Profile resource
[**getImportExportProfile**](ImportExportProfileApi.md#getimportexportprofile) | **GET** /import-export-profile/{id} | Detailed information about a Import Export Profile resource
[**getImportExportProfileList**](ImportExportProfileApi.md#getimportexportprofilelist) | **GET** /import-export-profile | List with basic information of Import Export Profile resources
[**updateImportExportProfile**](ImportExportProfileApi.md#updateimportexportprofile) | **PATCH** /import-export-profile/{id} | Partially update information about a Import Export Profile resource

# **createImportExportProfile**
> \Shopware6SDK\Model\InlineResponse20081 createImportExportProfile($body, $_response)

Create a new Import Export Profile resources

Create a new Import Export Profile resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\ImportExportProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Shopware6SDK\Model\Body52(); // \Shopware6SDK\Model\Body52 | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createImportExportProfile($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportExportProfileApi->createImportExportProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Shopware6SDK\Model\Body52**](../Model/Body52.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Shopware6SDK\Model\InlineResponse20081**](../Model/InlineResponse20081.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createImportExportProfile**
> \Shopware6SDK\Model\InlineResponse20081 createImportExportProfile($body, $_response)

Create a new Import Export Profile resources

Create a new Import Export Profile resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\ImportExportProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Shopware6SDK\Model\ImportExportProfileFlat(); // \Shopware6SDK\Model\ImportExportProfileFlat | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createImportExportProfile($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportExportProfileApi->createImportExportProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Shopware6SDK\Model\ImportExportProfileFlat**](../Model/ImportExportProfileFlat.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Shopware6SDK\Model\InlineResponse20081**](../Model/InlineResponse20081.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteImportExportProfile**
> deleteImportExportProfile($id, $_response)

Delete a Import Export Profile resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\ImportExportProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the import_export_profile
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteImportExportProfile($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling ImportExportProfileApi->deleteImportExportProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the import_export_profile |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getImportExportProfile**
> \Shopware6SDK\Model\InlineResponse20081 getImportExportProfile($id)

Detailed information about a Import Export Profile resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\ImportExportProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the import_export_profile

try {
    $result = $apiInstance->getImportExportProfile($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportExportProfileApi->getImportExportProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the import_export_profile |

### Return type

[**\Shopware6SDK\Model\InlineResponse20081**](../Model/InlineResponse20081.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getImportExportProfileList**
> \Shopware6SDK\Model\InlineResponse20079 getImportExportProfileList($limit, $page, $query)

List with basic information of Import Export Profile resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\ImportExportProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getImportExportProfileList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportExportProfileApi->getImportExportProfileList: ', $e->getMessage(), PHP_EOL;
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

[**\Shopware6SDK\Model\InlineResponse20079**](../Model/InlineResponse20079.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateImportExportProfile**
> \Shopware6SDK\Model\InlineResponse20081 updateImportExportProfile($id, $body, $_response)

Partially update information about a Import Export Profile resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\ImportExportProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the import_export_profile
$body = new \Shopware6SDK\Model\Body53(); // \Shopware6SDK\Model\Body53 | Partially update information about a Import Export Profile resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateImportExportProfile($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportExportProfileApi->updateImportExportProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the import_export_profile |
 **body** | [**\Shopware6SDK\Model\Body53**](../Model/Body53.md)| Partially update information about a Import Export Profile resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Shopware6SDK\Model\InlineResponse20081**](../Model/InlineResponse20081.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateImportExportProfile**
> \Shopware6SDK\Model\InlineResponse20081 updateImportExportProfile($id, $body, $_response)

Partially update information about a Import Export Profile resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\ImportExportProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the import_export_profile
$body = new \Shopware6SDK\Model\ImportExportProfileFlat(); // \Shopware6SDK\Model\ImportExportProfileFlat | Partially update information about a Import Export Profile resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateImportExportProfile($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportExportProfileApi->updateImportExportProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the import_export_profile |
 **body** | [**\Shopware6SDK\Model\ImportExportProfileFlat**](../Model/ImportExportProfileFlat.md)| Partially update information about a Import Export Profile resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Shopware6SDK\Model\InlineResponse20081**](../Model/InlineResponse20081.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

