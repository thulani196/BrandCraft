@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="red darken-4 white-text center-align">
            {{ $error }}
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class="green darken-4 white-text center-align">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="red darken-4 white-text center-align">
        {{ session('error') }}
    </div>
@endif