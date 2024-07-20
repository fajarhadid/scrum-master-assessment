@section('active3')
    active
@endsection
<div>
    <div class="container-fluid" style="margin-top: 50px">
        <div class="row">
            @include('layouts.menu')
            <div class="col-md-9">
                <div class="card border-0 rounded shadow">
                    <div class="card-body">
                        <h5 class="mb-3">Tambah Data Skill</h5>
                        <form wire:submit="store">
                            <div class="form-group mb-4">
                                <label class="fw-bold">NAMA SKILL</label>
                                <input id="text" name="text" type="text" class="form-control @error('text') is-invalid @enderror" required wire:model="text" placeholder="Masukkan Nama Skill">
                                @error('text')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-4">
                                <label class="fw-bold">URUTAN SKILL</label>
                                <input id="order" name="order" type="number" class="form-control @error('order') is-invalid @enderror" required wire:model="order" placeholder="Masukkan Nama Skill">
                                @error('order')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                            <a href="{{route('skillsets.index')}}" wire:navigate class="btn btn-md btn-secondary">BATAL</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
