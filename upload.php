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
         
          <a href="view.php" class="view-btn btn btn-outline-info">View Details</a>
         
        </div>
      </nav>
      <main class="container " style="margin-top: 80px;">
          <div class="row">
              <h2 class="text-center text-white">Upload User Details</h2>
            <div class="col col-md-8 col-sm-10 offset-md-2">
                <div id="alert-box">
                    
                </div>
                <form id="myForm">
                    <div class="form-group">
                        <label class="text-white" for="Name">Name</label>
                        <input type="text" id="name" name="name" class="form-control">
                    </div>

                    <!---Mobile-->
                    <div class="form-group">
                        <label class="text-white" for="Name">Mobile</label>
                        <input type="tel" id="mobile" name="mobile" class="form-control" minlength="10" maxlength="10" pattern="[6789][0-9]{9}" title="Plaese Enter an India Phone Number">
                    </div>

                    <!--Adhar Number-->
                    <div class="form-group">
                        <label class="text-white" for="Name">Adhar Number</label>
                        <input type="text" name="adharNum" id="adharNum" minlength="12" maxlength="12" class="form-control" pattern="[2-9]{1}[0-9]{3}[0-9]{4}[0-9]{4}">
                    </div>
                    <!--Dr exp-->
                    <div class="form-group">
                        <label class="text-white" for="Name">Driving License Expiry Date Number</label>
                        <input type="date" class="form-control" min="2020-01-10" id="expdate" name="expdate" value="2020-01-11">
                    </div>
                    <!--Address-->
                    <div class="form-group">
                        <label class="text-white" for="Name">Address</label>
                        <textarea id="address" class="form-control"  rows="2" name="address"></textarea>
                    </div>

                    <!---Adhar Front-->
                    <div class="mb-3">
                        <label for="formFile" class="form-label text-white">Adhar Front</label>
                        <input class="form-control" type="file" id="adharFront" name="adharFront">
                      </div>

                      <!---Adhar Back-->
                    <div class="mb-3">
                        <label for="formFile" class="form-label text-white">Adhar Back</label>
                        <input class="form-control" type="file" id="adharBack" name="adharBack">
                      </div>

                      <div class="mb-3">
                        <label for="formFile" class="form-label text-white">Driving License</label>
                        <input class="form-control" type="file" id="drivingLicense" name="drivingLicense">
                      </div>
                      <div class="form-bottom">
                        <button id="submit-btn" class="btn btn-primary ">Submit</button>
                        <span><img id="loading" src="images/loading.gif" alt="">
                        <img id="success" src="images/success.png" alt="">
                        </span>
                      </div>
                </form>
            </div>
          </div>
      </main>

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