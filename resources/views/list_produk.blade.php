@extends('layouts.app')

@section('title', 'Daftar Produk')

@section('content')
<div class="container mx-auto p-4 overflow-x-auto">
    <table class="min-w-full text-sm text-left text-gray-700 border border-gray-300 shadow rounded-lg">
        <thead class="text-xs text-white uppercase bg-blue-600">
            <tr>
                <th class="px-6 py-3 border-b">No</th>
                <th class="px-6 py-3 border-b">Nama Produk</th>
                <th class="px-6 py-3 border-b">Deskripsi Produk</th>
                <th class="px-6 py-3 border-b">Harga Produk</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produk as $index => $item)
            <tr class="{{ $index % 2 == 0 ? 'bg-gray-100' : 'bg-white' }} border-b">
                <td class="px-6 py-4 font-medium">{{ $index + 1 }}</td>
                <td class="px-6 py-4">{{ $item->nama }}</td>
                <td class="px-6 py-4">{{ $item->deskripsi }}</td>
                <td class="px-6 py-4">Rp{{ number_format($item->harga, 0, ',', '.') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
