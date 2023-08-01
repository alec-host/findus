<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Stocking QR Code - Sign In</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- TailwindCSS -->
        <script src="https://cdn.tailwindcss.com"></script>

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">

        <!-- This is the dashboard component -->
        <div>
            <nav class="bg-white border-b border-gray-200 fixed z-30 w-full">
                <div class="px-3 py-3 lg:px-5 lg:pl-3">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center justify-start">
                        <button id="toggleSidebarMobile" aria-expanded="true" aria-controls="sidebar" class="lg:hidden mr-2 text-gray-600 hover:text-gray-900 cursor-pointer p-2 hover:bg-gray-100 focus:bg-gray-100 focus:ring-2 focus:ring-gray-100 rounded">
                            <svg id="toggleSidebarMobileHamburger" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                            </svg>
                            <svg id="toggleSidebarMobileClose" class="w-6 h-6 hidden" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <a href="/" class="text-xl font-bold flex items-center lg:ml-2.5">
                        <img src="https://demo.themesberg.com/windster/images/logo.svg" class="h-6 mr-2" alt="QRCodeStocking Logo">
                        <span class="self-center whitespace-nowrap">QRCodeStock</span>
                        </a>
                        <form action="#" method="GET" class="hidden lg:block lg:pl-32">
                            <label for="topbar-search" class="sr-only">Search</label>
                            <div class="mt-1 relative lg:w-64">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input type="text" name="email" id="topbar-search" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full pl-10 p-2.5" placeholder="Search">
                            </div>
                        </form>
                        </div>
                        <div class="flex items-center">
                        <!-- <button id="toggleSidebarMobileSearch" type="button" class="lg:hidden text-gray-500 hover:text-gray-900 hover:bg-gray-100 p-2 rounded-lg">
                            <span class="sr-only">Search</span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                            </svg>
                        </button> -->
                        <!-- <div class="hidden lg:flex items-center">
                            <span class="text-base font-normal text-gray-500 mr-5">Open source ❤️</span>
                            <div class="-mb-1">
                                <a class="github-button" href="https://github.com/themesberg/windster-tailwind-css-dashboard" data-color-scheme="no-preference: dark; light: light; dark: light;" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star themesberg/windster-tailwind-css-dashboard on GitHub">Star</a>
                            </div>
                        </div> -->
                        <!-- <a href="https://demo.themesberg.com/windster/pricing/" class="hidden sm:inline-flex ml-5 text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center items-center mr-3">
                            <svg class="svg-inline--fa fa-gem -ml-1 mr-2 h-4 w-4" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="gem" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path fill="currentColor" d="M378.7 32H133.3L256 182.7L378.7 32zM512 192l-107.4-141.3L289.6 192H512zM107.4 50.67L0 192h222.4L107.4 50.67zM244.3 474.9C247.3 478.2 251.6 480 256 480s8.653-1.828 11.67-5.062L510.6 224H1.365L244.3 474.9z"></path>
                            </svg>
                            Upgrade to Pro
                        </a> -->
                        </div>
                    </div>
                </div>
            </nav>
            <div class="flex overflow-hidden bg-white pt-16">
                <aside id="sidebar" class="fixed hidden z-20 h-full top-0 left-0 pt-16 flex lg:flex flex-shrink-0 flex-col w-64 transition-width duration-75" aria-label="Sidebar">
                    <div class="relative flex-1 flex flex-col min-h-0 border-r border-gray-200 bg-white pt-0">
                        <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
                        <div class="flex-1 px-3 bg-white divide-y space-y-1">
                            <ul class="space-y-2 pb-2">
                                <li>
                                    <form action="#" method="GET" class="lg:hidden">
                                    <label for="mobile-search" class="sr-only">Search</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                                            </svg>
                                        </div>
                                        <input type="text" name="email" id="mobile-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-600 focus:ring-cyan-600 block w-full pl-10 p-2.5" placeholder="Search">
                                    </div>
                                    </form>
                                </li>
                                <li>
                                    <a href="/client-dashboard" class="text-base text-gray-900 font-normal rounded-lg flex items-center p-2 hover:bg-gray-100 group">
                                    <svg class="w-6 h-6 text-gray-500 group-hover:text-gray-900 transition duration-75" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                        <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                                    </svg>
                                    <span class="ml-3">Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/inventory"  class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 flex items-center p-2 group ">
                                    <svg class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-900 transition duration-75" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                                    </svg>
                                    <span class="ml-3 flex-1 whitespace-nowrap">Products</span>
                                    <!-- <span class="bg-gray-200 text-gray-800 ml-3 text-sm font-medium inline-flex items-center justify-center px-2 rounded-full">Pro</span> -->
                                    </a>
                                </li>
                                <li>
                                    <a href="/sales"  class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 flex items-center p-2 group ">
                                    <svg class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-900 transition duration-75" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                                    </svg>
                                    <span class="ml-3 flex-1 whitespace-nowrap">Sales</span>
                                    <!-- <span class="bg-gray-200 text-gray-800 ml-3 text-sm font-medium inline-flex items-center justify-center px-2 rounded-full">Pro</span> -->
                                    </a>
                                </li>
                            </ul>
                            <div class="space-y-2 pt-2">
                                <a href="/client-reports"  class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 group transition duration-75 flex items-center p-2">
                                    <svg class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-900 transition duration-75" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                                    <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="ml-3">Reports</span>
                                </a>
                                <a href="/client-reports"  class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 group transition duration-75 flex items-center p-2">
                                    <svg class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-900 transition duration-75" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                                    <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="ml-3">Staff</span>
                                </a><a href="/client-reports"  class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 group transition duration-75 flex items-center p-2">
                                    <svg class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-900 transition duration-75" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                                    <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="ml-3">Settings</span>
                                </a>
                            </div>
                        </div>
                        </div>
                    </div>
                </aside>
                <div class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop"></div>
                <div id="main-content" class="h-full w-full bg-gray-50 relative overflow-y-auto lg:ml-64">
                    <main>
                    
                        <div class="container mx-auto px-5 bg-white">
                            <div class="flex lg:flex-row flex-col-reverse shadow-lg">
                                <!-- left section -->
                                <div class="w-full lg:w-3/5 min-h-screen shadow-lg">
                                <!-- header -->
                                <div class="flex flex-row justify-between items-center px-5 mt-5">
                                    <div class="text-gray-800">
                                    <div class="font-bold text-xl">Willice's BQQ Team</div>
                                    <span class="text-xs">Location ID#WILLICE123</span>
                                    </div>
                                    <div class="flex items-center">
                                    <div class="text-sm text-center mr-4">
                                        <div class="font-light text-gray-500">last synced</div>
                                        <span class="font-semibold">3 mins ago</span>
                                    </div>
                                    <div>
                                        <span
                                        class="px-4 py-2 bg-gray-200 text-gray-800 font-semibold rounded"
                                        >
                                        Help
                                        </div>
                                    </span>
                                    </div>
                                </div>
                                <!-- end header -->
                                <!-- categories -->
                                <div class="mt-5 flex flex-row px-5">
                                    <span
                                    class="px-5 py-1 bg-yellow-500 rounded-2xl text-white text-sm mr-4"
                                    >
                                    All items
                                    </span>
                                    <span class="px-5 py-1 rounded-2xl text-sm font-semibold mr-4">
                                    Food
                                    </span>
                                    <span class="px-5 py-1 rounded-2xl text-sm font-semibold mr-4">
                                    Cold Drinks
                                    </span>
                                    <span class="px-5 py-1 rounded-2xl text-sm font-semibold mr-4">
                                    Hot Drinks
                                    </span>
                                </div>
                                <!-- end categories -->
                                <!-- products -->
                                <div class="grid grid-cols-3 gap-4 px-5 mt-5 overflow-y-auto h-3/4">
                                    <div class="px-3 py-3 flex flex-col border border-gray-200 rounded-md h-32 justify-between">
                                    <div>
                                        <div class="font-bold text-gray-800">Griled corn</div>
                                        <span class="font-light text-sm text-gray-400">150g</span>
                                    </div>
                                    <div class="flex flex-row justify-between items-center">
                                        <span class="self-end font-bold text-lg text-yellow-500">KSh 1.75</span>
                                        <img src="https://source.unsplash.com/sc5sTPMrVfk/600x600" class=" h-14 w-14 object-cover rounded-md" alt="">
                                    </div>
                                    </div>
                                    <div class="px-3 py-3 flex flex-col border border-gray-200 rounded-md h-32 justify-between">
                                    <div>
                                        <div class="font-bold text-gray-800">Ranch Burger</div>
                                        <span class="font-light text-sm text-gray-400">150g</span>
                                    </div>
                                    <div class="flex flex-row justify-between items-center">
                                        <span class="self-end font-bold text-lg text-yellow-500">KSh 7.00</span>
                                        <img src="https://source.unsplash.com/sc5sTPMrVfk/600x500" class=" h-14 w-14 object-cover rounded-md" alt="">
                                    </div>
                                    </div>
                                    <div class="px-3 py-3 flex flex-col border border-gray-200 rounded-md h-32 justify-between">
                                    <div>
                                        <div class="font-bold text-gray-800">Pizza Bacon</div>
                                        <span class="font-light text-sm text-gray-400">150g</span>
                                    </div>
                                    <div class="flex flex-row justify-between items-center">
                                        <span class="self-end font-bold text-lg text-yellow-500">KSh 1.75</span>
                                        <img src="https://source.unsplash.com/sc5sTPMrVfk/500x500" class=" h-14 w-14 object-cover rounded-md" alt="">
                                    </div>
                                    </div>
                                    <div class="px-3 py-3 flex flex-col border border-gray-200 rounded-md h-32 justify-between">
                                    <div>
                                        <div class="font-bold text-gray-800">Griled corn</div>
                                        <span class="font-light text-sm text-gray-400">150g</span>
                                    </div>
                                    <div class="flex flex-row justify-between items-center">
                                        <span class="self-end font-bold text-lg text-yellow-500">KSh 1.75</span>
                                        <img src="https://source.unsplash.com/MNtag_eXMKw/600x600" class=" h-14 w-14 object-cover rounded-md" alt="">
                                    </div>
                                    </div>
                                    <div class="px-3 py-3 flex flex-col border border-gray-200 rounded-md h-32 justify-between">
                                    <div>
                                        <div class="font-bold text-gray-800">Griled corn</div>
                                        <span class="font-light text-sm text-gray-400">150g</span>
                                    </div>
                                    <div class="flex flex-row justify-between items-center">
                                        <span class="self-end font-bold text-lg text-yellow-500">KSh 1.75</span>
                                        <img src="https://source.unsplash.com/MNtag_eXMKw/600x600" class=" h-14 w-14 object-cover rounded-md" alt="">
                                    </div>
                                    </div>
                                    <div class="px-3 py-3 flex flex-col border border-gray-200 rounded-md h-32 justify-between">
                                    <div>
                                        <div class="font-bold text-gray-800">Griled corn</div>
                                        <span class="font-light text-sm text-gray-400">150g</span>
                                    </div>
                                    <div class="flex flex-row justify-between items-center">
                                        <span class="self-end font-bold text-lg text-yellow-500">KSh 1.75</span>
                                        <img src="https://source.unsplash.com/MNtag_eXMKw/600x600" class=" h-14 w-14 object-cover rounded-md" alt="">
                                    </div>
                                    </div>
                                    <div class="px-3 py-3 flex flex-col border border-gray-200 rounded-md h-32 justify-between">
                                    <div>
                                        <div class="font-bold text-gray-800">Griled corn</div>
                                        <span class="font-light text-sm text-gray-400">150g</span>
                                    </div>
                                    <div class="flex flex-row justify-between items-center">
                                        <span class="self-end font-bold text-lg text-yellow-500">KSh 1.75</span>
                                        <img src="https://source.unsplash.com/MNtag_eXMKw/600x600" class=" h-14 w-14 object-cover rounded-md" alt="">
                                    </div>
                                    </div>
                                    <div class="px-3 py-3 flex flex-col border border-gray-200 rounded-md h-32 justify-between">
                                    <div>
                                        <div class="font-bold text-gray-800">Griled corn</div>
                                        <span class="font-light text-sm text-gray-400">150g</span>
                                    </div>
                                    <div class="flex flex-row justify-between items-center">
                                        <span class="self-end font-bold text-lg text-yellow-500">KSh 1.75</span>
                                        <img src="https://source.unsplash.com/MNtag_eXMKw/600x600" class=" h-14 w-14 object-cover rounded-md" alt="">
                                    </div>
                                    </div>
                                    <div class="px-3 py-3 flex flex-col border border-gray-200 rounded-md h-32 justify-between">
                                    <div>
                                        <div class="font-bold text-gray-800">Griled corn</div>
                                        <span class="font-light text-sm text-gray-400">150g</span>
                                    </div>
                                    <div class="flex flex-row justify-between items-center">
                                        <span class="self-end font-bold text-lg text-yellow-500">KSh 1.75</span>
                                        <img src="https://source.unsplash.com/MNtag_eXMKw/600x600" class=" h-14 w-14 object-cover rounded-md" alt="">
                                    </div>
                                    </div>
                                    <div class="px-3 py-3 flex flex-col border border-gray-200 rounded-md h-32 justify-between">
                                    <div>
                                        <div class="font-bold text-gray-800">Griled corn</div>
                                        <span class="font-light text-sm text-gray-400">150g</span>
                                    </div>
                                    <div class="flex flex-row justify-between items-center">
                                        <span class="self-end font-bold text-lg text-yellow-500">KSh 1.75</span>
                                        <img src="https://source.unsplash.com/MNtag_eXMKw/600x600" class=" h-14 w-14 object-cover rounded-md" alt="">
                                    </div>
                                    </div>
                                    <div class="px-3 py-3 flex flex-col border border-gray-200 rounded-md h-32 justify-between">
                                    <div>
                                        <div class="font-bold text-gray-800">Griled corn</div>
                                        <span class="font-light text-sm text-gray-400">150g</span>
                                    </div>
                                    <div class="flex flex-row justify-between items-center">
                                        <span class="self-end font-bold text-lg text-yellow-500">KSh 1.75</span>
                                        <img src="https://source.unsplash.com/MNtag_eXMKw/600x600" class=" h-14 w-14 object-cover rounded-md" alt="">
                                    </div>
                                    </div>
                                </div>
                                <!-- end products -->
                                </div>
                                <!-- end left section -->
                                <!-- right section -->
                                <div class="w-full lg:w-2/5">
                                <!-- header -->
                                <div class="flex flex-row items-center justify-between px-5 mt-5">
                                    <div class="font-bold text-xl">Current Order</div>
                                    <div class="font-semibold">
                                    <span class="px-4 py-2 rounded-md bg-red-100 text-red-500">Clear All</span>
                                    <span class="px-4 py-2 rounded-md bg-gray-100 text-gray-800">Setting</span>
                                    </div>
                                </div>
                                <!-- end header -->
                                <!-- order list -->
                                <div class="px-5 py-4 mt-5 overflow-y-auto h-64">
                                    <div class="flex flex-row justify-between items-center mb-4">
                                        <div class="flex flex-row items-center w-2/5">
                                        <img src="https://source.unsplash.com/4u_nRgiLW3M/600x600" class="w-10 h-10 object-cover rounded-md" alt="">
                                        <span class="ml-4 font-semibold text-sm">Stuffed flank steak</span>
                                        </div>
                                        <div class="w-32 flex justify-between">
                                        <span class="px-3 py-1 rounded-md bg-gray-300 ">-</span>
                                        <span class="font-semibold mx-4">2</span>
                                        <span class="px-3 py-1 rounded-md bg-gray-300 ">+</span>
                                        </div>
                                        <div class="font-semibold text-lg w-16 text-center">
                                        KSh 13.50
                                        </div>
                                    </div>             
                                    <div class="flex flex-row justify-between items-center mb-4">
                                        <div class="flex flex-row items-center w-2/5">
                                        <img src="https://source.unsplash.com/sc5sTPMrVfk/600x600" class="w-10 h-10 object-cover rounded-md" alt="">
                                        <span class="ml-4 font-semibold text-sm">Grilled Corn</span>
                                        </div>
                                        <div class="w-32 flex justify-between">
                                        <span class="px-3 py-1 rounded-md bg-gray-300 ">-</span>
                                        <span class="font-semibold mx-4">10</span>
                                        <span class="px-3 py-1 rounded-md bg-gray-300 ">+</span>
                                        </div>
                                        <div class="font-semibold text-lg w-16 text-center">
                                        KSh 3.50
                                        </div>
                                    </div>
                                    <div class="flex flex-row justify-between items-center mb-4">
                                        <div class="flex flex-row items-center w-2/5">
                                        <img src="https://source.unsplash.com/MNtag_eXMKw/600x600" class="w-10 h-10 object-cover rounded-md" alt="">
                                        <span class="ml-4 font-semibold text-sm">Grilled Corn</span>
                                        </div>
                                        <div class="w-32 flex justify-between">
                                        <span class="px-3 py-1 rounded-md bg-gray-300 ">-</span>
                                        <span class="font-semibold mx-4">10</span>
                                        <span class="px-3 py-1 rounded-md bg-gray-300 ">+</span>
                                        </div>
                                        <div class="font-semibold text-lg w-16 text-center">
                                        KSh 3.50
                                        </div>
                                    </div>
                                    <div class="flex flex-row justify-between items-center mb-4">
                                        <div class="flex flex-row items-center w-2/5">
                                        <img src="https://source.unsplash.com/MNtag_eXMKw/600x600" class="w-10 h-10 object-cover rounded-md" alt="">
                                        <span class="ml-4 font-semibold text-sm">Grilled Corn</span>
                                        </div>
                                        <div class="w-32 flex justify-between">
                                        <span class="px-3 py-1 rounded-md bg-gray-300 ">-</span>
                                        <span class="font-semibold mx-4">10</span>
                                        <span class="px-3 py-1 rounded-md bg-gray-300 ">+</span>
                                        </div>
                                        <div class="font-semibold text-lg w-16 text-center">
                                        KSh 3.50
                                        </div>
                                    </div> 
                                    <div class="flex flex-row justify-between items-center mb-4">
                                        <div class="flex flex-row items-center w-2/5">
                                        <img src="https://source.unsplash.com/MNtag_eXMKw/600x600" class="w-10 h-10 object-cover rounded-md" alt="">
                                        <span class="ml-4 font-semibold text-sm">Ranch Burger</span>
                                        </div>
                                        <div class="w-32 flex justify-between">
                                        <span class="px-3 py-1 rounded-md bg-red-300 text-white">x</span>
                                        <span class="font-semibold mx-4">1</span>
                                        <span class="px-3 py-1 rounded-md bg-gray-300 ">+</span>
                                        </div>
                                        <div class="font-semibold text-lg w-16 text-center">
                                        KSh 2.50
                                        </div>
                                    </div> 
                                    <div class="flex flex-row justify-between items-center mb-4">
                                        <div class="flex flex-row items-center w-2/5">
                                        <img src="https://source.unsplash.com/4u_nRgiLW3M/600x600" class="w-10 h-10 object-cover rounded-md" alt="">
                                        <span class="ml-4 font-semibold text-sm">Ranch Burger</span>
                                        </div>
                                        <div class="w-32 flex justify-between">
                                        <span class="px-3 py-1 rounded-md bg-red-300 text-white">x</span>
                                        <span class="font-semibold mx-4">1</span>
                                        <span class="px-3 py-1 rounded-md bg-gray-300 ">+</span>
                                        </div>
                                        <div class="font-semibold text-lg w-16 text-center">
                                        KSh 2.50
                                        </div>
                                    </div>            
                                </div>
                                <!-- end order list -->
                                <!-- totalItems -->
                                <div class="px-5 mt-5">
                                    <div class="py-4 rounded-md shadow-lg">
                                    <div class=" px-4 flex justify-between ">
                                        <span class="font-semibold text-sm">Subtotal</span>
                                        <span class="font-bold">KSh 35.25</span>
                                    </div>
                                    <div class=" px-4 flex justify-between ">
                                        <span class="font-semibold text-sm">Discount</span>
                                        <span class="font-bold">- KSh 5.00</span>
                                    </div>
                                    <div class=" px-4 flex justify-between ">
                                        <span class="font-semibold text-sm">Sales Tax</span>
                                        <span class="font-bold">KSh 2.25</span>
                                    </div>
                                    <div class="border-t-2 mt-3 py-2 px-4 flex items-center justify-between">
                                        <span class="font-semibold text-2xl">Total</span>
                                        <span class="font-bold text-2xl">KSh 37.50</span>
                                    </div>
                                    </div>
                                </div>
                                <!-- end total -->
                                <!-- cash -->
                                <div class="px-5 mt-5">
                                    <div class="rounded-md shadow-lg px-4 py-4">
                                    <div class="flex flex-row justify-between items-center">
                                        <div class="flex flex-col">
                                        <span class="uppercase text-xs font-semibold">cashless credit</span>
                                        <span class="text-xl font-bold text-yellow-500">KSh 32.50</span>
                                        <span class=" text-xs text-gray-400 ">Available</span>
                                        </div>
                                        <div class="px-4 py-3 bg-gray-300 text-gray-800 rounded-md font-bold"> Cancel</div>
                                    </div>
                                    </div>
                                </div>
                                <!-- end cash -->
                                <!-- button pay-->
                                <div class="px-5 mt-5">
                                    <div class="px-4 py-4 rounded-md shadow-lg text-center bg-yellow-500 text-white font-semibold">
                                    Pay With Cashless Credit
                                    </div>
                                </div>
                                <!-- end button pay -->
                                </div>
                                <!-- end right section -->
                            </div>
                        </div>

                    </main>
                    <footer class="bg-white md:flex md:items-center md:justify-between shadow rounded-lg p-4 md:p-6 xl:p-8 my-6 mx-4">
                        <ul class="flex items-center flex-wrap mb-6 md:mb-0">
                        <li><a href="#" class="text-sm font-normal text-gray-500 hover:underline mr-4 md:mr-6">Terms and conditions</a></li>
                        <li><a href="#" class="text-sm font-normal text-gray-500 hover:underline mr-4 md:mr-6">Privacy Policy</a></li>
                        <li><a href="#" class="text-sm font-normal text-gray-500 hover:underline mr-4 md:mr-6">Licensing</a></li>
                        <li><a href="#" class="text-sm font-normal text-gray-500 hover:underline mr-4 md:mr-6">Cookie Policy</a></li>
                        <li><a href="#" class="text-sm font-normal text-gray-500 hover:underline">Contact</a></li>
                        </ul>
                        <div class="flex sm:justify-center space-x-6">
                        <!-- <a href="#" class="text-gray-500 hover:text-gray-900">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-gray-900">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-gray-900">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-gray-900">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-gray-900">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd" />
                            </svg>
                        </a> -->
                        </div>
                    </footer>
                    <p class="text-center text-sm text-gray-500 my-10">
                        &copy; 2023 <a href="https://themesberg.com" class="hover:underline" >QRCodeStock</a>. All rights reserved.
                    </p>
                </div>
            </div>
            <script async defer src="https://buttons.github.io/buttons.js"></script>
            <script src="https://demo.themesberg.com/windster/app.bundle.js"></script>
        </div>


    </body>
</html>
