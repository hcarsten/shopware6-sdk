# Shopware6SDK\PropertyGroupApi

All URIs are relative to *http://shopware.test/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPropertyGroup**](PropertyGroupApi.md#createpropertygroup) | **POST** /property-group | Create a new Property Group resources
[**deletePropertyGroup**](PropertyGroupApi.md#deletepropertygroup) | **DELETE** /property-group/{id} | Delete a Property Group resource
[**getPropertyGroup**](PropertyGroupApi.md#getpropertygroup) | **GET** /property-group/{id} | Detailed information about a Property Group resource
[**getPropertyGroupList**](PropertyGroupApi.md#getpropertygrouplist) | **GET** /property-group | List with basic information of Property Group resources
[**updatePropertyGroup**](PropertyGroupApi.md#updatepropertygroup) | **PATCH** /property-group/{id} | Partially update information about a Property Group resource

# **createPropertyGroup**
> \Shopware6SDK\Model\InlineResponse200231 createPropertyGroup($body, $_response)

Create a new Property Group resources

Create a new Property Group resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\PropertyGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Shopware6SDK\Model\Body152(); // \Shopware6SDK\Model\Body152 | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createPropertyGroup($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyGroupApi->createPropertyGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Shopware6SDK\Model\Body152**](../Model/Body152.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Shopware6SDK\Model\InlineResponse200231**](../Model/InlineResponse200231.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPropertyGroup**
> \Shopware6SDK\Model\InlineResponse200231 createPropertyGroup($body, $_response)

Create a new Property Group resources

Create a new Property Group resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\PropertyGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Shopware6SDK\Model\PropertyGroupFlat(); // \Shopware6SDK\Model\PropertyGroupFlat | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createPropertyGroup($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyGroupApi->createPropertyGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Shopware6SDK\Model\PropertyGroupFlat**](../Model/PropertyGroupFlat.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Shopware6SDK\Model\InlineResponse200231**](../Model/InlineResponse200231.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePropertyGroup**
> deletePropertyGroup($id, $_response)

Delete a Property Group resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\PropertyGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the property_group
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deletePropertyGroup($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling PropertyGroupApi->deletePropertyGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the property_group |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPropertyGroup**
> \Shopware6SDK\Model\InlineResponse200231 getPropertyGroup($id)

Detailed information about a Property Group resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\PropertyGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the property_group

try {
    $result = $apiInstance->getPropertyGroup($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyGroupApi->getPropertyGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the property_group |

### Return type

[**\Shopware6SDK\Model\InlineResponse200231**](../Model/InlineResponse200231.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPropertyGroupList**
> \Shopware6SDK\Model\InlineResponse200229 getPropertyGroupList($limit, $page, $query)

List with basic information of Property Group resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\PropertyGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getPropertyGroupList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyGroupApi->getPropertyGroupList: ', $e->getMessage(), PHP_EOL;
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

[**\Shopware6SDK\Model\InlineResponse200229**](../Model/InlineResponse200229.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePropertyGroup**
> \Shopware6SDK\Model\InlineResponse200231 updatePropertyGroup($id, $body, $_response)

Partially update information about a Property Group resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\PropertyGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the property_group
$body = new \Shopware6SDK\Model\Body153(); // \Shopware6SDK\Model\Body153 | Partially update information about a Property Group resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updatePropertyGroup($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyGroupApi->updatePropertyGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the property_group |
 **body** | [**\Shopware6SDK\Model\Body153**](../Model/Body153.md)| Partially update information about a Property Group resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Shopware6SDK\Model\InlineResponse200231**](../Model/InlineResponse200231.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePropertyGroup**
> \Shopware6SDK\Model\InlineResponse200231 updatePropertyGroup($id, $body, $_response)

Partially update information about a Property Group resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Shopware6SDK\Api\PropertyGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the property_group
$body = new \Shopware6SDK\Model\PropertyGroupFlat(); // \Shopware6SDK\Model\PropertyGroupFlat | Partially update information about a Property Group resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updatePropertyGroup($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyGroupApi->updatePropertyGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the property_group |
 **body** | [**\Shopware6SDK\Model\PropertyGroupFlat**](../Model/PropertyGroupFlat.md)| Partially update information about a Property Group resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Shopware6SDK\Model\InlineResponse200231**](../Model/InlineResponse200231.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

