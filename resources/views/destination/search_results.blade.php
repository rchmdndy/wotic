@extends('layouts.layout')

@section('content')
    <h1>Hasil Pencarian untuk "{{ $query }}"</h1>

    @if (!empty($results))
        <ul>
            @foreach ($results as $result)
                <li>{{ $result['nama_destinasi'] }}</li>
                <!-- Tambahkan informasi lainnya sesuai kebutuhan -->
            @endforeach
        </ul>
    @else
        <p>Tidak ada hasil yang ditemukan.</p>
   @endif
@endsection
