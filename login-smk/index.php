<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SMK Bunda Kandung</title>
    <style>
        /* Reset body margin and padding */
        body {
            font-family: Arial, sans-serif;
            background-color:rgb(12, 55, 105);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }

        /* Style for the heading */
        h2 {
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        /* Style for the form */
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(234, 238, 217, 0.1);
            width: 300px;
        }

        /* Style for text and password input fields */
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        /* Style for the submit button */
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color:rgb(0, 183, 255);
            border: none;
            color: white;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        /* Hover effect for the submit button */
        input[type="submit"]:hover {
            background-color:rgb(19, 207, 29);
        }

        /* Responsive design for smaller screens */
        @media (max-width: 600px) {
            form {
                width: 80%;
            }
        }
    </style>
</head>
<body>
    <h2>Form Login</h2> <!-- Heading for the form -->
    <form action="login.php" method="post">
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
</style>
</body>
</html>