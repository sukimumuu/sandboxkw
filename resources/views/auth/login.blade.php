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
    <div class="flex justify-center items-center min-h-screen">
        <div class="card w-96 bg-base-100 shadow-sm">
            <div class="card-body">
                <div class="flex justify-between">
                    <h2 class="text-3xl font-bold">Startup</h2>
                </div>
                <form action="" method="post">
                    <div class="mt-6 flex flex-col gap-2 text-xs">
                        <div>
                            <label class="label">Nama Pengguna</label>
                            <input type="text" class="input validator" placeholder="eunha" title="Required" required/>
                            <p class="validator-hint">Nama pengguna harus diisi</p>
                        </div>
                        <div>
                            <label class="label">Kata Sandi</label>
                            <input type="password" class="input validator" title="Required" required/>
                            <p class="validator-hint">Kata sandi harus diisi</p>
                        </div>
                    </div>
                    <div class="mt-6">
                        <button class="btn btn-primary btn-block">Masuk</button>
                    </div>
                </form>
                <a class="link" href="{{ route('register') }}">Belum punya akun ?</a>
            </div>
        </div>
    </div>
</body>
</html>