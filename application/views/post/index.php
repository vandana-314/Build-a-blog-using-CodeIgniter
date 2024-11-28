<!DOCTYPE html>
<html>
<head>
    <title>Manage Posts</title>
</head>
<body>
    <h1>Posts</h1>
    <a href="<?= site_url('post/create') ?>">Create New Post</a>
    <ul>
        <?php foreach ($posts as $post): ?>
            <li>
                <strong><?= $post->title ?></strong>
                <p><?= substr($post->body, 0, 100) ?>...</p>
                <a href="<?= site_url('post/edit/' . $post->id) ?>">Edit</a>
                <a href="<?= site_url('post/delete/' . $post->id) ?>" onclick="return confirm('Are you sure?');">Delete</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
