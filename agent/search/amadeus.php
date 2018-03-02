<?php

$flightselector=$_POST['flightselector'];
$apikey = "jJtGVQtdPsiAUhq9Gg1LyuhYPRONJZq1";

    if(empty($_POST['origin'])){
      $origin = 'BOS';
    }      
    else $origin = $_POST['origin'];

    if(empty($_POST['destination'])){
      $destination = 'LON';
    }      
    else $destination = $_POST['destination'];

    if(empty($_POST['departure_date'])){
      $departure_date = null;
    }      
    else $departure_date = $_POST['departure_date'];

    if(empty($_POST['return_date'])){
      $return_date = null;
    }      
    else $return_date = $_POST['return_date'];

    if(empty($_POST['arrive_by'])){
      $arrive_by = null;
    }      
    else $arrive_by = $departure_date."T".$_POST['arrive_by'];

    if(empty($_POST['return_by'])){
      $return_by = null;
    }      
    else $return_by = $return_date."T".$_POST['return_by'];

    if(empty($_POST['adults'])){
      $adults = 1;
    }      
    else $adults = $_POST['adults'];

    if(empty($_POST['children'])){
      $children = 0;
    }      
    else $children = $_POST['children'];

     if(empty($_POST['infants'])){
      $infants = 0;
    }      
    else $infants = $_POST['infants'];

    if(empty($_POST['include_airlines'])){
      $include_airlines = null;
      $include_merchants= null;
    }      
    else {
      $include_airlines = explode(',', $_POST['include_airlines']);
      $include_merchants= explode(',', $_POST['include_airlines']);
    }

     if(empty($_POST['exclude_airlines'])){
      $exclude_airlines = null;
      $exclude_merchants= null;
    }      
    else {
      $exclude_airlines = explode(',',$_POST['exclude_airlines']);
      $exclude_merchants= explode(',',$_POST['exclude_airlines']);
    }

     if(empty($_POST['nonstop'])){
      $nonstop = 'false';
      $direct='false';
    }      
    else {
      $nonstop = $_POST['nonstop'];
     $direct= $_POST['nonstop'];
    }

     if(empty($_POST['max_price'])){
      $max_price = 9800.00;
    }      
    else $max_price = $_POST['max_price'];

     if(empty($_POST['currency'])){
      $currency = 'USD';
    }      
    else $currency = $_POST['currency'];

     if(empty($_POST['travel_class'])){
      $travel_class = 'ECONOMY';
    }      
    else $travel_class = $_POST['travel_class'];

    if(empty($_POST['number_of_results'])){
      $number_of_results = '10';
    }      
    else $number_of_results = $_POST['number_of_results'];

    if(empty($_POST['departdate1'])){
      $departdate1 = null;
    }      
    else $departdate1 = $_POST['departdate1'];

    if(empty($_POST['departdate2'])){
      $departdate2 = null;
    }      
    else $departdate2 = $_POST['departdate2'];

    if(empty($_POST['duration'])){
      $duration = null;
    }      
    else $duration = $_POST['duration'];

    if(empty($_POST['aggregation_mode'])){
      $aggregation_mode = "DAY";
    }      
    else $aggregation_mode = $_POST['aggregation_mode'];

    if(empty($_POST['one_way'])){
      $one_way = "TRUE";
    }      
    else $one_way = $_POST['one_way'];

    
    if(empty($_POST['mobile_link'])){
      $mobile_link = "false";
    }      
    else $mobile_link = $_POST['mobile_link'];

    


