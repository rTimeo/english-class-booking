<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section class="signup-form">
        <h1>Sign Up</h2> 
        <form action="../models/signup.inc.php" method="post">
            <input type="text" name="name" placeholder="full name">
            <input type="text" name="email" placeholder="email">
            <input type="text" name="uid" placeholder="username">
            <input type="password" name="pwd" placeholder="password">
            <input type="password" name="pwdrepeat" placeholder="repeat password">
            <button type="submit" name="submit">Sign Up</button>


        </form>

    </section>


    <section class="login-form">
        <h1>Sign in</h2> 
        <form action="../models/login.inc.php" method="post">
 
            <input type="text" name="uid" placeholder="username/Email">
            <input type="password" name="pwd" placeholder="password">
            <button type="submit" name="submit">login</button>
        </form>

    </section>
</body>
</html>