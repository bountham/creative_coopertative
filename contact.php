<?php include("header.php"); ?>


    
    <!-- FEATURE CONTACT
    ================================================== -->
    <section class="feature-image feature-image-default" data-type="background" data-speed="2">
    	<h1>Contact</h1>
    </section>
    
    
    <!-- MAIN CONTENT
	================================================== -->
    <div class="container">
	    <div class="row" id="primary">
	    
		    <div id="content" class="col-sm-12">
			    
			    <section class="main-content">
			    	<p class="lead">Contact Us</p>
			    	
			    	<form role="form" action="<?php echo $_SERVEO['PHP_SELF'] ?>" method="post" class="clearfix">
	    				<div class="row">
	    					<div class="col-sm-6">
	    						<div class="form-group">
		    				<label class="sr-only" for="contact-name">Name</label>
							<input type="text" class="form-control input-lg" name="name" id="contact-name" placeholder="Your name" required>
	    						</div>
	    					</div><!-- end col -->
	    					
	    					<div class="col-sm-6">
	    						<div class="form-group">
		    						<label class="sr-only" for="contact-email">Email</label>
									<input type="text" class="form-control input-lg" id="contact-email" placeholder="Your email" required>
	    						</div>
	    					</div><!-- end col -->
	    					
	    					<div class="col-sm-12">
	    						<div class="form-group">
		    						<label class="sr-only" for="contact-words">Message</label>
		    						<textarea class="form-conrol input-lg" id="contact-words" placeholder="Your message" rows="3" required></textarea>
	    						</div>
	    					</div><!-- end col -->
	    				</div><!-- row -->
						<input type="submit"  name="submit" class="btn btn-info btn-lg pull-right" value="Get in touch &raquo;">
			        </form>
			    	<div class=" content col-sm-12"><?php
			    	if(isset($_POST['submit'])){
			    		$name = $_POST['name'];
			    		echo "Your information been sent!: $name , We be in touch shortly";

			    	}
			    	 ?></div>
			    </section>
		    	
		    </div><!-- content -->
		    	    
	    </div><!-- primary -->
    </div><!-- container -->
	
<?php include ("footer.php");?>
<script type="text/javascript">
$(document).ready(function() {
    setTimeout(function() {
        $(".content").fadeOut(1500);
    },3000);
});
</script>
	
	