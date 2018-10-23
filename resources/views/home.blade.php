@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center text-secondary">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary"><h3>Dashboard</h3></div>

                <div class="card-body text-secondary">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h5>You are logged in!</>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
