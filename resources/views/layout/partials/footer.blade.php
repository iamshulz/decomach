
<footer class="container">
    <div class="max-w-full py-12">

        {{-- Top Grid --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mb-10">

            <div class="col-span-1">
                {{-- Brand --}}
                <div class="col-span-1 sm:col-span-2 lg:col-span-1 gap-2">
                    <a href="{{ url('/') }}" class="flex items-center gap-2 text-green-900 font-semibold text-lg mb-3">
                        <img src="{{ asset('assets/deco-logo.png') }}" alt="Decomach Logo" class="w-8 h-8 capitalize">
                        Deco Machine Shop
                    </a>
                    <p class="text-sm leading-relaxed">
                        Building powerful solutions to help your business grow and succeed in the modern world.
                    </p>
                </div>
            </div>

            <div class="col-span-1">
                {{-- Company --}}
                <div class="col-span-1 sm:col-span-2 lg:col-span-1">
                    <h4 class="text-green-900 font-semibold text-sm uppercase tracking-wide mb-4">Navigation</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-black transition-colors">Home</a></li>
                        <li><a href="#" class="hover:text-black transition-colors">About Us</a></li>
                        <li><a href="#" class="hover:text-black transition-colors">Team</a></li>
                        <li><a href="#" class="hover:text-black transition-colors">Products</a></li>
                        <li><a href="#" class="hover:text-black transition-colors">Contact Us</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-span-1">
                <h4 class="text-green-900 font-semibold text-sm uppercase tracking-wide mb-4">Services</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="hover:text-black transition-colors">Web Development</a></li>
                    <li><a href="#" class="hover:text-black transition-colors">Mobile Apps</a></li>
                    <li><a href="#" class="hover:text-black transition-colors">Consulting</a></li>
                    <li><a href="#" class="hover:text-black transition-colors">Support</a></li>
                </ul>
            </div>

            {{-- Contact --}}
            <div class="col-span-1">
                <h4 class="text-green-900 font-semibold text-sm uppercase tracking-wide mb-4">Contact</h4>
                <ul class="space-y-2 text-sm">
                    <li class="flex items-start gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mt-0.5 shrink-0 text-green-800" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        info@decomach.com
                    </li>
                    <li class="flex items-start gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mt-0.5 shrink-0 text-green-800" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        +1 (555) 000-0000
                    </li>
                    <li class="flex items-start gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mt-0.5 shrink-0 text-green-800" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        J.P. Cabaguio Avenue,
                        Davao City 8000,
                        Philippines
                    </li>
                </ul>
            </div>

        </div>

        {{-- Divider --}}
        <hr class="border-gray-700 mb-6">

        {{-- Bottom Bar --}}
        <div class="flex flex-col sm:flex-row items-center justify-between gap-4 text-sm">
            <p>&copy; {{ date('Y') }} Decomach. All rights reserved.</p>

            {{-- Social Icons --}}
            <div class="flex items-center gap-4">
                <a href="#" aria-label="Twitter" class="text-green-800 hover:text-green-400 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                    </svg>
                </a>
                <a href="#" aria-label="GitHub" class="text-green-800 hover:text-green-400 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/>
                    </svg>
                </a>
                <a href="#" aria-label="LinkedIn" class="text-green-800 hover:text-green-400 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                    </svg>
                </a>
            </div>

            {{-- Legal Links --}}
            <div class="flex items-center gap-4">
                <a href="#" class="hover:text-white transition-colors">Privacy</a>
                <a href="#" class="hover:text-white transition-colors">Terms</a>
            </div>
        </div>

    </div>
</footer>
