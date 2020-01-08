# ShopwareSDK6

Shopware API SDK  V6 API from swagger-codegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/industryarena/ShopwareSDK6.git"
    }
  ],
  "require": {
    "industryarena/ShopwareSDK6": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AclResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\Body(); // \Swagger\Client\Model\Body | 
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->createAclResource($body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AclResourceApi->createAclResource: ', $e->getMessage(), PHP_EOL;
}

$apiInstance = new Swagger\Client\Api\AclResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the acl_resource
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteAclResource($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling AclResourceApi->deleteAclResource: ', $e->getMessage(), PHP_EOL;
}

$apiInstance = new Swagger\Client\Api\AclResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the acl_resource

try {
    $result = $apiInstance->getAclResource($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AclResourceApi->getAclResource: ', $e->getMessage(), PHP_EOL;
}

$apiInstance = new Swagger\Client\Api\AclResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = "query_example"; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getAclResourceList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AclResourceApi->getAclResourceList: ', $e->getMessage(), PHP_EOL;
}

$apiInstance = new Swagger\Client\Api\AclResourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Identifier for the acl_resource
$body = new \Swagger\Client\Model\Body1(); // \Swagger\Client\Model\Body1 | Partially update information about a Acl Resource resource.
$_response = "_response_example"; // string | Data format for response. Empty if none is provided.

try {
    $result = $apiInstance->updateAclResource($id, $body, $_response);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AclResourceApi->updateAclResource: ', $e->getMessage(), PHP_EOL;
}
?>
```

## Documentation for API Endpoints

All URIs are relative to *http://shopware.test/api/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AclResourceApi* | [**createAclResource**](docs/Api/AclResourceApi.md#createaclresource) | **POST** /acl-resource | Create a new Acl Resource resources
*AclResourceApi* | [**deleteAclResource**](docs/Api/AclResourceApi.md#deleteaclresource) | **DELETE** /acl-resource/{id} | Delete a Acl Resource resource
*AclResourceApi* | [**getAclResource**](docs/Api/AclResourceApi.md#getaclresource) | **GET** /acl-resource/{id} | Detailed information about a Acl Resource resource
*AclResourceApi* | [**getAclResourceList**](docs/Api/AclResourceApi.md#getaclresourcelist) | **GET** /acl-resource | List with basic information of Acl Resource resources
*AclResourceApi* | [**updateAclResource**](docs/Api/AclResourceApi.md#updateaclresource) | **PATCH** /acl-resource/{id} | Partially update information about a Acl Resource resource
*AclRoleApi* | [**createAclRole**](docs/Api/AclRoleApi.md#createaclrole) | **POST** /acl-role | Create a new Acl Role resources
*AclRoleApi* | [**deleteAclRole**](docs/Api/AclRoleApi.md#deleteaclrole) | **DELETE** /acl-role/{id} | Delete a Acl Role resource
*AclRoleApi* | [**getAclRole**](docs/Api/AclRoleApi.md#getaclrole) | **GET** /acl-role/{id} | Detailed information about a Acl Role resource
*AclRoleApi* | [**getAclRoleList**](docs/Api/AclRoleApi.md#getaclrolelist) | **GET** /acl-role | List with basic information of Acl Role resources
*AclRoleApi* | [**updateAclRole**](docs/Api/AclRoleApi.md#updateaclrole) | **PATCH** /acl-role/{id} | Partially update information about a Acl Role resource
*AdminApiApi* | [**compositeSearch**](docs/Api/AdminApiApi.md#compositesearch) | **GET** /_search | 
*CategoryApi* | [**createCategory**](docs/Api/CategoryApi.md#createcategory) | **POST** /category | Create a new Category resources
*CategoryApi* | [**deleteCategory**](docs/Api/CategoryApi.md#deletecategory) | **DELETE** /category/{id} | Delete a Category resource
*CategoryApi* | [**getCategory**](docs/Api/CategoryApi.md#getcategory) | **GET** /category/{id} | Detailed information about a Category resource
*CategoryApi* | [**getCategoryList**](docs/Api/CategoryApi.md#getcategorylist) | **GET** /category | List with basic information of Category resources
*CategoryApi* | [**updateCategory**](docs/Api/CategoryApi.md#updatecategory) | **PATCH** /category/{id} | Partially update information about a Category resource
*CmsBlockApi* | [**createCmsBlock**](docs/Api/CmsBlockApi.md#createcmsblock) | **POST** /cms-block | Create a new Cms Block resources
*CmsBlockApi* | [**deleteCmsBlock**](docs/Api/CmsBlockApi.md#deletecmsblock) | **DELETE** /cms-block/{id} | Delete a Cms Block resource
*CmsBlockApi* | [**getCmsBlock**](docs/Api/CmsBlockApi.md#getcmsblock) | **GET** /cms-block/{id} | Detailed information about a Cms Block resource
*CmsBlockApi* | [**getCmsBlockList**](docs/Api/CmsBlockApi.md#getcmsblocklist) | **GET** /cms-block | List with basic information of Cms Block resources
*CmsBlockApi* | [**updateCmsBlock**](docs/Api/CmsBlockApi.md#updatecmsblock) | **PATCH** /cms-block/{id} | Partially update information about a Cms Block resource
*CmsPageApi* | [**createCmsPage**](docs/Api/CmsPageApi.md#createcmspage) | **POST** /cms-page | Create a new Cms Page resources
*CmsPageApi* | [**deleteCmsPage**](docs/Api/CmsPageApi.md#deletecmspage) | **DELETE** /cms-page/{id} | Delete a Cms Page resource
*CmsPageApi* | [**getCmsPage**](docs/Api/CmsPageApi.md#getcmspage) | **GET** /cms-page/{id} | Detailed information about a Cms Page resource
*CmsPageApi* | [**getCmsPageList**](docs/Api/CmsPageApi.md#getcmspagelist) | **GET** /cms-page | List with basic information of Cms Page resources
*CmsPageApi* | [**updateCmsPage**](docs/Api/CmsPageApi.md#updatecmspage) | **PATCH** /cms-page/{id} | Partially update information about a Cms Page resource
*CmsSectionApi* | [**createCmsSection**](docs/Api/CmsSectionApi.md#createcmssection) | **POST** /cms-section | Create a new Cms Section resources
*CmsSectionApi* | [**deleteCmsSection**](docs/Api/CmsSectionApi.md#deletecmssection) | **DELETE** /cms-section/{id} | Delete a Cms Section resource
*CmsSectionApi* | [**getCmsSection**](docs/Api/CmsSectionApi.md#getcmssection) | **GET** /cms-section/{id} | Detailed information about a Cms Section resource
*CmsSectionApi* | [**getCmsSectionList**](docs/Api/CmsSectionApi.md#getcmssectionlist) | **GET** /cms-section | List with basic information of Cms Section resources
*CmsSectionApi* | [**updateCmsSection**](docs/Api/CmsSectionApi.md#updatecmssection) | **PATCH** /cms-section/{id} | Partially update information about a Cms Section resource
*CmsSlotApi* | [**createCmsSlot**](docs/Api/CmsSlotApi.md#createcmsslot) | **POST** /cms-slot | Create a new Cms Slot resources
*CmsSlotApi* | [**deleteCmsSlot**](docs/Api/CmsSlotApi.md#deletecmsslot) | **DELETE** /cms-slot/{id} | Delete a Cms Slot resource
*CmsSlotApi* | [**getCmsSlot**](docs/Api/CmsSlotApi.md#getcmsslot) | **GET** /cms-slot/{id} | Detailed information about a Cms Slot resource
*CmsSlotApi* | [**getCmsSlotList**](docs/Api/CmsSlotApi.md#getcmsslotlist) | **GET** /cms-slot | List with basic information of Cms Slot resources
*CmsSlotApi* | [**updateCmsSlot**](docs/Api/CmsSlotApi.md#updatecmsslot) | **PATCH** /cms-slot/{id} | Partially update information about a Cms Slot resource
*CountryApi* | [**createCountry**](docs/Api/CountryApi.md#createcountry) | **POST** /country | Create a new Country resources
*CountryApi* | [**deleteCountry**](docs/Api/CountryApi.md#deletecountry) | **DELETE** /country/{id} | Delete a Country resource
*CountryApi* | [**getCountry**](docs/Api/CountryApi.md#getcountry) | **GET** /country/{id} | Detailed information about a Country resource
*CountryApi* | [**getCountryList**](docs/Api/CountryApi.md#getcountrylist) | **GET** /country | List with basic information of Country resources
*CountryApi* | [**updateCountry**](docs/Api/CountryApi.md#updatecountry) | **PATCH** /country/{id} | Partially update information about a Country resource
*CountryStateApi* | [**createCountryState**](docs/Api/CountryStateApi.md#createcountrystate) | **POST** /country-state | Create a new Country State resources
*CountryStateApi* | [**deleteCountryState**](docs/Api/CountryStateApi.md#deletecountrystate) | **DELETE** /country-state/{id} | Delete a Country State resource
*CountryStateApi* | [**getCountryState**](docs/Api/CountryStateApi.md#getcountrystate) | **GET** /country-state/{id} | Detailed information about a Country State resource
*CountryStateApi* | [**getCountryStateList**](docs/Api/CountryStateApi.md#getcountrystatelist) | **GET** /country-state | List with basic information of Country State resources
*CountryStateApi* | [**updateCountryState**](docs/Api/CountryStateApi.md#updatecountrystate) | **PATCH** /country-state/{id} | Partially update information about a Country State resource
*CurrencyApi* | [**createCurrency**](docs/Api/CurrencyApi.md#createcurrency) | **POST** /currency | Create a new Currency resources
*CurrencyApi* | [**deleteCurrency**](docs/Api/CurrencyApi.md#deletecurrency) | **DELETE** /currency/{id} | Delete a Currency resource
*CurrencyApi* | [**getCurrency**](docs/Api/CurrencyApi.md#getcurrency) | **GET** /currency/{id} | Detailed information about a Currency resource
*CurrencyApi* | [**getCurrencyList**](docs/Api/CurrencyApi.md#getcurrencylist) | **GET** /currency | List with basic information of Currency resources
*CurrencyApi* | [**updateCurrency**](docs/Api/CurrencyApi.md#updatecurrency) | **PATCH** /currency/{id} | Partially update information about a Currency resource
*CustomFieldApi* | [**createCustomField**](docs/Api/CustomFieldApi.md#createcustomfield) | **POST** /custom-field | Create a new Custom Field resources
*CustomFieldApi* | [**deleteCustomField**](docs/Api/CustomFieldApi.md#deletecustomfield) | **DELETE** /custom-field/{id} | Delete a Custom Field resource
*CustomFieldApi* | [**getCustomField**](docs/Api/CustomFieldApi.md#getcustomfield) | **GET** /custom-field/{id} | Detailed information about a Custom Field resource
*CustomFieldApi* | [**getCustomFieldList**](docs/Api/CustomFieldApi.md#getcustomfieldlist) | **GET** /custom-field | List with basic information of Custom Field resources
*CustomFieldApi* | [**updateCustomField**](docs/Api/CustomFieldApi.md#updatecustomfield) | **PATCH** /custom-field/{id} | Partially update information about a Custom Field resource
*CustomFieldSetApi* | [**createCustomFieldSet**](docs/Api/CustomFieldSetApi.md#createcustomfieldset) | **POST** /custom-field-set | Create a new Custom Field Set resources
*CustomFieldSetApi* | [**deleteCustomFieldSet**](docs/Api/CustomFieldSetApi.md#deletecustomfieldset) | **DELETE** /custom-field-set/{id} | Delete a Custom Field Set resource
*CustomFieldSetApi* | [**getCustomFieldSet**](docs/Api/CustomFieldSetApi.md#getcustomfieldset) | **GET** /custom-field-set/{id} | Detailed information about a Custom Field Set resource
*CustomFieldSetApi* | [**getCustomFieldSetList**](docs/Api/CustomFieldSetApi.md#getcustomfieldsetlist) | **GET** /custom-field-set | List with basic information of Custom Field Set resources
*CustomFieldSetApi* | [**updateCustomFieldSet**](docs/Api/CustomFieldSetApi.md#updatecustomfieldset) | **PATCH** /custom-field-set/{id} | Partially update information about a Custom Field Set resource
*CustomFieldSetRelationApi* | [**createCustomFieldSetRelation**](docs/Api/CustomFieldSetRelationApi.md#createcustomfieldsetrelation) | **POST** /custom-field-set-relation | Create a new Custom Field Set Relation resources
*CustomFieldSetRelationApi* | [**deleteCustomFieldSetRelation**](docs/Api/CustomFieldSetRelationApi.md#deletecustomfieldsetrelation) | **DELETE** /custom-field-set-relation/{id} | Delete a Custom Field Set Relation resource
*CustomFieldSetRelationApi* | [**getCustomFieldSetRelation**](docs/Api/CustomFieldSetRelationApi.md#getcustomfieldsetrelation) | **GET** /custom-field-set-relation/{id} | Detailed information about a Custom Field Set Relation resource
*CustomFieldSetRelationApi* | [**getCustomFieldSetRelationList**](docs/Api/CustomFieldSetRelationApi.md#getcustomfieldsetrelationlist) | **GET** /custom-field-set-relation | List with basic information of Custom Field Set Relation resources
*CustomFieldSetRelationApi* | [**updateCustomFieldSetRelation**](docs/Api/CustomFieldSetRelationApi.md#updatecustomfieldsetrelation) | **PATCH** /custom-field-set-relation/{id} | Partially update information about a Custom Field Set Relation resource
*CustomerApi* | [**createCustomer**](docs/Api/CustomerApi.md#createcustomer) | **POST** /customer | Create a new Customer resources
*CustomerApi* | [**deleteCustomer**](docs/Api/CustomerApi.md#deletecustomer) | **DELETE** /customer/{id} | Delete a Customer resource
*CustomerApi* | [**getCustomer**](docs/Api/CustomerApi.md#getcustomer) | **GET** /customer/{id} | Detailed information about a Customer resource
*CustomerApi* | [**getCustomerList**](docs/Api/CustomerApi.md#getcustomerlist) | **GET** /customer | List with basic information of Customer resources
*CustomerApi* | [**updateCustomer**](docs/Api/CustomerApi.md#updatecustomer) | **PATCH** /customer/{id} | Partially update information about a Customer resource
*CustomerAddressApi* | [**createCustomerAddress**](docs/Api/CustomerAddressApi.md#createcustomeraddress) | **POST** /customer-address | Create a new Customer Address resources
*CustomerAddressApi* | [**deleteCustomerAddress**](docs/Api/CustomerAddressApi.md#deletecustomeraddress) | **DELETE** /customer-address/{id} | Delete a Customer Address resource
*CustomerAddressApi* | [**getCustomerAddress**](docs/Api/CustomerAddressApi.md#getcustomeraddress) | **GET** /customer-address/{id} | Detailed information about a Customer Address resource
*CustomerAddressApi* | [**getCustomerAddressList**](docs/Api/CustomerAddressApi.md#getcustomeraddresslist) | **GET** /customer-address | List with basic information of Customer Address resources
*CustomerAddressApi* | [**updateCustomerAddress**](docs/Api/CustomerAddressApi.md#updatecustomeraddress) | **PATCH** /customer-address/{id} | Partially update information about a Customer Address resource
*CustomerGroupApi* | [**createCustomerGroup**](docs/Api/CustomerGroupApi.md#createcustomergroup) | **POST** /customer-group | Create a new Customer Group resources
*CustomerGroupApi* | [**deleteCustomerGroup**](docs/Api/CustomerGroupApi.md#deletecustomergroup) | **DELETE** /customer-group/{id} | Delete a Customer Group resource
*CustomerGroupApi* | [**getCustomerGroup**](docs/Api/CustomerGroupApi.md#getcustomergroup) | **GET** /customer-group/{id} | Detailed information about a Customer Group resource
*CustomerGroupApi* | [**getCustomerGroupList**](docs/Api/CustomerGroupApi.md#getcustomergrouplist) | **GET** /customer-group | List with basic information of Customer Group resources
*CustomerGroupApi* | [**updateCustomerGroup**](docs/Api/CustomerGroupApi.md#updatecustomergroup) | **PATCH** /customer-group/{id} | Partially update information about a Customer Group resource
*CustomerRecoveryApi* | [**createCustomerRecovery**](docs/Api/CustomerRecoveryApi.md#createcustomerrecovery) | **POST** /customer-recovery | Create a new Customer Recovery resources
*CustomerRecoveryApi* | [**deleteCustomerRecovery**](docs/Api/CustomerRecoveryApi.md#deletecustomerrecovery) | **DELETE** /customer-recovery/{id} | Delete a Customer Recovery resource
*CustomerRecoveryApi* | [**getCustomerRecovery**](docs/Api/CustomerRecoveryApi.md#getcustomerrecovery) | **GET** /customer-recovery/{id} | Detailed information about a Customer Recovery resource
*CustomerRecoveryApi* | [**getCustomerRecoveryList**](docs/Api/CustomerRecoveryApi.md#getcustomerrecoverylist) | **GET** /customer-recovery | List with basic information of Customer Recovery resources
*CustomerRecoveryApi* | [**updateCustomerRecovery**](docs/Api/CustomerRecoveryApi.md#updatecustomerrecovery) | **PATCH** /customer-recovery/{id} | Partially update information about a Customer Recovery resource
*DeadMessageApi* | [**createDeadMessage**](docs/Api/DeadMessageApi.md#createdeadmessage) | **POST** /dead-message | Create a new Dead Message resources
*DeadMessageApi* | [**deleteDeadMessage**](docs/Api/DeadMessageApi.md#deletedeadmessage) | **DELETE** /dead-message/{id} | Delete a Dead Message resource
*DeadMessageApi* | [**getDeadMessage**](docs/Api/DeadMessageApi.md#getdeadmessage) | **GET** /dead-message/{id} | Detailed information about a Dead Message resource
*DeadMessageApi* | [**getDeadMessageList**](docs/Api/DeadMessageApi.md#getdeadmessagelist) | **GET** /dead-message | List with basic information of Dead Message resources
*DeadMessageApi* | [**updateDeadMessage**](docs/Api/DeadMessageApi.md#updatedeadmessage) | **PATCH** /dead-message/{id} | Partially update information about a Dead Message resource
*DeliveryTimeApi* | [**createDeliveryTime**](docs/Api/DeliveryTimeApi.md#createdeliverytime) | **POST** /delivery-time | Create a new Delivery Time resources
*DeliveryTimeApi* | [**deleteDeliveryTime**](docs/Api/DeliveryTimeApi.md#deletedeliverytime) | **DELETE** /delivery-time/{id} | Delete a Delivery Time resource
*DeliveryTimeApi* | [**getDeliveryTime**](docs/Api/DeliveryTimeApi.md#getdeliverytime) | **GET** /delivery-time/{id} | Detailed information about a Delivery Time resource
*DeliveryTimeApi* | [**getDeliveryTimeList**](docs/Api/DeliveryTimeApi.md#getdeliverytimelist) | **GET** /delivery-time | List with basic information of Delivery Time resources
*DeliveryTimeApi* | [**updateDeliveryTime**](docs/Api/DeliveryTimeApi.md#updatedeliverytime) | **PATCH** /delivery-time/{id} | Partially update information about a Delivery Time resource
*DocumentApi* | [**createDocument**](docs/Api/DocumentApi.md#createdocument) | **POST** /document | Create a new Document resources
*DocumentApi* | [**deleteDocument**](docs/Api/DocumentApi.md#deletedocument) | **DELETE** /document/{id} | Delete a Document resource
*DocumentApi* | [**getDocument**](docs/Api/DocumentApi.md#getdocument) | **GET** /document/{id} | Detailed information about a Document resource
*DocumentApi* | [**getDocumentList**](docs/Api/DocumentApi.md#getdocumentlist) | **GET** /document | List with basic information of Document resources
*DocumentApi* | [**updateDocument**](docs/Api/DocumentApi.md#updatedocument) | **PATCH** /document/{id} | Partially update information about a Document resource
*DocumentBaseConfigApi* | [**createDocumentBaseConfig**](docs/Api/DocumentBaseConfigApi.md#createdocumentbaseconfig) | **POST** /document-base-config | Create a new Document Base Config resources
*DocumentBaseConfigApi* | [**deleteDocumentBaseConfig**](docs/Api/DocumentBaseConfigApi.md#deletedocumentbaseconfig) | **DELETE** /document-base-config/{id} | Delete a Document Base Config resource
*DocumentBaseConfigApi* | [**getDocumentBaseConfig**](docs/Api/DocumentBaseConfigApi.md#getdocumentbaseconfig) | **GET** /document-base-config/{id} | Detailed information about a Document Base Config resource
*DocumentBaseConfigApi* | [**getDocumentBaseConfigList**](docs/Api/DocumentBaseConfigApi.md#getdocumentbaseconfiglist) | **GET** /document-base-config | List with basic information of Document Base Config resources
*DocumentBaseConfigApi* | [**updateDocumentBaseConfig**](docs/Api/DocumentBaseConfigApi.md#updatedocumentbaseconfig) | **PATCH** /document-base-config/{id} | Partially update information about a Document Base Config resource
*DocumentBaseConfigSalesChannelApi* | [**createDocumentBaseConfigSalesChannel**](docs/Api/DocumentBaseConfigSalesChannelApi.md#createdocumentbaseconfigsaleschannel) | **POST** /document-base-config-sales-channel | Create a new Document Base Config Sales Channel resources
*DocumentBaseConfigSalesChannelApi* | [**deleteDocumentBaseConfigSalesChannel**](docs/Api/DocumentBaseConfigSalesChannelApi.md#deletedocumentbaseconfigsaleschannel) | **DELETE** /document-base-config-sales-channel/{id} | Delete a Document Base Config Sales Channel resource
*DocumentBaseConfigSalesChannelApi* | [**getDocumentBaseConfigSalesChannel**](docs/Api/DocumentBaseConfigSalesChannelApi.md#getdocumentbaseconfigsaleschannel) | **GET** /document-base-config-sales-channel/{id} | Detailed information about a Document Base Config Sales Channel resource
*DocumentBaseConfigSalesChannelApi* | [**getDocumentBaseConfigSalesChannelList**](docs/Api/DocumentBaseConfigSalesChannelApi.md#getdocumentbaseconfigsaleschannellist) | **GET** /document-base-config-sales-channel | List with basic information of Document Base Config Sales Channel resources
*DocumentBaseConfigSalesChannelApi* | [**updateDocumentBaseConfigSalesChannel**](docs/Api/DocumentBaseConfigSalesChannelApi.md#updatedocumentbaseconfigsaleschannel) | **PATCH** /document-base-config-sales-channel/{id} | Partially update information about a Document Base Config Sales Channel resource
*DocumentTypeApi* | [**createDocumentType**](docs/Api/DocumentTypeApi.md#createdocumenttype) | **POST** /document-type | Create a new Document Type resources
*DocumentTypeApi* | [**deleteDocumentType**](docs/Api/DocumentTypeApi.md#deletedocumenttype) | **DELETE** /document-type/{id} | Delete a Document Type resource
*DocumentTypeApi* | [**getDocumentType**](docs/Api/DocumentTypeApi.md#getdocumenttype) | **GET** /document-type/{id} | Detailed information about a Document Type resource
*DocumentTypeApi* | [**getDocumentTypeList**](docs/Api/DocumentTypeApi.md#getdocumenttypelist) | **GET** /document-type | List with basic information of Document Type resources
*DocumentTypeApi* | [**updateDocumentType**](docs/Api/DocumentTypeApi.md#updatedocumenttype) | **PATCH** /document-type/{id} | Partially update information about a Document Type resource
*EventActionApi* | [**createEventAction**](docs/Api/EventActionApi.md#createeventaction) | **POST** /event-action | Create a new Event Action resources
*EventActionApi* | [**deleteEventAction**](docs/Api/EventActionApi.md#deleteeventaction) | **DELETE** /event-action/{id} | Delete a Event Action resource
*EventActionApi* | [**getEventAction**](docs/Api/EventActionApi.md#geteventaction) | **GET** /event-action/{id} | Detailed information about a Event Action resource
*EventActionApi* | [**getEventActionList**](docs/Api/EventActionApi.md#geteventactionlist) | **GET** /event-action | List with basic information of Event Action resources
*EventActionApi* | [**updateEventAction**](docs/Api/EventActionApi.md#updateeventaction) | **PATCH** /event-action/{id} | Partially update information about a Event Action resource
*ImportExportFileApi* | [**createImportExportFile**](docs/Api/ImportExportFileApi.md#createimportexportfile) | **POST** /import-export-file | Create a new Import Export File resources
*ImportExportFileApi* | [**deleteImportExportFile**](docs/Api/ImportExportFileApi.md#deleteimportexportfile) | **DELETE** /import-export-file/{id} | Delete a Import Export File resource
*ImportExportFileApi* | [**getImportExportFile**](docs/Api/ImportExportFileApi.md#getimportexportfile) | **GET** /import-export-file/{id} | Detailed information about a Import Export File resource
*ImportExportFileApi* | [**getImportExportFileList**](docs/Api/ImportExportFileApi.md#getimportexportfilelist) | **GET** /import-export-file | List with basic information of Import Export File resources
*ImportExportFileApi* | [**updateImportExportFile**](docs/Api/ImportExportFileApi.md#updateimportexportfile) | **PATCH** /import-export-file/{id} | Partially update information about a Import Export File resource
*ImportExportLogApi* | [**createImportExportLog**](docs/Api/ImportExportLogApi.md#createimportexportlog) | **POST** /import-export-log | Create a new Import Export Log resources
*ImportExportLogApi* | [**deleteImportExportLog**](docs/Api/ImportExportLogApi.md#deleteimportexportlog) | **DELETE** /import-export-log/{id} | Delete a Import Export Log resource
*ImportExportLogApi* | [**getImportExportLog**](docs/Api/ImportExportLogApi.md#getimportexportlog) | **GET** /import-export-log/{id} | Detailed information about a Import Export Log resource
*ImportExportLogApi* | [**getImportExportLogList**](docs/Api/ImportExportLogApi.md#getimportexportloglist) | **GET** /import-export-log | List with basic information of Import Export Log resources
*ImportExportLogApi* | [**updateImportExportLog**](docs/Api/ImportExportLogApi.md#updateimportexportlog) | **PATCH** /import-export-log/{id} | Partially update information about a Import Export Log resource
*ImportExportProfileApi* | [**createImportExportProfile**](docs/Api/ImportExportProfileApi.md#createimportexportprofile) | **POST** /import-export-profile | Create a new Import Export Profile resources
*ImportExportProfileApi* | [**deleteImportExportProfile**](docs/Api/ImportExportProfileApi.md#deleteimportexportprofile) | **DELETE** /import-export-profile/{id} | Delete a Import Export Profile resource
*ImportExportProfileApi* | [**getImportExportProfile**](docs/Api/ImportExportProfileApi.md#getimportexportprofile) | **GET** /import-export-profile/{id} | Detailed information about a Import Export Profile resource
*ImportExportProfileApi* | [**getImportExportProfileList**](docs/Api/ImportExportProfileApi.md#getimportexportprofilelist) | **GET** /import-export-profile | List with basic information of Import Export Profile resources
*ImportExportProfileApi* | [**updateImportExportProfile**](docs/Api/ImportExportProfileApi.md#updateimportexportprofile) | **PATCH** /import-export-profile/{id} | Partially update information about a Import Export Profile resource
*IntegrationApi* | [**createIntegration**](docs/Api/IntegrationApi.md#createintegration) | **POST** /integration | Create a new Integration resources
*IntegrationApi* | [**deleteIntegration**](docs/Api/IntegrationApi.md#deleteintegration) | **DELETE** /integration/{id} | Delete a Integration resource
*IntegrationApi* | [**getIntegration**](docs/Api/IntegrationApi.md#getintegration) | **GET** /integration/{id} | Detailed information about a Integration resource
*IntegrationApi* | [**getIntegrationList**](docs/Api/IntegrationApi.md#getintegrationlist) | **GET** /integration | List with basic information of Integration resources
*IntegrationApi* | [**updateIntegration**](docs/Api/IntegrationApi.md#updateintegration) | **PATCH** /integration/{id} | Partially update information about a Integration resource
*LanguageApi* | [**createLanguage**](docs/Api/LanguageApi.md#createlanguage) | **POST** /language | Create a new Language resources
*LanguageApi* | [**deleteLanguage**](docs/Api/LanguageApi.md#deletelanguage) | **DELETE** /language/{id} | Delete a Language resource
*LanguageApi* | [**getLanguage**](docs/Api/LanguageApi.md#getlanguage) | **GET** /language/{id} | Detailed information about a Language resource
*LanguageApi* | [**getLanguageList**](docs/Api/LanguageApi.md#getlanguagelist) | **GET** /language | List with basic information of Language resources
*LanguageApi* | [**updateLanguage**](docs/Api/LanguageApi.md#updatelanguage) | **PATCH** /language/{id} | Partially update information about a Language resource
*LocaleApi* | [**createLocale**](docs/Api/LocaleApi.md#createlocale) | **POST** /locale | Create a new Locale resources
*LocaleApi* | [**deleteLocale**](docs/Api/LocaleApi.md#deletelocale) | **DELETE** /locale/{id} | Delete a Locale resource
*LocaleApi* | [**getLocale**](docs/Api/LocaleApi.md#getlocale) | **GET** /locale/{id} | Detailed information about a Locale resource
*LocaleApi* | [**getLocaleList**](docs/Api/LocaleApi.md#getlocalelist) | **GET** /locale | List with basic information of Locale resources
*LocaleApi* | [**updateLocale**](docs/Api/LocaleApi.md#updatelocale) | **PATCH** /locale/{id} | Partially update information about a Locale resource
*LogEntryApi* | [**createLogEntry**](docs/Api/LogEntryApi.md#createlogentry) | **POST** /log-entry | Create a new Log Entry resources
*LogEntryApi* | [**deleteLogEntry**](docs/Api/LogEntryApi.md#deletelogentry) | **DELETE** /log-entry/{id} | Delete a Log Entry resource
*LogEntryApi* | [**getLogEntry**](docs/Api/LogEntryApi.md#getlogentry) | **GET** /log-entry/{id} | Detailed information about a Log Entry resource
*LogEntryApi* | [**getLogEntryList**](docs/Api/LogEntryApi.md#getlogentrylist) | **GET** /log-entry | List with basic information of Log Entry resources
*LogEntryApi* | [**updateLogEntry**](docs/Api/LogEntryApi.md#updatelogentry) | **PATCH** /log-entry/{id} | Partially update information about a Log Entry resource
*MailHeaderFooterApi* | [**createMailHeaderFooter**](docs/Api/MailHeaderFooterApi.md#createmailheaderfooter) | **POST** /mail-header-footer | Create a new Mail Header Footer resources
*MailHeaderFooterApi* | [**deleteMailHeaderFooter**](docs/Api/MailHeaderFooterApi.md#deletemailheaderfooter) | **DELETE** /mail-header-footer/{id} | Delete a Mail Header Footer resource
*MailHeaderFooterApi* | [**getMailHeaderFooter**](docs/Api/MailHeaderFooterApi.md#getmailheaderfooter) | **GET** /mail-header-footer/{id} | Detailed information about a Mail Header Footer resource
*MailHeaderFooterApi* | [**getMailHeaderFooterList**](docs/Api/MailHeaderFooterApi.md#getmailheaderfooterlist) | **GET** /mail-header-footer | List with basic information of Mail Header Footer resources
*MailHeaderFooterApi* | [**updateMailHeaderFooter**](docs/Api/MailHeaderFooterApi.md#updatemailheaderfooter) | **PATCH** /mail-header-footer/{id} | Partially update information about a Mail Header Footer resource
*MailTemplateApi* | [**createMailTemplate**](docs/Api/MailTemplateApi.md#createmailtemplate) | **POST** /mail-template | Create a new Mail Template resources
*MailTemplateApi* | [**deleteMailTemplate**](docs/Api/MailTemplateApi.md#deletemailtemplate) | **DELETE** /mail-template/{id} | Delete a Mail Template resource
*MailTemplateApi* | [**getMailTemplate**](docs/Api/MailTemplateApi.md#getmailtemplate) | **GET** /mail-template/{id} | Detailed information about a Mail Template resource
*MailTemplateApi* | [**getMailTemplateList**](docs/Api/MailTemplateApi.md#getmailtemplatelist) | **GET** /mail-template | List with basic information of Mail Template resources
*MailTemplateApi* | [**updateMailTemplate**](docs/Api/MailTemplateApi.md#updatemailtemplate) | **PATCH** /mail-template/{id} | Partially update information about a Mail Template resource
*MailTemplateSalesChannelApi* | [**createMailTemplateSalesChannel**](docs/Api/MailTemplateSalesChannelApi.md#createmailtemplatesaleschannel) | **POST** /mail-template-sales-channel | Create a new Mail Template Sales Channel resources
*MailTemplateSalesChannelApi* | [**deleteMailTemplateSalesChannel**](docs/Api/MailTemplateSalesChannelApi.md#deletemailtemplatesaleschannel) | **DELETE** /mail-template-sales-channel/{id} | Delete a Mail Template Sales Channel resource
*MailTemplateSalesChannelApi* | [**getMailTemplateSalesChannel**](docs/Api/MailTemplateSalesChannelApi.md#getmailtemplatesaleschannel) | **GET** /mail-template-sales-channel/{id} | Detailed information about a Mail Template Sales Channel resource
*MailTemplateSalesChannelApi* | [**getMailTemplateSalesChannelList**](docs/Api/MailTemplateSalesChannelApi.md#getmailtemplatesaleschannellist) | **GET** /mail-template-sales-channel | List with basic information of Mail Template Sales Channel resources
*MailTemplateSalesChannelApi* | [**updateMailTemplateSalesChannel**](docs/Api/MailTemplateSalesChannelApi.md#updatemailtemplatesaleschannel) | **PATCH** /mail-template-sales-channel/{id} | Partially update information about a Mail Template Sales Channel resource
*MailTemplateTypeApi* | [**createMailTemplateType**](docs/Api/MailTemplateTypeApi.md#createmailtemplatetype) | **POST** /mail-template-type | Create a new Mail Template Type resources
*MailTemplateTypeApi* | [**deleteMailTemplateType**](docs/Api/MailTemplateTypeApi.md#deletemailtemplatetype) | **DELETE** /mail-template-type/{id} | Delete a Mail Template Type resource
*MailTemplateTypeApi* | [**getMailTemplateType**](docs/Api/MailTemplateTypeApi.md#getmailtemplatetype) | **GET** /mail-template-type/{id} | Detailed information about a Mail Template Type resource
*MailTemplateTypeApi* | [**getMailTemplateTypeList**](docs/Api/MailTemplateTypeApi.md#getmailtemplatetypelist) | **GET** /mail-template-type | List with basic information of Mail Template Type resources
*MailTemplateTypeApi* | [**updateMailTemplateType**](docs/Api/MailTemplateTypeApi.md#updatemailtemplatetype) | **PATCH** /mail-template-type/{id} | Partially update information about a Mail Template Type resource
*MainCategoryApi* | [**createMainCategory**](docs/Api/MainCategoryApi.md#createmaincategory) | **POST** /main-category | Create a new Main Category resources
*MainCategoryApi* | [**deleteMainCategory**](docs/Api/MainCategoryApi.md#deletemaincategory) | **DELETE** /main-category/{id} | Delete a Main Category resource
*MainCategoryApi* | [**getMainCategory**](docs/Api/MainCategoryApi.md#getmaincategory) | **GET** /main-category/{id} | Detailed information about a Main Category resource
*MainCategoryApi* | [**getMainCategoryList**](docs/Api/MainCategoryApi.md#getmaincategorylist) | **GET** /main-category | List with basic information of Main Category resources
*MainCategoryApi* | [**updateMainCategory**](docs/Api/MainCategoryApi.md#updatemaincategory) | **PATCH** /main-category/{id} | Partially update information about a Main Category resource
*MediaApi* | [**createMedia**](docs/Api/MediaApi.md#createmedia) | **POST** /media | Create a new Media resources
*MediaApi* | [**deleteMedia**](docs/Api/MediaApi.md#deletemedia) | **DELETE** /media/{id} | Delete a Media resource
*MediaApi* | [**getMedia**](docs/Api/MediaApi.md#getmedia) | **GET** /media/{id} | Detailed information about a Media resource
*MediaApi* | [**getMediaList**](docs/Api/MediaApi.md#getmedialist) | **GET** /media | List with basic information of Media resources
*MediaApi* | [**updateMedia**](docs/Api/MediaApi.md#updatemedia) | **PATCH** /media/{id} | Partially update information about a Media resource
*MediaDefaultFolderApi* | [**createMediaDefaultFolder**](docs/Api/MediaDefaultFolderApi.md#createmediadefaultfolder) | **POST** /media-default-folder | Create a new Media Default Folder resources
*MediaDefaultFolderApi* | [**deleteMediaDefaultFolder**](docs/Api/MediaDefaultFolderApi.md#deletemediadefaultfolder) | **DELETE** /media-default-folder/{id} | Delete a Media Default Folder resource
*MediaDefaultFolderApi* | [**getMediaDefaultFolder**](docs/Api/MediaDefaultFolderApi.md#getmediadefaultfolder) | **GET** /media-default-folder/{id} | Detailed information about a Media Default Folder resource
*MediaDefaultFolderApi* | [**getMediaDefaultFolderList**](docs/Api/MediaDefaultFolderApi.md#getmediadefaultfolderlist) | **GET** /media-default-folder | List with basic information of Media Default Folder resources
*MediaDefaultFolderApi* | [**updateMediaDefaultFolder**](docs/Api/MediaDefaultFolderApi.md#updatemediadefaultfolder) | **PATCH** /media-default-folder/{id} | Partially update information about a Media Default Folder resource
*MediaFolderApi* | [**createMediaFolder**](docs/Api/MediaFolderApi.md#createmediafolder) | **POST** /media-folder | Create a new Media Folder resources
*MediaFolderApi* | [**deleteMediaFolder**](docs/Api/MediaFolderApi.md#deletemediafolder) | **DELETE** /media-folder/{id} | Delete a Media Folder resource
*MediaFolderApi* | [**getMediaFolder**](docs/Api/MediaFolderApi.md#getmediafolder) | **GET** /media-folder/{id} | Detailed information about a Media Folder resource
*MediaFolderApi* | [**getMediaFolderList**](docs/Api/MediaFolderApi.md#getmediafolderlist) | **GET** /media-folder | List with basic information of Media Folder resources
*MediaFolderApi* | [**updateMediaFolder**](docs/Api/MediaFolderApi.md#updatemediafolder) | **PATCH** /media-folder/{id} | Partially update information about a Media Folder resource
*MediaFolderConfigurationApi* | [**createMediaFolderConfiguration**](docs/Api/MediaFolderConfigurationApi.md#createmediafolderconfiguration) | **POST** /media-folder-configuration | Create a new Media Folder Configuration resources
*MediaFolderConfigurationApi* | [**deleteMediaFolderConfiguration**](docs/Api/MediaFolderConfigurationApi.md#deletemediafolderconfiguration) | **DELETE** /media-folder-configuration/{id} | Delete a Media Folder Configuration resource
*MediaFolderConfigurationApi* | [**getMediaFolderConfiguration**](docs/Api/MediaFolderConfigurationApi.md#getmediafolderconfiguration) | **GET** /media-folder-configuration/{id} | Detailed information about a Media Folder Configuration resource
*MediaFolderConfigurationApi* | [**getMediaFolderConfigurationList**](docs/Api/MediaFolderConfigurationApi.md#getmediafolderconfigurationlist) | **GET** /media-folder-configuration | List with basic information of Media Folder Configuration resources
*MediaFolderConfigurationApi* | [**updateMediaFolderConfiguration**](docs/Api/MediaFolderConfigurationApi.md#updatemediafolderconfiguration) | **PATCH** /media-folder-configuration/{id} | Partially update information about a Media Folder Configuration resource
*MediaThumbnailApi* | [**createMediaThumbnail**](docs/Api/MediaThumbnailApi.md#createmediathumbnail) | **POST** /media-thumbnail | Create a new Media Thumbnail resources
*MediaThumbnailApi* | [**deleteMediaThumbnail**](docs/Api/MediaThumbnailApi.md#deletemediathumbnail) | **DELETE** /media-thumbnail/{id} | Delete a Media Thumbnail resource
*MediaThumbnailApi* | [**getMediaThumbnail**](docs/Api/MediaThumbnailApi.md#getmediathumbnail) | **GET** /media-thumbnail/{id} | Detailed information about a Media Thumbnail resource
*MediaThumbnailApi* | [**getMediaThumbnailList**](docs/Api/MediaThumbnailApi.md#getmediathumbnaillist) | **GET** /media-thumbnail | List with basic information of Media Thumbnail resources
*MediaThumbnailApi* | [**updateMediaThumbnail**](docs/Api/MediaThumbnailApi.md#updatemediathumbnail) | **PATCH** /media-thumbnail/{id} | Partially update information about a Media Thumbnail resource
*MediaThumbnailSizeApi* | [**createMediaThumbnailSize**](docs/Api/MediaThumbnailSizeApi.md#createmediathumbnailsize) | **POST** /media-thumbnail-size | Create a new Media Thumbnail Size resources
*MediaThumbnailSizeApi* | [**deleteMediaThumbnailSize**](docs/Api/MediaThumbnailSizeApi.md#deletemediathumbnailsize) | **DELETE** /media-thumbnail-size/{id} | Delete a Media Thumbnail Size resource
*MediaThumbnailSizeApi* | [**getMediaThumbnailSize**](docs/Api/MediaThumbnailSizeApi.md#getmediathumbnailsize) | **GET** /media-thumbnail-size/{id} | Detailed information about a Media Thumbnail Size resource
*MediaThumbnailSizeApi* | [**getMediaThumbnailSizeList**](docs/Api/MediaThumbnailSizeApi.md#getmediathumbnailsizelist) | **GET** /media-thumbnail-size | List with basic information of Media Thumbnail Size resources
*MediaThumbnailSizeApi* | [**updateMediaThumbnailSize**](docs/Api/MediaThumbnailSizeApi.md#updatemediathumbnailsize) | **PATCH** /media-thumbnail-size/{id} | Partially update information about a Media Thumbnail Size resource
*MessageQueueStatsApi* | [**createMessageQueueStats**](docs/Api/MessageQueueStatsApi.md#createmessagequeuestats) | **POST** /message-queue-stats | Create a new Message Queue Stats resources
*MessageQueueStatsApi* | [**deleteMessageQueueStats**](docs/Api/MessageQueueStatsApi.md#deletemessagequeuestats) | **DELETE** /message-queue-stats/{id} | Delete a Message Queue Stats resource
*MessageQueueStatsApi* | [**getMessageQueueStats**](docs/Api/MessageQueueStatsApi.md#getmessagequeuestats) | **GET** /message-queue-stats/{id} | Detailed information about a Message Queue Stats resource
*MessageQueueStatsApi* | [**getMessageQueueStatsList**](docs/Api/MessageQueueStatsApi.md#getmessagequeuestatslist) | **GET** /message-queue-stats | List with basic information of Message Queue Stats resources
*MessageQueueStatsApi* | [**updateMessageQueueStats**](docs/Api/MessageQueueStatsApi.md#updatemessagequeuestats) | **PATCH** /message-queue-stats/{id} | Partially update information about a Message Queue Stats resource
*NewsletterRecipientApi* | [**createNewsletterRecipient**](docs/Api/NewsletterRecipientApi.md#createnewsletterrecipient) | **POST** /newsletter-recipient | Create a new Newsletter Recipient resources
*NewsletterRecipientApi* | [**deleteNewsletterRecipient**](docs/Api/NewsletterRecipientApi.md#deletenewsletterrecipient) | **DELETE** /newsletter-recipient/{id} | Delete a Newsletter Recipient resource
*NewsletterRecipientApi* | [**getNewsletterRecipient**](docs/Api/NewsletterRecipientApi.md#getnewsletterrecipient) | **GET** /newsletter-recipient/{id} | Detailed information about a Newsletter Recipient resource
*NewsletterRecipientApi* | [**getNewsletterRecipientList**](docs/Api/NewsletterRecipientApi.md#getnewsletterrecipientlist) | **GET** /newsletter-recipient | List with basic information of Newsletter Recipient resources
*NewsletterRecipientApi* | [**updateNewsletterRecipient**](docs/Api/NewsletterRecipientApi.md#updatenewsletterrecipient) | **PATCH** /newsletter-recipient/{id} | Partially update information about a Newsletter Recipient resource
*NumberRangeApi* | [**createNumberRange**](docs/Api/NumberRangeApi.md#createnumberrange) | **POST** /number-range | Create a new Number Range resources
*NumberRangeApi* | [**deleteNumberRange**](docs/Api/NumberRangeApi.md#deletenumberrange) | **DELETE** /number-range/{id} | Delete a Number Range resource
*NumberRangeApi* | [**getNumberRange**](docs/Api/NumberRangeApi.md#getnumberrange) | **GET** /number-range/{id} | Detailed information about a Number Range resource
*NumberRangeApi* | [**getNumberRangeList**](docs/Api/NumberRangeApi.md#getnumberrangelist) | **GET** /number-range | List with basic information of Number Range resources
*NumberRangeApi* | [**updateNumberRange**](docs/Api/NumberRangeApi.md#updatenumberrange) | **PATCH** /number-range/{id} | Partially update information about a Number Range resource
*NumberRangeSalesChannelApi* | [**createNumberRangeSalesChannel**](docs/Api/NumberRangeSalesChannelApi.md#createnumberrangesaleschannel) | **POST** /number-range-sales-channel | Create a new Number Range Sales Channel resources
*NumberRangeSalesChannelApi* | [**deleteNumberRangeSalesChannel**](docs/Api/NumberRangeSalesChannelApi.md#deletenumberrangesaleschannel) | **DELETE** /number-range-sales-channel/{id} | Delete a Number Range Sales Channel resource
*NumberRangeSalesChannelApi* | [**getNumberRangeSalesChannel**](docs/Api/NumberRangeSalesChannelApi.md#getnumberrangesaleschannel) | **GET** /number-range-sales-channel/{id} | Detailed information about a Number Range Sales Channel resource
*NumberRangeSalesChannelApi* | [**getNumberRangeSalesChannelList**](docs/Api/NumberRangeSalesChannelApi.md#getnumberrangesaleschannellist) | **GET** /number-range-sales-channel | List with basic information of Number Range Sales Channel resources
*NumberRangeSalesChannelApi* | [**updateNumberRangeSalesChannel**](docs/Api/NumberRangeSalesChannelApi.md#updatenumberrangesaleschannel) | **PATCH** /number-range-sales-channel/{id} | Partially update information about a Number Range Sales Channel resource
*NumberRangeStateApi* | [**createNumberRangeState**](docs/Api/NumberRangeStateApi.md#createnumberrangestate) | **POST** /number-range-state | Create a new Number Range State resources
*NumberRangeStateApi* | [**deleteNumberRangeState**](docs/Api/NumberRangeStateApi.md#deletenumberrangestate) | **DELETE** /number-range-state/{id} | Delete a Number Range State resource
*NumberRangeStateApi* | [**getNumberRangeState**](docs/Api/NumberRangeStateApi.md#getnumberrangestate) | **GET** /number-range-state/{id} | Detailed information about a Number Range State resource
*NumberRangeStateApi* | [**getNumberRangeStateList**](docs/Api/NumberRangeStateApi.md#getnumberrangestatelist) | **GET** /number-range-state | List with basic information of Number Range State resources
*NumberRangeStateApi* | [**updateNumberRangeState**](docs/Api/NumberRangeStateApi.md#updatenumberrangestate) | **PATCH** /number-range-state/{id} | Partially update information about a Number Range State resource
*NumberRangeTypeApi* | [**createNumberRangeType**](docs/Api/NumberRangeTypeApi.md#createnumberrangetype) | **POST** /number-range-type | Create a new Number Range Type resources
*NumberRangeTypeApi* | [**deleteNumberRangeType**](docs/Api/NumberRangeTypeApi.md#deletenumberrangetype) | **DELETE** /number-range-type/{id} | Delete a Number Range Type resource
*NumberRangeTypeApi* | [**getNumberRangeType**](docs/Api/NumberRangeTypeApi.md#getnumberrangetype) | **GET** /number-range-type/{id} | Detailed information about a Number Range Type resource
*NumberRangeTypeApi* | [**getNumberRangeTypeList**](docs/Api/NumberRangeTypeApi.md#getnumberrangetypelist) | **GET** /number-range-type | List with basic information of Number Range Type resources
*NumberRangeTypeApi* | [**updateNumberRangeType**](docs/Api/NumberRangeTypeApi.md#updatenumberrangetype) | **PATCH** /number-range-type/{id} | Partially update information about a Number Range Type resource
*OrderApi* | [**createOrder**](docs/Api/OrderApi.md#createorder) | **POST** /order | Create a new Order resources
*OrderApi* | [**deleteOrder**](docs/Api/OrderApi.md#deleteorder) | **DELETE** /order/{id} | Delete a Order resource
*OrderApi* | [**getOrder**](docs/Api/OrderApi.md#getorder) | **GET** /order/{id} | Detailed information about a Order resource
*OrderApi* | [**getOrderList**](docs/Api/OrderApi.md#getorderlist) | **GET** /order | List with basic information of Order resources
*OrderApi* | [**updateOrder**](docs/Api/OrderApi.md#updateorder) | **PATCH** /order/{id} | Partially update information about a Order resource
*OrderAddressApi* | [**createOrderAddress**](docs/Api/OrderAddressApi.md#createorderaddress) | **POST** /order-address | Create a new Order Address resources
*OrderAddressApi* | [**deleteOrderAddress**](docs/Api/OrderAddressApi.md#deleteorderaddress) | **DELETE** /order-address/{id} | Delete a Order Address resource
*OrderAddressApi* | [**getOrderAddress**](docs/Api/OrderAddressApi.md#getorderaddress) | **GET** /order-address/{id} | Detailed information about a Order Address resource
*OrderAddressApi* | [**getOrderAddressList**](docs/Api/OrderAddressApi.md#getorderaddresslist) | **GET** /order-address | List with basic information of Order Address resources
*OrderAddressApi* | [**updateOrderAddress**](docs/Api/OrderAddressApi.md#updateorderaddress) | **PATCH** /order-address/{id} | Partially update information about a Order Address resource
*OrderCustomerApi* | [**createOrderCustomer**](docs/Api/OrderCustomerApi.md#createordercustomer) | **POST** /order-customer | Create a new Order Customer resources
*OrderCustomerApi* | [**deleteOrderCustomer**](docs/Api/OrderCustomerApi.md#deleteordercustomer) | **DELETE** /order-customer/{id} | Delete a Order Customer resource
*OrderCustomerApi* | [**getOrderCustomer**](docs/Api/OrderCustomerApi.md#getordercustomer) | **GET** /order-customer/{id} | Detailed information about a Order Customer resource
*OrderCustomerApi* | [**getOrderCustomerList**](docs/Api/OrderCustomerApi.md#getordercustomerlist) | **GET** /order-customer | List with basic information of Order Customer resources
*OrderCustomerApi* | [**updateOrderCustomer**](docs/Api/OrderCustomerApi.md#updateordercustomer) | **PATCH** /order-customer/{id} | Partially update information about a Order Customer resource
*OrderDeliveryApi* | [**createOrderDelivery**](docs/Api/OrderDeliveryApi.md#createorderdelivery) | **POST** /order-delivery | Create a new Order Delivery resources
*OrderDeliveryApi* | [**deleteOrderDelivery**](docs/Api/OrderDeliveryApi.md#deleteorderdelivery) | **DELETE** /order-delivery/{id} | Delete a Order Delivery resource
*OrderDeliveryApi* | [**getOrderDelivery**](docs/Api/OrderDeliveryApi.md#getorderdelivery) | **GET** /order-delivery/{id} | Detailed information about a Order Delivery resource
*OrderDeliveryApi* | [**getOrderDeliveryList**](docs/Api/OrderDeliveryApi.md#getorderdeliverylist) | **GET** /order-delivery | List with basic information of Order Delivery resources
*OrderDeliveryApi* | [**updateOrderDelivery**](docs/Api/OrderDeliveryApi.md#updateorderdelivery) | **PATCH** /order-delivery/{id} | Partially update information about a Order Delivery resource
*OrderDeliveryPositionApi* | [**createOrderDeliveryPosition**](docs/Api/OrderDeliveryPositionApi.md#createorderdeliveryposition) | **POST** /order-delivery-position | Create a new Order Delivery Position resources
*OrderDeliveryPositionApi* | [**deleteOrderDeliveryPosition**](docs/Api/OrderDeliveryPositionApi.md#deleteorderdeliveryposition) | **DELETE** /order-delivery-position/{id} | Delete a Order Delivery Position resource
*OrderDeliveryPositionApi* | [**getOrderDeliveryPosition**](docs/Api/OrderDeliveryPositionApi.md#getorderdeliveryposition) | **GET** /order-delivery-position/{id} | Detailed information about a Order Delivery Position resource
*OrderDeliveryPositionApi* | [**getOrderDeliveryPositionList**](docs/Api/OrderDeliveryPositionApi.md#getorderdeliverypositionlist) | **GET** /order-delivery-position | List with basic information of Order Delivery Position resources
*OrderDeliveryPositionApi* | [**updateOrderDeliveryPosition**](docs/Api/OrderDeliveryPositionApi.md#updateorderdeliveryposition) | **PATCH** /order-delivery-position/{id} | Partially update information about a Order Delivery Position resource
*OrderLineItemApi* | [**createOrderLineItem**](docs/Api/OrderLineItemApi.md#createorderlineitem) | **POST** /order-line-item | Create a new Order Line Item resources
*OrderLineItemApi* | [**deleteOrderLineItem**](docs/Api/OrderLineItemApi.md#deleteorderlineitem) | **DELETE** /order-line-item/{id} | Delete a Order Line Item resource
*OrderLineItemApi* | [**getOrderLineItem**](docs/Api/OrderLineItemApi.md#getorderlineitem) | **GET** /order-line-item/{id} | Detailed information about a Order Line Item resource
*OrderLineItemApi* | [**getOrderLineItemList**](docs/Api/OrderLineItemApi.md#getorderlineitemlist) | **GET** /order-line-item | List with basic information of Order Line Item resources
*OrderLineItemApi* | [**updateOrderLineItem**](docs/Api/OrderLineItemApi.md#updateorderlineitem) | **PATCH** /order-line-item/{id} | Partially update information about a Order Line Item resource
*OrderTransactionApi* | [**createOrderTransaction**](docs/Api/OrderTransactionApi.md#createordertransaction) | **POST** /order-transaction | Create a new Order Transaction resources
*OrderTransactionApi* | [**deleteOrderTransaction**](docs/Api/OrderTransactionApi.md#deleteordertransaction) | **DELETE** /order-transaction/{id} | Delete a Order Transaction resource
*OrderTransactionApi* | [**getOrderTransaction**](docs/Api/OrderTransactionApi.md#getordertransaction) | **GET** /order-transaction/{id} | Detailed information about a Order Transaction resource
*OrderTransactionApi* | [**getOrderTransactionList**](docs/Api/OrderTransactionApi.md#getordertransactionlist) | **GET** /order-transaction | List with basic information of Order Transaction resources
*OrderTransactionApi* | [**updateOrderTransaction**](docs/Api/OrderTransactionApi.md#updateordertransaction) | **PATCH** /order-transaction/{id} | Partially update information about a Order Transaction resource
*PaymentMethodApi* | [**createPaymentMethod**](docs/Api/PaymentMethodApi.md#createpaymentmethod) | **POST** /payment-method | Create a new Payment Method resources
*PaymentMethodApi* | [**deletePaymentMethod**](docs/Api/PaymentMethodApi.md#deletepaymentmethod) | **DELETE** /payment-method/{id} | Delete a Payment Method resource
*PaymentMethodApi* | [**getPaymentMethod**](docs/Api/PaymentMethodApi.md#getpaymentmethod) | **GET** /payment-method/{id} | Detailed information about a Payment Method resource
*PaymentMethodApi* | [**getPaymentMethodList**](docs/Api/PaymentMethodApi.md#getpaymentmethodlist) | **GET** /payment-method | List with basic information of Payment Method resources
*PaymentMethodApi* | [**updatePaymentMethod**](docs/Api/PaymentMethodApi.md#updatepaymentmethod) | **PATCH** /payment-method/{id} | Partially update information about a Payment Method resource
*PluginApi* | [**createPlugin**](docs/Api/PluginApi.md#createplugin) | **POST** /plugin | Create a new Plugin resources
*PluginApi* | [**deletePlugin**](docs/Api/PluginApi.md#deleteplugin) | **DELETE** /plugin/{id} | Delete a Plugin resource
*PluginApi* | [**getPlugin**](docs/Api/PluginApi.md#getplugin) | **GET** /plugin/{id} | Detailed information about a Plugin resource
*PluginApi* | [**getPluginList**](docs/Api/PluginApi.md#getpluginlist) | **GET** /plugin | List with basic information of Plugin resources
*PluginApi* | [**updatePlugin**](docs/Api/PluginApi.md#updateplugin) | **PATCH** /plugin/{id} | Partially update information about a Plugin resource
*ProductApi* | [**createProduct**](docs/Api/ProductApi.md#createproduct) | **POST** /product | Create a new Product resources
*ProductApi* | [**deleteProduct**](docs/Api/ProductApi.md#deleteproduct) | **DELETE** /product/{id} | Delete a Product resource
*ProductApi* | [**getProduct**](docs/Api/ProductApi.md#getproduct) | **GET** /product/{id} | Detailed information about a Product resource
*ProductApi* | [**getProductList**](docs/Api/ProductApi.md#getproductlist) | **GET** /product | List with basic information of Product resources
*ProductApi* | [**updateProduct**](docs/Api/ProductApi.md#updateproduct) | **PATCH** /product/{id} | Partially update information about a Product resource
*ProductConfiguratorSettingApi* | [**createProductConfiguratorSetting**](docs/Api/ProductConfiguratorSettingApi.md#createproductconfiguratorsetting) | **POST** /product-configurator-setting | Create a new Product Configurator Setting resources
*ProductConfiguratorSettingApi* | [**deleteProductConfiguratorSetting**](docs/Api/ProductConfiguratorSettingApi.md#deleteproductconfiguratorsetting) | **DELETE** /product-configurator-setting/{id} | Delete a Product Configurator Setting resource
*ProductConfiguratorSettingApi* | [**getProductConfiguratorSetting**](docs/Api/ProductConfiguratorSettingApi.md#getproductconfiguratorsetting) | **GET** /product-configurator-setting/{id} | Detailed information about a Product Configurator Setting resource
*ProductConfiguratorSettingApi* | [**getProductConfiguratorSettingList**](docs/Api/ProductConfiguratorSettingApi.md#getproductconfiguratorsettinglist) | **GET** /product-configurator-setting | List with basic information of Product Configurator Setting resources
*ProductConfiguratorSettingApi* | [**updateProductConfiguratorSetting**](docs/Api/ProductConfiguratorSettingApi.md#updateproductconfiguratorsetting) | **PATCH** /product-configurator-setting/{id} | Partially update information about a Product Configurator Setting resource
*ProductCrossSellingApi* | [**createProductCrossSelling**](docs/Api/ProductCrossSellingApi.md#createproductcrossselling) | **POST** /product-cross-selling | Create a new Product Cross Selling resources
*ProductCrossSellingApi* | [**deleteProductCrossSelling**](docs/Api/ProductCrossSellingApi.md#deleteproductcrossselling) | **DELETE** /product-cross-selling/{id} | Delete a Product Cross Selling resource
*ProductCrossSellingApi* | [**getProductCrossSelling**](docs/Api/ProductCrossSellingApi.md#getproductcrossselling) | **GET** /product-cross-selling/{id} | Detailed information about a Product Cross Selling resource
*ProductCrossSellingApi* | [**getProductCrossSellingList**](docs/Api/ProductCrossSellingApi.md#getproductcrosssellinglist) | **GET** /product-cross-selling | List with basic information of Product Cross Selling resources
*ProductCrossSellingApi* | [**updateProductCrossSelling**](docs/Api/ProductCrossSellingApi.md#updateproductcrossselling) | **PATCH** /product-cross-selling/{id} | Partially update information about a Product Cross Selling resource
*ProductExportApi* | [**createProductExport**](docs/Api/ProductExportApi.md#createproductexport) | **POST** /product-export | Create a new Product Export resources
*ProductExportApi* | [**deleteProductExport**](docs/Api/ProductExportApi.md#deleteproductexport) | **DELETE** /product-export/{id} | Delete a Product Export resource
*ProductExportApi* | [**getProductExport**](docs/Api/ProductExportApi.md#getproductexport) | **GET** /product-export/{id} | Detailed information about a Product Export resource
*ProductExportApi* | [**getProductExportList**](docs/Api/ProductExportApi.md#getproductexportlist) | **GET** /product-export | List with basic information of Product Export resources
*ProductExportApi* | [**updateProductExport**](docs/Api/ProductExportApi.md#updateproductexport) | **PATCH** /product-export/{id} | Partially update information about a Product Export resource
*ProductKeywordDictionaryApi* | [**createProductKeywordDictionary**](docs/Api/ProductKeywordDictionaryApi.md#createproductkeyworddictionary) | **POST** /product-keyword-dictionary | Create a new Product Keyword Dictionary resources
*ProductKeywordDictionaryApi* | [**deleteProductKeywordDictionary**](docs/Api/ProductKeywordDictionaryApi.md#deleteproductkeyworddictionary) | **DELETE** /product-keyword-dictionary/{id} | Delete a Product Keyword Dictionary resource
*ProductKeywordDictionaryApi* | [**getProductKeywordDictionary**](docs/Api/ProductKeywordDictionaryApi.md#getproductkeyworddictionary) | **GET** /product-keyword-dictionary/{id} | Detailed information about a Product Keyword Dictionary resource
*ProductKeywordDictionaryApi* | [**getProductKeywordDictionaryList**](docs/Api/ProductKeywordDictionaryApi.md#getproductkeyworddictionarylist) | **GET** /product-keyword-dictionary | List with basic information of Product Keyword Dictionary resources
*ProductKeywordDictionaryApi* | [**updateProductKeywordDictionary**](docs/Api/ProductKeywordDictionaryApi.md#updateproductkeyworddictionary) | **PATCH** /product-keyword-dictionary/{id} | Partially update information about a Product Keyword Dictionary resource
*ProductManufacturerApi* | [**createProductManufacturer**](docs/Api/ProductManufacturerApi.md#createproductmanufacturer) | **POST** /product-manufacturer | Create a new Product Manufacturer resources
*ProductManufacturerApi* | [**deleteProductManufacturer**](docs/Api/ProductManufacturerApi.md#deleteproductmanufacturer) | **DELETE** /product-manufacturer/{id} | Delete a Product Manufacturer resource
*ProductManufacturerApi* | [**getProductManufacturer**](docs/Api/ProductManufacturerApi.md#getproductmanufacturer) | **GET** /product-manufacturer/{id} | Detailed information about a Product Manufacturer resource
*ProductManufacturerApi* | [**getProductManufacturerList**](docs/Api/ProductManufacturerApi.md#getproductmanufacturerlist) | **GET** /product-manufacturer | List with basic information of Product Manufacturer resources
*ProductManufacturerApi* | [**updateProductManufacturer**](docs/Api/ProductManufacturerApi.md#updateproductmanufacturer) | **PATCH** /product-manufacturer/{id} | Partially update information about a Product Manufacturer resource
*ProductMediaApi* | [**createProductMedia**](docs/Api/ProductMediaApi.md#createproductmedia) | **POST** /product-media | Create a new Product Media resources
*ProductMediaApi* | [**deleteProductMedia**](docs/Api/ProductMediaApi.md#deleteproductmedia) | **DELETE** /product-media/{id} | Delete a Product Media resource
*ProductMediaApi* | [**getProductMedia**](docs/Api/ProductMediaApi.md#getproductmedia) | **GET** /product-media/{id} | Detailed information about a Product Media resource
*ProductMediaApi* | [**getProductMediaList**](docs/Api/ProductMediaApi.md#getproductmedialist) | **GET** /product-media | List with basic information of Product Media resources
*ProductMediaApi* | [**updateProductMedia**](docs/Api/ProductMediaApi.md#updateproductmedia) | **PATCH** /product-media/{id} | Partially update information about a Product Media resource
*ProductPriceApi* | [**createProductPrice**](docs/Api/ProductPriceApi.md#createproductprice) | **POST** /product-price | Create a new Product Price resources
*ProductPriceApi* | [**deleteProductPrice**](docs/Api/ProductPriceApi.md#deleteproductprice) | **DELETE** /product-price/{id} | Delete a Product Price resource
*ProductPriceApi* | [**getProductPrice**](docs/Api/ProductPriceApi.md#getproductprice) | **GET** /product-price/{id} | Detailed information about a Product Price resource
*ProductPriceApi* | [**getProductPriceList**](docs/Api/ProductPriceApi.md#getproductpricelist) | **GET** /product-price | List with basic information of Product Price resources
*ProductPriceApi* | [**updateProductPrice**](docs/Api/ProductPriceApi.md#updateproductprice) | **PATCH** /product-price/{id} | Partially update information about a Product Price resource
*ProductReviewApi* | [**createProductReview**](docs/Api/ProductReviewApi.md#createproductreview) | **POST** /product-review | Create a new Product Review resources
*ProductReviewApi* | [**deleteProductReview**](docs/Api/ProductReviewApi.md#deleteproductreview) | **DELETE** /product-review/{id} | Delete a Product Review resource
*ProductReviewApi* | [**getProductReview**](docs/Api/ProductReviewApi.md#getproductreview) | **GET** /product-review/{id} | Detailed information about a Product Review resource
*ProductReviewApi* | [**getProductReviewList**](docs/Api/ProductReviewApi.md#getproductreviewlist) | **GET** /product-review | List with basic information of Product Review resources
*ProductReviewApi* | [**updateProductReview**](docs/Api/ProductReviewApi.md#updateproductreview) | **PATCH** /product-review/{id} | Partially update information about a Product Review resource
*ProductSearchKeywordApi* | [**createProductSearchKeyword**](docs/Api/ProductSearchKeywordApi.md#createproductsearchkeyword) | **POST** /product-search-keyword | Create a new Product Search Keyword resources
*ProductSearchKeywordApi* | [**deleteProductSearchKeyword**](docs/Api/ProductSearchKeywordApi.md#deleteproductsearchkeyword) | **DELETE** /product-search-keyword/{id} | Delete a Product Search Keyword resource
*ProductSearchKeywordApi* | [**getProductSearchKeyword**](docs/Api/ProductSearchKeywordApi.md#getproductsearchkeyword) | **GET** /product-search-keyword/{id} | Detailed information about a Product Search Keyword resource
*ProductSearchKeywordApi* | [**getProductSearchKeywordList**](docs/Api/ProductSearchKeywordApi.md#getproductsearchkeywordlist) | **GET** /product-search-keyword | List with basic information of Product Search Keyword resources
*ProductSearchKeywordApi* | [**updateProductSearchKeyword**](docs/Api/ProductSearchKeywordApi.md#updateproductsearchkeyword) | **PATCH** /product-search-keyword/{id} | Partially update information about a Product Search Keyword resource
*ProductStreamApi* | [**createProductStream**](docs/Api/ProductStreamApi.md#createproductstream) | **POST** /product-stream | Create a new Product Stream resources
*ProductStreamApi* | [**deleteProductStream**](docs/Api/ProductStreamApi.md#deleteproductstream) | **DELETE** /product-stream/{id} | Delete a Product Stream resource
*ProductStreamApi* | [**getProductStream**](docs/Api/ProductStreamApi.md#getproductstream) | **GET** /product-stream/{id} | Detailed information about a Product Stream resource
*ProductStreamApi* | [**getProductStreamList**](docs/Api/ProductStreamApi.md#getproductstreamlist) | **GET** /product-stream | List with basic information of Product Stream resources
*ProductStreamApi* | [**updateProductStream**](docs/Api/ProductStreamApi.md#updateproductstream) | **PATCH** /product-stream/{id} | Partially update information about a Product Stream resource
*ProductStreamFilterApi* | [**createProductStreamFilter**](docs/Api/ProductStreamFilterApi.md#createproductstreamfilter) | **POST** /product-stream-filter | Create a new Product Stream Filter resources
*ProductStreamFilterApi* | [**deleteProductStreamFilter**](docs/Api/ProductStreamFilterApi.md#deleteproductstreamfilter) | **DELETE** /product-stream-filter/{id} | Delete a Product Stream Filter resource
*ProductStreamFilterApi* | [**getProductStreamFilter**](docs/Api/ProductStreamFilterApi.md#getproductstreamfilter) | **GET** /product-stream-filter/{id} | Detailed information about a Product Stream Filter resource
*ProductStreamFilterApi* | [**getProductStreamFilterList**](docs/Api/ProductStreamFilterApi.md#getproductstreamfilterlist) | **GET** /product-stream-filter | List with basic information of Product Stream Filter resources
*ProductStreamFilterApi* | [**updateProductStreamFilter**](docs/Api/ProductStreamFilterApi.md#updateproductstreamfilter) | **PATCH** /product-stream-filter/{id} | Partially update information about a Product Stream Filter resource
*ProductVisibilityApi* | [**createProductVisibility**](docs/Api/ProductVisibilityApi.md#createproductvisibility) | **POST** /product-visibility | Create a new Product Visibility resources
*ProductVisibilityApi* | [**deleteProductVisibility**](docs/Api/ProductVisibilityApi.md#deleteproductvisibility) | **DELETE** /product-visibility/{id} | Delete a Product Visibility resource
*ProductVisibilityApi* | [**getProductVisibility**](docs/Api/ProductVisibilityApi.md#getproductvisibility) | **GET** /product-visibility/{id} | Detailed information about a Product Visibility resource
*ProductVisibilityApi* | [**getProductVisibilityList**](docs/Api/ProductVisibilityApi.md#getproductvisibilitylist) | **GET** /product-visibility | List with basic information of Product Visibility resources
*ProductVisibilityApi* | [**updateProductVisibility**](docs/Api/ProductVisibilityApi.md#updateproductvisibility) | **PATCH** /product-visibility/{id} | Partially update information about a Product Visibility resource
*PromotionApi* | [**createPromotion**](docs/Api/PromotionApi.md#createpromotion) | **POST** /promotion | Create a new Promotion resources
*PromotionApi* | [**deletePromotion**](docs/Api/PromotionApi.md#deletepromotion) | **DELETE** /promotion/{id} | Delete a Promotion resource
*PromotionApi* | [**getPromotion**](docs/Api/PromotionApi.md#getpromotion) | **GET** /promotion/{id} | Detailed information about a Promotion resource
*PromotionApi* | [**getPromotionList**](docs/Api/PromotionApi.md#getpromotionlist) | **GET** /promotion | List with basic information of Promotion resources
*PromotionApi* | [**updatePromotion**](docs/Api/PromotionApi.md#updatepromotion) | **PATCH** /promotion/{id} | Partially update information about a Promotion resource
*PromotionDiscountApi* | [**createPromotionDiscount**](docs/Api/PromotionDiscountApi.md#createpromotiondiscount) | **POST** /promotion-discount | Create a new Promotion Discount resources
*PromotionDiscountApi* | [**deletePromotionDiscount**](docs/Api/PromotionDiscountApi.md#deletepromotiondiscount) | **DELETE** /promotion-discount/{id} | Delete a Promotion Discount resource
*PromotionDiscountApi* | [**getPromotionDiscount**](docs/Api/PromotionDiscountApi.md#getpromotiondiscount) | **GET** /promotion-discount/{id} | Detailed information about a Promotion Discount resource
*PromotionDiscountApi* | [**getPromotionDiscountList**](docs/Api/PromotionDiscountApi.md#getpromotiondiscountlist) | **GET** /promotion-discount | List with basic information of Promotion Discount resources
*PromotionDiscountApi* | [**updatePromotionDiscount**](docs/Api/PromotionDiscountApi.md#updatepromotiondiscount) | **PATCH** /promotion-discount/{id} | Partially update information about a Promotion Discount resource
*PromotionDiscountPricesApi* | [**createPromotionDiscountPrices**](docs/Api/PromotionDiscountPricesApi.md#createpromotiondiscountprices) | **POST** /promotion-discount-prices | Create a new Promotion Discount Prices resources
*PromotionDiscountPricesApi* | [**deletePromotionDiscountPrices**](docs/Api/PromotionDiscountPricesApi.md#deletepromotiondiscountprices) | **DELETE** /promotion-discount-prices/{id} | Delete a Promotion Discount Prices resource
*PromotionDiscountPricesApi* | [**getPromotionDiscountPrices**](docs/Api/PromotionDiscountPricesApi.md#getpromotiondiscountprices) | **GET** /promotion-discount-prices/{id} | Detailed information about a Promotion Discount Prices resource
*PromotionDiscountPricesApi* | [**getPromotionDiscountPricesList**](docs/Api/PromotionDiscountPricesApi.md#getpromotiondiscountpriceslist) | **GET** /promotion-discount-prices | List with basic information of Promotion Discount Prices resources
*PromotionDiscountPricesApi* | [**updatePromotionDiscountPrices**](docs/Api/PromotionDiscountPricesApi.md#updatepromotiondiscountprices) | **PATCH** /promotion-discount-prices/{id} | Partially update information about a Promotion Discount Prices resource
*PromotionIndividualCodeApi* | [**createPromotionIndividualCode**](docs/Api/PromotionIndividualCodeApi.md#createpromotionindividualcode) | **POST** /promotion-individual-code | Create a new Promotion Individual Code resources
*PromotionIndividualCodeApi* | [**deletePromotionIndividualCode**](docs/Api/PromotionIndividualCodeApi.md#deletepromotionindividualcode) | **DELETE** /promotion-individual-code/{id} | Delete a Promotion Individual Code resource
*PromotionIndividualCodeApi* | [**getPromotionIndividualCode**](docs/Api/PromotionIndividualCodeApi.md#getpromotionindividualcode) | **GET** /promotion-individual-code/{id} | Detailed information about a Promotion Individual Code resource
*PromotionIndividualCodeApi* | [**getPromotionIndividualCodeList**](docs/Api/PromotionIndividualCodeApi.md#getpromotionindividualcodelist) | **GET** /promotion-individual-code | List with basic information of Promotion Individual Code resources
*PromotionIndividualCodeApi* | [**updatePromotionIndividualCode**](docs/Api/PromotionIndividualCodeApi.md#updatepromotionindividualcode) | **PATCH** /promotion-individual-code/{id} | Partially update information about a Promotion Individual Code resource
*PromotionSalesChannelApi* | [**createPromotionSalesChannel**](docs/Api/PromotionSalesChannelApi.md#createpromotionsaleschannel) | **POST** /promotion-sales-channel | Create a new Promotion Sales Channel resources
*PromotionSalesChannelApi* | [**deletePromotionSalesChannel**](docs/Api/PromotionSalesChannelApi.md#deletepromotionsaleschannel) | **DELETE** /promotion-sales-channel/{id} | Delete a Promotion Sales Channel resource
*PromotionSalesChannelApi* | [**getPromotionSalesChannel**](docs/Api/PromotionSalesChannelApi.md#getpromotionsaleschannel) | **GET** /promotion-sales-channel/{id} | Detailed information about a Promotion Sales Channel resource
*PromotionSalesChannelApi* | [**getPromotionSalesChannelList**](docs/Api/PromotionSalesChannelApi.md#getpromotionsaleschannellist) | **GET** /promotion-sales-channel | List with basic information of Promotion Sales Channel resources
*PromotionSalesChannelApi* | [**updatePromotionSalesChannel**](docs/Api/PromotionSalesChannelApi.md#updatepromotionsaleschannel) | **PATCH** /promotion-sales-channel/{id} | Partially update information about a Promotion Sales Channel resource
*PromotionSetgroupApi* | [**createPromotionSetgroup**](docs/Api/PromotionSetgroupApi.md#createpromotionsetgroup) | **POST** /promotion-setgroup | Create a new Promotion Setgroup resources
*PromotionSetgroupApi* | [**deletePromotionSetgroup**](docs/Api/PromotionSetgroupApi.md#deletepromotionsetgroup) | **DELETE** /promotion-setgroup/{id} | Delete a Promotion Setgroup resource
*PromotionSetgroupApi* | [**getPromotionSetgroup**](docs/Api/PromotionSetgroupApi.md#getpromotionsetgroup) | **GET** /promotion-setgroup/{id} | Detailed information about a Promotion Setgroup resource
*PromotionSetgroupApi* | [**getPromotionSetgroupList**](docs/Api/PromotionSetgroupApi.md#getpromotionsetgrouplist) | **GET** /promotion-setgroup | List with basic information of Promotion Setgroup resources
*PromotionSetgroupApi* | [**updatePromotionSetgroup**](docs/Api/PromotionSetgroupApi.md#updatepromotionsetgroup) | **PATCH** /promotion-setgroup/{id} | Partially update information about a Promotion Setgroup resource
*PropertyGroupApi* | [**createPropertyGroup**](docs/Api/PropertyGroupApi.md#createpropertygroup) | **POST** /property-group | Create a new Property Group resources
*PropertyGroupApi* | [**deletePropertyGroup**](docs/Api/PropertyGroupApi.md#deletepropertygroup) | **DELETE** /property-group/{id} | Delete a Property Group resource
*PropertyGroupApi* | [**getPropertyGroup**](docs/Api/PropertyGroupApi.md#getpropertygroup) | **GET** /property-group/{id} | Detailed information about a Property Group resource
*PropertyGroupApi* | [**getPropertyGroupList**](docs/Api/PropertyGroupApi.md#getpropertygrouplist) | **GET** /property-group | List with basic information of Property Group resources
*PropertyGroupApi* | [**updatePropertyGroup**](docs/Api/PropertyGroupApi.md#updatepropertygroup) | **PATCH** /property-group/{id} | Partially update information about a Property Group resource
*PropertyGroupOptionApi* | [**createPropertyGroupOption**](docs/Api/PropertyGroupOptionApi.md#createpropertygroupoption) | **POST** /property-group-option | Create a new Property Group Option resources
*PropertyGroupOptionApi* | [**deletePropertyGroupOption**](docs/Api/PropertyGroupOptionApi.md#deletepropertygroupoption) | **DELETE** /property-group-option/{id} | Delete a Property Group Option resource
*PropertyGroupOptionApi* | [**getPropertyGroupOption**](docs/Api/PropertyGroupOptionApi.md#getpropertygroupoption) | **GET** /property-group-option/{id} | Detailed information about a Property Group Option resource
*PropertyGroupOptionApi* | [**getPropertyGroupOptionList**](docs/Api/PropertyGroupOptionApi.md#getpropertygroupoptionlist) | **GET** /property-group-option | List with basic information of Property Group Option resources
*PropertyGroupOptionApi* | [**updatePropertyGroupOption**](docs/Api/PropertyGroupOptionApi.md#updatepropertygroupoption) | **PATCH** /property-group-option/{id} | Partially update information about a Property Group Option resource
*RuleApi* | [**createRule**](docs/Api/RuleApi.md#createrule) | **POST** /rule | Create a new Rule resources
*RuleApi* | [**deleteRule**](docs/Api/RuleApi.md#deleterule) | **DELETE** /rule/{id} | Delete a Rule resource
*RuleApi* | [**getRule**](docs/Api/RuleApi.md#getrule) | **GET** /rule/{id} | Detailed information about a Rule resource
*RuleApi* | [**getRuleList**](docs/Api/RuleApi.md#getrulelist) | **GET** /rule | List with basic information of Rule resources
*RuleApi* | [**updateRule**](docs/Api/RuleApi.md#updaterule) | **PATCH** /rule/{id} | Partially update information about a Rule resource
*RuleConditionApi* | [**createRuleCondition**](docs/Api/RuleConditionApi.md#createrulecondition) | **POST** /rule-condition | Create a new Rule Condition resources
*RuleConditionApi* | [**deleteRuleCondition**](docs/Api/RuleConditionApi.md#deleterulecondition) | **DELETE** /rule-condition/{id} | Delete a Rule Condition resource
*RuleConditionApi* | [**getRuleCondition**](docs/Api/RuleConditionApi.md#getrulecondition) | **GET** /rule-condition/{id} | Detailed information about a Rule Condition resource
*RuleConditionApi* | [**getRuleConditionList**](docs/Api/RuleConditionApi.md#getruleconditionlist) | **GET** /rule-condition | List with basic information of Rule Condition resources
*RuleConditionApi* | [**updateRuleCondition**](docs/Api/RuleConditionApi.md#updaterulecondition) | **PATCH** /rule-condition/{id} | Partially update information about a Rule Condition resource
*SalesChannelApi* | [**createSalesChannel**](docs/Api/SalesChannelApi.md#createsaleschannel) | **POST** /sales-channel | Create a new Sales Channel resources
*SalesChannelApi* | [**deleteSalesChannel**](docs/Api/SalesChannelApi.md#deletesaleschannel) | **DELETE** /sales-channel/{id} | Delete a Sales Channel resource
*SalesChannelApi* | [**getSalesChannel**](docs/Api/SalesChannelApi.md#getsaleschannel) | **GET** /sales-channel/{id} | Detailed information about a Sales Channel resource
*SalesChannelApi* | [**getSalesChannelList**](docs/Api/SalesChannelApi.md#getsaleschannellist) | **GET** /sales-channel | List with basic information of Sales Channel resources
*SalesChannelApi* | [**updateSalesChannel**](docs/Api/SalesChannelApi.md#updatesaleschannel) | **PATCH** /sales-channel/{id} | Partially update information about a Sales Channel resource
*SalesChannelDomainApi* | [**createSalesChannelDomain**](docs/Api/SalesChannelDomainApi.md#createsaleschanneldomain) | **POST** /sales-channel-domain | Create a new Sales Channel Domain resources
*SalesChannelDomainApi* | [**deleteSalesChannelDomain**](docs/Api/SalesChannelDomainApi.md#deletesaleschanneldomain) | **DELETE** /sales-channel-domain/{id} | Delete a Sales Channel Domain resource
*SalesChannelDomainApi* | [**getSalesChannelDomain**](docs/Api/SalesChannelDomainApi.md#getsaleschanneldomain) | **GET** /sales-channel-domain/{id} | Detailed information about a Sales Channel Domain resource
*SalesChannelDomainApi* | [**getSalesChannelDomainList**](docs/Api/SalesChannelDomainApi.md#getsaleschanneldomainlist) | **GET** /sales-channel-domain | List with basic information of Sales Channel Domain resources
*SalesChannelDomainApi* | [**updateSalesChannelDomain**](docs/Api/SalesChannelDomainApi.md#updatesaleschanneldomain) | **PATCH** /sales-channel-domain/{id} | Partially update information about a Sales Channel Domain resource
*SalesChannelTypeApi* | [**createSalesChannelType**](docs/Api/SalesChannelTypeApi.md#createsaleschanneltype) | **POST** /sales-channel-type | Create a new Sales Channel Type resources
*SalesChannelTypeApi* | [**deleteSalesChannelType**](docs/Api/SalesChannelTypeApi.md#deletesaleschanneltype) | **DELETE** /sales-channel-type/{id} | Delete a Sales Channel Type resource
*SalesChannelTypeApi* | [**getSalesChannelType**](docs/Api/SalesChannelTypeApi.md#getsaleschanneltype) | **GET** /sales-channel-type/{id} | Detailed information about a Sales Channel Type resource
*SalesChannelTypeApi* | [**getSalesChannelTypeList**](docs/Api/SalesChannelTypeApi.md#getsaleschanneltypelist) | **GET** /sales-channel-type | List with basic information of Sales Channel Type resources
*SalesChannelTypeApi* | [**updateSalesChannelType**](docs/Api/SalesChannelTypeApi.md#updatesaleschanneltype) | **PATCH** /sales-channel-type/{id} | Partially update information about a Sales Channel Type resource
*SalutationApi* | [**createSalutation**](docs/Api/SalutationApi.md#createsalutation) | **POST** /salutation | Create a new Salutation resources
*SalutationApi* | [**deleteSalutation**](docs/Api/SalutationApi.md#deletesalutation) | **DELETE** /salutation/{id} | Delete a Salutation resource
*SalutationApi* | [**getSalutation**](docs/Api/SalutationApi.md#getsalutation) | **GET** /salutation/{id} | Detailed information about a Salutation resource
*SalutationApi* | [**getSalutationList**](docs/Api/SalutationApi.md#getsalutationlist) | **GET** /salutation | List with basic information of Salutation resources
*SalutationApi* | [**updateSalutation**](docs/Api/SalutationApi.md#updatesalutation) | **PATCH** /salutation/{id} | Partially update information about a Salutation resource
*ScheduledTaskApi* | [**createScheduledTask**](docs/Api/ScheduledTaskApi.md#createscheduledtask) | **POST** /scheduled-task | Create a new Scheduled Task resources
*ScheduledTaskApi* | [**deleteScheduledTask**](docs/Api/ScheduledTaskApi.md#deletescheduledtask) | **DELETE** /scheduled-task/{id} | Delete a Scheduled Task resource
*ScheduledTaskApi* | [**getScheduledTask**](docs/Api/ScheduledTaskApi.md#getscheduledtask) | **GET** /scheduled-task/{id} | Detailed information about a Scheduled Task resource
*ScheduledTaskApi* | [**getScheduledTaskList**](docs/Api/ScheduledTaskApi.md#getscheduledtasklist) | **GET** /scheduled-task | List with basic information of Scheduled Task resources
*ScheduledTaskApi* | [**updateScheduledTask**](docs/Api/ScheduledTaskApi.md#updatescheduledtask) | **PATCH** /scheduled-task/{id} | Partially update information about a Scheduled Task resource
*SeoUrlApi* | [**createSeoUrl**](docs/Api/SeoUrlApi.md#createseourl) | **POST** /seo-url | Create a new Seo Url resources
*SeoUrlApi* | [**deleteSeoUrl**](docs/Api/SeoUrlApi.md#deleteseourl) | **DELETE** /seo-url/{id} | Delete a Seo Url resource
*SeoUrlApi* | [**getSeoUrl**](docs/Api/SeoUrlApi.md#getseourl) | **GET** /seo-url/{id} | Detailed information about a Seo Url resource
*SeoUrlApi* | [**getSeoUrlList**](docs/Api/SeoUrlApi.md#getseourllist) | **GET** /seo-url | List with basic information of Seo Url resources
*SeoUrlApi* | [**updateSeoUrl**](docs/Api/SeoUrlApi.md#updateseourl) | **PATCH** /seo-url/{id} | Partially update information about a Seo Url resource
*SeoUrlTemplateApi* | [**createSeoUrlTemplate**](docs/Api/SeoUrlTemplateApi.md#createseourltemplate) | **POST** /seo-url-template | Create a new Seo Url Template resources
*SeoUrlTemplateApi* | [**deleteSeoUrlTemplate**](docs/Api/SeoUrlTemplateApi.md#deleteseourltemplate) | **DELETE** /seo-url-template/{id} | Delete a Seo Url Template resource
*SeoUrlTemplateApi* | [**getSeoUrlTemplate**](docs/Api/SeoUrlTemplateApi.md#getseourltemplate) | **GET** /seo-url-template/{id} | Detailed information about a Seo Url Template resource
*SeoUrlTemplateApi* | [**getSeoUrlTemplateList**](docs/Api/SeoUrlTemplateApi.md#getseourltemplatelist) | **GET** /seo-url-template | List with basic information of Seo Url Template resources
*SeoUrlTemplateApi* | [**updateSeoUrlTemplate**](docs/Api/SeoUrlTemplateApi.md#updateseourltemplate) | **PATCH** /seo-url-template/{id} | Partially update information about a Seo Url Template resource
*ShippingMethodApi* | [**createShippingMethod**](docs/Api/ShippingMethodApi.md#createshippingmethod) | **POST** /shipping-method | Create a new Shipping Method resources
*ShippingMethodApi* | [**deleteShippingMethod**](docs/Api/ShippingMethodApi.md#deleteshippingmethod) | **DELETE** /shipping-method/{id} | Delete a Shipping Method resource
*ShippingMethodApi* | [**getShippingMethod**](docs/Api/ShippingMethodApi.md#getshippingmethod) | **GET** /shipping-method/{id} | Detailed information about a Shipping Method resource
*ShippingMethodApi* | [**getShippingMethodList**](docs/Api/ShippingMethodApi.md#getshippingmethodlist) | **GET** /shipping-method | List with basic information of Shipping Method resources
*ShippingMethodApi* | [**updateShippingMethod**](docs/Api/ShippingMethodApi.md#updateshippingmethod) | **PATCH** /shipping-method/{id} | Partially update information about a Shipping Method resource
*ShippingMethodPriceApi* | [**createShippingMethodPrice**](docs/Api/ShippingMethodPriceApi.md#createshippingmethodprice) | **POST** /shipping-method-price | Create a new Shipping Method Price resources
*ShippingMethodPriceApi* | [**deleteShippingMethodPrice**](docs/Api/ShippingMethodPriceApi.md#deleteshippingmethodprice) | **DELETE** /shipping-method-price/{id} | Delete a Shipping Method Price resource
*ShippingMethodPriceApi* | [**getShippingMethodPrice**](docs/Api/ShippingMethodPriceApi.md#getshippingmethodprice) | **GET** /shipping-method-price/{id} | Detailed information about a Shipping Method Price resource
*ShippingMethodPriceApi* | [**getShippingMethodPriceList**](docs/Api/ShippingMethodPriceApi.md#getshippingmethodpricelist) | **GET** /shipping-method-price | List with basic information of Shipping Method Price resources
*ShippingMethodPriceApi* | [**updateShippingMethodPrice**](docs/Api/ShippingMethodPriceApi.md#updateshippingmethodprice) | **PATCH** /shipping-method-price/{id} | Partially update information about a Shipping Method Price resource
*SnippetApi* | [**createSnippet**](docs/Api/SnippetApi.md#createsnippet) | **POST** /snippet | Create a new Snippet resources
*SnippetApi* | [**deleteSnippet**](docs/Api/SnippetApi.md#deletesnippet) | **DELETE** /snippet/{id} | Delete a Snippet resource
*SnippetApi* | [**getSnippet**](docs/Api/SnippetApi.md#getsnippet) | **GET** /snippet/{id} | Detailed information about a Snippet resource
*SnippetApi* | [**getSnippetList**](docs/Api/SnippetApi.md#getsnippetlist) | **GET** /snippet | List with basic information of Snippet resources
*SnippetApi* | [**updateSnippet**](docs/Api/SnippetApi.md#updatesnippet) | **PATCH** /snippet/{id} | Partially update information about a Snippet resource
*SnippetSetApi* | [**createSnippetSet**](docs/Api/SnippetSetApi.md#createsnippetset) | **POST** /snippet-set | Create a new Snippet Set resources
*SnippetSetApi* | [**deleteSnippetSet**](docs/Api/SnippetSetApi.md#deletesnippetset) | **DELETE** /snippet-set/{id} | Delete a Snippet Set resource
*SnippetSetApi* | [**getSnippetSet**](docs/Api/SnippetSetApi.md#getsnippetset) | **GET** /snippet-set/{id} | Detailed information about a Snippet Set resource
*SnippetSetApi* | [**getSnippetSetList**](docs/Api/SnippetSetApi.md#getsnippetsetlist) | **GET** /snippet-set | List with basic information of Snippet Set resources
*SnippetSetApi* | [**updateSnippetSet**](docs/Api/SnippetSetApi.md#updatesnippetset) | **PATCH** /snippet-set/{id} | Partially update information about a Snippet Set resource
*StateMachineApi* | [**createStateMachine**](docs/Api/StateMachineApi.md#createstatemachine) | **POST** /state-machine | Create a new State Machine resources
*StateMachineApi* | [**deleteStateMachine**](docs/Api/StateMachineApi.md#deletestatemachine) | **DELETE** /state-machine/{id} | Delete a State Machine resource
*StateMachineApi* | [**getStateMachine**](docs/Api/StateMachineApi.md#getstatemachine) | **GET** /state-machine/{id} | Detailed information about a State Machine resource
*StateMachineApi* | [**getStateMachineList**](docs/Api/StateMachineApi.md#getstatemachinelist) | **GET** /state-machine | List with basic information of State Machine resources
*StateMachineApi* | [**updateStateMachine**](docs/Api/StateMachineApi.md#updatestatemachine) | **PATCH** /state-machine/{id} | Partially update information about a State Machine resource
*StateMachineHistoryApi* | [**createStateMachineHistory**](docs/Api/StateMachineHistoryApi.md#createstatemachinehistory) | **POST** /state-machine-history | Create a new State Machine History resources
*StateMachineHistoryApi* | [**deleteStateMachineHistory**](docs/Api/StateMachineHistoryApi.md#deletestatemachinehistory) | **DELETE** /state-machine-history/{id} | Delete a State Machine History resource
*StateMachineHistoryApi* | [**getStateMachineHistory**](docs/Api/StateMachineHistoryApi.md#getstatemachinehistory) | **GET** /state-machine-history/{id} | Detailed information about a State Machine History resource
*StateMachineHistoryApi* | [**getStateMachineHistoryList**](docs/Api/StateMachineHistoryApi.md#getstatemachinehistorylist) | **GET** /state-machine-history | List with basic information of State Machine History resources
*StateMachineHistoryApi* | [**updateStateMachineHistory**](docs/Api/StateMachineHistoryApi.md#updatestatemachinehistory) | **PATCH** /state-machine-history/{id} | Partially update information about a State Machine History resource
*StateMachineStateApi* | [**createStateMachineState**](docs/Api/StateMachineStateApi.md#createstatemachinestate) | **POST** /state-machine-state | Create a new State Machine State resources
*StateMachineStateApi* | [**deleteStateMachineState**](docs/Api/StateMachineStateApi.md#deletestatemachinestate) | **DELETE** /state-machine-state/{id} | Delete a State Machine State resource
*StateMachineStateApi* | [**getStateMachineState**](docs/Api/StateMachineStateApi.md#getstatemachinestate) | **GET** /state-machine-state/{id} | Detailed information about a State Machine State resource
*StateMachineStateApi* | [**getStateMachineStateList**](docs/Api/StateMachineStateApi.md#getstatemachinestatelist) | **GET** /state-machine-state | List with basic information of State Machine State resources
*StateMachineStateApi* | [**updateStateMachineState**](docs/Api/StateMachineStateApi.md#updatestatemachinestate) | **PATCH** /state-machine-state/{id} | Partially update information about a State Machine State resource
*StateMachineTransitionApi* | [**createStateMachineTransition**](docs/Api/StateMachineTransitionApi.md#createstatemachinetransition) | **POST** /state-machine-transition | Create a new State Machine Transition resources
*StateMachineTransitionApi* | [**deleteStateMachineTransition**](docs/Api/StateMachineTransitionApi.md#deletestatemachinetransition) | **DELETE** /state-machine-transition/{id} | Delete a State Machine Transition resource
*StateMachineTransitionApi* | [**getStateMachineTransition**](docs/Api/StateMachineTransitionApi.md#getstatemachinetransition) | **GET** /state-machine-transition/{id} | Detailed information about a State Machine Transition resource
*StateMachineTransitionApi* | [**getStateMachineTransitionList**](docs/Api/StateMachineTransitionApi.md#getstatemachinetransitionlist) | **GET** /state-machine-transition | List with basic information of State Machine Transition resources
*StateMachineTransitionApi* | [**updateStateMachineTransition**](docs/Api/StateMachineTransitionApi.md#updatestatemachinetransition) | **PATCH** /state-machine-transition/{id} | Partially update information about a State Machine Transition resource
*SystemConfigApi* | [**createSystemConfig**](docs/Api/SystemConfigApi.md#createsystemconfig) | **POST** /system-config | Create a new System Config resources
*SystemConfigApi* | [**deleteSystemConfig**](docs/Api/SystemConfigApi.md#deletesystemconfig) | **DELETE** /system-config/{id} | Delete a System Config resource
*SystemConfigApi* | [**getSystemConfig**](docs/Api/SystemConfigApi.md#getsystemconfig) | **GET** /system-config/{id} | Detailed information about a System Config resource
*SystemConfigApi* | [**getSystemConfigList**](docs/Api/SystemConfigApi.md#getsystemconfiglist) | **GET** /system-config | List with basic information of System Config resources
*SystemConfigApi* | [**updateSystemConfig**](docs/Api/SystemConfigApi.md#updatesystemconfig) | **PATCH** /system-config/{id} | Partially update information about a System Config resource
*TagApi* | [**createTag**](docs/Api/TagApi.md#createtag) | **POST** /tag | Create a new Tag resources
*TagApi* | [**deleteTag**](docs/Api/TagApi.md#deletetag) | **DELETE** /tag/{id} | Delete a Tag resource
*TagApi* | [**getTag**](docs/Api/TagApi.md#gettag) | **GET** /tag/{id} | Detailed information about a Tag resource
*TagApi* | [**getTagList**](docs/Api/TagApi.md#gettaglist) | **GET** /tag | List with basic information of Tag resources
*TagApi* | [**updateTag**](docs/Api/TagApi.md#updatetag) | **PATCH** /tag/{id} | Partially update information about a Tag resource
*TaxApi* | [**createTax**](docs/Api/TaxApi.md#createtax) | **POST** /tax | Create a new Tax resources
*TaxApi* | [**deleteTax**](docs/Api/TaxApi.md#deletetax) | **DELETE** /tax/{id} | Delete a Tax resource
*TaxApi* | [**getTax**](docs/Api/TaxApi.md#gettax) | **GET** /tax/{id} | Detailed information about a Tax resource
*TaxApi* | [**getTaxList**](docs/Api/TaxApi.md#gettaxlist) | **GET** /tax | List with basic information of Tax resources
*TaxApi* | [**updateTax**](docs/Api/TaxApi.md#updatetax) | **PATCH** /tax/{id} | Partially update information about a Tax resource
*TaxRuleApi* | [**createTaxRule**](docs/Api/TaxRuleApi.md#createtaxrule) | **POST** /tax-rule | Create a new Tax Rule resources
*TaxRuleApi* | [**deleteTaxRule**](docs/Api/TaxRuleApi.md#deletetaxrule) | **DELETE** /tax-rule/{id} | Delete a Tax Rule resource
*TaxRuleApi* | [**getTaxRule**](docs/Api/TaxRuleApi.md#gettaxrule) | **GET** /tax-rule/{id} | Detailed information about a Tax Rule resource
*TaxRuleApi* | [**getTaxRuleList**](docs/Api/TaxRuleApi.md#gettaxrulelist) | **GET** /tax-rule | List with basic information of Tax Rule resources
*TaxRuleApi* | [**updateTaxRule**](docs/Api/TaxRuleApi.md#updatetaxrule) | **PATCH** /tax-rule/{id} | Partially update information about a Tax Rule resource
*TaxRuleTypeApi* | [**createTaxRuleType**](docs/Api/TaxRuleTypeApi.md#createtaxruletype) | **POST** /tax-rule-type | Create a new Tax Rule Type resources
*TaxRuleTypeApi* | [**deleteTaxRuleType**](docs/Api/TaxRuleTypeApi.md#deletetaxruletype) | **DELETE** /tax-rule-type/{id} | Delete a Tax Rule Type resource
*TaxRuleTypeApi* | [**getTaxRuleType**](docs/Api/TaxRuleTypeApi.md#gettaxruletype) | **GET** /tax-rule-type/{id} | Detailed information about a Tax Rule Type resource
*TaxRuleTypeApi* | [**getTaxRuleTypeList**](docs/Api/TaxRuleTypeApi.md#gettaxruletypelist) | **GET** /tax-rule-type | List with basic information of Tax Rule Type resources
*TaxRuleTypeApi* | [**updateTaxRuleType**](docs/Api/TaxRuleTypeApi.md#updatetaxruletype) | **PATCH** /tax-rule-type/{id} | Partially update information about a Tax Rule Type resource
*ThemeApi* | [**createTheme**](docs/Api/ThemeApi.md#createtheme) | **POST** /theme | Create a new Theme resources
*ThemeApi* | [**deleteTheme**](docs/Api/ThemeApi.md#deletetheme) | **DELETE** /theme/{id} | Delete a Theme resource
*ThemeApi* | [**getTheme**](docs/Api/ThemeApi.md#gettheme) | **GET** /theme/{id} | Detailed information about a Theme resource
*ThemeApi* | [**getThemeList**](docs/Api/ThemeApi.md#getthemelist) | **GET** /theme | List with basic information of Theme resources
*ThemeApi* | [**updateTheme**](docs/Api/ThemeApi.md#updatetheme) | **PATCH** /theme/{id} | Partially update information about a Theme resource
*UnitApi* | [**createUnit**](docs/Api/UnitApi.md#createunit) | **POST** /unit | Create a new Unit resources
*UnitApi* | [**deleteUnit**](docs/Api/UnitApi.md#deleteunit) | **DELETE** /unit/{id} | Delete a Unit resource
*UnitApi* | [**getUnit**](docs/Api/UnitApi.md#getunit) | **GET** /unit/{id} | Detailed information about a Unit resource
*UnitApi* | [**getUnitList**](docs/Api/UnitApi.md#getunitlist) | **GET** /unit | List with basic information of Unit resources
*UnitApi* | [**updateUnit**](docs/Api/UnitApi.md#updateunit) | **PATCH** /unit/{id} | Partially update information about a Unit resource
*UserApi* | [**createUser**](docs/Api/UserApi.md#createuser) | **POST** /user | Create a new User resources
*UserApi* | [**deleteUser**](docs/Api/UserApi.md#deleteuser) | **DELETE** /user/{id} | Delete a User resource
*UserApi* | [**getUser**](docs/Api/UserApi.md#getuser) | **GET** /user/{id} | Detailed information about a User resource
*UserApi* | [**getUserList**](docs/Api/UserApi.md#getuserlist) | **GET** /user | List with basic information of User resources
*UserApi* | [**updateUser**](docs/Api/UserApi.md#updateuser) | **PATCH** /user/{id} | Partially update information about a User resource
*UserAccessKeyApi* | [**createUserAccessKey**](docs/Api/UserAccessKeyApi.md#createuseraccesskey) | **POST** /user-access-key | Create a new User Access Key resources
*UserAccessKeyApi* | [**deleteUserAccessKey**](docs/Api/UserAccessKeyApi.md#deleteuseraccesskey) | **DELETE** /user-access-key/{id} | Delete a User Access Key resource
*UserAccessKeyApi* | [**getUserAccessKey**](docs/Api/UserAccessKeyApi.md#getuseraccesskey) | **GET** /user-access-key/{id} | Detailed information about a User Access Key resource
*UserAccessKeyApi* | [**getUserAccessKeyList**](docs/Api/UserAccessKeyApi.md#getuseraccesskeylist) | **GET** /user-access-key | List with basic information of User Access Key resources
*UserAccessKeyApi* | [**updateUserAccessKey**](docs/Api/UserAccessKeyApi.md#updateuseraccesskey) | **PATCH** /user-access-key/{id} | Partially update information about a User Access Key resource
*UserRecoveryApi* | [**createUserRecovery**](docs/Api/UserRecoveryApi.md#createuserrecovery) | **POST** /user-recovery | Create a new User Recovery resources
*UserRecoveryApi* | [**deleteUserRecovery**](docs/Api/UserRecoveryApi.md#deleteuserrecovery) | **DELETE** /user-recovery/{id} | Delete a User Recovery resource
*UserRecoveryApi* | [**getUserRecovery**](docs/Api/UserRecoveryApi.md#getuserrecovery) | **GET** /user-recovery/{id} | Detailed information about a User Recovery resource
*UserRecoveryApi* | [**getUserRecoveryList**](docs/Api/UserRecoveryApi.md#getuserrecoverylist) | **GET** /user-recovery | List with basic information of User Recovery resources
*UserRecoveryApi* | [**updateUserRecovery**](docs/Api/UserRecoveryApi.md#updateuserrecovery) | **PATCH** /user-recovery/{id} | Partially update information about a User Recovery resource

## Documentation For Models

 - [AclResource](docs/Model/AclResource.md)
 - [AclResourceAttributes](docs/Model/AclResourceAttributes.md)
 - [AclResourceFlat](docs/Model/AclResourceFlat.md)
 - [AclResourceLinks](docs/Model/AclResourceLinks.md)
 - [AclResourceRelationships](docs/Model/AclResourceRelationships.md)
 - [AclResourceRelationshipsAclRole](docs/Model/AclResourceRelationshipsAclRole.md)
 - [AclResourceRelationshipsAclRoleData](docs/Model/AclResourceRelationshipsAclRoleData.md)
 - [AclResourceRelationshipsAclRoleLinks](docs/Model/AclResourceRelationshipsAclRoleLinks.md)
 - [AclRole](docs/Model/AclRole.md)
 - [AclRoleAttributes](docs/Model/AclRoleAttributes.md)
 - [AclRoleFlat](docs/Model/AclRoleFlat.md)
 - [AclRoleLinks](docs/Model/AclRoleLinks.md)
 - [AclRoleRelationships](docs/Model/AclRoleRelationships.md)
 - [AclRoleRelationshipsAclResources](docs/Model/AclRoleRelationshipsAclResources.md)
 - [AclRoleRelationshipsAclResourcesData](docs/Model/AclRoleRelationshipsAclResourcesData.md)
 - [AclRoleRelationshipsAclResourcesLinks](docs/Model/AclRoleRelationshipsAclResourcesLinks.md)
 - [AclRoleRelationshipsUsers](docs/Model/AclRoleRelationshipsUsers.md)
 - [AclRoleRelationshipsUsersData](docs/Model/AclRoleRelationshipsUsersData.md)
 - [AclRoleRelationshipsUsersLinks](docs/Model/AclRoleRelationshipsUsersLinks.md)
 - [AclUserRoleFlat](docs/Model/AclUserRoleFlat.md)
 - [Attributes](docs/Model/Attributes.md)
 - [Body](docs/Model/Body.md)
 - [Body1](docs/Model/Body1.md)
 - [Body10](docs/Model/Body10.md)
 - [Body100](docs/Model/Body100.md)
 - [Body101](docs/Model/Body101.md)
 - [Body102](docs/Model/Body102.md)
 - [Body103](docs/Model/Body103.md)
 - [Body104](docs/Model/Body104.md)
 - [Body105](docs/Model/Body105.md)
 - [Body106](docs/Model/Body106.md)
 - [Body107](docs/Model/Body107.md)
 - [Body108](docs/Model/Body108.md)
 - [Body109](docs/Model/Body109.md)
 - [Body11](docs/Model/Body11.md)
 - [Body110](docs/Model/Body110.md)
 - [Body111](docs/Model/Body111.md)
 - [Body112](docs/Model/Body112.md)
 - [Body113](docs/Model/Body113.md)
 - [Body114](docs/Model/Body114.md)
 - [Body115](docs/Model/Body115.md)
 - [Body116](docs/Model/Body116.md)
 - [Body117](docs/Model/Body117.md)
 - [Body118](docs/Model/Body118.md)
 - [Body119](docs/Model/Body119.md)
 - [Body12](docs/Model/Body12.md)
 - [Body120](docs/Model/Body120.md)
 - [Body121](docs/Model/Body121.md)
 - [Body122](docs/Model/Body122.md)
 - [Body123](docs/Model/Body123.md)
 - [Body124](docs/Model/Body124.md)
 - [Body125](docs/Model/Body125.md)
 - [Body126](docs/Model/Body126.md)
 - [Body127](docs/Model/Body127.md)
 - [Body128](docs/Model/Body128.md)
 - [Body129](docs/Model/Body129.md)
 - [Body13](docs/Model/Body13.md)
 - [Body130](docs/Model/Body130.md)
 - [Body131](docs/Model/Body131.md)
 - [Body132](docs/Model/Body132.md)
 - [Body133](docs/Model/Body133.md)
 - [Body134](docs/Model/Body134.md)
 - [Body135](docs/Model/Body135.md)
 - [Body136](docs/Model/Body136.md)
 - [Body137](docs/Model/Body137.md)
 - [Body138](docs/Model/Body138.md)
 - [Body139](docs/Model/Body139.md)
 - [Body14](docs/Model/Body14.md)
 - [Body140](docs/Model/Body140.md)
 - [Body141](docs/Model/Body141.md)
 - [Body142](docs/Model/Body142.md)
 - [Body143](docs/Model/Body143.md)
 - [Body144](docs/Model/Body144.md)
 - [Body145](docs/Model/Body145.md)
 - [Body146](docs/Model/Body146.md)
 - [Body147](docs/Model/Body147.md)
 - [Body148](docs/Model/Body148.md)
 - [Body149](docs/Model/Body149.md)
 - [Body15](docs/Model/Body15.md)
 - [Body150](docs/Model/Body150.md)
 - [Body151](docs/Model/Body151.md)
 - [Body152](docs/Model/Body152.md)
 - [Body153](docs/Model/Body153.md)
 - [Body154](docs/Model/Body154.md)
 - [Body155](docs/Model/Body155.md)
 - [Body156](docs/Model/Body156.md)
 - [Body157](docs/Model/Body157.md)
 - [Body158](docs/Model/Body158.md)
 - [Body159](docs/Model/Body159.md)
 - [Body16](docs/Model/Body16.md)
 - [Body160](docs/Model/Body160.md)
 - [Body161](docs/Model/Body161.md)
 - [Body162](docs/Model/Body162.md)
 - [Body163](docs/Model/Body163.md)
 - [Body164](docs/Model/Body164.md)
 - [Body165](docs/Model/Body165.md)
 - [Body166](docs/Model/Body166.md)
 - [Body167](docs/Model/Body167.md)
 - [Body168](docs/Model/Body168.md)
 - [Body169](docs/Model/Body169.md)
 - [Body17](docs/Model/Body17.md)
 - [Body170](docs/Model/Body170.md)
 - [Body171](docs/Model/Body171.md)
 - [Body172](docs/Model/Body172.md)
 - [Body173](docs/Model/Body173.md)
 - [Body174](docs/Model/Body174.md)
 - [Body175](docs/Model/Body175.md)
 - [Body176](docs/Model/Body176.md)
 - [Body177](docs/Model/Body177.md)
 - [Body178](docs/Model/Body178.md)
 - [Body179](docs/Model/Body179.md)
 - [Body18](docs/Model/Body18.md)
 - [Body180](docs/Model/Body180.md)
 - [Body181](docs/Model/Body181.md)
 - [Body182](docs/Model/Body182.md)
 - [Body183](docs/Model/Body183.md)
 - [Body184](docs/Model/Body184.md)
 - [Body185](docs/Model/Body185.md)
 - [Body186](docs/Model/Body186.md)
 - [Body187](docs/Model/Body187.md)
 - [Body188](docs/Model/Body188.md)
 - [Body189](docs/Model/Body189.md)
 - [Body19](docs/Model/Body19.md)
 - [Body190](docs/Model/Body190.md)
 - [Body191](docs/Model/Body191.md)
 - [Body192](docs/Model/Body192.md)
 - [Body193](docs/Model/Body193.md)
 - [Body194](docs/Model/Body194.md)
 - [Body195](docs/Model/Body195.md)
 - [Body196](docs/Model/Body196.md)
 - [Body197](docs/Model/Body197.md)
 - [Body198](docs/Model/Body198.md)
 - [Body199](docs/Model/Body199.md)
 - [Body2](docs/Model/Body2.md)
 - [Body20](docs/Model/Body20.md)
 - [Body200](docs/Model/Body200.md)
 - [Body201](docs/Model/Body201.md)
 - [Body202](docs/Model/Body202.md)
 - [Body203](docs/Model/Body203.md)
 - [Body204](docs/Model/Body204.md)
 - [Body205](docs/Model/Body205.md)
 - [Body206](docs/Model/Body206.md)
 - [Body207](docs/Model/Body207.md)
 - [Body208](docs/Model/Body208.md)
 - [Body209](docs/Model/Body209.md)
 - [Body21](docs/Model/Body21.md)
 - [Body22](docs/Model/Body22.md)
 - [Body23](docs/Model/Body23.md)
 - [Body24](docs/Model/Body24.md)
 - [Body25](docs/Model/Body25.md)
 - [Body26](docs/Model/Body26.md)
 - [Body27](docs/Model/Body27.md)
 - [Body28](docs/Model/Body28.md)
 - [Body29](docs/Model/Body29.md)
 - [Body3](docs/Model/Body3.md)
 - [Body30](docs/Model/Body30.md)
 - [Body31](docs/Model/Body31.md)
 - [Body32](docs/Model/Body32.md)
 - [Body33](docs/Model/Body33.md)
 - [Body34](docs/Model/Body34.md)
 - [Body35](docs/Model/Body35.md)
 - [Body36](docs/Model/Body36.md)
 - [Body37](docs/Model/Body37.md)
 - [Body38](docs/Model/Body38.md)
 - [Body39](docs/Model/Body39.md)
 - [Body4](docs/Model/Body4.md)
 - [Body40](docs/Model/Body40.md)
 - [Body41](docs/Model/Body41.md)
 - [Body42](docs/Model/Body42.md)
 - [Body43](docs/Model/Body43.md)
 - [Body44](docs/Model/Body44.md)
 - [Body45](docs/Model/Body45.md)
 - [Body46](docs/Model/Body46.md)
 - [Body47](docs/Model/Body47.md)
 - [Body48](docs/Model/Body48.md)
 - [Body49](docs/Model/Body49.md)
 - [Body5](docs/Model/Body5.md)
 - [Body50](docs/Model/Body50.md)
 - [Body51](docs/Model/Body51.md)
 - [Body52](docs/Model/Body52.md)
 - [Body53](docs/Model/Body53.md)
 - [Body54](docs/Model/Body54.md)
 - [Body55](docs/Model/Body55.md)
 - [Body56](docs/Model/Body56.md)
 - [Body57](docs/Model/Body57.md)
 - [Body58](docs/Model/Body58.md)
 - [Body59](docs/Model/Body59.md)
 - [Body6](docs/Model/Body6.md)
 - [Body60](docs/Model/Body60.md)
 - [Body61](docs/Model/Body61.md)
 - [Body62](docs/Model/Body62.md)
 - [Body63](docs/Model/Body63.md)
 - [Body64](docs/Model/Body64.md)
 - [Body65](docs/Model/Body65.md)
 - [Body66](docs/Model/Body66.md)
 - [Body67](docs/Model/Body67.md)
 - [Body68](docs/Model/Body68.md)
 - [Body69](docs/Model/Body69.md)
 - [Body7](docs/Model/Body7.md)
 - [Body70](docs/Model/Body70.md)
 - [Body71](docs/Model/Body71.md)
 - [Body72](docs/Model/Body72.md)
 - [Body73](docs/Model/Body73.md)
 - [Body74](docs/Model/Body74.md)
 - [Body75](docs/Model/Body75.md)
 - [Body76](docs/Model/Body76.md)
 - [Body77](docs/Model/Body77.md)
 - [Body78](docs/Model/Body78.md)
 - [Body79](docs/Model/Body79.md)
 - [Body8](docs/Model/Body8.md)
 - [Body80](docs/Model/Body80.md)
 - [Body81](docs/Model/Body81.md)
 - [Body82](docs/Model/Body82.md)
 - [Body83](docs/Model/Body83.md)
 - [Body84](docs/Model/Body84.md)
 - [Body85](docs/Model/Body85.md)
 - [Body86](docs/Model/Body86.md)
 - [Body87](docs/Model/Body87.md)
 - [Body88](docs/Model/Body88.md)
 - [Body89](docs/Model/Body89.md)
 - [Body9](docs/Model/Body9.md)
 - [Body90](docs/Model/Body90.md)
 - [Body91](docs/Model/Body91.md)
 - [Body92](docs/Model/Body92.md)
 - [Body93](docs/Model/Body93.md)
 - [Body94](docs/Model/Body94.md)
 - [Body95](docs/Model/Body95.md)
 - [Body96](docs/Model/Body96.md)
 - [Body97](docs/Model/Body97.md)
 - [Body98](docs/Model/Body98.md)
 - [Body99](docs/Model/Body99.md)
 - [Category](docs/Model/Category.md)
 - [CategoryAttributes](docs/Model/CategoryAttributes.md)
 - [CategoryFlat](docs/Model/CategoryFlat.md)
 - [CategoryLinks](docs/Model/CategoryLinks.md)
 - [CategoryRelationships](docs/Model/CategoryRelationships.md)
 - [CategoryRelationshipsChildren](docs/Model/CategoryRelationshipsChildren.md)
 - [CategoryRelationshipsChildrenData](docs/Model/CategoryRelationshipsChildrenData.md)
 - [CategoryRelationshipsChildrenLinks](docs/Model/CategoryRelationshipsChildrenLinks.md)
 - [CategoryRelationshipsCmsPage](docs/Model/CategoryRelationshipsCmsPage.md)
 - [CategoryRelationshipsCmsPageData](docs/Model/CategoryRelationshipsCmsPageData.md)
 - [CategoryRelationshipsCmsPageLinks](docs/Model/CategoryRelationshipsCmsPageLinks.md)
 - [CategoryRelationshipsFooterSalesChannels](docs/Model/CategoryRelationshipsFooterSalesChannels.md)
 - [CategoryRelationshipsFooterSalesChannelsData](docs/Model/CategoryRelationshipsFooterSalesChannelsData.md)
 - [CategoryRelationshipsFooterSalesChannelsLinks](docs/Model/CategoryRelationshipsFooterSalesChannelsLinks.md)
 - [CategoryRelationshipsMainCategories](docs/Model/CategoryRelationshipsMainCategories.md)
 - [CategoryRelationshipsMainCategoriesData](docs/Model/CategoryRelationshipsMainCategoriesData.md)
 - [CategoryRelationshipsMainCategoriesLinks](docs/Model/CategoryRelationshipsMainCategoriesLinks.md)
 - [CategoryRelationshipsMedia](docs/Model/CategoryRelationshipsMedia.md)
 - [CategoryRelationshipsMediaData](docs/Model/CategoryRelationshipsMediaData.md)
 - [CategoryRelationshipsMediaLinks](docs/Model/CategoryRelationshipsMediaLinks.md)
 - [CategoryRelationshipsNavigationSalesChannels](docs/Model/CategoryRelationshipsNavigationSalesChannels.md)
 - [CategoryRelationshipsNavigationSalesChannelsData](docs/Model/CategoryRelationshipsNavigationSalesChannelsData.md)
 - [CategoryRelationshipsNavigationSalesChannelsLinks](docs/Model/CategoryRelationshipsNavigationSalesChannelsLinks.md)
 - [CategoryRelationshipsNestedProducts](docs/Model/CategoryRelationshipsNestedProducts.md)
 - [CategoryRelationshipsNestedProductsData](docs/Model/CategoryRelationshipsNestedProductsData.md)
 - [CategoryRelationshipsNestedProductsLinks](docs/Model/CategoryRelationshipsNestedProductsLinks.md)
 - [CategoryRelationshipsParent](docs/Model/CategoryRelationshipsParent.md)
 - [CategoryRelationshipsParentData](docs/Model/CategoryRelationshipsParentData.md)
 - [CategoryRelationshipsParentLinks](docs/Model/CategoryRelationshipsParentLinks.md)
 - [CategoryRelationshipsProducts](docs/Model/CategoryRelationshipsProducts.md)
 - [CategoryRelationshipsProductsData](docs/Model/CategoryRelationshipsProductsData.md)
 - [CategoryRelationshipsProductsLinks](docs/Model/CategoryRelationshipsProductsLinks.md)
 - [CategoryRelationshipsSeoUrls](docs/Model/CategoryRelationshipsSeoUrls.md)
 - [CategoryRelationshipsSeoUrlsData](docs/Model/CategoryRelationshipsSeoUrlsData.md)
 - [CategoryRelationshipsSeoUrlsLinks](docs/Model/CategoryRelationshipsSeoUrlsLinks.md)
 - [CategoryRelationshipsServiceSalesChannels](docs/Model/CategoryRelationshipsServiceSalesChannels.md)
 - [CategoryRelationshipsServiceSalesChannelsData](docs/Model/CategoryRelationshipsServiceSalesChannelsData.md)
 - [CategoryRelationshipsServiceSalesChannelsLinks](docs/Model/CategoryRelationshipsServiceSalesChannelsLinks.md)
 - [CategoryRelationshipsTags](docs/Model/CategoryRelationshipsTags.md)
 - [CategoryRelationshipsTagsData](docs/Model/CategoryRelationshipsTagsData.md)
 - [CategoryRelationshipsTagsLinks](docs/Model/CategoryRelationshipsTagsLinks.md)
 - [CategoryTagFlat](docs/Model/CategoryTagFlat.md)
 - [CmsBlock](docs/Model/CmsBlock.md)
 - [CmsBlockAttributes](docs/Model/CmsBlockAttributes.md)
 - [CmsBlockFlat](docs/Model/CmsBlockFlat.md)
 - [CmsBlockLinks](docs/Model/CmsBlockLinks.md)
 - [CmsBlockRelationships](docs/Model/CmsBlockRelationships.md)
 - [CmsBlockRelationshipsBackgroundMedia](docs/Model/CmsBlockRelationshipsBackgroundMedia.md)
 - [CmsBlockRelationshipsBackgroundMediaLinks](docs/Model/CmsBlockRelationshipsBackgroundMediaLinks.md)
 - [CmsBlockRelationshipsSection](docs/Model/CmsBlockRelationshipsSection.md)
 - [CmsBlockRelationshipsSectionData](docs/Model/CmsBlockRelationshipsSectionData.md)
 - [CmsBlockRelationshipsSectionLinks](docs/Model/CmsBlockRelationshipsSectionLinks.md)
 - [CmsBlockRelationshipsSlots](docs/Model/CmsBlockRelationshipsSlots.md)
 - [CmsBlockRelationshipsSlotsData](docs/Model/CmsBlockRelationshipsSlotsData.md)
 - [CmsBlockRelationshipsSlotsLinks](docs/Model/CmsBlockRelationshipsSlotsLinks.md)
 - [CmsPage](docs/Model/CmsPage.md)
 - [CmsPageAttributes](docs/Model/CmsPageAttributes.md)
 - [CmsPageAttributesConfig](docs/Model/CmsPageAttributesConfig.md)
 - [CmsPageFlat](docs/Model/CmsPageFlat.md)
 - [CmsPageLinks](docs/Model/CmsPageLinks.md)
 - [CmsPageRelationships](docs/Model/CmsPageRelationships.md)
 - [CmsPageRelationshipsCategories](docs/Model/CmsPageRelationshipsCategories.md)
 - [CmsPageRelationshipsCategoriesData](docs/Model/CmsPageRelationshipsCategoriesData.md)
 - [CmsPageRelationshipsCategoriesLinks](docs/Model/CmsPageRelationshipsCategoriesLinks.md)
 - [CmsPageRelationshipsPreviewMedia](docs/Model/CmsPageRelationshipsPreviewMedia.md)
 - [CmsPageRelationshipsPreviewMediaLinks](docs/Model/CmsPageRelationshipsPreviewMediaLinks.md)
 - [CmsPageRelationshipsSections](docs/Model/CmsPageRelationshipsSections.md)
 - [CmsPageRelationshipsSectionsData](docs/Model/CmsPageRelationshipsSectionsData.md)
 - [CmsPageRelationshipsSectionsLinks](docs/Model/CmsPageRelationshipsSectionsLinks.md)
 - [CmsSection](docs/Model/CmsSection.md)
 - [CmsSectionAttributes](docs/Model/CmsSectionAttributes.md)
 - [CmsSectionFlat](docs/Model/CmsSectionFlat.md)
 - [CmsSectionLinks](docs/Model/CmsSectionLinks.md)
 - [CmsSectionRelationships](docs/Model/CmsSectionRelationships.md)
 - [CmsSectionRelationshipsBackgroundMedia](docs/Model/CmsSectionRelationshipsBackgroundMedia.md)
 - [CmsSectionRelationshipsBackgroundMediaLinks](docs/Model/CmsSectionRelationshipsBackgroundMediaLinks.md)
 - [CmsSectionRelationshipsBlocks](docs/Model/CmsSectionRelationshipsBlocks.md)
 - [CmsSectionRelationshipsBlocksData](docs/Model/CmsSectionRelationshipsBlocksData.md)
 - [CmsSectionRelationshipsBlocksLinks](docs/Model/CmsSectionRelationshipsBlocksLinks.md)
 - [CmsSectionRelationshipsPage](docs/Model/CmsSectionRelationshipsPage.md)
 - [CmsSectionRelationshipsPageLinks](docs/Model/CmsSectionRelationshipsPageLinks.md)
 - [CmsSlot](docs/Model/CmsSlot.md)
 - [CmsSlotAttributes](docs/Model/CmsSlotAttributes.md)
 - [CmsSlotFlat](docs/Model/CmsSlotFlat.md)
 - [CmsSlotLinks](docs/Model/CmsSlotLinks.md)
 - [CmsSlotRelationships](docs/Model/CmsSlotRelationships.md)
 - [CmsSlotRelationshipsBlock](docs/Model/CmsSlotRelationshipsBlock.md)
 - [CmsSlotRelationshipsBlockData](docs/Model/CmsSlotRelationshipsBlockData.md)
 - [CmsSlotRelationshipsBlockLinks](docs/Model/CmsSlotRelationshipsBlockLinks.md)
 - [Country](docs/Model/Country.md)
 - [CountryAttributes](docs/Model/CountryAttributes.md)
 - [CountryFlat](docs/Model/CountryFlat.md)
 - [CountryLinks](docs/Model/CountryLinks.md)
 - [CountryRelationships](docs/Model/CountryRelationships.md)
 - [CountryRelationshipsCustomerAddresses](docs/Model/CountryRelationshipsCustomerAddresses.md)
 - [CountryRelationshipsCustomerAddressesData](docs/Model/CountryRelationshipsCustomerAddressesData.md)
 - [CountryRelationshipsCustomerAddressesLinks](docs/Model/CountryRelationshipsCustomerAddressesLinks.md)
 - [CountryRelationshipsOrderAddresses](docs/Model/CountryRelationshipsOrderAddresses.md)
 - [CountryRelationshipsOrderAddressesData](docs/Model/CountryRelationshipsOrderAddressesData.md)
 - [CountryRelationshipsOrderAddressesLinks](docs/Model/CountryRelationshipsOrderAddressesLinks.md)
 - [CountryRelationshipsSalesChannelDefaultAssignments](docs/Model/CountryRelationshipsSalesChannelDefaultAssignments.md)
 - [CountryRelationshipsSalesChannelDefaultAssignmentsData](docs/Model/CountryRelationshipsSalesChannelDefaultAssignmentsData.md)
 - [CountryRelationshipsSalesChannelDefaultAssignmentsLinks](docs/Model/CountryRelationshipsSalesChannelDefaultAssignmentsLinks.md)
 - [CountryRelationshipsSalesChannels](docs/Model/CountryRelationshipsSalesChannels.md)
 - [CountryRelationshipsSalesChannelsData](docs/Model/CountryRelationshipsSalesChannelsData.md)
 - [CountryRelationshipsSalesChannelsLinks](docs/Model/CountryRelationshipsSalesChannelsLinks.md)
 - [CountryRelationshipsStates](docs/Model/CountryRelationshipsStates.md)
 - [CountryRelationshipsStatesData](docs/Model/CountryRelationshipsStatesData.md)
 - [CountryRelationshipsStatesLinks](docs/Model/CountryRelationshipsStatesLinks.md)
 - [CountryRelationshipsTaxRules](docs/Model/CountryRelationshipsTaxRules.md)
 - [CountryRelationshipsTaxRulesData](docs/Model/CountryRelationshipsTaxRulesData.md)
 - [CountryRelationshipsTaxRulesLinks](docs/Model/CountryRelationshipsTaxRulesLinks.md)
 - [CountryState](docs/Model/CountryState.md)
 - [CountryStateAttributes](docs/Model/CountryStateAttributes.md)
 - [CountryStateFlat](docs/Model/CountryStateFlat.md)
 - [CountryStateLinks](docs/Model/CountryStateLinks.md)
 - [CountryStateRelationships](docs/Model/CountryStateRelationships.md)
 - [CountryStateRelationshipsCountry](docs/Model/CountryStateRelationshipsCountry.md)
 - [CountryStateRelationshipsCountryData](docs/Model/CountryStateRelationshipsCountryData.md)
 - [CountryStateRelationshipsCountryLinks](docs/Model/CountryStateRelationshipsCountryLinks.md)
 - [CountryStateRelationshipsCustomerAddresses](docs/Model/CountryStateRelationshipsCustomerAddresses.md)
 - [CountryStateRelationshipsCustomerAddressesData](docs/Model/CountryStateRelationshipsCustomerAddressesData.md)
 - [CountryStateRelationshipsCustomerAddressesLinks](docs/Model/CountryStateRelationshipsCustomerAddressesLinks.md)
 - [CountryStateRelationshipsOrderAddresses](docs/Model/CountryStateRelationshipsOrderAddresses.md)
 - [CountryStateRelationshipsOrderAddressesData](docs/Model/CountryStateRelationshipsOrderAddressesData.md)
 - [CountryStateRelationshipsOrderAddressesLinks](docs/Model/CountryStateRelationshipsOrderAddressesLinks.md)
 - [Currency](docs/Model/Currency.md)
 - [CurrencyAttributes](docs/Model/CurrencyAttributes.md)
 - [CurrencyFlat](docs/Model/CurrencyFlat.md)
 - [CurrencyLinks](docs/Model/CurrencyLinks.md)
 - [CurrencyRelationships](docs/Model/CurrencyRelationships.md)
 - [CurrencyRelationshipsOrders](docs/Model/CurrencyRelationshipsOrders.md)
 - [CurrencyRelationshipsOrdersData](docs/Model/CurrencyRelationshipsOrdersData.md)
 - [CurrencyRelationshipsOrdersLinks](docs/Model/CurrencyRelationshipsOrdersLinks.md)
 - [CurrencyRelationshipsProductExports](docs/Model/CurrencyRelationshipsProductExports.md)
 - [CurrencyRelationshipsProductExportsData](docs/Model/CurrencyRelationshipsProductExportsData.md)
 - [CurrencyRelationshipsProductExportsLinks](docs/Model/CurrencyRelationshipsProductExportsLinks.md)
 - [CurrencyRelationshipsPromotionDiscountPrices](docs/Model/CurrencyRelationshipsPromotionDiscountPrices.md)
 - [CurrencyRelationshipsPromotionDiscountPricesData](docs/Model/CurrencyRelationshipsPromotionDiscountPricesData.md)
 - [CurrencyRelationshipsPromotionDiscountPricesLinks](docs/Model/CurrencyRelationshipsPromotionDiscountPricesLinks.md)
 - [CurrencyRelationshipsSalesChannelDefaultAssignments](docs/Model/CurrencyRelationshipsSalesChannelDefaultAssignments.md)
 - [CurrencyRelationshipsSalesChannelDefaultAssignmentsData](docs/Model/CurrencyRelationshipsSalesChannelDefaultAssignmentsData.md)
 - [CurrencyRelationshipsSalesChannelDefaultAssignmentsLinks](docs/Model/CurrencyRelationshipsSalesChannelDefaultAssignmentsLinks.md)
 - [CurrencyRelationshipsSalesChannelDomains](docs/Model/CurrencyRelationshipsSalesChannelDomains.md)
 - [CurrencyRelationshipsSalesChannelDomainsData](docs/Model/CurrencyRelationshipsSalesChannelDomainsData.md)
 - [CurrencyRelationshipsSalesChannelDomainsLinks](docs/Model/CurrencyRelationshipsSalesChannelDomainsLinks.md)
 - [CurrencyRelationshipsSalesChannels](docs/Model/CurrencyRelationshipsSalesChannels.md)
 - [CurrencyRelationshipsSalesChannelsData](docs/Model/CurrencyRelationshipsSalesChannelsData.md)
 - [CurrencyRelationshipsSalesChannelsLinks](docs/Model/CurrencyRelationshipsSalesChannelsLinks.md)
 - [CurrencyRelationshipsShippingMethodPrices](docs/Model/CurrencyRelationshipsShippingMethodPrices.md)
 - [CurrencyRelationshipsShippingMethodPricesData](docs/Model/CurrencyRelationshipsShippingMethodPricesData.md)
 - [CurrencyRelationshipsShippingMethodPricesLinks](docs/Model/CurrencyRelationshipsShippingMethodPricesLinks.md)
 - [CustomField](docs/Model/CustomField.md)
 - [CustomFieldAttributes](docs/Model/CustomFieldAttributes.md)
 - [CustomFieldFlat](docs/Model/CustomFieldFlat.md)
 - [CustomFieldLinks](docs/Model/CustomFieldLinks.md)
 - [CustomFieldRelationships](docs/Model/CustomFieldRelationships.md)
 - [CustomFieldRelationshipsCustomFieldSet](docs/Model/CustomFieldRelationshipsCustomFieldSet.md)
 - [CustomFieldRelationshipsCustomFieldSetData](docs/Model/CustomFieldRelationshipsCustomFieldSetData.md)
 - [CustomFieldRelationshipsCustomFieldSetLinks](docs/Model/CustomFieldRelationshipsCustomFieldSetLinks.md)
 - [CustomFieldSet](docs/Model/CustomFieldSet.md)
 - [CustomFieldSetAttributes](docs/Model/CustomFieldSetAttributes.md)
 - [CustomFieldSetFlat](docs/Model/CustomFieldSetFlat.md)
 - [CustomFieldSetLinks](docs/Model/CustomFieldSetLinks.md)
 - [CustomFieldSetRelation](docs/Model/CustomFieldSetRelation.md)
 - [CustomFieldSetRelationAttributes](docs/Model/CustomFieldSetRelationAttributes.md)
 - [CustomFieldSetRelationFlat](docs/Model/CustomFieldSetRelationFlat.md)
 - [CustomFieldSetRelationLinks](docs/Model/CustomFieldSetRelationLinks.md)
 - [CustomFieldSetRelationRelationships](docs/Model/CustomFieldSetRelationRelationships.md)
 - [CustomFieldSetRelationRelationshipsCustomFieldSet](docs/Model/CustomFieldSetRelationRelationshipsCustomFieldSet.md)
 - [CustomFieldSetRelationRelationshipsCustomFieldSetLinks](docs/Model/CustomFieldSetRelationRelationshipsCustomFieldSetLinks.md)
 - [CustomFieldSetRelationships](docs/Model/CustomFieldSetRelationships.md)
 - [CustomFieldSetRelationshipsCustomFields](docs/Model/CustomFieldSetRelationshipsCustomFields.md)
 - [CustomFieldSetRelationshipsCustomFieldsData](docs/Model/CustomFieldSetRelationshipsCustomFieldsData.md)
 - [CustomFieldSetRelationshipsCustomFieldsLinks](docs/Model/CustomFieldSetRelationshipsCustomFieldsLinks.md)
 - [CustomFieldSetRelationshipsRelations](docs/Model/CustomFieldSetRelationshipsRelations.md)
 - [CustomFieldSetRelationshipsRelationsData](docs/Model/CustomFieldSetRelationshipsRelationsData.md)
 - [CustomFieldSetRelationshipsRelationsLinks](docs/Model/CustomFieldSetRelationshipsRelationsLinks.md)
 - [Customer](docs/Model/Customer.md)
 - [CustomerAddress](docs/Model/CustomerAddress.md)
 - [CustomerAddressAttributes](docs/Model/CustomerAddressAttributes.md)
 - [CustomerAddressFlat](docs/Model/CustomerAddressFlat.md)
 - [CustomerAddressLinks](docs/Model/CustomerAddressLinks.md)
 - [CustomerAddressRelationships](docs/Model/CustomerAddressRelationships.md)
 - [CustomerAddressRelationshipsCountry](docs/Model/CustomerAddressRelationshipsCountry.md)
 - [CustomerAddressRelationshipsCountryLinks](docs/Model/CustomerAddressRelationshipsCountryLinks.md)
 - [CustomerAddressRelationshipsCountryState](docs/Model/CustomerAddressRelationshipsCountryState.md)
 - [CustomerAddressRelationshipsCountryStateData](docs/Model/CustomerAddressRelationshipsCountryStateData.md)
 - [CustomerAddressRelationshipsCountryStateLinks](docs/Model/CustomerAddressRelationshipsCountryStateLinks.md)
 - [CustomerAddressRelationshipsCustomer](docs/Model/CustomerAddressRelationshipsCustomer.md)
 - [CustomerAddressRelationshipsCustomerData](docs/Model/CustomerAddressRelationshipsCustomerData.md)
 - [CustomerAddressRelationshipsCustomerLinks](docs/Model/CustomerAddressRelationshipsCustomerLinks.md)
 - [CustomerAddressRelationshipsSalutation](docs/Model/CustomerAddressRelationshipsSalutation.md)
 - [CustomerAddressRelationshipsSalutationLinks](docs/Model/CustomerAddressRelationshipsSalutationLinks.md)
 - [CustomerAttributes](docs/Model/CustomerAttributes.md)
 - [CustomerFlat](docs/Model/CustomerFlat.md)
 - [CustomerGroup](docs/Model/CustomerGroup.md)
 - [CustomerGroupAttributes](docs/Model/CustomerGroupAttributes.md)
 - [CustomerGroupFlat](docs/Model/CustomerGroupFlat.md)
 - [CustomerGroupLinks](docs/Model/CustomerGroupLinks.md)
 - [CustomerGroupRelationships](docs/Model/CustomerGroupRelationships.md)
 - [CustomerGroupRelationshipsCustomers](docs/Model/CustomerGroupRelationshipsCustomers.md)
 - [CustomerGroupRelationshipsCustomersData](docs/Model/CustomerGroupRelationshipsCustomersData.md)
 - [CustomerGroupRelationshipsCustomersLinks](docs/Model/CustomerGroupRelationshipsCustomersLinks.md)
 - [CustomerGroupRelationshipsSalesChannels](docs/Model/CustomerGroupRelationshipsSalesChannels.md)
 - [CustomerGroupRelationshipsSalesChannelsData](docs/Model/CustomerGroupRelationshipsSalesChannelsData.md)
 - [CustomerGroupRelationshipsSalesChannelsLinks](docs/Model/CustomerGroupRelationshipsSalesChannelsLinks.md)
 - [CustomerLinks](docs/Model/CustomerLinks.md)
 - [CustomerRecovery](docs/Model/CustomerRecovery.md)
 - [CustomerRecoveryAttributes](docs/Model/CustomerRecoveryAttributes.md)
 - [CustomerRecoveryFlat](docs/Model/CustomerRecoveryFlat.md)
 - [CustomerRecoveryLinks](docs/Model/CustomerRecoveryLinks.md)
 - [CustomerRecoveryRelationships](docs/Model/CustomerRecoveryRelationships.md)
 - [CustomerRecoveryRelationshipsCustomer](docs/Model/CustomerRecoveryRelationshipsCustomer.md)
 - [CustomerRecoveryRelationshipsCustomerLinks](docs/Model/CustomerRecoveryRelationshipsCustomerLinks.md)
 - [CustomerRelationships](docs/Model/CustomerRelationships.md)
 - [CustomerRelationshipsAddresses](docs/Model/CustomerRelationshipsAddresses.md)
 - [CustomerRelationshipsAddressesData](docs/Model/CustomerRelationshipsAddressesData.md)
 - [CustomerRelationshipsAddressesLinks](docs/Model/CustomerRelationshipsAddressesLinks.md)
 - [CustomerRelationshipsDefaultBillingAddress](docs/Model/CustomerRelationshipsDefaultBillingAddress.md)
 - [CustomerRelationshipsDefaultBillingAddressData](docs/Model/CustomerRelationshipsDefaultBillingAddressData.md)
 - [CustomerRelationshipsDefaultBillingAddressLinks](docs/Model/CustomerRelationshipsDefaultBillingAddressLinks.md)
 - [CustomerRelationshipsDefaultPaymentMethod](docs/Model/CustomerRelationshipsDefaultPaymentMethod.md)
 - [CustomerRelationshipsDefaultPaymentMethodData](docs/Model/CustomerRelationshipsDefaultPaymentMethodData.md)
 - [CustomerRelationshipsDefaultPaymentMethodLinks](docs/Model/CustomerRelationshipsDefaultPaymentMethodLinks.md)
 - [CustomerRelationshipsDefaultShippingAddress](docs/Model/CustomerRelationshipsDefaultShippingAddress.md)
 - [CustomerRelationshipsDefaultShippingAddressLinks](docs/Model/CustomerRelationshipsDefaultShippingAddressLinks.md)
 - [CustomerRelationshipsGroup](docs/Model/CustomerRelationshipsGroup.md)
 - [CustomerRelationshipsGroupData](docs/Model/CustomerRelationshipsGroupData.md)
 - [CustomerRelationshipsGroupLinks](docs/Model/CustomerRelationshipsGroupLinks.md)
 - [CustomerRelationshipsLanguage](docs/Model/CustomerRelationshipsLanguage.md)
 - [CustomerRelationshipsLanguageData](docs/Model/CustomerRelationshipsLanguageData.md)
 - [CustomerRelationshipsLanguageLinks](docs/Model/CustomerRelationshipsLanguageLinks.md)
 - [CustomerRelationshipsLastPaymentMethod](docs/Model/CustomerRelationshipsLastPaymentMethod.md)
 - [CustomerRelationshipsLastPaymentMethodLinks](docs/Model/CustomerRelationshipsLastPaymentMethodLinks.md)
 - [CustomerRelationshipsOrderCustomers](docs/Model/CustomerRelationshipsOrderCustomers.md)
 - [CustomerRelationshipsOrderCustomersData](docs/Model/CustomerRelationshipsOrderCustomersData.md)
 - [CustomerRelationshipsOrderCustomersLinks](docs/Model/CustomerRelationshipsOrderCustomersLinks.md)
 - [CustomerRelationshipsProductReviews](docs/Model/CustomerRelationshipsProductReviews.md)
 - [CustomerRelationshipsProductReviewsData](docs/Model/CustomerRelationshipsProductReviewsData.md)
 - [CustomerRelationshipsProductReviewsLinks](docs/Model/CustomerRelationshipsProductReviewsLinks.md)
 - [CustomerRelationshipsPromotions](docs/Model/CustomerRelationshipsPromotions.md)
 - [CustomerRelationshipsPromotionsData](docs/Model/CustomerRelationshipsPromotionsData.md)
 - [CustomerRelationshipsPromotionsLinks](docs/Model/CustomerRelationshipsPromotionsLinks.md)
 - [CustomerRelationshipsRecoveryCustomer](docs/Model/CustomerRelationshipsRecoveryCustomer.md)
 - [CustomerRelationshipsRecoveryCustomerData](docs/Model/CustomerRelationshipsRecoveryCustomerData.md)
 - [CustomerRelationshipsRecoveryCustomerLinks](docs/Model/CustomerRelationshipsRecoveryCustomerLinks.md)
 - [CustomerRelationshipsSalesChannel](docs/Model/CustomerRelationshipsSalesChannel.md)
 - [CustomerRelationshipsSalesChannelData](docs/Model/CustomerRelationshipsSalesChannelData.md)
 - [CustomerRelationshipsSalesChannelLinks](docs/Model/CustomerRelationshipsSalesChannelLinks.md)
 - [CustomerRelationshipsSalutation](docs/Model/CustomerRelationshipsSalutation.md)
 - [CustomerRelationshipsSalutationData](docs/Model/CustomerRelationshipsSalutationData.md)
 - [CustomerRelationshipsSalutationLinks](docs/Model/CustomerRelationshipsSalutationLinks.md)
 - [CustomerRelationshipsTags](docs/Model/CustomerRelationshipsTags.md)
 - [CustomerRelationshipsTagsData](docs/Model/CustomerRelationshipsTagsData.md)
 - [CustomerRelationshipsTagsLinks](docs/Model/CustomerRelationshipsTagsLinks.md)
 - [CustomerTagFlat](docs/Model/CustomerTagFlat.md)
 - [Data](docs/Model/Data.md)
 - [DeadMessage](docs/Model/DeadMessage.md)
 - [DeadMessageAttributes](docs/Model/DeadMessageAttributes.md)
 - [DeadMessageFlat](docs/Model/DeadMessageFlat.md)
 - [DeadMessageLinks](docs/Model/DeadMessageLinks.md)
 - [DeadMessageRelationships](docs/Model/DeadMessageRelationships.md)
 - [DeadMessageRelationshipsScheduledTask](docs/Model/DeadMessageRelationshipsScheduledTask.md)
 - [DeadMessageRelationshipsScheduledTaskData](docs/Model/DeadMessageRelationshipsScheduledTaskData.md)
 - [DeadMessageRelationshipsScheduledTaskLinks](docs/Model/DeadMessageRelationshipsScheduledTaskLinks.md)
 - [DeliveryTime](docs/Model/DeliveryTime.md)
 - [DeliveryTimeAttributes](docs/Model/DeliveryTimeAttributes.md)
 - [DeliveryTimeFlat](docs/Model/DeliveryTimeFlat.md)
 - [DeliveryTimeLinks](docs/Model/DeliveryTimeLinks.md)
 - [DeliveryTimeRelationships](docs/Model/DeliveryTimeRelationships.md)
 - [DeliveryTimeRelationshipsProducts](docs/Model/DeliveryTimeRelationshipsProducts.md)
 - [DeliveryTimeRelationshipsProductsData](docs/Model/DeliveryTimeRelationshipsProductsData.md)
 - [DeliveryTimeRelationshipsProductsLinks](docs/Model/DeliveryTimeRelationshipsProductsLinks.md)
 - [DeliveryTimeRelationshipsShippingMethods](docs/Model/DeliveryTimeRelationshipsShippingMethods.md)
 - [DeliveryTimeRelationshipsShippingMethodsData](docs/Model/DeliveryTimeRelationshipsShippingMethodsData.md)
 - [DeliveryTimeRelationshipsShippingMethodsLinks](docs/Model/DeliveryTimeRelationshipsShippingMethodsLinks.md)
 - [Document](docs/Model/Document.md)
 - [DocumentAttributes](docs/Model/DocumentAttributes.md)
 - [DocumentBaseConfig](docs/Model/DocumentBaseConfig.md)
 - [DocumentBaseConfigAttributes](docs/Model/DocumentBaseConfigAttributes.md)
 - [DocumentBaseConfigFlat](docs/Model/DocumentBaseConfigFlat.md)
 - [DocumentBaseConfigLinks](docs/Model/DocumentBaseConfigLinks.md)
 - [DocumentBaseConfigRelationships](docs/Model/DocumentBaseConfigRelationships.md)
 - [DocumentBaseConfigRelationshipsDocumentType](docs/Model/DocumentBaseConfigRelationshipsDocumentType.md)
 - [DocumentBaseConfigRelationshipsDocumentTypeLinks](docs/Model/DocumentBaseConfigRelationshipsDocumentTypeLinks.md)
 - [DocumentBaseConfigRelationshipsLogo](docs/Model/DocumentBaseConfigRelationshipsLogo.md)
 - [DocumentBaseConfigRelationshipsLogoLinks](docs/Model/DocumentBaseConfigRelationshipsLogoLinks.md)
 - [DocumentBaseConfigRelationshipsSalesChannels](docs/Model/DocumentBaseConfigRelationshipsSalesChannels.md)
 - [DocumentBaseConfigRelationshipsSalesChannelsData](docs/Model/DocumentBaseConfigRelationshipsSalesChannelsData.md)
 - [DocumentBaseConfigRelationshipsSalesChannelsLinks](docs/Model/DocumentBaseConfigRelationshipsSalesChannelsLinks.md)
 - [DocumentBaseConfigSalesChannel](docs/Model/DocumentBaseConfigSalesChannel.md)
 - [DocumentBaseConfigSalesChannelAttributes](docs/Model/DocumentBaseConfigSalesChannelAttributes.md)
 - [DocumentBaseConfigSalesChannelFlat](docs/Model/DocumentBaseConfigSalesChannelFlat.md)
 - [DocumentBaseConfigSalesChannelLinks](docs/Model/DocumentBaseConfigSalesChannelLinks.md)
 - [DocumentBaseConfigSalesChannelRelationships](docs/Model/DocumentBaseConfigSalesChannelRelationships.md)
 - [DocumentBaseConfigSalesChannelRelationshipsDocumentBaseConfig](docs/Model/DocumentBaseConfigSalesChannelRelationshipsDocumentBaseConfig.md)
 - [DocumentBaseConfigSalesChannelRelationshipsDocumentBaseConfigData](docs/Model/DocumentBaseConfigSalesChannelRelationshipsDocumentBaseConfigData.md)
 - [DocumentBaseConfigSalesChannelRelationshipsDocumentBaseConfigLinks](docs/Model/DocumentBaseConfigSalesChannelRelationshipsDocumentBaseConfigLinks.md)
 - [DocumentBaseConfigSalesChannelRelationshipsDocumentType](docs/Model/DocumentBaseConfigSalesChannelRelationshipsDocumentType.md)
 - [DocumentBaseConfigSalesChannelRelationshipsDocumentTypeLinks](docs/Model/DocumentBaseConfigSalesChannelRelationshipsDocumentTypeLinks.md)
 - [DocumentBaseConfigSalesChannelRelationshipsSalesChannel](docs/Model/DocumentBaseConfigSalesChannelRelationshipsSalesChannel.md)
 - [DocumentBaseConfigSalesChannelRelationshipsSalesChannelLinks](docs/Model/DocumentBaseConfigSalesChannelRelationshipsSalesChannelLinks.md)
 - [DocumentFlat](docs/Model/DocumentFlat.md)
 - [DocumentLinks](docs/Model/DocumentLinks.md)
 - [DocumentRelationships](docs/Model/DocumentRelationships.md)
 - [DocumentRelationshipsDependentDocuments](docs/Model/DocumentRelationshipsDependentDocuments.md)
 - [DocumentRelationshipsDependentDocumentsData](docs/Model/DocumentRelationshipsDependentDocumentsData.md)
 - [DocumentRelationshipsDependentDocumentsLinks](docs/Model/DocumentRelationshipsDependentDocumentsLinks.md)
 - [DocumentRelationshipsDocumentMediaFile](docs/Model/DocumentRelationshipsDocumentMediaFile.md)
 - [DocumentRelationshipsDocumentMediaFileLinks](docs/Model/DocumentRelationshipsDocumentMediaFileLinks.md)
 - [DocumentRelationshipsDocumentType](docs/Model/DocumentRelationshipsDocumentType.md)
 - [DocumentRelationshipsDocumentTypeData](docs/Model/DocumentRelationshipsDocumentTypeData.md)
 - [DocumentRelationshipsDocumentTypeLinks](docs/Model/DocumentRelationshipsDocumentTypeLinks.md)
 - [DocumentRelationshipsOrder](docs/Model/DocumentRelationshipsOrder.md)
 - [DocumentRelationshipsOrderData](docs/Model/DocumentRelationshipsOrderData.md)
 - [DocumentRelationshipsOrderLinks](docs/Model/DocumentRelationshipsOrderLinks.md)
 - [DocumentRelationshipsReferencedDocument](docs/Model/DocumentRelationshipsReferencedDocument.md)
 - [DocumentRelationshipsReferencedDocumentData](docs/Model/DocumentRelationshipsReferencedDocumentData.md)
 - [DocumentRelationshipsReferencedDocumentLinks](docs/Model/DocumentRelationshipsReferencedDocumentLinks.md)
 - [DocumentType](docs/Model/DocumentType.md)
 - [DocumentTypeAttributes](docs/Model/DocumentTypeAttributes.md)
 - [DocumentTypeFlat](docs/Model/DocumentTypeFlat.md)
 - [DocumentTypeLinks](docs/Model/DocumentTypeLinks.md)
 - [DocumentTypeRelationships](docs/Model/DocumentTypeRelationships.md)
 - [DocumentTypeRelationshipsDocumentBaseConfigSalesChannels](docs/Model/DocumentTypeRelationshipsDocumentBaseConfigSalesChannels.md)
 - [DocumentTypeRelationshipsDocumentBaseConfigSalesChannelsData](docs/Model/DocumentTypeRelationshipsDocumentBaseConfigSalesChannelsData.md)
 - [DocumentTypeRelationshipsDocumentBaseConfigSalesChannelsLinks](docs/Model/DocumentTypeRelationshipsDocumentBaseConfigSalesChannelsLinks.md)
 - [DocumentTypeRelationshipsDocumentBaseConfigs](docs/Model/DocumentTypeRelationshipsDocumentBaseConfigs.md)
 - [DocumentTypeRelationshipsDocumentBaseConfigsData](docs/Model/DocumentTypeRelationshipsDocumentBaseConfigsData.md)
 - [DocumentTypeRelationshipsDocumentBaseConfigsLinks](docs/Model/DocumentTypeRelationshipsDocumentBaseConfigsLinks.md)
 - [DocumentTypeRelationshipsDocuments](docs/Model/DocumentTypeRelationshipsDocuments.md)
 - [DocumentTypeRelationshipsDocumentsData](docs/Model/DocumentTypeRelationshipsDocumentsData.md)
 - [DocumentTypeRelationshipsDocumentsLinks](docs/Model/DocumentTypeRelationshipsDocumentsLinks.md)
 - [Error](docs/Model/Error.md)
 - [ErrorSource](docs/Model/ErrorSource.md)
 - [EventAction](docs/Model/EventAction.md)
 - [EventActionAttributes](docs/Model/EventActionAttributes.md)
 - [EventActionFlat](docs/Model/EventActionFlat.md)
 - [EventActionLinks](docs/Model/EventActionLinks.md)
 - [Failure](docs/Model/Failure.md)
 - [ImportExportFile](docs/Model/ImportExportFile.md)
 - [ImportExportFileAttributes](docs/Model/ImportExportFileAttributes.md)
 - [ImportExportFileFlat](docs/Model/ImportExportFileFlat.md)
 - [ImportExportFileLinks](docs/Model/ImportExportFileLinks.md)
 - [ImportExportFileRelationships](docs/Model/ImportExportFileRelationships.md)
 - [ImportExportFileRelationshipsLog](docs/Model/ImportExportFileRelationshipsLog.md)
 - [ImportExportFileRelationshipsLogData](docs/Model/ImportExportFileRelationshipsLogData.md)
 - [ImportExportFileRelationshipsLogLinks](docs/Model/ImportExportFileRelationshipsLogLinks.md)
 - [ImportExportLog](docs/Model/ImportExportLog.md)
 - [ImportExportLogAttributes](docs/Model/ImportExportLogAttributes.md)
 - [ImportExportLogFlat](docs/Model/ImportExportLogFlat.md)
 - [ImportExportLogLinks](docs/Model/ImportExportLogLinks.md)
 - [ImportExportLogRelationships](docs/Model/ImportExportLogRelationships.md)
 - [ImportExportLogRelationshipsFile](docs/Model/ImportExportLogRelationshipsFile.md)
 - [ImportExportLogRelationshipsFileData](docs/Model/ImportExportLogRelationshipsFileData.md)
 - [ImportExportLogRelationshipsFileLinks](docs/Model/ImportExportLogRelationshipsFileLinks.md)
 - [ImportExportLogRelationshipsProfile](docs/Model/ImportExportLogRelationshipsProfile.md)
 - [ImportExportLogRelationshipsProfileData](docs/Model/ImportExportLogRelationshipsProfileData.md)
 - [ImportExportLogRelationshipsProfileLinks](docs/Model/ImportExportLogRelationshipsProfileLinks.md)
 - [ImportExportLogRelationshipsUser](docs/Model/ImportExportLogRelationshipsUser.md)
 - [ImportExportLogRelationshipsUserData](docs/Model/ImportExportLogRelationshipsUserData.md)
 - [ImportExportLogRelationshipsUserLinks](docs/Model/ImportExportLogRelationshipsUserLinks.md)
 - [ImportExportProfile](docs/Model/ImportExportProfile.md)
 - [ImportExportProfileAttributes](docs/Model/ImportExportProfileAttributes.md)
 - [ImportExportProfileFlat](docs/Model/ImportExportProfileFlat.md)
 - [ImportExportProfileLinks](docs/Model/ImportExportProfileLinks.md)
 - [ImportExportProfileRelationships](docs/Model/ImportExportProfileRelationships.md)
 - [ImportExportProfileRelationshipsImportExportLogs](docs/Model/ImportExportProfileRelationshipsImportExportLogs.md)
 - [ImportExportProfileRelationshipsImportExportLogsData](docs/Model/ImportExportProfileRelationshipsImportExportLogsData.md)
 - [ImportExportProfileRelationshipsImportExportLogsLinks](docs/Model/ImportExportProfileRelationshipsImportExportLogsLinks.md)
 - [Info](docs/Model/Info.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [InlineResponse2001](docs/Model/InlineResponse2001.md)
 - [InlineResponse20010](docs/Model/InlineResponse20010.md)
 - [InlineResponse200100](docs/Model/InlineResponse200100.md)
 - [InlineResponse200101](docs/Model/InlineResponse200101.md)
 - [InlineResponse200102](docs/Model/InlineResponse200102.md)
 - [InlineResponse200103](docs/Model/InlineResponse200103.md)
 - [InlineResponse200104](docs/Model/InlineResponse200104.md)
 - [InlineResponse200105](docs/Model/InlineResponse200105.md)
 - [InlineResponse200106](docs/Model/InlineResponse200106.md)
 - [InlineResponse200107](docs/Model/InlineResponse200107.md)
 - [InlineResponse200108](docs/Model/InlineResponse200108.md)
 - [InlineResponse200109](docs/Model/InlineResponse200109.md)
 - [InlineResponse20011](docs/Model/InlineResponse20011.md)
 - [InlineResponse200110](docs/Model/InlineResponse200110.md)
 - [InlineResponse200111](docs/Model/InlineResponse200111.md)
 - [InlineResponse200112](docs/Model/InlineResponse200112.md)
 - [InlineResponse200113](docs/Model/InlineResponse200113.md)
 - [InlineResponse200114](docs/Model/InlineResponse200114.md)
 - [InlineResponse200115](docs/Model/InlineResponse200115.md)
 - [InlineResponse200116](docs/Model/InlineResponse200116.md)
 - [InlineResponse200117](docs/Model/InlineResponse200117.md)
 - [InlineResponse200118](docs/Model/InlineResponse200118.md)
 - [InlineResponse200119](docs/Model/InlineResponse200119.md)
 - [InlineResponse20012](docs/Model/InlineResponse20012.md)
 - [InlineResponse200120](docs/Model/InlineResponse200120.md)
 - [InlineResponse200121](docs/Model/InlineResponse200121.md)
 - [InlineResponse200122](docs/Model/InlineResponse200122.md)
 - [InlineResponse200123](docs/Model/InlineResponse200123.md)
 - [InlineResponse200124](docs/Model/InlineResponse200124.md)
 - [InlineResponse200125](docs/Model/InlineResponse200125.md)
 - [InlineResponse200126](docs/Model/InlineResponse200126.md)
 - [InlineResponse200127](docs/Model/InlineResponse200127.md)
 - [InlineResponse200128](docs/Model/InlineResponse200128.md)
 - [InlineResponse200129](docs/Model/InlineResponse200129.md)
 - [InlineResponse20013](docs/Model/InlineResponse20013.md)
 - [InlineResponse200130](docs/Model/InlineResponse200130.md)
 - [InlineResponse200131](docs/Model/InlineResponse200131.md)
 - [InlineResponse200132](docs/Model/InlineResponse200132.md)
 - [InlineResponse200133](docs/Model/InlineResponse200133.md)
 - [InlineResponse200134](docs/Model/InlineResponse200134.md)
 - [InlineResponse200135](docs/Model/InlineResponse200135.md)
 - [InlineResponse200136](docs/Model/InlineResponse200136.md)
 - [InlineResponse200137](docs/Model/InlineResponse200137.md)
 - [InlineResponse200138](docs/Model/InlineResponse200138.md)
 - [InlineResponse200139](docs/Model/InlineResponse200139.md)
 - [InlineResponse20014](docs/Model/InlineResponse20014.md)
 - [InlineResponse200140](docs/Model/InlineResponse200140.md)
 - [InlineResponse200141](docs/Model/InlineResponse200141.md)
 - [InlineResponse200142](docs/Model/InlineResponse200142.md)
 - [InlineResponse200143](docs/Model/InlineResponse200143.md)
 - [InlineResponse200144](docs/Model/InlineResponse200144.md)
 - [InlineResponse200145](docs/Model/InlineResponse200145.md)
 - [InlineResponse200146](docs/Model/InlineResponse200146.md)
 - [InlineResponse200147](docs/Model/InlineResponse200147.md)
 - [InlineResponse200148](docs/Model/InlineResponse200148.md)
 - [InlineResponse200149](docs/Model/InlineResponse200149.md)
 - [InlineResponse20015](docs/Model/InlineResponse20015.md)
 - [InlineResponse200150](docs/Model/InlineResponse200150.md)
 - [InlineResponse200151](docs/Model/InlineResponse200151.md)
 - [InlineResponse200152](docs/Model/InlineResponse200152.md)
 - [InlineResponse200153](docs/Model/InlineResponse200153.md)
 - [InlineResponse200154](docs/Model/InlineResponse200154.md)
 - [InlineResponse200155](docs/Model/InlineResponse200155.md)
 - [InlineResponse200156](docs/Model/InlineResponse200156.md)
 - [InlineResponse200157](docs/Model/InlineResponse200157.md)
 - [InlineResponse200158](docs/Model/InlineResponse200158.md)
 - [InlineResponse200159](docs/Model/InlineResponse200159.md)
 - [InlineResponse20016](docs/Model/InlineResponse20016.md)
 - [InlineResponse200160](docs/Model/InlineResponse200160.md)
 - [InlineResponse200161](docs/Model/InlineResponse200161.md)
 - [InlineResponse200162](docs/Model/InlineResponse200162.md)
 - [InlineResponse200163](docs/Model/InlineResponse200163.md)
 - [InlineResponse200164](docs/Model/InlineResponse200164.md)
 - [InlineResponse200165](docs/Model/InlineResponse200165.md)
 - [InlineResponse200166](docs/Model/InlineResponse200166.md)
 - [InlineResponse200167](docs/Model/InlineResponse200167.md)
 - [InlineResponse200168](docs/Model/InlineResponse200168.md)
 - [InlineResponse200169](docs/Model/InlineResponse200169.md)
 - [InlineResponse20017](docs/Model/InlineResponse20017.md)
 - [InlineResponse200170](docs/Model/InlineResponse200170.md)
 - [InlineResponse200171](docs/Model/InlineResponse200171.md)
 - [InlineResponse200172](docs/Model/InlineResponse200172.md)
 - [InlineResponse200173](docs/Model/InlineResponse200173.md)
 - [InlineResponse200174](docs/Model/InlineResponse200174.md)
 - [InlineResponse200175](docs/Model/InlineResponse200175.md)
 - [InlineResponse200176](docs/Model/InlineResponse200176.md)
 - [InlineResponse200177](docs/Model/InlineResponse200177.md)
 - [InlineResponse200178](docs/Model/InlineResponse200178.md)
 - [InlineResponse200179](docs/Model/InlineResponse200179.md)
 - [InlineResponse20018](docs/Model/InlineResponse20018.md)
 - [InlineResponse200180](docs/Model/InlineResponse200180.md)
 - [InlineResponse200181](docs/Model/InlineResponse200181.md)
 - [InlineResponse200182](docs/Model/InlineResponse200182.md)
 - [InlineResponse200183](docs/Model/InlineResponse200183.md)
 - [InlineResponse200184](docs/Model/InlineResponse200184.md)
 - [InlineResponse200185](docs/Model/InlineResponse200185.md)
 - [InlineResponse200186](docs/Model/InlineResponse200186.md)
 - [InlineResponse200187](docs/Model/InlineResponse200187.md)
 - [InlineResponse200188](docs/Model/InlineResponse200188.md)
 - [InlineResponse200189](docs/Model/InlineResponse200189.md)
 - [InlineResponse20019](docs/Model/InlineResponse20019.md)
 - [InlineResponse200190](docs/Model/InlineResponse200190.md)
 - [InlineResponse200191](docs/Model/InlineResponse200191.md)
 - [InlineResponse200192](docs/Model/InlineResponse200192.md)
 - [InlineResponse200193](docs/Model/InlineResponse200193.md)
 - [InlineResponse200194](docs/Model/InlineResponse200194.md)
 - [InlineResponse200195](docs/Model/InlineResponse200195.md)
 - [InlineResponse200196](docs/Model/InlineResponse200196.md)
 - [InlineResponse200197](docs/Model/InlineResponse200197.md)
 - [InlineResponse200198](docs/Model/InlineResponse200198.md)
 - [InlineResponse200199](docs/Model/InlineResponse200199.md)
 - [InlineResponse2002](docs/Model/InlineResponse2002.md)
 - [InlineResponse20020](docs/Model/InlineResponse20020.md)
 - [InlineResponse200200](docs/Model/InlineResponse200200.md)
 - [InlineResponse200201](docs/Model/InlineResponse200201.md)
 - [InlineResponse200202](docs/Model/InlineResponse200202.md)
 - [InlineResponse200203](docs/Model/InlineResponse200203.md)
 - [InlineResponse200204](docs/Model/InlineResponse200204.md)
 - [InlineResponse200205](docs/Model/InlineResponse200205.md)
 - [InlineResponse200206](docs/Model/InlineResponse200206.md)
 - [InlineResponse200207](docs/Model/InlineResponse200207.md)
 - [InlineResponse200208](docs/Model/InlineResponse200208.md)
 - [InlineResponse200209](docs/Model/InlineResponse200209.md)
 - [InlineResponse20021](docs/Model/InlineResponse20021.md)
 - [InlineResponse200210](docs/Model/InlineResponse200210.md)
 - [InlineResponse200211](docs/Model/InlineResponse200211.md)
 - [InlineResponse200212](docs/Model/InlineResponse200212.md)
 - [InlineResponse200213](docs/Model/InlineResponse200213.md)
 - [InlineResponse200214](docs/Model/InlineResponse200214.md)
 - [InlineResponse200215](docs/Model/InlineResponse200215.md)
 - [InlineResponse200216](docs/Model/InlineResponse200216.md)
 - [InlineResponse200217](docs/Model/InlineResponse200217.md)
 - [InlineResponse200218](docs/Model/InlineResponse200218.md)
 - [InlineResponse200219](docs/Model/InlineResponse200219.md)
 - [InlineResponse20022](docs/Model/InlineResponse20022.md)
 - [InlineResponse200220](docs/Model/InlineResponse200220.md)
 - [InlineResponse200221](docs/Model/InlineResponse200221.md)
 - [InlineResponse200222](docs/Model/InlineResponse200222.md)
 - [InlineResponse200223](docs/Model/InlineResponse200223.md)
 - [InlineResponse200224](docs/Model/InlineResponse200224.md)
 - [InlineResponse200225](docs/Model/InlineResponse200225.md)
 - [InlineResponse200226](docs/Model/InlineResponse200226.md)
 - [InlineResponse200227](docs/Model/InlineResponse200227.md)
 - [InlineResponse200228](docs/Model/InlineResponse200228.md)
 - [InlineResponse200229](docs/Model/InlineResponse200229.md)
 - [InlineResponse20023](docs/Model/InlineResponse20023.md)
 - [InlineResponse200230](docs/Model/InlineResponse200230.md)
 - [InlineResponse200231](docs/Model/InlineResponse200231.md)
 - [InlineResponse200232](docs/Model/InlineResponse200232.md)
 - [InlineResponse200233](docs/Model/InlineResponse200233.md)
 - [InlineResponse200234](docs/Model/InlineResponse200234.md)
 - [InlineResponse200235](docs/Model/InlineResponse200235.md)
 - [InlineResponse200236](docs/Model/InlineResponse200236.md)
 - [InlineResponse200237](docs/Model/InlineResponse200237.md)
 - [InlineResponse200238](docs/Model/InlineResponse200238.md)
 - [InlineResponse200239](docs/Model/InlineResponse200239.md)
 - [InlineResponse20024](docs/Model/InlineResponse20024.md)
 - [InlineResponse200240](docs/Model/InlineResponse200240.md)
 - [InlineResponse200241](docs/Model/InlineResponse200241.md)
 - [InlineResponse200242](docs/Model/InlineResponse200242.md)
 - [InlineResponse200243](docs/Model/InlineResponse200243.md)
 - [InlineResponse200244](docs/Model/InlineResponse200244.md)
 - [InlineResponse200245](docs/Model/InlineResponse200245.md)
 - [InlineResponse200246](docs/Model/InlineResponse200246.md)
 - [InlineResponse200247](docs/Model/InlineResponse200247.md)
 - [InlineResponse200248](docs/Model/InlineResponse200248.md)
 - [InlineResponse200249](docs/Model/InlineResponse200249.md)
 - [InlineResponse20025](docs/Model/InlineResponse20025.md)
 - [InlineResponse200250](docs/Model/InlineResponse200250.md)
 - [InlineResponse200251](docs/Model/InlineResponse200251.md)
 - [InlineResponse200252](docs/Model/InlineResponse200252.md)
 - [InlineResponse200253](docs/Model/InlineResponse200253.md)
 - [InlineResponse200254](docs/Model/InlineResponse200254.md)
 - [InlineResponse200255](docs/Model/InlineResponse200255.md)
 - [InlineResponse200256](docs/Model/InlineResponse200256.md)
 - [InlineResponse200257](docs/Model/InlineResponse200257.md)
 - [InlineResponse200258](docs/Model/InlineResponse200258.md)
 - [InlineResponse200259](docs/Model/InlineResponse200259.md)
 - [InlineResponse20026](docs/Model/InlineResponse20026.md)
 - [InlineResponse200260](docs/Model/InlineResponse200260.md)
 - [InlineResponse200261](docs/Model/InlineResponse200261.md)
 - [InlineResponse200262](docs/Model/InlineResponse200262.md)
 - [InlineResponse200263](docs/Model/InlineResponse200263.md)
 - [InlineResponse200264](docs/Model/InlineResponse200264.md)
 - [InlineResponse200265](docs/Model/InlineResponse200265.md)
 - [InlineResponse200266](docs/Model/InlineResponse200266.md)
 - [InlineResponse200267](docs/Model/InlineResponse200267.md)
 - [InlineResponse200268](docs/Model/InlineResponse200268.md)
 - [InlineResponse200269](docs/Model/InlineResponse200269.md)
 - [InlineResponse20027](docs/Model/InlineResponse20027.md)
 - [InlineResponse200270](docs/Model/InlineResponse200270.md)
 - [InlineResponse200271](docs/Model/InlineResponse200271.md)
 - [InlineResponse200272](docs/Model/InlineResponse200272.md)
 - [InlineResponse200273](docs/Model/InlineResponse200273.md)
 - [InlineResponse200274](docs/Model/InlineResponse200274.md)
 - [InlineResponse200275](docs/Model/InlineResponse200275.md)
 - [InlineResponse200276](docs/Model/InlineResponse200276.md)
 - [InlineResponse200277](docs/Model/InlineResponse200277.md)
 - [InlineResponse200278](docs/Model/InlineResponse200278.md)
 - [InlineResponse200279](docs/Model/InlineResponse200279.md)
 - [InlineResponse20028](docs/Model/InlineResponse20028.md)
 - [InlineResponse200280](docs/Model/InlineResponse200280.md)
 - [InlineResponse200281](docs/Model/InlineResponse200281.md)
 - [InlineResponse200282](docs/Model/InlineResponse200282.md)
 - [InlineResponse200283](docs/Model/InlineResponse200283.md)
 - [InlineResponse200284](docs/Model/InlineResponse200284.md)
 - [InlineResponse200285](docs/Model/InlineResponse200285.md)
 - [InlineResponse200286](docs/Model/InlineResponse200286.md)
 - [InlineResponse200287](docs/Model/InlineResponse200287.md)
 - [InlineResponse200288](docs/Model/InlineResponse200288.md)
 - [InlineResponse200289](docs/Model/InlineResponse200289.md)
 - [InlineResponse20029](docs/Model/InlineResponse20029.md)
 - [InlineResponse200290](docs/Model/InlineResponse200290.md)
 - [InlineResponse200291](docs/Model/InlineResponse200291.md)
 - [InlineResponse200292](docs/Model/InlineResponse200292.md)
 - [InlineResponse200293](docs/Model/InlineResponse200293.md)
 - [InlineResponse200294](docs/Model/InlineResponse200294.md)
 - [InlineResponse200295](docs/Model/InlineResponse200295.md)
 - [InlineResponse200296](docs/Model/InlineResponse200296.md)
 - [InlineResponse200297](docs/Model/InlineResponse200297.md)
 - [InlineResponse200298](docs/Model/InlineResponse200298.md)
 - [InlineResponse200299](docs/Model/InlineResponse200299.md)
 - [InlineResponse2003](docs/Model/InlineResponse2003.md)
 - [InlineResponse20030](docs/Model/InlineResponse20030.md)
 - [InlineResponse200300](docs/Model/InlineResponse200300.md)
 - [InlineResponse200301](docs/Model/InlineResponse200301.md)
 - [InlineResponse200302](docs/Model/InlineResponse200302.md)
 - [InlineResponse200303](docs/Model/InlineResponse200303.md)
 - [InlineResponse200304](docs/Model/InlineResponse200304.md)
 - [InlineResponse200305](docs/Model/InlineResponse200305.md)
 - [InlineResponse200306](docs/Model/InlineResponse200306.md)
 - [InlineResponse200307](docs/Model/InlineResponse200307.md)
 - [InlineResponse200308](docs/Model/InlineResponse200308.md)
 - [InlineResponse200309](docs/Model/InlineResponse200309.md)
 - [InlineResponse20031](docs/Model/InlineResponse20031.md)
 - [InlineResponse200310](docs/Model/InlineResponse200310.md)
 - [InlineResponse200311](docs/Model/InlineResponse200311.md)
 - [InlineResponse200312](docs/Model/InlineResponse200312.md)
 - [InlineResponse200313](docs/Model/InlineResponse200313.md)
 - [InlineResponse200314](docs/Model/InlineResponse200314.md)
 - [InlineResponse200315](docs/Model/InlineResponse200315.md)
 - [InlineResponse20032](docs/Model/InlineResponse20032.md)
 - [InlineResponse20033](docs/Model/InlineResponse20033.md)
 - [InlineResponse20034](docs/Model/InlineResponse20034.md)
 - [InlineResponse20035](docs/Model/InlineResponse20035.md)
 - [InlineResponse20036](docs/Model/InlineResponse20036.md)
 - [InlineResponse20037](docs/Model/InlineResponse20037.md)
 - [InlineResponse20038](docs/Model/InlineResponse20038.md)
 - [InlineResponse20039](docs/Model/InlineResponse20039.md)
 - [InlineResponse2004](docs/Model/InlineResponse2004.md)
 - [InlineResponse20040](docs/Model/InlineResponse20040.md)
 - [InlineResponse20041](docs/Model/InlineResponse20041.md)
 - [InlineResponse20042](docs/Model/InlineResponse20042.md)
 - [InlineResponse20043](docs/Model/InlineResponse20043.md)
 - [InlineResponse20044](docs/Model/InlineResponse20044.md)
 - [InlineResponse20045](docs/Model/InlineResponse20045.md)
 - [InlineResponse20046](docs/Model/InlineResponse20046.md)
 - [InlineResponse20047](docs/Model/InlineResponse20047.md)
 - [InlineResponse20048](docs/Model/InlineResponse20048.md)
 - [InlineResponse20049](docs/Model/InlineResponse20049.md)
 - [InlineResponse2005](docs/Model/InlineResponse2005.md)
 - [InlineResponse20050](docs/Model/InlineResponse20050.md)
 - [InlineResponse20051](docs/Model/InlineResponse20051.md)
 - [InlineResponse20052](docs/Model/InlineResponse20052.md)
 - [InlineResponse20053](docs/Model/InlineResponse20053.md)
 - [InlineResponse20054](docs/Model/InlineResponse20054.md)
 - [InlineResponse20055](docs/Model/InlineResponse20055.md)
 - [InlineResponse20056](docs/Model/InlineResponse20056.md)
 - [InlineResponse20057](docs/Model/InlineResponse20057.md)
 - [InlineResponse20058](docs/Model/InlineResponse20058.md)
 - [InlineResponse20059](docs/Model/InlineResponse20059.md)
 - [InlineResponse2006](docs/Model/InlineResponse2006.md)
 - [InlineResponse20060](docs/Model/InlineResponse20060.md)
 - [InlineResponse20061](docs/Model/InlineResponse20061.md)
 - [InlineResponse20062](docs/Model/InlineResponse20062.md)
 - [InlineResponse20063](docs/Model/InlineResponse20063.md)
 - [InlineResponse20064](docs/Model/InlineResponse20064.md)
 - [InlineResponse20065](docs/Model/InlineResponse20065.md)
 - [InlineResponse20066](docs/Model/InlineResponse20066.md)
 - [InlineResponse20067](docs/Model/InlineResponse20067.md)
 - [InlineResponse20068](docs/Model/InlineResponse20068.md)
 - [InlineResponse20069](docs/Model/InlineResponse20069.md)
 - [InlineResponse2007](docs/Model/InlineResponse2007.md)
 - [InlineResponse20070](docs/Model/InlineResponse20070.md)
 - [InlineResponse20071](docs/Model/InlineResponse20071.md)
 - [InlineResponse20072](docs/Model/InlineResponse20072.md)
 - [InlineResponse20073](docs/Model/InlineResponse20073.md)
 - [InlineResponse20074](docs/Model/InlineResponse20074.md)
 - [InlineResponse20075](docs/Model/InlineResponse20075.md)
 - [InlineResponse20076](docs/Model/InlineResponse20076.md)
 - [InlineResponse20077](docs/Model/InlineResponse20077.md)
 - [InlineResponse20078](docs/Model/InlineResponse20078.md)
 - [InlineResponse20079](docs/Model/InlineResponse20079.md)
 - [InlineResponse2008](docs/Model/InlineResponse2008.md)
 - [InlineResponse20080](docs/Model/InlineResponse20080.md)
 - [InlineResponse20081](docs/Model/InlineResponse20081.md)
 - [InlineResponse20082](docs/Model/InlineResponse20082.md)
 - [InlineResponse20083](docs/Model/InlineResponse20083.md)
 - [InlineResponse20084](docs/Model/InlineResponse20084.md)
 - [InlineResponse20085](docs/Model/InlineResponse20085.md)
 - [InlineResponse20086](docs/Model/InlineResponse20086.md)
 - [InlineResponse20087](docs/Model/InlineResponse20087.md)
 - [InlineResponse20088](docs/Model/InlineResponse20088.md)
 - [InlineResponse20089](docs/Model/InlineResponse20089.md)
 - [InlineResponse2009](docs/Model/InlineResponse2009.md)
 - [InlineResponse20090](docs/Model/InlineResponse20090.md)
 - [InlineResponse20091](docs/Model/InlineResponse20091.md)
 - [InlineResponse20092](docs/Model/InlineResponse20092.md)
 - [InlineResponse20093](docs/Model/InlineResponse20093.md)
 - [InlineResponse20094](docs/Model/InlineResponse20094.md)
 - [InlineResponse20095](docs/Model/InlineResponse20095.md)
 - [InlineResponse20096](docs/Model/InlineResponse20096.md)
 - [InlineResponse20097](docs/Model/InlineResponse20097.md)
 - [InlineResponse20098](docs/Model/InlineResponse20098.md)
 - [InlineResponse20099](docs/Model/InlineResponse20099.md)
 - [Integration](docs/Model/Integration.md)
 - [IntegrationAttributes](docs/Model/IntegrationAttributes.md)
 - [IntegrationFlat](docs/Model/IntegrationFlat.md)
 - [IntegrationLinks](docs/Model/IntegrationLinks.md)
 - [Jsonapi](docs/Model/Jsonapi.md)
 - [Language](docs/Model/Language.md)
 - [LanguageAttributes](docs/Model/LanguageAttributes.md)
 - [LanguageFlat](docs/Model/LanguageFlat.md)
 - [LanguageLinks](docs/Model/LanguageLinks.md)
 - [LanguageRelationships](docs/Model/LanguageRelationships.md)
 - [LanguageRelationshipsChildren](docs/Model/LanguageRelationshipsChildren.md)
 - [LanguageRelationshipsChildrenData](docs/Model/LanguageRelationshipsChildrenData.md)
 - [LanguageRelationshipsChildrenLinks](docs/Model/LanguageRelationshipsChildrenLinks.md)
 - [LanguageRelationshipsCustomers](docs/Model/LanguageRelationshipsCustomers.md)
 - [LanguageRelationshipsCustomersData](docs/Model/LanguageRelationshipsCustomersData.md)
 - [LanguageRelationshipsCustomersLinks](docs/Model/LanguageRelationshipsCustomersLinks.md)
 - [LanguageRelationshipsLocale](docs/Model/LanguageRelationshipsLocale.md)
 - [LanguageRelationshipsLocaleData](docs/Model/LanguageRelationshipsLocaleData.md)
 - [LanguageRelationshipsLocaleLinks](docs/Model/LanguageRelationshipsLocaleLinks.md)
 - [LanguageRelationshipsNewsletterRecipients](docs/Model/LanguageRelationshipsNewsletterRecipients.md)
 - [LanguageRelationshipsNewsletterRecipientsData](docs/Model/LanguageRelationshipsNewsletterRecipientsData.md)
 - [LanguageRelationshipsNewsletterRecipientsLinks](docs/Model/LanguageRelationshipsNewsletterRecipientsLinks.md)
 - [LanguageRelationshipsOrders](docs/Model/LanguageRelationshipsOrders.md)
 - [LanguageRelationshipsOrdersData](docs/Model/LanguageRelationshipsOrdersData.md)
 - [LanguageRelationshipsOrdersLinks](docs/Model/LanguageRelationshipsOrdersLinks.md)
 - [LanguageRelationshipsParent](docs/Model/LanguageRelationshipsParent.md)
 - [LanguageRelationshipsParentLinks](docs/Model/LanguageRelationshipsParentLinks.md)
 - [LanguageRelationshipsProductKeywordDictionaries](docs/Model/LanguageRelationshipsProductKeywordDictionaries.md)
 - [LanguageRelationshipsProductKeywordDictionariesData](docs/Model/LanguageRelationshipsProductKeywordDictionariesData.md)
 - [LanguageRelationshipsProductKeywordDictionariesLinks](docs/Model/LanguageRelationshipsProductKeywordDictionariesLinks.md)
 - [LanguageRelationshipsProductReviews](docs/Model/LanguageRelationshipsProductReviews.md)
 - [LanguageRelationshipsProductReviewsData](docs/Model/LanguageRelationshipsProductReviewsData.md)
 - [LanguageRelationshipsProductReviewsLinks](docs/Model/LanguageRelationshipsProductReviewsLinks.md)
 - [LanguageRelationshipsProductSearchKeywords](docs/Model/LanguageRelationshipsProductSearchKeywords.md)
 - [LanguageRelationshipsProductSearchKeywordsData](docs/Model/LanguageRelationshipsProductSearchKeywordsData.md)
 - [LanguageRelationshipsProductSearchKeywordsLinks](docs/Model/LanguageRelationshipsProductSearchKeywordsLinks.md)
 - [LanguageRelationshipsSalesChannelDefaultAssignments](docs/Model/LanguageRelationshipsSalesChannelDefaultAssignments.md)
 - [LanguageRelationshipsSalesChannelDefaultAssignmentsData](docs/Model/LanguageRelationshipsSalesChannelDefaultAssignmentsData.md)
 - [LanguageRelationshipsSalesChannelDefaultAssignmentsLinks](docs/Model/LanguageRelationshipsSalesChannelDefaultAssignmentsLinks.md)
 - [LanguageRelationshipsSalesChannelDomains](docs/Model/LanguageRelationshipsSalesChannelDomains.md)
 - [LanguageRelationshipsSalesChannelDomainsData](docs/Model/LanguageRelationshipsSalesChannelDomainsData.md)
 - [LanguageRelationshipsSalesChannelDomainsLinks](docs/Model/LanguageRelationshipsSalesChannelDomainsLinks.md)
 - [LanguageRelationshipsSalesChannels](docs/Model/LanguageRelationshipsSalesChannels.md)
 - [LanguageRelationshipsSalesChannelsData](docs/Model/LanguageRelationshipsSalesChannelsData.md)
 - [LanguageRelationshipsSalesChannelsLinks](docs/Model/LanguageRelationshipsSalesChannelsLinks.md)
 - [LanguageRelationshipsTranslationCode](docs/Model/LanguageRelationshipsTranslationCode.md)
 - [LanguageRelationshipsTranslationCodeLinks](docs/Model/LanguageRelationshipsTranslationCodeLinks.md)
 - [Link](docs/Model/Link.md)
 - [Linkage](docs/Model/Linkage.md)
 - [Links](docs/Model/Links.md)
 - [Locale](docs/Model/Locale.md)
 - [LocaleAttributes](docs/Model/LocaleAttributes.md)
 - [LocaleFlat](docs/Model/LocaleFlat.md)
 - [LocaleLinks](docs/Model/LocaleLinks.md)
 - [LocaleRelationships](docs/Model/LocaleRelationships.md)
 - [LocaleRelationshipsLanguages](docs/Model/LocaleRelationshipsLanguages.md)
 - [LocaleRelationshipsLanguagesData](docs/Model/LocaleRelationshipsLanguagesData.md)
 - [LocaleRelationshipsLanguagesLinks](docs/Model/LocaleRelationshipsLanguagesLinks.md)
 - [LocaleRelationshipsUsers](docs/Model/LocaleRelationshipsUsers.md)
 - [LocaleRelationshipsUsersData](docs/Model/LocaleRelationshipsUsersData.md)
 - [LocaleRelationshipsUsersLinks](docs/Model/LocaleRelationshipsUsersLinks.md)
 - [LogEntry](docs/Model/LogEntry.md)
 - [LogEntryAttributes](docs/Model/LogEntryAttributes.md)
 - [LogEntryFlat](docs/Model/LogEntryFlat.md)
 - [LogEntryLinks](docs/Model/LogEntryLinks.md)
 - [MailHeaderFooter](docs/Model/MailHeaderFooter.md)
 - [MailHeaderFooterAttributes](docs/Model/MailHeaderFooterAttributes.md)
 - [MailHeaderFooterFlat](docs/Model/MailHeaderFooterFlat.md)
 - [MailHeaderFooterLinks](docs/Model/MailHeaderFooterLinks.md)
 - [MailHeaderFooterRelationships](docs/Model/MailHeaderFooterRelationships.md)
 - [MailHeaderFooterRelationshipsSalesChannels](docs/Model/MailHeaderFooterRelationshipsSalesChannels.md)
 - [MailHeaderFooterRelationshipsSalesChannelsData](docs/Model/MailHeaderFooterRelationshipsSalesChannelsData.md)
 - [MailHeaderFooterRelationshipsSalesChannelsLinks](docs/Model/MailHeaderFooterRelationshipsSalesChannelsLinks.md)
 - [MailTemplate](docs/Model/MailTemplate.md)
 - [MailTemplateAttributes](docs/Model/MailTemplateAttributes.md)
 - [MailTemplateFlat](docs/Model/MailTemplateFlat.md)
 - [MailTemplateLinks](docs/Model/MailTemplateLinks.md)
 - [MailTemplateMediaFlat](docs/Model/MailTemplateMediaFlat.md)
 - [MailTemplateRelationships](docs/Model/MailTemplateRelationships.md)
 - [MailTemplateRelationshipsMailTemplateType](docs/Model/MailTemplateRelationshipsMailTemplateType.md)
 - [MailTemplateRelationshipsMailTemplateTypeData](docs/Model/MailTemplateRelationshipsMailTemplateTypeData.md)
 - [MailTemplateRelationshipsMailTemplateTypeLinks](docs/Model/MailTemplateRelationshipsMailTemplateTypeLinks.md)
 - [MailTemplateRelationshipsMedia](docs/Model/MailTemplateRelationshipsMedia.md)
 - [MailTemplateRelationshipsMediaData](docs/Model/MailTemplateRelationshipsMediaData.md)
 - [MailTemplateRelationshipsMediaLinks](docs/Model/MailTemplateRelationshipsMediaLinks.md)
 - [MailTemplateRelationshipsSalesChannels](docs/Model/MailTemplateRelationshipsSalesChannels.md)
 - [MailTemplateRelationshipsSalesChannelsData](docs/Model/MailTemplateRelationshipsSalesChannelsData.md)
 - [MailTemplateRelationshipsSalesChannelsLinks](docs/Model/MailTemplateRelationshipsSalesChannelsLinks.md)
 - [MailTemplateSalesChannel](docs/Model/MailTemplateSalesChannel.md)
 - [MailTemplateSalesChannelAttributes](docs/Model/MailTemplateSalesChannelAttributes.md)
 - [MailTemplateSalesChannelFlat](docs/Model/MailTemplateSalesChannelFlat.md)
 - [MailTemplateSalesChannelLinks](docs/Model/MailTemplateSalesChannelLinks.md)
 - [MailTemplateSalesChannelRelationships](docs/Model/MailTemplateSalesChannelRelationships.md)
 - [MailTemplateSalesChannelRelationshipsMailTemplate](docs/Model/MailTemplateSalesChannelRelationshipsMailTemplate.md)
 - [MailTemplateSalesChannelRelationshipsMailTemplateData](docs/Model/MailTemplateSalesChannelRelationshipsMailTemplateData.md)
 - [MailTemplateSalesChannelRelationshipsMailTemplateLinks](docs/Model/MailTemplateSalesChannelRelationshipsMailTemplateLinks.md)
 - [MailTemplateSalesChannelRelationshipsMailTemplateType](docs/Model/MailTemplateSalesChannelRelationshipsMailTemplateType.md)
 - [MailTemplateSalesChannelRelationshipsMailTemplateTypeLinks](docs/Model/MailTemplateSalesChannelRelationshipsMailTemplateTypeLinks.md)
 - [MailTemplateSalesChannelRelationshipsSalesChannel](docs/Model/MailTemplateSalesChannelRelationshipsSalesChannel.md)
 - [MailTemplateSalesChannelRelationshipsSalesChannelLinks](docs/Model/MailTemplateSalesChannelRelationshipsSalesChannelLinks.md)
 - [MailTemplateType](docs/Model/MailTemplateType.md)
 - [MailTemplateTypeAttributes](docs/Model/MailTemplateTypeAttributes.md)
 - [MailTemplateTypeFlat](docs/Model/MailTemplateTypeFlat.md)
 - [MailTemplateTypeLinks](docs/Model/MailTemplateTypeLinks.md)
 - [MailTemplateTypeRelationships](docs/Model/MailTemplateTypeRelationships.md)
 - [MailTemplateTypeRelationshipsMailTemplates](docs/Model/MailTemplateTypeRelationshipsMailTemplates.md)
 - [MailTemplateTypeRelationshipsMailTemplatesData](docs/Model/MailTemplateTypeRelationshipsMailTemplatesData.md)
 - [MailTemplateTypeRelationshipsMailTemplatesLinks](docs/Model/MailTemplateTypeRelationshipsMailTemplatesLinks.md)
 - [MailTemplateTypeRelationshipsSalesChannels](docs/Model/MailTemplateTypeRelationshipsSalesChannels.md)
 - [MailTemplateTypeRelationshipsSalesChannelsData](docs/Model/MailTemplateTypeRelationshipsSalesChannelsData.md)
 - [MailTemplateTypeRelationshipsSalesChannelsLinks](docs/Model/MailTemplateTypeRelationshipsSalesChannelsLinks.md)
 - [MainCategory](docs/Model/MainCategory.md)
 - [MainCategoryAttributes](docs/Model/MainCategoryAttributes.md)
 - [MainCategoryFlat](docs/Model/MainCategoryFlat.md)
 - [MainCategoryLinks](docs/Model/MainCategoryLinks.md)
 - [MainCategoryRelationships](docs/Model/MainCategoryRelationships.md)
 - [MainCategoryRelationshipsCategory](docs/Model/MainCategoryRelationshipsCategory.md)
 - [MainCategoryRelationshipsCategoryLinks](docs/Model/MainCategoryRelationshipsCategoryLinks.md)
 - [MainCategoryRelationshipsProduct](docs/Model/MainCategoryRelationshipsProduct.md)
 - [MainCategoryRelationshipsProductData](docs/Model/MainCategoryRelationshipsProductData.md)
 - [MainCategoryRelationshipsProductLinks](docs/Model/MainCategoryRelationshipsProductLinks.md)
 - [MainCategoryRelationshipsSalesChannel](docs/Model/MainCategoryRelationshipsSalesChannel.md)
 - [MainCategoryRelationshipsSalesChannelLinks](docs/Model/MainCategoryRelationshipsSalesChannelLinks.md)
 - [Media](docs/Model/Media.md)
 - [MediaAttributes](docs/Model/MediaAttributes.md)
 - [MediaAttributesExtensions](docs/Model/MediaAttributesExtensions.md)
 - [MediaAttributesExtensionsThemeMedia](docs/Model/MediaAttributesExtensionsThemeMedia.md)
 - [MediaAttributesExtensionsThemeMediaData](docs/Model/MediaAttributesExtensionsThemeMediaData.md)
 - [MediaAttributesExtensionsThemeMediaLinks](docs/Model/MediaAttributesExtensionsThemeMediaLinks.md)
 - [MediaAttributesExtensionsThemes](docs/Model/MediaAttributesExtensionsThemes.md)
 - [MediaAttributesExtensionsThemesData](docs/Model/MediaAttributesExtensionsThemesData.md)
 - [MediaAttributesExtensionsThemesLinks](docs/Model/MediaAttributesExtensionsThemesLinks.md)
 - [MediaDefaultFolder](docs/Model/MediaDefaultFolder.md)
 - [MediaDefaultFolderAttributes](docs/Model/MediaDefaultFolderAttributes.md)
 - [MediaDefaultFolderFlat](docs/Model/MediaDefaultFolderFlat.md)
 - [MediaDefaultFolderLinks](docs/Model/MediaDefaultFolderLinks.md)
 - [MediaDefaultFolderRelationships](docs/Model/MediaDefaultFolderRelationships.md)
 - [MediaDefaultFolderRelationshipsFolder](docs/Model/MediaDefaultFolderRelationshipsFolder.md)
 - [MediaDefaultFolderRelationshipsFolderLinks](docs/Model/MediaDefaultFolderRelationshipsFolderLinks.md)
 - [MediaFlat](docs/Model/MediaFlat.md)
 - [MediaFlatExtensions](docs/Model/MediaFlatExtensions.md)
 - [MediaFolder](docs/Model/MediaFolder.md)
 - [MediaFolderAttributes](docs/Model/MediaFolderAttributes.md)
 - [MediaFolderConfiguration](docs/Model/MediaFolderConfiguration.md)
 - [MediaFolderConfigurationAttributes](docs/Model/MediaFolderConfigurationAttributes.md)
 - [MediaFolderConfigurationFlat](docs/Model/MediaFolderConfigurationFlat.md)
 - [MediaFolderConfigurationLinks](docs/Model/MediaFolderConfigurationLinks.md)
 - [MediaFolderConfigurationMediaThumbnailSizeFlat](docs/Model/MediaFolderConfigurationMediaThumbnailSizeFlat.md)
 - [MediaFolderConfigurationRelationships](docs/Model/MediaFolderConfigurationRelationships.md)
 - [MediaFolderConfigurationRelationshipsMediaFolders](docs/Model/MediaFolderConfigurationRelationshipsMediaFolders.md)
 - [MediaFolderConfigurationRelationshipsMediaFoldersData](docs/Model/MediaFolderConfigurationRelationshipsMediaFoldersData.md)
 - [MediaFolderConfigurationRelationshipsMediaFoldersLinks](docs/Model/MediaFolderConfigurationRelationshipsMediaFoldersLinks.md)
 - [MediaFolderConfigurationRelationshipsMediaThumbnailSizes](docs/Model/MediaFolderConfigurationRelationshipsMediaThumbnailSizes.md)
 - [MediaFolderConfigurationRelationshipsMediaThumbnailSizesData](docs/Model/MediaFolderConfigurationRelationshipsMediaThumbnailSizesData.md)
 - [MediaFolderConfigurationRelationshipsMediaThumbnailSizesLinks](docs/Model/MediaFolderConfigurationRelationshipsMediaThumbnailSizesLinks.md)
 - [MediaFolderFlat](docs/Model/MediaFolderFlat.md)
 - [MediaFolderLinks](docs/Model/MediaFolderLinks.md)
 - [MediaFolderRelationships](docs/Model/MediaFolderRelationships.md)
 - [MediaFolderRelationshipsChildren](docs/Model/MediaFolderRelationshipsChildren.md)
 - [MediaFolderRelationshipsChildrenData](docs/Model/MediaFolderRelationshipsChildrenData.md)
 - [MediaFolderRelationshipsChildrenLinks](docs/Model/MediaFolderRelationshipsChildrenLinks.md)
 - [MediaFolderRelationshipsConfiguration](docs/Model/MediaFolderRelationshipsConfiguration.md)
 - [MediaFolderRelationshipsConfigurationData](docs/Model/MediaFolderRelationshipsConfigurationData.md)
 - [MediaFolderRelationshipsConfigurationLinks](docs/Model/MediaFolderRelationshipsConfigurationLinks.md)
 - [MediaFolderRelationshipsDefaultFolder](docs/Model/MediaFolderRelationshipsDefaultFolder.md)
 - [MediaFolderRelationshipsDefaultFolderData](docs/Model/MediaFolderRelationshipsDefaultFolderData.md)
 - [MediaFolderRelationshipsDefaultFolderLinks](docs/Model/MediaFolderRelationshipsDefaultFolderLinks.md)
 - [MediaFolderRelationshipsMedia](docs/Model/MediaFolderRelationshipsMedia.md)
 - [MediaFolderRelationshipsMediaData](docs/Model/MediaFolderRelationshipsMediaData.md)
 - [MediaFolderRelationshipsMediaLinks](docs/Model/MediaFolderRelationshipsMediaLinks.md)
 - [MediaFolderRelationshipsParent](docs/Model/MediaFolderRelationshipsParent.md)
 - [MediaFolderRelationshipsParentLinks](docs/Model/MediaFolderRelationshipsParentLinks.md)
 - [MediaLinks](docs/Model/MediaLinks.md)
 - [MediaRelationships](docs/Model/MediaRelationships.md)
 - [MediaRelationshipsAvatarUser](docs/Model/MediaRelationshipsAvatarUser.md)
 - [MediaRelationshipsAvatarUserLinks](docs/Model/MediaRelationshipsAvatarUserLinks.md)
 - [MediaRelationshipsCategories](docs/Model/MediaRelationshipsCategories.md)
 - [MediaRelationshipsCategoriesData](docs/Model/MediaRelationshipsCategoriesData.md)
 - [MediaRelationshipsCategoriesLinks](docs/Model/MediaRelationshipsCategoriesLinks.md)
 - [MediaRelationshipsCmsBlocks](docs/Model/MediaRelationshipsCmsBlocks.md)
 - [MediaRelationshipsCmsBlocksData](docs/Model/MediaRelationshipsCmsBlocksData.md)
 - [MediaRelationshipsCmsBlocksLinks](docs/Model/MediaRelationshipsCmsBlocksLinks.md)
 - [MediaRelationshipsCmsPages](docs/Model/MediaRelationshipsCmsPages.md)
 - [MediaRelationshipsCmsPagesData](docs/Model/MediaRelationshipsCmsPagesData.md)
 - [MediaRelationshipsCmsPagesLinks](docs/Model/MediaRelationshipsCmsPagesLinks.md)
 - [MediaRelationshipsCmsSections](docs/Model/MediaRelationshipsCmsSections.md)
 - [MediaRelationshipsCmsSectionsData](docs/Model/MediaRelationshipsCmsSectionsData.md)
 - [MediaRelationshipsCmsSectionsLinks](docs/Model/MediaRelationshipsCmsSectionsLinks.md)
 - [MediaRelationshipsDocumentBaseConfigs](docs/Model/MediaRelationshipsDocumentBaseConfigs.md)
 - [MediaRelationshipsDocumentBaseConfigsData](docs/Model/MediaRelationshipsDocumentBaseConfigsData.md)
 - [MediaRelationshipsDocumentBaseConfigsLinks](docs/Model/MediaRelationshipsDocumentBaseConfigsLinks.md)
 - [MediaRelationshipsDocuments](docs/Model/MediaRelationshipsDocuments.md)
 - [MediaRelationshipsDocumentsData](docs/Model/MediaRelationshipsDocumentsData.md)
 - [MediaRelationshipsDocumentsLinks](docs/Model/MediaRelationshipsDocumentsLinks.md)
 - [MediaRelationshipsMailTemplateMedia](docs/Model/MediaRelationshipsMailTemplateMedia.md)
 - [MediaRelationshipsMailTemplateMediaData](docs/Model/MediaRelationshipsMailTemplateMediaData.md)
 - [MediaRelationshipsMailTemplateMediaLinks](docs/Model/MediaRelationshipsMailTemplateMediaLinks.md)
 - [MediaRelationshipsMediaFolder](docs/Model/MediaRelationshipsMediaFolder.md)
 - [MediaRelationshipsMediaFolderData](docs/Model/MediaRelationshipsMediaFolderData.md)
 - [MediaRelationshipsMediaFolderLinks](docs/Model/MediaRelationshipsMediaFolderLinks.md)
 - [MediaRelationshipsOrderLineItems](docs/Model/MediaRelationshipsOrderLineItems.md)
 - [MediaRelationshipsOrderLineItemsData](docs/Model/MediaRelationshipsOrderLineItemsData.md)
 - [MediaRelationshipsOrderLineItemsLinks](docs/Model/MediaRelationshipsOrderLineItemsLinks.md)
 - [MediaRelationshipsPaymentMethods](docs/Model/MediaRelationshipsPaymentMethods.md)
 - [MediaRelationshipsPaymentMethodsData](docs/Model/MediaRelationshipsPaymentMethodsData.md)
 - [MediaRelationshipsPaymentMethodsLinks](docs/Model/MediaRelationshipsPaymentMethodsLinks.md)
 - [MediaRelationshipsProductConfiguratorSettings](docs/Model/MediaRelationshipsProductConfiguratorSettings.md)
 - [MediaRelationshipsProductConfiguratorSettingsData](docs/Model/MediaRelationshipsProductConfiguratorSettingsData.md)
 - [MediaRelationshipsProductConfiguratorSettingsLinks](docs/Model/MediaRelationshipsProductConfiguratorSettingsLinks.md)
 - [MediaRelationshipsProductManufacturers](docs/Model/MediaRelationshipsProductManufacturers.md)
 - [MediaRelationshipsProductManufacturersData](docs/Model/MediaRelationshipsProductManufacturersData.md)
 - [MediaRelationshipsProductManufacturersLinks](docs/Model/MediaRelationshipsProductManufacturersLinks.md)
 - [MediaRelationshipsProductMedia](docs/Model/MediaRelationshipsProductMedia.md)
 - [MediaRelationshipsProductMediaData](docs/Model/MediaRelationshipsProductMediaData.md)
 - [MediaRelationshipsProductMediaLinks](docs/Model/MediaRelationshipsProductMediaLinks.md)
 - [MediaRelationshipsPropertyGroupOptions](docs/Model/MediaRelationshipsPropertyGroupOptions.md)
 - [MediaRelationshipsPropertyGroupOptionsData](docs/Model/MediaRelationshipsPropertyGroupOptionsData.md)
 - [MediaRelationshipsPropertyGroupOptionsLinks](docs/Model/MediaRelationshipsPropertyGroupOptionsLinks.md)
 - [MediaRelationshipsShippingMethods](docs/Model/MediaRelationshipsShippingMethods.md)
 - [MediaRelationshipsShippingMethodsData](docs/Model/MediaRelationshipsShippingMethodsData.md)
 - [MediaRelationshipsShippingMethodsLinks](docs/Model/MediaRelationshipsShippingMethodsLinks.md)
 - [MediaRelationshipsTags](docs/Model/MediaRelationshipsTags.md)
 - [MediaRelationshipsTagsData](docs/Model/MediaRelationshipsTagsData.md)
 - [MediaRelationshipsTagsLinks](docs/Model/MediaRelationshipsTagsLinks.md)
 - [MediaRelationshipsThumbnails](docs/Model/MediaRelationshipsThumbnails.md)
 - [MediaRelationshipsThumbnailsData](docs/Model/MediaRelationshipsThumbnailsData.md)
 - [MediaRelationshipsThumbnailsLinks](docs/Model/MediaRelationshipsThumbnailsLinks.md)
 - [MediaRelationshipsUser](docs/Model/MediaRelationshipsUser.md)
 - [MediaRelationshipsUserLinks](docs/Model/MediaRelationshipsUserLinks.md)
 - [MediaTagFlat](docs/Model/MediaTagFlat.md)
 - [MediaThumbnail](docs/Model/MediaThumbnail.md)
 - [MediaThumbnailAttributes](docs/Model/MediaThumbnailAttributes.md)
 - [MediaThumbnailFlat](docs/Model/MediaThumbnailFlat.md)
 - [MediaThumbnailLinks](docs/Model/MediaThumbnailLinks.md)
 - [MediaThumbnailRelationships](docs/Model/MediaThumbnailRelationships.md)
 - [MediaThumbnailRelationshipsMedia](docs/Model/MediaThumbnailRelationshipsMedia.md)
 - [MediaThumbnailRelationshipsMediaLinks](docs/Model/MediaThumbnailRelationshipsMediaLinks.md)
 - [MediaThumbnailSize](docs/Model/MediaThumbnailSize.md)
 - [MediaThumbnailSizeAttributes](docs/Model/MediaThumbnailSizeAttributes.md)
 - [MediaThumbnailSizeFlat](docs/Model/MediaThumbnailSizeFlat.md)
 - [MediaThumbnailSizeLinks](docs/Model/MediaThumbnailSizeLinks.md)
 - [MediaThumbnailSizeRelationships](docs/Model/MediaThumbnailSizeRelationships.md)
 - [MediaThumbnailSizeRelationshipsMediaFolderConfigurations](docs/Model/MediaThumbnailSizeRelationshipsMediaFolderConfigurations.md)
 - [MediaThumbnailSizeRelationshipsMediaFolderConfigurationsData](docs/Model/MediaThumbnailSizeRelationshipsMediaFolderConfigurationsData.md)
 - [MediaThumbnailSizeRelationshipsMediaFolderConfigurationsLinks](docs/Model/MediaThumbnailSizeRelationshipsMediaFolderConfigurationsLinks.md)
 - [MessageQueueStats](docs/Model/MessageQueueStats.md)
 - [MessageQueueStatsAttributes](docs/Model/MessageQueueStatsAttributes.md)
 - [MessageQueueStatsFlat](docs/Model/MessageQueueStatsFlat.md)
 - [MessageQueueStatsLinks](docs/Model/MessageQueueStatsLinks.md)
 - [Meta](docs/Model/Meta.md)
 - [NewsletterRecipient](docs/Model/NewsletterRecipient.md)
 - [NewsletterRecipientAttributes](docs/Model/NewsletterRecipientAttributes.md)
 - [NewsletterRecipientFlat](docs/Model/NewsletterRecipientFlat.md)
 - [NewsletterRecipientLinks](docs/Model/NewsletterRecipientLinks.md)
 - [NewsletterRecipientRelationships](docs/Model/NewsletterRecipientRelationships.md)
 - [NewsletterRecipientRelationshipsLanguage](docs/Model/NewsletterRecipientRelationshipsLanguage.md)
 - [NewsletterRecipientRelationshipsLanguageLinks](docs/Model/NewsletterRecipientRelationshipsLanguageLinks.md)
 - [NewsletterRecipientRelationshipsSalesChannel](docs/Model/NewsletterRecipientRelationshipsSalesChannel.md)
 - [NewsletterRecipientRelationshipsSalesChannelLinks](docs/Model/NewsletterRecipientRelationshipsSalesChannelLinks.md)
 - [NewsletterRecipientRelationshipsSalutation](docs/Model/NewsletterRecipientRelationshipsSalutation.md)
 - [NewsletterRecipientRelationshipsSalutationLinks](docs/Model/NewsletterRecipientRelationshipsSalutationLinks.md)
 - [NewsletterRecipientRelationshipsTags](docs/Model/NewsletterRecipientRelationshipsTags.md)
 - [NewsletterRecipientRelationshipsTagsData](docs/Model/NewsletterRecipientRelationshipsTagsData.md)
 - [NewsletterRecipientRelationshipsTagsLinks](docs/Model/NewsletterRecipientRelationshipsTagsLinks.md)
 - [NewsletterRecipientTagFlat](docs/Model/NewsletterRecipientTagFlat.md)
 - [NumberRange](docs/Model/NumberRange.md)
 - [NumberRangeAttributes](docs/Model/NumberRangeAttributes.md)
 - [NumberRangeFlat](docs/Model/NumberRangeFlat.md)
 - [NumberRangeLinks](docs/Model/NumberRangeLinks.md)
 - [NumberRangeRelationships](docs/Model/NumberRangeRelationships.md)
 - [NumberRangeRelationshipsNumberRangeSalesChannels](docs/Model/NumberRangeRelationshipsNumberRangeSalesChannels.md)
 - [NumberRangeRelationshipsNumberRangeSalesChannelsData](docs/Model/NumberRangeRelationshipsNumberRangeSalesChannelsData.md)
 - [NumberRangeRelationshipsNumberRangeSalesChannelsLinks](docs/Model/NumberRangeRelationshipsNumberRangeSalesChannelsLinks.md)
 - [NumberRangeRelationshipsState](docs/Model/NumberRangeRelationshipsState.md)
 - [NumberRangeRelationshipsStateData](docs/Model/NumberRangeRelationshipsStateData.md)
 - [NumberRangeRelationshipsStateLinks](docs/Model/NumberRangeRelationshipsStateLinks.md)
 - [NumberRangeRelationshipsType](docs/Model/NumberRangeRelationshipsType.md)
 - [NumberRangeRelationshipsTypeData](docs/Model/NumberRangeRelationshipsTypeData.md)
 - [NumberRangeRelationshipsTypeLinks](docs/Model/NumberRangeRelationshipsTypeLinks.md)
 - [NumberRangeSalesChannel](docs/Model/NumberRangeSalesChannel.md)
 - [NumberRangeSalesChannelAttributes](docs/Model/NumberRangeSalesChannelAttributes.md)
 - [NumberRangeSalesChannelFlat](docs/Model/NumberRangeSalesChannelFlat.md)
 - [NumberRangeSalesChannelLinks](docs/Model/NumberRangeSalesChannelLinks.md)
 - [NumberRangeSalesChannelRelationships](docs/Model/NumberRangeSalesChannelRelationships.md)
 - [NumberRangeSalesChannelRelationshipsNumberRange](docs/Model/NumberRangeSalesChannelRelationshipsNumberRange.md)
 - [NumberRangeSalesChannelRelationshipsNumberRangeData](docs/Model/NumberRangeSalesChannelRelationshipsNumberRangeData.md)
 - [NumberRangeSalesChannelRelationshipsNumberRangeLinks](docs/Model/NumberRangeSalesChannelRelationshipsNumberRangeLinks.md)
 - [NumberRangeSalesChannelRelationshipsNumberRangeType](docs/Model/NumberRangeSalesChannelRelationshipsNumberRangeType.md)
 - [NumberRangeSalesChannelRelationshipsNumberRangeTypeLinks](docs/Model/NumberRangeSalesChannelRelationshipsNumberRangeTypeLinks.md)
 - [NumberRangeSalesChannelRelationshipsSalesChannel](docs/Model/NumberRangeSalesChannelRelationshipsSalesChannel.md)
 - [NumberRangeSalesChannelRelationshipsSalesChannelLinks](docs/Model/NumberRangeSalesChannelRelationshipsSalesChannelLinks.md)
 - [NumberRangeState](docs/Model/NumberRangeState.md)
 - [NumberRangeStateAttributes](docs/Model/NumberRangeStateAttributes.md)
 - [NumberRangeStateFlat](docs/Model/NumberRangeStateFlat.md)
 - [NumberRangeStateLinks](docs/Model/NumberRangeStateLinks.md)
 - [NumberRangeStateRelationships](docs/Model/NumberRangeStateRelationships.md)
 - [NumberRangeStateRelationshipsNumberRange](docs/Model/NumberRangeStateRelationshipsNumberRange.md)
 - [NumberRangeStateRelationshipsNumberRangeLinks](docs/Model/NumberRangeStateRelationshipsNumberRangeLinks.md)
 - [NumberRangeType](docs/Model/NumberRangeType.md)
 - [NumberRangeTypeAttributes](docs/Model/NumberRangeTypeAttributes.md)
 - [NumberRangeTypeFlat](docs/Model/NumberRangeTypeFlat.md)
 - [NumberRangeTypeLinks](docs/Model/NumberRangeTypeLinks.md)
 - [NumberRangeTypeRelationships](docs/Model/NumberRangeTypeRelationships.md)
 - [NumberRangeTypeRelationshipsNumberRangeSalesChannels](docs/Model/NumberRangeTypeRelationshipsNumberRangeSalesChannels.md)
 - [NumberRangeTypeRelationshipsNumberRangeSalesChannelsData](docs/Model/NumberRangeTypeRelationshipsNumberRangeSalesChannelsData.md)
 - [NumberRangeTypeRelationshipsNumberRangeSalesChannelsLinks](docs/Model/NumberRangeTypeRelationshipsNumberRangeSalesChannelsLinks.md)
 - [NumberRangeTypeRelationshipsNumberRanges](docs/Model/NumberRangeTypeRelationshipsNumberRanges.md)
 - [NumberRangeTypeRelationshipsNumberRangesData](docs/Model/NumberRangeTypeRelationshipsNumberRangesData.md)
 - [NumberRangeTypeRelationshipsNumberRangesLinks](docs/Model/NumberRangeTypeRelationshipsNumberRangesLinks.md)
 - [OneOfdata](docs/Model/OneOfdata.md)
 - [Order](docs/Model/Order.md)
 - [OrderAddress](docs/Model/OrderAddress.md)
 - [OrderAddressAttributes](docs/Model/OrderAddressAttributes.md)
 - [OrderAddressFlat](docs/Model/OrderAddressFlat.md)
 - [OrderAddressLinks](docs/Model/OrderAddressLinks.md)
 - [OrderAddressRelationships](docs/Model/OrderAddressRelationships.md)
 - [OrderAddressRelationshipsCountry](docs/Model/OrderAddressRelationshipsCountry.md)
 - [OrderAddressRelationshipsCountryLinks](docs/Model/OrderAddressRelationshipsCountryLinks.md)
 - [OrderAddressRelationshipsCountryState](docs/Model/OrderAddressRelationshipsCountryState.md)
 - [OrderAddressRelationshipsCountryStateLinks](docs/Model/OrderAddressRelationshipsCountryStateLinks.md)
 - [OrderAddressRelationshipsOrder](docs/Model/OrderAddressRelationshipsOrder.md)
 - [OrderAddressRelationshipsOrderDeliveries](docs/Model/OrderAddressRelationshipsOrderDeliveries.md)
 - [OrderAddressRelationshipsOrderDeliveriesData](docs/Model/OrderAddressRelationshipsOrderDeliveriesData.md)
 - [OrderAddressRelationshipsOrderDeliveriesLinks](docs/Model/OrderAddressRelationshipsOrderDeliveriesLinks.md)
 - [OrderAddressRelationshipsOrderLinks](docs/Model/OrderAddressRelationshipsOrderLinks.md)
 - [OrderAddressRelationshipsSalutation](docs/Model/OrderAddressRelationshipsSalutation.md)
 - [OrderAddressRelationshipsSalutationLinks](docs/Model/OrderAddressRelationshipsSalutationLinks.md)
 - [OrderAttributes](docs/Model/OrderAttributes.md)
 - [OrderAttributesPrice](docs/Model/OrderAttributesPrice.md)
 - [OrderAttributesShippingCosts](docs/Model/OrderAttributesShippingCosts.md)
 - [OrderCustomer](docs/Model/OrderCustomer.md)
 - [OrderCustomerAttributes](docs/Model/OrderCustomerAttributes.md)
 - [OrderCustomerFlat](docs/Model/OrderCustomerFlat.md)
 - [OrderCustomerLinks](docs/Model/OrderCustomerLinks.md)
 - [OrderCustomerRelationships](docs/Model/OrderCustomerRelationships.md)
 - [OrderCustomerRelationshipsCustomer](docs/Model/OrderCustomerRelationshipsCustomer.md)
 - [OrderCustomerRelationshipsCustomerLinks](docs/Model/OrderCustomerRelationshipsCustomerLinks.md)
 - [OrderCustomerRelationshipsOrder](docs/Model/OrderCustomerRelationshipsOrder.md)
 - [OrderCustomerRelationshipsOrderLinks](docs/Model/OrderCustomerRelationshipsOrderLinks.md)
 - [OrderCustomerRelationshipsSalutation](docs/Model/OrderCustomerRelationshipsSalutation.md)
 - [OrderCustomerRelationshipsSalutationLinks](docs/Model/OrderCustomerRelationshipsSalutationLinks.md)
 - [OrderDelivery](docs/Model/OrderDelivery.md)
 - [OrderDeliveryAttributes](docs/Model/OrderDeliveryAttributes.md)
 - [OrderDeliveryFlat](docs/Model/OrderDeliveryFlat.md)
 - [OrderDeliveryLinks](docs/Model/OrderDeliveryLinks.md)
 - [OrderDeliveryPosition](docs/Model/OrderDeliveryPosition.md)
 - [OrderDeliveryPositionAttributes](docs/Model/OrderDeliveryPositionAttributes.md)
 - [OrderDeliveryPositionFlat](docs/Model/OrderDeliveryPositionFlat.md)
 - [OrderDeliveryPositionLinks](docs/Model/OrderDeliveryPositionLinks.md)
 - [OrderDeliveryPositionRelationships](docs/Model/OrderDeliveryPositionRelationships.md)
 - [OrderDeliveryPositionRelationshipsOrderDelivery](docs/Model/OrderDeliveryPositionRelationshipsOrderDelivery.md)
 - [OrderDeliveryPositionRelationshipsOrderDeliveryData](docs/Model/OrderDeliveryPositionRelationshipsOrderDeliveryData.md)
 - [OrderDeliveryPositionRelationshipsOrderDeliveryLinks](docs/Model/OrderDeliveryPositionRelationshipsOrderDeliveryLinks.md)
 - [OrderDeliveryPositionRelationshipsOrderLineItem](docs/Model/OrderDeliveryPositionRelationshipsOrderLineItem.md)
 - [OrderDeliveryPositionRelationshipsOrderLineItemData](docs/Model/OrderDeliveryPositionRelationshipsOrderLineItemData.md)
 - [OrderDeliveryPositionRelationshipsOrderLineItemLinks](docs/Model/OrderDeliveryPositionRelationshipsOrderLineItemLinks.md)
 - [OrderDeliveryRelationships](docs/Model/OrderDeliveryRelationships.md)
 - [OrderDeliveryRelationshipsOrder](docs/Model/OrderDeliveryRelationshipsOrder.md)
 - [OrderDeliveryRelationshipsOrderLinks](docs/Model/OrderDeliveryRelationshipsOrderLinks.md)
 - [OrderDeliveryRelationshipsPositions](docs/Model/OrderDeliveryRelationshipsPositions.md)
 - [OrderDeliveryRelationshipsPositionsData](docs/Model/OrderDeliveryRelationshipsPositionsData.md)
 - [OrderDeliveryRelationshipsPositionsLinks](docs/Model/OrderDeliveryRelationshipsPositionsLinks.md)
 - [OrderDeliveryRelationshipsShippingMethod](docs/Model/OrderDeliveryRelationshipsShippingMethod.md)
 - [OrderDeliveryRelationshipsShippingMethodData](docs/Model/OrderDeliveryRelationshipsShippingMethodData.md)
 - [OrderDeliveryRelationshipsShippingMethodLinks](docs/Model/OrderDeliveryRelationshipsShippingMethodLinks.md)
 - [OrderDeliveryRelationshipsShippingOrderAddress](docs/Model/OrderDeliveryRelationshipsShippingOrderAddress.md)
 - [OrderDeliveryRelationshipsShippingOrderAddressData](docs/Model/OrderDeliveryRelationshipsShippingOrderAddressData.md)
 - [OrderDeliveryRelationshipsShippingOrderAddressLinks](docs/Model/OrderDeliveryRelationshipsShippingOrderAddressLinks.md)
 - [OrderDeliveryRelationshipsStateMachineState](docs/Model/OrderDeliveryRelationshipsStateMachineState.md)
 - [OrderDeliveryRelationshipsStateMachineStateLinks](docs/Model/OrderDeliveryRelationshipsStateMachineStateLinks.md)
 - [OrderFlat](docs/Model/OrderFlat.md)
 - [OrderLineItem](docs/Model/OrderLineItem.md)
 - [OrderLineItemAttributes](docs/Model/OrderLineItemAttributes.md)
 - [OrderLineItemFlat](docs/Model/OrderLineItemFlat.md)
 - [OrderLineItemLinks](docs/Model/OrderLineItemLinks.md)
 - [OrderLineItemRelationships](docs/Model/OrderLineItemRelationships.md)
 - [OrderLineItemRelationshipsCover](docs/Model/OrderLineItemRelationshipsCover.md)
 - [OrderLineItemRelationshipsCoverLinks](docs/Model/OrderLineItemRelationshipsCoverLinks.md)
 - [OrderLineItemRelationshipsOrder](docs/Model/OrderLineItemRelationshipsOrder.md)
 - [OrderLineItemRelationshipsOrderDeliveryPositions](docs/Model/OrderLineItemRelationshipsOrderDeliveryPositions.md)
 - [OrderLineItemRelationshipsOrderDeliveryPositionsData](docs/Model/OrderLineItemRelationshipsOrderDeliveryPositionsData.md)
 - [OrderLineItemRelationshipsOrderDeliveryPositionsLinks](docs/Model/OrderLineItemRelationshipsOrderDeliveryPositionsLinks.md)
 - [OrderLineItemRelationshipsOrderLinks](docs/Model/OrderLineItemRelationshipsOrderLinks.md)
 - [OrderLineItemRelationshipsProduct](docs/Model/OrderLineItemRelationshipsProduct.md)
 - [OrderLineItemRelationshipsProductLinks](docs/Model/OrderLineItemRelationshipsProductLinks.md)
 - [OrderLinks](docs/Model/OrderLinks.md)
 - [OrderRelationships](docs/Model/OrderRelationships.md)
 - [OrderRelationshipsAddresses](docs/Model/OrderRelationshipsAddresses.md)
 - [OrderRelationshipsAddressesData](docs/Model/OrderRelationshipsAddressesData.md)
 - [OrderRelationshipsAddressesLinks](docs/Model/OrderRelationshipsAddressesLinks.md)
 - [OrderRelationshipsCurrency](docs/Model/OrderRelationshipsCurrency.md)
 - [OrderRelationshipsCurrencyData](docs/Model/OrderRelationshipsCurrencyData.md)
 - [OrderRelationshipsCurrencyLinks](docs/Model/OrderRelationshipsCurrencyLinks.md)
 - [OrderRelationshipsDeliveries](docs/Model/OrderRelationshipsDeliveries.md)
 - [OrderRelationshipsDeliveriesData](docs/Model/OrderRelationshipsDeliveriesData.md)
 - [OrderRelationshipsDeliveriesLinks](docs/Model/OrderRelationshipsDeliveriesLinks.md)
 - [OrderRelationshipsDocuments](docs/Model/OrderRelationshipsDocuments.md)
 - [OrderRelationshipsDocumentsData](docs/Model/OrderRelationshipsDocumentsData.md)
 - [OrderRelationshipsDocumentsLinks](docs/Model/OrderRelationshipsDocumentsLinks.md)
 - [OrderRelationshipsLanguage](docs/Model/OrderRelationshipsLanguage.md)
 - [OrderRelationshipsLanguageLinks](docs/Model/OrderRelationshipsLanguageLinks.md)
 - [OrderRelationshipsLineItems](docs/Model/OrderRelationshipsLineItems.md)
 - [OrderRelationshipsLineItemsData](docs/Model/OrderRelationshipsLineItemsData.md)
 - [OrderRelationshipsLineItemsLinks](docs/Model/OrderRelationshipsLineItemsLinks.md)
 - [OrderRelationshipsOrderCustomer](docs/Model/OrderRelationshipsOrderCustomer.md)
 - [OrderRelationshipsOrderCustomerData](docs/Model/OrderRelationshipsOrderCustomerData.md)
 - [OrderRelationshipsOrderCustomerLinks](docs/Model/OrderRelationshipsOrderCustomerLinks.md)
 - [OrderRelationshipsSalesChannel](docs/Model/OrderRelationshipsSalesChannel.md)
 - [OrderRelationshipsSalesChannelLinks](docs/Model/OrderRelationshipsSalesChannelLinks.md)
 - [OrderRelationshipsStateMachineState](docs/Model/OrderRelationshipsStateMachineState.md)
 - [OrderRelationshipsStateMachineStateData](docs/Model/OrderRelationshipsStateMachineStateData.md)
 - [OrderRelationshipsStateMachineStateLinks](docs/Model/OrderRelationshipsStateMachineStateLinks.md)
 - [OrderRelationshipsTags](docs/Model/OrderRelationshipsTags.md)
 - [OrderRelationshipsTagsData](docs/Model/OrderRelationshipsTagsData.md)
 - [OrderRelationshipsTagsLinks](docs/Model/OrderRelationshipsTagsLinks.md)
 - [OrderRelationshipsTransactions](docs/Model/OrderRelationshipsTransactions.md)
 - [OrderRelationshipsTransactionsData](docs/Model/OrderRelationshipsTransactionsData.md)
 - [OrderRelationshipsTransactionsLinks](docs/Model/OrderRelationshipsTransactionsLinks.md)
 - [OrderTagFlat](docs/Model/OrderTagFlat.md)
 - [OrderTransaction](docs/Model/OrderTransaction.md)
 - [OrderTransactionAttributes](docs/Model/OrderTransactionAttributes.md)
 - [OrderTransactionFlat](docs/Model/OrderTransactionFlat.md)
 - [OrderTransactionLinks](docs/Model/OrderTransactionLinks.md)
 - [OrderTransactionRelationships](docs/Model/OrderTransactionRelationships.md)
 - [OrderTransactionRelationshipsOrder](docs/Model/OrderTransactionRelationshipsOrder.md)
 - [OrderTransactionRelationshipsOrderLinks](docs/Model/OrderTransactionRelationshipsOrderLinks.md)
 - [OrderTransactionRelationshipsPaymentMethod](docs/Model/OrderTransactionRelationshipsPaymentMethod.md)
 - [OrderTransactionRelationshipsPaymentMethodLinks](docs/Model/OrderTransactionRelationshipsPaymentMethodLinks.md)
 - [OrderTransactionRelationshipsStateMachineState](docs/Model/OrderTransactionRelationshipsStateMachineState.md)
 - [OrderTransactionRelationshipsStateMachineStateLinks](docs/Model/OrderTransactionRelationshipsStateMachineStateLinks.md)
 - [Pagination](docs/Model/Pagination.md)
 - [PaymentMethod](docs/Model/PaymentMethod.md)
 - [PaymentMethodAttributes](docs/Model/PaymentMethodAttributes.md)
 - [PaymentMethodFlat](docs/Model/PaymentMethodFlat.md)
 - [PaymentMethodLinks](docs/Model/PaymentMethodLinks.md)
 - [PaymentMethodRelationships](docs/Model/PaymentMethodRelationships.md)
 - [PaymentMethodRelationshipsAvailabilityRule](docs/Model/PaymentMethodRelationshipsAvailabilityRule.md)
 - [PaymentMethodRelationshipsAvailabilityRuleData](docs/Model/PaymentMethodRelationshipsAvailabilityRuleData.md)
 - [PaymentMethodRelationshipsAvailabilityRuleLinks](docs/Model/PaymentMethodRelationshipsAvailabilityRuleLinks.md)
 - [PaymentMethodRelationshipsCustomers](docs/Model/PaymentMethodRelationshipsCustomers.md)
 - [PaymentMethodRelationshipsCustomersData](docs/Model/PaymentMethodRelationshipsCustomersData.md)
 - [PaymentMethodRelationshipsCustomersLinks](docs/Model/PaymentMethodRelationshipsCustomersLinks.md)
 - [PaymentMethodRelationshipsMedia](docs/Model/PaymentMethodRelationshipsMedia.md)
 - [PaymentMethodRelationshipsMediaLinks](docs/Model/PaymentMethodRelationshipsMediaLinks.md)
 - [PaymentMethodRelationshipsOrderTransactions](docs/Model/PaymentMethodRelationshipsOrderTransactions.md)
 - [PaymentMethodRelationshipsOrderTransactionsData](docs/Model/PaymentMethodRelationshipsOrderTransactionsData.md)
 - [PaymentMethodRelationshipsOrderTransactionsLinks](docs/Model/PaymentMethodRelationshipsOrderTransactionsLinks.md)
 - [PaymentMethodRelationshipsPlugin](docs/Model/PaymentMethodRelationshipsPlugin.md)
 - [PaymentMethodRelationshipsPluginData](docs/Model/PaymentMethodRelationshipsPluginData.md)
 - [PaymentMethodRelationshipsPluginLinks](docs/Model/PaymentMethodRelationshipsPluginLinks.md)
 - [PaymentMethodRelationshipsSalesChannelDefaultAssignments](docs/Model/PaymentMethodRelationshipsSalesChannelDefaultAssignments.md)
 - [PaymentMethodRelationshipsSalesChannelDefaultAssignmentsData](docs/Model/PaymentMethodRelationshipsSalesChannelDefaultAssignmentsData.md)
 - [PaymentMethodRelationshipsSalesChannelDefaultAssignmentsLinks](docs/Model/PaymentMethodRelationshipsSalesChannelDefaultAssignmentsLinks.md)
 - [PaymentMethodRelationshipsSalesChannels](docs/Model/PaymentMethodRelationshipsSalesChannels.md)
 - [PaymentMethodRelationshipsSalesChannelsData](docs/Model/PaymentMethodRelationshipsSalesChannelsData.md)
 - [PaymentMethodRelationshipsSalesChannelsLinks](docs/Model/PaymentMethodRelationshipsSalesChannelsLinks.md)
 - [Plugin](docs/Model/Plugin.md)
 - [PluginAttributes](docs/Model/PluginAttributes.md)
 - [PluginFlat](docs/Model/PluginFlat.md)
 - [PluginLinks](docs/Model/PluginLinks.md)
 - [PluginRelationships](docs/Model/PluginRelationships.md)
 - [PluginRelationshipsPaymentMethods](docs/Model/PluginRelationshipsPaymentMethods.md)
 - [PluginRelationshipsPaymentMethodsData](docs/Model/PluginRelationshipsPaymentMethodsData.md)
 - [PluginRelationshipsPaymentMethodsLinks](docs/Model/PluginRelationshipsPaymentMethodsLinks.md)
 - [Product](docs/Model/Product.md)
 - [ProductAttributes](docs/Model/ProductAttributes.md)
 - [ProductCategoryFlat](docs/Model/ProductCategoryFlat.md)
 - [ProductCategoryTreeFlat](docs/Model/ProductCategoryTreeFlat.md)
 - [ProductConfiguratorSetting](docs/Model/ProductConfiguratorSetting.md)
 - [ProductConfiguratorSettingAttributes](docs/Model/ProductConfiguratorSettingAttributes.md)
 - [ProductConfiguratorSettingFlat](docs/Model/ProductConfiguratorSettingFlat.md)
 - [ProductConfiguratorSettingLinks](docs/Model/ProductConfiguratorSettingLinks.md)
 - [ProductConfiguratorSettingRelationships](docs/Model/ProductConfiguratorSettingRelationships.md)
 - [ProductConfiguratorSettingRelationshipsMedia](docs/Model/ProductConfiguratorSettingRelationshipsMedia.md)
 - [ProductConfiguratorSettingRelationshipsMediaLinks](docs/Model/ProductConfiguratorSettingRelationshipsMediaLinks.md)
 - [ProductConfiguratorSettingRelationshipsOption](docs/Model/ProductConfiguratorSettingRelationshipsOption.md)
 - [ProductConfiguratorSettingRelationshipsOptionData](docs/Model/ProductConfiguratorSettingRelationshipsOptionData.md)
 - [ProductConfiguratorSettingRelationshipsOptionLinks](docs/Model/ProductConfiguratorSettingRelationshipsOptionLinks.md)
 - [ProductConfiguratorSettingRelationshipsProduct](docs/Model/ProductConfiguratorSettingRelationshipsProduct.md)
 - [ProductConfiguratorSettingRelationshipsProductLinks](docs/Model/ProductConfiguratorSettingRelationshipsProductLinks.md)
 - [ProductCrossSelling](docs/Model/ProductCrossSelling.md)
 - [ProductCrossSellingAttributes](docs/Model/ProductCrossSellingAttributes.md)
 - [ProductCrossSellingFlat](docs/Model/ProductCrossSellingFlat.md)
 - [ProductCrossSellingLinks](docs/Model/ProductCrossSellingLinks.md)
 - [ProductCrossSellingRelationships](docs/Model/ProductCrossSellingRelationships.md)
 - [ProductCrossSellingRelationshipsProduct](docs/Model/ProductCrossSellingRelationshipsProduct.md)
 - [ProductCrossSellingRelationshipsProductLinks](docs/Model/ProductCrossSellingRelationshipsProductLinks.md)
 - [ProductCrossSellingRelationshipsProductStream](docs/Model/ProductCrossSellingRelationshipsProductStream.md)
 - [ProductCrossSellingRelationshipsProductStreamData](docs/Model/ProductCrossSellingRelationshipsProductStreamData.md)
 - [ProductCrossSellingRelationshipsProductStreamLinks](docs/Model/ProductCrossSellingRelationshipsProductStreamLinks.md)
 - [ProductExport](docs/Model/ProductExport.md)
 - [ProductExportAttributes](docs/Model/ProductExportAttributes.md)
 - [ProductExportFlat](docs/Model/ProductExportFlat.md)
 - [ProductExportLinks](docs/Model/ProductExportLinks.md)
 - [ProductExportRelationships](docs/Model/ProductExportRelationships.md)
 - [ProductExportRelationshipsCurrency](docs/Model/ProductExportRelationshipsCurrency.md)
 - [ProductExportRelationshipsCurrencyLinks](docs/Model/ProductExportRelationshipsCurrencyLinks.md)
 - [ProductExportRelationshipsProductStream](docs/Model/ProductExportRelationshipsProductStream.md)
 - [ProductExportRelationshipsProductStreamLinks](docs/Model/ProductExportRelationshipsProductStreamLinks.md)
 - [ProductExportRelationshipsSalesChannel](docs/Model/ProductExportRelationshipsSalesChannel.md)
 - [ProductExportRelationshipsSalesChannelDomain](docs/Model/ProductExportRelationshipsSalesChannelDomain.md)
 - [ProductExportRelationshipsSalesChannelDomainData](docs/Model/ProductExportRelationshipsSalesChannelDomainData.md)
 - [ProductExportRelationshipsSalesChannelDomainLinks](docs/Model/ProductExportRelationshipsSalesChannelDomainLinks.md)
 - [ProductExportRelationshipsSalesChannelLinks](docs/Model/ProductExportRelationshipsSalesChannelLinks.md)
 - [ProductExportRelationshipsStorefrontSalesChannel](docs/Model/ProductExportRelationshipsStorefrontSalesChannel.md)
 - [ProductExportRelationshipsStorefrontSalesChannelLinks](docs/Model/ProductExportRelationshipsStorefrontSalesChannelLinks.md)
 - [ProductFlat](docs/Model/ProductFlat.md)
 - [ProductKeywordDictionary](docs/Model/ProductKeywordDictionary.md)
 - [ProductKeywordDictionaryAttributes](docs/Model/ProductKeywordDictionaryAttributes.md)
 - [ProductKeywordDictionaryFlat](docs/Model/ProductKeywordDictionaryFlat.md)
 - [ProductKeywordDictionaryLinks](docs/Model/ProductKeywordDictionaryLinks.md)
 - [ProductKeywordDictionaryRelationships](docs/Model/ProductKeywordDictionaryRelationships.md)
 - [ProductKeywordDictionaryRelationshipsLanguage](docs/Model/ProductKeywordDictionaryRelationshipsLanguage.md)
 - [ProductKeywordDictionaryRelationshipsLanguageLinks](docs/Model/ProductKeywordDictionaryRelationshipsLanguageLinks.md)
 - [ProductLinks](docs/Model/ProductLinks.md)
 - [ProductManufacturer](docs/Model/ProductManufacturer.md)
 - [ProductManufacturerAttributes](docs/Model/ProductManufacturerAttributes.md)
 - [ProductManufacturerFlat](docs/Model/ProductManufacturerFlat.md)
 - [ProductManufacturerLinks](docs/Model/ProductManufacturerLinks.md)
 - [ProductManufacturerRelationships](docs/Model/ProductManufacturerRelationships.md)
 - [ProductManufacturerRelationshipsMedia](docs/Model/ProductManufacturerRelationshipsMedia.md)
 - [ProductManufacturerRelationshipsMediaLinks](docs/Model/ProductManufacturerRelationshipsMediaLinks.md)
 - [ProductManufacturerRelationshipsProducts](docs/Model/ProductManufacturerRelationshipsProducts.md)
 - [ProductManufacturerRelationshipsProductsData](docs/Model/ProductManufacturerRelationshipsProductsData.md)
 - [ProductManufacturerRelationshipsProductsLinks](docs/Model/ProductManufacturerRelationshipsProductsLinks.md)
 - [ProductMedia](docs/Model/ProductMedia.md)
 - [ProductMediaAttributes](docs/Model/ProductMediaAttributes.md)
 - [ProductMediaFlat](docs/Model/ProductMediaFlat.md)
 - [ProductMediaLinks](docs/Model/ProductMediaLinks.md)
 - [ProductMediaRelationships](docs/Model/ProductMediaRelationships.md)
 - [ProductMediaRelationshipsMedia](docs/Model/ProductMediaRelationshipsMedia.md)
 - [ProductMediaRelationshipsMediaLinks](docs/Model/ProductMediaRelationshipsMediaLinks.md)
 - [ProductMediaRelationshipsProduct](docs/Model/ProductMediaRelationshipsProduct.md)
 - [ProductMediaRelationshipsProductLinks](docs/Model/ProductMediaRelationshipsProductLinks.md)
 - [ProductOptionFlat](docs/Model/ProductOptionFlat.md)
 - [ProductPrice](docs/Model/ProductPrice.md)
 - [ProductPriceAttributes](docs/Model/ProductPriceAttributes.md)
 - [ProductPriceFlat](docs/Model/ProductPriceFlat.md)
 - [ProductPriceLinks](docs/Model/ProductPriceLinks.md)
 - [ProductPriceRelationships](docs/Model/ProductPriceRelationships.md)
 - [ProductPriceRelationshipsProduct](docs/Model/ProductPriceRelationshipsProduct.md)
 - [ProductPriceRelationshipsProductLinks](docs/Model/ProductPriceRelationshipsProductLinks.md)
 - [ProductPriceRelationshipsRule](docs/Model/ProductPriceRelationshipsRule.md)
 - [ProductPriceRelationshipsRuleLinks](docs/Model/ProductPriceRelationshipsRuleLinks.md)
 - [ProductPropertyFlat](docs/Model/ProductPropertyFlat.md)
 - [ProductRelationships](docs/Model/ProductRelationships.md)
 - [ProductRelationshipsCategories](docs/Model/ProductRelationshipsCategories.md)
 - [ProductRelationshipsCategoriesData](docs/Model/ProductRelationshipsCategoriesData.md)
 - [ProductRelationshipsCategoriesLinks](docs/Model/ProductRelationshipsCategoriesLinks.md)
 - [ProductRelationshipsCategoriesRo](docs/Model/ProductRelationshipsCategoriesRo.md)
 - [ProductRelationshipsCategoriesRoData](docs/Model/ProductRelationshipsCategoriesRoData.md)
 - [ProductRelationshipsCategoriesRoLinks](docs/Model/ProductRelationshipsCategoriesRoLinks.md)
 - [ProductRelationshipsChildren](docs/Model/ProductRelationshipsChildren.md)
 - [ProductRelationshipsChildrenData](docs/Model/ProductRelationshipsChildrenData.md)
 - [ProductRelationshipsChildrenLinks](docs/Model/ProductRelationshipsChildrenLinks.md)
 - [ProductRelationshipsConfiguratorSettings](docs/Model/ProductRelationshipsConfiguratorSettings.md)
 - [ProductRelationshipsConfiguratorSettingsData](docs/Model/ProductRelationshipsConfiguratorSettingsData.md)
 - [ProductRelationshipsConfiguratorSettingsLinks](docs/Model/ProductRelationshipsConfiguratorSettingsLinks.md)
 - [ProductRelationshipsCover](docs/Model/ProductRelationshipsCover.md)
 - [ProductRelationshipsCoverData](docs/Model/ProductRelationshipsCoverData.md)
 - [ProductRelationshipsCoverLinks](docs/Model/ProductRelationshipsCoverLinks.md)
 - [ProductRelationshipsCrossSellings](docs/Model/ProductRelationshipsCrossSellings.md)
 - [ProductRelationshipsCrossSellingsData](docs/Model/ProductRelationshipsCrossSellingsData.md)
 - [ProductRelationshipsCrossSellingsLinks](docs/Model/ProductRelationshipsCrossSellingsLinks.md)
 - [ProductRelationshipsDeliveryTime](docs/Model/ProductRelationshipsDeliveryTime.md)
 - [ProductRelationshipsDeliveryTimeData](docs/Model/ProductRelationshipsDeliveryTimeData.md)
 - [ProductRelationshipsDeliveryTimeLinks](docs/Model/ProductRelationshipsDeliveryTimeLinks.md)
 - [ProductRelationshipsMainCategories](docs/Model/ProductRelationshipsMainCategories.md)
 - [ProductRelationshipsMainCategoriesData](docs/Model/ProductRelationshipsMainCategoriesData.md)
 - [ProductRelationshipsMainCategoriesLinks](docs/Model/ProductRelationshipsMainCategoriesLinks.md)
 - [ProductRelationshipsManufacturer](docs/Model/ProductRelationshipsManufacturer.md)
 - [ProductRelationshipsManufacturerData](docs/Model/ProductRelationshipsManufacturerData.md)
 - [ProductRelationshipsManufacturerLinks](docs/Model/ProductRelationshipsManufacturerLinks.md)
 - [ProductRelationshipsMedia](docs/Model/ProductRelationshipsMedia.md)
 - [ProductRelationshipsMediaData](docs/Model/ProductRelationshipsMediaData.md)
 - [ProductRelationshipsMediaLinks](docs/Model/ProductRelationshipsMediaLinks.md)
 - [ProductRelationshipsOptions](docs/Model/ProductRelationshipsOptions.md)
 - [ProductRelationshipsOptionsData](docs/Model/ProductRelationshipsOptionsData.md)
 - [ProductRelationshipsOptionsLinks](docs/Model/ProductRelationshipsOptionsLinks.md)
 - [ProductRelationshipsOrderLineItems](docs/Model/ProductRelationshipsOrderLineItems.md)
 - [ProductRelationshipsOrderLineItemsData](docs/Model/ProductRelationshipsOrderLineItemsData.md)
 - [ProductRelationshipsOrderLineItemsLinks](docs/Model/ProductRelationshipsOrderLineItemsLinks.md)
 - [ProductRelationshipsParent](docs/Model/ProductRelationshipsParent.md)
 - [ProductRelationshipsParentLinks](docs/Model/ProductRelationshipsParentLinks.md)
 - [ProductRelationshipsPrices](docs/Model/ProductRelationshipsPrices.md)
 - [ProductRelationshipsPricesData](docs/Model/ProductRelationshipsPricesData.md)
 - [ProductRelationshipsPricesLinks](docs/Model/ProductRelationshipsPricesLinks.md)
 - [ProductRelationshipsProductReviews](docs/Model/ProductRelationshipsProductReviews.md)
 - [ProductRelationshipsProductReviewsData](docs/Model/ProductRelationshipsProductReviewsData.md)
 - [ProductRelationshipsProductReviewsLinks](docs/Model/ProductRelationshipsProductReviewsLinks.md)
 - [ProductRelationshipsProperties](docs/Model/ProductRelationshipsProperties.md)
 - [ProductRelationshipsPropertiesData](docs/Model/ProductRelationshipsPropertiesData.md)
 - [ProductRelationshipsPropertiesLinks](docs/Model/ProductRelationshipsPropertiesLinks.md)
 - [ProductRelationshipsSearchKeywords](docs/Model/ProductRelationshipsSearchKeywords.md)
 - [ProductRelationshipsSearchKeywordsData](docs/Model/ProductRelationshipsSearchKeywordsData.md)
 - [ProductRelationshipsSearchKeywordsLinks](docs/Model/ProductRelationshipsSearchKeywordsLinks.md)
 - [ProductRelationshipsSeoUrls](docs/Model/ProductRelationshipsSeoUrls.md)
 - [ProductRelationshipsSeoUrlsData](docs/Model/ProductRelationshipsSeoUrlsData.md)
 - [ProductRelationshipsSeoUrlsLinks](docs/Model/ProductRelationshipsSeoUrlsLinks.md)
 - [ProductRelationshipsTags](docs/Model/ProductRelationshipsTags.md)
 - [ProductRelationshipsTagsData](docs/Model/ProductRelationshipsTagsData.md)
 - [ProductRelationshipsTagsLinks](docs/Model/ProductRelationshipsTagsLinks.md)
 - [ProductRelationshipsTax](docs/Model/ProductRelationshipsTax.md)
 - [ProductRelationshipsTaxData](docs/Model/ProductRelationshipsTaxData.md)
 - [ProductRelationshipsTaxLinks](docs/Model/ProductRelationshipsTaxLinks.md)
 - [ProductRelationshipsUnit](docs/Model/ProductRelationshipsUnit.md)
 - [ProductRelationshipsUnitData](docs/Model/ProductRelationshipsUnitData.md)
 - [ProductRelationshipsUnitLinks](docs/Model/ProductRelationshipsUnitLinks.md)
 - [ProductRelationshipsVisibilities](docs/Model/ProductRelationshipsVisibilities.md)
 - [ProductRelationshipsVisibilitiesData](docs/Model/ProductRelationshipsVisibilitiesData.md)
 - [ProductRelationshipsVisibilitiesLinks](docs/Model/ProductRelationshipsVisibilitiesLinks.md)
 - [ProductReview](docs/Model/ProductReview.md)
 - [ProductReviewAttributes](docs/Model/ProductReviewAttributes.md)
 - [ProductReviewFlat](docs/Model/ProductReviewFlat.md)
 - [ProductReviewLinks](docs/Model/ProductReviewLinks.md)
 - [ProductReviewRelationships](docs/Model/ProductReviewRelationships.md)
 - [ProductReviewRelationshipsCustomer](docs/Model/ProductReviewRelationshipsCustomer.md)
 - [ProductReviewRelationshipsCustomerLinks](docs/Model/ProductReviewRelationshipsCustomerLinks.md)
 - [ProductReviewRelationshipsLanguage](docs/Model/ProductReviewRelationshipsLanguage.md)
 - [ProductReviewRelationshipsLanguageLinks](docs/Model/ProductReviewRelationshipsLanguageLinks.md)
 - [ProductReviewRelationshipsProduct](docs/Model/ProductReviewRelationshipsProduct.md)
 - [ProductReviewRelationshipsProductLinks](docs/Model/ProductReviewRelationshipsProductLinks.md)
 - [ProductReviewRelationshipsSalesChannel](docs/Model/ProductReviewRelationshipsSalesChannel.md)
 - [ProductReviewRelationshipsSalesChannelLinks](docs/Model/ProductReviewRelationshipsSalesChannelLinks.md)
 - [ProductSearchKeyword](docs/Model/ProductSearchKeyword.md)
 - [ProductSearchKeywordAttributes](docs/Model/ProductSearchKeywordAttributes.md)
 - [ProductSearchKeywordFlat](docs/Model/ProductSearchKeywordFlat.md)
 - [ProductSearchKeywordLinks](docs/Model/ProductSearchKeywordLinks.md)
 - [ProductSearchKeywordRelationships](docs/Model/ProductSearchKeywordRelationships.md)
 - [ProductSearchKeywordRelationshipsLanguage](docs/Model/ProductSearchKeywordRelationshipsLanguage.md)
 - [ProductSearchKeywordRelationshipsLanguageLinks](docs/Model/ProductSearchKeywordRelationshipsLanguageLinks.md)
 - [ProductSearchKeywordRelationshipsProduct](docs/Model/ProductSearchKeywordRelationshipsProduct.md)
 - [ProductSearchKeywordRelationshipsProductLinks](docs/Model/ProductSearchKeywordRelationshipsProductLinks.md)
 - [ProductStream](docs/Model/ProductStream.md)
 - [ProductStreamAttributes](docs/Model/ProductStreamAttributes.md)
 - [ProductStreamFilter](docs/Model/ProductStreamFilter.md)
 - [ProductStreamFilterAttributes](docs/Model/ProductStreamFilterAttributes.md)
 - [ProductStreamFilterFlat](docs/Model/ProductStreamFilterFlat.md)
 - [ProductStreamFilterLinks](docs/Model/ProductStreamFilterLinks.md)
 - [ProductStreamFilterRelationships](docs/Model/ProductStreamFilterRelationships.md)
 - [ProductStreamFilterRelationshipsParent](docs/Model/ProductStreamFilterRelationshipsParent.md)
 - [ProductStreamFilterRelationshipsParentData](docs/Model/ProductStreamFilterRelationshipsParentData.md)
 - [ProductStreamFilterRelationshipsParentLinks](docs/Model/ProductStreamFilterRelationshipsParentLinks.md)
 - [ProductStreamFilterRelationshipsProductStream](docs/Model/ProductStreamFilterRelationshipsProductStream.md)
 - [ProductStreamFilterRelationshipsProductStreamLinks](docs/Model/ProductStreamFilterRelationshipsProductStreamLinks.md)
 - [ProductStreamFilterRelationshipsQueries](docs/Model/ProductStreamFilterRelationshipsQueries.md)
 - [ProductStreamFilterRelationshipsQueriesData](docs/Model/ProductStreamFilterRelationshipsQueriesData.md)
 - [ProductStreamFilterRelationshipsQueriesLinks](docs/Model/ProductStreamFilterRelationshipsQueriesLinks.md)
 - [ProductStreamFlat](docs/Model/ProductStreamFlat.md)
 - [ProductStreamLinks](docs/Model/ProductStreamLinks.md)
 - [ProductStreamRelationships](docs/Model/ProductStreamRelationships.md)
 - [ProductStreamRelationshipsFilters](docs/Model/ProductStreamRelationshipsFilters.md)
 - [ProductStreamRelationshipsFiltersData](docs/Model/ProductStreamRelationshipsFiltersData.md)
 - [ProductStreamRelationshipsFiltersLinks](docs/Model/ProductStreamRelationshipsFiltersLinks.md)
 - [ProductStreamRelationshipsProductCrossSellings](docs/Model/ProductStreamRelationshipsProductCrossSellings.md)
 - [ProductStreamRelationshipsProductCrossSellingsData](docs/Model/ProductStreamRelationshipsProductCrossSellingsData.md)
 - [ProductStreamRelationshipsProductCrossSellingsLinks](docs/Model/ProductStreamRelationshipsProductCrossSellingsLinks.md)
 - [ProductStreamRelationshipsProductExports](docs/Model/ProductStreamRelationshipsProductExports.md)
 - [ProductStreamRelationshipsProductExportsData](docs/Model/ProductStreamRelationshipsProductExportsData.md)
 - [ProductStreamRelationshipsProductExportsLinks](docs/Model/ProductStreamRelationshipsProductExportsLinks.md)
 - [ProductTagFlat](docs/Model/ProductTagFlat.md)
 - [ProductVisibility](docs/Model/ProductVisibility.md)
 - [ProductVisibilityAttributes](docs/Model/ProductVisibilityAttributes.md)
 - [ProductVisibilityFlat](docs/Model/ProductVisibilityFlat.md)
 - [ProductVisibilityLinks](docs/Model/ProductVisibilityLinks.md)
 - [ProductVisibilityRelationships](docs/Model/ProductVisibilityRelationships.md)
 - [ProductVisibilityRelationshipsProduct](docs/Model/ProductVisibilityRelationshipsProduct.md)
 - [ProductVisibilityRelationshipsProductLinks](docs/Model/ProductVisibilityRelationshipsProductLinks.md)
 - [ProductVisibilityRelationshipsSalesChannel](docs/Model/ProductVisibilityRelationshipsSalesChannel.md)
 - [ProductVisibilityRelationshipsSalesChannelLinks](docs/Model/ProductVisibilityRelationshipsSalesChannelLinks.md)
 - [Promotion](docs/Model/Promotion.md)
 - [PromotionAttributes](docs/Model/PromotionAttributes.md)
 - [PromotionCartRuleFlat](docs/Model/PromotionCartRuleFlat.md)
 - [PromotionDiscount](docs/Model/PromotionDiscount.md)
 - [PromotionDiscountAttributes](docs/Model/PromotionDiscountAttributes.md)
 - [PromotionDiscountFlat](docs/Model/PromotionDiscountFlat.md)
 - [PromotionDiscountLinks](docs/Model/PromotionDiscountLinks.md)
 - [PromotionDiscountPrices](docs/Model/PromotionDiscountPrices.md)
 - [PromotionDiscountPricesAttributes](docs/Model/PromotionDiscountPricesAttributes.md)
 - [PromotionDiscountPricesFlat](docs/Model/PromotionDiscountPricesFlat.md)
 - [PromotionDiscountPricesLinks](docs/Model/PromotionDiscountPricesLinks.md)
 - [PromotionDiscountPricesRelationships](docs/Model/PromotionDiscountPricesRelationships.md)
 - [PromotionDiscountPricesRelationshipsCurrency](docs/Model/PromotionDiscountPricesRelationshipsCurrency.md)
 - [PromotionDiscountPricesRelationshipsCurrencyLinks](docs/Model/PromotionDiscountPricesRelationshipsCurrencyLinks.md)
 - [PromotionDiscountPricesRelationshipsPromotionDiscount](docs/Model/PromotionDiscountPricesRelationshipsPromotionDiscount.md)
 - [PromotionDiscountPricesRelationshipsPromotionDiscountData](docs/Model/PromotionDiscountPricesRelationshipsPromotionDiscountData.md)
 - [PromotionDiscountPricesRelationshipsPromotionDiscountLinks](docs/Model/PromotionDiscountPricesRelationshipsPromotionDiscountLinks.md)
 - [PromotionDiscountRelationships](docs/Model/PromotionDiscountRelationships.md)
 - [PromotionDiscountRelationshipsDiscountRules](docs/Model/PromotionDiscountRelationshipsDiscountRules.md)
 - [PromotionDiscountRelationshipsDiscountRulesData](docs/Model/PromotionDiscountRelationshipsDiscountRulesData.md)
 - [PromotionDiscountRelationshipsDiscountRulesLinks](docs/Model/PromotionDiscountRelationshipsDiscountRulesLinks.md)
 - [PromotionDiscountRelationshipsPromotion](docs/Model/PromotionDiscountRelationshipsPromotion.md)
 - [PromotionDiscountRelationshipsPromotionData](docs/Model/PromotionDiscountRelationshipsPromotionData.md)
 - [PromotionDiscountRelationshipsPromotionDiscountPrices](docs/Model/PromotionDiscountRelationshipsPromotionDiscountPrices.md)
 - [PromotionDiscountRelationshipsPromotionDiscountPricesData](docs/Model/PromotionDiscountRelationshipsPromotionDiscountPricesData.md)
 - [PromotionDiscountRelationshipsPromotionDiscountPricesLinks](docs/Model/PromotionDiscountRelationshipsPromotionDiscountPricesLinks.md)
 - [PromotionDiscountRelationshipsPromotionLinks](docs/Model/PromotionDiscountRelationshipsPromotionLinks.md)
 - [PromotionDiscountRuleFlat](docs/Model/PromotionDiscountRuleFlat.md)
 - [PromotionFlat](docs/Model/PromotionFlat.md)
 - [PromotionIndividualCode](docs/Model/PromotionIndividualCode.md)
 - [PromotionIndividualCodeAttributes](docs/Model/PromotionIndividualCodeAttributes.md)
 - [PromotionIndividualCodeFlat](docs/Model/PromotionIndividualCodeFlat.md)
 - [PromotionIndividualCodeLinks](docs/Model/PromotionIndividualCodeLinks.md)
 - [PromotionIndividualCodeRelationships](docs/Model/PromotionIndividualCodeRelationships.md)
 - [PromotionIndividualCodeRelationshipsPromotion](docs/Model/PromotionIndividualCodeRelationshipsPromotion.md)
 - [PromotionIndividualCodeRelationshipsPromotionLinks](docs/Model/PromotionIndividualCodeRelationshipsPromotionLinks.md)
 - [PromotionLinks](docs/Model/PromotionLinks.md)
 - [PromotionOrderRuleFlat](docs/Model/PromotionOrderRuleFlat.md)
 - [PromotionPersonaCustomerFlat](docs/Model/PromotionPersonaCustomerFlat.md)
 - [PromotionPersonaRuleFlat](docs/Model/PromotionPersonaRuleFlat.md)
 - [PromotionRelationships](docs/Model/PromotionRelationships.md)
 - [PromotionRelationshipsCartRules](docs/Model/PromotionRelationshipsCartRules.md)
 - [PromotionRelationshipsCartRulesData](docs/Model/PromotionRelationshipsCartRulesData.md)
 - [PromotionRelationshipsCartRulesLinks](docs/Model/PromotionRelationshipsCartRulesLinks.md)
 - [PromotionRelationshipsDiscounts](docs/Model/PromotionRelationshipsDiscounts.md)
 - [PromotionRelationshipsDiscountsData](docs/Model/PromotionRelationshipsDiscountsData.md)
 - [PromotionRelationshipsDiscountsLinks](docs/Model/PromotionRelationshipsDiscountsLinks.md)
 - [PromotionRelationshipsIndividualCodes](docs/Model/PromotionRelationshipsIndividualCodes.md)
 - [PromotionRelationshipsIndividualCodesData](docs/Model/PromotionRelationshipsIndividualCodesData.md)
 - [PromotionRelationshipsIndividualCodesLinks](docs/Model/PromotionRelationshipsIndividualCodesLinks.md)
 - [PromotionRelationshipsOrderRules](docs/Model/PromotionRelationshipsOrderRules.md)
 - [PromotionRelationshipsOrderRulesData](docs/Model/PromotionRelationshipsOrderRulesData.md)
 - [PromotionRelationshipsOrderRulesLinks](docs/Model/PromotionRelationshipsOrderRulesLinks.md)
 - [PromotionRelationshipsPersonaCustomers](docs/Model/PromotionRelationshipsPersonaCustomers.md)
 - [PromotionRelationshipsPersonaCustomersData](docs/Model/PromotionRelationshipsPersonaCustomersData.md)
 - [PromotionRelationshipsPersonaCustomersLinks](docs/Model/PromotionRelationshipsPersonaCustomersLinks.md)
 - [PromotionRelationshipsPersonaRules](docs/Model/PromotionRelationshipsPersonaRules.md)
 - [PromotionRelationshipsPersonaRulesData](docs/Model/PromotionRelationshipsPersonaRulesData.md)
 - [PromotionRelationshipsPersonaRulesLinks](docs/Model/PromotionRelationshipsPersonaRulesLinks.md)
 - [PromotionRelationshipsSalesChannels](docs/Model/PromotionRelationshipsSalesChannels.md)
 - [PromotionRelationshipsSalesChannelsData](docs/Model/PromotionRelationshipsSalesChannelsData.md)
 - [PromotionRelationshipsSalesChannelsLinks](docs/Model/PromotionRelationshipsSalesChannelsLinks.md)
 - [PromotionRelationshipsSetgroups](docs/Model/PromotionRelationshipsSetgroups.md)
 - [PromotionRelationshipsSetgroupsData](docs/Model/PromotionRelationshipsSetgroupsData.md)
 - [PromotionRelationshipsSetgroupsLinks](docs/Model/PromotionRelationshipsSetgroupsLinks.md)
 - [PromotionSalesChannel](docs/Model/PromotionSalesChannel.md)
 - [PromotionSalesChannelAttributes](docs/Model/PromotionSalesChannelAttributes.md)
 - [PromotionSalesChannelFlat](docs/Model/PromotionSalesChannelFlat.md)
 - [PromotionSalesChannelLinks](docs/Model/PromotionSalesChannelLinks.md)
 - [PromotionSalesChannelRelationships](docs/Model/PromotionSalesChannelRelationships.md)
 - [PromotionSalesChannelRelationshipsPromotion](docs/Model/PromotionSalesChannelRelationshipsPromotion.md)
 - [PromotionSalesChannelRelationshipsPromotionLinks](docs/Model/PromotionSalesChannelRelationshipsPromotionLinks.md)
 - [PromotionSalesChannelRelationshipsSalesChannel](docs/Model/PromotionSalesChannelRelationshipsSalesChannel.md)
 - [PromotionSalesChannelRelationshipsSalesChannelLinks](docs/Model/PromotionSalesChannelRelationshipsSalesChannelLinks.md)
 - [PromotionSetgroup](docs/Model/PromotionSetgroup.md)
 - [PromotionSetgroupAttributes](docs/Model/PromotionSetgroupAttributes.md)
 - [PromotionSetgroupFlat](docs/Model/PromotionSetgroupFlat.md)
 - [PromotionSetgroupLinks](docs/Model/PromotionSetgroupLinks.md)
 - [PromotionSetgroupRelationships](docs/Model/PromotionSetgroupRelationships.md)
 - [PromotionSetgroupRelationshipsPromotion](docs/Model/PromotionSetgroupRelationshipsPromotion.md)
 - [PromotionSetgroupRelationshipsPromotionLinks](docs/Model/PromotionSetgroupRelationshipsPromotionLinks.md)
 - [PromotionSetgroupRelationshipsSetGroupRules](docs/Model/PromotionSetgroupRelationshipsSetGroupRules.md)
 - [PromotionSetgroupRelationshipsSetGroupRulesData](docs/Model/PromotionSetgroupRelationshipsSetGroupRulesData.md)
 - [PromotionSetgroupRelationshipsSetGroupRulesLinks](docs/Model/PromotionSetgroupRelationshipsSetGroupRulesLinks.md)
 - [PromotionSetgroupRuleFlat](docs/Model/PromotionSetgroupRuleFlat.md)
 - [PropertyGroup](docs/Model/PropertyGroup.md)
 - [PropertyGroupAttributes](docs/Model/PropertyGroupAttributes.md)
 - [PropertyGroupFlat](docs/Model/PropertyGroupFlat.md)
 - [PropertyGroupLinks](docs/Model/PropertyGroupLinks.md)
 - [PropertyGroupOption](docs/Model/PropertyGroupOption.md)
 - [PropertyGroupOptionAttributes](docs/Model/PropertyGroupOptionAttributes.md)
 - [PropertyGroupOptionFlat](docs/Model/PropertyGroupOptionFlat.md)
 - [PropertyGroupOptionLinks](docs/Model/PropertyGroupOptionLinks.md)
 - [PropertyGroupOptionRelationships](docs/Model/PropertyGroupOptionRelationships.md)
 - [PropertyGroupOptionRelationshipsGroup](docs/Model/PropertyGroupOptionRelationshipsGroup.md)
 - [PropertyGroupOptionRelationshipsGroupData](docs/Model/PropertyGroupOptionRelationshipsGroupData.md)
 - [PropertyGroupOptionRelationshipsGroupLinks](docs/Model/PropertyGroupOptionRelationshipsGroupLinks.md)
 - [PropertyGroupOptionRelationshipsMedia](docs/Model/PropertyGroupOptionRelationshipsMedia.md)
 - [PropertyGroupOptionRelationshipsMediaLinks](docs/Model/PropertyGroupOptionRelationshipsMediaLinks.md)
 - [PropertyGroupOptionRelationshipsProductConfiguratorSettings](docs/Model/PropertyGroupOptionRelationshipsProductConfiguratorSettings.md)
 - [PropertyGroupOptionRelationshipsProductConfiguratorSettingsData](docs/Model/PropertyGroupOptionRelationshipsProductConfiguratorSettingsData.md)
 - [PropertyGroupOptionRelationshipsProductConfiguratorSettingsLinks](docs/Model/PropertyGroupOptionRelationshipsProductConfiguratorSettingsLinks.md)
 - [PropertyGroupOptionRelationshipsProductOptions](docs/Model/PropertyGroupOptionRelationshipsProductOptions.md)
 - [PropertyGroupOptionRelationshipsProductOptionsData](docs/Model/PropertyGroupOptionRelationshipsProductOptionsData.md)
 - [PropertyGroupOptionRelationshipsProductOptionsLinks](docs/Model/PropertyGroupOptionRelationshipsProductOptionsLinks.md)
 - [PropertyGroupOptionRelationshipsProductProperties](docs/Model/PropertyGroupOptionRelationshipsProductProperties.md)
 - [PropertyGroupOptionRelationshipsProductPropertiesData](docs/Model/PropertyGroupOptionRelationshipsProductPropertiesData.md)
 - [PropertyGroupOptionRelationshipsProductPropertiesLinks](docs/Model/PropertyGroupOptionRelationshipsProductPropertiesLinks.md)
 - [PropertyGroupRelationships](docs/Model/PropertyGroupRelationships.md)
 - [PropertyGroupRelationshipsOptions](docs/Model/PropertyGroupRelationshipsOptions.md)
 - [PropertyGroupRelationshipsOptionsData](docs/Model/PropertyGroupRelationshipsOptionsData.md)
 - [PropertyGroupRelationshipsOptionsLinks](docs/Model/PropertyGroupRelationshipsOptionsLinks.md)
 - [RelationshipLinks](docs/Model/RelationshipLinks.md)
 - [RelationshipToMany](docs/Model/RelationshipToMany.md)
 - [RelationshipToOne](docs/Model/RelationshipToOne.md)
 - [Relationships](docs/Model/Relationships.md)
 - [Resource](docs/Model/Resource.md)
 - [Rule](docs/Model/Rule.md)
 - [RuleAttributes](docs/Model/RuleAttributes.md)
 - [RuleCondition](docs/Model/RuleCondition.md)
 - [RuleConditionAttributes](docs/Model/RuleConditionAttributes.md)
 - [RuleConditionFlat](docs/Model/RuleConditionFlat.md)
 - [RuleConditionLinks](docs/Model/RuleConditionLinks.md)
 - [RuleConditionRelationships](docs/Model/RuleConditionRelationships.md)
 - [RuleConditionRelationshipsChildren](docs/Model/RuleConditionRelationshipsChildren.md)
 - [RuleConditionRelationshipsChildrenData](docs/Model/RuleConditionRelationshipsChildrenData.md)
 - [RuleConditionRelationshipsChildrenLinks](docs/Model/RuleConditionRelationshipsChildrenLinks.md)
 - [RuleConditionRelationshipsParent](docs/Model/RuleConditionRelationshipsParent.md)
 - [RuleConditionRelationshipsParentData](docs/Model/RuleConditionRelationshipsParentData.md)
 - [RuleConditionRelationshipsParentLinks](docs/Model/RuleConditionRelationshipsParentLinks.md)
 - [RuleConditionRelationshipsRule](docs/Model/RuleConditionRelationshipsRule.md)
 - [RuleConditionRelationshipsRuleLinks](docs/Model/RuleConditionRelationshipsRuleLinks.md)
 - [RuleFlat](docs/Model/RuleFlat.md)
 - [RuleLinks](docs/Model/RuleLinks.md)
 - [RuleRelationships](docs/Model/RuleRelationships.md)
 - [RuleRelationshipsCartPromotions](docs/Model/RuleRelationshipsCartPromotions.md)
 - [RuleRelationshipsCartPromotionsData](docs/Model/RuleRelationshipsCartPromotionsData.md)
 - [RuleRelationshipsCartPromotionsLinks](docs/Model/RuleRelationshipsCartPromotionsLinks.md)
 - [RuleRelationshipsConditions](docs/Model/RuleRelationshipsConditions.md)
 - [RuleRelationshipsConditionsData](docs/Model/RuleRelationshipsConditionsData.md)
 - [RuleRelationshipsConditionsLinks](docs/Model/RuleRelationshipsConditionsLinks.md)
 - [RuleRelationshipsOrderPromotions](docs/Model/RuleRelationshipsOrderPromotions.md)
 - [RuleRelationshipsOrderPromotionsData](docs/Model/RuleRelationshipsOrderPromotionsData.md)
 - [RuleRelationshipsOrderPromotionsLinks](docs/Model/RuleRelationshipsOrderPromotionsLinks.md)
 - [RuleRelationshipsPaymentMethods](docs/Model/RuleRelationshipsPaymentMethods.md)
 - [RuleRelationshipsPaymentMethodsData](docs/Model/RuleRelationshipsPaymentMethodsData.md)
 - [RuleRelationshipsPaymentMethodsLinks](docs/Model/RuleRelationshipsPaymentMethodsLinks.md)
 - [RuleRelationshipsPersonaPromotions](docs/Model/RuleRelationshipsPersonaPromotions.md)
 - [RuleRelationshipsPersonaPromotionsData](docs/Model/RuleRelationshipsPersonaPromotionsData.md)
 - [RuleRelationshipsPersonaPromotionsLinks](docs/Model/RuleRelationshipsPersonaPromotionsLinks.md)
 - [RuleRelationshipsProductPrices](docs/Model/RuleRelationshipsProductPrices.md)
 - [RuleRelationshipsProductPricesData](docs/Model/RuleRelationshipsProductPricesData.md)
 - [RuleRelationshipsProductPricesLinks](docs/Model/RuleRelationshipsProductPricesLinks.md)
 - [RuleRelationshipsPromotionDiscounts](docs/Model/RuleRelationshipsPromotionDiscounts.md)
 - [RuleRelationshipsPromotionDiscountsData](docs/Model/RuleRelationshipsPromotionDiscountsData.md)
 - [RuleRelationshipsPromotionDiscountsLinks](docs/Model/RuleRelationshipsPromotionDiscountsLinks.md)
 - [RuleRelationshipsPromotionSetGroups](docs/Model/RuleRelationshipsPromotionSetGroups.md)
 - [RuleRelationshipsPromotionSetGroupsData](docs/Model/RuleRelationshipsPromotionSetGroupsData.md)
 - [RuleRelationshipsPromotionSetGroupsLinks](docs/Model/RuleRelationshipsPromotionSetGroupsLinks.md)
 - [RuleRelationshipsShippingMethodPriceCalculations](docs/Model/RuleRelationshipsShippingMethodPriceCalculations.md)
 - [RuleRelationshipsShippingMethodPriceCalculationsData](docs/Model/RuleRelationshipsShippingMethodPriceCalculationsData.md)
 - [RuleRelationshipsShippingMethodPriceCalculationsLinks](docs/Model/RuleRelationshipsShippingMethodPriceCalculationsLinks.md)
 - [RuleRelationshipsShippingMethodPrices](docs/Model/RuleRelationshipsShippingMethodPrices.md)
 - [RuleRelationshipsShippingMethodPricesData](docs/Model/RuleRelationshipsShippingMethodPricesData.md)
 - [RuleRelationshipsShippingMethodPricesLinks](docs/Model/RuleRelationshipsShippingMethodPricesLinks.md)
 - [RuleRelationshipsShippingMethods](docs/Model/RuleRelationshipsShippingMethods.md)
 - [RuleRelationshipsShippingMethodsData](docs/Model/RuleRelationshipsShippingMethodsData.md)
 - [RuleRelationshipsShippingMethodsLinks](docs/Model/RuleRelationshipsShippingMethodsLinks.md)
 - [SalesChannel](docs/Model/SalesChannel.md)
 - [SalesChannelAttributes](docs/Model/SalesChannelAttributes.md)
 - [SalesChannelAttributesExtensions](docs/Model/SalesChannelAttributesExtensions.md)
 - [SalesChannelAttributesExtensionsThemes](docs/Model/SalesChannelAttributesExtensionsThemes.md)
 - [SalesChannelAttributesExtensionsThemesData](docs/Model/SalesChannelAttributesExtensionsThemesData.md)
 - [SalesChannelAttributesExtensionsThemesLinks](docs/Model/SalesChannelAttributesExtensionsThemesLinks.md)
 - [SalesChannelCountryFlat](docs/Model/SalesChannelCountryFlat.md)
 - [SalesChannelCurrencyFlat](docs/Model/SalesChannelCurrencyFlat.md)
 - [SalesChannelDomain](docs/Model/SalesChannelDomain.md)
 - [SalesChannelDomainAttributes](docs/Model/SalesChannelDomainAttributes.md)
 - [SalesChannelDomainFlat](docs/Model/SalesChannelDomainFlat.md)
 - [SalesChannelDomainLinks](docs/Model/SalesChannelDomainLinks.md)
 - [SalesChannelDomainRelationships](docs/Model/SalesChannelDomainRelationships.md)
 - [SalesChannelDomainRelationshipsCurrency](docs/Model/SalesChannelDomainRelationshipsCurrency.md)
 - [SalesChannelDomainRelationshipsCurrencyLinks](docs/Model/SalesChannelDomainRelationshipsCurrencyLinks.md)
 - [SalesChannelDomainRelationshipsLanguage](docs/Model/SalesChannelDomainRelationshipsLanguage.md)
 - [SalesChannelDomainRelationshipsLanguageLinks](docs/Model/SalesChannelDomainRelationshipsLanguageLinks.md)
 - [SalesChannelDomainRelationshipsProductExports](docs/Model/SalesChannelDomainRelationshipsProductExports.md)
 - [SalesChannelDomainRelationshipsProductExportsData](docs/Model/SalesChannelDomainRelationshipsProductExportsData.md)
 - [SalesChannelDomainRelationshipsProductExportsLinks](docs/Model/SalesChannelDomainRelationshipsProductExportsLinks.md)
 - [SalesChannelDomainRelationshipsSalesChannel](docs/Model/SalesChannelDomainRelationshipsSalesChannel.md)
 - [SalesChannelDomainRelationshipsSalesChannelLinks](docs/Model/SalesChannelDomainRelationshipsSalesChannelLinks.md)
 - [SalesChannelDomainRelationshipsSnippetSet](docs/Model/SalesChannelDomainRelationshipsSnippetSet.md)
 - [SalesChannelDomainRelationshipsSnippetSetData](docs/Model/SalesChannelDomainRelationshipsSnippetSetData.md)
 - [SalesChannelDomainRelationshipsSnippetSetLinks](docs/Model/SalesChannelDomainRelationshipsSnippetSetLinks.md)
 - [SalesChannelFlat](docs/Model/SalesChannelFlat.md)
 - [SalesChannelFlatExtensions](docs/Model/SalesChannelFlatExtensions.md)
 - [SalesChannelLanguageFlat](docs/Model/SalesChannelLanguageFlat.md)
 - [SalesChannelLinks](docs/Model/SalesChannelLinks.md)
 - [SalesChannelPaymentMethodFlat](docs/Model/SalesChannelPaymentMethodFlat.md)
 - [SalesChannelRelationships](docs/Model/SalesChannelRelationships.md)
 - [SalesChannelRelationshipsCountries](docs/Model/SalesChannelRelationshipsCountries.md)
 - [SalesChannelRelationshipsCountriesData](docs/Model/SalesChannelRelationshipsCountriesData.md)
 - [SalesChannelRelationshipsCountriesLinks](docs/Model/SalesChannelRelationshipsCountriesLinks.md)
 - [SalesChannelRelationshipsCountry](docs/Model/SalesChannelRelationshipsCountry.md)
 - [SalesChannelRelationshipsCountryLinks](docs/Model/SalesChannelRelationshipsCountryLinks.md)
 - [SalesChannelRelationshipsCurrencies](docs/Model/SalesChannelRelationshipsCurrencies.md)
 - [SalesChannelRelationshipsCurrenciesData](docs/Model/SalesChannelRelationshipsCurrenciesData.md)
 - [SalesChannelRelationshipsCurrenciesLinks](docs/Model/SalesChannelRelationshipsCurrenciesLinks.md)
 - [SalesChannelRelationshipsCurrency](docs/Model/SalesChannelRelationshipsCurrency.md)
 - [SalesChannelRelationshipsCurrencyLinks](docs/Model/SalesChannelRelationshipsCurrencyLinks.md)
 - [SalesChannelRelationshipsCustomerGroup](docs/Model/SalesChannelRelationshipsCustomerGroup.md)
 - [SalesChannelRelationshipsCustomerGroupLinks](docs/Model/SalesChannelRelationshipsCustomerGroupLinks.md)
 - [SalesChannelRelationshipsCustomers](docs/Model/SalesChannelRelationshipsCustomers.md)
 - [SalesChannelRelationshipsCustomersData](docs/Model/SalesChannelRelationshipsCustomersData.md)
 - [SalesChannelRelationshipsCustomersLinks](docs/Model/SalesChannelRelationshipsCustomersLinks.md)
 - [SalesChannelRelationshipsDocumentBaseConfigSalesChannels](docs/Model/SalesChannelRelationshipsDocumentBaseConfigSalesChannels.md)
 - [SalesChannelRelationshipsDocumentBaseConfigSalesChannelsData](docs/Model/SalesChannelRelationshipsDocumentBaseConfigSalesChannelsData.md)
 - [SalesChannelRelationshipsDocumentBaseConfigSalesChannelsLinks](docs/Model/SalesChannelRelationshipsDocumentBaseConfigSalesChannelsLinks.md)
 - [SalesChannelRelationshipsDomains](docs/Model/SalesChannelRelationshipsDomains.md)
 - [SalesChannelRelationshipsDomainsData](docs/Model/SalesChannelRelationshipsDomainsData.md)
 - [SalesChannelRelationshipsDomainsLinks](docs/Model/SalesChannelRelationshipsDomainsLinks.md)
 - [SalesChannelRelationshipsFooterCategory](docs/Model/SalesChannelRelationshipsFooterCategory.md)
 - [SalesChannelRelationshipsFooterCategoryLinks](docs/Model/SalesChannelRelationshipsFooterCategoryLinks.md)
 - [SalesChannelRelationshipsLanguage](docs/Model/SalesChannelRelationshipsLanguage.md)
 - [SalesChannelRelationshipsLanguageLinks](docs/Model/SalesChannelRelationshipsLanguageLinks.md)
 - [SalesChannelRelationshipsLanguages](docs/Model/SalesChannelRelationshipsLanguages.md)
 - [SalesChannelRelationshipsLanguagesData](docs/Model/SalesChannelRelationshipsLanguagesData.md)
 - [SalesChannelRelationshipsLanguagesLinks](docs/Model/SalesChannelRelationshipsLanguagesLinks.md)
 - [SalesChannelRelationshipsMailHeaderFooter](docs/Model/SalesChannelRelationshipsMailHeaderFooter.md)
 - [SalesChannelRelationshipsMailHeaderFooterData](docs/Model/SalesChannelRelationshipsMailHeaderFooterData.md)
 - [SalesChannelRelationshipsMailHeaderFooterLinks](docs/Model/SalesChannelRelationshipsMailHeaderFooterLinks.md)
 - [SalesChannelRelationshipsMailTemplates](docs/Model/SalesChannelRelationshipsMailTemplates.md)
 - [SalesChannelRelationshipsMailTemplatesData](docs/Model/SalesChannelRelationshipsMailTemplatesData.md)
 - [SalesChannelRelationshipsMailTemplatesLinks](docs/Model/SalesChannelRelationshipsMailTemplatesLinks.md)
 - [SalesChannelRelationshipsMainCategories](docs/Model/SalesChannelRelationshipsMainCategories.md)
 - [SalesChannelRelationshipsMainCategoriesData](docs/Model/SalesChannelRelationshipsMainCategoriesData.md)
 - [SalesChannelRelationshipsMainCategoriesLinks](docs/Model/SalesChannelRelationshipsMainCategoriesLinks.md)
 - [SalesChannelRelationshipsNavigationCategory](docs/Model/SalesChannelRelationshipsNavigationCategory.md)
 - [SalesChannelRelationshipsNavigationCategoryLinks](docs/Model/SalesChannelRelationshipsNavigationCategoryLinks.md)
 - [SalesChannelRelationshipsNewsletterRecipients](docs/Model/SalesChannelRelationshipsNewsletterRecipients.md)
 - [SalesChannelRelationshipsNewsletterRecipientsData](docs/Model/SalesChannelRelationshipsNewsletterRecipientsData.md)
 - [SalesChannelRelationshipsNewsletterRecipientsLinks](docs/Model/SalesChannelRelationshipsNewsletterRecipientsLinks.md)
 - [SalesChannelRelationshipsNumberRangeSalesChannels](docs/Model/SalesChannelRelationshipsNumberRangeSalesChannels.md)
 - [SalesChannelRelationshipsNumberRangeSalesChannelsData](docs/Model/SalesChannelRelationshipsNumberRangeSalesChannelsData.md)
 - [SalesChannelRelationshipsNumberRangeSalesChannelsLinks](docs/Model/SalesChannelRelationshipsNumberRangeSalesChannelsLinks.md)
 - [SalesChannelRelationshipsOrders](docs/Model/SalesChannelRelationshipsOrders.md)
 - [SalesChannelRelationshipsOrdersData](docs/Model/SalesChannelRelationshipsOrdersData.md)
 - [SalesChannelRelationshipsOrdersLinks](docs/Model/SalesChannelRelationshipsOrdersLinks.md)
 - [SalesChannelRelationshipsPaymentMethod](docs/Model/SalesChannelRelationshipsPaymentMethod.md)
 - [SalesChannelRelationshipsPaymentMethodLinks](docs/Model/SalesChannelRelationshipsPaymentMethodLinks.md)
 - [SalesChannelRelationshipsPaymentMethods](docs/Model/SalesChannelRelationshipsPaymentMethods.md)
 - [SalesChannelRelationshipsPaymentMethodsData](docs/Model/SalesChannelRelationshipsPaymentMethodsData.md)
 - [SalesChannelRelationshipsPaymentMethodsLinks](docs/Model/SalesChannelRelationshipsPaymentMethodsLinks.md)
 - [SalesChannelRelationshipsProductExports](docs/Model/SalesChannelRelationshipsProductExports.md)
 - [SalesChannelRelationshipsProductExportsData](docs/Model/SalesChannelRelationshipsProductExportsData.md)
 - [SalesChannelRelationshipsProductExportsLinks](docs/Model/SalesChannelRelationshipsProductExportsLinks.md)
 - [SalesChannelRelationshipsProductReviews](docs/Model/SalesChannelRelationshipsProductReviews.md)
 - [SalesChannelRelationshipsProductReviewsData](docs/Model/SalesChannelRelationshipsProductReviewsData.md)
 - [SalesChannelRelationshipsProductReviewsLinks](docs/Model/SalesChannelRelationshipsProductReviewsLinks.md)
 - [SalesChannelRelationshipsProductVisibilities](docs/Model/SalesChannelRelationshipsProductVisibilities.md)
 - [SalesChannelRelationshipsProductVisibilitiesData](docs/Model/SalesChannelRelationshipsProductVisibilitiesData.md)
 - [SalesChannelRelationshipsProductVisibilitiesLinks](docs/Model/SalesChannelRelationshipsProductVisibilitiesLinks.md)
 - [SalesChannelRelationshipsPromotionSalesChannels](docs/Model/SalesChannelRelationshipsPromotionSalesChannels.md)
 - [SalesChannelRelationshipsPromotionSalesChannelsData](docs/Model/SalesChannelRelationshipsPromotionSalesChannelsData.md)
 - [SalesChannelRelationshipsPromotionSalesChannelsLinks](docs/Model/SalesChannelRelationshipsPromotionSalesChannelsLinks.md)
 - [SalesChannelRelationshipsSeoUrlTemplates](docs/Model/SalesChannelRelationshipsSeoUrlTemplates.md)
 - [SalesChannelRelationshipsSeoUrlTemplatesData](docs/Model/SalesChannelRelationshipsSeoUrlTemplatesData.md)
 - [SalesChannelRelationshipsSeoUrlTemplatesLinks](docs/Model/SalesChannelRelationshipsSeoUrlTemplatesLinks.md)
 - [SalesChannelRelationshipsSeoUrls](docs/Model/SalesChannelRelationshipsSeoUrls.md)
 - [SalesChannelRelationshipsSeoUrlsData](docs/Model/SalesChannelRelationshipsSeoUrlsData.md)
 - [SalesChannelRelationshipsSeoUrlsLinks](docs/Model/SalesChannelRelationshipsSeoUrlsLinks.md)
 - [SalesChannelRelationshipsServiceCategory](docs/Model/SalesChannelRelationshipsServiceCategory.md)
 - [SalesChannelRelationshipsServiceCategoryLinks](docs/Model/SalesChannelRelationshipsServiceCategoryLinks.md)
 - [SalesChannelRelationshipsShippingMethod](docs/Model/SalesChannelRelationshipsShippingMethod.md)
 - [SalesChannelRelationshipsShippingMethodLinks](docs/Model/SalesChannelRelationshipsShippingMethodLinks.md)
 - [SalesChannelRelationshipsShippingMethods](docs/Model/SalesChannelRelationshipsShippingMethods.md)
 - [SalesChannelRelationshipsShippingMethodsData](docs/Model/SalesChannelRelationshipsShippingMethodsData.md)
 - [SalesChannelRelationshipsShippingMethodsLinks](docs/Model/SalesChannelRelationshipsShippingMethodsLinks.md)
 - [SalesChannelRelationshipsSystemConfigs](docs/Model/SalesChannelRelationshipsSystemConfigs.md)
 - [SalesChannelRelationshipsSystemConfigsData](docs/Model/SalesChannelRelationshipsSystemConfigsData.md)
 - [SalesChannelRelationshipsSystemConfigsLinks](docs/Model/SalesChannelRelationshipsSystemConfigsLinks.md)
 - [SalesChannelRelationshipsType](docs/Model/SalesChannelRelationshipsType.md)
 - [SalesChannelRelationshipsTypeData](docs/Model/SalesChannelRelationshipsTypeData.md)
 - [SalesChannelRelationshipsTypeLinks](docs/Model/SalesChannelRelationshipsTypeLinks.md)
 - [SalesChannelShippingMethodFlat](docs/Model/SalesChannelShippingMethodFlat.md)
 - [SalesChannelType](docs/Model/SalesChannelType.md)
 - [SalesChannelTypeAttributes](docs/Model/SalesChannelTypeAttributes.md)
 - [SalesChannelTypeFlat](docs/Model/SalesChannelTypeFlat.md)
 - [SalesChannelTypeLinks](docs/Model/SalesChannelTypeLinks.md)
 - [SalesChannelTypeRelationships](docs/Model/SalesChannelTypeRelationships.md)
 - [SalesChannelTypeRelationshipsSalesChannels](docs/Model/SalesChannelTypeRelationshipsSalesChannels.md)
 - [SalesChannelTypeRelationshipsSalesChannelsData](docs/Model/SalesChannelTypeRelationshipsSalesChannelsData.md)
 - [SalesChannelTypeRelationshipsSalesChannelsLinks](docs/Model/SalesChannelTypeRelationshipsSalesChannelsLinks.md)
 - [Salutation](docs/Model/Salutation.md)
 - [SalutationAttributes](docs/Model/SalutationAttributes.md)
 - [SalutationFlat](docs/Model/SalutationFlat.md)
 - [SalutationLinks](docs/Model/SalutationLinks.md)
 - [SalutationRelationships](docs/Model/SalutationRelationships.md)
 - [SalutationRelationshipsCustomerAddresses](docs/Model/SalutationRelationshipsCustomerAddresses.md)
 - [SalutationRelationshipsCustomerAddressesData](docs/Model/SalutationRelationshipsCustomerAddressesData.md)
 - [SalutationRelationshipsCustomerAddressesLinks](docs/Model/SalutationRelationshipsCustomerAddressesLinks.md)
 - [SalutationRelationshipsCustomers](docs/Model/SalutationRelationshipsCustomers.md)
 - [SalutationRelationshipsCustomersData](docs/Model/SalutationRelationshipsCustomersData.md)
 - [SalutationRelationshipsCustomersLinks](docs/Model/SalutationRelationshipsCustomersLinks.md)
 - [SalutationRelationshipsNewsletterRecipients](docs/Model/SalutationRelationshipsNewsletterRecipients.md)
 - [SalutationRelationshipsNewsletterRecipientsData](docs/Model/SalutationRelationshipsNewsletterRecipientsData.md)
 - [SalutationRelationshipsNewsletterRecipientsLinks](docs/Model/SalutationRelationshipsNewsletterRecipientsLinks.md)
 - [SalutationRelationshipsOrderAddresses](docs/Model/SalutationRelationshipsOrderAddresses.md)
 - [SalutationRelationshipsOrderAddressesData](docs/Model/SalutationRelationshipsOrderAddressesData.md)
 - [SalutationRelationshipsOrderAddressesLinks](docs/Model/SalutationRelationshipsOrderAddressesLinks.md)
 - [SalutationRelationshipsOrderCustomers](docs/Model/SalutationRelationshipsOrderCustomers.md)
 - [SalutationRelationshipsOrderCustomersData](docs/Model/SalutationRelationshipsOrderCustomersData.md)
 - [SalutationRelationshipsOrderCustomersLinks](docs/Model/SalutationRelationshipsOrderCustomersLinks.md)
 - [ScheduledTask](docs/Model/ScheduledTask.md)
 - [ScheduledTaskAttributes](docs/Model/ScheduledTaskAttributes.md)
 - [ScheduledTaskFlat](docs/Model/ScheduledTaskFlat.md)
 - [ScheduledTaskLinks](docs/Model/ScheduledTaskLinks.md)
 - [ScheduledTaskRelationships](docs/Model/ScheduledTaskRelationships.md)
 - [ScheduledTaskRelationshipsDeadMessages](docs/Model/ScheduledTaskRelationshipsDeadMessages.md)
 - [ScheduledTaskRelationshipsDeadMessagesData](docs/Model/ScheduledTaskRelationshipsDeadMessagesData.md)
 - [ScheduledTaskRelationshipsDeadMessagesLinks](docs/Model/ScheduledTaskRelationshipsDeadMessagesLinks.md)
 - [SeoUrl](docs/Model/SeoUrl.md)
 - [SeoUrlAttributes](docs/Model/SeoUrlAttributes.md)
 - [SeoUrlFlat](docs/Model/SeoUrlFlat.md)
 - [SeoUrlLinks](docs/Model/SeoUrlLinks.md)
 - [SeoUrlRelationships](docs/Model/SeoUrlRelationships.md)
 - [SeoUrlRelationshipsLanguage](docs/Model/SeoUrlRelationshipsLanguage.md)
 - [SeoUrlRelationshipsLanguageLinks](docs/Model/SeoUrlRelationshipsLanguageLinks.md)
 - [SeoUrlRelationshipsSalesChannel](docs/Model/SeoUrlRelationshipsSalesChannel.md)
 - [SeoUrlRelationshipsSalesChannelLinks](docs/Model/SeoUrlRelationshipsSalesChannelLinks.md)
 - [SeoUrlTemplate](docs/Model/SeoUrlTemplate.md)
 - [SeoUrlTemplateAttributes](docs/Model/SeoUrlTemplateAttributes.md)
 - [SeoUrlTemplateFlat](docs/Model/SeoUrlTemplateFlat.md)
 - [SeoUrlTemplateLinks](docs/Model/SeoUrlTemplateLinks.md)
 - [SeoUrlTemplateRelationships](docs/Model/SeoUrlTemplateRelationships.md)
 - [SeoUrlTemplateRelationshipsSalesChannel](docs/Model/SeoUrlTemplateRelationshipsSalesChannel.md)
 - [SeoUrlTemplateRelationshipsSalesChannelLinks](docs/Model/SeoUrlTemplateRelationshipsSalesChannelLinks.md)
 - [ShippingMethod](docs/Model/ShippingMethod.md)
 - [ShippingMethodAttributes](docs/Model/ShippingMethodAttributes.md)
 - [ShippingMethodFlat](docs/Model/ShippingMethodFlat.md)
 - [ShippingMethodLinks](docs/Model/ShippingMethodLinks.md)
 - [ShippingMethodPrice](docs/Model/ShippingMethodPrice.md)
 - [ShippingMethodPriceAttributes](docs/Model/ShippingMethodPriceAttributes.md)
 - [ShippingMethodPriceFlat](docs/Model/ShippingMethodPriceFlat.md)
 - [ShippingMethodPriceLinks](docs/Model/ShippingMethodPriceLinks.md)
 - [ShippingMethodPriceRelationships](docs/Model/ShippingMethodPriceRelationships.md)
 - [ShippingMethodPriceRelationshipsCalculationRule](docs/Model/ShippingMethodPriceRelationshipsCalculationRule.md)
 - [ShippingMethodPriceRelationshipsCalculationRuleLinks](docs/Model/ShippingMethodPriceRelationshipsCalculationRuleLinks.md)
 - [ShippingMethodPriceRelationshipsCurrency](docs/Model/ShippingMethodPriceRelationshipsCurrency.md)
 - [ShippingMethodPriceRelationshipsCurrencyLinks](docs/Model/ShippingMethodPriceRelationshipsCurrencyLinks.md)
 - [ShippingMethodPriceRelationshipsRule](docs/Model/ShippingMethodPriceRelationshipsRule.md)
 - [ShippingMethodPriceRelationshipsRuleLinks](docs/Model/ShippingMethodPriceRelationshipsRuleLinks.md)
 - [ShippingMethodPriceRelationshipsShippingMethod](docs/Model/ShippingMethodPriceRelationshipsShippingMethod.md)
 - [ShippingMethodPriceRelationshipsShippingMethodLinks](docs/Model/ShippingMethodPriceRelationshipsShippingMethodLinks.md)
 - [ShippingMethodRelationships](docs/Model/ShippingMethodRelationships.md)
 - [ShippingMethodRelationshipsAvailabilityRule](docs/Model/ShippingMethodRelationshipsAvailabilityRule.md)
 - [ShippingMethodRelationshipsAvailabilityRuleLinks](docs/Model/ShippingMethodRelationshipsAvailabilityRuleLinks.md)
 - [ShippingMethodRelationshipsDeliveryTime](docs/Model/ShippingMethodRelationshipsDeliveryTime.md)
 - [ShippingMethodRelationshipsDeliveryTimeLinks](docs/Model/ShippingMethodRelationshipsDeliveryTimeLinks.md)
 - [ShippingMethodRelationshipsMedia](docs/Model/ShippingMethodRelationshipsMedia.md)
 - [ShippingMethodRelationshipsMediaLinks](docs/Model/ShippingMethodRelationshipsMediaLinks.md)
 - [ShippingMethodRelationshipsOrderDeliveries](docs/Model/ShippingMethodRelationshipsOrderDeliveries.md)
 - [ShippingMethodRelationshipsOrderDeliveriesData](docs/Model/ShippingMethodRelationshipsOrderDeliveriesData.md)
 - [ShippingMethodRelationshipsOrderDeliveriesLinks](docs/Model/ShippingMethodRelationshipsOrderDeliveriesLinks.md)
 - [ShippingMethodRelationshipsPrices](docs/Model/ShippingMethodRelationshipsPrices.md)
 - [ShippingMethodRelationshipsPricesData](docs/Model/ShippingMethodRelationshipsPricesData.md)
 - [ShippingMethodRelationshipsPricesLinks](docs/Model/ShippingMethodRelationshipsPricesLinks.md)
 - [ShippingMethodRelationshipsSalesChannelDefaultAssignments](docs/Model/ShippingMethodRelationshipsSalesChannelDefaultAssignments.md)
 - [ShippingMethodRelationshipsSalesChannelDefaultAssignmentsData](docs/Model/ShippingMethodRelationshipsSalesChannelDefaultAssignmentsData.md)
 - [ShippingMethodRelationshipsSalesChannelDefaultAssignmentsLinks](docs/Model/ShippingMethodRelationshipsSalesChannelDefaultAssignmentsLinks.md)
 - [ShippingMethodRelationshipsSalesChannels](docs/Model/ShippingMethodRelationshipsSalesChannels.md)
 - [ShippingMethodRelationshipsSalesChannelsData](docs/Model/ShippingMethodRelationshipsSalesChannelsData.md)
 - [ShippingMethodRelationshipsSalesChannelsLinks](docs/Model/ShippingMethodRelationshipsSalesChannelsLinks.md)
 - [ShippingMethodRelationshipsTags](docs/Model/ShippingMethodRelationshipsTags.md)
 - [ShippingMethodRelationshipsTagsData](docs/Model/ShippingMethodRelationshipsTagsData.md)
 - [ShippingMethodRelationshipsTagsLinks](docs/Model/ShippingMethodRelationshipsTagsLinks.md)
 - [ShippingMethodTagFlat](docs/Model/ShippingMethodTagFlat.md)
 - [Snippet](docs/Model/Snippet.md)
 - [SnippetAttributes](docs/Model/SnippetAttributes.md)
 - [SnippetFlat](docs/Model/SnippetFlat.md)
 - [SnippetLinks](docs/Model/SnippetLinks.md)
 - [SnippetRelationships](docs/Model/SnippetRelationships.md)
 - [SnippetRelationshipsSet](docs/Model/SnippetRelationshipsSet.md)
 - [SnippetRelationshipsSetLinks](docs/Model/SnippetRelationshipsSetLinks.md)
 - [SnippetSet](docs/Model/SnippetSet.md)
 - [SnippetSetAttributes](docs/Model/SnippetSetAttributes.md)
 - [SnippetSetFlat](docs/Model/SnippetSetFlat.md)
 - [SnippetSetLinks](docs/Model/SnippetSetLinks.md)
 - [SnippetSetRelationships](docs/Model/SnippetSetRelationships.md)
 - [SnippetSetRelationshipsSalesChannelDomains](docs/Model/SnippetSetRelationshipsSalesChannelDomains.md)
 - [SnippetSetRelationshipsSalesChannelDomainsData](docs/Model/SnippetSetRelationshipsSalesChannelDomainsData.md)
 - [SnippetSetRelationshipsSalesChannelDomainsLinks](docs/Model/SnippetSetRelationshipsSalesChannelDomainsLinks.md)
 - [SnippetSetRelationshipsSnippets](docs/Model/SnippetSetRelationshipsSnippets.md)
 - [SnippetSetRelationshipsSnippetsData](docs/Model/SnippetSetRelationshipsSnippetsData.md)
 - [SnippetSetRelationshipsSnippetsLinks](docs/Model/SnippetSetRelationshipsSnippetsLinks.md)
 - [StateMachine](docs/Model/StateMachine.md)
 - [StateMachineAttributes](docs/Model/StateMachineAttributes.md)
 - [StateMachineFlat](docs/Model/StateMachineFlat.md)
 - [StateMachineHistory](docs/Model/StateMachineHistory.md)
 - [StateMachineHistoryAttributes](docs/Model/StateMachineHistoryAttributes.md)
 - [StateMachineHistoryFlat](docs/Model/StateMachineHistoryFlat.md)
 - [StateMachineHistoryLinks](docs/Model/StateMachineHistoryLinks.md)
 - [StateMachineHistoryRelationships](docs/Model/StateMachineHistoryRelationships.md)
 - [StateMachineHistoryRelationshipsFromStateMachineState](docs/Model/StateMachineHistoryRelationshipsFromStateMachineState.md)
 - [StateMachineHistoryRelationshipsFromStateMachineStateLinks](docs/Model/StateMachineHistoryRelationshipsFromStateMachineStateLinks.md)
 - [StateMachineHistoryRelationshipsStateMachine](docs/Model/StateMachineHistoryRelationshipsStateMachine.md)
 - [StateMachineHistoryRelationshipsStateMachineData](docs/Model/StateMachineHistoryRelationshipsStateMachineData.md)
 - [StateMachineHistoryRelationshipsStateMachineLinks](docs/Model/StateMachineHistoryRelationshipsStateMachineLinks.md)
 - [StateMachineHistoryRelationshipsToStateMachineState](docs/Model/StateMachineHistoryRelationshipsToStateMachineState.md)
 - [StateMachineHistoryRelationshipsToStateMachineStateLinks](docs/Model/StateMachineHistoryRelationshipsToStateMachineStateLinks.md)
 - [StateMachineHistoryRelationshipsUser](docs/Model/StateMachineHistoryRelationshipsUser.md)
 - [StateMachineHistoryRelationshipsUserLinks](docs/Model/StateMachineHistoryRelationshipsUserLinks.md)
 - [StateMachineLinks](docs/Model/StateMachineLinks.md)
 - [StateMachineRelationships](docs/Model/StateMachineRelationships.md)
 - [StateMachineRelationshipsHistoryEntries](docs/Model/StateMachineRelationshipsHistoryEntries.md)
 - [StateMachineRelationshipsHistoryEntriesData](docs/Model/StateMachineRelationshipsHistoryEntriesData.md)
 - [StateMachineRelationshipsHistoryEntriesLinks](docs/Model/StateMachineRelationshipsHistoryEntriesLinks.md)
 - [StateMachineRelationshipsStates](docs/Model/StateMachineRelationshipsStates.md)
 - [StateMachineRelationshipsStatesData](docs/Model/StateMachineRelationshipsStatesData.md)
 - [StateMachineRelationshipsStatesLinks](docs/Model/StateMachineRelationshipsStatesLinks.md)
 - [StateMachineRelationshipsTransitions](docs/Model/StateMachineRelationshipsTransitions.md)
 - [StateMachineRelationshipsTransitionsData](docs/Model/StateMachineRelationshipsTransitionsData.md)
 - [StateMachineRelationshipsTransitionsLinks](docs/Model/StateMachineRelationshipsTransitionsLinks.md)
 - [StateMachineState](docs/Model/StateMachineState.md)
 - [StateMachineStateAttributes](docs/Model/StateMachineStateAttributes.md)
 - [StateMachineStateFlat](docs/Model/StateMachineStateFlat.md)
 - [StateMachineStateLinks](docs/Model/StateMachineStateLinks.md)
 - [StateMachineStateRelationships](docs/Model/StateMachineStateRelationships.md)
 - [StateMachineStateRelationshipsFromStateMachineHistoryEntries](docs/Model/StateMachineStateRelationshipsFromStateMachineHistoryEntries.md)
 - [StateMachineStateRelationshipsFromStateMachineHistoryEntriesData](docs/Model/StateMachineStateRelationshipsFromStateMachineHistoryEntriesData.md)
 - [StateMachineStateRelationshipsFromStateMachineHistoryEntriesLinks](docs/Model/StateMachineStateRelationshipsFromStateMachineHistoryEntriesLinks.md)
 - [StateMachineStateRelationshipsFromStateMachineTransitions](docs/Model/StateMachineStateRelationshipsFromStateMachineTransitions.md)
 - [StateMachineStateRelationshipsFromStateMachineTransitionsData](docs/Model/StateMachineStateRelationshipsFromStateMachineTransitionsData.md)
 - [StateMachineStateRelationshipsFromStateMachineTransitionsLinks](docs/Model/StateMachineStateRelationshipsFromStateMachineTransitionsLinks.md)
 - [StateMachineStateRelationshipsOrderDeliveries](docs/Model/StateMachineStateRelationshipsOrderDeliveries.md)
 - [StateMachineStateRelationshipsOrderDeliveriesData](docs/Model/StateMachineStateRelationshipsOrderDeliveriesData.md)
 - [StateMachineStateRelationshipsOrderDeliveriesLinks](docs/Model/StateMachineStateRelationshipsOrderDeliveriesLinks.md)
 - [StateMachineStateRelationshipsOrderTransactions](docs/Model/StateMachineStateRelationshipsOrderTransactions.md)
 - [StateMachineStateRelationshipsOrderTransactionsData](docs/Model/StateMachineStateRelationshipsOrderTransactionsData.md)
 - [StateMachineStateRelationshipsOrderTransactionsLinks](docs/Model/StateMachineStateRelationshipsOrderTransactionsLinks.md)
 - [StateMachineStateRelationshipsOrders](docs/Model/StateMachineStateRelationshipsOrders.md)
 - [StateMachineStateRelationshipsOrdersData](docs/Model/StateMachineStateRelationshipsOrdersData.md)
 - [StateMachineStateRelationshipsOrdersLinks](docs/Model/StateMachineStateRelationshipsOrdersLinks.md)
 - [StateMachineStateRelationshipsStateMachine](docs/Model/StateMachineStateRelationshipsStateMachine.md)
 - [StateMachineStateRelationshipsStateMachineLinks](docs/Model/StateMachineStateRelationshipsStateMachineLinks.md)
 - [StateMachineStateRelationshipsToStateMachineHistoryEntries](docs/Model/StateMachineStateRelationshipsToStateMachineHistoryEntries.md)
 - [StateMachineStateRelationshipsToStateMachineHistoryEntriesData](docs/Model/StateMachineStateRelationshipsToStateMachineHistoryEntriesData.md)
 - [StateMachineStateRelationshipsToStateMachineHistoryEntriesLinks](docs/Model/StateMachineStateRelationshipsToStateMachineHistoryEntriesLinks.md)
 - [StateMachineStateRelationshipsToStateMachineTransitions](docs/Model/StateMachineStateRelationshipsToStateMachineTransitions.md)
 - [StateMachineStateRelationshipsToStateMachineTransitionsData](docs/Model/StateMachineStateRelationshipsToStateMachineTransitionsData.md)
 - [StateMachineStateRelationshipsToStateMachineTransitionsLinks](docs/Model/StateMachineStateRelationshipsToStateMachineTransitionsLinks.md)
 - [StateMachineTransition](docs/Model/StateMachineTransition.md)
 - [StateMachineTransitionAttributes](docs/Model/StateMachineTransitionAttributes.md)
 - [StateMachineTransitionFlat](docs/Model/StateMachineTransitionFlat.md)
 - [StateMachineTransitionLinks](docs/Model/StateMachineTransitionLinks.md)
 - [StateMachineTransitionRelationships](docs/Model/StateMachineTransitionRelationships.md)
 - [StateMachineTransitionRelationshipsFromStateMachineState](docs/Model/StateMachineTransitionRelationshipsFromStateMachineState.md)
 - [StateMachineTransitionRelationshipsFromStateMachineStateLinks](docs/Model/StateMachineTransitionRelationshipsFromStateMachineStateLinks.md)
 - [StateMachineTransitionRelationshipsStateMachine](docs/Model/StateMachineTransitionRelationshipsStateMachine.md)
 - [StateMachineTransitionRelationshipsStateMachineLinks](docs/Model/StateMachineTransitionRelationshipsStateMachineLinks.md)
 - [StateMachineTransitionRelationshipsToStateMachineState](docs/Model/StateMachineTransitionRelationshipsToStateMachineState.md)
 - [StateMachineTransitionRelationshipsToStateMachineStateLinks](docs/Model/StateMachineTransitionRelationshipsToStateMachineStateLinks.md)
 - [Success](docs/Model/Success.md)
 - [SystemConfig](docs/Model/SystemConfig.md)
 - [SystemConfigAttributes](docs/Model/SystemConfigAttributes.md)
 - [SystemConfigAttributesConfigurationValue](docs/Model/SystemConfigAttributesConfigurationValue.md)
 - [SystemConfigFlat](docs/Model/SystemConfigFlat.md)
 - [SystemConfigLinks](docs/Model/SystemConfigLinks.md)
 - [SystemConfigRelationships](docs/Model/SystemConfigRelationships.md)
 - [SystemConfigRelationshipsSalesChannel](docs/Model/SystemConfigRelationshipsSalesChannel.md)
 - [SystemConfigRelationshipsSalesChannelLinks](docs/Model/SystemConfigRelationshipsSalesChannelLinks.md)
 - [Tag](docs/Model/Tag.md)
 - [TagAttributes](docs/Model/TagAttributes.md)
 - [TagFlat](docs/Model/TagFlat.md)
 - [TagLinks](docs/Model/TagLinks.md)
 - [TagRelationships](docs/Model/TagRelationships.md)
 - [TagRelationshipsCategories](docs/Model/TagRelationshipsCategories.md)
 - [TagRelationshipsCategoriesData](docs/Model/TagRelationshipsCategoriesData.md)
 - [TagRelationshipsCategoriesLinks](docs/Model/TagRelationshipsCategoriesLinks.md)
 - [TagRelationshipsCustomers](docs/Model/TagRelationshipsCustomers.md)
 - [TagRelationshipsCustomersData](docs/Model/TagRelationshipsCustomersData.md)
 - [TagRelationshipsCustomersLinks](docs/Model/TagRelationshipsCustomersLinks.md)
 - [TagRelationshipsMedia](docs/Model/TagRelationshipsMedia.md)
 - [TagRelationshipsMediaData](docs/Model/TagRelationshipsMediaData.md)
 - [TagRelationshipsMediaLinks](docs/Model/TagRelationshipsMediaLinks.md)
 - [TagRelationshipsNewsletterRecipients](docs/Model/TagRelationshipsNewsletterRecipients.md)
 - [TagRelationshipsNewsletterRecipientsData](docs/Model/TagRelationshipsNewsletterRecipientsData.md)
 - [TagRelationshipsNewsletterRecipientsLinks](docs/Model/TagRelationshipsNewsletterRecipientsLinks.md)
 - [TagRelationshipsOrders](docs/Model/TagRelationshipsOrders.md)
 - [TagRelationshipsOrdersData](docs/Model/TagRelationshipsOrdersData.md)
 - [TagRelationshipsOrdersLinks](docs/Model/TagRelationshipsOrdersLinks.md)
 - [TagRelationshipsProducts](docs/Model/TagRelationshipsProducts.md)
 - [TagRelationshipsProductsData](docs/Model/TagRelationshipsProductsData.md)
 - [TagRelationshipsProductsLinks](docs/Model/TagRelationshipsProductsLinks.md)
 - [TagRelationshipsShippingMethods](docs/Model/TagRelationshipsShippingMethods.md)
 - [TagRelationshipsShippingMethodsData](docs/Model/TagRelationshipsShippingMethodsData.md)
 - [TagRelationshipsShippingMethodsLinks](docs/Model/TagRelationshipsShippingMethodsLinks.md)
 - [Tax](docs/Model/Tax.md)
 - [TaxAttributes](docs/Model/TaxAttributes.md)
 - [TaxFlat](docs/Model/TaxFlat.md)
 - [TaxLinks](docs/Model/TaxLinks.md)
 - [TaxRelationships](docs/Model/TaxRelationships.md)
 - [TaxRelationshipsProducts](docs/Model/TaxRelationshipsProducts.md)
 - [TaxRelationshipsProductsData](docs/Model/TaxRelationshipsProductsData.md)
 - [TaxRelationshipsProductsLinks](docs/Model/TaxRelationshipsProductsLinks.md)
 - [TaxRelationshipsRules](docs/Model/TaxRelationshipsRules.md)
 - [TaxRelationshipsRulesData](docs/Model/TaxRelationshipsRulesData.md)
 - [TaxRelationshipsRulesLinks](docs/Model/TaxRelationshipsRulesLinks.md)
 - [TaxRule](docs/Model/TaxRule.md)
 - [TaxRuleAttributes](docs/Model/TaxRuleAttributes.md)
 - [TaxRuleAttributesData](docs/Model/TaxRuleAttributesData.md)
 - [TaxRuleFlat](docs/Model/TaxRuleFlat.md)
 - [TaxRuleLinks](docs/Model/TaxRuleLinks.md)
 - [TaxRuleRelationships](docs/Model/TaxRuleRelationships.md)
 - [TaxRuleRelationshipsCountry](docs/Model/TaxRuleRelationshipsCountry.md)
 - [TaxRuleRelationshipsCountryLinks](docs/Model/TaxRuleRelationshipsCountryLinks.md)
 - [TaxRuleRelationshipsTax](docs/Model/TaxRuleRelationshipsTax.md)
 - [TaxRuleRelationshipsTaxLinks](docs/Model/TaxRuleRelationshipsTaxLinks.md)
 - [TaxRuleRelationshipsType](docs/Model/TaxRuleRelationshipsType.md)
 - [TaxRuleRelationshipsTypeData](docs/Model/TaxRuleRelationshipsTypeData.md)
 - [TaxRuleRelationshipsTypeLinks](docs/Model/TaxRuleRelationshipsTypeLinks.md)
 - [TaxRuleType](docs/Model/TaxRuleType.md)
 - [TaxRuleTypeAttributes](docs/Model/TaxRuleTypeAttributes.md)
 - [TaxRuleTypeFlat](docs/Model/TaxRuleTypeFlat.md)
 - [TaxRuleTypeLinks](docs/Model/TaxRuleTypeLinks.md)
 - [TaxRuleTypeRelationships](docs/Model/TaxRuleTypeRelationships.md)
 - [TaxRuleTypeRelationshipsRules](docs/Model/TaxRuleTypeRelationshipsRules.md)
 - [TaxRuleTypeRelationshipsRulesData](docs/Model/TaxRuleTypeRelationshipsRulesData.md)
 - [TaxRuleTypeRelationshipsRulesLinks](docs/Model/TaxRuleTypeRelationshipsRulesLinks.md)
 - [Theme](docs/Model/Theme.md)
 - [ThemeAttributes](docs/Model/ThemeAttributes.md)
 - [ThemeFlat](docs/Model/ThemeFlat.md)
 - [ThemeLinks](docs/Model/ThemeLinks.md)
 - [ThemeMediaFlat](docs/Model/ThemeMediaFlat.md)
 - [ThemeRelationships](docs/Model/ThemeRelationships.md)
 - [ThemeRelationshipsChildThemes](docs/Model/ThemeRelationshipsChildThemes.md)
 - [ThemeRelationshipsChildThemesData](docs/Model/ThemeRelationshipsChildThemesData.md)
 - [ThemeRelationshipsChildThemesLinks](docs/Model/ThemeRelationshipsChildThemesLinks.md)
 - [ThemeRelationshipsMedia](docs/Model/ThemeRelationshipsMedia.md)
 - [ThemeRelationshipsMediaData](docs/Model/ThemeRelationshipsMediaData.md)
 - [ThemeRelationshipsMediaLinks](docs/Model/ThemeRelationshipsMediaLinks.md)
 - [ThemeRelationshipsPreviewMedia](docs/Model/ThemeRelationshipsPreviewMedia.md)
 - [ThemeRelationshipsPreviewMediaLinks](docs/Model/ThemeRelationshipsPreviewMediaLinks.md)
 - [ThemeRelationshipsSalesChannels](docs/Model/ThemeRelationshipsSalesChannels.md)
 - [ThemeRelationshipsSalesChannelsData](docs/Model/ThemeRelationshipsSalesChannelsData.md)
 - [ThemeRelationshipsSalesChannelsLinks](docs/Model/ThemeRelationshipsSalesChannelsLinks.md)
 - [ThemeSalesChannelFlat](docs/Model/ThemeSalesChannelFlat.md)
 - [Unit](docs/Model/Unit.md)
 - [UnitAttributes](docs/Model/UnitAttributes.md)
 - [UnitFlat](docs/Model/UnitFlat.md)
 - [UnitLinks](docs/Model/UnitLinks.md)
 - [UnitRelationships](docs/Model/UnitRelationships.md)
 - [UnitRelationshipsProducts](docs/Model/UnitRelationshipsProducts.md)
 - [UnitRelationshipsProductsData](docs/Model/UnitRelationshipsProductsData.md)
 - [UnitRelationshipsProductsLinks](docs/Model/UnitRelationshipsProductsLinks.md)
 - [User](docs/Model/User.md)
 - [UserAccessKey](docs/Model/UserAccessKey.md)
 - [UserAccessKeyAttributes](docs/Model/UserAccessKeyAttributes.md)
 - [UserAccessKeyFlat](docs/Model/UserAccessKeyFlat.md)
 - [UserAccessKeyLinks](docs/Model/UserAccessKeyLinks.md)
 - [UserAccessKeyRelationships](docs/Model/UserAccessKeyRelationships.md)
 - [UserAccessKeyRelationshipsUser](docs/Model/UserAccessKeyRelationshipsUser.md)
 - [UserAccessKeyRelationshipsUserLinks](docs/Model/UserAccessKeyRelationshipsUserLinks.md)
 - [UserAttributes](docs/Model/UserAttributes.md)
 - [UserFlat](docs/Model/UserFlat.md)
 - [UserLinks](docs/Model/UserLinks.md)
 - [UserRecovery](docs/Model/UserRecovery.md)
 - [UserRecoveryAttributes](docs/Model/UserRecoveryAttributes.md)
 - [UserRecoveryFlat](docs/Model/UserRecoveryFlat.md)
 - [UserRecoveryLinks](docs/Model/UserRecoveryLinks.md)
 - [UserRecoveryRelationships](docs/Model/UserRecoveryRelationships.md)
 - [UserRecoveryRelationshipsUser](docs/Model/UserRecoveryRelationshipsUser.md)
 - [UserRecoveryRelationshipsUserLinks](docs/Model/UserRecoveryRelationshipsUserLinks.md)
 - [UserRelationships](docs/Model/UserRelationships.md)
 - [UserRelationshipsAccessKeys](docs/Model/UserRelationshipsAccessKeys.md)
 - [UserRelationshipsAccessKeysData](docs/Model/UserRelationshipsAccessKeysData.md)
 - [UserRelationshipsAccessKeysLinks](docs/Model/UserRelationshipsAccessKeysLinks.md)
 - [UserRelationshipsAclRoles](docs/Model/UserRelationshipsAclRoles.md)
 - [UserRelationshipsAclRolesData](docs/Model/UserRelationshipsAclRolesData.md)
 - [UserRelationshipsAclRolesLinks](docs/Model/UserRelationshipsAclRolesLinks.md)
 - [UserRelationshipsAvatarMedia](docs/Model/UserRelationshipsAvatarMedia.md)
 - [UserRelationshipsAvatarMediaLinks](docs/Model/UserRelationshipsAvatarMediaLinks.md)
 - [UserRelationshipsImportExportLogEntries](docs/Model/UserRelationshipsImportExportLogEntries.md)
 - [UserRelationshipsImportExportLogEntriesData](docs/Model/UserRelationshipsImportExportLogEntriesData.md)
 - [UserRelationshipsImportExportLogEntriesLinks](docs/Model/UserRelationshipsImportExportLogEntriesLinks.md)
 - [UserRelationshipsLocale](docs/Model/UserRelationshipsLocale.md)
 - [UserRelationshipsLocaleLinks](docs/Model/UserRelationshipsLocaleLinks.md)
 - [UserRelationshipsMedia](docs/Model/UserRelationshipsMedia.md)
 - [UserRelationshipsMediaData](docs/Model/UserRelationshipsMediaData.md)
 - [UserRelationshipsMediaLinks](docs/Model/UserRelationshipsMediaLinks.md)
 - [UserRelationshipsRecoveryUser](docs/Model/UserRelationshipsRecoveryUser.md)
 - [UserRelationshipsRecoveryUserData](docs/Model/UserRelationshipsRecoveryUserData.md)
 - [UserRelationshipsRecoveryUserLinks](docs/Model/UserRelationshipsRecoveryUserLinks.md)
 - [UserRelationshipsStateMachineHistoryEntries](docs/Model/UserRelationshipsStateMachineHistoryEntries.md)
 - [UserRelationshipsStateMachineHistoryEntriesData](docs/Model/UserRelationshipsStateMachineHistoryEntriesData.md)
 - [UserRelationshipsStateMachineHistoryEntriesLinks](docs/Model/UserRelationshipsStateMachineHistoryEntriesLinks.md)

## Documentation For Authorization


## oAuth

- **Type**: OAuth
- **Flow**: password
- **Authorization URL**: 
- **Scopes**: 
 - ****: 


## Author



