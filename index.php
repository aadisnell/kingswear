<?php include 'header.php'?>
<?php include 'db.php'?>

<?php 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    $nameEr = $emailEr=$numberEr=$messageEr='';
    $isError = false;
    $name=$email=$number=$message = '';
    $response = '';
 
    if(isset($_POST['submit'])){
       if(empty($_POST['name'])){
           $nameEr = 'Name field is empty';
       }else{
         $name = $_POST['name'];
       } 
   
    if(empty($_POST['email'])){
        $emailEr = 'Email field is empty';
    }else{
        $email = $_POST['email'];
    }
    
    if(empty($_POST['number'])){
        $numberEr = 'Phone number is required';
    }else{
        $number = $_POST['number'];
    }
    if(empty($_POST['message'])){
        $messageEr = 'Message field is required';
    }else{
        $message = $_POST['message'];
    }
    
    if(!empty($name)&& !empty($email)&& !empty($number) && !empty(message)){
        
        $mailto = "asirificharles@yahoo.com";
        $headers = "From: ". $email;
        $text = "<p>You have recieved a message from</p><br>" .'<br>' .$name . ' ' .$email. ' '.$number . ' '. '<br>'. $message;
        
        $query ="INSERT INTO contactus (name,email,number,message) VALUES ('$name','$email','$number','$message')";
        $result = mysqli_query($con,$query);
  
     require 'autoload.php';
     require 'Exception.php';
     require 'PHPMailer.php';
     require 'SMTP.php';

            
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->IsHTML(true);
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'ascharles23@gmail.com';
    $mail->Password = '@snELL0541;';
    $mail->SMTPSecure = 'tls';
    $mail->Port= 587;
        
    $mail->setFrom($email, $name);
    $mail->addAddress('asirificharles@yahoo.com');
    $mail->Body=$text;
    $mail->Subject = 'Enquiry';
//       if(!$mail->send()){
//           echo "Mailer Error: ".$mail->ErrorInfo;
//       }else{
//            echo 'Message Sent';
//           header("Location:index.php?mailsent");
//       } 
        $response = $mail->send();
       header("Location: index.php?mailsent"); // redirect back to your contact form
       exit;

    }
 }



?>
<link rel="stylesheet" type="text/css" href="./css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="./css/simplelightbox.css">
<link rel="stylesheet" type="text/css" href="./css/font-awesome.css">
<style>

.jumbotron{
    background-image: url('./pics/0.jpg'); 
    -webkit-background-size: 100% 100%;
    -moz-background-size: 100% 100%;
    -o-background-size: 100% 100%;
    background-size: 100% 100%;
    margin-top: 75px;
    min-height: 400px;
    z-index:0; 
     position: relative;
      width: 100%;
}
    @media (max-width:600px){
        .jumbotron{
    background-image: url('./pics/5.png'); 
    -webkit-background-size: 100% 100%;
    -moz-background-size: 100% 100%;
    -o-background-size: 100% 100%;
    background-size: 100% 100%;
    margin-top: 75px;
    min-height: 400px;
z-index:0; 

   height: 100%;
     position: relative;
      width: 100%;
}
    }
</style>
<div class="jumbotron">
    <div class="banner-text"> 
			<div class="container"> 
				<div class="banner-w3lstext"> 
					<h1><a href="index.html">Footwear<span>Welcome To Kings</span></a></h1>
					<p>Pamper your feet with shoes from Kings wear Gh. Don't just buy shoes, buy classic once.</p>
				</div> 
			</div>
		</div>
</div>
<div  id="about" class="container banner-bottom-grids">
    <?php 
            $query = "SELECT * from pics";
            $result = mysqli_query($con,$query);
        while($row = mysqli_fetch_assoc($result)){
             
            $pic1 = $row['img'];
            $words = $row['words'];
            $subwords = $row['subword'];
        ?>
    <div class="row">
        <div class="col-md-6 col-xs-6 banner-bottom-grid-left">
            <h2>Discover the art of <span> Shoes</span></h2>
			<p><?php echo $words; ?> <cite>Fergie</cite></p>
    </div>
        <div class="col-md-6 col-xs-6">
            <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($pic1).'" alt="Affordable shoes" class="img-responsive" />';?>
            <div class="banner-bottom-grid1">
                <div class="banner-bottom-grid1-pos">
                    <h3><?php echo $subwords; ?> </h3><cite>Oprah Winfrey</cite>
                </div>
            </div>
        </div>
        
    </div>
</div>
<?php }?>

  <?php 
            $query = "SELECT * from pics";
            $result = mysqli_query($con,$query);
        while($row = mysqli_fetch_assoc($result)){
             
            $img1 = $row['img1'];
            $subword = $row['subword1'];
        }
