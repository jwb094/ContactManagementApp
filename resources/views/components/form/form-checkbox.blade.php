<div class="form-check">
  <label class="form-check-label" for={{ $slot }}>
    {{ $slot }}
</label>
    <input  {{ $attributes->merge(['name' =>'']) }} class="form-check-input" type="checkbox"  id={{ $slot }} value={{ $slot }} > 
</div>
