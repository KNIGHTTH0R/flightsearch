<?php
# **flightLowFareSearch**
// > \Swagger\Client\Model\LowFareSearchResponse flightLowFareSearch($apikey, $origin, $destination, $departure_date, $return_date, $arrive_by, $return_by, $adults, $children, $infants, $include_airlines, $exclude_airlines, $nonstop, $max_price, $currency, $travel_class, $number_of_results)

// Flight Low-Fare Search - Find the cheapest one way or return itineraries and fares between two airports at specific dates.

// <p>This is the low fare search engine Amadeus uses to retrieve the best price for flights, based on our latest Master Pricer Travel Board technology. This document describes how to make a low fare search and how to handle the returned messages.</p>  <p>The message is composed of multiple results for given request. A result is defined by a unique combination of price, tax, passenger type, fare type, cabin, and availability for each requested segment.</p>   <p>A result is then composed of single or multiple itineraries. Each itinerary is composed of an outbound leg, and, if a return date was specified, an inbound leg. Each leg is composed of a list of one or more flights, that the traveller will be required to take in order to get from the origin airport to the destination airport.</p>

header('Content-type: text/json');
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$apikey = "jJtGVQtdPsiAUhq9Gg1LyuhYPRONJZq1"; // string | API Key provided for your account, to identify you for API access. Make sure to keep this API key secret.
$origin = "BOS"; // string | City code from which the traveler will depart. See the location and airport interfaces for more information.
$destination = "LON"; // string | <a href=\"https://en.wikipedia.org/wiki/International_Air_Transport_Association_airport_code\">IATA code</a> of the city to which the traveler is going
$departure_date = "2017-12-25"; // string | The date on which the traveler will depart from the origin to go to the destination. You can specify a date range of up to 2 days. For a larger date range, use the Extensive Search. Dates are specified in the <a href=\"https://en.wikipedia.org/wiki/ISO_8601\">ISO 8601</a> yyyy-MM-dd date format and separated by --.
$return_date = "2017-12-28"; // string | The date on which the traveler will depart from the destination to return to the origin. If this parameter is not specified, the search will find only one-way trips. If this, or the return_by parameter are specified, only return trips are found. You can specify a date range of up to 2 days.
$arrive_by = "2017-12-25T16:00"; // string | The datetime by which the outbound flight should arrive, based on local time at the destination airport.  Date-times are specified in the <a href=\"https://en.wikipedia.org/wiki/ISO_8601\">ISO 8601</a> yyyy-MM-ddTHH:mm date format
$return_by = "2017-12-28T08:00"; // string | The time by which the inbound flight should arrive, based on local time at the airport specified as the origin parameter
$adults = 1; // int | The number of adult (age 12 and over) passengers traveling on this flight.
$children = 0; // int | The number of child (younger than age 12 on date of departure) passengers traveling on this flight who will each have their own separate seat
$infants = 0; // int | The number of infant (younger than age 2 on date of departure) passengers traveling on this flight. Infants travel in the lap of an adult passenger, and thus the number of infants must not exceed the number of adults.
$include_airlines = array("AA"); // string[] | If specified, all results will include at least one flight where one or more of these airlines is the marketing carrier. This behaves as an OR function. Airlines are specified using <a href=\"https://en.wikipedia.org/wiki/Airline_codes\"><a href=\"https://en.wikipedia.org/wiki/Airline_codes\">IATA airline code</a>s</a>.
$exclude_airlines = array("VN"); // string[] | If specified, no results will include any flights where any of these airlines is the marketing carrier. Airlines are specified using <a href=\"https://en.wikipedia.org/wiki/Airline_codes\"><a href=\"https://en.wikipedia.org/wiki/Airline_codes\">IATA airline code</a>s</a>.
$nonstop = 'false'; // bool | Setting this to true will find only flights that do not require the passenger to change from one flight to another
$max_price = 9800.00; // int | Maximum price of trips to find in the result set, in USD (US dollars) unless some other currency code is specified. By default, no limit is applied
$currency = "USD"; // string | The preferred <a href=\"https://en.wikipedia.org/wiki/ISO_4217\">currency</a> for the results
$travel_class = "ECONOMY"; // string | Searches for results where the majority of the itinerary flight time should be in a the specified cabin class or higher
$number_of_results = 5; // int | The number of results to display. This will not be strictly interpreted but used as a guideline to display a useful number of results. By default, the number of results is dynamically determined. A maximum of 250 results will be displayed.

