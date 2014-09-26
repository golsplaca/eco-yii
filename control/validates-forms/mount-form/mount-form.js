//$('head').append('<script src="inc_library/validates-forms/js/jquery.mask.js" type="text/javascript"></script>');
function cssUser(){
	    
	//$('form').append('<link href="inc_library/validates-forms/css/bootstrap-datetimepicker.min.css" rel="stylesheet">');

}

function useForm(){	
		$('.contentNgView').append('<script src="inc_library/validates-forms/js/jquery.validate.js" type="text/javascript"></script>');
		$('.contentNgView').append('<link href="inc_library/validates-forms/css/validates.css" type="text/css" media="screen" rel="stylesheet" />');
}

$( document ).ready(function() {
	useForm();
    //mount input type text -------------------------------------------------------------
	var myElement = $(".inputDate");
	myElement.each(function( index ){ 	
		ngmodel    =  $(this).attr('ng-model');
		label 		=  $(this).attr('data-label');
		name  		=  $(this).attr('data-name');
		id    		=  $(this).attr('data-id');
		clas 	    =  $(this).attr('data-class');
		placeholder =  $(this).attr('data-span');
		key         =  $(this).attr('data-key');
		minlength   =  $(this).attr('minlength');
		maxlength   =  $(this).attr('maxlength');
		input = '<div class="input-group date '+key+'" >';
        input += '<input type="text" placeholder="'+placeholder+'"  class="form-control '+clas+'" name="'+name+'" id="'+id+'"'; 
        input += 'data-format="DD/MM/YYYY" /><span style="display:none;">'+placeholder+'</span>';
        input += '<ston class="input-group-addon">';
        input += '<ston class="glyphicon glyphicon-calendar"></ston>';
        input += '</ston></div>';
	    $(this).html(input);
		inputDate(key);
	});

    //mount input type text -------------------------------------------------------------
	var myElement = $(".inputText");
	myElement.each(function( index ){ 	
		label 		=  $(this).attr('data-label');
		name  		=  $(this).attr('data-name');
		id    		=  $(this).attr('data-id');
		clas 	    =  $(this).attr('data-class');
		placeholder =  $(this).attr('data-span');
		format      =  $(this).attr('data-format');
		minlength   =  $(this).attr('minlength');
		maxlength   =  $(this).attr('maxlength');
		ngmodel    =  $(this).attr('ng-model');
	    var input = '<label>'+label+':</label>'+
	        		'<input type="text"';
	        		if(ngmodel){ input += 'ng-model="'+ngmodel+'"'; }
	        		input += 'name="'+name+'" id="'+id+'" class="form-control '+clas+
	        		'"value="" minlength="'+minlength+'" maxlength="'+maxlength+'" />'+
	        		'<span style="display:none;">'+placeholder+'</span>';	
	    if(format){	addMask(id, format); }
	    $(this).html(input);
	});

	//mount input type radio ------------------------------------------------------------
	var myElement = $(".inputRadio");
	myElement.each(function( index ){ 
		ngmodel    =  $(this).attr('ng-model');
		label 		=  $(this).attr('data-label');
		name  		=  $(this).attr('data-name');
		id    		=  $(this).attr('data-id');
		clas 	    =  $(this).attr('data-class');
		placeholder =  $(this).attr('data-span');
		count       =  $(this).attr('data-count-option');
		var input = '<label>'+label+'</label>';
		for (var i = 1; i <= count; i++) {
			input += '<input type="radio" name="'+name+'" value="'+$(this).attr('data-value'+i);
			if(ngmodel){ input += '" ng-model="'+ngmodel+'"'; }
			input += '" id="'+id+'" class="'+clas+'" />'+$(this).attr('data-option'+i)+" ";
		};
	    	input +='<span style="display:none;">'+placeholder+'</span>';	
	    $(this).html(input);
	});

	//mount input type Checkbox ------------------------------------------------------------
	var myElement = $(".inputCheckbox");
	myElement.each(function( index ){ 
		ngmodel    =  $(this).attr('ng-model');
		label 		=  $(this).attr('data-label');
		name  		=  $(this).attr('data-name');
		id    		=  $(this).attr('data-id');
		placeholder =  $(this).attr('data-span');
		count       =  $(this).attr('data-count-option');
		var input = '<label>'+label+':</label>';
		for (var i = 1; i <= count; i++) {
			input += '<input type="checkbox" name="'+name+i+'" value="'+$(this).attr('data-value'+i);
			if(ngmodel){ input += '" ng-model="'+ngmodel+i+'"'; }
			input += '" id="'+id+'" class="'+$(this).attr('data-class'+i)+'" />'+$(this).attr('data-option'+i)+" ";
		};
	    	input +='<span style="display:none;">'+placeholder+'</span>';	
	    $(this).html(input);
	});

	//mount input type Combo ------------------------------------------------------------
	var myElement = $(".inputSelect");
	myElement.each(function( index ){ 
		ngmodel    =  $(this).attr('ng-model');
		label 		=  $(this).attr('data-label');
		name  		=  $(this).attr('data-name');
		id    		=  $(this).attr('data-id');
		clas 	    =  $(this).attr('data-class');
		placeholder =  $(this).attr('data-span');
		count       =  $(this).attr('data-count-option');
		var input = '<label>'+label+':</label>'+
					'<select name="'+name+'" id="'+id+'" class="form-control '+clas+'"';
					if(ngmodel){ input += 'ng-model="'+ngmodel+'"'; }
					input +='><option value="">Selecione um item na lista</option>';
		for (var i = 1; i <= count; i++) {
	        input += '<option select value="'+$(this).attr('data-value'+i)+'">'+
	        			 $(this).attr('data-option'+i)+'</option>';
		};
	    	input +='</select><span style="display:none;">'+placeholder+'</span>';	
	    $(this).html(input);
	});
});

function addMask(id, format){
	$(function() {	
		$('#'+id).mask(format);
	});
}
function inputDate(clas){
    $(function () {
        $('.'+clas).datetimepicker();
    });
}