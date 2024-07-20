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
                        <h5 class="card-title mb-3">Table List Main Skill</h5>
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        <a href="{{route('skillsets.create')}}" wire:navigate class="btn btn-md btn-success mb-3 float-end">Tambah Data Baru</a>
                        <table class="table table-hover">
                            <thead class="table-dark">
                                <tr class="text-center">
                                    <th scope="col">NO</th>
                                    <th scope="col">Nama Skill</th>
                                    <th scope="col" style="width: 15%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($main_skills as $main)
                                <tr>
                                    <td class="text-center">{{ $main->id }}</td>
                                    <td>{{ $main->text }}</td>
                                    <td>
                                        <button wire:click="destroy({{$main->id}})" class="btn btn-sm btn-outline-danger rounded-5"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                                @empty
                                <div class="alert alert-danger">
                                    Data Skillset Belum Tersedia
                                </div> 
                                @endforelse
                            </tbody>
                        </table>
                        {{ $main_skills->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