try {
    $result = $api_instance->flightLowFareSearch($apikey, $origin, $destination, $departure_date, $return_date, $arrive_by, $return_by, $adults, $children, $infants, $include_airlines, $exclude_airlines, $nonstop, $max_price, $currency, $travel_class, $number_of_results);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->flightLowFareSearch: ', $e->getMessage(), PHP_EOL;
}
?>



<?php

// <!--# **flightExtensiveSearch**
// > \Swagger\Client\Model\ExtremeSearchResponse flightExtensiveSearch($apikey, $origin, $destination, $departure_date, $one_way, $duration, $direct, $max_price, $aggregation_mode)

// Flight Extensive Search - Build travel searches based on very flexible and open range of dates. You can use it to answer questions such as \"When is the best date to fly...\".  It's built on Amadeus' Featured Results technology, which returns thousands of results (prices, itineraries and dates) in a matter of milliseconds. Results are available over half a calendar year with a 1 to 15 day stay duration

// <p>The Extensive Flight Search allows you to find the prices of one-way or return flights between two airports over a large number of dates, and for a large variety of stay durations. The search doesn't return exact itineraries, but rather tells you the best price for a flight on a given day, for a stay of a given duration.</p>  <p>The search is based on our Extreme Search platform, which continually caches a large number of flight search results from a list of origin cities to a variety of destinations. Since it's a cached search, the response time is fast, but not all origin airports are available. Here is <a href=\"https://github.com/amadeus-travel-innovation-sandbox/sandbox-content/blob/master/flight-search-cache-origin-destination.csv\">a list of the currently supported origin-destination IATA location pairs</a>. We try to keep this list as fresh as possible for you, but be aware that it may not always be exactly up-to-date and it can change without warning.</p>  <p>That said, a price graph like this provides a powerful bargin shopping tool - allowing travelers with flexible itineraries to identify days on which they can get the cheapest flights to their destinations.</p>

// ### Example
// ```php-->

header('Content-type: text/json');
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$apikey = "jJtGVQtdPsiAUhq9Gg1LyuhYPRONJZq1"; // string | API Key provided for your account, to identify you for API access. Make sure to keep this API key secret.
$origin = "DEL"; // string | <a href=\"https://en.wikipedia.org/wiki/International_Air_Transport_Association_airport_code\">IATA code</a> of the city from which the traveler will depart. See the location and airport interfaces for more information.
$destination = "BOM"; // string | <a href=\"https://en.wikipedia.org/wiki/International_Air_Transport_Association_airport_code\">IATA code</a> of the city to which the traveler is going
$departure_date = "2017-12-16--2017-12-26"; // string | Range of dates between which the traveler could depart. Dates are specified in the <a href=\"https://en.wikipedia.org/wiki/ISO_8601\">ISO 8601</a> yyyy-MM-dd date format. Ranges are inclusive and ranges of months will apply from the start to the end of the month. If just a single date is specified, only that date will be searched. By default, the date range starts today and applies up to 361 in the future is applied. Past dates are generally not supported, future dates should be in the next 361 days, although results start to become sparse after about 6 months in the future, as airlines may still be defining their schedules. The default is to search all future dates available.
$one_way = "false"; // bool | When set to true, the query will be for a single trip from the origin to the destination. When this parameter is not provided, or is set to false, the query is for a round trip from the origin to the destination and back again.
$duration = "1--15"; // string | The allowed duration or range of durations of the trip, in days. This parameter must not be set if the one-way parameter is set to true.
$direct = "false"; // bool | Limit the search to results that do not require the passenger to change plane?
$max_price = "950"; // string | Maximum price of trips to find in the result set, in the currency specified for this origin and destination pair in the cache contents spreadsheet. So, for example, if the origin is NYC, and the max price is 400, this means 400 USD. If the origin is PAR, and the max price is 400, this means 400 EUR. By default, no limit is applied
$aggregation_mode = "DAY"; // string | Specifies the granularity of results to be found. DAY is the default when one-way is true finds a result for departure date in the date range. STAY is the default otherwise and finds all round trip permutations for this route withim the given date range. DESTINATION finds one result, only the cheapest price for this route over the provided date range. WEEK finds the cheapest result for every week in the date range. Note that specifying a small granularity but a large search scope may result in a huge output. For some very large outputs, the API may refuse to provide a result.

