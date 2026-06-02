<!DOCTYPE html>
<html>
<head>
    <title>MyReads - Personal Reading Tracker</title>

    <style>
        body{
            margin:0;
            font-family:Arial, sans-serif;
            background:#f4f6f9;
        }

        nav{
            display:flex;
            justify-content:space-between;
            align-items:center;
            padding:20px 60px;
            background:white;
            box-shadow:0 2px 10px rgba(0,0,0,0.1);
        }

        .logo{
            font-size:28px;
            font-weight:bold;
            color:#2563eb;
        }

        .buttons a{
            text-decoration:none;
            padding:10px 20px;
            border-radius:8px;
            margin-left:10px;
            font-weight:bold;
        }

        .login{
            background:white;
            border:1px solid #2563eb;
            color:#2563eb;
        }

        .register{
            background:#2563eb;
            color:white;
        }

        .hero{
            text-align:center;
            padding:120px 20px;
        }

        .hero h1{
            font-size:56px;
            color:#1e293b;
        }

        .hero p{
            font-size:20px;
            color:#64748b;
            max-width:700px;
            margin:auto;
            margin-top:20px;
        }

        .hero a{
            display:inline-block;
            margin-top:30px;
            text-decoration:none;
            background:#2563eb;
            color:white;
            padding:15px 35px;
            border-radius:10px;
            font-size:18px;
        }

        .features{
            display:flex;
            justify-content:center;
            gap:30px;
            padding:80px 40px;
            flex-wrap:wrap;
        }

        .card{
            background:white;
            width:280px;
            padding:25px;
            border-radius:15px;
            box-shadow:0 4px 20px rgba(0,0,0,0.08);
            text-align:center;
        }

        .card h3{
            color:#2563eb;
        }

        footer{
            text-align:center;
            padding:25px;
            background:white;
        }
    </style>
</head>

<body>

<nav>

    <div class="logo">
        📚 MyReads
    </div>

    <div class="buttons">

        @auth

            <a href="/books" class="register">
                Dashboard
            </a>

        @else

            <a href="/login" class="login">
                Login
            </a>

            <a href="/register" class="register">
                Register
            </a>

        @endauth

    </div>

</nav>

<section class="hero">

    <h1>Track Your Reading Journey</h1>

    <p>
        Organize books, monitor reading progress,
        write reviews and manage your personal library
        all in one place.
    </p>

    <a href="/register">
        Get Started
    </a>

</section>

<section class="features">

    <div class="card">
        <h3>📖 Manage Books</h3>
        <p>Add, edit and delete books from your collection.</p>
    </div>

    <div class="card">
        <h3>⭐ Rate Books</h3>
        <p>Store ratings and reviews for every book you read.</p>
    </div>

    <div class="card">
        <h3>📊 Track Progress</h3>
        <p>Monitor finished, current and future reads.</p>
    </div>

</section>

<footer>
    MyReads Personal Reading Tracker © 2026
</footer>

</body>
</html>