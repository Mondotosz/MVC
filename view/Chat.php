<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <link rel="stylesheet" href="<?=$GLOBALS['config']['bootstrap']['css'] ?>">
    <style>
        body {
            background-color: lightgray;
        }

        .box {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            margin-top:2.5vh;
            margin-bottom:2.5vh;
            height:95vh;
            padding:5px;
            border-radius:25px;
            background-color:darkgrey;
        }

        .chat {
            height : 95%;
            background-color: white;
            border-radius:25px;
            overflow:hidden;
            padding-top:15px;
            padding-left:20px
        }

        .prompt-box {
            margin-top:5px;
            height : 5%;
            background-color: white;
            border-radius:25px;
            padding-left:20px;
        }

        .message {
            margin-bottom:0;
            width: 95%;
            font-size: 25px;
        }
        
        #prompt {
            width : 100%;
            height : 100%;
            border-radius:25px;
            font-size: 25px;
            outline:none;
            border-style:none;

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
    <script src="<?=$GLOBALS['config']['bootstrap']['js']?>"></script>
    <script src="<?=$GLOBALS['config']['io']['js']?>"></script>
    <script>
        if(typeof window.localStorage.getItem('username') == 'undefined' || window.localStorage.getItem('username') == null){
            let newName;
            do {
                newName=prompt("please enter a name");
            } while (newName == null);

            window.localStorage.setItem('username',newName);
        }
    </script>
    <script>
        const socket = io("<?=$GLOBALS['config']['server']['address'].":".$GLOBALS['config']['io']['port']?>");

        let prompt = document.getElementById("prompt");

        window.onload = ()=>{
            prompt.focus();
        }

        let chat = document.getElementById("chat");

        function scrollToBottom (id){
            let div = document.getElementById(id);
            div.scrollTop = div.scrollHeight - div.clientHeight;
        }

        prompt.addEventListener("keyup",(event)=>{
            if (event.key === "Enter") {
                let m = {"username":window.localStorage.getItem('username'),"message":prompt.value};
                socket.emit("message",m);
                prompt.value="";
            }
        });

        socket.on("message",(e)=>{
            let messageElement = document.createElement("p");
            messageElement.innerHTML = e.username+" : "+e.message;
            messageElement.className="message";
            chat.appendChild(messageElement);
            scrollToBottom("chat");
        });
    </script>
</body>
</html>