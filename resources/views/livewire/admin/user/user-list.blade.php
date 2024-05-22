<div>

    <div class=" p-10 sm:ml-64">



        <livewire:admin.modal />


        <!-- Breadcrumb -->
        <nav class="flex px-5 py-3 text-gray-700 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700"
            aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="#"
                        class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                        <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                        </svg>
                        Home
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 block w-3 h-3 mx-1 text-gray-400 " aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <a href="#"
                            class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Templates</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180  w-3 h-3 mx-1 text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Flowbite</span>
                    </div>
                </li>
            </ol>
        </nav>


        <livewire:admin.display-message />

        <div class="flex justify-between">
            <div class="text-2xl p-5 font-bold"> User List</div>
            <div class="p-5"><a href="{{ route('admin.user.add') }}" wire:navigate type="button"
                    class="space-x-1 flex text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    <span>Add New User</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 256 256">
                        <g fill="currentColor">
                            <path d="M224 128a96 96 0 1 1-96-96a96 96 0 0 1 96 96Z" opacity=".2" />
                            <path
                                d="M128 24a104 104 0 1 0 104 104A104.11 104.11 0 0 0 128 24Zm0 192a88 88 0 1 1 88-88a88.1 88.1 0 0 1-88 88Zm48-88a8 8 0 0 1-8 8h-32v32a8 8 0 0 1-16 0v-32H88a8 8 0 0 1 0-16h32V88a8 8 0 0 1 16 0v32h32a8 8 0 0 1 8 8Z" />
                        </g>
                    </svg>
                </a>
            </div>
        </div>

        <div class=" relative overflow-x-auto shadow-md sm:rounded-lg">
            <div
                class="p-5 flex items-center justify-between flex-column flex-wrap md:flex-row space-y-4 md:space-y-0 pb-4 bg-white dark:bg-gray-900">

                <label for="table-search" class="sr-only">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="text" wire:model.live="search" id="table-search-users"
                        class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search for users">
                </div>
            </div>
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="p-4">
                            <div class="flex items-center">
                                <input id="checkbox-all-search" type="checkbox"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="checkbox-all-search" class="sr-only">checkbox</label>
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Position
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($this->users as $user)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="w-4 p-4">
                                <div class="flex items-center">
                                    <input id="checkbox-table-search-1" type="checkbox"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                </div>
                            </td>
                            <th scope="row"
                                class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">

                                @if (!is_null($user['profile_image']))
                                    <img class="w-10 h-10 rounded-full"
                                        src="{{ asset('storage/photos/') . '/' . $user['profile_image'] }}"
                                        alt="Jese image">
                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                        viewBox="0 0 24 24">
                                        <g fill="none" stroke="currentColor" stroke-dasharray="28"
                                            stroke-dashoffset="28" stroke-linecap="round" stroke-width="2">
                                            <path
                                                d="M4 21V20C4 16.6863 6.68629 14 10 14H14C17.3137 14 20 16.6863 20 20V21">
                                                <animate fill="freeze" attributeName="stroke-dashoffset"
                                                    dur="0.4s" values="28;0" />
                                            </path>
                                            <path
                                                d="M12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7C16 9.20914 14.2091 11 12 11Z">
                                                <animate fill="freeze" attributeName="stroke-dashoffset"
                                                    begin="0.5s" dur="0.4s" values="28;0" />
                                            </path>
                                        </g>
                                    </svg>
                                @endif
                                <div class="ps-3">
                                    <div class="text-base font-semibold">{{ $user['fullname'] }}</div>
                                    <div class="font-normal text-gray-500">{{ $user['email'] }}</div>
                                </div>
                            </th>
                            <td class="px-6 py-4">
                                Admin
                            </td>
                            <td class="px-6 py-4">

                                <div class="flex items-center">


                                    <label class="inline-flex items-center mb-5 cursor-pointer">
                                        <input type="checkbox" class="sr-only peer"
                                            wire:change.prevent="changeStatus({{ $user['id'] }})"
                                            @if ($user['is_active']) checked @endif>
                                        <div
                                            class="relative w-9 h-5 bg-blue-400 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                                        </div>

                                    </label>
                                </div>
                            </td>
                            <td class="px-6 py-4 flex space-x-2">
                                <a href="#"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                        viewBox="0 0 24 24">
                                        <g fill="none" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2">
                                            <path stroke-dasharray="56" stroke-dashoffset="56"
                                                d="M3 21L4.99998 15L16 4C17 3 19 3 20 4C21 5 21 7 20 8L8.99998 19L3 21">
                                                <animate fill="freeze" attributeName="stroke-dashoffset"
                                                    dur="0.6s" values="56;0" />
                                            </path>
                                            <g stroke-dasharray="6" stroke-dashoffset="6">
                                                <path d="M15 5L19 9">
                                                    <animate fill="freeze" attributeName="stroke-dashoffset"
                                                        begin="0.6s" dur="0.2s" values="6;0" />
                                                </path>
                                                <path stroke-width="1" d="M6 15L9 18">
                                                    <animate fill="freeze" attributeName="stroke-dashoffset"
                                                        begin="0.6s" dur="0.2s" values="6;0" />
                                                </path>
                                            </g>
                                        </g>
                                        <path fill="currentColor" fill-opacity="0" d="M17 4H20V7L9 18L6 15L17 4Z">
                                            <animate fill="freeze" attributeName="fill-opacity" begin="0.8s"
                                                dur="0.15s" values="0;0.3" />
                                        </path>
                                    </svg></a>
                                <a href="#" wire:click.prevent="showOpen({{ $user['id'] }})"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                        viewBox="0 0 24 24">
                                        <defs>
                                            <clipPath id="lineMdWatch0">
                                                <rect width="24" height="12" />
                                            </clipPath>
                                            <symbol id="lineMdWatch1">
                                                <path fill="none" stroke="#fff" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M23 16.5C23 10.4249 18.0751 5.5 12 5.5C5.92487 5.5 1 10.4249 1 16.5z"
                                                    clip-path="url(#lineMdWatch0)">
                                                    <animate fill="freeze" attributeName="d" dur="0.5s"
                                                        values="M23 16.5C23 11.5 18.0751 12 12 12C5.92487 12 1 11.5 1 16.5z;M23 16.5C23 10.4249 18.0751 5.5 12 5.5C5.92487 5.5 1 10.4249 1 16.5z" />
                                                </path>
                                            </symbol>
                                            <mask id="lineMdWatch2">
                                                <use href="#lineMdWatch1" />
                                                <use href="#lineMdWatch1" transform="rotate(180 12 12)" />
                                                <circle cx="12" cy="12" r="0" fill="#fff">
                                                    <animate fill="freeze" attributeName="r" dur="0.2s"
                                                        values="0;3" />
                                                </circle>
                                            </mask>
                                        </defs>
                                        <rect width="24" height="24" fill="currentColor"
                                            mask="url(#lineMdWatch2)" />
                                    </svg></a>
                                <a href="#"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                        viewBox="0 0 256 256">
                                        <g fill="currentColor">
                                            <path d="M200 56v152a8 8 0 0 1-8 8H64a8 8 0 0 1-8-8V56Z" opacity=".2" />
                                            <path
                                                d="M216 48h-40v-8a24 24 0 0 0-24-24h-48a24 24 0 0 0-24 24v8H40a8 8 0 0 0 0 16h8v144a16 16 0 0 0 16 16h128a16 16 0 0 0 16-16V64h8a8 8 0 0 0 0-16ZM96 40a8 8 0 0 1 8-8h48a8 8 0 0 1 8 8v8H96Zm96 168H64V64h128Zm-80-104v64a8 8 0 0 1-16 0v-64a8 8 0 0 1 16 0Zm48 0v64a8 8 0 0 1-16 0v-64a8 8 0 0 1 16 0Z" />
                                        </g>
                                    </svg></a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

            <div class="p-10">
                {{ $this->users->links(data: ['scrollTo' => false]) }}
            </div>
        </div>

    </div>
</div>
