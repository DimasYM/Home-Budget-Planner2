<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RegistrasionForm</title>
    <link rel="stylesheet" href="./style/styleLogin.css">
</head>
<body>
    <div class="wrapper">
        <form action="./login.php">
            <h1>Registrasion</h1>
            <div class="input-box">
                <input type="text" id="fullname" name="fullname" placeholder="Fullname" required>
            </div>
            <div class="input-box">
                <input type="text" id="username" name="username" placeholder="Username" required>
            </div>
            <div class="input-box">
                <input type="text" id="phonenumber" name="phonenumber" placeholder="Phone Number" required>
            </div>
            <div class="input-box">
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <div class="input-box">
                <input type="password" id="konfirmasipassword" name="konfirmasipassword" placeholder="Confirm Password" required>
            </div>

            <button type="submit" class="btn">Registrasi</button>
        </form>
    </div>
</body>
</html>

