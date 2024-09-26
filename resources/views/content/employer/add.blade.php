@extends('layout.app')

@section('content')
    <div class="container mx-auto mt-8 p-6 bg-white rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold mb-6">Add Employers</h2>
        <form id="employerForm">
            <div id="employer-wrapper">
                <div class="employer-fields mb-8 p-6 border border-gray-200 rounded-lg">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-lg font-medium">Employer #1</h3>
                        <button type="button" class="delete-employer bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="name-0" class="block text-gray-700 mb-2">Name</label>
                            <input type="text" id="name-0" name="employers[0][name]" class="w-full px-4 py-2 border rounded-lg" required>
                        </div>
                        <div>
                            <label for="name-0" class="block text-gray-700 mb-2">Departement</label>
                            <input type="text" id="name-0" name="employers[0][name]" class="w-full px-4 py-2 border rounded-lg" required>
                        </div>
                        <div>
                            <label for="name-0" class="block text-gray-700 mb-2">Position</label>
                            <input type="text" id="name-0" name="employers[0][name]" class="w-full px-4 py-2 border rounded-lg" required>
                        </div>
                        <div>
                            <label for="name-0" class="block text-gray-700 mb-2">Office</label>
                            <input type="text" id="name-0" name="employers[0][name]" class="w-full px-4 py-2 border rounded-lg" required>
                        </div>
                        <div>
                            <label for="name-0" class="block text-gray-700 mb-2">Age</label>
                            <input type="number" id="name-0" name="employers[0][name]" class="w-full px-4 py-2 border rounded-lg" required>
                        </div>
                        <div>
                            <label for="email-0" class="block text-gray-700 mb-2">Email</label>
                            <input type="email" id="email-0" name="employers[0][email]" class="w-full px-4 py-2 border rounded-lg" required>
                        </div>
                        <div>
                            <label for="name-0" class="block text-gray-700 mb-2">Start Date</label>
                            <input type="date" id="name-0" name="employers[0][name]" class="w-full px-4 py-2 border rounded-lg" required>
                        </div>
                        <div>
                            <label for="name-0" class="block text-gray-700 mb-2">End Date</label>
                            <input type="date" id="name-0" name="employers[0][name]" class="w-full px-4 py-2 border rounded-lg" required>
                        </div>
                        <div>
                            <label for="education-0" class="block text-gray-700 mb-2">Last Education</label>
                            <select id="education-0" name="employers[0][education]" class="w-full px-4 py-2 border rounded-lg" required>
                                <option value="" disabled selected>Select Education</option>
                                <option value="high_school">High School</option>
                                <option value="associate_degree">Associate Degree</option>
                                <option value="bachelor_degree">Bachelor's Degree</option>
                                <option value="master_degree">Master's Degree</option>
                                <option value="doctorate">Doctorate</option>
                            </select>
                        </div>
                        <div>
                            <label for="status-0" class="block text-gray-700 mb-2">Status Employer</label>
                            <select id="status-0" name="employers[0][status]" class="w-full px-4 py-2 border rounded-lg" required>
                                <option value="" disabled selected>Select Status</option>
                                <option value="full_time">Full Time</option>
                                <option value="part_time">Part Time</option>
                                <option value="contract">Contract</option>
                                <option value="internship">Internship</option>
                                <option value="freelance">Freelance</option>
                                <option value="unemployed">Unemployed</option>
                            </select>
                        </div>
                        <div>
                            <label for="name-0" class="block text-gray-700 mb-2">address</label>
                            <input type="text" id="name-0" name="employers[0][name]" class="w-full px-4 py-2 border rounded-lg" required>
                        </div>
                        <div>
                            <label for="name-0" class="block text-gray-700 mb-2">Salary</label>
                            <input type="number" id="name-0" name="employers[0][name]" class="w-full px-4 py-2 border rounded-lg" required>
                        </div>
                        <div>
                            <label for="name-0" class="block text-gray-700 mb-2">Salary</label>
                            <input type="number" id="name-0" name="employers[0][name]" class="w-full px-4 py-2 border rounded-lg" required>
                        </div>
                        <div>
                            <label for="phone-0" class="block text-gray-700 mb-2">Phone</label>
                            <input type="tel" id="phone-0" name="employers[0][phone]" class="w-full px-4 py-2 border rounded-lg">
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="flex justify-between items-center mb-6">
                <button type="button" id="add-employer" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" />
                    </svg>
                    Add Another Employer
                </button>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Submit Employers
                </button>
            </div>
        </form>
        <div id="successMessage" class="hidden bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mt-4" role="alert">
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline"> Employers successfully added.</span>
        </div>
    </div>
@endsection
