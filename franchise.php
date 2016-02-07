<?php include 'template/header.php' ?>
<?php include 'template/searcharea.php' ?>

<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="businessform backcolorblue">
                <h2>Franchise Application Form</h2>
                <hr class="hard">
                <form action="#" method="post" name="cform">
                	<input type="text" name="compname" placeholder="* Institute / Comapny Name">
                    <input type="text" name="directorname" placeholder="Director Name">
                    <textarea rows="5" name="address" placeholder="Complete Address"></textarea>
                    <input type="text" name="number" placeholder="Phone Number">
                    <input type="text" name="anumber" placeholder="Alternative Number">
                    <input type="email" name="email" placeholder="E-mail">
                    <input type="email" name="aemail" placeholder="Alternate E-mail">
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
                    
                    <input type="url" name="website" placeholder="Website">
                    <input type="text" name="pincode" placeholder="Pin Code">
                    <br><br>
                    <input class="submitinner" type="submit" name="submit" value="Apply For Franchise">
                    <br>
                </form> 
            </div> <!-- backcolorblue end -->    
        </div> <!-- col-6 end -->
    
        <div class="col-6">
        <div class="businesstext backcolorlightyellow">
        	<div class="businessbanner">
                <h1 align="center" style="color:rgba(34,0,255,1.00)">Franchise Help Line No.</h1>
                <h2 style="margin:8px 0;color:red" align="center">9876556789, 9876556789</h2>
                <h3 style="margin:8px 0" align="center">For Any Job Enquiry Call Us</h3>
            </div> <!-- businessbanner -->
            
        <h4 style="color:#008040;margin-bottom:4px"><i>Franchise Benifits</i></h4>
        <hr class="commongreen">
        <ul class="disclist">
            <li>Microsite will be provided by the company.</li>
            <li>No domain Charges and Hosting charges.</li>
            <li>Complete Backend Support.</li>
            <li>Website User Panel facility.</li>
            <li>Lifetime website updation facility.</li>
            <li>Training for the Franchise business maximum for a period of 7 days.</li>
            <li>Payment Transfers will be made as per Franchisor’s Preference.</li>
            <li>Franchise’s Fee beyond Security i.e. 25000 is adjustable in Gold Plan & Silver Plan.</li>
            <li>Any Admission enquiry of that particular city which company will receive will be forwarded to the franchisor.</li>
            <li>Having Franchise of 1 City, the Franchisor can do business all over India.</li>
        </ul>
        
        
        </div> <!-- backcolorlightyellow end -->
        </div> <!-- col-6 end -->
    </div> <!-- row end -->
  </div> <!-- container end -->
<?php include 'template/footer.php' ?>