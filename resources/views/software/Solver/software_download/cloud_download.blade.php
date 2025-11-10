<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cloud Setup & Demo - Tally | Busy | Marg | Speed Plus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-light">

<div class="container py-5">
    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-header bg-primary text-white text-center py-4 rounded-top-4">
            <h3 class="fw-bold mb-0 text-shadow-sm">Cloud Setup & Demo</h3>
            <h4 class="fw-light mb-0">Tally | Busy | Marg | Speed Plus</h4>
        </div>

        <div class="card-body p-5">
            <!-- Buttons -->
            <div class="d-flex flex-wrap justify-content-center gap-3 mb-5">
                <a href="{{ url('/cloud_setup') }}" class="btn btn-primary btn-lg rounded-pill fw-bold px-4 py-2">
                    <i class="fas fa-cloud me-2"></i> Cloud Setup Guide
                </a>
                <a href="{{ url('/cloud_features') }}" class="btn btn-success btn-lg rounded-pill fw-bold px-4 py-2">
                    <i class="fas fa-list-check me-2"></i> Features List
                </a>
                <a href="{{ url('/cloud_demo_video') }}" class="btn btn-info btn-lg rounded-pill fw-bold px-4 py-2">
                    <i class="fas fa-video me-2"></i> Demo Video
                </a>
                <a href="{{ url('/cloud_download_demo') }}" class="btn btn-warning btn-lg rounded-pill fw-bold px-4 py-2">
                    <i class="fas fa-download me-2"></i> Download Demo
                </a>
                <a href="{{ url('/cloud_live_access') }}" class="btn btn-dark btn-lg rounded-pill fw-bold px-4 py-2">
                    <i class="fas fa-globe me-2"></i> Live Cloud Access
                </a>
<!-- Download Setup Button -->
<a href="{{ url('https://drive.google.com/file/d/1scrOJee4vkT9x35UgefxpU_gajwNyzeX/view?usp=sharing') }}" 
   class="btn btn-success btn-lg rounded-pill fw-bold px-4 py-2">
    <i class="fas fa-download me-2"></i> Download Setup
</a>

<!-- Demo Button -->
<a href="{{ url('https://drive.google.com/file/d/1lPzd2t_m2nBQsjhGzK6flO06-Fl40hia/view?usp=drive_link') }}" 
   class="btn btn-primary btn-lg rounded-pill fw-bold px-4 py-2">
    <i class="fas fa-id-card me-2"></i> Demo Icon And Id Password
</a>


            </div>

            <!-- Cloud Setup Steps -->
            <h4 class="text-center fw-bold text-primary mb-4">Step-by-Step Cloud Access Guide</h4>
            <div class="p-4 bg-light rounded-3">
                <ol class="list-unstyled">
                    <li class="mb-4">
                        <strong class="text-dark">1. Download Cloud Setup:</strong>
                        <p class="mb-1">Download and install the Cloud Setup software on your PC, then complete the installation process.</p>
                    </li>
                    <li class="mb-4">
                        <strong class="text-dark">2. Login to Your Account:</strong>
                        <p class="mb-1">Open the installed software and enter your <b>Login ID</b> and <b>Password</b> provided by our team.</p>
                    </li>
                    <li class="mb-4">
                        <strong class="text-dark">3. Access via Browser:</strong>
                        <p class="mb-1">If you prefer, you can directly access your cloud account through the browser using a secure URL. No heavy installation is required.</p>
                    </li>
                    <li class="mb-4">
                        <strong class="text-dark">4. Multi-User Support:</strong>
                        <p class="mb-1">Multiple team members can access the software simultaneously with role-based permissions.</p>
                    </li>
                    <li class="mb-4">
                        <strong class="text-dark">5. Daily Backup & Security:</strong>
                        <p class="mb-1">Your data is automatically backed up daily and protected with SSL encryption for maximum security.</p>
                    </li>
                    <li class="mb-4">
                        <p class="mb-1">For any issue, call <b>7999663696</b> or <a href="{{ url('todo_by_customer') }}">click here</a> for instant support.</p>
                    </li>
                </ol>
            </div>

            <hr class="my-5">

            <!-- Video -->
            <div class="text-center">
                <h4 class="fw-bold text-primary mb-3">Cloud Access Demo Video</h4>
                <p class="lead mb-4">Watch a step-by-step guide on how to use Tally, Busy, Marg & Speed Plus on the Cloud.</p>
                <a href="https://www.youtube.com/watch?v=rSjeR3LHQUY" class="btn btn-outline-primary btn-lg rounded-pill fw-bold px-5 py-3">
                    <i class="fas fa-video me-2"></i> Watch Video Now
                </a>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
