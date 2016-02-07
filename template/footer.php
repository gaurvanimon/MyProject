<br>
<footer>
<section id="footerwrap">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h3>Useful Links</h3>
                <ul class="usefullink">
                	<li><a href="#">About Us</a></li>
                    <li><a href="#">University</a></li>
                    <li><a href="#">FAQs</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Download E-Brochure</a></li>
                </ul>
            </div> <!-- col-4 end -->
            <div class="col-4">
                <h3>Get In Touch</h3>
                <ul class="socialiconbottom clearfix">
                    <li><a href="#"><i class="fa fa-facebook-square fa-1x"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter-square fa-1x"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus-square fa-1x"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin-square fa-1x"></i></a></li>
                </ul>
                <p class="normaltext14 whitetext" style="line-height:1.4;margin-bottom:0">
                	<b>Tel:</b> 011-1245689<br>
                	<b>Mob:</b> +91-9876556789<br>
                    <b>E-mail:</b> shivanigroup@gmail.com
                </p> 
            </div> <!-- col-4 end -->
            <div class="col-4">
            	<div class="newsletter">
                    <h3>Newsletter</h3>
                    <form action="#" method="post" name="newsletter">
                        <p><input type="text" placeholder="Enter Name" name="name"></p>
                        <p><input type="email" placeholder="E-mail Address" name="email"></p>
                        <input type="submit" name="subscribe" value="Subscribe">
                    </form>
                </div>
            </div> <!-- col-4 end -->
        </div> <!-- row end -->
    </div> <!-- container end -->
</section>

<section id="copyright">
    <div class="container">
        <div class="row">
            <div class="col-12">
                &copy; Copyright 2014 Shivani Group of Education. All Rights Reserved. A site by <i>Vintel Group</i>.
            </div> <!-- col-12 end -->
        </div> <!-- row end -->
    </div> <!-- container end -->
</section>
</footer>

<!-- slideout tab begin -->
<div class="slide-out-div">
    <a class="handle" href="#">Enquiry Now</a>
    <form>
	    <h4 align="center">Submit Your Requirement</h4>
        <input type="text" name="name" placeholder="Enter Your Name" class="slideoutform">
        <input type="email" name="email" placeholder="Enter E-mail" class="slideoutform">
        <input type="text" name="contactno" placeholder="Enter Mobile No." class="slideoutform">
        <select class="slideoutform">
        	<option>Select Category</option>
            <option>Demo-1</option>
            <option>Demo-2</option>
            <option>Demo-3</option>
            <option>Demo-4</option>
        </select>
        <select class="slideoutform">
        	<option>Select Category First</option>
            <option>Demo-1</option>
            <option>Demo-2</option>
            <option>Demo-3</option>
            <option>Demo-4</option>
        </select>
        <select class="slideoutform">
        	<option>Select State</option>
            <option>Demo-1</option>
            <option>Demo-2</option>
            <option>Demo-3</option>
            <option>Demo-4</option>
        </select>
        <select class="slideoutform">
        	<option>Select City</option>
            <option>Demo-1</option>
            <option>Demo-2</option>
            <option>Demo-3</option>
            <option>Demo-4</option>
        </select>
        <textarea name="message" rows="4" placeholder="Enter Message" class="slideoutformtextarea"></textarea>
        <p><input class="submitinner" type="submit" name="submit" value="Submit"></p>
    </form>
</div>
<!-- slideout tab end -->

<script src="js/jquery-2.1.1.js"></script>
<script src="js/jquery-ui-1.11.1.min.js"></script>
<script src="js/modernizr-2.8.3.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/slider.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.tabSlideOut.v1.3.js"></script>
<script src="js/jquery.leanModal.min.js"></script>

<!-- Script for slider -->
<script>
$("#slider-container").sliderUi({
		speed: 700,
		cssEasing: "cubic-bezier(0.285, 1.015, 0.165, 1.000)"
	});
$(function() {
	$( "#Tabs1" ).tabs(); 
});
$(function() {
	$( "#Tabs2" ).tabs(); 
});
</script>

<script type="text/javascript">
	marqueeInit({
		uniqueid: 'mycrawler',
		style: {
			'padding': '3px',
			'width': '720px',
			},
		inc: 5, //speed - pixel increment for each iteration of this marquee's movement
		mouse: 'cursor driven', //mouseover behavior ('pause' 'cursor driven' or false)
		moveatleast: 2,
		neutral: 150,
		savedirection: true
});
</script>

<script>
	$("#owl-example").owlCarousel({
 
    // Most important owl features
    items : 6,
    singleItem : false,
    itemsScaleUp : false,
 
    //Basic Speeds
    slideSpeed : 150,
    paginationSpeed : 800,
    rewindSpeed : 1000,
 
    //Autoplay
    autoPlay : true,
    stopOnHover : true,
 
    // Navigation
    navigation : false,
    navigationText : ["prev","next"],
    rewindNav : true,
    scrollPerPage : false,
 
    //Pagination
    pagination : false,
    paginationNumbers: false,
 
    // Responsive 
    responsive: false,
    responsiveRefreshRate : 200,
    responsiveBaseWidth: window,
 
    // CSS Styles
    baseClass : "owl-carousel",
    theme : "owl-theme",
 
    //Lazy load
    lazyLoad : false,
    lazyFollow : true,
    lazyEffect : "fade",
 
    //Auto height
    autoHeight : false,
 
    //JSON 
    jsonPath : false, 
    jsonSuccess : false,
 
    //Mouse Events
    dragBeforeAnimFinish : true,
    mouseDrag : true,
    touchDrag : true,
 
})
</script>

<!-- Script for slideout tab -->
<script>
	$(function(){
		 $('.slide-out-div').tabSlideOut({
			 tabHandle: '.handle',                              //class of the element that will be your tab
			 pathToTabImage: 'images/contact_tab.jpg',          //path to the image for the tab (optionaly can be set using css)
			 imageHeight: '150px',                               //height of tab image
			 imageWidth: '40px',                               //width of tab image    
			 tabLocation: 'left',                               //side of screen where tab lives, top, right, bottom, or left
			 speed: 300,                                        //speed of animation
			 action: 'click',                                   //options: 'click' or 'hover', action to trigger animation
			 topPos: '200px',                                   //position from the top
			 fixedPosition: false                               //options: true makes it stick(fixed position) on scroll
		 });
	});
</script>

<script type="text/javascript">
$(function(){
  $('#loginform').submit(function(e){
    return false;
  });
  
  $('.modaltrigger').leanModal({ top: 110, overlay: 0.45, closeButton: ".hidemodal" });
});
</script>

</body>
</html>