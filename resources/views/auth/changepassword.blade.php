@extends('layout.app')
@section('contents')
<div class="container">
    <h2>Ubah Kata Sandi</h2>
    
    <div class="card shadow mb-4">
        <div class="card-body table-responsive">
        <form method="POST" action="{{ route('profile.updatepassword') }}">
            @csrf
            <div class="form-group">
                <label for="current_password">Kata Sandi Saat Ini:</label>
                <input type="password" class="form-control" id="current_password" name="current_password">
                @error('current_password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Kata Sandi Baru:</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="form-group">
                <label for="password_confirmation">Konfirmasi Kata Sandi Baru:</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
    </div>
 
</div>
@endsection