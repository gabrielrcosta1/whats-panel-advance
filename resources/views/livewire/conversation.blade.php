<div class="grid grid-cols-1 gap-4 md:grid-cols-3 lg:gap-8">
    <!-- Quick Statistics -->
    <a href="javascript:void(0)"
        class="flex flex-col rounded-lg border border-slate-200 bg-white hover:border-slate-300 active:border-violet-300">
        <div class="flex grow items-center justify-between p-5">
            <dl>
                <dt class="text-2xl font-bold">{{ $count }}</dt>
                <dd class="text-sm font-medium text-slate-500">
                    Conversas Totais
                </dd>
            </dl>
            <div
                class="flex h-12 w-12 items-center justify-center rounded-xl border border-violet-100 bg-violet-50 text-violet-500">
                <svg class="hi-outline hi-currency-dollar inline-block h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
        </div>
        <div class="border-t border-slate-100 px-5 py-3 text-xs font-medium text-slate-500">
            <p>From all accounts</p>
        </div>
    </a>
    <a href="javascript:void(0)"
        class="flex flex-col rounded-lg border border-slate-200 bg-white hover:border-slate-300 active:border-emerald-300">
        <div class="flex grow items-center justify-between p-5">
            <dl>
                <dt class="text-2xl font-bold">{{ $countConversationsNotRead }}</dt>
                <dd class="text-sm font-medium text-slate-500">Conversas não Lidas</dd>
            </dl>
            <div
                class="flex h-12 w-12 items-center justify-center rounded-xl border border-emerald-100 bg-emerald-50 text-emerald-500">
                <svg class="hi-outline hi-arrow-trending-up inline-block h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
                </svg>
            </div>
        </div>
        <div class="border-t border-slate-100 px-5 py-3 text-xs font-medium text-slate-500">
            <p>This month</p>
        </div>
    </a>
    <a href="javascript:void(0)"
        class="flex flex-col rounded-lg border border-slate-200 bg-white hover:border-slate-300 active:border-rose-300">
        <div class="flex grow items-center justify-between p-5">
            <dl>
                <dt class="text-2xl font-bold">{{ $countConversationsFinalized }}</dt>
                <dd class="text-sm font-medium text-slate-500">Conversas Lidas</dd>
            </dl>
            <div
                class="flex h-12 w-12 items-center justify-center rounded-xl border border-rose-100 bg-rose-50 text-rose-500">
                <svg class="hi-outline hi-arrow-trending-down inline-block h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 6L9 12.75l4.286-4.286a11.948 11.948 0 014.306 6.43l.776 2.898m0 0l3.182-5.511m-3.182 5.51l-5.511-3.181" />
                </svg>
            </div>
        </div>
        <div class="border-t border-slate-100 px-5 py-3 text-xs font-medium text-slate-500">
            <p>This month</p>
        </div>
    </a>


    <div class="flex flex-col rounded-lg border bg-white md:col-span-3">
        <div
            class="flex flex-col items-center justify-between gap-4 border-b border-slate-100 p-5 text-center sm:flex-row sm:text-start">
            <div>
                <h2 class="mb-0.5 font-semibold">Clientes recentes</h2>
                <h3 class="text-sm font-medium text-slate-600">
                    Todas as suas conversas recentes em um só lugar
                </h3>
            </div>
            <div>
                <a href="{{ route('clients') }}" wire:navigate
                    class="inline-flex items-center justify-center gap-2 rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm font-semibold leading-5 text-slate-800 hover:border-violet-300 hover:text-violet-800 active:border-slate-200">
                    Ver todas as conversas
                </a>
            </div>
        </div>
        <div class="p-5">
            <div class="min-w-full overflow-x-auto rounded">
                <!-- Alternate Responsive Table -->
                <table class="min-w-full align-middle text-sm">
                    <!-- Table Header -->
                    <thead>
                        <tr class="border-b-2 border-slate-100">
                            <th
                                class="min-w-[180px] py-3 pe-3 text-start text-sm font-semibold uppercase tracking-wider text-slate-700">
                                Data do contato
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
                                    <a href="javascript:void(0)"
                                        class="font-medium text-violet-500 hover:text-violet-700">
                                        {{ $conversation->number }}</a>
                                </td>

                                <td class="p-3 text-start"> {{ $conversation->type }}</td>
                                <td class="p-3 text-start"> {{ $conversation->subject }}</td>
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
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.29a.75.75 0 111.04-1.08l5.5 5.25a.75.75 0 010 1.08l-5.5 5.25a.75.75 0 11-1.04-1.08l4.158-3.96H3.75A.75.75 0 013 10z"
                                                    clip-rule="evenodd"></path>
                                            </svg></button>
                                        <template x-teleport="body">
                                            <div x-show="modalOpen"
                                                class="fixed top-0 left-0 z-[99] flex items-center justify-center w-screen h-screen"
                                                x-cloak>
                                                <div x-show="modalOpen" x-transition:enter="ease-out duration-300"
                                                    x-transition:enter-start="opacity-0"
                                                    x-transition:enter-end="opacity-100"
                                                    x-transition:leave="ease-in duration-300"
                                                    x-transition:leave-start="opacity-100"
                                                    x-transition:leave-end="opacity-0"
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
                                                                    <input type="radio" id="job-1"
                                                                        name="job" value="Finalizado"
                                                                        wire:model='status' class="hidden peer"
                                                                        required>
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
                                                                    <input type="radio" id="job-2"
                                                                        name="job" value="Em andamento"
                                                                        wire:model='status' class="hidden peer">
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
                                                                    <input type="radio" id="job-3"
                                                                        name="job" value="Aguardando"
                                                                        wire:model='status' class="hidden peer">
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
                                                            <button wire:click="updateStatus({{ $conversation->id }})"
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
                <!-- END Alternate Responsive Table -->
            </div>
            <!-- END Responsive Table Container -->

        </div>
    </div>
    <!-- END Transactions -->
</div>
