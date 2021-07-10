

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
<?php
include("config.php");

$id=$_GET['id'];
$Select_query="SELECT * FROM `card` WHERE id='$id'";
$record= mysqli_query($conn,$Select_query);
$data= mysqli_fetch_array($record);
?>

<section class="form-signin">
    <form action="updateAction.php"  method="post" enctype="multipart/form-data">
      <h1 class="h3 text-center mb-3 fw-normal p-3">Update your data</h1>
  
      <div class="form-floating mb-2">
        <input type="text" class="form-control" name="title" placeholder="Title" value="<?php echo $data['title'] ?>" required>
        <label for="title">Title</label>
      </div>
      <div class="form-floating mb-2">
        <input type="text" class="form-control" name="price" placeholder="Price" value="<?php echo $data['price'] ?>" required>
        <label for="price">price</label>
      </div>
      <div class="form-floating mb-2">
        <input type="text" class="form-control" name="description" placeholder="Description" value="<?php echo $data['description'] ?>" required>
        <label for="description">Description</label>
      </div>
      <div class="mb-2">
      <label for="image">Image</label>
      <br>
        <input type="file" class="form-control" name="image">
        
      </div>
      <div class="mb-2">
      <img src="<?php echo $data['image'] ?>" width="150px" alt="image">
      </div>
      <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
      <input type="submit" class="w-100 btn btn-lg btn-outline-primary mb-3"  name="update" value="update">
    </form>
  </section>


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