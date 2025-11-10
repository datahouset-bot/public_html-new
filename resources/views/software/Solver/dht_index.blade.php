<!DOCTYPE html>
<html lang="hi">

<head>
    <meta charset="UTF-8">
    <title>Software List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(to right, #f0f4f8, #d9e4ec);
        }

        .card-title {
            font-size: 1.1rem;
            line-height: 1.4;
        }

        .software-btn {
            font-weight: bold;
            font-size: 1rem;
            padding: 10px;
            border-radius: 8px;
        }

        .software-btn i {
            margin-right: 6px;
        }

        .d-grid.gap-2 {
            gap: 0.6rem !important;
        }
    </style>
</head>

<body>

    <div class="container py-4">
        <h1 class="text-center mb-4 fw-bold">💻 Software List / सॉफ्टवेयर सूची</h1>

        <div class="row g-3">

            <!-- Garment Shop Software -->
            <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">
                            1.गारमेंट शॉप के लिए सॉफ्टवेयर <br>
                            <small class="text-muted">1.Garment Shop Billing Software</small>
                        </h5>
                        <div class="d-grid gap-2 mt-3">
                            <a href="{{ url('/garment_retail_browser') }}" class="btn btn-primary software-btn">
                                <i class="fas fa-desktop"></i> Browser & Screen
                            </a>
                            <a href="{{ url('/garment_retail_features') }}" class="btn btn-success software-btn">
                                <i class="fas fa-list-check"></i> Features List
                            </a>
                            <a href="{{ url('garment_retail_youtube') }}" class="btn btn-info software-btn">
                                <i class="fas fa-video"></i> Demo Video
                            </a>
                            <a href="{{ url('/garment_download') }}" class="btn btn-warning software-btn">
                                <i class="fas fa-download"></i> Download Demo
                            </a>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Footwear Shop Software -->
            <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">
                            Hardware शॉप के लिए सॉफ्टवेयर <br>
                            <small class="text-muted">Hardware Shop Billing Software</small>
                        </h5>
                        <div class="d-grid gap-2 mt-3">
                            <a href="{{ url('/hardware_browser') }}" class="btn btn-primary software-btn">
                                <i class="fas fa-desktop"></i> Browser & Screen
                            </a>
                            <a href="{{ url('/hardware_features') }}" class="btn btn-success software-btn">
                                <i class="fas fa-list-check"></i> Features List
                            </a>
                            <a href="{{ url('/hardware_youtube') }}" class="btn btn-info software-btn">
                                <i class="fas fa-video"></i> Demo Video
                            </a>
                            <a href="{{ url('/hardware_download') }}" class="btn btn-warning software-btn">
                                <i class="fas fa-download"></i> Download Demo
                            </a>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Workshop Billing Software -->
            <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">
                            वर्कशॉप बिलिंग सॉफ्टवेयर <br>
                            <small class="text-muted">Workshop Billing Software</small>
                        </h5>
                        <div class="d-grid gap-2 mt-3">
                            <a href="{{ url('/workshop_browser') }}" class="btn btn-primary software-btn">
                                <i class="fas fa-desktop"></i> Browser & Screen
                            </a>
                            <a href="{{ url('/workshop_features') }}" class="btn btn-success software-btn">
                                <i class="fas fa-list-check"></i> Features List
                            </a>
                            <a href="{{ url('/workshop_youtube') }}" class="btn btn-info software-btn">
                                <i class="fas fa-video"></i> Demo Video
                            </a>
                            <a href="{{ url('/workshop_download') }}" class="btn btn-warning software-btn">
                                <i class="fas fa-download"></i> Download Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>



            <!--- etna content copy karna hai ----->
            <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">
                            फुटवियर शॉप के लिए सॉफ्टवेयर <br>
                            <small class="text-muted">Footwear Shop Billing Software</small>
                        </h5>
                        <div class="d-grid gap-2 mt-3">
                           <a href="{{ url('/footware_browser') }}" class="btn btn-primary software-btn">
                                <i class="fas fa-desktop"></i> Browser & Screen
                            </a>
                            <a href="{{ url('/footware_features') }}" class="btn btn-success software-btn">
                                <i class="fas fa-list-check"></i> Features List
                            </a>
                            <a href="{{ url('footware_youtube') }}" class="btn btn-info software-btn">
                                <i class="fas fa-video"></i> Demo Video
                            </a>
                            <a href="{{ url('/footware_download') }}" class="btn btn-warning software-btn">
                                <i class="fas fa-download"></i> Download Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
{{-- pathology software --}}
<div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">
                            pathology के लिए सॉफ्टवेयर <br>
                            <small class="text-muted">Pathology Software</small>
                        </h5>
                        <div class="d-grid gap-2 mt-3">
                           <a href="{{ url('/pathology_browser') }}" class="btn btn-primary software-btn">
                                <i class="fas fa-desktop"></i> Browser & Screen
                            </a>
                            <a href="{{ url('/pathology_features') }}" class="btn btn-success software-btn">
                                <i class="fas fa-list-check"></i> Features List
                            </a>
                            <a href="{{ url('/pathology_youtube') }}" class="btn btn-info software-btn">
                                <i class="fas fa-video"></i> Demo Video
                            </a>
                            <a href="{{ url('/pathology_download') }}" class="btn btn-warning software-btn">
                                <i class="fas fa-download"></i> Download Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- hotel management software --}}
            <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">
                            Hotel management के लिए सॉफ्टवेयर <br>
                            <small class="text-muted">Hotel Management Software</small>
                        </h5>
                        <div class="d-grid gap-2 mt-3">
                            <a href="{{ url('/hotelmanagement_browser') }}" class="btn btn-primary software-btn">
                                <i class="fas fa-desktop"></i> Browser & Screen
                            </a>
                            <a href="{{ url('/hotelmanagement_features') }}" class="btn btn-success software-btn">
                                <i class="fas fa-list-check"></i> Features List
                            </a>
                            <a href="{{ url('/hotelmanagement_youtube') }}" class="btn btn-info software-btn">
                                <i class="fas fa-video"></i> Demo Video
                            </a>
                            <a href="{{ url('/hotelmanagement_download') }}" class="btn btn-warning software-btn">
                                <i class="fas fa-download"></i> Download Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
{{-- restaurant billing software --}}
<div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">
                         .रेस्टोरेंट के लिए सॉफ्टवेयर <br>
                            <small class="text-muted">Restaurant Biling Software</small>
                        </h5>
                        <div class="d-grid gap-2 mt-3">
                             <a href="{{ url('/Restaurant_browser') }}" class="btn btn-primary software-btn">
                                <i class="fas fa-desktop"></i> Browser & Screen
                            </a>
                            <a href="{{ url('/Restaurant_features') }}" class="btn btn-success software-btn">
                                <i class="fas fa-list-check"></i> Features List
                            </a>
                            <a href="{{ url('/Restaurant_youtube') }}" class="btn btn-info software-btn">
                                <i class="fas fa-video"></i> Demo Video
                            </a>
                            <a href="{{ url('/Restaurant_download') }}" class="btn btn-warning software-btn">
                                <i class="fas fa-download"></i> Download Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- School management software --}}
            <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">
                        स्कूल मैनेजमेंट के लिए सॉफ्टवेयर <br>
                            <small class="text-muted">School Management Software</small>
                        </h5>
                        <div class="d-grid gap-2 mt-3">
                            <a href="{{ url('/School_browser') }}" class="btn btn-primary software-btn">
                                <i class="fas fa-desktop"></i> Browser & Screen
                            </a>
                            <a href="{{ url('/School_features') }}" class="btn btn-success software-btn">
                                <i class="fas fa-list-check"></i> Features List
                            </a>
                            <a href="{{ url('/School_youtube') }}" class="btn btn-info software-btn">
                                <i class="fas fa-video"></i> Demo Video
                            </a>
                            <a href="{{ url('/School_download') }}" class="btn btn-warning software-btn">
                                <i class="fas fa-download"></i> Download Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{--collage management--}}
            <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">
                       कॉलेज मैनेजमेंट के लिए सॉफ्टवेयर <br>
                            <small class="text-muted">collage management Software</small>
                        </h5>
                        <div class="d-grid gap-2 mt-3">
                            <a href="{{ url('/college_browser') }}" class="btn btn-primary software-btn">
                                <i class="fas fa-desktop"></i> Browser & Screen
                            </a>
                            <a href="{{ url('/college_features') }}" class="btn btn-success software-btn">
                                <i class="fas fa-list-check"></i> Features List
                            </a>
                            <a href="{{ url('/college_youtube') }}" class="btn btn-info software-btn">
                                <i class="fas fa-video"></i> Demo Video
                            </a>
                            <a href="{{ url('/college_download') }}" class="btn btn-warning software-btn">
                                <i class="fas fa-download"></i> Download Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{--transport management  --}}
            <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">
                       ट्रांसपोर्ट  मैनेजमेंट के लिए सॉफ्टवेयर <br>
                            <small class="text-muted">Transport Management Software</small>
                        </h5>
                        <div class="d-grid gap-2 mt-3">
                          <a href="{{ url('/Transport_browser') }}" class="btn btn-primary software-btn">
                                <i class="fas fa-desktop"></i> Browser & Screen
                            </a>
                            <a href="{{ url('/Transport_features') }}" class="btn btn-success software-btn">
                                <i class="fas fa-list-check"></i> Features List
                            </a>
                            <a href="{{ url('/Transport_youtube') }}" class="btn btn-info software-btn">
                                <i class="fas fa-video"></i> Demo Video
                            </a>
                            <a href="{{ url('/Transport_download') }}" class="btn btn-warning software-btn">
                                <i class="fas fa-download"></i> Download Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- medical retail billing --}}
            <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">
                        मेडिकल रीटेल बिलिंग सॉफ्टवेयर <br>
                            <small class="text-muted">Medical retail Software</small>
                        </h5>
                        <div class="d-grid gap-2 mt-3">
                            <a href="{{ url('/medical_browser') }}" class="btn btn-primary software-btn">
                                <i class="fas fa-desktop"></i> Browser & Screen
                            </a>
                            <a href="{{ url('/medical_features') }}" class="btn btn-success software-btn">
                                <i class="fas fa-list-check"></i> Features List
                            </a>
                            <a href="{{ url('/medical_youtube') }}" class="btn btn-info software-btn">
                                <i class="fas fa-video"></i> Demo Video
                            </a>
                            <a href="{{ url('/medical_download') }}" class="btn btn-warning software-btn">
                                <i class="fas fa-download"></i> Download Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{--FMCG whole sale   --}}
            <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">
                        FMCG होल सेल बिलिंग  सॉफ्टवेयर <br>
                            <small class="text-muted">FMCG wholesale Banking software </small>
                        </h5>
                        <div class="d-grid gap-2 mt-3">
                            <a href="{{ url('/fmcg_browser') }}" class="btn btn-primary software-btn">
                                <i class="fas fa-desktop"></i> Browser & Screen
                            </a>
                            <a href="{{ url('/fmcg_features') }}" class="btn btn-success software-btn">
                                <i class="fas fa-list-check"></i> Features List
                            </a>
                            <a href="{{ url('/fmcg_youtube') }}" class="btn btn-info software-btn">
                                <i class="fas fa-video"></i> Demo Video
                            </a>
                            <a href="{{ url('/fmcg_download') }}" class="btn btn-warning software-btn">
                                <i class="fas fa-download"></i> Download Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{--  --}}
            <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">
                       किराना शॉप बिलिंग सॉफ्टवेयर <br>
                            <small class="text-muted">Kirana shop Billing Software</small>
                        </h5>
                        <div class="d-grid gap-2 mt-3">
                             <a href="{{ url('/kirana_browser') }}" class="btn btn-primary software-btn">
                                <i class="fas fa-desktop"></i> Browser & Screen
                            </a>
                            <a href="{{ url('/kirana_features') }}" class="btn btn-success software-btn">
                                <i class="fas fa-list-check"></i> Features List
                            </a>
                            <a href="{{ url('/kirana_youtube') }}" class="btn btn-info software-btn">
                                <i class="fas fa-video"></i> Demo Video
                            </a>
                            <a href="{{ url('/kirana_download') }}" class="btn btn-warning software-btn">
                                <i class="fas fa-download"></i> Download Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Tally cloud --}}
            {{-- <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">
                        टैली क्लाउड  <br>
                            <small class="text-muted">Tally cloud</small>
                        </h5>
                        <div class="d-grid gap-2 mt-3">
                            <a href="/browser-screen/footwear" class="btn btn-primary software-btn">
                                <i class="fas fa-desktop"></i> Browser & Screen
                            </a>
                            <a href="/features/footwear" class="btn btn-success software-btn">
                                <i class="fas fa-list-check"></i> Features List
                            </a>
                            <a href="/demo-video/footwear" class="btn btn-info software-btn">
                                <i class="fas fa-video"></i> Demo Video
                            </a>
                            <a href="/download-demo/footwear" class="btn btn-warning software-btn">
                                <i class="fas fa-download"></i> Download Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- Busy cloud --}}
            {{-- <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">
                       बिजी क्लाउड <br>
                            <small class="text-muted">Busy cloud</small>
                        </h5>
                        <div class="d-grid gap-2 mt-3">
                            <a href="/browser-screen/footwear" class="btn btn-primary software-btn">
                                <i class="fas fa-desktop"></i> Browser & Screen
                            </a>
                            <a href="/features/footwear" class="btn btn-success software-btn">
                                <i class="fas fa-list-check"></i> Features List
                            </a>
                            <a href="/demo-video/footwear" class="btn btn-info software-btn">
                                <i class="fas fa-video"></i> Demo Video
                            </a>
                            <a href="/download-demo/footwear" class="btn btn-warning software-btn">
                                <i class="fas fa-download"></i> Download Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{--  मार्ग क्लाउड--}}
            {{-- <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">
                        मार्ग क्लाउड <br>
                            <small class="text-muted">Marg cloud</small>
                        </h5>
                        <div class="d-grid gap-2 mt-3">
                            <a href="/browser-screen/footwear" class="btn btn-primary software-btn">
                                <i class="fas fa-desktop"></i> Browser & Screen
                            </a>
                            <a href="/features/footwear" class="btn btn-success software-btn">
                                <i class="fas fa-list-check"></i> Features List
                            </a>
                            <a href="/demo-video/footwear" class="btn btn-info software-btn">
                                <i class="fas fa-video"></i> Demo Video
                            </a>
                            <a href="/download-demo/footwear" class="btn btn-warning software-btn">
                                <i class="fas fa-download"></i> Download Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{--कंप्यूटर शॉप बिलिंग सॉफ्टवेयर  --}}
            <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">
                        कंप्यूटर शॉप बिलिंग सॉफ्टवेयर <br>
                            <small class="text-muted">computer shop Billing Software</small>
                        </h5>
                        <div class="d-grid gap-2 mt-3">
                            <a href="/browser-screen/footwear" class="btn btn-primary software-btn">
                                <i class="fas fa-desktop"></i> Browser & Screen
                            </a>
                            <a href="/features/footwear" class="btn btn-success software-btn">
                                <i class="fas fa-list-check"></i> Features List
                            </a>
                            <a href="/demo-video/footwear" class="btn btn-info software-btn">
                                <i class="fas fa-video"></i> Demo Video
                            </a>
                            <a href="/download-demo/footwear" class="btn btn-warning software-btn">
                                <i class="fas fa-download"></i> Download Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- सीसीटीवी बिलिंग सॉफ्टवेयर  --}}
              <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">
                        सीसीटीवी बिलिंग सॉफ्टवेयर <br>
                            <small class="text-muted">CCTV Billing Software</small>
                        </h5>
                        <div class="d-grid gap-2 mt-3">
                            <a href="/browser-screen/footwear" class="btn btn-primary software-btn">
                                <i class="fas fa-desktop"></i> Browser & Screen
                            </a>
                            <a href="/features/footwear" class="btn btn-success software-btn">
                                <i class="fas fa-list-check"></i> Features List
                            </a>
                            <a href="/demo-video/footwear" class="btn btn-info software-btn">
                                <i class="fas fa-video"></i> Demo Video
                            </a>
                            <a href="/download-demo/footwear" class="btn btn-warning software-btn">
                                <i class="fas fa-download"></i> Download Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{--अक्वागार्ड बिलिंग सॉफ्टवेयर--}}
              <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">
                       अक्वागार्ड बिलिंग सॉफ्टवेयर <br>
                            <small class="text-muted">Aquaguard Billing Software</small>
                        </h5>
                        <div class="d-grid gap-2 mt-3">
                            <a href="/browser-screen/footwear" class="btn btn-primary software-btn">
                                <i class="fas fa-desktop"></i> Browser & Screen
                            </a>
                            <a href="/features/footwear" class="btn btn-success software-btn">
                                <i class="fas fa-list-check"></i> Features List
                            </a>
                            <a href="/demo-video/footwear" class="btn btn-info software-btn">
                                <i class="fas fa-video"></i> Demo Video
                            </a>
                            <a href="/download-demo/footwear" class="btn btn-warning software-btn">
                                <i class="fas fa-download"></i> Download Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{--  ए.सी बिलिंग एंड सर्विस शॉप --}}
              <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">
                       ए.सी बिलिंग एंड सर्विस शॉप  सॉफ्टवेयर <br>
                            <small class="text-muted">S.C Billing and Service Shop Software</small>
                        </h5>
                        <div class="d-grid gap-2 mt-3">
                            <a href="/browser-screen/footwear" class="btn btn-primary software-btn">
                                <i class="fas fa-desktop"></i> Browser & Screen
                            </a>
                            <a href="/features/footwear" class="btn btn-success software-btn">
                                <i class="fas fa-list-check"></i> Features List
                            </a>
                            <a href="/demo-video/footwear" class="btn btn-info software-btn">
                                <i class="fas fa-video"></i> Demo Video
                            </a>
                            <a href="/download-demo/footwear" class="btn btn-warning software-btn">
                                <i class="fas fa-download"></i> Download Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{--पतंजलि शॉप बिलिंग सॉफ्टवेयर  --}}
              <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">
                        पतंजलि शॉप बिलिंग सॉफ्टवेयर <br>
                            <small class="text-muted">Patanjali shop Billing Software</small>
                        </h5>
                        <div class="d-grid gap-2 mt-3">
                            <a href="/browser-screen/footwear" class="btn btn-primary software-btn">
                                <i class="fas fa-desktop"></i> Browser & Screen
                            </a>
                            <a href="/features/footwear" class="btn btn-success software-btn">
                                <i class="fas fa-list-check"></i> Features List
                            </a>
                            <a href="/demo-video/footwear" class="btn btn-info software-btn">
                                <i class="fas fa-video"></i> Demo Video
                            </a>
                            <a href="/download-demo/footwear" class="btn btn-warning software-btn">
                                <i class="fas fa-download"></i> Download Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- बैग शॉप बिलिंग --}}
              <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">
                        बैग शॉप बिलिंग सॉफ्टवेयर <br>
                            <small class="text-muted">BAG shop Billing Software</small>
                        </h5>
                        <div class="d-grid gap-2 mt-3">
                            <a href="/browser-screen/footwear" class="btn btn-primary software-btn">
                                <i class="fas fa-desktop"></i> Browser & Screen
                            </a>
                            <a href="/features/footwear" class="btn btn-success software-btn">
                                <i class="fas fa-list-check"></i> Features List
                            </a>
                            <a href="/demo-video/footwear" class="btn btn-info software-btn">
                                <i class="fas fa-video"></i> Demo Video
                            </a>
                            <a href="/download-demo/footwear" class="btn btn-warning software-btn">
                                <i class="fas fa-download"></i> Download Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Dairy shop --}}
              <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">
                         डेरी  शॉप सॉफ्टवेयर <br>
                            <small class="text-muted">DAIRY shop Software</small>
                        </h5>
                        <div class="d-grid gap-2 mt-3">
                            <a href="/browser-screen/footwear" class="btn btn-primary software-btn">
                                <i class="fas fa-desktop"></i> Browser & Screen
                            </a>
                            <a href="/features/footwear" class="btn btn-success software-btn">
                                <i class="fas fa-list-check"></i> Features List
                            </a>
                            <a href="/demo-video/footwear" class="btn btn-info software-btn">
                                <i class="fas fa-video"></i> Demo Video
                            </a>
                            <a href="/download-demo/footwear" class="btn btn-warning software-btn">
                                <i class="fas fa-download"></i> Download Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{--वाइन शॉप  --}}
              <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">
                    वाइन शॉप सॉफ्टवेयर <br>
                            <small class="text-muted">Wine shop Software</small>
                        </h5>
                        <div class="d-grid gap-2 mt-3">
                            <a href="/browser-screen/footwear" class="btn btn-primary software-btn">
                                <i class="fas fa-desktop"></i> Browser & Screen
                            </a>
                            <a href="/features/footwear" class="btn btn-success software-btn">
                                <i class="fas fa-list-check"></i> Features List
                            </a>
                            <a href="/demo-video/footwear" class="btn btn-info software-btn">
                                <i class="fas fa-video"></i> Demo Video
                            </a>
                            <a href="/download-demo/footwear" class="btn btn-warning software-btn">
                                <i class="fas fa-download"></i> Download Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- स्वीट शॉप --}}
              <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">
                        स्वीट शॉप सॉफ्टवेयर <br>
                            <small class="text-muted">Sweet Shop Software</small>
                        </h5>
                        <div class="d-grid gap-2 mt-3">
                            <a href="/browser-screen/footwear" class="btn btn-primary software-btn">
                                <i class="fas fa-desktop"></i> Browser & Screen
                            </a>
                            <a href="/features/footwear" class="btn btn-success software-btn">
                                <i class="fas fa-list-check"></i> Features List
                            </a>
                            <a href="/demo-video/footwear" class="btn btn-info software-btn">
                                <i class="fas fa-video"></i> Demo Video
                            </a>
                            <a href="/download-demo/footwear" class="btn btn-warning software-btn">
                                <i class="fas fa-download"></i> Download Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- सर्जिकल शॉप--}}
              <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">
                    सर्जिकल शॉप बिलिंग सॉफ्टवेयर <br>
                            <small class="text-muted">Surgical shop Billing Software</small>
                        </h5>
                        <div class="d-grid gap-2 mt-3">
                            <a href="/browser-screen/footwear" class="btn btn-primary software-btn">
                                <i class="fas fa-desktop"></i> Browser & Screen
                            </a>
                            <a href="/features/footwear" class="btn btn-success software-btn">
                                <i class="fas fa-list-check"></i> Features List
                            </a>
                            <a href="/demo-video/footwear" class="btn btn-info software-btn">
                                <i class="fas fa-video"></i> Demo Video
                            </a>
                            <a href="/download-demo/footwear" class="btn btn-warning software-btn">
                                <i class="fas fa-download"></i> Download Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- सैलून--}}
              <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">
                     सैलून सॉफ्टवेयर <br>
                            <small class="text-muted">Salon shop Software</small>
                        </h5>
                        <div class="d-grid gap-2 mt-3">
                            <a href="/browser-screen/footwear" class="btn btn-primary software-btn">
                                <i class="fas fa-desktop"></i> Browser & Screen
                            </a>
                            <a href="/features/footwear" class="btn btn-success software-btn">
                                <i class="fas fa-list-check"></i> Features List
                            </a>
                            <a href="/demo-video/footwear" class="btn btn-info software-btn">
                                <i class="fas fa-video"></i> Demo Video
                            </a>
                            <a href="/download-demo/footwear" class="btn btn-warning software-btn">
                                <i class="fas fa-download"></i> Download Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- sharee शॉप --}}
              <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">
                        Sharee शॉप बिलिंग सॉफ्टवेयर <br>
                            <small class="text-muted">Sharee shop Billing Software</small>
                        </h5>
                        <div class="d-grid gap-2 mt-3">
                            <a href="/browser-screen/footwear" class="btn btn-primary software-btn">
                                <i class="fas fa-desktop"></i> Browser & Screen
                            </a>
                            <a href="/features/footwear" class="btn btn-success software-btn">
                                <i class="fas fa-list-check"></i> Features List
                            </a>
                            <a href="/demo-video/footwear" class="btn btn-info software-btn">
                                <i class="fas fa-video"></i> Demo Video
                            </a>
                            <a href="/download-demo/footwear" class="btn btn-warning software-btn">
                                <i class="fas fa-download"></i> Download Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{--  सैनिटरी गुड्स--}}
              <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">
                       सैनिटरी गुड्स सॉफ्टवेयर <br>
                            <small class="text-muted">sainatry goods Software</small>
                        </h5>
                        <div class="d-grid gap-2 mt-3">
                            <a href="/browser-screen/footwear" class="btn btn-primary software-btn">
                                <i class="fas fa-desktop"></i> Browser & Screen
                            </a>
                            <a href="/features/footwear" class="btn btn-success software-btn">
                                <i class="fas fa-list-check"></i> Features List
                            </a>
                            <a href="/demo-video/footwear" class="btn btn-info software-btn">
                                <i class="fas fa-video"></i> Demo Video
                            </a>
                            <a href="/download-demo/footwear" class="btn btn-warning software-btn">
                                <i class="fas fa-download"></i> Download Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{--   प्रिंटिंग प्रेस --}}
              <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">
                         प्रिंटिंग प्रेस  सॉफ्टवेयर <br>
                            <small class="text-muted">Printing press Software</small>
                        </h5>
                        <div class="d-grid gap-2 mt-3">
                            <a href="/browser-screen/footwear" class="btn btn-primary software-btn">
                                <i class="fas fa-desktop"></i> Browser & Screen
                            </a>
                            <a href="/features/footwear" class="btn btn-success software-btn">
                                <i class="fas fa-list-check"></i> Features List
                            </a>
                            <a href="/demo-video/footwear" class="btn btn-info software-btn">
                                <i class="fas fa-video"></i> Demo Video
                            </a>
                            <a href="/download-demo/footwear" class="btn btn-warning software-btn">
                                <i class="fas fa-download"></i> Download Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- पेट शॉप --}}
              <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">
                        पेट शॉप सॉफ्टवेयर <br>
                            <small class="text-muted">Pet shop Software</small>
                        </h5>
                        <div class="d-grid gap-2 mt-3">
                            <a href="/browser-screen/footwear" class="btn btn-primary software-btn">
                                <i class="fas fa-desktop"></i> Browser & Screen
                            </a>
                            <a href="/features/footwear" class="btn btn-success software-btn">
                                <i class="fas fa-list-check"></i> Features List
                            </a>
                            <a href="/demo-video/footwear" class="btn btn-info software-btn">
                                <i class="fas fa-video"></i> Demo Video
                            </a>
                            <a href="/download-demo/footwear" class="btn btn-warning software-btn">
                                <i class="fas fa-download"></i> Download Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- पेंट शॉप --}}
              <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">
                        पेंट शॉप बिलिंग सॉफ्टवेयर <br>
                            <small class="text-muted">Paint shop Billing Software</small>
                        </h5>
                        <div class="d-grid gap-2 mt-3">
                            <a href="/browser-screen/footwear" class="btn btn-primary software-btn">
                                <i class="fas fa-desktop"></i> Browser & Screen
                            </a>
                            <a href="/features/footwear" class="btn btn-success software-btn">
                                <i class="fas fa-list-check"></i> Features List
                            </a>
                            <a href="/demo-video/footwear" class="btn btn-info software-btn">
                                <i class="fas fa-video"></i> Demo Video
                            </a>
                            <a href="/download-demo/footwear" class="btn btn-warning software-btn">
                                <i class="fas fa-download"></i> Download Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- ऑर्गेनिक फूड --}}
              <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">
                        ऑर्गेनिक फूड बिलिंग सॉफ्टवेयर <br>
                            <small class="text-muted">Organic food Billing Software</small>
                        </h5>
                        <div class="d-grid gap-2 mt-3">
                            <a href="/browser-screen/footwear" class="btn btn-primary software-btn">
                                <i class="fas fa-desktop"></i> Browser & Screen
                            </a>
                            <a href="/features/footwear" class="btn btn-success software-btn">
                                <i class="fas fa-list-check"></i> Features List
                            </a>
                            <a href="/demo-video/footwear" class="btn btn-info software-btn">
                                <i class="fas fa-video"></i> Demo Video
                            </a>
                            <a href="/download-demo/footwear" class="btn btn-warning software-btn">
                                <i class="fas fa-download"></i> Download Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{--ऑप्टिकल  शॉप  --}}
              <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">
                        ऑप्टिकल  शॉप बिलिंग सॉफ्टवेयर <br>
                            <small class="text-muted">Optical shop Billing Software</small>
                        </h5>
                        <div class="d-grid gap-2 mt-3">
                            <a href="/browser-screen/footwear" class="btn btn-primary software-btn">
                                <i class="fas fa-desktop"></i> Browser & Screen
                            </a>
                            <a href="/features/footwear" class="btn btn-success software-btn">
                                <i class="fas fa-list-check"></i> Features List
                            </a>
                            <a href="/demo-video/footwear" class="btn btn-info software-btn">
                                <i class="fas fa-video"></i> Demo Video
                            </a>
                            <a href="/download-demo/footwear" class="btn btn-warning software-btn">
                                <i class="fas fa-download"></i> Download Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{--मोबाइल डीलर   --}}
              <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">
                        मोबाइल डीलर  बिलिंग सॉफ्टवेयर <br>
                            <small class="text-muted">Mobile Dealer Billing Software</small>
                        </h5>
                        <div class="d-grid gap-2 mt-3">
                            <a href="/browser-screen/footwear" class="btn btn-primary software-btn">
                                <i class="fas fa-desktop"></i> Browser & Screen
                            </a>
                            <a href="/features/footwear" class="btn btn-success software-btn">
                                <i class="fas fa-list-check"></i> Features List
                            </a>
                            <a href="/demo-video/footwear" class="btn btn-info software-btn">
                                <i class="fas fa-video"></i> Demo Video
                            </a>
                            <a href="/download-demo/footwear" class="btn btn-warning software-btn">
                                <i class="fas fa-download"></i> Download Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- मार्बल एंड स्टोन  --}}
              <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">
                        मार्बल एंड स्टोन  बिलिंग सॉफ्टवेयर <br>
                            <small class="text-muted">Marble and stone Billing Software</small>
                        </h5>
                        <div class="d-grid gap-2 mt-3">
                            <a href="/browser-screen/footwear" class="btn btn-primary software-btn">
                                <i class="fas fa-desktop"></i> Browser & Screen
                            </a>
                            <a href="/features/footwear" class="btn btn-success software-btn">
                                <i class="fas fa-list-check"></i> Features List
                            </a>
                            <a href="/demo-video/footwear" class="btn btn-info software-btn">
                                <i class="fas fa-video"></i> Demo Video
                            </a>
                            <a href="/download-demo/footwear" class="btn btn-warning software-btn">
                                <i class="fas fa-download"></i> Download Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- लुब्रिकेंट --}}
              <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">
                        लुब्रिकेंट बिलिंग सॉफ्टवेयर <br>
                            <small class="text-muted">Lubricant Billing Software</small>
                        </h5>
                        <div class="d-grid gap-2 mt-3">
                            <a href="/browser-screen/footwear" class="btn btn-primary software-btn">
                                <i class="fas fa-desktop"></i> Browser & Screen
                            </a>
                            <a href="/features/footwear" class="btn btn-success software-btn">
                                <i class="fas fa-list-check"></i> Features List
                            </a>
                            <a href="/demo-video/footwear" class="btn btn-info software-btn">
                                <i class="fas fa-video"></i> Demo Video
                            </a>
                            <a href="/download-demo/footwear" class="btn btn-warning software-btn">
                                <i class="fas fa-download"></i> Download Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{--  किराना --}}
              <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">
                        किराना शॉप बिलिंग सॉफ्टवेयर <br>
                            <small class="text-muted">kirana shop Billing Software</small>
                        </h5>
                        <div class="d-grid gap-2 mt-3">
                            <a href="/browser-screen/footwear" class="btn btn-primary software-btn">
                                <i class="fas fa-desktop"></i> Browser & Screen
                            </a>
                            <a href="/features/footwear" class="btn btn-success software-btn">
                                <i class="fas fa-list-check"></i> Features List
                            </a>
                            <a href="/demo-video/footwear" class="btn btn-info software-btn">
                                <i class="fas fa-video"></i> Demo Video
                            </a>
                            <a href="/download-demo/footwear" class="btn btn-warning software-btn">
                                <i class="fas fa-download"></i> Download Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- ज्वेलर्स --}}
              <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">
                      ज्वेलर्स शॉप बिलिंग सॉफ्टवेयर <br>
                            <small class="text-muted">Jewellery shop Billing Software</small>
                        </h5>
                        <div class="d-grid gap-2 mt-3">
                            <a href="/browser-screen/footwear" class="btn btn-primary software-btn">
                                <i class="fas fa-desktop"></i> Browser & Screen
                            </a>
                            <a href="/features/footwear" class="btn btn-success software-btn">
                                <i class="fas fa-list-check"></i> Features List
                            </a>
                            <a href="/demo-video/footwear" class="btn btn-info software-btn">
                                <i class="fas fa-video"></i> Demo Video
                            </a>
                            <a href="/download-demo/footwear" class="btn btn-warning software-btn">
                                <i class="fas fa-download"></i> Download Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{--  ग्रेन मर्चेंट--}}
              <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">
                        ग्रेन मर्चेंट बिलिंग सॉफ्टवेयर <br>
                            <small class="text-muted">grain merchant Billing Software</small>
                        </h5>
                        <div class="d-grid gap-2 mt-3">
                            <a href="/browser-screen/footwear" class="btn btn-primary software-btn">
                                <i class="fas fa-desktop"></i> Browser & Screen
                            </a>
                            <a href="/features/footwear" class="btn btn-success software-btn">
                                <i class="fas fa-list-check"></i> Features List
                            </a>
                            <a href="/demo-video/footwear" class="btn btn-info software-btn">
                                <i class="fas fa-video"></i> Demo Video
                            </a>
                            <a href="/download-demo/footwear" class="btn btn-warning software-btn">
                                <i class="fas fa-download"></i> Download Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{--  ग्लास प्लेवुड --}}
              <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">
                        ग्लास प्लेवुड  बिलिंग सॉफ्टवेयर <br>
                            <small class="text-muted">Glass Plywood Billing Software</small>
                        </h5>
                        <div class="d-grid gap-2 mt-3">
                            <a href="/browser-screen/footwear" class="btn btn-primary software-btn">
                                <i class="fas fa-desktop"></i> Browser & Screen
                            </a>
                            <a href="/features/footwear" class="btn btn-success software-btn">
                                <i class="fas fa-list-check"></i> Features List
                            </a>
                            <a href="/demo-video/footwear" class="btn btn-info software-btn">
                                <i class="fas fa-video"></i> Demo Video
                            </a>
                            <a href="/download-demo/footwear" class="btn btn-warning software-btn">
                                <i class="fas fa-download"></i> Download Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{--  गिफ्ट शॉप--}}
              <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">
                      गिफ्ट शॉप बिलिंग सॉफ्टवेयर <br>
                            <small class="text-muted">Gift shop Billing Software</small>
                        </h5>
                        <div class="d-grid gap-2 mt-3">
                            <a href="/browser-screen/footwear" class="btn btn-primary software-btn">
                                <i class="fas fa-desktop"></i> Browser & Screen
                            </a>
                            <a href="/features/footwear" class="btn btn-success software-btn">
                                <i class="fas fa-list-check"></i> Features List
                            </a>
                            <a href="/demo-video/footwear" class="btn btn-info software-btn">
                                <i class="fas fa-video"></i> Demo Video
                            </a>
                            <a href="/download-demo/footwear" class="btn btn-warning software-btn">
                                <i class="fas fa-download"></i> Download Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- फर्नीचर शॉप  --}}
              <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">
                       फर्नीचर शॉप  बिलिंग सॉफ्टवेयर <br>
                            <small class="text-muted">Furniture shop Billing Software</small>
                        </h5>
                        <div class="d-grid gap-2 mt-3">
                            <a href="/browser-screen/footwear" class="btn btn-primary software-btn">
                                <i class="fas fa-desktop"></i> Browser & Screen
                            </a>
                            <a href="/features/footwear" class="btn btn-success software-btn">
                                <i class="fas fa-list-check"></i> Features List
                            </a>
                            <a href="/demo-video/footwear" class="btn btn-info software-btn">
                                <i class="fas fa-video"></i> Demo Video
                            </a>
                            <a href="/download-demo/footwear" class="btn btn-warning software-btn">
                                <i class="fas fa-download"></i> Download Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- फ्लावर शॉप   --}}
              <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">
                         फ्लावर शॉप  बिलिंग सॉफ्टवेयर <br>
                            <small class="text-muted">Flower shop Billing Software</small>
                        </h5>
                        <div class="d-grid gap-2 mt-3">
                            <a href="/browser-screen/footwear" class="btn btn-primary software-btn">
                                <i class="fas fa-desktop"></i> Browser & Screen
                            </a>
                            <a href="/features/footwear" class="btn btn-success software-btn">
                                <i class="fas fa-list-check"></i> Features List
                            </a>
                            <a href="/demo-video/footwear" class="btn btn-info software-btn">
                                <i class="fas fa-video"></i> Demo Video
                            </a>
                            <a href="/download-demo/footwear" class="btn btn-warning software-btn">
                                <i class="fas fa-download"></i> Download Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- फायर एंड सेफ्टी --}}
              <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">
                        फायर एंड सेफ्टी सॉफ्टवेयर <br>
                            <small class="text-muted">fire and Safety Software</small>
                        </h5>
                        <div class="d-grid gap-2 mt-3">
                            <a href="/browser-screen/footwear" class="btn btn-primary software-btn">
                                <i class="fas fa-desktop"></i> Browser & Screen
                            </a>
                            <a href="/features/footwear" class="btn btn-success software-btn">
                                <i class="fas fa-list-check"></i> Features List
                            </a>
                            <a href="/demo-video/footwear" class="btn btn-info software-btn">
                                <i class="fas fa-video"></i> Demo Video
                            </a>
                            <a href="/download-demo/footwear" class="btn btn-warning software-btn">
                                <i class="fas fa-download"></i> Download Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- इलेक्ट्रिकल --}}
             <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">
                       इलेक्ट्रिकल सॉफ्टवेयर <br>
                            <small class="text-muted">Electric Software</small>
                        </h5>
                        <div class="d-grid gap-2 mt-3">
                            <a href="/browser-screen/footwear" class="btn btn-primary software-btn">
                                <i class="fas fa-desktop"></i> Browser & Screen
                            </a>
                            <a href="/features/footwear" class="btn btn-success software-btn">
                                <i class="fas fa-list-check"></i> Features List
                            </a>
                            <a href="/demo-video/footwear" class="btn btn-info software-btn">
                                <i class="fas fa-video"></i> Demo Video
                            </a>
                            <a href="/download-demo/footwear" class="btn btn-warning software-btn">
                                <i class="fas fa-download"></i> Download Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- इलेक्ट्रॉनिक  --}}
             <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">
                       इलेक्ट्रॉनिक  सॉफ्टवेयर <br>
                            <small class="text-muted">Electronic Software</small>
                        </h5>
                        <div class="d-grid gap-2 mt-3">
                            <a href="/browser-screen/footwear" class="btn btn-primary software-btn">
                                <i class="fas fa-desktop"></i> Browser & Screen
                            </a>
                            <a href="/features/footwear" class="btn btn-success software-btn">
                                <i class="fas fa-list-check"></i> Features List
                            </a>
                            <a href="/demo-video/footwear" class="btn btn-info software-btn">
                                <i class="fas fa-video"></i> Demo Video
                            </a>
                            <a href="/download-demo/footwear" class="btn btn-warning software-btn">
                                <i class="fas fa-download"></i> Download Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- साइकिल डीलर --}}
             <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">
                       साइकिल डीलर सॉफ्टवेयर <br>
                            <small class="text-muted">Cycle Dealer Software</small>
                        </h5>
                        <div class="d-grid gap-2 mt-3">
                            <a href="/browser-screen/footwear" class="btn btn-primary software-btn">
                                <i class="fas fa-desktop"></i> Browser & Screen
                            </a>
                            <a href="/features/footwear" class="btn btn-success software-btn">
                                <i class="fas fa-list-check"></i> Features List
                            </a>
                            <a href="/demo-video/footwear" class="btn btn-info software-btn">
                                <i class="fas fa-video"></i> Demo Video
                            </a>
                            <a href="/download-demo/footwear" class="btn btn-warning software-btn">
                                <i class="fas fa-download"></i> Download Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- कंप्यूटर डीलर --}}
             <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">
                        कंप्यूटर डीलर सॉफ्टवेयर <br>
                            <small class="text-muted">computer dealer Software </small>
                        </h5>
                        <div class="d-grid gap-2 mt-3">
                            <a href="/browser-screen/footwear" class="btn btn-primary software-btn">
                                <i class="fas fa-desktop"></i> Browser & Screen
                            </a>
                            <a href="/features/footwear" class="btn btn-success software-btn">
                                <i class="fas fa-list-check"></i> Features List
                            </a>
                            <a href="/demo-video/footwear" class="btn btn-info software-btn">
                                <i class="fas fa-video"></i> Demo Video
                            </a>
                            <a href="/download-demo/footwear" class="btn btn-warning software-btn">
                                <i class="fas fa-download"></i> Download Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- क्लॉथ डीलर  --}}
             <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">
                    क्लॉथ डीलर  सॉफ्टवेयर <br>
                            <small class="text-muted">Cloth Software</small>
                        </h5>
                        <div class="d-grid gap-2 mt-3">
                            <a href="/browser-screen/footwear" class="btn btn-primary software-btn">
                                <i class="fas fa-desktop"></i> Browser & Screen
                            </a>
                            <a href="/features/footwear" class="btn btn-success software-btn">
                                <i class="fas fa-list-check"></i> Features List
                            </a>
                            <a href="/demo-video/footwear" class="btn btn-info software-btn">
                                <i class="fas fa-video"></i> Demo Video
                            </a>
                            <a href="/download-demo/footwear" class="btn btn-warning software-btn">
                                <i class="fas fa-download"></i> Download Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{--बिल्डिंग मैटेरियल  --}}
             <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">
                        बिल्डिंग मैटेरियल सॉफ्टवेयर <br>
                            <small class="text-muted">Building Material Software</small>
                        </h5>
                        <div class="d-grid gap-2 mt-3">
                            <a href="/browser-screen/footwear" class="btn btn-primary software-btn">
                                <i class="fas fa-desktop"></i> Browser & Screen
                            </a>
                            <a href="/features/footwear" class="btn btn-success software-btn">
                                <i class="fas fa-list-check"></i> Features List
                            </a>
                            <a href="/demo-video/footwear" class="btn btn-info software-btn">
                                <i class="fas fa-video"></i> Demo Video
                            </a>
                            <a href="/download-demo/footwear" class="btn btn-warning software-btn">
                                <i class="fas fa-download"></i> Download Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- बुक्स एंड स्टेशनरी --}}
             <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">
                        बुक्स एंड स्टेशनरी सॉफ्टवेयर <br>
                            <small class="text-muted">Books & Stationary Software</small>
                        </h5>
                        <div class="d-grid gap-2 mt-3">
                            <a href="/browser-screen/footwear" class="btn btn-primary software-btn">
                                <i class="fas fa-desktop"></i> Browser & Screen
                            </a>
                            <a href="/features/footwear" class="btn btn-success software-btn">
                                <i class="fas fa-list-check"></i> Features List
                            </a>
                            <a href="/demo-video/footwear" class="btn btn-info software-btn">
                                <i class="fas fa-video"></i> Demo Video
                            </a>
                            <a href="/download-demo/footwear" class="btn btn-warning software-btn">
                                <i class="fas fa-download"></i> Download Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{--  बेकरी --}}
             <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">
                         बेकरी सॉफ्टवेयर <br>
                            <small class="text-muted">Bakery Software</small>
                        </h5>
                        <div class="d-grid gap-2 mt-3">
                            <a href="/browser-screen/footwear" class="btn btn-primary software-btn">
                                <i class="fas fa-desktop"></i> Browser & Screen
                            </a>
                            <a href="/features/footwear" class="btn btn-success software-btn">
                                <i class="fas fa-list-check"></i> Features List
                            </a>
                            <a href="/demo-video/footwear" class="btn btn-info software-btn">
                                <i class="fas fa-video"></i> Demo Video
                            </a>
                            <a href="/download-demo/footwear" class="btn btn-warning software-btn">
                                <i class="fas fa-download"></i> Download Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Toy shop --}}
             <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">
                        टॉय शॉप सॉफ्टवेयर <br>
                            <small class="text-muted">Toy Shop Software</small>
                        </h5>
                        <div class="d-grid gap-2 mt-3">
                            <a href="/browser-screen/footwear" class="btn btn-primary software-btn">
                                <i class="fas fa-desktop"></i> Browser & Screen
                            </a>
                            <a href="/features/footwear" class="btn btn-success software-btn">
                                <i class="fas fa-list-check"></i> Features List
                            </a>
                            <a href="/demo-video/footwear" class="btn btn-info software-btn">
                                <i class="fas fa-video"></i> Demo Video
                            </a>
                            <a href="/download-demo/footwear" class="btn btn-warning software-btn">
                                <i class="fas fa-download"></i> Download Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- आयुर्वेदिक मेडिसिन--}}
             <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">
                        आयुर्वेदिक मेडिसिन सॉफ्टवेयर <br>
                            <small class="text-muted">Ayurvedhik medicine Software</small>
                        </h5>
                        <div class="d-grid gap-2 mt-3">
                            <a href="/browser-screen/footwear" class="btn btn-primary software-btn">
                                <i class="fas fa-desktop"></i> Browser & Screen
                            </a>
                            <a href="/features/footwear" class="btn btn-success software-btn">
                                <i class="fas fa-list-check"></i> Features List
                            </a>
                            <a href="/demo-video/footwear" class="btn btn-info software-btn">
                                <i class="fas fa-video"></i> Demo Video
                            </a>
                            <a href="/download-demo/footwear" class="btn btn-warning software-btn">
                                <i class="fas fa-download"></i> Download Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- पंप एंड पाइप  --}}
             <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">
                        पंप एंड पाइप  सॉफ्टवेयर <br>
                            <small class="text-muted">Pump and pipe Software</small>
                        </h5>
                        <div class="d-grid gap-2 mt-3">
                            <a href="/browser-screen/footwear" class="btn btn-primary software-btn">
                                <i class="fas fa-desktop"></i> Browser & Screen
                            </a>
                            <a href="/features/footwear" class="btn btn-success software-btn">
                                <i class="fas fa-list-check"></i> Features List
                            </a>
                            <a href="/demo-video/footwear" class="btn btn-info software-btn">
                                <i class="fas fa-video"></i> Demo Video
                            </a>
                            <a href="/download-demo/footwear" class="btn btn-warning software-btn">
                                <i class="fas fa-download"></i> Download Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Online Billing Barcode Software --}}
             <div class="col-md-4 col-sm-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">
                       Online Billing Barcode Software <br>
                            <small class="text-muted">Online Billing Barcode Software</small>
                        </h5>
                        <div class="d-grid gap-2 mt-3">
                            <a href="/browser-screen/footwear" class="btn btn-primary software-btn">
                                <i class="fas fa-desktop"></i> Browser & Screen
                            </a>
                            <a href="/features/footwear" class="btn btn-success software-btn">
                                <i class="fas fa-list-check"></i> Features List
                            </a>
                            <a href="/demo-video/footwear" class="btn btn-info software-btn">
                                <i class="fas fa-video"></i> Demo Video
                            </a>
                            <a href="/download-demo/footwear" class="btn btn-warning software-btn">
                                <i class="fas fa-download"></i> Download Demo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
      <!-- Cloud Setup & Demo -->
