<x-layout pageTitle="Sign in">
    <div class="d-flex vh-100 align-items-center justify-content-center bg-body-tertiary">
        <form action="/sign-in" method="post" class="w-50 bg-white p-5 rounded">
            @csrf
            <h3>Sign in</h3>
            @if(session('error'))
            <div class="alert alert-danger">
                <b>Opps!</b> {{session('error')}}
            </div>
            @endif
            <div class="form-group mb-4">
              <label for="emai1">Email/Telepon/Username</label>
              <input type="text" name="email" class="form-control" placeholder="Masukkan email/no telp/username" required>
            </div>
            @error('email')
            <p class='text-danger inputerror'>{{ $message }} </p>
            @enderror
            <div class="form-group mb-4">
              <label for="password">Password</label>
              <input name="password" type="password" class="form-control" placeholder="Masukkan password" required>
            </div>
            @error('password')
            <p class='text-danger inputerror'>{{ $message }} </p>
            @enderror
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
    </div>
</x-layout>