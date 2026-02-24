<header class="h-header bg-header flex flex-row justify-between items-center p-4" >
    <img class="max-h-full" src="{{asset("/img/logo.png")}}" alt="logo">
    <h1 class="text-6xl text-blue-800 text-titulo">Gestión de Instituto</h1>
    @guest()
    <div class="space-x-2">
        <a href="{{route("login")}}"><button class="btn btn-md btn-primary">Login</button></a>
        <a href="{{route("register")}}"><button class="btn btn-md btn-primary">Register</button></a>
    </div>
    @endguest
    @auth
    {{auth()->user()->name}}
        <form action="{{route('logout')}}" method="POST">
            @csrf
            <button>Log out</button>
        </form>
    @endauth

</header>
