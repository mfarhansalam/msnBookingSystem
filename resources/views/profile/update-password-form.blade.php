<form method="POST" action="{{ route('user-password.update') }}">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>{{ __('Current Password') }}</label>
        <input type="password" class="form-control" name="current_password" required autocomplete="current-password" />
    </div>

    <div class="mb-3">
        <label>{{ __('Password') }}</label>
        <input type="password" class="form-control" name="password" required autocomplete="new-password" />
    </div>

    <div class="mb-3">
        <label>{{ __('Confirm Password') }}</label>
        <input type="password" class="form-control"  name="password_confirmation" required autocomplete="new-password" />
    </div>

    <div class="col-12">
        <button type="submit" class="btn btn-primary">
            {{ __('Save') }}
        </button>
    </div>
</form>

<hr>
