<form method="post"  action="/contractor/update/{{ $model->id }}" >
    {{ csrf_field() }}
    @include('contractor/forms/body')
</form>
