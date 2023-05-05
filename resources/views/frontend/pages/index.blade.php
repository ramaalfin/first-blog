@extends('frontend.layouts.app')
@section('title')
    Home
@endsection
@section('content')
    {{-- <section class="md:px-20 mb-14">

        <div class="flex flex-col items-center lg:flex-row lg:max-w-full">
            <div class="flex-cols-8">
                <img class="object-cover rounded-3xl w-full p-4 md:p-0" src="https://picsum.photos/1800/1000" alt="" />
            </div>
            <div class="flex-cols-4">
                <div class="flex flex-col justify-between px-6 pt-4">
                    <div class="flex items-center">
                        <p class="uppercase text-sm ">internet</p>
                        <span class="mx-4">|</span>
                        <p class="text-sm">June 28, 2021</p>
                    </div>
                    <a href="#">
                        <h5 class="mb-2 text-[24px] font-bold tracking-tight text-gray-900 dark:text-white">How to design a
                            product that can grow itself 10x in year</h5>
                    </a>
                    <p class="mb-3 font-normal text-[16px] text-gray-700 dark:text-gray-400">Auctor Porta. Augue vitae diam
                        mauris faucibus blandit elit per, feugiat leo dui orci. Etiam vestibulum. Nostra netus per conubia
                        dolor.</p>
                    <div class="user flex items-center pt-2 gap-3">
                        <div class="img">
                            <img src="{{ 'storage/assets/user/user.png' }}" class="w-12">
                        </div>
                        <div class="bio">
                            <h5 class="text-lg font-semibold">Amara</h5>
                            <p class="text-sm">Ui designer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="px-4 md:px-20 mb-14">
        <div class="flex flex-col lg:flex-row gap-4 mb-4">
            <div class="lg:flex-cols-7">
                <div class="max-w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="object-cover rounded-t-lg" src="https://picsum.photos/900/600" alt="" />
                    </a>
                    <div class="p-5">
                        <div class="flex items-center">
                            <p class="uppercase text-sm ">internet</p>
                            <span class="mx-4">|</span>
                            <p class="text-sm">June 28, 2021</p>
                        </div>
                        <a href="#">
                            <h5 class="mb-2 text-[24px] font-bold tracking-tight text-gray-900 dark:text-white">How to design a
                                product that can grow itself 10x in year</h5>
                        </a>
                        <p class="mb-3 font-normal text-[16px] text-gray-700 dark:text-gray-400">Auctor Porta. Augue vitae diam
                            mauris faucibus blandit elit per, feugiat leo dui orci. Etiam vestibulum. Nostra netus per conubia
                            dolor.</p>
                        <div class="user flex items-center pt-2 gap-3">
                            <div class="img">
                                <img src="{{ 'storage/assets/user/user.png' }}" class="w-12">
                            </div>
                            <div class="bio">
                                <h5 class="text-lg font-semibold">Amara</h5>
                                <p class="text-sm">Ui designer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:flex-cols-5">
                <aside id="default-sidebar" aria-label="Sidebar">
                    <div class="px-3 py-4">
                       <ul class="font-medium">
                          <li>
                             <div class="relative hidden lg:block">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="sr-only">Search icon</span>
                                </div>
                                <input type="text" id="search-navbar"
                                    class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Search...">
                            </div>
                          </li>
                          <li>
                             <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                                <span class="flex-1 ml-3 whitespace-nowrap">Kanban</span>
                                <span class="inline-flex items-center justify-center px-2 ml-3 text-sm font-medium text-gray-800 bg-gray-200 rounded-full dark:bg-gray-700 dark:text-gray-300">Pro</span>
                             </a>
                          </li>
                          <li>
                             <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path><path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path></svg>
                                <span class="flex-1 ml-3 whitespace-nowrap">Inbox</span>
                                <span class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
                             </a>
                          </li>
                          <li>
                             <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                                <span class="flex-1 ml-3 whitespace-nowrap">Users</span>
                             </a>
                          </li>
                          <li>
                             <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
                                <span class="flex-1 ml-3 whitespace-nowrap">Products</span>
                             </a>
                          </li>
                          <li>
                             <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"></path></svg>
                                <span class="flex-1 ml-3 whitespace-nowrap">Sign In</span>
                             </a>
                          </li>
                          <li>
                             <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z" clip-rule="evenodd"></path></svg>
                                <span class="flex-1 ml-3 whitespace-nowrap">Sign Up</span>
                             </a>
                          </li>
                       </ul>
                    </div>
                 </aside>
            </div>
        </div>
    </section>
@endsection
