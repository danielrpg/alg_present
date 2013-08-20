/* Esta es ka clase js para el index js **/
/**
 Ayuda memoria
 --------------
 $.getJSON("test.js", { name: "John", time: "2pm" }, function(json){
  alert("JSON Data: " + json.users[3].name);
 });
 -------------
--- Formulario -----
$('#form_alm_nuevo_ingreso').submit(function(evt){
        datos = $(this).serialize();
        $.ajax({
          url:'?accion=ingreso&tp=grabarIngreso',
              data:datos,
              dataType:'GET',
              dataType:'json',
              success:function(res){
       
           
              }
        });
      }
      evt.preventDefault();
});
--- POST ---
$.ajax({
  type: "POST",
  url: url,
  data: data,
  success: success,
  dataType: dataType
});
--
*/
$(document).on('ready', new Index().init);
/* Esta es la clase index que inicializa el javascript */
function Index(){
  this.init = function (){
    
  }
}