<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <link rel="stylesheet" href="<?=$GLOBALS['config']['bootstrap']['css'] ?>">
    <link rel="stylesheet" href="chat/style.css">
    <script>let connectionInfo="<?=$GLOBALS['config']['server']['address'].":".$GLOBALS['config']['io']['port']?>"</script>
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
    </script>
    <script src="chat/main.js"></script>
</body>
</html>