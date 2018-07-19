<!-- FOOTER
	================================================== -->
	<footer>
		<div class="container">
			<div class="col-sm-4">
				<nav>
					<ul class="list-unstyled list-inline">
						    <li><a href="index.php">Home</a></li>
							<li><a href="about.php">About us</a></li>	
							<li><a class="donate" href="donate.php">Donate</a></li>							
							<li><a href="contact.php">Contact Us</a></li>
					</ul>
				</nav>
			</div><!-- end col -->
			<div class="col-sm-4">
				<p class="pull-right">&copy; 2018 Creative Community Cooperative</p>
			</div><!-- end col -->
		</div><!-- container -->
	</footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="assets/js/jquery-2.1.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    
    <script src="assets/js/main.js"></script>
    
    <script type="text/javascript" src="//use.typekit.net/gla7wnd.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
  

  <script>
	        $(document).ready(function(){
	            var a = window.location.toString().split('/');
	            var pageName = a[a.length-1].split('.')[0].toLowerCase();
	            $('.' + pageName).parent().addClass('active');   


	            if(pageName == "index"){
           	     $('.navbar-brand').hide();
	           } else {
	           	$('.navbar-brand').show();
	           }
       });   

      
</script>

</body>
</html>