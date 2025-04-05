<!DOCTYPE html>
<html>
<head>
    <title>Fluid Player</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://cdn.fluidplayer.com/v2/current/fluidplayer.min.css" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-X6ZVYvCmiVbvD5v/C9w4Fv2NoMfrhPSuUR7fNWLzox/0YbTkiQTlNEmQJ0ZiOZMw3RExp4/6dZt6r8SzOvH5ow==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #283048, #859398);
            color: #fff;
            overflow: hidden;
        }
        .header {
            padding: 20px;
            text-align: center;
            border-bottom: 2px solid rgba(255, 255, 255, 0.1);
            animation: fadeIn 1s ease;
            background: linear-gradient(to right, #f58634, #f76803); 
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3); 
        }
        .header h1 {
            margin: 0;
            font-size: 36px;
            font-weight: 700;
            letter-spacing: 2px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            animation: shadowPulse 2s infinite alternate; /* Subtle pulse animation */
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        @keyframes shadowPulse {
            from {
                text-shadow: 2px 2px 6px rgba(255, 255, 255, 0.5); 
            }
            to {
                text-shadow: 2px 2px 8px rgba(255, 255, 255, 0.7); 
            }
        }
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: calc(100% - 200px); 
            animation: slideInUp 1s ease;
        }
        .video-container {
            position: relative;
            width: 90%;
            max-width: 800px;
            height: 50%;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.4);
            animation: pulse 2s infinite alternate;
        }
        @keyframes slideInUp {
            from {
                transform: translateY(50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
        @keyframes pulse {
            from {
                transform: scale(1);
            }
            to {
                transform: scale(1.05);
            }
        }
        #my-video {
            width: 100%;
            height: 100%;
        }
        p {
            margin-top: 20px;
            font-size: 18px;
            font-weight: 300;
            letter-spacing: 1px;
            animation: fadeIn 1s ease;
        }
        .telegram-button {
            margin-top: 20px;
            background-color: #0088cc;
            color: #fff;
            border: none;
            padding: 15px 30px;
            font-size: 18px;
            border-radius: 50px;
            cursor: pointer;
            transition: background-color 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            text-transform: uppercase;
            font-weight: bold;
            letter-spacing: 1px;
            box-shadow: 0 5px 15px rgba(0, 136, 204, 0.3);
        }
        .telegram-button:hover {
            background-color: #0077b5;
        }
        .telegram-button i {
            margin-right: 10px;
            font-size: 24px;
        }
    </style>
    <script src="http://cdn.fluidplayer.com/v2/current/fluidplayer.min.js"></script>
</head>
<body>

<div class="header">
    <h1>Welcome to TeraBox  Player</h1>
</div>

<div class="container">
    <div class="video-container">
        <video id='my-video' controls>
            <source id="video-source" title='Video' type='video/mp4' />
        </video>
    </div>
    <p>Enjoy adfree  content!</p>
    <a href="https://t.me/Devsnp" target="_blank" class="telegram-button">
        <i class="fab fa-telegram-plane"></i>Join our Telegram Channel
    </a>
</div>

<script>

    const urlParams = new URLSearchParams(window.location.search);
    const videoUrl = urlParams.get('video') || 'https://cdn.fluidplayer.com/videos/valerian-1080p.mkv';


    const videoSource = document.getElementById('video-source');
    videoSource.src = videoUrl;

  
    fluidPlayer(
        'my-video',
        {
            layoutControls: {
                primaryColor: "#28B8ED",
                allowDownload: true 
            }
        }
    );
</script>

</body>
</html>
