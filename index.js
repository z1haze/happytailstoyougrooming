const express = require('express');
const app = express();

app.get('/', function(req, res) {
    res.send('Undergoing server maintenance - Be back soon!')
});

app.listen(3000, function() {
    console.log('App running on port 3000');
});