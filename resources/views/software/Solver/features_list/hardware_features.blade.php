<!DOCTYPE html>
<html lang="hi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garment Showroom Billing Software | गारमेंट शोरूम बिलिंग सॉफ्टवेयर</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    {{-- Google Fonts for better readability --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tiro+Devanagari+Hindi:ital@0;1&family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Noto Sans', sans-serif;
            background-color: #f8f9fa;
        }
        .ebook-container {
            max-width: 900px;
            margin: 20px auto;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            border-radius: 10px;
            background-color: #ffffff;
            overflow: hidden;
        }
        .ebook-header {
            background: linear-gradient(135deg, #0d6efd, #0a58ca);
            color: white;
            padding: 40px;
            text-align: center;
        }
        .ebook-header h1 {
            font-family: 'Tiro Devanagari Hindi', serif;
            font-size: 2.8rem;
            font-weight: bold;
        }
        .ebook-content {
            padding: 30px 40px;
        }
        .lang-switcher {
            text-align: center;
            padding: 15px;
            background-color: #e9ecef;
        }
        .lang-switcher .btn {
            font-weight: bold;
        }
        .card {
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            margin-bottom: 25px;
        }
        .card-header {
            background-color: #f1f3f5;
            font-size: 1.4rem;
            font-weight: bold;
            font-family: 'Tiro Devanagari Hindi', serif;
            padding: 15px 20px;
        }
        .card-body ul {
            padding-left: 20px;
        }
        .card-body li {
            margin-bottom: 12px;
            font-size: 1.1rem;
        }
        .action-buttons .btn {
            margin: 5px;
            font-size: 1.1rem;
            padding: 10px 20px;
        }
        .intro-text {
            font-size: 1.2rem;
            text-align: center;
            padding: 20px;
            background-color: #e9f5ff;
            border-radius: 8px;
            border: 1px solid #bce0fd;
            margin-bottom: 30px;
        }
        .pricing-box {
            background-color: #fff3cd;
            border: 1px solid #ffeeba;
            border-radius: 8px;
            padding: 25px;
            text-align: center;
        }
        .pricing-box .mrp {
            text-decoration: line-through;
            color: #6c757d;
            font-size: 1.2rem;
        }
        .pricing-box .final-price {
            font-size: 2.5rem;
            font-weight: bold;
            color: #28a745;
        }
        .ebook-footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 30px;
        }
        .ebook-footer a {
            color: #ffc107;
            text-decoration: none;
            font-weight: bold;
        }
        /* Language visibility classes */
        .lang-en { display: none; }
        .lang-hi { display: block; }
    </style>
</head>
<body>

