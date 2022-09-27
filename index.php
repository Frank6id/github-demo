<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form With VAlidation</title>
    <link rel="stylesheet" href="Css-fold/bootstrap.css">
    <link rel="stylesheet" href="Js-fold/bootstrap.js">
    <link rel="stylesheet" href="my-style-css/style.css">
</head>

<body>
    <!--reg form-->
    <div class="container mt-5">
        <div class="row register">
        <h1 class="h1 text-center bg-transparent">Student Registration Form</h1><br> <!--form title-->
        <div class="col-md-3"></div>
        <div class="col-md-6 reg">
        <input type="file" class="mb-2 bg-transparent" required>
             <!--form section-->
        <form class="form-horizontal h3 hr justify-content-center" method="POST" action="welcome.php">
            <div class="row form-group mb-2">
            <label for="fname" class="control-label col-md-4 h4 text-white">Sur Name:</label>
            <input type="text" name="fname" class="col-md-8 form-control-lg bg-transparent inpt-bd" id="fname" required placeholder="enter your surname">
            </div>

            <div class="row form-group mb-2">
            <label for="mdname" class="control-label col-md-4 h4 text-white">Mid Name:</label>
            <input type="text" name="mdname" class="col-md-8 form-control-lg bg-transparent inpt-bd" id="mdname" required placeholder="enter your middlename">
            </div>

            <div class="row form-group mb-2">
            <label for="lsname" class="control-label col-md-4 h4 text-white">Last name:</label>
            <input type="text" name="lstname" class="col-md-8 form-control-lg bg-transparent inpt-bd" id="lsname" required placeholder="enter your lastname">
            </div>

            <div class="row form-group mb-2">
            <label for="phno" class="control-label col-md-4 h4 text-white">Tel :</label>
            <input type="text" name="tel" class="col-md-8 form-control-lg bg-transparent" id="phno" required placeholder="+234 810 531 0843">
            </div>

            <div class="row form-group mb-2">
            <label for="emailInfo" class="control-label col-md-4 h4 text-white">email :</label>
            <input type="text" name="email" class="col-md-8 form-control-lg bg-transparent inpt-bd" id="emailInfo" required placeholder="email@example.com">
            </div>

            <div class="row form-group mb-2">
            <label for="contactInfo" class="control-label col-md-4 h4 text-white">Address :</label>
            <textarea name="address" class="col-md-8 form-control-lg bg-transparent inpt-bd" id="contactInfo" rows="3" required placeholder="No P.O box, input full house address"></textarea>
            </div>

            <div class="row form-group mb-2">
            <label for="dob" class="control-label col-md-4 h4 text-white">D.O.B :</label>
            <input type="date" name="dob" class="col-md-8 form-control-lg bg-transparent inpt-bd" id="dob" required>
            </div>

            <div class="row form-group mb-2">
            <label for="soorigin" class="control-label col-md-4 h4 text-white">S-O-G :</label>
            <select name="sog" class="col-md-8 form-control-lg bg-transparent inpt-bd" id="soorigin" required>
                <option value="Ondo">Ondo</option>
                <option value="Abia">Abia</option>
                <option value="Lagos">Lagos</option>
                <option value="Oshun">Oshun</option>
                <option value="Oyo">Oyo</option>
                <option value="Edo">Edo</option>
                <option value="imo">Imo</option>
                <option value="kaduna">kaduna</option>
                <option value="kebbi">kebbi</option>
                <option value="River">River</option>
            </select>
            </div>

            <div class="row form-group mb-2">
            <label for="country" class="control-label col-md-4 h4 text-white">Country :</label>
            <select name="country" class="col-md-8 form-control-lg bg-transparent inpt-bd" id="country" required>
                <option value="ASia">Asia</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Australia">Australia</option>
                <option value="Ghana">Ghana</option>
                <option value="America">America</option>
                <option value="Luzambe">luzambe</option>
                <option value="Motserat">Motserat</option>
                <option value="Egypt">Egypt</option>
                <option value="Sounth-Africa">South-Africa</option>
             </select>
            </div>

            <div class="row form-group mb-2">
            <label for="gen" class="control-label col-md-4 h4 text-white">Gender :</label>
            <div class="col-md-8 text-white">
            <input name="gender" type="radio" id="mal" class="form-input-control bg-transparent" required>male
            <input name="gender" type="radio" id="fmal" class="form-input-control bg-transparent" required>female
            </div>
            </div>

            <div class="form-group mb-2">
            <div class="col-md-offset">
                <div class="text-center">
                <p class="col-md-10 text-white h6 justify-content-center" required>
                        all field input are required, Read through before you submit.
                </p>
                </div>
            </div></div>

            <div class="form-group">
                <div class="col-md-offset-4 col-md-8">
                <button class="btn btn-default bg-primary text-danger bg-transparent fw-bold h4" type="submit">
                    Submit
                </button>
                </div>
            </div>
         
        </form>
    </div>
        </div>
        </div>
        

    </div>
    
   



<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/5.14.7/umd/popper.min.js"></script>
</body>
</html>