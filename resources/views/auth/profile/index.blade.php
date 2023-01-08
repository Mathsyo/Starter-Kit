@extends('layouts.app')

@section('content')
    <div class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    {{-- <div class="card rounded-4 shadow-sm">
                        <div class="card-body p-5"> --}}
                            {{-- <img class="rounded-circle" src="{{ $user->profilePictureUrl }}" alt="profile_picture">
                            <h1>
                                {{ $user->name }}
                            </h1>
                            <p>
                                @foreach ($user->roles as $role)
                                    <span class="badge rounded-pill text-bg-primary">{{ $role->name }}</span>
                                @endforeach
                            </p> --}}
                            @livewire('auth.profile.form', ['user' => $user])
                        {{-- </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
