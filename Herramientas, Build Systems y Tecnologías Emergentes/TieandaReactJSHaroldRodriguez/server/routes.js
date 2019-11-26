	var db = require('./queries');

	function Http() {
		this.configurar = function(app) {

			app.get('/usuarios/', function(solicitud, respuesta) {
				db.obtenerUsuarios(respuesta);
			})
			app.get('/usuarios/:id/', function(solicitud, respuesta) {
				db.obtenerUsuario(solicitud.params.id, respuesta);
			})
			app.post('/usuarios/', function(solicitud, respuesta) {
				db.insertarUsuario(solicitud.body, respuesta);
			})
			app.put('/usuarios/', function(solicitud, respuesta) {
				db.actualizarUsuario(solicitud.body, respuesta);
			})
			app.delete('/usuarios/:id/', function(solicitud, respuesta) {
				db.eliminarUsuario(solicitud.params.id, respuesta);
			})
 
			app.get('/productos/', function(solicitud, respuesta) {
				db.obtenerProductos(respuesta);
			})
			app.get('/productos/:id/', function(solicitud, respuesta) {
				db.obtenerProducto(solicitud.params.id, respuesta);
			})
			app.post('/productos/', function(solicitud, respuesta) {
				db.insertarProducto(solicitud.body, respuesta);
			})
			app.put('/productos/', function(solicitud, respuesta) {
				db.actualizarProducto(solicitud.body, respuesta);
			})
			app.delete('/productos/:id/', function(solicitud, respuesta) {
				db.eliminarProducto(solicitud.params.id, respuesta);
			})
		}
	}

	module.exports = new Http();