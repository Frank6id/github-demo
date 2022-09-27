<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my login forms </title>
    <link rel="stylesheet" href="../Css-fold/bootstrap.css">
    <link rel="stylesheet" href="../Js-fold/bootstrap.js">
    <link rel="stylesheet" href="../my-style-css/forms.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.2/css/bootstrap-theme.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/fontawesome.min.css">
</head>

<body>
  <!--form container begins here-->
  <div class="container">
    <section class="form mt-5 bg-cl">
    <div class="row">
      <!--form image with a section container div begins here-->
    <div class="col-md-4">
        <img src="../img/lgmein.jpg" alt="" class="img-fluid img-cl rounded-pill">
    </div>

    <!--form input text start here-->
    <div class="col-md-8 px-4">
        <h3 class="mt-3 text-start font-monospace fs-3 fw-bold">Let gets started</h3><hr class="shadow">
    <form action="submit.php" method="POST">
    <h5 class="mt-3 text-end font-monospace fs-3 fw-italic">Insert your Login Details</h5><hr class="shadow">
        
    <div class="row mb-2">
           <div class="input-bux">
            <input type="text" name="Username" autocomplete="on" required>
            <label for="usrname"></label>
           </div>
            <div class="col-sm-6 input-group form-floating mb-2">
              <span class="input-group-text" id="inputGroup-sizing-lg"></i></span>
        <input type="text" name="lname" class="form-control in-br rounded-pill bg-transparent" id="floatingInput validationDefault01" placeholder="enter your last name" required>
          <label for="floatingInput validationDefault01 fw-bold lb-color">last name</label>
            </div>
          </div>
           <!--Email section start--> 
           <div class="input-group form-floating mb-2">
            <span class="input-group-text" id="inputGroup-sizing-lg"></span>
            <input type="email" class="form-control in-br rounded-pill bg-transparent" id="floatingInput validationDefault01" placeholder="name@email.com" required>
            <label for="floatingInput validationDefault01 fw-bold lb-color">Email</label>
        </div>
        <hr class="shadow">
        <!--Package section start-->
        <h3 class="mt-3 text-start font-monospace fs-3 fw-bold h3">Packages</h3>
        <hr class="shadow">
        <div class="row mb-2">
          <div class="col-3 form-check form-check-inline">
            <input type="checkbox" class="form-check-input rounded-pill" id="inlineCheckbox1" value="option1" required>
              <label for="inlineCheckbox1" class="form-check-label">Standard</label>
          </div>
          <div class="col-3 form-check form-check-inline">
            <input type="checkbox" class="form-check-input rounded-pill bg-transparent" id="inlineCheckbox2" value="option2" required>
            <label for="inlineCheckbox2" class="form-check-label">Premium</label>
          </div>
          <div class="col-3 form-check form-check-inline">
            <input type="checkbox" class="form-check-input rounded-pill" id="inlineCheckbox1" value="option3" required>
            <label for="inlineCheckbox3" class="form-check-label">Gold</label>
          </div>
          <div class="col-3 form-check form-check-inline">
            <input type="checkbox" class="form-check-input rounded-pill" id="inlineCheckbox1" value="option4" required>
              <label for="inlineCheckbox4" class="form-check-label">Platium</label>
          </div>
        </div>
        <hr class="shadow">
         <!--Country, phone and gender section start-->
         <div class="row">
           <div class="col">
            <select name="Country" id="" class="pb-2">
              <option value="ng">Country</option>
              <option value="ng">Nigeria</option>
              <option value="ng">Ghana</option>
              <option value="ng">Egypt</option>
              <option value="ng">Uganda</option>
              <option value="ng">Isreal</option>
            </select>
           </div>
           <div class="col-md-6 ">
            <input type="text" class="input-control rounded" id="floatingInput validationDefault01" placeholder="Tel: +2348105310843" required>
            </div>
           <div class="col">
            <select name="Country" id="" class="pb-2">
              <option value="m">Gender</option>
              <option value="m">male</option>
              <option value="f">femal</option>
              <option value="ot">Other</option>
            </select>
           </div>
         </div>
         <hr class="shadow">
         <!--Submit Button section start-->
         <div class="form-row">
          <div class="col-lg-12">
            <button class="btn btn1 btn-primary rounded-pill mb-2 tf" type="button" aria-required="true">Submit</button>
          </div>
        </div>
      <!--footer discription section start-->
      <a href="#" class="link tf">I hvae carefully read through the form details</a>
      <p class="tf">be a member <a href="../my-index-files/index.html" class="link tf">registere here</a></p> 
        </form>
      
    </div>
  </section>
    </div>
  
 
    <?php
    extract($_REQUEST);
    $formDetails.fopen('form-save.txt'.'a');

    fwrite($formDetails, 'fname :');
    fwrite($formDetails, $fname . 'error-log/');
    fwrite($formDetails, 'mdname :');
    fwrite($formDetails, $mdname . 'error-log/');
    fwrite($formDetails, 'lstname :');
    fwrite($formDetails, $lstname . 'error-log/');
    fclose($formDetails);
?>
    







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
</body>
</html>