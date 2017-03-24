$(document).ready(function(){

	$('.cd_editUserProfile').click(function(){
			if($(this).hasClass('cd_editModeOn'))
			{
				$('.cd_editable').removeClass('cd_profileDisabled')
				$('.cd_editable').attr('disabled', false);
				$(this).html('Cancel &nbsp; <i class="glyphicon glyphicon-remove-circle"></i>')
				$('.cd_userEmail').addClass('cd_profileDisabled')
				$('.cd_userEmail').attr('disabled', true);
				$(this).removeClass('cd_editModeOn')
			}
			else
			{
				$(this).addClass('cd_editModeOn')
				$(this).html('Edit &nbsp; <i class="glyphicon glyphicon-edit"></i>')
				$('.cd_editable').addClass('cd_profileDisabled')
				$('.cd_editable').attr('disabled', true);
			}
		if($('.cd_editable').hasClass('cd_profileDisabled'))
		{
			
		}
		else
		{
			
		}
	});
	
	
	
	
	
	
	$('.cd_locateMeBtn').click(function(){
		$('#cd_MyLocation').modal('show');
	})

	$('.cd_homeAdvanceSearch').click(function(){
		$(this).slideUp();
		$('.cd_homeSearchAdvanceTab').slideDown();
	})
	
	$('.cd_comparePrice').click(function(){

		var max=0;
		var maxID=0;
		$('.cd_compareAreaBox').removeClass('cd_bestByCategory')
		
		$('.cd_compareAreaBox').each(function(index,el){
			if(index == 0)
			{
				max=$(el).find('.searchPrice').data('price');
				return false;	
			}
		})
		
		//console.log(max)
		
		$('.cd_compareAreaBox').each(function(index,el){
			if(max >= $(el).find('.searchPrice').data('price'))
			{
				max =$(el).find('.searchPrice').data('price');

				maxID=index;
			}
		})
		// console.log(max)
		// console.log(maxID)
		$('.cd_compareAreaBox').each(function(index,el){
			if(index == maxID)
			{
				$(el).addClass('cd_bestByCategory')
			}
		})
		
		
		
		
		
	})
	
	
	
	$('.cd_compareDuration').click(function(){
		
		
		var max=0;
		var maxID=0;
		$('.cd_compareAreaBox').removeClass('cd_bestByCategory')
		
		$('.cd_compareAreaBox').each(function(index,el){
			if(index == 0)
			{
				max=$(el).find('.searchDuration').data('duration');
				return false;	
			}
		})
		
		//console.log(max)
		
		$('.cd_compareAreaBox').each(function(index,el){
			if(max >= $(el).find('.searchDuration').data('duration'))
			{
				max =$(el).find('.searchDuration').data('duration');

				maxID=index;
			}
		})
		// console.log(max)
		// console.log(maxID)
		$('.cd_compareAreaBox').each(function(index,el){
			if(index == maxID)
			{
				$(el).addClass('cd_bestByCategory')
			}
		})
		
		
		
		
	})
	
	
	$('.cd_compareRating').click(function(){
		var max=0;
		var maxID=0;
		$('.cd_compareAreaBox').removeClass('cd_bestByCategory')
		$('.cd_compareAreaBox').each(function(index,el){
			if(max <= $(el).find('.searchRating').data('rating'))
			{
				max =$(el).find('.searchRating').data('rating');

				maxID=index;
			}
		})
		// console.log(max)
		// console.log(maxID)
		$('.cd_compareAreaBox').each(function(index,el){
			if(index == maxID)
			{
				$(el).addClass('cd_bestByCategory')
			}
		})
	})
	
	$('.cd_compareDistance').click(function(){
		var max=0;
		var maxID=0;
		$('.cd_compareAreaBox').removeClass('cd_bestByCategory')
		
		$('.cd_compareAreaBox').each(function(index,el){
			if(index == 0)
			{
				max=$(el).find('.searchDistance').data('distance');
				return false;	
			}
		})
		
		//console.log(max)
		
		$('.cd_compareAreaBox').each(function(index,el){
			if(max >= $(el).find('.searchDistance').data('distance'))
			{
				max =$(el).find('.searchDistance').data('distance');

				maxID=index;
			}
		})
		// console.log(max)
		// console.log(maxID)
		$('.cd_compareAreaBox').each(function(index,el){
			if(index == maxID)
			{
				$(el).addClass('cd_bestByCategory')
			}
		})
	})
	
	/*$('.cd_actionButtonBookDemo').click(function(){
		$('.cd_actionButtonBookDemoArea').addClass('cd_slideUpActiveArea')
	})
	$('.cd_actionButtonSendMessage').click(function(){
		$('.cd_actionButtonSendMessageArea').addClass('cd_slideUpActiveArea')
	})
	$('.cd_actionButtonArrangeCallBack').click(function(){
		$('.cd_actionButtonArrangeCallBackArea').addClass('cd_slideUpActiveArea')
	})
	
	$('.cd_closeActiveArea').click(function(){
				$('.cd_actionButtonActionArea').removeClass('cd_slideUpActiveArea')

	});*/
	
	$('.cd_callModelFunction').click(function(){
		var temp_modelName=$(this).data('model-name');
		$(temp_modelName).modal('show')
	});
	$('.cd_forgotPassword').click(function(){
		$('.cd_loginModelInner').slideUp(250,function(){
			$('.cd_loginModelInnerForgotPassword').slideDown();
		})
	});
	
	$('.cd_loginModelInnerForgotPasswordBack').click(function(){
		$('.cd_loginModelInnerForgotPassword').slideUp(250,function(){
			$('.cd_loginModelInner').slideDown();
		})
	})
	
	
	
	$('.cd_loginModelInnerForgotPasswordSubmit').click(function(){
		
		$('.cd_loginModelInnerForgotPassword').slideUp(250,function(){
			$('.cd_loginModelInnerForgotPasswordThankYou').slideDown();
		})
	})


	$('.cd_loginModelBTN').click(function(){
		
		/*
		$('.cd_loginModelInnerForgotPassword').slideUp(250,function(){
			$('.cd_loginModelInnerForgotPasswordThankYou').slideDown();
		})
		*/
		var frm_id = $(this).attr("frm_id");
		var call_link = $(this).attr("call_link");
		login(frm_id, call_link);
	})

	

	$('.cd_logoutModelBTN').click(function(){
		var call_link = $(this).attr("call_link");
		performLink(call_link);
		//googleLogout();
		//fbLogout();
	})

	$('.frm_submit').click(function(){
		var frm_id = $(this).attr("frm_id");
		var call_link = $(this).attr("call_link");
		submitForm(frm_id, call_link);
	})

	$('.btn-facebook-login').click(function(){
		fbLogin();
	})

	$('.btn-google-login').click(function(){
		googleLogin();
	})


	

	
	
	$('.cd_loginModelInnerForgotPasswordResend').click(function(){
		$('.cd_loginModelInnerForgotPasswordThankYou').slideUp(250,function(){
			$('.cd_loginModelInnerForgotPassword').slideDown();
		})
	})
	
	
	$('.cd_signupModelSubmitButton').click(function(){
		$('.cd_signupModelInner').slideUp(250,function(){
			$('.cd_signupModelInnerCreatePassword').slideDown();
		})
	})
	
	$('.cd_loginModelInnerForgotPasswordResendChangeNumber').click(function(){
		$('.cd_signupModelInnerCreatePassword').slideUp(250,function(){
			$('.cd_signupModelInner').slideDown();
		})
	})
	
	$('.cd_loginModelInnerForgotPasswordResendChangeNumber').click(function(){
		
	})

	function login(frm_id, call_link){
	    var form = $('#'+frm_id);
	    $.ajax({
	      type: "POST",
	      url: call_link,
	      data: form.serialize(),
	      success: function( response ) {
	        var outArr = JSON.parse(response);
	        if(outArr.isUserLoggedIn){
	        	console.log("success");
	        	location.reload();
	        } else {
	        	console.log("Error");

	        }
	      },
	      error: function(response) {
	      	alert("Error");	
	      }
	    });
	}

	
	function submitForm(frm_id, call_link){
	    var form = $('#'+frm_id);
	    $.ajax({
	      type: "POST",
	      url: call_link,
	      data: form.serialize(),
	      success: function( response ) {
	        var outArr = JSON.parse(response);
	        if(outArr.status){
	        	console.log("success");
	        	location.reload();
	        } else {
	        	console.log("Error");

	        }
	      },
	      error: function(response) {
	      	alert("Error");	
	      }
	    });
	}
	
	
	function performLink(call_link){
	    $.ajax({
	      type: "POST",
	      url: call_link,
	      success: function( response ) {
	        var outArr = JSON.parse(response);
	        if(outArr.status){
	        	console.log("success");
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

	
	
})