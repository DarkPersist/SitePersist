const express = require('express');
const ejs = require('ejs');
const app = express();
const path= require('path');

app.engine('.ejs', ejs.__express)
app.set('views', __dirname + '/public')
app.use(express.static(__dirname + '/public'));
app.set('view engine','ejs');


const PORT=process.env.PORT || 3000;
app.listen(PORT);