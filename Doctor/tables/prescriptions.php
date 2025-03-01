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
              <a href="/HeartBeats/Doctor/tables/dashboard.php" class="collapsed" aria-expanded="false">
                <i class="fas fa-home"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-section">
              <span class="sidebar-mini-icon">
                <i class="fa fa-ellipsis-h"></i>
              </span>
              <h4 class="text-section">Patient Manageemnt</h4>
            </li>
            <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'patients.php') ? 'active' : ''; ?>">
              <a href="/HeartBeats/Doctor/tables/patients.php">
                <i class="fas fa-procedures"></i>
                <p>Patients</p>
              </a>
            </li>
            <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'appointments.php') ? 'active' : ''; ?>">
              <a href="/HeartBeats/Doctor/tables/appointments.php">
                <i class="fas fa-calendar-check"></i>
                <p>Appointments</p>
              </a>
            </li>
            <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'prescriptions.php') ? 'active' : ''; ?>">
              <a href="/HeartBeats/Doctor/tables/prescriptions.php">
                <i class="fas fa-file-medical"></i>
                <p>Prescriptions</p>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Sidebar -->
    <!-- Modals -->
    <!-- Edit Modal -->
    <!-- Edit Prescription Modal -->
    <div class="modal fade" id="editPrescriptionModal" tabindex="-1" aria-labelledby="editPrescriptionModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editPrescriptionModalLabel">Edit Prescription</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="editForm">
              <div id="medicationContainer">
                <!-- Medication fields will be added here dynamically -->
              </div>

              <button type="button" class="btn btn-primary mt-2" id="addMedication">+ Add Medication</button>

              <div class="form-group mt-3">
                <label for="notes">Notes</label>
                <input type="text" class="form-control shadow-blue" id="notes" name="notes" required>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Edit Prescription</button>
              </div>
            </form>

          </div>
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
            <h3 class="fw-bold mb-3">Bills</h3>
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
                <a href="#">Bills</a>
              </li>
            </ul>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <div class="d-flex align-items-center">
                    <h4 class="card-title">Bills</h4>
                  </div>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table
                      id="add-row"
                      class="display table table-striped table-hover">
                      <thead>
                        <tr>
                          <th>AppointmentID</th>
                          <th>Patient Name</th>
                          <th>Doctor Name</th>
                          <th>Medication</th>
                          <th>Notes</th>
                          <th style="width: 10%">Action</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th>AppointmentID</th>
                          <th>Patient Name</th>
                          <th>Doctor Name</th>
                          <th>Medication</th>
                          <th>Notes</th>
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
      fetchData('https://clinicmsys-production.up.railway.app/api/prescriptions');
    });

    function fetchData(url = 'https://clinicmsys-production.up.railway.app/api/prescriptions') {
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
        rows += `
            <tr>
                <td>${item.appointment_id}</td>
                <td>${item.appointment.patient.name}</td>
                <td>${item.doctor.user.name}</td>
                <td>${item.medication}</td>
                <td>${item.notes}</td>
                <td>
                    <div class="form-button-action">
                 <button type="button" data-bs-toggle="modal" data-bs-target="#editPrescriptionModal"
    class="btn btn-link btn-primary btn-lg editbutton" 
    data-item="${item.id}"  
    data-medication='${JSON.stringify(item.medication)}'  
    data-notes="${item.notes}">
    <i class="fa fa-edit"></i>
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
      let IDToUpdate = null; // Store the selected prescription ID
      const token = getAuthToken(); // Get authentication token

      // Open the modal and set existing data
      $(document).on('click', '.editbutton', function() {
        IDToUpdate = $(this).data('item'); // Store ID globally
        let medications = $(this).attr('data-medication'); // Get raw JSON string
        const notes = $(this).data('notes'); // Get notes

        console.log("Raw Medications Data:", medications); // Debugging

        try {
          medications = JSON.parse(medications); // Parse the medications JSON string
          medications = JSON.parse(medications);
          console.log("Parsed Medications:", medications); // Debugging

          // Ensure medications is an array

        } catch (e) {
          console.error("Error parsing medications JSON:", e);
          medications = []; // Fallback to an empty array
        }

        // Clear previous medication fields
        $('#medicationContainer').html('');

        // Debugging check: Ensure medications is an array and contains data
        if (typeof medications === "string") {
          console.log(true);
          medications = JSON.parse(medications);
        }

        if (Array.isArray(medications) && medications.length > 0) {
          console.log("Medications array is valid and contains data.");

          medications.forEach((medication) => {
            addMedicationField(medication.name, medication.dose, medication.frequency);
          });
        } else {
          console.log("Medications array is empty or invalid.");
        }


        // Set notes
        $('#notes').val(notes);
      });

      // Function to add a new medication input group
      function addMedicationField(name = '', dose = '', frequency = '') {
        console.log(`Creating field for: ${name}, ${dose}, ${frequency}`); // Debugging
        const html = `
        <div class="medication-group d-flex align-items-center mb-2">
            <input type="text" class="form-control me-2" name="med_name[]" placeholder="Name" value="${name}" required>
            <input type="text" class="form-control me-2" name="med_dose[]" placeholder="Dose" value="${dose}" required>
            <input type="text" class="form-control me-2" name="med_frequency[]" placeholder="Frequency" value="${frequency}" required>
            <button type="button" class="btn btn-danger remove-medication">✖</button>
        </div>
        `;
        $('#medicationContainer').append(html);
      }

      // Handle add prescription button click
      $('#addMedication').on('click', function() {
        addMedicationField();
      });

      // Handle removing a medication field
      $(document).on('click', '.remove-medication', function() {
        $(this).closest('.medication-group').remove();
      });

      // Handle form submission
      $('#editForm').on('submit', function(e) {
        e.preventDefault();

        if (!IDToUpdate) {
          Swal.fire({
            icon: 'error',
            title: "Error",
            text: "No prescription selected.",
            showConfirmButton: true,
          });
          return;
        }

        // Get all medications from form fields
        const medications = [];
        $('.medication-group').each(function() {
          const name = $(this).find('input[name="med_name[]"]').val();
          const dose = $(this).find('input[name="med_dose[]"]').val();
          const frequency = $(this).find('input[name="med_frequency[]"]').val();
          medications.push({
            name,
            dose,
            frequency
          });
        });

        // Create final object for submission
        const updatedData = {
          medication: JSON.stringify(medications), // Convert to JSON format
          notes: $('#notes').val()
        };

        console.log("Updated Data:", updatedData); // Debugging

        // Send updated data via AJAX
        $.ajax({
          url: `https://clinicmsys-production.up.railway.app/api/prescriptions/${IDToUpdate}`,
          type: "PUT", // Use "PATCH" if doing a partial update
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
              title: "Prescription updated successfully",
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
                text: "Failed to update prescription. Please try again.",
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