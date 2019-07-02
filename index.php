<?php include 'header.php';?>


<script>
    $('#carouselHacked').carousel();
    $('#carouselHacked').carousel({
        pause: "false";
    });

</script>



<br class="hidden-xs"><br>
<div class="container-fluid padit ban" data-aos="fade-in" data-aos-easing="ease-out-back" data-aos-duration="2000">


    <div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">

                <img src="images/banner-02.jpg" class="img-responsive hidden-xs hidden-sm" style="width:100%;">

                <img src="images/mobile-banner-02.jpg" class="img-responsive hidden-lg hidden-md" style="width:100%;">
                <!--   <div class="carousel-caption">
                caption 1
                </div>-->
            </div>
            <div class="item">

                <img src="images/banner-01.jpg" class="img-responsive hidden-xs hidden-sm" style="width:100%;">

                <img src="images/mobile-banner-01.jpg" class="img-responsive hidden-lg hidden-md" style="width:100%;">
                <!-- <div class="carousel-caption">
                    caption 2
                </div>-->
            </div>
            <div class="item">

                <img src="images/banner-03.jpg" class="img-responsive hidden-xs hidden-sm" style="width:100%;">

                <img src="images/mobile-banner-03.jpg" class="img-responsive hidden-lg hidden-md" style="width:100%;">
                <!--<div class="carousel-caption">
                    caption 3
                </div>-->
            </div>
        </div>

        <!-- Controls -->
        <!--  <a class="left carousel-control" href="#carouselHacked" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carouselHacked" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>-->
    </div>
</div>

<div class="container-fluid booking-bg-home" data-aos="fade-in" data-aos-easing="ease-out-back" data-aos-duration="1000">

    <h3 class="hidden-lg hidden-md hidden-sm">Book your stay!</h3>
    <div class="container">

        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 booking date">


            <input type="text" id="datepicker" class="datepick" placeholder="CHECK IN & CHECK OUT" />

        </div>


        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 booking loc-pad">


            <select name="food_selector" data-placeholder="CHOOSE LOCATION">
	<option value="kodaikanal">Kodaikanal</option>
						<option value="conoor">Conoor</option>
                <option value="conoor">Mudumalai</option>
</select>

        </div>

        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 booking" style="padding-left:0px; padding-right:0px;">


            <select name="food_selector" data-placeholder="CHOOSE VILLA">
	<option value="kodaikanal">Cliffside</option>
                <option value="kodaikanal">Birdsong</option>
                <option value="kodaikanal">Meghadhootam</option>
                <option value="kodaikanal">Birkenhead</option>
                <option value="kodaikanal">Frog hill</option>

				
</select>


        </div>

        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 booking loc-pad">


            <!--   <a href="">
             
                <div class="button style_1">BOOK NOW</div>
            </a>-->


            <a href="#" class="myButton">BOOK NOW</a>


        </div>

    </div>


</div>



<div class="container">

    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-8 col-xs-12 col-sm-offset-2 home-about" data-aos="zoom-in" data-aos="fade-up" data-aos-easing="ease-out-back" data-aos-duration="1000">

        <h3>Redefining Vacations</h3>
        <p>Idyllic getaways, fully serviced villas and bungalows, distinctive personalised service..every time </p>

        <hr style="width:100px; border:1px solid #c7c7c7;" data-aos="fade-in" data-aos-delay="1000">
    </div>


</div>



<div class="container-fluid villa-bg">

    <div class="container">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 villa-heading" data-aos="fade-in">

            <h3>Our Villas</h3>
            <hr style="width:100px; border:1px solid #c7c7c7;" data-aos="fade-in" data-aos-delay="100">
            <br>

        </div>


        <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 villa-home-det" data-aos="fade-in" data-aos-delay="200" data-aos-duration="1000">

                <a href="cliffside.php"> <img src="images/cliff-side-thumb.jpg" class="img-responsive">
                <h3>The Xanadu Cliffside</h3></a>
                <p>3 BEDROOMS</p>
                <em>Conoor</em>



            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 villa-home-det" data-aos="fade-in" data-aos-delay="300" data-aos-duration="1000">

                <a href="birdsong.php">  <img src="images/birdsong-thumb.jpg" class="img-responsive">
                <h3>The Xanadu Birdsong</h3></a>
                <p>2 BEDROOMS</p>
                <em>Conoor</em>



            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 villa-home-det" data-aos="fade-in" data-aos-delay="400" data-aos-duration="1000">

                <a href="meghadhootam.php">  <img src="images/meghadhootam-thumb.jpg" class="img-responsive">
                <h3>The Xanadu Meghadhootam</h3></a>
                <p>4 BEDROOMS</p>
                <em>Kodaikanal</em>



            </div>


            <div style="clear:both;" class="hidden-xs"></div> <br><br>
            <div class="col-lg-offset-2 col-md-offset-2 col-lg-4 col-md-4 col-sm-6 col-xs-12 villa-home-det" data-aos-duration="1000" data-aos="fade-in">


                <a href="birkenhead.php">  <img src="images/birken-head-thumb.jpg" class="img-responsive">
                <h3>The Xanadu Birkenhead</h3></a>
                <p>2 BEDROOMS</p>
                <em>Kodaikanal</em>



            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 villa-home-det" data-aos-duration="1000" data-aos="fade-in">

                <a href="froghill.php"> <img src="images/froghill-thumb.jpg" class="img-responsive">
                <h3>The Xanadu Froghill</h3></a>
                <p>3 BEDROOMS</p>
                <em>Mudumalai</em>



            </div>

        </div>

        <br><br>
    </div>


