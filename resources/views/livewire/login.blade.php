<div class="container mt-5">
    @if(session()->has("error"))
        <div>
            {{session("error")}}
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="mb-4">Login</h2>
            <form id="loginForm" wire:submit="login">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" wire:model="form.username" id="username" name="username">
                    @error('form.username') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" wire:model="form.password" id="password" name="password">
                    @error('form.password') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <button type="submit" class="btn btn-primary">Login</button> or <a href="/livewire/register">REGISTER</a>
            </form>
        </div>
    </div>
</div>

