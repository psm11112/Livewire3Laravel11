<x-app-layout>
{{--    <aside id="logo-sidebar"--}}
{{--        class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-300 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"--}}
{{--        aria-label="Sidebar">--}}
{{--        <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">--}}
{{--            <ul class="space-y-2 font-medium">--}}
{{--                <li>--}}
{{--                    <a href="#"--}}
{{--                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">--}}
{{--                        <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"--}}
{{--                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"--}}
{{--                            viewBox="0 0 22 21">--}}
{{--                            <path--}}
{{--                                d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />--}}
{{--                            <path--}}
{{--                                d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />--}}
{{--                        </svg>--}}
{{--                        <span class="ms-3">Dashboard</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="#"--}}
{{--                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">--}}
{{--                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"--}}
{{--                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"--}}
{{--                            viewBox="0 0 18 18">--}}
{{--                            <path--}}
{{--                                d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />--}}
{{--                        </svg>--}}
{{--                        <span class="flex-1 ms-3 whitespace-nowrap">Kanban</span>--}}
{{--                        <span--}}
{{--                            class="inline-flex items-center justify-center px-2 ms-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full dark:bg-gray-700 dark:text-gray-300">Pro</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="#"--}}
{{--                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">--}}
{{--                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"--}}
{{--                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"--}}
{{--                            viewBox="0 0 20 20">--}}
{{--                            <path--}}
{{--                                d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />--}}
{{--                        </svg>--}}
{{--                        <span class="flex-1 ms-3 whitespace-nowrap">Inbox</span>--}}
{{--                        <span--}}
{{--                            class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="#"--}}
{{--                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">--}}
{{--                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"--}}
{{--                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"--}}
{{--                            viewBox="0 0 20 18">--}}
{{--                            <path--}}
{{--                                d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />--}}
{{--                        </svg>--}}
{{--                        <span class="flex-1 ms-3 whitespace-nowrap">Users</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="#"--}}
{{--                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">--}}
{{--                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"--}}
{{--                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"--}}
{{--                            viewBox="0 0 18 20">--}}
{{--                            <path--}}
{{--                                d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z" />--}}
{{--                        </svg>--}}
{{--                        <span class="flex-1 ms-3 whitespace-nowrap">Products</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="#"--}}
{{--                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">--}}
{{--                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"--}}
{{--                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"--}}
{{--                            viewBox="0 0 18 16">--}}
{{--                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"--}}
{{--                                stroke-width="2"--}}
{{--                                d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />--}}
{{--                        </svg>--}}
{{--                        <span class="flex-1 ms-3 whitespace-nowrap">Sign In</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="#"--}}
{{--                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">--}}
{{--                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"--}}
{{--                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"--}}
{{--                            viewBox="0 0 20 20">--}}
{{--                            <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z" />--}}
{{--                            <path--}}
{{--                                d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z" />--}}
{{--                            <path--}}
{{--                                d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z" />--}}
{{--                        </svg>--}}
{{--                        <span class="flex-1 ms-3 whitespace-nowrap">Sign Up</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <button type="button" class="flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-sales" data-collapse-toggle="dropdown-sales">--}}
{{--                        <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-400 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>--}}
{{--                        <span class="flex-1 ml-3 text-left whitespace-nowrap">Sales</span>--}}
{{--                        <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>--}}
{{--                    </button>--}}
{{--                    <ul id="dropdown-sales" class="hidden py-2 space-y-2">--}}
{{--                        <li>--}}
{{--                            <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Products</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Billing</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Invoice</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </aside>--}}

{{--    <div class="pt-20 sm:ml-64">--}}
{{--        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">--}}
{{--            <div class="flex sm:grid grid-cols-4 gap-4 mb-4 ">--}}
{{--                <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800 ">--}}


{{--                    <div--}}
{{--                        class="w-full max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 border-2 border-gray-200">--}}
{{--                        <div class="p-2">--}}
{{--                            <svg class="text-purple-600" xmlns="http://www.w3.org/2000/svg" width="32"--}}
{{--                                height="32" viewBox="0 0 256 256">--}}
{{--                                <path fill="currentColor"--}}
{{--                                    d="M164.38 181.1a52 52 0 1 0-72.76 0a75.89 75.89 0 0 0-30 28.89a12 12 0 0 0 20.78 12a53 53 0 0 1 91.22 0a12 12 0 1 0 20.78-12a75.89 75.89 0 0 0-30.02-28.89ZM100 144a28 28 0 1 1 28 28a28 28 0 0 1-28-28Zm147.21 9.59a12 12 0 0 1-16.81-2.39c-8.33-11.09-19.85-19.59-29.33-21.64a12 12 0 0 1-1.82-22.91a20 20 0 1 0-24.78-28.3a12 12 0 1 1-21-11.6a44 44 0 1 1 73.28 48.35a92.18 92.18 0 0 1 22.85 21.69a12 12 0 0 1-2.39 16.8Zm-192.28-24c-9.48 2.05-21 10.55-29.33 21.65a12 12 0 0 1-19.19-14.45a92.37 92.37 0 0 1 22.85-21.69a44 44 0 1 1 73.28-48.35a12 12 0 1 1-21 11.6a20 20 0 1 0-24.78 28.3a12 12 0 0 1-1.82 22.91Z" />--}}
{{--                            </svg>--}}
{{--                        </div>--}}
{{--                        <a href="#">--}}
{{--                            <h5 class="mb-2 text-3xl font-bold tracking-tight text-gray-900 dark:text-white">200--}}
{{--                            </h5>--}}
{{--                        </a>--}}
{{--                        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Total User</p>--}}
{{--                        <div class=" flex float-end font-medium text-green-400">--}}
{{--                            <span class="text-2xs">0.43%</span>--}}


{{--                            <svg xmlns="http://www.w3.org/2000/svg"  width="20" height=""--}}
{{--                                viewBox="0 0 256 256">--}}
{{--                                <path fill="currentColor"--}}
{{--                                    d="M208.49 120.49a12 12 0 0 1-17 0L140 69v147a12 12 0 0 1-24 0V69l-51.51 51.49a12 12 0 0 1-17-17l72-72a12 12 0 0 1 17 0l72 72a12 12 0 0 1 0 17Z" />--}}
{{--                            </svg>--}}
{{--                        </div>--}}


{{--                    </div>--}}

{{--                </div>--}}
{{--                <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">--}}
{{--                    <div--}}
{{--                        class="w-full max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 border-2 border-gray-200">--}}
{{--                        <div class="p-2">--}}
{{--                            <svg class="text-purple-600" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 256 256"><g fill="currentColor"><path d="M128 56c-80 0-112 72-112 72s32 72 112 72s112-72 112-72s-32-72-112-72Zm0 112a40 40 0 1 1 40-40a40 40 0 0 1-40 40Z" opacity=".2"/><path d="M247.31 124.76c-.35-.79-8.82-19.58-27.65-38.41C194.57 61.26 162.88 48 128 48S61.43 61.26 36.34 86.35C17.51 105.18 9 124 8.69 124.76a8 8 0 0 0 0 6.5c.35.79 8.82 19.57 27.65 38.4C61.43 194.74 93.12 208 128 208s66.57-13.26 91.66-38.34c18.83-18.83 27.3-37.61 27.65-38.4a8 8 0 0 0 0-6.5ZM128 192c-30.78 0-57.67-11.19-79.93-33.25A133.47 133.47 0 0 1 25 128a133.33 133.33 0 0 1 23.07-30.75C70.33 75.19 97.22 64 128 64s57.67 11.19 79.93 33.25A133.46 133.46 0 0 1 231.05 128c-7.21 13.46-38.62 64-103.05 64Zm0-112a48 48 0 1 0 48 48a48.05 48.05 0 0 0-48-48Zm0 80a32 32 0 1 1 32-32a32 32 0 0 1-32 32Z"/></g></svg>--}}
{{--                        </div>--}}
{{--                        <a href="#">--}}
{{--                            <h5 class="mb-2 text-3xl font-bold tracking-tight text-gray-900 dark:text-white">$456.78--}}
{{--                            </h5>--}}
{{--                        </a>--}}
{{--                        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Total Views</p>--}}
{{--                        <div class=" flex float-end font-medium text-green-400">--}}
{{--                            <span class="text-2xs">0.43%</span>--}}


{{--                            <svg xmlns="http://www.w3.org/2000/svg"  width="20" height=""--}}
{{--                                 viewBox="0 0 256 256">--}}
{{--                                <path fill="currentColor"--}}
{{--                                      d="M208.49 120.49a12 12 0 0 1-17 0L140 69v147a12 12 0 0 1-24 0V69l-51.51 51.49a12 12 0 0 1-17-17l72-72a12 12 0 0 1 17 0l72 72a12 12 0 0 1 0 17Z" />--}}
{{--                            </svg>--}}
{{--                        </div>--}}


{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">--}}
{{--                    <div--}}
{{--                        class="w-full max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 border-2 border-gray-200">--}}
{{--                        <div class="p-2">--}}
{{--                            <svg class="text-purple-600" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 256 256"><g fill="currentColor"><path d="m216 64l-12.16 66.86A16 16 0 0 1 188.1 144H62.55L48 64Z" opacity=".2"/><path d="M222.14 58.87A8 8 0 0 0 216 56H54.68l-4.89-26.86A16 16 0 0 0 34.05 16H16a8 8 0 0 0 0 16h18l25.56 140.29a24 24 0 0 0 5.33 11.27a28 28 0 1 0 44.4 8.44h45.42a27.75 27.75 0 0 0-2.71 12a28 28 0 1 0 28-28H83.17a8 8 0 0 1-7.87-6.57L72.13 152h116a24 24 0 0 0 23.61-19.71l12.16-66.86a8 8 0 0 0-1.76-6.56ZM96 204a12 12 0 1 1-12-12a12 12 0 0 1 12 12Zm96 0a12 12 0 1 1-12-12a12 12 0 0 1 12 12Zm4-74.57a8 8 0 0 1-7.9 6.57H69.22L57.59 72h148.82Z"/></g></svg>--}}
{{--                        </div>--}}
{{--                        <a href="#">--}}
{{--                            <h5 class="mb-2 text-3xl font-bold tracking-tight text-gray-900 dark:text-white">$127.67K--}}
{{--                            </h5>--}}
{{--                        </a>--}}
{{--                        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Total Profit</p>--}}
{{--                        <div class=" flex float-end font-medium text-green-400">--}}
{{--                            <span class="text-2xs">0.43%</span>--}}


{{--                            <svg xmlns="http://www.w3.org/2000/svg"  width="20" height=""--}}
{{--                                 viewBox="0 0 256 256">--}}
{{--                                <path fill="currentColor"--}}
{{--                                      d="M208.49 120.49a12 12 0 0 1-17 0L140 69v147a12 12 0 0 1-24 0V69l-51.51 51.49a12 12 0 0 1-17-17l72-72a12 12 0 0 1 17 0l72 72a12 12 0 0 1 0 17Z" />--}}
{{--                            </svg>--}}
{{--                        </div>--}}


{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">--}}
{{--                    <div--}}
{{--                        class="w-full max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 border-2 border-gray-200">--}}
{{--                        <div class="p-2">--}}
{{--                            <svg class="text-purple-600" xmlns="http://www.w3.org/2000/svg" width="32"--}}
{{--                                 height="32" viewBox="0 0 256 256">--}}
{{--                                <path fill="currentColor"--}}
{{--                                      d="M164.38 181.1a52 52 0 1 0-72.76 0a75.89 75.89 0 0 0-30 28.89a12 12 0 0 0 20.78 12a53 53 0 0 1 91.22 0a12 12 0 1 0 20.78-12a75.89 75.89 0 0 0-30.02-28.89ZM100 144a28 28 0 1 1 28 28a28 28 0 0 1-28-28Zm147.21 9.59a12 12 0 0 1-16.81-2.39c-8.33-11.09-19.85-19.59-29.33-21.64a12 12 0 0 1-1.82-22.91a20 20 0 1 0-24.78-28.3a12 12 0 1 1-21-11.6a44 44 0 1 1 73.28 48.35a92.18 92.18 0 0 1 22.85 21.69a12 12 0 0 1-2.39 16.8Zm-192.28-24c-9.48 2.05-21 10.55-29.33 21.65a12 12 0 0 1-19.19-14.45a92.37 92.37 0 0 1 22.85-21.69a44 44 0 1 1 73.28-48.35a12 12 0 1 1-21 11.6a20 20 0 1 0-24.78 28.3a12 12 0 0 1-1.82 22.91Z" />--}}
{{--                            </svg>--}}
{{--                        </div>--}}
{{--                        <a href="#">--}}
{{--                            <h5 class="mb-2 text-3xl font-bold tracking-tight text-gray-900 dark:text-white">200--}}
{{--                            </h5>--}}
{{--                        </a>--}}
{{--                        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Total User</p>--}}
{{--                        <div class=" flex float-end font-medium text-green-400">--}}
{{--                            <span class="text-2xs">0.43%</span>--}}


{{--                            <svg xmlns="http://www.w3.org/2000/svg"  width="20" height=""--}}
{{--                                 viewBox="0 0 256 256">--}}
{{--                                <path fill="currentColor"--}}
{{--                                      d="M208.49 120.49a12 12 0 0 1-17 0L140 69v147a12 12 0 0 1-24 0V69l-51.51 51.49a12 12 0 0 1-17-17l72-72a12 12 0 0 1 17 0l72 72a12 12 0 0 1 0 17Z" />--}}
{{--                            </svg>--}}
{{--                        </div>--}}


{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--            <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">--}}
{{--                <p class="text-2xl text-gray-400 dark:text-gray-500">--}}

{{--                </p>--}}
{{--            </div>--}}
{{--            <div class="grid grid-cols-2 gap-4 mb-4">--}}
{{--                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">--}}

{{--                </div>--}}
{{--                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">--}}
{{--                    <p class="text-2xl text-gray-400 dark:text-gray-500">--}}
{{--                        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"--}}
{{--                            fill="none" viewBox="0 0 18 18">--}}
{{--                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"--}}
{{--                                stroke-width="2" d="M9 1v16M1 9h16" />--}}
{{--                        </svg>--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">--}}
{{--                    <p class="text-2xl text-gray-400 dark:text-gray-500">--}}
{{--                        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"--}}
{{--                            fill="none" viewBox="0 0 18 18">--}}
{{--                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"--}}
{{--                                stroke-width="2" d="M9 1v16M1 9h16" />--}}
{{--                        </svg>--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">--}}
{{--                    <p class="text-2xl text-gray-400 dark:text-gray-500">--}}
{{--                        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"--}}
{{--                            fill="none" viewBox="0 0 18 18">--}}
{{--                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"--}}
{{--                                stroke-width="2" d="M9 1v16M1 9h16" />--}}
{{--                        </svg>--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">--}}
{{--                <p class="text-2xl text-gray-400 dark:text-gray-500">--}}
{{--                    <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"--}}
{{--                        viewBox="0 0 18 18">--}}
{{--                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
{{--                            d="M9 1v16M1 9h16" />--}}
{{--                    </svg>--}}
{{--                </p>--}}
{{--            </div>--}}
{{--            <div class="grid grid-cols-2 gap-4">--}}
{{--                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">--}}
{{--                    <p class="text-2xl text-gray-400 dark:text-gray-500">--}}
{{--                        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"--}}
{{--                            fill="none" viewBox="0 0 18 18">--}}
{{--                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"--}}
{{--                                stroke-width="2" d="M9 1v16M1 9h16" />--}}
{{--                        </svg>--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">--}}
{{--                    <p class="text-2xl text-gray-400 dark:text-gray-500">--}}
{{--                        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"--}}
{{--                            fill="none" viewBox="0 0 18 18">--}}
{{--                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"--}}
{{--                                stroke-width="2" d="M9 1v16M1 9h16" />--}}
{{--                        </svg>--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">--}}
{{--                    <p class="text-2xl text-gray-400 dark:text-gray-500">--}}
{{--                        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"--}}
{{--                            fill="none" viewBox="0 0 18 18">--}}
{{--                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"--}}
{{--                                stroke-width="2" d="M9 1v16M1 9h16" />--}}
{{--                        </svg>--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">--}}
{{--                    <p class="text-2xl text-gray-400 dark:text-gray-500">--}}
{{--                        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"--}}
{{--                            fill="none" viewBox="0 0 18 18">--}}
{{--                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"--}}
{{--                                stroke-width="2" d="M9 1v16M1 9h16" />--}}
{{--                        </svg>--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

</x-app-layout>
