<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <?php include('../partial/nav.php'); ?>

    <div class="container">

    <div class="d-flex justify-content-between py-3">
        <div>
          <a href="index.php" class="btn btn-primary">Back</a>
        </div>
    
    </div>

        <div class="card mt-3 p-4">

            <form method="post">

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="member name...">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Contact</label>
                    <input type="text" name="contact" class="form-control" id="exampleFormControlInput1" placeholder="phone ...">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="text" name="email" class="form-control" id="exampleFormControlInput1" placeholder="email ...">
                </div>


                <div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>

            </form>
            

            <?php 


        

              include('../connect.php');

              if(isset($_POST['name']) && isset($_POST['contact']) &&  isset($_POST['email'])){

                  $name = $_POST['name'];
                  $contact = $_POST['contact'];
                  $email = $_POST['email'];
                

                  $sql = "INSERT INTO members (name, contact,email)
                          VALUES ('".$name."', '".$contact."',  '".$email."')";

            
                  $conn->query($sql);  
                  
                  //bonus
                  //include('sendMessage.php');

                  header("Location: http://localhost/form-php/members/index.php");

              } 
            
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>