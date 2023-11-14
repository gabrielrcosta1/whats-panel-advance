<div class="p-5">
    <div class="w-full max-w-xs mx-auto">

        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
            </div>
            <input type="search" id="default-search" wire:model.live='search'
                class="block w-full h-8 p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Pesquise pelo número ou nome">

        </div>
    </div>
    <!-- Responsive Table Container -->
    <div class="min-w-full overflow-x-auto rounded">
        <!-- Alternate Responsive Table -->
        <table class="min-w-full align-middle text-sm">
            <!-- Table Header -->
            <thead>
                <tr class="border-b-2 border-slate-100">
                    <th
                        class="min-w-[180px] py-3 pe-3 text-start text-sm font-semibold uppercase tracking-wider text-slate-700">
                        <button class="flex items-center gap-x-3 focus:outline-none" wire:click="toggleOrder">
                            <span>Data do contato</span>

                            <svg class="h-3" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2.13347 0.0999756H2.98516L5.01902 4.79058H3.86226L3.45549 3.79907H1.63772L1.24366 4.79058H0.0996094L2.13347 0.0999756ZM2.54025 1.46012L1.96822 2.92196H3.11227L2.54025 1.46012Z"
                                    fill="currentColor" stroke="currentColor" stroke-width="0.1" />
                                <path
                                    d="M0.722656 9.60832L3.09974 6.78633H0.811638V5.87109H4.35819V6.78633L2.01925 9.60832H4.43446V10.5617H0.722656V9.60832Z"
                                    fill="currentColor" stroke="currentColor" stroke-width="0.1" />
                                <path
                                    d="M8.45558 7.25664V7.40664H8.60558H9.66065C9.72481 7.40664 9.74667 7.42274 9.75141 7.42691C9.75148 7.42808 9.75146 7.42993 9.75116 7.43262C9.75001 7.44265 9.74458 7.46304 9.72525 7.49314C9.72522 7.4932 9.72518 7.49326 9.72514 7.49332L7.86959 10.3529L7.86924 10.3534C7.83227 10.4109 7.79863 10.418 7.78568 10.418C7.77272 10.418 7.73908 10.4109 7.70211 10.3534L7.70177 10.3529L5.84621 7.49332C5.84617 7.49325 5.84612 7.49318 5.84608 7.49311C5.82677 7.46302 5.82135 7.44264 5.8202 7.43262C5.81989 7.42993 5.81987 7.42808 5.81994 7.42691C5.82469 7.42274 5.84655 7.40664 5.91071 7.40664H6.96578H7.11578V7.25664V0.633865C7.11578 0.42434 7.29014 0.249976 7.49967 0.249976H8.07169C8.28121 0.249976 8.45558 0.42434 8.45558 0.633865V7.25664Z"
                                    fill="currentColor" stroke="currentColor" stroke-width="0.3" />
                            </svg>
                        </button>
                    </th>
                    <th
                        class="min-w-[180px] px-3 py-2 text-start text-sm font-semibold uppercase tracking-wider text-slate-700">
                        Nome
                    </th>
                    <th
                        class="min-w-[180px] px-3 py-2 text-start text-sm font-semibold uppercase tracking-wider text-slate-700">
                        Número
                    </th>
                    <th
                        class="min-w-[180px] px-3 py-2 text-start text-sm font-semibold uppercase tracking-wider text-slate-700">
                        Departamento
                    </th>
                    <th
                        class="min-w-[180px] px-3 py-2 text-start text-sm font-semibold uppercase tracking-wider text-slate-700">
                        assunto
                    </th>
                    <th class="px-3 py-2 text-start text-sm font-semibold uppercase tracking-wider text-slate-700">
                        Status
                    </th>
                    <th class="px-3 py-2 text-start text-sm font-semibold uppercase tracking-wider text-slate-700">
                        Ações
                    </th>
                </tr>
            </thead>
            <!-- END Table Header -->

            <!-- Table Body -->
            <tbody>
                @foreach ($conversations as $conversation)
                    <tr class="border-b border-slate-100">
                        <td class="py-3 pe-3 text-start text-slate-600">
                            {{ $conversation->date }}
                        </td>
                        <td class="p-3 font-medium text-slate-600">
                            {{ $conversation->name }}
                        </td>
                        <td class="p-3">
                            @php
                                $originalString = $conversation->number;
                                $phoneNumber = explode('@', $originalString)[0];
                                echo '<a class="text-violet-500 hover:text-blue-700" href="https://api.whatsapp.com/send?phone=' . $phoneNumber . '" target="_blank">' . $phoneNumber . '</a>';
                            @endphp
                        </td>

                        <td class="p-3 text-start">{{ $conversation->type }}</td>
                        <td class="p-3 text-start">{{ $conversation->subject }}</td>
                        <td class="p-3 font-medium">
                            @if ($conversation->status === 'Finalizado')
                                <div
                                    class="inline-block rounded-full bg-green-100 px-2 py-1 text-xs font-semibold leading-4 text-green-800">
                                    {{ $conversation->status }}
                                </div>
                            @elseif ($conversation->status === 'Em andamento')
                                <div
                                    class="inline-block rounded-full bg-amber-100 px-2 py-1 text-xs font-semibold leading-4 text-amber-800">
                                    {{ $conversation->status }}
                                </div>
                            @else
                                <div
                                    class="inline-block rounded-full bg-red-100 px-2 py-1 text-xs font-semibold leading-4 text-red-800">
                                    {{ $conversation->status }}
                                </div>
                            @endif

                        </td>
                        <td class="p-3 text-start">

                            <div x-data="{ modalOpen: false }" @keydown.escape.window="modalOpen = false"
                                class="relative z-50 w-auto h-auto">
                                <button @click="modalOpen=true"
                                    class="group inline-flex items-center gap-1 rounded-lg border border-slate-200 px-2.5 py-1.5 font-medium text-slate-800 hover:border-violet-300 hover:text-violet-800 active:border-slate-200">
                                    <span>Alterar</span>
                                    <svg class="hi-mini hi-arrow-right inline-block h-5 w-5 text-slate-400 group-hover:text-violet-600 group-active:translate-x-0.5"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.29a.75.75 0 111.04-1.08l5.5 5.25a.75.75 0 010 1.08l-5.5 5.25a.75.75 0 11-1.04-1.08l4.158-3.96H3.75A.75.75 0 013 10z"
                                            clip-rule="evenodd"></path>
                                    </svg></button>
                                <template x-teleport="body">
                                    <div x-show="modalOpen"
                                        class="fixed top-0 left-0 z-[99] flex items-center justify-center w-screen h-screen"
                                        x-cloak>
                                        <div x-show="modalOpen" x-transition:enter="ease-out duration-300"
                                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                            x-transition:leave="ease-in duration-300"
                                            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                                            class="absolute inset-0 w-full h-full bg-black bg-opacity-40">
                                        </div>
                                        <div x-show="modalOpen" x-trap.inert.noscroll="modalOpen"
                                            x-transition:enter="ease-out duration-300"
                                            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                            x-transition:leave="ease-in duration-200"
                                            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                            class="relative w-full py-6 bg-white px-7 sm:max-w-lg sm:rounded-lg">
                                            <div class="flex items-center justify-between pb-2">
                                                <h3 class="text-lg font-semibold">Alterar Status</h3>
                                                <button @click="modalOpen=false"
                                                    class="absolute top-0 right-0 flex items-center justify-center w-8 h-8 mt-5 mr-5 text-gray-600 rounded-full hover:text-gray-800 hover:bg-gray-50">
                                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M6 18L18 6M6 6l12 12" />
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="relative w-auto">
                                                <!-- Modal body -->
                                                <div class="p-4 md:p-5">
                                                    <p class="text-gray-500 dark:text-gray-400 mb-4">Selecione
                                                        o status:</p>
                                                    <ul class="space-y-4 mb-4">
                                                        <li>
                                                            <input type="radio" id="job-1" name="job"
                                                                value="job-1" class="hidden peer" required>
                                                            <label for="job-1"
                                                                class="inline-flex items-center justify-between w-full p-5 text-gray-900 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-500 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-900 hover:bg-gray-100 dark:text-white dark:bg-gray-600 dark:hover:bg-gray-500">
                                                                <div class="block">
                                                                    <div class="w-full text-lg font-semibold">
                                                                        Finalizado</div>
                                                                    <div
                                                                        class="w-full text-gray-500 dark:text-gray-400">
                                                                        Contato Finalizado</div>
                                                                </div>
                                                                <span class="material-symbols-outlined">
                                                                    done
                                                                </span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" id="job-2" name="job"
                                                                value="job-2" class="hidden peer">
                                                            <label for="job-2"
                                                                class="inline-flex items-center justify-between w-full p-5 text-gray-900 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-500 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-900 hover:bg-gray-100 dark:text-white dark:bg-gray-600 dark:hover:bg-gray-500">
                                                                <div class="block">
                                                                    <div class="w-full text-lg font-semibold">
                                                                        Em andamento</div>
                                                                    <div
                                                                        class="w-full text-gray-500 dark:text-gray-400">
                                                                        Contato em andamento</div>
                                                                </div>
                                                                <span class="material-symbols-outlined">
                                                                    cycle
                                                                </span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" id="job-3" name="job"
                                                                value="job-3" class="hidden peer">
                                                            <label for="job-3"
                                                                class="inline-flex items-center justify-between w-full p-5 text-gray-900 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-500 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-900 hover:bg-gray-100 dark:text-white dark:bg-gray-600 dark:hover:bg-gray-500">
                                                                <div class="block">
                                                                    <div class="w-full text-lg font-semibold">
                                                                        Aguardando</div>
                                                                    <div
                                                                        class="w-full text-gray-500 dark:text-gray-400">
                                                                        Aguardando atendimento</div>
                                                                </div>
                                                                <span class="material-symbols-outlined">
                                                                    pending
                                                                </span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <button
                                                        class="text-white inline-flex w-full justify-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                        Salvar
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </template>
                            </div>
                        </td>
                    </tr>
                @endforeach


            </tbody>
            <!-- END Table Body -->
        </table>
        <br>
        <!-- END Alternate Responsive Table -->
        {{ $conversations->links() }}
    </div>

</div>
