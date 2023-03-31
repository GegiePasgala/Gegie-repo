
<?php require_once 'include/header.php' ?>

    <h1 class = "text-center">Registration for IT Conference</h1>
    <form>
    <div class ="mb-3">
    <label for = "exampleInputFname" class = "form-label">First Name:</label>
    <input id = "fname" class = "form-control" id = "exampleInputFname" aria-describedby = "Fname">

    </div>
    <div class ="mb-3">
    <label for = "exampleInputLname" class = "form-label">Last Name:</label>
    <input id = "Lname" class = "form-control" id = "exampleInputLname" aria-describedby = "Lname">

    </div>
  <label for = "date">Select Date : </label>
  <input type="date" id = "date" name= "date">

  
  <?php
    if (isset($_POST['submit'])){
        $date = $_POST['date'];
        echo "You selected: $date";
    }
    ?>
    <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Database Admin
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
  <label class="form-check-label" for="flexCheckChecked">
    Software Develper
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
  <label class="form-check-label" for="flexCheckChecked">
    Web Animation
  </label>
</div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address:</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class ="mb-3">
    <label for = "exampleInputNumber" class = "form-label">Contact Number:</label>
    <input id = "Number" class = "form-control" id = "exampleInputNumber" aria-describedby = "Number">
    </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary btn-block">Submit</button>
</form>
 




    <?php require_once 'include/footer.php' ?>