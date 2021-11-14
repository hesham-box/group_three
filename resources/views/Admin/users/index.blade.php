@extends('Admin.layouts.master')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card m-b-30">
            <div class="card-body">

                <h4 class="mt-0 header-title">Striped rows</h4>
                <p class="text-muted m-b-30">
                    Use <code>.table-striped</code> to add zebra-striping to any table row
                    within the <code>&lt;tbody&gt;</code>.
                </p>

                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>email</th>
                                <th>image</th>
                                <th>status</th>
                                <th>phone</th>
                                <th>address</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ( $users as $index=>$user )
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
                                    <form action="{{ route('users.destroy', $user) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <a href="{{ route('users.edit', $user) }}" class="btn btn-info">{{ __('Edit') }}</a>
                                        <button type="button" class="btn btn-danger" onclick="confirm('{{ __('Are you sure you want to delete this user?') }}') ? this.parentElement.submit() : ''">
                                            {{ __('Delete') }}
                                        </button>
                                    </form>
                                </td>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> <!-- end col -->
@endsection
