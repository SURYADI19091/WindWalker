document.addEventListener("DOMContentLoaded", function () {
    const searchInput = document.getElementById("searchInput");
    const filterModal = document.getElementById("filterModal");
    const importModal = document.getElementById("importModal");
    const deleteModal = document.getElementById("deleteModal");

    // Toggle modals
    function toggleModal(modal) {
        modal.classList.toggle("hidden");
        modal.classList.toggle("flex");
    }

    // Search functionality
    document.getElementById("searchButton").addEventListener("click", function () {
        const query = searchInput.value;
        console.log("Searching for: ", query);
        // Add your search logic here
    });

    // Show and close filter modal
    document.getElementById("filterButton").addEventListener("click", function () {
        toggleModal(filterModal);
    });
    document.getElementById("closeFilterButton").addEventListener("click", function () {
        toggleModal(filterModal);
    });

    // Show and close import modal
    document.getElementById("importButton").addEventListener("click", function () {
        toggleModal(importModal);
    });
    document.getElementById("closeImportButton").addEventListener("click", function () {
        toggleModal(importModal);
    });

    // Handle delete action with SweetAlert
    document.querySelectorAll(".bg-red-500").forEach(function (deleteButton, index) {
        deleteButton.addEventListener("click", function () {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    console.log("Row deleted: ", index);
                    // Implement your delete logic here
                    Swal.fire({
                        icon: 'success',
                        title: 'Task Update!',
                        text: 'Your Data has been deleted.',
                        confirmButtonText: 'OK',
                        customClass: {
                            confirmButton: 'custom-confirm-button' // Custom class name
                        }
                    });
                }
            });
        });
    });

    // Responsive modals for smaller screens
    function resizeHandler() {
        if (window.innerWidth < 768) {
            filterModal.classList.add("flex-col");
            importModal.classList.add("flex-col");
            deleteModal.classList.add("flex-col");
        } else {
            filterModal.classList.remove("flex-col");
            importModal.classList.remove("flex-col");
            deleteModal.classList.remove("flex-col");
        }
    }

    window.addEventListener("resize", resizeHandler);
    resizeHandler(); // Initial check on load
});


