const EXPRESS = require('express');
const mongojs = require('mongojs');
var db = mongojs('mongodb://localhost:27017/agendadb', ['users']);

let router = EXPRESS.Router();

router.post('/usuarios', (req, res, next) => {
    db.users.findOne({
        user: req.body.user,
        password: req.body.pass
    }, (err, user) => {
        if(err){
            res.json({
                validado: false
            });
        } else {
            if(user !== null) {
                res.json({
                    validado: true
                });
            } else {
                res.json({
                    validado: false
                });
            }
        }
    });
}); 

module.exports = router;
