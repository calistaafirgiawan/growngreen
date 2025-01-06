<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Volunteer - GrowAndGreen</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #a8edea, #fed6e3);
            color: #333;
        }

        .header {
            background: linear-gradient(135deg, #4caf50, #66bb6a);
            color: white;
            padding: 50px 20px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .header h1 {
            font-size: 2.5rem;
            margin: 0;
        }

        .header p {
            margin: 10px 0 0;
            font-size: 1.2rem;
        }

        .content {
            padding: 20px;
            max-width: 800px;
            margin: 30px auto;
            background: white;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .content h2 {
            font-size: 2rem;
            text-align: center;
            margin-bottom: 20px;
            color: #4caf50;
        }

        .volunteer-form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .volunteer-form label {
            font-weight: bold;
            color: #333;
        }

        .volunteer-form input, 
        .volunteer-form textarea {
            padding: 10px;
            border: 2px solid #66bb6a;
            border-radius: 5px;
            font-size: 1rem;
        }

        .volunteer-form button {
            background: linear-gradient(135deg, #4caf50, #66bb6a);
            color: white;
            font-size: 1.1rem;
            padding: 10px 20px;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            transition: transform 0.3s, background-color 0.3s;
        }

        .message {
            margin: 20px 0;
            padding: 15px;
            text-align: center;
            font-size: 1.2rem;
            border-radius: 10px;
        }

        .message.success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .message.error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="container">
            <h1>Daftar Volunteer</h1>
            <p>Bantu kami menyelamatkan bumi dengan aksi nyata 🌱</p>
        </div>
    </header>
    <main class="content">
        <div class="container">
            <h2>Isi Formulir</h2>

            <!-- Tampilkan Pesan -->
            <?php if (isset($_GET['status'])): ?>
                <?php if ($_GET['status'] === 'success'): ?>
                    <div class="message success">Formulir berhasil dikirim. Terima kasih telah bergabung!</div>
                <?php elseif ($_GET['status'] === 'error'): ?>
                    <div class="message error">Terjadi kesalahan saat mengirim formulir. Silakan coba lagi.</div>
                <?php endif; ?>
            <?php endif; ?>

            <form action="submit_form.php" method="POST" class="volunteer-form">
                <label for="name">Nama Lengkap</label>
                <input type="text" id="name" name="name" placeholder="Masukkan nama Anda" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required>

                <label for="message">Mengapa Anda Ingin Bergabung?</label>
                <textarea id="message" name="message" rows="5" placeholder="Tulis alasan Anda" required></textarea>

                <button type="submit">Kirim Formulir</button>
            </form>
        </div>
    </main>
</body>
</html>
