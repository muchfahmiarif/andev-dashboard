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
    <div class="row py-2">
        <div class="col-md-5">
        <h4>
            <span class="text-muted fw-light">Account Settings /</span> Account
        </h4>
        </div>
        
        <div class="col-md-7">
       
    </div>
    </div>

<div class="row">
  
    
    <div class="card mb-4">
      <div class="card-header">  
        <ul class="nav nav-pills flex-column flex-md-row mb-3">
            <li class="nav-item"><a class="nav-link active" class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#delete"><i class="bx bx-user me-1"></i> Create Account</a></li>
        </ul>
    </div>
      <div class="card">
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @php
                        $currentPage = $users->currentPage();
                        $perPage = $users->perPage();
                        $startNumber = ($currentPage - 1) * $perPage + 1;
                    @endphp
                    @if (count($users) > 0)
                        @foreach ($users as $key => $d)
                            @php
                                $data = [
                                    'pid' => $d->id ,
                                    'name' => $d->name,
                                    'email' => $d->email,
                                    'username' => $d->username,
                                    'role' => $d->role,
                                ];
                                if($d->role == 0){
                                    $role = "Super Administrator";
                                } else if ($d->role == 1) {
                                    $role = "Admin";
                                } elseif ($d->role == 2) {
                                    $role = "Officer";
                                } elseif ($d->role == 3) {
                                    $role = "Analis";
                                } elseif ($d->role == 2) {
                                    $role = "Guest";
                                } else {
                                    $role = "User";
                                }
                            @endphp
                            <tr>
                                <td class="text-center align-middle">{{ $startNumber++ }}</td>
                                <td style="min-width: 100px"class="text-center align-middle ">
                                    {{ $data['name'] }}
                                </td>
                                <td style="min-width: 100px"class="text-center align-middle ">
                                    {{ $data['email'] }}
                                </td>
                                <td style="min-width: 100px"class="text-center align-middle ">
                                    {{ $data['username'] }}
                                </td>
                                <td style="min-width: 100px"class="text-center align-middle ">
                                    {{ $role }}
                                </td>
                                
                                <td style=""class="text-center align-middle ">
                                    
                                    <button title="Finish Case" type="button" class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#delete{{ $d->id }}">
                                        <i class='bx bxs-trash-alt' ></i>
                                    </button> 
                                    
                                </td>
                            </tr>
                            <div class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" id="delete{{ $d->id }}">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Action</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div>
                                                <p>Anda yakin ingin menghapus data ?</p>
                                            </div>
                                            @if (count($users) > 0)
                                            <form role="form" id="delete-form" action="{{ route('user_delete') }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <input type="hidden" name="id" id="id" value="{{ $d->id }}">
                                                <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">{{ __('Batal') }}</button>
                                                    <button id="button-save" type="submit" class="btn btn-danger" >{{ __('Ya, hapus') }}</button>
                                                </div>
                                            </form>
                                        </div>
                                                    @else
                                                        <div class="text-center">
                                                            <p>{{ __('No data.') }}</p>
                                                        </div>
                                                    @endif
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <tr class="text-center">
                            <td colspan="21">{{ __('No data.') }}</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    <div>
        {{ $users->appends(request()->except('page'))->links('pagination::bootstrap-4') }}
    </div>
  <div class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" id="delete">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header ">
                                                <h5 class="modal-title " id="exampleModalLabel">Update Password</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form role="form" id="update" action="{{ route('users.save') }}" method="post">
                                                @csrf
                                                <input type="hidden" id="user_id" name="user_id">
                                                <div class="form-group row">
                                                    <label for="username" class="col-sm-4 col-form-label">{{ __('Username') }}</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="username" name="username">
                                                    </div>
                                                </div><br>
                                                <div class="form-group row">
                                                    <label for="fullname" class="col-sm-4 col-form-label">{{ __('Name') }}</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="fullname" name="fullname">
                                                    </div>
                                                </div><br>
                                                <div class="form-group row">
                                                    <label for="email" class="col-sm-4 col-form-label">{{ __('Email') }}</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="email" name="email">
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="form-group row">
                                                    <label for="password" class="col-sm-4 col-form-label">{{ __('Password') }}</label>
                                                    <div class="col-sm-8">
                                                        <input type="password" class="form-control" id="password" name="password">
                                                    </div>
                                                </div><br>
                                                <div class="form-group row">
                                                    <label for="role" class="col-sm-4 col-form-label">Bagian</label>
                                                    <div class="col-sm-8">
                                                        <select class="form-control select2" style="width: 100%;" id="role" name="role">
                                                            <option value="">.:: Pilih Level ::.</option>
                                                            <option value="0">Super Administrator</option>
                                                            <option value="1">Admin</option>
                                                            <option value="2">Officer</option>
                                                            <option value="3">Analis</option>
                                                            <option value="4">Guest</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                            </form>
                                        </div>
                                        <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">{{ __('Batal') }}</button>
                                            <button id="button-save" type="button" class="btn btn-primary" onclick="$('#update').submit();">{{ __('Add') }}</button>
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
        @if(Session::has('success'))
            toastr.options = {
                "closeButton" : true,
                   "progressBar" : true
            }
              toastr.success("{{ session('success') }}");
        @endif
    
        @if(Session::has('error'))
            toastr.options = {
                "closeButton" : true,
                "progressBar" : true
            }
              toastr.error("{{ session('error') }}");
        @endif
    
        @if(Session::has('info'))
            toastr.options = {
                "closeButton" : true,
                "progressBar" : true
            }
              toastr.info("{{ session('info') }}");
        @endif
    
        @if(Session::has('warning'))
            toastr.options = {
                "closeButton" : true,
                "progressBar" : true
            }
              toastr.warning("{{ session('warning') }}");
        @endif
    </script>
@endsection
