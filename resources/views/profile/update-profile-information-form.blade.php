<form class="row g-3" method="POST" action="{{ route('user-profile-information.update') }}">
    @csrf
    @method('PUT')

    <div class="row">
    <div class="col">
        <label>{{ __('Name') }}</label>
        <input type="text" class="form-control" name="name" value="{{ old('name') ?? auth()->user()->name }}" required autofocus autocomplete="name" />
    </div>

    <div class="col">
        <label>{{ __('Email') }}</label>
        <input type="email" class="form-control" name="email" value="{{ old('email') ?? auth()->user()->email }}" required autofocus />
    </div>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">
            {{ __('Update Profile') }}
        </button>
    </div>
</form>

<hr>