<div class="ebook-container">
    <header class="ebook-header">
        <h1>
            <span class="lang-hi">गारमेंट शोरूम बिलिंग सॉफ्टवेयर</span>
            <span class="lang-en">Garment Showroom Billing Software</span>
        </h1>
        <p class="lead mb-0">
            <span class="lang-hi">आपके बिज़नेस को मैनेज करने का सबसे आसान और शक्तिशाली तरीका</span>
            <span class="lang-en">The Easiest and Most Powerful Way to Manage Your Business</span>
        </p>
    </header>
    
    <!-- Language Switcher -->
    <div class="lang-switcher">
        <button id="btn-hi" class="btn btn-primary">हिन्दी</button>
        <button id="btn-en" class="btn btn-outline-primary">English</button>
    </div>

    <main class="ebook-content">

        <!-- Action Buttons Section -->
        <div class="text-center mb-5 action-buttons">
            <a href="#" class="btn btn-primary">
                <i class="fas fa-download me-2"></i>
                <span class="lang-hi">सॉफ्टवेयर डाउनलोड करें</span>
                <span class="lang-en">Download Software</span>
            </a>
            <a href="#" class="btn btn-danger">
                <i class="fab fa-youtube me-2"></i>
                <span class="lang-hi">इंस्टॉलेशन वीडियो देखें</span>
                <span class="lang-en">Watch Installation Video</span>
            </a>
        </div>
        
        <!-- Gallery/Formats Section -->
        <div class="row text-center mb-5">
            <div class="col-md-4 mb-2">
                <a href="#" class="btn btn-outline-secondary w-100 p-3">
                    <i class="fas fa-barcode d-block mb-2 fa-2x"></i>
                    <span class="lang-hi">बारकोड फॉर्मेट देखें</span>
                    <span class="lang-en">View Barcode Formats</span>
                </a>
            </div>
            <div class="col-md-4 mb-2">
                <a href="#" class="btn btn-outline-secondary w-100 p-3">
                    <i class="fas fa-desktop d-block mb-2 fa-2x"></i>
                    <span class="lang-hi">सॉफ्टवेयर स्क्रीन देखें</span>
                    <span class="lang-en">View Software Screens</span>
                </a>
            </div>
            <div class="col-md-4 mb-2">
                <a href="#" class="btn btn-outline-secondary w-100 p-3">
                    <i class="fas fa-file-invoice d-block mb-2 fa-2x"></i>
                    <span class="lang-hi">बिल फॉर्मेट देखें</span>
                    <span class="lang-en">View Bill Formats</span>
                </a>
            </div>
        </div>
        
        <!-- Introduction Text -->
        <p class="intro-text">
            <span class="lang-hi">यह सॉफ्टवेयर गारमेंट शोरूम के लिए लाजवाब है, चलने में बहुत ही आसान और सुविधा जनक है।</span>
            <span class="lang-en">This software is excellent for garment showrooms; it is very easy and convenient to use.</span>
        </p>

        <!-- Main Features Card -->
        <div class="card">
            <div class="card-header">
                <span class="lang-hi">मुख्य विशेषताएं</span>
                <span class="lang-en">Main Features</span>
            </div>
            <div class="card-body">
                <ul>
                    <li><span class="lang-hi">साइज, कलर, आर्टिकल के हिसाब से स्टॉक बनाया जा सकता है।</span><span class="lang-en">Manage stock by size, color, and article.</span></li>
                    <li><span class="lang-hi">कंपनी-वाइस और कस्टमर-ग्रुप के हिसाब से डिस्काउंट और प्राइस सेट कर सकते हैं।</span><span class="lang-en">Set discounts and prices company-wise and by customer group.</span></li>
                    <li><span class="lang-hi">एजेंट-वाइस सेल्स की रिपोर्ट।</span><span class="lang-en">Agent-wise sales reports.</span></li>
                    <li><span class="lang-hi">सेल्स मैन और एमआर वाइस कमीशन की सुविधा।</span><span class="lang-en">Commission management for salesmen and MRs.</span></li>
                    <li><span class="lang-hi">बारकोड में परचेज का कोड डालने की सुविधा।</span><span class="lang-en">Option to include purchase code in barcodes.</span></li>
                    <li><span class="lang-hi">बिल पर अतिरिक्त डिस्काउंट।</span><span class="lang-en">Additional bill-wise discounts.</span></li>
                    <li><span class="lang-hi">होलसेल और रिटेल बिलिंग, दोनों की व्यवस्था।</span><span class="lang-en">Both wholesale and retail billing systems are available.</span></li>
                </ul>
            </div>
        </div>

        <!-- Additional Features Card -->
        <div class="card">
            <div class="card-header">
                <span class="lang-hi">सॉफ्टवेयर के अतिरिक्त फीचर्स</span>
                <span class="lang-en">Additional Software Features</span>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li><b><span class="lang-hi">QR कोड सिस्टम:</span><span class="lang-en">QR Code System:</span></b> <span class="lang-hi">बिल पर QR कोड प्रिंट करें, जिससे ग्राहक सीधे बिल अमाउंट का पेमेंट कर सके।</span><span class="lang-en">Print QR codes on bills for direct payment of the exact bill amount.</span></li>
                            <li><b><span class="lang-hi">डाटा बैकअप ऑन मेल:</span><span class="lang-en">Data Backup on Mail:</span></b> <span class="lang-hi">सॉफ्टवेयर बंद या चालू होने पर डाटा का बैकअप ऑटोमेटिक आपकी ईमेल पर आ जाये।</span><span class="lang-en">Automatically get a data backup to your email on software startup/shutdown.</span></li>
                            <li><b><span class="lang-hi">ऑटो बैकअप:</span><span class="lang-en">Auto Backup:</span></b> <span class="lang-hi">काम करते समय डाटा का ऑटोमेटिक बैकअप होता रहता है, जिससे डाटा सुरक्षित रहता है।</span><span class="lang-en">Data is backed up automatically while you work, ensuring data safety.</span></li>
                            <li><b><span class="lang-hi">डिजिटल साइन:</span><span class="lang-en">Digital Signature:</span></b> <span class="lang-hi">इनवॉइस में अपना डिजिटल सिग्नेचर प्रिंट कराएं और बार-बार साइन करने से बचें।</span><span class="lang-en">Print your digital signature on invoices to avoid manual signing.</span></li>
                            <li><b><span class="lang-hi">ऑटो व्हाट्स एप:</span><span class="lang-en">Auto WhatsApp:</span></b> <span class="lang-hi">बिल बनते ही ग्राहक को ऑटोमेटिक व्हाट्सएप चला जाये। (ऐड-ऑन)</span><span class="lang-en">Automatically send WhatsApp messages to customers upon bill generation. (Add-on)</span></li>
                            <li><b><span class="lang-hi">ऑटो SMS:</span><span class="lang-en">Auto SMS:</span></b> <span class="lang-hi">बिल बनने या पेमेंट जमा होने पर ग्राहक को SMS भेजें।</span><span class="lang-en">Send SMS to customers on bill creation or payment receipt.</span></li>
                            <li><b><span class="lang-hi">बैंक डिटेल ऑन बिल:</span><span class="lang-en">Bank Details on Bill:</span></b> <span class="lang-hi">बिल में अपनी बैंक डिटेल्स प्रिंट करें ताकि ग्राहक आसानी से पेमेंट कर सकें।</span><span class="lang-en">Print your bank details on the bill for easy payment.</span></li>
                            <li><b><span class="lang-hi">चेक Printing:</span><span class="lang-en">Check Printing:</span></b> <span class="lang-hi">सॉफ्टवेयर से ही सीधे चेक प्रिंट करें, सिर्फ साइन करने की जरूरत होगी।</span><span class="lang-en">Print checks directly from the software; only a signature is needed.</span></li>
                            <li><b><span class="lang-hi">लेजर ऑन मोबाइल:</span><span class="lang-en">Ledger on Mobile:</span></b> <span class="lang-hi">पार्टी का लेजर और आउटस्टैंडिंग मोबाइल ऐप पर देखें।</span><span class="lang-en">View party ledger and outstandings on the mobile app.</span></li>
                            <li><b><span class="lang-hi">लॉयल्टी पॉइंट्स:</span><span class="lang-en">Loyalty Points:</span></b> <span class="lang-hi">ग्राहकों को खरीद पर पॉइंट्स दें और उन्हें डिस्काउंट देकर रिटेन करें।</span><span class="lang-en">Reward customers with points on purchases and retain them with discounts.</span></li>
                            <li><b><span class="lang-hi">CRM:</span><span class="lang-en">CRM:</span></b> <span class="lang-hi">कस्टमर फॉलो-अप और सर्विस की डेट्स मैनेज करें।</span><span class="lang-en">Manage customer follow-ups and service dates.</span></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul>
                            <li><b><span class="lang-hi">कस्टम बिल फार्मेट:</span><span class="lang-en">Custom Bill Format:</span></b> <span class="lang-hi">हाफ पेज, फुल पेज, A4, रंगीन, आदि किसी भी फॉर्मेट में बिल डिजाइन करें।</span><span class="lang-en">Design bills in any format: half-page, full-page, A4, colored, etc.</span></li>
                            <li><b><span class="lang-hi">कस्टम रिपोर्ट डिजाइन:</span><span class="lang-en">Custom Report Design:</span></b> <span class="lang-hi">अपनी जरूरत के हिसाब से कस्टम रिपोर्ट्स बनाएं।</span><span class="lang-en">Create custom reports according to your needs.</span></li>
                            <li><b><span class="lang-hi">आइटम इंपोर्ट/एक्सपोर्ट:</span><span class="lang-en">Item Import/Export:</span></b> <span class="lang-hi">एक्सेल के माध्यम से आइटम और उनकी प्राइस लिस्ट अपडेट करें।</span><span class="lang-en">Update items and their price lists via Excel.</span></li>
                            <li><b><span class="lang-hi">बैंक रिकॉन्सिलेशन:</span><span class="lang-en">Bank Reconciliation:</span></b> <span class="lang-hi">बैंक स्टेटमेंट का सॉफ्टवेयर की एंट्री से मिलान करें।</span><span class="lang-en">Reconcile bank statements with software entries.</span></li>
                            <li><b><span class="lang-hi">मल्टी बारकोड और QR कोड:</span><span class="lang-en">Multi Barcode & QR Code:</span></b> <span class="lang-hi">अलग-अलग जानकारी के साथ कई तरह के बारकोड बनाएं।</span><span class="lang-en">Create various types of barcodes with different information.</span></li>
                            <li><b><span class="lang-hi">सभी भाषा में संचालित:</span><span class="lang-en">Multi-Language Support:</span></b> <span class="lang-hi">हिंदी, मराठी, गुजराती, अंग्रेजी किसी भी भाषा में सॉफ्टवेयर चलाएं।</span><span class="lang-en">Operate the software in any language: Hindi, Marathi, Gujarati, English.</span></li>
                            <li><b><span class="lang-hi">प्रोडक्शन मैनेजमेंट:</span><span class="lang-en">Production Management:</span></b> <span class="lang-hi">रॉ-मटेरियल से तैयार माल बनाने की एंट्री करें।</span><span class="lang-en">Manage entries from raw materials to finished goods.</span></li>
                            <li><b><span class="lang-hi">टच POS:</span><span class="lang-en">Touch POS:</span></b> <span class="lang-hi">टचस्क्रीन मॉनिटर से तेजी से बिलिंग करें।</span><span class="lang-en">Enable fast billing with a touchscreen monitor.</span></li>
                            <li><b><span class="lang-hi">मल्टी पेमेंट सेटलमेंट:</span><span class="lang-en">Multi-Payment Settlement:</span></b> <span class="lang-hi">एक ही बिल में कैश, कार्ड, UPI और उधार का हिसाब रखें।</span><span class="lang-en">Manage multiple payment modes (Cash, Card, UPI, Credit) in a single bill.</span></li>
                            <li><b><span class="lang-hi">3000 से ज्यादा रिपोर्ट:</span><span class="lang-en">3000+ Reports:</span></b> <span class="lang-hi">अपने बिज़नेस पर 360-डिग्री कंट्रोल के लिए विस्तृत रिपोर्ट्स।</span><span class="lang-en">Get detailed reports for 360-degree control over your business.</span></li>
                            <li><b><span class="lang-hi">डाटा फ्रीजिंग:</span><span class="lang-en">Data Freezing:</span></b> <span class="lang-hi">फाइनल किये गए हिसाब-किताब को फ्रीज करें ताकि उसमें कोई बदलाव न हो सके।</span><span class="lang-en">Freeze finalized accounts to prevent any modifications.</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Requirements Card -->
        <div class="card">
            <div class="card-header">
                <span class="lang-hi">आवश्यक चीजें</span>
                <span class="lang-en">System Requirements</span>
            </div>
            <div class="card-body">
                <p><i class="fas fa-check-circle text-success me-2"></i><span class="lang-hi">कंप्यूटर या लैपटॉप (विंडो 7, 10, 11)</span><span class="lang-en">Computer or Laptop (Windows 7, 10, 11)</span></p>
                <p><i class="fas fa-check-circle text-success me-2"></i><span class="lang-hi">थर्मल प्रिंटर (बिल के लिए)</span><span class="lang-en">Thermal Printer (for bills)</span></p>
                <p><i class="fas fa-check-circle text-success me-2"></i><span class="lang-hi">बारकोड प्रिंटर और स्कैनर</span><span class="lang-en">Barcode Printer and Scanner</span></p>
            </div>
        </div>

        <!-- Pricing Section -->
        <div class="pricing-box">
            <h3 class="card-header" style="background: none; border: none;">
                <span class="lang-hi">स्पेशल ऑफर प्राइस</span>
                <span class="lang-en">Special Offer Price</span>
            </h3>
            <p class="mrp"><span class="lang-hi">MRP: ₹15,600</span><span class="lang-en">MRP: ₹15,600</span></p>
            <p class="final-price">₹10,000 <span style="font-size: 1.2rem; color: #333;"><span class="lang-hi">(GST अतिरिक्त)</span><span class="lang-en">(GST Extra)</span></span></p>
            <p class="fw-bold"><span class="lang-hi">एक साल की सर्विस बिलकुल फ्री</span><span class="lang-en">One Year Service Absolutely Free</span></p>
            <p class="text-muted"><span class="lang-hi">अगले साल से रिन्यूअल चार्ज: ₹2500</span><span class="lang-en">Next Year Renewal Charge: ₹2500</span></p>
        </div>

    </main>
    
    <footer class="ebook-footer">
        <h4>
            <span class="lang-hi">अधिक जानकारी के लिए संपर्क करें</span>
            <span class="lang-en">For more information, contact us</span>
        </h4>
        <div class="mt-3">
            <a href="https://wa.me/917999663696" class="btn btn-success btn-lg mx-2">
                <i class="fab fa-whatsapp me-2"></i>
                <span class="lang-hi">WhatsApp करें</span>
                <span class="lang-en">WhatsApp Us</span>
            </a>
            <a href="https://www.youtube.com" class="btn btn-danger btn-lg mx-2">
                <i class="fab fa-youtube me-2"></i>
                <span class="lang-hi">यूट्यूब चैनल</span>
                <span class="lang-en">YouTube Channel</span>
            </a>
        </div>
        <p class="mt-4 mb-0">
            <span class="lang-hi">वेबसाइट:</span><span class="lang-en">Website:</span> 
            <a href="http://www.datahousetechnology.com" target="_blank">www.datahousetechnology.com</a>
        </p>
    </footer>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const btnHi = document.getElementById('btn-hi');
        const btnEn = document.getElementById('btn-en');
        const elementsHi = document.querySelectorAll('.lang-hi');
        const elementsEn = document.querySelectorAll('.lang-en');

        function setLanguage(lang) {
            if (lang === 'hi') {
                // Show Hindi, Hide English
                elementsHi.forEach(el => el.style.display = 'inline'); // or 'block'
                elementsEn.forEach(el => el.style.display = 'none');
                
                // Update button styles
                btnHi.classList.add('btn-primary');
                btnHi.classList.remove('btn-outline-primary');
                btnEn.classList.add('btn-outline-primary');
                btnEn.classList.remove('btn-primary');

                // Set HTML lang attribute
                document.documentElement.lang = 'hi';

            } else { // lang === 'en'
                // Show English, Hide Hindi
                elementsHi.forEach(el => el.style.display = 'none');
                elementsEn.forEach(el => el.style.display = 'inline'); // or 'block'

                // Update button styles
                btnEn.classList.add('btn-primary');
                btnEn.classList.remove('btn-outline-primary');
                btnHi.classList.add('btn-outline-primary');
                btnHi.classList.remove('btn-primary');

                // Set HTML lang attribute
                document.documentElement.lang = 'en';
            }
        }

        btnHi.addEventListener('click', () => setLanguage('hi'));
        btnEn.addEventListener('click', () => setLanguage('en'));

        // Set initial language
        setLanguage('hi');
    });
</script>
</body>
</html>
