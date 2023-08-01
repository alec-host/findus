<!-- HEADER -->
@include('landing.partials._header')

<!-- Main Hero Content -->
<div class="container max-w-lg px-4 py-32 mx-auto text-left md:max-w-none md:text-center">
    <h1
        class="text-5xl font-extrabold leading-10 tracking-tight text-left text-gray-900 md:text-center sm:leading-none md:text-6xl lg:text-7xl"
    >
        <span class="inline md:block">Start Tracking Your</span>
        <span
        class="relative mt-2 text-transparent bg-clip-text bg-gradient-to-br from-[#00FD03] to-[#fd00fa] md:inline-block"
        >Pets using Microchips</span
        >
    </h1>
    <div class="mx-auto mt-5 text-gray-500 md:mt-12 md:max-w-lg md:text-center lg:text-lg">
        Register Your pet today!
    </div>
    <div class="flex flex-col items-center mt-12 text-center">
        <span class="relative inline-flex w-full md:w-auto">
        <a
            href="/subscribe"
            class="inline-flex items-center justify-center w-full px-8 py-4 text-base font-bold leading-6 text-white bg-green-500 border border-transparent rounded-full md:w-auto hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#00FD03]"
        >
            Register Your Pet Now
        </a>
        <span
            class="absolute top-0 right-0 px-2 py-1 -mt-3 -mr-6 text-xs font-medium leading-tight text-white bg-green-600 rounded-full"
            >only KES 500</span
        >
        </span>
        <!-- <a href="#" class="mt-3 text-sm text-indigo-500">Learn More</a> -->
    </div>
</div>
<!-- End Main Hero Content -->

<!-- ====== Search Section Start -->
<section
class="
bg-white
pt-20
lg:pt-[120px]
pb-12
lg:pb-[90px]
relative
z-20
overflow-hidden
"
>
<div class="container">
    <div class="ml-[3%]">
        <div class="flex flex-wrap">
            <div class="w-full px-4">
                <div class="text-center mx-auto mb-[60px] lg:mb-20 max-w-[510px]">
                <span class="font-semibold text-lg text-primary mb-2 block">
                Search
                </span>
                <h2
                    class="
                    font-bold
                    text-3xl
                    sm:text-4xl
                    md:text-[40px]
                    text-dark
                    mb-4
                    "
                    >
                    Search a pet
                </h2>
                <p class="text-base text-body-color">
                    1 in 3 pets go missing during their lifetime, and without proper ID, 90% never return home. 
                </p>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap justify-center ">
            <div class="w-full px-4">
                <!-- This is an example component -->
                <div class="max-w-2xl mx-auto">

                    <form>
                        <label for="default-search" class="mb-2 text-lg font-medium text-black">Search microchip number: </label>
                        <div class="relative">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                            </div>
                            <input type="search" id="default-search" class="block p-4 pl-10 w-full text-sm text-gray-900 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500" placeholder="Search microchip number..." required>
                            <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-green-500 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">Search</button>
                        </div>
                    </form>

                    <p class="mt-5">
                        A microchip for dogs & cats gives the best protection with permanent ID that can never be removed or become impossible to read.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- ====== Search Section End -->

