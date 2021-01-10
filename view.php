<?php 
include "includes/connection.php";




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!--FavIcon-->
    <link rel="shortcut icon" href="images/favIcon.jpg" type="image/x-icon">
    <!--Custom css-->
    <link rel="stylesheet" href="style.css">
    <title>RidoBiko</title>
</head>

<body style="background-color: #151A33;">

    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container">
          <a href="index.php" class="navbar-brand"><img class="logo-img" src="images/icon.png" alt="RidoBiko"></a>
         
           <input type="text" placeholder="Live Search..." id="search-box">
         
        </div>
      </nav>
      <main class="container " style="margin-top: 80px;">
         <div class="row">
         <div class="col col-md-12 col-sm-12">
           <!---data table-->
        <table class="table table-dark table-hover" >
            <thead >
              <tr>
                <th scope="col">S.No</th>
                <th scope="col">Name</th>
                <th scope="col">Mobile</th>
                <th scope="col">Adhar Number</th>
                
                <th scope="col">Driving License Exp</th>
                <th scope="col">Address</th>
                <td>Documents</td>
              </tr>
            </thead>
            <tbody id="viewTable">
              <?php 
              
             
              $query = "SELECT * FROM `userdetails`";
              $run = mysqli_query($conn,$query);
              while($data=mysqli_fetch_assoc($run)){

              
              ?>
              <tr>
              <?php 
              $af=$data['adhar_front'];
              $ab =$data['adhar_back'];
              $dl = $data['driving_img'];
              
              ?>
                <th scope="row"><?php echo $data['id'] ?></th>
                <td><?php echo $data['name'] ?></td>
                <td><?php echo $data['mobile'] ?></td>
                <td><?php echo $data['adhar_Number'] ?></td>
                <td><?php echo $data['Dr.exp'] ?></td>
                
                <td><?php echo $data['address'] ?></td>
                <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#<?php echo $data['name'].$data['id'] ?>">
                    View
                  </button></td>
              </tr>
             
  <div class="modal fade" id="<?php echo $data['name'].$data['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><?php echo $data['name'] ?></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="includes/docs_Images/<?php echo $af; ?>" alt="adhar front" class="img-fluid mt-1" style="width: 500px; height: 250px;">
          <img src="includes/docs_Images/<?php echo $ab; ?>" class="img-fluid mt-1" style="width: 500px; height: 250px;">
          <img src="includes/docs_Images/<?php echo $dl;  ?>" alt="adhar front" class="img-fluid mt-1" style="width: 500px; height: 250px;">
            
         
        </div>
       
      </div>
    </div>
  </div>
      <!--Modal end-->
      <?php 
      }
      ?>
            </tbody>
          </table>
         </div>
        </div>
          <div class="table-loading">
          <img src="images/loading.gif" alt="">
          </div>
          <!---data table end-->
      </main>
      
      <!--Modal-->
      
  
  
      
    <!--Jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!---Bootrap js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <!--Custom js-->
    <script src="app.js"></script>

</body>

</html>