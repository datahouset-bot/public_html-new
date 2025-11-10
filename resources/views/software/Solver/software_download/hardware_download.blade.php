<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Garment Billing Software - Setup & Installation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-light">

<div class="container py-5">
    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-header bg-primary text-white text-center py-4 rounded-top-4">
            <h3 class="fw-bold mb-0 text-shadow-sm">Software Setup & Installation</h3>
            <h4 class="fw-light mb-0">Garment Billing Software Speed Plus 9.0</h4>
        </div>
        <div class="card-body p-5">
            <div class="d-flex flex-wrap justify-content-center gap-3 mb-5">
                <a href="https://drive.google.com/file/d/1UUPmKUF65G6aYCW970x4yL5I-DyWkwOA/view?usp=sharing" class="btn btn-primary btn-lg rounded-pill fw-bold px-4 py-2">
                    <i class="fas fa-download me-2"></i> Download Software
                </a>
                <a href="#" class="btn btn-secondary btn-lg rounded-pill fw-bold px-4 py-2">
                    <i class="fas fa-database me-2"></i> Download Demo Data
                </a>
                <a href="https://dht.datahouseerp.com/garment_retail_browser" class="btn btn-success btn-lg rounded-pill fw-bold px-4 py-2">
                    <i class="fas fa-desktop me-2"></i> Browser & Screen
                </a>
                <a href="{{url('/garment_retail_features')}}" class="btn btn-warning btn-lg rounded-pill fw-bold px-4 py-2">
                    <i class="fas fa-list-check me-2"></i> Features List
                </a>
                <a href="https://dht.datahouseerp.com/garment_retail_youtube" class="btn btn-info btn-lg rounded-pill fw-bold px-4 py-2">
                    <i class="fas fa-video me-2"></i> Demo Video
                </a>
            </div>
            
            <h4 class="text-center fw-bold text-primary mb-4">Step-by-Step Installation Guide</h4>
            <div class="p-4 bg-light rounded-3">
    <ol class="list-unstyled">
        <li class="mb-4">
            <strong class="text-dark">1. फ़ाइलें डाउनलोड करें (Download Files):</strong>
            <p class="mb-1">ऊपर दिए गए बटन पर क्लिक करके सॉफ्टवेयर पैकेज और डेमो डेटा डाउनलोड करें। (Click the buttons above to download the software package and demo data.)</p>
        </li>
        <li class="mb-4">
            <strong class="text-dark">2. ज़िप फ़ाइल निकालें (Extract the ZIP):</strong>
            <p class="mb-1">ज़िप फ़ाइल को अपनी पसंदीदा डायरेक्टरी में अनज़िप करें। (Unzip the software file into your preferred directory.)</p>
        </li>
        <li class="mb-4">
            <strong class="text-dark">3. इंस्टॉल करें  Provider (Install Provider):</strong>
            <p class="mb-1">सॉफ्टवेयर की डायरेक्टरी में अपना टर्मिनल खोलें और यह कमांड चलाएं: (Open your terminal in the software's directory and run this command:)</p>
            {{-- <pre class="bg-light border border-primary-subtle rounded p-3 text-primary"><code>composer install</code></pre> --}}
        </li>
        <li class="mb-4">
            <strong class="text-dark">4. समर्थन फ़ाइलें इंस्टॉल करें (Install Support Files):</strong>
            <p class="mb-1">आवश्यक समर्थन फ़ाइलें इंस्टॉल करें। (Install the necessary support files.)</p>
        </li>
        <li class="mb-4">
            <strong class="text-dark">5. क्रिस्टल रिपोर्ट इंस्टॉल करें (Install Crystal Reports):</strong>
            <p class="mb-1">इंस्टॉलेशन के दौरान, यह कुंजी दर्ज करें: `AVS50-81SG00S-G61002U`। जब रीस्टार्ट करने के लिए कहा जाए तो **No** पर क्लिक करें। क्रिस्टल रिपोर्ट को फिर से चलाएं और अंत में **register later** पर क्लिक करें। (During installation, enter the key: `AVS50-81SG00S-G61002U`. When prompted to restart, click **No**. Run Crystal Reports again and click **register later** at the end.)</p>
        </li>
        <li class="mb-4">
            <strong class="text-dark">12. कंपनी बनाएं या डेमो डेटा आयात करें (Create Company or Import Demo Data):</strong>
            <p class="mb-1">आप एक नई कंपनी बना सकते हैं, या यदि आप डेमो डेटा चाहते हैं, तो डेमो डेटा फ़ोल्डर डाउनलोड करें और इसे `Speed Plus` फ़ोल्डर में पेस्ट करें। जब यह फ़ोल्डर को बदलने के लिए पूछे, तो **yes** पर क्लिक करें। (You can create a new company, or if you want demo data, download the demo data folder and paste it into the `Speed Plus` folder. When it asks to replace the folder, click **yes**.)</p>
        </li>
        <li class="mb-4">
            <p class="mb-1">यदि आपको कोई समस्या आती है, तो 7999663696 पर कॉल करें या इंस्टेंट सपोर्ट के लिए <a href="{{url('todo_by_customer')}}">यहां क्लिक करें</a>। (If you face any problems, call 7999663696 or <a href="{{url('todo_by_customer')}}">click here</a> for instant support.)</p>
        </li>
    </ol>
</div>
            
            <hr class="my-5">
            
            <div class="text-center">
                <h4 class="fw-bold text-primary mb-3">Installation Video Tutorial</h4>
                <p class="lead mb-4">Watch a detailed video guide to walk you through the installation process step by step.</p>
                <a href="https://www.youtube.com/watch?v=rSjeR3LHQUY&pp=ygUYZG93bmxvYWQgc3BlZWQgcGx1cyAgOS4w0gcJCa0JAYcqIYzv" class="btn btn-outline-primary btn-lg rounded-pill fw-bold px-5 py-3">
                    <i class="fas fa-video me-2"></i> Watch Video Now
                </a>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>