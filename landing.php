<?php
$title = "GrowAndGreen - Hijaukan Bumi";
$navbarLinks = [
    ["href" => "growandgreen.php", "label" => "Halaman Utama"],
    ["href" => "volunteer.php", "label" => "Volunteer"],
    ["href" => "about.php", "label" => "Tentang"]
];
$ctaText = "Pelajari Lebih Lanjut";
$ctaLink = "growandgreen.php";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background-color: #f0f8ff;
            color: #333;
        }

        .landing-page {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-image: url('assets/ea.jpeg');
            background-size: cover;
            background-position: center;
            text-align: center;
            color: white;
        }

        .navbar {
            position: absolute;
            top: 0;
            width: 100%;
            display: flex;
            justify-content: center;
            background: rgba(0, 0, 0, 0.7);
            padding: 10px 0;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 1.2rem;
            transition: color 0.3s;
        }

        .navbar a:hover {
            color: #66bb6a;
        }

        .landing-page h1 {
            font-size: 3.5rem;
            margin: 0;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
        }

        .landing-page p {
            font-size: 1.5rem;
            margin: 20px 0;
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.6);
        }

        .cta-button {
            display: inline-block;
            background: linear-gradient(45deg, #4caf50, #66bb6a);
            color: white;
            padding: 15px 30px;
            font-size: 1.2rem;
            font-weight: bold;
            text-decoration: none;
            border-radius: 30px;
            transition: transform 0.3s, box-shadow 0.3s;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        }

        .cta-button:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>
<body>
    <div class="navbar">
        <?php foreach ($navbarLinks as $link): ?>
            <a href="<?php echo $link['href']; ?>"><?php echo $link['label']; ?></a>
        <?php endforeach; ?>
    </div>
    <div class="landing-page">
        <h1>GrowAndGreen</h1>
        <p>Hijaukan Bumi, Wujudkan Masa Depan 🌱</p>
        <a href="<?php echo $ctaLink; ?>" class="cta-button"><?php echo $ctaText; ?></a>
    </div>
</body>
</html>
