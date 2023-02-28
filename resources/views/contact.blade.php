<x-layout :title=$title>
    <div class="relative bg-white mt-8">
    <div class="absolute inset-0">
        <div class="absolute inset-y-0 left-0 w-1/2 bg-gray-50"></div>
    </div>
    <div class="relative mx-auto max-w-7xl lg:grid lg:grid-cols-5">
        <div class="bg-gray-50 py-16 px-6 lg:col-span-2 lg:px-8 lg:py-24 xl:pr-12">
        <div class="mx-auto max-w-lg">
            <h2 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">Contacta amb nosaltres</h2>
            <p class="mt-3 text-lg leading-6 text-gray-500">Si tens qualsevol dubte o vols contactar amb nosaltres, pots fer-ho a través del següent formulari.</p>
            <dl class="mt-8 text-base text-gray-500">
            <div>
                <dt class="sr-only">Adreça</dt>
                <dd>
                <p>Av. de Cristòfol Colom, 34, 42</p>
                <p>43500 Tortosa, Tarragona</p>
                </dd>
            </div>
            <div class="mt-6">
                <dt class="sr-only">Teléfon de contacte</dt>
                <dd class="flex">
                <!-- Heroicon name: outline/phone -->
                <svg class="h-6 w-6 flex-shrink-0 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                </svg>
                <span class="ml-3">+977 40 11 XX</span>
                </dd>
            </div>
            <div class="mt-3">
                <dt class="sr-only">Email</dt>
                <dd class="flex">
                <!-- Heroicon name: outline/envelope -->
                <svg class="h-6 w-6 flex-shrink-0 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                </svg>
                <span class="ml-3">contact@ismasg.es</span>
                </dd>
            </div>
            </dl>
        </div>
        </div>
        <div class="bg-white py-16 px-6 lg:col-span-3 lg:py-24 lg:px-8 xl:pl-12">
        <div class="mx-auto max-w-lg lg:max-w-none">
            <form action="#" method="POST" class="grid grid-cols-1 gap-y-6">
            <div>
                <label for="full-name" class="sr-only">Nom complet</label>
                <input type="text" name="full-name" id="full-name" autocomplete="name" class="block w-full rounded-md border-gray-300 py-3 px-4 placeholder-gray-500 shadow-sm focus:border-blue-500 focus:ring-blue-500" placeholder="Nom complet">
            </div>
            <div>
                <label for="email" class="sr-only">Email</label>
                <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-gray-300 py-3 px-4 placeholder-gray-500 shadow-sm focus:border-blue-500 focus:ring-blue-500" placeholder="Email">
            </div>
            <div>
                <label for="phone" class="sr-only">Telèfon</label>
                <input type="text" name="phone" id="phone" autocomplete="tel" class="block w-full rounded-md border-gray-300 py-3 px-4 placeholder-gray-500 shadow-sm focus:border-blue-500 focus:ring-blue-500" placeholder="Teléfon">
            </div>
            <div>
                <label for="message" class="sr-only">Missatge</label>
                <textarea id="message" name="message" rows="4" class="block w-full rounded-md border-gray-300 py-3 px-4 placeholder-gray-500 shadow-sm focus:border-blue-500 focus:ring-blue-500" placeholder="Missatge"></textarea>
            </div>
            <div>
                <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-blue-600 py-3 px-6 text-base font-medium text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Enviar</button>
            </div>
            </form>
        </div>
        </div>
    </div>
    </div>
</x-layout>