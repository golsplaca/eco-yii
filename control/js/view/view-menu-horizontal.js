function mountViewMenuHorizontal(data, $scope){
  var menu = "";
  $.each(data, function(i, item){
    if(item.submenu){ 
      menu += '<li class="dropdown">'+
                    '<a href="#" class="dropdown-toggle user-menu" data-toggle="dropdown">'+
                      '<i class="glyphicon '+item.icon+'"></i>'+
                      '<span>'+item.label+'</span>'+
                    '</a>';
      menu += mountViewSubmenuHorizontal(item.itensMenu);
      menu += '</li>';
    }else{  
      menu += '<li>'+
                    '<a href="#/'+item.key+'" url="'+item.url+'" class="user-menu">'+
                      '<i class="glyphicon '+item.icon+'"></i>'+
                      '<span>'+item.label+'</span>'+
                    '</a>'+
                  '</li>';
    }

  });
  $(".right-navbar-nav").append(menu);
  onClickMenuHorizontal($scope);
}

function mountViewSubmenuHorizontal(data){

  var sub = '<ul id="menuHorizontal" class="navigation dropdown-menu">';

  $.each(data, function(i, item){

    if(item.submenu){
      
      sub += '<li role="presentation" class="divider"></li>'+
              '<li style="z-index:3000;" class="disabled">'+
                '<a>'+
                  '<span class="glyphicon '+item.icon+'">'+
                  '</span>&nbsp;&nbsp;<span class="mm-text">'+item.label+'</span>'+
                '</a>'
      sub += mountSubMenuVertical(item.itensMenu, '#666');
      sub += '<li role="presentation" class="divider"></li>';

    }else{
      sub += '<li><a href="#/'+item.key+'" url="'+item.url+'">';
      if(item.icon.length > 0){
        sub += '<span class="glyphicon '+item.icon+'"></span>';
      }
      sub += '&nbsp;&nbsp;'+item.label+'</a>'+
                 '</li>';
    }

  });

  sub += '</ul>';
  return sub;
}

function onClickMenuHorizontal($scope){
  $(".right-navbar-nav li a").click(function(e){
    var url = $(this).attr("url");
    if($(this).attr("href") == '#/logoff'){
       checkUserLogged(true);
    } 

    if(!url){
      e.preventDefault();
    }else{
     //$scope.searchDb(url, $scope.currentPage);
    } 
  });
}