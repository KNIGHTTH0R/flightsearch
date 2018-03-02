# HotelRoom

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**booking_code** | **string** | The booking code identifies a product at the hotel. It can be used to book a room. | 
**room_type_code** | **string** | A 3-letter code to identify a specific room type. | [optional] 
**rate_plan_code** | **string** | A 3 letter code to designate different rates base on traveler type. | [optional] 
**total_amount** | [**\Swagger\Client\Model\Amount**](Amount.md) | The total price of staying in this room from the given check-in date to the given check-out date | [optional] 
**rates** | [**\Swagger\Client\Model\PeriodRate[]**](PeriodRate.md) | The total price of staying in this room from the given check-in date to the given check-out date | [optional] 
**descriptions** | **string[]** | An array of description strings describing room and rate types features | [optional] 
**room_type_info** | [**\Swagger\Client\Model\RoomInfo**](RoomInfo.md) |  | [optional] 
**rate_type_code** | **string** | The unique rate code used by the hotel chain to price this room&#39;s rate | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


