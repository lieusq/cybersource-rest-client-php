# Ptsv2paymentsPaymentInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**card** | [**\CyberSource\Model\Ptsv2paymentsPaymentInformationCard**](Ptsv2paymentsPaymentInformationCard.md) |  | [optional] 
**tokenizedCard** | [**\CyberSource\Model\Ptsv2paymentsPaymentInformationTokenizedCard**](Ptsv2paymentsPaymentInformationTokenizedCard.md) |  | [optional] 
**fluidData** | [**\CyberSource\Model\Ptsv2paymentsPaymentInformationFluidData**](Ptsv2paymentsPaymentInformationFluidData.md) |  | [optional] 
**customer** | [**\CyberSource\Model\Ptsv2paymentsPaymentInformationCustomer**](Ptsv2paymentsPaymentInformationCustomer.md) |  | [optional] 
**paymentInstrument** | [**\CyberSource\Model\Ptsv2paymentsPaymentInformationPaymentInstrument**](Ptsv2paymentsPaymentInformationPaymentInstrument.md) |  | [optional] 
**instrumentIdentifier** | [**\CyberSource\Model\Ptsv2paymentsPaymentInformationInstrumentIdentifier**](Ptsv2paymentsPaymentInformationInstrumentIdentifier.md) |  | [optional] 
**shippingAddress** | [**\CyberSource\Model\Ptsv2paymentsPaymentInformationShippingAddress**](Ptsv2paymentsPaymentInformationShippingAddress.md) |  | [optional] 
**legacyToken** | [**\CyberSource\Model\Ptsv2paymentsPaymentInformationLegacyToken**](Ptsv2paymentsPaymentInformationLegacyToken.md) |  | [optional] 
**bank** | [**\CyberSource\Model\Ptsv2paymentsPaymentInformationBank**](Ptsv2paymentsPaymentInformationBank.md) |  | [optional] 
**paymentType** | [**\CyberSource\Model\Ptsv2paymentsPaymentInformationPaymentType**](Ptsv2paymentsPaymentInformationPaymentType.md) |  | [optional] 
**initiationChannel** | **string** | Mastercard-defined code that indicates how the account information was obtained.  - &#x60;00&#x60; (default): Card - &#x60;01&#x60;: Removable secure element that is personalized for use with a mobile phone and controlled by the wireless service provider; examples: subscriber identity module (SIM), universal integrated circuit card (UICC) - &#x60;02&#x60;: Key fob - &#x60;03&#x60;: Watch - &#x60;04&#x60;: Mobile tag - &#x60;05&#x60;: Wristband - &#x60;06&#x60;: Mobile phone case or sleeve - &#x60;07&#x60;: Mobile phone with a non-removable, secure element that is controlled by the wireless service provider; for example, code division multiple access (CDMA) - &#x60;08&#x60;: Removable secure element that is personalized for use with a mobile phone and not controlled by the wireless service provider; example: memory card - &#x60;09&#x60;: Mobile phone with a non-removable, secure element that is not controlled by the wireless service provider - &#x60;10&#x60;: Removable secure element that is personalized for use with a tablet or e-book and is controlled by the wireless service provider; examples: subscriber identity module (SIM), universal integrated circuit card (UICC) - &#x60;11&#x60;: Tablet or e-book with a non-removable, secure element that is controlled by the wireless service provider - &#x60;12&#x60;: Removable secure element that is personalized for use with a tablet or e-book and is not controlled by the wireless service provider - &#x60;13&#x60;: Tablet or e-book with a non-removable, secure element that is not controlled by the wireless service provider  This field is supported only for Mastercard on CyberSource through VisaNet.  #### Used by **Authorization** Optional field. | [optional] 
**eWallet** | [**\CyberSource\Model\Ptsv2paymentsPaymentInformationEWallet**](Ptsv2paymentsPaymentInformationEWallet.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


