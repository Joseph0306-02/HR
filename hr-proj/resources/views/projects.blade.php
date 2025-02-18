<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="home/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="home/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="home/assets/libs/css/style.css">
    <link rel="stylesheet" href="home/assets/vendor/font-awesome/fontawesome.css">
    <link rel="stylesheet" href="home/assets/vendor/font-awesome/fontawesome.min.css">
    <link rel="stylesheet" href="home/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="home/assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="home/assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="home/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="home/assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="home/assets/vendor/fonts/flag-icon-css/flag-icon.min.css">

    <link rel="stylesheet" href="css/txt.css">
    <title>E-CompanyPH</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        @include('home.header')
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        @include('home.sidenav')
      
        <header class="header">
            <h1>Analytics Dashboard</h1>
        </header>
        
        <!doctype html>
        <html lang="en">
        
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="home/assets/vendor/bootstrap/css/bootstrap.min.css">
            <link href="home/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
            <link rel="stylesheet" href="home/assets/libs/css/style.css">
            <link rel="stylesheet" href="css/txt.css">
        
            <title>Project Form</title>
        
            c
        <body>
            <div class="form-container">
                <h2>Project Form</h2>
                <div class="form-group">
                    <label for="projectName">Project Title:</label>
                    <input type="text" id="projectName" placeholder="Enter Project Title" required>
                </div>
        
                <div class="form-group">
                    <label for="requesterName">Department:</label>
                    <input type="text" id="requesterName" placeholder="Enter Deparment" required>
                </div>
        
                <div class="form-group">
                    <label for="description">Project Description:</label>
                    <textarea id="description" rows="5" placeholder="Enter Project Description here..." required></textarea>
                </div>
        
                <div class="form-group">
                    <label for="fileInput">Add File:</label>
                    <input type="file" id="fileInput" class="file-input" accept=".pdf,.doc,.docx,.txt">
                    <label for="fileInput" class="file-label">Choose File</label>
                </div>
        
                <div class="form-group">
                    <label for="startDate">Start Date:</label>
                    <input type="date" id="startDate" required>
                </div>
        
                <div class="form-group">
                    <label for="endDate">End Date:</label>
                    <input type="date" id="endDate" required>
                </div>
        
                <div class="buttons">
                    <button class="submit-btn" onclick="submitProposal()">Submit</button>
                    <button class="cancel-btn" type="reset">Cancel</button>
                </div>
            </div>
        
            <!-- Container to display saved information -->
            <div class="saved-info-container" id="savedInfoContainer">
                <h3>Submitted Projects </h3>
                <div id="savedInfo"></div>
            </div>
        
            <script>
                function submitProposal() {
                    // Get form values
                    const projectName = document.getElementById('projectName').value;
                    const requesterName = document.getElementById('requesterName').value;
                    const description = document.getElementById('description').value;
                    const fileInput = document.getElementById('fileInput').files[0];
                    const startDate = document.getElementById('startDate').value;
                    const endDate = document.getElementById('endDate').value;
        
                    // Validate inputs
                    if (!projectName || !requesterName || !description || !startDate || !endDate) {
                        alert("Please fill in all fields.");
                        return;
                    }
        
                    // Create a new proposal item
                    const proposalItem = document.createElement('div');
                    proposalItem.classList.add('proposal-item');
        
                    proposalItem.innerHTML = `
                        <strong>Project Title:</strong> ${projectName}<br>
                        <strong>Requested Department By:</strong> ${requesterName}<br>
                        <strong>Description:</strong> ${description}<br>
                        <strong>File:</strong> ${fileInput ? fileInput.name : 'No file attached'}<br>
                        <strong>Start Date:</strong> ${startDate}<br>
                        <strong>End Date:</strong> ${endDate}
                    `;
        
                    // Append the new proposal item to the saved info container
                    const savedInfo = document.getElementById('savedInfo');
                    savedInfo.appendChild(proposalItem);
        
                    // Clear form fields
                    document.getElementById('projectName').value = '';
                    document.getElementById('requesterName').value = '';
                    document.getElementById('description').value = '';
                    document.getElementById('fileInput').value = '';
                    document.getElementById('startDate').value = '';
                    document.getElementById('endDate').value = '';
                }
            </script>
        
            <!-- Optional JavaScript -->
            <!-- jQuery 3.3.1 -->
            <script src="home/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
            <!-- Bootstrap bundle JS -->
            <script src="home/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
        </body>
        
        </html>
        
   
        
        
    
    @include('home.footer')
    <div class="row">
        <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12 col-12">
            <!-- ============================================================== -->
            <!-- social source  -->
            <!-- ============================================================== -->
            
            <!-- ============================================================== -->
            <!-- end social source  -->
            <!-- ============================================================== -->
        
            <!-- ============================================================== -->
            <!-- sales traffice source  -->
            <!-- ============================================================== -->
            
        <!-- ============================================================== -->
        <!-- end sales traffice source  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- sales traffic country source  -->
        <!-- ============================================================== -->
        
        <!-- ============================================================== -->
        <!-- end sales traffice country source  -->
        <!-- ============================================================== -->
    </div>
</div>
</div>
</div>
<!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- end footer -->
<!-- ============================================================== -->
</div>

<!-- ============================================================== -->
<!-- end wrapper  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- end main wrapper  -->
<!-- ============================================================== -->
<!-- Optional JavaScript -->
<!-- jquery 3.3.1 -->
<script src="home/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<!-- bootstap bundle js -->
<script src="home/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<!-- slimscroll js -->
<script src="home/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
<!-- main js -->
<script src="home/assets/libs/js/main-js.js"></script>
<!-- chart chartist js -->
<script src="home/assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
<!-- sparkline js -->
<script src="home/assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
<!-- morris js -->
<script src="home/assets/vendor/charts/morris-bundle/raphael.min.js"></script>
<script src="home/assets/vendor/charts/morris-bundle/morris.js"></script>
<!-- chart c3 js -->
<script src="home/assets/vendor/charts/c3charts/c3.min.js"></script>
<script src="home/assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
<script src="home/assets/vendor/charts/c3charts/C3chartjs.js"></script>
<script src="home/assets/libs/js/dashboard-ecommerce.js"></script>
</body>
</html>
