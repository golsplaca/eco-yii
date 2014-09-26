function viewError(code, msg){
	if($('#alertMsg').attr("data") != 1){
		var alertErro = '<div id="alertMsg" data="1" class="alert '+code+'"'+ 
		 				'style="display:none; text-align:center; position: '+
		 				'fixed !important;z-index: 100000 !important;'+
		 				'margin: 0px; border-radius: 0px; position: absolute; z-index: 100000;'+
						'font-size: 14px;'+
						'height: 45px;'+
		 				'width:100%">'+msg+'</div>';
		$('body').before(alertErro);
	}else{
		$('#alertMsg').removeClass('alert-danger alert-success').addClass(code);
		$('#alertMsg').text(msg);
	}

	$('#alertMsg').fadeIn('slow', function(){
		$('#alertMsg').delay(4000).fadeOut('slow');
	});
}