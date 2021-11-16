@extends('Admin.layouts.master')
@section('content')
@include('partial.error')
<div class="row">
    <div class="col-lg-12">
        <div class="card m-b-30">
            <div class="card-body">
                <h4 class="mt-0 header-title">table feedbacks of users</h4>
                <div class="col-md-6 mb-3">
                    <a href="{{ route('feedbacks.create') }}"  class="btn btn-primary btn-block"><i class="fa fa-user-circle"></i> Add feedback</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ __('site.name') }}</th>
                                <th>{{ __('site.services') }}</th>
                                <th>{{ __('site.feedback') }}</th>
                                <th>{{ __('site.action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $feedbacks as $index=>$feedback )
                            <tr>
                                <th scope="row">{{ $index +1 }}</th>
                                <td>{{ $feedback->users->name  }}</td>
                                <td>{{ $feedback->services->serve_name}}</td>
                                <td>{{ $feedback->feedback }}</td>
                                <td>
                                    <form action="{{ route('feedbacks.destroy', $feedback->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <a href="{{ route('feedbacks.edit', $feedback->id) }}" class="btn btn-info">{{ __('Edit') }}</a>
                                        <button type="button" class="btn btn-danger"
                                        onclick="confirm('{{ __('Are you sure you want to delete this feedback?') }}') ? this.parentElement.submit() : ''">
                                            {{ __('Delete') }}
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