document.addEventListener("DOMContentLoaded", function () {
    const searchInput = document.getElementById("searchInput");
    const tableBody = document.getElementById("tableBody");

    // Function to perform search and filter table
    function performSearch(query) {
        // Convert query to lowercase for case-insensitive search
        query = query.toLowerCase();
        
        // Loop through all rows in the table
        const rows = tableBody.getElementsByTagName("tr");

        for (let i = 0; i < rows.length; i++) {
            const row = rows[i];
            // Convert row text to lowercase and search for the query
            const rowText = row.textContent.toLowerCase();

            if (rowText.includes(query)) {
                row.style.display = ""; // Show the row if it matches the query
            } else {
                row.style.display = "none"; // Hide the row if it doesn't match
            }
        }
    }

    // Add event listener for real-time search
    searchInput.addEventListener("input", function () {
        const query = searchInput.value;
        performSearch(query);
    });
});


    document.addEventListener('DOMContentLoaded', function () {
        let employerCount = 1; // Keep track of the number of employer forms
        const addButton = document.getElementById('add-employer');
        const employerWrapper = document.getElementById('employer-wrapper');
    
        addButton.addEventListener('click', function () {
            // Clone the first employer-fields
            const newEmployerFields = document.querySelector('.employer-fields').cloneNode(true);
    
            // Update the form heading
            const employerTitle = newEmployerFields.querySelector('h3');
            employerTitle.textContent = `Data #${employerCount + 1}`;
    
            // Update input names and ids
            const inputs = newEmployerFields.querySelectorAll('input');
            inputs.forEach(input => {
                const inputName = input.getAttribute('name');
                const inputId = input.getAttribute('id');
    
                // Replace index in name and id attributes using a dynamic pattern
                const newName = inputName.replace(/\[\d+\]/, `[${employerCount}]`);
                const newId = inputId.replace(/-\d+/, `-${employerCount}`);
    
                input.setAttribute('name', newName);
                input.setAttribute('id', newId);
    
                // Clear the values in cloned fields
                input.value = '';
            });
    
            // Append the new fields to the wrapper
            employerWrapper.appendChild(newEmployerFields);
            employerCount++;
        });
    });
    

    // This function will be called when the page is loaded
    document.addEventListener('DOMContentLoaded', function () {
        const rowsPerPage = 10; // Number of rows per page
        let currentPage = 1; // Initial page
    
        const rows = Array.from(document.querySelectorAll('#tableBody tr')); // All table rows
        const totalPages = Math.ceil(rows.length / rowsPerPage); // Calculate total pages
    
        const pageInfo = document.getElementById('pageInfo');
        const prevPageButton = document.getElementById('prevPage');
        const nextPageButton = document.getElementById('nextPage');
    
        function showPage(page) {
            // Hide all rows
            rows.forEach((row, index) => {
                row.style.display = 'none';
            });
    
            // Calculate the start and end index for the current page
            const startIndex = (page - 1) * rowsPerPage;
            const endIndex = page * rowsPerPage;
    
            // Show only the rows for the current page
            rows.slice(startIndex, endIndex).forEach(row => {
                row.style.display = '';
            });
    
            // Update page info
            pageInfo.textContent = `Page ${page} of ${totalPages}`;
    
            // Disable/Enable previous and next buttons
            prevPageButton.disabled = page === 1;
            nextPageButton.disabled = page === totalPages;
        }
    
        // Handle previous page button click
        prevPageButton.addEventListener('click', function () {
            if (currentPage > 1) {
                currentPage--;
                showPage(currentPage);
            }
        });
    
        // Handle next page button click
        nextPageButton.addEventListener('click', function () {
            if (currentPage < totalPages) {
                currentPage++;
                showPage(currentPage);
            }
        });
    
        // Initially show the first page
        showPage(currentPage);
    });

    // filter table JS
    document.addEventListener('DOMContentLoaded', function () {
    const filterButton = document.getElementById('filterButton');
    const filterModal = document.getElementById('filterModal');
    const closeFilterButton = document.getElementById('closeFilterButton');
    const applyFilterButton = document.getElementById('applyFilterButton');
    const resetFilterButton = document.getElementById('resetFilterButton');
    
    const startDateInput = document.getElementById('modalStartDate');
    const endDateInput = document.getElementById('modalEndDate');

    const tableRows = document.querySelectorAll('#tableBody tr');

    // Show Filter Modal
    filterButton.addEventListener('click', function () {
        filterModal.classList.remove('hidden');
    });

    // Close Filter Modal
    closeFilterButton.addEventListener('click', function () {
        filterModal.classList.add('hidden');
    });

    // Apply Filter Logic
    applyFilterButton.addEventListener('click', function () {
        const startDate = new Date(startDateInput.value);
        const endDate = new Date(endDateInput.value);

        tableRows.forEach(row => {
            const dateCell = row.querySelector('td:nth-child(4)').textContent.trim(); // Assuming date is the 4th column
            const rowDate = new Date(dateCell);

            if ((!isNaN(startDate) && rowDate < startDate) || (!isNaN(endDate) && rowDate > endDate)) {
                row.classList.add('hidden'); // Hide row if it doesn't match the filter
            } else {
                row.classList.remove('hidden'); // Show row if it matches the filter
            }
        });

        // Close modal after applying filter
        filterModal.classList.add('hidden');
    });

    // Reset Filter Logic
    resetFilterButton.addEventListener('click', function () {
        startDateInput.value = '';
        endDateInput.value = '';

        // Show all rows
        tableRows.forEach(row => {
            row.classList.remove('hidden');
        });
    });
});


// Function to handle delete employer
function handleDeleteEmployer(event) {
    const employerField = event.target.closest('.employer-fields'); // Get the closest employer field
    if (employerField) {
        employerField.remove(); // Remove the employer field from the DOM
    }
}

// Add event listener for delete buttons
document.getElementById('employer-wrapper').addEventListener('click', function (event) {
    if (event.target.classList.contains('delete-employer')) {
        handleDeleteEmployer(event);
    }
});

    