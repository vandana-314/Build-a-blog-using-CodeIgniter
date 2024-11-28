<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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
        .dashboard-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin: 15px 0;
            background-color: #007bff;
            border-radius: 4px;
        }
        a {
            display: block;
            color: white;
            text-decoration: none;
            padding: 10px;
            text-align: center;
            transition: background-color 0.3s ease;
        }
        a:hover {
            background-color: #0056b3;
        }
        .logout {
            text-align: center;
            margin-top: 20px;
        }
        .logout a {
            background-color: #dc3545;
            padding: 10px 15px;
            border-radius: 4px;
            color: white;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .logout a:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <h1>Admin Dashboard</h1>
    <div class="dashboard-container">
        <ul>
            <li><a href="<?= site_url('admin/manage_users') ?>">Manage Users</a></li>
            <li><a href="<?= site_url('admin/manage_posts') ?>">Manage Posts</a></li>
            <li><a href="<?= site_url('admin/manage_categories') ?>">Manage Categories</a></li>
        </ul>
        <div class="logout">
            <a href="<?= site_url('auth/logout') ?>">Logout</a>
        </div>
    </div>
</body>
</html>
