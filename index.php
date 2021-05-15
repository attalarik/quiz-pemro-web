<!DOCTYPE html>
<html>
<head>
    <link href="bootstrap.css" rel="stylesheet" media="screen"> 
</head>
<body>
    <div style="color: red;margin-bottom: 15px;">
        <?php
        if(isset($_COOKIE["message"])){ 
        echo $_COOKIE["message"]; 
        }
        ?>
    </div>
    <div class="navbar navbar-static-top">
    <div class="navbar-inner">
    <div class="container">
    <a class="brand" href="#">Login</a>
    </div>
    </div>
    </div>
            
    <div class="container">
    <div class="row">
    <div class="span12">
    </br>
    </div>
                
    </br>
    <div class="span4" style="margin-left: 330px;">
    <div class="navbar">
    <div class="navbar-inner">
    <form method="post" action="login.php">
        <label>Username</label><br>
        <input type="text" name="username" placeholder="Username"><br><br>
        
        <label>Password</label><br>
        <input type="password" name="password" placeholder="Password"><br><br>
        
        <button type="submit">Login</button>
    </form>
    </div>
    </div>
    </div>                
    </div>
    </div>
</body>
</html>