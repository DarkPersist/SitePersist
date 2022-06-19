const express = require('express');
const server = express();

server.get('/',function(req, res){
    res.sendFile('./public/index.html')
    res.end();
});

const PORT=process.env.PORT || 3000;
server.listen(PORT);