<nav class="bg-green-900 shadow-md sticky top-0 z-50 relative">
    <div class="container">
        <div class="max-w-full lg:mx-auto py-2">
            <div class="flex items-center justify-between gap-4">

                {{-- Logo --}}
                <a href="{{ url('/') }}"
                   class="flex items-center gap-2 text-lg lg:text-3xl font-semibold text-white hover:text-yellow-400 transition-colors">
                    <img src="{{ asset('/assets/deco-logo.png') }}" alt="Deco Machine Shop Logo"
                         class="w-14 h-14 md:w-12 lg:w-18 md:h-12 lg:h-18">
                    Deco Machine Shop
                </a>

                {{-- Desktop Nav Links --}}
                <div class="hidden md:flex items-center gap-6 font-medium text-white lg:text-lg text-sm">
                    <a href="{{ url('/') }}"
                       class="hover:text-yellow-400 transition-colors hover:underline underline-offset-4">Home</a>
                    <a href="#" class="hover:text-yellow-400 transition-colors hover:underline underline-offset-4">Services</a>
                    <a href="#"
                       class="hover:text-yellow-400 transition-colors hover:underline underline-offset-4">About</a>
                    <a href="#" class="hover:text-yellow-400 transition-colors hover:underline underline-offset-4">Contact</a>
                </div>

                {{-- Desktop CTA --}}
                <div class="hidden md:flex items-center gap-3">
                    <a href="#"
                       class="text-sm font-medium outline-1 bg-transparent text-white px-4 py-2 rounded-lg hover:text-yellow-600 transition-colors text-nowrap">
                        Get A Quote
                    </a>
                </div>

                {{-- Mobile Hamburger --}}
                <button
                    id="mobile-menu-toggle"
                    class="md:hidden p-2 rounded-md text-white hover:text-yellow-600 transition-colors focus:outline-none"
                    aria-label="Toggle menu"
                    aria-expanded="false"
                >
                    <svg id="icon-open" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <svg id="icon-close" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 hidden" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>

            </div>
        </div>

    </div>

    {{-- Mobile Menu (overlays content, does not push elements down) --}}
    <div id="mobile-menu"
         class="md:hidden absolute left-0 right-0 w-full bg-green-900 border-t border-gray-700 shadow-lg"
         style="display: none">
        <div class="px-4 py-3 flex flex-col gap-3  lg:text-lg text-sm  font-medium text-white">
            <a href="{{ url('/') }}" class="hover:text-yellow-600 transition-colors py-1">Home</a>
            <a href="#" class="hover:text-yellow-600 transition-colors py-1">Services</a>
            <a href="#" class="hover:text-yellow-600 transition-colors py-1">About</a>
            <a href="#" class="hover:text-yellow-600 transition-colors py-1">Contact</a>
            <hr class="border-gray-700">
            <a href="#"
               class="bg-yellow-600 text-white text-center px-4 py-2 rounded-lg border-2 border-transparent hover:bg-transparent hover:border-yellow-600 hover:text-yellow-600 transition-colors">
                Get a Quote
            </a>
        </div>
    </div>
</nav>

