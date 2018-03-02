# Reservation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**flight_tickets** | [**\Swagger\Client\Model\FlightTicket**](FlightTicket.md) |  | [optional] 
**unticketed_flights** | [**\Swagger\Client\Model\FlightReservationBound[]**](FlightReservationBound.md) | The flight itineraries in this reservation that have not yet been ticketed or priced. | [optional] 
**cars** | [**\Swagger\Client\Model\CarReservation[]**](CarReservation.md) | The rental cars reserved. | [optional] 
**hotels** | [**\Swagger\Client\Model\HotelReservation[]**](HotelReservation.md) | The hotel room bookings in this reservation. | [optional] 
**others** | [**\Swagger\Client\Model\OtherReservation[]**](OtherReservation.md) | Free text information to represent other travel items that may be considered part of the travel itinerary in this reservation. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


