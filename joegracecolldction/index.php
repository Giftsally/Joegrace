<?php
include 'includes/auth.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boutique Management System</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo BASE_URL; ?>/assets/css/style.css" rel="stylesheet">
</head>
<body class="bg-dark">
    <!-- Navigation -->
    <nav class="navbar navbar-dark bg-dark border-bottom border-danger">
        <div class="container-lg">
            <a class="navbar-brand text-danger fw-bold" href="<?php echo BASE_URL; ?>/index.php">
                <i class="fas fa-store"></i> Boutique Management System
            </a>
            <div>
                <?php if (is_logged_in()): ?>
                    <a href="<?php echo BASE_URL; ?>/dashboard/dashboard.php" class="btn btn-danger btn-sm">
                        <i class="fas fa-chart-line"></i> Dashboard
                    </a>
                    <a href="<?php echo BASE_URL; ?>/auth/logout.php" class="btn btn-outline-danger btn-sm ms-2">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                <?php else: ?>
                    <a href="<?php echo BASE_URL; ?>/auth/login.php" class="btn btn-danger btn-sm">
                        <i class="fas fa-sign-in-alt"></i> Login
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero py-5 text-white text-center">
        <div class="container-lg">
            <h1 class="display-4 fw-bold mb-3">
                <i class="fas fa-store text-danger"></i> Boutique Installment Management
            </h1>
            <p class="lead mb-4">Professional system for managing customer payments and debt collection</p>
            <div class="row g-3 justify-content-center mb-5">
                <div class="col-md-4">
                    <div class="card bg-secondary border-danger text-light">
                        <div class="card-body text-center">
                            <i class="fas fa-users text-danger fa-3x mb-3"></i>
                            <h5 class="card-title">Manage Customers</h5>
                            <p class="card-text">Track all your customer information and purchase history</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-light">
                    <div class="card bg-secondary border-danger text-light">
                        <div class="card-body text-center">
                            <i class="fas fa-credit-card text-danger fa-3x mb-3"></i>
                            <h5 class="card-title">Payment Tracking</h5>
                            <p class="card-text">Record and monitor all installment payments easily</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-secondary border-danger text-light">
                        <div class="card-body text-center">
                            <i class="fas fa-chart-line text-danger fa-3x mb-3"></i>
                            <h5 class="card-title">Analytics</h5>
                            <p class="card-text">Get detailed reports and insights on your business</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <?php if (!is_logged_in()): ?>
                <a href="<?php echo BASE_URL; ?>/auth/login.php" class="btn btn-outline-danger text-light btn-lg">
                    <i class="fas fa-sign-in-alt"></i> Get Started
                </a>
            <?php else: ?>
                <a href="<?php echo BASE_URL; ?>/dashboard/dashboard.php" class="btn btn-danger btn-lg">
                    <i class="fas fa-chart-line"></i> Go to Dashboard
                </a>
            <?php endif; ?>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5 bg-black bg-opacity-50">
        <div class="container-lg">
            <h2 class="text-white text-center mb-5">Key Features</h2>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="feature-box text-center">
                        <i class="fas fa-database text-danger mb-3" style="font-size: 2.5rem;"></i>
                        <h5 class="text-white">Database Management</h5>
                        <p class="text-light">Centralized customer database</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-box text-center">
                        <i class="fas fa-bell text-danger mb-3" style="font-size: 2.5rem;"></i>
                        <h5 class="text-white">Payment Reminders</h5>
                        <p class="text-light">Automated due date notifications</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-box text-center">
                        <i class="fas fa-file-pdf text-danger mb-3" style="font-size: 2.5rem;"></i>
                        <h5 class="text-white">PDF Reports</h5>
                        <p class="text-light">Generate professional reports</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-box text-center">
                        <i class="fas fa-lock text-danger mb-3" style="font-size: 2.5rem;"></i>
                        <h5 class="text-white">Secure Access</h5>
                        <p class="text-light">Password protected admin panel</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black py-4 border-top border-danger text-center text-light">
        <div class="container-lg">
            <p class="mb-0">&copy; 2026 Boutique Management System. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
