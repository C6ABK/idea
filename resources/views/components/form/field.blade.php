@props(['label', 'name', 'type' => 'text'])

<div class="space-y-2">
    <label for="{{ $name }}" class="label">{{ $label }}</label>
    <input type="{{  $type }}" class="input" id="{{ $name }}" name="{{ $name }}" {{  $attributes }} value="{{ old($name, '') }}"/>

    @error($name)
        <p class="text-red-500 text-xs">{{  $message }}</p>
    @enderror
</div>