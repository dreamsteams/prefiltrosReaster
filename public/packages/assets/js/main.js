window.onload = function(){

}
$(document).ready(function(){
	setTimeout(function(){
		$('body').addClass('loaded');
		$('#mdb-preloader').fadeOut("slow");
	}, 3000);

});