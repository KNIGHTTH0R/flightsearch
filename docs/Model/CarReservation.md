# CarReservation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Uniquely identifies this car rental reservation in this travel record. This ID is persistent, and remains the same for the lifetime of the travel record. | 
**pick_up** | **string** | Date on which the car rental will be collected from the car rental location. &lt;a href&#x3D;\&quot;https://en.wikipedia.org/wiki/ISO_8601\&quot;&gt;ISO 8601&lt;/a&gt; date format yyyy-MM-ddTHH. | 
**drop_off** | **string** | Date at which the car rental will end and the car will be returned to the rental location. &lt;a href&#x3D;\&quot;https://en.wikipedia.org/wiki/ISO_8601\&quot;&gt;ISO 8601&lt;/a&gt; date format yyyy-MM-ddTHH. | 
**provider** | [**\Swagger\Client\Model\Company**](Company.md) | Details of the car company offering this rental. | 
**origin** | **string** | This car rental company office location ID. If this is an airport location, this will be the airport&#39;s &lt;a href&#x3D;\&quot;https://en.wikipedia.org/wiki/International_Air_Transport_Association_airport_code\&quot;&gt;IATA code&lt;/a&gt;. Otherwise, this is a custom value provided by the car rental provider. | 
**car** | [**\Swagger\Client\Model\Vehicle**](Vehicle.md) | A car information object giving further details about the vehicle provided for rental. | 
**traveler_ids** | **string[]** | Traveler identifiers to indicate the travelers to whom this car rental applies. Generally, only drivers of the vehicle will be marked in this array. | [optional] 
**booking_info** | [**\Swagger\Client\Model\CarReservationBookingInfo**](CarReservationBookingInfo.md) | Additional details the status of this car rental reservation. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


