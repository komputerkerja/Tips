const express = require('express');
const WebSocket = require('socket.io');

// Web App Setup
const app = express();
const server = app.listen(5500,()=>console.log("Server runing on port 5500"));

app.use(express.static("public"));

// Socket Setup
const websocket = WebSocket(server);
websocket.on("connection", ws => {
    console.log("made socket connection", ws.id);
    ws.on("close",()=>console.log(ws.id, " Leaved"))
    ws.on("chat", data => {
        console.log(data);
        websocket.sockets.emit("chat", data);
    })
})