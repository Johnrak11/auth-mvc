<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Ex1</title>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <form method="POST">
        <div class="mb-3">
            <input type="number" class="form-control" id="a" name="a" placeholder="Enter quantity" value="<?= $_POST['a'] ?? 1 ?>">
        </div>
        <div class="mb-3">
            <input type="number" class="form-control" id="b" name="b" placeholder="Enter quantity" value="<?= $_POST['b'] ?? 1 ?>">
        </div>
        <div class="mb-3">
            <input type="number" class="form-control" id="c" name="c" placeholder="Enter quantity" value="<?= $_POST['c'] ?? 1 ?>">
        </div>
        <button type="submit" class="btn btn-primary w-100">Calculate Total</button>
    </form>
    <?php if (isset($result4)): ?>
        <div class="mt-4">
            <div class="alert alert-success">
                <h4><strong>Total Price: <?= number_format($result4) ?></strong></h4>
            </div>
        </div>
    <?php endif; ?>
</body>

</html>