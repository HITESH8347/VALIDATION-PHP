<html>
    <head>
        <title>login</title>
    </head>
    <style>
        fieldset{
            margin-left: 25%;
            background-color: gray;
            border-radius: 5%;
            width: 50%;
        }
        div{
            margin-left: 25%;
        }
        form{
            font-size: large;
            
        }
        p{
            color: red;
            font-style:italic;
            margin-left: 25%;
            font-size:13px;
            margin-top: -1%;
        }
        .error{
            color: red;
        }
    </style>
    <?php
    $usernameErr=$passwordErr="";
    $username=$password="";
    if($_SERVER["REQUEST_METHOD"]=='POST')
    {
        IF(empty($_POST['username']))
        {
            $usernameErr="please username";
        }
        else{
            $username=test_input($_POST['username']);
            if(!preg_match("/^[a-z A-Z-']*$/",$username))
            {
                $usernameErr="only letter";
            }
        }
       if(empty($_POST['password']))
       {
        $passwordErr="please enter password";
       } 
       else{
        echo"login";
       }
    }
    function test_input($data)
    {
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;

    }

    ?>
    <body>
        <form action="#" method="POST">
            <fieldset>
              
                <h2 align="center"><b>Login</b></h2>
                <div>
                <label for="form">Username</label>
                <input type="text" id="form" name="username" placeholder="email or number"><br><br>
                <span class="error"><?php echo $usernameErr ?></span><br>
                <label for="password">Password</label>
                <input type="password"id="password" name="password" placeholder="Password"><BR>
                <span class="error"><?php echo $passwordErr ?></span><br>
                <p><span>Forget Password</span></p><br>
                <input type="submit">
            </div>
            </fieldset>
        </form>
        
    </body>
</html>