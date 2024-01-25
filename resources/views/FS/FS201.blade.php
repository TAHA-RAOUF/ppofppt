<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualités Full Stack</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            text-align: center;
        }
        .navbar {
            background-color: #3498db;
            padding: 10px;
            color: white;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
        }
        .news-card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px 0;
            overflow: hidden;
        }
        .news-image {
            height: 300px;
            background-size: cover;
            background-position: center;
            transition: transform 0.5s ease-in-out;
        }
        .news-image:hover {
            transform: scale(1.1);
        }
        .news-content {
            padding: 20px;
            text-align: left;
        }
        .news-title {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .news-date {
            color: #777;
            margin-bottom: 10px;
        }
        .news-description {
            color: #333;
        }
    </style>
</head>

<body>

    <!-- Barre de navigation -->
    <div class="navbar flex items-center">
    <h1 class="text-2xl font-bold">Actualités Full Stack</h1>
    <a href="HOME" class="text-black-700 hover:text-black-700 ml-auto">Accueil</a>
</div>


    <!-- Contenu principal -->
    <div class="container">

      
       <div class="news-card">
    <div class="news-image h-48" style="background-image: url('{{ asset('img/Lancement-dun-programme-de-Certificats-Specialises-destines-au-personnel-de-lOFPPT.png') }}'); background-size: cover; background-position: center;"></div>

    <div class="news-content">
        <div class="news-title">Nouvelle technologie Full Stack</div>
        <div class="news-date">15 janvier 2023</div>
        <div class="news-description">Découvrez la dernière technologie Full Stack qui révolutionne le monde du développement web.</div>
    </div>
</div>
<div class="news-card">
<div class="news-image h-48" style="background-image: url('{{ asset('img/Capture-OFPPT.png') }}'); background-size: cover; background-position: center;"></div>
    <div class="news-content">
        <div class="news-title">Formation avancée en Full Stack</div>
        <div class="news-date">20 février 2023</div>
        <div class="news-description">Inscrivez-vous à notre formation avancée en développement Full Stack pour maîtriser toutes les technologies essentielles.</div>
    </div>
</div>

<!-- Actualité 3 -->
<div class="news-card">
<div class="news-image h-48" style="background-image: url('{{ asset('img/Formation-GIZ-scaled.jpg') }}'); background-size: cover; background-position: center;"></div>
    <div class="news-content">
        <div class="news-title">Projets excitants à venir</div>
        <div class="news-date">5 mars 2023</div>
        <div class="news-description">Restez à l'écoute pour nos projets passionnants en Full Stack. De grandes opportunités pour les développeurs talentueux.</div>
    </div>
</div>
    </div>
</body>
</html>
