<div>
    @if(session()->has('success'))
        {{ session()->get('success')}}
    @elseif($errors->())
        @foreach($errors->all() as $error)
            {{ $error }}
        @endforeach
    @endif
</div>