<title></title>

<?php
    include 'includes/header.php';
?>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}
</style>

<style>

    #parallax {
        background: url('images/bowling-lanes.jpg');
        background-attachment: fixed;
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        height: 700px;
        margin-top: 0px;
        padding-top: 110px;
}

</style>

<body>

<!------<script src="http://code.jquery.com/jquery.js"></script>
<script src="src/skdslider.min.js"></script>
<link href="src/skdslider.css" rel="stylesheet">
<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#demo1').skdslider({delay:5000, animationSpeed: 2000,showNextPrev:true,showPlayButton:true,autoSlide:true,animationType:'fading'});
			jQuery('#demo2').skdslider({delay:5000, animationSpeed: 1000,showNextPrev:true,showPlayButton:false,autoSlide:true,animationType:'sliding'});
			jQuery('#demo3').skdslider({delay:5000, animationSpeed: 2000,showNextPrev:true,showPlayButton:true,autoSlide:true,animationType:'fading'});
			
			jQuery('#responsive').change(function(){
			  $('#responsive_wrapper').width(jQuery(this).val());
			  $(window).trigger('resize');
			});
			
		});
</script>
<style type="text/css">
body{ margin:0; padding:0;}
.demo-code{ background-color:#ffffff; border:1px solid #333333; display:block; padding:10px;}
.option-table td{ border-bottom:1px solid #eeeeee;}
</style>----->


<div class="w3-content w3-section" style="max-width:100%">
  <img class="mySlides" src="src/images/building.jpg" style="width:100%">
  <img class="mySlides" src="src/images/entrance2.jpg" style="width:100%">
  <img class="mySlides" src="src/images/banquet-hall-entrance.jpg" style="width:100%">
  <img class="mySlides" src="src/images/lanes.jpg" style="width:100%">
  <img class="mySlides" src="src/images/bowling-area.jpg" style="width:100%">
  <img class="mySlides" src="src/images/sports-bar.jpg" style="width:100%">
  <img class="mySlides" src="src/images/game-room.jpg" style="width:100%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000); // Change image every 4 seconds
}
</script>    

<div id="tour">

    <button><a href="https://www.google.com/maps/@43.1759193,-88.1376993,3a,75y,24h,90t/data=!3m8!1e1!3m6!1sf2DLrsu5VoQAAAQvvIh5PQ!2e0!3e2!6s%2F%2Fgeo2.ggpht.com%2Fcbk%3Fpanoid%3Df2DLrsu5VoQAAAQvvIh5PQ%26output%3Dthumbnail%26cb_client%3Dmaps_sv.tactile.gps%26thumb%3D2%26w%3D203%26h%3D100%26yaw%3D24.270773%26pitch%3D0!7i13312!8i6656!6m1!1e1?shorturl=1" target="_blank">CLICK HERE TO VIEW TOUR</a></button>

        
<a href="" id="tour-btn">CLICK HERE TO VIEW TOUR</a>


</div>
    
<div id="intro">

    <h3>The Place for Family Fun Since 1961!</h3>
    
    <h3><a href="tel:262-255-1580" class="phone-number">262-255-1580</a></h3>
    
    <h3>N86 W18330 Main Street, Menomonee Falls, WI 53051</h3>

</div>

<div id="parallax">
    
    <div class="row">
    
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                <a href="#" class="blurb-img"><div id="open-bowling">

                    <h3 class="blurb-title">OPEN BOWLING</h3>

                </div></a>
                
            </div>
        
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            
                 <a href="#" class="blurb-img"><div id="rockn-bowling">

                    <h3 class="blurb-title">ROCK 'N' BOWLING</h3>

                </div></a>
            
        </div>
        
    </div>
    
     <div class="row bottom">
    
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                 <a href="#" class="blurb-img"><div id="holiday-specials">

                    <h3 class="blurb-title">HOLIDAY SPECIALS</h3>

                </div></a>
            
         </div>
            
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            
                 <a href="#" class="blurb-img"><div id="birthday-parties">

                    <h3 class="blurb-title">BIRTHDAY PARTIES</h3>

                 </div></a>
            
        </div>
    
    </div>
    
</div>
    
<div id="content">
    
    <h1>Village Bowl</h1>
    
    <p>Village Bowl is Milwaukee Metro’s most up to date Family Entertainment Center, featuring 26 lanes with the latest software for automatic scoring with "your lane your-way graphics" and automatic bumpers for the little ones.</p>
    
    <p>The Bugline Sports Bar & Grill has 9 - 42” LCD’s and 2 big screens for your favorite sporting events. We have a full menu and feature our very own fresh made appetizers, burgers, wraps, salads, homemade pizza and soups. Yes, we also serve the Wisconsin traditional hand battered cod fish fry all under the direction of our Certified Executive Chef.</p>
    
    <p>Village Bowl has three banquet halls to choose from with seating accommodations for up to 350. We have 3 rooms: The Heritage Hall, Bugline Room and the Mardi Gras room. Our rooms can been used for any occasion from: bridal and baby showers, retirement parties, birthdays and anniversaries, to rehearsal dinners, business meetings and luncheons. We specialize in Weddings and Quinceanera’s and are happy to speak with you at any time. One of the most pleasant surprises you will experience from having a banquet at the Village Bowl will come from the great taste, wide variety of choices, and high quality standards of the food prepared by our certified executive chef and his culinary team.</p>
    
    <p>Other amenities include: the Billiard room with 2 tables, the arcade with a dozen games for the young at heart, and Rich Mueller’s Village Bowl Pro Shop with everything from new equipment like: bags, balls, shoes and accessories...to plugging, drilling and resurfacing for a custom fit!</p>
    
</div>

    
<div id="coupon-section">
    
    <img src="images/kids-bowl-free.png" alt="Kids Bowl Free Coupon" id="coupon" />
    
</div>
    
<!---<div id="videos">
    
    <div class="row">
        
        <div class="col-lg-6 col-md-6 col-sm-12">
    
            <iframe width="500" height="300" src="https://www.youtube.com/embed/BGwjijX6LMA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            
        </div>
        
        <div class="col-lg-6 col-md-6 col-sm-12">

            <iframe width="500" height="300" src="https://www.youtube.com/embed/gD7TU0HZu1U" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            
        </div>
        
    </div>
    
    <div class="row bottom">
        
        <div class="col-lg-6 col-md-6 col-sm-12">
    
            <iframe width="500" height="300" src="https://www.youtube.com/embed/zhhBSaYRWzU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12">
            
            <iframe width="500" height="300" src="https://www.youtube.com/embed/rjmUGcK_aa4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            
        </div>
    
    </div>
    
</div>--->
    
</body>

<?php

    include 'includes/footer.php';

?>
    
