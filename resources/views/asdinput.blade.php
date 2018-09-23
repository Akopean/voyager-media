<div class="voyager-media__container">
    @if(isset($src) && !empty($src))
        <img class="voyager-media__tumb"  src="{{ filter_var($src, FILTER_VALIDATE_URL) ? $src : Voyager::image( $src ) }}" />
    @endif
        <input type="button" class="media-button btn btn-warning " value="Load Image" />
        <input hidden class="media-input"  name="{{ $input }}" value="{{ $src }}" />
</div>
<!-- End Voyager Media Button -->





