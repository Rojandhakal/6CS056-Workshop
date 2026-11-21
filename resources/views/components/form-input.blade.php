
@props([
    'name',
    'label',
    'type' => 'text',
    'value' => '',
    'required' => false
])

<div class="form-group">
    <label for="{{ $name }}">
        {{ $label }}
    </label>

    <input
        type="{{ $type }}"
        id="{{ $name }}"
        name="{{ $name }}"
        value="{{ old($name, $value) }}"
        class="form-control"
        {{ $required ? 'required' : '' }}
    >

    @error($name)
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror
</div>
