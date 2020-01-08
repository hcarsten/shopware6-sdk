# Swagger\Client\MailHeaderFooterApi

All URIs are relative to *http://shopware.test/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createMailHeaderFooter**](MailHeaderFooterApi.md#createmailheaderfooter) | **POST** /mail-header-footer | Create a new Mail Header Footer resources
[**deleteMailHeaderFooter**](MailHeaderFooterApi.md#deletemailheaderfooter) | **DELETE** /mail-header-footer/{id} | Delete a Mail Header Footer resource
[**getMailHeaderFooter**](MailHeaderFooterApi.md#getmailheaderfooter) | **GET** /mail-header-footer/{id} | Detailed information about a Mail Header Footer resource
[**getMailHeaderFooterList**](MailHeaderFooterApi.md#getmailheaderfooterlist) | **GET** /mail-header-footer | List with basic information of Mail Header Footer resources
[**updateMailHeaderFooter**](MailHeaderFooterApi.md#updatemailheaderfooter) | **PATCH** /mail-header-footer/{id} | Partially update information about a Mail Header Footer resource

# **createMailHeaderFooter**
> \Swagger\Client\Model\InlineResponse20096 createMailHeaderFooter($body, $_response)

Create a new Mail Header Footer resources

Create a new Mail Header Footer resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MailHeaderFooterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Body62(); // \Swagger\Client\Model\Body62 | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createMailHeaderFooter($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailHeaderFooterApi->createMailHeaderFooter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body62**](../Model/Body62.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20096**](../Model/InlineResponse20096.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createMailHeaderFooter**
> \Swagger\Client\Model\InlineResponse20096 createMailHeaderFooter($body, $_response)

Create a new Mail Header Footer resources

Create a new Mail Header Footer resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MailHeaderFooterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\MailHeaderFooterFlat(); // \Swagger\Client\Model\MailHeaderFooterFlat | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createMailHeaderFooter($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailHeaderFooterApi->createMailHeaderFooter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MailHeaderFooterFlat**](../Model/MailHeaderFooterFlat.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20096**](../Model/InlineResponse20096.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMailHeaderFooter**
> deleteMailHeaderFooter($id, $_response)

Delete a Mail Header Footer resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MailHeaderFooterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the mail_header_footer
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteMailHeaderFooter($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling MailHeaderFooterApi->deleteMailHeaderFooter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the mail_header_footer |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMailHeaderFooter**
> \Swagger\Client\Model\InlineResponse20096 getMailHeaderFooter($id)

Detailed information about a Mail Header Footer resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MailHeaderFooterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the mail_header_footer

try {
    $result = $apiInstance->getMailHeaderFooter($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailHeaderFooterApi->getMailHeaderFooter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the mail_header_footer |

### Return type

[**\Swagger\Client\Model\InlineResponse20096**](../Model/InlineResponse20096.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMailHeaderFooterList**
> \Swagger\Client\Model\InlineResponse20094 getMailHeaderFooterList($limit, $page, $query)

List with basic information of Mail Header Footer resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MailHeaderFooterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getMailHeaderFooterList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailHeaderFooterApi->getMailHeaderFooterList: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse20094**](../Model/InlineResponse20094.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMailHeaderFooter**
> \Swagger\Client\Model\InlineResponse20096 updateMailHeaderFooter($id, $body, $_response)

Partially update information about a Mail Header Footer resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MailHeaderFooterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the mail_header_footer
$body = new \Swagger\Client\Model\Body63(); // \Swagger\Client\Model\Body63 | Partially update information about a Mail Header Footer resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateMailHeaderFooter($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailHeaderFooterApi->updateMailHeaderFooter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the mail_header_footer |
 **body** | [**\Swagger\Client\Model\Body63**](../Model/Body63.md)| Partially update information about a Mail Header Footer resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20096**](../Model/InlineResponse20096.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMailHeaderFooter**
> \Swagger\Client\Model\InlineResponse20096 updateMailHeaderFooter($id, $body, $_response)

Partially update information about a Mail Header Footer resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MailHeaderFooterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the mail_header_footer
$body = new \Swagger\Client\Model\MailHeaderFooterFlat(); // \Swagger\Client\Model\MailHeaderFooterFlat | Partially update information about a Mail Header Footer resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateMailHeaderFooter($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailHeaderFooterApi->updateMailHeaderFooter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the mail_header_footer |
 **body** | [**\Swagger\Client\Model\MailHeaderFooterFlat**](../Model/MailHeaderFooterFlat.md)| Partially update information about a Mail Header Footer resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20096**](../Model/InlineResponse20096.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

