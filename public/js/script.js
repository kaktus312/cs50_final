$(window).load(function(){
	$('.slider')._TMS({
		preset:'diagonalFade',
		easing:'easeOutQuad',
		duration:800,
		pagination:true,
		slideshow:6000
	});
});

// execute when the DOM is fully loaded
$("document").ready(function(){
    // get DOM node in which map will be instantiated
    var canvas = $("#map-canvas").get(0);
    // instantiate map
    if (canvas){
        // styles for map
	    // https://developers.google.com/maps/documentation/javascript/styling
	    var styles = [
	        // hide Google's labels
	        {
	            featureType: "all",
	            elementType: "labels",
	            stylers: [
	                {visibility: "on"}
	            ]
	        },

	        // hide roads
	        {
	            featureType: "road",
	            elementType: "geometry",
	            stylers: [
	                {visibility: "off"}
	            ]
	        }
	    ];

	    // options for map
	    // https://developers.google.com/maps/documentation/javascript/reference#MapOptions
	    var point={lat: 47.1334, lng: 37.5785};

	    var options = {
	        center: point, // Mariupol' 
	        disableDefaultUI: true,
	        mapTypeId: google.maps.MapTypeId.ROADMAP,
	        maxZoom: 16,
	        panControl: true,
	        styles: styles,
	        zoom: 11,
	        zoomControl: true
	    };
		
		map = new google.maps.Map(canvas, options);
    	var marker = new google.maps.Marker({
		    position: point,
		    map: map,
		    title: 'Kaktus Studio'
		});
		
    }

	var timerId=null;
	//form check
	$(document).on("click", "button[type=submit]", function formCheck(e){
		var btn=e.target;
		var form=$(btn).parents("form");
		var url = $(form).attr("action");
		var inputs=$("input[required], textarea[required]", form);
		var msg = [];
		inputs.each(function(){
			var fVal=$(this).val();
			var fLbl = $(this).siblings("label");
			var fName = $(fLbl).html();
			if (fVal=="") {	
	
				if (fName) 
					msg.push("Поле '"+fName+"' должно быть заполнено");
				else 
					msg.push("Не все обязательные поля формы заполнены");

			} else if ($(this).attr("type")=="email"){
				var matches = fVal.match(/^[-._a-z0-9]+@(?:[a-z0-9][-a-z0-9]+\.)+[a-z]{2,6}$/i);
				if (!matches) {
					if (fName) 
						msg.push("Поле '"+fName+"' должно содержать корректный e-mail");
					else 
						msg.push("Введите корректный email");
				}
			} else if (($(this).attr("type")=="password") ){
				if ((fVal!=$("#confirm", form).val()) && $(this).attr("name")=="pass"){
					msg.push("Пароль в поле '"+fName+"' не совпадает с проверочным");
				}
				if ((fVal!=$("#pass", form).val())  && $(this).attr("name")=="confirm"){
					msg.push("Пароль в поле '"+fName+"' не совпадает с основным");
				}
			}	
		});

		if (msg.length!=0){
			var jsonMsg=JSON.stringify({"msg":{"class":"error", "txt":msg}});
			fillMsg(jsonMsg);
			return false;
		} else {
			$("#msg").removeClass("error visible").hide();
			var req   = $(form).serialize();
			$.post( $(form).attr("action"), req, function( res ) {
				//console.log(res);
				if (res) {
					fillMsg(res);
					//$(form).trigger("reset");
				}
			});
			//$(form).submit();
			return true;
		}
		
	});

	function fillMsg(msg){
		console.log(msg);
		var resp = JSON.parse(msg);
		console.log(resp.msg);
		var list="";
		$(".content", "#msg").empty();
		if (resp.msg){
			list=document.createElement("ul");
			for (var i=0; i<resp.msg.txt.length; i++){
				var item = document.createElement("li");
				var txt = document.createTextNode(resp.msg.txt[i]);
				item.appendChild(txt);
				list.appendChild(item);
			}
			$("#msg").removeClass("error").removeClass("info").addClass(resp.msg.class);
		}
		$(".content", "#msg").append(list);
		$("#msg").show();
		var redir=null;
		if (resp.msg.nUrl) {
			redir=resp.msg.nUrl;
			//return true;
		}
		timerStart("#msg", redir);
		return false;
	}
	
	$("#msg").mouseenter(function(){
		clearTimeout(timerId);	
	});
	
	$("#msg").mouseleave(function(){
		timerStart("#msg");
	});
	
	function timerStart(el, redir){
		timerId = setTimeout(function() { 
			$(el).hide(); 
			console.log(redir);
			if (redir){
				window.location=redir;	
			}
		}, 3000);	
	}
	
	//alert close
	$("#msg >.glyphicon-remove").click(function(e){
		$(e.target).parent("#msg").removeClass("visible").hide();
	});
	
	//tabs
	$("li", ".tabs").click(function(e){
		var tab=e.target;
		var url = $(tab).data("url");
		var data = $(tab).data("target");
		$(tab).parent(".tabs").find(".active").removeClass("active");
		$(tab).addClass("active");
		console.log(url, data);
//		alert(data);
		$.post( url, {"q":data}, function( res ) {
			$( ".tabsContent" ).html( res );
		});
	});
	
	//загрузка в модальное окно админки и динамическое определение события после загрузки контента с помощью ajax
	$(document).on("click", ".modalCaller", function (){
		var formID=$(this).data("form");
		var modalID=$(this).data("modal");
		var url=$(this).data("url");
		var popup=$(".content", ".popup");
		console.log(formID, modalID, url, popup);
		$.post( url, {"q":formID}, function( res ) {
			$(popup).empty().html( res );
			window.location="#win1";//эмуляция нажатия ссылки для показа модального окна
		});
	});
	
});


