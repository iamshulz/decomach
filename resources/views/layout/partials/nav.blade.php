
<nav class="bg-green-900 shadow-md sticky top-0 z-50 ">
    <div class="container">
        <div class="max-w-full mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <div class="flex items-center justify-between">

                {{-- Logo --}}
                <a href="{{ url('/') }}" class="flex items-center gap-2 text-xl font-semibold text-white hover:text-yellow-400 transition-colors">
                    <img src="{{ asset('/assets/deco-logo.png') }}" alt="Deco Machine Shop Logo" class="w-14 h-14 md:w-12 lg:w-24 md:h-12 lg:h-24">
                    Deco Machine Shop
                </a>

                {{-- Desktop Nav Links --}}
                <div class="hidden md:flex items-center gap-6 text-lg font-medium text-white">
                    <a href="{{ url('/') }}" class="hover:text-yellow-400 transition-colors hover:underline underline-offset-4">Home</a>
                    <a href="#" class="hover:text-yellow-400 transition-colors hover:underline underline-offset-4">Services</a>
                    <a href="#" class="hover:text-yellow-400 transition-colors hover:underline underline-offset-4">About</a>
                    <a href="#" class="hover:text-yellow-400 transition-colors hover:underline underline-offset-4">Contact</a>
                </div>

                {{-- Desktop CTA --}}
                <div class="hidden md:flex items-center gap-3">
                    <a href="#" class="text-sm font-medium outline-1 bg-transparent text-white px-4 py-2 rounded-lg hover:text-yellow-400 transition-colors">
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
                    <svg id="icon-open" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg id="icon-close" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

            </div>
        </div>

        {{-- Mobile Menu --}}
        <div id="mobile-menu" class="hidden md:hidden border-t border-gray-100 bg-transparent">
            <div class="px-4 py-3 flex flex-col gap-3 text-lg font-medium text-white tex">
                <a href="{{ url('/') }}" class="hover:text-yellow-600 transition-colors py-1">Home</a>
                <a href="#" class="hover:text-yellow-600 transition-colors py-1">Services</a>
                <a href="#" class="hover:text-yellow-600 transition-colors py-1">About</a>
                <a href="#" class="hover:text-yellow-600 transition-colors py-1">Contact</a>
                <hr class="border-gray-100">
                <a href="#" class="bg-indigo-600 text-white text-center px-4 py-2 rounded-lg hover:bg-indigo-700 transition-colors">
                    Get Started
                </a>
            </div>
        </div>
    </div>
</nav>

@pushonce('scripts')
<script>
    const toggle = document.getElementById('mobile-menu-toggle');
    const menu   = document.getElementById('mobile-menu');
    const iconOpen  = document.getElementById('icon-open');
    const iconClose = document.getElementById('icon-close');

    toggle.addEventListener('click', () => {
        const isOpen = !menu.classList.contains('hidden');
        menu.classList.toggle('hidden', isOpen);
        iconOpen.classList.toggle('hidden', !isOpen);
        iconClose.classList.toggle('hidden', isOpen);
        toggle.setAttribute('aria-expanded', String(!isOpen));
    });
</script>
@endpushonce
