<!DOCTYPE html>
<html lang="hi">
<head>
    <meta charset="UTF-8">
    <title>Hardware Billing Software Demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            background: #f5f7fa;
        }
        .carousel-item img {
            max-height: 500px;
            object-fit: contain;
            width: 100%;
        }
        .demo-title {
            font-weight: bold;
            margin-top: 20px;
        }
        .btn-demo {
            font-size: 1.1rem;
            font-weight: bold;
            padding: 10px 20px;
        }
        /* Bigger navigation arrows */
        .carousel-control-prev, .carousel-control-next {
            width: 5%;
        }
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            display: none; /* hide default Bootstrap icons */
        }
        .carousel-control-prev i,
        .carousel-control-next i {
            font-size: 2rem;
            color: black;
            background: rgba(255,255,255,0.8);
            padding: 8px;
            border-radius: 50%;
        }
        .carousel-control-prev i:hover,
        .carousel-control-next i:hover {
            background: rgba(0,0,0,0.8);
            color: white;
        }
    </style>
</head>
<body>

<div class="container py-4">
    <h1 class="text-center demo-title">Restaurant Billing Software Demo</h1>

    <!-- Image Slideshow -->
    <div id="garmentDemoCarousel" class="carousel slide mt-4" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://dht.datahouseerp.com/storage/app/public/image/software/garment/item.png" alt="Item Screen">
            </div>
            <div class="carousel-item">
                <img src="https://dht.datahouseerp.com/storage/app/public/image/software/garment/item2.jpg" alt="Item2 Screen">
            </div>
            <div class="carousel-item">
                <img src="https://dht.datahouseerp.com/storage/app/public/image/software/garment/sale.bmp" alt="Sale Screen">
            </div>
            <div class="carousel-item">
                <img src="https://dht.datahouseerp.com/storage/app/public/image/software/garment/purchase.png" alt="Purchase Screen">
            </div>
        </div>

        <!-- Custom Font Awesome Arrows -->
        <button class="carousel-control-prev" type="button" data-bs-target="#garmentDemoCarousel" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#garmentDemoCarousel" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Demo Links -->
    <div class="text-center mt-4">
        <a href="https://dht.datahouseerp.com/garment_retail_youtube" target="_blank" class="btn btn-danger btn-demo">
            <i class="fas fa-play-circle"></i> Watch Demo Video
        </a>
        <a href="{{url("garment_download")}}" class="btn btn-success btn-demo">
            <i class="fas fa-download"></i> Download Demo
        </a>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
