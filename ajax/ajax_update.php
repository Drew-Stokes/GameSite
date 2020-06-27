<?php
if(isset($_POST['id'])) {
    include('../includes/dbc.php');
    $table = $_POST['table'];
    $id = $_POST['id'];
    $title = $_POST['title'];
    $message = $_POST['message'];
    $sql = "UPDATE $table SET title='$title',message='$message' WHERE id=$id";
    $result = mysqli_query($con,$sql);
    if($result) {
        echo '<em>Your content succesfully updated!</em><br>';
    } else {
        $error_msg = mysqli_error($con);
        echo '<em>There was an error: $error_msg';
    }// end else
}// end if
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>

    </section>
</body>
</html>