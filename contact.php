<?php //include("header.php");?>
<?php include("connect.php");?>  

<?php
if(!empty($_POST['name'])){
$fname=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$sql="INSERT INTO contact(fname,email,subject,message)VALUES ('$fname','$email','$subject','$message')";
$rs=mysqli_query($db,$sql);
if($rs){
	
	echo $message="record added";
}else{
	
	echo $message="mysql error";
}
}
?> 
   <div class="col-lg-8">
  <div> <?php if(!empty($message)){echo $message;}?></div>
            <form action="" method="post" role="form1" class="php-email-form1">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="7" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div><!-- End Contact Form -->