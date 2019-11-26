	var jwt = require('jsonwebtoken'),
		conexion = require('./connection');

	function EjecutarDB() {
		
		this.obtenerProductos = function(respuesta) {
			conexion.establecer(function(err, cnx) {
				cnx.query('SELECT * FROM productos', function(error, resultado) {
					cnx.release();
					if (error) {
						respuesta.send({estado: 'E-001: Error al intentar obtener los productos'})
					} else {
						respuesta.send(resultado);	
					}
				});
			})
		}
		this.obtenerProducto = function(idProducto, respuesta) {
			conexion.establecer(function(err, cnx) {
				cnx.query('SELECT * FROM productos WHERE id=?', idProducto, function(error, resultado) {
					cnx.release();
					if (error) {
						respuesta.send({estado: 'E-002: Error al intentar obtener el producto'})
					} else {
						respuesta.send(resultado);	
					}
				});
			})
		}
		this.insertarProducto = function(datos, respuesta) {
			conexion.establecer(function(err, cnx) {
				cnx.query('INSERT INTO productos SET ?', datos, function(error, resultado) {
					cnx.release();
					if (error) {
						respuesta.send({estado: 'E-003: Error al intentar insertar el producto'})
					} else {
						respuesta.send({estado: 'OK'});	
					}
				});
			})
		}
		this.actualizarProducto = function(datos, respuesta) {
			conexion.establecer(function(err, cnx) {
				cnx.query('UPDATE productos SET ? WHERE id=?', [datos, datos.id], function(error, resultado) {
					cnx.release();
					if (error) {
						respuesta.send({estado: 'E-004: Error al intentar actualizar el producto'})
					} else {
						respuesta.send({estado: 'OK'});	
					}
				});
			})
		}	
		this.eliminarProducto = function(idProducto, respuesta) {
			conexion.establecer(function(err, cnx) {
				cnx.query('DELETE FROM productos WHERE id=?', idProducto, function(error, resultado) {
					cnx.release();
					if (error) {
						respuesta.send({estado: 'E-005: Error al intentar eliminar el producto'})
					} else {
						respuesta.send({estado: 'OK'});	
					}
				});
			})
		}	

		this.obtenerUsuarios = function(respuesta) {
			conexion.establecer(function(err, cnx) {
				cnx.query('SELECT * FROM usuarios', function(error, resultado) {
					cnx.release();
					if (error) {
						respuesta.send({estado: 'E-006: Error al intentar obtener los usuarios'})
					} else {
						respuesta.send(resultado);	
					}
				});
			})
		}
		this.obtenerUsuario = function(idUsuario, respuesta) {
			conexion.establecer(function(err, cnx) {
				cnx.query('SELECT * FROM usuarios WHERE id=?', idUsuario, function(error, resultado) {
					cnx.release();
					if (error) {
						respuesta.send({estado: 'E-007: Error al intentar obtener el usuario'})
					} else {
						respuesta.send(resultado);	
					}
				});
			})
		}
		this.insertarUsuario = function(datos, respuesta) {
			conexion.establecer(function(err, cnx) {
				cnx.query('INSERT INTO usuarios SET ?', datos, function(error, resultado) {
					cnx.release();
					if (error) {
						respuesta.send({estado: 'E-008: Error al intentar insertar el usuario'})
					} else {
						respuesta.send({estado: 'OK'});	
					}
				});
			})
		}
		this.actualizarUsuario = function(datos, respuesta) {
			conexion.establecer(function(err, cnx) {
				cnx.query('UPDATE usuarios SET ? WHERE id=?', [datos, datos.id], function(error, resultado) {
					cnx.release();
					if (error) {
						respuesta.send({estado: 'E-009: Error al intentar actualizar el usuario'})
					} else {
						respuesta.send({estado: 'OK'});	
					}
				});
			})
		}	
		this.eliminarUsuario = function(idUsuario, respuesta) {
			conexion.establecer(function(err, cnx) {
				cnx.query('DELETE FROM usuarios WHERE id=?', idUsuario, function(error, resultado) {
					cnx.release();
					if (error) {
						respuesta.send({estado: 'E-010: Error al intentar eliminar el usuario'})
					} else {
						respuesta.send({estado: 'OK'});	
					}
				});
			})
		}	


	}

	module.exports = new EjecutarDB();