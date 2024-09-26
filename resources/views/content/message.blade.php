@extends('layout.app')

@section('content')
<div class="container mx-auto my-3 p-4 bg-white rounded-lg shadow-lg flex flex-col md:flex-row">
    <div class="flex-1 md:pl-5">
        <div class="flex flex-col h-full">
            <!-- User List -->
            <h2 class="text-lg font-semibold mb-4">Users</h2>
            <ul class="space-y-2 max-h-[200px] md:max-h-[calc(100vh-200px)] overflow-y-auto">
                <li class="flex items-center p-2 hover:bg-gray-100 rounded-md">
                    <img src="{{ asset('path/to/profile/john.jpg') }}" alt="John's Profile" class="w-8 h-8 rounded-full mr-2">
                    <span class="font-semibold text-sm mr-8">John</span>
                    <span class="ml-auto px-2 py-0.5 text-xs font-medium tracking-wide text-red-600 bg-red-200 rounded-full">1</span>
                </li>
                <li class="flex items-center p-2 hover:bg-gray-100 rounded-md">
                    <img src="{{ asset('path/to/profile/alice.jpg') }}" alt="Alice's Profile" class="w-8 h-8 rounded-full mr-2">
                    <span class="font-semibold text-sm">Alice</span>
                    <span class="ml-auto px-2 py-0.5 text-xs font-medium tracking-wide text-red-600 bg-red-200 rounded-full">3</span>
                </li>
                <li class="flex items-center p-2 hover:bg-gray-100 rounded-md">
                    <img src="{{ asset('path/to/profile/bob.jpg') }}" alt="Bob's Profile" class="w-8 h-8 rounded-full mr-2">
                    <span class="font-semibold text-sm">Bob</span>
                    <span class="ml-auto px-2 py-0.5 text-xs font-medium tracking-wide text-red-600 bg-red-200 rounded-full">0</span>
                </li>
                <li class="flex items-center p-2 hover:bg-gray-100 rounded-md">
                    <img src="{{ asset('path/to/profile/you.jpg') }}" alt="Your Profile" class="w-8 h-8 rounded-full mr-2">
                    <span class="font-semibold text-sm">You</span>
                    <span class="ml-auto px-2 py-0.5 text-xs font-medium tracking-wide text-red-600 bg-red-200 rounded-full">2</span>
                </li>
            </ul>
        </div>
    </div>
    
    

    <div class="w-full md:w-1/4 lg:w-1/5 border-b md:border-r border-gray-300 pb-4 md:pb-0 md:pr-4 mb-4 md:mb-0">
        <!-- Discussion Header -->
        <div class="py-2 border-b border-red-600">
            <h1 class="text-xl font-semibold">Chat</h1>
        </div>

        <!-- Message List -->
        <div class="flex-1 overflow-y-auto p-4 space-y-4 h-[calc(100vh-300px)]" id="message-list">
            <div class="message bg-blue-100 p-3 rounded-lg">
                <span class="font-semibold">John:</span>
                <p>Hello, how are you?</p>
                <span class="text-sm text-gray-500">10:01 AM</span>
            </div>
            <div class="message bg-gray-100 p-3 rounded-lg self-end">
                <span class="font-semibold">You:</span>
                <p>I'm doing well, thanks! How about you?</p>
                <span class="text-sm text-gray-500">10:05 AM</span>
            </div>
            <div class="message bg-blue-100 p-3 rounded-lg">
                <span class="font-semibold">John:</span>
                <p>I'm good! Just working on some projects.</p>
                <span class="text-sm text-gray-500">10:10 AM</span>
            </div>
            <div class="message bg-gray-100 p-3 rounded-lg self-end">
                <span class="font-semibold">You:</span>
                <p>That sounds interesting!</p>
                <span class="text-sm text-gray-500">10:12 AM</span>
            </div>
        </div>

        <!-- Chat Input -->
        <div class="border-t border-gray-300 py-4">
            <form action="" method="POST" enctype="multipart/form-data" class="flex flex-col sm:flex-row">
                @csrf
                <input type="text" name="message" class="w-full p-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 mb-2 sm:mb-0" placeholder="Type a message...">
                <div class="flex sm:ml-2">
                    <input type="file" name="file" accept="image/*" class="border border-gray-300 rounded-lg p-1 w-full sm:w-auto">
                    <button type="submit" class="ml-2 bg-blue-500 text-white p-3 rounded-lg hover:bg-blue-600 w-full sm:w-auto">Send</button>
                </div>
            </form>
        </div>
    </div>
    
    
</div>
@endsection
