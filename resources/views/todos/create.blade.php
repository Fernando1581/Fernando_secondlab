<!DOCTYPE html>
<html>
<head>
    <title>Create Todo</title>

    <style>
        body {
            font-family: Arial;
            background: #f2f2f2;
        }

        .container {
            width: 400px;
            margin: 80px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: center;
        }

        h1 {
            margin-bottom: 15px;
        }

        input {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
        }

        /* BLUE BUTTON (same style as index/edit) */
        button {
            padding: 10px 20px;
            background: blue;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 6px;
        }

        button:hover {
            opacity: 0.85;
        }

        a {
            display: block;
            margin-top: 10px;
            text-decoration: none;
            color: blue;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Add Todo</h1>

    <form action="/store" method="POST">
        @csrf

        <input type="text" name="task" placeholder="Enter task">

        <br>

        <button type="submit">Save</button>
    </form>

    <a href="/">Back</a>

</div>

</body>
</html>