<!DOCTYPE html>
<html>
<head>
    <title>Create Post</title>
</head>
<body>
    <h1>Create New Post</h1>
    <form method="post">
        <label for="title">Title:</label>
        <input type="text" name="title" required>
        <br>
        <label for="body">Body:</label>
        <textarea name="body" required></textarea>
        <br>
        <label for="category_id">Category:</label>
        <select name="category_id" required>
            <?php foreach ($categories as $category): ?>
                <option value="<?= $category->id ?>"><?= $category->name ?></option>
            <?php endforeach; ?>
        </select>
        <br>
        <button type="submit">Create</button>
    </form>
    <p><a href="<?= site_url('post/index') ?>">Back to Posts</a></p>
</body>
</html>
