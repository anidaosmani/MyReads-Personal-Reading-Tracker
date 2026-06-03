<!DOCTYPE html>
<html>
<head>
    <title>My Books</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial,sans-serif;
        }

        body{
            background:#f4f6f9;
        }

        nav{
            background:white;
            padding:20px 60px;
            display:flex;
            justify-content:space-between;
            align-items:center;
            box-shadow:0 2px 10px rgba(0,0,0,0.1);
        }

        .logo{
            font-size:28px;
            font-weight:bold;
            color:#2563eb;
        }

        .add-btn{
            text-decoration:none;
            background:#2563eb;
            color:white;
            padding:12px 20px;
            border-radius:8px;
        }

        .container{
            width:90%;
            margin:auto;
            margin-top:40px;
        }

        .title{
            font-size:35px;
            margin-bottom:30px;
            color:#1e293b;
        }

        .books{
            display:grid;
            grid-template-columns:repeat(auto-fill,minmax(300px,1fr));
            gap:25px;
        }

        .card{
            background:white;
            border-radius:15px;
            padding:25px;
            box-shadow:0 4px 20px rgba(0,0,0,0.08);
        }

        .card h2{
            color:#2563eb;
            margin-bottom:10px;
        }

        .card p{
            margin:8px 0;
            color:#555;
        }

        .status{
            display:inline-block;
            padding:6px 12px;
            border-radius:20px;
            background:#e0edff;
            color:#2563eb;
            font-size:14px;
            margin-top:10px;
        }

        .actions{
            margin-top:20px;
            display:flex;
            gap:10px;
        }

        .edit{
            text-decoration:none;
            background:#f59e0b;
            color:white;
            padding:8px 15px;
            border-radius:8px;
        }

        .delete{
            background:#ef4444;
            color:white;
            border:none;
            padding:8px 15px;
            border-radius:8px;
            cursor:pointer;
        }

        .empty{
            text-align:center;
            margin-top:80px;
            color:#64748b;
            font-size:20px;
        }

    </style>
</head>

<body>

<nav>

    <div class="logo">
        📚 MyReads
    </div>

    <a href="/books/create" class="add-btn">
    + Add Book
</a>

<form method="POST" action="{{ route('logout') }}" style="display:inline;">
    @csrf
    <button type="submit" style="
        background:#ef4444;
        color:white;
        border:none;
        padding:12px 20px;
        border-radius:8px;
        cursor:pointer;
        font-size:16px;
        margin-left:10px;
    ">
        Log Out
    </button>
</form>

</nav>

<div class="container">

    <h1 class="title">
        My Reading Collection
    </h1>
    <div style="
display:grid;
grid-template-columns:repeat(3,1fr);
gap:20px;
margin-bottom:30px;
">

    <div class="card">
        <h2>{{ $books->count() }}</h2>
        <p>Total Books</p>
    </div>

    <div class="card">
        <h2>{{ $books->where('status','Finished')->count() }}</h2>
        <p>Finished Books</p>
    </div>

    <div class="card">
        <h2>{{ $books->where('status','Currently Reading')->count() }}</h2>
        <p>Currently Reading</p>
    </div>

</div>

    @if($books->count())

    <div class="books">

        @foreach($books as $book)

        <div class="card">

            <h2>{{ $book->title }}</h2>

            <p><strong>Author:</strong> {{ $book->author }}</p>

            <p><strong>Genre:</strong> {{ $book->genre }}</p>

            <p><strong>Rating:</strong> ⭐ {{ $book->rating }}</p>

            <span class="status">
                {{ $book->status }}
            </span>

            <div class="actions">

                <a href="{{ route('books.edit',$book) }}"
                   class="edit">
                    Edit
                </a>

                <form action="{{ route('books.destroy',$book) }}"
                      method="POST">

                    @csrf
                    @method('DELETE')

                    <button class="delete">
                        Delete
                    </button>

                </form>

            </div>

        </div>

        @endforeach

    </div>

    @else

    <div class="empty">

        No books added yet 📖

        <br><br>

        Start building your personal library.

    </div>

    @endif

</div>

</body>
</html>
