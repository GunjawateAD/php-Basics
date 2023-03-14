 <?php include "db.php"; ?>
 <?php include "functions.php"; ?>

 <?php
    if (isset($_POST['submit'])) {
        UpdateTable();
    }
    ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
 </head>
 <div class="container">
     <div class="col-sm-6">
         <form action="login_update.php" method="post">
             <div class="form-group">
                 <label for="username">Username</label>
                 <input type="text" name="username" class="form-control">
             </div>

             <div class="form-group">
                 <label for="password">Password</label>
                 <input type="password" name="password" class="form-control">
             </div>

             <div class="form-group">
                 <select name="id" id="">
                     <?php
                        showAllData();
                        ?>

                 </select>
             </div>

             <input class="btn btn-primary" type="submit" name="submit" value="UPDATE">
         </form>
     </div>
 </div>

 <body>

 </body>

 </html>