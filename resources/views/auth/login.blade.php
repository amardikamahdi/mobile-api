<x-layout.auth title="Login">

    <div class="flex max-h-screen">
        <div class="hidden max-h-screen w-1/2 flex-col lg:flex">
            <img src="https://images.unsplash.com/photo-1506126613408-eca07ce68773" alt="coming_soon" class="max-h-screen max-w-screen" />
        </div>
        <div class="relative flex w-full items-center justify-center lg:w-1/2">
            <div class="max-w-[480px] p-5 md:p-10">
                <h2 class="mb-3 text-3xl font-bold">Dashboard Aplikasi Health</h2>
                <p class="mb-7">Silahkan masukkan kredensial anda</p>
                <form class="space-y-5" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div>
                        <label for="email">Email</label>
                        <input id="email" name="email" type="email" class="form-input" />
                    </div>
                    <div>
                        <label for="password">Password</label>
                        <input id="password" name="password" type="password" class="form-input" />
                    </div>
                    <div>
                        <label class="cursor-pointer">
                            <input name="remember" value="1" type="checkbox" class="form-checkbox" />
                            <span class="text-white-dark">Ingat saya</span>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary w-full">MASUK</button>
                </form>
            </div>
        </div>
    </div>

</x-layout.auth>
