@if (session('Error'))
<div class="alert alert-danger rounded">
    <div class="container">
        {!! session('Error') !!}
    </div>
</div>
@endif

@if (session('Info'))
<div class="alert alert-info rounded">
    <div class="container">
        {!! session('Info') !!}
    </div>
</div>
@endif

@if(session('errors'))
<div class="alert alert-danger rounded">
    <div class="text-sm text-red-600 italic">
        Please fix the following errors
        <ul class="list-disc ps-5">
            @foreach(session('errors')->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif
