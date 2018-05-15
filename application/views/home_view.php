<!doctype html>
<html lang="en">

<head>
    <title>Home View</title>

</head>

<body>

    <div class="container-fluid row ">
<?php
for ($i = 0; $i < $p_count; $i++) {
    $data = $p_data[$i];
    $this->load->view('customer/product_view', $data);
}

?>
</div>



</body>

</html>