<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
    </style>
</head>

<body class="bg-gray-900 text-white">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-1/4 bg-gray-800 p-4">
            <div class="text-2xl font-bold mb-6 flex items-center gap-2">
                <span class="text-yellow-400"></span>Investilfy 
            </div>
            <nav>
                <ul class="space-y-4">
                    <li>
                        <button class="w-full text-left font-semibold bg-gray-700 p-2 rounded">Dashboard</button>
                    </li>
                    <li>
                        <h2 class="text-xs text-gray-400 mt-4">MANAGE PLANS</h2>
                        <button class="w-full text-left p-2 hover:bg-gray-700 rounded">Manage plan</button>
                    </li>
                    <li>
                        <h2 class="text-xs text-gray-400 mt-4">USER MANAGEMENT</h2>
                        <button class="w-full text-left p-2 hover:bg-gray-700 rounded">Manage users</button>
                    </li>
                    <li>
                        <h2 class="text-xs text-gray-400 mt-4">PAYMENT AND PAYOUT</h2>
                        <button class="w-full text-left p-2 hover:bg-gray-700 rounded">Manage withdraw</button>
                        <button class="w-full text-left p-2 hover:bg-gray-700 rounded">Manage Deposit</button>
                        <button class="w-full text-left p-2 hover:bg-gray-700 rounded">Payment Gateway</button>
                    </li>
                </ul>
            </nav>
        </aside><!-- Main Content -->
        <main class="flex-1 p-6 overflow-y-auto">
            <div class="flex justify-between items-center mb-6">
                <input
                    type="text"
                    placeholder="Search"
                    class="bg-gray-800 text-white p-2 rounded w-1/3" />
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 rounded-full bg-green-600"></div>
                    <span>Hi, Admin</span>
                </div>
            </div>

            <h1 class="text-3xl font-bold mb-1">Hello, ADMIN</h1>
            <p class="text-gray-400 mb-6">Here's a summary of your account.</p>

            <!-- Summary Cards -->
            <div class="grid grid-cols-2 gap-6">
                <div class="bg-gray-800 p-4 rounded">
                    <p>Total Deposits</p>
                    <h2 class="text-xl font-bold">$32,000.00</h2>
                </div>
                <div class="bg-gray-800 p-4 rounded">
                    <p>Pending deposit approval</p>
                    <h2 class="text-xl font-bold">1</h2>
                </div>
                <div class="bg-gray-800 p-4 rounded">
                    <p>Pending withdrawal approval</p>
                    <h2 class="text-xl font-bold">0</h2>
                </div>
                <div class="bg-gray-800 p-4 rounded">
                    <p>Total users</p>
                    <h2 class="text-xl font-bold">1</h2>
                </div>
                <div class="bg-gray-800 p-4 rounded">
                    <p>Total deactivated users</p>
                    <h2 class="text-xl font-bold">0</h2>
                </div>
                <div class="bg-gray-800 p-4 rounded">
                    <p>Total active users</p>
                    <h2 class="text-xl font-bold">1</h2>
                </div>
            </div>
        </main>

    </div>
</body>

</html>