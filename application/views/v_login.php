<!DOCTYPE html>
<html>
<head>
 <title>Login</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<body>
<div class = "container col-md-4">
 <div class="wrapper">
    <br>
  <form action="<?php echo site_url('login/ceklogin')?>" method="post" name="Login_Form" class="form-signin">       
      <h2 class="form-signin-heading text-center">FORM LOGIN</h2>
     <hr class="colorgraph"><br>
     <?php
    $info = $this->session->flashdata('info');
    if (!empty($info)){
     echo $info;
    }
     ?>
     
     <input type="text" class="form-control" name="username" placeholder="Username" required="" autofocus="" />
     <br>
     <input type="password" class="form-control" name="password" placeholder="Password" required=""/> 
     <br>        
    
     <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit">Login</button>  
     <button class="btn btn-lg btn-light btn-outline-dark" name="Submit" value="Login" type="Submit">Cancel</button>   
  </form>   
 </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>