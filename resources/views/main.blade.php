<x-layouts.layout>
    <div
        class="hero min-h-full "
        style="background-image: url(https://img.daisyui.com/images/stock/photo-1507358522600-9f71e620c44e.webp);"
    >
        {{--<h1 class="text-5xl text-red-700" >{{$param}}</h1>--}}
        <div class="hero-overlay"></div>
        <div class="hero-content text-neutral-content text-center">
            <div class="max-w-md">
                <h1 class="mb-5 text-5xl font-bold">Página Main</h1>
                <p class="mb-5">
                   Usuario conectado ... {{--{{$main}}--}}
                </p>
                <button class="btn btn-primary">Get Started</button>
            </div>
        </div>
    </div>
</x-layouts.layout>
