<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>HeartBeat</title>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
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
            Are you sure you want to remove this doctor?
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
            <h5 class="modal-title">Edit Doctor</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="editForm" novalidate>
              <!-- Basic Doctor Info -->
              <div class="form-group mb-2">
                <label>Doctor Name</label>
                <input type="text" class="form-control" id="nameE" name="name" required>
              </div>
              <div class="form-group mb-2">
                <label>Doctor Email</label>
                <input type="email" class="form-control" id="emailE" name="email" required>
              </div>
              <div class="form-group mb-2">
                <label>Doctor Specialty</label>
                <input type="text" class="form-control" id="specialtyE" name="specialty" required>
              </div>

              <!-- Toggle Availability Section -->
              <div class="form-group mt-0 mb-1">
                <button type="button" id="toggleAvailabilityBtn" class="btn btn-primary">
                  Edit Availability
                </button>
              </div>

              <!-- Availability Fields Container (check boxes appear exactly below the button) -->
              <div id="availabilityContainer" class="mt-1 mb-3 ms-3" style="display:none;">
                <!-- Monday -->
                <div class="mb-1 ">
                  <label>
                    <input type="checkbox" id="editmondayCheckbox" class="editDayCheckbox" value="Monday">
                    Monday
                  </label>

                  <input type="time" id="editmondayStartTime" class="editTimeInput" name="mondayStart" style="display:none;">
                  <input type="time" id="editmondayEndTime" class="editTimeInput" name="mondayEnd" style="display:none;">

                </div>
                <!-- Tuesday -->
                <div class="mb-1">
                  <label>
                    <input type="checkbox" id="edittuesdayCheckbox" class="editDayCheckbox" value="Tuesday">
                    Tuesday
                  </label>

                  <input type="time" id="edittuesdayStartTime" class="editTimeInput" name="tuesdayStart" style="display:none;">
                  <input type="time" id="edittuesdayEndTime" class="editTimeInput" name="tuesdayEnd" style="display:none;">

                </div>
                <!-- Wednesday -->
                <div class="mb-1">
                  <label>
                    <input type="checkbox" id="editwednesdayCheckbox" class="editDayCheckbox" value="Wednesday">
                    Wednesday
                  </label>

                  <input type="time" id="editwednesdayStartTime" class="editTimeInput" name="wednesdayStart" style="display:none;">
                  <input type="time" id="editwednesdayEndTime" class="editTimeInput" name="wednesdayEnd" style="display:none;">

                </div>
                <!-- Thursday -->
                <div class="mb-1">
                  <label>
                    <input type="checkbox" id="editthursdayCheckbox" class="editDayCheckbox" value="Thursday">
                    Thursday
                  </label>

                  <input type="time" id="editthursdayStartTime" class="editTimeInput" name="thursdayStart" style="display:none;">
                  <input type="time" id="editthursdayEndTime" class="editTimeInput" name="thursdayEnd" style="display:none;">

                </div>
                <!-- Friday -->
                <div class="mb-1">
                  <label>
                    <input type="checkbox" id="editfridayCheckbox" class="editDayCheckbox" value="Friday">
                    Friday
                  </label>

                  <input type="time" id="editfridayStartTime" class="editTimeInput" name="fridayStart" style="display:none;">
                  <input type="time" id="editfridayEndTime" class="editTimeInput" name="fridayEnd" style="display:none;">

                </div>
                <!-- Saturday -->
                <div class="mb-1">
                  <label>
                    <input type="checkbox" id="editsaturdayCheckbox" class="editDayCheckbox" value="Saturday">
                    Saturday
                  </label>
                  <input type="time" id="editsaturdayStartTime" class="editTimeInput" name="saturdayStart" style="display:none;">
                  <input type="time" id="editsaturdayEndTime" class="editTimeInput" name="saturdayEnd" style="display:none;">

                </div>
                <!-- Sunday -->
                <div class="mb-1">
                  <label>
                    <input type="checkbox" id="editsundayCheckbox" class="editDayCheckbox" value="Sunday">
                    Sunday
                  </label>

                  <input type="time" id="editsundayStartTime" class="editTimeInput" name="sundayStart" style="display:none;">
                  <input type="time" id="editsundayEndTime" class="editTimeInput" name="sundayEnd" style="display:none;">

                </div>
              </div>

              <!-- Modal Footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" form="editForm">Update Doctor</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>



    <!--Reset Password-->
    <div class="modal fade" id="editImageModal" tabindex="-1" aria-labelledby="editImageModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editImageModalLabel">Reset Password</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="color: red;"></button>
          </div>
          <div class="modal-body">
            <!-- Form for editing only the image -->
            <form id="resetForm">
              <div class="form-group">
                <label for="coursetitle">New Password</label>
                <input type="text" class="form-control shadow-blue" id="passwordE" name="password" required>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" form="resetForm">Reset Password</button>
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
            <h5 class="modal-title" id="addBranchModalLabel">Add New Doctor</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="color: red;"></button>
          </div>
          <div class="modal-body">
            <form id="addForm">
              <div class="form-group">
                <label for="coursetitle">Doctor Name</label>
                <input type="text" class="form-control shadow-blue" id="name" name="name" required>
              </div>
              <div class="form-group">
                <label for="coursetitle">Doctor Email</label>
                <input type="text" class="form-control shadow-blue" id="email" name="email" required>
              </div>
              <div class="form-group">
                <label for="coursetitle">Doctor Specialty</label>
                <input type="text" class="form-control shadow-blue" id="specialty" name="specialty" required>
              </div>
              <div class="form-group">
                <label for="coursetitle">Doctor Password</label>
                <input type="text" class="form-control shadow-blue" id="password" name="password" required>
              </div>
              <div class="form-group">
                <label for="coursetitle">Doctor Availability</label>
                <br>
                <!-- Monday -->
                <label>
                  <input type="checkbox" id="mondayCheckbox" class="dayCheckbox" value="Monday" name="day"> Monday
                </label>
                <input type="time" id="mondayStartTime" class="timeInput" style="display:none;" name="day">
                <input type="time" id="mondayEndTime" class="timeInput" style="display:none;" name="day">

                <br>

                <!-- Tuesday -->
                <label>
                  <input type="checkbox" id="tuesdayCheckbox" class="dayCheckbox" value="Tuesday" name="day"> Tuesday
                </label>
                <input type="time" id="tuesdayStartTime" class="timeInput" style="display:none;" name="day">
                <input type="time" id="tuesdayEndTime" class="timeInput" style="display:none;" name="day">

                <br>

                <!-- Wednesday -->
                <label>
                  <input type="checkbox" id="wednesdayCheckbox" class="dayCheckbox" name="day" value="Wednesday"> Wednesday
                </label>
                <input type="time" id="wednesdayStartTime" class="timeInput" name="day" style="display:none;">
                <input type="time" id="wednesdayEndTime" class="timeInput" name="day" style="display:none;">

                <br>

                <!-- Thursday -->
                <label>
                  <input type="checkbox" id="thursdayCheckbox" class="dayCheckbox" name="day" value="Thursday"> Thursday
                </label>
                <input type="time" id="thursdayStartTime" class="timeInput" name="day" style="display:none;">
                <input type="time" id="thursdayEndTime" class="timeInput" name="day" style="display:none;">

                <br>

                <!-- Friday -->
                <label>
                  <input type="checkbox" id="fridayCheckbox" name="day" class="dayCheckbox" value="Friday"> Friday
                </label>
                <input type="time" id="fridayStartTime" name="day" class="timeInput" style="display:none;">
                <input type="time" id="fridayEndTime" name="day" class="timeInput" style="display:none;">

                <br>

                <!-- Saturday -->
                <label>
                  <input type="checkbox" id="saturdayCheckbox" name="day" class="dayCheckbox" value="Saturday"> Saturday
                </label>
                <input type="time" id="saturdayStartTime" name="day" class="timeInput" style="display:none;">
                <input type="time" id="saturdayEndTime" name="day" class="timeInput" style="display:none;">

                <br>

                <!-- Sunday -->
                <label>
                  <input type="checkbox" id="sundayCheckbox" name="day" class="dayCheckbox" value="Sunday"> Sunday
                </label>
                <input type="time" id="sundayStartTime" name="day" class="timeInput" style="display:none;">
                <input type="time" id="sundayEndTime" name="day" class="timeInput" style="display:none;">

                <br>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" form="addForm">Add Doctor</button>
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
            <h3 class="fw-bold mb-3">Doctors</h3>
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
                <a href="#">Doctors</a>
              </li>
            </ul>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <div class="d-flex align-doctors-center">
                    <h4 class="card-title">Doctors</h4>
                    <button
                      class="btn btn-primary btn-round ms-auto"
                      data-bs-toggle="modal"
                      data-bs-target="#addRowModal">
                      <i class="fa fa-plus"></i>
                      Add New Doctor
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
                          <th>Email</th>
                          <th>Specialty</th>
                          <th>Availability</th>
                          <th>Joined At</th>
                          <th style="width: 10%">Action</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Specialty</th>
                          <th>Availability</th>
                          <th>Joined At</th>
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
    // Handle checkbox change to toggle visibility of time inputs and required attribute
    document.querySelectorAll('.dayCheckbox').forEach(checkbox => {
      checkbox.addEventListener('change', function() {
        const day = this.value.toLowerCase(); // Get the day (e.g., "monday")
        const startTimeInput = document.getElementById(`${day}StartTime`);
        const endTimeInput = document.getElementById(`${day}EndTime`);

        if (this.checked) {
          startTimeInput.style.display = 'inline'; // Show start time input
          endTimeInput.style.display = 'inline'; // Show end time input

          // Make time inputs required
          startTimeInput.setAttribute('required', true);
          endTimeInput.setAttribute('required', true);
        } else {
          startTimeInput.style.display = 'none'; // Hide start time input
          endTimeInput.style.display = 'none'; // Hide end time input
        }
      });
    });


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
      fetchData('https://clinicmsys-production.up.railway.app/api/users');
    });

    function fetchData(url = 'https://clinicmsys-production.up.railway.app/api/users') {
      if (!url || typeof url !== 'string') {
        console.error('Invalid URL:', url);
        return;
      }

      const token = getAuthToken(); // Replace this with your actual token retrieval method
      if (!token) {
        console.error('No token found! Please log in first.');
        alert('You must log in to view your tasks.');
        return;
      }

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
        tbody.innerHTML = '<tr><td colspan="5" class="text-center">No doctors found.</td></tr>';
        return;
      }

      let rows = "";
      items.forEach(item => {
        const created_at = item.created_at.split("T")[0];
        rows += `
            <tr>
                <td>${item.id}</td>
                <td>${item.name}</td>
                <td>${item.email}</td>
                <td>${item.doctors.specialty}</td>
                <td>${item.doctors.availability}</td>
                <td>${created_at}</td>
                <td>
                    <div class="form-button-action">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#editRowModal"
                            class="btn btn-link btn-primary btn-lg  editbutton" data-item="${item.id}"  data-name="${item.name}"  data-email="${item.email}" data-availability='${JSON.stringify(item.doctors.availability)}'
  data-specialty="${item.doctors.specialty}" >
                            <i class="fa fa-edit"></i>
                        </button>
                        <button type="button" data-bs-toggle="modal" data-bs-target="#deleteRowModal"
                            class="btn btn-link btn-danger deletebutton"  data-item="${item.id}">
                            <i class="fa fa-times fs-5"></i>
                        </button>
                          <button type="button" class="btn border-0 resetbutton" data-bs-toggle="modal" data-bs-target="#editImageModal" data-item="${item.id}" data-password="${item.password}">
                                 <i class="fas fa-key fs-4"></i>
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
      // Perform the delete action (e.g., API call to delete the Doctor)
      fetch(`https://clinicmsys-production.up.railway.app/api/users/${id}`, {
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
              title: "Doctor deleted Successfully",
              showConfirmButton: true,
              customClass: {
                confirmButton: 'button btn btn-primary app_style'
              }
            }).then(function() {
              location.reload();
            });
          } else {
            // Show SweetAlert for failure

            let errorMessage = 'Something went wrong. Please try again.';

            if (response.status === 403) {
              errorMessage = 'You are not authorized to perform this action.';
            }

            Swal.fire({
              icon: 'error',
              title: 'Deletion failed',
              text: errorMessage,
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

      const name = document.getElementById('name').value;
      const email = document.getElementById('email').value;
      const selectedDays = document.querySelectorAll('.dayCheckbox:checked');

      function formatTo24Hour(time) {
        const [hours, minutes] = time.split(':');
        const isPM = time.includes('PM');
        const isAM = time.includes('AM');

        let hour = parseInt(hours, 10);
        if (isPM && hour !== 12) hour += 12;
        if (isAM && hour === 12) hour = 0;
        return `${hour.toString().padStart(2, '0')}:${minutes}`;
      }

      let availability = {};
      selectedDays.forEach(dayCheckbox => {
        const day = dayCheckbox.value.toLowerCase();
        const startTime = document.getElementById(`${day}StartTime`).value;
        const endTime = document.getElementById(`${day}EndTime`).value;

        if (startTime && endTime) {
          const start24hr = formatTo24Hour(startTime);
          const end24hr = formatTo24Hour(endTime);
          availability[day.charAt(0).toUpperCase() + day.slice(1)] = `${start24hr} - ${end24hr}`;
        }
      });

      const availabilityJson = JSON.stringify(availability);

      const specialty = document.getElementById('specialty').value;
      const password = document.getElementById('password').value;
      const role = "doctor";

      const data = {
        name,
        email,
        password,
        availability: availabilityJson,
        specialty,
        role
      };

      // Get the token
      const token = getAuthToken();

      if (!token) {
        Swal.fire({
          icon: 'error',
          title: 'Authentication Required',
          text: 'You must be logged in to perform this action.',
          customClass: {
            confirmButton: 'btn btn-primary'
          }
        });
        return;
      }

      try {
        const response = await axios.post('https://clinicmsys-production.up.railway.app/api/users', data, {
          headers: {
            'Content-Type': 'application/json',
            'Authorization': `Bearer ${token}`
          }
        });

        // Success
        Swal.fire({
          icon: 'success',
          title: 'Doctor Added Successfully',
          customClass: {
            confirmButton: 'btn btn-primary'
          }
        }).then(() => {
          location.reload(); // Reload the page after success
        });
      } catch (error) {
        // Handle errors
        console.error('Error:', error);

        if (error.response) {
          // The request was made and the server responded with a status code
          // that falls out of the range of 2xx
          const {
            status,
            data
          } = error.response;

          if (status === 422) {
            // Validation errors
            let errorMessage = "<ul>";
            for (const [field, messages] of Object.entries(data.errors)) {
              errorMessage += `${messages.join(', ')} <br>`;
            }
            errorMessage += "</ul>";

            Swal.fire({
              icon: 'error',
              title: 'Validation Error',
              html: errorMessage, // Display errors in a list
              customClass: {
                confirmButton: 'btn btn-primary'
              }
            });
          } else if (status === 401) {
            // Unauthorized
            Swal.fire({
              icon: 'error',
              title: 'Unauthorized',
              text: 'You are not authorized. Please log in.',
              customClass: {
                confirmButton: 'btn btn-primary'
              }
            })
          } else {
            // Other errors
            Swal.fire({
              icon: 'error',
              title: 'Error',
              text: data.message || 'An error occurred. Please try again.',
              customClass: {
                confirmButton: 'btn btn-primary'
              }
            });
          }
        } else if (error.request) {
          // The request was made but no response was received
          Swal.fire({
            icon: 'error',
            title: 'No Response',
            text: 'No response received from the server. Please check your network connection.',
            customClass: {
              confirmButton: 'btn btn-primary'
            }
          });
        } else {
          // Something happened in setting up the request
          Swal.fire({
            icon: 'error',
            title: 'Request Error',
            text: error.message || 'An error occurred while setting up the request.',
            customClass: {
              confirmButton: 'btn btn-primary'
            }
          });
        }
      }
    });

    $(document).ready(function() {
      let IDToUpdate = null;
      const token = getAuthToken(); // Retrieve auth token

      // Toggle the availability container when "Edit Availability" is clicked.
      $('#toggleAvailabilityBtn').on('click', function() {
        $('#availabilityContainer').toggle();
      });

      // Toggle individual time inputs when a day checkbox is changed.
      $('.editDayCheckbox').on('change', function() {
        const day = $(this).val().toLowerCase();
        const startTimeInput = $(`#edit${day}StartTime`);
        const endTimeInput = $(`#edit${day}EndTime`);

        if ($(this).is(':checked')) {
          startTimeInput.show().prop('required', true);
          endTimeInput.show().prop('required', true);
        } else {
          startTimeInput.hide().prop('required', false);
          endTimeInput.hide().prop('required', false);
        }
      });

      // When an edit button is clicked, load the doctor's data into the modal.
      $(document).on('click', '.editbutton', function() {
        IDToUpdate = $(this).data('item');
        const name = $(this).data('name');
        const email = $(this).data('email');
        const specialty = $(this).data('specialty');
        const availabilityData = $(this).attr('data-availability'); // JSON string
        const availability = JSON.parse(availabilityData);
        const availability2 = JSON.parse(availability);
        console.log(typeof availability2); // Output: object
        console.log(availability2.Monday); // Output: '17:52 PM - 05:34 AM'
        // Set basic doctor information
        $('#nameE').val(name);
        $('#emailE').val(email);
        $('#specialtyE').val(specialty);
        console.log(availability2);
        // Reset availability fields: hide container, uncheck checkboxes, clear time inputs.
        $('#availabilityContainer').hide();
        $('.editDayCheckbox').prop('checked', false);
        $('.editTimeInput').val('').hide();
        // If availability data exists, pre-fill the fields.
        function removeAMPM(time12hr) {
          return time12hr.replace(/\s?(AM|PM)/i, '').trim(); // Removes AM/PM and trims any extra spaces
        }


        if (Object.keys(availability2).length > 0) {
          for (const day in availability2) {
            if (availability2.hasOwnProperty(day)) {
              const times = availability2[day].split(' - ');
              if (times.length === 2) {
                const startTime12hr = times[0].trim();
                const endTime12hr = times[1].trim();
                const lowerDay = day.toLowerCase();

                // Convert to 24-hour format
                const startTime24hr = removeAMPM(startTime12hr);
                const endTime24hr = removeAMPM(endTime12hr);

                // Check the checkbox and fill in time inputs
                $(`#edit${lowerDay}Checkbox`).prop('checked', true);
                $(`#edit${lowerDay}StartTime`).val(startTime24hr).show().prop('required', true);
                $(`#edit${lowerDay}EndTime`).val(endTime24hr).show().prop('required', true);
              }
            }
          }


        }

      });

      // Handle form submission.
      $('#editForm').on('submit', function(e) {
        e.preventDefault();

        if (!IDToUpdate) {
          Swal.fire({
            icon: 'error',
            title: "Error",
            text: "No doctor selected."
          });
          return;
        }

        // Gather standard fields.
        const name = $('#nameE').val();
        const email = $('#emailE').val();
        const specialty = $('#specialtyE').val();
        let updatedData = {
          name,
          email,
          specialty
        };

        // Check if any day checkbox is checked.
        if ($('.editDayCheckbox:checked').length > 0) {
          let updatedAvailability = {};
          $('.editDayCheckbox:checked').each(function() {
            const day = $(this).val();
            const startTime = $(`#edit${day.toLowerCase()}StartTime`).val();
            const endTime = $(`#edit${day.toLowerCase()}EndTime`).val();
            if (startTime && endTime) {
              updatedAvailability[day] = `${startTime} - ${endTime}`;
            }
          });
          // Only add availability if we have at least one day.
          if (Object.keys(updatedAvailability).length > 0) {
            updatedData.availability = JSON.stringify(updatedAvailability);
          }
        }

        $.ajax({
          url: `https://clinicmsys-production.up.railway.app/api/users/${IDToUpdate}`,
          type: "PUT",
          contentType: "application/json",
          dataType: "json",
          headers: {
            "Authorization": `Bearer ${token}`
          },
          data: JSON.stringify(updatedData),
          success: function(response) {
            Swal.fire({
              icon: 'success',
              title: "Doctor updated successfully",
              customClass: {
                confirmButton: 'btn btn-primary'
              }
            }).then(() => {
              location.reload();
            });
          },
          error: function(xhr) {
            let response = xhr.responseJSON;
            let errorMessages;

            if (xhr.status === 403) {
              errorMessages = "You are not authorized to perform this action.";
            } else {
              errorMessages = response && response.errors ?
                Object.values(response.errors).join("\n") :
                "Update failed.";
            }

            Swal.fire({
              icon: 'error',
              title: "Error",
              text: errorMessages,
              customClass: {
                confirmButton: 'btn btn-primary'
              }
            });
          }
        });
      });
    });



    $(document).ready(function() {
      let IDToUpdate = null; // Declare globally
      const token = getAuthToken(); // Retrieve the token

      // Open the modal and set existing data
      $(document).on('click', '.resetbutton', function() {
        IDToUpdate = $(this).data('item'); // Store ID globally
        console.log("Selected ID:", IDToUpdate);
      });

      // Handle form submission
      $('#resetForm').on('submit', function(e) {
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

        const updatedData = {
          password: $('#passwordE').val()
        };

        $.ajax({
          url: `https://clinicmsys-production.up.railway.app/api/users/${IDToUpdate}`,
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
              title: "Password updated successfully",
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
            console.log(xhr.status);
            if (xhr.status === 403) {
              // Handle 403 Unauthorized error
              Swal.fire({
                icon: 'error',
                title: "Unauthorized",
                text: "You are not authorized to update the password.",
                showConfirmButton: true,
                customClass: {
                  confirmButton: 'button btn btn-danger app_style'
                }
              });
            } else if (response && response.errors && response.errors.password) {
              // Handle validation error for password
              Swal.fire({
                icon: 'error',
                title: "Validation Error",
                text: response.errors.password[0],
                showConfirmButton: true,
                customClass: {
                  confirmButton: 'button btn btn-danger app_style'
                }
              });
            } else {
              // Handle generic update failure
              Swal.fire({
                icon: 'error',
                title: "Update Failed",
                text: "Failed to update password. Please try again.",
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