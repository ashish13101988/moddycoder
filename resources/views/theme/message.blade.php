@if ($errors->any())
    <div class="alert " id="errormessage">
        <ul class="list-group">
            @foreach ($errors->all() as $error)
                <li class="list-group-item">{{ $error }}</li>
            @endforeach
        </ul>
    </div>

    
@endif

@if (session('status'))
        <div  id="sendmessage">
            {{ session('status') }}
        </div>
@endif