@extends("base")


@section("content")


<h1>Se connecter </h1>
<div class="card">
    <div class="card-body">
        <form action="{{route('auth.login')}}" method="post" class="vstack gap-3">
            @csrf
            <div class="mb-4">
                @error('email')
                <div class="text-red-500">{{ $message }}</div>
                @enderror
                <input placeholder="Donner votre adresse e-mail" type="email" name="email"
                    class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div class="mb-4">
                @error('password')
                <div class="text-red-500">{{ $message }}</div>
                @enderror
                <input placeholder="Donner votre password" type="password" name="pasword"
                    class="w-full p-2 border border-gray-300 rounded">
            </div>

        <button class="btn primary"> Se connecter</button>
        </form>
    </div>



@endsection 