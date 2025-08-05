<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Login</title>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
  <form method="POST" class="bg-white p-6 rounded shadow-md w-full max-w-sm">
    <h1 class="text-xl font-bold mb-4">Login</h1>
    <?php if (!empty($error)): ?>
      <p class="text-red-500 text-sm mb-4"><?= $error ?></p>
    <?php endif; ?>
    <div class="mb-4">
      <label class="block mb-1">Username</label>
      <input type="text" name="username" class="w-full border px-3 py-2 rounded" required>
    </div>
    <div class="mb-4">
      <label class="block mb-1">Password</label>
      <input type="password" name="password" class="w-full border px-3 py-2 rounded" required>
    </div>
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Login</button>
  </form>
</body>
</html>