try {
    $result = $api_instance->flightExtensiveSearch($apikey, $origin, $destination, $departure_date, $one_way, $duration, $direct, $max_price, $aggregation_mode);
    echo $result;
    // $wah=json_decode($result);
    // //pretty print json
    
    // echo json_encode(array('data' => $wah), JSON_PRETTY_PRINT);
   } catch (Exception $e) {
    echo 'Exception when calling DefaultApi->flightExtensiveSearch: ', $e->getMessage(), PHP_EOL;
}
?>



<?php

// # **flightAffiliateSearch**
// > \Swagger\Client\Model\AffiliateSearchResponse flightAffiliateSearch($apikey, $origin, $destination, $departure_date, $return_date, $adults, $children, $infants, $include_merchants, $exclude_merchants, $max_price, $currency, $mobile)

// Flight Affiliate Search - Use Travel Audience Connect's affiliate network API to search flights from our list of partners and provides deep-links to allow the user to book directly on the airline website.

// <p>The Flight Affiliate Search API combines Amadeus' flight search technology with Travel Audience's Connect API partners to provide a unique flight search, where all results come with deep-links to book the flight at a partner's website. The API will let you easily provide the traveler with a path to book flights from your application.</p> <p>Travel Audience Connect partners include <ul>   <li><a href=\"http://www.cityjet.com/\">CityJet</a>, <a href=\"https://www.aireuropa.com/en/flights\">Air Europa</a> and <a href=\"http://www.flytap.com/\">TAP</a> in Western Europe,</li>   <li><a href=\"http://uralairlines.com/\">Ural Airlines</a> in Russia, </li>   <li><a href=\"http://www.avianca.com.br/\">Avianca Brazil</a>  and</li>   <li><a href=\"http://www.jal.com/\">JAL</a> in East Asia</li> </ul> </p> <p>Only Travel Audience Connect partner airlines are searched. For an up-to-date list of routes, see the route maps on each partners respective websites above. You can earn commission using the deep links provided in the search results if you sign up for an account at <a href=\"http://connect.travelaudience.com/\">connect.travelaudience.com</a>.</p>

// ### Example
// ```php
header('Content-type: text/json');
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$apikey = "jJtGVQtdPsiAUhq9Gg1LyuhYPRONJZq1"; // string | API Key provided for your account, to identify you for API access. Make sure to keep this API key secret.
$origin = "DEL"; // string | City code from which the traveler will depart. See the location and airport interfaces for more information.
$destination = "BOM"; // string | <a href=\"https://en.wikipedia.org/wiki/International_Air_Transport_Association_airport_code\">IATA code</a> of the city to which the traveler is going
$departure_date = "2017-12-20"; // string | The date on which the traveler will depart from the origin to go to the destination. The maximum scope for a date range is 2 days, for a larger scope, use the Extensive Search!
$return_date = "2017-12-28"; // string | The date on which the traveler will depart from the destination to return to the origin. If this parameter is not specified, the search will find only one-way trips. If this, or the return_by parameter are specified, only return trips are found
$adults = 1; // int | The number of adult (age 12 and over) passengers traveling on this flight.
$children = 0; // int | The number of child (younger than age 12 on date of departure) passengers traveling on this flight who will each have their own separate seat
$infants = 0; // int | The number of infant (younger than age 2 on date of departure) passengers traveling on this flight. Infants travel in the lap of an adult passenger, and thus the number of infants must not exceed the number of adults.
$include_merchants = array(""); // string[] | If specified, all results will include at least one flight where one or more of these airlines is the marketing carrier. Airlines are specified using <a href=\"https://en.wikipedia.org/wiki/Airline_codes\"><a href=\"https://en.wikipedia.org/wiki/Airline_codes\">IATA airline code</a>s</a>
$exclude_merchants = array(""); // string[] | If specified, no results will include any flights where any of these airlines is the marketing carrier. Airlines are specified using <a href=\"https://en.wikipedia.org/wiki/Airline_codes\"><a href=\"https://en.wikipedia.org/wiki/Airline_codes\">IATA airline code</a>s</a>
$max_price = 98000; // int | Maximum price of trips to find in the result set, in USD (US dollars) unless some other currency code is specified. By default, no limit is applied
$currency = "EUR"; // string | The preferred <a href=\"https://en.wikipedia.org/wiki/ISO_4217\">currency</a> for the results
$mobile = "false"; // bool | Setting this to true will show mobile web deeplinks

