const server = require('express');

server.get('/public',function(req, res){
    res.send("<h1>hola mundo</h1>");
    res.end();
});

const PORT=process.env.PORT || 3000;
server.listen(PORT);