function errorReporting(code, msg){
    var type = (code != 1)? "alert-danger" :"alert-success";
	viewError(type, msg);
}