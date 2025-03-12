<!DOCTYPE html>
<html lang="en">
<!-- Banner pentru cookies -->
<!-- Banner pentru cookies -->
<!-- Banner de cookies -->
<!-- Banner de cookies -->
<div id="cookie-banner" style="position: fixed; bottom: 0; left: 0; right: 0; background-color: #333; color: #fff; padding: 10px; text-align: center; z-index: 1000;">
    <p>Acest site folosește cookies pentru a îmbunătăți experiența ta. Poți accepta sau respinge utilizarea acestora. <a href="/politica-de-cookie-uri" style="color: #fff;">Află mai multe</a></p>
    <button id="accept-cookies" style="background-color: #4CAF50; color: white; border: none; padding: 10px 20px; cursor: pointer;">Acceptă</button>
    <button id="reject-cookies" style="background-color: #D9534F; color: white; border: none; padding: 10px 20px; cursor: pointer;">Respinge</button>
</div>

<!-- Buton pentru gestionarea cookie-urilor -->
<button id="manage-cookies" style="position: fixed; bottom: 20px; right: 20px; background-color: #555; color: white; padding: 10px 15px; border: none; cursor: pointer;">
    Gestionare Cookies
</button>

<!-- Meniu pentru gestionarea cookie-urilor -->
<div id="cookie-settings-modal" style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: #fff; padding: 20px; box-shadow: 0px 0px 10px rgba(0,0,0,0.3); z-index: 1001; width: 300px; text-align: center;">
    <h2>Gestionare Cookies</h2>
    <p>Selectează ce tipuri de cookie-uri accepți:</p>
    
    <label>
        <input type="checkbox" id="analytics-cookies" checked> Cookie-uri de analiză (Google Analytics)
    </label>
    <br>
    <label>
        <input type="checkbox" id="marketing-cookies" checked> Cookie-uri de marketing
    </label>
    
    <br><br>
    <button id="save-cookie-preferences" style="background-color: #4CAF50; color: white; padding: 10px;">Salvează</button>
    <button id="close-cookie-settings" style="background-color: #D9534F; color: white; padding: 10px;">Închide</button>
</div>

<!-- Fundal pentru modal -->
<div id="cookie-modal-overlay" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 1000;"></div>




