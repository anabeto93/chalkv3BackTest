<div class="form-group form-check">
    {{ Form::checkbox($name, $value, $checked, array_merge(['id' => $name, 'class' => 'form-check-input'], $attributes)
    ) }}
    {{ Form::label($name, null, ['class' => 'form-check-label']) }}
</div>