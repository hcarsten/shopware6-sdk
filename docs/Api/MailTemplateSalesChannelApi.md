# ShopwareSDK6\MailTemplateSalesChannelApi

All URIs are relative to *http://shopware.test/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createMailTemplateSalesChannel**](MailTemplateSalesChannelApi.md#createmailtemplatesaleschannel) | **POST** /mail-template-sales-channel | Create a new Mail Template Sales Channel resources
[**deleteMailTemplateSalesChannel**](MailTemplateSalesChannelApi.md#deletemailtemplatesaleschannel) | **DELETE** /mail-template-sales-channel/{id} | Delete a Mail Template Sales Channel resource
[**getMailTemplateSalesChannel**](MailTemplateSalesChannelApi.md#getmailtemplatesaleschannel) | **GET** /mail-template-sales-channel/{id} | Detailed information about a Mail Template Sales Channel resource
[**getMailTemplateSalesChannelList**](MailTemplateSalesChannelApi.md#getmailtemplatesaleschannellist) | **GET** /mail-template-sales-channel | List with basic information of Mail Template Sales Channel resources
[**updateMailTemplateSalesChannel**](MailTemplateSalesChannelApi.md#updatemailtemplatesaleschannel) | **PATCH** /mail-template-sales-channel/{id} | Partially update information about a Mail Template Sales Channel resource

# **createMailTemplateSalesChannel**
> \ShopwareSDK6\Model\InlineResponse200102 createMailTemplateSalesChannel($body, $_response)

Create a new Mail Template Sales Channel resources

Create a new Mail Template Sales Channel resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\MailTemplateSalesChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ShopwareSDK6\Model\Body66(); // \ShopwareSDK6\Model\Body66 | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createMailTemplateSalesChannel($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailTemplateSalesChannelApi->createMailTemplateSalesChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ShopwareSDK6\Model\Body66**](../Model/Body66.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200102**](../Model/InlineResponse200102.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createMailTemplateSalesChannel**
> \ShopwareSDK6\Model\InlineResponse200102 createMailTemplateSalesChannel($body, $_response)

Create a new Mail Template Sales Channel resources

Create a new Mail Template Sales Channel resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\MailTemplateSalesChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ShopwareSDK6\Model\MailTemplateSalesChannelFlat(); // \ShopwareSDK6\Model\MailTemplateSalesChannelFlat | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createMailTemplateSalesChannel($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailTemplateSalesChannelApi->createMailTemplateSalesChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ShopwareSDK6\Model\MailTemplateSalesChannelFlat**](../Model/MailTemplateSalesChannelFlat.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200102**](../Model/InlineResponse200102.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMailTemplateSalesChannel**
> deleteMailTemplateSalesChannel($id, $_response)

Delete a Mail Template Sales Channel resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\MailTemplateSalesChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the mail_template_sales_channel
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteMailTemplateSalesChannel($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling MailTemplateSalesChannelApi->deleteMailTemplateSalesChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the mail_template_sales_channel |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMailTemplateSalesChannel**
> \ShopwareSDK6\Model\InlineResponse200102 getMailTemplateSalesChannel($id)

Detailed information about a Mail Template Sales Channel resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\MailTemplateSalesChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the mail_template_sales_channel

try {
    $result = $apiInstance->getMailTemplateSalesChannel($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailTemplateSalesChannelApi->getMailTemplateSalesChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the mail_template_sales_channel |

### Return type

[**\ShopwareSDK6\Model\InlineResponse200102**](../Model/InlineResponse200102.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMailTemplateSalesChannelList**
> \ShopwareSDK6\Model\InlineResponse200100 getMailTemplateSalesChannelList($limit, $page, $query)

List with basic information of Mail Template Sales Channel resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\MailTemplateSalesChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getMailTemplateSalesChannelList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailTemplateSalesChannelApi->getMailTemplateSalesChannelList: ', $e->getMessage(), PHP_EOL;
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

[**\ShopwareSDK6\Model\InlineResponse200100**](../Model/InlineResponse200100.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMailTemplateSalesChannel**
> \ShopwareSDK6\Model\InlineResponse200102 updateMailTemplateSalesChannel($id, $body, $_response)

Partially update information about a Mail Template Sales Channel resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\MailTemplateSalesChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the mail_template_sales_channel
$body = new \ShopwareSDK6\Model\Body67(); // \ShopwareSDK6\Model\Body67 | Partially update information about a Mail Template Sales Channel resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateMailTemplateSalesChannel($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailTemplateSalesChannelApi->updateMailTemplateSalesChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the mail_template_sales_channel |
 **body** | [**\ShopwareSDK6\Model\Body67**](../Model/Body67.md)| Partially update information about a Mail Template Sales Channel resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200102**](../Model/InlineResponse200102.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMailTemplateSalesChannel**
> \ShopwareSDK6\Model\InlineResponse200102 updateMailTemplateSalesChannel($id, $body, $_response)

Partially update information about a Mail Template Sales Channel resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\MailTemplateSalesChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the mail_template_sales_channel
$body = new \ShopwareSDK6\Model\MailTemplateSalesChannelFlat(); // \ShopwareSDK6\Model\MailTemplateSalesChannelFlat | Partially update information about a Mail Template Sales Channel resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateMailTemplateSalesChannel($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailTemplateSalesChannelApi->updateMailTemplateSalesChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the mail_template_sales_channel |
 **body** | [**\ShopwareSDK6\Model\MailTemplateSalesChannelFlat**](../Model/MailTemplateSalesChannelFlat.md)| Partially update information about a Mail Template Sales Channel resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200102**](../Model/InlineResponse200102.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

