<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="favicon.ico">
        <title>Tutorial PHP - {{ $title ?? 'Title undefined' }}</title>
        <meta name="description" content="Projecte realitzat per l'alumne de 2n de ASIX, Ismael Semmar, per a la realització del tutorial de PHP.">
        <meta name="keywords" content="HTML, CSS, JavaScript, PHP, Laravel, Tailwind, Blade, MVC">
        <meta name="author" content="Ismael Semmar">
        <!-- Import Tailwind CSS from CDN -->
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
    <div class="min-h-full">
        <!-- Navbar here -->
        <x-navbar/>
        <!-- Content here -->
        <div class="py-10">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex items-center bg-blue-500 text-white text-sm font-bold px-4 py-3 mb-8 rounded-md" role="alert">
                    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
                    <p>Hola, desconegut. Estàs veient la pàgina realitzada per Ismael Semmar durant el curs de Laravel d'Acacha (INSEBRE)</p>
                </div>
                <h1 class="text-3xl font-bold leading-tight tracking-tight text-gray-900">{{ $title ?? 'Title undefined' }} </h1>
            </div>
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </div>
        <!-- Footer -->
        <x-footer/>
    </body>
</html>
