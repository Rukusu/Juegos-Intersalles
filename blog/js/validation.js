
/*Funcion guardar solicitud*/
jQuery(function($){
	$('.send_noticia').on('click', function (ev) {
		ev.preventDefault();
		//var form = $("#form_noticia")[0];
		var box = document.getElementById("in_slider").checked;
		var formData = new FormData($('#form_noticia')[0]);
		var myEditor = document.querySelector('#editor')
		var texto = myEditor.children[0].innerHTML;
		formData.append('adjunto', $('input[type=file]')[0].files[0]);
		formData.append('cuerpo',texto);
		formData.append('slider',box);
		var formid = $("#id_noticia").val();
		
		console.log(formData.entries());	
		
		//Verificar si estamos creando una noticia nueva
		if (formid == 0){	
			$.ajax({
				url: "controlador/controladorInsertaNoticia.php",
				type: "POST",
				data: formData,
				cache: false,
				contentType: false,
				processData: false,
				success: function (data) {
					$("#Ventana_Exito").modal('toggle');
				}
			});
		//}
		} else {
			$.ajax({
				url: "controlador/controladorActualizaNoticia.php",
				type: "POST",
				data: formData,
				cache: false,
				contentType: false,
				processData: false,
				success: function (data) {
					$("#Ventana_Exito").modal('toggle');
				}
			});
		}
	});
});



