@props(['trigger'])
<div x-data="{show : false}" @click.away="show = false">

    <div @click="show = ! show">
        {{$trigger}}
    </div>

    <div x-show="show" class="show absolute py-2 mt-2 bg-gray-100 rounded-xl w-full">
       {{$slot}}
    </div>

</div>
