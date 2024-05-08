<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/tooplate-main.css">
    <link rel="stylesheet" href="assets/css/owl.css">
<title>Title</title>
</head>
<body>
 <?php include ("layout/header.php")?>
 <?php include ("nav.php")?>
<br>
<br>
 <div class="container">
   <form action = "login_check.php" method = "post">
   <div class="form-group">
      <label for="username">Username</label>
      <input type="text" name="username" id="username" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="text" name="password" id="password" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    <button class = "btn btn-success">Đăng nhập</Button>
   </form>
 </div>
 <?php include ("layout/subscribe.php")?>
 <?php include ("layout/footer.php")?>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>