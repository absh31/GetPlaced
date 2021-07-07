<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
    
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="row text-center">
            <div class="text-center">
                <img src="main_logo_dark.png" class="rounded img-fluid" alt="Logo">
            </div>
            <h6>Create an Account for Get Placed</h6>
        </div>
    </div>
    <div class="container info">
        <div class="row">
            <div class="text-center">
                <h2>Company Signup</h2>
            </div>
            <br/>
            <br/>
            <form class="row g-3">
                <div class="col-md-6">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control border border-dark" id="inputName" placeholder="Name">
                </div>
                <div class="col-md-6">
                    <label for="username" class="form-label" style="font-family:Product Sans">Username</label>
                    <input type="text" class="form-control border border-dark" id="inputusername" placeholder="Username">
                </div>
                <div class="col-md-6">
                    <label for="password" class="form-label" style="font-family:Product Sans">Password</label>
                    <input type="password" class="form-control border border-dark" id="password" placeholder="Password">
                </div>
                <div class="col-md-6">
                    <label for="password" class="form-label" style="font-family:Product Sans">Confirm Password</label>
                    <input type="password" class="form-control border border-dark" id="password" placeholder="Confirm Password">
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label" style="font-family:Product Sans">Email</label>
                    <input type="email" class="form-control border border-dark" id="email" placeholder="Email">
                </div>
                <div class="col-md-6">
                    <label for="website" class="form-label" style="font-family:Product Sans">Website</label>
                    <input type="text" class="form-control border border-dark" id="Website" placeholder="Website">
                </div>
                <div class="col-md-6">
                    <label for="contact" class="form-label" style="font-family:Product Sans">Contact</label>
                    <input type="tel" class="form-control border border-dark" id="contact" aria-describedby="emailHelp" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" placeholder="Contact">
                </div>
                <div class="col-md-6">
                    <label for="website" class="form-label" style="font-family:Product Sans">City</label>
                    <input type="text" class="form-control border border-dark" id="City" placeholder="City">
                </div>
                <div class="col-12">
                    <label for="Description" class="form-label">Description</label>
                    <textarea row="5" class="form-control" id="description" placeholder="Description"></textarea>
                </div>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <br>
                    <button class="btn btn-primary" type="button" style="background-color:#28a745;border:solid 2px green">Sign Up</button>
                    <a href="#" class="text-center" style="text-decoration:none">Already Have an Account? Sign In</a>
                </div>
            </form>

        </div>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>
</html>