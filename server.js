const express = require('express');
const { exec } = require('child_process');
const app = express();
const port = 3000;

app.use(express.json());
app.use(express.static('public'));

// API per avviare il server
app.post('/start-server', (req, res) => {
    exec('your-start-command-here', (error, stdout, stderr) => {
        if (error) {
            console.error(`exec error: ${error}`);
            return res.status(500).send('Error starting server');
        }
        res.send('Server started');
    });
});

// API per fermare il server
app.post('/stop-server', (req, res) => {
    exec('your-stop-command-here', (error, stdout, stderr) => {
        if (error) {
            console.error(`exec error: ${error}`);
            return res.status(500).send('Error stopping server');
        }
        res.send('Server stopped');
    });
});

// API per riavviare il server
app.post('/restart-server', (req, res) => {
    exec('your-restart-command-here', (error, stdout, stderr) => {
        if (error) {
            console.error(`exec error: ${error}`);
            return res.status(500).send('Error restarting server');
        }
        res.send('Server restarted');
    });
});

app.listen(port, () => {
    console.log(`Server is running on http://localhost:${port}`);
});
