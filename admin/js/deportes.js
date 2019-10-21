$(document).ready(function(){
	if($('#map').length > 0){
		var map = new GMaps({
			div: '#map',
			lat: 21.15248936717054,
			lng: -101.71130713592908,
			zoom: 17
		});
		function addMarker(lat, lng){
			map.addMarker({
				lat: lat,
				lng: lng
			});
		}
		GMaps.on('click', map.map, function(event){
			var index = map.markers.length;
			var lat = event.latLng.lat();
			var lng = event.latLng.lng();

			$('#latitud').val(lat);
			$('#longitud').val(lng);

			map.removeMarkers();

			addMarker(lat, lng);
		});
		if($('#latitud').val() != '' && $('#longitud').val() != ''){
			addMarker($('#latitud').val(), $('#longitud').val());
			map.setCenter($('#latitud').val(), $('#longitud').val());
			map.setZoom(17);
		}
	}
	if($('#fecha').length > 0){
		$('#fecha').datepicker();
	}
	if($('#hora').length > 0){
		$('#hora').clockpicker({
			placement: 'top',
			align: 'left',
			donetext: 'Listo'
		});
	}
	$('#buscaTorneo').submit(function(event){
		event.preventDefault();
		var request_method = $(this).attr('method');
		var form_data = $(this).serialize();
		$.ajax({
			url : 'torneos_api.php',
			type: request_method,
			data : form_data
		}).done(function(response){
			$('#torneos').html(response);
		});
	});
	$('#nuevoTorneo').submit(function(event){
		event.preventDefault();
		var request_method = $(this).attr('method');
		var form_data = $(this).serialize();
		$.ajax({
			url : 'torneos_api.php',
			type: request_method,
			data : form_data,
			dataType: 'json'
		}).done(function(response){
			if(response.status == 'Success'){
		 		modal({
					type: 'success',
					title: ':)',
					text: response.valor,
					callback: function(result){
						location.reload();
					}
				});
			}else if(response.status == 'Warning'){
				modal({
					type: 'warning',
					title: 'Atención',
					text: response.valor
				});
			}else if(response.status == 'Error'){
				modal({
					type: 'error',
					title: 'Error',
					text: response.valor
				});
			}
		});
	});
	$('#editaTorneo').submit(function(event){
		event.preventDefault();
		var request_method = $(this).attr('method');
		var form_data = $(this).serialize();
		$.ajax({
			url : 'torneos_api.php',
			type: request_method,
			data : form_data,
			dataType: 'json'
		}).done(function(response){
			if(response.status == 'Success'){
		 		modal({
					type: 'success',
					title: ':)',
					text: response.valor
				});
			}else if(response.status == 'Warning'){
				modal({
					type: 'warning',
					title: 'Atención',
					text: response.valor
				});
			}else if(response.status == 'Error'){
				modal({
					type: 'error',
					title: 'Error',
					text: response.valor
				});
			}
		});
	});
	$('#buscaEquipo').submit(function(event){
		event.preventDefault();
		var request_method = $(this).attr('method');
		var form_data = $(this).serialize();
		$.ajax({
			url : 'torneos_api.php',
			type: request_method,
			data : form_data
		}).done(function(response){
			$('#equipos').html(response);
		});
	});
	$('#matricula').keyup(function(){
		$('#delegado').val('');
		if($('#matricula').val().length == 8){
			$.ajax({
				url : 'torneos_api.php',
				type: 'post',
				data : 'action=buscaUsuario&usuario='+$('#matricula').val(),
				dataType: 'json'
			}).done(function(response){
				if(response.status == 'Success'){
					$.each(response.valor,function(k,v){
						$('#delegado').val(v.nombre);
					});
				}else if(response.status == 'Error'){
					modal({
						type: 'error',
						title: 'Error',
						text: response.valor
					});
				}
			});
		}
	});
	$('#nuevoEquipo').submit(function(event){
		event.preventDefault();
		var request_method = $(this).attr('method');
		var form_data = $(this).serialize();
		$.ajax({
			url : 'torneos_api.php',
			type: request_method,
			data : form_data,
			dataType: 'json'
		}).done(function(response){
			if(response.status == 'Success'){
		 		modal({
					type: 'success',
					title: ':)',
					text: response.valor,
					callback: function(result){
						location.reload();
					}
				});
			}else if(response.status == 'Warning'){
				modal({
					type: 'warning',
					title: 'Atención',
					text: response.valor
				});
			}else if(response.status == 'Error'){
				modal({
					type: 'error',
					title: 'Error',
					text: response.valor
				});
			}
		});
	});
	$('#editaEquipo').submit(function(event){
		event.preventDefault();
		var request_method = $(this).attr('method');
		var form_data = $(this).serialize();
		$.ajax({
			url : 'torneos_api.php',
			type: request_method,
			data : form_data,
			dataType: 'json'
		}).done(function(response){
			if(response.status == 'Success'){
		 		modal({
					type: 'success',
					title: ':)',
					text: response.valor
				});
			}else if(response.status == 'Warning'){
				modal({
					type: 'warning',
					title: 'Atención',
					text: response.valor
				});
			}else if(response.status == 'Error'){
				modal({
					type: 'error',
					title: 'Error',
					text: response.valor
				});
			}
		});
	});
	$('#buscaCancha').submit(function(event){
		event.preventDefault();
		var request_method = $(this).attr('method');
		var form_data = $(this).serialize();
		$.ajax({
			url : 'torneos_api.php',
			type: request_method,
			data : form_data
		}).done(function(response){
			$('#canchas').html(response);
		});
	});
	$('#nuevaCancha').submit(function(event){
		event.preventDefault();
		var request_method = $(this).attr('method');
		var form_data = $(this).serialize();
		$.ajax({
			url : 'torneos_api.php',
			type: request_method,
			data : form_data,
			dataType: 'json'
		}).done(function(response){
			if(response.status == 'Success'){
		 		modal({
					type: 'success',
					title: ':)',
					text: response.valor,
					callback: function(result){
						location.reload();
					}
				});
			}else if(response.status == 'Warning'){
				modal({
					type: 'warning',
					title: 'Atención',
					text: response.valor
				});
			}else if(response.status == 'Error'){
				modal({
					type: 'error',
					title: 'Error',
					text: response.valor
				});
			}
		});
	});
	$('#editaCancha').submit(function(event){
		event.preventDefault();
		var request_method = $(this).attr('method');
		var form_data = $(this).serialize();
		$.ajax({
			url : 'torneos_api.php',
			type: request_method,
			data : form_data,
			dataType: 'json'
		}).done(function(response){
			if(response.status == 'Success'){
		 		modal({
					type: 'success',
					title: ':)',
					text: response.valor
				});
			}else if(response.status == 'Warning'){
				modal({
					type: 'warning',
					title: 'Atención',
					text: response.valor
				});
			}else if(response.status == 'Error'){
				modal({
					type: 'error',
					title: 'Error',
					text: response.valor
				});
			}
		});
	});
	$('.grupo select').change(function(){
		$('#roles').html('');
	});
	$('#cargaGrupos').submit(function(event){
		$('#roles').html('');
		event.preventDefault();
		var request_method = $(this).attr('method');
		var form_data = $(this).serialize();
		$.ajax({
			url : 'torneos_api.php',
			type: request_method,
			data : form_data,
			dataType: 'json'
		}).done(function(response){
			if(response.status == 'Success'){
				html = '<form class="bluesteel" id="guardaRoles" method="post"><input type="hidden" name="action" value="guardaRoles"><table align="center" border="1" cellpadding="5" cellspacing="0"><tr><th>Serie</th><th>Jornada</th><th>Local</th><th></th><th>Visitante</th><th>Descansa</th></tr>';
				$.each(response.valor,function(k,v){
					html += '<tr><td align="center">'+v.serie+'</td><td align="center">'+v.jornada+'</td><td align="center">'+v.local+'</td><td>VS</td><td align="center">'+v.visitante+'</td><td>'+v.descansa+'</td></tr>';
				});
				html += '</table><br><div id="json" style="display: none;">'+JSON.stringify(response.valor)+'</div><label class="fourcol"></label><button class="fourcol" type="submit">GUARDAR ROL DE JUEGOS</button><div class="clearfix"></div>';
				html += '</form>';
				$('#roles').html(html);
			}else if(response.status == 'Warning'){
				modal({
					type: 'warning',
					title: 'Atención',
					text: response.valor
				});
			}else if(response.status == 'Error'){
				modal({
					type: 'error',
					title: 'Error',
					text: response.valor
				});
			}
		});
	});
	$(document).on('submit','#guardaRoles',function(event){
		event.preventDefault();
		var request_method = $(this).attr('method');
		$.ajax({
			url : 'torneos_api.php',
			type: request_method,
			data : 'action=guardaRoles&json='+$('#json').html(),
			dataType: 'json'
		}).done(function(response){
			if(response.status == 'Success'){
				modal({
					type: 'success',
					title: ':)',
					text: response.valor,
					callback: function(result){
						location.reload();
					}
				});
			}else if(response.status == 'Warning'){
				modal({
					type: 'warning',
					title: 'Atención',
					text: response.valor
				});
			}else if(response.status == 'Error'){
				modal({
					type: 'error',
					title: 'Error',
					text: response.valor
				});
			}
		});
	});
	$('#editaPartido').submit(function(event){
		event.preventDefault();
		var request_method = $(this).attr('method');
		var form_data = $(this).serialize();
		$.ajax({
			url : 'torneos_api.php',
			type: request_method,
			data : form_data,
			dataType: 'json'
		}).done(function(response){
			if(response.status == 'Success'){
				modal({
					type: 'success',
					title: ':)',
					text: response.valor
				});
			}else if(response.status == 'Warning'){
				modal({
					type: 'warning',
					title: 'Atención',
					text: response.valor
				});
			}else if(response.status == 'Error'){
				modal({
					type: 'error',
					title: 'Error',
					text: response.valor
				});
			}
		});
	});
	$('#agregaPartido').submit(function(event){
		event.preventDefault();
		var request_method = $(this).attr('method');
		var form_data = $(this).serialize();
		$.ajax({
			url : 'torneos_api.php',
			type: request_method,
			data : form_data,
			dataType: 'json'
		}).done(function(response){
			if(response.status == 'Success'){
				modal({
					type: 'success',
					title: ':)',
					text: response.valor,
					callback: function(result){
						location.reload();
					}
				});
			}else if(response.status == 'Warning'){
				modal({
					type: 'warning',
					title: 'Atención',
					text: response.valor
				});
			}else if(response.status == 'Error'){
				modal({
					type: 'error',
					title: 'Error',
					text: response.valor
				});
			}
		});
	});
	$('#muestraPartidos #deporte').change(function(){
		$.ajax({
			url : 'torneos_api.php',
			type: 'post',
			data : 'action=obtenRamas&d='+$('#deporte').val()
		}).done(function(response){
			$('#rama').html(response);
		});
		$('#torneo').html('<option value="">--</option>');
		$('#partidos').html('');
	});
	$('#muestraPartidos #rama').change(function(){
		$.ajax({
			url : 'torneos_api.php',
			type: 'post',
			data : 'action=obtenTorneos&d='+$('#deporte').val()+'&r='+$('#rama').val()
		}).done(function(response){
			$('#torneo').html(response);
		});
		$('#partidos').html('');
	});
	$('#muestraPartidos #torneo').change(function(){
		$.ajax({
			url : 'torneos_api.php',
			type: 'post',
			data : 'action=obtenPartidos&d='+$('#deporte').val()+'&r='+$('#rama').val()+'&t='+$('#torneo').val(),
			dataType: 'json'
		}).done(function(response){
			if(response.status == 'Success'){
				$('#partidos').html(response.valor);
			}else if(response.status == 'Error'){
				$('#partidos').html(response.valor);
			}
		});
	});
	$('#empate').click(function(){
		$('form.bluesteel .extra').css('display','block');
	});
	$('.noempate').click(function(){
		$('form.bluesteel .extra').css('display','none');
	});
	$('#guardaMarcador').submit(function(event){
		event.preventDefault();
		var request_method = $(this).attr('method');
		var form_data = $(this).serialize();
		$.ajax({
			url : 'torneos_api.php',
			type: request_method,
			data : form_data,
			dataType: 'json'
		}).done(function(response){
			if(response.status == 'Success'){
				modal({
					type: 'success',
					title: ':)',
					text: response.valor
				});
			}else if(response.status == 'Warning'){
				modal({
					type: 'warning',
					title: 'Atención',
					text: response.valor
				});
			}else if(response.status == 'Error'){
				modal({
					type: 'error',
					title: 'Error',
					text: response.valor
				});
			}
		});
	});
	$('#nuevaTransmision #deporte').change(function(){
		$.ajax({
			url : 'torneos_api.php',
			type: 'post',
			data : 'action=obtenRamas&d='+$('#deporte').val()
		}).done(function(response){
			$('#rama').html(response);
		});
		$('#torneo').html('<option value="">--</option>');
		$('#partidos').html('');
	});
	$('#nuevaTransmision #rama').change(function(){
		$.ajax({
			url : 'torneos_api.php',
			type: 'post',
			data : 'action=obtenTorneos&d='+$('#deporte').val()+'&r='+$('#rama').val()
		}).done(function(response){
			$('#torneo').html(response);
		});
		$('#partidos').html('');
	});
	$('#nuevaTransmision #torneo').change(function(){
		$.ajax({
			url : 'torneos_api.php',
			type: 'post',
			data : 'action=obtenPartidosTrans&d='+$('#deporte').val()+'&r='+$('#rama').val()+'&t='+$('#torneo').val(),
			dataType: 'json'
		}).done(function(response){
			if(response.status == 'Success'){
				$('#partidos').html(response.valor);
			}else if(response.status == 'Error'){
				$('#partidos').html(response.valor);
			}
		});
	});
	$('#guardaTransmision').submit(function(event){
		event.preventDefault();
		var request_method = $(this).attr('method');
		var form_data = $(this).serialize();
		$.ajax({
			url : 'torneos_api.php',
			type: request_method,
			data : form_data,
			dataType: 'json'
		}).done(function(response){
			if(response.status == 'Success'){
				modal({
					type: 'success',
					title: ':)',
					text: response.valor
				});
			}else if(response.status == 'Warning'){
				modal({
					type: 'warning',
					title: 'Atención',
					text: response.valor
				});
			}else if(response.status == 'Error'){
				modal({
					type: 'error',
					title: 'Error',
					text: response.valor
				});
			}
		});
	});
});