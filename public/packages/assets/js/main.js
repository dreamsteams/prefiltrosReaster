window.onload = function(){

}
$(document).ready(function(){
	
	setTimeout(function(){
		$('body').addClass('loaded');
		$('#mdb-preloader').fadeOut("slow");
	}, 3000);

	$(".ancla>a").click(function(ev){
		ev.preventDefault();
		var href = $(this).attr("href");
		
        if(document.location.pathname!=="/")
        	document.location = "/"+href;
        else
        	$('html,body').animate({scrollTop:$(href).offset().top-95},1000);
	});

	$("#frm-login").submit(function(e){
		$btn     = $("#frm-login button[type='submit']");
		var html = $btn.html();
		$btn.html("<i class='fa fa-spinner fa-pulse'></i>");
		$btn.prop("disabled",true);
		e.preventDefault();
		$.ajax({
			url:'/login',
			type:"POST",
			dataType:"JSON",
			data:$("#frm-login").serialize()
		}).done(function(r){
			console.log(r);
			if(r.status==200){
				document.location = "/categorias-admin";
			}else{
				Prefiltros.noty.warning("EL nombre de usuario y/o contraseña son incorrectos","Ups");
			}
		}).fail(function(error){
			console.error(error);
		}).always(function(response){
			$btn.html(html);
			$btn.prop("disabled",false);
		});
	});



});