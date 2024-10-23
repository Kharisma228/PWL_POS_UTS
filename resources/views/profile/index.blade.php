@extends('layouts.template')

@push('css')
    <style>
        /* Profil Container */
        .profile-container {
            margin: 20px auto;
            padding: 20px;
            background-color: #f8f9fa; /* Warna latar belakang yang lebih terang */
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        /* Header Profil */
        .profile-header {
            font-size: 24px;
            font-weight: bold;
            color: #343a40; /* Warna teks yang lebih gelap */
            margin-bottom: 15px;
        }

        /* Foto Profil */
        .profile-container img {
            border: 4px solid #007bff; /* Border berwarna biru */
            margin-bottom: 10px; /* Jarak bawah foto */
        }

        /* Tanggal Foto */
        .photo-date {
            font-size: 14px;
            color: #6c757d; /* Warna teks untuk informasi tambahan */
            margin-bottom: 10px; /* Jarak bawah tanggal */
        }

        /* Tabel Profil */
        .table {
            margin-top: 20px;
            border-collapse: collapse;
        }

        /* Border Tabel */
        .table th,
        .table td {
            border: 1px solid #dee2e6; /* Border yang lebih halus */
        }

        /* Warna Latar Tabel */
        .table th {
            background-color: #e9ecef; /* Latar belakang header tabel */
            color: #495057; /* Warna teks header tabel */
        }

        /* Tombol Profil */
        .profile-button {
            background-color: #007bff; /* Warna tombol biru */
            border-color: #007bff; /* Border tombol biru */
            transition: background-color 0.3s, border-color 0.3s; /* Animasi transisi */
        }

        .profile-button:hover {
            background-color: #0056b3; /* Warna tombol saat hover */
            border-color: #0056b3; /* Border tombol saat hover */
        }

        /* Responsif */
        @media (max-width: 768px) {
            .profile-container {
                padding: 15px;
            }

            .profile-header {
                font-size: 20px;
            }

            .profile-container img {
                width: 200px; /* Mengurangi ukuran foto pada layar kecil */
            }
        }
    </style>
@endpush

@section('content')
    <div id="myModal" class="modal fade animate shake" tabindex="-1" role="dialog" data-backdrop="static"
        data-keyboard="false" data-width="75%" aria-hidden="true"></div>
    
    <div class="container rounded bg-white profile-container"> 
        <div class="row" id="profile">
            <div class="col-md-4 text-center">
                <div class="p-3 py-5">
                    <div class="d-flex flex-column align-items-center">
                        <img class="rounded-circle mt-3 mb-2" width="250px" src="{{ asset($user->foto) }}">
                        <p class="photo-date">Foto diganti pada: {{ $user->updated_at->format('d-m-Y') }}</p>
                        <div class="mt-4">
                            <button onclick="modalAction('{{ url('/profile/' . session('user_id') . '/edit_foto') }}')"
                                class="btn btn-primary profile-button">Edit Foto</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 border-right">
                <div class="p-3 py-4">
                    <div class="d-flex align-items-center">
                        <h4 class="profile-header">Pengaturan Profile</h4>
                    </div>
                    <div class="row mt-3">
                        <table class="table table-bordered table-striped table-hover table-sm">
                            <tr>
                                <th>Level</th>
                                <td>{{ $user->level->level_nama }}</td>
                            </tr>
                            <tr>
                                <th>Username</th>
                                <td>{{ $user->username }}</td>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <td>{{ $user->name }}</td>
                            </tr>
                            <tr>
                                <th>Password</th>
                                <td>********</td>
                            </tr>
                        </table>
                    </div>
                    <div class="mt-3 text-center">
                        <button onclick="modalAction('{{ url('/profile/' . session('user_id') . '/edit_ajax') }}')"
                            class="btn btn-primary profile-button">Ubah Profil dan Password</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        function modalAction(url = '') {
            $('#myModal').load(url, function() {
                $('#myModal').modal('show');
            });
        }
        
        $(document).ready(function() {
            // Additional JS if needed
        });
    </script>
@endpush
