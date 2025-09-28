@extends('backend.admin.master')

@section('title', __('dashboard.user_create'))

@section('content')

    <div class="content-wrapper">
        <div class="content-header row"></div>
        <div class="content-body">
            <section class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ __('dashboard.user_create') }}</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.users.store') }}" method="POST">
                        @csrf


                        <div class="form-group">
                            <label for="name_en">{{ __('dashboard.user_name') }}</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ old('name.en') }}">
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        {{-- البريد الإلكتروني --}}
                        <div class="form-group">
                            <label for="email">{{ __('dashboard.user_email') }}</label>
                            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        {{-- كلمة المرور --}}
                        <div class="form-group">
                            <label for="password">{{ __('dashboard.user_password') }}</label>
                            <input type="password" name="password" id="password" class="form-control">
                            @error('password')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">{{ __('dashboard.save') }}</button>
                    </form>
                </div>
            </section>
        </div>
    </div>

@endsection