<!-- ====== Our services Section Start -->
<section
class="
bg-white
pt-20
lg:pt-[120px]
pb-12
lg:pb-[90px]
relative
z-20
overflow-hidden
"
>
<div class="container">
    <div class="mx-auto px-4 sm:px-8 py-2 text-center">

        {{-- <div class="text-center max-w-lg mx-auto mt-6">
          <div class="h-4 w-40 block mx-auto rounded-sm">
            <span class="font-semibold text-lg text-primary mb-2 block">
                Services
            </span>
          </div>
          <div class="h-2 w-full mt-4 block mx-auto rounded-sm mb-6">
            <h2
                class="
                font-bold
                text-3xl
                sm:text-4xl
                md:text-[40px]
                text-dark
                mb-12
                "
                >
                Our Services
            </h2>
          </div>
        </div> --}}
        <div class="flex flex-wrap">
            <div class="w-full px-4">
                <div class="text-center mx-auto mb-[60px] lg:mb-20 max-w-[510px]">
                <span class="font-semibold text-lg text-primary mb-2 block">
                Services
                </span>
                <h2
                    class="
                    font-bold
                    text-3xl
                    sm:text-4xl
                    md:text-[40px]
                    text-dark
                    mb-4
                    "
                    >
                    We Provide Quality Services
                </h2>
                <p class="text-base text-body-color">
                    All new and existing pet microchips can be stored, maintained and
                    accessed on Finduschipus Animal Database and managed through our Web App.
                </p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-6 gap-4 items-start mt-8 mx-auto px-8">

          <div class="col-span-6 sm:col-span-6 md:col-span-3 lg:col-span-2 xl:col-span-2">

            <div class="max-w-sm bg-white shadow-lg rounded-lg overflow-hidden my-4">
                <img class="w-full h-56 object-cover object-center" src="/logo.png" alt="avatar">
                <div class="py-4 px-6">
                    <h1 class="text-2xl font-semibold text-gray-800">PETS DATABASE</h1>
                    <p class="py-2 text-lg text-gray-700">
                        Our microchip contains a unique number. This number then links to our Animal Database
                        which holds the owner’s contact details.
                    </p>
                    {{-- <div class="flex items-center mt-4 text-gray-700">
                        <svg class="h-6 w-6 fill-current" viewBox="0 0 512 512">
                            <path d="M239.208 343.937c-17.78 10.103-38.342 15.876-60.255 15.876-21.909 0-42.467-5.771-60.246-15.87C71.544 358.331 42.643 406 32 448h293.912c-10.639-42-39.537-89.683-86.704-104.063zM178.953 120.035c-58.479 0-105.886 47.394-105.886 105.858 0 58.464 47.407 105.857 105.886 105.857s105.886-47.394 105.886-105.857c0-58.464-47.408-105.858-105.886-105.858zm0 186.488c-33.671 0-62.445-22.513-73.997-50.523H252.95c-11.554 28.011-40.326 50.523-73.997 50.523z"/><g><path d="M322.602 384H480c-10.638-42-39.537-81.691-86.703-96.072-17.781 10.104-38.343 15.873-60.256 15.873-14.823 0-29.024-2.654-42.168-7.49-7.445 12.47-16.927 25.592-27.974 34.906C289.245 341.354 309.146 364 322.602 384zM306.545 200h100.493c-11.554 28-40.327 50.293-73.997 50.293-8.875 0-17.404-1.692-25.375-4.51a128.411 128.411 0 0 1-6.52 25.118c10.066 3.174 20.779 4.862 31.895 4.862 58.479 0 105.886-47.41 105.886-105.872 0-58.465-47.407-105.866-105.886-105.866-37.49 0-70.427 19.703-89.243 49.09C275.607 131.383 298.961 163 306.545 200z"/></g>
                        </svg>
                        <h1 class="px-2 text-sm">MerakiTeam</h1>
                    </div>
                    <div class="flex items-center mt-4 text-gray-700">
                        <svg class="h-6 w-6 fill-current" viewBox="0 0 512 512">
                            <path d="M256 32c-88.004 0-160 70.557-160 156.801C96 306.4 256 480 256 480s160-173.6 160-291.199C416 102.557 344.004 32 256 32zm0 212.801c-31.996 0-57.144-24.645-57.144-56 0-31.357 25.147-56 57.144-56s57.144 24.643 57.144 56c0 31.355-25.148 56-57.144 56z"/>
                        </svg>
                        <h1 class="px-2 text-sm">California</h1>
                    </div>
                    <div class="flex items-center mt-4 text-gray-700">
                        <svg class="h-6 w-6 fill-current" viewBox="0 0 512 512">
                            <path d="M437.332 80H74.668C51.199 80 32 99.198 32 122.667v266.666C32 412.802 51.199 432 74.668 432h362.664C460.801 432 480 412.802 480 389.333V122.667C480 99.198 460.801 80 437.332 80zM432 170.667L256 288 80 170.667V128l176 117.333L432 128v42.667z"/>
                        </svg>
                        <h1 class="px-2 text-sm">patterson@example.com</h1>
                    </div> --}}
                </div>
                <div class="flex items-center px-6 py-3 bg-gray-900">
                    {{-- <svg class="h-6 w-6 text-white fill-current" viewBox="0 0 512 512">
                        <path d="M256 48C150 48 64 136.2 64 245.1v153.3c0 36.3 28.6 65.7 64 65.7h64V288h-85.3v-42.9c0-84.7 66.8-153.3 149.3-153.3s149.3 68.5 149.3 153.3V288H320v176h64c35.4 0 64-29.3 64-65.7V245.1C448 136.2 362 48 256 48z"/>
                    </svg> --}}
                    <a href="/subscribe" class="mx-3 text-white font-semibold text-lg text-center ml-[33%]">Sign in</a>
                </div>
            </div>
        </div>


        <div class="col-span-6 sm:col-span-6 md:col-span-3 lg:col-span-2 xl:col-span-2">
            <div class="max-w-sm bg-white shadow-lg rounded-lg overflow-hidden my-4">
                <img class="w-full h-56 object-cover object-center" src="/logo.png" alt="avatar">
                <div class="py-4 px-6">
                    <h1 class="text-2xl font-semibold text-gray-800">PET TRACKING</h1>
                    <p class="py-2 text-lg text-gray-700">
                        The microchip is registered to the implanting practice at the time of delivery so the microchip is traceable to the pet at all times.
                    </p>
                    {{-- <div class="flex items-center mt-4 text-gray-700">
                        <svg class="h-6 w-6 fill-current" viewBox="0 0 512 512">
                            <path d="M239.208 343.937c-17.78 10.103-38.342 15.876-60.255 15.876-21.909 0-42.467-5.771-60.246-15.87C71.544 358.331 42.643 406 32 448h293.912c-10.639-42-39.537-89.683-86.704-104.063zM178.953 120.035c-58.479 0-105.886 47.394-105.886 105.858 0 58.464 47.407 105.857 105.886 105.857s105.886-47.394 105.886-105.857c0-58.464-47.408-105.858-105.886-105.858zm0 186.488c-33.671 0-62.445-22.513-73.997-50.523H252.95c-11.554 28.011-40.326 50.523-73.997 50.523z"/><g><path d="M322.602 384H480c-10.638-42-39.537-81.691-86.703-96.072-17.781 10.104-38.343 15.873-60.256 15.873-14.823 0-29.024-2.654-42.168-7.49-7.445 12.47-16.927 25.592-27.974 34.906C289.245 341.354 309.146 364 322.602 384zM306.545 200h100.493c-11.554 28-40.327 50.293-73.997 50.293-8.875 0-17.404-1.692-25.375-4.51a128.411 128.411 0 0 1-6.52 25.118c10.066 3.174 20.779 4.862 31.895 4.862 58.479 0 105.886-47.41 105.886-105.872 0-58.465-47.407-105.866-105.886-105.866-37.49 0-70.427 19.703-89.243 49.09C275.607 131.383 298.961 163 306.545 200z"/></g>
                        </svg>
                        <h1 class="px-2 text-sm">MerakiTeam</h1>
                    </div>
                    <div class="flex items-center mt-4 text-gray-700">
                        <svg class="h-6 w-6 fill-current" viewBox="0 0 512 512">
                            <path d="M256 32c-88.004 0-160 70.557-160 156.801C96 306.4 256 480 256 480s160-173.6 160-291.199C416 102.557 344.004 32 256 32zm0 212.801c-31.996 0-57.144-24.645-57.144-56 0-31.357 25.147-56 57.144-56s57.144 24.643 57.144 56c0 31.355-25.148 56-57.144 56z"/>
                        </svg>
                        <h1 class="px-2 text-sm">California</h1>
                    </div>
                    <div class="flex items-center mt-4 text-gray-700">
                        <svg class="h-6 w-6 fill-current" viewBox="0 0 512 512">
                            <path d="M437.332 80H74.668C51.199 80 32 99.198 32 122.667v266.666C32 412.802 51.199 432 74.668 432h362.664C460.801 432 480 412.802 480 389.333V122.667C480 99.198 460.801 80 437.332 80zM432 170.667L256 288 80 170.667V128l176 117.333L432 128v42.667z"/>
                        </svg>
                        <h1 class="px-2 text-sm">patterson@example.com</h1>
                    </div> --}}
                </div>
                <div class="flex items-center px-6 py-3 bg-gray-900">
                    {{-- <svg class="h-6 w-6 text-white fill-current" viewBox="0 0 512 512">
                        <path d="M256 48C150 48 64 136.2 64 245.1v153.3c0 36.3 28.6 65.7 64 65.7h64V288h-85.3v-42.9c0-84.7 66.8-153.3 149.3-153.3s149.3 68.5 149.3 153.3V288H320v176h64c35.4 0 64-29.3 64-65.7V245.1C448 136.2 362 48 256 48z"/>
                    </svg> --}}
                    <a href="/subscribe" class="mx-3 text-white font-semibold text-lg text-center ml-[33%]">Sign in</a>
                </div>
            </div>
        </div>

        <div class="col-span-6 sm:col-span-6 md:col-span-6 lg:col-span-2 xl:col-span-2">
            <div class="max-w-sm bg-white shadow-lg rounded-lg overflow-hidden my-4">
                <img class="w-full h-56 object-cover object-center" src="/logo.png" alt="avatar">
                <div class="py-4 px-6">
                    <h1 class="text-2xl font-semibold text-gray-800">24 HOUR ACCESS</h1>
                    <p class="py-2 text-lg text-gray-700">
                        Pet data must be accessible in order to rehome lost animals.
                        We never close, and data is always available 24/7 via
                        <a href="/">www.finduschipus.co.ke</a>
                        {{-- If any of your pets are chipped
                        with another company’s microchip, we can gladly hold this info in your
                        owner/pet profile along with your Finduschipus protected pets. --}}
                    </p>
                    {{-- <div class="flex items-center mt-4 text-gray-700">
                        <svg class="h-6 w-6 fill-current" viewBox="0 0 512 512">
                            <path d="M239.208 343.937c-17.78 10.103-38.342 15.876-60.255 15.876-21.909 0-42.467-5.771-60.246-15.87C71.544 358.331 42.643 406 32 448h293.912c-10.639-42-39.537-89.683-86.704-104.063zM178.953 120.035c-58.479 0-105.886 47.394-105.886 105.858 0 58.464 47.407 105.857 105.886 105.857s105.886-47.394 105.886-105.857c0-58.464-47.408-105.858-105.886-105.858zm0 186.488c-33.671 0-62.445-22.513-73.997-50.523H252.95c-11.554 28.011-40.326 50.523-73.997 50.523z"/><g><path d="M322.602 384H480c-10.638-42-39.537-81.691-86.703-96.072-17.781 10.104-38.343 15.873-60.256 15.873-14.823 0-29.024-2.654-42.168-7.49-7.445 12.47-16.927 25.592-27.974 34.906C289.245 341.354 309.146 364 322.602 384zM306.545 200h100.493c-11.554 28-40.327 50.293-73.997 50.293-8.875 0-17.404-1.692-25.375-4.51a128.411 128.411 0 0 1-6.52 25.118c10.066 3.174 20.779 4.862 31.895 4.862 58.479 0 105.886-47.41 105.886-105.872 0-58.465-47.407-105.866-105.886-105.866-37.49 0-70.427 19.703-89.243 49.09C275.607 131.383 298.961 163 306.545 200z"/></g>
                        </svg>
                        <h1 class="px-2 text-sm">MerakiTeam</h1>
                    </div>
                    <div class="flex items-center mt-4 text-gray-700">
                        <svg class="h-6 w-6 fill-current" viewBox="0 0 512 512">
                            <path d="M256 32c-88.004 0-160 70.557-160 156.801C96 306.4 256 480 256 480s160-173.6 160-291.199C416 102.557 344.004 32 256 32zm0 212.801c-31.996 0-57.144-24.645-57.144-56 0-31.357 25.147-56 57.144-56s57.144 24.643 57.144 56c0 31.355-25.148 56-57.144 56z"/>
                        </svg>
                        <h1 class="px-2 text-sm">California</h1>
                    </div>
                    <div class="flex items-center mt-4 text-gray-700">
                        <svg class="h-6 w-6 fill-current" viewBox="0 0 512 512">
                            <path d="M437.332 80H74.668C51.199 80 32 99.198 32 122.667v266.666C32 412.802 51.199 432 74.668 432h362.664C460.801 432 480 412.802 480 389.333V122.667C480 99.198 460.801 80 437.332 80zM432 170.667L256 288 80 170.667V128l176 117.333L432 128v42.667z"/>
                        </svg>
                        <h1 class="px-2 text-sm">patterson@example.com</h1>
                    </div> --}}
                </div>
                <div class="flex items-center px-6 py-3 bg-gray-900">
                    {{-- <svg class="h-6 w-6 text-white fill-current" viewBox="0 0 512 512">
                        <path d="M256 48C150 48 64 136.2 64 245.1v153.3c0 36.3 28.6 65.7 64 65.7h64V288h-85.3v-42.9c0-84.7 66.8-153.3 149.3-153.3s149.3 68.5 149.3 153.3V288H320v176h64c35.4 0 64-29.3 64-65.7V245.1C448 136.2 362 48 256 48z"/>
                    </svg> --}}
                    <a href="/subscribe" class="mx-3 text-white font-semibold text-lg text-center ml-[33%]">Sign in</a>
                </div>
            </div>
        </div>

        </div>
    </div>
