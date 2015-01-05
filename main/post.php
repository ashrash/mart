
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <title>SME</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
  <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script type='text/javascript' src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">
	<link rel="stylesheet" href="//oss.maxcdn.com/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css">
		<script src="//oss.maxcdn.com/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>


<!-- Latest compiled and minified JavaScript -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
				<script>
$(document).ready(function() {
    $('#attributeForm').bootstrapValidator();
});
			
</script>
        <style type="text/css">
body {
  padding-bottom: 40px;
  color: #5a5a5a;
}


.navbar-wrapper {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  z-index: 10;
}



.carousel {
  margin-bottom: 60px;
}

.carousel-caption {
  z-index: 1;
}

.carousel .item {
  height: 400px;
  background-color:#555;
}
.carousel img {
  position: absolute;
  top: 0;
  left: 0;
  min-height: 400px;
}

.marketing {
  padding-left: 15px;
  padding-right: 15px;
}
.marketing .col-lg-4 {
  text-align: center;
  margin-bottom: 20px;
}
.marketing h2 {
  font-weight: normal;
}
.marketing .col-lg-4 p {
  margin-left: 10px;
  margin-right: 10px;
} 


@media (min-width: 768px) {
  .marketing {
    padding-left: 0;
    padding-right: 0;
  }
  .navbar-wrapper {
    margin-top: 20px;
    margin-bottom: -90px;
  }
  .navbar-wrapper .navbar {
    border-radius: 4px;
  }
  .carousel-caption p {
    margin-bottom: 20px;
    font-size: 21px;
    line-height: 1.4;
  }

}
			body
			{
				 -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
	color:#fff;
  	background-color:#324259;
			}

		</style>
</head>
    
<body>
<?php
	session_start();
	if(!isset($_SESSION['email']))
	   {
		   	header('Location: http://mart.comyr.com/signin/signin.html');
	
	   }
?>
	<div class="navbar-wrapper">
  		<div class="container">
    		<div class="navbar navbar-inverse navbar-static-top">
				<div class="navbar-header">
	    			<a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	      				<span class="icon-bar"></span>
	      				<span class="icon-bar"></span>
	      				<span class="icon-bar"></span>
	    			</a>
        			<a class="navbar-brand" href="http://mart.comyr.com/">SME MARKET</a>
        		</div>	
        		<div class="navbar-collapse collapse">
          			<ul class="nav navbar-nav">
						<li><a href="post.php">Post</a></li>
						<li><a href="http://mart.comyr.com/output/newm.html">Ads</a></li>
						<li><a href="#contact">Contact</a></li>
						<form class="navbar-form navbar-left" role="search" method="post" action="search.php">
        					<div class="form-group">
          						<input type="text" class="form-control" placeholder="Search" name="search_word">
        					</div>
        					<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
      					</form>
					</ul> 
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php	echo $_SESSION['email'];	?><strong class="caret"></strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
							<ul class="dropdown-menu">
								<li>
									<a href="profile.php">Profile</a>
								</li>
								<li>
									<a href="#">Billing information</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="logout.php">Log Out</a>
								</li>
							</ul>
						</li>

					</ul>
				</div>
			</div>
  		</div>
	</div> 
<!-- Carousel-->
<div id="myCarousel" class="carousel slide">
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    	<li data-target="#myCarousel" data-slide-to="1"></li>
    	<li data-target="#myCarousel" data-slide-to="2"></li>
  	</ol>
  	<div class="carousel-inner">
		<div class="item active">
      		<img src="http://startupadda.in/wp-content/plugins/wp-o-matic/cache/64226dcc84_1414886421-bg-photo." style="width:100%" class="img-responsive">
      		<div class="container">
				<div class="carousel-caption">
          			<h1> </h1>
          			<p> </p>
        		</div>
      		</div>
    	</div>
		<div class="item">
			<img src="https://wallwidehd.com/wp-content/uploads/2015-Ferrari-Sergio-Sport-Car-Wallpaper-1500x500.jpg" class="img-responsive" >
			<div class="container">
        		<div class="carousel-caption">
					<h1> </h1>
          			<p> </p>
        		</div>
      		</div>	
    	</div>
    	<div class="item">
      		<img src="http://static.squarespace.com/static/4ff1c58c24acf37cb37c8e9e/t/5155c051e4b05239ba819ec5/1364574292742/IMG_7531-Edit-2.jpg" class="img-responsive" width="1500px" height="500px">
      		<div class="container">
        		<div class="carousel-caption">
					<h1> </h1>
          			<p> </p>
        		</div>
      		</div>
    	</div>
  </div> 
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="icon-prev"></span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="icon-next"></span>
  </a>  
