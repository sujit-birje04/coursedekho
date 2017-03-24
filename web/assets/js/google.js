
(function(){
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/client.js?onload=onLoadCallback';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
})();


function googleLogout() {
    gapi.auth.signOut();
    location.reload();
}

function googleLogin() {
  var myParams = {
    'clientid' : '397961837685-2eil1uvp6gh8pni2j3m0cikmhpj3eq3t.apps.googleusercontent.com',
    'cookiepolicy' : 'single_host_origin',
    'callback' : 'loginCallback',
    'approvalprompt':'force',
    'scope' : 'https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/plus.profile.emails.read'
  };
  gapi.auth.signIn(myParams);
}
 
function loginCallback(result) {

    if(result['status']['signed_in']){
        var request = gapi.client.plus.people.get({
            'userId': 'me'
        });
        request.execute(function (resp){    
            //console.log(resp);         
            var first_name = resp.name.givenName;
            var last_name = resp.name.familyName;
            var email = resp.email;
            var email = '';
            if(resp['emails'])
            {
                for(i = 0; i < resp['emails'].length; i++)
                {
                    if(resp['emails'][i]['type'] == 'account')
                    {
                        email = resp['emails'][i]['value'];
                    }
                }
            }

            var oauth_provider = 'google';
            var oauth_uid = resp.id;
            var gender = resp.gender;
            var locale = resp.language;
            var link = resp.url;
            var picture = resp.image.url;
            var call_link = $("#social_url").val();
            var id = '';
            //alert(oauth_uid);
            //console.log(JSON.stringify(resp));
            doSocialLogin(id, first_name, last_name, email, oauth_provider, oauth_uid,gender,locale,link,picture,call_link);
        });
 
    }
 
}

function onLoadCallback(){
    gapi.client.setApiKey('AIzaSyCyoinFBkvUQFN-nODBR8563p-105zMA_o');
    gapi.client.load('plus', 'v1',function(){});
}