</div>
</section>
<!-- ====== Our services Section End -->

<!-- ====== Important Links Section Start -->
<section
class="
bg-white
pt-20
lg:pt-[120px]
pb-12
lg:pb-[90px]
relative
z-20
overflow-hidden
"
>
<div class="container">
    <div class="ml-[3%]">
        <div class="flex flex-wrap">
            <div class="w-full px-4">
                <div class="text-center mx-auto mb-[60px] lg:mb-20 max-w-[510px]">
                <span class="font-semibold text-lg text-primary mb-2 block">
                Links
                </span>
                <h2
                    class="
                    font-bold
                    text-3xl
                    sm:text-4xl
                    md:text-[40px]
                    text-dark
                    mb-4
                    "
                    >
                    Important Links
                </h2>
                <p class="text-base text-body-color">
                    Our partners
                </p>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap justify-center ">
            <div class="w-full px-4">
                <ul class="nav-link">
                    <li><a href="https://kspca-kenya.org" class="text-blue-500" target="_blank">KSPCA Kenya - KENYA SOCIETY FOR THE PROTECTION &amp; CARE OF ANIMALS</a></li>
                    <li><a href="https://kenyavetboard.or.ke" class="text-blue-500" target="_blank">KENYA VETERINARY BOARD</a></li>
                    <li><a href="https://kenyavetassociation.com" class="text-blue-500" target="_blank">Kenya Veterinary Association</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
</section>
<!-- ====== Important Links Section End -->

<!-- FOOTER -->
@include('landing.partials._footer')