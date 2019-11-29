<form method="post"  action="/contractor/store" >
    {{ csrf_field() }}
    @include('contractor/forms/body')
</form>
