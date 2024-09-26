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
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
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
            employerTitle.textContent = `Employer #${employerCount + 1}`;
    
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
    