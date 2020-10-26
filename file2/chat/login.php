<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">

        <style>
            .uname{
                box-shadow: 0px 0px;
                border-radius: 5px;
            }
            .password{
                box-shadow: 0px 0px;
                border-radius: 5px;
            }
            label{
                font-size: 20px;
                font-family: Rubik;
            }
            .container-fluid .uname{
                width: 50%;
            }
            .container-fluid .password{
                width: 50%;
            }
            .container-fluid{
                border: 3px solid #2c3e50;
                padding-top: 10px;
                padding-left: 20px;
                padding-bottom: 50px;
                width: 50%;
                font-size: 20px;
                margin-top: 5%;
                margin-left: 5%;
            }
            body{
                background-image: url(wallpaper.jpg);
                background-size: cover;
            }
            .forgot{
                margin-left: 7px;
                font-family: Rubik;
                font-size: 20px;
                color: black;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <h1 class="display-4" >Login</h1>
            <br>
            <form action="login2.php" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" name="username" class="uname" placeholder="  Username">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="password" id="exampleInputPassword1"  placeholder="   Password">
                </div>
                <button type="submit" class="btn btn-primary btn-lg">Login</button>
            </form>
            <br>
            <a href="#" class="forgot">Forgot password</a>
        </div>
    </body>
</html>