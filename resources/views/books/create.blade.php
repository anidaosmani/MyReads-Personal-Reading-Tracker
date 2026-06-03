<!DOCTYPE html>
<html>
<head>
    <title>Add Book</title>
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
        .star-row{display:flex;gap:10px;margin-top:6px;margin-bottom:18px;}
        .star-row input[type=radio]{display:none;}
        .star-row label{font-size:28px;cursor:pointer;color:#d1d5db;font-weight:normal;}
        .star-row input[type=radio]:checked ~ label,.star-row label:hover,.star-row label:hover ~ label{color:#f59e0b;}
        .star-row{flex-direction:row-reverse;justify-content:flex-end;}
        .star-row label:hover,.star-row label:hover ~ label,.star-row input[type=radio]:checked ~ label{color:#f59e0b;}
        button[type=submit]{width:100%;background:#2563eb;color:white;border:none;padding:14px;border-radius:8px;font-size:16px;cursor:pointer;margin-top:5px;}
        button[type=submit]:hover{background:#1d4ed8;}
        .back{text-decoration:none;color:#2563eb;display:inline-flex;align-items:center;gap:5px;margin-bottom:25px;font-size:15px;}
        .back:hover{text-decoration:underline;}
        .error{color:#ef4444;font-size:13px;margin-top:-14px;margin-bottom:10px;}
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

        <h1>📖 Add New Book</h1>
        <p class="subtitle">Fill in the details to add a book to your collection</p>

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

        <form method="POST" action="{{ route('books.store') }}">
            @csrf

            <label>📌 Title</label>
            <input type="text" name="title" value="{{ old('title') }}" placeholder="e.g. The Great Gatsby" required>

            <label>✍️ Author</label>
            <input type="text" name="author" value="{{ old('author') }}" placeholder="e.g. F. Scott Fitzgerald" required>

            <label>📂 Genre</label>
            <input type="text" name="genre" value="{{ old('genre') }}" placeholder="e.g. Fiction, Drama, Romance" required>

            <label>📊 Status</label>
            <select name="status">
                <option value="Want To Read" {{ old('status') == 'Want To Read' ? 'selected' : '' }}>📋 Want To Read</option>
                <option value="Currently Reading" {{ old('status') == 'Currently Reading' ? 'selected' : '' }}>📖 Currently Reading</option>
                <option value="Finished" {{ old('status') == 'Finished' ? 'selected' : '' }}>✅ Finished</option>
            </select>

            <label>⭐ Rating</label>
            <input type="number" min="1" max="5" name="rating" value="{{ old('rating') }}" placeholder="Enter a number from 1 to 5">

            <label>💬 Review</label>
            <textarea name="review" placeholder="Write a short review or notes about this book...">{{ old('review') }}</textarea>

            <button type="submit">💾 Save Book</button>

        </form>
    </div>
</div>

</body>
</html>