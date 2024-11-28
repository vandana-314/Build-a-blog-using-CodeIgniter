<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #444;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 8px;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        p {
            text-align: center;
        }
        .error {
            color: red;
            text-align: center;
            margin-bottom: 10px;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        @media (max-width: 600px) {
            form {
                padding: 15px;
            }
            button {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <h1>Admin Login</h1>

    <!-- Display error message if present -->
    <?php if ($this->session->flashdata('error')): ?>
        <p class="error"><?= htmlspecialchars($this->session->flashdata('error')) ?></p>
    <?php endif; ?>

    <form method="post" action="<?= site_url('auth/admin_login') ?>">
        <!-- CSRF Token (CodeIgniter automatically handles it if enabled in config) -->
        <?= csrf_field() ?>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required aria-label="Enter your username">

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required aria-label="Enter your password">

        <button type="submit">Login</button>
    </form>
</body>
</html>
