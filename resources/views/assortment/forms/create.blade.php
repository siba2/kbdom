<form method="post"  action="/assortment/store" >
    {{ csrf_field() }}
    @include('assortment/forms/body')
</form>
