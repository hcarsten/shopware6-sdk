# CustomerFlat

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] 
**group_id** | **string** |  | 
**default_payment_method_id** | **string** |  | 
**sales_channel_id** | **string** |  | 
**language_id** | **string** |  | 
**last_payment_method_id** | **string** |  | [optional] 
**default_billing_address_id** | **string** |  | 
**default_shipping_address_id** | **string** |  | 
**auto_increment** | **int** |  | [optional] 
**customer_number** | **string** |  | 
**salutation_id** | **string** |  | 
**first_name** | **string** |  | 
**last_name** | **string** |  | 
**company** | **string** |  | [optional] 
**email** | **string** |  | 
**title** | **string** |  | [optional] 
**affiliate_code** | **string** |  | [optional] 
**campaign_code** | **string** |  | [optional] 
**active** | **bool** |  | [optional] 
**double_opt_in_registration** | **bool** |  | [optional] 
**double_opt_in_email_sent_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**double_opt_in_confirm_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**hash** | **string** |  | [optional] 
**guest** | **bool** |  | [optional] 
**first_login** | [**\DateTime**](\DateTime.md) |  | [optional] 
**last_login** | [**\DateTime**](\DateTime.md) |  | [optional] 
**newsletter** | **bool** |  | [optional] 
**birthday** | **string** |  | [optional] 
**last_order_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**order_count** | **int** |  | [optional] 
**custom_fields** | **object** |  | [optional] 
**remote_address** | **string** |  | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) |  | 
**updated_at** | [**\DateTime**](\DateTime.md) |  | 
**group** | [**\ShopwareSDK6\Model\CustomerGroupFlat**](CustomerGroupFlat.md) |  | [optional] 
**default_payment_method** | [**\ShopwareSDK6\Model\PaymentMethodFlat**](PaymentMethodFlat.md) |  | [optional] 
**sales_channel** | [**\ShopwareSDK6\Model\SalesChannelFlat**](SalesChannelFlat.md) |  | [optional] 
**language** | [**\ShopwareSDK6\Model\LanguageFlat**](LanguageFlat.md) |  | [optional] 
**last_payment_method** | [**\ShopwareSDK6\Model\PaymentMethodFlat**](PaymentMethodFlat.md) |  | [optional] 
**default_billing_address** | [**\ShopwareSDK6\Model\CustomerAddressFlat**](CustomerAddressFlat.md) |  | [optional] 
**default_shipping_address** | [**\ShopwareSDK6\Model\CustomerAddressFlat**](CustomerAddressFlat.md) |  | [optional] 
**salutation** | [**\ShopwareSDK6\Model\SalutationFlat**](SalutationFlat.md) |  | [optional] 
**addresses** | [**\ShopwareSDK6\Model\CustomerAddressFlat**](CustomerAddressFlat.md) |  | [optional] 
**order_customers** | [**\ShopwareSDK6\Model\OrderCustomerFlat**](OrderCustomerFlat.md) |  | [optional] 
**tags** | [**\ShopwareSDK6\Model\TagFlat**](TagFlat.md) |  | [optional] 
**promotions** | [**\ShopwareSDK6\Model\PromotionFlat**](PromotionFlat.md) |  | [optional] 
**product_reviews** | [**\ShopwareSDK6\Model\ProductReviewFlat**](ProductReviewFlat.md) |  | [optional] 
**recovery_customer** | [**\ShopwareSDK6\Model\CustomerRecoveryFlat**](CustomerRecoveryFlat.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

