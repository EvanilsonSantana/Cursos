var express = require("express");

var app = express();


app.get("/", function(req, res) {
    res.sendFile(__dirname + "/html/index.html");  
});

app.get("/sobre", function(req, res) {
    res.send("Minha pagina sobre")
})

app.get("/blog", function(req, res) {
    res.send("Bem vindo ao meu blog");
})

app.get('/ola/:cargo/:nome/:cor', function(req, res) {
    res.send("<h1>ola "+ req.params.nome+"</h1>"+"<h2> Seu cargo: " + req.params.cargo + "</h2>");
})




app.listen(8080, function(){console.log("Servidor rodando")});