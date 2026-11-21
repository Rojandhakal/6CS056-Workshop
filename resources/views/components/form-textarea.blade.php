
@props([
    'name',
    'label',
    'value' => '',
    'rows' => 4,
    'required' => false
])

<div class="form-group">
    <label for="{{ $name }}">
        {{ $label }}
    </label>

    <textarea
        id="{{ $name }}"
        name="{{ $name }}"
        rows="{{ $rows }}"
        class="form-control"
        {{ $required ? 'required' : '' }}
    >{{ old($name, $value) }}</textarea>

    @error($name)
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror
</div>
