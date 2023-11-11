@extends('layouts.app')
@section('content')
    <!-- Page Content -->

    <!-- Page Heading -->
    <div class="container mx-auto px-4 pt-6 lg:px-8 lg:pt-8 xl:max-w-7xl">
        <div class="flex flex-col gap-2 text-center sm:flex-row sm:items-center sm:justify-between sm:text-start">
            <div class="grow">
                <h1 class="mb-1 text-xl font-bold">Quick Overview</h1>
                <h2 class="text-sm font-medium text-slate-500">
                    Welcome to your personal e-banking dashboard.
                </h2>
            </div>
            <div
                class="flex flex-none items-center justify-center gap-2 rounded px-2 sm:justify-end sm:bg-transparent sm:px-0">
                <a href="javascript:void(0)"
                    class="inline-flex items-center justify-center gap-1 rounded-lg border border-violet-700 bg-violet-700 px-3 py-2 text-sm font-semibold leading-5 text-white hover:border-violet-600 hover:bg-violet-600 hover:text-white focus:ring focus:ring-violet-400 focus:ring-opacity-50 active:border-violet-700 active:bg-violet-700">
                    <span>New request</span>
                </a>
                <a href="javascript:void(0)"
                    class="inline-flex items-center justify-center gap-1 rounded-lg border border-violet-700 bg-violet-700 px-3 py-2 text-sm font-semibold leading-5 text-white hover:border-violet-600 hover:bg-violet-600 hover:text-white focus:ring focus:ring-violet-400 focus:ring-opacity-50 active:border-violet-700 active:bg-violet-700">
                    <span>New transfer</span>
                </a>
            </div>
        </div>
        <hr class="mt-6 lg:mt-8" />
    </div>
    <!-- END Page Heading -->

    <!-- Page Section -->
    <div class="container mx-auto p-4 lg:p-8 xl:max-w-7xl">
        <div class="grid grid-cols-1 gap-4 md:grid-cols-3 lg:gap-8">
            <!-- Quick Statistics -->
            <a href="javascript:void(0)"
                class="flex flex-col rounded-lg border border-slate-200 bg-white hover:border-slate-300 active:border-violet-300">
                <div class="flex grow items-center justify-between p-5">
                    <dl>
                        <dt class="text-2xl font-bold">$112,768</dt>
                        <dd class="text-sm font-medium text-slate-500">
                            Total Balance
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
                        <dt class="text-2xl font-bold">$6,840</dt>
                        <dd class="text-sm font-medium text-slate-500">Income</dd>
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
                        <dt class="text-2xl font-bold">$4,725</dt>
                        <dd class="text-sm font-medium text-slate-500">Expenses</dd>
                    </dl>
                    <div
                        class="flex h-12 w-12 items-center justify-center rounded-xl border border-rose-100 bg-rose-50 text-rose-500">
                        <svg class="hi-outline hi-arrow-trending-down inline-block h-6 w-6"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 6L9 12.75l4.286-4.286a11.948 11.948 0 014.306 6.43l.776 2.898m0 0l3.182-5.511m-3.182 5.51l-5.511-3.181" />
                        </svg>
                    </div>
                </div>
                <div class="border-t border-slate-100 px-5 py-3 text-xs font-medium text-slate-500">
                    <p>This month</p>
                </div>
            </a>
            <!-- END Quick Statistics -->

            <!-- Credit Cards -->
            <a href="javascript:void(0)"
                class="flex flex-col rounded-lg border border-slate-200 bg-white hover:border-slate-300 active:border-violet-300">
                <div class="flex grow items-center justify-between p-5">
                    <dl>
                        <dt class="font-semibold">John Doe</dt>
                        <dd class="text-sm font-medium text-slate-500">
                            **** **** **** 9877
                        </dd>
                    </dl>
                    <div
                        class="flex h-12 w-12 items-center justify-center rounded-xl border border-slate-100 bg-slate-50 text-slate-500">
                        <svg class="inline-block text-[#1434cb] dark:text-white" xmlns="http://www.w3.org/2000/svg"
                            xml:space="preserve" viewBox="0 0 3384.54 2077.85">
                            <path fill="currentColor"
                                d="m1461.26 739.84-251.37 599.74h-164l-123.7-478.62c-7.51-29.48-14.04-40.28-36.88-52.7-37.29-20.23-98.87-39.21-153.05-50.99l3.68-17.43h263.99c33.65 0 63.9 22.4 71.54 61.15l65.33 347.04 161.46-408.2h163zm642.58 403.93c.66-158.29-218.88-167.01-217.37-237.72.47-21.52 20.96-44.4 65.81-50.24 22.23-2.91 83.48-5.13 152.95 26.84l27.25-127.18c-37.33-13.55-85.36-26.59-145.12-26.59-153.35 0-261.27 81.52-262.18 198.25-.99 86.34 77.03 134.52 135.81 163.21 60.47 29.38 80.76 48.26 80.53 74.54-.43 40.23-48.23 57.99-92.9 58.69-77.98 1.2-123.23-21.1-159.3-37.87l-28.12 131.39c36.25 16.63 103.16 31.14 172.53 31.87 162.99 0 269.61-80.51 270.11-205.19m404.94 195.81h143.49l-125.25-599.74h-132.44c-29.78 0-54.9 17.34-66.02 44l-232.81 555.74h162.91L2291 1250h199.05l18.73 89.58zm-173.11-212.5 81.66-225.18 47 225.18h-128.66zm-652.74-387.24-128.29 599.74H1399.5l128.34-599.74h155.09z">
                            </path>
                        </svg>
                    </div>
                </div>
                <div class="border-t border-slate-100 px-5 py-3 text-xs font-medium text-slate-500">
                    <p>Exp. 10/27</p>
                </div>
            </a>
            <a href="javascript:void(0)"
                class="flex flex-col rounded-lg border border-slate-200 bg-white hover:border-slate-300 active:border-violet-300">
                <div class="flex grow items-center justify-between p-5">
                    <dl>
                        <dt class="font-semibold">John Doe</dt>
                        <dd class="text-sm font-medium text-slate-500">
                            **** **** **** 2354
                        </dd>
                    </dl>
                    <div
                        class="flex h-12 w-12 items-center justify-center rounded-xl border border-slate-100 bg-slate-50 text-slate-500">
                        <svg class="inline-block w-8" xmlns="http://www.w3.org/2000/svg" xml:space="preserve"
                            viewBox="0 0 999.2 776">
                            <path
                                d="M181.1 774.3v-51.5c0-19.7-12-32.6-32.6-32.6-10.3 0-21.5 3.4-29.2 14.6-6-9.4-14.6-14.6-27.5-14.6-8.6 0-17.2 2.6-24 12v-10.3h-18v82.4h18v-45.5c0-14.6 7.7-21.5 19.7-21.5s18 7.7 18 21.5v45.5h18v-45.5c0-14.6 8.6-21.5 19.7-21.5 12 0 18 7.7 18 21.5v45.5h19.9zm267-82.4h-29.2V667h-18v24.9h-16.3v16.3h16.3V746c0 18.9 7.7 30 28.3 30 7.7 0 16.3-2.6 22.3-6l-5.2-15.5c-5.2 3.4-11.2 4.3-15.5 4.3-8.6 0-12-5.2-12-13.7v-36.9H448v-16.3zm152.8-1.8c-10.3 0-17.2 5.2-21.5 12v-10.3h-18v82.4h18v-46.4c0-13.7 6-21.5 17.2-21.5 3.4 0 7.7.9 11.2 1.7l5.2-17.2c-3.6-.7-8.7-.7-12.1-.7zM370 698.7c-8.6-6-20.6-8.6-33.5-8.6-20.6 0-34.3 10.3-34.3 26.6 0 13.7 10.3 21.5 28.3 24l8.6.9c9.4 1.7 14.6 4.3 14.6 8.6 0 6-6.9 10.3-18.9 10.3-12 0-21.5-4.3-27.5-8.6l-8.6 13.7c9.4 6.9 22.3 10.3 35.2 10.3 24 0 37.8-11.2 37.8-26.6 0-14.6-11.2-22.3-28.3-24.9l-8.6-.9c-7.7-.9-13.7-2.6-13.7-7.7 0-6 6-9.4 15.5-9.4 10.3 0 20.6 4.3 25.8 6.9l7.6-14.6zm478.9-8.6c-10.3 0-17.2 5.2-21.5 12v-10.3h-18v82.4h18v-46.4c0-13.7 6-21.5 17.2-21.5 3.4 0 7.7.9 11.2 1.7l5.2-17c-3.5-.9-8.6-.9-12.1-.9zm-230 43c0 24.9 17.2 42.9 43.8 42.9 12 0 20.6-2.6 29.2-9.4l-8.6-14.6c-6.9 5.2-13.7 7.7-21.5 7.7-14.6 0-24.9-10.3-24.9-26.6 0-15.5 10.3-25.8 24.9-26.6 7.7 0 14.6 2.6 21.5 7.7l8.6-14.6c-8.6-6.9-17.2-9.4-29.2-9.4-26.6-.1-43.8 18-43.8 42.9zm166.5 0v-41.2h-18v10.3c-6-7.7-14.6-12-25.8-12-23.2 0-41.2 18-41.2 42.9s18 42.9 41.2 42.9c12 0 20.6-4.3 25.8-12v10.3h18v-41.2zm-66.1 0c0-14.6 9.4-26.6 24.9-26.6 14.6 0 24.9 11.2 24.9 26.6 0 14.6-10.3 26.6-24.9 26.6-15.4-.9-24.9-12.1-24.9-26.6zm-215.4-43c-24 0-41.2 17.2-41.2 42.9 0 25.8 17.2 42.9 42.1 42.9 12 0 24-3.4 33.5-11.2l-8.6-12.9c-6.9 5.2-15.5 8.6-24 8.6-11.2 0-22.3-5.2-24.9-19.7h60.9v-6.9c.8-26.5-14.7-43.7-37.8-43.7zm0 15.5c11.2 0 18.9 6.9 20.6 19.7h-42.9c1.7-11.1 9.4-19.7 22.3-19.7zm447.2 27.5v-73.8h-18v42.9c-6-7.7-14.6-12-25.8-12-23.2 0-41.2 18-41.2 42.9s18 42.9 41.2 42.9c12 0 20.6-4.3 25.8-12v10.3h18v-41.2zm-66.1 0c0-14.6 9.4-26.6 24.9-26.6 14.6 0 24.9 11.2 24.9 26.6 0 14.6-10.3 26.6-24.9 26.6-15.5-.9-24.9-12.1-24.9-26.6zm-602.6 0v-41.2h-18v10.3c-6-7.7-14.6-12-25.8-12-23.2 0-41.2 18-41.2 42.9s18 42.9 41.2 42.9c12 0 20.6-4.3 25.8-12v10.3h18v-41.2zm-66.9 0c0-14.6 9.4-26.6 24.9-26.6 14.6 0 24.9 11.2 24.9 26.6 0 14.6-10.3 26.6-24.9 26.6-15.5-.9-24.9-12.1-24.9-26.6z" />
                            <path fill="#FF5A00" d="M364 66.1h270.4v485.8H364z" />
                            <path fill="#EB001B"
                                d="M382 309c0-98.7 46.4-186.3 117.6-242.9C447.2 24.9 381.1 0 309 0 138.2 0 0 138.2 0 309s138.2 309 309 309c72.1 0 138.2-24.9 190.6-66.1C428.3 496.1 382 407.7 382 309z" />
                            <path fill="#F79E1B"
                                d="M999.2 309c0 170.8-138.2 309-309 309-72.1 0-138.2-24.9-190.6-66.1 72.1-56.7 117.6-144.2 117.6-242.9S570.8 122.7 499.6 66.1C551.9 24.9 618 0 690.1 0 861 0 999.2 139.1 999.2 309z" />
                        </svg>
                    </div>
                </div>
                <div class="border-t border-slate-100 px-5 py-3 text-xs font-medium text-slate-500">
                    <p>Exp. 06/28</p>
                </div>
            </a>
            <a href="javascript:void(0)"
                class="group flex items-center justify-center rounded-lg border-2 border-dashed border-slate-200 py-6 text-sm font-medium text-slate-600 hover:border-violet-300 hover:text-slate-900 active:border-slate-200">
                <div class="flex items-center gap-1">
                    <svg class="hi-mini hi-plus inline-block h-5 w-5 text-slate-500 group-hover:text-violet-600"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path
                            d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                    </svg>
                    <span>New Card</span>
                </div>
            </a>
            <!-- END Credit Cards -->

            <!-- Transactions -->
            <div class="flex flex-col rounded-lg border bg-white md:col-span-3">
                <div
                    class="flex flex-col items-center justify-between gap-4 border-b border-slate-100 p-5 text-center sm:flex-row sm:text-start">
                    <div>
                        <h2 class="mb-0.5 font-semibold">Recent Transactions</h2>
                        <h3 class="text-sm font-medium text-slate-600">
                            All your recent transactions in one place
                        </h3>
                    </div>
                    <div>
                        <a href="javascript:void(0)"
                            class="inline-flex items-center justify-center gap-2 rounded-lg border border-slate-200 bg-white px-3 py-2 text-sm font-semibold leading-5 text-slate-800 hover:border-violet-300 hover:text-violet-800 active:border-slate-200">
                            View all transactions
                        </a>
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
                                        Date
                                    </th>
                                    <th
                                        class="min-w-[180px] px-3 py-2 text-start text-sm font-semibold uppercase tracking-wider text-slate-700">
                                        Account
                                    </th>
                                    <th
                                        class="min-w-[180px] px-3 py-2 text-start text-sm font-semibold uppercase tracking-wider text-slate-700">
                                        Description
                                    </th>
                                    <th
                                        class="min-w-[180px] px-3 py-2 text-start text-sm font-semibold uppercase tracking-wider text-slate-700">
                                        Category
                                    </th>
                                    <th
                                        class="px-3 py-2 text-start text-sm font-semibold uppercase tracking-wider text-slate-700">
                                        Amount
                                    </th>
                                    <th
                                        class="min-w-[100px] py-2 ps-3 text-end text-sm font-semibold uppercase tracking-wider text-slate-700">
                                        Actions
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
                                    <td class="p-3">
                                        <a href="javascript:void(0)"
                                            class="font-medium text-violet-500 hover:text-violet-700">Savings
                                            (****543210)</a>
                                    </td>
                                    <td class="p-3 font-medium text-slate-600">
                                        Johnson's Pharmacy
                                    </td>
                                    <td class="p-3 text-start">Healthcare</td>
                                    <td class="p-3 font-medium">
                                        <div
                                            class="inline-block rounded-full bg-rose-100 px-2 py-1 text-xs font-semibold leading-4 text-rose-800">
                                            -$200.00
                                        </div>
                                    </td>
                                    <td class="py-3 ps-3 text-end font-medium">
                                        <a href="javascript:void(0)"
                                            class="group inline-flex items-center gap-1 rounded-lg border border-slate-200 px-2.5 py-1.5 font-medium text-slate-800 hover:border-violet-300 hover:text-violet-800 active:border-slate-200">
                                            <span>View</span>
                                            <svg class="hi-mini hi-arrow-right inline-block h-5 w-5 text-slate-400 group-hover:text-violet-600 group-active:translate-x-0.5"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.29a.75.75 0 111.04-1.08l5.5 5.25a.75.75 0 010 1.08l-5.5 5.25a.75.75 0 11-1.04-1.08l4.158-3.96H3.75A.75.75 0 013 10z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="border-b border-slate-100">
                                    <td class="py-3 pe-3 text-start text-slate-600">
                                        2023-09-10 14:15
                                    </td>
                                    <td class="p-3">
                                        <a href="javascript:void(0)"
                                            class="font-medium text-violet-500 hover:text-violet-700">Current
                                            (****567890)</a>
                                    </td>
                                    <td class="p-3 font-medium text-slate-600">
                                        Monthly Bonus from ABC Inc
                                    </td>
                                    <td class="p-3 text-start">Bonus</td>
                                    <td class="p-3 font-medium">
                                        <div
                                            class="inline-block rounded-full bg-emerald-100 px-2 py-1 text-xs font-semibold leading-4 text-emerald-800">
                                            +$1,000.00
                                        </div>
                                    </td>
                                    <td class="py-3 ps-3 text-end font-medium">
                                        <a href="javascript:void(0)"
                                            class="group inline-flex items-center gap-1 rounded-lg border border-slate-200 px-2.5 py-1.5 font-medium text-slate-800 hover:border-violet-300 hover:text-violet-800 active:border-slate-200">
                                            <span>View</span>
                                            <svg class="hi-mini hi-arrow-right inline-block h-5 w-5 text-slate-400 group-hover:text-violet-600 group-active:translate-x-0.5"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.29a.75.75 0 111.04-1.08l5.5 5.25a.75.75 0 010 1.08l-5.5 5.25a.75.75 0 11-1.04-1.08l4.158-3.96H3.75A.75.75 0 013 10z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="border-b border-slate-100">
                                    <td class="py-3 pe-3 text-start text-slate-600">
                                        2023-09-05 17:45
                                    </td>
                                    <td class="p-3">
                                        <a href="javascript:void(0)"
                                            class="font-medium text-violet-500 hover:text-violet-700">Savings
                                            (****543210)</a>
                                    </td>
                                    <td class="p-3 font-medium text-slate-600">
                                        Gas Refill at PetroFuel
                                    </td>
                                    <td class="p-3 text-start">Transportation</td>
                                    <td class="p-3 font-medium">
                                        <div
                                            class="inline-block rounded-full bg-rose-100 px-2 py-1 text-xs font-semibold leading-4 text-rose-800">
                                            -$30.00
                                        </div>
                                    </td>
                                    <td class="py-3 ps-3 text-end font-medium">
                                        <a href="javascript:void(0)"
                                            class="group inline-flex items-center gap-1 rounded-lg border border-slate-200 px-2.5 py-1.5 font-medium text-slate-800 hover:border-violet-300 hover:text-violet-800 active:border-slate-200">
                                            <span>View</span>
                                            <svg class="hi-mini hi-arrow-right inline-block h-5 w-5 text-slate-400 group-hover:text-violet-600 group-active:translate-x-0.5"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.29a.75.75 0 111.04-1.08l5.5 5.25a.75.75 0 010 1.08l-5.5 5.25a.75.75 0 11-1.04-1.08l4.158-3.96H3.75A.75.75 0 013 10z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="border-b border-slate-100">
                                    <td class="py-3 pe-3 text-start text-slate-600">
                                        2023-08-30 08:00
                                    </td>
                                    <td class="p-3">
                                        <a href="javascript:void(0)"
                                            class="font-medium text-violet-500 hover:text-violet-700">Savings
                                            (****543210)</a>
                                    </td>
                                    <td class="p-3 font-medium text-slate-600">
                                        Savings Interest Payment
                                    </td>
                                    <td class="p-3 text-start">Interest</td>
                                    <td class="p-3 font-medium">
                                        <div
                                            class="inline-block rounded-full bg-emerald-100 px-2 py-1 text-xs font-semibold leading-4 text-emerald-800">
                                            +$25.00
                                        </div>
                                    </td>
                                    <td class="py-3 ps-3 text-end font-medium">
                                        <a href="javascript:void(0)"
                                            class="group inline-flex items-center gap-1 rounded-lg border border-slate-200 px-2.5 py-1.5 font-medium text-slate-800 hover:border-violet-300 hover:text-violet-800 active:border-slate-200">
                                            <span>View</span>
                                            <svg class="hi-mini hi-arrow-right inline-block h-5 w-5 text-slate-400 group-hover:text-violet-600 group-active:translate-x-0.5"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.29a.75.75 0 111.04-1.08l5.5 5.25a.75.75 0 010 1.08l-5.5 5.25a.75.75 0 11-1.04-1.08l4.158-3.96H3.75A.75.75 0 013 10z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="border-b border-slate-100">
                                    <td class="py-3 pe-3 text-start text-slate-600">
                                        2023-08-25 20:20
                                    </td>
                                    <td class="p-3">
                                        <a href="javascript:void(0)"
                                            class="font-medium text-violet-500 hover:text-violet-700">Savings
                                            (****543210)</a>
                                    </td>
                                    <td class="p-3 font-medium text-slate-600">
                                        Dinner at Bistro
                                    </td>
                                    <td class="p-3 text-start">Entertainment</td>
                                    <td class="p-3 font-medium">
                                        <div
                                            class="inline-block rounded-full bg-rose-100 px-2 py-1 text-xs font-semibold leading-4 text-rose-800">
                                            -$40.00
                                        </div>
                                    </td>
                                    <td class="py-3 ps-3 text-end font-medium">
                                        <a href="javascript:void(0)"
                                            class="group inline-flex items-center gap-1 rounded-lg border border-slate-200 px-2.5 py-1.5 font-medium text-slate-800 hover:border-violet-300 hover:text-violet-800 active:border-slate-200">
                                            <span>View</span>
                                            <svg class="hi-mini hi-arrow-right inline-block h-5 w-5 text-slate-400 group-hover:text-violet-600 group-active:translate-x-0.5"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.29a.75.75 0 111.04-1.08l5.5 5.25a.75.75 0 010 1.08l-5.5 5.25a.75.75 0 11-1.04-1.08l4.158-3.96H3.75A.75.75 0 013 10z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="border-b border-slate-100">
                                    <td class="py-3 pe-3 text-start text-slate-600">
                                        2023-09-10 14:15
                                    </td>
                                    <td class="p-3">
                                        <a href="javascript:void(0)"
                                            class="font-medium text-violet-500 hover:text-violet-700">Current
                                            (****567890)</a>
                                    </td>
                                    <td class="p-3 font-medium text-slate-600">
                                        Freelance Web Design for XYZ
                                    </td>
                                    <td class="p-3 text-start">Freelance</td>
                                    <td class="p-3 font-medium">
                                        <div
                                            class="inline-block rounded-full bg-emerald-100 px-2 py-1 text-xs font-semibold leading-4 text-emerald-800">
                                            +$3,100.00
                                        </div>
                                    </td>
                                    <td class="py-3 ps-3 text-end font-medium">
                                        <a href="javascript:void(0)"
                                            class="group inline-flex items-center gap-1 rounded-lg border border-slate-200 px-2.5 py-1.5 font-medium text-slate-800 hover:border-violet-300 hover:text-violet-800 active:border-slate-200">
                                            <span>View</span>
                                            <svg class="hi-mini hi-arrow-right inline-block h-5 w-5 text-slate-400 group-hover:text-violet-600 group-active:translate-x-0.5"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.29a.75.75 0 111.04-1.08l5.5 5.25a.75.75 0 010 1.08l-5.5 5.25a.75.75 0 11-1.04-1.08l4.158-3.96H3.75A.75.75 0 013 10z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="border-b border-slate-100">
                                    <td class="py-3 pe-3 text-start text-slate-600">
                                        2023-08-15 09:15
                                    </td>
                                    <td class="p-3">
                                        <a href="javascript:void(0)"
                                            class="font-medium text-violet-500 hover:text-violet-700">Savings
                                            (****543210)</a>
                                    </td>
                                    <td class="p-3 font-medium text-slate-600">
                                        Rent Payment to Green Properties
                                    </td>
                                    <td class="p-3 text-start">Housing</td>
                                    <td class="p-3 font-medium">
                                        <div
                                            class="inline-block rounded-full bg-rose-100 px-2 py-1 text-xs font-semibold leading-4 text-rose-800">
                                            -$1,700.00
                                        </div>
                                    </td>
                                    <td class="py-3 ps-3 text-end font-medium">
                                        <a href="javascript:void(0)"
                                            class="group inline-flex items-center gap-1 rounded-lg border border-slate-200 px-2.5 py-1.5 font-medium text-slate-800 hover:border-violet-300 hover:text-violet-800 active:border-slate-200">
                                            <span>View</span>
                                            <svg class="hi-mini hi-arrow-right inline-block h-5 w-5 text-slate-400 group-hover:text-violet-600 group-active:translate-x-0.5"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.29a.75.75 0 111.04-1.08l5.5 5.25a.75.75 0 010 1.08l-5.5 5.25a.75.75 0 11-1.04-1.08l4.158-3.96H3.75A.75.75 0 013 10z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="border-b border-slate-100">
                                    <td class="py-3 pe-3 text-start text-slate-600">
                                        2023-08-10 16:30
                                    </td>
                                    <td class="p-3">
                                        <a href="javascript:void(0)"
                                            class="font-medium text-violet-500 hover:text-violet-700">Savings
                                            (****543210)</a>
                                    </td>
                                    <td class="p-3 font-medium text-slate-600">
                                        Clothing Store Purchase at Fashion World
                                    </td>
                                    <td class="p-3 text-start">Clothing</td>
                                    <td class="p-3 font-medium">
                                        <div
                                            class="inline-block rounded-full bg-rose-100 px-2 py-1 text-xs font-semibold leading-4 text-rose-800">
                                            -$75.00
                                        </div>
                                    </td>
                                    <td class="py-3 ps-3 text-end font-medium">
                                        <a href="javascript:void(0)"
                                            class="group inline-flex items-center gap-1 rounded-lg border border-slate-200 px-2.5 py-1.5 font-medium text-slate-800 hover:border-violet-300 hover:text-violet-800 active:border-slate-200">
                                            <span>View</span>
                                            <svg class="hi-mini hi-arrow-right inline-block h-5 w-5 text-slate-400 group-hover:text-violet-600 group-active:translate-x-0.5"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.29a.75.75 0 111.04-1.08l5.5 5.25a.75.75 0 010 1.08l-5.5 5.25a.75.75 0 11-1.04-1.08l4.158-3.96H3.75A.75.75 0 013 10z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="border-b border-slate-100">
                                    <td class="py-3 pe-3 text-start text-slate-600">
                                        2023-08-05 14:00
                                    </td>
                                    <td class="p-3">
                                        <a href="javascript:void(0)"
                                            class="font-medium text-violet-500 hover:text-violet-700">Savings
                                            (****543210)</a>
                                    </td>
                                    <td class="p-3 font-medium text-slate-600">
                                        Grocery Shopping at FreshMart
                                    </td>
                                    <td class="p-3 text-start">Food</td>
                                    <td class="p-3 font-medium">
                                        <div
                                            class="inline-block rounded-full bg-rose-100 px-2 py-1 text-xs font-semibold leading-4 text-rose-800">
                                            -$150.00
                                        </div>
                                    </td>
                                    <td class="py-3 ps-3 text-end font-medium">
                                        <a href="javascript:void(0)"
                                            class="group inline-flex items-center gap-1 rounded-lg border border-slate-200 px-2.5 py-1.5 font-medium text-slate-800 hover:border-violet-300 hover:text-violet-800 active:border-slate-200">
                                            <span>View</span>
                                            <svg class="hi-mini hi-arrow-right inline-block h-5 w-5 text-slate-400 group-hover:text-violet-600 group-active:translate-x-0.5"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.29a.75.75 0 111.04-1.08l5.5 5.25a.75.75 0 010 1.08l-5.5 5.25a.75.75 0 11-1.04-1.08l4.158-3.96H3.75A.75.75 0 013 10z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="border-b border-slate-100">
                                    <td class="py-3 pe-3 text-start text-slate-600">
                                        2023-08-01 11:45
                                    </td>
                                    <td class="p-3">
                                        <a href="javascript:void(0)"
                                            class="font-medium text-violet-500 hover:text-violet-700">Current
                                            (****567890)</a>
                                    </td>
                                    <td class="p-3 font-medium text-slate-600">
                                        Salary Deposit from XYZ Inc
                                    </td>
                                    <td class="p-3 text-start">Salary</td>
                                    <td class="p-3 font-medium">
                                        <div
                                            class="inline-block rounded-full bg-emerald-100 px-2 py-1 text-xs font-semibold leading-4 text-emerald-800">
                                            +$3,700.00
                                        </div>
                                    </td>
                                    <td class="py-3 ps-3 text-end font-medium">
                                        <a href="javascript:void(0)"
                                            class="group inline-flex items-center gap-1 rounded-lg border border-slate-200 px-2.5 py-1.5 font-medium text-slate-800 hover:border-violet-300 hover:text-violet-800 active:border-slate-200">
                                            <span>View</span>
                                            <svg class="hi-mini hi-arrow-right inline-block h-5 w-5 text-slate-400 group-hover:text-violet-600 group-active:translate-x-0.5"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.29a.75.75 0 111.04-1.08l5.5 5.25a.75.75 0 010 1.08l-5.5 5.25a.75.75 0 11-1.04-1.08l4.158-3.96H3.75A.75.75 0 013 10z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </a>
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
                <span class="font-medium">TailBank</span>
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
                    <a href="https://pixelcave.com" class="font-medium text-violet-600 hover:text-violet-400"
                        target="_blank">pixelcave</a></span>
            </div>
        </div>
    </footer>
@endsection
