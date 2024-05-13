<?php
require 'config/config.php';
require 'crud.php';

if (!isset($_GET['id'])) {
    header('Location: index.php');
    exit();
}

$id = $_GET['id'];
$post = getPostById($id);

if (!$post) {
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $post['title']; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h1><?php echo $post['title']; ?></h1>
    <p><?php echo $post['content']; ?></p>
    <p><strong>Created At:</strong> <?php echo $post['created_at']; ?></p>
    <a href="index.php" class="btn btn-primary">Back to Home</a>
</div>

</body>
</html>
