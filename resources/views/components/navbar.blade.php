<nav class="relative px-4 py-4 flex justify-between items-center bg-white dark:bg-gray-900">
  <a class="text-3xl font-bold leading-none" href="#">
    <div class="flex items-center gap-2">
      <img src={{'./assets/img/logo.png'}} alt="logo" width="25" height="25">
      <span class="text-xl text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-cyan-500 dark:from-sky-500 dark:to-cyan-50">Hesecourse.</span>
    </div>
  </a>
  <div class="lg:hidden">
    <button class="navbar-burger flex items-center text-sky-600 p-3">
      <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <title>Mobile menu</title>
        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
      </svg>
    </button>
  </div>
  <ul class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:flex lg:mx-auto lg:items-center lg:w-auto lg:space-x-6">
    <li><a class="text-sm text-gray-600 hover:text-sky-600 dark:text-gray-50 dark:hover:text-gray-600" href="#">Home</a></li>
    <li class="text-gray-300">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
      </svg>
    </li>
    <li><a class="text-sm text-sky-600 font-bold" href="#">About Us</a></li>
    <li class="text-gray-300">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
      </svg>
    </li>
    <li><a class="text-sm text-gray-600 hover:text-sky-600 dark:text-gray-50 dark:hover:text-gray-600" href="#">Services</a></li>
    <li class="text-gray-300">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
      </svg>
    </li>
    <li><a class="text-sm text-gray-600 hover:text-sky-600 dark:text-gray-50 dark:hover:text-gray-600" href="#">Pricing</a></li>
    <li class="text-gray-300">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
      </svg>
    </li>
    <li><a class="text-sm text-gray-600 hover:text-sky-600 dark:text-gray-50 dark:hover:text-gray-600" href="#">Contact</a></li>
  </ul>
  @if (Route::has('login'))
  <div class="hidden lg:flex">
    @auth
    <a href="{{ url('/dashboard') }}" class="hidden lg:inline-block lg:ml-auto lg:mr-3 py-2 px-6 bg-gray-50 hover:bg-gray-100 text-sm text-gray-900 font-bold  rounded-xl transition duration-200" >Dashboard</a>
    @else
    <a href="{{ route('login') }}" class="hidden lg:inline-block lg:ml-auto lg:mr-3 py-2 px-6 bg-gray-50 hover:bg-gray-100 text-sm text-gray-900 font-bold  rounded-xl transition duration-200" >Sign In</a>
    @if (Route::has('register'))
    <a href="{{ route('register') }}" class="hidden lg:inline-block lg:mr-3 py-2 px-6 bg-gradient-to-r from-sky-500 to-cyan-300 hover:bg-sky-600 text-sm text-white font-bold rounded-xl transition duration-200" >Sign up</a>
    @endif
    @endauth
    <button id="toggle-theme" class="hidden lg:flex group relative  h-9 w-9 rounded-full before:absolute before:inset-0 before:rounded-full before:border before:border-gray-200 before:transition-transform before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95 dark:before:border-gray-700">
      <svg xmlns="http://www.w3.org/2000/svg" class="sun hidden dark:block relative transistion m-auto h-5 w-5 fill-gray-500 duration-300 group-hover:rotate-180 group-hover:fill-yellow-600 dark:fill-gray-300 dark:group-hover:fill-yellow-400" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd"></path>
      </svg>
      <svg xmlns="http://www.w3.org/2000/svg" class="moon relative transistion m-auto h-5 w-5 fill-gray-500 duration-300 group-hover:-rotate-90 group-hover:fill-blue-900 dark:fill-gray-300 dark:group-hover:fill-white dark:hidden" viewBox="0 0 20 20" fill="currentColor">
          <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
      </svg>
  </button>
  </div>
  @endif
    
    
  </nav>
{{-- Navbar mobile menu  --}}
<div class="navbar-menu  relative z-50 hidden">
  <div class="navbar-backdrop fixed inset-0 bg-gray-800 dark:bg-gray-600 opacity-25"></div>
  <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white dark:bg-gray-900 border-r overflow-y-auto">
    <div class="flex items-center mb-8">
      <a class="mr-auto text-3xl font-bold leading-none" href="#">
        <div class="flex items-center gap-2">
          <img src={{'./assets/img/logo.png'}} alt="logo" width="25" height="25">
          <span class="text-xl text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-cyan-500 dark:from-sky-500 dark:to-cyan-50">Hesecourse.</span>
        </div>
      </a>
      <button class="navbar-close">
        <svg class="h-6 w-6 text-gray-600 hover:text-sky-600 dark:text-gray-50 cursor-pointer dark:hover:text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
      </button>
    </div>
    <div>
      <ul>
        <li class="mb-1">
          <a class="block p-4 text-sm font-semibold text-gray-600 hover:text-sky-600 hover:bg-sky-50 dark:text-gray-50  dark:hover:text-gray-800 rounded" href="#">Home</a>
        </li>
        <li class="mb-1">
          <a class="block p-4 text-sm font-semibold text-gray-600 hover:text-sky-600 hover:bg-sky-50 dark:text-gray-50  dark:hover:text-gray-800 rounded" href="#">About Us</a>
        </li>
        <li class="mb-1">
          <a class="block p-4 text-sm font-semibold text-gray-600 hover:text-sky-600 hover:bg-sky-50 dark:text-gray-50  dark:hover:text-gray-800 rounded" href="#">Services</a>
        </li>
        <li class="mb-1">
          <a class="block p-4 text-sm font-semibold text-gray-600 hover:text-sky-600 hover:bg-sky-50 dark:text-gray-50  dark:hover:text-gray-800 rounded" href="#">Pricing</a>
        </li>
        <li class="mb-1">
          <a class="block p-4 text-sm font-semibold text-gray-600 hover:text-sky-600 hover:bg-sky-50 dark:text-gray-50  dark:hover:text-gray-800 rounded" href="#">Contact</a>
        </li>
      </ul>
    </div>
    <div class="mt-auto">
      <div class="pt-6">
        <a class="block px-4 py-3 mb-3 leading-loose text-xs text-center font-semibold  bg-gray-50 hover:bg-gray-100 rounded-xl" href="#">Sign in</a>
        <a class="block px-4 py-3 mb-2 leading-loose text-xs text-center text-white font-semibold bg-gradient-to-r from-sky-500 to-cyan-300 hover:bg-sky-700  rounded-xl" href="#">Sign Up</a>
      </div>
      <p class="my-4 text-xs text-center text-gray-600 hover:text-sky-600 dark:text-gray-50">
        <span>Copyright © 2021</span>
      </p>
    </div>
  </nav>
</div>