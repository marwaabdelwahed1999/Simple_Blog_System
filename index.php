<?php
require 'config/config.php';
require 'crud.php';


$isAdmin = true; 

$posts = getAllPosts();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h1>Blog Posts</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($posts as $post): ?>
                <tr>
                    <td><?php echo $post['title']; ?></td>
                    <td><?php echo $post['content']; ?></td>
                    <td><?php echo $post['created_at']; ?></td>
                    <td>
                        <a href="single_post.php?id=<?php echo $post['id']; ?>" class="btn btn-info">View</a>
                        <?php if($isAdmin): ?>
                            <a href="edit_post.php?id=<?php echo $post['id']; ?>" class="btn btn-success">Edit</a>
                            <a href="delete_post.php?id=<?php echo $post['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this post?')">Delete</a>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>
</html>
