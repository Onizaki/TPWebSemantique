var express = require('express');
var morgan = require('morgan'); // Charge le middleware de logging
var logger = require('log4js').getLogger('Server');
var bodyParser = require('body-parser');
var app = express();

// config
app.set('view engine', 'ejs');
app.set('views', __dirname + '/views');

app.use(bodyParser.urlencoded({ extended: false }));
app.use(morgan('combined')); // Active le middleware de logging

app.use(express.static(__dirname + '/public')); // Indique que le dossier /public contient des fichiers statiques (middleware chargé de base)

logger.info('server start');

app.get('/', function(req, res){
    res.redirect('/login');
});

app.get('/login', function(req, res){
    res.render('login');
});

app.get('/inscription', function(req, res){
    res.redirect('/inscription');
});

app.post('/inscription', function (req, res) {
    res.render('inscription');
});

app.get('/paint', function(req, res){
    res.redirect('/paint');
});

app.post('/paint', function (req, res) {
    res.render('paint');
});
/*
app.post('/login', function (req, res) {
    // TODO vérifier si l'utilisateur existe
});

app.get('/register', function (req, res) {
    // TODO ajouter un nouveau utilisateur
});
// On affiche le profile 
app.get('/profile', function (req, res) {
    // TODO  
    // On redirige vers la login si l'utilisateur n'a pas été authentifier 
    // Afficher le button logout   
*/
app.listen(1313);

/*
// ============= BDD ==============

var mysql = require('mysql');


var connection = mysql.createConnection({
    host: 'localhost',
    user: 'test',
    password: '',
    database: 'pictionnary'
});

connection.connect();

connection.query('SELECT * from users', function (err, rows, fields) {
    if (!err)
        logger.info('Le résultat de la requête: ', rows);
    else
        logger.error(err);
});

connection.end();

// ======================= Pool =====================

var pool =  mysql.createPool({
    connectionLimit : 100, //important
    host : 'localhost',
    user : 'test',
    password: '',
        database: 'pictionnary'
  });   

  pool.getConnection(function(err,connection){
        if (err) {
          connection.release();
          res.json({"code" : 100, "status" : "Erreur de connexion à la DB"});
          return;
        }  

        logger.info('connecté en tant que ' + connection.threadId);

        connection.query("select * from user",function(err,rows){
            connection.release();
            if(!err) {
                res.json(rows);
            }          
        });

        connection.on('error', function(err) {      
              res.json({"code" : 100, "status" : "Erreur de connexion à la DB"});
              return;    
        });
  });
*/
