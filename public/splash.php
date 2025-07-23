<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PolitiSense - Splash</title>
    <link rel="stylesheet" href="/assets/style.css">
    <style>
        body {
            margin:0; padding:0;
            min-height:100vh;
            width:100vw;
            display:flex;
            align-items:center;
            justify-content:center;
            flex-direction:column;
            background: linear-gradient(rgba(26,35,126,0.85), rgba(26,35,126,0.85)), url('/assets/flag-bg.jpg') center/cover no-repeat; /* Placeholder for flag or voting booth */
            color:#fff;
        }
        .splash-logo {
            font-size:3em;
            font-weight:bold;
            margin-bottom:0.5em;
            letter-spacing:2px;
            text-shadow: 2px 2px 8px #000a;
        }
        .splash-tagline {
            font-size:1.5em;
            margin-bottom:2em;
            font-style:italic;
            text-shadow: 1px 1px 6px #0008;
        }
        .splash-img {
            width:120px;
            margin-bottom:1em;
            filter: drop-shadow(0 0 10px #0008);
        }
        .loader {
            border:8px solid #f3f3f3;
            border-top:8px solid #3949ab;
            border-radius:50%;
            width:60px; height:60px;
            animation:spin 1s linear infinite;
            margin-bottom:1em;
            box-shadow: 0 0 16px #0006;
        }
        @keyframes spin { 100% { transform: rotate(360deg); } }
    </style>
    <script>
        setTimeout(function(){ window.location.href = 'login.php'; }, 4000);
    </script>
</head>
<body>
    <img src="/assets/ballot-box.png" alt="Ballot Box" class="splash-img">
    <div class="splash-logo">PolitiSense</div>
    <div class="splash-tagline">Empower Your Political Voice</div>
    <div class="loader"></div>
</body>
</html> 