<div class="container text-center mt-5">
    <div class="card">
        <div class="card-body">
          @forelse ($results as $result)             
            <h1 class="card-title mb-5">Hasil Penilaian</h1>
            <div class="circle mb-5">{{ $result->score }}</div>
            <div class="message">Selamat! Anda telah menyelesaikan penilaian.</div>
            <a href="/" class="btn btn-success mt-4 text-wrap">Kembali ke Homepage</a>
						<a href="{{route("hasil.detail", ["result" => $result->id])}}" class="btn btn-success mt-4">Lihat Detail Penilaian</a>
          @empty
            <div class="alert alert-danger">
                Belum ada hasil penilaian
            </div>
          @endforelse
        </div>
    </div>
</div>
