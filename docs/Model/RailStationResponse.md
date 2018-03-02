# RailStationResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID of this station, as provided in the request | 
**type** | **string** | The type of code to which this station refers. Some codes represent agglomeration of multiple stations, whereas others represent an individual station. Possible values are AGGLOMERATION and STATION. | 
**name** | **string** | The name of this station. | 
**short_name** | **string** | The shortened name of this station (20 characters max) which may be used in certain cases. | 
**country** | **string** | The &lt;a href&#x3D;\&quot;http://en.wikipedia.org/wiki/ISO_3166-1_alpha-2\&quot;&gt;ISO 3166-1 alpha-2 country code&lt;/a&gt; in which this station can be found. | 
**location** | [**\Swagger\Client\Model\Geolocation**](Geolocation.md) | This stations&#39;s approximate geolocation. | 
**traffic** | **string** | An indication of the level of Intercity traffic passing through this station. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


