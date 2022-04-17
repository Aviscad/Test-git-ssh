//Dependencias necesarias
var express = require('express');
var mongoose = require('mongoose');
var bodyParser = require('body-parser');
mongoose.connect('mongodb://localhost/blogrol'); //coneccion con mongodb por mongoose
var Schema = mongoose.Schema;

//Creando estructura de Backbone para usarla en express y mongodb
var BlogSchema = new Schema({
    author: String,
    title: String,
    url: String
});

//crea la DB Blog, con la estructura de arriba
mongoose.model('Blog', BlogSchema);
var Blog = mongoose.model('Blog');

//Configuracion del servidor de express
const app = express();
app.use(express.static(__dirname + '/public'));
app.use(bodyParser.json());
const port = 3000;
app.listen(port, () => { console.log("Running on " + port) });


//ROUTES

//SELECT
app.get('/api/blogs', function(req, res) {
    Blog.find(function(err, docs) {
        docs.forEach(function(item) {
            console.log("Recived a GET request for _id: " + item._id);
        })
        res.send(docs);
    })
});

app.post('/api/blogs', function(req, res) {
    console.log("Received a POST request");
    for (var key in req.body) {
        console.log(key + ": " + req.body[key]);
    }

    var blog = new Blog(req.body);
    blog.save(function(err, doc) {
        res.send(doc);
    });

});

//ELIMINAR
app.delete('/api/blogs/:id', function(req, res) {
    console.log('Received a DELETE request for _id: ' + req.params.id);
    Blog.remove({ _id: req.params.id }, function(err, doc) {
        res.send({ _id: req.params.id });
    });
});

//ACTUALIZAR
app.put('/api/blogs/:id', function(req, res) {
    console.log('Received an UPDATE request for _id: ' + req.params.id);
    Blog.updateOne({ _id: req.params.id }, req.body, function(err) {
        res.send({ _id: req.params.id });
    });
});