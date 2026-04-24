<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Event</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 p-10">

    <div class="mb-8 flex space-x-4 justify-center">
        <a href="/" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition">Home</a>
        <a href="/profil" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition">Profil</a>
        <a href="/katalog" class="px-4 py-2 bg-blue-700 text-white rounded shadow-lg">Katalog</a>
        <a href="/bantuan" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition">Bantuan</a>
    </div>

    <div class="max-w-3xl mx-auto bg-white p-8 rounded-xl shadow border border-gray-200">
        <h1 class="text-3xl font-bold text-indigo-600 mb-6 text-center">Daftar Event AmikomEventHub</h1>
        <div class="grid grid-cols-2 gap-4">
            <div class="p-4 bg-indigo-50 rounded-lg border border-indigo-100 hover:shadow-md transition">
                <h2 class="font-bold text-xl">Seminar AI</h2>
                <p class="text-gray-600">Belajar AI untuk pemula.</p>
            </div>
            <div class="p-4 bg-indigo-50 rounded-lg border border-indigo-100 hover:shadow-md transition">
                <h2 class="font-bold text-xl">Workshop Laravel</h2>
                <p class="text-gray-600">Membuat web dari nol.</p>
            </div>
        </div>
    </div>

</body>
</html>