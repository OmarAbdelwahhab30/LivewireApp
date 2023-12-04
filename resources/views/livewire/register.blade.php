<div class="container mt-5">
    <div class="row justify-content-center mb-5">
        <div class="col-md-6">
            <h2 class="mb-4">Register</h2>
            <form wire:submit="register">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" wire:model="form.username" >
                    @error('form.username') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">email</label>
                    <input type="text" class="form-control" id="email" wire:model="form.email" required>
                    @error('form.email') <span class="text-danger">{{ $message }}</span> @enderror

                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Upload Image</label>
                    <input type="file" class="form-control" id="image" wire:model="form.image">
                    @error('form.image') <span class="text-danger">{{ $message }}</span> @enderror

                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" wire:model="form.password" required>
                    @error('form.password') <span class="text-danger">{{ $message }}</span> @enderror

                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="cpassword" wire:model.blur="form.cpassword" required>
                    @error('form.cpassword') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <button type="submit" class="btn btn-primary">Register</button> or <a href="/livewire/login">Login</a>
            </form>
        </div>
    </div>
</div>
