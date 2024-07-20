<div>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card border-dark">
                <div class="card-header text-bg-dark">Register</div>
                <div class="card-body">
                    <form wire:submit.prevent="registerUser" autocomplete="off">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Nama Lengkap" wire:model="name">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                          <label for="email" class="form-label">Alamat Email</label>
                          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" wire:model="email">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                          <label for="password" class="form-label">Password</label>
                          <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" wire:model="password">
                            @error('password')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="d-grid mb-3">
                            <button type="submit" class="btn btn-primary">Daftar</button>
                        </div>
                        <p>
                            Sudah memiliki akun?
                            <a href="{{ route('login') }}" wire:navigate class="text-primary fw-bold">Login</a>
                        </p>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