try {
    $result = $api_instance->flightAffiliateSearch($apikey, $origin, $destination, $departure_date, $return_date, $adults, $children, $infants, $include_merchants, $exclude_merchants, $max_price, $currency, $mobile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->flightAffiliateSearch: ', $e->getMessage(), PHP_EOL;
}
?>



<?php

# **flightInspirationSearch**
// > \Swagger\Client\Model\ExtremeSearchResponse flightInspirationSearch($apikey, $origin, $destination, $departure_date, $one_way, $duration, $direct, $max_price, $aggregation_mode)

// Flight Inspiration Search - Go beyond the traditional search by origin, destination and dates to meet the needs of travelers looking for suggestions and a search experience that reflects the way they choose their trip. This can help you answer the question \"Where can I go within a given travel budget?\"

// <p>The Inspiration Flight Search allows you to find the prices of one-way and return flights from an origin city without necessarily having a destination, or even a flight date, in mind. The search doesn't return a distinct set of price options, but rather, can tell you the price of flying from a given city to some destination, for a trip of a given duration, that falls within a given date range.</p>  <p>The search is based on our Extreme Search platform, which continually caches a large number of flight search results from a list of origin cities to a variety of destinations. Since it's a cached search, the response time is fast, but not all origin airports are available. Here is <a href=\"https://github.com/amadeus-travel-innovation-sandbox/sandbox-content/blob/master/flight-search-cache-origin-destination.csv\">a list of the currently supported origin-destination IATA location pairs</a>. We try to keep this list as fresh as possible for you, but be aware that it may not always be exactly up-to-date and it can change without warning.</p>  <p>Despite this limitation don't underestimate the power of this API. Thanks to its quick response speed you can easily pair it with other APIs to provide a low fare and inspiration for any destination. For example, you can could combine it with a event search API and suggest a total price to see go and see an concert or a game in a selection of cities.</p>

require_once(__DIR__ . '/vendor/autoload.php');
header('Content-type: text/json');

$api_instance = new Swagger\Client\Api\DefaultApi();
$apikey = "jJtGVQtdPsiAUhq9Gg1LyuhYPRONJZq1"; // string | API Key provided for your account, to identify you for API access. Make sure to keep this API key secret.
$origin = "NYC"; // string | <a href=\"https://en.wikipedia.org/wiki/International_Air_Transport_Association_airport_code\">IATA code</a> of the city from which the traveler will depart. See the location and airport interfaces for more information.
$destination = "LAX"; // string | <a href=\"https://en.wikipedia.org/wiki/International_Air_Transport_Association_airport_code\">IATA code</a> of the city to which the traveler is going
$departure_date = "2017-12-16"; // string | Range of dates between which the traveler could depart. Dates are specified in the <a href=\"https://en.wikipedia.org/wiki/ISO_8601\">ISO 8601</a> yyyy-MM-dd date format. Ranges are inclusive and ranges of months will apply from the start to the end of the month. If just a single date is specified, only that date will be searched. By default, the date range starts today and applies up to 361 in the future is applied. Past dates are generally not supported, future dates should be in the next 361 days, although results start to become sparse after about 6 months in the future, as airlines may still be defining their schedules. The default is to search all future dates available.
$one_way = "false"; // bool | When set to true, the query will be for a single trip from the origin to the destination. When this parameter is not provided, or is set to false, the query is for a round trip from the origin to the destination and back again.
$duration = "1--15"; // string | The allowed duration or range of durations of the trip, in days. This parameter must not be set if the one-way parameter is set to true.
$direct = "false"; // bool | Limit the search to results that do not require the passenger to change plane?
$max_price = "30000"; // string | Maximum price of trips to find in the result set, in the currency specified for this origin and destination pair in the cache contents spreadsheet. So, for example, if the origin is NYC, and the max price is 400, this means 400 USD. If the origin is PAR, and the max price is 400, this means 400 EUR. By default, no limit is applied
$aggregation_mode = "DAY"; // string | Specifies the granularity of results to be found. DESTINATION is the default and finds one result per city. COUNTRY finds one result per country, DAY finds on result for every day in the date range, WEEK finds one result for every week in the date range. Note that specifying a small granularity but a large search scope may result in a huge output. For some very large outputs, the API may refuse to provide a result.

try {
    $result = $api_instance->flightInspirationSearch($apikey, $origin, $destination, $departure_date, $one_way, $duration, $direct, $max_price, $aggregation_mode);
    echo $result;
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->flightInspirationSearch: ', $e->getMessage(), PHP_EOL;
}
?>