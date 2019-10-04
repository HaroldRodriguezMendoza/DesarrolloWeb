const mongojs = require('mongojs');

var db = mongojs('mongodb://localhost:27017/agendadb', ['users']);
var User = require('../models/user');

module.exports = () => {
    let nuevoUsuario = new User({user: 'harold', password: 'Usr2k15'});

    db.users.save(nuevoUsuario, (err, resultado) => {
        if(err){
            throw err;
        } else {
            console.log('Base de datos inicializada.');
        }
    }); 
};
