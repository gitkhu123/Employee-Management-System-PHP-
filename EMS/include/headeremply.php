<nav class="container navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand text-primary fw-bold" href="index.php">EMS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="indexemployee.php">Home</a>
                </li>
                <?php
                    if(isset($_SESSION['email'])){
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="viewtask.php">View Task</a>
                </li>
                <?php
                    }
                ?>
            </ul>
            <ul class="navbar-nav ms-auto">
                <?php
                    if(isset($_SESSION['email'])){
                        
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">LogOut</a>
                </li>
                <?php
                    }
                    else
                    {
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Admin Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="employeelogin.php">Employee Login</a>
                </li>
                <?php
                
                    }
                ?>
            </ul>
        </div>
    </div>
</nav>