<div id="mediaImageList" class="media-list__group" >
</div>
<div id="voyager-media__container" class="voyager-media__container">
    <input v-on:click="showMedia" type="button" class="media-button btn btn-warning " value="Load Image"/>
    <input hidden id="media-input" data-multiple='{{ $multiple }}' name="{{ $input }}" data-value='{{ json_decode($src) }}' />

</div>
<i id="voyager-media__trash" class="voyager-media__trash voyager-trash"></i>
<!-- End Voyager Media Button -->