<div class="col-md-4 col-sm-6">
    <div class="card shadow-sm border-0 h-100">
        <div class="card-body text-center">
            <h5 class="card-title fw-bold">
                क्लाउड सेटअप और डेमो <br>
                <small class="text-muted">Cloud Setup & Demo</small>
            </h5>
            <div class="d-grid gap-2 mt-3">
                <a href="{{ url('/cloud_browser') }}" class="btn btn-primary software-btn">
                    <i class="fas fa-cloud"></i> Cloud Setup Guide
                </a>
                <a href="{{ url('/cloud_features') }}" class="btn btn-success software-btn">
                    <i class="fas fa-list-check"></i> Features List
                </a>
                <a href="{{ url('/cloud_youtube') }}" class="btn btn-info software-btn">
                    <i class="fas fa-video"></i> Demo Video
                </a>
                <a href="{{ url('/cloud_download') }}" class="btn btn-warning software-btn">
                    <i class="fas fa-download"></i> Download Demo
                </a>
            </div>
        </div>
    </div>
</div>
<!--speed plus demo-->
<div class="col-md-4 col-sm-6">
    <div class="card shadow-sm border-0 h-100">
        <div class="card-body text-center">
            <h5 class="card-title fw-bold">
                क्लाउड सेटअप और डेमो <br>
                <small class="text-muted">Speed plus Setup & Demo</small>
            </h5>
            <div class="d-grid gap-2 mt-3">
                <a href="{{ url('/cloud_browser') }}" class="btn btn-primary software-btn">
                    <i class="fas fa-cloud"></i> speed Setup Guide
                </a>
                <a href="{{ url('/cloud_features') }}" class="btn btn-success software-btn">
                    <i class="fas fa-list-check"></i> Features List
                </a>
                <a href="{{ url('/cloud_youtube') }}" class="btn btn-info software-btn">
                    <i class="fas fa-video"></i> Demo Video
                </a>
                <a href="{{ url('/cloud_download') }}" class="btn btn-warning software-btn">
                    <i class="fas fa-download"></i> Download Demo
                </a>
            </div>
        </div>
    </div>
</div>


            <!--- bus yaha tak --->

        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
