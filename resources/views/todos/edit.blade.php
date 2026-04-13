<!DOCTYPE html>
<html>
<head>
    <title>Edit Todo</title>

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

        input[type="text"] {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
        }

        button {
            padding: 10px 20px;
            background: blue;
            color: white;
            border: none;
            cursor: pointer;
        }

        label {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 8px;
            margin: 10px 0;
            font-size: 16px;
        }

        a {
            display: block;
            margin-top: 10px;
            text-decoration: none;
            color: blue;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Edit Todo</h1>

    <form action="/update/{{ $todo->id }}" method="POST">
        @csrf

        <input type="text" name="task" value="{{ $todo->task }}">

        <!-- IMPORTANT: ensures unchecked = 0 -->
        <input type="hidden" name="is_done" value="0">

        <label>
            <input type="checkbox" name="is_done" value="1"
                {{ $todo->is_done ? 'checked' : '' }}>
            Done
        </label>

        <button type="submit">Update</button>
    </form>

    <a href="/">Back</a>

</div>

</body>
</html>