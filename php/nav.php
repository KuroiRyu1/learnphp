<?php
   $link = [
    "index.php" => "Giỏ Hàng",
    "product.php" => "Sản phẩm",
    "cart.php" => "Giỏ hàng",
    "login.php" => "Đăng nhập"
   ]
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="assets/images/header-logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <?php
             foreach ($link as $name =>$key){?>
             <li class="nav-item active">
              <a class="nav-link" href=<?=$name?>><?=$key?>
              </a>
            </li>
            <?php
             }
            ?>
          </ul>
        </div>
      </div>
    </nav>