</div>
	
	
  <!--
  <footer>
    <p class="pull-right"><a href="#">Back to top</a></p>
    <p>This is a webapp for small and medium enterprise markets <a href="#">r ashwin</a></p>
  </footer> -->
	
<!-- ------------------------------------------------------------------------------------------------------- -->
	<center><h3>Classifieds. Fill in your ad details</h3></center>

	
	<div class="row clearfix">
				<div class="col-md-12 column">
				
					<form action="post1.php" id="attributeForm" method="post" class="form-horizontal" enctype="multipart/form-data"
						data-bv-message="This value is not valid"
						data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
						data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
						data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
						<br/>
						
						<br/>
    <div class="form-group">
        <label class="col-sm-3 control-label">Title</label>
        <div class="col-sm-5">
             <input type="text" class="form-control" name="title" placeholder="Tile of the product or service"
                   data-bv-notempty="true" data-bv-notempty-message="*cannot be empty" />
        </div>
    </div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Type</label>
		<div class="col-sm-5">
			<select class="form-control" name="type" data-bv-notempty="true" data-bv-notempty-message="*cannot be empty">
				<option value="Cb" >Cars and bikes</option>
				<option value="Elec">Electronics</option>
  				<option value="Edu">Education and Career</option>
  				<option value="hl">Health and Lifestyle</option>
  				<option value="Ser">Service</option>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Time duration</label>
		<div class="col-sm-5">
			<select class="form-control" name="time" data-bv-notempty="true" data-bv-notempty-message="*cannot be empty">
				<option value="1 day" >1 day</option>
				<option value="2 day">2 days</option>
  				<option value="1 week">1 week</option>
  				<option value="1 month">1 month</option>
  			</select>
		</div>
	</div>
						
	<div class="form-group">
        <label class="col-sm-3 control-label">Phone Number</label>
        <div class="col-sm-5">
            <input class="form-control" name="phno1" type="text" placeholder="Phone number #1 with area code eg. +919000000000"
                   data-bv-notempty="true" data-bv-notempty-message="*cannot be empty"
                    />
		</div>
    </div>
	<div class="form-group">
        <label class="col-sm-3 control-label">Alternate Number</label>
        <div class="col-sm-5">
            <input class="form-control" name="phno2" type="text" placeholder="Phone number #2 with area code eg. +919000000000 "/>
		</div>
    </div> 
	<div class="form-group">
        <label class="col-sm-3 control-label">Address</label>
        <div class="col-sm-4">
            <textarea type="text" class="form-control" name="addr" placeholder="Give a short description" rows="5"
                   data-bv-notempty="true" data-bv-notempty-message="*cannot be empty"></textarea>
        </div>
    </div>
	<div class="form-group">
        <label class="col-sm-3 control-label">Zip code</label>
        <div class="col-sm-5">
            <input class="form-control" name="zip" type="text" placeholder="Your area code"
                   data-bv-notempty="true" data-bv-notempty-message="*cannot be empty"/>
		</div>
    </div>				
		<div class="form-group">
        <label class="col-sm-3 control-label">Description</label>
        <div class="col-sm-4">
			<textarea type="text" class="form-control" name="des" placeholder="Give a short description" rows="5"
                   data-bv-notempty="true" data-bv-notempty-message="*cannot be empty"></textarea>
        </div>
    </div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Image</label>		
		<div class="col-sm-4">
			<div class="fileinput fileinput-new" data-provides="fileinput">
  				<div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
  				<div>
    				<span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="fileToUpload" data-bv-notempty="true" data-bv-notempty-message="*cannot be empty"	></span>
					<a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
  				</div>
			</div>
		</div> 
	</div>
    <div class="form-group">
        <label class="col-sm-3 control-label"><a href="terms.html">Terms and Conditions</a></label>
        <div class="col-sm-5">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="check" value="Agree" data-bv-notempty="true" data-bv-notempty-message="Read and accept the terms and conditions" /> I have read the terms and conditions
                </label>
            </div>
			<br/>
        </div>
		<button type="submit" class="btn btn-success" >Post Ad</button>
    </div>
