@extends('layout.app')

@section('content')

    <div class="p-6">
        <!-- Search and Filter Button Bar -->
        <div class="flex justify-between items-center mb-4">
            <div class="flex space-x-4">
                <!-- Search Button -->
                <div class="relative">
                    <input type="text" id="searchInput" placeholder="Search..." class="border border-gray-300 p-2 rounded w-full focus:outline-none focus:ring-2 focus:ring-blue-500 pr-10">
                    <button id="searchButton" class="absolute right-2 top-1/2 transform -translate-y-1/2 text-gray-600">
                        <i class="ri-search-line"></i>
                    </button>
                </div>
    
                <!-- Filter Button -->
                {{-- <button id="filterButton" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
                    <i class="ri-filter-fill"></i>
                </button> --}}
            </div>
            <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600" id="addButton">
                Add
            </button>
        </div>
    
        <!-- Import and Export Buttons -->
        <div class="flex space-x-2 mb-4">
            <button id="importButton" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Import</button>
            <button id="exportExcelButton" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Export to Excel</button>
            <button id="exportPdfButton" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Export to PDF</button>
        </div>
    
        <div id="importModal" class="hidden fixed inset-0 bg-gray-800 bg-opacity-75 items-center justify-center">
            <div class="bg-white p-6 rounded-md shadow-md w-full max-w-sm">
                <h2 class="text-xl font-bold mb-4">Import Data from CSV</h2>
        
                <!-- File Input -->
                <input type="file" id="fileInput" accept=".csv" class="border border-gray-300 p-2 rounded w-full focus:outline-none focus:ring-2 focus:ring-blue-500" />
        
                <!-- Buttons -->
                <div class="mt-6 flex justify-end space-x-2">
                    <button id="importButton" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Import</button>
                    <button id="closeImportButton" class="bg-gray-300 text-gray-700 px-4 py-2 rounded hover:bg-gray-400">Close</button>
                </div>
            </div>
        </div>
    
        <!-- Filter Modal -->
    
        {{-- <div id="filterModal" class="hidden fixed inset-0 bg-gray-800 bg-opacity-75  items-center justify-center">
            <div class="bg-white p-6 rounded-md shadow-md w-full max-w-sm">
                <h2 class="text-xl font-bold mb-4">Filter by Date</h2>
        
                <div class="space-y-4">
                    <!-- Start Date -->
                    <div>
                        <label for="modalStartDate" class="block text-gray-600 mb-1">Start Date</label>
                        <input type="date" id="modalStartDate" class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
        
                    <!-- End Date -->
                    <div>
                        <label for="modalEndDate" class="block text-gray-600 mb-1">End Date</label>
                        <input type="date" id="modalEndDate" class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>
        
                <!-- Buttons -->
                <div class="mt-6 flex justify-between items-center">
                    <!-- Reset button on the left -->
                    <button id="resetFilterButton" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">Reset</button>
                    <!-- Apply and Close buttons on the right -->
                    <div class="flex space-x-2">
                        <button id="applyFilterButton" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Apply</button>
                        <button id="closeFilterButton" class="bg-gray-300 text-gray-700 px-4 py-2 rounded hover:bg-gray-400">Close</button>
                    </div>
                </div>
            </div>
        </div> --}}
    
       <!-- Table -->
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200">
                <thead>
                    <tr class="bg-gray-500 text-white uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">No</th>
                        <th class="py-3 px-6 text-left">ID</th>
                        <th class="py-3 px-6 text-left">Name</th>
                        <th class="py-3 px-6 text-left">Email</th>
                        <th class="py-3 px-60 text-left">Address</th>
                        <th class="py-3 px-16 text-left">Manajer</th>
                        <th class="py-3 px-16 text-left">Telephone</th>
                        <th class="py-3 px-6 text-left">action</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm font-light" id="tableBody">
                    @foreach(range(1, 20) as $index)
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="text-black py-3 px-6 text-left whitespace-nowrap">{{ $index }}</td>
                            <td class="py-3 px-6 text-center">{{ fake()->numberBetween(80000, 150000) }}</td>
                            <td class="py-3 px-6 text-left whitespace-nowrap">{{ fake()->Name() }}</td>
                            <td class="py-3 px-6 text-left">{{ fake()->Email() }}</td>
                            <td class="py-3 px-6 text-left">{{ fake()->Address() }}</td>
                            <td class="py-3 px-6 text-left">{{ fake()->Name() }}</td>
                            <td class="py-3 px-6 text-left">{{ fake()->phoneNumber() }}</td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex justify-center space-x-2">
                                    <button class="bg-blue-500 text-white py-1 px-3 rounded hover:bg-blue-600">
                                        Edit
                                    </button>
                                    <button class="bg-red-500 text-white py-1 px-3 rounded hover:bg-red-600">
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                
            </table>
        </div>
    
    
        <!-- Delete Modal -->
        <div id="deleteModal" class="hidden fixed inset-0 bg-gray-800 bg-opacity-75  items-center justify-center">
            <div class="bg-white p-6 rounded-md shadow-md w-full max-w-sm">
                <h2 class="text-xl font-bold mb-4">Delete Entry</h2>
                <p>Are you sure you want to delete this entry?</p>
                <input type="hidden" id="deleteRowIndex" /> <!-- Store the row index for deletion -->
    
                <!-- Buttons -->
                <div class="mt-6 flex justify-end space-x-2">
                    <button id="confirmDeleteButton" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Delete</button>
                    <button id="closeDeleteButton" class="bg-gray-300 text-gray-700 px-4 py-2 rounded hover:bg-gray-400">Close</button>
                </div>
            </div>
        </div>

        <div class="flex justify-center items-center space-x-2 mt-4">
            <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600" id="prevPage">
                Previous
            </button>
            <span id="pageInfo" class="text-gray-600">Page 1 of 10</span>
            <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600" id="nextPage">
                Next
            </button>
        </div>
    </div>
    
    
@endsection


