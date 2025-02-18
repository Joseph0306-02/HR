<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="home/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="home/assets/libs/css/style.css">
    <link rel="stylesheet" href="home/assets/vendor/font-awesome/fontawesome.min.css">
    <title>E-CompanyPH</title>
    <style>
        .approval-box {
            padding: 15px;
            margin: 10px 0;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #ffffff;
            border-radius: 8px;
        }
        .approval-status {
            padding: 5px 10px;
            border-radius: 5px;
            color: white;
        }
        .btn-accept {
            background-color: #28a745;
            color: white;
            margin-right: 5px;
        }
        .btn-reject {
            background-color: #dc3545;
            color: white;
        }
    </style>
</head>

<body>
    <div class="dashboard-main-wrapper">
        @include('home.header')
        @include('home.sidenav')
        
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content">
                    <div class="page-header">
                        <h2>Project Approval Dashboard</h2>
                        <p>View and approve projects based on current progress and requirements.</p>
                    </div>
                    
                    <div class="row">
                        <div class="col-xl-6 col-lg-8">
                            <div class="card">
                                <div class="card-body" style="height: 500px">
                                    <h5 class="text-muted">Project Approval List</h5>
                                    <hr>
                                    <div id="approval-container"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('home.footer')
        </div>
    </div>

    <script>
        const projects = [
            { name: "Project A" },
            { name: "Project B" },
            { name: "Project C" }
        ];

        function renderApprovals() {
            const approvalContainer = document.getElementById("approval-container");
            approvalContainer.innerHTML = "";

            projects.forEach((project, index) => {
                const box = document.createElement("div");
                box.className = "approval-box";
                box.innerHTML = `
                    <span>${project.name}</span>
                    <div>
                        <button class="btn btn-accept" onclick="updateStatus(${index}, 'Accepted')">Accept</button>
                        <button class="btn btn-reject" onclick="updateStatus(${index}, 'Rejected')">Reject</button>
                    </div>
                    <span id="status-${index}" class="approval-status"></span>
                `;
                approvalContainer.appendChild(box);
            });
        }

        function updateStatus(index, status) {
            const statusElement = document.getElementById(`status-${index}`);
            statusElement.textContent = status;
            statusElement.style.backgroundColor = status === "Accepted" ? "#28a745" : "#dc3545";
            statusElement.style.color = "white";
        }

        document.addEventListener("DOMContentLoaded", renderApprovals);
    </script>

    <script src="home/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="home/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>
