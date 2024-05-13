<?php
require 'config/config.php';

function getAllPosts() {
    global $pdo;
    $stmt = $pdo->query('SELECT * FROM posts');
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getPostById($id) {
    global $pdo;
    $stmt = $pdo->prepare('SELECT * FROM posts WHERE id = ?');
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function createPost($title, $content) {
    global $pdo;
    $stmt = $pdo->prepare('INSERT INTO posts (title, content) VALUES (?, ?)');
    $stmt->execute([$title, $content]);
    return $pdo->lastInsertId();
}

function updatePost($id, $title, $content) {
    global $pdo;
    $stmt = $pdo->prepare('UPDATE posts SET title = ?, content = ? WHERE id = ?');
    $stmt->execute([$title, $content, $id]);
}

function deletePost($id) {
    global $pdo;
    $stmt = $pdo->prepare('DELETE FROM posts WHERE id = ?');
    $stmt->execute([$id]);
}
?>
