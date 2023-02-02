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
            <h2>Books</h2>
        </div>
        <div>
            <a href="create.php"   class="btn btn-primary">Create</a>
        </div>
    </div>

        <div class="card mt-3">
         <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">ISBN</th>
                <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                <?php  include('connect.php');?>

                <?php  
                    $sql = "Select * from books order by id desc";

                    $result =  $conn->query($sql);  
                ?>

                <?php  if ($result->num_rows > 0) {  ?>

                    <?php  while($row = $result->fetch_assoc()) { ?>    
                        <tr>
                            <th scope="row"><?php echo $row['id']; ?></th>
                            <td><?php echo $row['title']; ?></td>
                            <td><?php echo $row['author']; ?></td>
                            <td><?php echo $row['isbn']; ?></td>
                            <td>
                                <a class="btn-sm btn" href="delete.php?id=<?php echo $row['id'];?>">delete</a>
                            </td>
                            </tr>
                        <tr>
                    <?php } ?>  
                    
                    
                <?php } ?>
            
            </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>