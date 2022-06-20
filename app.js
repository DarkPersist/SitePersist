const express = require('express');
const ejs = require('ejs');
const app = express();

app.set('view engine','ejs');
app.use(express.static('public'));

//Rutas de Acceso
app.get('/', function(req, res){
    res.render('welcome');
});

app.get('/IUSH', function(req, res){
    res.render('IUSH/welcome');
});

app.get('/IUSH/login', function(req, res){
    res.render('IUSH/login');
});



const PORT=process.env.PORT || 3000;
app.listen(PORT);