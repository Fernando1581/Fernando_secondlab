<!DOCTYPE html>
<html>
<head>
    <title>Todo List</title>

    <style>
        body {
            font-family: Arial;
            background: #f2f2f2;
        }

        .edit-btn {
        display: inline-block;
        padding: 8px 12px;
        background: #38bdf8; 
        color: white;
        border-radius: 6px;
        font-size: 12px;
        }

        .edit-btn:hover {
            background: #0ea5e9; 
        }

        .container {
            width: 400px;
            margin: 80px auto;
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 0 12px rgba(0,0,0,0.1);
            text-align: center;
        }

        h1 {
            margin-bottom: 15px;
        }

        
        .add-btn {
            display: inline-block;
            margin-bottom: 15px;
            padding: 10px 15px;
            background: blue;
            color: white;
            border-radius: 6px;
            text-decoration: none;
        }

        .add-btn:hover {
            opacity: 0.85;
        }

        .todo {
            background: #fafafa;
            border: 1px solid #eee;
            border-radius: 8px;
            padding: 10px;
            margin-bottom: 10px;
        }

        .done {
            color: green;
            font-weight: bold;
        }

        .pending {
            color: orange;
            font-weight: bold;
        }

        a {
            text-decoration: none;
            color: blue;
            margin: 0 5px;
            font-size: 14px;
        }

        a:hover {
            text-decoration: underline;
        }

       
        .delete-btn {
            margin-top: 8px;
            padding: 8px 12px;
            cursor: pointer;
            border: none;
            background: red;
            color: white;
            border-radius: 6px;
            font-size: 12px;
        }

        .delete-btn:hover {
            opacity: 0.85;
        }

        form {
            margin: 5px 0;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>My Todo List</h1>

    <a href="/create" class="add-btn">+ Add Todo</a>

    @foreach($todos as $todo)
        <div class="todo">

            <p><b>{{ $todo->task }}</b></p>

            <p>
                @if($todo->is_done)
                    <span class="done">DONE</span>
                @else
                    <span class="pending">PENDING</span>
                @endif
            </p>

            <a href="/edit/{{ $todo->id }}" class="edit-btn">Edit</a>

            <form action="/delete/{{ $todo->id }}" method="POST">
                @csrf
                <button type="submit" class="delete-btn">Delete</button>
            </form>

        </div>
    @endforeach

</div>

</body>
</html>