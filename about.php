<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - GrowAndGreen</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }

        .header {
            text-align: center;
            padding: 20px;
            background-color: #66bb6a;
            color: white;
        }

        .header h1 {
            margin: 0;
            font-size: 2.5rem;
        }

        .content {
            padding: 20px;
            max-width: 1200px;
            margin: 20px auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .profiles {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 20px;
        }

        .profile {
            text-align: center;
            background: #f0f8ff;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        .profile img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border: 4px solid #66bb6a;
            border-radius: 5px;
        }

        .profile h2 {
            margin: 10px 0 5px;
            font-size: 1.5rem;
            color: #4caf50;
        }

        .profile p {
            margin: 5px 0;
            font-size: 1rem;
            color: #555;
        }

        .footer {
            text-align: center;
            background-color: #66bb6a;
            color: white;
            padding: 10px 0;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header class="header">
        <h1>Tentang Kami</h1>
        <p>Kenali lebih dekat siapa kami di balik GrowAndGreen</p>
    </header>
    <main class="content">
        <div class="profiles">
            <!-- Profile 1 -->
            <div class="profile">
                <img src="assets/cal.jpeg" alt="Foto Profil 1"> <!-- Ganti dengan gambar Anda -->
                <h2>Calista Nabila Firgiawan</h2>
                <p>202331143</p>
                <p>Teknik Informatika</p>
            </div>
            <!-- Profile 2 -->
            <div class="profile">
                <img src="assets/nurl.jpg" alt="Foto Profil 2"> <!-- Ganti dengan gambar Anda -->
                <h2>Nurul Dea Gamal</h2>
                <p>202331154</p>
                <p>Teknik Informatika</p>
            </div>
            <!-- Profile 3 -->
            <div class="profile">
                <img src="assets/bim.jpg" alt="Foto Profil 3"> <!-- Ganti dengan gambar Anda -->
                <h2>M. Abim Chandra</h2>
                <p>202331273</p>
                <p>Teknik Informatika</p>
            </div>
        </div>
        <div class="intro">
            <p>Halo! Kami adalah pembuat GrowAndGreen, sebuah platform yang bertujuan untuk menghijaukan bumi dengan aksi nyata.
            Kami percaya bahwa setiap langkah kecil menuju pelestarian lingkungan dapat membuat perbedaan besar. Bergabunglah dengan kami untuk masa depan yang lebih hijau!</p>
        </div>
    </main>
    <footer class="footer">
        <p>&copy; 2024 GrowAndGreen. Semua hak dilindungi 🌳</p>
    </footer>
</body>
</html>
