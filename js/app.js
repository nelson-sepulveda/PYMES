
$(document).ready(function()
{
	$('.nombre-perfil').on('click', function()
	{
		$('.submenu-hijo').slideToggle('slow');
	});
});



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
				$('#myModalRegistro').modal('hide')
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


// Actualizacion de dato cliente

$('#actualizacionCliente').validate({
	rules:{
		user_up :{required:true },
		email_up:{required:true,email:true},
		direccion_up:{required:true},
		telefono_up:{required:true,number:true},
		cedula_up:{required:true},
		password_up:{required:true}
		
	},
	messages:
	{
		user_up: "Nombre Vacio",
		email_up : "Email vacio o invalido",
		direccion_up : "Direccion vacia",
		telefono_up : "Telefono Vacio",
		cedula_up : "Cedula Vacia",
		password_up : "Contraseña Vacia"
	},
submitHandler: function(form){
	
		var formulario = $('#actualizacionCliente');	

		$.ajax({
			url: $('#actualizacionCliente').attr('action'),
			method:'post',
			data:$('#actualizacionCliente').serialize(),
			success : function(data)
			{
				$('#data_update_ajax').html(data);
				// $('#myModalActualizacion').modal('hide')
			}
		});
 }
});


// Permite saber si ya existe un email registrado en la base de datos
$(document).ready(function() {    
    $('#email').blur(function(){

        $('#info').html('<img src="images/loader.gif" alt="" />').fadeOut(1000);

        var username = $(this).val();        
        var dataString = 'username='+username;
				console.log(username);
        $.ajax({
            type: "POST",
            url: "page_part/check_email_registro.php",
            data: dataString,
            success: function(data) {
                $('#info').fadeIn(1000).html(data);
            }
        });
    });              
});

