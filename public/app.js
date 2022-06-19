const http = require('http');

http.createServer(function (req, res){
    res.write('<h1>hola mundo</h1>');
});