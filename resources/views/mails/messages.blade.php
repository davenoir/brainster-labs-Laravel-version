@component('mail::message')
<div class="container">
    <div class="row text-center">
        <div class="col-md-6">
            Hello,
            <br>
            <br>
            {{$message}}
            @component('mail::button', ['url' => $link])
                    Visit Brainster
            @endcomponent
    </div>
    </div>
</div>
Sincerely,  
{{$from}}.
@endcomponent
