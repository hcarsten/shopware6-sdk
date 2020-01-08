# ShopwareSDK6\ShippingMethodPriceApi

All URIs are relative to *http://shopware.test/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createShippingMethodPrice**](ShippingMethodPriceApi.md#createshippingmethodprice) | **POST** /shipping-method-price | Create a new Shipping Method Price resources
[**deleteShippingMethodPrice**](ShippingMethodPriceApi.md#deleteshippingmethodprice) | **DELETE** /shipping-method-price/{id} | Delete a Shipping Method Price resource
[**getShippingMethodPrice**](ShippingMethodPriceApi.md#getshippingmethodprice) | **GET** /shipping-method-price/{id} | Detailed information about a Shipping Method Price resource
[**getShippingMethodPriceList**](ShippingMethodPriceApi.md#getshippingmethodpricelist) | **GET** /shipping-method-price | List with basic information of Shipping Method Price resources
[**updateShippingMethodPrice**](ShippingMethodPriceApi.md#updateshippingmethodprice) | **PATCH** /shipping-method-price/{id} | Partially update information about a Shipping Method Price resource

# **createShippingMethodPrice**
> \ShopwareSDK6\Model\InlineResponse200267 createShippingMethodPrice($body, $_response)

Create a new Shipping Method Price resources

Create a new Shipping Method Price resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\ShippingMethodPriceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ShopwareSDK6\Model\Body176(); // \ShopwareSDK6\Model\Body176 | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createShippingMethodPrice($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingMethodPriceApi->createShippingMethodPrice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ShopwareSDK6\Model\Body176**](../Model/Body176.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200267**](../Model/InlineResponse200267.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createShippingMethodPrice**
> \ShopwareSDK6\Model\InlineResponse200267 createShippingMethodPrice($body, $_response)

Create a new Shipping Method Price resources

Create a new Shipping Method Price resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\ShippingMethodPriceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \ShopwareSDK6\Model\ShippingMethodPriceFlat(); // \ShopwareSDK6\Model\ShippingMethodPriceFlat | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createShippingMethodPrice($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingMethodPriceApi->createShippingMethodPrice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\ShopwareSDK6\Model\ShippingMethodPriceFlat**](../Model/ShippingMethodPriceFlat.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200267**](../Model/InlineResponse200267.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteShippingMethodPrice**
> deleteShippingMethodPrice($id, $_response)

Delete a Shipping Method Price resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\ShippingMethodPriceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the shipping_method_price
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteShippingMethodPrice($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling ShippingMethodPriceApi->deleteShippingMethodPrice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the shipping_method_price |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getShippingMethodPrice**
> \ShopwareSDK6\Model\InlineResponse200267 getShippingMethodPrice($id)

Detailed information about a Shipping Method Price resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\ShippingMethodPriceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the shipping_method_price

try {
    $result = $apiInstance->getShippingMethodPrice($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingMethodPriceApi->getShippingMethodPrice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the shipping_method_price |

### Return type

[**\ShopwareSDK6\Model\InlineResponse200267**](../Model/InlineResponse200267.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getShippingMethodPriceList**
> \ShopwareSDK6\Model\InlineResponse200265 getShippingMethodPriceList($limit, $page, $query)

List with basic information of Shipping Method Price resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\ShippingMethodPriceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getShippingMethodPriceList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingMethodPriceApi->getShippingMethodPriceList: ', $e->getMessage(), PHP_EOL;
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

[**\ShopwareSDK6\Model\InlineResponse200265**](../Model/InlineResponse200265.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateShippingMethodPrice**
> \ShopwareSDK6\Model\InlineResponse200267 updateShippingMethodPrice($id, $body, $_response)

Partially update information about a Shipping Method Price resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\ShippingMethodPriceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the shipping_method_price
$body = new \ShopwareSDK6\Model\Body177(); // \ShopwareSDK6\Model\Body177 | Partially update information about a Shipping Method Price resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateShippingMethodPrice($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingMethodPriceApi->updateShippingMethodPrice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the shipping_method_price |
 **body** | [**\ShopwareSDK6\Model\Body177**](../Model/Body177.md)| Partially update information about a Shipping Method Price resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200267**](../Model/InlineResponse200267.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateShippingMethodPrice**
> \ShopwareSDK6\Model\InlineResponse200267 updateShippingMethodPrice($id, $body, $_response)

Partially update information about a Shipping Method Price resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new ShopwareSDK6\Api\ShippingMethodPriceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the shipping_method_price
$body = new \ShopwareSDK6\Model\ShippingMethodPriceFlat(); // \ShopwareSDK6\Model\ShippingMethodPriceFlat | Partially update information about a Shipping Method Price resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateShippingMethodPrice($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingMethodPriceApi->updateShippingMethodPrice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the shipping_method_price |
 **body** | [**\ShopwareSDK6\Model\ShippingMethodPriceFlat**](../Model/ShippingMethodPriceFlat.md)| Partially update information about a Shipping Method Price resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\ShopwareSDK6\Model\InlineResponse200267**](../Model/InlineResponse200267.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

