@section('active2')
active
@endsection
<div>
    <div class="container-fluid" style="margin-top: 50px">
        <div class="row">
            @include('layouts.menu')
            <div class="col-md-9">
                <div class="card border-0 rounded shadow">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Table List User</h5>
                        <table class="table table-hover">
                            <thead class="table-dark">
                                <tr class="text-center">
                                    <th scope="col">NO</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($users as $user)
                                <tr>
                                    <td class="text-center">{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                </tr>
                                @empty
                                    
                                @endforelse
                            </tbody>
                        </table>
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
