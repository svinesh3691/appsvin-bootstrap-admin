
			<!-- Start footer -->
				<footer>
				</footer>
			<!-- End footer -->
		</div>


		<!-- Scripts -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<script type="text/javascript">

			$(".menu-toggle").click(function(e) {
		        e.preventDefault();
		        $(".wrapper").toggleClass("toggled");
		    });
		 
		    function initMenu() {
				    $('#menu ul').hide();
				    $('#menu ul').children('.active').parent().show();
				      //$('#menu ul:first').show();
				    $('#menu>li>a').click(function() {
				    	  $('.active').removeClass('active');
				    	  $(this).parent().addClass('active');
				          var checkElement = $(this).next();
				          if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
				            return false;
				            }
				          if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
				            $('#menu ul:visible').slideUp('normal');
				            checkElement.slideDown('normal');
				            return false;
				            }
				    });
		      }
		    $(document).ready(function() {initMenu();});

		</script>
	</body>
</html>