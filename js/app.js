


// Registro de clientes
$('#registroCliente').validate({
	rules:{
		user :{required:true },
		email:{required:true,email:true},
		direccion:{required:true},
		telefono:{required:true,number:true},
		cedula:{required:true},
		password:{required:true},
		password_re:{required:true, equalTo:"#password"}
	},
	messages:
	{
		user: "Nombre Vacio",
		email : "Email vacio o invalido",
		direccion : "Direccion vacia",
		telefono : "Telefono Vacio",
		cedula : "Cedula Vacia",
		password : "Contraseña Vacia",
		password_re: "Contraseña no coinciden"
	},
submitHandler: function(form){
	
		var formulario = $('#registroCliente');	

		$.ajax({
			url: $('#registroCliente').attr('action'),
			method:'post',
			data:$('#registroCliente').serialize(),
			success : function(data)
			{
				$('#success').html(data);
				limpiarFormulario(formulario);
			}
		});
 }
});


function limpiarFormulario(formulario)
{
	var inputs = document.formulario.getElementsByTagName("user");
  inputs.value = "";
}


//  Login de usuarios
$('#loginData').validate({
	rules:{
		usuario :{required:true , email:true},
		pass:{required:true },
	},
	messages:
	{
		usuario : "Email vacio o invalido",
		pass: "Contraseña Vacia"
	},
submitHandler: function(form){
	
		var formulario = $('#registroCliente');	

		$.ajax({
			url: $('#registroCliente').attr('action'),
			method:'post',
			data:$('#registroCliente').serialize(),
			success : function(data)
			{
				$('#success').html(data);
				limpiarFormulario(formulario);
			}
		});
 }
});





// Registro de Cliente
// $("#registroCliente").submit(function (event)
// {

// 		event.preventDefault();
// 		var form=$(this);

    

// 		// $.ajax({
// 		// 	url: form.attr('action'),
// 		// 	method: 'POST',
// 		// 	data: form.serialize(),
// 		// 	success: function (data)
//     //     {

// 		// 		if (data)
//     //     {
// 		// 			// $('.alerta-enviado').fadeIn('slow');
// 		// 			$("#datos_ajax_datos").html(data);
// 		// 			//
// 		// 			// $('#nombre,#email,#asunto,#mensaje').val('');
// 		// 		}
// 		// 		else
// 		// 		{
// 		// 				// $('.alert-error').fadeOut('slow');
// 		// 				// setTimeout(function () {
// 		// 				// 		$('.alert-error').hide();
// 		// 				// }, 10000);
// 		// 		}
// 		// 	}
// 		});


