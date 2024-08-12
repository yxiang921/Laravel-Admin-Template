@extends('layouts.sidebar')
@section('content')
    <div class="flex-1 flex flex-col">
        <!-- Header -->
        <header class="bg-white shadow-md py-4 px-6 flex items-center justify-between border-b border-gray-200">
            <div class="text-gray-800 text-xl font-semibold">Settings</div>
            <div class="flex items-center space-x-4">
                {{-- <div class="text-gray-800">{{ Auth::user()->name }}</div> --}}
                {{-- <img src="{{ asset('images/profile.png') }}" alt="Profile Picture" class="w-8 h-8 rounded-full"> --}}
            </div>
        </header>

        <!-- Main area -->
        <main class=" m-4">

            <div class="mx-4 min-h-screen max-w-screen-xl sm:mx-8 xl:mx-auto">
                <div class="grid grid-cols-8 pt-3 sm:grid-cols-10">
                    <div class="col-span-8 overflow-hidden rounded-xl bg-gray-50 px-8 shadow">
                        <div class="border-b pt-4 pb-8">
                            <h1 class="py-2 text-2xl font-semibold">Notification settings</h1>
                            <p class="font- text-slate-600">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                        </div>
                        <div class="grid border-b py-6 sm:grid-cols-2">
                            <div class="">
                                <h2 class="text-lg font-semibold leading-4 text-slate-700">Comments</h2>
                                <p class="font- text-slate-600">Lorem ipsum dolor, Alias eligendi laboriosam magni
                                    reiciendis neque.</p>
                            </div>
                            <div class="mt-4 flex items-center sm:justify-end">
                                <div class="flex flex-col gap-3">
                                    <label for="push" class="relative inline-flex cursor-pointer items-center">
                                        <input type="checkbox" value="" id="push" class="peer sr-only" checked />
                                        <div
                                            class="peer h-6 w-11 rounded-full bg-gray-200 after:absolute after:top-[2px] after:left-[2px] after:h-5 after:w-5 after:rounded-full after:border after:border-gray-300 after:bg-white after:transition-all after:content-[''] peer-checked:bg-blue-600 peer-checked:after:translate-x-full peer-checked:after:border-white peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:border-gray-600 dark:bg-gray-700 dark:peer-focus:ring-blue-800">
                                        </div>
                                        <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Push</span>
                                    </label>
                                    <label for="email" class="relative inline-flex cursor-pointer items-center">
                                        <input type="checkbox" value="" id="email" class="peer sr-only" checked />
                                        <div
                                            class="peer h-6 w-11 rounded-full bg-gray-200 after:absolute after:top-[2px] after:left-[2px] after:h-5 after:w-5 after:rounded-full after:border after:border-gray-300 after:bg-white after:transition-all after:content-[''] peer-checked:bg-blue-600 peer-checked:after:translate-x-full peer-checked:after:border-white peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:border-gray-600 dark:bg-gray-700 dark:peer-focus:ring-blue-800">
                                        </div>
                                        <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Email</span>
                                    </label>
                                    <label for="sms" class="relative inline-flex cursor-pointer items-center">
                                        <input type="checkbox" value="" id="sms" class="peer sr-only" />
                                        <div
                                            class="peer h-6 w-11 rounded-full bg-gray-200 after:absolute after:top-[2px] after:left-[2px] after:h-5 after:w-5 after:rounded-full after:border after:border-gray-300 after:bg-white after:transition-all after:content-[''] peer-checked:bg-blue-600 peer-checked:after:translate-x-full peer-checked:after:border-white peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:border-gray-600 dark:bg-gray-700 dark:peer-focus:ring-blue-800">
                                        </div>
                                        <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">SMS</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4 flex flex-row w-full">
                            <div class="flex flex-col">
                                <h2 class="text-lg font-semibold leading-4 text-slate-700">Site Name</h2>
                                <p class="font- text-slate-600">Edit Your Website Name</p>
                            </div>
                            <div class="relative w-2/5 h-10 ml-8">
                                <input
                                    class="peer border-gray-300 w-full h-full bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2  focus:border-t-transparent text-sm px-3 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-blue-500"
                                    placeholder=" " />
                                <label
                                    class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal !overflow-visible truncate peer-placeholder-shown:text-blue-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[11px] peer-focus:text-[11px] before:content[' '] before:block before:box-border before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 peer-placeholder-shown:before:border-transparent before:rounded-tl-md before:border-t peer-focus:before:border-t-2 before:border-l peer-focus:before:border-l-2 before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:content[' '] after:block after:flex-grow after:box-border after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 peer-placeholder-shown:after:border-transparent after:rounded-tr-md after:border-t peer-focus:after:border-t-2 after:border-r peer-focus:after:border-r-2 after:pointer-events-none after:transition-all peer-disabled:after:border-transparent peer-placeholder-shown:leading-[3.75] text-blue-gray-400 peer-focus:text-blue-500 before:border-blue-gray-200 peer-focus:before:!border-blue-500 after:border-blue-gray-200 peer-focus:after:!border-blue-500">
                                    Enter Your Site Name
                                </label>
                            </div>
                        </div>





                    </div>
                </div>
            </div>

        </main>
    </div>
@endsection
