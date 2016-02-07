<?php include 'template/header.php' ?>
<?php include 'template/searcharea.php' ?>

<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="businessform backcolorblue">
                <h2>Apply Job Application Form</h2>
                <hr class="hard">
                <form action="#" method="post" name="cform">
                	<input type="text" name="name" placeholder="Your Name">
                    <input type="text" name="fname" placeholder="Father's Name">
                    <select>
                        <option>Gender</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                    <input type="text" name="number" placeholder="Mobile Number">
                    <input type="text" name="anumber" placeholder="Alternative Mobile Number">
                    <input type="email" name="email" placeholder="* E-mail ID">
                    <select>
                        <option>Select State</option>
                        <option>Demo-1</option>
                        <option>Demo-2</option>
                        <option>Demo-3</option>
                        <option>Demo-4</option>
                    </select>
                    <select>
                        <option>Select City</option>
                        <option>Demo-1</option>
                        <option>Demo-2</option>
                        <option>Demo-3</option>
                        <option>Demo-4</option>
                    </select>
                    <textarea rows="5" name="address" placeholder="Complete Address"></textarea>
                    <input type="text" name="experiance" placeholder="Any Experiance">
                    <input type="text" name="pincode" placeholder="Pin Code">
                    <br><br>
                    <input class="submitinner" type="submit" name="submit" value="Apply For Job">
                    <br>
                </form> 
            </div> <!-- backcolorblue end -->    
        </div> <!-- col-6 end -->
    
        <div class="col-6">
        <div class="businesstext backcolorlightyellow">
        	<div class="businessbanner">
                <h1 align="center" style="color:rgba(34,0,255,1.00)">Job Help Line No.</h1>
                <h2 style="margin:8px 0;color:red" align="center">9876556789, 9876556789</h2>
                <h3 style="margin:8px 0" align="center">For Any Job Enquiry Call Us</h3>
            </div> <!-- businessbanner -->
            
        <h4 style="color:#008040;margin-bottom:4px"><i>Job Benifits / Profile</i></h4>
        <hr class="commongreen">
        <ul class="disclist">
            <li>Jobs for 10, 10+2, Graduation Pass Students.</li>
            <li>Part- Time Jobs, Full- Time Jobs.</li>
            <li>Data Entry Jobs Without any investment.</li>
            <li>No Experience required.</li>
            <li>On- Job Training</li>
            <li>No professional qualification required</li>
            <li>Flexible Timings</li>
            <li>Develop IT , Communication Skills</li>
            <li>Get paid for what you work</li>
        </ul>
        
        
        </div> <!-- backcolorlightyellow end -->
        </div> <!-- col-6 end -->
    </div> <!-- row end -->
  </div> <!-- container end -->
<?php include 'template/footer.php' ?>