<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <link rel="stylesheet" href="<?=$GLOBALS['config']['bsCss'] ?>">
</head>
<body>
    <p>Chat</p>
    <script src="<?=$GLOBALS['config']['bsJs']?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/3.1.0/socket.io.min.js"></script>
    <script>
        const socket = io("localhost:3000");
    </script>
</body>
</html>