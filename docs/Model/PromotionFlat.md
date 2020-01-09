# PromotionFlat

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] 
**name** | **string** |  | 
**active** | **bool** |  | 
**valid_from** | [**\DateTime**](\DateTime.md) |  | [optional] 
**valid_until** | [**\DateTime**](\DateTime.md) |  | [optional] 
**max_redemptions_global** | **int** |  | 
**max_redemptions_per_customer** | **int** |  | 
**exclusive** | **bool** |  | 
**code** | **string** |  | [optional] 
**use_codes** | **bool** |  | 
**use_individual_codes** | **bool** |  | 
**individual_code_pattern** | **string** |  | [optional] 
**use_set_groups** | **bool** |  | 
**customer_restriction** | **bool** |  | [optional] 
**order_count** | **int** |  | [optional] 
**orders_per_customer_count** | **object** |  | [optional] 
**exclusion_ids** | **string[]** |  | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) |  | 
**updated_at** | [**\DateTime**](\DateTime.md) |  | 
**translated** | **object** |  | [optional] 
**setgroups** | [**\Shopware6SDK\Model\PromotionSetgroupFlat**](PromotionSetgroupFlat.md) |  | [optional] 
**sales_channels** | [**\Shopware6SDK\Model\PromotionSalesChannelFlat**](PromotionSalesChannelFlat.md) |  | [optional] 
**discounts** | [**\Shopware6SDK\Model\PromotionDiscountFlat**](PromotionDiscountFlat.md) |  | [optional] 
**individual_codes** | [**\Shopware6SDK\Model\PromotionIndividualCodeFlat**](PromotionIndividualCodeFlat.md) |  | [optional] 
**persona_rules** | [**\Shopware6SDK\Model\RuleFlat**](RuleFlat.md) |  | [optional] 
**persona_customers** | [**\Shopware6SDK\Model\CustomerFlat**](CustomerFlat.md) |  | [optional] 
**order_rules** | [**\Shopware6SDK\Model\RuleFlat**](RuleFlat.md) |  | [optional] 
**cart_rules** | [**\Shopware6SDK\Model\RuleFlat**](RuleFlat.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

