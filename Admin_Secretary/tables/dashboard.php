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
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
          <div class="row">
            <!-- Number of Doctors -->
            <div class="col-sm-6 col-md-4">
              <div class="card card-stats card-round">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-icon">
                      <div class="icon-big text-center icon-info bubble-shadow-small">
                        <i class="fas fa-user-md"></i>
                      </div>
                    </div>
                    <div class="col col-stats ms-3 ms-sm-0">
                      <div class="numbers">
                        <p class="card-category">Doctors</p>
                        <h4 class="card-title" id="numberOfDoctors">Loading...</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Number of Secretaries -->
            <div class="col-sm-6 col-md-4">
              <div class="card card-stats card-round">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-icon">
                      <div class="icon-big text-center icon-success bubble-shadow-small">
                        <i class="fas fa-user-tie"></i>
                      </div>
                    </div>
                    <div class="col col-stats ms-3 ms-sm-0">
                      <div class="numbers">
                        <p class="card-category">Secretaries</p>
                        <h4 class="card-title" id="numberOfSecretaries">Loading...</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Number of Patients -->
            <div class="col-sm-6 col-md-4">
              <div class="card card-stats card-round">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-icon">
                      <div class="icon-big text-center icon-secondary bubble-shadow-small">
                        <i class="fas fa-users"></i>
                      </div>
                    </div>
                    <div class="col col-stats ms-3 ms-sm-0">
                      <div class="numbers">
                        <p class="card-category">Patients</p>
                        <h4 class="card-title" id="numberOfPatients">Loading...</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Today Appointments -->
            <div class="col-sm-6 col-md-4">
              <div class="card card-stats card-round">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-icon">
                      <div class="icon-big text-center icon-warning bubble-shadow-small">
                        <i class="fas fa-calendar-alt"></i>
                      </div>
                    </div>
                    <div class="col col-stats ms-3 ms-sm-0">
                      <div class="numbers">
                        <p class="card-category">Today Appointments</p>
                        <h4 class="card-title" id="numberOfTodayAppointments">Loading...</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Total Appointments -->
            <div class="col-sm-6 col-md-4">
              <div class="card card-stats card-round">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-icon">
                      <div class="icon-big text-center icon-warning bubble-shadow-small">
                        <i class="fas fa-calendar-check"></i>
                      </div>
                    </div>
                    <div class="col col-stats ms-3 ms-sm-0">
                      <div class="numbers">
                        <p class="card-category">Total Appointments</p>
                        <h4 class="card-title" id="numberOfAppointments">Loading...</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Total Revenue -->
            <div class="col-sm-6 col-md-4">
              <div class="card card-stats card-round">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-icon">
                      <div class="icon-big text-center icon-danger bubble-shadow-small">
                        <i class="fas fa-dollar-sign"></i>
                      </div>
                    </div>
                    <div class="col col-stats ms-3 ms-sm-0">
                      <div class="numbers">
                        <p class="card-category">Total Revenue</p>
                        <h4 class="card-title" id="totalRevenue">Loading...</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Appointment Status Distribution</h4>
                </div>
                <div class="card-body" style="height: 300px;"> <!-- Set height for pie chart -->
                  <canvas id="appointmentStatusPieChart" width="400" height="300"></canvas> <!-- Adjusted width/height -->
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Top Doctors by Appointments</h4>
                </div>
                <div class="card-body" style="height: 300px;"> <!-- Set height for bar chart -->
                  <canvas id="topDoctorsChart" width="400" height="300"></canvas> <!-- Adjusted width/height -->
                </div>
              </div>
            </div>
          </div>
          <div class="container">

            <!-- Monthly Revenue Bar Chart -->
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">Revenue Over Time (Monthly)</h4>
                  </div>
                  <div class="card-body" style="height: 300px;">
                    <canvas id="monthlyRevenueBarChart" width="400" height="300"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <!-- Recent Transactions Table -->
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">Recent Transactions</h4>
                  </div>
                  <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Transaction ID</th>
                          <th>Appointment ID</th>
                          <th>Amount</th>
                          <th>Payment Status</th>
                          <th>Done At</th>
                        </tr>
                      </thead>
                      <tbody id="recentTransactionsTableBody">
                        <!-- Transaction rows will go here -->
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- Revenue Status Pie Chart -->
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">Total Revenue by Payment Status</h4>
                  </div>
                  <div class="card-body" style="height: 300px;">
                    <canvas id="revenueStatusPieChart" width="400" height="300"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- #region -->
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

    document.addEventListener("DOMContentLoaded", async () => {
      try {
        const token = getAuthToken();
        if (!token) throw new Error("Authentication token not found");

        const endpoints = {
          overview: 'https://clinicmsys-production.up.railway.app/api/dashboard/overview',
          appointmentStats: 'https://clinicmsys-production.up.railway.app/api/dashboard/appointmentStatistics',
          topDoctors: 'https://clinicmsys-production.up.railway.app/api/dashboard/top5Doctors',
          revenueReport: 'https://clinicmsys-production.up.railway.app/api/dashboard/revenueReport'
        };

        const headers = {
          'Authorization': `Bearer ${token}`,
          'Content-Type': 'application/json',
        };

        // Fetch all required data in parallel
        const responses = await Promise.all(
          Object.values(endpoints).map(endpoint => fetch(endpoint, {
            method: 'GET',
            headers
          }))
        );

        // Check for any failed requests
        if (responses.some(response => !response.ok)) {
          throw new Error("One or more API requests failed");
        }

        // Parse JSON responses
        const [overviewData, appointmentData, doctorsData, revenueData] = await Promise.all(responses.map(res => res.json()));

        // Extracting data
        const dashboardData = overviewData.data;
        const appointmentStats = appointmentData.data;
        const topDoctors = doctorsData.data;
        const revenue = revenueData.data;

        // Update Dashboard Overview Data
        document.getElementById('numberOfDoctors').innerText = dashboardData.numberOfDoctors;
        document.getElementById('numberOfSecretaries').innerText = dashboardData.numberOfSecretaries;
        document.getElementById('numberOfPatients').innerText = dashboardData.numberOfPatients;
        document.getElementById('numberOfTodayAppointments').innerText = dashboardData.todayAppointments;
        document.getElementById('numberOfAppointments').innerText = dashboardData.numberOfAppointments;
        document.getElementById('totalRevenue').innerText = revenue.totalRevenue;

        // Update Charts and Tables
        updateChart(dashboardData);
        updateAppointmentPieChart(appointmentStats);
        updateTopDoctorsChart(topDoctors);
        updateRevenueStatusPieChart(revenue.totalRevenueByStatus);
        updateMonthlyRevenueBarChart(revenue.TransactionsByMonthsPaid, revenue.TransactionsByMonthsPending, revenue.TransactionsByMonthsOverdue);
        updateRecentTransactions(revenue.recentTransactions);
      } catch (error) {
        console.error("Error fetching data:", error);
      }
    });

    // Function to update charts (placeholders)
    function updateChart(data) {
      console.log('Update chart with dashboard data:', data);
    }

    function updateAppointmentPieChart(appointmentStats) {
      const ctx = document.getElementById('appointmentStatusPieChart').getContext('2d');
      new Chart(ctx, {
        type: 'pie',
        data: {
          labels: ['Scheduled', 'Completed', 'Cancelled'],
          datasets: [{
            data: [appointmentStats.scheduled, appointmentStats.completed, appointmentStats.cancelled],
            backgroundColor: ['rgba(67, 130, 234, 0.6)', 'rgba(98, 176, 204, 0.6)', 'rgba(160, 160, 160, 0.6)'],
            borderColor: ['rgba(67, 130, 234, 1)', 'rgba(98, 176, 204, 1)', 'rgba(160, 160, 160, 1)'],
            borderWidth: 1
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false
        }
      });
    }

    function updateTopDoctorsChart(topDoctors) {
      const ctx = document.getElementById('topDoctorsChart').getContext('2d');
      new Chart(ctx, {
        type: 'bar',
        data: {
          labels: topDoctors.map(doc => doc.doctor_name),
          datasets: [{
            label: 'Appointments per Doctor',
            data: topDoctors.map(doc => doc.appointments_count),
            backgroundColor: 'rgba(54, 162, 235, 0.6)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false
        }
      });
    }

    function updateRevenueStatusPieChart(totalRevenueByStatus) {
      const ctx = document.getElementById('revenueStatusPieChart').getContext('2d');
      new Chart(ctx, {
        type: 'pie',
        data: {
          labels: ['Paid', 'Pending', 'Overdue'],
          datasets: [{
            data: [totalRevenueByStatus.paid, totalRevenueByStatus.pending, totalRevenueByStatus.overdue],
            backgroundColor: ['rgba(148, 177, 224, 0.6)', 'rgba(105, 124, 131, 0.6)', 'rgba(160, 160, 160, 0.6)'],
            borderColor: ['rgb(156, 176, 209)', 'rgb(247, 251, 252)', 'rgb(201, 190, 190)'],
            borderWidth: 1
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false
        }
      });
    }

    function updateMonthlyRevenueBarChart(paidData, pendingData, overdueData) {
      const ctx = document.getElementById('monthlyRevenueBarChart').getContext('2d');

      // Extract unique month-year labels from all datasets
      const allMonths = [...paidData, ...pendingData, ...overdueData]
        .map(entry => `${entry.year}-${String(entry.month).padStart(2, '0')}`) // Format as "YYYY-MM"
        .filter((value, index, self) => self.indexOf(value) === index) // Remove duplicates
        .sort(); // Ensure chronological order

      // Helper function to get revenue by month
      function getRevenueByMonth(data, month) {
        const entry = data.find(d => `${d.year}-${String(d.month).padStart(2, '0')}` === month);
        return entry ? parseFloat(entry.amount) : 0;
      }

      // Prepare datasets
      const paidAmounts = allMonths.map(month => getRevenueByMonth(paidData, month));
      const pendingAmounts = allMonths.map(month => getRevenueByMonth(pendingData, month));
      const overdueAmounts = allMonths.map(month => getRevenueByMonth(overdueData, month));

      new Chart(ctx, {
        type: 'bar',
        data: {
          labels: allMonths, // Dynamic months & years
          datasets: [{
              label: 'Paid Revenue',
              data: paidAmounts,
              backgroundColor: 'rgba(67, 130, 234, 0.6)',
              borderColor: 'rgba(67, 130, 234, 1)',
              borderWidth: 1
            },
            {
              label: 'Pending Revenue',
              data: pendingAmounts,
              backgroundColor: 'rgba(98, 176, 204, 0.6)',
              borderColor: 'rgba(98, 176, 204, 1)',
              borderWidth: 1
            },
            {
              label: 'Overdue Revenue',
              data: overdueAmounts,
              backgroundColor: 'rgba(160, 160, 160, 0.6)',
              borderColor: 'rgba(160, 160, 160, 1)',
              borderWidth: 1
            }
          ]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      });
    }


    function updateRecentTransactions(transactions) {
      const tableBody = document.getElementById('recentTransactionsTableBody'); // Ensure this ID exists in your HTML
      tableBody.innerHTML = ''; // Clear previous content

      if (!transactions || transactions.length === 0) {
        tableBody.innerHTML = '<tr><td colspan="4">No transactions available</td></tr>';
        return;
      }

      transactions.forEach(transaction => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${transaction.id}</td>
            <td>${transaction.appointment_id}</td>
            <td>$${parseFloat(transaction.amount).toFixed(2)}</td>
            <td class="${getPaymentStatusClass(transaction.payment_status)}">${transaction.payment_status}</td>
                   <td>${transaction.updated_at}</td>
             
        `;
        tableBody.appendChild(row);
      });
    }

    // Helper function to add color classes to payment status
    function getPaymentStatusClass(status) {
      switch (status.toLowerCase()) {
        case 'paid':
          return 'text-green-500'; // Green color for paid
        case 'pending':
          return 'text-yellow-500'; // Yellow for pending
        case 'overdue':
          return 'text-red-500'; // Red for overdue
        default:
          return '';
      }
    }
  </script>

  <!-- Bootstrap JS (Optional, for card animations or interactivity) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
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