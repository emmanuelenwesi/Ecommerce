<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<head><link rel="stylesheet" href="dist/css/navtext.css">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Amatic+SC" />
<link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>
	 
	  <div class="content-wrapper">
	    <div class="container">

	      <!-- Main content -->
	      <section class="content">
	        <div class="row">
	        	<div class="col-sm-9">
	        		<?php
	        			if(isset($_SESSION['error'])){
	        				echo "
	        					<div class='alert alert-danger'>
	        						".$_SESSION['error']."
	        					</div>
	        				";
	        				unset($_SESSION['error']);
	        			}
	        		?>
					<div>
	        		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		                <ol class="carousel-indicators">
		                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		                  <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
		                  <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
		                </ol>
		                <div class="carousel-inner">
		                  <div class="item active">
		                    <img src="images\BannerEnwesiMeals.png" alt="First slide">
		                  </div>
		                  <div class="item">
		                    <img src="images/BannerEnwesiMeals1.png" alt="Second slide">
		                  </div>
		                  <div class="item">
		                    <img src="images/BannerEnwesiMeals2.png" alt="Third slide">
		                  </div>
		                </div>
		                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
		                  <span class="fa fa-angle-left"></span>
		                </a>
		                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
		                  <span class="fa fa-angle-right"></span>
		                </a>
						
		            </div><br>
					</div>

						<h1 style="text-align: center;color:#f68b1c"><strong>What time is it?</strong></h1>
						<div class="row">
							<div class="col-sm-4">
								<img style="width:100%; height:fit-content" src="images\newbreakfast.jpeg">
								<h2 style="text-align: center;"><a href="category.php?category=breakfast" class="text-danger">Breakfast</a></h2>
							</div>
							<div class="col-sm-4">
								<img style="width:100%; height:fit-content" src="images\newlunch.jpeg">
								<h2 style="text-align: center;"><a href="category.php?category=lunch" class="text-danger">Lunch</a></h2>
							</div>
							<div class="col-sm-4">
								<img style="width:100%; height:fit-content"src="images\newdinner.jpeg">
								<h2 style="text-align: center;" ><a href="category.php?category=dinner" class="text-danger">Dinner</a></h2>
							
								
							</div>
						</div><br><br>
						
					
					
					<section id="contact" class="contact">
						<div style="width:100%" data-aos="fade-up">

							<div class="section-header">
							
							<h2 style="text-align: center;color:#f68b1c" style="font-size: 40px;"> <strong> <span>Contact Us</span></strong></h2>
							</div>
													<!-- i embedded google map -->
							<div class="mb-3">
							<iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15784.433296562742!2d4.6745018!3d8.4888477!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10364b10239cb893%3A0xb966ca067f396d59!2sFaculty%20of%20CIS!5e0!3m2!1sen!2sng!4v1678067530309!5m2!1sen!2sng" frameborder="0" allowfullscreen=""></iframe>
							
								

							<div class="row gy-4">

							<div class="col-md-6">
								<div class="info-item  d-flex align-items-center">
								<i class="fa fa-map-marker" style="font-size:48px;color:#f68b1c"></i>
								<div>
									<h3>Our Address</h3>
									<p>A108 Adam Street, New York, NY 535022</p>
								</div>
								</div>
							</div><!-- End Info Item -->

							<div class="col-md-6">
								<div class="info-item d-flex align-items-center">
								<i class="fa fa-envelope"style="font-size:48px;color:#f68b1c"></i>
								<div>
									<h3>Email Us</h3>
									<p>19-52hl106@students.unilorin.edu.ng</p>
								</div>
								</div>
							</div><!-- End Info Item -->

							<div class="col-md-6">
								<div class="info-item  d-flex align-items-center">
								<i class="fa fa-phone"style="font-size:48px;color:#f68b1c"></i>
								<div>
									<h3>Call Us</h3>
									<p>+2349020556024</p>
								</div>
								</div>
							</div><!-- End Info Item -->

							<div class="col-md-6">
								<div class="info-item  d-flex align-items-center">
								<i class="fa fa-info"style="font-size:48px;color:#f68b1c"></i>
								<div>
									<h3>Opening Hours</h3>
									<div><strong>Mon-Sat:</strong> 9AM - 23PM;
									<strong>Sunday:</strong> Closed
									</div>
								</div>
								</div>
							</div><!-- End Info Item -->

							</div>

							<form action="forms/contact.php" method="post" role="form" class="php-email-form p-3 p-md-4">
							<div class="row">
								<div class="col-xl-6 form-group">
								<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
								</div>
								<div class="col-xl-6 form-group">
								<input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
								</div>
								<div class="form-group">
								<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required="">
							</div>
							<div class="form-group">
								<textarea class="form-control" name="message" rows="5" placeholder="Message" required=""></textarea>
							</div>
							
							<div class="text-center"><button style="background-color:#f68b1c;border: none;color: white;padding: 16px 32px;text-decoration: none;margin: 4px 2px;cursor: pointer;"type="submit">Send Message</button></div>
							</div>
							
							</form>
							<!--End Contact Form -->

										
										<h2>Our Monthly Top Sellers</h2>
										<?php
											$month = date('m');
											$conn = $pdo->open();

											try{
												$inc = 3;	
												$stmt = $conn->prepare("SELECT *, SUM(quantity) AS total_qty FROM details LEFT JOIN sales ON sales.id=details.sales_id LEFT JOIN products ON products.id=details.product_id WHERE MONTH(sales_date) = '$month' GROUP BY details.product_id ORDER BY total_qty DESC LIMIT 6");
												$stmt->execute();
												foreach ($stmt as $row) {
													$image = (!empty($row['photo'])) ? 'images/'.$row['photo'] : 'images/noimage.jpg';
													$inc = ($inc == 3) ? 1 : $inc + 1;
													if($inc == 1) echo "<div class='row'>";
													echo "
														<div class='col-sm-4'>
															<div class='box box-solid'>
																<div class='box-body prod-body'>
																	<img src='".$image."' width='100%' height='230px' class='thumbnail'>
																	<h5><a href='product.php?product=".$row['slug']."'>".$row['name']."</a></h5>
																</div>
																<div class='box-footer'>
																	<b>&#36; ".number_format($row['price'], 2)."</b>
																</div>
															</div>
														</div>
													";
													if($inc == 3) echo "</div>";
												}
												if($inc == 1) echo "<div class='col-sm-4'></div><div class='col-sm-4'></div></div>"; 
												if($inc == 2) echo "<div class='col-sm-4'></div></div>";
											}
											catch(PDOException $e){
												echo "There is some problem in connection: " . $e->getMessage();
											}

											$pdo->close();

										?> 


						</div>
						</section>
									</div>
									<div class="col-sm-3">
										<?php include 'includes/sidebar.php'; ?>
									</div>
								</div>
							</section>
							
							</div>
						</div>
					
  	<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
</body>
</html>