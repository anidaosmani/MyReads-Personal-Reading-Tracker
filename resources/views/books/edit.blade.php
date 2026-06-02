<!DOCTYPE html>

<html>
<head>
    <title>Edit Book</title>

```
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
        box-shadow:0 2px 10px rgba(0,0,0,0.1);
    }

    .logo{
        font-size:28px;
        font-weight:bold;
        color:#2563eb;
    }

    .container{
        display:flex;
        justify-content:center;
        margin-top:50px;
    }

    .card{
        background:white;
        width:600px;
        padding:35px;
        border-radius:15px;
        box-shadow:0 4px 20px rgba(0,0,0,0.08);
    }

    h1{
        text-align:center;
        margin-bottom:25px;
        color:#1e293b;
    }

    input,
    select,
    textarea{
        width:100%;
        padding:12px;
        margin-top:8px;
        margin-bottom:18px;
        border:1px solid #d1d5db;
        border-radius:8px;
    }

    textarea{
        height:120px;
    }

    button{
        width:100%;
        background:#2563eb;
        color:white;
        border:none;
        padding:14px;
        border-radius:8px;
        font-size:16px;
        cursor:pointer;
    }

    .back{
        text-decoration:none;
        color:#2563eb;
        display:block;
        margin-bottom:20px;
    }

</style>
```

</head>

<body>

<nav>
    <div class="logo">
        📚 MyReads
    </div>
</nav>

<div class="container">

```
<div class="card">

    <a href="/books" class="back">
        ← Back to Books
    </a>

    <h1>Edit Book</h1>

    <form method="POST"
          action="{{ route('books.update',$book) }}">

        @csrf
        @method('PUT')

        <label>Title</label>
        <input type="text"
               name="title"
               value="{{ $book->title }}"
               required>

        <label>Author</label>
        <input type="text"
               name="author"
               value="{{ $book->author }}"
               required>

        <label>Genre</label>
        <input type="text"
               name="genre"
               value="{{ $book->genre }}"
               required>

        <label>Status</label>

        <select name="status">

            <option value="Want To Read" {{ $book->status == 'Want To Read' ? 'selected' : '' }}>
                Want To Read
            </option>

            <option value="Currently Reading" {{ $book->status == 'Currently Reading' ? 'selected' : '' }}>
                Currently Reading
            </option>

            <option value="Finished" {{ $book->status == 'Finished' ? 'selected' : '' }}>
                Finished
            </option>

        </select>

        <label>Rating</label>
        <input type="number"
               min="1"
               max="5"
               name="rating"
               value="{{ $book->rating }}">

        <label>Review</label>
        <textarea name="review">{{ $book->review }}</textarea>

        <button type="submit">
            Update Book
        </button>

    </form>

</div>
```

</div>

</body>
</html>
