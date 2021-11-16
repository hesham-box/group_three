@extends('Admin.layouts.master')
@section('content')
@include('partial.error')
<div class="row">
    <div class="col-lg-9">
        <div class="card m-b-30">
            <div class="card-body">
                <h4 class="mt-0 header-title">{{ __('site.add-user') }}</h4>
                <a class="btn btn-primary btn-sm" style="margin: 10px;" href="{{ route('users.index') }}">رجوع</a>
                <form class="" action="{{route('users.store')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>{{ __('site.name') }}</label>
                        <input type="text" class="form-control" required placeholder="Enter User Name" name="name" />
                    </div>
                    <div class="form-group">
                        <label>{{ __('site.email') }}</label>
                        <div>
                            <input type="email" class="form-control" required
                                   parsley-type="email" placeholder="Enter a valid e-mail" name="email"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>{{ __('site.password') }}</label>
                        <div>
                            <input type="password" id="pass2" class="form-control"
                                   placeholder="Password" name="password" />
                        </div>
                        <div class="m-t-10">
                            <input type="password" class="form-control"
                                   data-parsley-equalto="#pass2"
                                   placeholder="Re-Type Password" name="confirm-password" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label>{{ __('site.phone') }}</label>
                        <div>
                            <input  type="number" class="form-control" placeholder="phone number" name="phone"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>{{ __('site.address') }}</label>
                        <div>
                            <input  type="text"
                                   class="form-control" placeholder="Enter only digits" name="address"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>{{ __('site.status') }}</label>
                        <select name="status"  class="form-control " style="height: calc(2.8rem + 7px); " >
                            <option value="" readonly>----select status ----</option>
                            <option value="unactive">not active</option>
                            <option value="active">active</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>{{ __('site.image') }}</label>
                        <div>
                            <input class="form-control img" name="image"  type="file">
                            <img src="{{ asset('uploads/user-img/default.jpg') }}" class="img-thumbnail img-preview" width="100" alt="">
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                {{ __('site.Save') }}
                            </button>
                            <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                {{ __('site.Close') }}
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div> <!-- end col -->
@endsection
