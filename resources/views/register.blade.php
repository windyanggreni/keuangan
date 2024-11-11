<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/register.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Register</title>
</head>
<body>
    <main class="form-signin w-100 m-auto">
        <form method="POST" action="/register" >
            @csrf
          <h1 class="h3 mb-3 fw-normal">Please sign up</h1>
            {{-- EMAIL --}}
          <div class="form-floating">
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" name="email" value="{{ old('email') }}">
            <label for="email">Email address</label>
            @error('email')
            {{ $message }}
            @enderror
          </div>
          {{-- NAMA --}}
          <div class="form-floating">
            <input type="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Asep" name="name" value="{{ old('name') }}">
            <label for="floatingInput">Name</label>
            @error('name')
            {{ $message }}
            @enderror
          </div>
          {{-- PASSWORD --}}
          <div class="form-floating">
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" name="password" value="{{ old('password') }}">
            <label for="password">Password</label>
            @error('password')
            {{ $message }}
            @enderror
          </div>
          {{-- CONFRIM PASSWORD --}}

          <div class="form-floating">
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password_confirmation" placeholder="Password Confirm" name="password_confirmation" value="{{ old('password') }}">
            <label for="password_confirmation">Password Confirm</label>
            @error('password')
            {{ $message }}
            @enderror
          </div>


          <button class="btn btn-primary w-100 py-2" type="submit">Sign up</button>
          <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account? <a href="/login"
            class="link-primary">Login</a></p>
        </form>
      </main>
</body>
</html>
