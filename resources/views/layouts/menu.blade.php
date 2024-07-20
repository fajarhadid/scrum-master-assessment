<div class="col-md-3">
    <div class="card border-0 rounded shadow">
        <div class="card-body">
            <h5> <i class="fa fa-list-ul"></i> MAIN MENU</h5>
            <hr>
            <ul class="list-group">
                <a href="{{route('admin')}}" wire:navigate class="list-group-item @yield('active1')" style="cursor: pointer"><i class="fas fa-tachometer-alt me-2"></i>DASHBOARD</a>
                <a href="{{route('users.index')}}" wire:navigate class="list-group-item @yield('active2')"><i class="fas fa-user"></i> USER</a>
                <a href="{{route('skillsets.index')}}" wire:navigate class="list-group-item @yield('active3')"><i class="fas fa-folder"></i> MAIN SKILL</a>
                <a href="{{route('skillsets.subskill')}}" wire:navigate class="list-group-item @yield('active4')"><i class="fa-solid fa-folder-tree me-1"></i>SUB-SKILL</a>       
                @livewire('auth.logout')
              </ul>
        </div>
    </div>
</div>