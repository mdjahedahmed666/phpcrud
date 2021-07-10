<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css" />

  <!-- Fontawesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
    integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous" />
  <!-- Lato font -->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap"
    rel="stylesheet" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />

  <!-- Custom CSS -->
  <!-- <link rel="stylesheet" href="css/main.css" /> -->
  <link rel="stylesheet" href="css/login.css">

  <title>E-Store</title>
</head>

<body>

<section class="form-signin">
    <form action="insert.php"  method="post" enctype="multipart/form-data">
      <h1 class="h3 text-center mb-3 fw-normal p-3">Please insert data</h1>
  
      <div class="form-floating mb-2">
        <input type="text" class="form-control" name="title" placeholder="Title" require>
        <label for="title">Title</label>
      </div>
      <div class="form-floating mb-2">
        <input type="text" class="form-control" name="price" placeholder="Price" require>
        <label for="price">price</label>
      </div>
      <div class="form-floating mb-2">
        <input type="text" class="form-control" name="description" placeholder="Description" require>
        <label for="description">Description</label>
      </div>
      <div class="mb-2">
      <label for="image">Image</label>
      <br>
        <input type="file" class="form-control" name="image">
        
      </div>
      <input type="submit" class="w-100 btn btn-lg btn-outline-primary mb-3"  name="insert" value="insert">
    </form>
  </section>

  <div class="containe mt-5 pt-5">
  <div class="row">
  <div class="col-md-3 col-lg-4">
  <table class="table table-success table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Price</th>
      <th scope="col">Desc</th>
      <th scope="col">Image</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include("config.php");
    $allData=mysqli_query($conn,"SELECT * FROM `card`");
    while($row=mysqli_fetch_array($allData)){
        echo "
        <tr>
     <td>$row[id]</td>
     <td>$row[title]</td>
     <td>$row[price]</td>
     <td>$row[description]</td>
     <td><img src='$row[image]' width='100px'></td>
     <td><a class='btn btn-warning' href='update.php?  id=$row[id]'>Update</a></td>
     <td><a class='btn btn-warning' href='delete.php? id=$row[id]'>Delate</a></td>
     </tr>
        ";
    }
     ?>
  </tbody>
</table>
  </div>
  </div>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->
  <script src="js/script.js"></script>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>