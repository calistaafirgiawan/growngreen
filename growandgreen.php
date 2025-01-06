<?php 
// Content for GrowAndGreen article
$title = "Let's Green It Up: GrowAndGreen Reboisasi for a Better Future!";
$content = "
<p>Yo, sobat hijau! 🌱 Pernah nggak sih mikir, gimana caranya kita bisa bantu bumi biar makin cakep lagi? Jawabannya: <strong>Reboisasi</strong>. Yup, reboisasi itu nggak cuma sekadar nanam pohon, tapi juga bikin ekosistem makin kece, udara makin segar, dan bumi makin happy. 🌍</p>

<img src='assets/Reboisasi.jpg' alt='Reboisasi di hutan' class='article-image'>

<p>Di era serba digital ini, kita nggak boleh cuma sibuk scroll medsos doang, tapi juga kudu take action buat ngejaga planet ini. Jadi, reboisasi itu penting banget buat: 
<strong>nyelamatin biodiversitas, perbaikin tanah rusak, dan bikin kualitas udara lebih fresh.</strong> Sounds cool, right?</p>

<h2>Deforestasi: Why It Sucks 😞</h2>
<img src='assets/Gundul.jpg' alt='Hutan yang gundul akibat deforestasi' class='article-image'>
<p>Deforestasi alias gundulin hutan itu beneran masalah gede, guys. Penyebabnya? Mulai dari penebangan liar, pembangunan, sampe perluasan lahan pertanian. Hasilnya? Bencana banget! Nih efeknya:</p>
<ul>
    <li><strong>Climate Change:</strong> Hutan itu penyerap karbon alami, jadi kalau ditebang, karbonnya lepas ke udara. Hello, global warming! 🔥</li>
    <li><strong>Kehilangan Satwa:</strong> Banyak spesies hewan yang kehilangan rumahnya. 😿</li>
    <li><strong>Tanah Rusak:</strong> Nggak ada akar pohon = tanah gampang erosi.</li>
    <li><strong>Siklus Air Kacau:</strong> Hutan itu kayak filter alami buat air.</li>
</ul>

<h2>Reboisasi: Solusi Keren Buat Masa Depan 🌟</h2>
<img src='assets/Pohonkecil.jpg' alt='Pohon muda hasil reboisasi' class='article-image'>
<p>Kalau kita ngomongin reboisasi, itu lebih dari sekadar tanam pohon. Ini langkah legit buat nyelamatin bumi:</p>
<ul>
    <li><strong>Nyerap Emisi Karbon:</strong> Pohon itu kayak vacuumnya CO2. 🌳✨</li>
    <li><strong>Bikin Rumah Satwa:</strong> Hutan baru = habitat baru buat hewan-hewan lucu.</li>
    <li><strong>Nyimpen Air:</strong> Akar pohon bikin tanah tetap lembap dan nggak gampang longsor.</li>
    <li><strong>Bantu Ekonomi Lokal:</strong> Bisa jadi peluang kerja buat masyarakat sekitar. 💼</li>
</ul>

<h2>Let's Green the Future! 🚀</h2>
<img src='assets/hutanbagus.jpg' alt='Hutan hijau yang subur' class='article-image'>
<p>Reboisasi itu bukan cuma tentang lingkungan, tapi juga soal masa depan yang lebih baik. Hutan yang sehat bisa bantu kita ngehindarin bencana kayak banjir dan longsor, plus bikin hidup makin asri. So, apa kamu udah siap buat jadi bagian dari perubahan? 💪</p>
<p>Join us sekarang juga dan bareng-bareng kita bikin bumi jadi lebih hijau dan lebih asik buat generasi kita dan selanjutnya!</p>
";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <h1>GrowAndGreen</h1>
            <p>Bikin Bumi Lebih Hijau, Lebih Seru! 🌿</p>
        </div>
    </header>
    <main class="content">
        <div class="container">
            <h1><?php echo $title; ?></h1>
            <?php echo $content; ?>
        </div>
    </main>
    <section class="volunteer-section">
        <div class="container">
            <h2>Gabung Jadi Volunteer! 🤝</h2>
            <img src="assets/voluntir.jpg" alt="Volunteer bersama" class="article-image">
            <p>Pengen jadi pahlawan bumi? Yuk gabung sama kami di GrowAndGreen dan bantu projek reboisasi!</p>
            <a href="volunteer.php" class="cta-button">Daftar Sekarang 🚀</a>
        </div>
    </section>
    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 GrowAndGreen - Bikin Bumi Bahagia Lagi 🌳</p>
        </div>
    </footer>
</body>
</html>