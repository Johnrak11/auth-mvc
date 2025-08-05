<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex1 - Animal Price Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Animal Price Calculator</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST">
                            <div class="mb-3">
                                <label for="duck" class="form-label">Duck (13,000 each)</label>
                                <input type="number" class="form-control" id="duck" name="duck" placeholder="Enter quantity" value="<?= $_POST['duck'] ?? 1 ?>" min="0">
                            </div>
                            <div class="mb-3">
                                <label for="chicken" class="form-label">Chicken (15,000 each)</label>
                                <input type="number" class="form-control" id="chicken" name="chicken" placeholder="Enter quantity" value="<?= $_POST['chicken'] ?? 1 ?>" min="0">
                            </div>
                            <div class="mb-3">
                                <label for="goose" class="form-label">Goose (25,000 each)</label>
                                <input type="number" class="form-control" id="goose" name="goose" placeholder="Enter quantity" value="<?= $_POST['goose'] ?? 1 ?>" min="0">
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Calculate Total</button>
                        </form>

                        <?php if (isset($total)): ?>
                            <div class="mt-4">
                                <div class="alert alert-success">
                                    <h5>Calculation Result:</h5>
                                    <p><strong>Duck:</strong> <?= $duck ?> × 13,000 = <?= number_format($duck * 13000) ?></p>
                                    <p><strong>Chicken:</strong> <?= $chicken ?> × 15,000 = <?= number_format($chicken * 15000) ?></p>
                                    <p><strong>Goose:</strong> <?= $goose ?> × 25,000 = <?= number_format($goose * 25000) ?></p>
                                    <hr>
                                    <h4><strong>Total Price: <?= number_format($total) ?></strong></h4>
                                </div>
                            </div>
                        <?php endif; ?>

                        <div class="mt-3">
                            <a href="/dashboard" class="btn btn-secondary">Back to Dashboard</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>