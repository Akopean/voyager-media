<div class="voyager-media__container">
    @if(isset($src) && !empty($src))
        <img class="voyager-media__tumb"  src="{{ filter_var($src, FILTER_VALIDATE_URL) ? $src : Voyager::image( $src ) }}" />
    @endif
    <input type="button" class="media-button btn btn-warning " value="Load Image" />
    <input hidden class="media-input"  name="{{ $input }}" value="{{ $src }}" />
</div>
<!-- End Voyager Media Button -->



<div class="dd">
    <ol class="dd-list">

        <li class="dd-item" data-id="9">
            <div class="pull-right item_actions">
                <div class="btn btn-sm btn-danger pull-right delete" data-id="9">
                    <i class="voyager-trash"></i> Delete
                </div>
                <div class="btn btn-sm btn-primary pull-right edit" data-id="9" data-title="Roles" data-url="" data-target="_self" data-icon_class="voyager-lock" data-color="" data-route="voyager.roles.index" data-parameters="null">
                    <i class="voyager-edit"></i> Edit
                </div>
            </div>
            <div class="dd-handle">
                <input type="hidden" data-i18n="true" name="title9_i18n" id="title9_i18n" value="{&quot;en&quot;:&quot;Roles&quot;,&quot;pt&quot;:&quot;Fun\u00e7\u00f5es&quot;}">
                <span>Roles</span> <small class="url">/admin/roles</small>
            </div>
        </li><li class="dd-item" data-id="6">
            <div class="pull-right item_actions">
                <div class="btn btn-sm btn-danger pull-right delete" data-id="6">
                    <i class="voyager-trash"></i> Delete
                </div>
                <div class="btn btn-sm btn-primary pull-right edit" data-id="6" data-title="Dashboard" data-url="" data-target="_self" data-icon_class="voyager-boat" data-color="" data-route="voyager.dashboard" data-parameters="null">
                    <i class="voyager-edit"></i> Edit
                </div>
            </div>
            <div class="dd-handle">
                <input type="hidden" data-i18n="true" name="title6_i18n" id="title6_i18n" value="{&quot;en&quot;:&quot;Dashboard&quot;,&quot;pt&quot;:&quot;Painel de Controle&quot;}">
                <span>Dashboard</span> <small class="url">/admin</small>
            </div>
        </li>
    </ol>

</div>
