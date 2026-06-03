<!DOCTYPE html>
<html>
<head>
    <title>Edit Book</title>
    <style>
        *{margin:0;padding:0;box-sizing:border-box;font-family:Arial,sans-serif;}
        body{background:#f4f6f9;}
        nav{background:white;padding:20px 60px;display:flex;justify-content:space-between;align-items:center;box-shadow:0 2px 10px rgba(0,0,0,0.1);}
        .logo{font-size:28px;font-weight:bold;color:#2563eb;}
        .logout-btn{background:#ef4444;color:white;border:none;padding:10px 20px;border-radius:8px;cursor:pointer;font-size:15px;}
        .container{display:flex;justify-content:center;margin-top:50px;margin-bottom:50px;}
        .card{background:white;width:620px;padding:40px;border-radius:16px;box-shadow:0 4px 20px rgba(0,0,0,0.08);}
        h1{text-align:center;margin-bottom:8px;color:#1e293b;font-size:26px;}
        .subtitle{text-align:center;color:#64748b;margin-bottom:30px;font-size:15px;}
        label{font-weight:600;color:#374151;font-size:14px;}
        input,select,textarea{width:100%;padding:12px;margin-top:6px;margin-bottom:18px;border:1.5px solid #d1d5db;border-radius:8px;font-size:15px;transition:border 0.2s;}
        input:focus,select:focus,textarea:focus{outline:none;border-color:#2563eb;}
        textarea{height:120px;resize:vertical;}
        button[type=submit]{width:100%;background:#2563eb;color:white;border:none;padding:14px;border-radius:8px;font-size:16px;cursor:pointer;margin-top:5px;}
        button[type=submit]:hover{background:#1d4ed8;}
        .back{text-decoration:none;color:#2563eb;display:inline-flex;align-items:center;gap:5px;margin-bottom:25px;font-size:15px;}
        .back:hover{text-decoration:underline;}
        .badge{display:inline-block;padding:4px 12px;border-radius:20px;background:#e0edff;color:#2563eb;font-size:13px;margin-left:10px;vertical-align:middle;}
    </style>
</head>
<body>

<nav>
    <div class="logo">📚 MyReads</div>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="logout-btn">Log Out</button>
    </form>
</nav>

<div class="container">
    <div class="card">

        <a href="/books" class="back">← Back to Books</a>

        <h1>✏️ Edit Book <span class="badge">{{ $book->status }}</span></h1>
        <p class="subtitle">Update the details for "{{ $book->title }}"</p>

        @if($errors->any())
            <div style="background:#fee2e2;border:1px solid #fca5a5;padding:12px;border-radius:8px;margin-bottom:20px;color:#dc2626;">
                <strong>Please fix the following errors:</strong>
                <ul style="margin-top:8px;padding-left:20px;">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('books.update',$book) }}">
            @csrf
            @method('PUT')

            <label>📌 Title</label>
            <input type="text" name="title" value="{{ old('title', $book->title) }}" required>

            <label>✍️ Author</label>
            <input type="text" name="author" value="{{ old('author', $book->author) }}" required>

            <label>📂 Genre</label>
            <input type="text" name="genre" value="{{ old('genre', $book->genre) }}" required>

            <label>📊 Status</label>
            <select name="status">
                <option value="Want To Read" {{ $book->status == 'Want To Read' ? 'selected' : '' }}>📋 Want To Read</option>
                <option value="Currently Reading" {{ $book->status == 'Currently Reading' ? 'selected' : '' }}>📖 Currently Reading</option>
                <option value="Finished" {{ $book->status == 'Finished' ? 'selected' : '' }}>✅ Finished</option>
            </select>

            <label>⭐ Rating</label>
            <input type="number" min="1" max="5" name="rating" value="{{ old('rating', $book->rating) }}" placeholder="Enter a number from 1 to 5">

            <label>💬 Review</label>
            <textarea name="review" placeholder="Write a short review or notes...">{{ old('review', $book->review) }}</textarea>

            <button type="submit">💾 Update Book</button>

        </form>
    </div>
</div>

</body>
</html>