@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(Auth::user()->hasRole('administrator'))
                        <p>Welcome, Administrator! You have full access to the system.</p>
                    @elseif(Auth::user()->hasRole('customer'))
                        <p>Welcome, Editor! You can manage and edit content.</p>
                    @else
                        <p>Welcome, Viewer! You can view content.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
