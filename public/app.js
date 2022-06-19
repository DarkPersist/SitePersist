const http = require('http');

const app=http.createServer(function (req, res){
    res.writeHead(200,{'Content-type': 'text/html'});
    res.write('<h1>hola mundo</h1>');
    res.end();
});

const PORT=process.env.PORT || 3000;

app.listen(PORT);