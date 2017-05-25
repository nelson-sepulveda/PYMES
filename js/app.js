


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
				$('#user').val('')
				$('#email').val('')
				$('#direccion').val('')
				$('#telefono').val('')
				$('#cedula').val('')
				$('#password').val('')
				$('#password_re').val('')
			}
		});
 }
});




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
	var formulario = $('#loginData');	
	//  $('#myModal').modal('hide');
	//  document.location.href='usuario_perfil.php';
$.ajax({
	url: formulario.attr('action'),
	method:'post',
	data:formulario.serialize(),
success : function(data)
	{
		var obj = JSON.parse(data);
		if(obj.login==true)
		{
			document.location.href='usuario_perfil.php';
		}
		else
		{
			$('#div_error_login').html(obj.error);
			$('#usuario').val('')
			$('#pass').val('')
		}
	}
});
}
});

