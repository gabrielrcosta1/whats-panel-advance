@extends('layouts.app')
@section('content')
    <!-- Page Content -->

    <!-- Page Heading -->
    <div class="container mx-auto px-4 pt-6 lg:px-8 lg:pt-8 xl:max-w-7xl">
        <div class="flex flex-col gap-2 text-center sm:flex-row sm:items-center sm:justify-between sm:text-start">
            <div class="grow">
                <h1 class="mb-1 text-xl font-bold">Visão geral</h1>
                <h2 class="text-sm font-medium text-slate-500">
                    Bem-vindo ao seu painel de gerencimento de conversar .
                </h2>
            </div>
            <div
                class="flex flex-none items-center justify-center gap-2 rounded px-2 sm:justify-end sm:bg-transparent sm:px-0">


            </div>
        </div>
        <hr class="mt-6 lg:mt-8" />
    </div>
    <!-- END Page Heading -->

    <!-- Page Section -->
    <div class="container mx-auto p-4 lg:p-8 xl:max-w-7xl">
        <livewire:conversation />
    </div>
    <!-- END Page Section -->

    <!-- END Page Content -->

    <!-- Page Footer -->
    <footer id="page-footer" class="flex flex-none items-center py-5">
        <div
            class="container mx-auto flex flex-col px-4 text-center text-sm md:flex-row md:justify-between md:text-start lg:px-8 xl:max-w-7xl">
            <div class="pb-1 pt-4 md:pb-4">
                <span class="font-medium">AdvanceRH</span>
                ©
            </div>
            <div class="inline-flex items-center justify-center pb-4 pt-1 md:pt-4">
                <span>Crafted with</span>
                <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                    class="hi-solid hi-heart mx-1 inline-block h-4 w-4 text-red-600">
                    <path fill-rule="evenodd"
                        d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                        clip-rule="evenodd"></path>
                </svg>
                <span>
                    by
                    <a href="https://linktr.ee/grsoftwares" class="font-medium text-violet-600 hover:text-violet-400"
                        target="_blank">GRSOFTWARES</a></span>
            </div>
        </div>
    </footer>
@endsection
