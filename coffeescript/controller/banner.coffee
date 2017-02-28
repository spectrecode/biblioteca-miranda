app.controller 'bannerCrtl', ['$scope','$location','$timeout',(scope,location,timeout) ->
	$('.fancybox').fancybox()
	$('.fancybox2').fancybox()
	scope.verMenu = (e) ->
		$("#navMovil").toggle("slow");
		## fin de la funcion
		return
	scope.mostrarPopup = () ->
		$("#suscribete").fadeIn("slow")
		return
	scope.ocultarPopup = () ->
		$("#suscribete").fadeOut("slow")
		return
	## fin del controlador
	return
]

app.controller 'desplegarCrtl', ['$scope','$location','$timeout',(scope,location,timeout) ->
	
	scope.desplegarTexto = () ->
		if $("#texto").hasClass("cerrar") == false
			$("#texto").addClass("cerrar")
			$(".inner-energia .filtros").css("width", "100%")
			$(".inner-energia .filtros .mesa").css("width", "100%")
		else
			$("#texto").removeClass("cerrar")
			$(".inner-energia .filtros").css("width", "auto")
			$(".inner-energia .filtros .mesa").css("width", "auto")
		return
	## fin del controlador
	return
]
