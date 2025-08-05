<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Dashboard</title>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
  <div class="text-center">
    <h1 class="text-2xl font-bold mb-4">Welcome <?= $_SESSION['user']['full_name'] ?? 'Guest' ?>!</h1>
    <p class="text-lg">You are logged in as <?= $_SESSION['user']['username'] ?>.</p>
  </div>
</body>

</html>