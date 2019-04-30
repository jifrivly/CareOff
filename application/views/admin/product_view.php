<!doctype html>
<html lang="en">

<head>

</head>

<body>

    <div class="col col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12">

        <div class="card border-light bg-light text-center m-1 p-1 ">
            <img class="card-img-top" src="../uploads/<?php echo $mainpic ?>" alt="Product Image" height="250px">
            <div class="card-body">
                <h4 class="card-title">
                    <?php echo $title ?>
                </h4>
                <p class="card-text">
                    <?php echo $description ?>
                </p>
                <p class="card-text text-success text-right">
                    <i class="fas fa-rupee-sign fa-sm "></i>
                    <?php echo $price ?>
                </p>
            </div>
            <div class="card-footer bg-light">

                <!-- Trying to pass the P_id through a hidden form -->
                <!-- <form action="<?=base_url('/index.php/Dashboard/UpdateProduct')?>" method="post">
                    <input type="text" name="p_id" id="p_id" value="<?=$p_id?>" hidden>
                    <a type="submit" class="card-link float-left text-primary">
                        <i class="far fa-edit "></i>Update</a>
                </form> -->


                <a href="<?=base_url('/index.php/Dashboard/UpdateProduct/') . $p_id?>" class="card-link float-left text-primary">
                    <i class="far fa-edit "></i> Update</a>
                <a href="<?=base_url('/index.php/Dashboard/DeleteProduct/') . $p_id?>" class="card-link float-right text-danger">
                    <i class="fas fa-trash-alt "></i> Delete</a>
            </div>
        </div>
    </div>




</body>

</html>

<!-- Required meta tags -->
<!-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->

<!-- Bootstrap CSS -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous"> -->

<!-- Font Awesome CSS -->
<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9"
        crossorigin="anonymous"> -->


<!-- Font Awesome JS -->
<!-- <script defer src="https://use.fontawesome.com/releases/v5.0.12/js/all.js" integrity="sha384-Voup2lBiiyZYkRto2XWqbzxHXwzcm4A5RfdfG6466bu5LqjwwrjXCMBQBLMWh7qR"
        crossorigin="anonymous"></script>  -->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script> -->