<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cemetery Mapping</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
    <a class="blue-text mb-4" href="admin.php">⬅️Back To Dashboard</a>
        <header class="text-center mb-4">      
            <h2>The Vatican Cemetery</h2>
        </header>

        <!-- Add Button Triggering Add Modal -->
        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addModal">
            Add New Record
        </button>

        <!-- Cemetery Mapping Table -->
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Date of Birth</th>
                        <th>Date of Death</th>
                        <th>Burial Date</th>
                        <th>Relationship with Owner</th>
                        <th>Location</th>
                        <th>Status</th>

                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Sample Data -->
                    <tr>
                        <td>1</td>
                        <td>Jefford</td>
                        <td>Inato</td>
                        <td>03/19/2003</td>
                        <td>02/14/2024</td>
                        <td>02/23/2024</td>
                        <td>Brother</td>
                        <td>Section A, Plot 10</td>
                        <td>Inactive</td>

                        <td>
                            <!-- Edit and Delete Buttons Triggering Modals -->
                            <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                data-bs-target="#editModal">
                                <i class="bi bi-pencil"></i> Edit
                            </button>
                        </td>
                    </tr>
                    <!-- Add more rows as needed -->

                </tbody>
            </table>
        </div>
    </div>

    <!-- Add Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <!-- Add Modal content here -->
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Add Cemetery Record</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Add Form Content -->
                    <form>
                        <!-- Add your form fields here (Firstname, Lastname, DateofBirth, etc.) -->
                        <div class="mb-3">
                            <label for="addFirstname" class="form-label">Firstname</label>
                            <input type="text" class="form-control" id="addFirstname" required>
                        </div>
                        <div class="mb-3">
                            <label for="addLastname" class="form-label">Lastname</label>
                            <input type="text" class="form-control" id="addLastname" required>
                        </div>
                        <div class="mb-3">
                            <label for="addDoB" class="form-label">Date of Birth</label>
                            <input type="date" class="form-control" id="addDoB" required>
                        </div>
                        <div class="mb-3">
                            <label for="addDoD" class="form-label">Date of Death</label>
                            <input type="date" class="form-control" id="addDoD" required>
                        </div>
                        <div class="mb-3">
                            <label for="addBurialDate" class="form-label">Burial Date</label>
                            <input type="date" class="form-control" id="addBurialDate" required>
                        </div>
                        <div class="mb-3">
                            <label for="addRelationshipWithOwner" class="form-label">Relationship with Owner</label>
                            <input type="text" class="form-control" id="addRelationshipWithOwner" required>
                        </div>
                        <div class="mb-3">
                            <label for="addLocation" class="form-label">Location</label>
                            <input type="text" class="form-control" id="addLocation" required>
                        </div>
                        <!-- Add other fields similarly -->
                        <button type="button" class="btn btn-primary">Add Record</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <!-- Edit Modal content here -->
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Cemetery Record</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Edit Form Content -->
                    <form>
                        <!-- Add your form fields here (Firstname, Lastname, DateofBirth, etc.) -->
                        <div class="mb-3">
                            <label for="editFirstname" class="form-label">Firstname</label>
                            <input type="text" class="form-control" id="editFirstname" required>
                        </div>
                        <div class="mb-3">
                            <label for="editLastname" class="form-label">Lastname</label>
                            <input type="text" class="form-control" id="editLastname" required>
                        </div>
                        <div class="mb-3">
                            <label for="editDoB" class="form-label">Date of Birth</label>
                            <input type="date" class="form-control" id="editDoB" required>
                        </div>
                        <div class="mb-3">
                            <label for="editDoD" class="form-label">Date of Death</label>
                            <input type="date" class="form-control" id="editDoD" required>
                        </div>
                        <div class="mb-3">
                            <label for="editBurialDate" class="form-label">Burial Date</label>
                            <input type="date" class="form-control" id="editBurialDate" required>
                        </div>
                        <div class="mb-3">
                            <label for="editRelationshipWithOwner" class="form-label">Relationship with Owner</label>
                            <input type="text" class="form-control" id="editRelationshipWithOwner" required>
                        </div>
                        <div class="mb-3">
                            <label for="editLocation" class="form-label">Location</label>
                            <input type="text" class="form-control" id="editLocation" required>
                        </div>
                        <!-- Add other fields similarly -->
                        <button type="button" class="btn btn-primary">Edit Record</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this record?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" id="deleteRecordBtn">Delete</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
