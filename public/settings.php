<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PolitiSense - Settings</title>
    <link rel="stylesheet" href="/assets/style.css">
    <style>
        body { margin:0; background:#f5f5f5; font-family:sans-serif; }
        .sidebar { width:220px; background:#1a237e; color:#fff; height:100vh; position:fixed; left:0; top:0; display:flex; flex-direction:column; }
        .sidebar .logo { font-size:1.5em; font-weight:bold; padding:1em; border-bottom:1px solid #3949ab; }
        .sidebar a { color:#fff; text-decoration:none; padding:1em; display:block; transition:background 0.2s; }
        .sidebar a:hover { background:#3949ab; }
        .main { margin-left:220px; padding:2em; }
        .tabs { display:flex; gap:1em; margin-bottom:1.5em; }
        .tab { padding:0.7em 1.5em; background:#e3e3e3; border-radius:8px 8px 0 0; cursor:pointer; }
        .tab.active { background:#fff; font-weight:bold; border-bottom:2px solid #1a237e; }
        .tab-content { background:#fff; border-radius:0 0 10px 10px; box-shadow:0 2px 8px rgba(0,0,0,0.07); padding:2em; }
        .account-list { margin-bottom:1em; }
        .account-item { display:flex; align-items:center; justify-content:space-between; padding:0.5em 0; border-bottom:1px solid #eee; }
        .interval-input { width:60px; }
        .privacy-toggle { margin-right:1em; }
    </style>
    <script>
        function showTab(tab) {
            document.querySelectorAll('.tab').forEach(t => t.classList.remove('active'));
            document.querySelectorAll('.tab-content').forEach(c => c.style.display = 'none');
            document.getElementById(tab+'-tab').classList.add('active');
            document.getElementById(tab+'-content').style.display = 'block';
        }
        window.onload = function() { showTab('accounts'); };
    </script>
</head>
<body>
    <div class="sidebar">
        <div class="logo">PolitiSense</div>
        <a href="index.php?page=dashboard">Home</a>
        <a href="index.php?page=settings">Settings</a>
        <a href="index.php?page=login">Logout</a>
    </div>
    <div class="main">
        <div class="tabs">
            <div class="tab" id="accounts-tab" onclick="showTab('accounts')">Account Management</div>
            <div class="tab" id="intervals-tab" onclick="showTab('intervals')">Interval Settings</div>
            <div class="tab" id="privacy-tab" onclick="showTab('privacy')">Privacy Options</div>
        </div>
        <div class="tab-content" id="accounts-content">
            <div class="account-list">
                <div class="account-item">Facebook <span><button>Re-authenticate</button> <button>Remove</button></span></div>
                <div class="account-item">Instagram <span><button>Re-authenticate</button> <button>Remove</button></span></div>
                <div class="account-item">Add new platform <button>Add</button></div>
            </div>
        </div>
        <div class="tab-content" id="intervals-content" style="display:none;">
            <form>
                <label>Facebook Interval (min): <input class="interval-input" type="number" min="1" max="60" value="10"></label><br><br>
                <label>Instagram Interval (min): <input class="interval-input" type="number" min="1" max="60" value="15"></label><br><br>
                <label>X Interval (min): <input class="interval-input" type="number" min="1" max="60" value="20"></label><br><br>
                <label>YouTube Interval (min): <input class="interval-input" type="number" min="1" max="60" value="30"></label><br><br>
                <button type="submit">Save</button>
            </form>
        </div>
        <div class="tab-content" id="privacy-content" style="display:none;">
            <label><input class="privacy-toggle" type="checkbox" checked> Data Anonymization</label><br><br>
            <label><input class="privacy-toggle" type="checkbox" checked> Consent to Data Use</label><br><br>
            <a href="#">Update Privacy Preferences</a>
        </div>
    </div>
</body>
</html> 