# ShopwareSDK6\CustomFieldSetRelationApi

All URIs are relative to *http://shopware.test/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCustomFieldSetRelation**](CustomFieldSetRelationApi.md#createcustomfieldsetrelation) | **POST** /custom-field-set-relation | Create a new Custom Field Set Relation resources
[**deleteCustomFieldSetRelation**](CustomFieldSetRelationApi.md#deletecustomfieldsetrelation) | **DELETE** /custom-field-set-relation/{id} | Delete a Custom Field Set Relation resource
[**getCustomFieldSetRelation**](CustomFieldSetRelationApi.md#getcustomfieldsetrelation) | **GET** /custom-field-set-relation/{id} | Detailed information about a Custom Field Set Relation resource
[**getCustomFieldSetRelationList**](CustomFieldSetRelationApi.md#getcustomfieldsetrelationlist) | **GET** /custom-field-set-relation | List with basic information of Custom Field Set Relation resources
[**updateCustomFieldSetRelation**](CustomFieldSetRelationApi.md#updatecustomfieldsetrelation) | **PATCH** /custom-field-set-relation/{id} | Partially update information about a Custom Field Set Relation resource

# **createCustomFieldSetRelation**
> \ShopwareSDK6\Model\InlineResponse20039 createCustomFieldSetRelation($body, $_response)

Create a new Custom Field Set Relation resources

Create a new Custom Field Set Relation resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\CustomFieldSetRelationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ShopwareSDK6\Model\Body24(); // \ShopwareSDK6\Model\Body24 | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createCustomFieldSetRelation($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldSetRelationApi->createCustomFieldSetRelation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ShopwareSDK6\Model\Body24**](../Model/Body24.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse20039**](../Model/InlineResponse20039.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCustomFieldSetRelation**
> \ShopwareSDK6\Model\InlineResponse20039 createCustomFieldSetRelation($body, $_response)

Create a new Custom Field Set Relation resources

Create a new Custom Field Set Relation resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\CustomFieldSetRelationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ShopwareSDK6\Model\CustomFieldSetRelationFlat(); // \ShopwareSDK6\Model\CustomFieldSetRelationFlat | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createCustomFieldSetRelation($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldSetRelationApi->createCustomFieldSetRelation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ShopwareSDK6\Model\CustomFieldSetRelationFlat**](../Model/CustomFieldSetRelationFlat.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse20039**](../Model/InlineResponse20039.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCustomFieldSetRelation**
> deleteCustomFieldSetRelation($id, $_response)

Delete a Custom Field Set Relation resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\CustomFieldSetRelationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the custom_field_set_relation
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteCustomFieldSetRelation($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldSetRelationApi->deleteCustomFieldSetRelation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the custom_field_set_relation |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomFieldSetRelation**
> \ShopwareSDK6\Model\InlineResponse20039 getCustomFieldSetRelation($id)

Detailed information about a Custom Field Set Relation resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\CustomFieldSetRelationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the custom_field_set_relation

try {
    $result = $apiInstance->getCustomFieldSetRelation($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldSetRelationApi->getCustomFieldSetRelation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the custom_field_set_relation |

### Return type

[**\ShopwareSDK6\Model\InlineResponse20039**](../Model/InlineResponse20039.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomFieldSetRelationList**
> \ShopwareSDK6\Model\InlineResponse20037 getCustomFieldSetRelationList($limit, $page, $query)

List with basic information of Custom Field Set Relation resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\CustomFieldSetRelationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getCustomFieldSetRelationList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldSetRelationApi->getCustomFieldSetRelationList: ', $e->getMessage(), PHP_EOL;
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

[**\ShopwareSDK6\Model\InlineResponse20037**](../Model/InlineResponse20037.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCustomFieldSetRelation**
> \ShopwareSDK6\Model\InlineResponse20039 updateCustomFieldSetRelation($id, $body, $_response)

Partially update information about a Custom Field Set Relation resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\CustomFieldSetRelationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the custom_field_set_relation
$body = new \ShopwareSDK6\Model\Body25(); // \ShopwareSDK6\Model\Body25 | Partially update information about a Custom Field Set Relation resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateCustomFieldSetRelation($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldSetRelationApi->updateCustomFieldSetRelation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the custom_field_set_relation |
 **body** | [**\ShopwareSDK6\Model\Body25**](../Model/Body25.md)| Partially update information about a Custom Field Set Relation resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse20039**](../Model/InlineResponse20039.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCustomFieldSetRelation**
> \ShopwareSDK6\Model\InlineResponse20039 updateCustomFieldSetRelation($id, $body, $_response)

Partially update information about a Custom Field Set Relation resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\CustomFieldSetRelationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the custom_field_set_relation
$body = new \ShopwareSDK6\Model\CustomFieldSetRelationFlat(); // \ShopwareSDK6\Model\CustomFieldSetRelationFlat | Partially update information about a Custom Field Set Relation resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateCustomFieldSetRelation($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldSetRelationApi->updateCustomFieldSetRelation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the custom_field_set_relation |
 **body** | [**\ShopwareSDK6\Model\CustomFieldSetRelationFlat**](../Model/CustomFieldSetRelationFlat.md)| Partially update information about a Custom Field Set Relation resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse20039**](../Model/InlineResponse20039.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