if(isset($flightselector)){
   
    if($flightselector=='flightlowfaresearch'){
        // <!--# **flightExtensiveSearch**
        // > \Swagger\Client\Model\ExtremeSearchResponse flightExtensiveSearch($apikey, $origin, $destination, $departure_date, $one_way, $duration, $direct, $max_price, $aggregation_mode)

        // Flight Extensive Search - Build travel searches based on very flexible and open range of dates. You can use it to answer questions such as \"When is the best date to fly...\".  It's built on Amadeus' Featured Results technology, which returns thousands of results (prices, itineraries and dates) in a matter of milliseconds. Results are available over half a calendar year with a 1 to 15 day stay duration

        // <p>The Extensive Flight Search allows you to find the prices of one-way or return flights between two airports over a large number of dates, and for a large variety of stay durations. The search doesn't return exact itineraries, but rather tells you the best price for a flight on a given day, for a stay of a given duration.</p>  <p>The search is based on our Extreme Search platform, which continually caches a large number of flight search results from a list of origin cities to a variety of destinations. Since it's a cached search, the response time is fast, but not all origin airports are available. Here is <a href=\"https://github.com/amadeus-travel-innovation-sandbox/sandbox-content/blob/master/flight-search-cache-origin-destination.csv\">a list of the currently supported origin-destination IATA location pairs</a>. We try to keep this list as fresh as possible for you, but be aware that it may not always be exactly up-to-date and it can change without warning.</p>  <p>That said, a price graph like this provides a powerful bargin shopping tool - allowing travelers with flexible itineraries to identify days on which they can get the cheapest flights to their destinations.</p>

        // ### Example
        // ```php-->
        header('Content-type: text/json');
        require_once( '../../vendor/autoload.php');
            
            $api_instance = new Swagger\Client\Api\DefaultApi();
            // $apikey = "jJtGVQtdPsiAUhq9Gg1LyuhYPRONJZq1"; // string | API Key provided for your account, to identify you for API access. Make sure to keep this API key secret.
            // $origin = "BOS"; // string | City code from which the traveler will depart. See the location and airport interfaces for more information.
            // $destination = "LON"; // string | <a href=\"https://en.wikipedia.org/wiki/International_Air_Transport_Association_airport_code\">IATA code</a> of the city to which the traveler is going
            // $departure_date = "2017-12-25"; // string | The date on which the traveler will depart from the origin to go to the destination. You can specify a date range of up to 2 days. For a larger date range, use the Extensive Search. Dates are specified in the <a href=\"https://en.wikipedia.org/wiki/ISO_8601\">ISO 8601</a> yyyy-MM-dd date format and separated by --.
            // $return_date = null; // string | The date on which the traveler will depart from the destination to return to the origin. If this parameter is not specified, the search will find only one-way trips. If this, or the return_by parameter are specified, only return trips are found. You can specify a date range of up to 2 days.
            // $arrive_by = null; // string | The datetime by which the outbound flight should arrive, based on local time at the destination airport.  Date-times are specified in the <a href=\"https://en.wikipedia.org/wiki/ISO_8601\">ISO 8601</a> yyyy-MM-ddTHH:mm date format
            // $return_by = null; // string | The time by which the inbound flight should arrive, based on local time at the airport specified as the origin parameter
            // $adults = 1; // int | The number of adult (age 12 and over) passengers traveling on this flight.
            // $children = 0; // int | The number of child (younger than age 12 on date of departure) passengers traveling on this flight who will each have their own separate seat
            // $infants = 0; // int | The number of infant (younger than age 2 on date of departure) passengers traveling on this flight. Infants travel in the lap of an adult passenger, and thus the number of infants must not exceed the number of adults.
            // $include_airlines = null; // string[] | If specified, all results will include at least one flight where one or more of these airlines is the marketing carrier. This behaves as an OR function. Airlines are specified using <a href=\"https://en.wikipedia.org/wiki/Airline_codes\"><a href=\"https://en.wikipedia.org/wiki/Airline_codes\">IATA airline code</a>s</a>.
            // $exclude_airlines = null; // string[] | If specified, no results will include any flights where any of these airlines is the marketing carrier. Airlines are specified using <a href=\"https://en.wikipedia.org/wiki/Airline_codes\"><a href=\"https://en.wikipedia.org/wiki/Airline_codes\">IATA airline code</a>s</a>.
            // $nonstop = 'false'; // bool | Setting this to true will find only flights that do not require the passenger to change from one flight to another
            // $max_price = 9800.00; // int | Maximum price of trips to find in the result set, in USD (US dollars) unless some other currency code is specified. By default, no limit is applied
            // $currency = "USD"; // string | The preferred <a href=\"https://en.wikipedia.org/wiki/ISO_4217\">currency</a> for the results
            // $travel_class = "ECONOMY"; // string | Searches for results where the majority of the itinerary flight time should be in a the specified cabin class or higher
            // $number_of_results = 5; // int | The number of results to display. This will not be strictly interpreted but used as a guideline to display a useful number of results. By default, the number of results is dynamically determined. A maximum of 250 results will be displayed.

            try {
                $result = $api_instance->flightLowFareSearch($apikey, $origin, $destination, $departure_date, $return_date, $arrive_by, $return_by, $adults, $children, $infants, $include_airlines, $exclude_airlines, $nonstop, $max_price, $currency, $travel_class, $number_of_results);
                echo $result;
            } catch (Exception $e) {
                echo 'Exception when calling DefaultApi->flightLowFareSearch: ', $e->getMessage(), PHP_EOL;
            }
    }elseif($flightselector=='flightextensivesearch'){
            // <!--# **flightExtensiveSearch**
            // > \Swagger\Client\Model\ExtremeSearchResponse flightExtensiveSearch($apikey, $origin, $destination, $departure_date, $one_way, $duration, $direct, $max_price, $aggregation_mode)

            // Flight Extensive Search - Build travel searches based on very flexible and open range of dates. You can use it to answer questions such as \"When is the best date to fly...\".  It's built on Amadeus' Featured Results technology, which returns thousands of results (prices, itineraries and dates) in a matter of milliseconds. Results are available over half a calendar year with a 1 to 15 day stay duration

            // <p>The Extensive Flight Search allows you to find the prices of one-way or return flights between two airports over a large number of dates, and for a large variety of stay durations. The search doesn't return exact itineraries, but rather tells you the best price for a flight on a given day, for a stay of a given duration.</p>  <p>The search is based on our Extreme Search platform, which continually caches a large number of flight search results from a list of origin cities to a variety of destinations. Since it's a cached search, the response time is fast, but not all origin airports are available. Here is <a href=\"https://github.com/amadeus-travel-innovation-sandbox/sandbox-content/blob/master/flight-search-cache-origin-destination.csv\">a list of the currently supported origin-destination IATA location pairs</a>. We try to keep this list as fresh as possible for you, but be aware that it may not always be exactly up-to-date and it can change without warning.</p>  <p>That said, a price graph like this provides a powerful bargin shopping tool - allowing travelers with flexible itineraries to identify days on which they can get the cheapest flights to their destinations.</p>

            // ### Example
            // ```php-->

            header('Content-type: text/json');
            require_once('../../vendor/autoload.php');

            $api_instance = new Swagger\Client\Api\DefaultApi(); 
            
            if($departdate2==null){
              $departure_date = $departdate1;
            }else{
              $departure_date = $departdate1."--".$departdate2; 
            }
            
            if($duration==null){
              $duration = null;
            }else{
              $duration = "1--".$duration; 
            }

            try {
                $result = $api_instance->flightExtensiveSearch($apikey, $origin, $destination, $departure_date, $one_way, $duration, $direct, $max_price, $aggregation_mode);
                echo $result;
            } catch (Exception $e) {
                echo 'Exception when calling DefaultApi->flightExtensiveSearch: ', $e->getMessage(), PHP_EOL;
            }
        }elseif($flightselector=='flightaffiliatesearch'){
                        // # **flightAffiliateSearch**
            // > \Swagger\Client\Model\AffiliateSearchResponse flightAffiliateSearch($apikey, $origin, $destination, $departure_date, $return_date, $adults, $children, $infants, $include_merchants, $exclude_merchants, $max_price, $currency, $mobile)

            // Flight Affiliate Search - Use Travel Audience Connect's affiliate network API to search flights from our list of partners and provides deep-links to allow the user to book directly on the airline website.

            // <p>The Flight Affiliate Search API combines Amadeus' flight search technology with Travel Audience's Connect API partners to provide a unique flight search, where all results come with deep-links to book the flight at a partner's website. The API will let you easily provide the traveler with a path to book flights from your application.</p> <p>Travel Audience Connect partners include <ul>   <li><a href=\"http://www.cityjet.com/\">CityJet</a>, <a href=\"https://www.aireuropa.com/en/flights\">Air Europa</a> and <a href=\"http://www.flytap.com/\">TAP</a> in Western Europe,</li>   <li><a href=\"http://uralairlines.com/\">Ural Airlines</a> in Russia, </li>   <li><a href=\"http://www.avianca.com.br/\">Avianca Brazil</a>  and</li>   <li><a href=\"http://www.jal.com/\">JAL</a> in East Asia</li> </ul> </p> <p>Only Travel Audience Connect partner airlines are searched. For an up-to-date list of routes, see the route maps on each partners respective websites above. You can earn commission using the deep links provided in the search results if you sign up for an account at <a href=\"http://connect.travelaudience.com/\">connect.travelaudience.com</a>.</p>

            // ### Example
            // ```php
            header('Content-type: text/json');
            require_once('../../vendor/autoload.php');

            $api_instance = new Swagger\Client\Api\DefaultApi();
            $mobile = $mobile_link; // bool | Setting this to true will show mobile web deeplinks

            try {
                $result = $api_instance->flightAffiliateSearch($apikey, $origin, $destination, $departure_date, $return_date, $adults, $children, $infants, $include_merchants, $exclude_merchants, $max_price, $currency, $mobile);
                print_r($result);
            } catch (Exception $e) {
                echo 'Exception when calling DefaultApi->flightAffiliateSearch: ', $e->getMessage(), PHP_EOL;
            }
        }elseif($flightselector=='flightinspirationsearch'){
                        # **flightInspirationSearch**
            // > \Swagger\Client\Model\ExtremeSearchResponse flightInspirationSearch($apikey, $origin, $destination, $departure_date, $one_way, $duration, $direct, $max_price, $aggregation_mode)

            // Flight Inspiration Search - Go beyond the traditional search by origin, destination and dates to meet the needs of travelers looking for suggestions and a search experience that reflects the way they choose their trip. This can help you answer the question \"Where can I go within a given travel budget?\"

            // <p>The Inspiration Flight Search allows you to find the prices of one-way and return flights from an origin city without necessarily having a destination, or even a flight date, in mind. The search doesn't return a distinct set of price options, but rather, can tell you the price of flying from a given city to some destination, for a trip of a given duration, that falls within a given date range.</p>  <p>The search is based on our Extreme Search platform, which continually caches a large number of flight search results from a list of origin cities to a variety of destinations. Since it's a cached search, the response time is fast, but not all origin airports are available. Here is <a href=\"https://github.com/amadeus-travel-innovation-sandbox/sandbox-content/blob/master/flight-search-cache-origin-destination.csv\">a list of the currently supported origin-destination IATA location pairs</a>. We try to keep this list as fresh as possible for you, but be aware that it may not always be exactly up-to-date and it can change without warning.</p>  <p>Despite this limitation don't underestimate the power of this API. Thanks to its quick response speed you can easily pair it with other APIs to provide a low fare and inspiration for any destination. For example, you can could combine it with a event search API and suggest a total price to see go and see an concert or a game in a selection of cities.</p>

            require_once('../../vendor/autoload.php');
            header('Content-type: text/json');

            if($duration==null){
              $duration = null;
            }else{
              $duration = "1--".$duration; 
            }

            $api_instance = new Swagger\Client\Api\DefaultApi();            

            try {
                $result = $api_instance->flightInspirationSearch($apikey, $origin, $destination, $departure_date, $one_way, $duration, $direct, $max_price, $aggregation_mode);
                echo $result;
            } catch (Exception $e) {
                echo 'Exception when calling DefaultApi->flightInspirationSearch: ', $e->getMessage(), PHP_EOL;
            }
        }
}else{
    echo 'check the selector';
}


?>