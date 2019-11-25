<form method="post"  action="/regions/update" >
    <input type="hidden" id="id" name="id" value="{{ $model->area_id or old('area_id') }}">
    @include('regions/forms/body')
</form>
