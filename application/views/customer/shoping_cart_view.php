<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>

<body>

    <?php if ($purchases == null): ?>
    <h2>Your Cart is empty..</h2>
    <?php else: ?>
    <?php
$number = 0;
$total = 0;
foreach ($purchases as $key) {
    $total += $item[$number]['price'];
    $number++;
}

?>

    <div class="container-fluid ">
        <?php for ($i = 0; $i < $number; $i++): ?>
        <div class="border rounded my-2 p-2 row">
            <div class=" col-lg-1 col-md-2 col-sm-12 text-center">
                <img class="rounded-circle" src="/careoff/uploads/<?php echo $item[$i]['thumbnailpic']; ?>" alt="/uploads/<?php echo $item[$i]['thumbnailpic']; ?>"
                    height="95px" width="95px">
                <a href="<?=base_url('index.php/Home/DeletePurchase/') . $purchases[$i]['purchase_id'];?>" type="button" class="close d-md-none "
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </a>
            </div>
            <div class="col-lg-9 col-md-7">
                <h4 class="text-center text-info">
                    <?=$item[$i]['title']?>
                </h4>
                <p class="text-truncate px-2">
                    <?=$item[$i]['description']?>
                </p>
            </div>
            <div class="col-lg-2 col-md-3">
                <a href="<?=base_url('index.php/Home/DeletePurchase/') . $purchases[$i]['purchase_id'];?>" type="button" class="close d-none d-md-block"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </a>
                <br />
                <br />
                <p class="alert alert-info font-weight-bold text-center">
                    <i class="fas fa-rupee-sign fa-sm "></i>
                    <?=$item[$i]['price']?>
                </p>
            </div>


        </div>

        <?php endfor;?>

        <div class=" row">
            <div class="col-md-3 col-sm-12 ">
                <p class="alert alert-info font-weight-bold text-center">Total price :
                    <i class="fas fa-rupee-sign fa-sm "></i>
                    <?=$total?>
                </p>
            </div>

            <div class="col-md-3 col-sm-12 offset-md-6 text-center">
                <a href="<?=base_url('/index.php/Home/ConfirmOrder');?>">
                    <button class="btn btn-lg btn-outline-primary px-5 font-weight-bold text-center">&nbsp; Confirm Order &nbsp;</button>
                </a>
            </div>

        </div>

    </div>

    <?php endif;?>
    <br>
    <a href="<?=base_url();?>">
        <div class=" clo-lg-12 text-center text-info">
            <i class="fas fa-cart-plus fa-5x fa-fw"></i>
            <br>
            <p>Click here purchase more</p>
        </div>
    </a>
</body>

</html>