<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PolitiSense - Login</title>
    <link rel="stylesheet" href="/assets/style.css">
    <style>
        body { background:#f5f5f5; display:flex; align-items:center; justify-content:center; height:100vh; }
        .login-card { background:#fff; padding:2em 3em; border-radius:12px; box-shadow:0 2px 16px rgba(0,0,0,0.1); text-align:center; }
        .app-logo { font-size:2em; font-weight:bold; color:#1a237e; margin-bottom:1em; }
        .oauth-btns { display:flex; flex-direction:column; gap:1em; margin-bottom:1.5em; }
        .oauth-btn { display:flex; align-items:center; justify-content:center; padding:0.75em; border:none; border-radius:6px; font-size:1.1em; cursor:pointer; color:#fff; transition:background 0.2s; }
        .facebook { background:#1877f3; }
        .instagram { background:#000; }
        .x { background:#222; }
        .youtube { background:#ff0000; }
        .oauth-btn i { margin-right:0.5em; }
        .privacy { font-size:0.95em; margin-bottom:0.5em; }
        .footer { font-size:0.85em; color:#888; }
    </style>
</head>
<body>
    <div class="login-card">
        <div class="app-logo">PolitiSense</div>
        <div class="oauth-btns">
            <button class="oauth-btn facebook"><i>🔵</i>Login with Facebook</button>
            <button class="oauth-btn instagram"><i>⚫</i>Login with Instagram</button>
            <button class="oauth-btn x"><i>❌</i>Login with X</button>
            <button class="oauth-btn youtube"><i>🔴</i>Login with YouTube</button>
        </div>
        <div class="privacy"><a href="#">Privacy Policy</a></div>
        <div class="footer">&copy; <?php echo date('Y'); ?> PolitiSense. All rights reserved.</div>
    </div>
</body>
</html> 