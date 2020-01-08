# Swagger\Client\NewsletterRecipientApi

All URIs are relative to *http://shopware.test/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createNewsletterRecipient**](NewsletterRecipientApi.md#createnewsletterrecipient) | **POST** /newsletter-recipient | Create a new Newsletter Recipient resources
[**deleteNewsletterRecipient**](NewsletterRecipientApi.md#deletenewsletterrecipient) | **DELETE** /newsletter-recipient/{id} | Delete a Newsletter Recipient resource
[**getNewsletterRecipient**](NewsletterRecipientApi.md#getnewsletterrecipient) | **GET** /newsletter-recipient/{id} | Detailed information about a Newsletter Recipient resource
[**getNewsletterRecipientList**](NewsletterRecipientApi.md#getnewsletterrecipientlist) | **GET** /newsletter-recipient | List with basic information of Newsletter Recipient resources
[**updateNewsletterRecipient**](NewsletterRecipientApi.md#updatenewsletterrecipient) | **PATCH** /newsletter-recipient/{id} | Partially update information about a Newsletter Recipient resource

# **createNewsletterRecipient**
> \Swagger\Client\Model\InlineResponse200132 createNewsletterRecipient($body, $_response)

Create a new Newsletter Recipient resources

Create a new Newsletter Recipient resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NewsletterRecipientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Body86(); // \Swagger\Client\Model\Body86 | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createNewsletterRecipient($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsletterRecipientApi->createNewsletterRecipient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body86**](../Model/Body86.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200132**](../Model/InlineResponse200132.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createNewsletterRecipient**
> \Swagger\Client\Model\InlineResponse200132 createNewsletterRecipient($body, $_response)

Create a new Newsletter Recipient resources

Create a new Newsletter Recipient resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NewsletterRecipientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\NewsletterRecipientFlat(); // \Swagger\Client\Model\NewsletterRecipientFlat | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createNewsletterRecipient($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsletterRecipientApi->createNewsletterRecipient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\NewsletterRecipientFlat**](../Model/NewsletterRecipientFlat.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200132**](../Model/InlineResponse200132.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteNewsletterRecipient**
> deleteNewsletterRecipient($id, $_response)

Delete a Newsletter Recipient resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NewsletterRecipientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the newsletter_recipient
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteNewsletterRecipient($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling NewsletterRecipientApi->deleteNewsletterRecipient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the newsletter_recipient |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNewsletterRecipient**
> \Swagger\Client\Model\InlineResponse200132 getNewsletterRecipient($id)

Detailed information about a Newsletter Recipient resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NewsletterRecipientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the newsletter_recipient

try {
    $result = $apiInstance->getNewsletterRecipient($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsletterRecipientApi->getNewsletterRecipient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the newsletter_recipient |

### Return type

[**\Swagger\Client\Model\InlineResponse200132**](../Model/InlineResponse200132.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNewsletterRecipientList**
> \Swagger\Client\Model\InlineResponse200130 getNewsletterRecipientList($limit, $page, $query)

List with basic information of Newsletter Recipient resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NewsletterRecipientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getNewsletterRecipientList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsletterRecipientApi->getNewsletterRecipientList: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse200130**](../Model/InlineResponse200130.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateNewsletterRecipient**
> \Swagger\Client\Model\InlineResponse200132 updateNewsletterRecipient($id, $body, $_response)

Partially update information about a Newsletter Recipient resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NewsletterRecipientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the newsletter_recipient
$body = new \Swagger\Client\Model\Body87(); // \Swagger\Client\Model\Body87 | Partially update information about a Newsletter Recipient resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateNewsletterRecipient($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsletterRecipientApi->updateNewsletterRecipient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the newsletter_recipient |
 **body** | [**\Swagger\Client\Model\Body87**](../Model/Body87.md)| Partially update information about a Newsletter Recipient resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200132**](../Model/InlineResponse200132.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateNewsletterRecipient**
> \Swagger\Client\Model\InlineResponse200132 updateNewsletterRecipient($id, $body, $_response)

Partially update information about a Newsletter Recipient resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\NewsletterRecipientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the newsletter_recipient
$body = new \Swagger\Client\Model\NewsletterRecipientFlat(); // \Swagger\Client\Model\NewsletterRecipientFlat | Partially update information about a Newsletter Recipient resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateNewsletterRecipient($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NewsletterRecipientApi->updateNewsletterRecipient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the newsletter_recipient |
 **body** | [**\Swagger\Client\Model\NewsletterRecipientFlat**](../Model/NewsletterRecipientFlat.md)| Partially update information about a Newsletter Recipient resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200132**](../Model/InlineResponse200132.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

