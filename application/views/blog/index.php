<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Posts</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        h2 {
            color: #007bff;
            margin-top: 30px;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            background: white;
            margin: 10px 0;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        a {
            text-decoration: none;
            color: #007bff;
            transition: color 0.3s;
        }
        a:hover {
            color: #0056b3;
        }
        .create-post {
            display: block;
            margin: 20px auto;
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            text-align: center;
            border-radius: 5px;
            width: 200px;
            transition: background-color 0.3s;
        }
        .create-post:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Blog Posts</h1>

    <h2>Categories</h2>
    <ul>
        <?php foreach ($categories as $category): ?>
            <li><a href="<?= site_url('blog/index/' . $category->id) ?>"><?= $category->name ?></a></li>
        <?php endforeach; ?>
    </ul>
    
    <h2>Posts</h2>
    <ul>
        <?php foreach ($posts as $post): ?>
            <li>
                <span><?= $post->title ?></span>
                <a href="<?= site_url('post/edit_post/' . $post->id) ?>">Edit</a>
            </li>
        <?php endforeach; ?>
    </ul>

    <a class="create-post" href="<?= site_url('admin/create_post') ?>">Create New Post</a>
</body>
</html>
