<div class="form-group form-check">
    {{ Form::checkbox($name, $value, false, ['id' => $name, 'class' => 'form-check-input']) }}
    {{ Form::label($name, null, ['class' => 'form-check-label']) }}
</div>