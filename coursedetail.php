<?php include 'template/header.php' ?>
<?php include 'template/searcharea.php' ?>
<section class="coursedetail">
	<div class="container">
    <div class="backcolorwhite">
    	<div class="row">
        	<div class="col-6">
            	<div class="slider-container" id="slider-container">
                    <div class="slider">
                        <div>
                            <a href="#"><img src="images/banner.jpg" alt=""></a>
                        </div>
                        <div>
                            <a href="#"><img src="images/banner.jpg" alt=""></a>
                        </div>
                        <div>
                            <a href="#"><img src="images/banner.jpg" alt=""></a>
                        </div>
                        <div>
                            <a href="#"><img src="images/banner.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                
                <div>
                	<h3 class="coursedetailheading" align="center">Adesh Institute of Dental Sciences And Research</h3>
                </div>
            </div> <!-- col-6 end -->
            <div class="col-6">
            	<h3 class="coursedetailheading">Adesh Institute of Dental Sciences And Research</h3>
                <div class="coursedetailwrap">
                    <div class="logoleft">
                        <p><img src="images/logo1.jpg"></p>
                    </div>
                    <div class="textright">
                	<p class="lineheight1">
                        <b>Name:</b> Punjab<br>
                        <b>City :</b> Bathinda<br>
                        <b>State :</b> 151109<br>
                        <b>Contact Number :</b> 0124-6542356<br>
                        <b>E-mail : </b> Not Applicable</b><br>
                        <b>Website :</b> www.adesh.in<br>
                        <b>Address :</b> Barnala Road , Bathinda, Punjab, India<br>
                        <b>Pincode : </b> 151109
                    </p>
                    </div>
                    <a href="#loginmodal" class="flatbtn modaltrigger">Apply Now</a>
                    <a href="#loginmodal" class="flatbtn modaltrigger">Downloads</a><br>
                    <div id="loginmodal" style="display:none;"> <!-- popup form Begin -->
                    <div class="popupwrap clearfix">
                    	<div class="popupimg">
                        	<img src="images/logo1.jpg">
                        </div>
                        <div class="popuptext">
                        	<p>Are you Interested in <span>Adesh Institute of Medical Sciences And Research?</span> Please provide the following details:</p>
                        </div>
                    </div>
                      <form id="loginform" name="cform" method="post" action="#" class="cform">
                        <div class="form-meta clearfix">
                            <div class="formcol1">
                                <label for="name">Name</label>
                                <input type="text" id="name" name="name" placeholder="Enter Your Name">
                                <label for="email">E-mail</label>
                                <input type="email" id="email" name="email" placeholder="Enter Your E-mail">
                                <label for="state">Select State</label>
                                <select id="state">
                                	<option>Select State</option>
                                    <option>Demo-1</option>
                                    <option>Demo-2</option>
                                    <option>Demo-3</option>
                                    <option>Demo-4</option>
                                </select>
                            </div><!--formcol1 end -->
                            <div class="formcol2">
                                <label for="phone">Phone No.</label>
                                <input type="text" id="phone" name="phone" placeholder="Enter Your Phone No.">
                                <label for="subject">Subject</label>
                                <input type="text" id="subject" name="subject" placeholder="Enter Your Subject">
                                <label for="city">Select City</label>
                                <select id="city">
                                	<option>Select City</option>
                                    <option>Demo-1</option>
                                    <option>Demo-2</option>
                                    <option>Demo-3</option>
                                    <option>Demo-4</option>
                                </select>
                            </div><!--formcol2 end -->
                            <label for="subject">Subject</label>
                            <textarea rows="4" id="subject" name="subject" placeholder="Enter Your Subject"></textarea>
                        </div> <!-- form-meta end -->
                        <br>
                        <input class="submitinner" type="submit" name="submit" value="Submit">
                    </form>
                    </div> <!-- popup form End -->
                </div> <!-- coursedetailwrap end -->
            </div>
        </div> <!-- row end -->
        
        <div class="row">
        	<div class="col-6">
            	<div class="wrap2heading">Overview</div>
                <div class="innerwrap">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><br>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
            </div> <!-- col-6 end -->
            <div class="col-6">
            	<div class="wrap2heading">Courses</div>
                <div class="innerwrap">
                	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><br>
                </div>
                
                <div class="wrap2heading">Recognition</div>
                <div class="innerwrap">
                	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><br>
                </div>
            </div> <!-- col-6 end -->
        </div>
    </div> <!-- backcolorwhite end -->
    </div>
</section>
<?php include 'template/footer.php' ?>