<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LinkedResume</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.svg') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@0;1&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="min-h-screen flex justify-center items-center">

        <div class="absolute inset-0 overflow-hidden bg-primary -top-36">
            <div class="absolute inset-x-0 top-0 h-40 bg-gradient-to-b from-secondary"></div>
            <div class="absolute inset-x-0 bottom-0 h-40 bg-gradient-to-t from-primary"></div>
        </div>

        <div class="absolute inset-0 text-secondary/[0.5] [mask-image:linear-gradient(to_bottom_left,white,transparent,transparent)]">
            <svg class="absolute inset-0 h-full w-full" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="grid-bg" width="32" height="32" patternUnits="userSpaceOnUse" x="100%" patternTransform="translate(0 -1)">
                        <path d="M0 32V.5H32" fill="none" stroke="currentColor"></path>
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#grid-bg)"></rect>
            </svg>
        </div>

        <div class="w-full z-10">
            <div class="mb-4">
                <h1 class="text-4xl font-semibold text-white text-center">LinkedResume</h1>
                <p class="text-white text-center">
                    Donnez vie à votre profil LinkedIn en un clic.<br>
                    Générez un CV professionnel, clair et moderne en quelques instants.
                </p>
            </div>
            
            <div class="px-5">
                <form action="" method="get" class="relative">
                    @csrf

                    <div>
                        <div class="animated-border-box-glow w-full sm:w-xl"></div>
                        <div class="animated-border-box w-full sm:w-xl">
                            <div class="relative">
                                <input type="text" name="profil" placeholder="https://www.linkedin.com/in/..." class="w-full bg-white/[0.1] p-4 border rounded-full outline-none border-none text-primary">
                                <button class="text-primary absolute top-1/2 -translate-y-1/2 right-2 p-2.5 bg-white rounded-full cursor-pointer text-xs">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>

            <div class="swiper cv-slider mt-15">
                <div class="swiper-wrapper">
                    @foreach(range(1,17) as $i)
                    <div class="swiper-slide">
                        <div class="rounded-lg overflow-hidden shadow-md hover:shadow-xl transition-shadow duration-300">
                            <img class="w-full h-full object-cover" src="{{ asset('assets/images/cv/'.$i.'.png') }}" alt="CV Template {{$i}}">
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Add pagination (optional) -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>

    <footer class="absolute bottom-1 left-1/2 -translate-x-1/2 w-full flex flex-col sm:flex-row justify-between sm:items-center border-t border-white/[0.1] py-2 px-3 text-white text-xs">
        <div class="flex items-center gap-2">
            <div class="flex items-center gap-1">
            <span>LinkedResume © {{ date('Y') }}</span></div><span> · </span>
            <div class="flex items-center gap-1"><span class="rounded-sm font-[Instrument_Serif] italic">Crafted by Anani Komlan Mawulom H</span></div>
        </div>
        <div class="flex items-center gap-4">
            <a href="/" rel="noreferrer" target="_blank" class="hover:text-link-hovered focus-visible:shadow-xs-selected rounded-sm focus:outline-hidden">Statut</a>
            <a href="/docs" rel="noreferrer" target="_blank" class="hover:text-link-hovered focus-visible:shadow-xs-selected rounded-sm focus:outline-hidden">Documentation</a>
            <button class="hover:text-link-hovered focus-visible:shadow-xs-selected cursor-pointer rounded-sm focus:outline-hidden">Aide</button>
            <a href="/legal" rel="noreferrer" target="_blank" class="hover:text-link-hovered focus-visible:shadow-xs-selected rounded-sm focus:outline-hidden">Mentions légales</a>
        </div>
    </footer>
</body>

</html>