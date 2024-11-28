<!DOCTYPE html>
<html>
<head>
    <title>Edit Post</title>
</head>
<body>
    <h1>Edit Post</h1>
    <form method="post">
        <label for="title">Title:</label>
        <input type="text" name="title" value="<?= $post->title ?>" required>
        <br>
        <label for="body">Body:</label>
        <textarea name="body" required><?= $post->body ?></textarea>
        <br>
        <label for="category_id">Category:</label>
        <select name="category_id" required>
            <?php foreach ($categories as $category): ?>
                <option value="<?= $category->id ?>" <?= $category->id == $post->category_id ? 'selected' : '' ?>>
                    <?= $category->name ?>
                </option>
            <?php endforeach; ?>
        </select>
        <br>
        <button type="submit">Update</button>
    </form>
    <p><a href="<?= site_url('post/index') ?>">Back to Posts</a></p>
</body>
</html>
