

$( document ).ready( function ()
{
	document.getElementById('whatispoogle').textContent = `<!-- Orlys aquí tu formulario de login --><!DOCTYPE html><html lang="en" dir="ltr"><head><meta charset="utf-8"><title>Poogle</title></head><body><h1>Inicia sesion</h1></body></html>`; const f = ["Roboto", "Lobster", "Anton", "Fjalla One", "Gugi", "Raleway","Do Hyeon","Pacifico"];const m = ["¿Caracteristicas de la aplicación?", "Me tienen que ayudar con el perfil de usuario... ", "Ah y el responsive.", "¿La imagen tiene COO License?","Escojan las fuentes que vamos a usar, porque los colores lo escogio iván. ","Dale click a Entrar","¿Sólo vas a hacer eso?",".........."];const c = ["#f2f9f3", "#e1e6ef", "#b5fff8", "#ecff77", "#eaeae8", "#ff7f0f","#fcfbf9", "#ff93c2"];const b = ["#212020", "#1c1111", "#0a160b", "#052b2d", "#110107", "#160f0d", "#0e0823", "#3d010a"];let i = 0;window.setInterval(() => {document.getElementById('msg').textContent = m[i];let s = i*10+'px';$('#msg').css({'font-family': f[i], 'background-color': b[i], 'color': c[i], 'padding': `${i*10-5*i}px`});if (i == 7) i=0;i++;}, 1000)
	


	//Aquí empieza el codigo de jquery, pero sé que existe angular animate. 
	$('#toEnter').click(function () 
	{
		if($('.signup').hasClass('active'))
		{
			$('.signup').removeClass('active');
			$('.login').addClass('active');
			$('.signup').fadeOut();
			setTimeout( () => $('.login').fadeIn() , 150)
		}
	});
	$('#toRegister').click(function () 
	{
		if($('.login').hasClass('active'))
		{
			$('.login').removeClass('active');
			$('.signup').addClass('active');
			$('.login').fadeOut();
			setTimeout( () => $('.signup').fadeIn() , 150)
		}
	});
})