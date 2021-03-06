<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
</head>

<body>

  <div class="rows my-2">
    <div class="col col-xl-6 col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-12 col-xs-12">
      <div class="card ">
        <div class="card-header">
          Your purchase details
        </div>
        <div class="card-body">
          <form action="" method="post">

            <div class="form-group">
              <label for="fullname">Full Name : </label>
              <input type="text" class="form-control" name="fullname" id="fullname" aria-describedby="helpId" value="<?php echo $_SESSION['fullname']; ?>"
                required>
              <small id="helpId" class="form-text text-muted">Help text</small>
            </div>

            <div class="form-group">
              <label for="phone">Mobile Number : </label>
              <input type="text" class="form-control" name="phone" id="phone" aria-describedby="helpId" value="+<?php echo $_SESSION['phone']; ?>"
                required>
              <small id="helpId" class="form-text text-muted">Help text</small>
            </div>

            <div class="row">
              <div class="col col-md-6 col-sm-12 col-xs-12 form-group">
                <label for="country">Country : </label>
                <select class="form-control" name="country" id="country" aria-describedby="helpId" required>
                  <?php
if (COUNTRY_LIST) {
    foreach (COUNTRY_LIST as $key => $value) {
        if ($value == 'India') {
            echo "<option value='$value' selected>$value</option>";
        } else {
            echo "<option value='$value'>$value</option>";
        }
    }
}

?>
                </select>
                <small id="helpId" class="form-text text-muted">Select your country from above list</small>
              </div>


              <div class="col col-md-6 col-sm-12 col-xs-12 form-group">
                <label for="state">State : </label>
                <select class="form-control" name="state" id="state" aria-describedby="helpId" required>
                  <?php
if (STATE_LIST) {
    foreach (STATE_LIST['India'] as $key => $value) {
        if ($value == 'Kerala') {
            echo "<option value='$value' selected>$value</option>";
        } else {
            echo "<option value='$value'>$value</option>";
        }
    }
}

?>
                </select>
                <small id="helpId" class="form-text text-muted">Select your state from above list</small>
              </div>
            </div>


            <div class="row">
              <div class="col col-md-6 col-sm-12 col-xs-12 form-group">
                <label for="district">District : </label>
                <select class="form-control" name="district" id="district" aria-describedby="helpId" required>
                  <?php
if (DISTRICT_LIST) {
    foreach (DISTRICT_LIST['Kerala'] as $key => $value) {
        echo "<option value='$value'>$value</option>";
    }
}

?>
                </select>
                <small id="helpId" class="form-text text-muted">Select district from above list</small>
              </div>


              <div class="col col-md-6 col-sm-12 col-xs-12 form-group">
                <label for="city">City : </label>
                <input type="text" class="form-control" name="city" id="city" aria-describedby="helpId" placeholder="Your City" required>
                <small id="helpId" class="form-text text-muted">Help text</small>
              </div>
            </div>

            <div class="form-group">
              <label for="zipcode">Zipcode/Pincode : </label>
              <input type="number" class="form-control" name="zipcode" id="zipcode" aria-describedby="helpId" placeholder="Your Zipcode or Pincode"
                required>
              <small id="helpId" class="form-text text-muted">Help text</small>
            </div>

            <div class="form-group">
              <label for="address">Address : </label>
              <textarea class="form-control" name="address" id="address" rows="3" placeholder="Address" required></textarea>
            </div>


            <input type="submit" name="order" id="order" class="btn btn-outline-primary float-right" type="button" value="Order">

          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</body>

</html>