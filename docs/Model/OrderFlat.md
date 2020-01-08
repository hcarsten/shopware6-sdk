# OrderFlat

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] 
**version_id** | **string** |  | [optional] 
**auto_increment** | **int** |  | [optional] 
**order_number** | **string** |  | [optional] 
**billing_address_id** | **string** |  | 
**billing_address_version_id** | **string** |  | [optional] 
**currency_id** | **string** |  | 
**language_id** | **string** |  | 
**sales_channel_id** | **string** |  | 
**order_date_time** | [**\DateTime**](\DateTime.md) |  | 
**order_date** | **string** |  | [optional] 
**price** | [**\ShopwareSDK6\Model\OrderAttributesPrice**](OrderAttributesPrice.md) |  | [optional] 
**amount_total** | **float** |  | [optional] 
**amount_net** | **float** |  | [optional] 
**position_price** | **float** |  | [optional] 
**tax_status** | **string** |  | [optional] 
**shipping_costs** | [**\ShopwareSDK6\Model\OrderAttributesShippingCosts**](OrderAttributesShippingCosts.md) |  | [optional] 
**shipping_total** | **float** |  | [optional] 
**currency_factor** | **float** |  | 
**deep_link_code** | **string** |  | [optional] 
**affiliate_code** | **string** |  | [optional] 
**campaign_code** | **string** |  | [optional] 
**state_id** | **string** |  | 
**custom_fields** | **object** |  | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) |  | 
**updated_at** | [**\DateTime**](\DateTime.md) |  | 
**state_machine_state** | [**\ShopwareSDK6\Model\StateMachineStateFlat**](StateMachineStateFlat.md) |  | [optional] 
**order_customer** | [**\ShopwareSDK6\Model\OrderCustomerFlat**](OrderCustomerFlat.md) |  | [optional] 
**currency** | [**\ShopwareSDK6\Model\CurrencyFlat**](CurrencyFlat.md) |  | [optional] 
**language** | [**\ShopwareSDK6\Model\LanguageFlat**](LanguageFlat.md) |  | [optional] 
**sales_channel** | [**\ShopwareSDK6\Model\SalesChannelFlat**](SalesChannelFlat.md) |  | [optional] 
**addresses** | [**\ShopwareSDK6\Model\OrderAddressFlat**](OrderAddressFlat.md) |  | [optional] 
**deliveries** | [**\ShopwareSDK6\Model\OrderDeliveryFlat**](OrderDeliveryFlat.md) |  | [optional] 
**line_items** | [**\ShopwareSDK6\Model\OrderLineItemFlat**](OrderLineItemFlat.md) |  | [optional] 
**transactions** | [**\ShopwareSDK6\Model\OrderTransactionFlat**](OrderTransactionFlat.md) |  | [optional] 
**documents** | [**\ShopwareSDK6\Model\DocumentFlat**](DocumentFlat.md) |  | [optional] 
**tags** | [**\ShopwareSDK6\Model\TagFlat**](TagFlat.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

