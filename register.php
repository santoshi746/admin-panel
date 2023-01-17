<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-gradient-warning">
                        
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                           
                            <form action="code.php" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col">
                                <input type="hidden" name="ID">
                                    <div class="form-floating m-2">
                                        <input type="text" name="Firstname" id="Firstname" class="form-control" placeholder="a" required>
                                             <label for="Firstname" >Enter your Firstname :</label>
                                        </div>
                                        </div>
                                        <div class="col">
                                       <div class="form-floating m-2">
                                        <input type="text" name="Lastname" id="Lastname" class="form-control" placeholder="a" required>
                                        <label for="Lastname">Enter your Lastname :</label></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <div class="form-floating m-2">
                                        <input type="date" name="DOB" id="DOB" class="form-control" placeholder="a" required>
                                        <label for="DOB">Enter your DOB :</label>
                                        </div>
                                          </div>
                                        <div class="col">
                                        <div class="form-floating m-2">
                                        <input type="number" name="age" id="age" class="form-control" placeholder="a" required>
                                        <label for="age">Enter your age :</label>
                                        </div>
                                     </div>
                                        </div>
                                        
                                        <div class="form-floating m-2">
                                        <input type="text" name="email" id="email" class="form-control" placeholder="a" required>
                                        <label for="email">Enter your email address:</label>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col">
                                            <label for="gender">Enter your gender:</label><br>
                                        <input type="radio" name="gender" id="" class="mx-2" value="Female">Female <br>
                                        <input type="radio" name="gender" id="" class="mx-2" value="male">Male <br>
                                        <input type="radio" name="gender" id="" class="mx-2" value="Others">Others <br>
                                        </div>
                                        <div class="col">
                                        <div class="form-floating m-2">
                                        <input type="number" name="Aadhar" id="Aadhar" class="form-control" placeholder="a" required>
                                        <label for="Aadhar">Enter your Aadhar no:</label>
                                        </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                            <div class="form-floating m-2">
                                        <input type="number" name="mobile" id="mobile" class="form-control" placeholder="a" required>
                                        <label for="mobile">Enter your mobile no:</label>
                                        </div>
                                        </div>
                                        <div class="col">
                                        <div class="form-floating m-2">
                                        <input type="number" name="alternate" id="alternate" class="form-control" placeholder="a" required>
                                        <label for="alternate">Alternate mobile no:</label>
                                        </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                            <div class="form-floating m-2">
                                        <input type="text" name="Address" id="Address" class="form-control" placeholder="a" required>
                                        <label for="Address">Enter your Address:</label>
                                        </div>
                                        </div>
                                        <div class="col">
                                        <div class="form-floating m-2">
                                        <input type="text" name="state" id="state" class="form-control" placeholder="a" required>
                                        <label for="state">Enter your state:</label>
                                        </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                            <div class="form-floating m-2">
                                        <input type="text" name="district" id="district" class="form-control" placeholder="a" required>
                                        <label for="district">Enter your district:</label>
                                        </div>
                                        </div>
                                        <div class="col">
                                        <div class="form-floating m-2">
                                        <input type="number" name="pin_code" id="pin_code" class="form-control" placeholder="a" required>
                                        <label for="pin_code">Enter your pin code:</label>
                                        </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                            <div class="form-floating m-2">
                                        <input type="text" name="YOP" id="YOP" class="form-control" placeholder="a" required>
                                        <label for="YOP">Year of passout:</label>
                                        </div>
                                        </div>
                                        <div class="col">
                                        <div class="form-floating m-2">
                                        <input type="text" name="refference" id="refference" class="form-control" placeholder="a" required>
                                        <label for="refference">Reffered by:</label>
                                        </div>
                                         </div>
                                         </div>
                                         <label for="passport">Passport photo :</label>
                                         <input type="file" name="passport" id="passport2" class="form-control"  required>
                                         </div>                                  
                                    <input type="submit" value="Add" name="Add" class="btn btn-primary w-25 m-3 float-right">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>