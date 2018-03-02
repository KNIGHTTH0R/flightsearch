<?php 
include("../admin/includes/controller.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>system </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/ico" href="favicon.ico">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css'>
        <link href="../admin/css/bootstrap.min.css" rel="stylesheet">
        <link href="../admin/fonts/Open Iconic/css/open-iconic-bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/css/bootstrap-timepicker.css" />
        <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet"> 
        <link href="css/dashboard.css" rel="stylesheet">  
        <link rel="stylesheet" href="css/airportselect.css">
       <link rel="stylesheet" href="css/loader.css">
       <link rel="stylesheet" href="css/result.css">
        <link rel="stylesheet" href="css/animate.css">
    </head>
<body>
<!--checking the login process-->
<?php 
    if(!$session->logged_in){
        
        header("Location: ".$configs->loginPage());
        exit;
    }else{
?>
<!--login check ends-->

<!--navigator bar-->
<div class='nav'>
    
    <div class='link'>
      <div class='prev'>&#xf015;</div>
      <div class='small'>&#xf015;</div>
      <div class='full'>
        <div class='f1'>Home</div>
        <div class='f2'><a href="index.php">Go to the home page to change settings</a></div>
      </div>
    </div>
     <div class='link'>
        <div class='prev'>&#xf060;</div>
        <div class='small'>&#xf060;</div> 
     </div>
    <div class='link'>
        <div class='prev'>&#xf14e;</div>
      <div class='small'>&#xf14e;</div>
      <div class='full'>
        <div class='f1'>Navigate</div>
        <div class='f2'><a href="">reload this page before every subsiquent searches</a></div>
      </div>
    </div>
    <div class='link'>
            <div class='prev'>&#xf061;</div>
        <div class='small'>&#xf061;</div>
    </div>
    <div class='link'>
      <div class='prev'>&#xf011;</div>
      <div class='small'>&#xf011;</div>
      <div class='full'>
        <div class='f1'>Logout</div>
        <div class='f2'><a href="../admin/logout.php?path=referrer">Logout from the current session</a></div>
      </div>
    </div>
  </div>
 <!--navigation bar ends-->


  <!--form for sending emails-->
<div class="container" id="leftdiv" style="margin-top: 3%;
    height: 100%;
    width: 100%;">
  <div class="col-md-5 col-xs-12" style=" padding: 20px;
    padding-top: 0px;
    margin-top: 60px;
    border-top: 1px solid;
    background: #F9E79F;
    min-height: 1178px;
    max-height: 1178px;
">
        <form class="form-horizontal" id="main_form" name="main_form">
            <label class="wrapper" for="states">Select an option to search flight based on need</label>
            <div class="button dropdown"> 
              <select id="flightselector" name="flightselector">
                <option>Choose one of the options to see the form</option>
                <option value="flightlowfaresearch">flight Low Fare Search</option>
                <option value="flightextensivesearch">flight Extensive Search</option>
                <!-- <option value="flightaffiliatesearch">flight Affiliate Search</option>
                <option value="flightinspirationsearch">flight Inspiration Search</option> -->
              </select>
            </div>

            <div class="form-group flightlowfaresearch flightextensivesearch flightinspirationsearch flightaffiliatesearch box">
              <label class="flightlowfaresearch box">
              Flight Low-Fare Search - Find the cheapest one way or return itineraries and fares between two airports at specific dates.
              </label>
              
              <label class="flightextensivesearch box">
              Flight Extensive Search - Build travel searches based on very flexible and open range of dates. You can use it to answer questions such as \"When is the best date to fly...\".  It's built on Amadeus' Featured Results technology, which returns thousands of results (prices, itineraries and dates) in a matter of milliseconds. Results are available over half a calendar year with a 1 to 15 day stay duration
              </label>
              
              <label class="flightinspirationsearch box">
              Flight Inspiration Search - Go beyond the traditional search by origin, destination and dates to meet the needs of travelers looking for suggestions and a search experience that reflects the way they choose their trip. This can help you answer the question \"Where can I go within a given travel budget?\"
              </label>
            
              <label class="flightaffiliatesearch box">
              Flight Affiliate Search - Use Travel Audience Connect's affiliate network API to search flights from our list of partners and provides deep-links to allow the user to book directly on the airline website.
              </label>
            </div>

            <div class="form-group flightlowfaresearch flightinspirationsearch flightextensivesearch flightaffiliatesearch box">
            <label class="control-label col-sm-2" for="origin">Origin</label>
            <input type="text" id="origin" name="origin" autocomplete="false" required placeholder="origin iata"></input>
            </div>

            <div class="form-group flightlowfaresearch flightinspirationsearch flightextensivesearch flightaffiliatesearch box">
            <label class="control-label col-sm-2" for="destination">Destination</label>
            <input type="text" id="destination" name="destination" autocomplete="false" placeholder="destination iata"></input>
            </div>

            <div class="form-group flightlowfaresearch flightinspirationsearch flightaffiliatesearch box" style="position:relative">
            <label class="control-label col-sm-2" for="departure_date">departure_date</label>
            <input type="text" id="departure_date" name="departure_date" class="datepicker" placeholder="departure date"></input>
            </div>

            <div class="form-group flightlowfaresearch flightaffiliatesearch box"> 
            <label class="control-label col-sm-2" for="return_date">return_date</label>
            <input type="text" id="return_date" name="return_date" class="datepicker" placeholder="return date not needed for one way"></input>
            </div>

            <div class="form-group flightextensivesearch box"> 
            <label class="control-label col-sm-2" for="departrange1">Departure range date1</label>
            <input type="text" id="departrange1" name="departrange1" class="datepicker" placeholder="date for range finder"></input>
            </div>

            <div class="form-group flightextensivesearch box"> 
            <label class="control-label col-sm-2" for="departrange2">departure range date2</label>
            <input type="text" id="departrange1" name="departrange2" class="datepicker" placeholder="date 2 for range finder"></input>
            </div>

            <div class="form-group flightlowfaresearch box"> 
            <label class="control-label col-sm-2" for="arrive_by">arrive_by</label>
            <input type="text" id="arrive_by" name="arrive_by"></input>
            </div>

            <div class="form-group flightlowfaresearch box"> 
            <label class="control-label col-sm-2" for="return_by">return_by</label>
            <input type="text" id="return_by" name="return_by"></input>
            </div>

            <div class="form-group flightextensivesearch flightinspirationsearch box"> 
            <label class="control-label col-sm-2" for="one_way">One way / round trip</label>
            <select id="one_way" name="one_way" style="width:205px;">
              <option value="TRUE">One way </option>
              <option value="FALSE">Round trip</option>
            </select>
            </div>

             <div class="form-group flightextensivesearch flightinspirationsearch box"> 
            <label class="control-label col-sm-2" for="duration">duration</label>
            <input type="text" id="duration" name="duration" placeholder="only specify this when return trip is needed"></input>
            </div>

             <div class="form-group flightextensivesearch flightinspirationsearch box"> 
            <label class="control-label col-sm-2" for="aggregation_mode">aggregation_mode</label>
            <input type="text" id="aggregation_mode" name="aggregation_mode" placeholder="default is day, eg- month,week,etc"></input>
            </div>

            <div class="form-group flightlowfaresearch flightaffiliatesearch box">
            <label class="control-label col-sm-2" for="adults">adults</label>
            <input type="text" id="adults" name="adults" placeholder="1,2,3,......"></input>
            </div>

            <div class="form-group flightlowfaresearch flightaffiliatesearch box">
              <label class="control-label col-sm-2" for="children">children</label>
              <input type="text" id="children" name="children" placeholder="1,2,3...."></input>
            </div>

            <div class="form-group flightlowfaresearch flightaffiliatesearch box">
            <label class="control-label col-sm-2" for="infants">infants</label>
            <input type="text" id="infants" name="infants" placeholder="1,2,3....."></input>
            </div>

            <div class="form-group flightlowfaresearch flightaffiliatesearch box"> 
            <label class="control-label col-sm-2" for="include_airlines">include_airlines</label>
            <input type="text" id="include_airlines" name="include_airlines" placeholder="AA,AB,XN,etc use two letter iata names with commas"></input>
            </div>

            <div class="form-group flightlowfaresearch flightaffiliatesearch box"> 
            <label class="control-label col-sm-2" for="exclude_airlines">exclude_airlines</label>
            <input type="text" id="exclude_airlines" name="exclude_airlines" placeholder="AA,AB,XN,etc use two letter iata names with commas"></input>
            </div>

            <div class="form-group flightlowfaresearch flightinspirationsearch box">
              <label class="control-label col-sm-2" for="nonstop">nonstop/with stops</label>
              <select id="nonstop" name="nonstop" style="width: 205px;">
                <option value="true">Nonstop</option>
                <option value="false">flights with stops or need to change planes</option>
              </select>
            </div>

            <div class="form-group flightlowfaresearch flightinspirationsearch flightaffiliatesearch flightextensivesearch box">
            <label class="control-label col-sm-2" for="max_price">max_price</label>
            <input type="number" id="max_price" name="max_price" placeholder="use interger eg - 300 , 500"></input>
            </div>

            <div class="form-group flightlowfaresearch flightaffiliatesearch box">
            <label class="control-label col-sm-2" for="currency">currency</label>
            <input type="text" id="currency" name="currency" placeholder="USD,INR etc"></input>
            </div>

            <div class="form-group flightlowfaresearch box"> 
            <label class="control-label col-sm-2" for="travel_class">travel_class</label>
            <select id="travel_class" name="travel_class" style="width: 205px;">
                <option value="ECONOMY">economy</option>
                <option value="BUSINESS">business</option>
                <option value="FIRST">first</option>
              </select>
            </div>

            <div class="form-group flightaffiliatesearch box"> 
            <label class="control-label col-sm-2" for="mobile_link">show mobile web links</label>
            <select id="mobile_link" name="mobile_link" style="width: 205px;">
                <option value="false">don't show links</option>
                <option value="true">show links</option>
              </select>
            </div>

            <div class="form-group flightlowfaresearch box">
            <label class="control-label col-sm-2" for="number_of_results">number of results</label>
            <input type="number" id="number_of_results" name="number_of_results" placeholder="number of results to display"></input>
            </div>

            <div class="form-group flightlowfaresearch flightinspirationsearch flightextensivesearch flightaffiliatesearch box">
            <input type="submit" value="search" name="submit" style="    width: 96%;
    height: 49px;
    background: #ffe51cc2;
    font-size: 30px;
    font-weight: 700;
    outline: none;
    "></input>
            </div>
        </form>
  </div>
  

  <!--right side div-->

  <div class="col-md-7 col-xs-12" style="max-height: 1178px;
    min-height: 1178px;
    background: #312d2d;
    margin-top: 60px;
    overflow-y:auto;">
    <div class="container" id="lala" style="width: 95%;
    /* height: 80px; */
    /* background: red; */
    margin-top: 10px;"></div>
  <!--ajax loader  -->
    
  </div>

  <div class="col-md-12 col-xs-12">
    <img id="load" src="mail/img/loading.gif" style="
    display:none;
        width: 31%;
        margin-left: 33%;
    ">

    <!--method="POST" action="mail/d.php"-->
    <form id="sendmail" style="height: 290px;
    width: 50%;
    display: block;
    margin: 0 auto;
    margin-top: 50px;
    background: #312d2d;
    color: #f9e79f;
    border-radius: 5px;
    margin-bottom: 40px;">
      <input required type="text" style="width: 97%;
      color:black;
    height: 46px;
    border: 2px solid #f9e79f;
    border-radius: 5px;
    font-size: 13px;
    text-transform: uppercase;
    outline: none;
    margin: 12px;" name="aname" id="aname" placeholder="enter agent name or name you want customer to see"></input>
    <input required type="text" style="width: 97%;
    color:black;
    height: 46px;
    border: 2px solid #f9e79f;
    border-radius: 5px;
    font-size: 13px;
    text-transform: uppercase;
    outline: none;
    margin: 12px;" name="name" id="name" placeholder="enter customer name"></input>
      <input required type="email" style="width: 97%;
      color:black;
    height: 46px;
    border: 2px solid #f9e79f;
    border-radius: 5px;
    font-size: 13px;
    text-transform: uppercase;
    outline: none;
    margin: 12px;" name="email" id="email" placeholder="enter email address of receiver"></input>
      <input type="text" name="data" id="data" style="display:none;" ></input>
      <input style="width: 97%;
      color:black;
    height: 46px;
    border: 2px solid #f9e79f;
    border-radius: 5px;
    background: indianred;
    color: white;
    font-size: 20px;
    margin: 12px;" type="submit"></input>
    </form>
    
  </div>
  <div style=" display: none;
    position: fixed;
    bottom: 0px;
    background: #ffa700;
    color: black;
    left: 38%;
    padding-left: 100px;
    padding-right: 100px;
    padding-top: 10px;
    border-radius: 3px;" id="response" class="response">
    <p>Your mail has been sent</p><span id="resclose" style="float: right;
    top: 0px;
    right: 0px;
    position: absolute;
    background: #60ff00;
    background: #ff000061;
    padding: 5px;
    font-size: 17px;
    border-radius: 4px;
    height: 100%;
    width: 25px;
    padding-left: 8px;
    padding-top: 7px;">x<span>
  </div>

</div>
  <!--form ends-->


 
 <!--login cheaker if else statement end-->
 <?php } ?>
 <!--login cheaker if else statement end-->
 
 
 
 <!-- JavaScript Resources -->
      <script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
      <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
      <script>
    $("#arrive_by").inputmask('99:99',{placeholder:"HH:MM"});
    $("#return_by").inputmask('99:99',{placeholder:"HH:MM"});
    // $("#cus_exp_date").inputmask('99/9999',{placeholder:"mm/yyyy"});
</script>
      <script src="../admin/js/jquery-ui.js"></script>
      <script src="../admin/js/bootstrap.min.js"></script>
       <script src="js/bootstrap-datetimepicker.min.js"></script>
       <script src="js/moment.js"></script>
       <script src="js/airportsss.js"></script>
       <script src="js/listofairline.js"></script>
       <script src="js/makemailtemp.js"></script>
      <script src="js/search.js"></script>
      <script src="js/fuse.min.js"></script>
      <script src="js/output.min.js"></script>
      <script src="js/loadsh.js"></script>
      <script src="js/airportselect.js"></script>
      <script src="js/airportselect1.js"></script>
      
      <script type="text/javascript">
        $(document).ready(function(){
            $("#flightselector").change(function(){
                $(this).find("option:selected").each(function(){
                    var optionValue = $(this).attr("value");
                    if(optionValue){
                        $(".box").not("." + optionValue).hide();
                        $("." + optionValue).show();
                    } else{
                        $(".box").hide();
                    }
                });
            }).change();
        });
      </script>

       <script>
        $( function() {
          $( ".datepicker" ).datepicker({
             format: 'yyyy-mm-dd',
            startDate: '-1d'
          });
        } );

        $("input").attr('autocomplete','off');
      
      </script>

      <script>
var selectedval=$('#one_way :selected').val();
        if(selectedval=="TRUE"){
           $('#duration').attr('disabled','disabled'); 
           $('#duration').val(''); 
        }else{
          $('#duration').removeAttr('disabled');
        }
      $('#one_way').change(function(){
        var selectedval1=$('#one_way :selected').val();
        if(selectedval1=="TRUE"){
           $('#duration').attr('disabled','disabled');
           $('#duration').val(''); 
        }else{
          $('#duration').removeAttr('disabled');
        }
      });
        
      </script>

<script>
var nice=wah;
$("#name").on('click',function(){
  console.log(nice);
  $("#data").val(JSON.stringify(nice));
})

$("#resclose").click(function(){
  $('#response').removeClass('fadeInUp');
  $('#response').addClass('animated fadeOutDown');
})
                  
</script>

      <script>
        $("#sendmail").on("submit",(e)=>{
          console.log(wah);
          e.preventDefault();
          var nameg=$("#name").val();
          var emailg=$("#email").val();
           var aname=$("#aname").val();
           $("#load").show();
            $("#sendmail").hide();
          var dataString = "aname="+aname+"&name="+nameg+"&email="+emailg+"&wah="+JSON.stringify(wah);
            $.ajax({
                url: 'mail/sendmail.php', //This is the current doc
                type: "POST",
                data: dataString,
                success: function(datag){
                    console.log(datag);
                    $("#load").hide();
                    $("#sendmail").show();
                    $('#response').show();
                    $('#response').removeClass('fadeInUp');
                    $('#response').addClass('animated fadeInUp');
                                        
              }
            });
        });
        </script>
        
    
</body>
</html>