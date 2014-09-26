function mountMenuVertical(data, $scope){
	var menu = '<ul class="navigation" >';				
		$.each(data, function(i, item){
			if(item.submenu){
				menu += '<li class="mm-dropdown mm-dropdown-root" >'+
						'<a href="#" style="color:#fff;"><span class="glyphicon '+item.icon+'"></span>&nbsp;&nbsp;'+ 
						'<span class="mm-text mmc-dropdown-delay animated fadeIn">'+item.label+'</span> </a>';
				menu +=	mountSubMenuVertical(item.itensMenu);
			}else{	
				menu += '<li><a style="color:#f9f9f9;" href="#/'+item.key+'" url="'+item.url+'">'+
						'<span class="glyphicon '+item.icon+'"></span>'+
						'&nbsp;&nbsp;<span class="mm-text mmc-dropdown-delay animated fadeIn">'+
						item.label+'</span></a></li>';
			}
		});
	menu += '</ul>';
	$("#main-menu-inner").append(menu);
	
	var myelemnt = "#main-menu-inner ul.navigation li";

	$(myelemnt+" a").click(function(e){
		var url = $(this).attr("url");
		if(!url){
			//e.preventDefault();
		}else{
			$scope.searchDb(url, $scope.currentPage);
		}	
	});
	$(myelemnt).click(function(e){
		$(myelemnt+".active").removeClass("active");
		$(this).addClass('active');
	});
}

//mount submenu
function mountSubMenuVertical(data, color){
	var submenu = '<ul class="mmc-dropdown-delay animated fadeInLeft" style="">';
	$.each(data, function(i, item){
		if(item.submenu){
			submenu +=  '<li style="z-index:3000;" class="mm-dropdown mm-dropdown-root">'+
						    '<a tabindex="-1" href="#">'+
						    	'<span class="glyphicon '+item.icon+'">'+
						    	'</span>&nbsp;&nbsp;<span class="mm-text">'+item.label+'</span>'+
						    '</a>';
			submenu += mountSubMenuVertical(item.itensMenu);
			submenu +=	'</li>';		
		}else{
			submenu +=  '<li style="display:block;"><a style="color:'+color+'; text-decoration:none;	" href="#/'+item.key+'" url="'+item.url+'">'+
						'<span class="glyphicon '+item.icon+'"></span>'+
						'&nbsp;&nbsp;<span class="mm-text mmc-dropdown-delay animated fadeIn">'+
						item.label+'</span></a></li>';	
		}
	});
	submenu += '</ul></li>';
	return submenu;
}	

function checkActiveMenu(){
	var myelemnt = "#aadgpg ul.navbar-nav";
	var elemento = $(myelemnt +' li a');
	var url_history = '#' + new String(window.location).split('#')[1];

	$(myelemnt+" li.active").removeClass("active");
	
	$.each(elemento, function(i, item) {
		if($(this).attr('href') == url_history){
			teste = $(this).parent().closest('li').addClass("active");
		}
	});
}