?>
<div class="wthree_progress" id="work">	
		<div class="col-md-6 col-xs-6 w3_agileits_progress_right">	
			<h3 class="agileinfo_title"><span>WorkProgress</span> </h3>
			<p><?php echo $subword?>. </p>
		</div>
		
		<div class="col-md-6 col-xs-6 w3_agileits_progress_left">
			<div class="agileits_progress_left_grid"> 
				<div class="agileits_progress_left_grid_pos">
				<div class="row">
					<div class="col-xs-3 w3ls_progress_left1">
						<div class="w3ls_progress_left1_grid">
							<i class="fa fa-facebook" aria-hidden="true"></i>
							<p>likes</p>
							<h4 class="counter">10000</h4>
						</div>
					</div>
					<div class="col-xs-3 w3ls_progress_left1">
						<div class="w3ls_progress_left1_grid">
							<i class="fa fa-instagram" aria-hidden="true"></i>
							<p>Followers</p>
							<h4 class="counter">5,000</h4>
						</div>
					</div>
						<div class="col-xs-3 w3ls_progress_left1">
						<div class="w3ls_progress_left1_grid">
							<i class="fa fa-twitter w3_twitter" aria-hidden="true"></i>
							<p>Followers</p>
							<h4 class="counter">5,000</h4>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		</div> 
		<div class="clearfix"> </div>
	</div>
	
<script src="js/waypoints.min.js"></script>
<script src="js/counterup.min.js"></script>
<script>
    jQuery(document).ready(function($){
        $('.counter').counterUp({
            delay: 10,
            time: 2000
        });
    });

</script>
<div class="services" id="services">
    <div class="container">
        <h3 class="agileinfo_title"><span>Services</span></h3>
       
        <div class="services-agileinfo">
            <div class="row">
            <div class="col-sm-4 col-xs-6 services-w3grids">
                <div class="services-icon hvr-radial-in">
                    <i class="fa fa-anchor" aria-hidden="true"></i>
                </div>
                <p>Strong Brand</p>
            </div>
               <div class="col-sm-4 col-xs-6 services-w3grids">
                <div class="services-icon hvr-radial-in">
                    <i class="fa fa-ship" aria-hidden="true"></i>
                </div>
                <p>Delivery Accross the globe</p>
            </div>
              <div class="col-sm-4 col-xs-6 services-w3grids">
                <div class="services-icon hvr-radial-in">
                    <i class="fa fa-truck" aria-hidden="true"></i>
                </div>
                <p></p>
            </div>
            </div>
            
              <div class="row">
            <div class="col-sm-4 col-xs-6 services-w3grids">
                <div class="services-icon hvr-radial-in">
                    <i class="fa fa-plane" aria-hidden="true"></i>
                </div>
                <p></p>
            </div>
               <div class="col-sm-4 col-xs-6 services-w3grids">
                <div class="services-icon hvr-radial-in">
                    <i class="fa fa-check-square-o" aria-hidden="true"></i>
                </div>
                <p>Endorsed by Our Customers</p>
            </div>
              <div class="col-sm-4 col-xs-6 services-w3grids">
                <div class="services-icon hvr-radial-in">
                    <i class="fa fa-line-chart" aria-hidden="true"></i>
                </div>
                <p>Making Progress</p>
            </div>
            </div>
        </div>
    </div>
