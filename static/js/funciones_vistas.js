// 
// VISTA INICIO
if ($("#inicio").length > 0) {
    $(document).on("click","#btn_start", function(e){
        // elemento objetivo
        let elemento = $("#scroll_servicio");
        // animacion
        $('html, body').animate({
	        scrollTop: elemento.offset().top - 85
	    }, 500);
    });
}
// 
// VISTA DETALLES
if ($(".wrap_head_titulo").length > 0) {
	$(document).on('scroll', function(){
		var altura = $(".wrap_head_titulo").height() - 50;
		var menu = $("#menu_animacion");
		if (window.scrollY > altura){
	        menu.addClass("move");
	    }else{
	        menu.removeClass("move");
	    }
	});
}