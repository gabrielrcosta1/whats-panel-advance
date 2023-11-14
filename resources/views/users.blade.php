@extends('layouts.app')
@section('content')
    <!-- Page Content -->

    <!-- Page Heading -->
    <div class="container mx-auto px-4 pt-6 lg:px-8 lg:pt-8 xl:max-w-7xl">
        <div class="flex flex-col gap-2 text-center sm:flex-row sm:items-center sm:justify-between sm:text-start">
            <div class="grow">
                <h1 class="mb-1 text-xl font-bold">Gerenciar Usuários</h1>
                <h2 class="text-sm font-medium text-slate-500">
                    Bem-vindo ao seu painel de gerencimento de Usuários
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
        <div class="grid grid-cols-1 gap-4 md:grid-cols-3 lg:gap-8">
            <!-- Quick Statistics -->



            <div class="flex flex-col rounded-lg border bg-white md:col-span-3">
                <div
                    class="flex flex-col items-center justify-between gap-4 border-b border-slate-100 p-5 text-center sm:flex-row sm:text-start">
                    <div>
                        <h2 class="mb-0.5 font-semibold">Usuários</h2>
                        <h3 class="text-sm font-medium text-slate-600">
                            Todas os usuários em um só lugar
                        </h3>
                    </div>
                    <div>

                        <div x-data="{ modalOpen: false }" @keydown.escape.window="modalOpen = false"
                            class="relative z-50 w-auto h-auto">
                            <button type="button" @click="modalOpen=true"
                                class="inline-flex items-center justify-center
                                gap-2 rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm font-semibold leading-5
                                text-slate-800 hover:border-violet-300 hover:text-violet-800 active:border-slate-200">
                                Novo Usuário
                            </button>

                            <template x-teleport="body">
                                <div x-show="modalOpen"
                                    class="fixed top-0 left-0 z-[99] flex items-center justify-center w-screen h-screen"
                                    x-cloak>
                                    <div x-show="modalOpen" x-transition:enter="ease-out duration-300"
                                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                        x-transition:leave="ease-in duration-300" x-transition:leave-start="opacity-100"
                                        x-transition:leave-end="opacity-0" @click="modalOpen=false"
                                        class="absolute inset-0 w-full h-full bg-black bg-opacity-40"></div>
                                    <div x-show="modalOpen" x-trap.inert.noscroll="modalOpen"
                                        x-transition:enter="ease-out duration-300"
                                        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                        x-transition:leave="ease-in duration-200"
                                        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                        class="relative w-full py-6 bg-white px-7 sm:max-w-lg sm:rounded-lg">
                                        <div class="flex items-center justify-between pb-2">
                                            <h3 class="text-lg font-semibold">Novo usuário</h3>
                                            <button @click="modalOpen=false"
                                                class="absolute top-0 right-0 flex items-center justify-center w-8 h-8 mt-5 mr-5 text-gray-600 rounded-full hover:text-gray-800 hover:bg-gray-50">
                                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="relative w-auto">
                                            <!-- Modal header -->

                                            <!-- Modal body -->
                                            <form action="#" class="p-4 md:p-5">
                                                <div class="grid gap-4 mb-4 grid-cols-2">
                                                    <div class="col-span-2">
                                                        <label for="name"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome</label>
                                                        <input type="text" name="name" id="name"
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                            placeholder="Nome do usuário" required="">
                                                    </div>
                                                    <div class="col-span-2">
                                                        <label for="email"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                                        <input type="email" name="email" id="email"
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                            placeholder="email@email.com" required="">
                                                    </div>
                                                    <div class="col-span-2">
                                                        <label for="password"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Senha</label>
                                                        <input type="text" name="password" id="password"
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                            placeholder="**********" required="">
                                                    </div>


                                                </div>
                                                <button type="submit"
                                                    class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                    <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                    Add novo usuário
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>
                <div class="p-5">
                    <!-- Responsive Table Container -->
                    <div class="min-w-full overflow-x-auto rounded">
                        <!-- Alternate Responsive Table -->
                        <table class="min-w-full align-middle text-sm">
                            <!-- Table Header -->
                            <thead>
                                <tr class="border-b-2 border-slate-100">
                                    <th
                                        class="min-w-[180px] py-3 pe-3 text-start text-sm font-semibold uppercase tracking-wider text-slate-700">
                                        Data do cadastrp
                                    </th>
                                    <th
                                        class="min-w-[180px] px-3 py-2 text-start text-sm font-semibold uppercase tracking-wider text-slate-700">
                                        Nome
                                    </th>
                                    <th
                                        class="min-w-[180px] px-3 py-2 text-start text-sm font-semibold uppercase tracking-wider text-slate-700">
                                        Email
                                    </th>
                                    <th
                                        class="px-3 py-2 text-start text-sm font-semibold uppercase tracking-wider text-slate-700">
                                        Status
                                    </th>
                                    <th
                                        class="px-3 py-2 text-start text-sm font-semibold uppercase tracking-wider text-slate-700">
                                        Ações
                                    </th>
                                </tr>
                            </thead>
                            <!-- END Table Header -->

                            <!-- Table Body -->
                            <tbody>
                                <tr class="border-b border-slate-100">
                                    <td class="py-3 pe-3 text-start text-slate-600">
                                        2023-09-15 09:30
                                    </td>
                                    <td class="p-3 font-medium text-slate-600">
                                        Johnson's Pharmacy
                                    </td>
                                    <td class="p-3">
                                        <a href="javascript:void(0)"
                                            class="font-medium text-violet-500 hover:text-violet-700">65998032702</a>
                                    </td>

                                    <td class="p-3 font-medium">
                                        <div
                                            class="inline-block rounded-full bg-rose-100 px-2 py-1 text-xs font-semibold leading-4 text-rose-800">
                                            Aguardando
                                        </div>
                                    </td>
                                    <td class="p-3 text-start">


                                        <div class="inline-flex rounded-md shadow-sm">
                                            <a href="#" aria-current="page"
                                                class="px-4 py-2 text-sm font-medium text-blue-700 bg-white border border-gray-200 rounded-s-lg hover:bg-gray-100 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                                                Editar
                                            </a>
                                            <a href="#"
                                                class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                                                Status
                                            </a>
                                            <a href="#"
                                                class="px-4 py-2 text-sm font-medium text-red-600 bg-white border border-gray-200 rounded-e-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                                                Deletar
                                            </a>
                                        </div>


                                    </td>
                                </tr>

                            </tbody>
                            <!-- END Table Body -->
                        </table>
                        <!-- END Alternate Responsive Table -->
                    </div>
                    <!-- END Responsive Table Container -->
                </div>
            </div>
            <!-- END Transactions -->
        </div>
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
