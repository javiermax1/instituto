<header class="h-header bg-header flex flex-row justify-between items-center p-3">

    <img class="max-h-full" src="{{asset("/img/logo.png")}}" alt="logo">

    <h1 class="text-5xl text-titulo">{{__("GESTION DE INSTITUTO")}}</h1>
    <div class="space-x-2">
        <select name="lang" id="">
            {{--<option value="">Español</option>
            <option value="">Inglés</option>--}}
            @foreach(config("langs") as $lang=>$details)
                <option value="{{$lang}}">{{$details['flag']}}</option>
            @endforeach
        </select>
        @guest
            <a href="{{route("login")}}">
                <button class="btn btn-sm btn-primary">{{__("Login")}}</button>
            </a>
            <a href="{{route("register")}}">
                <button class="btn btn-sm btn-primary">{{__("Register")}}</button>
            </a>

        @endguest
        @auth
            <div class="div div-col justify-center items-center w-60 ">
                <div class="avatar p-6 space-x-18  flex justify-center items-center  ">
                    <div class="ring-primary ring-offset-base-100 w-16 rounded-full ring-2 ring-offset-2">
                        <img src="https://img.daisyui.com/images/profile/demo/superperson@192.webp"/>
                    </div>
                    <span class="text-green-800 text-3xl">{{auth()->user()->name}}</span>
                </div>
                <form action="{{route("logout")}}" method="POST" >
                    @csrf
                    <button class="btn btn-primary " type="submit">Logout</button>
                </form>
            </div>

        @endauth
    </div>

</header>
