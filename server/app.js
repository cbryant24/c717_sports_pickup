const express = require('express');
const getRoute = require('./routes/index');

const cookie_session = require('cookie-session');
const passport = require('passport');
const body_parser = require('body-parser');
const cookie_key = require('./config/fb_keys').cookie_key

const app = express();

require('./services/passport');

app.use('/', express.static(__dirname + '/public'))
app.use('/assets', express.static(__dirname + '/public'))

app.use('/', getRoute);

app.use(body_parser.json());
app.use(
    cookie_session({
        maxAge: 30 * 24 * 60 * 60 * 1000,
        keys: [cookie_key]
    })
)

app.use(passport.initialize());
app.use(passport.session())
require('./routes/auth_routes')(app)

app.get('/', function(req, res) {
    res.end();
})

app.listen(4000, () => console.log('listening on port 4000'));