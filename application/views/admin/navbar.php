<!doctype html>
<html lang="en">

<head>

</head>

<body>

    <nav class="navbar justify-content-center navbar-light bg-light">
        <a class="nav-item btn btn-sm btn-outline-info" href="<?php echo base_url(); ?>index.php/Dashboard/ProductInsert">Add Product
            <i class="fas fa-plus-square fa-lg fa-fw"></i>
        </a>
        &nbsp; &nbsp;
        <button type="button" class="nav-item btn btn-sm btn-outline-primary " data-toggle="modal" data-target="#addCategory">Add Category
            <i class="fas fa-plus-square fa-lg fa-fw"></i>
        </button>

    </nav>



    <!-- Modal -->
    <div class="modal fade" id="addCategory" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modelTitleId">Add Category of Products </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url('index.php/Dashboard/CreateCategory'); ?>" method="post">
                        <div class="form-group">
                            <label for="name">Name : </label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter the Category name " required="required">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal"> Close </button>
                    <input name="add" id="add" class="btn btn-outline-primary" type="submit" value="Add category">
                    </form>
                </div>
            </div>
        </div>
    </div>

<!-- shopping-basket -->

</body>

</html>