<div class="p-3 card">
    <div class="card-body">
        <h5 class="card-title fw-normal">Profile Information</h5>
        <p class="card-text text-secondary">Update your account's profile information and email address.</p>
        <form class="w-50" action="{{ route('profile.update') }}" method="POST">
            @csrf
            @method('patch')

            <div class="mb-3">
                <label for="name" class="form-label fs-6">Name</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                    id="name" value="{{ old('name', $user->name) }}" required autofocus placeholder="John Doe">

                @error('name')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label fs-6">Email</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                    id="email" value="{{ old('email', $user->email) }}" required placeholder="john@example.com">

                @error('email')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-dark">Save</button>
        </form>
    </div>
</div>
