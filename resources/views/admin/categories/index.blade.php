@extends('layouts.admin')

@section('content')
<div class="p-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Manajemen Kategori</h1>
        <button class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
            + Tambah Kategori
        </button>
    </div>

    <div class="bg-white rounded-lg shadow overflow-hidden border border-gray-200">
        <table class="min-w-full text-left border-collapse">
            <thead class="bg-gray-100 text-gray-600">
                <tr>
                    <th class="py-3 px-6 border-b">No</th>
                    <th class="py-3 px-6 border-b">Nama Kategori</th>
                    <th class="py-3 px-6 border-b text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                <tr class="hover:bg-gray-50 border-b">
                    <td class="py-3 px-6">1</td>
                    <td class="py-3 px-6 font-semibold">Seminar</td>
                    <td class="py-3 px-6 text-center space-x-2">
                        <button class="px-3 py-1 bg-yellow-500 text-white text-sm rounded hover:bg-yellow-600">Edit</button>
                        <button class="px-3 py-1 bg-red-500 text-white text-sm rounded hover:bg-red-600">Hapus</button>
                    </td>
                </tr>
                <tr class="hover:bg-gray-50 border-b">
                    <td class="py-3 px-6">2</td>
                    <td class="py-3 px-6 font-semibold">Konser</td>
                    <td class="py-3 px-6 text-center space-x-2">
                        <button class="px-3 py-1 bg-yellow-500 text-white text-sm rounded hover:bg-yellow-600">Edit</button>
                        <button class="px-3 py-1 bg-red-500 text-white text-sm rounded hover:bg-red-600">Hapus</button>
                    </td>
                </tr>
                <tr class="hover:bg-gray-50">
                    <td class="py-3 px-6">3</td>
                    <td class="py-3 px-6 font-semibold">Workshop</td>
                    <td class="py-3 px-6 text-center space-x-2">
                        <button class="px-3 py-1 bg-yellow-500 text-white text-sm rounded hover:bg-yellow-600">Edit</button>
                        <button class="px-3 py-1 bg-red-500 text-white text-sm rounded hover:bg-red-600">Hapus</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection