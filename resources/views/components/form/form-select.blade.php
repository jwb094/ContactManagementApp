<select 
{{-- {{ $attributes->merge(['type' =>''
,'class' =>''
,'name' =>''
,'id' =>''
,'value'=> ""]) }} --}}
{{ $attributes->except('value') }}>
    <option value="Mr" @selected($value === 'Mr')>Mr</option>
    <option value="Mrs" @selected($value ==='Mrs')>Mrs</option>
    <option value="Ms" @selected($value ==='Ms')>Ms</option>
    <option value="Master" @selected($value ==='Master')>Master</option>
    <option value="Dr" @selected($value ==='Dr')>Dr</option>
    <option value="Prof" @selected($value ==='Prof')>Professor</option>
    <option value="Sir" @selected($value === 'Sir')>Sir</option>
</select>
