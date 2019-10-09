const EXPRESS = require('express');
const PATH = require('path');
const BODY_PARSER = require('body-parser');
const PORT = 27017;
let app = EXPRESS();
const USUARIOS = require('./routers/usuarios');
const EVENTOS = require('./routers/eventos');
const INIT = require('./init/init');
INIT();
app.use(BODY_PARSER.json());
app.use(BODY_PARSER.urlencoded({
    extended: false
}));
app.use('/', EXPRESS.static(PATH.join(__dirname, '../client')));
app.use('/users/', USUARIOS);
app.use('/events/', EVENTOS); 
app.listen(PORT, ()=>{
    console.log('Listening at port ' + PORT);
}); 
