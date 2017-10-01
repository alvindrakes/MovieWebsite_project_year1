<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Booking</title>
    <link href="plugins/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="plugins/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
    <link href="plugins/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css"/>
    <link href="plugins/bootstrap-select-1.12.2/dist/css/bootstrap-select.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="css/styles.css"/>
</head>
<body>
	<?php



    
    $dbc = mysqli_connect ('localhost', 'root', '', 'dead @ 28 website') or die ("bad connect:". mysqli_connect_eror ());
    //echo "successfully connected"."<br>";
    
    $sql="SELECT DISTINCT name FROM movie_screenings ORDER BY name";
    $result = mysqli_query ($dbc,$sql);
    
    $post = array();
      while($row = $result->fetch_assoc())
      {
        $post[] = $row["name"];
      }
	?>
	
	<div class="header">
	    <ul class="bar header header-content">
	    <a href="homepage.html"><img src="logo2.png" height="85px" style="vertical-align:middle"></a>
	    <li><a href="movies.html">Movies</a></li>
	    <li><a href="booking.php">Booking</a></li>
	    <li><a href="about.html">About Us</a></li>
	    </ul>
	</div>


	<div class="content booking-container">
		<div class="container">
			<div class="title">BOOKING</div>
			<div class="row">
				<div class="select-movies-container">
					<div class="section">Movies</div>
					<select class="selectpicker show-tick selection" onchange="showDates(this.value);">
					<option></option>
					<?php
					for ($i=0;$i<count($post);$i++){
					  $select='<option value="'.$post[$i].'">'.$post[$i].'</option>';
					  echo $select;
					}
					//$select.='</select>';
					//echo $select;
					?>
					</select>
					<!--  <option>John Wick 2</option>
					  <option>Fast and Furious 8</option>
					  <option>Logan</option>
					  <option>Collide</option>
					  <option>LIFE</option>
					</select>-->
				</div>
				
				
				<div class="select-date-container">
					<div class="section">Select Date</div>
					<!--<select id="dates" name="dates" class="selectpicker show-tick selection">
					  <option>SUN, 09-April-2017</option>
					  <option>MON, 10-April-2017</option>
					  <option>TUE, 11-April-2017</option>
					  <option>WED, 12-April-2017</option>
					  <option>THU, 13-April-2017</option>
					</select>-->
					<div id="txt1">Please Select Movie First</div>
				</div>
				
				<div class="select-time-container">
					<div class="section">Select Time</div>
					<!--<select class="selectpicker show-tick selection">
					  <option>11.00am</option>
					  <option>12.15am</option>
					  <option>01.30pm</option>
					  <option>02.45pm</option>
					  <option>04.00pm</option>
					</select>-->
					<div id="txt2"><b>Please Select Movie and Date First</b></div>
				</div>
			</div>
			<!--<div class="select-group-container">
				<div class="section">Ticket</div>
				<div class="row">
					<div class="group clearfix">
						<div class="col-md-4">Adult</div>
						<div class="select-ticker-container col-md-8">
							<select class="selectpicker show-tick selection adult" data-selected-text-format="count">
							  <option value="1">1</option>
							  <option value="1">2</option>
							  <option value="1">3</option>
							  <option value="1">4</option>
							  <option value="1">5</option>
							  <option value="1">6</option>
							 
							</select>
						</div>
					</div>
					<div class="group clearfix">
						<div class="col-md-4">Children</div>
						<div class="select-ticker-container col-md-8">
							<select class="selectpicker show-tick selection children" data-selected-text-format="count">
							  <option value="1">1</option>
							  <option value="2">2</option>
							  <option value="3">3</option>
							  <option value="4">4</option>
							  <option value="5">5</option>
							  <option value="6">6</option>
							</select>
						</div>
					</div>
				</div>
			</div>-->
			<div class="section">Seating</div>
			<div class="seating-container col-md-3 center-block no-float">
				
				<div class="row no-gutters">
					<div id="txt3"><b>Please Select Movie Details First</b></div>
					<span id="seats" style="cursor:pointer" hidden=true>
						<div class="section-screen">screen</div>
						
					
					<button id="a1" class="col-md-2 seat" onclick="storeSeat('a1');">a1</button>
					<div id="A1" class="col-md-2 taken" hidden=true>a1</div>
					<button id="a2" class="col-md-2 seat" onclick="storeSeat('a2');">a2</button>
					<div id="A2" class="col-md-2 taken" hidden=true>a2</div>
					<button id="a3" class="col-md-2 seat" onclick="storeSeat('a3');">a3</button>
					<div id="A3" class="col-md-2 taken" hidden=true>a3</div>
					<button id="a4" class="col-md-2 seat" onclick="storeSeat('a4');">a4</button>
					<div id="A4" class="col-md-2 taken" hidden=true>a4</div>
					<button id="a5" class="col-md-2 seat" onclick="storeSeat('a5');">a5</button>
					<div id="A5" class="col-md-2 taken" hidden=true>a5</div>
					<button id="a6" class="col-md-2 seat" onclick="storeSeat('a6');">a6</button>
					<div id="A6" class="col-md-2 taken" hidden=true>a6</div>
					
					<button id="b1" class="col-md-2 seat" onclick="storeSeat('b1');">b1</button>
					<div id="B1" class="col-md-2 taken" hidden=true>b1</div>
					<button id="b2" class="col-md-2 seat" onclick="storeSeat('b2');">b2</button>
					<div id="B2" class="col-md-2 taken" hidden=true>b2</div>
					<button id="b3" class="col-md-2 seat" onclick="storeSeat('b3');">b3</button>
					<div id="B3" class="col-md-2 taken" hidden=true>b3</div>
					<button id="b4" class="col-md-2 seat" onclick="storeSeat('b4');">b4</button>
					<div id="B4" class="col-md-2 taken" hidden=true>b4</div>
					<button id="b5" class="col-md-2 seat" onclick="storeSeat('b5');">b5</button>
					<div id="B5" class="col-md-2 taken" hidden=true>b5</div>
					<button id="b6" class="col-md-2 seat" onclick="storeSeat('b6');">b6</button>
					<div id="B6" class="col-md-2 taken" hidden=true>b6</div>
					
					<button id="c1" class="col-md-2 seat" onclick="storeSeat('c1');">c1</button>
					<div id="C1" class="col-md-2 taken" hidden=true>c1</div>
					<button id="c2" class="col-md-2 seat" onclick="storeSeat('c2');">c2</button>
					<div id="C2" class="col-md-2 taken" hidden=true>c2</div>
					<button id="c3" class="col-md-2 seat" onclick="storeSeat('c3');">c3</button>
					<div id="C3" class="col-md-2 taken" hidden=true>c3</div>
					<button id="c4" class="col-md-2 seat" onclick="storeSeat('c4');">c4</button>
					<div id="C4" class="col-md-2 taken" hidden=true>c4</div>
					<button id="c5" class="col-md-2 seat" onclick="storeSeat('c5');">c5</button>
					<div id="C5" class="col-md-2 taken" hidden=true>c5</div>
					<button id="c6" class="col-md-2 seat" onclick="storeSeat('c6');">c6</button>
					<div id="C6" class="col-md-2 taken" hidden=true>c6</div>
					
					<button id="d1" class="col-md-2 seat" onclick="storeSeat('d1');">d1</button>
					<div id="D1" class="col-md-2 taken" hidden=true>d1</div>
					<button id="d2" class="col-md-2 seat" onclick="storeSeat('d2');">d2</button>
					<div id="D2" class="col-md-2 taken" hidden=true>d2</div>
					<button id="d3" class="col-md-2 seat" onclick="storeSeat('b3');">d3</button>
					<div id="D3" class="col-md-2 taken" hidden=true>d3</div>
					<button id="d4" class="col-md-2 seat" onclick="storeSeat('b4');">d4</button>
					<div id="D4" class="col-md-2 taken" hidden=true>d4</div>
					<button id="d5" class="col-md-2 seat" onclick="storeSeat('b5');">d5</button>
					<div id="D5" class="col-md-2 taken" hidden=true>d5</div>
					<button id="d6" class="col-md-2 seat" onclick="storeSeat('b6');">d6</button>
					<div id="D6" class="col-md-2 taken" hidden=true>d6</div>
					
					<button id="e1" class="col-md-2 seat" onclick="storeSeat('e1');">e1</button>
					<div id="E1" class="col-md-2 taken" hidden=true>e1</div>
					<button id="e2" class="col-md-2 seat" onclick="storeSeat('e2');">e2</button>
					<div id="E2" class="col-md-2 taken" hidden=true>e2</div>
					<button id="e3" class="col-md-2 seat" onclick="storeSeat('e3');">e3</button>
					<div id="E3" class="col-md-2 taken" hidden=true>e3</div>
					<button id="e4" class="col-md-2 seat" onclick="storeSeat('e4');">e4</button>
					<div id="E4" class="col-md-2 taken" hidden=true>e4</div>
					<button id="e5" class="col-md-2 seat" onclick="storeSeat('e5');">e5</button>
					<div id="E5" class="col-md-2 taken" hidden=true>e5</div>
					<button id="e6" class="col-md-2 seat" onclick="storeSeat('e6');">e6</button>
					<div id="E6" class="col-md-2 taken" hidden=true>e6</div>
					
					<!--<button class="col-md-2 seat" onclick="storeSeat('b1');">b1</button>
					<button class="col-md-2 seat" onclick="storeSeat('b2');">b2</button>
					<button class="col-md-2 seat" onclick="storeSeat('b3');">b3</button>
					<button class="col-md-2 seat" onclick="storeSeat('b4');">b4</button>
					<button class="col-md-2 seat" onclick="storeSeat('b5');">b5</button>
					<button class="col-md-2 seat" onclick="storeSeat('b6');">b6</button>
					
					<button class="col-md-2 seat" onclick="storeSeat('c1');">c1</button>
					<button class="col-md-2 seat" onclick="storeSeat('c2');">c2</button>
					<button class="col-md-2 seat" onclick="storeSeat('c3');">c3</button>
					<button class="col-md-2 seat" onclick="storeSeat('c4');">c4</button>
					<button class="col-md-2 seat" onclick="storeSeat('c5');">c5</button>
					<button class="col-md-2 seat" onclick="storeSeat('c6');">c6</button>
					
					<button class="col-md-2 seat" onclick="storeSeat('d1');">d1</button>
					<button class="col-md-2 seat" onclick="storeSeat('d2');">d2</button>
					<button class="col-md-2 seat" onclick="storeSeat('d3');">d3</button>
					<button class="col-md-2 seat" onclick="storeSeat('d4');">d4</button>
					<button class="col-md-2 seat" onclick="storeSeat('d5');">d5</button>
					<button class="col-md-2 seat" onclick="storeSeat('d6');">d6</button>
					
					<button class="col-md-2 seat" onclick="storeSeat('e1');">e1</button>
					<button class="col-md-2 seat" onclick="storeSeat('e2');">e2</button>
					<button class="col-md-2 seat" onclick="storeSeat('e3');">e3</button>
					<button class="col-md-2 seat" onclick="storeSeat('e4');">e4</button>
					<button class="col-md-2 seat" onclick="storeSeat('e5');">e5</button>
					<button class="col-md-2 seat" onclick="storeSeat('e6');">e6</button>-->
					
					<!--<div class="col-md-2 seat">a1</div>
					<div class="col-md-2 seat">a2</div>
					<div class="col-md-2 taken">a3</div>
					<div class="col-md-2 seat">a4</div>
					<div class="col-md-2 seat">a5</div>
					<div class="col-md-2 seat">a6</div>
					
					<div class="col-md-2 seat">b1</div>
					<div class="col-md-2 seat">b2</div>
					<div class="col-md-2 seat">b3</div>
					<div class="col-md-2 seat">b4</div>
					<div class="col-md-2 seat">b5</div>
					<div class="col-md-2 seat">b6</div>

					<div class="col-md-2 seat">c1</div>
					<div class="col-md-2 seat">c2</div>
					<div class="col-md-2 seat">c3</div>
					<div class="col-md-2 seat">c4</div>
					<div class="col-md-2 seat">c5</div>
					<div class="col-md-2 seat">c6</div>

					<div class="col-md-2 seat">d1</div>
					<div class="col-md-2 seat">d2</div>
					<div class="col-md-2 seat">d3</div>
					<div class="col-md-2 seat">d4</div>
					<div class="col-md-2 seat">d5</div>
					<div class="col-md-2 seat">d6</div>

					<div class="col-md-2 seat">e1</div>
					<div class="col-md-2 seat">e2</div>
					<div class="col-md-2 seat">e3</div>
					<div class="col-md-2 seat">e4</div>
					<div class="col-md-2 seat">e5</div>
					<div class="col-md-2 seat">e6</div>-->
		
				</span>
				</div>
			</div>
			
		<form action="refreshments.html">
			<!-- <button onclick="createTicket();">continue</button> -->

                	<div class="book-btn">
                    	<div class="row">
                            <button  onclick="createTicket();" class="continue-btn" >CONFIRM</button>
                        </div>
                    </div>
		</form>

		<p id="showmovie"></p>
		<p id="showdate"></p>
		<p id="showtime"></p>
		<p id="display"></p>
		</div>
		<div class="footer"></div>
	</div>
	<script>
		storeSeat.list = [];
		var movie="";
		var date="";
		var time="";
		var id=0;
		var s="";
		var customer;
		function showDates(str) {
		  var xhttp;
		  document.getElementById("txt2").innerHTML = "Please Select Movie and Date First";
		  document.getElementById("seats").hidden = true;
		  if (str === "") {
			document.getElementById("txt1").innerHTML = "Please Select Movie First";
			movie="";
			return;
		  }
			movie=str;
		  xhttp = new XMLHttpRequest();
		  xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
			  document.getElementById("txt1").innerHTML = this.responseText;
			  //alert(this.responseText);
			}
		  };
		  xhttp.open("GET", "getdate.php?q="+str, true);
		  xhttp.send();
		}
		
	/*	function testing(str) {
		  var xhttp;
		  var dropdown = document.getElementById("abc");
		  alert();
		  while (dropdown.options.length>0)
				{
					dropdown.remove(0);
					alert("removed");
				}
			alert("x");
		  xhttp = new XMLHttpRequest();
		  xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				
				alert(document.getElementById("dates"));
				var i;
				for(i = dropdown.options.length - 1 ; i >= 0 ; i--)
				{
					dropdown.remove(i);
				}
				while (dropdown.options.length > 0) {                
					dropdown.remove(0);
				} 

			  var datelist = JSON.parse(this.responseText);
			  alert(datelist[0]);
			  for(i = 0 ; i <= datelist.options.length ; i++)
					{
						var option = document.createElement("option");
						option.text = datelist[i];
						alert (datelist[i]);
						dropdown.add(option);
					}
			}
		  };
		  xhttp.open("GET", "testing.php?q="+str, true);
		  xhttp.send();
		}*/

        function showTimes(str) {
			document.getElementById("seats").hidden = true;
          var xhttp;    
          if (str === "") {
            document.getElementById("txt2").innerHTML = "Please Select Movie and Date First";
			date="";
            return;
          }
		  date=str;
          xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              document.getElementById("txt2").innerHTML = this.responseText;
            }
          };
          xhttp.open("GET", "gettime.php?q="+str + "&r="+movie, true);
          xhttp.send();
        }

        function showSeating(str) {
			
			var x = document.getElementById('seats');
			if (str === "") {
				x.hidden = true;
				}
			else{
				x.hidden = false;
				}

          var xhttp;    
          if (str === "") {
            document.getElementById("txt3").innerHTML = "Please Select Movie and Date First";
			time="";
			id=0;
            return;
          }
		  id=str;
		  var test="";
		  //document.getElementById("showtime").innerHTML = id;
          xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
				s=this.responseText;
				test=s;
              document.getElementById("txt3").innerHTML="";
			  getSeats(s);
			  //document.getElementById("showtime").innerHTML = s;
            }
          };
          xhttp.open("GET", "getseats.php?q="+str, true);
          xhttp.send();
		  
        }

		function getSeats(str) {
			var seatButtons = ["a1","a2","a3","a4","a5","a6","b1","b2","b3","b4","b5","b6","c1","c2","c3","c4","c5","c6","d1","d2","d3","d4","d5","d6","e1","e2","e3","e4","e5","e6"];
			var seatTaken = ["A1","A2","A3","A4","A5","A6","B1","B2","B3","B4","B5","B6","C1","C2","C3","C4","C5","C6","D1","D2","D3","D4","D5","D6","E1","E2","E3","E4","E5","E6"];
			//document.getElementById("a1").hidden=true;
			//document.getElementById("a1").innerHTML = 'hidden';
			var i;
			for(i=0;i<30;i++){
				x=document.getElementById(seatButtons[i]);
				y=document.getElementById(seatTaken[i]);
				if (str.charAt(i)=='0'){
					x.hidden = true;
					//x.style.visibility = 'hidden';
					y.hidden = false;
					//y.style.visibility = 'visible';
				} else {
					x.hidden = false;
					y.hidden = true;
				}
			}
        }

        function storeSeat(seat) {
          
		  for (i = 0; i<storeSeat.list.length; i++){
				if (storeSeat.list[i]==seat){
					storeSeat.list.splice(i,1);
					return;
				}
		  }
		 storeSeat.list.push(seat);
		storeSeat.list.sort();
        }
		
		function createTicket() {
			var seats=[];
			seats=storeSeat.list;
			var xhttp;
			xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              customer = this.responseText;
			  alert(customer);
            }
          };
			  seats = JSON.stringify(storeSeat.list);
			  xhttp.open("GET", "ticket.php?q="+id + "&t="+seats, true);
			  xhttp.send();
		}
    </script>
	<script src="js/jquery-3.2.0.min.js"></script>
	<script src="plugins/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	<script src="plugins/magnific-popup/magnific-popup.min.js"></script>
	<script src="plugins/bootstrap-select-1.12.2/dist/js/bootstrap-select.min.js"></script>
	<script src="js/common.js"></script>
	<script type="text/javascript" src="jquery.js"></script> 
	<script type="text/javascript" src="jquery.seat-charts.min.js"></script>
</body>
</html>
