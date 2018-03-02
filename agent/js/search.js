 function calculateTime(ex,ex1){
     var day1 = moment(ex);
     var day2 = moment(ex1);
     var result=day2.diff(day1);
     var duration = moment.duration(result);
     var years = duration.years(),
        days = duration.days(),
        hrs = duration.hours(),
        mins = duration.minutes(),
        secs = duration.seconds();

        var abc=hrs+"Hr "+mins+"Min";
        // console.log(abc);
        return abc
 }
 
function convertToTime(ex){
    var time=moment(ex)
    var newtime = time.format('hh:mm A');
    // console.log(newtime);
    return newtime;
}

function getdayname(ex){
     var time=moment(ex)
    var newtime = time.format('dddd');
    // console.log(newtime);
    return newtime;
}

function getMonthnamedate(ex){
     var time=moment(ex)
    var newtime = time.format('MMMM').substring(0,3);
    var newtime1 = time.format('DD');
    var newtime2 = time.format('YYYY');
    var newtime3 = time.format('dddd').substring(0,3);
    // console.log(newtime);
    return newtime+" "+newtime1+","+newtime2+","+newtime3;
}

 function getCity(ex){
        var resultss = airportsss.filter(function( obj ) {
        return obj.iata == ex;
    })[0];
    // console.log(resultss.city);
    return resultss.city;
 }

 function getCountry(ex){
        var resultss = airportsss.filter(function( obj ) {
        return obj.iata == ex;
    })[0];
    // console.log(resultss.city);
    return resultss.country;
 }

  function getAirportname(ex){
        var resultss = airportsss.filter(function( obj ) {
        return obj.iata == ex;
    })[0];
    // console.log(resultss.city);
    return resultss.name;
 }

 function layovertime(ex,ex1){
       var d= ex1[ex];
       var e=ex1[ex+1];
       
       var result =d.arrives_at;
       var result1 =e.departs_at;

      var mainresult= calculateTime(result,result1);
    //    console.log(e);
       return mainresult;       
 }

 function getairlinelogo(dc){
    var logo=dc;
     if(airlinesmain[logo]==undefined){
        return '404_logo.png';
    }else{
        return airlinesmain[logo];
    }
 }
 
 function showdataforflights(data){
     var selectorshow=$("#flightselector :selected").val();

     if(selectorshow=='flightlowfaresearch'){
       data.results.forEach(function(element,index) {
           $('#lala').append('<div class="row" id="flight-'+index+'" style="margin-top: 15px;"></div>');
           $('#flight-'+index).append('\
           <span id="selector-'+index+'" onclick="gclone(this);" style="display: inline-block;float: right;height: 30px;width: 30px;background: white;border-radius:16px;padding:7px;"><i style="color: red;" class="fa fa-check" aria-hidden="true"></i></span>\
           <div class="row" style="width: 94%;">\
           <div class="col-md-3 col-xs-3 leftcounter">\
           <span style="display: block;position:absolute;margin-top: 11px;margin-left: 26%;color: white;font-size: 4em;">'+(index+1)+'</span>\
           </div>\
               <div class="col-md-6 col-xs-6 rightcounter">\
               <span style="display: block;top: 26px;position: relative;font-size: 30px;left: 23px;">Flight options</span>\
               <span style="    position: relative;    display: block;    top: 30px;    left: 24px;    font-size: 13px;">fare estimated</span>\
               </div>\
           <div class="col-md-3 col-xs-3" style=" background: white;height: 90px;padding: 13px;">\
           <p style="font-size: 12px;text-align: justify;margin:0;">Total Price <input type="text" id="totalfare" style="border: none;height: 16px;font-size: 12px;" value="'+data.currency+element.fare.total_price+'"></input></p>\
           <p style="font-size: 10px;text-align: justify;margin:0;">Price/Adult <input type="text" id="totalfareadult" style="border: none;height: auto;font-size: 10px;" value="'+data.currency+element.fare.price_per_adult.total_fare+'"></input></p>\
           <p style="font-size: 10px;text-align: justify;margin:0;">Price/Child <input type="text" id="totalfarechild" style="border: none;height: auto;font-size: 10px;" value="'+data.currency+(typeof element.fare.price_per_child == 'undefined'?"0":element.fare.price_per_child.total_fare)+'"></input></p>\
           <p style="font-size: 10px;text-align: justify;margin:0;">Price/Infant <input type="text" id="totalfareinfant" style="border: none;height: auto;font-size: 10px;" value="'+data.currency+(typeof element.fare.price_per_infant == 'undefined'?"0":element.fare.price_per_infant.total_fare)+'"></input></p>\
           </div>\
           </div>\
           ');
           element.itineraries.forEach(function(item,number){
            $('#flight-'+index).append('<div id="mainflight'+index+'number'+number+'" class="row checker" style="width: 94%;margin-top: 15px;margin-bottom: 15px;border: 1px dashed #B4FE07;"><span id="sectionselector-mainflight'+index+'number'+number+'" onclick="sectionselector(this);"  style="display:none;float:right;height: 30px;width: 30px;background: white;border-radius:16px;padding:7px;margin-right:4px;margin-top:3px" class=""><i style="color: red;" class="fa fa-check" aria-hidden="true"></i></span></div>');
                if(item.outbound){
                item.outbound.flights.forEach(function(data,overlay){
                   $('#mainflight'+index+'number'+number).append('\
                    <div class="row  checker1" id="result'+index+'outbound'+number+'flight'+overlay+'" style="background:#EAECEE;width: 100%;margin-left:0;margin-top: 1px;">\
                    <span id="selector1-'+index+'outbound'+number+'flight'+overlay+'" class="20g" onclick="sweepvalue(this)" style="color:red;display: none;position: absolute;width: 30px;height: 30px;background: white;border-radius:16px;padding:7px;margin-left: 20p;right: 30px;"><i class="fa fa-check" aria-hidden="true"></i></span>\
                        <div class="row" style="background:#F7DC6F;width: 100%;margin-left:0;"><p class="0g" style="text-align: center;padding-top: 9px;">Outbound<p></div>\
                        <div class="row" style="margin: 0px;padding-top: 10px;padding-left:6px;padding-bottom: 7px;border-bottom: 1px solid;">\
                            <i class="fa fa-clock-o"></i>\
                            <span class="1g">'+data.departs_at+'</span>\
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>\
                            <span class="2g">'+data.arrives_at+'</span>\
                        </div>\
                        <div class="row" style="margin: 0px;padding-top: 10px;padding-left:6px;padding-bottom: 7px;">\
                            <span class="3g">'+data.departs_at.substring(0, data.departs_at.length - 6)+'</span>\
                            <span>|</span>\
                            <span class="4g" style="font-size:12px!important;">Trip to '+getCity(data.destination.airport)+'</span>\
                            <span class="5g" style="float: right;margin-right: 10px;">Total travel time - '+calculateTime(data.departs_at,data.arrives_at)+'</span>\
                        </div>\
                        <div class="row" style="margin: 0px;padding-left: 6px;border-top: 1px solid;">\
                            <div class="col-md-4 col-xs-4" style="height: 200px;padding-left: 9px;background: #FFC300;width: 10;">\
                                <div class="row" style="height: 35%;background: #f7dc6f;"><img class="6g" src="airlines/'+getairlinelogo(data.operating_airline)+'" style="width: 57%;height: 107%;margin-left: 21%;margin-top: 4px;border-radius: 11px;"></div>\
                                <div class="row" style="background: #f7dc6f;height: 20%;">\
                                <p class="7g" style="    text-align: center;    padding: 12px;    font-size: 15px;">FLIGHT '+data.aircraft+'</p>\
                                </div>\
                                <div class="row" style="background: #f7dc6f;height: 20%;">\
                                <p class="8g" style="    text-align: center;    padding: 12px;    font-size: 15px;">'+data.booking_info.travel_class+' CLASS</p>\
                                </div>\
                                <div class="row" style="background: #f7dc6f;height: 25%;">\
                                <p class="9g" style="    text-align: center;    padding: 12px;    font-size: 15px;">Flight duration: '+calculateTime(data.departs_at,data.arrives_at)+'</p>\
                                </div>\
                            </div>\
                            <div class="col-md-8 col-xs-8" style="height:200px;">\
                                <div class="row" style="height:50%;background: #566573;">\
                                    <div class="row" style="margin:0;">\
                                        <div class="row" style="height:40%;padding-top:12px;padding-bottom: 18px;">\
                                        <span class="10g" style="padding-left: 30px;margin-top: 12px;font-size: 13px;color: #eaecee;\">'+getAirportname(data.origin.airport)+", "+data.origin.airport+'</span>\
                                        </div>\
                                    <div class="row" style="height:60%;padding-left: 19px;">\
                                        <div class="col-md-2 col-xs-2"><img src="img/plane_takeoff.png" style="height: 35px;width: 35px;"></div>\
                                        <div class="col-md-6 col-xs-6" style="padding-top: 5px;">\
                                        <div class="11g" style="width:100%;padding-left: 5px;color:white;font-size: 14px;text-align: justify;">'+getCity(data.origin.airport)+"("+data.origin.airport+")"+'</div>\
                                        <div class="12g" style="width:100%;padding-left: 5px;color:white;font-size: 10px;">'+getCountry(data.origin.airport)+'</div>\
                                        <div class="13g" style="width:100%;padding-left: 5px;color:white;font-size: 10px;">Terminal '+data.origin.terminal+'</div>\
                                    </div>\
                                <div class="col-md-4 col-xs-4" style="padding-top: 5px;">\
                                        <div class="14g" style="width:100%;padding-left: 5px;color:white;font-size: 14px;text-align: justify;">'+convertToTime(data.departs_at)+'</div>\
                                        <div class="15g" style="width:100%;padding-left: 5px;color:white;font-size: 10px;">'+getMonthnamedate(data.departs_at)+'</div>\
                                </div>\
                                </div>\
                                </div>\
                                </div>\
            <div class="row" style="height:50%;background: #273746;">\
            <div class="row" style="margin:0;"> \
                    <div class="row" style="height:40%;padding-top:12px;padding-bottom: 18px;">\
                    <span class="16g" style="padding-left: 30px;margin-top: 12px;font-size: 13px;color: #eaecee;">'+getAirportname(data.destination.airport)+", "+data.destination.airport+'</span>\
                    </div>\
                        <div class="row" style="height:60%;padding-left: 19px;"> \
        <div class="col-md-2 col-xs-2"><img src="img/arrivals.png" style="height: 35px;width: 35px;"></div>\
        <div class="col-md-6 col-xs-6" style="\
        padding-top: 5px;\
    ">\
            <div style="width:100%;padding-left: 5px;color:white;font-size: 14px;text-align: justify;" class="17g">'+getCity(data.destination.airport)+"("+data.destination.airport+")"+'</div>\
            <div style="width:100%;padding-left: 5px;color:white;font-size: 10px;" class="18g">'+getCountry(data.destination.airport)+'</div>\
            <div style="width:100%;padding-left: 5px;color:white;font-size: 10px;" class="19g">Terminal '+data.destination.terminal+'</div>\
        </div>    \
        <div class="col-md-4 col-xs-4" style="\
        padding-top: 5px;\
    ">\
            <div style="width:100%;padding-left: 5px;color:white;font-size: 14px;text-align: justify;" class="20g">'+convertToTime(data.arrives_at)+'</div>\
            <div style="width:100%;padding-left: 5px;color:white;font-size: 10px;" class="21g">'+getMonthnamedate(data.arrives_at)+'</div>\
    </div>    \
    </div></div></div>\
        </div>\
    </div>\
    <div class="row" style="height: 37px;background: #eaecee;margin: 0;">\
    <span style="font-size: 9px;margin-left: 90px;margin-top: 13px;display: inline-block;margin-bottom:15px;">Marketing airline</span>\
    <span style="font-size: 9px;margin-top: 13px;display: inline-block;">|</span>\
    <span style="font-size: 9px;margin-top: 13px;display: inline-block;" class="22g">'+data.marketing_airline+'</span>\
    <span style="font-size: 9px;margin-left: 5px;margin-top: 13px;display: inline-block;">Operating airline</span>\
    <span style="font-size: 9px;margin-top: 13px;display: inline-block;">|</span>\
    <span style="font-size: 9px;margin-top: 13px;display: inline-block;" class="23g">'+data.operating_airline+'</span>\
    <span style="font-size: 9px;margin-left: 5px;margin-top: 13px;display: inline-block;">Aircraft number</span>\
    <span style="font-size: 9px;margin-top: 13px;display: inline-block;">|</span>\
    <span style="font-size: 9px;margin-top: 13px;display: inline-block;" class="24g">'+data.aircraft+'</span>\
    <span style="font-size: 9px;margin-left: 5px;margin-top: 13px;display: inline-block;">Booking code</span>\
    <span style="font-size: 9px;margin-top: 13px;display: inline-block;">|</span>\
    <span style="font-size: 9px;margin-top: 13px;display: inline-block;" class="25g">'+data.booking_info.booking_code+'</span>\
    <span style="font-size: 9px;margin-left: 5px;margin-top: 13px;display: inline-block;">Seats remaining</span>\
    <span style="font-size: 9px;margin-top: 13px;display: inline-block;">|</span>\
    <span style="font-size: 9px;margin-top: 13px;display: inline-block;" class="26g">'+data.booking_info.seats_remaining+'</span>\
    </div>\
    '+(item.outbound.flights.length>=2?(overlay<item.outbound.flights.length-1?'<div class="row" style="height: 37px;background: #eaecee;margin: 0;background: #76D7C4;"><p style="text-align: center;padding-top: 12px;color: #273746;" class="27g">Layover at '+getAirportname(data.destination.airport)+", "+data.destination.airport+' total layout time : '+layovertime(overlay,item.outbound.flights)+'</p></div>':'<div></div>'):'<div class="27g" style="display:none"></div>')+'\
                   </div>\
                   ');
                });
                }
                if(item.inbound){
                item.inbound.flights.forEach(function(data,overlay){
                    $('#mainflight'+index+'number'+number).append('\
                   <div class="row checker1" id="result'+index+'Inbound'+number+'flight'+overlay+'" style="background:#EAECEE;margin-left:0;width: 100%;margin-top: 1px;">\
                      <span id="selector1-'+index+'inbound'+number+'flight'+overlay+'" class="20g" onclick="sweepvalue(this)" style="color:red;display: none;position: absolute;width: 30px;height: 30px;background: white;border-radius:16px;padding:7px;margin-left: 20p;right: 30px;"><i class="fa fa-check" aria-hidden="true"></i></span>\
                      <div class="row" style="background:#F1948A;margin:0;width: 100%;"><p style="text-align: center;padding-top: 10px;" class="0g">Inbound<p></div>\
                       <div class="row" style="margin: 0px;padding-top: 10px;padding-left:6px;padding-bottom: 7px;border-bottom: 1px solid;">\
                           <i class="fa fa-clock-o"></i>\
                           <span class="1g">'+data.departs_at+'</span>\
                           <i class="fa fa-arrow-right" aria-hidden="true"></i>\
                           <span class="2g">'+data.arrives_at+'</span>\
                       </div>\
                       <div class="row" style="margin: 0px;padding-top: 10px;padding-left:6px;padding-bottom: 7px;">\
                           <span class="3g">'+data.departs_at.substring(0, data.departs_at.length - 6)+'</span>\
                           <span>|</span>\
                           <span class="4g" style="font-size:12px!important;">Trip to '+getCity(data.destination.airport)+'</span>\
                           <span class="5g" style="float: right;margin-right: 10px;">Total travel time - '+calculateTime(data.departs_at,data.arrives_at)+'</span>\
                       </div>\
                       <div class="row" style="margin: 0px;padding-left: 6px;border-top: 1px solid;">\
                           <div class="col-md-4 col-xs-4" style="height: 200px;padding-left: 9px;background: #FFC300;width: 10;">\
                               <div class="row" style="height: 35%;background: #F1948A;"><img class="6g" src="airlines/'+getairlinelogo(data.operating_airline)+'" style="width: 57%;height: 107%;margin-left: 21%;margin-top: 4px;border-radius: 11px;"></div>\
                               <div class="row" style="background: #F1948A;height: 20%;">\
                               <p styl="text-align:center;" style="    text-align: center;    padding: 12px;    font-size: 15px;" class="7g">FLIGHT '+data.aircraft+'</p>\
                               </div>\
                               <div class="row" style="background: #F1948A;height: 20%;">\
                               <p styl="text-align:center;" style="    text-align: center;    padding: 12px;    font-size: 15px;" class="8g">'+data.booking_info.travel_class+' CLASS</p>\
                               </div>\
                               <div class="row" style="background: #F1948A;height: 25%;">\
                               <p styl="text-align:center;" style="    text-align: center;    padding: 12px;    font-size: 15px;" class="9g">Flight duration: '+calculateTime(data.departs_at,data.arrives_at)+'</p>\
                               </div>\
                           </div>\
                           <div class="col-md-8 col-xs-8" style="height:200px;">\
                               <div class="row" style="height:50%;background: #566573;">\
                                   <div class="row" style="margin:0;">\
                                       <div class="row" style="height:40%;padding-top:12px;padding-bottom: 18px;">\
                                       <span style="padding-left: 30px;margin-top: 12px;font-size: 13px;color: #eaecee;\" class="10g">'+getAirportname(data.origin.airport)+", "+data.origin.airport+'</span>\
                                       </div>\
                                   <div class="row" style="height:60%;padding-left: 19px;">\
                                       <div class="col-md-2 col-xs-2"><img src="img/plane_takeoff.png" style="height: 35px;width: 35px;"></div>\
                                       <div class="col-md-6 col-xs-6" style="padding-top: 5px;">\
                                       <div style="width:100%;padding-left: 5px;color:white;font-size: 14px;text-align: justify;" class="11g">'+getCity(data.origin.airport)+"("+data.origin.airport+")"+'</div>\
                                       <div style="width:100%;padding-left: 5px;color:white;font-size: 10px;" class="12g">'+getCountry(data.origin.airport)+'</div>\
                                       <div style="width:100%;padding-left: 5px;color:white;font-size: 10px;" class="13g">Terminal '+data.origin.terminal+'</div>\
                                   </div>\
                               <div class="col-md-4 col-xs-4" style="padding-top: 5px;">\
                                       <div style="width:100%;padding-left: 5px;color:white;font-size: 14px;text-align: justify;" class="14g">'+convertToTime(data.departs_at)+'</div>\
                                       <div style="width:100%;padding-left: 5px;color:white;font-size: 10px;" class="15g">'+getMonthnamedate(data.departs_at)+'</div>\
                               </div>\
                               </div>\
                               </div>\
                               </div>\
           <div class="row" style="height:50%;background: #273746;">\
           <div class="row" style="margin:0;"> \
                   <div class="row" style="height:40%;padding-top:12px;padding-bottom: 18px;">\
                   <span style="padding-left: 30px;margin-top: 12px;font-size: 13px;color: #eaecee;" class="16g">'+getAirportname(data.destination.airport)+", "+data.destination.airport+'</span>\
                   </div>\
                       <div class="row" style="height:60%;padding-left: 19px;"> \
       <div class="col-md-2 col-xs-2"><img src="img/arrivals.png" style="height: 35px;width: 35px;"></div>\
       <div class="col-md-6 col-xs-6" style="\
       padding-top: 5px;\
   ">\
           <div style="width:100%;padding-left: 5px;color:white;font-size: 14px;text-align: justify;" class="17g">'+getCity(data.destination.airport)+"("+data.destination.airport+")"+'</div>\
           <div style="width:100%;padding-left: 5px;color:white;font-size: 10px;" class="18g">'+getCountry(data.destination.airport)+'</div>\
           <div style="width:100%;padding-left: 5px;color:white;font-size: 10px;" class="19g">Terminal '+data.destination.terminal+'</div>\
       </div>    \
       <div class="col-md-4 col-xs-4" style="\
       padding-top: 5px;\
   ">\
           <div style="width:100%;padding-left: 5px;color:white;font-size: 14px;text-align: justify;" class="20g">'+convertToTime(data.arrives_at)+'</div>\
           <div style="width:100%;padding-left: 5px;color:white;font-size: 10px;" class="21g">'+getMonthnamedate(data.arrives_at)+'</div>\
   </div>    \
   </div></div></div>\
       </div>\
   </div>\
   <div class="row" style="height: 37px;background: #eaecee;margin: 0;">\
   <span style="font-size: 9px;margin-left: 90px;margin-top: 13px;display: inline-block;margin-bottom:15px;">Marketing airline</span>\
   <span style="font-size: 9px;margin-top: 13px;display: inline-block;">|</span>\
   <span style="font-size: 9px;margin-top: 13px;display: inline-block;" class="22g">'+data.marketing_airline+'</span>\
   <span style="font-size: 9px;margin-left: 5px;margin-top: 13px;display: inline-block;">Operating airline</span>\
   <span style="font-size: 9px;margin-top: 13px;display: inline-block;">|</span>\
   <span style="font-size: 9px;margin-top: 13px;display: inline-block;" class="23g">'+data.operating_airline+'</span>\
   <span style="font-size: 9px;margin-left: 5px;margin-top: 13px;display: inline-block;">Aircraft number</span>\
   <span style="font-size: 9px;margin-top: 13px;display: inline-block;">|</span>\
   <span style="font-size: 9px;margin-top: 13px;display: inline-block;" class="24g">'+data.aircraft+'</span>\
   <span style="font-size: 9px;margin-left: 5px;margin-top: 13px;display: inline-block;">Booking code</span>\
   <span style="font-size: 9px;margin-top: 13px;display: inline-block;">|</span>\
   <span style="font-size: 9px;margin-top: 13px;display: inline-block;" class="25g">'+data.booking_info.booking_code+'</span>\
   <span style="font-size: 9px;margin-left: 5px;margin-top: 13px;display: inline-block;">Seats remaining</span>\
   <span style="font-size: 9px;margin-top: 13px;display: inline-block;">|</span>\
   <span style="font-size: 9px;margin-top: 13px;display: inline-block;" class="26g">'+data.booking_info.seats_remaining+'</span>\
   </div>\
   '+(item.inbound.flights.length>=2?(overlay<item.inbound.flights.length-1?'<div class="row" style="height: 37px;background: #eaecee;margin: 0;background: #76D7C4;"><p style="text-align: center;padding-top: 12px;color: #273746;" class="27g">Layover at '+getAirportname(data.destination.airport)+", "+data.destination.airport+' total layout time : '+layovertime(overlay,item.inbound.flights)+'</p></div>':'<div></div>'):'<div class="27g" style="display:none;"></div>')+'\
                  </div>\
                   ');
                });
                }
           });
       });
    }else if(selectorshow=="flightextensivesearch"){
        data.results.forEach(function(element,index) {
            $('#lala').append('<div class="row" id="flight-'+index+'" style="margin-top: 15px;"></div>');
            $('#flight-'+index).append('\
            <div class="row" style="width: 94%;">\
            <div class="col-md-3 col-xs-3 leftcounter">\
            <span style="display: block;position: absolute;margin-top: 11px;margin-left: 26%;color: white;font-size: 4em;">'+(index+1)+'</span>\
            </div>\
                <div class="col-md-6 col-xs-6 rightcounter">\
                <span style="display: block;top: 26px;position: relative;font-size: 30px;left: 23px;">Flight options</span>\
                <span style="    position: relative;    display: block;    top: 30px;    left: 24px;    font-size: 13px;">fare estimated</span>\
                </div>\
            <div class="col-md-3 col-xs-3" style=" background: white;height: 90px;padding: 13px;">\
            <p style="font-size: 14px;text-align: justify;">Total Price '+data.currency+element.price+'</p>\
            </div>\
            </div>\
            <div class="row" style="width:94%;padding-top: 10px;padding-left:6px;padding-bottom: 7px;background:white;">\
            <span>Departure date: '+element.departure_date+'</span>\
            <span>|</span>\
            <span style="font-size:12px!important;">Return date: '+(typeof element.return_date == 'undefined'?"No return date|one way":element.return_date)+'</span>\
            <span style="float: right;margin-right: 10px;">Airline Name - '+element.airline+'</span>\
        </div>\
            <div class="row" style="width:94%;">\
            <div class="col-md-12 col-xs-12" style="height:200px;">\
            <div class="row" style="height:50%;background: #566573;">\
                <div class="row" style="margin:0;">\
                    <div class="row" style="height:40%;padding-top:12px;padding-bottom: 18px;">\
                    <span style="padding-left: 30px;margin-top: 12px;font-size: 13px;color: #eaecee;\">'+getAirportname(data.origin)+", "+data.origin+'</span>\
                    </div>\
                <div class="row" style="height:60%;padding-left: 19px;">\
                    <div class="col-md-2 col-xs-2"><img src="img/plane_takeoff.png" style="height: 35px;width: 35px;"></div>\
                    <div class="col-md-6 col-xs-6" style="padding-top: 5px;">\
                    <div style="width:100%;padding-left: 5px;color:white;font-size: 14px;text-align: justify;">'+getCity(data.origin)+"("+data.origin+")"+'</div>\
                    <div style="width:100%;padding-left: 5px;color:white;font-size: 10px;">'+getCountry(data.origin)+'</div>\
                </div>\
            </div>\
            </div>\
            </div>\
<div class="row" style="height:50%;background: #273746;">\
<div class="row" style="margin:0;"> \
<div class="row" style="height:40%;padding-top:12px;padding-bottom: 18px;">\
<span style="padding-left: 30px;margin-top: 12px;font-size: 13px;color: #eaecee;">'+getAirportname(element.destination)+", "+element.destination+'</span>\
</div>\
    <div class="row" style="height:60%;padding-left: 19px;"> \
<div class="col-md-2 col-xs-2"><img src="img/arrivals.png" style="height: 35px;width: 35px;"></div>\
<div class="col-md-6 col-xs-6" style="\
padding-top: 5px;\
">\
<div style="width:100%;padding-left: 5px;color:white;font-size: 14px;text-align: justify;">'+getCity(element.destination)+"("+element.destination+")"+'</div>\
<div style="width:100%;padding-left: 5px;color:white;font-size: 10px;">'+getCountry(element.destination)+'</div>\
</div>    \
</div></div>\
</div>\
            ');
        });
    }

    };

$("#main_form").on('submit', (function(e) {
       
        e.preventDefault();
        $('#lala').empty();
        $('#lala').append("<div class='loader'><div class='bar'></div><div class='bar'></div><div class='bar'></div><div class='bar'></div><div class='bar'></div></div>");
        $('.loader').show();
        $("html, body").scrollTop(0);
       
        $.ajax({
            url: "./search/amadeus.php", // Url to which the request is send
            type: "POST", // Type of request to be send, called as method
            data: new FormData($('form')[0]), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
            processData: false,
            contentType: false,
            success: function(data) // A function to be called if request succeeds
                {
                    $('.loader').hide();
                    showdataforflights(data);
                    console.log(data);
                }
        });
        
       
    }));

   