$( document ).ready(function() {
    $("#botonBuscar").click(function() {
  		var busqueda = $("#texboxBusqueda").val();
  		var busqueda =  busqueda.replace(/\ /g, '-');
  		window.location.href =BASE_URL+"buscar/"+busqueda;
	});
});