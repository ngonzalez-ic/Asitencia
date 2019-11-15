

<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">
   <link rel="icon" href="images/icons/favicon.ico">

   <title>login</title>

   <!-- Bootstrap core CSS -->


   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



<body>
   <div class="container">
      <div class="row">
         <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
               <div class="card-body">
                  <h5 class="card-title text-center">Sign In</h5>
                  <form class="form-signin" action="verificarLogin.php" method="POST">
                     <div class="form-label-group">
                        <input type="email" name ="correo" id="inputEmail" class="form-control" placeholder="Email address" required
                           autofocus>
                        <label for="inputEmail">Email address</label>
                     </div>

                     <div class="form-label-group">
                        <input type="password" name="clave"id="inputPassword" class="form-control" placeholder="Password" required
                           name="correo">
                        <label for="inputPassword" >Password</label>
                     </div>

                   
                     <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
                     <hr class="my-4">


                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</body>

</html>