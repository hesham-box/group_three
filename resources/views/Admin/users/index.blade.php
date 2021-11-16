@extends('Admin.layouts.master')
@section('content')
@include('partial.error')
<div class="row">
    <div class="col-lg-12">
        <div class="card m-b-30">
            <div class="card-body">
                <h4 class="mt-0 header-title">{{ __('site.users-data') }}</h4>
                <div class="col-md-6 mb-3">
                    <a href="{{ route('users.create') }}"  class="btn btn-primary btn-block"><i class="fa fa-user-circle"></i> {{ __('site.add-user') }}</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ __('site.name') }}</th>
                                <th>{{ __('site.email') }}</th>
                                <th>{{ __('site.image') }}</th>
                                <th>{{ __('site.status') }}</th>
                                <th>{{ __('site.phone') }}</th>
                                <th>{{ __('site.address') }}</th>
                                <th>{{ __('site.action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $users as $index=>$user )
                            <tr>
                                <th scope="row">{{ $index +1 }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <img src="{{ asset('uploads/user-img/'.$user->image) }}" class="img-thumbnail" width="70" alt="">
                                </td>
                                <td>
                                    @if ($user->status == 'active')
                                    <h5 class="text-success d-flex">{{ $user->status }}</h5>
                                    @else
                                    <h5 class="text-danger d-flex">{{ $user->status }}</h5>
                                    @endif
                                </td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->address }}</td>
                                <td>
                                    <form action="{{ route('users.destroy', $user->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info">{{ __('site.edit') }}</a>
                                        <button type="button" class="btn btn-danger"
                                        onclick="confirm('{{ __('Are you sure you want to delete this user?') }}') ? this.parentElement.submit() : ''">
                                            {{ __('site.delete') }}
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> <!-- end col -->
@endsection
