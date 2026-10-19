@extends('layouts.loginRegister')
@section('title')
Login
@endsection
@section('script')
<script>
    $("#form_login").submit(function(){
        document.getElementById('submit_button').disabled = true;
        $('#spinner').attr("style", "display:block");
    });
</script>
@endsection
@section('content')
    <div class="page-wrapper full-page">
        <div class="page-content d-flex align-items-center justify-content-center">
            @guest
                @if (Route::has('login'))
                    <div class="row w-100 mx-0 auth-page">
                        <div class="col-md-8 col-xl-6 mx-auto">
                            <div class="card">
                                <div class="row">
                                    <div class="col-md-5 pr-md-0">
                                        <div class="auth-left-wrapper" style="border-radius: 0.75rem;"></div>
                                    </div>
                                    <div class="col-md-7 pl-md-0">
                                        <div class="auth-form-wrapper px-4 py-4">
                                            <div style="text-align: center; margin-bottom: 15px;">
                                                <img src="{{ asset('logo.png') }}" alt="Logo" style="width: 56px; height: 56px; border-radius: 50%; object-fit: cover; box-shadow: 0 4px 10px rgba(0,0,0,0.1); border: 2px solid #fff;">
                                            </div>
                                            <a href="#" class="noble-ui-logo d-block mb-2 text-center">Admin PPDB <span style="text-green">Masuk</span></a>
                                            <h5 class="text-muted font-weight-normal mb-3 text-center" style="font-size: 13px;">Selamat datang di sistem pengelolaan Peserta Didik Baru MAN 1 Hulu Sungai Tengah</h5>
                                            
                                            <!-- 1-Click Credential Helper -->
                                            <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 10px; margin-bottom: 15px; text-align: center;">
                                                <small style="display: block; font-weight: 600; color: #475569; margin-bottom: 6px;">Akses Login Cepat (1-Klik):</small>
                                                <button type="button" class="btn btn-sm btn-outline-warning" onclick="document.getElementById('email').value='admin'; document.getElementById('Password').value='admin';" style="font-weight: 600; padding: 4px 12px; font-size: 12px;">
                                                    <i class="fa fa-user-shield"></i> Administrator (admin / admin)
                                                </button>
                                            </div>

                                            <form class="forms-sample" id="form_login" method="POST" action="{{ route('login') }}">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="email">Username atau Email</label>
                                                    <input type="text" class="form-control" id="email" name="email" placeholder="Username atau Email" autocomplete="username" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Password">Password</label>
                                                    <input type="password" class="form-control" id="Password" name="password" autocomplete="current-password" placeholder="Password" required>
                                                </div>
                                                <div class="mt-4 d-flex">
                                                    <button type="submit" id="submit_button"  class="btn btn-warning mr-2 mb-2 mb-md-0 text-white">
                                                        Masuk
                                                    </button>
                                                    <div class="spinner-border text-warning mt-2" id="spinner" role="status">
                                                        <span class="visually-hidden"></span>
                                                    </div>
                                                </div>
                                            </form>
<div class="text-center" style="margin-top: 15px; font-size: 12px; color: #64748b; font-family: sans-serif;">Didukung oleh <a href="https://fokuskonten.my.id" target="_blank" style="color: #2563eb; font-weight: 600; text-decoration: none;">FokusKonten</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @else
                <div class="row w-100 mx-0 auth-page">
                    <div class="col-md-8 col-xl-6 mx-auto">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-4 pr-md-0">
                                    <div class="auth-left-wrapper" style="border-radius: 0.75rem;"></div>
                                </div>
                                <div class="col-md-8 pl-md-0">
                                    <div class="auth-form-wrapper px-4 py-5">
                                        <a href="#" class="noble-ui-logo d-block mb-2">Admin PPDB <span style="text-green">Masuk</span></a>
                                            <h5 class="text-muted font-weight-normal mb-4">Selamat datang admin {{ Auth::user()->name }}!</h5>
                                        <div class="row">
                                            <div class="col-2">
                                                <a  href="{{ route('logout') }}"
                                                    class="btn btn-inverse-danger btn-icon btn-icon-only mr-2 mb-2 mb-md-0 text-white"
                                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                                    <i data-feather="log-out" stroke-width="3" width="14" style="margin-top:7px !important"  height="14"></i>
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </div>
                                            <div class="col-10 col-lg-10 col-md-10">
                                                <a href="{{ route('home') }}" class="btn btn-warning w-auto mr-2 mb-2 mb-md-0 text-white">
                                                    Kembali ke beranda
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endguest
        </div>
    </div>
@endsection
