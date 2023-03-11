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
	        						<section id="about">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2>About Us</h2>
        <p>Enwesi Meals is a customer focused food services company established in 2023, we have since attained a front-line position in the highly competitive restaurant’s service industry.

We engaged professional food experts from diverse backgrounds and cultures to achieve the true taste our customers deserve. Our foods are produced under the most hygienic conditions and we make use of only most modern and proven equipment for our extensive, diverse and imaginable array of foods.

Our tastefully furnished and relaxed restaurants environment provides the perfect ambiance to enjoy your eating experience. Also, our sumptuous foods are served by well-mannered and decent staffs.

Enwesi Meals is a 5-star restaurant that produces first-class cuisines by international and local best Chefs of very high repute in the food and catering industry. We maintain consistency since inception. This makes Enwesi Meals the first choice for all. At Enwesi Meals, every national always feel at home, courtesy of our array of food products for many nationalities and tribes.</p>
<h2>Mission</h2>
<p>To experience the excitement of offering unparalleled quality in service delivery and products development to customers under the best hygienic condition.</p>
<h2>Our Vision</h2>
<p>Enwesi Meals was conceived by country builders, to develop a first-class Fast Food, Chinese and Continental restaurants of unbeatable taste and quality that will accommodate low, middle- and high-class customers, in the food and hospitality industry where all nationals can always feel at home.</p>


</div>
      <div class="col-md-6">
        <h2>Our Team</h2>
        <ul>
          <li>Enwesi Emmanuel, CEO</li>
          <li>Opeyemi, COO</li>
          <li>Tessy, CTO</li>
          <li>Hula Baba Blue, CFO</li>
        </ul>
      </div>
    </div>
  </div>
</section>
	
										
						
						
				</div>
									<div class="col-sm-3">
										<?php include 'includes/sidebar.php'; ?>
									</div>
								
							
							
							</div>
						</div>
					
  	<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
</body>
</html>