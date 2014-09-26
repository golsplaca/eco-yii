// exemplo  useJs('elemento', 'arquivo', 'forms');
function useJs(tag, url, use){

	switch(use){

		case 'forms':
			$(tag).append('<script src="control/validates-forms/mount-form/mount-form.js" type="text/javascript"></script>');
		break;

		case 'Library':
			$('head').append('<script src="control/angular/angular.js" type="text/javascript"></script>');
			$('head').append('<script src="control/angular/angular-route.js" type="text/javascript"></script>');
			$('head').append('<script src="control/angular/loading-bar.min.js" type="text/javascript"></script>');
			$('head').append('<script src="control/angular/angular-animate.js" type="text/javascript"></script>');
			$('head').append('<script src="control/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>');
			$('head').append('<script src="control/angular/ui-bootstrap-tpls-0.11.0.min.js" type="text/javascript"></script>');
		break;

		case 'DragAndDrop':
			$(tag).append('<script src="control/js/library/jquery-2.0.2.js"></script>');
			$(tag).append('<script src="control/js/library/jquery-ui.js"></script>');
			$(tag).append('<script src="control/js/library/jquery.multisortable.js"></script>');
		break;

		case 'calendar':
			$(tag).append('<script src="control/validates-forms/js/moment.js"></script>');
			$(tag).append('<script src="control/validates-forms/js/bootstrap-datetimepicker.min.js"></script>');
		break;

		default:
			$(tag).append('<script src="'+url+'" type="text/javascript"></script>');
	}
}

function useCss(tag, url, use){
	switch(use){
		case 'Library':
			$('head').append('<link rel="stylesheet" type="text/css" href="control/bootstrap/css/bootstrap.css" />');
			$('head').append('<link rel="stylesheet" type="text/css" href="control/css/style.css" />');
		//	$('head').append('');
		break;
		case 'calendar':
			$(tag).append('<link href="control/validates-forms/css/bootstrap-datetimepicker.min.css" rel="stylesheet">');
		break;
		default:
			$(tag).append('<link rel="stylesheet" type="text/css" href="'+url+'" />');
	}
}

	//includes Css ------------------------------------------------------
	useCss('head', 'control/css/loading-bar.css');
	useCss('head', 'control/css/pixel-admin.min.css');
	useCss('head', 'control/css/themes.min.css');
	useCss(null, null, 'Library');

	//includes Js ------------------------------------------------
	useJs('head', 'config.js');

	//library
	useJs(null, null, 'Library');

	//authetication
	useJs('head', 'control/js/authentication/checkUserLogged.js');

	//connection
	useJs('head', 'control/js/connection/connections.js');

	//error
	useJs('head', 'control/js/controller/exception/error.js');
	useJs('head', 'control/js/view/error.js');

	//Controllers
	useJs('head', 'control/js/controller/page/requests.js');
	useJs('head', 'control/js/controller/cookies/cookies.js');
	useJs('head', 'control/js/controller/ng-view.js');
	useJs('head', 'control/js/controller/scope/controller.js');
	useJs('head', 'control/js/controller/page/controller.js');

	//components
	useJs('head', 'control/js/components/breadcrumb.js');

	//action
	useJs('head', 'control/js/action/action.js');
	useJs('head', 'control/js/action/automatic-include.js');

	//validates
	useJs('head', 'control/js/validate/menu.js');
	useJs('head', 'control/js/validate/forms.js');

	//view
	useJs('head', 'control/js/view/view-menu-vertical.js');
	useJs('head', 'control/js/view/view-menu-horizontal.js');

	//adm template
	useJs('head', 'control/js/library/pixel-admin.min.js');
