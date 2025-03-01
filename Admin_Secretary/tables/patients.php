<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>HeartBeat</title>
  <meta
    content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
    name="viewport" />
  <link
    rel="icon"
    href="image_no_background.png"
    type="image/x-icon" />

  <!-- Fonts and icons -->
  <script src="../assets/js/plugin/webfont/webfont.min.js"></script>
  <script>
    WebFont.load({
      google: {
        families: ["Public Sans:300,400,500,600,700"]
      },
      custom: {
        families: [
          "Font Awesome 5 Solid",
          "Font Awesome 5 Regular",
          "Font Awesome 5 Brands",
          "simple-line-icons",
        ],
        urls: ["../assets/css/fonts.min.css"],
      },
      active: function() {
        sessionStorage.fonts = true;
      },
    });
  </script>
  <style>
    /* Default subtle shadow */
    /* Default subtle shadow */
    .shadow-blue {
      border: 1px solid rgba(0, 0, 255, 0.15);
      transition: all 0.3s ease-in-out;
    }

    /* Box shadow when input is focused (clicked into) */
    .shadow-blue:focus {
      box-shadow: 0px 0px 6px rgba(0, 0, 255, 0.2) !important;
      /* Stronger blue shadow */
      border: 1px solid rgba(0, 0, 255, 0.2) !important;
      /* Border color matching the shadow */
      outline: none !important;
      /* Remove the default focus outline */
    }

    /* Ensure all buttons are the same size */
    .custom-btn {
      width: 40px;
      /* Adjust width as needed */
      height: 40px;
      /* Adjust height as needed */
      padding: 0;
      /* Remove padding */
      display: flex;
      /* Align icons properly */
      justify-content: center;
      /* Center the icon */
      align-items: center;
      /* Center the icon vertically */
      border: 2px solid transparent;
      /* Optional, to give border visibility on hover */
      background-color: transparent;
      /* No background */
      font-size: 18px;
      /* Adjust icon size */
    }

    /* Optional: Add margin to space out buttons */
    .custom-btn.me-2 {
      margin-right: 10px;
      /* Adjust the margin between buttons */
    }

    /* Optional: Add hover effect */
    .custom-btn:hover {
      background-color: #f0f0f0;
      /* Light background on hover */
      border-color: #007bff;
      /* Border color on hover (blue) */
    }

    /* Optional: Focus style for better accessibility */
    .custom-btn:focus {
      outline: none;
      box-shadow: 0 0 0 2px rgba(38, 143, 255, 0.5);
      /* Blue outline on focus */
    }
  </style>
  <!-- CSS Files -->
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../assets/css/plugins.min.css" />
  <link rel="stylesheet" href="../assets/css/kaiadmin.min.css" />

  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link rel="stylesheet" href="../assets/css/demo.css" />
</head>

