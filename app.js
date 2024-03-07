const http = require('https');
const hostname = 'andev.genero.co.id';
const port = 4000;
const server = http.createServer((req, res) => {
res.statusCode = 200;
 res.setHeader('Content-Type', 'text/plain');
 res.end('This is a test from nodjs app.js!\n');
});
server.listen(port, hostname, () => {
 console.log(`Server running at http://${hostname}:${port}/`);
});