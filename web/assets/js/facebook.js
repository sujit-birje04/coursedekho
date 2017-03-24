            window.fbAsyncInit = function() {
                // FB JavaScript SDK configuration and setup
                FB.init({
                  appId      : '699329990113390', // FB App ID
                  cookie     : true,  // enable cookies to allow the server to access the session
                  xfbml      : true,  // parse social plugins on this page
                  version    : 'v2.8' // use graph api version 2.8
                });
                
                // Check whether the user already logged in
                FB.getLoginStatus(function(response) {
                    if (response.status === 'connected') {
                        //display user data
                        //if not logged in call this function
                        //var user_id = $("#user_id").val();
                        //if(!empty(user_id)){
                            //getFbUserData();
                        //} 
                    }
                });
            };

            // Load the JavaScript SDK asynchronously
            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));

            // Facebook login with JavaScript SDK
            function fbLogin() {
                FB.login(function (response) {
                    if (response.authResponse) {
                        // Get and display the user profile data
                        getFbUserData();
                    } else {
                       alert('User cancelled login or did not fully authorize.');
                    }
                }, {scope: 'email'});
            }

            // Fetch the user profile data from facebook
            function getFbUserData(){
                FB.api('/me', {locale: 'en_US', fields: 'id,first_name,last_name,email,link,gender,locale,picture'},
                function (response) {
                    //document.getElementById('fbLink').setAttribute("onclick","fbLogout()");
                    //document.getElementById('fbLink').innerHTML = 'Logout from Facebook';
                    //document.getElementById('status').innerHTML = 'Thanks for logging in, ' + response.first_name + '!';
                    //document.getElementById('userData').innerHTML = '<p><b>FB ID:</b> '+response.id+'</p><p><b>Name:</b> '+response.first_name+' '+response.last_name+'</p><p><b>Email:</b> '+response.email+'</p><p><b>Gender:</b> '+response.gender+'</p><p><b>Locale:</b> '+response.locale+'</p><p><b>Picture:</b> <img src="'+response.picture.data.url+'"/></p><p><b>FB Profile:</b> <a target="_blank" href="'+response.link+'">click to view profile</a></p>';
                    //alert(JSON.stringify(response));
                    console.log(response);  
                    var first_name = response.first_name;
                    var last_name = response.last_name;
                    var email = response.email;
                    var oauth_provider = 'facebook';
                    var oauth_uid = response.id;
                    var gender = response.gender;
                    var locale = response.locale;
                    var link = response.link;
                    var picture = response.picture.data.url;
                    var call_link = $("#social_url").val();
                    var id = '';
                    doSocialLogin(id, first_name, last_name, email, oauth_provider, oauth_uid,gender,locale,link,picture,call_link);
                    
                });
            }

            // Logout from facebook
            function fbLogout() {
                FB.logout(function() {
                });
            }


            function doSocialLogin(id, first_name, last_name, email, oauth_provider, oauth_uid,gender,locale,link,picture,call_link){
                $.ajax({
                  type: "POST",
                  url: call_link,
                  data : {
                    id:'',
                    first_name:first_name,
                    last_name:last_name,
                    email:email,
                    oauth_provider:oauth_provider,
                    oauth_uid:oauth_uid,
                    gender:gender,
                    locale:locale,
                    link:link,
                    picture:picture,
                  },
                  success: function( response ) {
                    var outArr = JSON.parse(response);
                    if(outArr.status){
                        console.log(response);
                        location.reload();
                    } else {
                        alert("Error ON LINK");

                    }
                  },
                  error: function(response) {
                    alert("Error"); 
                  }
                });
            }