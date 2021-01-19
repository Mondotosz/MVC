<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Register form</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <form method="post" action="register">
        <div>
            <label for="pseudo" class="form-label">Pseudo *</label>
            <input class="form-control" type="text" id="pseudo" name="pseudo" aria-describedby="pseudoHelp"
            placeholder="Enter pseudo" required <?=(isset($_POST["pseudo"])?'value="'.$_POST["pseudo"].'"':"")?>>
            <div class="form-text" id="pseudoHelp">Pseudo will be shared with other users.</div>
        </div>
        <div>
            <label for="userName" class="form-label">User Name *</label>
            <input class="form-control" type="text" id="userName" name="userName" aria-describedby="userNameHelp"
            placeholder="Enter user name" required <?=(isset($_POST["userName"])?'value="'.$_POST["userName"].'"':"")?>>
            <div class="form-text" id="userNameHelp">User Name will not be shared.</div>
        </div>
        <div>
            <label for="inputEmail" class="form-label">Email address *</label>
            <input class="form-control" type="email" id="inputEmail" name="inputEmail" aria-describedby="emailHelp"
            placeholder="firstname@domain.ch" required <?=(isset($_POST["inputEmail"])?'value="'.$_POST["inputEmail"].'"':"")?>>
            <div class="form-text" id="emailHelp">We'll never share your email with anyone else.</div>
        </div>
        <div>
            <label for="inputPassword" class="form-label">Password *</label>
            <input class="form-control" type="password" id="inputPassword" name="inputPassword" placeholder="Password"
            required>
        </div>
        <div>
            <label for="inputPhoneNumber" class="form-label">Phone number</label>
            <input class="form-control" type="tel" id="inputPhoneNumber" name="inputPhoneNumber"
            placeholder="+41 21 786 78 78" <?=(isset($_POST["inputPhoneNumber"])?'value="'.$_POST["inputPhoneNumber"].'"':"")?>>
        </div>
        <div>
            <input class="form-check-input" type="checkbox" id="checkNewsLetter" name="checkNewsLetter"<?=(isset($_POST["checkNewsLetter"])?'checked="'.$_POST["checkNewsLetter"].'"':"")?>>
            <label for="checkNewsLetter" class="form-label">Newsletter wanted</label>
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
    <script src="view/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>