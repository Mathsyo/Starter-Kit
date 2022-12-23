@extends('layouts.app')

@section('content')
    <div class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card rounded-4 shadow-sm">
                        <div class="card-body  p-5">
                            <h1>
                                <i class="bi bi-people-fill me-2"></i>
                                Users
                            </h1>
                            <hr class="w-25">
                            @livewire('list-users')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