<head>
    <meta charset="utf-8">
    <title>Tourist - Travel Agency HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
	
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>info@example.com</small>
					</div>
				</div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>Tourist</h1>
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.php" class="nav-item nav-link active">Acasa</a>
					<a href="bilete.php" class="nav-item nav-link">Bilete</a>
                    <a href="service.php" class="nav-item nav-link">Servicii</a>
                    <a href="package.php" class="nav-item nav-link">Pachete</a>
					<a href="produse.php" class="nav-item nav-link">Produse</a>
					<a href="about.php" class="nav-item nav-link">Despre</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pagini</a>
                        <div class="dropdown-menu m-0">
                            <a href="destination.php" class="dropdown-item">Destinatii</a>
                            <a href="booking.php" class="dropdown-item">Rezervari</a>
                            <a href="team.php" class="dropdown-item">Ghid de calatorie</a>
                            <a href="404.php" class="dropdown-item">404 Page</a>
                        </div>
                    </div>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                </div>
                <a href="" class="btn btn-primary rounded-pill py-2 px-4">Inregistrare</a>
            </div>
        </nav>

        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white mb-3 animated slideInDown">Incepe vacanta dorita alaturi de noi</h1>
                        <p class="fs-4 text-white mb-4 animated slideInDown">Cauta destinatia mult visata</p>
                        <div class="position-relative w-75 mx-auto animated slideInDown">
						<form action="search.php" method="GET">
                            <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text" name="q" placeholder="Ex: Paris">
                            <button type="button" class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2" style="margin-top: 7px;">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/123.png" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Despre noi</h6>
                    <h1 class="mb-4">Bine ai venit pe platforma <span class="text-primary"> noastra</span></h1>
                    <p class="mb-4">Am creat aceasta platforma pentru persoanele ce isi doresc sa gaseasca oferte la biletele de avion, oferte pentru cazari, inchiriere de vehicule si oferte la diverse produse.</p>
                    <p class="mb-4">Suntem aici pentru a va oferii cele mai de calitate oferte de pe piata, pentru a va oferii un sejur de poveste alaturi de persoanele dragi</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Zboruri la clasa I</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Hoteluri premium</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Cazari de 5 stele</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Servicii de transport</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Tururi prin orasele lumii</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>24/7 Suport</p>
						</div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Oferte produse</p>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="">Afla mai multe</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Prezentarea</h6>
                <h1 class="mb-5">Serviciilor noastre</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <h5>Tururi in diverse tari</h5>
                            <p>Ce cadou poate fi mai frumos pentru persoana iubita decat un tur de o saptamana in mai multe tari?</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-hotel text-primary mb-4"></i>
                            <h5>Rezervari pentru hoteluri</h5>
                            <p>Fiecare atunci cand mergem in vacanta dorim sa avem o cazare de vis, tocmai din acest motiv noi va ajutam cu asta.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-user text-primary mb-4"></i>
                            <h5>Inchiriere de autovehicule</h5>
                            <p>Recomandam cele mai bune companii de inchirieri</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-cog text-primary mb-4"></i>
                            <h5>Recomandari + oferte la diverse produse</h5>
                            <p>Noi facem o cautare aprofundata pentru oferte si produse de calitate, utile in viata de zi cu zi, iar dupa vi le prezentam</p>
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Destination Start -->
    <div class="container-xxl py-5 destination">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Destination</h6>
                <h1 class="mb-5">Destinatii populare</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="https://www.booking.com/city/ro/sinaia.ro.html?aid=1610697;label=sinaia-8St1*EmkBarA0OIv2ndG*wS379603776216:pl:ta:p1:p2:ac:ap:neg:fi:tikwd-414880513397:lp9189686:li:dec:dm:ppccp=UmFuZG9tSVYkc2RlIyh9YcUc3ZfdbbfEHZ2_wTDb1e4;ws=&gad_source=1&gbraid=0AAAAAD_Ls1JSkyXLp1MngzUFsiXfNv-_S&gclid=CjwKCAiArKW-BhAzEiwAZhWsIKB8nzrLfIRHGavtdP2xTSgNCifAMlM58eJUOSnHu3958WYATrh4AhoCzFsQAvD_BwE">
                                <img class="img-fluid" src="img/sinaia.jpg" alt="">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">45% REDUCERE</div>
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Sinaia</div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="img/bran.jpg" alt="">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">30% REDUCERE</div>
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Brasov</div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="img/australia.jpg" alt="">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">35% REDUCERE</div>
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Australia</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/indonesia.jpg" alt="" style="object-fit: cover;">
                        <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">20% REDUCERE</div>
                        <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Indonesia</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Destination Start -->


    <!-- Package Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">OFERTE</h6>
                <h1 class="mb-5">Vacanta</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/package-1.jpg" alt="">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>Tailanda</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>3 zile</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>2 Persoane</small>
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">€149.00</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>Țara zâmbetelor te așteaptă cu plaje exotice, temple aurite și o gastronomie de neegalat! Descoperă Bangkokul vibrant și insulele paradisiace precum Phuket și Koh Samui.</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="#" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Afla mai multe</a>
                                <a href="https://www.booking.com/country/th.ro.html?aid=1610697;label=th-Ex_eoL2*meKr22TwRQgIpQS438114043610:pl:ta:p1:p2:ac:ap:neg:fi:tikwd-484947878355:lp9192974:li:dec:dm:ppccp=UmFuZG9tSVYkc2RlIyh9YcUc3ZfdbbfEHZ2_wTDb1e4;ws=&gad_source=1&gclid=Cj0KCQiAz6q-BhCfARIsAOezPxks_fZqktJxbMPpB5q2Ug8eI-3lv7y6gzkm-SiReyxFLQDvrMkmNiUaAu3GEALw_wcB" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Inchiriaza acum</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/package-2.jpg" alt="">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>Indonezia</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>3 zile</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>2 Persoane</small>
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">€139.00</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>De la templele mistice din Bali la jungla sălbatică din Sumatra, această țară oferă peisaje spectaculoase, surfing de top și o cultură fascinantă!</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="#" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Afla mai multe</a>
                                <a href="#" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Inchiriaza acum</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/package-3.jpg" alt="">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>Malaezia</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>3 zile</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>2 Persoane</small>
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">€189.00</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>Un mix unic de modern și tradițional! Bucură-te de zgârie-norii din Kuala Lumpur, frumusețea Insulelor Perhentian și biodiversitatea uimitoare din Borneo! 🌴✨</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="#" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Afla mai multe</a>
                                <a href="#" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Inchiriaza acum</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Package End -->


    <!-- Booking Start -->
    <!-- Booking Start -->


    <!-- Process Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Procesul</h6>
                <h1 class="mb-5">Calatoriei</h1>
            </div>
            <div class="row gy-5 gx-4 justify-content-center">
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                            <i class="fa fa-globe fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Alege o destinatie</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Alege una dintre destinatiile pe care vi le prezentam sau unul dintre pachetele de vacanta oferite de noi</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                            <i class="fa fa-dollar-sign fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Achita online</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Achita costul calatoriei online folosind una din metodele de plata disponibile</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                            <i class="fa fa-plane fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Pregateste calatoria</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Totul este aproape gata, mai este necesara doar pregatirea dumneavoastra pentru calatorie</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Process Start -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">OFERTE</h6>
                <h1 class="mb-5">Produse</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/laptopemag.avif" alt="">
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">24,99 LEI</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>Țara zâmbetelor te așteaptă cu plaje exotice, temple aurite și o gastronomie de neegalat! Descoperă Bangkokul vibrant și insulele paradisiace precum Phuket și Koh Samui.</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="#" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Afla mai multe</a>
                                <a href="https://www.booking.com/country/th.ro.html?aid=1610697;label=th-Ex_eoL2*meKr22TwRQgIpQS438114043610:pl:ta:p1:p2:ac:ap:neg:fi:tikwd-484947878355:lp9192974:li:dec:dm:ppccp=UmFuZG9tSVYkc2RlIyh9YcUc3ZfdbbfEHZ2_wTDb1e4;ws=&gad_source=1&gclid=Cj0KCQiAz6q-BhCfARIsAOezPxks_fZqktJxbMPpB5q2Ug8eI-3lv7y6gzkm-SiReyxFLQDvrMkmNiUaAu3GEALw_wcB" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Cumpara</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/tableta.jpg" alt="">
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">18 LEI</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>Un mix unic de modern și tradițional! Bucură-te de zgârie-norii din Kuala Lumpur, frumusețea Insulelor Perhentian și biodiversitatea uimitoare din Borneo! 🌴✨</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="#" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Afla mai multe</a>
                                <a href="#" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Cumpara</a>
                            </div>
                        </div>
                    </div>
				</div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/iphone14.webp" alt="">
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">15 LEI</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>Fa cunostinta cu iPhone 14 si supradimensionatul iPhone 14 Plus. Cu Detectare accident. Autonomie a bateriei mai mare ca niciodata. Si fotografii chiar si mai spectaculoase in lumina slaba. Toate acestea in cinci culori grozave.</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="#" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Afla mai multe</a>
                                <a href="#" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Cumpara</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/tableta.jpg" alt="">
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">18 LEI</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>Un mix unic de modern și tradițional! Bucură-te de zgârie-norii din Kuala Lumpur, frumusețea Insulelor Perhentian și biodiversitatea uimitoare din Borneo! 🌴✨</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="#" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Afla mai multe</a>
                                <a href="#" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Cumpara</a>
                            </div>
                        </div>
                    </div>
				</div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/tableta.jpg" alt="">
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">18 LEI</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>Un mix unic de modern și tradițional! Bucură-te de zgârie-norii din Kuala Lumpur, frumusețea Insulelor Perhentian și biodiversitatea uimitoare din Borneo! 🌴✨</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="#" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Afla mai multe</a>
                                <a href="#" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Cumpara</a>
                            </div>
                        </div>
                    </div>
				</div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/iphone14.webp" alt="">
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">15 LEI</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>De la templele mistice din Bali la jungla sălbatică din Sumatra, această țară oferă peisaje spectaculoase, surfing de top și o cultură fascinantă!</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="#" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Afla mai multe</a>
                                <a href="#" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Cumpara</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Recenzii</h6>
                <h1 class="mb-5">Asta spun clientii nostri</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item bg-white text-center border p-4">
                    <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="img/testimonial-2.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Alex</h5>
                    <p>Romania, Bucuresti</p>
                    <p class="mb-0">Am reusit sa gasesc cea mai buna oferta de cazare datorita acestei echipe minunate.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
        

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Companie</h4>
                    <a class="btn btn-link" href="">Despre noi</a>
                    <a class="btn btn-link" href="">Contact</a>
                    <a class="btn btn-link" href="">Intrebari frecvente</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@exaample.com</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Gallery</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/package-1.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/package-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/package-3.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/package-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/package-3.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/package-1.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Newsletter</h4>
                    <p>Aboneaza-te la newsletter pentru a obtine impermanenta oferte la diverse produse si oferte.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Abonare</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Acasa</a>
                            <a href="">Cookies</a>
                            <a href="">Ajutor</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    // Obținem elementele HTML
    var cookieBanner = document.getElementById("cookie-banner");
    var acceptButton = document.getElementById("accept-cookies");
    var rejectButton = document.getElementById("reject-cookies");
    var manageButton = document.getElementById("manage-cookies");

    var cookieSettingsModal = document.getElementById("cookie-settings-modal");
    var cookieModalOverlay = document.getElementById("cookie-modal-overlay");
    var saveCookiePreferences = document.getElementById("save-cookie-preferences");
    var closeCookieSettings = document.getElementById("close-cookie-settings");

    var analyticsCheckbox = document.getElementById("analytics-cookies");
    var marketingCheckbox = document.getElementById("marketing-cookies");

    // Verifică dacă toate elementele există
    if (!cookieBanner || !acceptButton || !rejectButton || !manageButton || !cookieSettingsModal || !cookieModalOverlay) {
        console.error("Eroare: Unele elemente HTML pentru cookie-uri lipsesc!");
        return;
    }

    // Verifică dacă utilizatorul a acceptat sau respins cookie-urile
    var cookiesAccepted = document.cookie.includes("cookies_accepted=true");

    if (cookiesAccepted) {
        cookieBanner.style.display = "none"; // Ascunde banner-ul dacă utilizatorul a ales deja
    }

    // Când utilizatorul acceptă cookie-urile
    acceptButton.addEventListener("click", function() {
        document.cookie = "cookies_accepted=true; max-age=" + (60 * 60 * 24 * 365) + "; path=/";
        cookieBanner.style.display = "none";
        location.reload(); // Reîncarcă pagina pentru a activa cookie-urile
    });

    // Când utilizatorul respinge cookie-urile
    rejectButton.addEventListener("click", function() {
        document.cookie = "cookies_rejected=true; max-age=" + (60 * 60 * 24 * 365) + "; path=/";
        cookieBanner.style.display = "none";
        location.reload(); // Reîncarcă pagina pentru a elimina cookie-urile non-esențiale
    });

    // Când utilizatorul vrea să gestioneze cookie-urile
    manageButton.addEventListener("click", function() {
        // Afișează meniul de gestionare cookies
        cookieSettingsModal.style.display = "block";
        cookieModalOverlay.style.display = "block";

        // Preîncarcă setările din cookies
        analyticsCheckbox.checked = document.cookie.includes("analytics_enabled=true");
        marketingCheckbox.checked = document.cookie.includes("marketing_enabled=true");
    });

    // Când utilizatorul salvează preferințele
    saveCookiePreferences.addEventListener("click", function() {
        if (analyticsCheckbox.checked) {
            document.cookie = "analytics_enabled=true; max-age=" + (60 * 60 * 24 * 365) + "; path=/";
        } else {
            document.cookie = "analytics_enabled=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/";
        }

        if (marketingCheckbox.checked) {
            document.cookie = "marketing_enabled=true; max-age=" + (60 * 60 * 24 * 365) + "; path=/";
        } else {
            document.cookie = "marketing_enabled=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/";
        }

        cookieSettingsModal.style.display = "none";
        cookieModalOverlay.style.display = "none";
        location.reload();
    });

    // Când utilizatorul închide meniul
    closeCookieSettings.addEventListener("click", function() {
        cookieSettingsModal.style.display = "none";
        cookieModalOverlay.style.display = "none";
    });
});

</script>



</body>

</html>