/*
  Valida los datos de los campos que se tuilizan para actulizar los campos 
 del perfl del usuario.
 */

 //Definición de patrones de validación
 var regExpUpValid={
 	regNombre:/[A-Za-z0-9]{3,}/, //El nombre tiene que estar compuesto por tres o mas cáracteres
 	regEmail: (/^[A-Za-z0-9]+[@]{1}[a-z]{3,}[.]{1}[a-z]{2,3}/), //Email formado por la cuenta con
 	//3 ó más carácteres alfanúmericos, seguido de una arroba, el servidor formado por tres letras 
 	//minuscular, un punto y la extensión formada por dos letras

 }

 var regEmail=