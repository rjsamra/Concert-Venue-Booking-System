<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>COLDPLAY</title>
  <?php include "session.php";?>
	<?php require_once "bootstrap.php";?>
  <?php require_once "bootstrap1.php";?>
  
<style type="text/css">
  <?php 
                if(isset($_SESSION['mail']))
                    {
                         include "modal.css";
                    }
                    else{
                      include "modal1.css";
                    }
    ?>

body{
  color: white;
}
.nav-bar {
    background-color: transparent;
}
.w-container {
    margin-left: auto;
    margin-right: auto;
    max-width: 940px;
}
#nav{
	background-color: transparent;
}
.logo{
	padding-top: 8px;
}
.w-nav {
    position: relative;
    background: #dddddd;
    z-index: 1000;
}
.w-nav-brand {
    position: relative;
    float: none;
    text-decoration: none;
    color: #333333;
}
.w-nav-overlay {
    position: absolute;
    overflow: hidden;
    display: none;
    top: 100%;
    left: 0;
    right: 0;
    width: 100%;
}
body {

  background-image: url(img/music.png);
    background-size: cover;
    overflow: scroll;
    background-repeat: no-repeat;
    background-attachment: fixed;
}

.content-wrapper {
    margin-top: 78px;
}
.w-container {
    margin-left: auto;
    margin-right: auto;
    max-width: 940px;
}
.page-title {
    margin-top: 0px;
    margin-bottom: 86px;
    font-size: 36px;
    line-height: 51px;
    font-weight: 300;
    text-align: center;
    text-transform: uppercase;
}
.footer {
    padding-top: 43px;
    padding-bottom: 43px;
    background-color: transparent;
    color: #222;
    text-align: center;
}
.venue-list-item {
    padding-top: 5px;
    padding-bottom: 5px;
    border-top: 1px solid hsla(0, 0%, 100%, .3);
    border-bottom: 1px solid hsla(0, 0%, 100%, .3);
}



@media screen and (max-width: 991px){

	.w-container {
    max-width: 728px !important;
	}	
	.w-nav[data-collapse="medium"] .w-nav-menu {
	    display: none;
	}
	.nav-menu {
    padding-top: 18px !important;
    padding-bottom: 18px !important;
    border-top: 1px solid #000 !important;
    background-color: rgba(0, 0, 0, .85) !important;
	}
	
	.w-container {
    max-width: 728px !important;
	}
	.logo{
	padding-top: 8px !important;
	width: 10% !important;
	}
}

@media (max-width: 767px){
	

	.logo{
	padding-top: 8px !important;
	width: 10% !important;
	}
}

@media screen and (max-width: 479px){
	.w-container {
	    max-width: none !important;
	}	
	.logo{
	padding-top: 8px !important;
	width: 10% !important;
	}
}

#a{
    color: #2675ae;
    text-decoration: none;
}
.new{
  margin-top: 16px;
    padding: 15px 20px;
    text-align: center;
}
.head{
  
  text-align: center;
}
.login{

  margin: 0 auto;
    width: 340px;
}
label{
  color: #0e0e0f;
}
.bd1{

  background-color: transparent;
    font-size: 14px;
    padding: 20px;
}
.btn-primary {
    background-color: #2675aed9;
}
form label {
    display: block;
    margin-bottom: 7px;
}
input{
  margin-bottom: 15px;
    margin-top: 5px;
}
.label-link{
  margin-left: 7em;
}
.form-control{
  background-color: #ffffffc2;
}
#p{
  color: black;

}

</style>
</head>

