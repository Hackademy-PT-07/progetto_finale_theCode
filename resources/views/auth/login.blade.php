<x-layout>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">

                <form class="my-5 bg-white p-3 rounded shadow" action="/login" method="POST">
                    @csrf
                    <div class="mb-3">
                        <h1>Accedi</h1>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>
                    @error('email') <span class="small text-danger">{{ $message }}</span> @enderror
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
                    @error('password') <span class="small text-danger">{{ $message }}</span> @enderror
                    <div class="mt-4">
                        <button type="submit" class="btn btn-outline-primary">Login</button>
                    </div>
                    <p class="mt-4 text-center">Non hai un account? <a href="/register">Registrati</a></p>
                </form>


            </div>
        </div>
    </div>

</x-layout>