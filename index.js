const http = require("http");

const requestListener = function (req, res) {
  res.writeHead(200);
  res.end("This is the endpoint for socket.io");
};

const app = http.createServer(requestListener);

const io = require("socket.io")(app, {
  cors: {
    origin: "http://localhost:8000",
    methods: ["GET", "POST"],
  },
});

io.on("connection", (socket) => {
  console.log("an user connected");

  socket.on("message", (e) => {
    io.emit("message", e);
  });

  socket.on("disconnect", () => {
    console.log("an user disconnected");
  });
});

app.listen(3000, () => {
  console.log("listening on *:3000");
});
