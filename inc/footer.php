	<footer id="footer" class="page-footer font-small blue pt-4">
	    <!-- Footer Links -->
	    <div class="container-fluid text-md-left">
	        <!-- Grid row -->
	        <div class="row">
	            <div class="col-md-12 _img" data-tilt data-tilt-scale="1.2">
	                <img src="images/logouc-footer.png">
	            </div>
	            <hr class="clearfix w-100 d-md-none pb-3">
	            <!-- Grid column -->
	            <div class="col-md-6 mb-md-3 mb-6">
	                <!-- Links -->
	                <h5 class="text-uppercase">Данные</h5>
	                <ul class="list-unstyled">
	                    <li>
	                        <a href="#"><?php echo $address; ?></a>
	                    </li>
	                    <li>
	                        <a href="#!"><?php echo $phone1; ?></a>
	                    </li>
	                    <li>
	                        <a href="#!"><?php echo $phone2; ?></a>
	                    </li>
	                </ul>
	            </div>
	            <!-- Grid column -->
	            <!-- Grid column -->
	            <div class="col-md-6 mb-md-3 mb-6">
	                <!-- Links -->
	                <h5 class="text-uppercase">Разработчики</h5>
	                <ul class="list-unstyled">
	                    <li>
	                        <a href="http://instagram.com/ed_kayfovchik_2k19" class="copy_link" target="_blank">Вальгер Эдуард</a>
	                    </li>
	                    <li>
	                        <a href="https://www.instagram.com/er.ic3883" class="copy_link" target="_blank">Усенбаев Эркин</a>
	                    </li>
	                </ul>
	            </div>
	        </div>
	        <!-- Grid row -->
	        <div class="footer-copyright text-center py-3 _copyright">
	            <p>© <?php echo date("Y").' '.$copyright ?></p>
	        </div>
	        <div class="col-md-12 text-center py-3">
	            <?php
	                if(isset($instagram) && !empty($instagram)){
	                	?>
	            <a href="<?php echo $instagram; ?>"  target="_blank"><i style="font-size:32px; letter-spacing:20px; margin-bottom:30px;" class="fa fa-instagram"></i></a>
	            <?php
	                }
	                if(isset($facebook)  && !empty($facebook)){
	                	?>
	            <a href="<?php echo $facebook; ?>"  target="_blank"><i style="font-size:32px" class="fa fa-facebook-official"></i></a>
	            <?php
	                }
	                ?>
	        </div>
	    </div>
	</footer>
    <script src="../pd-login/vendor/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
        })
    </script>
</body>
</html>