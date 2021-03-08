jQuery(document).foundation();
jQuery(document).ready(function($){
	var lasImagens = $(".gallery-item .gallery-icon a");
	if(lasImagens.length>0){
		agregar_lightbox(lasImagens);	
	}
	$('.btn-responsive').click(function(){
		var esVisible = $('.mi-menu').is(":visible"); 
		if( $('.mi-menu').is(":visible") ){
		   $('.mi-menu').css("display", "none");
		}else{
		   $('.mi-menu').css("display", "inline-block");
		}
	});
});
function agregar_lightbox(imgs){
	imgs.attr('data-lightbox','img');
	imgs.addClass('miniatura');
}