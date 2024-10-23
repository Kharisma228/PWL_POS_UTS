<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                <i class="fas fa-bars fa-lg"></i> <!-- Ukuran ikon diperbesar -->
            </a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt fa-lg"></i> <!-- Ukuran ikon diperbesar -->
            </a>
        </li>
        <!-- Logout Form -->
        <form id="logout-form" action="{{ url('logout') }}" method="get" style="display: none;">
            @csrf
        </form>
    </ul>
</nav>

<!-- Profile Modal -->
<div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="profileModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document"> <!-- Modal dialog centered -->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="profileModalLabel">User Profile</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center"> <!-- Centered text -->
                <!-- Profile Information -->
                <img src="{{ auth()->user()->avatar ? asset('storage/' . auth()->user()->avatar) : asset('foto.png') }}"
                    alt="User Avatar" class="img-circle mb-2" width="150" height="150">
                <p><strong>Username:</strong> {{ auth()->user()->username }}</p>
                <p><strong>Nama:</strong> {{ auth()->user()->nama }}</p>
                <p><strong>Level:</strong>
                    {{ auth()->user()->level ? auth()->user()->level->level_nama : 'Tidak ada level' }}</p>
            </div>
            <div class="modal-footer justify-content-center">
                <a href="{{ url('profile/edit') }}" class="btn btn-primary">Edit Profile</a>
            </div>
        </div>
    </div>
</div>
