// exemplo  useJs('elemento', 'arquivo', 'forms');
function useJs(tag, url, use){
      $(tag).append('<script src="'+url+'" type="text/javascript"></script>');
}

function useCss(tag, url, use){
      $(tag).append('<link rel="stylesheet" type="text/css" href="'+url+'" />');
}

//includes css
useCss('head', 'control/bootstrap/css/bootstrap.css');
useCss('head', 'control/css/pixel-admin.min.css');
useCss('head', 'control/css/themes.min.css');

//incluces js
useJs('head', 'config.js');
useJs('head', 'control/js/controller/cookies/cookies.js');
useJs('head', 'control/js/connection/authenticate.js');
useJs('head', 'control/js/controller/exception/error.js');
useJs('head', 'control/js/view/error.js');
useJs('head', 'control/js/authentication/authentication.js');
useJs('head', 'control/js/authentication/checkUserLogged.js');