<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chore Management Page</title>
    <!-- Integrate Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/chore_management.css">

</head>
<body class="bg-gray-100 p-4">
    <section id="content">
        <main>
            <div class="head-title">
                <div class="left">

                    <a href="adminPage.php" id="d-button">
                        <i class='bx bx-chevron-left'></i>
                        <span class="gotoDashboard"><strong>Go to Dashboard</strong></span>
                    </a>
                </div>
            </div>

	    <br>
	    <br>
            <h2 class="text-2xl font-bold mb-4">Ongoing Chores | Pending Chores</h2>
            <table class="w-full border-collapse border border-gray-300">
                <thead>
                    <tr>
                        <th class="border border-gray-300 p-2">Chore Name</th>
                        <th class="border border-gray-300 p-2">Assigned By</th>
                        <th class="border border-gray-300 p-2">Date Assigned</th>
                        <th class="border border-gray-300 p-2">Date Due</th>
                        <th class="border border-gray-300 p-2">Chore Status</th>
                        <th class="border border-gray-300 p-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <tr>
                        <td class="border border-gray-300 p-2">Chore 1</td>
                        <td class="border border-gray-300 p-2">John Doe</td>
                        <td class="border border-gray-300 p-2">2024-02-06</td>
                        <td class="border border-gray-300 p-2">2024-02-10</td>
                        <td class="border border-gray-300 p-2">Pending</td>
                        <td class="border border-gray-300 p-2">
                            <i class='bx bx-check green-tick' style="color:green; font-size: 1.8rem;"></i>
                        </td>
                    </tr>
                   <!-- Add more rows for ongoing/pending chores -->
                </tbody>
            </table>

	    <br>
	    <br>
            <h2 class="text-2xl font-bold my-4">Completed Chores</h2>
            <table class="w-full border-collapse border border-gray-300">
                <thead>
                    <tr>
                        <th class="border border-gray-300 p-2">Chore Name</th>
                        <th class="border border-gray-300 p-2">Assigned By</th>
                        <th class="border border-gray-300 p-2">Date Assigned</th>
                        <th class="border border-gray-300 p-2">Date Due</th>
                        <th class="border border-gray-300 p-2">Chore Status</th>
                    </tr>
                </thead>
                <tbody>
                   
                    <tr>
                        <td class="border border-gray-300 p-2">Chore 3</td>
                        <td class="border border-gray-300 p-2">Jane Doe</td>
                        <td class="border border-gray-300 p-2">2024-01-01</td>
                        <td class="border border-gray-300 p-2">2024-01-10</td>
                        <td class="border border-gray-300 p-2">Completed</td>
                    </tr>
                   <!-- Add more rows for completed chores -->
                </tbody>
            </table>
        </main>
    </section>
</body>
</html>
