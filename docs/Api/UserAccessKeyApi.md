# Swagger\Client\UserAccessKeyApi

All URIs are relative to *http://shopware.test/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createUserAccessKey**](UserAccessKeyApi.md#createuseraccesskey) | **POST** /user-access-key | Create a new User Access Key resources
[**deleteUserAccessKey**](UserAccessKeyApi.md#deleteuseraccesskey) | **DELETE** /user-access-key/{id} | Delete a User Access Key resource
[**getUserAccessKey**](UserAccessKeyApi.md#getuseraccesskey) | **GET** /user-access-key/{id} | Detailed information about a User Access Key resource
[**getUserAccessKeyList**](UserAccessKeyApi.md#getuseraccesskeylist) | **GET** /user-access-key | List with basic information of User Access Key resources
[**updateUserAccessKey**](UserAccessKeyApi.md#updateuseraccesskey) | **PATCH** /user-access-key/{id} | Partially update information about a User Access Key resource

# **createUserAccessKey**
> \Swagger\Client\Model\InlineResponse200312 createUserAccessKey($body, $_response)

Create a new User Access Key resources

Create a new User Access Key resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserAccessKeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Body206(); // \Swagger\Client\Model\Body206 | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createUserAccessKey($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserAccessKeyApi->createUserAccessKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body206**](../Model/Body206.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200312**](../Model/InlineResponse200312.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createUserAccessKey**
> \Swagger\Client\Model\InlineResponse200312 createUserAccessKey($body, $_response)

Create a new User Access Key resources

Create a new User Access Key resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserAccessKeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\UserAccessKeyFlat(); // \Swagger\Client\Model\UserAccessKeyFlat | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createUserAccessKey($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserAccessKeyApi->createUserAccessKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\UserAccessKeyFlat**](../Model/UserAccessKeyFlat.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200312**](../Model/InlineResponse200312.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteUserAccessKey**
> deleteUserAccessKey($id, $_response)

Delete a User Access Key resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserAccessKeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the user_access_key
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteUserAccessKey($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling UserAccessKeyApi->deleteUserAccessKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the user_access_key |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserAccessKey**
> \Swagger\Client\Model\InlineResponse200312 getUserAccessKey($id)

Detailed information about a User Access Key resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserAccessKeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the user_access_key

try {
    $result = $apiInstance->getUserAccessKey($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserAccessKeyApi->getUserAccessKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the user_access_key |

### Return type

[**\Swagger\Client\Model\InlineResponse200312**](../Model/InlineResponse200312.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserAccessKeyList**
> \Swagger\Client\Model\InlineResponse200310 getUserAccessKeyList($limit, $page, $query)

List with basic information of User Access Key resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserAccessKeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getUserAccessKeyList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserAccessKeyApi->getUserAccessKeyList: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse200310**](../Model/InlineResponse200310.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateUserAccessKey**
> \Swagger\Client\Model\InlineResponse200312 updateUserAccessKey($id, $body, $_response)

Partially update information about a User Access Key resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserAccessKeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the user_access_key
$body = new \Swagger\Client\Model\Body207(); // \Swagger\Client\Model\Body207 | Partially update information about a User Access Key resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateUserAccessKey($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserAccessKeyApi->updateUserAccessKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the user_access_key |
 **body** | [**\Swagger\Client\Model\Body207**](../Model/Body207.md)| Partially update information about a User Access Key resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200312**](../Model/InlineResponse200312.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateUserAccessKey**
> \Swagger\Client\Model\InlineResponse200312 updateUserAccessKey($id, $body, $_response)

Partially update information about a User Access Key resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserAccessKeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the user_access_key
$body = new \Swagger\Client\Model\UserAccessKeyFlat(); // \Swagger\Client\Model\UserAccessKeyFlat | Partially update information about a User Access Key resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateUserAccessKey($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserAccessKeyApi->updateUserAccessKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the user_access_key |
 **body** | [**\Swagger\Client\Model\UserAccessKeyFlat**](../Model/UserAccessKeyFlat.md)| Partially update information about a User Access Key resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200312**](../Model/InlineResponse200312.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