</div>
<div id="gallery" class="gallery">
    <div class="container">
        <h3 class="agileinfo_title"><span>Gallery</span></h3>
    </div>
   
    <div id="owl-demo" class="owl-carousel text-center agileinfo-gallery-row">
       <a href="./pics/10.png" class="item g1">
            <img class="lazyOwl" src="./pics/10.png" title="Our latest gallery">
            <div class="agile-galry-caption">
                <h4>Nice</h4>
            </div>
        </a>
        
          <a href="./pics/11.png" class="item g1">
           
            <img class="lazyOwl" src="./pics/11.png" title="Our latest gallery">
            <div class="agile-galry-caption">
                <h4>Gorgeous</h4>
            </div>
        </a>
           <a href="./pics/12.png" class="item g1">
            <img class="lazyOwl" src="./pics/12.png" title="Our latest gallery">
            <div class="agile-galry-caption">
                <h4>Fantastic</h4>
            </div>
        </a>
           <a href="./pics/13.png" class="item g1">
            <img class="lazyOwl" src="./pics/13.png" title="Our latest gallery">
            <div class="agile-galry-caption">
                <h4>Classic</h4>
            </div>
        </a>
            <a href="./pics/14.png" class="item g1">
            <img class="lazyOwl" src="./pics/14.png" title="Our latest gallery">
            <div class="agile-galry-caption">
                <h4>Ground friendly</h4>
            </div>
        </a>
            <a href="./pics/10.png" class="item g1">
            <img class="lazyOwl" src="./pics/10.png" title="Our latest gallery">
            <div class="agile-galry-caption">
                <h4>Super.</h4>
            </div>
        </a>
            <a href="./pics/15.png" class="item g1">
            <img class="lazyOwl" src="./pics/15.png" title="Our latest gallery">
            <div class="agile-galry-caption">
                <h4>Gorgeous</h4>
            </div>
        </a>
            <a href="./pics/16.png" class="item g1">
            <img class="lazyOwl" src="./pics/16.png" title="Our latest gallery">
            <div class="agile-galry-caption">
                <h4>Perfect</h4>
            </div>
        </a>
        <a href="./pics/17.png" class="item g1">
            <img class="lazyOwl" src="./pics/17.png" title="Our latest gallery">
            <div class="agile-galry-caption">
                <h4>Wonderful</h4>
            </div>
        </a>
        <a href="./pics/18.png" class="item g1">
            <img class="lazyOwl" src="./pics/18.png" title="Our latest gallery">
            <div class="agile-galry-caption">
                <h4>Wonderful</h4>
            </div>
        </a>
         <a href="./pics/19.png" class="item g1">
            <img class="lazyOwl" src="./pics/19.png" title="Our latest gallery">
            <div class="agile-galry-caption">
                <h4>Nice</h4>
            </div>
        </a>
         <a href="./pics/20.png" class="item g1">
            <img class="lazyOwl" src="./pics/20.png" title="Our latest gallery">
            <div class="agile-galry-caption">
                <h4>some text here..</h4>
            </div>
        </a>
         <a href="./pics/21.png" class="item g1">
            <img class="lazyOwl" src="./pics/21.png" title="Our latest gallery">
            <div class="agile-galry-caption">
                <h4>some text here..</h4>
            </div>
        </a>
         <a href="./pics/22.png" class="item g1">
            <img class="lazyOwl" src="./pics/22.png" title="Our latest gallery">
            <div class="agile-galry-caption">
                <h4>Good</h4>
            </div>
        </a>
        <a href="./pics/23.png" class="item g1">
            <img class="lazyOwl" src="./pics/23.png" title="Our latest gallery">
            <div class="agile-galry-caption">
                <h4>Perfect</h4>
            </div>
        </a>
        <a href="./pics/24.png" class="item g1">
            <img class="lazyOwl" src="./pics/24.png" title="Our latest gallery">
            <div class="agile-galry-caption">
                <h4>Gorgeous</h4>
            </div>
        </a>
        <a href="./pics/25.png" class="item g1">
            <img class="lazyOwl" src="./pics/25.png" title="Our latest gallery">
            <div class="agile-galry-caption">
                <h4>Rock it Hard</h4>
            </div>
        </a>
        <a href="./pics/26.png" class="item g1">
            <img class="lazyOwl" src="./pics/26.png" title="Our latest gallery">
            <div class="agile-galry-caption">
                <h4>Rock it Hard</h4>
            </div>
        </a>
        <a href="./pics/27.png" class="item g1">
            <img class="lazyOwl" src="./pics/27.png" title="Our latest gallery">
            <div class="agile-galry-caption">
                <h4>some text here..</h4>
            </div>
        </a>
        
         <a href="./pics/27.png" class="item g1">
            <img class="lazyOwl" src="./pics/27.png" title="Our latest gallery">
            <div class="agile-galry-caption">
                <h4>Feet Pamper</h4>
            </div>
        </a>
         <a href="./pics/27.png" class="item g1">
            <img class="lazyOwl" src="./pics/27.png" title="Our latest gallery">
            <div class="agile-galry-caption">
                <h4>Nice</h4>
            </div>
        </a>
         <a href="./pics/28.png" class="item g1">
            <img class="lazyOwl" src="./pics/28.png" title="Our latest gallery">
            <div class="agile-galry-caption">
                <h4>Nice</h4>
            </div>
        </a>
         <a href="./pics/29.png" class="item g1">
            <img class="lazyOwl" src="./pics/29.png" title="Our latest gallery">
            <div class="agile-galry-caption">
                <h4>Good</h4>
            </div>
        </a>
         <a href="./pics/30.png" class="item g1">
            <img class="lazyOwl" src="./pics/30.png" title="Our latest gallery">
            <div class="agile-galry-caption">
                <h4>Perfect</h4>
            </div>
        </a>
         <a href="./pics/31.png" class="item g1">
            <img class="lazyOwl" src="./pics/31.png" title="Our latest gallery">
            <div class="agile-galry-caption">
                <h4>Good</h4>
            </div>
        </a>
         <a href="./pics/32.png" class="item g1">
            <img class="lazyOwl" src="./pics/32.png" title="Our latest gallery">
            <div class="agile-galry-caption">
                <h4>Fantastic</h4>
            </div>
        </a>
         <a href="./pics/33.png" class="item g1">
            <img class="lazyOwl" src="./pics/33.png" title="Our latest gallery">
            <div class="agile-galry-caption">
                <h4>Good</h4>
            </div>
        </a>
        
         <a href="./pics/34.png" class="item g1">
            <img class="lazyOwl" src="./pics/34.png" title="Our latest gallery">
            <div class="agile-galry-caption">
                <h4>Wonderful</h4>
            </div>
        </a>
         <a href="./pics/35.png" class="item g1">
            <img class="lazyOwl" src="./pics/35.png" title="Our latest gallery">
            <div class="agile-galry-caption">
                <h4>Ground Friendly</h4>
            </div>
        </a>
         <a href="./pics/35.png" class="item g1">
            <img class="lazyOwl" src="./pics/35.png" title="Our latest gallery">
            <div class="agile-galry-caption">
                <h4>Classic</h4>
            </div>
        </a>
         <a href="./pics/36.png" class="item g1">
            <img class="lazyOwl" src="./pics/36.png" title="Our latest gallery">
            <div class="agile-galry-caption">
                <h4>Yi Akyea</h4>
            </div>
        </a>
         <a href="./pics/37.png" class="item g1">
            <img class="lazyOwl" src="./pics/37.png" title="Our latest gallery">
            <div class="agile-galry-caption">
                <h4>Yi Akyea</h4>
            </div>
        </a>
         <a href="./pics/38.png" class="item g1">
            <img class="lazyOwl" src="./pics/39.png" title="Our latest gallery">
            <div class="agile-galry-caption">
                <h4>Yi Akyea</h4>
            </div>
        </a>
         <a href="./pics/40.png" class="item g1">
            <img class="lazyOwl" src="./pics/40.png" title="Our latest gallery">
            <div class="agile-galry-caption">
                <h4>Yi Akyea</h4>
            </div>
        </a>
        
        </div>
    </div>


