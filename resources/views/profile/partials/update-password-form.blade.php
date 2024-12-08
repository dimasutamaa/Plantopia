<div class="p-3 card">
    <div class="card-body">
        <h5 class="card-title fw-normal">Update Password</h5>
        <p class="card-text text-secondary">Ensure your account is using a long, random password to stay secure.</p>
        <form class="w-50" action="{{ route('password.update') }}" method="POST">
            @csrf
            @method('put')

            <div class="mb-3">
                <label for="current_password" class="form-label fs-6">Current Password</label>
                <input type="password" name="current_password" id="current_password"
                    class="form-control @error('current_password') is-invalid @enderror" required autofocus
                    autocomplete="current-password">
                @error('current_password')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label fs-6">New Password</label>
                <input type="password" name="password" id="password"
                    class="form-control @error('password') is-invalid @enderror" required autofocus
                    autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label fs-6">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control"
                    required autofocus autocomplete="new-password">
            </div>
            <button type="submit" class="btn btn-dark">Save</button>
        </form>
    </div>
</div>
