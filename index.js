const express = require('express');
const hbs = require('express-handlebars');

const app = express();

app.engine('hbs', hbs({extname: 'hbs'}));
app.set('view engine', 'hbs');

app.use(express.static(__dirname + '/public/'));

app.get('/', (req, res) => {
    res.status(200).render('home', {
        title: 'Happy Tails To You Grooming'
    });
});

app.listen(3000, function() {
    console.log('App running on port 3000');
});