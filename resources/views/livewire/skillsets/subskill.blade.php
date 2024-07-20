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
                        <h5 class="card-title mb-3">Table List Main Skill</h5>
                        <table class="table table-hover">
                            <thead class="table-dark">
                                <tr class="text-center">
                                    <th scope="col">NO</th>
                                    <th scope="col">Nama Skill</th>
                                    <th scope="col">Bobot</th>
                                    <th scope="col" style="width: 15%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($sub_skills as $sub)
                                <tr>
                                    <td class="text-center">{{ $sub->id }}</td>
                                    <td>{{ $sub->nama_skill }}</td>
                                    <td>{{ $sub->value }}</td>
                                    <td>
                                        <button wire:click="destroy({{$sub->id}})" class="btn btn-sm btn-outline-danger rounded-5"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                                @empty
                                <div class="alert alert-danger">
                                    Data Skillset Belum Tersedia
                                </div> 
                                @endforelse
                            </tbody>
                        </table>
                        {{ $sub_skills->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
