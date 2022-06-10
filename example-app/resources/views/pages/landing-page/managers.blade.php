@extends('layouts.app')


@section('title','Managers')


@section('content')


        <!-- navbar -->
        <section class="h-full w-full border-box transition-all duration-500 linear lg:px-24 md:px-20 px-8 py-8 border-b" style="background-color: #141432">
            <style>
                @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

                .btn-fill-1-2 {
                    background-color: #ffdda9;
                    color: #372642;
                }

                .btn-fill-1-2:hover {
                    background-color: #fcd396;
                    color: #372642;
                }
                
                nav a.nav-1-2 {
                    color: #ffffff;
                }
                
                nav a.nav-1-2:hover {
                    color: #ffdda9;
                    font-weight: 500;
                }
                
                nav a.nav-1-2.active {
                    color: #ffdda9;
                }
                
                #menu-toggle-1-2:checked + #menu-1-2,
                #menu-toggle-1-2:checked + #menu-1-2 + #menu-1-2 {
                    display: block;
                }
            </style>

            <div style="font-family: 'Poppins', sans-serif">
                <div class="mx-auto flex flex-wrap flex-row items-center justify-between">
                    <a class="flex font-medium items-center" href="index.html">
                        <svg
                        width="42"
                        height="42"
                        viewBox="0 0 42 42"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        >
                        <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M3.5 15.75C3.5 8.98451 8.98451 3.5 15.75 3.5H29.75C30.7165 3.5 31.5 4.2835 31.5 5.25C31.5 6.21649 30.7165 7 29.75 7H15.75C10.9175 7 7 10.9175 7 15.75V29.75C7 30.7165 6.2165 31.5 5.25 31.5C4.2835 31.5 3.5 30.7165 3.5 29.75V15.75Z"
                            fill="white"
                        />
                        <path
                            d="M10.5 17.5C10.5 13.634 13.634 10.5 17.5 10.5H31.5C35.366 10.5 38.5 13.634 38.5 17.5V31.5C38.5 35.366 35.366 38.5 31.5 38.5H17.5C13.634 38.5 10.5 35.366 10.5 31.5V17.5Z"
                            fill="white"
                        />
                        </svg>
                    </a>

                    <label for="menu-toggle-1-2" class="cursor-pointer lg:hidden block">
                        <svg
                        class="w-6 h-6"
                        fill="none"
                        stroke="#FFFFFF"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                        >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"
                        ></path>
                        </svg>
                    </label>

                    <input class="hidden" type="checkbox" id="menu-toggle-1-2" />
                    
                    <div class="hidden lg:flex lg:items-center lg:w-auto w-full lg:ml-auto lg:mr-auto flex-wrap items-center text-base justify-center" id="menu-1-2">
                        <nav class="lg:space-x-12 space-x-0 lg:flex items-center justify-between text-base pt-8 lg:pt-0 lg:space-y-0 space-y-6">
                            <a class="block cursor-pointer nav-1-2" href="clubs.html">Clubs</a>
                            <a class="block cursor-pointer nav-1-2" href="players.html">Players</a>
                            <a class="block cursor-pointer nav-1-2 active font-medium" href="managers.html">Managers</a>
                            <a class="block cursor-pointer nav-1-2" href="stadiums.html">Stadium</a>
                        </nav>
                    </div>
                    
                    <div class="hidden lg:flex lg:items-center lg:w-auto w-full" id="menu-1-2">
                        <button class="btn-fill-1-2 items-center border-0 py-3 px-8 focus:outline-none rounded-2xl font-medium text-base mt-6 lg:mt-0">
                            Next Match
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- breadcumbs -->
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold text-gray-900">
                    Managers
                </h1>
            </div>
        </header>

        <!-- table -->
        <div class="pb-16 pt-16 lg:pb-20 lg:px-24 md:px-16 sm:px-8 px-8  lg:flex-row flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Club</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nationality</th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Detail</span>
                                    </th>
                                </tr>
                            </thead>

                            <tbody class="bg-white divide-y divide-gray-200">

                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded-full" src="https://resources.premierleague.com/premierleague/photos/players/250x250/man39237.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    Thomas Tuchel
                                                </div>
                                                <div class="text-sm text-gray-500">
                                                    47 Years
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        Chelsea FC
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        Germany
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Detail</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded-full" src="https://resources.premierleague.com/premierleague/photos/players/250x250/man279.png" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    Jurgen Klopp
                                                </div>
                                                <div class="text-sm text-gray-500">
                                                    53 Years
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        Liverpool
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        Germany
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Detail</a>
                                    </td>
                                </tr>
                
                            <!-- More items... -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
@endsection


@push('after-style')
   
 
@endpush