@if(session()->has('mensagem'))
    <div class="alert alert-success">
        {{ session()->get('mensagem')}}
    </div>
@endif