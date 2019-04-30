<!-- <?php



testArray($p_data);
echo $c_name;

?> -->
<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body class="">

    <div class="container ">

        <div id="productcarouselId" class="carousel slide " data-ride="carousel" data-interval="3000">
            <ol class="carousel-indicators ">
                <li data-target="#productcarouselId" data-slide-to="0" class="active"></li>
                <li data-target="#productcarouselId" data-slide-to="1"></li>
                <li data-target="#productcarouselId" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner my-2 " role="listbox">
                <div class="carousel-item active text-center">
                    <img class="" src="/careoff/uploads/<?php echo $p_data['mainpic'] ?>" height="350px" width="auto" alt="First slide">
                </div>
                <div class="carousel-item text-center">
                    <img src="/careoff/uploads/<?php echo $p_data['side1pic'] ?>" height="350px" width="auto" alt="Second slide">
                </div>
                <div class="carousel-item text-center">
                    <img src="/careoff/uploads/<?php echo $p_data['side2pic'] ?>" height="350px" width="auto" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev bg-light" href="#productcarouselId" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next bg-light" href="#productcarouselId" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <h3 class="text-center font-weight-bold mt-2 ">
            <?= $p_data['title']?>
        </h3>
        <p class="text-center">
            <?= $p_data['description']?>
        </p>

        <div class="px-5">
            <p class="float-md-left alert alert-info font-weight-bold text-center">
                <i class="fas fa-rupee-sign fa-sm "></i>
                <?= $p_data['price']?>
            </p>
            <a href="<?=base_url('/index.php/Home/Purchase/') . $p_data['p_id']?>" class="float-md-right">
                <p class="alert alert-info text-success text-center">
                    <i class="fas fa-shopping-cart"></i> Purchase
                </p>
            </a>
        </div>
    </div>
</body>

</html>