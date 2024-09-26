@extends('layout.app')

@section('content')
<div class="p-6">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
        <!-- User Card -->
        <div class="bg-white rounded-md border border-gray-100 p-6 shadow-md shadow-black/5">
            <div class="flex justify-between mb-6">
                <div>
                    <div class="flex items-center mb-1">
                        <div class="text-2xl font-semibold">2</div>
                    </div>
                    <div class="text-sm font-medium text-gray-400">Users</div>
                </div>
                <div class="dropdown">
                    <button type="button" class="dropdown-toggle text-gray-400 hover:text-gray-600">
                        <i class="ri-more-fill"></i>
                    </button>
                    <ul class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
                        <li><a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Profile</a></li>
                        <li><a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Settings</a></li>
                        <li><a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Logout</a></li>
                    </ul>
                </div>
            </div>
            <a href="/gebruikers" class="text-[#f84525] font-medium text-sm hover:text-red-800">View</a>
        </div>

        <!-- Companies Card -->
        <div class="bg-white rounded-md border border-gray-100 p-6 shadow-md shadow-black/5">
            <div class="flex justify-between mb-4">
                <div>
                    <div class="flex items-center mb-1">
                        <div class="text-2xl font-semibold">100</div>
                        <div class="p-1 rounded bg-emerald-500/10 text-emerald-500 text-[12px] font-semibold leading-none ml-2">+30%</div>
                    </div>
                    <div class="text-sm font-medium text-gray-400">Companies</div>
                </div>
                <div class="dropdown">
                    <button type="button" class="dropdown-toggle text-gray-400 hover:text-gray-600">
                        <i class="ri-more-fill"></i>
                    </button>
                    <ul class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
                        <li><a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Profile</a></li>
                        <li><a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Settings</a></li>
                        <li><a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Logout</a></li>
                    </ul>
                </div>
            </div>
            <a href="/dierenartsen" class="text-[#f84525] font-medium text-sm hover:text-red-800">View</a>
        </div>

        <!-- Blogs Card -->
        <div class="bg-white rounded-md border border-gray-100 p-6 shadow-md shadow-black/5">
            <div class="flex justify-between mb-6">
                <div>
                    <div class="text-2xl font-semibold mb-1">100</div>
                    <div class="text-sm font-medium text-gray-400">Blogs</div>
                </div>
                <div class="dropdown">
                    <button type="button" class="dropdown-toggle text-gray-400 hover:text-gray-600">
                        <i class="ri-more-fill"></i>
                    </button>
                    <ul class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
                        <li><a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Profile</a></li>
                        <li><a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Settings</a></li>
                        <li><a href="#" class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Logout</a></li>
                    </ul>
                </div>
            </div>
            <a href="" class="text-[#f84525] font-medium text-sm hover:text-red-800">View</a>
        </div>

        <!-- New Activity Card -->
        <div class="w-full lg:col-span-1 bg-white rounded-xl shadow-2xl overflow-hidden transition-transform transform hover:scale-105">
            <div class="p-6">
                <h2 class="text-lg font-semibold mb-4 text-gray-800">Recent Activities</h2>
                <ul class="space-y-4">
                    <li class="flex items-center border-b py-2 hover:bg-gray-100 transition duration-200">
                        <div class="w-8 h-8 flex items-center justify-center bg-blue-500 text-white rounded-full mr-3">
                            <i class="ri-check-line"></i>
                        </div>
                        <span class="text-gray-700">Activity 1 completed successfully</span>
                    </li>
                    <li class="flex items-center border-b py-2 hover:bg-gray-100 transition duration-200">
                        <div class="w-8 h-8 flex items-center justify-center bg-green-500 text-white rounded-full mr-3">
                            <i class="ri-pencil-line"></i>
                        </div>
                        <span class="text-gray-700">Activity 2 in progress</span>
                    </li>
                    <li class="flex items-center border-b py-2 hover:bg-gray-100 transition duration-200">
                        <div class="w-8 h-8 flex items-center justify-center bg-yellow-500 text-white rounded-full mr-3">
                            <i class="ri-time-line"></i>
                        </div>
                        <span class=" bg text-gray-700">Activity 3 scheduled for tomorrow</span>
                    </li>
                    <li class="flex items-center py-2 hover:bg-gray-100 transition duration-200">
                        <div class="w-8 h-8 flex items-center justify-center bg-red-500 text-white rounded-full mr-3">
                            <i class="ri-alert-line"></i>
                        </div>
                        <span class="text-gray-700">Activity 4 needs attention!</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Todo List -->
        <div class="w-full lg:col-span-2 bg-white rounded-xl shadow-2xl overflow-hidden">
            <div class="bg-gradient-to-r from-blue-500 to-purple-600 p-6">
                <h1 class="text-3xl font-bold text-white text-center">Todo List</h1>
            </div>
            <div class="p-6">
                <form id="todo-form" class="mb-6">
                    <div class="flex flex-col space-y-3">
                        <input type="text" id="todo-input" placeholder="Tambahkan tugas baru..." class="p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <input type="datetime-local" id="due-date-time" class="p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <div class="bg-gradient-to-r from-blue-500 to-purple-600 rounded-lg hover:bg-red-500 transition duration-300">
                            <button type="submit" class="w-full text-white px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-600">
                                Add Task
                            </button>
                        </div>
                    </div>
                </form>
                <ul id="todo-list" class="space-y-3"></ul>
            </div>
        </div>

        <!-- Confirm Finish Dialog -->
        <div id="confirm-finish-dialog" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full">
            <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
                <div class="mt-3 text-center">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">Confirmation Finish</h3>
                    <div class="mt-2 px-7 py-3">
                        <p class="text-sm text-gray-500">Are you sure make this task compelete?</p>
                    </div>
                    <div class="items-center px-4 py-3">
                        <button id="cancel-finish" class="px-4 py-2 bg-gray-500 text-white text-base font-medium rounded-md w-24 mr-2 hover:bg-gray-600 transition duration-300">
                            Cancel
                        </button>
                        <button id="confirm-finish" class="px-4 py-2 bg-green-500 text-white text-base font-medium rounded-md w-24 hover:bg-green-600 transition duration-300">
                            Confirm
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Confirm Delete Dialog -->
        <div id="confirm-dialog" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full">
            <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
                <div class="mt-3 text-center">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">Confirmation Delete</h3>
                    <div class="mt-2 px-7 py-3">
                        <p class="text-sm text-gray-500">Are you sure to delete this task ?</p>
                    </div>
                    <div class="items-center px-4 py-3">
                        <button id="cancel-delete" class="px-4 py-2 bg-gray-500 text-white text-base font-medium rounded-md w-24 mr-2 hover:bg-gray-600 transition duration-300">
                            Cancel
                        </button>
                        <button id="confirm-delete" class="px-4 py-2 bg-red-500 text-white text-base font-medium rounded-md w-24 hover:bg-red-600 transition duration-300">
                            Confirm
                        </button>
                    </div>
                </div>
            </div>
        </div>


        <!-- Chart Section -->
        <div class="w-full lg:col-span-3 bg-white rounded-md shadow-2xl overflow-hidden">
            <h2 class="text-lg font-semibold mb-4 text-center">Sales Overview</h2>
            <canvas id="myChart" class="w-full h-48"></canvas>
        </div>
    </div>
</div>


@endsection
