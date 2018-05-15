<!doctype html>
<html lang="en">

<head>
    <title>CareOff</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
        crossorigin="anonymous">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9"
        crossorigin="anonymous">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.12/js/all.js" integrity="sha384-Voup2lBiiyZYkRto2XWqbzxHXwzcm4A5RfdfG6466bu5LqjwwrjXCMBQBLMWh7qR"
        crossorigin="anonymous"></script>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
        <a class="navbar-brand" href="<?php echo base_url(''); ?>">CareOff</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        Categories
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php
if (CATEGORY_LIST) {
    foreach (CATEGORY_LIST as $key => $value) {
        echo "<a class='dropdown-item' href='#'> $value </a>";
    }
} else {
    echo "<a class='dropdown-item' href='' > Please add categories to show here</a>";
}
?>
                    </div>
                </li>
            </ul>

            <form class="form-inline px-2 my-3 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-1 my-sm-0" type="submit">Search</button>
            </form>

            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <?php
$this->load->library('session');
if (isset($_SESSION['logged_in'])) {
    if ($_SESSION['logged_in'] === true && $_SESSION['roll'] == 'customer') {
        echo '<a class="nav-link" href="' . base_url('index.php/Home/ViewCart');
        echo '"><i class="fas fa-shopping-cart fa-lg"></i> ' . $_SESSION['name'] . '\'s Cart</a>';
    }
}
?>
                </li>
                <li class="nav-item">
                    <?php
$this->load->library('session');
if (!isset($_SESSION['logged_in'])) {
    echo '<a class="nav-link" href="" data-toggle="modal" data-target="#signin"><i class="fas fa-sign-in-alt fa-lg"></i> SignIn</a>';
} else {
    if ($_SESSION['logged_in'] === true) {
        echo '<a class="nav-link" href="';
        echo base_url('index.php/Auth/logout');
        echo '"><i class="fas fa-sign-out-alt fa-lg"></i> Log out</a>';
    }
}
?>
                </li>
            </ul>

        </div>
    </nav>

    <!--Sign in Modal -->
    <div class="modal fade" id="signin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sign In</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url('index.php/Auth/signin'); ?>" method="post">
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter E-mail"
                                required="required">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required="required">
                        </div>
                </div>
                <div class="modal-footer">
                    New customer??
                    <a href="" data-toggle="modal" data-target="#signup">Register</a>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" name="signin" value="Sign In" />
                </div>
                </form>
            </div>
        </div>
    </div>

    <!--Sign up Modal -->
    <div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Register</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url('index.php/Auth/register'); ?>" method="post">
                        <div class="form-group">
                            <label for="InputFullName">Full Name</label>
                            <input type="text" class="form-control" id="InputFullName" name="name" placeholder="Enter your name" required="required">
                        </div>
                        <div class="form-group">
                            <label for="InputPhone">Phone number</label>
                            <input type="tel" class="form-control" id="InputPhone" name="phone" placeholder="Enter your phone number" required="required">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter E-mail"
                                required="required">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Create new password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" required="required">
                        </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" name="register" value="Register" />
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
        crossorigin="anonymous"></script>
</body>

</html>