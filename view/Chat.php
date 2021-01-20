<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <link rel="stylesheet" href="<?=$GLOBALS['config']['bsCss'] ?>">
    <style>
        .box {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            margin-top:1.5vh;
            margin-bottom:1.5vh;
            height:95vh;
            padding:5px;
            border-radius:25px;
            background-color:red;
        }

        .chat {
            height : 90%;
            background-color: cyan;
            border-radius:25px;
        }

        .prompt-box {
            margin-top:5px;
            height : 10%;
            background-color: white;
            border-radius:25px;
        }

        .message {
            margin-left: 5%;
            margin-bottom:0;
            width: 95%;
            color: red;
            font-size: 50px;
        }
        
        #prompt {
            width : 100%;
            height : 100%;
            border-radius:25px;
            font-size: 25px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="box">
            <div class="chat" id="chat"></div>
            <div class="prompt-box">
                <input type="text" name="prompt" id="prompt"
            </div>
        </div>
    </div>
    <script src="<?=$GLOBALS['config']['bsJs']?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/3.1.0/socket.io.min.js"></script>
    <script>
        const socket = io("localhost:3000");

        let prompt = document.getElementById("prompt");
        let chat = document.getElementById("chat");

        prompt.addEventListener("keyup",(event)=>{
            if (event.key === "Enter") {
                socket.emit("message",prompt.value);
                prompt.value="";
            }
        });

        socket.on("message",(e)=>{
            let messageElement = document.createElement("p");
            messageElement.innerHTML = e;
            messageElement.className="message";
            chat.appendChild(messageElement);
        });
    </script>
</body>
</html>