</div>
<br>





<div class="container spacing">
    <div class="row">
        <div class="col-lg-offset-2 col-md-offset-2 col-lg-8  col-md-8 col-sm-8 col-sm-offset-2 col-xs-12 heading">

            <h3 data-aos="fade-up" data-aos-easing="ease-out-back" data-aos-duration="1000">Experiences</h3>
            <p data-aos="fade-up" data-aos-easing="ease-out-back" data-aos-duration="1000">Whether you are an adrenaline junkie, a gentle soul seeking to pause the rushed life or someone looking for a memorable experience, we have specially curated experiences for everyone…after all your holiday is too important to leave to chance!
            </p>

            <hr style="width:100px; border:1px solid #c7c7c7;">
        </div>
    </div>
    <br><br>
    <div class="col-lg-offset-0 col-md-offset-0 col-lg-4 col-md-4 col-sm-8 col-sm-offset-2 col-xs-12 padit" data-aos="fade-in" data-aos-easing="ease-out-back" data-aos-duration="1000">
        <img src="images/yatch.jpg" class="img-responsive hidden-lg hidden-md" style="width: 100%;">
        <div class="water-cont">

            <h3>Water</h3>
            <p>Holiday like the rich and famous in Goa …on board the luxury 40 ft ocean going , 3 stateroom yacht...<br><br> <a href="experience.php" class="read-more" style="text-align:center;">Read more</a></p>

            <hr style="width:100px; border:1px solid #c7c7c7;">

        </div>

        <img src="images/yatch.jpg" class="img-responsive hidden-sm hidden-xs">

    </div>



    <div class="col-lg-offset-0 col-md-offset-0  col-lg-4 col-md-4 col-sm-8 col-sm-offset-2 col-xs-12 padit" data-aos="fade-in" data-aos-easing="ease-out-back" data-aos-duration="1000">
        <img src="images/air.jpg" class="img-responsive hidden-lg hidden-md" style="width: 100%;">
        <img src="images/air.jpg" class="img-responsive hidden-sm hidden-xs">
        <div class="water-cont">

            <h3>Air</h3>
            <p>Experience the ultimate in high flying adventures. Whether you want to arrive in style, want a joyride...<br><br> <a href="experience.php" class="read-more" style="text-align:center;">Read more</a></p>
            <hr style="width:100px; border:1px solid #c7c7c7;">


        </div>



    </div>


    <div class="col-lg-offset-0 col-md-offset-0  col-lg-4 col-md-4 col-sm-8 col-sm-offset-2 col-xs-12 padit" data-aos="fade-in" data-aos-easing="ease-out-back" data-aos-duration="1000">
        <img src="images/land.jpg" class="img-responsive hidden-lg hidden-md" style="width: 100%;">
        <div class="water-cont">

            <h3>Land</h3>
            <p>The rugged plateaus of Ladakh or the towering mountains in Himachal, enjoy a life changing experience <br><br> <a href="experience.php" class="read-more" style="text-align:center;">Read more</a></p>
            <hr style="width:100px; border:1px solid #c7c7c7;">


        </div>

        <img src="images/land.jpg" class="img-responsive hidden-sm hidden-xs">

    </div>





</div>

