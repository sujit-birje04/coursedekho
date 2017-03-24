
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        <?php
        	//$institutedetails
        ?>
		
		<!-- Arrange call back  -->
		<div class="modal fade cd_arrangeCallBackModel" id="" role="dialog">
			<div class="modal-dialog modal-sm">
			  	<div class="modal-content cd_squareModel cd_squareModelButton">
			        <div class="modal-header">
			          	<button type="button" class="close" data-dismiss="modal">&times;</button>
			          	<h4 class="modal-title">Arrange CallBack</h4>
			        </div>
			        <form name="frm_callback" method="post">
				        <div class="modal-body">
							<div class="cd_arrangeCallBackModelInner">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" name="name" placeholder="Name" class="form-control" id="name">
											<input type="hidden" value="13" name="status_type" placeholder="Name" class="form-control" id="status_type">
											<input type="hidden" value="<?=$instituteInfo['institute_id']?>" name="institute_id" placeholder="Name" class="form-control" id="institute_id">
								  		</div>
									 </div>
									  
									<div class="col-md-12">
													  <div class="form-group">			
													<input type="text" name="phone" placeholder="Contact Number" class="form-control" id="email">
												  </div>
													  </div>
												  </div>
												  
												  
												  <div class="row">
													<div class="col-md-12">
														 <div class="form-group">
													
													<input type="text" name="email" placeholder="Email" class="form-control" id="email">
												  </div>
													  </div>
													  
													  <div class="col-md-12">
													  <div class="form-group">
													<select name="course" id="course" class="form-control">
														<option>Course</option>
														<?php
															$courses = $instituteInfo['courses'];
															foreach ($courses as $key => $course) {
														?>
															<option value="<?=$course['id']?>"><?=$course['name']?></option>
														<?php
															}
														?>
													</select>
												  </div>
													  </div>
												  </div>
												  
												  
												 
												 
												  
												  
												  <div class="form-group">
													<input type="text" name="message" placeholder="Best time to reach you" class="form-control" id="message">
												  </div>
												  
												  <div class="form-group">
													By clicking on submit you agree to <a href="">terms of use</a> and <a href="">privacy policy</a>.
												</div>
												  
												   <div class="row">
													<div class="col-md-6">
														 <div class="form-group">
													<input type="button" frm_id="frm_callback" call_link="<?=base_url().'leads/savelead'?>" class="form-control btn  btn-info  cd_tellUsFormSubmit frm_submit" value="Submit">
												  </div>
													  </div>
													  
													  <div class="col-md-6">
													  <div class="form-group">
													<input type="button" class="form-control btn btn-info  cd_closeActiveArea" value="Cancel">
												  </div>
													  </div>
												  </div>
												  
												</div>
											
				        </div>
			    	</form>
			      </div>
			    </div>
			  </div>
  
  
  
  
			  <!-- send message model  -->
  <div class="modal fade cd_sendMessageModel" id="" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content cd_squareModel cd_squareModelButton">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Send Message</h4>
        </div>
        <div class="modal-body">
         
			<div class="cd_arrangeCallBackModelInner">
								
								  
								  <div class="row">
									<div class="col-md-12">
										<div class="form-group">
									<input type="text" name="name" placeholder="Name" class="form-control" id="name">
								  	<input type="hidden" value="14" name="status_type" placeholder="Name" class="form-control" id="status_type">
											<input type="hidden" value="<?=$instituteInfo['institute_id']?>" name="institute_id" placeholder="Name" class="form-control" id="institute_id">
								  </div>
									  </div>
									  
									  <div class="col-md-12">
									  <div class="form-group">
								
									<input type="text" name="phone" placeholder="Contact Number" class="form-control" id="phone">
								  </div>
									  </div>
								  </div>
								  
								  
								  <div class="row">
									<div class="col-md-12">
										 <div class="form-group">
									
									<input type="text" name="email" placeholder="Email" class="form-control" id="email">
								  </div>
									  </div>
									  
									  <div class="col-md-12">
									  <div class="form-group">
									<select name="course" id="course" class="form-control">
									<option>Course</option>
									<?php
										$courses = $instituteInfo['courses'];
										foreach ($courses as $key => $course) {
									?>
										<option value="<?=$course['id']?>"><?=$course['name']?></option>
									<?php
										}
									?>
									</select>
								  </div>
									  </div>
								  </div>
								  <div class="form-group">
									<textarea name="message" id="message" placeholder="Type your message here" class="form-control"></textarea>
								  </div>
								  
								  <div class="form-group">
									By clicking on submit you agree to <a href="">terms of use</a> and <a href="">privacy policy</a>.
								</div>
								  
								   <div class="row">
									<div class="col-md-6">
										 <div class="form-group">
											<input type="button" frm_id="frm_callback" call_link="<?=base_url().'leads/savelead'?>" class="form-control btn  btn-info  cd_tellUsFormSubmit frm_submit" value="Submit">
								  		</div>
									  </div>
									  
									  <div class="col-md-6">
									  <div class="form-group">
									<input type="button" class="form-control btn btn-info  cd_closeActiveArea" value="Cancel">
								  </div>
									  </div>
								  </div>
								  
								</div>
							
        </div>
      </div>
    </div>
  </div>
  
  
  
  
  
  
  
			  <!-- book demo model  -->
  <div class="modal fade cd_bookDemoModel" id="" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content cd_squareModel cd_squareModelButton">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Book Demo</h4>
        </div>
        <div class="modal-body">
         
			<div class="cd_arrangeCallBackModelInner">
								
								  
								  <div class="row">
									<div class="col-md-12">
										<div class="form-group">
									<input name="name" type="text" placeholder="Name" class="form-control" id="name">
									<input type="hidden" value="15" name="status_type" placeholder="Name" class="form-control" id="status_type">
											<input type="hidden" value="<?=$instituteInfo['institute_id']?>" name="institute_id" placeholder="Name" class="form-control" id="institute_id">
								  </div>
									  </div>
									  
									  <div class="col-md-12">
									  <div class="form-group">
								
									<input name="phone" type="text" placeholder="Contact Number" class="form-control" id="phone">
								  </div>
									  </div>
								  </div>
								  
								  
								  <div class="row">
									<div class="col-md-12">
										 <div class="form-group">
									
									<input name="email" type="text" placeholder="Email" class="form-control" id="email">
								  </div>
									  </div>
									  
									  <div class="col-md-12">
									  <div class="form-group">
									<select name="course" id="course"  class="form-control">
									<option>Course</option>

									<?php
										$courses = $instituteInfo['courses'];
										foreach ($courses as $key => $course) {
									?>
										<option value="<?=$course['id']?>"><?=$course['name']?></option>
									<?php
										}
									?>
									</select>
								  </div>
									  </div>
								  </div>
								  <div class="form-group">
									<input name="message" id="message" type="text" placeholder="Preferable time" class="form-control">
								  </div>
								  
								  <div class="form-group">
									By clicking on submit you agree to <a href="">terms of use</a> and <a href="">privacy policy</a>.
								</div>
								  
								   <div class="row">
									<div class="col-md-6">
										 <div class="form-group">
											<input type="button" frm_id="frm_callback" call_link="<?=base_url().'leads/savelead'?>" class="form-control btn  btn-info  cd_tellUsFormSubmit frm_submit" value="Submit">
								  		</div>
									  </div>
									  
									  <div class="col-md-6">
									  <div class="form-group">
									<input type="button" class="form-control btn btn-info  cd_closeActiveArea" value="Cancel">
								  </div>
									  </div>
								  </div>
								  
								</div>
							
        </div>
      </div>
    </div>
  </div>
  
  
  
 
        <!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Product Details</h1>
					</div>
				</div>
			</div>
		</div>
        
        <div class="section">
	    	<div class="container">
	    		<div class="row">
	    			<!-- Product Image & Available Colors -->
	    			<div class="col-sm-5">
	    				<div class="cd_carouselSlider">
														
							<div id="cd_myCarousel" class="carousel slide" data-ride="carousel">
							  <!-- Indicators -->
							  <ol class="carousel-indicators">
								<li data-target="#cd_myCarousel" data-slide-to="0" class="active"></li>
								<li data-target="#cd_myCarousel" data-slide-to="1"></li>
								<li data-target="#cd_myCarousel" data-slide-to="2"></li>
								<li data-target="#cd_myCarousel" data-slide-to="3"></li>
							  </ol>

							  <!-- Wrapper for slides -->
							  <div class="carousel-inner" role="listbox">
								<div class="item active">
								  <img src="<?php echo base_url(); ?>assets/img/book1.jpg" alt="Chania">
								</div>

								<div class="item">
								  <img src="<?php echo base_url(); ?>assets/img/book2.jpg" alt="Chania">
								</div>

								<div class="item">
								  <img src="<?php echo base_url(); ?>assets/img/book3.jpg" alt="Flower">
								</div>

								<div class="item">
								  <img src="<?php echo base_url(); ?>assets/img/blog2.jpg" alt="Flower">
								</div>
							  </div>

							  
							</div>
						</div>
						
						
						
						
					
						
	    			</div>
	    			<!-- End Product Image & Available Colors -->
	    			<!-- Product Summary & Options -->
	    			<div class="col-sm-7 product-details">
						<!--<div class="cd_instituteLogo">
							<img src="<?php echo base_url(); ?>assets/img/mPurpose-logo.png" class="img-responsive cd_instituteLogoImg">
						</div>-->
						<?php
							//var_dump($instituteInfo);
						?>
	    				<h2><?=$instituteInfo['name']?></h2>
	    				<!--<div class="price">
							<span class="price-was">$959.99</span> $999.99
						</div>-->
						<p>
						<span class="glyphicon glyphicon-phone" aria-hidden="true"></span> : <?=$instituteInfo['phone']?> <br>
						<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> : <?=$instituteInfo['address']?>, <?=$instituteInfo['city']['name']?> <br>
						<span class="glyphicon glyphicon-globe" aria-hidden="true"></span> : <?=$instituteInfo['website']?><br>
					
    					</p>
						
						<div class="cd_productDetailPage">
						<h5>Reviews</h5>
								<div class="cd_smileOuter cd_instituteListCarousalSmiley">
							<div class="cd_smile">
								<div class="cd_smileInner cd_smileInnerFirst">
									<div class="cd_smileImg cd_smileBox">
										<img src="<?php echo base_url(); ?>assets/img/icon/sad.png" class="img-responsive cd_smileImageMain">
									</div>
									<div class="cd_smileCount cd_smileBox">
										123
									</div>
								</div>
								
								<div class="cd_smileInner">
									<div class="cd_smileImg cd_smileBox">
										<img src="<?php echo base_url(); ?>assets/img/icon/happiness.png" class="img-responsive cd_smileImageMain">
									</div>
									<div class="cd_smileCount cd_smileBox">
										95
									</div>
								</div>
								
								<div class="cd_smileInner">
									<div class="cd_smileImg cd_smileBox">
										<img src="<?php echo base_url(); ?>assets/img/icon/happy.png" class="img-responsive cd_smileImageMain">
									</div>
									<div class="cd_smileCount cd_smileBox">
										3
									</div>
								</div>
							</div>
						</div> 
						</div>
						
						<div class="cd_productDetailPageAction">
							<div class="cd_actionBtn">
								<input type="button" class="form-control  btn-info cd_actionButton cd_actionButtonArrangeCallBack cd_callModelFunction" data-model-name='.cd_arrangeCallBackModel' value="Arrange Callback">
								<input type="button" class="form-control btn-info cd_actionButton cd_actionButtonSendMessage cd_callModelFunction" data-model-name='.cd_sendMessageModel'   value="Send Message">
								<input type="button" class="form-control btn-info cd_actionButton cd_actionButtonBookDemo cd_callModelFunction" data-model-name='.cd_bookDemoModel' value="Book Demo">
							</div>
						</div>
					
					
						<div class="cd_actionButtonSendMessageArea cd_actionButtonActionArea">
						
						</div>
						<div class="cd_actionButtonArrangeCallBackArea cd_actionButtonActionArea">
							<div class="cd_adsContent">
							<h2>Arrange CallBack</h2>
								<div class="cd_tellUsForm">
								
								  
								  <div class="row">
									<div class="col-md-6">
										<div class="form-group">
									<input type="text" placeholder="Name" class="form-control" id="email">
								  </div>
									  </div>
									  
									  <div class="col-md-6">
									  <div class="form-group">
								
									<input type="text" placeholder="Contact Number" class="form-control" id="email">
								  </div>
									  </div>
								  </div>
								  
								  
								  <div class="row">
									<div class="col-md-6">
										 <div class="form-group">
									
									<input type="text" placeholder="Email" class="form-control" id="email">
								  </div>
									  </div>
									  
									  <div class="col-md-6">
									  <div class="form-group">
									<select class="form-control">
									<option>Course</option>
									</select>
								  </div>
									  </div>
								  </div>
								  
								  
								 
								 
								  
								  
								  <div class="form-group">
									<input type="text" placeholder="Best time to reach you (Ex. 6:00 AM to 9:00 AM)" class="form-control" id="email">
								  </div>
								  
								   <div class="row cd_arrange_submit">
									<div class="col-md-6">
										 <div class="form-group">
									<input type="button" class="form-control btn  btn-info  cd_tellUsFormSubmit" value="Submit">
								  </div>
									  </div>
									  
									  <div class="col-md-6">
									  <div class="form-group">
									<input type="button" class="form-control btn btn-info  cd_closeActiveArea" value="Cancel">
								  </div>
									  </div>
								  </div>
								  
								</div>
							
							</div>
						</div>
						<div class="cd_actionButtonBookDemoArea cd_actionButtonActionArea">
						
						</div>
					
					</div>
	    			<!-- End Product Summary & Options -->
	    			
	    			<!-- Full Description & Specification -->
	    			<div class="col-sm-12">
						<h2 class="cd_instituteListTableTitle">Courses Available</h2>
						<table class="table table-striped cd_instituteListTable">
						    <thead>
						      <tr>
						        <th>#</th>
						        <th>Name</th>
						        <th>Syllabus</th>
						        <th>Duration</th>
						        <th>Fess</th>
						      </tr>
						    </thead>
						    <tbody>
								<?php
									$courses = $instituteInfo['courses'];
									foreach ($courses as $key => $course) {
								?>
							      <tr>
							        <td><?=$key?></td>
							        <td><?=$course['name']?></td>
							        <td>PHP</td>
									<td><?=$course['duration']?></td>
									<td><?=$course['cost']?></td>
							      </tr>
							    <?php
							  		}
							    ?>
						    </tbody>
						</table>					
					</div>
	    			<!-- End Full Description & Specification -->
	    		</div>
			</div>
		</div>

		
		 <div class="section">
			<div class="container">
				<h2>Faculties</h2>
				<div class="row">
					<!-- Testimonial -->
					<?php
						$faculties = $instituteInfo['faculties'];
						foreach ($faculties as $key => $faculty) {
					?>
					<div class="testimonial col-md-4 col-sm-6">
						<!-- Author Photo -->
						<div class="author-photo">
							<img src="<?php echo base_url(); ?><?=$faculty['profile_image']?>" alt="Author 1">
						</div>
						<div class="testimonial-bubble">
							<blockquote>
								<!-- Quote -->
								<p class="quote">
		                            <?=$faculty['about']?>
                        		</p>
                        		<!-- Author Info -->
                        		<cite class="author-info">
                        			- <?=$faculty['first_name']?> <?=$faculty['last_name']?>,<br><?=$faculty['designation']?> at <a href="#"><?=$instituteInfo['name']?></a>
                        		</cite>
                        	</blockquote>
                        	<div class="sprite arrow-speech-bubble"></div>
                        </div>
                    </div>
                    <!-- End Testimonial -->
                    <?php
                		}
                    ?>
				</div>
			</div>
		</div>
		
		
		
		<!--
		<div class="section">
			<div class="container">
				<h2>About Us</h2>
				<p>
				
    						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut porta lectus ut ante accumsan, sit amet consectetur nisi tempus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam non justo dignissim, blandit urna a, hendrerit elit. Maecenas hendrerit rhoncus libero. Sed at eleifend velit. 
    					
						<br>
    						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut porta lectus ut ante accumsan, sit amet consectetur nisi tempus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam non justo dignissim, blandit urna a, hendrerit elit. Maecenas hendrerit rhoncus libero. Sed at eleifend velit. 
    					
				</p>
			</div>
		</div>
		-->

		<div class="section">
			<div class="container">
				<h2>Reviews</h2>
				<div class="cd_reviewOuter">
					<div class="cd_review">
						<?php
						$comments = $instituteInfo['comments'];
						//var_dump($comments);
						foreach ($comments as $key => $comment) {
						?>
						<div class="cd_reviewInner row">
							<div class="col-xs-1">
								<div class="cd_reviewImg">
									<img src="<?php echo base_url(); ?>assets/img/icon/sad.png" class="img-responsive">
								</div>
							</div>
							<div class="col-xs-11">
								<div class="cd_reviewDetail">
										<div class="cd_reviewDetailName">
											<?=$comment['name']?>
										</div>
										<div class="cd_reviewDetailStatus">
											Completed <span> PHP </span>
										</div>
										<div class="cd_reviewDetailDuration">
											<?=$comment['date']?>
										</div>
										
										<div class="cd_reviewDetailComment">
											<?=$comment['text']?>
										</div>
								</div>
							</div>
						</div>
						<?php
							}
						?>
					</div>
				</div>
			</div>
		</div>