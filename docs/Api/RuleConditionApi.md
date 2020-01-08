# Swagger\Client\RuleConditionApi

All URIs are relative to *http://shopware.test/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createRuleCondition**](RuleConditionApi.md#createrulecondition) | **POST** /rule-condition | Create a new Rule Condition resources
[**deleteRuleCondition**](RuleConditionApi.md#deleterulecondition) | **DELETE** /rule-condition/{id} | Delete a Rule Condition resource
[**getRuleCondition**](RuleConditionApi.md#getrulecondition) | **GET** /rule-condition/{id} | Detailed information about a Rule Condition resource
[**getRuleConditionList**](RuleConditionApi.md#getruleconditionlist) | **GET** /rule-condition | List with basic information of Rule Condition resources
[**updateRuleCondition**](RuleConditionApi.md#updaterulecondition) | **PATCH** /rule-condition/{id} | Partially update information about a Rule Condition resource

# **createRuleCondition**
> \Swagger\Client\Model\InlineResponse200240 createRuleCondition($body, $_response)

Create a new Rule Condition resources

Create a new Rule Condition resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RuleConditionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Body158(); // \Swagger\Client\Model\Body158 | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createRuleCondition($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RuleConditionApi->createRuleCondition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body158**](../Model/Body158.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200240**](../Model/InlineResponse200240.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRuleCondition**
> \Swagger\Client\Model\InlineResponse200240 createRuleCondition($body, $_response)

Create a new Rule Condition resources

Create a new Rule Condition resources. All required fields must be provided in order to create a new resource successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RuleConditionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\RuleConditionFlat(); // \Swagger\Client\Model\RuleConditionFlat | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createRuleCondition($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RuleConditionApi->createRuleCondition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\RuleConditionFlat**](../Model/RuleConditionFlat.md)|  | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200240**](../Model/InlineResponse200240.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRuleCondition**
> deleteRuleCondition($id, $_response)

Delete a Rule Condition resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RuleConditionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the rule_condition
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteRuleCondition($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling RuleConditionApi->deleteRuleCondition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the rule_condition |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRuleCondition**
> \Swagger\Client\Model\InlineResponse200240 getRuleCondition($id)

Detailed information about a Rule Condition resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RuleConditionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the rule_condition

try {
    $result = $apiInstance->getRuleCondition($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RuleConditionApi->getRuleCondition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the rule_condition |

### Return type

[**\Swagger\Client\Model\InlineResponse200240**](../Model/InlineResponse200240.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRuleConditionList**
> \Swagger\Client\Model\InlineResponse200238 getRuleConditionList($limit, $page, $query)

List with basic information of Rule Condition resources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RuleConditionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getRuleConditionList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RuleConditionApi->getRuleConditionList: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse200238**](../Model/InlineResponse200238.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRuleCondition**
> \Swagger\Client\Model\InlineResponse200240 updateRuleCondition($id, $body, $_response)

Partially update information about a Rule Condition resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RuleConditionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the rule_condition
$body = new \Swagger\Client\Model\Body159(); // \Swagger\Client\Model\Body159 | Partially update information about a Rule Condition resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateRuleCondition($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RuleConditionApi->updateRuleCondition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the rule_condition |
 **body** | [**\Swagger\Client\Model\Body159**](../Model/Body159.md)| Partially update information about a Rule Condition resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200240**](../Model/InlineResponse200240.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRuleCondition**
> \Swagger\Client\Model\InlineResponse200240 updateRuleCondition($id, $body, $_response)

Partially update information about a Rule Condition resource

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RuleConditionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the rule_condition
$body = new \Swagger\Client\Model\RuleConditionFlat(); // \Swagger\Client\Model\RuleConditionFlat | Partially update information about a Rule Condition resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateRuleCondition($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RuleConditionApi->updateRuleCondition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| Identifier for the rule_condition |
 **body** | [**\Swagger\Client\Model\RuleConditionFlat**](../Model/RuleConditionFlat.md)| Partially update information about a Rule Condition resource. | [optional]
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200240**](../Model/InlineResponse200240.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.api+json, application/json
 - **Accept**: application/vnd.api+json, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

