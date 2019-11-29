<form method="post"  action="/assortment/update/{{ $model->id }}" >
    {{ csrf_field() }}
    @include('assortment/forms/body')
</form>
