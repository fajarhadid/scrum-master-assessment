@section('active4')
    active
@endsection
<div>
    <div class="container-fluid" style="margin-top: 50px">
        <div class="row">
            @include('layouts.menu')
            <div class="col-md-9">
                <div class="card border-0 rounded shadow">
                    <div class="card-body">
                        <h5 class="mb-3">Tambah Data Subskill</h5>
                        <form wire:submit.prevent="storesub">
                            {{-- <div class="form-group mb-4">
                                <label class="fw-bold">ID MAIN SKILL</label>
                                <input type="number" class="form-control @error('id_main') is-invalid @enderror" wire:model="question_id" placeholder="Masukkan ID Main Skill">
                                @error('id_main')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div> --}}
                            <div class="form-group mb-4">
                                <label class="fw-bold">NAMA SKILL</label>
                                <input type="text" class="form-control @error('nama_skill') is-invalid @enderror" wire:model="nama_skill" placeholder="Masukkan Nama Skill">
                                @error('nama_skill')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-4">
                                <label class="fw-bold">BOBOT</label>
                                <input type="number" class="form-control @error('value') is-invalid @enderror" wire:model="value" placeholder="Masukkan Bobot">
                                @error('value')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button type="submit" wire:navigate class="btn btn-md btn-primary">SIMPAN</button>
                            <a href="{{route('skillsets.subskill')}}" wire:navigate class="btn btn-md btn-secondary">BATAL</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
