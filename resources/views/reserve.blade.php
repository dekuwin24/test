



        <!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title> Hotel Reservation Form </title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="custom.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>


    <script>




        $(document).ready(function() {
            $("#datepicker").datepicker({
                dateFormat: 'yy-mm-dd'
            });

        });



        $(document).ready(function() {
            $("#datepicker1").datepicker({dateFormat: 'yy-mm-dd'});
        });



        function yesnoCheck() {
            if (document.getElementById('roundradio').checked) {
                document.getElementById('roundtrip').style.display = 'block';
            }
            else document.getElementById('roundtrip').style.display = 'none';

        }


    </script>
    <style>
        #output {
            background-color: #c5edf3;
            color: #463c39;
            font-size: 17px;
            padding: 30px 30px;
            width: 40%;
            border: 2px solid #009688;
            font-family: sans-serif;
            line-height: 1.8;
        }
        #newPublish {
            background-color: #c5edf3;
            color: #463c39;
            font-size: 17px;
            padding: 30px 30px;
            width: 40%;
            border: 2px solid #009688;
            font-family: sans-serif;
            line-height: 1.8;
        }
        .box {
            background-color: #f7f7f7;
            margin-top: 60px;
            margin-bottom: 50px;
            padding: 40px 60px;
        }
        #details_info {
            background-color: #f7f7f7;
            color: #463c39;
            font-size: 17px;
            padding: 30px 30px;
            width: 40%;
            border: 1px solid #cccccc;
            font-family: sans-serif;
            line-height: 1.8;
            margin-left: 90px;
        }
        .box3 {
            margin-top: 80px;
            margin-left: 150px;
            margin-right: 150px;
            margin-bottom: 60px;
            padding: 40px 50px;
            background-color: gainsboro;
        }
        .box11 {
            margin-top: 80px;
            margin-left: 250px;
            margin-right: 250px;
            margin-bottom: 60px;
            padding: 40px 50px;
            background-color: gainsboro;
            line-height: 2.5;
        }
        .web_design_box {
            margin-top: 30px;
            margin-left: 350px;
            margin-right: 350px;
            margin-bottom: 60px;
            padding: 40px 50px;
            background-color: #d9edf7;
            box-shadow: 3px 5px 10px #318f86;
        }
        .train_reserve_box {
            margin-top: 30px;
            margin-left: 350px;
            margin-right: 350px;
            margin-bottom: 60px;
            padding: 40px 50px;
            background-color: #c6badc;
            box-shadow: 3px 5px 10px #7527b0;
        }
        .online_food_delivery_box {
            margin-top: 50px;
            margin-left: 350px;
            margin-right: 350px;
            margin-bottom: 60px;
            padding: 20px 40px;
            background-color: #d4c0b9;
            box-shadow: 3px 5px 10px #714c4a;
        }
        .result_box {
            margin-top: 15%;
            margin-left: 350px;
            margin-right: 350px;
            margin-bottom: 60px;
            padding: 20px 40px;
            background-color: #d4c0b9;
            box-shadow: 3px 5px 10px #8BC34A;
        }
        .result_box_text {
            color: #232222;
            font-size: 20px;
            text-align: center;
            padding-top:10px;
        }
        .result_box_text span {
            color: #614136;
            font-size: 26px;
            text-align: center;
        }
    </style>



