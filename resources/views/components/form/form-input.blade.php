<input  {{ $attributes->merge(['type' =>'','class' => '','name'=> '','placeholder' => '', 'value'=>'']) }}>
    {{$slot}}
</input>