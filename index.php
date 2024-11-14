<?php
// Assets
$nama_tamu = $_GET["nama_tamu"];
$pengantin_pria = "Baskara";
$pengantin_wanita = "Siti";
$nmlengkap_pengantin_pria = "Baskara Widodo";
$nmlengkap_pengantin_wanita = "Siti Humaira";
$nmbapak_pengantin_pria = "Bpk. Jamal Kumar";
$nmlengkap_pengantin_wanita = "Bpk. Supriyadi Sucipto";
$pesan_tamu = "Tanpa Mengurangi Rasa Hormat. Kami Mengundang Bapak/Ibu/Saudara/i
            Untuk Hadir Di Acara Pernikahan Kami";
$tgl_pernikahan = "15 Januari 2025";
$quotes = '"Dan di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan untukmu
        istri-istri dari jenismu sendiri, supaya kamu cenderung dan merasa
        tenteram kepadanya, dan dijadikan-Nya diantaramu rasa kasih dan
        sayang." <br />
        (QS. Ar-Rum: 21)';
$link_lagu = "./assests/audio/Ladrang Wilujeng Pahargyan Temanten Kebo Giro-Giro Temanten.m4a";
$lokasi_akad = "https://maps.app.goo.gl/rkXAmJ6WHbmZMPU36";
$lokasi_resepsi = "https://maps.app.goo.gl/9pdkWqdhFLpYBPAu8";
$no_dana = "083129701342";
$no_gopay = "083129701342";
$an_gopay = "farid indrawan";
$an_dana = "farid indrawan";
$story = "Dulu, kami hanya dua orang biasa yang tak sengaja dipertemukan.
                    Seiring waktu, tawa dan cerita mengisi hari-hari kami, hingga kami
                    sadar: hidup ini terasa lebih indah bersama. Sekarang, kami siap
                    memulai bab baru dan ingin berbagi kebahagiaan ini dengan Anda di
                    hari spesial kami.";
$link_youtube = "https://www.youtube.com/embed/1-GLrbJzG3A?si=JQqfAoMlcyv6TrFh";
$ucapan_terimakasih = "Kami ingin mengucapkan terima kasih yang sebesar-besarnya atas
                kehadiran dan kasih sayang Anda pada hari pernikahan Kami. Kehadiran
                Anda telah membuat acara ini lebih berarti";


$assets_bunga_cover = "./assests/img/1.png";
$assets_daun = "./assests/img/19.png";
$assets_pengantin_pria = "./assests/img/pengantinpria.png";
$assets_cowo_gendang = "./assests/img/13.png";
$assets_cewe_nyanyi = "./assests/img/14.png";
$assets_pengantin_wanita = "./assests/img/pengantinwanita.png";
$assets_gapura = "./assests/img/25.png";
$assets_bunga_lokasi = "./assests/img/22.png";
$assets_video_pernikahan = "./assests/video/Cinematic Prewedding.mp4";
$assets_foto_story = "./assests/img/fotostory.webp";
$assets_vector_pengantin = "./assests/img/vectorpengantin.png";
$assets_wayang_cowo = "./assests/img/4.png";
$assets_wayang_cewe = "./assests/img/5.png";
$assets_rumah = "./assests/img/rumah.png";

$assets_foto_galeri_1 = "./assests/img/foto1.jpg";
$assets_foto_galeri_2 = "./assests/img/foto2.jpg";
$assets_foto_galeri_3 = "./assests/img/foto3.jpg";
$assets_foto_galeri_4 = "./assests/img/foto4.jpg";
$assets_foto_galeri_5 = "./assests/img/foto5.jpg";
$assets_foto_galeri_6 = "./assests/img/foto1.jpg";
$assets_foto_galeri_7 = "./assests/img/foto2.jpg";
$assets_foto_galeri_8 = "./assests/img/foto3.jpg";
$assets_foto_galeri_9 = "./assests/img/foto4.jpg";
$assets_foto_galeri_10 = "./assests/img/foto5.jpg";
$assets_foto_galeri_11 = "./assests/img/foto1.jpg";
$assets_foto_galeri_12 = "./assests/img/foto2.jpg";
$assets_foto_galeri_13 = "./assests/img/foto3.jpg";
$assets_foto_galeri_14 = "./assests/img/foto4.jpg";
$assets_foto_galeri_15 = "./assests/img/foto5.jpg";
$assets_tangkai_bunga = "./assests/img/24.png";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="stylesheet" href="./assests/style.css" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <script src="https://unpkg.com/akar-icons-fonts"></script>
    <style>
        #main {
            display: none;
        }
    </style>