<script type="text/javascript" src="./js/simple-lightbox.min.js"></script>
		<script>
			$(function(){
				var gallery = $('.agileinfo-gallery-row a').simpleLightbox({navText:		['&lsaquo;','&rsaquo;']});
			});
            
		</script>
		<script src="js/owl.carousel.js"></script>
		<script>
            $(document).ready(function(){
                $("#owl-demo").owlCarousel({
                    item:4,
                    lazyLoad:true,
                    autoPlay:true,
                    pagination:false,
                });
            });

        </script>
    <div id="blog" class="blog cd-section">
        <div class="container">
            <h3 class="agileinfo_title"><span>Blog</span></h3>
            <div class="blog-agileinfo">
               <div class="row">
                <div class="col-md-7 blog-w3grid-img">
                    <a href="#myModal" data-toggle="modal" class="w3three-blogimg">
                        <img src="pics/51.jpg" class="img-responsive" alt="Shoe Promo">
                    </a>
                </div>
                <div class="col-md-5 blog-w3grid-text">
                    <h4><a href="#myModal" data-toggle="modal"></a>KingsWear Promo!!</h4>
                    <h6><a href="#">By Admin</a> -Aug 4th, 2018</h6>
                    <p>Hi, Pals its a great new month. May it bring your way many blessings and Unfathomable breakthroughs. Remember, you are blessed to bless. All the kings Wear team wish you a super fruitful August.Stay blessed forever. <em>Our Promo ends on 30th September</em></p>
                </div>
            </div>
            <div class="clearfix"></div>
        </div><br><br>
        
        <div class="blog-agileinfo blog-agileinfo-md1">
            <div class="row">
                <div class="col-md-7 blog-w3grid-img blog-img-right">
                    <a href="#myModal" data-toggle="modal" class="w3three-blogimg">
                        <img src="pics/52.jpg" class="img-responsive" alt="Shoe Promo">
                    </a>
                </div>
                 <div class="col-md-5 blog-w3grid-text">
                    <h4><a href="#myModal" data-toggle="modal"></a>KingsWear Promo!!</h4>
                    <h6><a href="#">By Admin</a> -Aug 4th, 2018</h6>
                    <p>Hi, Pals its a great new month. May it bring your way many blessings and Unfathomable breakthroughs. Remember, you are blessed to bless. All the kings Wear team wish you a super fruitful August.Stay blessed forever. <em>Our Promo ends on 30th September</em></p>
                </div>
            </div>
        </div>
    </div>
    </div>
    
    <div id="contact" class="map">
        <div class="col-sm-6 map-right">
            <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m11!1m3!1d126.8637920945285!2d-0.23541745653043328!3d5.6004594135407215!2m2!1f204.93731279486417!2f45!3m2!1i1024!2i768!4f35!3m3!1m2!1s0xfdf999da24505b1%3A0x3a70bfa08a0e889c!2sAbeka+Rd%2C+Accra!5e1!3m2!1sen!2sgh!4v1533570295086"></iframe>
        </div>
        <div class="map-pos">
            <div class="address-row">
