<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
</head>

<body class="bg-gray-100 font-sans">

    <div class="container mx-auto p-8">
        <a href="{{ route('authlogin') }}" class="btn btn-primary">Se connecter</a>

        <h1 class="text-3xl font-bold mb-8 text-center">INSCRIPTION FORUM</h1>

        <div class="flex items-center justify-center mb-8">
            <img src="{{ asset('img/téléchargement.png') }}" alt="une photo"
                class="w-16 h-16 object-cover rounded-full mr-4">
            <p class="text-gray-700">
                Un forum de l'OFppt (Office de la Formation Professionnelle et de la Promotion du Travail) pourrait être
                une plateforme en ligne dédiée aux étudiants, enseignants et professionnels liés à cet organisme au
                Maroc. Les forums OFppt pourraient servir de lieu d'échange d'informations, de ressources pédagogiques,
                d'expériences, de conseils et de discussions relatives aux formations professionnelles dispensées par
                l'OFppt. Les utilisateurs pourraient discuter des cours, partager des idées, poser des questions, et
                bénéficier d'une communauté virtuelle favorisant l'apprentissage collaboratif et la résolution de
                problèmes. Ces forums pourraient également être un moyen pour les étudiants de rester informés sur les
                événements, les mises à jour et les opportunités de stage ou d'emploi dans leur domaine d'études. En
                résumé, le forum de l'OFppt constituerait une plateforme dynamique facilitant la communication et
                l'interaction au sein de la communauté éducative et professionnelle affiliée à cet organisme de formation
                au Maroc.
            </p>
        </div>

    <div class="flex items-center justify-center mb-8">
    <a href="test" target="_self" class="mr-4 text-black hover:text-blue-500 transition duration-300 ease-in-out transform hover:scale-105 w-1/3 text-center text-xl font-serif">Filieres mobile</a>
    <a href="test1" target="_self" class="mr-4 text-black hover:text-blue-500 transition duration-300 ease-in-out transform hover:scale-105 w-1/3 text-center text-xl font-serif">Filieres Full Stack</a>
    <a href="test2" target="_self" class="text-black hover:text-blue-500 transition duration-300 ease-in-out transform hover:scale-105 w-1/3 text-center text-xl font-serif">Filieres reseau</a>
    </div>




        <p class="uppercase text-center text-green-600 text-lg font-bold mb-8">
            👇👇Pour l'inscription à notre site, veuillez remplir le formulaire suivant 👇👇:
        </p>

        <form action="{{url('stagiaire')}}" method="post" enctype="multipart/form-data"
            class="w-96 mx-auto text-center bg-white p-8 rounded shadow-md">
            @csrf

            <div class="mb-4">
                @error('nom')
                <div class="text-red-500">{{ $message }}</div>
                @enderror
                <input placeholder="Donner votre nom" type="text" name="nom" value="{{ old('nom') }}"
                    class="w-full p-2 border border-gray-300 rounded">
            </div>

            <div class="mb-4">
                @error('prenom')
                <div class="text-red-500">{{ $message }}</div>
                @enderror
                <input placeholder="Donner votre prenom" type="text" name="prenom" value="{{ old('prenom') }}"
                    class="w-full p-2 border border-gray-300 rounded">
            </div>

            <div class="mb-4">
                @error('age')
                <div class="text-red-500">{{ $message }}</div>
                @enderror
                <input placeholder="Donner votre age" type="number" name="age"
                    class="w-full p-2 border border-gray-300 rounded">
            </div>

            <div class="mb-4">
                @error('ville')
                <div class="text-red-500">{{ $message }}</div>
                @enderror
                <input placeholder="Donner votre ville" type="text" name="ville"
                    class="w-full p-2 border border-gray-300 rounded">
            </div>

            <div class="mb-4">
                @error('date')
                <div class="text-red-500">{{ $message }}</div>
                @enderror
                <input placeholder="Donner votre date de naissance" type="date" name="date"
                    class="w-full p-2 border border-gray-300 rounded">
            </div>

            <div class="mb-4">
                @error('email')
                <div class="text-red-500">{{ $message }}</div>
                @enderror
                <input placeholder="Donner votre adresse e-mail" type="email" name="email"
                    class="w-full p-2 border border-gray-300 rounded">
            </div>

            <div class="mb-4">
                @error('mdp')
                <div class="text-red-500">{{ $message }}</div>
                @enderror
                <input placeholder="Donner votre mot de passe" type="password" name="mdp"
                    class="w-full p-2 border border-gray-300 rounded">
            </div>

            <div class="mb-4">
                @error('mdp_confirmation')
                <div class="text-red-500">{{ $message }}</div>
                @enderror
                <input placeholder="Répétez le mot de passe" type="password" name="mdp_confirmation"
                    class="w-full p-2 border border-gray-300 rounded">
            </div>

            <div class="mb-4">
                @error('cv')
                <div class="text-red-500">{{ $message }}</div>
                @enderror
                <label for="cv" class="block mb-2">CV:</label>
                <input type="file" name="cv" class="w-full border border-gray-300 rounded p-2">
            </div>

            <div class="flex justify-center mt-4">
                <input type="submit" value="Valider" class="bg-green-500 text-white px-4 py-2 rounded mr-2">
                <input type="reset" value="Réinitialiser" class="bg-gray-300 px-4 py-2 rounded">
            </div>

        </form>
    </div>
</body>

</html>
