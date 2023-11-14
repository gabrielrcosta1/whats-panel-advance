<div class="grid grid-cols-1 gap-4 md:grid-cols-3 lg:gap-8">
    <!-- Quick Statistics -->
    <a href="javascript:void(0)"
        class="flex flex-col rounded-lg border border-slate-200 bg-white hover:border-slate-300 active:border-violet-300">
        <div class="flex grow items-center justify-between p-5">
            <dl>
                <dt class="text-2xl font-bold" wire:poll.15s>{{ $count }}</dt>
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
                                <button class="flex items-center gap-x-3 focus:outline-none" wire:click="toggleOrder">
                                    <span>Data do contato</span>

                                    <svg class="h-3" viewBox="0 0 10 11" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
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
                                        @php
                                            $originalString = $conversation->number;
                                            $phoneNumber = explode('@', $originalString)[0];
                                            echo '<a class="text-violet-500 hover:text-blue-700" href="https://api.whatsapp.com/send?phone=' . $phoneNumber . '" target="_blank">' . $phoneNumber . '</a>';
                                        @endphp


                                    </a>
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
                                        x-on:update-status.window="modalOpen = false"
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
                                                            <div
                                                                class="mb-[0.125rem] block min-h-[1.5rem] pl-[1.5rem]">
                                                                <input
                                                                    class="relative float-left -ml-[1.5rem] mr-1 mt-0.5 h-5 w-5 appearance-none rounded-full border-2 border-solid border-neutral-300 before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] dark:border-neutral-600 dark:checked:border-primary dark:checked:after:border-primary dark:checked:after:bg-primary dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:border-primary dark:checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca]"
                                                                    type="radio" name="flexRadioDefault"
                                                                    id="radioDefault01" value="Finalizado"
                                                                    wire:model='status' />
                                                                <label
                                                                    class="mt-px inline-block pl-[0.15rem] hover:cursor-pointer"
                                                                    for="radioDefault01">
                                                                    Finalizado
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="mb-[0.125rem] block min-h-[1.5rem] pl-[1.5rem]">
                                                                <input
                                                                    class="relative float-left -ml-[1.5rem] mr-1 mt-0.5 h-5 w-5 appearance-none rounded-full border-2 border-solid border-neutral-300 before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] dark:border-neutral-600 dark:checked:border-primary dark:checked:after:border-primary dark:checked:after:bg-primary dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:border-primary dark:checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca]"
                                                                    type="radio" name="flexRadioDefault"
                                                                    id="radioDefault03" value="Em andamento"
                                                                    wire:model='status' />
                                                                <label
                                                                    class="mt-px inline-block pl-[0.15rem] hover:cursor-pointer"
                                                                    for="radioDefault03">
                                                                    Em andamento
                                                                </label>
                                                            </div>
                                                            <div
                                                                class="mb-[0.125rem] block min-h-[1.5rem] pl-[1.5rem]">
                                                                <input
                                                                    class="relative float-left -ml-[1.5rem] mr-1 mt-0.5 h-5 w-5 appearance-none rounded-full border-2 border-solid border-neutral-300 before:pointer-events-none before:absolute before:h-4 before:w-4 before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] after:absolute after:z-[1] after:block after:h-4 after:w-4 after:rounded-full after:content-[''] checked:border-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:left-1/2 checked:after:top-1/2 checked:after:h-[0.625rem] checked:after:w-[0.625rem] checked:after:rounded-full checked:after:border-primary checked:after:bg-primary checked:after:content-[''] checked:after:[transform:translate(-50%,-50%)] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:outline-none focus:ring-0 focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:border-primary checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] dark:border-neutral-600 dark:checked:border-primary dark:checked:after:border-primary dark:checked:after:bg-primary dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:border-primary dark:checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca]"
                                                                    type="radio" name="flexRadioDefault"
                                                                    id="radioDefault02" value="Aguardando"
                                                                    wire:model='status' />
                                                                <label
                                                                    class="mt-px inline-block pl-[0.15rem] hover:cursor-pointer"
                                                                    for="radioDefault02">
                                                                    Aguardando
                                                                </label>
                                                            </div>


                                                            <br>
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


            </div>
            <!-- END Responsive Table Container -->

        </div>
    </div>
    {{-- <div x-data="{ showNotification: true }">

        <script>
            let notification;

            function showNotification() {
                if (Notification.permission !== 'granted') {
                    Notification.requestPermission().then(permission => {
                        if (permission === 'granted') {
                            createNotification();
                        }
                    });
                } else {
                    createNotification();
                }
            }

            function createNotification() {
                notification = new Notification('Notificação Cringe!', {
                    body: 'Vai neymar, eu sei que tu gosta né neymar!!!',
                    icon: 'https://www.advancerh.com.br/rn_advance/_lib/img/grp__NM__img__NM__AdvanceRH2021-SC.png',
                    image: 'https://static.vecteezy.com/system/resources/previews/022/653/879/non_2x/fantasy-island-with-waterfalls-3d-illustration-elements-of-this-image-furnished-by-nasa-generative-ai-free-photo.jpg',
                });
            }


            document.addEventListener('livewire:initialized', () => {
                @this.on('update-status', (event) => {
                    showNotification();

                });
            });
        </script>


    </div> --}}

</div>
