<form method ="post" action="{{url('/algorithm/upload')}}">
    {{csrf_field()}}
    @method('post')
    <div class="form-group">
        <label for="l_core">L_CORE</label>
        <select name="l_core" class="form-control" id="l_core">
            <option value="">--Pilih--</option>
            <option value="high">HIGH</option>
            <option value="mid">MID</option>
            <option value="low">LOW</option>    
        </select>
    </div>  
    <div class="form-group">
          <label for="l_surf">l_surf</label>
          <select name="l_surf" class="form-control" id="l_surf">
            <option value="">--Pilih--</option>
            <option value="high">HIGH</option>
            <option value="mid">MID</option>
            <option value="low">LOW</option>   
          </select>
    </div>
      <div class="form-group">
        <label for="l_o2">l_o2</label>
        <select name="l_o2" class="form-control" id="l_o2">
          <option value="">--Pilih--</option>
          <option value="excellent">EXCELLENT</option>
          <option value="good">GOOD</option>
          <option value="fair">FAIR</option>   
          <option value="poor">POOR</option>
        </select>
    </div>    
    <div class="form-group">
        <label for="l_bp">l_bp</label>
        <select name="l_bp" class="form-control" id="l_bp">
          <option value="">--Pilih--</option>
          <option value="high">HIGH</option>
          <option value="mid">MID</option>
          <option value="low">LOW</option>   
        </select>
    </div>
    <div class="form-group">
        <label for="surf_stbl">surf_stbl</label>
        <select name="surf_stbl" class="form-control" id="suft-stbl">
          <option value="">--Pilih--</option>
          <option value="stable">STABLE</option>
          <option value="mod-stable">MOD-STABLE</option>
          <option value="unstable">UNSTABLE</option>   
        </select>
    </div>
    <div class="form-group">
        <label for="core_stbl">core_stbl</label>
        <select name="core_stbl" class="form-control" id="core_stbl">
          <option value="">--Pilih--</option>
          <option value="stable">STABLE</option>
          <option value="mod-stable">MOD-STABLE</option>
          <option value="unstable">UNSTABLE</option>   
        </select>
    </div>
    <div class="form-group">
        <label for="bp_stbl">bp_stbl</label>
        <select name="bp_stbl" class="form-control" id="bp_stbl">
          <option value="">--Pilih--</option>
          <option value="stable">STABLE</option>
          <option value="mod-stable">MOD-STABLE</option>
          <option value="unstable">UNSTABLE</option>   
        </select>
    </div>
    <div class="form-group">
        <label for="comfort">COMFORT</label>
        <input type="text" name="comfort" id="comfort" value="" class="form-control">
    </div>
    <button type="button" class="btn btn-danger " >BATAL</button>
    <button type="submit" class="btn btn-primary " >SIMPAN</button>
</form>