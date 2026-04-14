<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<div>
    <!-- ========== HEADER ========== -->
    <header
        class="bg-white dark:bg-neutral-800 border-b border-gray-200 dark:border-neutral-700 flex flex-wrap md:justify-start md:flex-nowrap z-50 w-full">
        <nav
            class="relative max-w-[85rem] w-full md:flex md:items-center md:justify-between md:gap-3 mx-auto px-4 sm:px-6 lg:px-8 py-2">
            <!-- Logo w/ Collapse Button -->
            <div class="flex items-center justify-between">
                <a class="flex-none font-semibold text-xl text-gray-800 dark:text-neutral-200 focus:outline-hidden focus:opacity-80"
                    href="#" aria-label="Brand">Brand</a>

                <!-- Collapse Button -->
                <div class="md:hidden">
                    <button type="button"
                        class="hs-collapse-toggle relative size-9 flex justify-center items-center text-sm font-semibold rounded-lg bg-white dark:bg-neutral-800 border border-gray-200 dark:border-neutral-700 text-gray-800 dark:text-white hover:bg-gray-50 dark:hover:bg-neutral-700 focus:outline-hidden focus:bg-gray-50 dark:focus:bg-neutral-700 disabled:opacity-50 disabled:pointer-events-none"
                        id="hs-header-classic-collapse" aria-expanded="false" aria-controls="hs-header-classic"
                        aria-label="Toggle navigation" data-hs-collapse="#hs-header-classic">
                        <svg class="hs-collapse-open:hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <line x1="3" x2="21" y1="6" y2="6" />
                            <line x1="3" x2="21" y1="12" y2="12" />
                            <line x1="3" x2="21" y1="18" y2="18" />
                        </svg>
                        <svg class="hs-collapse-open:block shrink-0 hidden size-4" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18" />
                            <path d="m6 6 12 12" />
                        </svg>
                        <span class="sr-only">Toggle navigation</span>
                    </button>
                </div>
                <!-- End Collapse Button -->
            </div>
            <!-- End Logo w/ Collapse Button -->

            <!-- Collapse -->
            <div id="hs-header-classic"
                class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block"
                aria-labelledby="hs-header-classic-collapse" role="region">
                <div
                    class="overflow-hidden overflow-y-auto max-h-[75vh] [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-none [&::-webkit-scrollbar-track]:bg-gray-100 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
                    <div class="py-2 md:py-0 flex flex-col md:flex-row md:items-center md:justify-end gap-0.5 md:gap-1">
                        <a class="p-2 flex items-center text-sm text-blue-600 dark:text-blue-500 focus:outline-hidden"
                            href="/" aria-current="page">
                            <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8" />
                                <path
                                    d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                            </svg>
                            Home
                        </a>

                        <a class="p-2 flex items-center text-sm text-gray-800 dark:text-neutral-200 hover:text-gray-500 dark:hover:text-neutral-400 focus:outline-hidden focus:text-gray-500 dark:focus:text-neutral-400"
                            href="#">
                            <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                                <circle cx="12" cy="7" r="4" />
                            </svg>
                            About
                        </a>

                        <!-- Button Group -->
                        <div
                            class="relative flex flex-wrap items-center gap-x-1.5 md:ps-2.5 mt-1 md:mt-0 md:ms-1.5 before:block before:absolute before:top-1/2 before:-start-px before:w-px before:h-4 before:bg-gray-200 dark:before:bg-neutral-700 before:-translate-y-1/2">

                            @guest
                                <!-- Show Log in if not authenticated -->
                                <a class="p-2 w-full flex items-center text-sm text-gray-800 dark:text-neutral-200 hover:text-gray-500 dark:hover:text-neutral-400"
                                    href="{{ route('login') }}">
                                    <svg class="shrink-0 size-4 me-3 md:me-2" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                                        <circle cx="12" cy="7" r="4" />
                                    </svg>
                                    Log in
                                </a>
                            @endguest

                            @auth
                                <!-- Show user name and logout if authenticated -->
                                <span class="p-2 text-sm text-gray-800 dark:text-neutral-200">
                                    {{ Auth::user()->name }}
                                </span>

                                <livewire:auth::logout />
                            @endauth
                        </div>
                        <!-- End Button Group -->
                    </div>
                </div>
            </div>
            <!-- End Collapse -->
        </nav>
    </header>
    <!-- ========== END HEADER ========== -->
    {{-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius --}}
</div>