<body>
	<?php require_once "navbar.php";?>
	<div class="content-wrapper w-container">
    <h1 class="page-title"><font style="vertical-align: inherit;background: linear-gradient(to right,#E20D13, #F0E300, #A4C615, #4363AB,#BE4A94,#E30922);-webkit-background-clip: text;-webkit-text-fill-color: transparent;/* color: transparent; */"><font style="vertical-align: inherit;  font-family: sans-serif;">WE'RE COMING TO YOUR CITY!</font></font>
    </h1>
    
  </div>

  <div class="w-dyn-list" style="text-align: center;">
    <div class="w-dyn-items"><div class="venue-list-item w-dyn-item">
          <div class="tour-date-row w-row">
            <div class="w-col w-col-2">
              <div>November 24, 2019</div>
            </div>
            <div class="w-col w-col-5">
              <div class="venue">James Concert at Ramna</div>
            </div>
            <div class="w-col w-col-3">
              <div>Ramna, Dhaka</div>
            </div>
            <div class="w-col w-col-2">
              <button class="rsvp-button w-button" onclick="op()">Buy Tickets</button>
            </div>
          </div>
        </div>
        <div class="venue-list-item w-dyn-item">
          <div class="tour-date-row w-row">
            <div class="w-col w-col-2">
              <div>October 9, 2019</div>
            </div>
            <div class="w-col w-col-5">
              <div class="venue">NobelMan Concert at Noakhali</div>
            </div>
            <div class="w-col w-col-3">
              <div>Begumgonj, Noakhali</div>
            </div>
            <div class="w-col w-col-2">
              <button class="rsvp-button w-button" onclick="op()">Buy Tickets</button>
            </div>
          </div>
        </div>
        <div class="venue-list-item w-dyn-item">
          <div class="tour-date-row w-row">
            <div class="w-col w-col-2">
              <div>April 20, 2020</div>
            </div>
            <div class="w-col w-col-5">
              <div class="venue">Warfaze Concert at East West University</div>
            </div>
            <div class="w-col w-col-3">
              <div>Afftabnagar, Dhaka</div>
            </div>
            <div class="w-col w-col-2">
              <button class="rsvp-button w-button" onclick="op()">Buy Tickets</button>
            </div>
          </div>
        </div>
        <div class="venue-list-item w-dyn-item">
          <div class="tour-date-row w-row">
            <div class="w-col w-col-2">
              <div>April 25, 2020</div>
            </div>
            <div class="w-col w-col-5">
              <div class="venue">Lalon Band Concert at Noakhali</div>
            </div>
            <div class="w-col w-col-3">
              <div>Begumgonj, Noakhali</div>
            </div>
            <div class="w-col w-col-2">
              <button class="rsvp-button w-button" onclick="op()">Buy Tickets</button>
            </div>
          </div>
        </div><div class="venue-list-item w-dyn-item">
          <div class="tour-date-row w-row">
            <div class="w-col w-col-2">
              <div>November 25, 2019</div>
            </div>
            <div class="w-col w-col-5">
              <div class="venue">James Concert at Noakhali</div>
            </div>
            <div class="w-col w-col-3">
              <div>Begumgonj, Noakhali</div>
            </div>
            <div class="w-col w-col-2">
              <button class="rsvp-button w-button" onclick="op()">Buy Tickets</button>
            </div>
          </div>
        </div>
        <div class="venue-list-item w-dyn-item">
          <div class="tour-date-row w-row">
            <div class="w-col w-col-2">
              <div>November 30, 2019</div>
            </div>
            <div class="w-col w-col-5">
              <div class="venue">Avash Concert at Noakhali</div>
            </div>
            <div class="w-col w-col-3">
              <div>Begumgonj, Noakhali</div>
            </div>
            <div class="w-col w-col-2">
              <button class="rsvp-button w-button" onclick="op()">Buy Tickets</button>
            </div>
          </div>
        </div>
        <div class="venue-list-item w-dyn-item">
          <div class="tour-date-row w-row">
            <div class="w-col w-col-2">
              <div>December 2, 2019</div>
            </div>
            <div class="w-col w-col-5">
              <div class="venue">Avash concert at Fatulla</div>
            </div>
            <div class="w-col w-col-3">
              <div>Fatulla, Dhaka</div>
            </div>
            <div class="w-col w-col-2">
              <button class="rsvp-button w-button" onclick="op()">Buy Tickets</button>
            </div>
          </div>
        </div>
        <div class="tour-date-row w-row">
            <div class="w-col w-col-2">
              <div>November 24, 2019</div>
            </div>
            <div class="w-col w-col-5">
              <div class="venue">James Concert at Ramna</div>
            </div>
            <div class="w-col w-col-3">
              <div>Ramna, Dhaka</div>
            </div>
            <div class="w-col w-col-2">
              <button class="rsvp-button w-button" onclick="op()">Buy Tickets</button>
            </div>
          </div>
        </div>
        <div class="venue-list-item w-dyn-item">
          <div class="tour-date-row w-row">
            <div class="w-col w-col-2">
              <div>October 9, 2019</div>
            </div>
            <div class="w-col w-col-5">
              <div class="venue">NobelMan Concert at Noakhali</div>
            </div>
            <div class="w-col w-col-3">
              <div>Begumgonj, Noakhali</div>
            </div>
            <div class="w-col w-col-2">
              <button class="rsvp-button w-button" onclick="op()">Buy Tickets</button>
            </div>
          </div>
        </div>
        <div class="venue-list-item w-dyn-item">
          <div class="tour-date-row w-row">
            <div class="w-col w-col-2">
              <div>April 20, 2020</div>
            </div>
            <div class="w-col w-col-5">
              <div class="venue">Warfaze Concert at East West University</div>
            </div>
            <div class="w-col w-col-3">
              <div>Afftabnagar, Dhaka</div>
            </div>
            <div class="w-col w-col-2">
              <button class="rsvp-button w-button" onclick="op()">Buy Tickets</button>
            </div>
          </div>
        </div>
        <div class="venue-list-item w-dyn-item">
          <div class="tour-date-row w-row">
            <div class="w-col w-col-2">
              <div>April 25, 2020</div>
            </div>
            <div class="w-col w-col-5">
              <div class="venue">Lalon Band Concert at Noakhali</div>
            </div>
            <div class="w-col w-col-3">
              <div>Begumgonj, Noakhali</div>
            </div>
            <div class="w-col w-col-2">
              <button class="rsvp-button w-button" onclick="op()">Buy Tickets</button>
            </div>
          </div>
        </div><div class="venue-list-item w-dyn-item">
          <div class="tour-date-row w-row">
            <div class="w-col w-col-2">
              <div>November 25, 2019</div>
            </div>
            <div class="w-col w-col-5">
              <div class="venue">James Concert at Noakhali</div>
            </div>
            <div class="w-col w-col-3">
              <div>Begumgonj, Noakhali</div>
            </div>
            <div class="w-col w-col-2">
              <button class="rsvp-button w-button" onclick="op()">Buy Tickets</button>
            </div>
          </div>
        </div>
        <div class="venue-list-item w-dyn-item">
          <div class="tour-date-row w-row">
            <div class="w-col w-col-2">
              <div>November 30, 2019</div>
            </div>
            <div class="w-col w-col-5">
              <div class="venue">Avash Concert at Noakhali</div>
            </div>
            <div class="w-col w-col-3">
              <div>Begumgonj, Noakhali</div>
            </div>
            <div class="w-col w-col-2">
              <button class="rsvp-button w-button" onclick="op()">Buy Tickets</button>
            </div>
          </div>
        </div>
        <div class="venue-list-item w-dyn-item">
          <div class="tour-date-row w-row">
            <div class="w-col w-col-2">
              <div>December 2, 2019</div>
            </div>
            <div class="w-col w-col-5">
              <div class="venue">Avash concert at Fatulla</div>
            </div>
            <div class="w-col w-col-3">
              <div>Fatulla, Dhaka</div>
            </div>
            <div class="w-col w-col-2">
              <button class="rsvp-button w-button" onclick="op()">Buy Tickets</button>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php 
                if(isset($_SESSION['mail']))
                    {
                         include "modal.php";
                    }
                    else{
                      include "modal1.php";
                    }
    ?>