</form> 
					
				</div>
			</div>
	
	
	
<!-------------------------------------------------------------------------------------------------------------------------->
	  <hr width="90%">
	<br>
	<center><h3>Front Page ads. . .</h3></center>
	<br>
	<div class="row clearfix">
				<div class="col-md-12 column">
				
					<form action="post2.php" id="attributeForm" method="post" class="form-horizontal" enctype="multipart/form-data"
						data-bv-message="This value is not valid"
						data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
						data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
						data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
						<br/>
						
						<br/>
    <div class="form-group">
        <label class="col-sm-3 control-label">Title</label>
        <div class="col-sm-5">
             <input type="text" class="form-control" name="title" placeholder="Tile of the product or service"
                   data-bv-notempty="true" data-bv-notempty-message="*cannot be empty" />
        </div>
    </div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Type</label>
		<div class="col-sm-5">
			<select class="form-control" name="type" data-bv-notempty="true" data-bv-notempty-message="*cannot be empty">
				<option value="Cb" >Cars and bikes</option>
				<option value="Elec">Electronics</option>
  				<option value="Edu">Education and Career</option>
  				<option value="hl">Health and Lifestyle</option>
  				<option value="Ser">Service</option>
			</select>
		</div>
	</div>
						
	<div class="form-group">
        <label class="col-sm-3 control-label">Phone Number</label>
        <div class="col-sm-5">
            <input class="form-control" name="phno1" type="text" placeholder="Phone number #1 with area code eg. +919000000000"
                   data-bv-notempty="true" data-bv-notempty-message="*cannot be empty"
                    />
		</div>
    </div>
	<div class="form-group">
        <label class="col-sm-3 control-label">Alternate Number</label>
        <div class="col-sm-5">
            <input class="form-control" name="phno2" type="text" placeholder="Phone number #2 with area code eg. +919000000000 "/>
		</div>
    </div> 
	<div class="form-group">
        <label class="col-sm-3 control-label">Address</label>
        <div class="col-sm-4">
            <textarea type="text" class="form-control" name="addr" placeholder="Give a short description" rows="5"
                   data-bv-notempty="true" data-bv-notempty-message="*cannot be empty"></textarea>
        </div>
    </div>
	<div class="form-group">
        <label class="col-sm-3 control-label">Zip code</label>
        <div class="col-sm-5">
            <input class="form-control" name="zip" type="text" placeholder="Your area code"
                   data-bv-notempty="true" data-bv-notempty-message="*cannot be empty"/>
		</div>
    </div>				
		<div class="form-group">
        <label class="col-sm-3 control-label">Description</label>
        <div class="col-sm-4">
			<textarea type="text" class="form-control" name="des" placeholder="Give a short description" rows="5"
                   data-bv-notempty="true" data-bv-notempty-message="*cannot be empty"></textarea>
        </div>
    </div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Image</label>		
		<div class="col-sm-4">
			<div class="fileinput fileinput-new" data-provides="fileinput">
  				<div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
  				<div>
    				<span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="fileToUpload" data-bv-notempty="true" data-bv-notempty-message="*cannot be empty"	></span>
					<a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
  				</div>
			</div>
		</div> 
	</div>
    <div class="form-group">
        <label class="col-sm-3 control-label"><a href="terms.html">Terms and Conditions</a></label>
        <div class="col-sm-5">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="check" value="Agree" data-bv-notempty="true" data-bv-notempty-message="Read and accept the terms and conditions" /> I have read the terms and conditions
                </label>
            </div>
			<br/>
        </div>
		<button type="submit" class="btn btn-success" >Post Ad</button>
    </div>
</form> 
					
				</div>
			</div>
		</div>
	</div>
</div>
  <!--
  <footer>
    <p class="pull-right"><a href="#">Back to top</a></p>
    <p>This is a webapp for small and medium enterprise markets <a href="#">r ashwin</a></p>
  </footer> -->
    </body>
</html>