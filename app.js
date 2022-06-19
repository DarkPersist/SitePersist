const express = require('express');
const server = express();

server.use(express.static('public'));

const PORT=process.env.PORT || 3000;
server.listen(PORT);