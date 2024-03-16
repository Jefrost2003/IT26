// Function to handle selection change for cemetery sections
document.getElementById("sectionSelect").addEventListener("change", function () {
    // Get the selected value
    var selectedSection = this.value;

    // Get the container for dynamically generated grid content
    var gridContainer = document.getElementById("gridContainer");

    // Clear the container
    gridContainer.innerHTML = "";

    // Generate grid content based on the selected section
    if (selectedSection === "sectionA") {
        generateGridContent(gridContainer, 1, 64, 8);
    } else if (selectedSection === "sectionB") {
        generateGridContent(gridContainer, 65, 128, 8);
    } else if (selectedSection === "sectionC") {
        generateGridContent(gridContainer, 129, 200, 8);
    }
});

// Function to generate grid content dynamically
function generateGridContent(container, start, end, columns) {
    for (var i = start; i <= end; i++) {
        var div = document.createElement("div");
        div.innerHTML = "✟" + i; // Corrected typo and added concatenation
        div.style.border = "1px solid #000";
        div.style.padding = "10px";
        div.style.textAlign = "center";
        container.appendChild(div);
    }
}

// Function to handle payment method selection and custom contract fields
document.addEventListener('DOMContentLoaded', function () {
    // Get the radio buttons and containers
    const cardRadio = document.getElementById('cardPayment');
    const cashRadio = document.getElementById('cashPayment');
    const cardContainer = document.getElementById('cardInfoContainer');
    const cashContainer = document.getElementById('cashInfoContainer');
    const customContractFields = document.getElementById('customContractFields');
    const sectionSelect = document.getElementById('sectionSelect');

    // Add event listeners to radio buttons
    cardRadio.addEventListener('change', function () {
        cardContainer.style.display = 'block';
        cashContainer.style.display = 'none';
    });

    cashRadio.addEventListener('change', function () {
        cardContainer.style.display = 'none';
        cashContainer.style.display = 'block';
    });

    // Add event listener to the section select dropdown
    sectionSelect.addEventListener('change', function () {
        // If the selected value is 'custom', show the custom contract fields
        if (this.value === 'custom') {
            customContractFields.style.display = 'block';
        } else {
            // Otherwise, hide the custom contract fields
            customContractFields.style.display = 'none';
        }
    });
});
