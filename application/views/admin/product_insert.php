<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
        crossorigin="anonymous">
    <title>CareOff</title>
</head>

<body>

    <!-- contents -->
    <div class="rows my-2">
        <div class="col col-xl-6 col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-12 col-xs-12">
            <div class="card ">
                <div class="card-header">
                    Add product
                </div>
                <div class="card-body">
                    <?php echo form_open_multipart(''); ?>
                    <div class="form-group">
                        <label for="title">Title : </label>
                        <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="Title of product">
                        <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>


                    <div class="form-group">
                        <label for="category">Category</label>
                        <select class=" form-control" name="category" id="category" aria-describedby="helpId">
                            <?php
if (CATEGORY_LIST) {
    foreach (CATEGORY_LIST as $key => $value) {
        echo "<option value='$key'>$value</option>";
    }
} else {
    echo "<option > Please add categories to show here</option>";
}

?>
                        </select>
                        <small id="helpId" class="form-text text-muted">Select category of product from above list</small>
                    </div>


                    <div class="form-group">
                        <label for="description">Description : </label>
                        <textarea class="form-control" name="description" id="description" rows="3" placeholder="Few description about the product"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="price">Price : </label>
                        <input type="number" class="form-control" name="price" id="price" aria-describedby="helpId" placeholder="Unit price of product"
                            step="any">
                        <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>

                    <div class="form-group">
                        <label for="mainpic">Photos of product</label>
                        <input type="file" class="form-control-file" name="mainpic" id="mainpic" aria-describedby="fileHelpId">
                        <small id="fileHelpId" class="form-text text-muted">Main picture of product</small>
                    </div>

                    <div class="form-group">
                        <input type="file" class="form-control-file" name="thumbnailpic" id="thumbnailpic" aria-describedby="fileHelpId">
                        <small id="fileHelpId" class="form-text text-muted">Thumbnail of product</small>
                    </div>

                    <div class="form-group">
                        <input type="file" class="form-control-file" name="side1pic" id="side1pic" aria-describedby="fileHelpId">
                        <small id="fileHelpId" class="form-text text-muted">Side view of product</small>
                    </div>

                    <div class="form-group">
                        <input type="file" class="form-control-file" name="side2pic" id="side2pic" aria-describedby="fileHelpId">
                        <small id="fileHelpId" class="form-text text-muted">Another Side view of product</small>
                    </div>

                    <input type="submit" name="submit" id="submit" class="btn btn-outline-primary float-right" type="button" value="Submit">

                    </form>
                </div>
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