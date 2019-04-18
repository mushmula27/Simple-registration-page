<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>My Registration Page</title>
    <style> .form-text {color: red;} </style>
</head>

<?php
$username_err = "";
$password_err = "";
$password_confirmation_err = "";

$url_errors = $_SERVER["QUERY_STRING"];
parse_str(urldecode($url_errors), $get_errors);
if (!empty($get_errors)) {
    $username_err = htmlspecialchars($get_errors["usernameerr"]);
    $password_err = htmlspecialchars($get_errors["passworderr"]);
    $password_confirmation_err = htmlspecialchars($get_errors["passwordconferr"]);
}

?>

<body>
<div class="container">
<div class="row">

<div class="col-md-3 col-sm-12">
</div>

<div class="col-md-6 col-sm-12">
    <h2>Sign Up</h2>

    <form action="registration.php" method="post">
    <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" placeholder="Username" name="username" id="username">
            <span class="form-text"><?php echo $username_err; ?></span>
            <div class="invalid-feedback">
          Please choose a username.
            </div>
    </div>

    <div class="form-group">
    
            <label for="password">Password</label>
            <input type="password" class="form-control" placeholder="Password" name="password" id="password">
            <small id="passwordHelpBlock" class="form-text text-muted">Must be at least 8 characters long.</small>
            <span class="form-text"><?php echo $password_err; ?></span>
        
    </div>

    <div class="form-group">
       
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" class="form-control" placeholder="Repeat password" name="password_confirmation" id="password_confirmation">
            <span class="form-text"><?php echo $password_confirmation_err; ?></span>
       
    </div>
        <div>
            <input type="submit" class="btn btn-primary" value="Submit">
        </div>

    </form>
</div>
<div class="col-md-3 col-sm-12">
</div>

</div>

</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html> 