12345
<div class="container spacing">

    <div class="row" data-aos="fade-up" data-aos-easing="ease-out-back" data-aos-duration="1000">
        <div class="col-lg-offset-2 col-md-offset-2 col-lg-8  col-md-8 col-md-8 col-sm-8 col-sm-offset-2 col-xs-12 heading">

            <h3>A Holiday For Everyone</h3>
            <p>Everyone has distinctive desires for their holiday. Looking for a peaceful getaway or a fun-filled bash with your friends? We have something for everyone, just call us on +91 94424 13384 to tailor make your special holiday.
            </p>
            <hr style="width:100px; border:1px solid #c7c7c7;">
        </div>
    </div>



    <div class="row heading-space" data-aos="fade-in" data-aos-easing="ease-out-back" data-aos-duration="1000">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 villa-home-det ">

            <img src="images/couples-retreat.jpg" class="img-responsive">




        </div>

        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 villa-home-det" data-aos="fade-in" data-aos-easing="ease-out-back" data-aos-duration="1000">

            <img src="images/friends-reunion.jpg" class="img-responsive">



        </div>

        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 villa-home-det" data-aos="fade-in" data-aos-easing="ease-out-back" data-aos-duration="1000">

            <img src="images/girls-getaway.jpg" class="img-responsive">



        </div>
        <div style="clear:both;" class="hidden-xs hidden-sm"></div> <br><br>
        <br class="hidden-sm hidden-xs"><br class="hidden-sm hidden-xs">
        <div class="col-lg-offset-2 col-md-offset-2 col-lg-4 col-md-4 col-sm-6 col-xs-12 villa-home-det" data-aos="fade-in" data-aos-easing="ease-out-back" data-aos-duration="1000">


            <img src="images/silver-citizen.jpg" class="img-responsive">



        </div>

        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12villa-home-det" data-aos="fade-in" data-aos-easing="ease-out-back" data-aos-duration="1000">

            <img src="images/family-escapes.jpg" class="img-responsive">



        </div>

    </div>

</div>

<div class="container-fluid villa-bg">
    <div class="container spacing">

        <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12 heading choose-us-watermark" data-aos="fade-up" data-aos-easing="ease-out-back" data-aos-duration="1000">

            <h3>Who Choose Us</h3>
            <p>The Xanadu is a chain of premium, fully serviced vacation rental villas. ‘Xanadu’ means a place of great beauty, luxury and contentment and that is what you will experience when you stay with us. <br><br> No two homes or rooms are similar and therein lies the charm of a vacation rental! Each of our handpicked villas are perfect getaways to spend ‘quality time’ with your loved ones… away from overcrowded holiday destinations and the boredom of hotels. Our tagline says it all – ‘Check in. Breathe out.’. </p>

            <hr style="width:100px; border:1px solid #c7c7c7;">
        </div>


        <div style="clear:both;"></div>
        <div class="col-lg-offset-2 col-md-offset-2 col-lg-2 col-md-2 col-sm-4 col-xs-6 highlights" data-aos="fade-in" data-aos-easing="ease-out-back" data-aos-duration="1000">

            <img src="images/memorable-holiday-11-12.svg" class="img-responsive" width="63" height="63">
            <p>Memorable<br>Holidays</p>

        </div>

        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 highlights" data-aos="fade-in" data-aos-easing="ease-out-back" data-aos-duration="1000">

            <img src="images/fully-managed-11-12-12.svg" class="img-responsive" width="63" height="63">
            <p>Fully<br>Managed</p>

        </div>

        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 highlights" data-aos="fade-in" data-aos-easing="ease-out-back" data-aos-duration="1000">

            <img src="images/enjoy-more-space-11-14.svg" class="img-responsive" width="63" height="63">
            <p>Enjoy more<br>space</p>

        </div>

        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 highlights" data-aos="fade-in" data-aos-easing="ease-out-back" data-aos-duration="1000">

            <img src="images/food-15-14-15.svg" class="img-responsive" width="63" height="63">
            <p>Personalise Your <br>Food And Stay</p>

        </div>

        <div style="clear:both;" class="hidden-sm hidden-xs"></div><br class="hidden-sm"><br class="hidden-sm">


        <div class="col-lg-offset-2 col-md-offset-2 col-lg-2 col-md-2 col-sm-4 col-xs-6 highlights" data-aos="fade-in" data-aos-easing="ease-out-back" data-aos-duration="1000">

            <img src="images/local-experience-16.svg" class="img-responsive" width="63" height="63">
            <p>Local<br>Experience</p>

        </div>

        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 highlights" data-aos="fade-in" data-aos-easing="ease-out-back" data-aos-duration="1000">

            <img src="images/house-keeping-16.svg" class="img-responsive" width="63" height="63">
            <p>Gold Standard<br> House Keeping</p>

        </div>

        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 highlights" data-aos="fade-in" data-aos-easing="ease-out-back" data-aos-duration="1000">

            <img src="images/nature-lover-16.svg" class="img-responsive" width="63" height="63">
            <p>
                Nature Lover’s<br> Paradise
            </p>

        </div>

        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 highlights" data-aos="fade-in" data-aos-easing="ease-out-back" data-aos-duration="1000">

            <img src="images/safety-16.svg" class="img-responsive" width="63" height="63">
            <p>
                Safety &<br> Security
            </p>

        </div>



    </div>
