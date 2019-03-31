/*
  Valida los datos de los campos que se tuilizan para actulizar los campos 
 del perfl del usuario.
 */

 //Definición de patrones de validación
 var regExpUpValid={
 		//El nombre tiene que estar compuesto por tres o mas cáracteres
 		regNombre:/[A-Za-z0-9]{3,}/, 
 		/*
 		  Email formado por la cuenta con 3 ó más carácteres alfanúmericos, 
 		  seguido de una arroba, el servidor formado por tres letras minusculas, 
 		  un punto y la extensión formada por dos letras
 		*/
 		regEmail: (/^[A-Za-z0-9]+[@]{1}[a-z]{3,}[.]{1}[a-z]{2,3}/), 
 		/*
			El password tiene que estar formado por un mínimo de 8 carácteres. 
			Uno tiene que ser una letra minuscula, otro una mayuscula, un número
			y cualquier otro tipo de carácter alfanumerico.  	
 		*/
 		regPwd:(/[A-Z]+[a-z]+[0-9]+\w{5,}/),
 		/*
			Fecha con formato "dd\mm\aaaa"
 		*/
 		regDate: (/^\d{2}\/\d{2}\/\d{4}$/),
 		/*
			La foto de perfil está formada por un carácter alfanumerico (como minimo) y la extensión.
			La extensión ha de ser jpg, png o gif
 		*/
 		regAvatar: (/\w+[.]{1}(jpg|png|gif)/)
 		};
   function validar(event)
   {
   		var nombre=document.getElementById("nombre");
   		var email=document.getElementById("userEmail");
   		var pwd=document.getElementById("userPwd");
   		var nacimiento=document.getElementById("birthdate");
   		var avatar=document.getElementById("avatar");
   		// Comprobamos que los campos tienen algo
   		if((nombre.value.length==0) && (email.value.length==0) && (pwd.value.length==0) && (avatar.files.length==0))
   		{
   			alert ("Los campos estan vacios");
   			event.preventDefault();
   		}
   		else
   		{
   			var error="";
   			if(nombre.value.length==0)
   			{
   				nombre.value="zzz";
   			}
   			else
   			{
   				if(! regExpUpValid.regNombre.test(nombre.value))
   				{
   					error="Revise el campo nombre.";
   				}
   			}

   			if(email.value.length==0)
   			{
   				email.value="zzz";
   			}
   			else
   			{
   				error=error+"\nRevise el campo email";
   			}

   			if(pwd.value.length==0)
   			{
   				pwd.value="zzz";
   			}
   			else
   			{
   				error=error+"\nRevise el campo password";
   			}
   			if(error!="")
   				{alert(error);}

   			alert("Mira que bien, vamos a guardar los datos");
   			event.preventDefault();
   		}
   }

   document.getElementById("usuarios").addEventListener("submit",validar);

   
 