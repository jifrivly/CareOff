<!doctype html>
<html lang="en">

<head>
<style>

</style>
</head>

<body>

    <!-- <div class="card-group col col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12"> to show product items in same hight -->
    <div class="col col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <div class="card border-light bg-light text-center m-1 p-1 ">
            <a href="<?=base_url('/index.php/Home/ViewDetails/') . $p_id?>">

                <img class="card-img-top" src="/careoff/uploads/<?php echo $mainpic ?>" alt="Product Image" height="250px">
                <div class="card-body">
                    <h4 class="card-title text-primary">
                        <?php echo $title ?>
                    </h4>
                    <p class="card-text" style="color: black;">
                        <?php echo $description ?>
                    </p>
                    <p class="card-text text-success text-right">
                        <i class="fas fa-rupee-sign fa-sm "></i>
                        <?php echo $price ?>
                    </p>
                </div>

            </a>
            <div class="card-footer bg-light align-bottom">
                <a href="<?=base_url('/index.php/Home/ViewDetails/') . $p_id?>" class="card-link float-left text-primary">
                    <i class="far fa-eye"></i> View</a>

                <a href="<?=base_url('/index.php/Home/Purchase/') . $p_id?>" class="card-link float-right text-success">
                    <i class="fas fa-shopping-cart"></i> Purchase</a>
            </div>
        </div>
    </div>




</body>

</html>