@extends('front-view.layouts.master')

@section('title', 'Account settings - Account')
@section('page-script')
    <script src="/js/pages-account-settings-account.js"></script>
@endsection
@section('custom-css')
    <link rel="stylesheet" href="/plugin/toastr/toastr.min.css">
    <link rel="stylesheet" href="/plugin/select2/css/select2.min.css">
    <link rel="stylesheet" href="/plugin/select2-bootstrap4-theme/select2-bootstrap4.min.css">
@endsection
@section('content')
    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">Account Settings /</span> Account
    </h4>

    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-pills flex-column flex-md-row mb-3">
                <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i>
                        Account</a></li>
            </ul>
            <div class="card mb-4">
                <h5 class="card-header">Profile Details</h5>
                <hr class="my-0">
                <div class="card-body">

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="firstName" class="form-label">Username</label>
                            <input class="form-control" type="text" id="firstName" name="firstName"
                                value="{{ Auth::user()->username }}" disabled />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="address" class="form-label">Email</label>
                            <input type="text" class="form-control" id="address" name="address"
                                value="{{ Auth::user()->email }}" disabled />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">Nama Lengkap</label>
                            <input class="form-control" type="text" id="email"
                                name="email"value="{{ Auth::user()->name }}" disabled>
                        </div>
                        <!--<div class="mb-3 col-md-6">-->
                        <!--    <label for="organization" class="form-label">Departement</label>-->
                        <!--    <input type="text" class="form-control" id="organization" name="organization" value="{{ Auth::user()->departement }}" disabled/>-->
                        <!--</div>-->
                        <div class="mb-3 col-md-6">
                            <label for="role" class="form-label">Role</label>
                            <select class="form-select" id="role" name="role" disabled>
                                <option value="0" {{ Auth::user()->role == 0 ? 'selected' : '' }}>Super Admin</option>
                                <option value="1" {{ Auth::user()->role == 1 ? 'selected' : '' }}>Admin</option>
                                <option value="2" {{ Auth::user()->role == 2 ? 'selected' : '' }}>Officer</option>
                                <option value="3" {{ Auth::user()->role == 3 ? 'selected' : '' }}>Analis</option>
                                <option value="4" {{ Auth::user()->role == 4 ? 'selected' : '' }}>Guest</option>
                            </select>
                        </div>
                        <a href="#" title="Approval" class="btn btn-primary deactivate-account text-white"
                            data-bs-toggle="modal" data-bs-target="#update">Changes Password</i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" id="update">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header ">
                        <h5 class="modal-title " id="exampleModalLabel">Update Password</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form role="form" id="update_user" action="{{ route('myaccount.updatePassword') }}"
                            method="post">
                            @csrf
                            <div class="form-group row">
                                <label for="current_password"
                                    class="col-sm-4 col-form-label">{{ __('Password Saat Ini') }}</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" id="current_password"
                                        name="current_password">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="new_password" class="col-sm-4 col-form-label">{{ __('Password Baru') }}</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" id="new_password" name="new_password">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="new_password_confirmation"
                                    class="col-sm-4 col-form-label">{{ __('Konfirm Password') }}</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" id="new_password_confirmation"
                                        name="new_password_confirmation">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">{{ __('Batal') }}</button>
                        <button type="submit" class="btn btn-primary"
                            onclick="document.getElementById('update_user').submit();">{{ __('Submit') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('custom-js')
    <script src="/plugin/toastr/toastr.min.js"></script>
    <script src="/plugin/select2/js/select2.full.min.js"></script>

    <script>
        @if (Session::has('success'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.success("{{ session('success') }}");
        @endif

        @if (Session::has('error'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.error("{{ session('error') }}");
        @endif

        @if (Session::has('info'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.info("{{ session('info') }}");
        @endif

        @if (Session::has('warning'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.warning("{{ session('warning') }}");
        @endif
    </script>
@endsection
