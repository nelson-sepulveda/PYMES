
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
		if(obj.id_tipo==1)
		{
			document.location.href='administrador_perfil.php';
			console.log('vamos a administrar');
		}
		else if(obj.id_tipo==2)
		{
		  console.log('Vamos a la gerencia');
			
		}
		else if(obj.id_tipo==3)
		{
			console.log('vamos a emplear');
			document.location.href='empleado_perfil.php';
		}
		else if(obj.id_tipo==4)
		{
			console.log('vamos al contador');
		}
		else if(obj.id_tipo==0)
		{
			console.log('vamos al cliente');
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

// Actualizacion de empleados
$('#actualizacionEmpleado').validate({
	rules:{
		user_up_emp :{required:true },
		email_up_emp:{required:true,email:true},
		direccion_up_emp:{required:true},
		telefono_up_emp:{required:true,number:true},
		password_up_emp:{required:true}
	},
	messages:
	{
		user_up_emp: "Nombre Vacio",
		email_up_emp : "Email vacio o invalido",
		direccion_up_emp : "Direccion vacia",
		telefono_up_emp : "Telefono Vacio",
		password_up_emp : "Contraseña Vacia"
	},
submitHandler: function(form){
	
		var formulario = $('#actualizacionEmpleado');	

		$.ajax({
			url: $('#actualizacionEmpleado').attr('action'),
			method:'post',
			data:$('#actualizacionEmpleado').serialize(),
			success : function(data)
			{
				$('#data_update_ajax_emp').html(data);
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




// Actualiza administrador
$('#actualizacionAdmin').validate({
	rules:{
		name_admin :{required:true },
		email_admin:{required:true,email:true},
		direccion_admin:{required:true},
		telefono_admin:{required:true,number:true},
		password_admin:{required:true}
	},
	messages:
	{
		name_admin: "Nombre Vacio",
		email_admin : "Email vacio o invalido",
		direccion_admin : "Direccion vacia",
		telefono_admin : "Telefono Vacio",
		password_admin : "Contraseña Vacia"
	},
submitHandler: function(form){
	
		var formulario = $('#actualizacionAdmin');	

		$.ajax({
			url: $('#actualizacionAdmin').attr('action'),
			method:'post',
			data:$('#actualizacionAdmin').serialize(),
			success : function(data)
			{
				$('#data_update_ajax_am').html(data);
				// $('#myModalActualizacion').modal('hide')
			}
		});
  }
});



// Registro de empleados

$('#registroEmpleado').validate({
	rules:{
		name_emp :{required:true },
		email_emp:{required:true,email:true},
		direccion_emp:{required:true},
		telefono_emp:{required:true,number:true},
		password_up_emp:{required:true}
	},
	messages:
	{
		name_emp: "Nombre Vacio",
		email_emp : "Email vacio o invalido",
		direccion_emp : "Direccion vacia",
		telefono_emp : "Telefono Vacio",
		password_up_emp : "Contraseña Vacia"
	},
submitHandler: function(form){
	
		var formulario = $('#registroEmpleado');	

		$.ajax({
			url: $('#registroEmpleado').attr('action'),
			method:'post',
			data:$('#registroEmpleado').serialize(),
			success : function(data)
			{
				$('#data_ajax_emp').html(data);
				$('#name_emp').val('')
				$('#email_emp').val('')
				$('#direccion_emp').val('')
				$('#telefono_emp').val('')
				// $('#myModalActualizacion').modal('hide')
			}
		});
  }
});



$('#modalEmpleado').on('show.bs.modal', function(event){

	var este=$(this);
  console.log('actualizaa');
  var button=$(event.relatedTarget);
	var id=button.data('id');
	var nombre = button.data('nombre');
	var telefono = button.data('telefono');
	var direccion = button.data('direccion');
	var email = button.data('email');

	console.log(nombre);

	var modal = $('#modalEmpleado')	;

  modal.find('#id_emp').val(id);	
	modal.find('#emp_name').val(nombre);
	modal.find('#emp_email').val(email);
	modal.find('#emp_direccion').val(direccion);
	modal.find('#emp_telefono').val(telefono);
});

// modificar empleado
$('#modificaEmpleado').validate({
	rules:{
		emp_name :{required:true },
		emp_email:{required:true,email:true},
		emp_direccion:{required:true},
		emp_telefono:{required:true,number:true},
		password_up_emp:{required:true}
	},
	messages:
	{
		emp_name: "Nombre Vacio",
		emp_email : "Email vacio o invalido",
		emp_direccion : "Direccion vacia",
		emp_telefono : "Telefono Vacio",
		password_up_emp : "Contraseña Vacia"
	},
submitHandler: function(form){
	
		var formulario = $('#modificaEmpleado');	

		$.ajax({
			url: $('#modificaEmpleado').attr('action'),
			method:'post',
			data:$('#modificaEmpleado').serialize(),
			success : function(data)
			{
				$('#data_ajax_emp_up').html(data);
				// $('#myModalActualizacion').modal('hide')
			}
		});
  }
});





$('#deleteEmpleado').on('show.bs.modal', function(event){

	var este=$(this);
  console.log('actualizaa');
  var button=$(event.relatedTarget);
	var id=button.data('id');
	var modal = $('#deleteEmpleado');

  modal.find('#IDeliminar').val(id);	
	
});


$('#eliminarEmpleado').validate({
	rules:{
		IDeliminar :{required:true },
	},
	messages:
	{
		IDeliminar: "",
	},
submitHandler: function(form){
		var formulario = $('#eliminarEmpleado');	

		$.ajax({
			url: $('#eliminarEmpleado').attr('action'),
			method:'post',
			data:$('#eliminarEmpleado').serialize(),
			success : function(data)
			{
				$('#data_ajax_delete').html(data);
				$('#deleteEmpleado').modal('hide')
			}
		});
  }
});




// Registrar producto

$('#registroProductoForm').validate({
	rules:{
		nameproducto :{required:true },
		precioproducto:{required:true},
		descripcionproducto:{required:true},
	},
	messages:
	{
		nameproducto: "Nombre Vacio",
		precioproducto : "Precio Vacio",
		descripcionproducto : "Descripcion vacia",
	},
submitHandler: function(form){
	
		var formulario = $('#registroProductoForm');	

		$.ajax({
			url: $('#registroProductoForm').attr('action'),
			method:'post',
			data:$('#registroProductoForm').serialize(),
			success : function(data)
			{
				$('#data_ajax_producto').html(data);
				$('#nameproducto').val('')
				$('#precioproducto').val('')
				$('#descripcionproducto').val('')
				// $('#myModalActualizacion').modal('hide')
			}
		});
  }
});




// Modifica producto
$('#modalProducto').on('show.bs.modal', function(event){

	var este=$(this);
  console.log('poreporperoeproep');
  var button=$(event.relatedTarget);
	var id=button.data('id');
	var nombre = button.data('nombre');
	var precio = button.data('precio');
	var descripcion = button.data('descripcion');

	console.log(nombre);

	var modal = $('#modalProducto')	;

  modal.find('#idproducto').val(id);	
	modal.find('#productoname').val(nombre);
	modal.find('#productoprecio').val(precio);
	modal.find('#productodescripcion').val(descripcion);
});



// modificar producto
$('#modificaProductoForm').validate({
	rules:{
		productoname :{required:true },
		productoprecio:{required:true},
		productodescripcion:{required:true},
	},
	messages:
	{
		productoname: "Nombre Vacio",
		productoprecio : "Precio Vacio",
		productodescripcion : "Descripcion vacia",
	},
submitHandler: function(form){
	
		var formulario = $('#modificaProductoForm');	

		$.ajax({
			url: $('#modificaProductoForm').attr('action'),
			method:'post',
			data:$('#modificaProductoForm').serialize(),
			success : function(data)
			{
				$('#data_ajax_producto_up').html(data);
				// $('#productoname').val('')
				// $('#productoprecio').val('')
				// $('#productodescripcion').val('')
				// $('#myModalActualizacion').modal('hide')
			}
		});
  }
});


// eliminar producto
$('#deleteProducto').on('show.bs.modal', function(event){

	var este=$(this);
  console.log('actualizaa');
  var button=$(event.relatedTarget);
	var id=button.data('id');
	var modal = $('#deleteProducto');

  modal.find('#IDeliminarpro').val(id);	
});


$('#eliminarProducto').validate({
	rules:{
		IDeliminarpro :{required:true },
	},
	messages:
	{
		IDeliminar: "",
	},
submitHandler: function(form){
		var formulario = $('#eliminarProducto');	

		$.ajax({
			url: $('#eliminarProducto').attr('action'),
			method:'post',
			data:$('#eliminarProducto').serialize(),
			success : function(data)
			{
				$('#data_ajax_delete_producto').html(data);
				$('#eliminarProducto').modal('hide')
			}
		});
  }
});