</div>
<div class="container spacing">


    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 heading" data-aos="fade-in" data-aos-easing="ease-out-back" data-aos-duration="1000">
        <h3>Beyond the villa</h3>
        <hr style="width:100px; border:1px solid #c7c7c7;">
    </div>



    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 beyond-villa" data-aos="fade-in" data-aos-easing="ease-out-back" data-aos-duration="1000">

        <div class="activity">
            <img src="images/trekking.jpg" class="img-responsive hidden-xs">
            <img src="images/trekking-mob.jpg" class="img-responsive hidden-lg hidden-md hidden-sm col-xs-12 padit">
            <div style="clear:both;"></div>
            <h1><strong>Trekking & Hiking</strong></h1>
            <h3>4Kms</h3>
            <p>DISTANCE FROM RESORT</p>
            <h3>Young People</h3>
            <p>SUITABLE FOR</p>
            <h3>4 Hour</h3>
            <p>TIME REQUIRED</p>


            <br>
        </div>

    </div>

    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 beyond-villa" data-aos="fade-in" data-aos-easing="ease-out-back" data-aos-duration="1000">

        <div class="activity">
            <img src="images/wildlife-birding.jpg" class="img-responsive hidden-xs">
            <img src="images/wildlife-birding-mob.jpg" class="img-responsive hidden-lg hidden-md hidden-sm col-xs-12 padit">
            <div style="clear:both;"></div>
            <h1><strong>Wildlife & Birding</strong></h1>
            <h3>2 kms</h3>
            <p>DISTANCE FROM RESORT</p>
            <h3>Everyone</h3>
            <p>SUITABLE FOR</p>
            <h3>1 Hour</h3>
            <p>TIME REQUIRED</p>


            <br>
        </div>

    </div>

    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 beyond-villa" data-aos="fade-in" data-aos-easing="ease-out-back" data-aos-duration="1000">

        <div class="activity">
            <img src="images/yoga.jpg" class="img-responsive hidden-xs">
            <img src="images/yoga-mob.jpg" class="img-responsive hidden-lg hidden-md hidden-sm col-xs-12 padit">
            <div style="clear:both;"></div>
            <h1><strong>Yoga</strong></h1>
            <h3>500m</h3>
            <p>DISTANCE FROM RESORT</p>
            <h3>Everyone</h3>
            <p>SUITABLE FOR</p>
            <h3>1 Hour</h3>
            <p>TIME REQUIRED</p>


            <br>
        </div>

    </div>


    <div class="col-lg-offset-2 col-md-offset-2 col-lg-4 col-md-4 col-sm-4 col-xs-12 beyond-villa" data-aos="fade-in" data-aos-easing="ease-out-back" data-aos-duration="1000">

        <div class="activity">
            <img src="images/pottery.jpg" class="img-responsive hidden-xs">
            <img src="images/pottery-mob.jpg" class="img-responsive hidden-lg hidden-md hidden-sm col-xs-12 padit">
            <div style="clear:both;"></div>
            <h1><strong>Pottery</strong></h1>
            <h3>500m</h3>
            <p>DISTANCE FROM RESORT</p>
            <h3>Everyone</h3>
            <p>SUITABLE FOR</p>
            <h3>1 Hour</h3>
            <p>TIME REQUIRED</p>


            <br>
        </div>

    </div>

    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 beyond-villa" data-aos="fade-in" data-aos-easing="ease-out-back" data-aos-duration="1000">

        <div class="activity">
            <img src="images/quilting.jpg" class="img-responsive hidden-xs">
            <img src="images/quilting-mob.jpg" class="img-responsive hidden-lg hidden-md hidden-sm col-xs-12 padit">
            <div style="clear:both;"></div>
            <h1><strong>Quilting</strong></h1>
            <h3>500m</h3>
            <p>DISTANCE FROM RESORT</p>
            <h3>Everyone</h3>
            <p>SUITABLE FOR</p>
            <h3>1 Hour</h3>
            <p>TIME REQUIRED</p>


            <br>
        </div>

    </div>

</div>


<?php include 'footer.htm';?>
