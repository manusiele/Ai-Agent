<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PolitiSense - Dashboard</title>
    <link rel="stylesheet" href="/assets/style.css">
    <style>
        body { margin:0; background:#f5f5f5; font-family:sans-serif; }
        .sidebar { width:220px; background:#1a237e; color:#fff; height:100vh; position:fixed; left:0; top:0; display:flex; flex-direction:column; }
        .sidebar .logo { font-size:1.5em; font-weight:bold; padding:1em; border-bottom:1px solid #3949ab; }
        .sidebar a { color:#fff; text-decoration:none; padding:1em; display:block; transition:background 0.2s; }
        .sidebar a:hover { background:#3949ab; }
        .main { margin-left:220px; padding:2em; }
        .panel { background:#fff; border-radius:10px; box-shadow:0 2px 8px rgba(0,0,0,0.07); margin-bottom:2em; padding:1.5em; }
        .panel-title { font-size:1.2em; font-weight:bold; margin-bottom:1em; }
        .comment-feed, .feedback-log { max-height:220px; overflow:auto; }
        .alert { background:#ffeb3b; color:#222; padding:1em; border-radius:6px; margin-bottom:1em; display:flex; align-items:center; }
        .alert .bell { font-size:1.5em; margin-right:0.7em; }
        .sentiment-chart { width:100%; max-width:350px; margin:auto; }
        table { width:100%; border-collapse:collapse; }
        th, td { padding:0.5em; border-bottom:1px solid #eee; }
        th { background:#f0f0f0; }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="logo">PolitiSense</div>
        <a href="index.php?page=dashboard">Home</a>
        <a href="index.php?page=settings">Settings</a>
        <a href="index.php?page=login">Logout</a>
    </div>
    <div class="main">
        <div class="alert"><span class="bell">🔔</span> Critical sentiment shift detected: "election fraud" mentioned 3 times today!</div>
        <div class="panel">
            <div class="panel-title">Sentiment Summary</div>
            <canvas id="sentimentChart" class="sentiment-chart"></canvas>
        </div>
        <div class="panel comment-feed">
            <div class="panel-title">Recent Comments <button style="float:right;">Refresh</button></div>
            <ul>
                <li><b>@user1</b>: "Great campaign!" <span style="color:green;">[Facebook]</span> <small>2m ago</small></li>
                <li><b>@user2</b>: "Not convinced by your promises." <span style="color:#222;">[X]</span> <small>5m ago</small></li>
                <li><b>@user3</b>: "Healthcare is a priority!" <span style="color:red;">[YouTube]</span> <small>10m ago</small></li>
            </ul>
        </div>
        <div class="panel feedback-log">
            <div class="panel-title">Feedback Log <button style="float:right;">Export CSV</button></div>
            <table>
                <tr><th>Comment</th><th>Sentiment</th><th>Feedback</th><th>Date</th></tr>
                <tr><td>Great campaign!</td><td style="color:green;">Positive</td><td>Thank you for your support!</td><td>2024-06-01</td></tr>
                <tr><td>Not convinced by your promises.</td><td style="color:red;">Negative</td><td>We’re addressing your concern</td><td>2024-06-01</td></tr>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Mock data for chart
        const ctx = document.getElementById('sentimentChart').getContext('2d');
        new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Positive', 'Negative', 'Neutral'],
                datasets: [{
                    data: [60, 30, 10],
                    backgroundColor: ['#4caf50', '#f44336', '#9e9e9e']
                }]
            },
            options: { responsive: true, plugins: { legend: { position: 'bottom' } } }
        });
    </script>
</body>
</html> 