<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Tableau de Données</title>
</head>

<body class="bg-gray-100 font-sans p-8">

    <h1 class="text-3xl font-bold mb-8">Base de données</h1>

    <!-- Affichage des données avec la première méthode -->
    <div class="mb-8">
        <p class="mb-4">
            <strong>Nom :</strong> {{ $t->nom }} <br>
            <strong>Prénom :</strong> {{ $t->prenom }} <br>
            <strong>Âge :</strong> {{ $t->age }} <br>
            <strong>Ville :</strong> {{ $t->ville }} <br>
            <strong>Date de naissance :</strong> {{ $t->date }} <br>
            <strong>Email :</strong> {{ $t->email }} <br>
            <strong>Password :</strong> {{ $t->password }} <br>
            <strong>CV :</strong> {{ $t->cv->getsize() }} <br>
        </p>
    </div>

    <!-- Affichage des données avec un tableau -->
    <table class="w-full mb-8">
        <thead>
            <tr>
                <th class="border p-2">Attribut</th>
                <th class="border p-2">Valeur</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="border p-2">Nom</td>
                <td class="border p-2">{{ $t->nom }}</td>
            </tr>
            <tr>
                <td class="border p-2">Prénom</td>
                <td class="border p-2">{{ $t->prenom }}</td>
            </tr>
            <tr>
                <td class="border p-2">Âge</td>
                <td class="border p-2">{{ $t->age }}</td>
            </tr>
            <tr>
                <td class="border p-2">Ville</td>
                <td class="border p-2">{{ $t->ville }}</td>
            </tr>
            <tr>
                <td class="border p-2">Date de naissance</td>
                <td class="border p-2">{{ $t->date }}</td>
            </tr>
            <tr>
                <td class="border p-2">Email</td>
                <td class="border p-2">{{ $t->email }}</td>
            </tr>
            <tr>
                <td class="border p-2">Password</td>
                <td class="border p-2">{{ $t->password }}</td>
            </tr>
            <tr>
                <td class="border p-2">CV Size</td>
                <td class="border p-2">{{ $t->cv->getsize() }}</td>
            </tr>
        </tbody>
    </table>

</body>

</html>
