<div>
    <div class="row justify-content-center mt-4">
        <div class="col-md-4">
            @if ($error = session('error'))
                <div class="alert alert-danger alert-dismissible">
                    {{ $error }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="card border-dark">
                <div class="card-header text-bg-dark">Login</div>
                <div class="card-body">
                    <form wire:submit.prevent="loginUser" autocomplete="off">
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
                          <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Masukkan password disini" wire:model="password">
                            @error('password')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="d-grid mb-3">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                        <p>
                            Belum memiliki akun?
                            <a href="{{ route('register') }}" wire:navigate class="text-primary fw-bold">Daftar Disini</a>
                        </p>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
