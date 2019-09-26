var BodyParser =  require("body-parser");
var express    =  require("express");
var MongoClient=  require("mongodb").MongoClient;
var session    =  require("express-session");
var http       =  require("http");
var events     =  require("./router");
var url = "mongodb://localhost:27017/agendaGP";
var PORT= 3000;
var app = express();
app.use(BodyParser.json());
app.use(BodyParser.urlencoded({extended: true}));
app.use(express.static("client"));
app.use(session({
	secret: "1982gp13",
	resave: false,
	saveUninitialized: false
}));

http.createServer(app);

app.post("/login",function (req, res){
	var user = req.body.user;
	var pass = req.body.pass;
	MongoClient.connect(url, function (err, db){
		if (err)throw err; // gestiono el erro
		var base = db.db("agendaGP");
		var coleccion = base.collection("usuarios");
		coleccion.findOne({email: user, password: pass}, function (error, user){
			if (error) throw error;
			if (user){
				req.session.email_user = user.email;
				res.send("Validado");
			}else{
				res.send("Usuario o contraseña no son correctos.");
			}
		});
		  db.close();

	});


}); 

app.use("/events", events);
app.listen(PORT, function (){
	console.log("El servidor agenda GP está corriendo por el servidor : " + PORT);
});


