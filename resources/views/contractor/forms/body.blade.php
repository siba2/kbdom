<div class="card-body">
    <div class="form-group {{ ($errors->has('name') ? 'has-error' : '') }}">
        <label for="name">{{ __('Nazwa') }}*</label>
        <input type="text" id="name" name="name" class="form-control" required
               value="{{ old('name', (isset($model->name) ? $model->name : '')) }}">
        @if ($errors->has('name')) <span class="help-block">{{ $errors->first('name') }}</span> @endif
    </div>
    <!-- ./box-body -->
    <div class="box-footer">
        <button type="submit" class="btn btn-primary">{{ __('Zapisz') }}</button>
    </div>
</div>
