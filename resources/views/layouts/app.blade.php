<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
    <link rel="icon" type="image/png" href="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/4a3a2814-29b6-4424-8456-b405bba91235/dawbaoa-b482f66b-a6dd-4d80-8624-cb78aa0211af.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzRhM2EyODE0LTI5YjYtNDQyNC04NDU2LWI0MDViYmE5MTIzNVwvZGF3YmFvYS1iNDgyZjY2Yi1hNmRkLTRkODAtODYyNC1jYjc4YWEwMjExYWYucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.NhYxhWpHxSsHS6htcEzvCh1xDp297P-f8291Q8Gqmn4">
    <title>
        @yield('title')
    </title>


    @vite('resources/js/app.js')

</head>

<body>
    <header class="d-flex align-items-center container justify-content-between">
        <h1>
            DC Comics
        </h1>

        <a href="{{ route('comics.create')}} " class="btn btn-primary">Crea una nuova riga</a>

        <a href="{{ route('comics.index') }}" class="btn btn-success">Torna Alla Admin Home</a>
    </header>

    <main>
        @yield('main-content')
    </main>
    
</body>
</html>