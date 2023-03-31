<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.0/dist/cdn.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>
  <div class="md:flex">

    <!-- sidebar -->
    <div class="sidebar max-h-screen top-0 h-screen bg-gray-800 text-blue-100 w-64 fixed inset-y-0 left-0 transform transition duration-200 ease-in-out z-50" x-data="{ open: true }" x-on:togglesidebar.window=" open = !open" x-show="true" :class="open === true ? 'md:translate-x-0 md:sticky ':'-translate-x-full' ">


      <header class=" h-[64px] py-2 shadow-lg px-4 md:sticky top-0 bg-gray-800 z-40 flex justify-center">
        <!-- logo -->
        <a href="#" class="text-white flex items-center space-x-2 group hover:text-white">

          <div class="text-center">
            <span class="text-2xl font-extrabold">DATABASE</span>
            <span class="text-xs block">Siswa</span>
          </div>
        </a>
      </header>


      <!-- nav -->
      <nav class="px-4 pt-4 scroller overflow-y-scroll max-h-[calc(100vh-64px)]" x-data="{selected:'Tasks'}">
        <ul class="flex flex-col space-y-2">

          <!-- ITEM -->
          <li class="text-sm text-gray-500 ">
            <a href="{{ url('/') }}" class="flex items-center w-full py-1 px-2 rounded relative hover:text-white hover:bg-gray-700 ">
              <div class="pr-2">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
              </div>
              <div>Dashboard </div>
            </a>
          </li>

          <!-- Section Devider -->
          <div class="section border-b pt-4 mb-4 text-xs text-gray-600 border-gray-700 pb-1 pl-3">
            CRUD
          </div>

          <!-- ITEM -->
          <li class="text-sm text-gray-500 ">
            <a href="{{ route('categories.index') }}" class="flex items-center w-full py-1 px-2 rounded relative hover:text-white hover:bg-gray-700 ">
              <div class="pr-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                  <path d="M2 3a1 1 0 00-1 1v1a1 1 0 001 1h16a1 1 0 001-1V4a1 1 0 00-1-1H2z" />
                  <path fill-rule="evenodd" d="M2 7.5h16l-.811 7.71a2 2 0 01-1.99 1.79H4.802a2 2 0 01-1.99-1.79L2 7.5zM7 11a1 1 0 011-1h4a1 1 0 110 2H8a1 1 0 01-1-1z" clip-rule="evenodd" />
                </svg>

              </div>
              <div>Categories </div>
            </a>
          </li>

          <!-- ITEM -->
          <li class="text-sm text-gray-500 ">
            <a href="{{ route('groups.index') }}" class="flex items-center w-full py-1 px-2 rounded relative hover:text-white hover:bg-gray-700 ">
              <div class="pr-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 01-1.125-1.125v-3.75zM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-8.25zM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-2.25z" />
                </svg>
              </div>
              <div>Groups</div>
            </a>
          </li>

          <li class="text-sm text-gray-500 ">
            <a href="{{ route('units.index') }}" class="flex items-center w-full py-1 px-2 rounded relative hover:text-white hover:bg-gray-700 ">
              <div class="pr-2">
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                </svg>
              </div>
              <div>Units</div>
            </a>
          </li>

          <li class="text-sm text-gray-500 ">
            <a href="{{ route('entryYears.index') }}" class="flex items-center w-full py-1 px-2 rounded relative hover:text-white hover:bg-gray-700 ">
              <div class="pr-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                  <path fill-rule="evenodd" d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z" clip-rule="evenodd" />
                </svg>


              </div>
              <div>Tahun Masuk</div>
            </a>
          </li>

          <li class="text-sm text-gray-500 ">
            <a href="{{ route('students.index') }}" class="flex items-center w-full py-1 px-2 rounded relative hover:text-white hover:bg-gray-700 ">
              <div class="pr-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                  <path d="M10 8a3 3 0 100-6 3 3 0 000 6zM3.465 14.493a1.23 1.23 0 00.41 1.412A9.957 9.957 0 0010 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 00-13.074.003z" />
                </svg>
              </div>
              <div>Students</div>
            </a>
          </li>

        </ul>
      </nav>


    </div>
    <!-- End sidebar -->


    <!-- content -->
    <div class="flex-1 flex-col flex">

      <!-- Top navbar -->
      <nav class="bg-gray-800 shadow-xl sticky w-full top-0 text-black z-50" x-data="{ mobilemenue: false }">
        <div class="mx-auto ">
          <div class="flex items-stretch justify-between h-16">

            <div class="flex items-center md:hidden">
              <div class="-mr-2 flex" x-data>
                <!-- Mobile menu button -->
                <button type="button" @click="$dispatch('togglesidebar')" class="bg-gray-800 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                  <span class="sr-only">Open main menu</span>

                  <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                  </svg>

                  <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                  </svg>
                </button>
              </div>
            </div>

            <div class="flex items-center pl-6">
              <div class="flex-shrink-0 md:hidden">

                <a href="#" class="text-white flex items-center space-x-2 group">


                  <div class="text-center">
                    <span class="text-2xl font-extrabold">DATABASE</span>
                    <span class="text-xs block">Siswa</span>
                  </div>
                </a>
              </div>

              <!-- toggel sidebar -->
              <div class="text-white cursor-pointer hidden md:block" @click="$dispatch('togglesidebar')">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                </svg>
              </div>



            </div>
            <div class="hidden md:flex items-stretch">
              <!-- Profile Menu DT -->
              <div class="ml-4 flex md:ml-6 ">


                <!-- Profile dropdown -->
                <div class="relative bg-gray-700 px-4 text-gray-400 hover:text-white text-sm cursor-pointer" x-data="{open: false}">
                  <div class="flex items-center min-h-full" @click="open = !open">

                    <div class="max-w-xs bg-gray-800 rounded-full flex items-center text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                      <span class="sr-only">Open user menu</span>
                      <img class="h-8 w-8 rounded-full" src="https://assets.codepen.io/3321250/internal/avatars/users/default.png?fit=crop&format=auto&height=512&version=1646800353&width=512" alt="">
                    </div>

                    <div class="flex flex-col ml-4">
                      <span>Fares Arnous</span>
                      <span>Admin</span>
                    </div>
                  </div>

                  <div x-show="open" @click.away="open = false" class="origin-top-right absolute right-0 mt-0 min-w-full rounded-b-md shadow py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem" tabindex="-1" id="user-menu-item-0">My Profile</a>

                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem" tabindex="-1" id="user-menu-item-1">Projects</a>

                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem" tabindex="-1" id="user-menu-item-1">Sign
                      out</a>
                  </div>
                </div>

              </div>
            </div>


            <div class="-mr-2 flex md:hidden">
              <!-- Mobile menu button -->
              <button type="button" @click="mobilemenue = !mobilemenue" class="bg-gray-800 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                <span class="sr-only">Open main menu</span>

                <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
          </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="md:hidden absolute bg-gray-800 w-full" id="mobile-menu" x-show="mobilemenue" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" @click.away="mobilemenue = false

                ">
          <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">Dashboard</a>

            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Team</a>
          </div>

          <div class="pt-4 pb-3 border-t border-gray-700">
            <!-- profile menue for mobile -->
            <div class="flex items-center px-5">
              <div class="flex-shrink-0">
                <img class="h-10 w-10 rounded-full" src="https://assets.codepen.io/3321250/internal/avatars/users/default.png?fit=crop&format=auto&height=512&version=1646800353&width=512" alt="">
              </div>
              <div class="ml-3">
                <div class="text-base font-medium leading-none text-white">Tom Cook</div>
                <div class="text-sm font-medium leading-none text-gray-400">tom@example.com</div>
              </div>
              <button type="button" class="ml-auto bg-gray-800 flex-shrink-0 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                <span class="sr-only">View notifications</span>
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                </svg>
              </button>

            </div>
            <div class="mt-3 px-2 space-y-1">
              <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700">Your
                Profile</a>

              <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700">Sign
                out</a>
            </div>
          </div>
        </div>
      </nav>
      <!-- End Top navbar -->



      <main class="bg-[#f3f3f9] mb-auto flex-grow">
        <div class="border-b bg-white border-gray-300 px-3 py-2 shadow-sm  text-xl font-bold min-h-max">
          @if(Request::is('/'))
          <h1 class="text-3xl font-semibold">Dashboard</h1>
          <div class=" flex justify-center items-center min-h-max">
            <div class="flex flex-wrap">
              @foreach($categories as $category)
              <a href="{{ route('views.unit', $category->category) }}" class="m-2 py-6 px-12 bg-slate-200 rounded-lg shadow-lg hover:bg-gray-400 transition duration-300">
                @if($category->category === 'Siswa')
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 m-auto text-slate-900" style="width: 96px; height: 96px;">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                @else
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-slate-900" style="width: 96px; height: 96px;">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                </svg>

                @endif
                <h2 class="text-2xl font-semibold mb-2 text-gray-800 text-center">{{ $category->category }}</h2>
              </a>
              @endforeach
            </div>
          </div>

          @else
          @yield('content')
          @endif
        </div>
      </main>
      <footer class="border-t p-4 pb-3 text-xs bg-gray-100">
        2023 © Design & Develop by Haramain.
      </footer>
    </div>

  </div>


</body>
<script>
  $(document).ready(function() {
    // Hide the success notification when the "Close" button is clicked
    $("#success-close-btn").click(function() {
      $("#success-notification").fadeOut("slow");
    });
  });
</script>

</html>
