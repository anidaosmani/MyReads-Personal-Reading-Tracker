<!DOCTYPE html>
<html>
<head>
    <title>MyReads - Personal Reading Tracker</title>
    <style>
        *{margin:0;padding:0;box-sizing:border-box;}
        body{font-family:Arial,sans-serif;background:#f4f6f9;}
        nav{display:flex;justify-content:space-between;align-items:center;padding:20px 60px;background:white;box-shadow:0 2px 10px rgba(0,0,0,0.1);}
        .logo{font-size:28px;font-weight:bold;color:#2563eb;}
        .buttons a{text-decoration:none;padding:10px 22px;border-radius:8px;margin-left:10px;font-weight:bold;font-size:15px;}
        .login{background:white;border:2px solid #2563eb;color:#2563eb;}
        .login:hover{background:#eff6ff;}
        .register{background:#2563eb;color:white;}
        .register:hover{background:#1d4ed8;}
        .hero{text-align:center;padding:120px 20px;background:linear-gradient(135deg,#eff6ff 0%,#f4f6f9 100%);}
        .hero h1{font-size:52px;color:#1e293b;line-height:1.2;}
        .hero h1 span{color:#2563eb;}
        .hero p{font-size:19px;color:#64748b;max-width:650px;margin:20px auto 0;}
        .hero-btns{margin-top:35px;display:flex;justify-content:center;gap:15px;flex-wrap:wrap;}
        .hero-btns a{text-decoration:none;padding:14px 32px;border-radius:10px;font-size:17px;font-weight:bold;}
        .btn-primary{background:#2563eb;color:white;}
        .btn-primary:hover{background:#1d4ed8;}
        .btn-secondary{background:white;color:#2563eb;border:2px solid #2563eb;}
        .btn-secondary:hover{background:#eff6ff;}
        .stats{display:flex;justify-content:center;gap:40px;padding:50px 20px;background:white;flex-wrap:wrap;}
        .stat{text-align:center;}
        .stat h2{font-size:36px;color:#2563eb;font-weight:bold;}
        .stat p{color:#64748b;font-size:15px;}
        .features{display:flex;justify-content:center;gap:25px;padding:80px 40px;flex-wrap:wrap;background:#f4f6f9;}
        .features h2{width:100%;text-align:center;font-size:32px;color:#1e293b;margin-bottom:10px;}
        .features p.sub{width:100%;text-align:center;color:#64748b;margin-bottom:40px;}
        .card{background:white;width:260px;padding:30px;border-radius:16px;box-shadow:0 4px 20px rgba(0,0,0,0.08);text-align:center;transition:transform 0.2s;}
        .card:hover{transform:translateY(-5px);}
        .card .icon{font-size:40px;margin-bottom:15px;}
        .card h3{color:#1e293b;margin-bottom:10px;font-size:18px;}
        .card p{color:#64748b;font-size:14px;line-height:1.6;}
        .team{background:white;padding:60px 20px;text-align:center;}
        .team h2{font-size:30px;color:#1e293b;margin-bottom:10px;}
        .team p.sub{color:#64748b;margin-bottom:40px;}
        .team-cards{display:flex;justify-content:center;gap:20px;flex-wrap:wrap;}
        .team-card{background:#eff6ff;padding:25px 35px;border-radius:12px;text-align:center;}
        .team-card h4{color:#2563eb;font-size:17px;margin-bottom:5px;}
        .team-card p{color:#64748b;font-size:13px;}
        footer{text-align:center;padding:30px;background:#1e293b;color:#94a3b8;font-size:14px;}
        footer span{color:#2563eb;}
    </style>
</head>
<body>

<nav>
    <div class="logo">📚 MyReads</div>
    <div class="buttons">
        @auth
            <a href="/books" class="register">Go to Dashboard</a>
        @else
            <a href="/login" class="login">Login</a>
            <a href="/register" class="register">Register</a>
        @endauth
    </div>
</nav>

<section class="hero">
    <h1>Track Your <span>Reading Journey</span></h1>
    <p>Organize books, monitor reading progress, write reviews and manage your personal library all in one place.</p>
    <div class="hero-btns">
        <a href="/register" class="btn-primary">🚀 Get Started — It's Free</a>
        <a href="/login" class="btn-secondary">Login to My Account</a>
    </div>
</section>

<section class="stats">
    <div class="stat"><h2>📚</h2><p>Personal Library</p></div>
    <div class="stat"><h2>⭐</h2><p>Book Ratings</p></div>
    <div class="stat"><h2>📊</h2><p>Reading Stats</p></div>
    <div class="stat"><h2>💬</h2><p>Book Reviews</p></div>
</section>

<section class="features">
    <h2>Everything You Need</h2>
    <p class="sub">All the tools to manage your personal reading collection</p>

    <div class="card">
        <div class="icon">📖</div>
        <h3>Manage Books</h3>
        <p>Add, edit and delete books from your personal collection easily.</p>
    </div>

    <div class="card">
        <div class="icon">⭐</div>
        <h3>Rate & Review</h3>
        <p>Store ratings and write reviews for every book you read.</p>
    </div>

    <div class="card">
        <div class="icon">📊</div>
        <h3>Track Progress</h3>
        <p>Monitor finished, currently reading and future reads.</p>
    </div>

    <div class="card">
        <div class="icon">🔍</div>
        <h3>Search & Filter</h3>
        <p>Quickly find any book in your collection by title or author.</p>
    </div>
</section>

<section class="team">
    <h2>Meet the Team</h2>
    <p class="sub">Built with ❤️ for Software Engineering — CCS-502</p>
    <div class="team-cards">
        <div class="team-card">
            <h4>Sadrije Alija</h4>
            <p>API & Authentication</p>
        </div>
        <div class="team-card">
            <h4>Anida Osmani</h4>
            <p>Database & Design</p>
        </div>
        <div class="team-card">
            <h4>Medina Fetai</h4>
            <p>Documentation & UI</p>
        </div>
    </div>
</section>

<footer>
    MyReads Personal Reading Tracker © 2026 — <span>Professor Betim Sherifi</span> — CCS-502
</footer>

</body>
</html>