<!-- The Modal -->
  <?php require_once "footer.php";?>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
//var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
function op() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

</script>
<script type="text/javascript">
  $(document).ready(function(){

var quantitiy=0;
   $('.quantity-right-plus').click(function(e){
        
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());
        
        // If is not undefined
            
            $('#quantity').val(quantity + 1);

            var t=Number(document.getElementById("quantity").value);
            var r=Number(document.getElementById("quantty").value);
            document.getElementById("myText").value=t*4000+r*9000;

          
            // Increment
        
    });

     $('.quantity-left-minus').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());
        
        // If is not undefined
      
            // Increment
            if(quantity>0){
            $('#quantity').val(quantity - 1);
            }

            var t=Number(document.getElementById("quantity").value);
            var r=Number(document.getElementById("quantty").value);
            document.getElementById("myText").value=t*4000+r*9000;
    });
    
});
</script>

<script type="text/javascript">
  $(document).ready(function(){

var quatiy=0;
   $('.quantity-right-plus1').click(function(e){
        
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quanity = parseInt($('#quantty').val());
        
        // If is not undefined
            
           
           $('#quantty').val(quanity + 1);
            var t=Number(document.getElementById("quantity").value);
            var r=Number(document.getElementById("quantty").value);
            document.getElementById("myText").value=t*4000+r*9000;

          
            // Increment
        
    });

     $('.quantity-left-minus1').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantty').val());
        
        // If is not undefined
      
            // Increment
            if(quantity>0){
            $('#quantty').val(quantity - 1);
            }
            var t=Number(document.getElementById("quantity").value);
            var r=Number(document.getElementById("quantty").value);
            document.getElementById("myText").value=t*4000+r*9000;
    });
    
});
</script>
<script>
function che()
{
  var to=Number(document.getElementById("myText").value);
  if(to>0){
    document.getElementById("tic").click();
  }
  else{
    alert("Total amount should be greater than 0");
  }
}
</script>
</body>
</html>