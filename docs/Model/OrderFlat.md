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
**price** | [**\Shopware6SDK\Model\OrderAttributesPrice**](OrderAttributesPrice.md) |  | [optional] 
**amount_total** | **float** |  | [optional] 
**amount_net** | **float** |  | [optional] 
**position_price** | **float** |  | [optional] 
**tax_status** | **string** |  | [optional] 
**shipping_costs** | [**\Shopware6SDK\Model\OrderAttributesShippingCosts**](OrderAttributesShippingCosts.md) |  | [optional] 
**shipping_total** | **float** |  | [optional] 
**currency_factor** | **float** |  | 
**deep_link_code** | **string** |  | [optional] 
**affiliate_code** | **string** |  | [optional] 
**campaign_code** | **string** |  | [optional] 
**state_id** | **string** |  | 
**custom_fields** | **object** |  | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) |  | 
**updated_at** | [**\DateTime**](\DateTime.md) |  | 
**state_machine_state** | [**\Shopware6SDK\Model\StateMachineStateFlat**](StateMachineStateFlat.md) |  | [optional] 
**order_customer** | [**\Shopware6SDK\Model\OrderCustomerFlat**](OrderCustomerFlat.md) |  | [optional] 
**currency** | [**\Shopware6SDK\Model\CurrencyFlat**](CurrencyFlat.md) |  | [optional] 
**language** | [**\Shopware6SDK\Model\LanguageFlat**](LanguageFlat.md) |  | [optional] 
**sales_channel** | [**\Shopware6SDK\Model\SalesChannelFlat**](SalesChannelFlat.md) |  | [optional] 
**addresses** | [**\Shopware6SDK\Model\OrderAddressFlat**](OrderAddressFlat.md) |  | [optional] 
**deliveries** | [**\Shopware6SDK\Model\OrderDeliveryFlat**](OrderDeliveryFlat.md) |  | [optional] 
**line_items** | [**\Shopware6SDK\Model\OrderLineItemFlat**](OrderLineItemFlat.md) |  | [optional] 
**transactions** | [**\Shopware6SDK\Model\OrderTransactionFlat**](OrderTransactionFlat.md) |  | [optional] 
**documents** | [**\Shopware6SDK\Model\DocumentFlat**](DocumentFlat.md) |  | [optional] 
**tags** | [**\Shopware6SDK\Model\TagFlat**](TagFlat.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

