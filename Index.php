<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1">
    <title>Gem's Payroll System</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="style/style.css"> 
</head>
<body>
<!-- sidebar -->
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h1><span>Gem's Payroll System</span></h1>
        </div>
        
        <div class="sidebar-menu">
            <ul>
                <li> 
                    <a href="Index.php" class="active"><span class="las la-igloo"></span><span>Dashboard</span></a>
                </li>
                <li> 
                    <a href="employee.php"><span class="las la-users"></span><span>Employee</span></a>
                </li>
                <li> 
                    <a href="payslip.php"><span class="las la-clipboard-list"></span><span>Payslip</span></a>
                </li>
                <li> 
                    <a href="AccInfo.php"><span class="las la-clipboard"></span><span>Account Information</span></a>
                </li>
                <br>
                <br>
                <li> 
                    <a href=""><span class="las la-chevron-circle-left"></span><span>Log-out</span></a>
                </li>
            </ul> 
        </div>
    </div>
<!-- main-content -->

    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                <span class="las la-bars"></span>
                </label>
                Dashboard
            </h2>

            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Search here" />
            </div>

            <div class="user-wrapper">
                <img src="img/2.jpg" width="40px" height="40px" alt="">
                <div>
                    <h4>Ken</h4>
                    <small>Admin</small> 
                </div>
            </div>
        </header>
        <main>
            
            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1>54</h1>
                        <span>Employees</span>
                    </div>
                    <div>
                        <span class="las la-users"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>22</h1>
                        <span>Accounts</span>
                    </div>
                    <div>
                        <span class="las la-clipboard-list"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>32</h1>
                        <span>Approval</span>
                    </div>
                    <div>
                        <span class="lab la-google-wallet"></span>
                    </div>
                </div>
            </div>

            <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3> Employees</h3>

                            <button> See all <span class="las la-arrow-right"></span></button>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            <td>Employees</td>
                                            <td>Department</td>
                                            <td>Status</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>Operator</td>
                                            <td>
                                                <span class="status green"></span>
                                                Active
                                            </td>
                                        </tr>
                                        <tr>
                                        <td></td>
                                            <td>Supervisor</td>
                                            <td>
                                                <span class="status green"></span>
                                                Active 
                                            </td>
                                        </tr>
                                        <tr>
                                        <td></td>
                                            <td>Utility</td>
                                            <td>
                                                <span class="status pink"></span>
                                                Review
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>    
                        </div>  
                    </div>
                </div>

                <div class="costumers">
                    <div class="card">
                        <div class="card-header">
                            <h3> New Employee</h3>

                            <button>See all <span class="las la-arrow-right"></span></button>
                        </div>

                        <div class="card-body">

                            <div class="customer">
                                <div class="info">
                                    <img src="1.jpg" width="40px" height="40px" alt="">
                                    <div>
                                        <h4> Mark Bultron </h4>
                                        <small> Admin 2 </small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="las la-comment"></span>
                                    <span class="las la-phone"></span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div> 
            </div>

        </main>
    </div>
</body>
</html>