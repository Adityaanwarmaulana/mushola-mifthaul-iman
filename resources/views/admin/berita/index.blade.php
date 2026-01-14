@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto">
    <a href="/admin/berita/create" class="bg-green-600 text-white px-4 py-2 rounded">
        Tambah Berita
    </a>

    <table class="w-full mt-4 bg-white shadow">
        <tr class="bg-gray-200">
            <th class="p-2">Judul</th>
            <th class="p-2">Aksi</th>
        </tr>
        @foreach($beritas as $b)
        <tr class="border-t">
            <td class="p-2">{{ $b->judul }}</td>
            <td class="p-2 flex gap-2">
                <a href="/admin/berita/{{ $b->id }}/edit"
                    class="text-blue-600">Edit</a>

                <form action="/admin/berita/{{ $b->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="text-red-600"
                        onclick="return confirm('Hapus?')">
                        Hapus
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection