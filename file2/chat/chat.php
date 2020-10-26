<?php
session_start();
include 'dbh.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Chat</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Merriweather:700|Nunito:600|Rubik&display=swap" rel="stylesheet">
        <link href="chat.js">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>
            body{
                background-image: url(wallpaper2.jpg);
                background-size: cover;
            }
            form{
                border-color:black;
                margin-left: 5px;
                font-family: Nunito;
            }
            .btn{
                margin-top: 5px;
                margin-left: 7px;
                border-color: black;
            }
            .online{
                padding: 10px;
                margin: 10px;
                background-color: aliceblue;
                border-radius: 5px;
            }
            .show{
                background-color: azure;
                margin: 10px;
                height: 450px;
                padding: 10px;
                border: 2px solid;
                overflow: scroll;
            }
            span{
                font-family: Nunito;
                font-size: 20px;
                margin-left: 10px;
            }
            .name{
                margin-right: 10px;
                padding: 2px;
                font-size: 30px;
                font-family: Merriweather;
            }
            .total{
                background-color: antiquewhite;
                padding: 7px;
            }
            .mssg{
                margin: 10px;
            }
            textarea{
                width: 60%;
                height: 60px;
                resize: none;
            }
            .logout{
                margin-top: 0.4%;
                margin-left: 80%;
            }
        </style>
    </head>
    <body>
        <form action="logout.php">
            <button class="btn btn-primary btn-lg logout">Logout</button>
        </form>
        <div class="online">
        <h1 class="display-4">User forum for discussion
            <h1>
            <?php echo $_SESSION['name']; ?>
            </h1>
        </div>
        <div class="show">
            <?php
             $sql="select * from posts";
            $result=$conn->query($sql);
            if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
                    echo "<span class='total'>"."<span class='name'>".$row["username"]."</span>"." ( ".$row["date"].")"."<br>"."</span>";
                    #echo "<button class='glyphicon glyphicon-arrow-up'>".'Upvote'."</button>";
                    echo "<form action='score.php' method='post'>"."<button class='btn' type='submit'>"."Upvote"."<i class='fa fa-arrow-up' name='score'>"."</i></button>"."       ".$row['score']."</form>";
                    #echo "<span>".$row['score']."</span>";
                    #echo "<span class='glyphicon glyphicon-arrow-up' aria-hidden="true"></span>";
                    echo ""."<span>".$row["message"]."</span>"; 
                    echo "<br>";
                }
            }else{
                echo "0 messages";
            }
            $conn->close();
            ?>
        </div>
        <div class="mssg">
            <form action="send.php" method="post">
                <textarea name="message" placeholder="Type a message"></textarea><br>
                <script src="jquery.js"></script>
                <script src="caret.js"></script>
                <script>
                    var lastTextCursorPosition;
                    $('#textarea').on('mouseup keydown', function(e){
                                      lastTextCursorPosition =$(this).caret();
                    console.log(lastTextCursorPosition);
                                      });
                </script>
                <button class="btn btn-primary btn-lg" type="submit">Send</button>
            </form>
        </div>
    </body>
</html>