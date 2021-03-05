@if(isset($saveAction['active']) && !is_null($saveAction['active']['value']))
    <div id="saveActions" class="form-group">

        <input type="hidden" name="save_action" value="{{ $saveAction['active']['value'] }}">
        @if(!empty($saveAction['options']))
            <div class="btn-group" role="group">
        @endif

        <button type="submit" class="btn btn-success">
            <span class="la la-save" role="presentation" aria-hidden="true"></span> &nbsp;
            <span data-value="{{ $saveAction['active']['value'] }}">{{ $saveAction['active']['label'] }}</span>
        </button>

        <div class="btn-group" role="group">
            @if(!empty($saveAction['options']))
                <button id="btnGroupDrop1" type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-chevron-down"></i><span class="sr-only">&#x25BC;</span></button>
                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                    @foreach( $saveAction['options'] as $value => $label)
                    <a class="dropdown-item" href="javascript:void(0);" data-value="{{ $value }}">{{ $label }}</a>
                    @endforeach
                </div>
            @endif
        </div>

        @if(!empty($saveAction['options']))
            </div>
        @endif


        @if(!$crud->hasOperationSetting('showCancelButton') || $crud->getOperationSetting('showCancelButton') == true)
            <a type="button" href="{{ $crud->hasAccess('list') ? url($crud->route) : url()->previous() }}" class="btn btn-danger waves-effect waves-light">
                <i class="bx bx-block font-size-16 align-middle me-2"></i> {{ trans('backpack::crud.cancel') }}
            </a>
        @endif

    </div>
@endif

