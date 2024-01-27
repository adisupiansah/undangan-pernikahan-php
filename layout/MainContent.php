<?php
include "services/function.php";



if (isset($_POST['submit'])) {
    if (tambah($_POST) > 0) {
        echo "
        <script>
            alert('komentar gagal');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('komentar berhasil');
            document.location.href = 'index.php';
        </script>
        ";
    }
}

$jumlahDataUndangan = 6;
$jumlahData = count(query("SELECT * FROM pernikahan"));
$jumalahHalaman = ceil($jumlahData / $jumlahDataUndangan);
$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awalData = ($jumlahDataUndangan * $halamanAktif) - $jumlahDataUndangan;

$daftarUcapan = query("SELECT * FROM pernikahan LIMIT $awalData, $jumlahDataUndangan");



?>



<main class="text-light" data-bs-spy="scroll" data-bs-target="#navbar-menus" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" tabindex="0">

    <!-- Home -->
    <section class="container" id="home">

        <div class="text-center pt-4">
            <h1 class="font-esthetic my-4" style="font-size: 2.5rem;">Undangan Pernikahan</h1>

            <div class="py-4">
                <div class="img-crop border border-3 border-light shadow mx-auto">
                    <img src="./assets/images/bg.jpeg" alt="bg" onclick="util.modal(this)">
                </div>
            </div>

            <h1 class="font-esthetic my-4" style="font-size: 3rem;">Yuriska & Riski</h1>
            <p class="mb-0" style="font-size: 1.5rem;">Sabtu, 18 Mei 2024</p>

            <a class="btn btn-outline-light btn-sm shadow rounded-pill px-3 my-2" target="_blank" href="https://calendar.google.com/calendar/event?action=TEMPLATE&amp;tmeid=Nm85Y2xlNHRkOTg4ZjFxYjkydTlkNnA0NXUgYWRpc3VwaWFuc2FoMTVAbQ&amp;tmsrc=adisupiansah15%40gmail.com">
                <i class="fa-solid fa-calendar-check me-2"></i>Save The Date
            </a>

            <div class="d-flex justify-content-center align-items-center mt-4 mb-2">
                <div class="mouse-animation">
                    <div class="scroll-animation"></div>
                </div>
            </div>

            <p class="m-0">Scroll Down</p>
        </div>
    </section>

    <!-- Wave Separator -->
    <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#111111" fill-opacity="1" d="M0,160L48,144C96,128,192,96,288,106.7C384,117,480,171,576,165.3C672,160,768,96,864,96C960,96,1056,160,1152,154.7C1248,149,1344,75,1392,37.3L1440,0L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>

    <!-- Mempelai -->
    <section class="dark-section" id="mempelai">

        <div class="text-center">
            <h1 class="font-arabic py-4 px-2" style="font-size: 2rem">بِسْمِ اللّٰهِ الرَّحْمٰنِ الرَّحِيْمِ</h1>

            <!-- Love animation -->
            <div class="position-relative">
                <div class="position-absolute" style="top: 0%; right: 10%;">
                    <svg xmlns="https://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="opacity-50" onload="util.animate(this, 500, 'animate-love')" viewBox="0 0 16 16">
                        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                    </svg>
                </div>
            </div>

            <h1 class="font-esthetic py-4 px-2" style="font-size: 2rem">Assalamualaikum Warahmatullahi Wabarakatuh</h1>

            <p class="pb-3 px-3">
                Tanpa mengurangi rasa hormat. Kami mengundang Bapak/Ibu/Saudara/i serta kerabat
                sekalian untuk menghadiri acara pernikahan kami:
            </p>

            <!-- Love animation -->
            <div class="position-relative">
                <div class="position-absolute" style="top: 0%; left: 10%;">
                    <svg xmlns="https://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="opacity-50" onload="util.animate(this, 2000, 'animate-love')" viewBox="0 0 16 16">
                        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                    </svg>
                </div>
            </div>

            <div class="overflow-x-hidden">

                <div data-aos="fade-right" data-aos-duration="2000">
                    <div class="img-crop border border-3 border-light shadow my-4 mx-auto">
                        <img src="./assets/images/cewe.png" alt="cowo" onclick="util.modal(this)">
                    </div>
                    <h1 class="font-esthetic" style="font-size: 3rem;">Yuriska</h1>
                    <p class="mt-3 mb-0" style="font-size: 1.25rem;">Putri dari</p>
                    <p class="mb-0">Bapak Taib Siregar & Ibu Maulina nana</p>
                </div>

                <!-- Love animation -->
                <div class="position-relative">
                    <div class="position-absolute" style="top: 0%; right: 10%;">
                        <svg xmlns="https://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="opacity-50" onload="util.animate(this, 3000, 'animate-love')" viewBox="0 0 16 16">
                            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                        </svg>
                    </div>
                </div>

                <h1 class="font-esthetic my-4" style="font-size: 4rem;">&</h1>

                <!-- Love animation -->
                <div class="position-relative">
                    <div class="position-absolute" style="top: 0%; left: 10%;">
                        <svg xmlns="https://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="opacity-50" onload="util.animate(this, 2000, 'animate-love')" viewBox="0 0 16 16">
                            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                        </svg>
                    </div>
                </div>

                <div data-aos="fade-left" data-aos-duration="2000">
                    <div class="img-crop border border-3 border-light shadow my-4 mx-auto">
                        <img src="./assets/images/cowo.png" alt="cewe" onclick="util.modal(this)">
                    </div>
                    <h1 class="font-esthetic" style="font-size: 3rem;">Riski Ferdiansyah</h1>
                    <p class="mt-3 mb-0" style="font-size: 1.25rem;">Putra dari</p>
                    <p class="mb-0">Bapak Heru Lesmono & Ibu Megawati</p>
                </div>
            </div>

            <!-- Ballon animation -->
            <div class="position-relative">
                <div class="position-absolute" style="top: 0%; right: 5%;">
                    <svg xmlns="https://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="opacity-50" onload="util.animate(this, 1500, 'animate-love')" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="m8 2.42-.717-.737c-1.13-1.161-3.243-.777-4.01.72-.35.685-.451 1.707.236 3.062C4.16 6.753 5.52 8.32 8 10.042c2.479-1.723 3.839-3.29 4.491-4.577.687-1.355.587-2.377.236-3.061-.767-1.498-2.88-1.882-4.01-.721zm-.49 8.5c-10.78-7.44-3-13.155.359-10.063q.068.062.132.129.065-.067.132-.129c3.36-3.092 11.137 2.624.357 10.063l.235.468a.25.25 0 1 1-.448.224l-.008-.017c.008.11.02.202.037.29.054.27.161.488.419 1.003.288.578.235 1.15.076 1.629-.157.469-.422.867-.588 1.115l-.004.007a.25.25 0 1 1-.416-.278c.168-.252.4-.6.533-1.003.133-.396.163-.824-.049-1.246l-.013-.028c-.24-.48-.38-.758-.448-1.102a3 3 0 0 1-.052-.45l-.04.08a.25.25 0 1 1-.447-.224l.235-.468ZM6.013 2.06c-.649-.18-1.483.083-1.85.798-.131.258-.245.689-.08 1.335.063.244.414.198.487-.043.21-.697.627-1.447 1.359-1.692.217-.073.304-.337.084-.398"></path>
                    </svg>
                </div>
            </div>

        </div>
    </section>

    <!-- Wave Separator -->
    <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#111111" fill-opacity="1" d="M0,192L40,181.3C80,171,160,149,240,149.3C320,149,400,171,480,165.3C560,160,640,128,720,128C800,128,880,160,960,186.7C1040,213,1120,235,1200,218.7C1280,203,1360,149,1400,122.7L1440,96L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path>
    </svg>

    <!-- Firman Allah Subhanahu Wa Ta'ala -->
    <div class="container">
        <div class="text-center" data-aos="fade-up" data-aos-duration="2000">

            <h1 class="font-esthetic mt-0 mb-3" style="font-size: 2rem">
                Allah Subhanahu Wa Ta'ala berfirman
            </h1>

            <p style="font-size: 0.9rem;" class="px-2">
                Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari
                jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di antaramu
                rasa kasih dan sayang. Sungguh, pada yang demikian itu benar-benar terdapat tanda-tanda
                (kebesaran Allah) bagi kaum yang berpikir.
            </p>

            <span class="mb-0"><strong>QS. Ar-Rum Ayat 21</strong></span>
        </div>
    </div>

    <!-- Ballon animation -->
    <div class="position-relative">
        <div class="position-absolute" style="top: 0%; left: 5%;">
            <svg xmlns="https://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="opacity-50" onload="util.animate(this, 4000, 'animate-love')" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="m8 2.42-.717-.737c-1.13-1.161-3.243-.777-4.01.72-.35.685-.451 1.707.236 3.062C4.16 6.753 5.52 8.32 8 10.042c2.479-1.723 3.839-3.29 4.491-4.577.687-1.355.587-2.377.236-3.061-.767-1.498-2.88-1.882-4.01-.721zm-.49 8.5c-10.78-7.44-3-13.155.359-10.063q.068.062.132.129.065-.067.132-.129c3.36-3.092 11.137 2.624.357 10.063l.235.468a.25.25 0 1 1-.448.224l-.008-.017c.008.11.02.202.037.29.054.27.161.488.419 1.003.288.578.235 1.15.076 1.629-.157.469-.422.867-.588 1.115l-.004.007a.25.25 0 1 1-.416-.278c.168-.252.4-.6.533-1.003.133-.396.163-.824-.049-1.246l-.013-.028c-.24-.48-.38-.758-.448-1.102a3 3 0 0 1-.052-.45l-.04.08a.25.25 0 1 1-.447-.224l.235-.468ZM6.013 2.06c-.649-.18-1.483.083-1.85.798-.131.258-.245.689-.08 1.335.063.244.414.198.487-.043.21-.697.627-1.447 1.359-1.692.217-.073.304-.337.084-.398"></path>
            </svg>
        </div>
    </div>

    <!-- Wave Separator -->
    <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#111111" fill-opacity="1" d="M0,96L30,106.7C60,117,120,139,180,154.7C240,171,300,181,360,186.7C420,192,480,192,540,181.3C600,171,660,149,720,154.7C780,160,840,192,900,208C960,224,1020,224,1080,208C1140,192,1200,160,1260,138.7C1320,117,1380,107,1410,101.3L1440,96L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
    </svg>

    <!-- Tanggal -->
    <section class="dark-section" id="tanggal">

        <div class="container">
            <div class="text-center">

                <h1 class="font-esthetic py-3" style="font-size: 2rem;">Waktu Menuju Acara</h1>
                <div class="border rounded-pill shadow py-2 px-4 mx-2 mb-4">

                    <!-- Ganti waktunya pada data-waktu (sesuai format tersebut) -->
                    <div class="row justify-content-center" data-waktu="2024-05-18 10:00:00" id="tampilan-waktu">
                        <div class="col-3 p-1">
                            <h2 class="d-inline m-0 p-0" id="hari">0</h2><small class="ms-1 me-0 my-0 p-0 d-inline">Hari</small>
                        </div>
                        <div class="col-3 p-1">
                            <h2 class="d-inline m-0 p-0" id="jam">0</h2><small class="ms-1 me-0 my-0 p-0 d-inline">Jam</small>
                        </div>
                        <div class="col-3 p-1">
                            <h2 class="d-inline m-0 p-0" id="menit">0</h2><small class="ms-1 me-0 my-0 p-0 d-inline">Menit</small>
                        </div>
                        <div class="col-3 p-1">
                            <h2 class="d-inline m-0 p-0" id="detik">0</h2><small class="ms-1 me-0 my-0 p-0 d-inline">Detik</small>
                        </div>
                    </div>
                </div>

                <p style="font-size: 0.9rem;" class="mt-4 py-2">
                    Dengan memohon rahmat dan ridho Allah Subhanahu Wa Ta'ala, insyaAllah kami akan menyelenggarakan
                    acara :
                </p>

                <!-- Love animation -->
                <div class="position-relative">
                    <div class="position-absolute" style="top: 0%; right: 10%;">
                        <svg xmlns="https://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="opacity-50" onload="util.animate(this, 3000, 'animate-love')" viewBox="0 0 16 16">
                            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                        </svg>
                    </div>
                </div>

                <div class="overflow-x-hidden">
                    <div class="py-2" data-aos="fade-right" data-aos-duration="1500">
                        <h1 class="font-esthetic" style="font-size: 2rem;">Akad</h1>
                        <p>Pukul 10.00 WIB - Selesai</p>
                    </div>

                    <div class="py-2" data-aos="fade-left" data-aos-duration="1500">
                        <h1 class="font-esthetic" style="font-size: 2rem;">Resepsi</h1>
                        <p>Pukul 11.00 WIB - Selesai</p>
                    </div>
                </div>

                <div class="py-2" data-aos="fade-up" data-aos-duration="1500">
                    <a href="https://maps.app.goo.gl/pvvB5aWJrWvG93cXA" target="_blank" class="btn btn-outline-light btn-sm rounded-pill shadow-sm mb-2 px-3">
                        <i class="fa-solid fa-map-location-dot me-2"></i>Lihat Google Maps
                    </a>
                    <p class="mb-0 mt-1 mx-1 pb-4" style="font-size: 0.9rem;">
                        RT 10 RW 02, Desa Pajerukan, Kec. Kalibagor, Kab. Banyumas, Jawa Tengah 53191
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Love animation -->
    <div class="position-relative">
        <div class="position-absolute" style="top: 0%; left: 10%;">
            <svg xmlns="https://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="opacity-50" onload="util.animate(this, 2000, 'animate-love')" viewBox="0 0 16 16">
                <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
            </svg>
        </div>
    </div>

    <!-- Galeri Foto -->
    <section class="dark-section" id="galeri">

        <div class="container pb-2 pt-4">
            <div class="card-body border rounded-4 shadow p-3">

                <h1 class="font-esthetic text-center py-3" data-aos="fade-down" data-aos-duration="1500" style="font-size: 2rem;">Galeri</h1>

                <div id="carousel-foto-satu" data-aos="fade-up" data-aos-duration="1500" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carousel-foto-satu" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carousel-foto-satu" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carousel-foto-satu" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>

                    <div class="carousel-inner rounded-4">
                        <div class="carousel-item active">
                            <img src="https://picsum.photos/1280/720?random=1" alt="gambar 1" class="d-block w-100" onclick="util.modal(this)">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/1280/720?random=2" alt="gambar 2" class="d-block w-100" onclick="util.modal(this)">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/1280/720?random=3" alt="gambar 3" class="d-block w-100" onclick="util.modal(this)">
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel-foto-satu" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>

                    <button class="carousel-control-next" type="button" data-bs-target="#carousel-foto-satu" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <div id="carousel-foto-dua" data-aos="fade-up" data-aos-duration="1500" class="carousel slide mt-4" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carousel-foto-dua" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carousel-foto-dua" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carousel-foto-dua" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>

                    <div class="carousel-inner rounded-4">
                        <div class="carousel-item active">
                            <img src="https://picsum.photos/1280/720?random=4" alt="gambar 4" class="d-block w-100" onclick="util.modal(this)">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/1280/720?random=5" alt="gambar 5" class="d-block w-100" onclick="util.modal(this)">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/1280/720?random=6" alt="gambar 6" class="d-block w-100" onclick="util.modal(this)">
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel-foto-dua" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>

                    <button class="carousel-control-next" type="button" data-bs-target="#carousel-foto-dua" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Wave Separator -->
    <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#111111" fill-opacity="1" d="M0,96L30,106.7C60,117,120,139,180,154.7C240,171,300,181,360,186.7C420,192,480,192,540,181.3C600,171,660,149,720,154.7C780,160,840,192,900,208C960,224,1020,224,1080,208C1140,192,1200,160,1260,138.7C1320,117,1380,107,1410,101.3L1440,96L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z"></path>
    </svg>

    <!-- Hadiah -->
    <div class="container">
        <div class="py-4">

            <div class="text-center">

                <h1 class="font-esthetic mt-0 mb-3" style="font-size: 3rem;">Love Gift</h1>

                <p class="mb-1" style="font-size: 0.9rem;">
                    Tanpa mengurangi rasa hormat, bagi anda yang ingin memberikan tanda kasih untuk kami,
                    dapat melalui :
                </p>

                <div class="overflow-x-hidden">
                    <div class="row justify-content-center">

                        <div class="col-5 card-body border rounded-4 shadow p-3 m-3" data-aos="fade-down" data-aos-duration="1500">
                            <img src="https://upload.wikimedia.org/wikipedia/id/thumb/5/55/BNI_logo.svg/640px-BNI_logo.svg.png" class="img-fluid w-50 rounded" alt="bni">

                            <p class="card-text mt-3 mb-0" style="font-size: 0.9rem;">No. Rekening 123456789</p>
                            <p class="card-text" style="font-size: 0.9rem;">a.n Lorem ipsum dolor</p>

                            <!-- Ubah juga data-nomer sesuai dengan no rekening -->
                            <button class="btn btn-light btn-sm rounded-3" data-nomer="123456789" onclick="util.salin(this)" autofocus>Salin No. Rekening</button>
                        </div>

                        <div class="col-5 card-body border rounded-4 shadow p-3 m-3" data-aos="fade-down" data-aos-duration="1500">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/68/BANK_BRI_logo.svg/640px-BANK_BRI_logo.svg.png" class="img-fluid w-50 rounded" alt="bri">

                            <p class="card-text mt-3 mb-0" style="font-size: 0.9rem;">No. Rekening 123456789</p>
                            <p class="card-text" style="font-size: 0.9rem;">a.n Lorem ipsum dolor</p>

                            <!-- Ubah juga data-nomer sesuai dengan no rekening -->
                            <button class="btn btn-light btn-sm rounded-3" data-nomer="123456789" onclick="util.salin(this)" autofocus>Salin No. Rekening</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Ucapan -->
    <section class="m-0 p-0" id="ucapan">
        <div class="container">

            <div class="card-body border rounded-4 shadow p-3">
                <h1 class="font-esthetic text-center mb-3" style="font-size: 3rem;">Ucapan & Doa</h1>
                <div class="mb-1" id="balasan"></div>

                <form action="" method="post">
                    <div class="mb-3">
                        <form action="">
                            <label for="form-nama" class="form-label">Nama</label>
                            <input type="text" class="form-control shadow-sm" id="form-nama" placeholder="Isikan Nama Anda" name="nama">
                    </div>

                    <div class="mb-3">
                        <label for="form-kehadiran" class="form-label" id="label-kehadiran">Kehadiran</label>
                        <select class="form-select shadow-sm" id="form-kehadiran" name="status">
                            <option value="0" selected>Konfirmasi Kehadiran</option>
                            <option value="Hadir">Hadir</option>
                            <option value="Berhalangan">Berhalangan</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="form-pesan" class="form-label">Ucapan & Doa</label>
                        <div id="alertDiv" class="alert alert-info alert-dismissible fade show" role="alert">
                            <p style="font-size: 1.5rem;">Bestieee!!!</p>
                            <p class="m-0">Sekarang bisa format text seperti whatsapp lohh... cobainn sekaranggg, makaciwww bestieee</p>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" onclick="localStorage.setItem('alertClosed', 'true'); document.getElementById('alertDiv').style.display = 'none';"></button>
                        </div>
                        <textarea class="form-control shadow-sm" id="form-pesan" rows="4" placeholder="Tulis Ucapan & Doa" name="komentar"></textarea>
                    </div>

                    <div class="d-flex">
                        <button type="submit" name="submit" class="flex-fill btn btn-primary btn-sm rounded-3 shadow m-1">
                            Kirim<i class="fa-solid fa-paper-plane ms-1"></i>
                        </button>
                    </div>
                </form>
            </div>

            <div class="rounded-4 mt-4 mb-2" id="daftar-ucapan">

                <?php $i = 1; ?>
                <?php foreach ($daftarUcapan as $row) : ?>

                    <div class="card-body rounded-4 border-start bg-light py-2 ps-2 pe-0 my-2 ms-2 me-0 mb-3">
                        <div class="d-flex flex-wrap justify-content-between align-items-center">
                            <p class="text-dark text-truncate m-0 p-0" style="font-size: 0.95rem;">
                                <strong><i class="bi bi-person-fill text-success mx-1"></i><?= $row["nama"]; ?></strong>
                            </p>

                            <small class="text-dark m-0 p-0 mx-3" style="font-size: 0.75rem;"><?= $row["date"]; ?></small>
                        </div>
                        <p class="text-dark mx-1"><?= $row["status"]; ?></p>
                        <hr class="text-dark my-1">
                        <p class="text-dark mt-0 mb-1 mx-0 p-0" style="white-space: pre-line"><?= $row["komentar"]; ?></p>
                    </div>

                    <?php $i++; ?>
                <?php endforeach; ?>

            </div>

            <!-- pagination -->
            <nav class="d-flex justify-content-center mb-0">
                <ul class="pagination mb-0">
                <ul class="pagination">
            <?php if ($halamanAktif > 1) : ?>
                <li class="page-item"><a class="page-link" href="?halaman=<?= $halamanAktif - 1; ?>"><i class="fa-solid fa-circle-left me-1"></i>Sebelumnya</a></li>
            <?php endif; ?>


            <?php for ($i = 1; $i <= $jumalahHalaman; $i++) : ?>
                <?php if ($i == $halamanAktif) : ?>
                    <li class="page-itemm"><a class="page-link" href="?halaman=<?= $i; ?>" style="font-weight: bold; color:white;"><?= $i; ?></a></li>
                <?php else : ?>
                    <li class="page-item">
                        <a class="page-link" href="?halaman=<?= $i; ?>"><?= $i; ?></a>

                    </li>
                <?php endif; ?>

            <?php endfor; ?>

            <?php if ($halamanAktif < $jumalahHalaman) : ?>
                <li class="page-item">
                    <a class="page-link" href="?halaman=<?= $halamanAktif + 1; ?>">Selanjutnya<i class="fa-solid fa-circle-right ms-1"></i></a>

                </li>

            <?php endif; ?>
            </ul>
                </ul>
            </nav>
        </div>
    </section>

    <!-- Wave Separator -->
    <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#111111" fill-opacity="1" d="M0,224L34.3,234.7C68.6,245,137,267,206,266.7C274.3,267,343,245,411,234.7C480,224,549,224,617,213.3C685.7,203,754,181,823,197.3C891.4,213,960,267,1029,266.7C1097.1,267,1166,213,1234,192C1302.9,171,1371,181,1406,186.7L1440,192L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
    </svg>
</main>