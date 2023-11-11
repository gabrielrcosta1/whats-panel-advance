<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <style>
        [x-cloak] {
            display: none;
        }
    </style>
    <tallstackui:setup />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

</head>

<body>
    <div x-data="{ mobileSidebarOpen: false }">
        <!-- Page Container -->
        <div id="page-container" class="mx-auto flex min-h-screen w-full min-w-[320px] flex-col bg-slate-100 lg:ps-64">
            <!-- Page Sidebar -->
            <nav id="page-sidebar"
                class="fixed bottom-0 start-0 top-0 z-50 flex h-full w-80 -translate-x-full flex-col bg-white transition-transform duration-500 ease-out ltr:border-r-8 rtl:border-l-8 lg:w-64 lg:border-blue-900/10 ltr:lg:translate-x-0 rtl:lg:translate-x-0"
                x-bind:class="{
                    'ltr:-translate-x-full rtl:translate-x-full': !mobileSidebarOpen,
                    'translate-x-0': mobileSidebarOpen,
                }"
                aria-label="Main Sidebar Navigation" x-cloak>
                <!-- Sidebar Header -->
                <div class="flex h-20 w-full flex-none items-center justify-between pe-4 ps-5">
                    <!-- Brand -->
                    <a href="javascript:void(0)"
                        class="inline-flex items-center gap-2 text-lg font-bold tracking-wide text-slate-800 hover:opacity-75 active:opacity-100">
                        <div
                            class="flex h-9 w-9 items-center justify-center rounded-xl bg-blue-600 font-bold text-white">
                            <svg class="hi-mini hi-briefcase inline-block h-5 w-5 -rotate-6"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M6 3.75A2.75 2.75 0 018.75 1h2.5A2.75 2.75 0 0114 3.75v.443c.572.055 1.14.122 1.706.2C17.053 4.582 18 5.75 18 7.07v3.469c0 1.126-.694 2.191-1.83 2.54-1.952.599-4.024.921-6.17.921s-4.219-.322-6.17-.921C2.694 12.73 2 11.665 2 10.539V7.07c0-1.321.947-2.489 2.294-2.676A41.047 41.047 0 016 4.193V3.75zm6.5 0v.325a41.622 41.622 0 00-5 0V3.75c0-.69.56-1.25 1.25-1.25h2.5c.69 0 1.25.56 1.25 1.25zM10 10a1 1 0 00-1 1v.01a1 1 0 001 1h.01a1 1 0 001-1V11a1 1 0 00-1-1H10z"
                                    clip-rule="evenodd" />
                                <path
                                    d="M3 15.055v-.684c.126.053.255.1.39.142 2.092.642 4.313.987 6.61.987 2.297 0 4.518-.345 6.61-.987.135-.041.264-.089.39-.142v.684c0 1.347-.985 2.53-2.363 2.686a41.454 41.454 0 01-9.274 0C3.985 17.585 3 16.402 3 15.055z" />
                            </svg>
                        </div>
                        <span>Tail<span class="text-blue-600">Project</span></span>
                    </a>
                    <!-- END Brand -->

                    <!-- Extra Actions -->
                    <div class="flex items-center">
                        <!-- Close Sidebar on Mobile -->
                        <button type="button"
                            class="inline-flex h-10 w-10 items-center justify-center rounded-lg bg-slate-100 font-semibold leading-6 text-slate-800 hover:bg-slate-200 lg:hidden"
                            x-on:click="mobileSidebarOpen = false">
                            <svg class="hi-solid hi-x -mx-1 inline-block h-5 w-5" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                        <!-- END Close Sidebar on Mobile -->
                    </div>
                    <!-- END Extra Actions -->
                </div>
                <!-- END Sidebar Header -->

                <!-- Main Navigation -->
                <div class="w-full grow space-y-2 overflow-auto p-4">
                    <a href="javascript:void(0)"
                        class="group flex items-center gap-2.5 rounded-lg bg-blue-50 px-2.5 py-1.5 text-sm font-medium text-slate-950">
                        <svg class="hi-mini hi-squares-plus inline-block h-5 w-5 text-blue-600"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path
                                d="M2 4.25A2.25 2.25 0 014.25 2h2.5A2.25 2.25 0 019 4.25v2.5A2.25 2.25 0 016.75 9h-2.5A2.25 2.25 0 012 6.75v-2.5zM2 13.25A2.25 2.25 0 014.25 11h2.5A2.25 2.25 0 019 13.25v2.5A2.25 2.25 0 016.75 18h-2.5A2.25 2.25 0 012 15.75v-2.5zM11 4.25A2.25 2.25 0 0113.25 2h2.5A2.25 2.25 0 0118 4.25v2.5A2.25 2.25 0 0115.75 9h-2.5A2.25 2.25 0 0111 6.75v-2.5zM15.25 11.75a.75.75 0 00-1.5 0v2h-2a.75.75 0 000 1.5h2v2a.75.75 0 001.5 0v-2h2a.75.75 0 000-1.5h-2v-2z" />
                        </svg>
                        <span class="grow">Kanban</span>
                    </a>
                    <a href="javascript:void(0)"
                        class="group flex items-center gap-2.5 rounded-lg px-2.5 py-1.5 text-sm font-medium text-slate-800 hover:bg-blue-50 active:text-slate-950">
                        <svg class="hi-mini hi-bell-alert inline-block h-5 w-5 text-slate-300 group-hover:text-blue-600"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path
                                d="M4.214 3.227a.75.75 0 00-1.156-.956 8.97 8.97 0 00-1.856 3.826.75.75 0 001.466.316 7.47 7.47 0 011.546-3.186zM16.942 2.271a.75.75 0 00-1.157.956 7.47 7.47 0 011.547 3.186.75.75 0 001.466-.316 8.971 8.971 0 00-1.856-3.826z" />
                            <path fill-rule="evenodd"
                                d="M10 2a6 6 0 00-6 6c0 1.887-.454 3.665-1.257 5.234a.75.75 0 00.515 1.076 32.94 32.94 0 003.256.508 3.5 3.5 0 006.972 0 32.933 32.933 0 003.256-.508.75.75 0 00.515-1.076A11.448 11.448 0 0116 8a6 6 0 00-6-6zm0 14.5a2 2 0 01-1.95-1.557 33.54 33.54 0 003.9 0A2 2 0 0110 16.5z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="grow">Notifications</span>
                        <span class="text-blue-500">&bull;</span>
                    </a>
                    <a href="javascript:void(0)"
                        class="group flex items-center gap-2.5 rounded-lg px-2.5 py-1.5 text-sm font-medium text-slate-800 hover:bg-blue-50 active:text-slate-950">
                        <svg class="hi-mini hi-calendar-days inline-block h-5 w-5 text-slate-300 group-hover:text-blue-600"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path
                                d="M5.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H6a.75.75 0 01-.75-.75V12zM6 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H6zM7.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H8a.75.75 0 01-.75-.75V12zM8 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H8zM9.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V10zM10 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H10zM9.25 14a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V14zM12 9.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V10a.75.75 0 00-.75-.75H12zM11.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H12a.75.75 0 01-.75-.75V12zM12 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H12zM13.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H14a.75.75 0 01-.75-.75V10zM14 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H14z" />
                            <path fill-rule="evenodd"
                                d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="grow">Calendar</span>
                    </a>
                    <a href="javascript:void(0)"
                        class="group flex items-center gap-2.5 rounded-lg px-2.5 py-1.5 text-sm font-medium text-slate-800 hover:bg-blue-50 active:text-slate-950">
                        <svg class="hi-mini hi-archive-box inline-block h-5 w-5 text-slate-300 group-hover:text-blue-600"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path d="M2 3a1 1 0 00-1 1v1a1 1 0 001 1h16a1 1 0 001-1V4a1 1 0 00-1-1H2z" />
                            <path fill-rule="evenodd"
                                d="M2 7.5h16l-.811 7.71a2 2 0 01-1.99 1.79H4.802a2 2 0 01-1.99-1.79L2 7.5zM7 11a1 1 0 011-1h4a1 1 0 110 2H8a1 1 0 01-1-1z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="grow">Files</span>
                    </a>
                    <a href="javascript:void(0)"
                        class="group flex items-center gap-2.5 rounded-lg px-2.5 py-1.5 text-sm font-medium text-slate-800 hover:bg-blue-50 active:text-slate-950">
                        <svg class="hi-mini hi-list-bullet inline-block h-5 w-5 text-slate-300 group-hover:text-blue-600"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M6 4.75A.75.75 0 016.75 4h10.5a.75.75 0 010 1.5H6.75A.75.75 0 016 4.75zM6 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H6.75A.75.75 0 016 10zm0 5.25a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H6.75a.75.75 0 01-.75-.75zM1.99 4.75a1 1 0 011-1H3a1 1 0 011 1v.01a1 1 0 01-1 1h-.01a1 1 0 01-1-1v-.01zM1.99 15.25a1 1 0 011-1H3a1 1 0 011 1v.01a1 1 0 01-1 1h-.01a1 1 0 01-1-1v-.01zM1.99 10a1 1 0 011-1H3a1 1 0 011 1v.01a1 1 0 01-1 1h-.01a1 1 0 01-1-1V10z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="grow">Tasks</span>
                    </a>
                    <h4 class="ps-3 pt-5 text-xs font-semibold uppercase tracking-wider text-slate-500">
                        Labels
                    </h4>
                    <a href="javascript:void(0)"
                        class="group flex items-center gap-2.5 rounded-lg px-2.5 py-1 text-sm font-medium text-slate-800 hover:bg-emerald-50 hover:text-emerald-600">
                        <svg class="hi-mini hi-hashtag inline-block h-5 w-5 text-slate-300 group-hover:text-emerald-600"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M9.493 2.853a.75.75 0 00-1.486-.205L7.545 6H4.198a.75.75 0 000 1.5h3.14l-.69 5H3.302a.75.75 0 000 1.5h3.14l-.435 3.148a.75.75 0 001.486.205L7.955 14h2.986l-.434 3.148a.75.75 0 001.486.205L12.456 14h3.346a.75.75 0 000-1.5h-3.14l.69-5h3.346a.75.75 0 000-1.5h-3.14l.435-3.147a.75.75 0 00-1.486-.205L12.045 6H9.059l.434-3.147zM8.852 7.5l-.69 5h2.986l.69-5H8.852z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="grow">development</span>
                    </a>
                    <a href="javascript:void(0)"
                        class="group flex items-center gap-2.5 rounded-lg px-2.5 py-1 text-sm font-medium text-slate-800 hover:bg-blue-50 hover:text-blue-600">
                        <svg class="hi-mini hi-hashtag inline-block h-5 w-5 text-slate-300 group-hover:text-blue-600"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M9.493 2.853a.75.75 0 00-1.486-.205L7.545 6H4.198a.75.75 0 000 1.5h3.14l-.69 5H3.302a.75.75 0 000 1.5h3.14l-.435 3.148a.75.75 0 001.486.205L7.955 14h2.986l-.434 3.148a.75.75 0 001.486.205L12.456 14h3.346a.75.75 0 000-1.5h-3.14l.69-5h3.346a.75.75 0 000-1.5h-3.14l.435-3.147a.75.75 0 00-1.486-.205L12.045 6H9.059l.434-3.147zM8.852 7.5l-.69 5h2.986l.69-5H8.852z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="grow">design</span>
                    </a>
                    <a href="javascript:void(0)"
                        class="group flex items-center gap-2.5 rounded-lg px-2.5 py-1 text-sm font-medium text-slate-800 hover:bg-sky-50 hover:text-sky-600">
                        <svg class="hi-mini hi-hashtag inline-block h-5 w-5 text-slate-300 group-hover:text-sky-600"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M9.493 2.853a.75.75 0 00-1.486-.205L7.545 6H4.198a.75.75 0 000 1.5h3.14l-.69 5H3.302a.75.75 0 000 1.5h3.14l-.435 3.148a.75.75 0 001.486.205L7.955 14h2.986l-.434 3.148a.75.75 0 001.486.205L12.456 14h3.346a.75.75 0 000-1.5h-3.14l.69-5h3.346a.75.75 0 000-1.5h-3.14l.435-3.147a.75.75 0 00-1.486-.205L12.045 6H9.059l.434-3.147zM8.852 7.5l-.69 5h2.986l.69-5H8.852z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="grow">marketing</span>
                    </a>
                    <a href="javascript:void(0)"
                        class="group flex items-center gap-2.5 rounded-lg px-2.5 py-1 text-sm font-medium text-slate-800 hover:bg-orange-50 hover:text-orange-600">
                        <svg class="hi-mini hi-hashtag inline-block h-5 w-5 text-slate-300 group-hover:text-orange-600"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M9.493 2.853a.75.75 0 00-1.486-.205L7.545 6H4.198a.75.75 0 000 1.5h3.14l-.69 5H3.302a.75.75 0 000 1.5h3.14l-.435 3.148a.75.75 0 001.486.205L7.955 14h2.986l-.434 3.148a.75.75 0 001.486.205L12.456 14h3.346a.75.75 0 000-1.5h-3.14l.69-5h3.346a.75.75 0 000-1.5h-3.14l.435-3.147a.75.75 0 00-1.486-.205L12.045 6H9.059l.434-3.147zM8.852 7.5l-.69 5h2.986l.69-5H8.852z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="grow">personal</span>
                    </a>
                    <a href="javascript:void(0)"
                        class="group flex items-center gap-2.5 rounded-lg px-2.5 py-1 text-sm font-medium text-slate-800 hover:bg-rose-50 hover:text-rose-600">
                        <svg class="hi-mini hi-hashtag inline-block h-5 w-5 text-slate-300 group-hover:text-rose-600"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M9.493 2.853a.75.75 0 00-1.486-.205L7.545 6H4.198a.75.75 0 000 1.5h3.14l-.69 5H3.302a.75.75 0 000 1.5h3.14l-.435 3.148a.75.75 0 001.486.205L7.955 14h2.986l-.434 3.148a.75.75 0 001.486.205L12.456 14h3.346a.75.75 0 000-1.5h-3.14l.69-5h3.346a.75.75 0 000-1.5h-3.14l.435-3.147a.75.75 0 00-1.486-.205L12.045 6H9.059l.434-3.147zM8.852 7.5l-.69 5h2.986l.69-5H8.852z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="grow">brand</span>
                    </a>
                    <a href="javascript:void(0)"
                        class="group flex items-center gap-2.5 rounded-lg px-2.5 py-1 text-sm font-medium text-slate-800 hover:bg-purple-50 hover:text-purple-600">
                        <svg class="hi-mini hi-hashtag inline-block h-5 w-5 text-slate-300 group-hover:text-purple-600"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M9.493 2.853a.75.75 0 00-1.486-.205L7.545 6H4.198a.75.75 0 000 1.5h3.14l-.69 5H3.302a.75.75 0 000 1.5h3.14l-.435 3.148a.75.75 0 001.486.205L7.955 14h2.986l-.434 3.148a.75.75 0 001.486.205L12.456 14h3.346a.75.75 0 000-1.5h-3.14l.69-5h3.346a.75.75 0 000-1.5h-3.14l.435-3.147a.75.75 0 00-1.486-.205L12.045 6H9.059l.434-3.147zM8.852 7.5l-.69 5h2.986l.69-5H8.852z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="grow">business</span>
                    </a>
                    <a href="javascript:void(0)"
                        class="group flex items-center gap-2.5 rounded-lg px-2.5 py-1 text-sm font-medium text-slate-800 hover:bg-pink-50 hover:text-pink-600">
                        <svg class="hi-mini hi-hashtag inline-block h-5 w-5 text-slate-300 group-hover:text-pink-600"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M9.493 2.853a.75.75 0 00-1.486-.205L7.545 6H4.198a.75.75 0 000 1.5h3.14l-.69 5H3.302a.75.75 0 000 1.5h3.14l-.435 3.148a.75.75 0 001.486.205L7.955 14h2.986l-.434 3.148a.75.75 0 001.486.205L12.456 14h3.346a.75.75 0 000-1.5h-3.14l.69-5h3.346a.75.75 0 000-1.5h-3.14l.435-3.147a.75.75 0 00-1.486-.205L12.045 6H9.059l.434-3.147zM8.852 7.5l-.69 5h2.986l.69-5H8.852z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="grow">accounting</span>
                    </a>
                </div>
                <!-- END Main Navigation -->

                <!-- Sub Navigation -->
                <div class="w-full flex-none space-y-2 p-4">
                    <a href="javascript:void(0)"
                        class="group flex items-center gap-2.5 rounded-lg px-2.5 py-1.5 text-sm font-medium text-slate-800 hover:bg-blue-50 active:text-slate-950">
                        <svg class="hi-mini hi-cog-8-tooth inline-block h-5 w-5 text-slate-300 group-hover:text-blue-600"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M8.34 1.804A1 1 0 019.32 1h1.36a1 1 0 01.98.804l.295 1.473c.497.144.971.342 1.416.587l1.25-.834a1 1 0 011.262.125l.962.962a1 1 0 01.125 1.262l-.834 1.25c.245.445.443.919.587 1.416l1.473.294a1 1 0 01.804.98v1.361a1 1 0 01-.804.98l-1.473.295a6.95 6.95 0 01-.587 1.416l.834 1.25a1 1 0 01-.125 1.262l-.962.962a1 1 0 01-1.262.125l-1.25-.834a6.953 6.953 0 01-1.416.587l-.294 1.473a1 1 0 01-.98.804H9.32a1 1 0 01-.98-.804l-.295-1.473a6.957 6.957 0 01-1.416-.587l-1.25.834a1 1 0 01-1.262-.125l-.962-.962a1 1 0 01-.125-1.262l.834-1.25a6.957 6.957 0 01-.587-1.416l-1.473-.294A1 1 0 011 10.68V9.32a1 1 0 01.804-.98l1.473-.295c.144-.497.342-.971.587-1.416l-.834-1.25a1 1 0 01.125-1.262l.962-.962A1 1 0 015.38 3.03l1.25.834a6.957 6.957 0 011.416-.587l.294-1.473zM13 10a3 3 0 11-6 0 3 3 0 016 0z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="grow">Settings</span>
                    </a>
                    <a href="javascript:void(0)"
                        class="group flex items-center gap-2.5 rounded-lg px-2.5 py-1.5 text-sm font-medium text-slate-800 hover:bg-blue-50 active:text-slate-950">
                        <svg class="hi-mini hi-arrow-left-on-rectangle inline-block h-5 w-5 text-slate-300 group-hover:text-blue-600"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M3 4.25A2.25 2.25 0 015.25 2h5.5A2.25 2.25 0 0113 4.25v2a.75.75 0 01-1.5 0v-2a.75.75 0 00-.75-.75h-5.5a.75.75 0 00-.75.75v11.5c0 .414.336.75.75.75h5.5a.75.75 0 00.75-.75v-2a.75.75 0 011.5 0v2A2.25 2.25 0 0110.75 18h-5.5A2.25 2.25 0 013 15.75V4.25z"
                                clip-rule="evenodd" />
                            <path fill-rule="evenodd"
                                d="M19 10a.75.75 0 00-.75-.75H8.704l1.048-.943a.75.75 0 10-1.004-1.114l-2.5 2.25a.75.75 0 000 1.114l2.5 2.25a.75.75 0 101.004-1.114l-1.048-.943h9.546A.75.75 0 0019 10z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="grow">Sign Out</span>
                    </a>
                </div>
                <!-- END Sub Navigation -->
            </nav>
            <!-- Page Sidebar -->

            <!-- Page Header -->
            <header id="page-header"
                class="fixed end-0 start-0 top-0 z-30 flex h-20 flex-none items-center bg-white shadow-sm lg:hidden">
                <div class="flex w-full justify-between px-4 lg:px-8">
                    <!-- Left Section -->
                    <div class="flex items-center gap-2">
                        <!-- Brand -->
                        <a href="javascript:void(0)"
                            class="inline-flex items-center gap-2 text-lg font-bold tracking-wide text-slate-800 hover:opacity-75 active:opacity-100">
                            <div
                                class="flex h-9 w-9 items-center justify-center rounded-xl bg-blue-600 font-bold text-white">
                                <svg class="hi-mini hi-briefcase inline-block h-5 w-5 -rotate-6"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M6 3.75A2.75 2.75 0 018.75 1h2.5A2.75 2.75 0 0114 3.75v.443c.572.055 1.14.122 1.706.2C17.053 4.582 18 5.75 18 7.07v3.469c0 1.126-.694 2.191-1.83 2.54-1.952.599-4.024.921-6.17.921s-4.219-.322-6.17-.921C2.694 12.73 2 11.665 2 10.539V7.07c0-1.321.947-2.489 2.294-2.676A41.047 41.047 0 016 4.193V3.75zm6.5 0v.325a41.622 41.622 0 00-5 0V3.75c0-.69.56-1.25 1.25-1.25h2.5c.69 0 1.25.56 1.25 1.25zM10 10a1 1 0 00-1 1v.01a1 1 0 001 1h.01a1 1 0 001-1V11a1 1 0 00-1-1H10z"
                                        clip-rule="evenodd" />
                                    <path
                                        d="M3 15.055v-.684c.126.053.255.1.39.142 2.092.642 4.313.987 6.61.987 2.297 0 4.518-.345 6.61-.987.135-.041.264-.089.39-.142v.684c0 1.347-.985 2.53-2.363 2.686a41.454 41.454 0 01-9.274 0C3.985 17.585 3 16.402 3 15.055z" />
                                </svg>
                            </div>
                            <span>Tail<span class="text-blue-600">Project</span></span>
                        </a>
                        <!-- END Brand -->
                    </div>
                    <!-- END Left Section -->

                    <!-- Right Section -->
                    <div class="flex items-center gap-2">
                        <!-- Toggle Sidebar on Mobile -->
                        <button type="button"
                            class="inline-flex h-10 w-10 items-center justify-center rounded-lg bg-slate-100 font-semibold leading-6 text-slate-800 hover:bg-slate-200"
                            x-on:click="mobileSidebarOpen = true">
                            <svg class="hi-solid hi-menu-alt-1 inline-block h-5 w-5" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                        <!-- END Toggle Sidebar on Mobile -->
                    </div>
                    <!-- END Right Section -->
                </div>
            </header>
            <!-- END Page Header -->

            <!-- Page Content -->
            <main id="page-content" class="flex flex-auto flex-col pt-20 lg:pt-0">
                <!-- Heading -->
                <div class="border-b border-slate-200 bg-white/25 px-4 py-6 lg:px-8">
                    <!-- Navigation -->
                    <nav class="mb-6 flex flex-wrap items-center gap-3 md:gap-10 lg:mb-10">
                        <a href="javascript:void(0)"
                            class="font-medium text-slate-950 underline decoration-slate-300 decoration-2 underline-offset-8 md:text-xl">Projects</a>
                        <a href="javascript:void(0)"
                            class="font-medium text-slate-500 underline decoration-transparent decoration-2 underline-offset-8 hover:text-slate-700 hover:decoration-slate-300 md:text-xl">Personal</a>
                        <a href="javascript:void(0)"
                            class="font-medium text-slate-500 underline decoration-transparent decoration-2 underline-offset-8 hover:text-slate-700 hover:decoration-slate-300 md:text-xl">Team</a>
                        <a href="javascript:void(0)"
                            class="font-medium text-slate-500 underline decoration-transparent decoration-2 underline-offset-8 hover:text-slate-700 hover:decoration-slate-300 md:text-xl">Company</a>
                    </nav>
                    <!-- END Navigation -->

                    <h1 class="text-2xl font-bold lg:text-3xl">Board</h1>
                </div>
                <!-- END Heading -->

                <!-- Kanban Board -->
                <div
                    class="flex flex-nowrap items-start justify-start gap-6 overflow-x-auto px-4 py-6 lg:gap-8 lg:p-8">
                    <!-- Todo -->
                    <div class="w-64 flex-none md:w-72">
                        <!-- Todo Heading -->
                        <div class="mb-4 flex items-center justify-between gap-2">
                            <h2 class="font-semibold">Todo</h2>
                            <div class="flex items-center gap-2">
                                <button type="button"
                                    class="group inline-flex h-8 w-8 items-center justify-center rounded-full border border-dashed border-slate-300 text-slate-400 hover:border-slate-500 hover:text-slate-950 active:border-slate-400">
                                    <svg class="hi-mini hi-plus inline-block h-5 w-5 transition group-active:scale-90"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                        <path
                                            d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                                    </svg>
                                </button>
                                <button type="button"
                                    class="group inline-flex h-8 w-8 items-center justify-center rounded-full border border-dashed border-slate-300 text-slate-400 hover:border-slate-500 hover:text-slate-950 active:border-slate-400">
                                    <svg class="hi-mini hi-pencil-square inline-block h-5 w-5 transition group-active:scale-90"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                        <path
                                            d="M5.433 13.917l1.262-3.155A4 4 0 017.58 9.42l6.92-6.918a2.121 2.121 0 013 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 01-.65-.65z" />
                                        <path
                                            d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0010 3H4.75A2.75 2.75 0 002 5.75v9.5A2.75 2.75 0 004.75 18h9.5A2.75 2.75 0 0017 15.25V10a.75.75 0 00-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <!-- END Todo Heading -->

                        <!-- Todo List -->
                        <div class="flex flex-col gap-4">
                            <!-- Card 1 Container -->
                            <div class="relative">
                                <!-- Action -->
                                <div class="absolute end-4 top-4">
                                    <!-- Dropdown Container -->
                                    <div x-data="{ open: false }" class="relative">
                                        <button id="card-dropdown-1" aria-haspopup="true" x-bind:aria-expanded="open"
                                            x-on:click="open = true" type="button"
                                            class="flex h-6 w-6 items-center justify-center text-slate-400 hover:text-slate-600 active:text-slate-400">
                                            <svg class="hi-mini hi-ellipsis-vertical inline-block h-5 w-5"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M10 3a1.5 1.5 0 110 3 1.5 1.5 0 010-3zM10 8.5a1.5 1.5 0 110 3 1.5 1.5 0 010-3zM11.5 15.5a1.5 1.5 0 10-3 0 1.5 1.5 0 003 0z" />
                                            </svg>
                                        </button>

                                        <!-- Dropdown -->
                                        <div x-cloak x-show="open"
                                            x-transition:enter="transition ease-out duration-125"
                                            x-transition:enter-start="opacity-0 scale-75"
                                            x-transition:enter-end="opacity-100 scale-100"
                                            x-transition:leave="transition ease-in duration-100"
                                            x-transition:leave-start="opacity-100 scale-100"
                                            x-transition:leave-end="opacity-0 scale-75"
                                            x-on:click.outside="open = false" role="menu"
                                            aria-labelledby="card-dropdown-1"
                                            class="absolute end-0 z-10 mt-2 w-32 rounded-lg shadow-xl ltr:origin-top-right rtl:origin-top-left">
                                            <div
                                                class="divide-y divide-slate-100 rounded-lg bg-white ring-1 ring-black ring-opacity-5">
                                                <div class="flex flex-col gap-2 p-2">
                                                    <button type="button"
                                                        class="group inline-flex items-center gap-1 rounded-lg bg-slate-50 px-2.5 py-1.5 text-sm font-medium text-slate-600 hover:bg-slate-100 hover:text-slate-600">
                                                        <svg class="hi-mini hi-pencil inline-block h-4 w-4 opacity-50 group-hover:opacity-100"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                            fill="currentColor" aria-hidden="true">
                                                            <path
                                                                d="M2.695 14.763l-1.262 3.154a.5.5 0 00.65.65l3.155-1.262a4 4 0 001.343-.885L17.5 5.5a2.121 2.121 0 00-3-3L3.58 13.42a4 4 0 00-.885 1.343z" />
                                                        </svg>
                                                        <span>Edit</span>
                                                    </button>
                                                    <button type="button"
                                                        class="group inline-flex items-center gap-1 rounded-lg bg-slate-50 px-2.5 py-1 text-sm font-medium text-slate-600 hover:bg-rose-50 hover:text-rose-600">
                                                        <svg class="hi-mini hi-trash inline-block h-4 w-4 opacity-50 group-hover:opacity-100"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                            fill="currentColor" aria-hidden="true">
                                                            <path fill-rule="evenodd"
                                                                d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                        <span>Delete</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END Dropdown -->
                                    </div>
                                    <!-- END Dropdown Container -->
                                </div>
                                <!-- END Action -->

                                <!-- Card 1 -->
                                <a href="javascript:void(0)"
                                    class="group flex flex-col gap-3 rounded-xl bg-white p-4 text-sm transition hover:shadow-lg hover:shadow-slate-200">
                                    <div class="-ms-1.5 flex grow flex-wrap gap-1 pe-6">
                                        <span
                                            class="rounded-xl bg-rose-50 px-1.5 py-px font-medium text-rose-600">brand</span>
                                        <span
                                            class="rounded-xl bg-blue-50 px-1.5 py-px font-medium text-blue-600">design</span>
                                    </div>
                                    <div>
                                        <h3 class="mb-1 font-bold">New logo design</h3>
                                        <p class="line-clamp-3 text-slate-500">
                                            We have to re-evalute our brand message and come up with a
                                            clean and modern design.
                                        </p>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <div class="inline-flex items-center gap-1.5 text-slate-500">
                                            <svg class="hi-mini hi-calendar-days inline-block h-5 w-5 text-slate-300"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M5.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H6a.75.75 0 01-.75-.75V12zM6 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H6zM7.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H8a.75.75 0 01-.75-.75V12zM8 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H8zM9.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V10zM10 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H10zM9.25 14a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V14zM12 9.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V10a.75.75 0 00-.75-.75H12zM11.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H12a.75.75 0 01-.75-.75V12zM12 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H12zM13.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H14a.75.75 0 01-.75-.75V10zM14 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H14z" />
                                                <path fill-rule="evenodd"
                                                    d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <span>October 1st</span>
                                        </div>
                                        <div class="inline-flex items-center gap-1.5 text-slate-500">
                                            <svg class="hi-mini hi-clock inline-block h-5 w-5 text-slate-300"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm.75-13a.75.75 0 00-1.5 0v5c0 .414.336.75.75.75h4a.75.75 0 000-1.5h-3.25V5z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <span>14:00</span>
                                        </div>
                                    </div>
                                </a>
                                <!-- END Card 1 -->
                            </div>
                            <!-- END Card 1 Container -->

                            <!-- Card 2 Container -->
                            <div class="relative">
                                <!-- Action -->
                                <div class="absolute end-4 top-4">
                                    <!-- Dropdown Container -->
                                    <div x-data="{ open: false }" class="relative">
                                        <button id="card-dropdown-2" aria-haspopup="true" x-bind:aria-expanded="open"
                                            x-on:click="open = true" type="button"
                                            class="flex h-6 w-6 items-center justify-center text-slate-400 hover:text-slate-600 active:text-slate-400">
                                            <svg class="hi-mini hi-ellipsis-vertical inline-block h-5 w-5"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M10 3a1.5 1.5 0 110 3 1.5 1.5 0 010-3zM10 8.5a1.5 1.5 0 110 3 1.5 1.5 0 010-3zM11.5 15.5a1.5 1.5 0 10-3 0 1.5 1.5 0 003 0z" />
                                            </svg>
                                        </button>

                                        <!-- Dropdown -->
                                        <div x-cloak x-show="open"
                                            x-transition:enter="transition ease-out duration-125"
                                            x-transition:enter-start="opacity-0 scale-75"
                                            x-transition:enter-end="opacity-100 scale-100"
                                            x-transition:leave="transition ease-in duration-100"
                                            x-transition:leave-start="opacity-100 scale-100"
                                            x-transition:leave-end="opacity-0 scale-75"
                                            x-on:click.outside="open = false" role="menu"
                                            aria-labelledby="card-dropdown-2"
                                            class="absolute end-0 z-10 mt-2 w-32 rounded-lg shadow-xl ltr:origin-top-right rtl:origin-top-left">
                                            <div
                                                class="divide-y divide-slate-100 rounded-lg bg-white ring-1 ring-black ring-opacity-5">
                                                <div class="flex flex-col gap-2 p-2">
                                                    <button type="button"
                                                        class="group inline-flex items-center gap-1 rounded-lg bg-slate-50 px-2.5 py-1.5 text-sm font-medium text-slate-600 hover:bg-slate-100 hover:text-slate-600">
                                                        <svg class="hi-mini hi-pencil inline-block h-4 w-4 opacity-50 group-hover:opacity-100"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                            fill="currentColor" aria-hidden="true">
                                                            <path
                                                                d="M2.695 14.763l-1.262 3.154a.5.5 0 00.65.65l3.155-1.262a4 4 0 001.343-.885L17.5 5.5a2.121 2.121 0 00-3-3L3.58 13.42a4 4 0 00-.885 1.343z" />
                                                        </svg>
                                                        <span>Edit</span>
                                                    </button>
                                                    <button type="button"
                                                        class="group inline-flex items-center gap-1 rounded-lg bg-slate-50 px-2.5 py-1 text-sm font-medium text-slate-600 hover:bg-rose-50 hover:text-rose-600">
                                                        <svg class="hi-mini hi-trash inline-block h-4 w-4 opacity-50 group-hover:opacity-100"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                            fill="currentColor" aria-hidden="true">
                                                            <path fill-rule="evenodd"
                                                                d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                        <span>Delete</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END Dropdown -->
                                    </div>
                                    <!-- END Dropdown Container -->
                                </div>
                                <!-- END Action -->

                                <!-- Card 2 -->
                                <a href="javascript:void(0)"
                                    class="group flex flex-col gap-3 rounded-xl bg-white p-4 text-sm transition hover:shadow-lg hover:shadow-slate-200">
                                    <div class="-ms-1.5 flex grow flex-wrap gap-1 pe-6">
                                        <span
                                            class="rounded-xl bg-rose-50 px-1.5 py-px font-medium text-rose-600">brand</span>
                                        <span
                                            class="rounded-xl bg-blue-50 px-1.5 py-px font-medium text-blue-600">design</span>
                                        <span
                                            class="rounded-xl bg-emerald-50 px-1.5 py-px font-medium text-emerald-600">development</span>
                                    </div>
                                    <div>
                                        <h3 class="mb-1 font-bold">Build mobile application</h3>
                                        <p class="line-clamp-3 text-slate-500">
                                            We must come up with a cool design
                                        </p>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <div class="inline-flex items-center gap-1.5 text-slate-500">
                                            <svg class="hi-mini hi-calendar-days inline-block h-5 w-5 text-slate-300"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M5.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H6a.75.75 0 01-.75-.75V12zM6 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H6zM7.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H8a.75.75 0 01-.75-.75V12zM8 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H8zM9.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V10zM10 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H10zM9.25 14a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V14zM12 9.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V10a.75.75 0 00-.75-.75H12zM11.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H12a.75.75 0 01-.75-.75V12zM12 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H12zM13.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H14a.75.75 0 01-.75-.75V10zM14 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H14z" />
                                                <path fill-rule="evenodd"
                                                    d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <span>November 10th</span>
                                        </div>
                                        <div class="inline-flex items-center gap-1.5 text-slate-500">
                                            <svg class="hi-mini hi-clock inline-block h-5 w-5 text-slate-300"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm.75-13a.75.75 0 00-1.5 0v5c0 .414.336.75.75.75h4a.75.75 0 000-1.5h-3.25V5z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <span>18:00</span>
                                        </div>
                                    </div>
                                </a>
                                <!-- END Card 2 -->
                            </div>
                            <!-- END Card 2 Container -->

                            <!-- Card 3 Container -->
                            <div class="relative">
                                <!-- Action -->
                                <div class="absolute end-4 top-4">
                                    <!-- Dropdown Container -->
                                    <div x-data="{ open: false }" class="relative">
                                        <button id="card-dropdown-3" aria-haspopup="true" x-bind:aria-expanded="open"
                                            x-on:click="open = true" type="button"
                                            class="flex h-6 w-6 items-center justify-center text-slate-400 hover:text-slate-600 active:text-slate-400">
                                            <svg class="hi-mini hi-ellipsis-vertical inline-block h-5 w-5"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M10 3a1.5 1.5 0 110 3 1.5 1.5 0 010-3zM10 8.5a1.5 1.5 0 110 3 1.5 1.5 0 010-3zM11.5 15.5a1.5 1.5 0 10-3 0 1.5 1.5 0 003 0z" />
                                            </svg>
                                        </button>

                                        <!-- Dropdown -->
                                        <div x-cloak x-show="open"
                                            x-transition:enter="transition ease-out duration-125"
                                            x-transition:enter-start="opacity-0 scale-75"
                                            x-transition:enter-end="opacity-100 scale-100"
                                            x-transition:leave="transition ease-in duration-100"
                                            x-transition:leave-start="opacity-100 scale-100"
                                            x-transition:leave-end="opacity-0 scale-75"
                                            x-on:click.outside="open = false" role="menu"
                                            aria-labelledby="card-dropdown-3"
                                            class="absolute end-0 z-10 mt-2 w-32 rounded-lg shadow-xl ltr:origin-top-right rtl:origin-top-left">
                                            <div
                                                class="divide-y divide-slate-100 rounded-lg bg-white ring-1 ring-black ring-opacity-5">
                                                <div class="flex flex-col gap-2 p-2">
                                                    <button type="button"
                                                        class="group inline-flex items-center gap-1 rounded-lg bg-slate-50 px-2.5 py-1.5 text-sm font-medium text-slate-600 hover:bg-slate-100 hover:text-slate-600">
                                                        <svg class="hi-mini hi-pencil inline-block h-4 w-4 opacity-50 group-hover:opacity-100"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                            fill="currentColor" aria-hidden="true">
                                                            <path
                                                                d="M2.695 14.763l-1.262 3.154a.5.5 0 00.65.65l3.155-1.262a4 4 0 001.343-.885L17.5 5.5a2.121 2.121 0 00-3-3L3.58 13.42a4 4 0 00-.885 1.343z" />
                                                        </svg>
                                                        <span>Edit</span>
                                                    </button>
                                                    <button type="button"
                                                        class="group inline-flex items-center gap-1 rounded-lg bg-slate-50 px-2.5 py-1 text-sm font-medium text-slate-600 hover:bg-rose-50 hover:text-rose-600">
                                                        <svg class="hi-mini hi-trash inline-block h-4 w-4 opacity-50 group-hover:opacity-100"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                            fill="currentColor" aria-hidden="true">
                                                            <path fill-rule="evenodd"
                                                                d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                        <span>Delete</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END Dropdown -->
                                    </div>
                                    <!-- END Dropdown Container -->
                                </div>
                                <!-- END Action -->

                                <!-- Card 3 -->
                                <a href="javascript:void(0)"
                                    class="group flex flex-col gap-3 rounded-xl bg-white p-4 text-sm transition hover:shadow-lg hover:shadow-slate-200">
                                    <div class="-ms-1.5 flex grow flex-wrap gap-1 pe-6">
                                        <span
                                            class="rounded-xl bg-blue-50 px-1.5 py-px font-medium text-blue-600">design</span>
                                        <span
                                            class="rounded-xl bg-emerald-50 px-1.5 py-px font-medium text-emerald-600">development</span>
                                    </div>
                                    <div>
                                        <h3 class="mb-1 font-bold">Website implementation</h3>
                                        <p class="line-clamp-3 text-slate-500">
                                            We are starting with the basic idea and move forward. It
                                            needs to be ready in a couple of months, so let's get
                                            started.
                                        </p>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <div class="inline-flex items-center gap-1.5 text-slate-500">
                                            <svg class="hi-mini hi-calendar-days inline-block h-5 w-5 text-slate-300"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M5.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H6a.75.75 0 01-.75-.75V12zM6 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H6zM7.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H8a.75.75 0 01-.75-.75V12zM8 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H8zM9.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V10zM10 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H10zM9.25 14a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V14zM12 9.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V10a.75.75 0 00-.75-.75H12zM11.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H12a.75.75 0 01-.75-.75V12zM12 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H12zM13.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H14a.75.75 0 01-.75-.75V10zM14 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H14z" />
                                                <path fill-rule="evenodd"
                                                    d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <span>November 20th</span>
                                        </div>
                                        <div class="inline-flex items-center gap-1.5 text-slate-500">
                                            <svg class="hi-mini hi-clock inline-block h-5 w-5 text-slate-300"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm.75-13a.75.75 0 00-1.5 0v5c0 .414.336.75.75.75h4a.75.75 0 000-1.5h-3.25V5z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <span>10:00</span>
                                        </div>
                                    </div>
                                </a>
                                <!-- END Card 3 -->
                            </div>
                            <!-- END Card 3 Container -->
                        </div>
                        <!-- END Todo List -->
                    </div>
                    <!-- END Todo -->

                    <!-- In Progress -->
                    <div class="w-72 flex-none">
                        <!-- In Progress Heading -->
                        <div class="mb-4 flex items-center justify-between gap-2">
                            <h2 class="font-semibold">In Progress</h2>
                            <div class="flex items-center gap-2">
                                <button type="button"
                                    class="group inline-flex h-8 w-8 items-center justify-center rounded-full border border-dashed border-slate-300 text-slate-400 hover:border-slate-500 hover:text-slate-950 active:border-slate-400">
                                    <svg class="hi-mini hi-plus inline-block h-5 w-5 transition group-active:scale-90"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                        <path
                                            d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                                    </svg>
                                </button>
                                <button type="button"
                                    class="group inline-flex h-8 w-8 items-center justify-center rounded-full border border-dashed border-slate-300 text-slate-400 hover:border-slate-500 hover:text-slate-950 active:border-slate-400">
                                    <svg class="hi-mini hi-pencil-square inline-block h-5 w-5 transition group-active:scale-90"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                        <path
                                            d="M5.433 13.917l1.262-3.155A4 4 0 017.58 9.42l6.92-6.918a2.121 2.121 0 013 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 01-.65-.65z" />
                                        <path
                                            d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0010 3H4.75A2.75 2.75 0 002 5.75v9.5A2.75 2.75 0 004.75 18h9.5A2.75 2.75 0 0017 15.25V10a.75.75 0 00-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <!-- END In Progress Heading -->

                        <!-- In Progress List -->
                        <div class="flex flex-col gap-4">
                            <!-- Card 4 Container -->
                            <div class="relative">
                                <!-- Action -->
                                <div class="absolute end-4 top-4">
                                    <!-- Dropdown Container -->
                                    <div x-data="{ open: false }" class="relative">
                                        <button id="card-dropdown-4" aria-haspopup="true" x-bind:aria-expanded="open"
                                            x-on:click="open = true" type="button"
                                            class="flex h-6 w-6 items-center justify-center text-slate-400 hover:text-slate-600 active:text-slate-400">
                                            <svg class="hi-mini hi-ellipsis-vertical inline-block h-5 w-5"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M10 3a1.5 1.5 0 110 3 1.5 1.5 0 010-3zM10 8.5a1.5 1.5 0 110 3 1.5 1.5 0 010-3zM11.5 15.5a1.5 1.5 0 10-3 0 1.5 1.5 0 003 0z" />
                                            </svg>
                                        </button>

                                        <!-- Dropdown -->
                                        <div x-cloak x-show="open"
                                            x-transition:enter="transition ease-out duration-125"
                                            x-transition:enter-start="opacity-0 scale-75"
                                            x-transition:enter-end="opacity-100 scale-100"
                                            x-transition:leave="transition ease-in duration-100"
                                            x-transition:leave-start="opacity-100 scale-100"
                                            x-transition:leave-end="opacity-0 scale-75"
                                            x-on:click.outside="open = false" role="menu"
                                            aria-labelledby="card-dropdown-4"
                                            class="absolute end-0 z-10 mt-2 w-32 rounded-lg shadow-xl ltr:origin-top-right rtl:origin-top-left">
                                            <div
                                                class="divide-y divide-slate-100 rounded-lg bg-white ring-1 ring-black ring-opacity-5">
                                                <div class="flex flex-col gap-2 p-2">
                                                    <button type="button"
                                                        class="group inline-flex items-center gap-1 rounded-lg bg-slate-50 px-2.5 py-1.5 text-sm font-medium text-slate-600 hover:bg-slate-100 hover:text-slate-600">
                                                        <svg class="hi-mini hi-pencil inline-block h-4 w-4 opacity-50 group-hover:opacity-100"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                            fill="currentColor" aria-hidden="true">
                                                            <path
                                                                d="M2.695 14.763l-1.262 3.154a.5.5 0 00.65.65l3.155-1.262a4 4 0 001.343-.885L17.5 5.5a2.121 2.121 0 00-3-3L3.58 13.42a4 4 0 00-.885 1.343z" />
                                                        </svg>
                                                        <span>Edit</span>
                                                    </button>
                                                    <button type="button"
                                                        class="group inline-flex items-center gap-1 rounded-lg bg-slate-50 px-2.5 py-1 text-sm font-medium text-slate-600 hover:bg-rose-50 hover:text-rose-600">
                                                        <svg class="hi-mini hi-trash inline-block h-4 w-4 opacity-50 group-hover:opacity-100"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                            fill="currentColor" aria-hidden="true">
                                                            <path fill-rule="evenodd"
                                                                d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                        <span>Delete</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END Dropdown -->
                                    </div>
                                    <!-- END Dropdown Container -->
                                </div>
                                <!-- END Action -->

                                <!-- Card 4 -->
                                <a href="javascript:void(0)"
                                    class="group flex flex-col gap-3 rounded-xl bg-white p-4 text-sm transition hover:shadow-lg hover:shadow-slate-200">
                                    <div class="-ms-1.5 flex grow flex-wrap gap-1 pe-6">
                                        <span
                                            class="rounded-xl bg-purple-50 px-1.5 py-px font-medium text-purple-600">business</span>
                                        <span
                                            class="rounded-xl bg-pink-50 px-1.5 py-px font-medium text-pink-600">accounting</span>
                                    </div>
                                    <div>
                                        <h3 class="mb-1 font-bold">Accounting software</h3>
                                        <p class="line-clamp-3 text-slate-500">
                                            Crucial to finish the integration to the new software as
                                            soon as possible.
                                        </p>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <div class="inline-flex items-center gap-1.5 text-slate-500">
                                            <svg class="hi-mini hi-calendar-days inline-block h-5 w-5 text-slate-300"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M5.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H6a.75.75 0 01-.75-.75V12zM6 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H6zM7.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H8a.75.75 0 01-.75-.75V12zM8 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H8zM9.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V10zM10 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H10zM9.25 14a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V14zM12 9.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V10a.75.75 0 00-.75-.75H12zM11.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H12a.75.75 0 01-.75-.75V12zM12 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H12zM13.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H14a.75.75 0 01-.75-.75V10zM14 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H14z" />
                                                <path fill-rule="evenodd"
                                                    d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <span>September 21st</span>
                                        </div>
                                        <div class="inline-flex items-center gap-1.5 text-slate-500">
                                            <svg class="hi-mini hi-clock inline-block h-5 w-5 text-slate-300"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm.75-13a.75.75 0 00-1.5 0v5c0 .414.336.75.75.75h4a.75.75 0 000-1.5h-3.25V5z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <span>16:30</span>
                                        </div>
                                    </div>
                                </a>
                                <!-- END Card 4 -->
                            </div>
                            <!-- END Card 4 Container -->

                            <!-- Card 5 Container -->
                            <div class="relative">
                                <!-- Action -->
                                <div class="absolute end-4 top-4">
                                    <!-- Dropdown Container -->
                                    <div x-data="{ open: false }" class="relative">
                                        <button id="card-dropdown-5" aria-haspopup="true" x-bind:aria-expanded="open"
                                            x-on:click="open = true" type="button"
                                            class="flex h-6 w-6 items-center justify-center text-slate-400 hover:text-slate-600 active:text-slate-400">
                                            <svg class="hi-mini hi-ellipsis-vertical inline-block h-5 w-5"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M10 3a1.5 1.5 0 110 3 1.5 1.5 0 010-3zM10 8.5a1.5 1.5 0 110 3 1.5 1.5 0 010-3zM11.5 15.5a1.5 1.5 0 10-3 0 1.5 1.5 0 003 0z" />
                                            </svg>
                                        </button>

                                        <!-- Dropdown -->
                                        <div x-cloak x-show="open"
                                            x-transition:enter="transition ease-out duration-125"
                                            x-transition:enter-start="opacity-0 scale-75"
                                            x-transition:enter-end="opacity-100 scale-100"
                                            x-transition:leave="transition ease-in duration-100"
                                            x-transition:leave-start="opacity-100 scale-100"
                                            x-transition:leave-end="opacity-0 scale-75"
                                            x-on:click.outside="open = false" role="menu"
                                            aria-labelledby="card-dropdown-5"
                                            class="absolute end-0 z-10 mt-2 w-32 rounded-lg shadow-xl ltr:origin-top-right rtl:origin-top-left">
                                            <div
                                                class="divide-y divide-slate-100 rounded-lg bg-white ring-1 ring-black ring-opacity-5">
                                                <div class="flex flex-col gap-2 p-2">
                                                    <button type="button"
                                                        class="group inline-flex items-center gap-1 rounded-lg bg-slate-50 px-2.5 py-1.5 text-sm font-medium text-slate-600 hover:bg-slate-100 hover:text-slate-600">
                                                        <svg class="hi-mini hi-pencil inline-block h-4 w-4 opacity-50 group-hover:opacity-100"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                            fill="currentColor" aria-hidden="true">
                                                            <path
                                                                d="M2.695 14.763l-1.262 3.154a.5.5 0 00.65.65l3.155-1.262a4 4 0 001.343-.885L17.5 5.5a2.121 2.121 0 00-3-3L3.58 13.42a4 4 0 00-.885 1.343z" />
                                                        </svg>
                                                        <span>Edit</span>
                                                    </button>
                                                    <button type="button"
                                                        class="group inline-flex items-center gap-1 rounded-lg bg-slate-50 px-2.5 py-1 text-sm font-medium text-slate-600 hover:bg-rose-50 hover:text-rose-600">
                                                        <svg class="hi-mini hi-trash inline-block h-4 w-4 opacity-50 group-hover:opacity-100"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                            fill="currentColor" aria-hidden="true">
                                                            <path fill-rule="evenodd"
                                                                d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                        <span>Delete</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END Dropdown -->
                                    </div>
                                    <!-- END Dropdown Container -->
                                </div>
                                <!-- END Action -->

                                <!-- Card 5 -->
                                <a href="javascript:void(0)"
                                    class="group flex flex-col gap-3 rounded-xl bg-white p-4 text-sm transition hover:shadow-lg hover:shadow-slate-200">
                                    <div class="-ms-1.5 flex grow flex-wrap gap-1 pe-6">
                                        <span
                                            class="rounded-xl bg-orange-50 px-1.5 py-px font-medium text-orange-600">personal</span>
                                    </div>
                                    <div>
                                        <h3 class="mb-1 font-bold">Import data to the new CRM</h3>
                                        <p class="line-clamp-3 text-slate-500">
                                            All customers' data is ready to be added in our new
                                            solution.
                                        </p>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <div class="inline-flex items-center gap-1.5 text-slate-500">
                                            <svg class="hi-mini hi-calendar-days inline-block h-5 w-5 text-slate-300"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M5.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H6a.75.75 0 01-.75-.75V12zM6 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H6zM7.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H8a.75.75 0 01-.75-.75V12zM8 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H8zM9.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V10zM10 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H10zM9.25 14a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V14zM12 9.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V10a.75.75 0 00-.75-.75H12zM11.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H12a.75.75 0 01-.75-.75V12zM12 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H12zM13.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H14a.75.75 0 01-.75-.75V10zM14 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H14z" />
                                                <path fill-rule="evenodd"
                                                    d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <span>September 22nd</span>
                                        </div>
                                        <div class="inline-flex items-center gap-1.5 text-slate-500">
                                            <svg class="hi-mini hi-clock inline-block h-5 w-5 text-slate-300"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm.75-13a.75.75 0 00-1.5 0v5c0 .414.336.75.75.75h4a.75.75 0 000-1.5h-3.25V5z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <span>17:00</span>
                                        </div>
                                    </div>
                                </a>
                                <!-- END Card 5 -->
                            </div>
                            <!-- END Card 5 Container -->
                        </div>
                        <!-- END In Progress List -->
                    </div>
                    <!-- END In Progress -->

                    <!-- Under Review -->
                    <div class="w-72 flex-none">
                        <!-- Under Review Heading -->
                        <div class="mb-4 flex items-center justify-between gap-2">
                            <h2 class="font-semibold">Under Review</h2>
                            <div class="flex items-center gap-2">
                                <button type="button"
                                    class="group inline-flex h-8 w-8 items-center justify-center rounded-full border border-dashed border-slate-300 text-slate-400 hover:border-slate-500 hover:text-slate-950 active:border-slate-400">
                                    <svg class="hi-mini hi-pencil-square inline-block h-5 w-5 transition group-active:scale-90"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                        <path
                                            d="M5.433 13.917l1.262-3.155A4 4 0 017.58 9.42l6.92-6.918a2.121 2.121 0 013 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 01-.65-.65z" />
                                        <path
                                            d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0010 3H4.75A2.75 2.75 0 002 5.75v9.5A2.75 2.75 0 004.75 18h9.5A2.75 2.75 0 0017 15.25V10a.75.75 0 00-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <!-- END Under Review Heading -->

                        <!-- Under Review List -->
                        <div class="flex flex-col gap-4">
                            <!-- Add a card -->
                            <div x-data="{ addFormShow: false }" class="relative">
                                <!-- Add a card form -->
                                <form x-show="addFormShow" x-cloak
                                    x-transition:enter="transition ease-out duration-125"
                                    x-transition:enter-start="opacity-0 -translate-y-4"
                                    x-transition:enter-end="opacity-100 translate-y-0"
                                    x-transition:leave="transition ease-in duration-100"
                                    x-transition:leave-start="opacity-100 translate-y-0"
                                    x-transition:leave-end="opacity-0 -translate-y-4"
                                    x-on:click.outside="addFormShow = false"
                                    class="z-1 absolute end-0 start-0 top-0 flex origin-top flex-col gap-2 rounded-xl bg-white p-4 shadow-lg shadow-slate-200"
                                    onsubmit="return false;">
                                    <div class="space-y-1">
                                        <input x-ref="addCardTitle" type="text" id="add-card-title"
                                            name="add-card-title" placeholder="Enter a title"
                                            class="block w-full rounded-lg border border-slate-200 px-3 py-2 text-sm leading-6 placeholder-slate-500 focus:border-blue-500" />
                                    </div>
                                    <div class="space-y-1">
                                        <textarea id="add-card-description" name="add-card-description" rows="4" placeholder="Enter further details"
                                            class="block w-full rounded-lg border border-slate-200 px-3 py-2 text-sm leading-6 placeholder-slate-500 focus:border-blue-500"></textarea>
                                    </div>
                                    <button x-on:click="addFormShow = false" type="submit"
                                        class="block w-full rounded-lg bg-blue-600 px-3 py-2 text-sm font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring">
                                        Add new card
                                    </button>
                                </form>
                                <!-- END Add a card form -->

                                <button x-on:click="addFormShow = true; $nextTick(() => $refs.addCardTitle.focus());"
                                    x-show="!addFormShow"
                                    class="group inline-flex w-full items-center justify-center gap-1 rounded-xl border border-dashed border-slate-300 p-4 text-sm font-medium text-slate-600 hover:border-slate-300 hover:text-slate-950 active:border-slate-200">
                                    <svg class="hi-mini hi-plus inline-block h-5 w-5 text-slate-400 transition group-hover:text-slate-600 group-active:scale-75"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                        <path
                                            d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                                    </svg>
                                    <span>Add a card</span>
                                </button>
                            </div>
                            <!-- END Add a card -->
                        </div>
                        <!-- END Under Review List -->
                    </div>
                    <!-- END Under Review -->

                    <!-- Completed -->
                    <div class="w-72 flex-none">
                        <!-- Completed Heading -->
                        <div class="mb-4 flex items-center justify-between gap-2">
                            <h2 class="font-semibold">Completed</h2>
                            <div class="flex items-center gap-2">
                                <button type="button"
                                    class="group inline-flex h-8 w-8 items-center justify-center rounded-full border border-dashed border-slate-300 text-slate-400 hover:border-slate-500 hover:text-slate-950 active:border-slate-400">
                                    <svg class="hi-mini hi-plus inline-block h-5 w-5 transition group-active:scale-90"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                        <path
                                            d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                                    </svg>
                                </button>
                                <button type="button"
                                    class="group inline-flex h-8 w-8 items-center justify-center rounded-full border border-dashed border-slate-300 text-slate-400 hover:border-slate-500 hover:text-slate-950 active:border-slate-400">
                                    <svg class="hi-mini hi-pencil-square inline-block h-5 w-5 transition group-active:scale-90"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                        <path
                                            d="M5.433 13.917l1.262-3.155A4 4 0 017.58 9.42l6.92-6.918a2.121 2.121 0 013 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 01-.65-.65z" />
                                        <path
                                            d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0010 3H4.75A2.75 2.75 0 002 5.75v9.5A2.75 2.75 0 004.75 18h9.5A2.75 2.75 0 0017 15.25V10a.75.75 0 00-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <!-- END Completed Heading -->

                        <!-- Completed List -->
                        <div class="flex flex-col gap-4">
                            <!-- Card 6 Container -->
                            <div class="relative">
                                <!-- Action -->
                                <div class="absolute end-4 top-4">
                                    <!-- Dropdown Container -->
                                    <div x-data="{ open: false }" class="relative">
                                        <button id="card-dropdown-6" aria-haspopup="true" x-bind:aria-expanded="open"
                                            x-on:click="open = true" type="button"
                                            class="flex h-6 w-6 items-center justify-center text-slate-400 hover:text-slate-600 active:text-slate-400">
                                            <svg class="hi-mini hi-ellipsis-vertical inline-block h-5 w-5"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M10 3a1.5 1.5 0 110 3 1.5 1.5 0 010-3zM10 8.5a1.5 1.5 0 110 3 1.5 1.5 0 010-3zM11.5 15.5a1.5 1.5 0 10-3 0 1.5 1.5 0 003 0z" />
                                            </svg>
                                        </button>

                                        <!-- Dropdown -->
                                        <div x-cloak x-show="open"
                                            x-transition:enter="transition ease-out duration-125"
                                            x-transition:enter-start="opacity-0 scale-75"
                                            x-transition:enter-end="opacity-100 scale-100"
                                            x-transition:leave="transition ease-in duration-100"
                                            x-transition:leave-start="opacity-100 scale-100"
                                            x-transition:leave-end="opacity-0 scale-75"
                                            x-on:click.outside="open = false" role="menu"
                                            aria-labelledby="card-dropdown-6"
                                            class="absolute end-0 z-10 mt-2 w-32 rounded-lg shadow-xl ltr:origin-top-right rtl:origin-top-left">
                                            <div
                                                class="divide-y divide-slate-100 rounded-lg bg-white ring-1 ring-black ring-opacity-5">
                                                <div class="flex flex-col gap-2 p-2">
                                                    <button type="button"
                                                        class="group inline-flex items-center gap-1 rounded-lg bg-slate-50 px-2.5 py-1.5 text-sm font-medium text-slate-600 hover:bg-slate-100 hover:text-slate-600">
                                                        <svg class="hi-mini hi-pencil inline-block h-4 w-4 opacity-50 group-hover:opacity-100"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                            fill="currentColor" aria-hidden="true">
                                                            <path
                                                                d="M2.695 14.763l-1.262 3.154a.5.5 0 00.65.65l3.155-1.262a4 4 0 001.343-.885L17.5 5.5a2.121 2.121 0 00-3-3L3.58 13.42a4 4 0 00-.885 1.343z" />
                                                        </svg>
                                                        <span>Edit</span>
                                                    </button>
                                                    <button type="button"
                                                        class="group inline-flex items-center gap-1 rounded-lg bg-slate-50 px-2.5 py-1 text-sm font-medium text-slate-600 hover:bg-rose-50 hover:text-rose-600">
                                                        <svg class="hi-mini hi-trash inline-block h-4 w-4 opacity-50 group-hover:opacity-100"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                            fill="currentColor" aria-hidden="true">
                                                            <path fill-rule="evenodd"
                                                                d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                        <span>Delete</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END Dropdown -->
                                    </div>
                                    <!-- END Dropdown Container -->
                                </div>
                                <!-- END Action -->

                                <!-- Card 6 -->
                                <a href="javascript:void(0)"
                                    class="group flex flex-col gap-3 rounded-xl bg-white p-4 text-sm transition hover:shadow-lg hover:shadow-slate-200">
                                    <div class="-ms-1.5 flex grow flex-wrap gap-1 pe-6">
                                        <span
                                            class="rounded-xl bg-orange-50 px-1.5 py-px font-medium text-orange-600">personal</span>
                                    </div>
                                    <div>
                                        <h3 class="mb-1 font-bold">Database data integration</h3>
                                        <p class="line-clamp-3 text-slate-500">
                                            Make sure all customer data is integrated in our brand new
                                            database system.
                                        </p>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <div class="inline-flex items-center gap-1.5 text-slate-500">
                                            <svg class="hi-mini hi-calendar-days inline-block h-5 w-5 text-slate-300"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M5.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H6a.75.75 0 01-.75-.75V12zM6 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H6zM7.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H8a.75.75 0 01-.75-.75V12zM8 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H8zM9.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V10zM10 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H10zM9.25 14a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V14zM12 9.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V10a.75.75 0 00-.75-.75H12zM11.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H12a.75.75 0 01-.75-.75V12zM12 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H12zM13.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H14a.75.75 0 01-.75-.75V10zM14 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H14z" />
                                                <path fill-rule="evenodd"
                                                    d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <span>August 23rd</span>
                                        </div>
                                        <div class="inline-flex items-center gap-1.5 text-slate-500">
                                            <svg class="hi-mini hi-clock inline-block h-5 w-5 text-slate-300"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm.75-13a.75.75 0 00-1.5 0v5c0 .414.336.75.75.75h4a.75.75 0 000-1.5h-3.25V5z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <span>11:26</span>
                                        </div>
                                    </div>
                                </a>
                                <!-- END Card 6 -->
                            </div>
                            <!-- END Card 6 Container -->

                            <!-- Card 7 Container -->
                            <div class="relative">
                                <!-- Action -->
                                <div class="absolute end-4 top-4">
                                    <!-- Dropdown Container -->
                                    <div x-data="{ open: false }" class="relative">
                                        <button id="card-dropdown-7" aria-haspopup="true" x-bind:aria-expanded="open"
                                            x-on:click="open = true" type="button"
                                            class="flex h-6 w-6 items-center justify-center text-slate-400 hover:text-slate-600 active:text-slate-400">
                                            <svg class="hi-mini hi-ellipsis-vertical inline-block h-5 w-5"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M10 3a1.5 1.5 0 110 3 1.5 1.5 0 010-3zM10 8.5a1.5 1.5 0 110 3 1.5 1.5 0 010-3zM11.5 15.5a1.5 1.5 0 10-3 0 1.5 1.5 0 003 0z" />
                                            </svg>
                                        </button>

                                        <!-- Dropdown -->
                                        <div x-cloak x-show="open"
                                            x-transition:enter="transition ease-out duration-125"
                                            x-transition:enter-start="opacity-0 scale-75"
                                            x-transition:enter-end="opacity-100 scale-100"
                                            x-transition:leave="transition ease-in duration-100"
                                            x-transition:leave-start="opacity-100 scale-100"
                                            x-transition:leave-end="opacity-0 scale-75"
                                            x-on:click.outside="open = false" role="menu"
                                            aria-labelledby="card-dropdown-7"
                                            class="absolute end-0 z-10 mt-2 w-32 rounded-lg shadow-xl ltr:origin-top-right rtl:origin-top-left">
                                            <div
                                                class="divide-y divide-slate-100 rounded-lg bg-white ring-1 ring-black ring-opacity-5">
                                                <div class="flex flex-col gap-2 p-2">
                                                    <button type="button"
                                                        class="group inline-flex items-center gap-1 rounded-lg bg-slate-50 px-2.5 py-1.5 text-sm font-medium text-slate-600 hover:bg-slate-100 hover:text-slate-600">
                                                        <svg class="hi-mini hi-pencil inline-block h-4 w-4 opacity-50 group-hover:opacity-100"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                            fill="currentColor" aria-hidden="true">
                                                            <path
                                                                d="M2.695 14.763l-1.262 3.154a.5.5 0 00.65.65l3.155-1.262a4 4 0 001.343-.885L17.5 5.5a2.121 2.121 0 00-3-3L3.58 13.42a4 4 0 00-.885 1.343z" />
                                                        </svg>
                                                        <span>Edit</span>
                                                    </button>
                                                    <button type="button"
                                                        class="group inline-flex items-center gap-1 rounded-lg bg-slate-50 px-2.5 py-1 text-sm font-medium text-slate-600 hover:bg-rose-50 hover:text-rose-600">
                                                        <svg class="hi-mini hi-trash inline-block h-4 w-4 opacity-50 group-hover:opacity-100"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                            fill="currentColor" aria-hidden="true">
                                                            <path fill-rule="evenodd"
                                                                d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                        <span>Delete</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END Dropdown -->
                                    </div>
                                    <!-- END Dropdown Container -->
                                </div>
                                <!-- END Action -->

                                <!-- Card 7 -->
                                <a href="javascript:void(0)"
                                    class="group flex flex-col gap-3 rounded-xl bg-white p-4 text-sm transition hover:shadow-lg hover:shadow-slate-200">
                                    <div class="-ms-1.5 flex grow flex-wrap gap-1 pe-6">
                                        <span
                                            class="rounded-xl bg-sky-50 px-1.5 py-px font-medium text-sky-600">marketing</span>
                                    </div>
                                    <div>
                                        <h3 class="mb-1 font-bold">Sales preparation</h3>
                                        <p class="line-clamp-3 text-slate-500">
                                            Prepare the email marketing software with templates for
                                            all possible responses.
                                        </p>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <div class="inline-flex items-center gap-1.5 text-slate-500">
                                            <svg class="hi-mini hi-calendar-days inline-block h-5 w-5 text-slate-300"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M5.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H6a.75.75 0 01-.75-.75V12zM6 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H6zM7.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H8a.75.75 0 01-.75-.75V12zM8 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H8zM9.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V10zM10 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H10zM9.25 14a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V14zM12 9.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V10a.75.75 0 00-.75-.75H12zM11.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H12a.75.75 0 01-.75-.75V12zM12 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H12zM13.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H14a.75.75 0 01-.75-.75V10zM14 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H14z" />
                                                <path fill-rule="evenodd"
                                                    d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <span>September 2nd</span>
                                        </div>
                                        <div class="inline-flex items-center gap-1.5 text-slate-500">
                                            <svg class="hi-mini hi-clock inline-block h-5 w-5 text-slate-300"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm.75-13a.75.75 0 00-1.5 0v5c0 .414.336.75.75.75h4a.75.75 0 000-1.5h-3.25V5z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <span>15:15</span>
                                        </div>
                                    </div>
                                </a>
                                <!-- END Card 7 -->
                            </div>
                            <!-- END Card 7 Container -->
                        </div>
                        <!-- END Completed List -->
                    </div>
                    <!-- END Completed -->
                </div>
                <!-- END Kanban Board -->
            </main>
            <!-- END Page Content -->
        </div>
        <!-- END Page Container -->
    </div>
</body>

</html>
