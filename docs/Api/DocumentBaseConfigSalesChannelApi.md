# Shopware6SDK\DocumentBaseConfigSalesChannelApi

All URIs are relative to *http://shopware.test/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDocumentBaseConfigSalesChannel**](DocumentBaseConfigSalesChannelApi.md#createdocumentbaseconfigsaleschannel) | **POST** /document-base-config-sales-channel | Create a new Document Base Config Sales Channel resources
[**deleteDocumentBaseConfigSalesChannel**](DocumentBaseConfigSalesChannelApi.md#deletedocumentbaseconfigsaleschannel) | **DELETE** /document-base-config-sales-channel/{id} | Delete a Document Base Config Sales Channel resource
[**getDocumentBaseConfigSalesChannel**](DocumentBaseConfigSalesChannelApi.md#getdocumentbaseconfigsaleschannel) | **GET** /document-base-config-sales-channel/{id} | Detailed information about a Document Base Config Sales Channel resource
[**getDocumentBaseConfigSalesChannelList**](DocumentBaseConfigSalesChannelApi.md#getdocumentbaseconfigsaleschannellist) | **GET** /document-base-config-sales-channel | List with basic information of Document Base Config Sales Channel resources
[**updateDocumentBaseConfigSalesChannel**](DocumentBaseConfigSalesChannelApi.md#updatedocumentbaseconfigsaleschannel) | **PATCH** /document-base-config-sales-channel/{id} | Partially update information about a Document Base Config Sales Channel resource

# **createDocumentBaseConfigSalesChannel**
> \Shopware6SDK\Model\InlineResponse20066 createDocumentBaseConfigSalesChannel($body, $_response)

Create a new Document Base Config Sales Channel resources

Create a new Document Base Config Sales Channel resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\DocumentBaseConfigSalesChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Shopware6SDK\Model\Body42(); // \Shopware6SDK\Model\Body42 | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createDocumentBaseConfigSalesChannel($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentBaseConfigSalesChannelApi->createDocumentBaseConfigSalesChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Shopware6SDK\Model\Body42**](../Model/Body42.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Shopware6SDK\Model\InlineResponse20066**](../Model/InlineResponse20066.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createDocumentBaseConfigSalesChannel**
> \Shopware6SDK\Model\InlineResponse20066 createDocumentBaseConfigSalesChannel($body, $_response)

Create a new Document Base Config Sales Channel resources

Create a new Document Base Config Sales Channel resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\DocumentBaseConfigSalesChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Shopware6SDK\Model\DocumentBaseConfigSalesChannelFlat(); // \Shopware6SDK\Model\DocumentBaseConfigSalesChannelFlat | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createDocumentBaseConfigSalesChannel($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentBaseConfigSalesChannelApi->createDocumentBaseConfigSalesChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Shopware6SDK\Model\DocumentBaseConfigSalesChannelFlat**](../Model/DocumentBaseConfigSalesChannelFlat.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Shopware6SDK\Model\InlineResponse20066**](../Model/InlineResponse20066.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDocumentBaseConfigSalesChannel**
> deleteDocumentBaseConfigSalesChannel($id, $_response)

Delete a Document Base Config Sales Channel resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\DocumentBaseConfigSalesChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the document_base_config_sales_channel
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteDocumentBaseConfigSalesChannel($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling DocumentBaseConfigSalesChannelApi->deleteDocumentBaseConfigSalesChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the document_base_config_sales_channel |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDocumentBaseConfigSalesChannel**
> \Shopware6SDK\Model\InlineResponse20066 getDocumentBaseConfigSalesChannel($id)

Detailed information about a Document Base Config Sales Channel resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\DocumentBaseConfigSalesChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the document_base_config_sales_channel

try {
    $result = $apiInstance->getDocumentBaseConfigSalesChannel($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentBaseConfigSalesChannelApi->getDocumentBaseConfigSalesChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the document_base_config_sales_channel |

### Return type

[**\Shopware6SDK\Model\InlineResponse20066**](../Model/InlineResponse20066.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDocumentBaseConfigSalesChannelList**
> \Shopware6SDK\Model\InlineResponse20064 getDocumentBaseConfigSalesChannelList($limit, $page, $query)

List with basic information of Document Base Config Sales Channel resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\DocumentBaseConfigSalesChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getDocumentBaseConfigSalesChannelList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentBaseConfigSalesChannelApi->getDocumentBaseConfigSalesChannelList: ', $e->getMessage(), PHP_EOL;
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

[**\Shopware6SDK\Model\InlineResponse20064**](../Model/InlineResponse20064.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDocumentBaseConfigSalesChannel**
> \Shopware6SDK\Model\InlineResponse20066 updateDocumentBaseConfigSalesChannel($id, $body, $_response)

Partially update information about a Document Base Config Sales Channel resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\DocumentBaseConfigSalesChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the document_base_config_sales_channel
$body = new \Shopware6SDK\Model\Body43(); // \Shopware6SDK\Model\Body43 | Partially update information about a Document Base Config Sales Channel resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateDocumentBaseConfigSalesChannel($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentBaseConfigSalesChannelApi->updateDocumentBaseConfigSalesChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the document_base_config_sales_channel |
 **body** | [**\Shopware6SDK\Model\Body43**](../Model/Body43.md)| Partially update information about a Document Base Config Sales Channel resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Shopware6SDK\Model\InlineResponse20066**](../Model/InlineResponse20066.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDocumentBaseConfigSalesChannel**
> \Shopware6SDK\Model\InlineResponse20066 updateDocumentBaseConfigSalesChannel($id, $body, $_response)

Partially update information about a Document Base Config Sales Channel resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\DocumentBaseConfigSalesChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the document_base_config_sales_channel
$body = new \Shopware6SDK\Model\DocumentBaseConfigSalesChannelFlat(); // \Shopware6SDK\Model\DocumentBaseConfigSalesChannelFlat | Partially update information about a Document Base Config Sales Channel resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateDocumentBaseConfigSalesChannel($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentBaseConfigSalesChannelApi->updateDocumentBaseConfigSalesChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the document_base_config_sales_channel |
 **body** | [**\Shopware6SDK\Model\DocumentBaseConfigSalesChannelFlat**](../Model/DocumentBaseConfigSalesChannelFlat.md)| Partially update information about a Document Base Config Sales Channel resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Shopware6SDK\Model\InlineResponse20066**](../Model/InlineResponse20066.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

