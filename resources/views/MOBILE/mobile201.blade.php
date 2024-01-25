<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Bonjour Mobile 201</title>
</head>

<body class="bg-gray-100 font-sans text-center">

    <!-- Barre de navigation -->
    <div class="bg-blue-600 p-4 text-white">
        <a href="HOME" class="text-white hover:none">Accueil</a>
    </div>

    <!-- Contenu principal -->
    <div class="max-w-2xl mx-auto bg-white p-8 rounded shadow-md my-8">

        <h1 class="text-3xl font-bold mb-6 text-blue-600">Bonjour Mobile 201</h1>
        <h2 class="text-2xl font-semibold mb-6 text-green-600">Infos du tableau BONJOUR MOBILE 201</h2>

        <!-- Actualités -->
        <div class="mb-8">
            <h2 class="text-2xl font-semibold mb-4 text-purple-600">Actualités de la filière Mobile en Développement Informatique</h2>
            <div class="flex flex-col">

                <!-- Actualité 1 -->
                <div class="mb-4">
                    <p class="text-gray-500">10 janvier 2023</p>
                    <p class="text-xl font-bold text-blue-600">Nouveau cours de développement d'applications mobiles</p>
                    <p>Le département informatique est heureux d'annoncer le lancement d'un nouveau cours avancé de développement d'applications mobiles. Ce cours couvrira les dernières technologies et tendances dans le développement pour iOS et Android.</p>
                </div>

                <!-- Actualité 2 -->
                <div class="mb-4">
                    <p class="text-gray-500">5 février 2023</p>
                    <p class="text-xl font-bold text-blue-600">Hackathon mobile : Montrez vos compétences en codage</p>
                    <p>Participez à notre prochain hackathon mobile où vous aurez l'occasion de mettre en pratique vos compétences en codage en travaillant sur des projets innovants. C'est une opportunité idéale pour collaborer avec vos pairs et montrer vos talents en développement mobile.</p>
                </div>

                <!-- Ajoutez autant d'actualités que nécessaire -->
            </div>
        </div>

        <!-- Infos du tableau BONJOUR MOBILE 201 -->
        <div class="mb-8">
            <p class="text-gray-500">Bienvenue dans la filière de Mobile en Développement !</p>

            <!-- Informations spécifiques à la filière -->
            <ul class="list-disc ml-6 text-gray-700 mt-4">
                <li>Apprenez à développer des applications mobiles pour iOS et Android.</li>
                <li>Explorez les langages de programmation tels que Swift, Kotlin, React Native, etc.</li>
                <li>Acquérez des compétences en conception d'interfaces utilisateur (UI) et d'expérience utilisateur (UX).</li>
                <li>Collaborez sur des projets pratiques pour renforcer vos compétences en développement mobile.</li>
                <!-- Ajoutez d'autres points spécifiques à la filière -->
            </ul>
        </div>

    </div>

    <!-- Pied de page -->
    <div class="max-w-2xl mx-auto bg-white p-8 rounded shadow-md my-8">
        <p class="text-gray-700 mb-4">Merci de revenir à la page d'accueil pour consulter notre site.</p>
        <a href="HOME" class="bg-blue-600 text-white py-2 px-4 rounded inline-block text-center hover:bg-blue-700 transition duration-300 ease-in-out">Accueil</a>
    </div>

</body>

</html>
