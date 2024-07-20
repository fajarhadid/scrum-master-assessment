<div class="pt-4">
    <main class="container-fluid d-flex py-4">
        <div class="d-flex flex-column gap-16 px-4 px-md-12 w-100 align-items-center">
            <h1 class="display-4 fw-bold text-center mb-5">Detail Hasil Penilaian</h1>
            <div class="rounded-3 w-100 max-w-6xl p-8 md:p-12 bg-dark border border-dark bg-opacity-50">
                <div class="d-flex flex-column align-items-start gap-6">
                    <h3 class="text-center text-decoration-underline px-3 pb-2 mb-4 fw-semibold fs-3 my-4">Penilaian Kompetensi</h3>
                    <h5 class="fw-normal px-3 mb-5">Anda dapat memilih lebih dari satu jawaban atau tidak memilih jawaban sama sekali</h5>
                    <h5 class="text-lg fw-semibold px-3">{{ "{$questions[$current]->order}. {$questions[$current]->text}" }}</h3>
                    <div class="w-100 d-flex p-2 flex-column gap-3 mt-2">
                        @foreach ($questions[$current]->options as $option)
                            <label class="d-flex align-items-center gap-4 p-4 bg-white bg-opacity-50 border rounded border-white">
                                <input type="checkbox" class="form-check-input border-dark" disabled wire:model="options.{{ $option->id}}.state">
                                <p class="fw-normal justify-content-center my-auto">{{ $option->nama_skill }}</p>
                            </label>
                        @endforeach
                    </div>
                    <div class="d-none d-sm-flex justify-content-between w-100">
                        <button wire:click="changeQuestion({{ $current - 1 }})" class="btn btn-outline-dark rounded-pill text-center text-light ps-3 py-2 mx-2 mb-4 mt-2" style="width: 130px; height: 40px">
                            Sebelumnya
                        </button>
                        @if ($current >= $questions->last()->order)
                        <a href="{{route('hasil')}}" class="btn btn-primary rounded-pill text-center text-light ps-3 py-2 mx-2 mb-4 mt-2" style="width: 130px; height: 40px">Selesai</a>
                            @else
                        <button wire:click="changeQuestion({{ $current + 1 }})" class="btn btn-primary rounded-pill text-center text-light ps-3 py-2 mx-2 mb-4 mt-2" style="width: 130px; height: 40px">
                            {{ ($questions->last()->order == $current ? 'Selesai' : 'Selanjutnya' ) }}
                        </button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
