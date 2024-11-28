<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Posts</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        .create-post {
            margin-bottom: 20px;
            text-align: right;
        }
        .create-post a {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }
        .create-post a:hover {
            background-color: #0056b3;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        a {
            color: #007bff;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Manage Posts</h1>
        <div class="create-post">
            <a href="<?= site_url('admin/create_post') ?>">Create Post</a>
        </div>
        <table>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Category</th>
                <th>Actions</th>
            </tr>
            <?php foreach ($posts as $post): ?>
            <tr>
                <td><?= $post->id ?></td>
                <td><?= $post->title ?></td>
                <td><?= $post->category_id ?></td>
                <td>
                    <a href="<?= site_url('admin/edit_post/'.$post->id) ?>"><button style="background-color:#00b35d; color:white; font-size:1.2em">Edit</button ></a>&nbsp
                    <a href="<?= site_url('admin/delete_post/'.$post->id) ?>" onclick="return confirm('Are you sure?')"><button style="background-color:#b30300; color:white; font-size:1.2em">Delete</button></a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <br>
        <button style="background-color:white; font-size:1.2em"> <a href="dashboard">Back to Dashboard</a></button>

    </div>
</body>
</html>