</head>
<body>
<div class="train_reserve_box">
    <h3> Search for Train </h3><br>
    <form method="GET" action="{{ url('search_results') }}" >
        <div class="form-group">
            <label>Departure Station</label>
            <select class="form-control" id="station_name" >
                <option value="0" selected>Select From Stations </option>
                <option value="1"> Washington DC - Union Station, WAS </option>
                <option value="2"> New Carrollton, MD, NCR </option>
                <option value="3"> Baltimore - BWI Marshall Airport, MD, BWI </option>
                <option value="4"> Baltimore, MD - Penn Station, BAL  </option>
                <option value="5"> Aberdeen, MD, ABE </option>
                <option value="6"> Wilmington, DE - J.R. Biden, Jr. Station, WIL </option>
                <option value="7">PHILADELPHIA, PA - 30th street station', PHL </option>
                <option value="8">Trenton, NJ, TRE </option>
                <option value="9"> 'Metropark, NJ', 'MET' </option>
                <option value="10"> Newark Liberty Intl. Air., NJ', EWR </option>
                <option value="11"> Newark, NJ', 'NWK </option>
                <option value="12"> NEW YORK, NY - Penn Station', 'NYP </option>
                <option value="13"> New Rochelle, NY', 'NRO </option>
                <option value="14"> Stamford, CT', 'STM </option>
                <option value="15"> Bridgeport, CT', 'BRP </option>
                <option value="16"> NEW HAVEN, CT', 'NHV </option>
                <option value="17"> Wallingford, CT', 'WFD </option>
                <option value="18"> Meriden, CT', 'MDN </option>
                <option value="19"> Berlin, CT', 'BER </option>
                <option value="20"> Hartford, CT', 'HFD </option>
                <option value="21"> Windsor, CT', 'WND </option>
                <option value="22"> Windsor Locks, CT', WNL </option>
                <option value="23"> Springfield, MA', SPG </option>
                <option value="24"> Old Saybrook, CT', OSB </option>
                <option value="25"> 'New London, CT', NLC </option>
                <option value="26"> Mystic, CT', 'MYS </option>
                <option value="27"> Westerly, RI', WLY </option>
                <option value="28"> Kingston, RI', KIN </option>
                <option value="29"> Providence, RI', PVD </option>
                <option value="30"> Boston - Route 128, MA', 'RTE </option>
                <option value="31"> Boston, MA - Back Bay Station', BBY </option>
                <option value="32"> BOSTON, MA - south station', 'BOS </option>
            </select>
        </div>
        <div class="form-group">
            <label>Destination Station</label>
            <select class="form-control" id="station_name" >
                <option value="0" selected>Select From Stations </option>
                <option value="1"> Washington DC - Union Station, WAS </option>
                <option value="2"> New Carrollton, MD, NCR </option>
                <option value="3"> Baltimore - BWI Marshall Airport, MD, BWI </option>
                <option value="4"> Baltimore, MD - Penn Station, BAL  </option>
                <option value="5"> Aberdeen, MD, ABE </option>
                <option value="6"> Wilmington, DE - J.R. Biden, Jr. Station, WIL </option>
                <option value="7">PHILADELPHIA, PA - 30th street station', PHL </option>
                <option value="8">Trenton, NJ, TRE </option>
                <option value="9"> 'Metropark, NJ', 'MET' </option>
                <option value="10"> Newark Liberty Intl. Air., NJ', EWR </option>
                <option value="11"> Newark, NJ', 'NWK </option>
                <option value="12"> NEW YORK, NY - Penn Station', 'NYP </option>
                <option value="13"> New Rochelle, NY', 'NRO </option>
                <option value="14"> Stamford, CT', 'STM </option>
                <option value="15"> Bridgeport, CT', 'BRP </option>
                <option value="16"> NEW HAVEN, CT', 'NHV </option>
                <option value="17"> Wallingford, CT', 'WFD </option>
                <option value="18"> Meriden, CT', 'MDN </option>
                <option value="19"> Berlin, CT', 'BER </option>
                <option value="20"> Hartford, CT', 'HFD </option>
                <option value="21"> Windsor, CT', 'WND </option>
                <option value="22"> Windsor Locks, CT', WNL </option>
                <option value="23"> Springfield, MA', SPG </option>
                <option value="24"> Old Saybrook, CT', OSB </option>
                <option value="25"> 'New London, CT', NLC </option>
                <option value="26"> Mystic, CT', 'MYS </option>
                <option value="27"> Westerly, RI', WLY </option>
                <option value="28"> Kingston, RI', KIN </option>
                <option value="29"> Providence, RI', PVD </option>
                <option value="30"> Boston - Route 128, MA', 'RTE </option>
                <option value="31"> Boston, MA - Back Bay Station', BBY </option>
                <option value="32"> BOSTON, MA - south station', 'BOS </option>
            </select>
        </div>
        <div class="form-group">
            <label>Select Date</label>
            <input id="datepicker" />
        </div>





        <label>
            <span>One_way or Round trip </span> <br/>
                        <input type="radio" onclick="javascript:yesnoCheck();" id="onewayradio" name="roundtrip" value="oneway" checked="checked">One-way Trip
                        <input type="radio" onclick="javascript:yesnoCheck();" id="roundradio" name="roundtrip" value="round">Round Trip<br>
                      </label><br/>



        <div class="form-group" id="roundtrip" style="display:none">
            <label>Return Date</label>
            <input id="datepicker1" />
        </div>

        <br>
        <input type="submit" value="Submit">

    </form>
</div>

</body>
</html>