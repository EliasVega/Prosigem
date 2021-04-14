

    <div class="form-group">
        <label class="col-md-3 form control-label" for="documento_id">Documento</label>
        <div class="col-md-9">
            <div class="select">
                <select name="documento_id" class="form-control selectpicker" data-live-search="true" id="documento_id" required>
                    <option value="" disabled selected>Seleccionar.</option>
                    @foreach($documentos as $doc)
                        <option value="{{ $doc->id }}">{{ $doc->nombre }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times fa-2x"></i> Cerrar</button>
        <button type="submit" class="btn btn-success"><i class="fa fa-save fa-2x"></i> Guardar</button>

    </div>
