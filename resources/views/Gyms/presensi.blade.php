@extends('dashboard')
@section('content')

<style>
    .gambarinstruktur {
        width: 400px;
        border-radius: 25px;
        border: 3px solid black;
        height: 200px;
        margin-right: 10px;
    }
</style>

<div class="content">
    <div class="container-fluid">
        <div class="row justify-content-center mt-3">
            <div class="col-md-9">
                <div class="card" style="height: auto">
                    <div class="card-body">
                        <div class="item-body" style="display: flex; justify-content: space-between; ">
                            <div class="img-desk" style="display: flex; align-items:center">
                                <div class="img-1">
                                    <img class="gambarinstruktur" src="https://www.fitnessfirst.co.id/id/-/media/project/evolution-wellness/fitness-first/south-east-asia/indonesia/classes/bodycombat/bodycombat_fb-sharing.png" alt="">
                                </div>
                                <div class="item-card">
                                    <div style="display: flex;">
                                        <h2>Body Combat</h2>
                                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#statBackdrop" style="margin-left: 10px;"><i class="fa-solid fa-eye" style="color: #ffffff;"></i></button>
                                    </div>
                                    <h5><strong>Instruktur : Joel Christian Ngongoloy</strong></h5>
                                    <h5><strong>Ruang Kelas : Kelas B</strong></h5>
                                    <h5><strong>Total Member : 6</strong></h5>
                                    <h5 style="display: flex;"><strong>Rating :</strong>
                                        <div class="mb-0 " style="color: gold;">
                                            <i class="fas fa-star fa-xs"></i>
                                            <i class="fas fa-star fa-xs"></i>
                                            <i class="fas fa-star fa-xs"></i>
                                            <i class="fas fa-star fa-xs"></i>
                                            <i class="fas fa-star fa-xs"></i>
                                        </div>
                                    </h5>
                                </div>
                            </div>
                            <div class="date">
                                <h5><strong>Tanggal: {{ date('l, d - F - y') }}</strong></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="border-bottom fw-bold col-md-9"></div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-md-9" style="display: flex; justify-content:space-between">
                <div>
                    <h2>Daftar Member</h2>
                </div>
                <div class="button-press">
                    <button type="button" class="btn btn-primary" id="liveToastBtn"><svg xmlns="http://www.w3.org/2000/svg" class="mb-1" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <style>
                                svg {
                                    fill: #ffffff
                                }
                            </style>
                            <path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                        </svg> Presensi</button>

                    <div class="toast-container position-fixed bottom-0 end-0 p-3">
                        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="toast-body bg-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mb-1" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <style>
                                        svg {
                                            fill: #ffffff
                                        }
                                    </style>
                                    <path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                                </svg>
                                Berhasil Mempresensi Member
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        @forelse ($daftar as $member)
        @if ($loop->iteration % 3 == 1)
        <div class="row justify-content-center mt-3">
            @endif

            @if ($member['kartu'] == 'Gold')
            <div class="col-md-3">
                <div class="card p-0 mx-auto" style="border: 3px solid black;">
                    <img class="img-member" src="https://media.suara.com/pictures/970x544/2022/07/12/50163-profil-jihyo-twice.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-bg-warning">
                        <h5 class=""><strong>{{$member ['nama']}}</strong></h5>
                        <h6>Email : {{$member['email']}}</h6>
                        <h6>No Telp : {{$member['notelp']}}</h6>
                        <h6>Jenis Kartu : <span class="badge bg-warning" style="border: 1px solid black; border-radius:10px;"><strong style="color: #ffffff;">{{$member['kartu']}}</strong></span></h6>
                        <h6>Metode Pembayaran : <span class="badge text-bg-primary">{{$member['metode']}}</span></h6>
                    </div>
                </div>
            </div>
            @elseif ($member['kartu'] == 'Silver')
            <div class="col-md-3">
                <div class="card p-0 mx-auto" style="border: 3px solid black;">
                    <img class="img-member" src="https://media.suara.com/pictures/970x544/2022/07/12/50163-profil-jihyo-twice.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-bg-secondary">
                        <h5 class=""><strong>{{$member ['nama']}}</strong></h5>
                        <h6>Email : {{$member['email']}}</h6>
                        <h6>No Telp : {{$member['notelp']}}</h6>
                        <h6>Jenis Kartu : <span class="badge bg-secondary" style="border: 1px solid black; border-radius:10px;"><strong style="color: #ffffff;">{{$member['kartu']}}</strong></span></h6>
                        <h6>Metode Pembayaran : <span class="badge text-bg-success">{{$member['metode']}}</span></h6>
                    </div>
                </div>
            </div>
            @elseif ($member['kartu'] == 'Black' && $member['metode'] == 'Deposit Kelas')
            <div class="col-md-3">
                <div class="card p-0 mx-auto" style="border: 3px solid white;">
                    <img class="img-member" src="https://media.suara.com/pictures/970x544/2022/07/12/50163-profil-jihyo-twice.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-bg-dark">
                        <h5 class=""><strong>{{$member ['nama']}}</strong></h5>
                        <h6>Email : {{$member['email']}}</h6>
                        <h6>No Telp : {{$member['notelp']}}</h6>
                        <h6>Jenis Kartu : <span class="badge bg-dark" style="border: 1px solid white; border-radius:10px;"><strong style="color: #ffffff;">{{$member['kartu']}}</strong></span></h6>
                        <h6>Metode Pembayaran : <span class="badge text-bg-primary">{{$member['metode']}}</span></h6>
                    </div>
                </div>
            </div>
            @elseif ($member['kartu'] == 'Black' && $member['metode'] == 'Deposit Uang')
            <div class="col-md-3">
                <div class="card p-0 mx-auto" style="border: 3px solid white;">
                    <img class="img-member" src="https://media.suara.com/pictures/970x544/2022/07/12/50163-profil-jihyo-twice.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-bg-dark">
                        <h5 class=""><strong>{{$member ['nama']}}</strong></h5>
                        <h6>Email : {{$member['email']}}</h6>
                        <h6>No Telp : {{$member['notelp']}}</h6>
                        <h6>Jenis Kartu : <span class="badge bg-dark" style="border: 1px solid white; border-radius:10px;"><strong style="color: #ffffff;">{{$member['kartu']}}</strong></span></h6>
                        <h6>Metode Pembayaran : <span class="badge text-bg-success">{{$member['metode']}}</span></h6>
                    </div>
                </div>
            </div>
            @endif

            @if ($loop->iteration % 3 == 0 || $loop->last)
        </div>
        @endif

        @empty
        @endforelse

        <div class="modal fade " id="statBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" >
                <div class="modal-content">
                    <div class="modal-header bg-success">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Detail Kelas</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h1>Body Combat</h1>
                        <table>
                            <tr>
                                <td>
                                    <h5>Nama Instruktur</h5>
                                </td>
                                <td>
                                    <h5> : Joel Christian Ngongoloy</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>Kode Instruktur</h5>
                                </td>
                                <td>
                                    <h5> : 210711413</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>Hari Kelas</h5>
                                </td>
                                <td>
                                    <h5> : {{date('l')}}</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>Tanggal</h5>
                                </td>
                                <td>
                                    <h5> : {{date ('d-M-Y')}}</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>Ruang Kelas</h5>
                                </td>
                                <td>
                                    <h5> : Kelas B</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>Rating</h5>
                                </td>
                                <td>
                                    <h5 style="display: flex;"> : <div class="mb-0 " style="color: dark;">
                                            <i class="fas fa-star fa-xs"></i>
                                            <i class="fas fa-star fa-xs"></i>
                                            <i class="fas fa-star fa-xs"></i>
                                            <i class="fas fa-star fa-xs"></i>
                                            <i class="fas fa-star fa-xs"></i>
                                        </div>
                                    </h5>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#liveToastBtn').click(function() {
            $('.toast').toast('show');
        });
    });
</script>

@endsection