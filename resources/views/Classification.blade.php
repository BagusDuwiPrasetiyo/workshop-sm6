<form method ="post" action="{{url('/algorithm/upload')}}">
    {{csrf_field()}}
    @method('post')
    <div class="form-group">
        <label for="l_core">L CORE</label>
        <select name="l_core" class="form-control" id="l_core">
            <option value="">--Pilih--</option>
            <option value="high">HIGH > 37</option>
            <option value="mid">MID <= 37 and >= 36</option>
            <option value="low">LOW < 36</option>    
        </select>
    </div>  
    <div class="form-group">
          <label for="l_surf">L SURF</label>
          <select name="l_surf" class="form-control" id="l_surf">
            <option value="">--Pilih--</option>
            <option value="high">HIGH > 36.5 </option>
            <option value="mid">MID <= 36.5 and >= 35 </option>
            <option value="low">LOW < 35</option>   
          </select>
    </div>
      <div class="form-group">
        <label for="l_o2">L O2</label>
        <select name="l_o2" class="form-control" id="l_o2">
          <option value="">--Pilih--</option>
          <option value="excellent">EXCELLENT >= 98</option>
          <option value="good">GOOD >= 90 and < 98</option>
          <option value="fair">FAIR >= 80 and < 90</option>   
          <option value="poor">POOR < 80</option>
        </select>
    </div>    
    <div class="form-group">
        <label for="l_bp">L BP</label>
        <select name="l_bp" class="form-control" id="l_bp">
          <option value="">--Pilih--</option>
          <option value="high">HIGH > 130/90</option>
          <option value="mid">MID <= 130/90 and >= 90/70</option>
          <option value="low">LOW < 90/70</option>   
        </select>
    </div>
    <div class="form-group">
        <label for="surf_stbl">SURF STBL</label>
        <select name="surf_stbl" class="form-control" id="suft-stbl">
          <option value="">--Pilih--</option>
          <option value="stable">STABLE</option>
          <option value="mod-stable">MOD-STABLE</option>
          <option value="unstable">UNSTABLE</option>   
        </select>
    </div>
    <div class="form-group">
        <label for="core_stbl">CORE STBL</label>
        <select name="core_stbl" class="form-control" id="core_stbl">
          <option value="">--Pilih--</option>
          <option value="stable">STABLE</option>
          <option value="mod-stable">MOD-STABLE</option>
          <option value="unstable">UNSTABLE</option>   
        </select>
    </div>
    <div class="form-group">
        <label for="bp_stbl">BP STBL</label>
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