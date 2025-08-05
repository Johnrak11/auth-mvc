<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vorak Eshop</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./main.css">
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 shadow-sm">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand fw-bold fs-3 text-warning" href="#">Vorak Eshop</a>

            <!-- Mobile Toggle Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navigation Links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link fw-semibold text-dark" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold text-dark" href="#">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold text-dark" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold text-dark" href="#">Contact Us</a>
                    </li>
                </ul>

                <!-- Icons -->
                <div class="d-flex align-items-center">
                    <a href="#" class="text-dark me-3 fs-5" title="Shopping Cart">
                        <i class="bi bi-bag">🛍️</i>
                    </a>
                    <a href="#" class="text-dark fs-5" title="User Account">
                        <i class="bi bi-person">👤</i>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section" style="background: linear-gradient(135deg,rgb(195, 190, 135) 0%,rgb(209, 213, 22) 100%); min-height: 80vh;">
        <div class="container h-100">
            Homework here
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4 mb-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="mb-3">
                                <span class="fs-1">🚚</span>
                            </div>
                            <h5 class="card-title fw-bold">Free Shipping</h5>
                            <p class="card-text text-muted">Free shipping on orders over $50</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="mb-3">
                                <span class="fs-1">💳</span>
                            </div>
                            <h5 class="card-title fw-bold">Secure Payment</h5>
                            <p class="card-text text-muted">100% secure payment processing</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="mb-3">
                                <span class="fs-1">🔄</span>
                            </div>
                            <h5 class="card-title fw-bold">Easy Returns</h5>
                            <p class="card-text text-muted">30-day return policy</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>