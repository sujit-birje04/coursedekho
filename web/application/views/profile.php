	
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-sm-3">
						<h1>Institute list</h1>
					</div>
					<div class="col-sm-3">
						<div class="input-group">
						  <input type="text" class="form-control" placeholder="Google Search" aria-describedby="basic-addon1">
						  <span class="input-group-addon" ><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
						</div>
					</div>
					<div class="col-sm-6 text-right">
						<h1>Compare (3)</h1>
					</div>
				</div>
			</div>
		</div>
        
        <div class="section cd_listedSection">
	        <div class="container cd_listedSectionContainer">
			
			
			<div class="row">
			<!-- section area starts -->
			<div class="col-md-9 cd_instituteSection">
	
      <div class="row">
      
        <div class="col-xs-12 col-sm-12 col-lg-12" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Personal Information</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> 
				<div class="cd_userPic"><img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive"> 
				</div>
				</div>
                
                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                  <dl>
                    <dt>DEPARTMENT:</dt>
                    <dd>Administrator</dd>
                    <dt>HIRE DATE</dt>
                    <dd>11/12/2013</dd>
                    <dt>DATE OF BIRTH</dt>
                       <dd>11/12/2013</dd>
                    <dt>GENDER</dt>
                    <dd>Male</dd>
                  </dl>
                </div>-->
                <div class=" col-md-9 col-lg-9 "> 
	                <form name="frm_profile" method="post" id="frm_profile" >	
	                  <table class="table table-user-information cd_editableTable">
	                    <tbody>
	                      <tr>
	                        <td>Full Name:</td>
	                        <td><input type="text" name="name" class="cd_editable form-control cd_profileDisabled" value="<?=$userDetails['name']?>" disabled>
	                        	<input type="hidden" name="id"  value="<?=$userDetails['id']?>">
	                        </td>
	                      </tr>
	                     
	                      <tr>
	                        <td>Date of Birth</td>
	                        <td><input type="text"  name="dob" class="cd_editable form-control cd_profileDisabled" value="<?=$studentInfo['dob']?>" disabled></td>
	                      </tr>
	                      <tr>
	                        <td>Gender</td>
	                        <td>
								<select  name="gender" class="cd_editable form-control cd_profileDisabled" disabled>
									<option value="MALE" <?=strtolower($userDetails['gender']) == 'male' ? 'selected' : '' ?> >Male</option>
									<option value="FEMALE" <?=strtolower($userDetails['gender']) == 'female' ? 'selected' : '' ?> >Female</option>
									<option>Other</option>
								</select>
							</td>
	                      </tr>
	                        <tr>
	                        <td>Home City</td>
	                        <td>
								<select  name="city" class="cd_editable form-control cd_profileDisabled" disabled>
									<?php
										foreach ($cities as $key => $city) {
									?>
									<option value="<?=$city['id']?>" <?= $city['id']==$userDetails['city_id'] ? 'Selected' : '' ?> ><?=$city['name']?></option>
									<?php
										}
									?>
								</select>
							</td>
	                      </tr>
	                      <tr>
	                        <td>Email</td>
	                        <td><input type="text" class="cd_editable form-control cd_profileDisabled cd_userEmail" value="<?=$userDetails['email']?>" disabled></td>
	                      </tr>
	                        <td>Phone Number</td>
	                        <td><input  name="phone" type="text" class="cd_editable form-control cd_profileDisabled" value="<?=$userDetails['contact']?>" disabled>
	                        </td>
	                      </tr>
	                    </tbody>
	                  </table>
	              	</form>
                </div>
              </div>
            </div>
         	<div class="panel-footer">
                <a data-original-title="Broadcast Message" data-toggle="tooltip" style="visibility:hidden" type="button" class="btn btn-sm btn-primary">Save &nbsp; <i class="glyphicon glyphicon-floppy-disk"></i></a>
                <?php
                	if($isSocial){
                		$call_link = base_url().'Profile/socialeditprofile';
                	} else {
                		$call_link = base_url().'Profile/editprofile';

                	}
                ?>
                <span class="pull-right">
                    <a href="javascript:void(0)" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger cd_editUserProfile cd_editModeOn">Edit &nbsp; <i class="glyphicon glyphicon-edit"></i></a>
                    <a href="javascript:void(0)" frm_id="frm_profile" call_link="<?php echo $call_link; ?>" data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary cd_closeUserProfile frm_submit">Save &nbsp; <i class="glyphicon glyphicon-floppy-disk"></i></a>
                </span>
            </div>
          </div>
        </div>
      </div>
	  
	  
	  
	  
	  
	  	
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-lg-12" >
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Course Details</h3>
            </div>
            <div class="panel-body">
              <div class="row">
              	<?php
              		//var_dump($studentCourse);
              		foreach ($studentCourse as $key => $course) {
              	?>
			   	<div class="col-lg-12">
			   		<div class="row">
					 	<div class="col-xs-12 col-sm-12 col-lg-12" >
					     <div class="panel panel-success">
					        <div class="panel-heading">
					          <h3 class="panel-title cd_courseProfileInfoCourseName"><?=$course['name']?></h3>
					        </div>
					        <div class="panel-body">
					          <div class="row">
					         	<div class="col-lg-12"> 
									<div class="row">
									  <div class="col-lg-9">
										<div class="cd_courseProfileInfo">
											
											<div class="cd_courseProfileInfoInstituteName">
												<?=$course['institute']['name']?>
											</div>
											<div class="cd_courseProfileInfoLocation">
												<?=$course['institute']['address']?>
											</div>
											
										</div>
									  </div>
									  <div class="col-lg-3">
										
									  </div>
								  </div>
					            </div>
					          </div>
					        </div>
					        <div class="panel-footer">
					                <a data-original-title="Broadcast Message" data-toggle="tooltip" class="btn my_cdStatus">
									
									<div class="cd_courseProfileInfoStatus">
										<?php
											$course_status = ($course['is_completed'] == 1) ? 'Completed' : 'Incomplete';
										?>
										Status : <span><?=$course_status?></span>
									</div>
									
									</a>
					                <span class="pull-right">
					                    <a href="javascript:void(0)" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-info">Receipt &nbsp;<i class="glyphicon glyphicon-download-alt"></i></a>
					                    <a href="<?=$course['syllabus']?>" data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-info cd_closeUserProfile">Syllabus &nbsp; <i class="glyphicon glyphicon-download-alt"></i></a>
					                </span>
					        </div>
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
      </div>
    
	  
	  
    
			</div>
			
			<!-- Ads area starts -->
			<div class="col-md-3 hidden-sm hidden-xs">
					<div class="cd_ads">
						<div class="cd_adsInner">
						
							
						
							<div class="cd_adsTitle">
								<h3>
								Recently Viewed
								</h3>
							</div>
							
							<div class="cd_adsContent">
								<ul class="cd_adsList">
									<li>
										<div class="cd_adsBox">
											<div class="cd_adsBoxImg">
												<img src="<?php echo base_url(); ?>assets/img/services2.jpg" class="img-responsive">
											</div>
											<div class="cd_adsBoxText">
												Envision Institute
											</div>
										</div>
									</li>
									
									<li>
										<div class="cd_adsBox">
											<div class="cd_adsBoxImg">
												<img src="<?php echo base_url(); ?>assets/img/services2.jpg" class="img-responsive">
											</div>
											<div class="cd_adsBoxText">
												Envision Institute
											</div>
										</div>
									</li>
									
									
									<li>
										<div class="cd_adsBox">
											<div class="cd_adsBoxImg">
												<img src="<?php echo base_url(); ?>assets/img/services2.jpg" class="img-responsive">
											</div>
											<div class="cd_adsBoxText">
												Envision Institute
											</div>
										</div>
									</li>
									
									
									<li>
										<div class="cd_adsBox">
											<div class="cd_adsBoxImg">
												<img src="<?php echo base_url(); ?>assets/img/services2.jpg" class="img-responsive">
											</div>
											<div class="cd_adsBoxText">
												Envision Institute
											</div>
										</div>
									</li>
									
									
									
								</ul>
							</div>
							
						</div>
					</div>
				</div>
			<!-- Ads area ends -->
			
				
				
				
			
			
			<!-- section area ends -->
			
			
			
			</div>
			
			
		
	        </div>
	    </div>