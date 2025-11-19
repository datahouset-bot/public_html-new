<!DOCTYPE html>
<html lang="hi">
<head>
    <meta charset="UTF-8">
    <title>Demo Video Gallery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            background: #f8f9fa;
        }
        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
            background: black;
            border-radius: 8px;
            box-shadow: 0px 2px 15px rgba(0,0,0,0.1);
        }
        .video-container iframe {
            position: absolute;
            top: 0; left: 0;
            width: 100%;
            height: 100%;
        }
        .section-title {
            font-weight: bold;
            margin: 30px 0 15px;
            text-align: center;
        }
        .subscribe-btn {
            font-size: 1.2rem;
            font-weight: bold;
            padding: 12px 20px;
        }
    </style>
</head>
<body>

<div class="container py-4">
    <h1 class="text-center fw-bold mb-4">🎥 Demo Video Gallery / डेमो वीडियो गैलरी</h1>
    <!-- YouTube Subscribe Button -->
<div class="text-center my-4">
    <p class="fw-bold fs-5">🙏 Please Subscribe to My Channel / कृपया मेरे चैनल को सब्सक्राइब करें</p>
    <div class="g-ytsubscribe" 
         data-channelid="UCArw9uq7lQNVMyWSLO9XzuQ" 
         data-layout="full" 
         data-theme="default" 
         data-count="default">
    </div>
</div>

<!-- Load YouTube Platform JS -->
<script src="https://apis.google.com/js/platform.js"></script>


    <!-- Video Grid -->
    <div class="row g-4">
        <div class="col-md-4 col-sm-6">
            <div class="video-container">
                
                <iframe src="https://www.youtube.com/embed/GUZOBoweC2k" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/LsqE6RLJDuY" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/WFCbkbpmaRQ" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>

    <!-- Playlist -->
    <!-- Playlist -->
<h2 class="section-title">📺 Full Playlist / पूरी प्लेलिस्ट</h2>
<div class="video-container mb-4">
    <iframe 
        src="https://www.youtube.com/embed/WFCbkbpmaRQ" 
        frameborder="0" 
        allowfullscreen>
    </iframe>
</div>


    <!-- Subscribe Section -->
<!-- YouTube Subscribe Button -->
<div class="text-center my-4">
    <p class="fw-bold fs-5">🙏 Please Subscribe to My Channel / कृपया मेरे चैनल को सब्सक्राइब करें</p>
    <div class="g-ytsubscribe" 
         data-channelid="UCArw9uq7lQNVMyWSLO9XzuQ" 
         data-layout="full" 
         data-theme="default" 
         data-count="default">
    </div>
</div>

<!-- Load YouTube Platform JS -->
<script src="https://apis.google.com/js/platform.js"></script>

</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
