<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PolitiSense - Splash</title>
    <link rel="stylesheet" href="/assets/style.css">
    <style>
        body { margin:0; padding:0; background:#1a237e; color:#fff; display:flex; align-items:center; justify-content:center; height:100vh; flex-direction:column; }
        .splash-logo { font-size:3em; font-weight:bold; margin-bottom:0.5em; }
        .splash-tagline { font-size:1.5em; margin-bottom:2em; }
        .splash-img { width:120px; margin-bottom:1em; }
        .loader { border:8px solid #f3f3f3; border-top:8px solid #3949ab; border-radius:50%; width:60px; height:60px; animation:spin 1s linear infinite; margin-bottom:1em; }
        @keyframes spin { 100% { transform: rotate(360deg); } }
    </style>
    <script>
        setTimeout(function(){ window.location.href = 'index.php?page=login'; }, 4000);
    </script>
</head>
<body>
    <img src="/assets/ballot-box.png" alt="Ballot Box" class="splash-img">
    <div class="splash-logo">PolitiSense</div>
    <div class="splash-tagline">Real-Time Political Insights</div>
    <div class="loader"></div>
</body>
</html> 