<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <?php include('partial/nav.php'); ?>

    <div class="container">

    <div class="d-flex justify-content-between py-3">
        <div>
          <a href="index.php" class="btn btn-primary">Back</a>
        </div>
    
    </div>

        <div class="card mt-3 p-4">

            <form method="post">

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Book Name...">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Author</label>
                    <input type="text" name="author" class="form-control" id="exampleFormControlInput1" placeholder="Jhone ...">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">ISBN</label>
                    <input type="text" name="isbn" class="form-control" id="exampleFormControlInput1" placeholder="N2345 ...">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Details</label>
                    <textarea class="form-control" name="details" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>

            </form>
            

            <?php 


        

              include('connect.php');

              if(isset($_POST['title']) && isset($_POST['author']) &&  isset($_POST['isbn'])){

                  $title = $_POST['title'];
                  $author = $_POST['author'];
                  $isbn = $_POST['isbn'];
                  $details = $_POST['details'];

                  $sql = "INSERT INTO books (title, author, isbn,details)
                          VALUES ('".$title."', '".$author."',  '".$isbn."', '".$details."')";

            
                  $conn->query($sql);  
                  
                  //bonus
                  include('sendMessage.php');

                  header("Location: http://form-php.test/index.php");

              } 
            
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>