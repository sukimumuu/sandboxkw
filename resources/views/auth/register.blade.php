<!DOCTYPE html>
<html lang="{{ config('app.locale', 'id') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }} - {{ $desc ?? '' }}</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="absolute right-10 top-10">
        @if (session('success'))
        <div role="alert" class="alert alert-success">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span>{{ session('success') }}</span>
        </div>
        @endif
        @if (session('error'))
        <div role="alert" class="alert alert-error">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span>{{ session('error') }}</span>
        </div>
        @endif
    </div>
    <div class="flex justify-center items-center min-h-screen">
        <div class="card w-96 bg-base-100 shadow-lg">
            <div class="card-body">
                <div class="flex justify-between">
                    <h2 class="text-3xl font-bold">Startup - Daftar</h2>
                </div>
                <form action="{{ route('register-store') }}" method="post">
                    @csrf
                    <div class="mt-6 flex flex-col gap-2 text-xs">
                        <div>
                            <label class="label mb-3">Nama</label>
                            <input type="text" class="input validator" name="name" placeholder="Jung Eunbi" title="Required" required/>
                            <p class="validator-hint">Nama harus diisi</p>
                        </div>
                        <div>
                            <label class="label mb-3">Nama Pengguna</label>
                            <input type="text" class="input validator" placeholder="eunha" name="username" title="Required" required/>
                            <p class="validator-hint">Nama pengguna harus diisi</p>
                        </div>
                        <div>
                            <label class="label mb-3">Email</label>
                            <input type="email" class="input validator" placeholder="eunha@email.com" name="email" title="Required" required/>
                            <p class="validator-hint">Email harus diisi</p>
                        </div>
                        <div>
                            <label class="label mb-3">Kata Sandi</label>
                            <input type="password" class="input validator" name="password" title="Required" required/>
                            <p class="validator-hint">Kata sandi harus diisi</p>
                        </div>
                    </div>
                    <div class="mt-6">
                        <button class="btn btn-primary btn-block">Daftar</button>
                    </div>
                </form>
                <a class="link" href="{{ route('login') }}">Sudah punya akun ?</a>
            </div>
        </div>
    </div>
</body>
</html>