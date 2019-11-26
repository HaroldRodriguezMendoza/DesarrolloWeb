
	const 	express = require('express'),
			bodyParser = require('body-parser'),
			expressJWT = require('express-jwt'),
			cors = require('cors'),
			port = process.env.PORT || 3000,
			app = express()
	app.use(bodyParser.json());
	app.use(bodyParser.urlencoded({extended: true}));
	app.use(cors());
	var connection = require('./connection'),
		routes = require('./routes')

	connection.iniciar();
	routes.configurar(app);
	app.listen(port, function() {
		console.log('Base de Datos MySQL corriendo en Laragon http://localhost:80');
  		console.log('Servidor corriendo en http://localhost:'+port);
	})