<!--
                <div class="col-xs-2 ">
                    <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                    
                </div>
-->
                <div class="col-xs-10 address-right">
                    <h>Location</h>
                    <p>Abeka Lapaz, Accra </p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="address-row w3-agileits">
<!--
            <div class="col-xs-2 address-left">
                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
            </div>
-->
            <div class="col-xs-10 address-right">
                <h5>Mail Us</h5>
                <p><a href="mailto:info@kingswearshoes.com">info@kingswearshoes.com</a></p>
            </div>
             </div>
            <div class="address-row">
<!--
                <div class="col-xs-2 address-left">
                    <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
                   
                </div>
-->
                 <div class="col-xs-10 address-right"></div>
                 <h5>Call Us</h5>
                 <p>+233240036388</p>
                  <p>+233578034272</p>
            </div>
       </div><br><br><br>
       </div>
       <div class="clearfix"></div>
    
      <div class="contact">
		<div class="container"> 
			<h3 class="agileinfo_title">Send Us <span> Your Queries</span> </h3> 
			
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="form-group">
			<div class="row">
			<?php 
        if (!empty($response)) {
            ?>
            <div class="alert alert-info">
                <?php echo $response ?>
            </div>
            <?php
        }
        ?>

				<div class="col-sm-6 contact-left">
					<input value="<?php if(!$isError){echo htmlspecialchars($name);} else{echo '';}?>" class="form-control" type="text" name="name" placeholder="Your Name">
					
        <span style="color: #FF0000"><?php if (!empty($nameEr)) {echo $nameEr ;} ?></span>

					<input value="<?php if(!$isError){echo htmlspecialchars($email);} else{echo '';}?>" class="form-control" type="email" name="email" placeholder="Email">
        <span style="color: #FF0000"><?php if (!empty($emailEr)) {echo $emailEr;} ?></span>
					<input value="<?php if(!$isError){echo htmlspecialchars($number);} else{echo '';}?>"  type="text" class="form-control" name="number" placeholder="Mobile Number">
				</div>
				<div class="col-sm-6 contact-right"> 
					<textarea textarea value="<?php if(!$isError){echo htmlspecialchars($message);} else{echo '';}?>"  class="form-control" name="message" placeholder="Message" ></textarea>
<span style="color: #FF0000"><?php if (!empty($messageEr)) {echo $messageEr;} ?></span>
					<input type="submit" name="submit" value="Submit" >
				</div>
				<div class="clearfix"></div>
				</div>
			</form>
			
		</div>
	</div>  
<?php include 'footer.php'?>