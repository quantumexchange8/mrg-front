<!DOCTYPE html>
<html>

<head>
    <title>Low Stock Notification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #7c2074;
            font-size: 24px;
            border-bottom: 2px solid #7c2074;
            padding-bottom: 10px;
        }

        p {
            font-size: 16px;
            line-height: 1.5;
        }

        .item-details {
            background-color: #f9f9f9;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        a.button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            /* Bootstrap blue */
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            margin-top: 20px;
        }

        a.button:hover {
            background-color: #0056b3;
        }

        .footer {
            margin-top: 20px;
            font-size: 12px;
            color: gray;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>New Contact from <strong> {{ $name }} <strong></h1>
        <p><strong>Email: </strong> {{ $email }} </p>

        <div class="item-details">
            <p><strong>Message:</strong> {{ $userMessage }}</p>
        </div>
    </div>
</body>

</html>