<body>
  <div class="wrapper">
    <!-- Sidebar -->
    <div class="sidebar">
      <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" style="background-color:#48abf7">
          <a href="/restoran-1/adminRestaurant/tables/dashboard.php" class="logo fs-5 fw-bold d-flex align-items-center justify-content-center" style="color:white; text-align:center;">
            <img
              src="image_no_background.png"
              alt="navbar brand"
              class="navbar-brand mx-3"
              style="max-height: 90%; width: 90%; object-fit: contain;" /> <!-- Prevent stretching of the image -->

            <span style="font-weight: bold; color: white; font-size:1.3rem; line-height:0; margin:0;">HeartBeat</span> <!-- Make the text bold and orange -->
          </a>
          <div class="nav-toggle">
            <button class="btn btn-toggle toggle-sidebar">
              <i class="gg-menu-right"></i>
            </button>
            <button class="btn btn-toggle sidenav-toggler">
              <i class="gg-menu-left"></i>
            </button>
          </div>
          <button class="topbar-toggler more">
            <i class="gg-more-vertical-alt"></i>
          </button>
        </div>
        <!-- End Logo Header -->
      </div>
      <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
          <ul class="nav nav-secondary">
            <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'dashboard.php') ? 'active' : ''; ?>">
              <a href="/HeartBeats/Admin_Secretary/tables/dashboard.php" class="collapsed" aria-expanded="false">
                <i class="fas fa-home"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-section">
              <span class="sidebar-mini-icon">
                <i class="fa fa-ellipsis-h"></i>
              </span>
              <h4 class="text-section">Human Resources</h4>
            </li>
            <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'secretaries.php') ? 'active' : ''; ?>">
              <a href="/HeartBeats/Admin_Secretary/tables/secretaries.php">
                <i class="fas fa-user-tie"></i>
                <p>Secretaries</p>
              </a>
            </li>
            <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'doctors.php') ? 'active' : ''; ?>">
              <a href="/HeartBeats/Admin_Secretary/tables/doctors.php">
                <i class="fas fa-stethoscope"></i>
                <p>Doctors</p>
              </a>
            </li>
            <li class="nav-section">
              <span class="sidebar-mini-icon">
                <i class="fa fa-ellipsis-h"></i>
              </span>
              <h4 class="text-section">Patient Manageemnt</h4>
            </li>
            <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'patients.php') ? 'active' : ''; ?>">
              <a href="/HeartBeats/Admin_Secretary/tables/patients.php">
                <i class="fas fa-procedures"></i>
                <p>Patients</p>
              </a>
            </li>
            <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'appointments.php') ? 'active' : ''; ?>">
              <a href="/HeartBeats/Admin_Secretary/tables/appointments.php">
                <i class="fas fa-calendar-check"></i>
                <p>Appointments</p>
              </a>
            </li>
            <li class="nav-section">
              <span class="sidebar-mini-icon">
                <i class="fa fa-ellipsis-h"></i>
              </span>
              <h4 class="text-section">Financial Resources</h4>
            </li>
            <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'billing.php') ? 'active' : ''; ?>">
              <a href="/HeartBeats/Admin_Secretary/tables/billing.php">
                <i class="fas fa-file-invoice-dollar"></i>
                <p>Billing</p>
              </a>
            </li>
          </ul>
        </div>

      </div>
    </div>
    <!-- End Sidebar -->
    <!-- Modals -->
    <!-- Deletion Modal -->
    <div class="modal fade" id="deleteRowModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
            <!-- Updated Close Button for Bootstrap 5 -->
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="closee">
            </button>

          </div>
          <div class="modal-body fs-5">
            Are you sure you want to remove this Patient?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-danger" id="confirmDeletion">Delete</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal fade" id="editRowModal" tabindex="-1" aria-labelledby="editRowModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addBranchModalLabel">Edit Patient</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="color: red;"></button>
          </div>
          <div class="modal-body">
            <form id="editForm">
              <div class="form-group">
                <label for="coursetitle">Patient Name</label>
                <input type="text" class="form-control shadow-blue" id="nameE" name="name" required>
              </div>
              <div class="form-group">
                <label for="coursetitle">Patient Phone</label>
                <input type="text" class="form-control shadow-blue" id="phoneE" name="phone" required>
              </div>
              <div class="form-group">
                <label for="coursetitle">Patient Date Of Birth</label>
                <input type="date" class="form-control shadow-blue" id="dateE" name="date" required>
              </div>
              <div class="form-group">
                <label for="coursetitle">Patient Medical History</label>
                <input type="text" class="form-control shadow-blue" id="historyE" name="history" required>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" form="editForm">Edit Patient</button>
          </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Add Branch Modal -->
    <div class="modal fade" id="addRowModal" tabindex="-1" aria-labelledby="addRowModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addBranchModalLabel">Add New Patient</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="color: red;"></button>
          </div>
          <div class="modal-body">
            <form id="addForm">
              <div class="form-group">
                <label for="coursetitle">Patient Name</label>
                <input type="text" class="form-control shadow-blue" id="name" name="name" required>
              </div>
              <div class="form-group">
                <label for="coursetitle">Patient Phone</label>
                <input type="text" class="form-control shadow-blue" id="phone" name="phone" required>
              </div>
              <div class="form-group">
                <label for="coursetitle">Patient Date Of Birth</label>
                <input type="date" class="form-control shadow-blue" id="date" name="date" required>
              </div>
              <div class="form-group">
                <label for="coursetitle">Patient Medical History</label>
                <input type="text" class="form-control shadow-blue" id="history" name="history" required>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" form="addForm">Add Patient</button>
          </div>
          </form>
        </div>
      </div>
    </div>
    <div class="main-panel">
      <div class="main-header">
        <div class="main-header-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
            <a href="index.html" class="logo">
              <img
                src="assets/img/kaiadmin/logo_light.svg"
                alt="navbar brand"
                class="navbar-brand"
                height="20" />
            </a>
            <div class="nav-toggle">
              <button class="btn btn-toggle toggle-sidebar">
                <i class="gg-menu-right"></i>
              </button>
              <button class="btn btn-toggle sidenav-toggler">
                <i class="gg-menu-left"></i>
              </button>
            </div>
            <button class="topbar-toggler more">
              <i class="gg-more-vertical-alt"></i>
            </button>
          </div>
          <!-- End Logo Header -->
        </div>
        <!-- Navbar Header -->
        <nav
          class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
        </nav>
        <!-- End Navbar -->
      </div>
      <div class="container">
        <div class="page-inner">
          <div class="page-header">
            <h3 class="fw-bold mb-3">Patients</h3>
            <ul class="breadcrumbs mb-3">
              <li class="nav-home">
                <a href="#">
                  <i class="icon-home"></i>
                </a>
              </li>
              <li class="separator">
                <i class="icon-arrow-right"></i>
              </li>
              <li class="nav-item">
                <a href="#">Patients</a>
              </li>
            </ul>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <div class="d-flex align-items-center">
                    <h4 class="card-title">Patients</h4>
                    <button
                      class="btn btn-primary btn-round ms-auto"
                      data-bs-toggle="modal"
                      data-bs-target="#addRowModal">
                      <i class="fa fa-plus"></i>
                      Add New Patient
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table
                      id="add-row"
                      class="display table table-striped table-hover">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Phone</th>
                          <th>DateOFBirth</th>
                          <th>Medical History</th>
                          <th>Added At</th>
                          <th style="width: 10%">Action</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Phone</th>
                          <th>DateOFBirth</th>
                          <th>Medical History</th>
                          <th>Added At</th>
                          <th>Action</th>
                        </tr>
                      </tfoot>
                      <tbody id="tb">
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <footer class="footer">
        <div class="container-fluid d-flex justify-content-between py-2">
          <div class="copyright">
            2024, made with <i class="fa fa-heart heart text-danger"></i> by
            <a href="http://www.themekita.com">Doaa Khashab</a>
          </div>
          <div>
            Distributed by
            <a target="_blank" href="https://themewagon.com/">Doaa Khashab</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery-3.7.1.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>

  <!-- jQuery Scrollbar -->
  <script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
  <!-- Datatables -->
  <script src="../assets/js/plugin/datatables/datatables.min.js"></script>
  <!-- Kaiadmin JS -->
  <script src="../assets/js/kaiadmin.min.js"></script>
  <!-- Kaiadmin DEMO methods, don't include it in your project! -->
  <script src="../assets/js/setting-demo2.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    function getAuthToken() {
      const cookies = document.cookie.split('; ');
      for (let cookie of cookies) {
        if (cookie.startsWith('authToken=')) {
          return cookie.split('=')[1];
        }
      }
      return null; // Token not found
    }
    document.addEventListener("DOMContentLoaded", () => {
      fetchData('https://clinicmsys-production.up.railway.app/api/patients');
    });

    function fetchData(url = 'https://clinicmsys-production.up.railway.app/api/patients') {
      if (!url || typeof url !== 'string') {
        console.error('Invalid URL:', url);
        return;
      }

      const token = getAuthToken(); // Replace this with your actual token retrieval method
      fetch(url, {
          method: 'GET',
          headers: {
            'Authorization': `Bearer ${token}`,
            'Content-Type': 'application/json',
          },
        })
        .then((response) => {
          if (!response.ok) {
            throw new Error(`Request failed: ${response.statusText}`);
          }
          return response.json();
        })
        .then((data) => {
          console.log('Fetched Tasks:', data);
          displayData(data);
        })
        .catch((error) => {
          console.error('Error fetching tasks:', error.message);
          alert('Failed to fetch tasks. Please try again.');
        });
    }

    function displayData(data) {
      const tbody = document.getElementById("tb");
      tbody.innerHTML = ""; // Clear existing rows before adding new ones
      const items = data.data;

      if (!Array.isArray(items) || items.length === 0) {
        tbody.innerHTML = '<tr><td colspan="5" class="text-center">No secretaries found.</td></tr>';
        return;
      }

      let rows = "";
      items.forEach(item => {
        const created_at = item.created_at.split("T")[0];
        rows += `
            <tr>
                <td>${item.id}</td>
                <td>${item.name}</td>
                <td>${item.phone}</td>
                <td>${item.dob}</td>
                <td>${item.medical_history}</td>
                <td>${created_at}</td>
                <td>
                    <div class="form-button-action">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#editRowModal"
                            class="btn btn-link btn-primary btn-lg  editbutton" data-item="${item.id}"  data-name="${item.name}"  data-phone="${item.phone}" data-date="${item.dob}" data-history="${item.medical_history}">
                            <i class="fa fa-edit"></i>
                        </button>
                        <button type="button" data-bs-toggle="modal" data-bs-target="#deleteRowModal"
                            class="btn btn-link btn-danger deletebutton"  data-item="${item.id}">
                            <i class="fa fa-times fs-5"></i>
                        </button>
                    </div>
                </td>
            </tr>
        `;
      });

      tbody.innerHTML = rows;

      // Check if DataTable is initialized
      if ($.fn.DataTable.isDataTable("#add-row")) {
        // Use the DataTable instance to clear and add rows dynamically
        const table = $('#add-row').DataTable();
        table.clear(); // Clear previous data
        table.rows.add($(tbody).find('tr')); // Add new rows
        table.draw(); // Redraw the table with the new data
      } else {
        // If DataTable is not initialized, initialize it for the first time
        $('#add-row').DataTable({
          responsive: true,
          pageLength: 10,
          searching: true,
          ordering: true
        });
      }
    }
    $(document).ready(function() {
      var IDToDelete;
      // Open the modal and store the category ID
      $(document).on('click', '.deletebutton', function() {
        IDToDelete = $(this).data('item');
        console.log("Selected ID:", IDToDelete);
      });
      // Perform the deletion action when the delete button is clicked
      $('#confirmDeletion').on('click', function() {
        handleDelete(IDToDelete);

      });
    });
    // Function to handle the delete operation
    function handleDelete(id) {

      const token = getAuthToken();
      // Perform the delete action (e.g., API call to delete the secretary)
      fetch(`https://clinicmsys-production.up.railway.app/api/patients/${id}`, {
          method: 'DELETE',
          headers: {
            'Authorization': `Bearer ${token}`,
            'Content-Type': 'application/json',
          },
        })
        .then(response => {
          if (response.ok) {
            // If the API call is successful, show SweetAlert for success
            Swal.fire({
              icon: 'success',
              title: "Patient deleted Successfully",
              showConfirmButton: true,
              customClass: {
                confirmButton: 'button btn btn-primary app_style'
              }
            }).then(function() {
              location.reload();
            });
          } else {
            // Show SweetAlert for failure
            Swal.fire({
              icon: 'error',
              title: 'Deletion failed',
              text: 'Something went wrong. Please try again.',
              showConfirmButton: true,
              customClass: {
                confirmButton: 'button btn btn-primary app_style'
              }
            });
          }
        })
        .catch(error => {
          // Show SweetAlert for network error
          Swal.fire({
            icon: 'error',
            title: 'Deletion failed',
            text: error.message || 'Unable to connect to the server. Please try again.',
            showConfirmButton: true
          });
        });
    }
    document.getElementById('addForm').addEventListener('submit', async function(event) {
      event.preventDefault(); // Prevent form from reloading the page

      // Get input values
      const name = document.getElementById('name').value;
      const phone = document.getElementById('phone').value;
      const dob = document.getElementById('date').value;
      const medical_history = document.getElementById('history').value;
      console.log(history);
      // Prepare data to send
      const Data = {
        name,
        phone,
        dob,
        medical_history
      };

      try {
        // Send POST request to the API
        const token = getAuthToken(); // Ensure this function returns a valid token
        const response = await fetch('https://clinicmsys-production.up.railway.app/api/patients', {
          method: 'POST',
          headers: {
            'Authorization': `Bearer ${token}`,
            'Content-Type': 'application/json',
          },
          body: JSON.stringify(Data),
        });

        // Handle the response
        if (response.ok) {
          Swal.fire({
            icon: 'success',
            title: "Patient added successfully!",
            showConfirmButton: true,
            customClass: {
              confirmButton: 'button btn btn-primary app_style'
            }
          }).then(() => {
            location.reload(); // Refresh the page after success
          });

        } else {
          const errorData = await response.json();
          console.error('Error response:', errorData);
          // Get the first validation error
          let firstErrorMessage = "Something went wrong!"; // Default message
          if (errorData.errors) {
            firstErrorMessage = Object.values(errorData.errors)[0][0]; // Get the first error message
          }

          Swal.fire({
            icon: 'error',
            title: firstErrorMessage, // Show the API's default validation message
            showConfirmButton: true,
            customClass: {
              confirmButton: 'button btn btn-danger app_style'
            }
          });
        }
      } catch (error) {
        console.error('Error:', error);
        Swal.fire({
          icon: 'error',
          title: 'An error occurred!',
          text: error.message, // Only for unexpected errors
          showConfirmButton: true,
          customClass: {
            confirmButton: 'button btn btn-danger app_style'
          }
        });
      }
    });
    $(document).ready(function() {
      let IDToUpdate = null; // Declare globally
      const token = getAuthToken(); // Retrieve the token

      // Open the modal and set existing data
      $(document).on('click', '.editbutton', function() {
        IDToUpdate = $(this).data('item'); // Store ID globally
        const name = $(this).data('name');
        const phone = $(this).data('phone');
        const dob = $(this).data('date');
        const medical_history = $(this).data('history');
        console.log(dob);
        // Set values in modal input fields
        $('#nameE').val(name);
        $('#phoneE').val(phone);
        $('#dateE').val(dob);
        $('#historyE').val(medical_history);
        console.log("Selected ID:", IDToUpdate);
      });

      // Handle form submission
      $('#editForm').on('submit', function(e) {
        e.preventDefault();

        if (!IDToUpdate) {
          console.error("No ID selected for update.");
          Swal.fire({
            icon: 'error',
            title: "Error",
            text: "No user selected.",
            showConfirmButton: true,
          });
          return;
        }

        // Get updated values from the form
        const updatedData = {
          name: $('#nameE').val(),
          phone: $('#phoneE').val(),
          dob: $('#dateE').val(),
          medical_history: $('#historyE').val()
        };

        $.ajax({
          url: `https://clinicmsys-production.up.railway.app/api/patients/${IDToUpdate}`,
          type: "PUT", // Or "PATCH" if partial update
          contentType: "application/json",
          dataType: "json",
          headers: {
            "Authorization": `Bearer ${token}`
          },
          data: JSON.stringify(updatedData),
          success: function(response) {
            console.log("Update successful:", response);
            Swal.fire({
              icon: 'success',
              title: "Patient updated successfully",
              showConfirmButton: true,
              customClass: {
                confirmButton: 'button btn btn-primary app_style'
              }
            }).then(() => {
              location.reload(); // Reload after success
            });
          },
          error: function(xhr, status, error) {
            console.error("Error updating:", xhr.responseText);
            let response = xhr.responseJSON;

            if (response && response.errors) {
              let errorMessages = "";

              // Collect all validation errors from API response
              Object.keys(response.errors).forEach(function(key) {
                errorMessages += response.errors[key][0] + "\n";
              });

              Swal.fire({
                icon: 'error',
                title: "Validation Error",
                text: errorMessages,
                showConfirmButton: true,
                customClass: {
                  confirmButton: 'button btn btn-danger app_style'
                }
              });
            } else {
              Swal.fire({
                icon: 'error',
                title: "Update Failed",
                text: "Failed to update user details. Please try again.",
                showConfirmButton: true,
                customClass: {
                  confirmButton: 'button btn btn-danger app_style'
                }
              });
            }
          }
        });
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      $("#basic-datatables").DataTable({});

      $("#multi-filter-select").DataTable({
        pageLength: 5,
        initComplete: function() {
          this.api()
            .columns()
            .every(function() {
              var column = this;
              var select = $(
                  '<select class="form-select"><option value=""></option></select>'
                )
                .appendTo($(column.footer()).empty())
                .on("change", function() {
                  var val = $.fn.dataTable.util.escapeRegex($(this).val());

                  column
                    .search(val ? "^" + val + "$" : "", true, false)
                    .draw();
                });

              column
                .data()
                .unique()
                .sort()
                .each(function(d, j) {
                  select.append(
                    '<option value="' + d + '">' + d + "</option>"
                  );
                });
            });
        },
      });

      // Add Row
      $("#add-row").DataTable({
        pageLength: 5,
      });

      var action =
        '<td> <div class="form-button-action"> <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

      $("#addRowButton").click(function() {
        $("#add-row")
          .dataTable()
          .fnAddData([
            $("#addName").val(),
            $("#addPosition").val(),
            $("#addOffice").val(),
            action,
          ]);
        $("#addRowModal").modal("hide");
      });
    });
  </script>
</body>

</html>