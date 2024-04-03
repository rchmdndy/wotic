<h1>Hasil Pencarian untuk "{{ $query }}"</h1>

@if ($results->isEmpty())
    <p>Tidak ada hasil yang ditemukan.</p>
@else
    <ul>
        @foreach ($results as $result)
            <li>{{ $result->nama }}</li>
            <!-- Tambahkan informasi lainnya sesuai kebutuhan -->
        @endforeach
    </ul>
@endif
