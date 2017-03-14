
  <body>
  

        <!-- Register overlay --> 
    <div class="modal fade bs-example-modal-sm" id="cd_registerModel" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
        <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Register your Institute</h4>
              </div>
              <div class="modal-body">
              <div class="form-group">
              <label> Institute name </label>
              <input type="text" class="cd_plainTextBox" placeholder="" aria-describedby="basic-addon1">
            </div>
        
            <div class="form-group">
              <label>Your Full Name</label>
              <input type="text" class="cd_plainTextBox" placeholder="" aria-describedby="basic-addon1">
            </div>
        
            <div class="">
              <label>Email</label>
              <input type="email" class="cd_plainTextBox" placeholder="" aria-describedby="basic-addon1">
            </div>
            <br>
            <button type="button" class="cd_plainButton">Register </button>
              </div>
          </div><!-- /.modal-content -->
        </div>
    </div> 
   
   
   
    <!-- Login overlay -->
    <div class="modal fade bs-example-modal-sm" id="cd_loginModel" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
        <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Login</h4>
                </div>
              <div class="modal-body">
            <div class="cd_loginModelInner">
                  <div class="input-group form-group">
                <label> Username </label>
                <input type="text" class="cd_plainTextBox" placeholder="" aria-describedby="basic-addon1">
              </div>
              
              <div class="input-group">
                <label> Password </label>
                <input type="password" class="cd_plainTextBox" placeholder="" aria-describedby="basic-addon1">
              </div>
        
              <a class="cd_forgotPassword"> Forgot Password ? </a>
              <br>
              <button type="button" class="cd_plainButton">Login</button>
                
                <div class="startup_signupFormDetailBreak">
                <div class="startup_signupFormDetailBreakText">
                  OR
                </div>
              </div>
              <div class="social-login cd_homeSocialLogin">
                <div class="social-login-buttons">
                  <a href="#" class="btn-facebook-login">Login with Facebook</a>
                  <a href="#" class="btn-twitter-login">Login with Google</a>
                </div>
              </div>
            </div>
      
            <div class="cd_loginModelInnerForgotPassword" style="display:none">
              <div class="form-group">
                <label>Enter your registered Email </label>
                <input type="text" placeholder="" class="cd_plainTextBox" placeholder="" aria-describedby="basic-addon1">
              </div>
              <div class="form-group">
                <button type="button" class="cd_plainButton cd_loginModelInnerForgotPasswordSubmit">Submit</button>
              </div>
              
              <div class="form-group text-center">
                <a class="cd_loginModelInnerForgotPasswordBack" href="javascript:void(0)">Back</a>
              </div>
            </div>
      
      
              <div class="cd_loginModelInnerForgotPasswordThankYou" style="display:none">
              <div class="form-group">
                <label>Please check your email.<br> Didn't received mail...?   <a class="cd_loginModelInnerForgotPasswordResend" href="javascript:void(0)">Resend</a></label>
              </div>
              <div class="form-group text-right">
                <button type="button" class="btn btn-default" data-dismiss="modal">Okay</button>
              </div>  
            </div>
              </div>
            </div><!-- /.modal-content -->
        </div>
    </div> 
    
  
  
    <!-- sign-up overlay -->
    
    <div class="modal fade bs-example-modal-sm" tabindex="-1" id="cd_signupModel" role="dialog" aria-labelledby="mySmallModalLabel">
        <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Sign up</h4>
              </div>
              <div class="modal-body">
              <div class="cd_signupModelInner">
              <div class="form-group">
                <label> Full Name </label>
                <input type="text" class="cd_plainTextBox" placeholder="" aria-describedby="basic-addon1">
              </div>
              
              <div class="form-group">
                <label>Email</label>
                <input type="email" class="cd_plainTextBox" placeholder="" aria-describedby="basic-addon1">
              </div>
        
              <div class="form-group">
                <label> Contact Number </label>
                <input type="number" class="cd_plainTextBox" placeholder="" aria-describedby="basic-addon1">
              </div>

              <p class="cd_noteP">(we will send verification code to this number)</p>
              <br>
              <button type="button" class="cd_plainButton cd_signupModelSubmitButton">Sign Up</button>
              <div class="startup_signupFormDetailBreak">
                <div class="startup_signupFormDetailBreakText">
                  OR
                </div>
              </div>
              <div class="social-login cd_homeSocialLogin">
                <div class="social-login-buttons">
                  <a href="#" class="btn-facebook-login">Sign up with Facebook</a>
                  <a href="#" class="btn-twitter-login">Sign up with Google</a>
                </div>
              </div>
              </div>
            <div class="cd_signupModelInnerCreatePassword" style="display:none"> 
              <div class="input-group form-group" style=" margin-bottom: 20px;">
                <input type="text" class="form-control" placeholder="Enter OTP" aria-describedby="sizing-addon4">
                <span class="input-group-addon" id="sizing-addon4">
                  <span class="glyphicon glyphicon-ok"></span>
                </span> 
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="col-xs-5 cd_noPadding text-left">
                     <a class="cd_loginModelInnerForgotPasswordResend" href="javascript:void(0)">Resend OTP</a>
                  </div>
                  <div class="col-xs-7 cd_noPadding text-right">
                     <a class="cd_loginModelInnerForgotPasswordResendChangeNumber" href="javascript:void(0)">Change Number</a>
                  </div>
                </div>
              </div>
              <hr>
              
              <div class="cd_loginModelInnerCreatePassword">
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Enter Password" aria-describedby="basic-addon1" readonly>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Re-enter Password" aria-describedby="basic-addon1" readonly>
                </div>
                <div class="form-group">
                  <button type="button" class="cd_plainButton cd_loginModelInnerForgotPasswordSubmit">Submit</button>
                </div>
              </div>
            </div>
              </div>
            </div><!-- /.modal-content -->
        </div>
    </div>  
    <div class="loader"></div>

    <div id="myDiv">
    <!--HEADER-->
    <div class="header">
      <div class="bg-color">
          <!-- Navigation & Logo-->
          <header id="main-header">
            <nav class="navbar navbar-default cd_homeFixedNav">
              <div class="container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/img/mPurpose-logo.png" class="img-responsive cd_Logo"></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                  <ul class="nav navbar-nav">
                    <li class="#"><a href="#" style="visibility:hidden">hiden</a></li>
                    <li><a href="<?php echo base_url(); ?>institutes">Institute</a></li>
                    <li><a href="<?php echo base_url(); ?>contactus">Contact Us</a></li>
                    <li><a href="<?php echo base_url(); ?>aboutus">About</a></li>  
                  </ul>
                  
                  <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pune <span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="javascript:void(0)">Change</a></li>
                      </ul>
                    </li>
                    <li class=""><a href="JavaScript:void()"  data-toggle="modal" data-target="#cd_registerModel">Register your Institute</a></li>
                    <li class=""><a href="JavaScript:void()"  data-toggle="modal" data-target="#cd_signupModel">SignUP</a></li>
                    <li class=""><a href="JavaScript:void()"  data-toggle="modal" data-target="#cd_loginModel">Login</a></li>
                  </ul>
                </div>
              </div>
            </nav>
          </header>
          
          <?php
            if($this->router->fetch_class() == 'home'){
          ?>
          <div class="wrapper cd_homeWrapper">
            <div class="container">
                <div class="row_">
                  <div class="banner-info text-center">
                      <h2 class="bnr-sub-title">Find. Compare. Decide</h2>
                <!--<h1 class="bnr-title">Tell us the training course you need  </h1>-->
                <div class="row">
                  <div class="col-xs-6 col-xs-offset-3">
                  <div class="input-group">
                      <input type="text" class="form-control cd_homeSearch" placeholder="Ex. php, Java, Autocad..." aria-describedby="basic-addon1">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
                  </div>
                  </div>
                  <div class="col-xs-3">
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-6 col-xs-offset-3">
                    <div class="row">
                    <div class="cd_homeAdvanceSearchOuter">
                      <div class="cd_homeAdvanceSearch">
                        Advance Search
                      </div>
                    </div>
                      <div class="cd_homeSearchAdvanceTab" style="display:none;">
                      <div class="col-sm-6">
                        <select class="form-control cd_whiteBG cd_homeSelect cd_homeSelectCategory">
                          <option> Category </option>
                          <option> Category 1 </option>
                          <option> Category 2</option>
                          <option> Category 3</option>
                        </select>
                      </div>
                      <div class="col-sm-6">
                        <select class="form-control cd_whiteBG cd_homeSelect cd_homeSelectLocality">
                          <option> Locality </option>
                          <option> Category 1 </option>
                          <option> Category 2</option>
                          <option> Category 3</option>
                        </select>
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="overlay-detail">
                  <a href="javascript:void(0)" class="page-scroll"><i class="fa fa-angle-down"></i></a>
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
    <!--/ HEADER-->