</head>

<body>
    <section data-aos="fade-in">
        <div class="hero">
            <div class="tittle" data-aos="fade-down">
                <img
                    src="<?= $assets_bunga_cover ?>"
                    width="100px"
                    alt=""
                    data-aos="fade-down" />
                <p class="img-tittle">Pernikahan</p>
                <h1 data-aos="flip-left"><?= $pengantin_pria ?> &amp; <?= $pengantin_wanita ?></h1>
                <p data-aos="fade-down">

                    <?= $pesan_tamu ?>
                </p>
                <h3 data-aos="fade-down"><?= "Yth. $nama_tamu" ?></h3>
                <p data-aos="zoom-in"><strong><?= $tgl_pernikahan ?></strong></p>
                <button id="view-invitation">Lihat Undangan</button>
            </div>
        </div>
    </section>
    <main id="main">
        <div id="audio-container">
            <audio id="song" autoplay loop>
                <source
                    src="<?= $link_lagu ?>"
                    type="audio/mp3" />
            </audio>
            <div class="audio-icon-wrapper">
                <i
                    class="fa-solid fa-compact-disc"
                    id="disc"
                    style="display: none"></i>
            </div>
        </div>

        <nav>
            <a href="#pengantin" data-aos="fade-up">Pengantin</a>
            <a
                href="#lokasi"
                data-aos="fade-up"
                data-aos-anchor-placement="bottom-bottom"
                data-aos-delay="200">Lokasi</a>
            <a
                href="#gallery"
                data-aos="fade-up"
                data-aos-anchor-placement="bottom-bottom"
                data-aos-delay="400">Galeri</a>
            <a
                href="#rsvp"
                data-aos="fade-up"
                data-aos-anchor-placement="bottom-bottom"
                data-aos-delay="800">Kehadiran</a>
            <a
                href="#hadiah"
                data-aos="fade-up"
                data-aos-anchor-placement="bottom-bottom"
                data-aos-delay="1000">Hadiah</a>
        </nav>
        <section class="countdown">
            <h2 data-aos="fade-up">Menuju Hari Bahagia</h2>
            <div class="countdown-container">
                <div class="days-container" data-aos="fade-in" data-aos-delay="200">
                    <div class="days">0</div>
                    <div class="days-label">days</div>
                </div>

                <div class="hours-container" data-aos="fade-in" data-aos-delay="400">
                    <div class="hours">00</div>
                    <div class="hours-label">hours</div>
                </div>

                <div
                    class="minutes-container"
                    data-aos="fade-in"
                    data-aos-delay="600">
                    <div class="minutes">00</div>
                    <div class="minutes-label">minutes</div>
                </div>

                <div
                    class="seconds-container"
                    data-aos="fade-in"
                    data-aos-delay="800">
                    <div class="seconds">00</div>
                    <div class="seconds-label">seconds</div>
                </div>
            </div>
        </section>

        <div class="quotes" data-aos="fade-in">
            <hr />
            <p>
                <?php
                echo $quotes
                ?>
            </p>
            <hr />
            <img
                src="<?= $assets_daun ?>"
                id="daunkiri"
                alt=""
                data-aos="fade-in"
                data-aos-duration="3000" />
            <img
                src="<?= $assets_daun ?>"
                id="daunkanan"
                alt=""
                data-aos="fade-in"
                data-aos-duration="3000" />
        </div>

        <div class="pengantin" id="pengantin">
            <div class="pengantinpria">
                <div class="textpengantin" data-aos="fade-right">
                    <h2 data-aos="fade-up"><?= $nmlengkap_pengantin_pria ?></h2>
                    <p>Putra Ketiga</p>
                    <p><?= $nmbapak_pengantin_pria ?></p>
                    <div class="iconMedsos">
                        <a
                            href=""
                            data-aos="fade-up"
                            data-aos-anchor-placement="bottom-bottom"
                            data-aos-delay="500">
                            <i class="ai-instagram-fill"></i>
                        </a>
                        <a
                            href=""
                            data-aos="fade-up"
                            data-aos-anchor-placement="bottom-bottom"
                            data-aos-delay="800">
                            <i class="ai-facebook-fill" data-aos="fade-up"></i>
                        </a>
                    </div>
                </div>
                <img
                    src="<?= $assets_pengantin_pria ?>"
                    alt=""
                    data-aos="zoom-in" />
            </div>

            <img
                src="<?= $assets_cowo_gendang ?>"
                id="cowogendang"
                alt=""
                data-aos="zoom-in-left" />
            <img
                src="<?= $assets_cewe_nyanyi ?>"
                id="cewenyanyi"
                alt=""
                data-aos="zoom-in-right" />

            <div class="pengantinwanita">
                <img
                    src="<?= $assets_pengantin_wanita ?>"
                    alt=""
                    data-aos="zoom-in" />
                <div class="textpengantin" data-aos="fade-left">
                    <h2 data-aos="fade-up"><?= $nmlengkap_pengantin_wanita ?></h2>
                    <p>Putri Pertama</p>
                    <p><?= $nmbapak_pengantin_wanita ?></p>
                    <div class="iconMedsos">
                        <a href="" data-aos="fade-up" data-aos-delay="500">
                            <i class="ai-instagram-fill"></i>
                        </a>
                        <a href="" data-aos="fade-up" data-aos-delay="800">
                            <i class="ai-facebook-fill"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="waktuLokasi" id="lokasi">
            <div id="lokasiatas" class="lokasi" data-aos="fade-right">
                <h2>Akad Nikah</h2>
                <hr />
                <h4>12 Desember 2024</h4>
                <p>Pukul: 08.00 WIB</p>
                <p>Masjid Al-Mubaarok</p>
                <p>
                    Masjid Jami' Al-Mubaarok, Jl. Dewi Sartika, RT.005/RW.008,
                    Margahayu, Kec. Bekasi Tim., Kota Bks, Jawa Barat 17113
                </p>
                <br />
                <a href="<?= $lokasi_akad ?>"><i class="ai-location"></i> Lokasi</a>
            </div>
            <img src="<?= $assets_gapura ?>" id="gapura" alt="" />
            <div class="lokasi" data-aos="fade-left">
                <h2>Resepsi</h2>
                <hr />
                <div class="text-lokasi">
                    <h4>13 Desember 2024</h4>
                    <p>Pukul: 08.00 WIB</p>
                    <p>Gedung Serbaguna</p>
                    <p>
                        Komplek Pengairan, RT.004/RW.012, Rawa Semut, Margahayu, Kec.
                        Bekasi Tim., Kota Bks, Jawa Barat 17113
                    </p>
                    <br />
                </div>
                <a
                    data-aos="flip-down"
                    data-aos-delay="1000"
                    href="<?= $lokasi_resepsi ?>"><i class="ai-location"></i> Lokasi</a>
            </div>
        </div>
        <img src="<?= $assets_bunga_lokasi ?>" id="bungakiri" alt="" />
        <img src="<?= $assets_bunga_lokasi ?>" id="bungakanan" alt="" />
        <!--Gallery photos-->

        <section id="gallery" class="gallery-container">
            <h2 data-aos="fade-up">Gallery</h2>
            <section class="gallery-video" data-aos="fade-up">
                <video autoplay loop muted>
                    <source src="<?= $assets_video_pernikahan ?>" />
                </video>
            </section>
            <div class="gallery" data-aos="fade-left">
                <img src="<?= $assets_foto_galeri_1 ?>" alt="foto1" />
                <img src="<?= $assets_foto_galeri_2 ?>" alt="foto2" />
                <img src="<?= $assets_foto_galeri_3 ?>" alt="foto3" />
                <img src="<?= $assets_foto_galeri_4 ?>" alt="foto4" />
                <img src="<?= $assets_foto_galeri_5 ?>" alt="foto5" />
                <img src="<?= $assets_foto_galeri_6 ?>" alt="foto6" />
                <img src="<?= $assets_foto_galeri_7 ?>" alt="foto7" />
                <img src="<?= $assets_foto_galeri_8 ?>" alt="foto8" />
                <img src="<?= $assets_foto_galeri_9 ?>" alt="foto9" />
                <img src="<?= $assets_foto_galeri_10 ?>" alt="foto10" />
                <img src="<?= $assets_foto_galeri_11 ?>" alt="foto11" />
                <img src="<?= $assets_foto_galeri_12 ?>" alt="foto12" />
                <img src="<?= $assets_foto_galeri_13 ?>" alt="foto13" />
                <img src="<?= $assets_foto_galeri_14 ?>" alt="foto14" />
                <img src="<?= $assets_foto_galeri_15 ?>" alt="foto15" />
            </div>
            <iframe
                data-aos="fade-up"
                src="<?= $link_youtube ?>"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin"
                allowfullscreen></iframe>
        </section>

        <section id="special-guests">
            <div class="section-special-guests">
                <h2 data-aos="fade-up">Tamu Khusus</h2>
                <table>
                    <tr>
                        <td
                            data-aos="fade-in"
                            style="text-align: center; vertical-align: middle"
                            colspan="2">
                            Turut Mengundang
                        </td>
                    </tr>
                    <tr>
                        <th data-aos="fade-in" data-aos-delay="200">Nama</th>
                        <th data-aos="fade-in" data-aos-delay="1200">Hubungan</th>
                    </tr>
                    <tr>
                        <td data-aos="fade-in" data-aos-delay="400">Budi Santoso</td>
                        <td data-aos="fade-in" rowspan="2" data-aos-delay="1400">
                            Saudara
                        </td>
                    </tr>

                    <tr>
                        <td data-aos="fade-in" data-aos-delay="600" colspan="2">
                            Siti Aminah
                        </td>
                    </tr>
                    <tr>
                        <td data-aos="fade-in" data-aos-delay="800">Andi Prasetyo</td>
                        <td data-aos="fade-in" data-aos-delay="1600">Rekan Kerja</td>
                    </tr>
                    <tr>
                        <td data-aos="fade-in" data-aos-delay="1000">Satria Ade Putra</td>
                        <td data-aos="fade-in" data-aos-delay="1800">Guru Sekolah</td>
                    </tr>
                </table>
            </div>
        </section>
        <!-- <button onclick="clearRSVP()">Clear RSVP</button> -->

        <section class="RSVP" id="rsvp">
            <h2>Konfirmasi Kehadiran</h2>
            <form id="rsvpForm" method="POST" action="">
                <div class="form-group">
                    <label data-aos="fade-right" for="name">Nama Tamu :</label>
                    <input data-aos="fade-right" type="text" id="name" name="name" required />
                </div>
                <div class="form-group">
                    <label data-aos="fade-right" for="phone">No Telp :</label>
                    <input data-aos="fade-right" type="number" id="phone" name="phone" required />
                </div>
                <div class="form-group">
                    <label data-aos="fade-right" for="email">Email :</label>
                    <input data-aos="fade-right" type="email" id="email" name="email" required />
                </div>
                <div class="form-group flex-form">
                    <label data-aos="fade-right">Kehadiran :</label>
                    <div class="flex-form-input">
                        <input data-aos="fade-right" type="radio" id="hadir" name="kehadiran" value="Hadir" required />
                        <label data-aos="fade-right" for="hadir">Hadir</label>
                    </div>
                    <div class="flex-form-input">
                        <input data-aos="fade-right" type="radio" id="tidak_hadir" name="kehadiran" value="Tidak Hadir" required />
                        <label data-aos="fade-right" for="tidak_hadir">Tidak Hadir</label>
                    </div>
                </div>
                <div class="form-group flex-form">
                    <label data-aos="fade-right">Menu Makanan :</label>
                    <div class="flex-form-input">
                        <input data-aos="fade-right" type="checkbox" id="menu_vegan" name="menu[]" value="Vegan" />
                        <label data-aos="fade-right" for="menu_vegan">Vegan</label>
                    </div>
                    <div class="flex-form-input">
                        <input data-aos="fade-right" type="checkbox" id="menu_non_vegan" name="menu[]" value="Non-Vegan" />
                        <label data-aos="fade-right" for="menu_non_vegan">Non-Vegan</label>
                    </div>
                </div>
                <div class="form-group flex-form">
                    <label data-aos="fade-right" for="guests">Jumlah Tamu :</label>
                    <select data-aos="fade-right" id="guests" name="guests">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
                <div class="form-group">
                    <label data-aos="fade-right" for="comments">Komentar :</label>
                    <textarea data-aos="fade-right" id="comments" name="comments" rows="4"></textarea>
                </div>
                <button data-aos="fade-right" type="submit">Submit RSVP</button>
            </form>

            <h2 data-aos="fade-up" id="datakehadiran">Data Kehadiran</h2>
            <div data-aos="fade-up" class="rsvpData">
                <table id="rsvpTable">
                    <thead>
                        <tr>
                            <th>Nama Tamu</th>
                            <th>No Telp</th>
                            <th>Email</th>
                            <th>Kehadiran</th>
                            <th>Menu Makanan</th>
                            <th>Jumlah Tamu</th>
                            <th>Komentar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Mengecek apakah form sudah disubmit
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            // Mengambil data dari form
                            $name = htmlspecialchars($_POST["name"]);
                            $phone = htmlspecialchars($_POST["phone"]);
                            $email = htmlspecialchars($_POST["email"]);
                            $kehadiran = htmlspecialchars($_POST["kehadiran"]);
                            $guests = htmlspecialchars($_POST["guests"]);
                            $comments = htmlspecialchars($_POST["comments"]);
                            $menu = isset($_POST["menu"]) ? implode(", ", $_POST["menu"]) : "Tidak dipilih";

                            // Menampilkan data dalam baris tabel
                            echo "<tr>
                    <td>$name</td>
                    <td>$phone</td>
                    <td>$email</td>
                    <td>$kehadiran</td>
                    <td>$menu</td>
                    <td>$guests</td>
                    <td>$comments</td>
                  </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>
        <section>
            <div class="story">
                <h2 data-aos="fade-up">Story</h2>
                <p data-aos="fade-up">
                    <?= $story ?>
                </p>
                <div class="fotostory">
                    <img src="<?= $assets_foto_story ?>" alt="" />
                </div>
            </div>
            <img
                data-aos="fade-up-left"
                data-aos-delay="1s"
                id="bungastory"
                src="<?= $assets_tangkai_bunga ?>"
                alt="" />
        </section>
        <section id="hadiah">
            <div class="gift">
                <h2 data-aos="fade-up">Kirim Hadiah</h2>
                <p>*klik logo payment untuk menyalin no rekening</p>
                <div class="gifts-content">
                    <div class="payment">
                        <img
                            data-aos="fade-up"
                            onclick="copyText('<?= $no_gopay ?>')"
                            src="./assests/img/gopay.png"
                            alt="Bank Account" />
                        <p data-aos="fade-up" data-aos-delay="500">
                            No. <?= $no_gopay ?><br />
                            An. <?= $an_gopay ?>
                        </p>
                    </div>

                    <div class="payment">
                        <img
                            data-aos="fade-up"
                            data-aos-delay="200"
                            onclick="copyText('<?= $no_dana ?>2')"
                            src="./assests/img/dana.png"
                            alt="Gift Address" />
                        <p data-aos="fade-up" data-aos-delay="500">
                            No. <?= $no_dana ?> <br />
                            An. <?= $an_dana ?>
                        </p>
                    </div>
                </div>
            </div>
            <img id="rumah" src="<?= $assets_rumah ?>" alt="" />
        </section>
        <section class="massages">
            <h2 data-aos="fade-up">Pesan untuk Pengantin</h2>
            <form id="messageForm" action="#" method="post">
                <div class="form-group">
                    <label data-aos="fade-up" for="message">Pesan & Doa:</label>
                    <textarea
                        data-aos="fade-up"
                        id="message"
                        name="messages"
                        rows="4"
                        required></textarea>
                </div>
                <button data-aos="fade-up" type="button" onclick="submitMessage()">
                    Submit Pesan
                </button>
            </form>
            <h3 data-aos="fade-up">Daftar Pesan</h3>
            <ul data-aos="fade-in" id="messageList"><?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                                        echo $messages;
                                                    } else {
                                                        echo '';
                                                    } ?></ul>
        </section>
        <img src="<?= $assets_wayang_cowo ?>" id="wayangcowo" alt="" />
        <img src="<?= $assets_wayang_cewe ?>" id="wayangcewe" alt="" />
        <section class="thanks" id="thanks">
            <img
                src="<?= $assets_vector_pengantin ?>"
                id="pengantinvector"
                alt=""
                data-aos="fade-up" />
            <h2 data-aos="fade-in">Terima Kasih</h2>
            <p>
                <?= $ucapan_terimakasih ?>
            </p>
        </section>
    </main>

    <script src="./assests/main.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000, // Mengurangi durasi animasi
            delay: 0, // Menghilangkan delay AOS
        });
    </script>
</body>

</html>