<div class="container-fluid">
    <form method="POST" id="formEdit">
        @csrf
        @method("POST")
        <input type="text" class="form-control" id="id" name="id" value="{{ $id }}" aria-describedby="id" hidden>
        
        <div class="row">
            <div class="col-sm-8">
                <div class="form-group">       
                    <label for="kecamatan">TItik Awal</label>                
                    <select class="form-control" id="id_kecamatan_a" name="id_kecamatan_a">
                        <option value="">Pilih Titik A</option>
                        @foreach ($kecamatan as $k)
                            <option value="{{ $k->id }}" {{ ($k->id == $data->id_kecamatan_a) ? "selected" : ""}}>{{ $k->kecamatan }}</option>
                        @endforeach
                    </select>
                    <small class="d-none text-danger" id="id_kecamatan_a"></small>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-8">
                <div class="form-group">          
                    <label for="kecamatan">TItik Akhir</label>             
                    <select class="form-control" id="id_kecamatan_b" name="id_kecamatan_b">
                        <option value="">Pilih TItik B</option>
                        @foreach ($kecamatan as $k)
                            <option value="{{ $k->id }}" {{ ($k->id == $data->id_kecamatan_b) ? "selected" : ""}}>{{ $k->kecamatan }}</option>
                        @endforeach
                    </select>
                    <small class="d-none text-danger" id="id_kecamatan_b"></small>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="jarak">Jarak</label>
                    <input type="text" class="form-control" id="jarak" name="jarak" value="{{ $data->jarak }}" aria-describedby="jarak">
                    <small class="d-none text-danger" id="jarak"></small>
                </div>
            </div>
        </div>

        <div class="form-actions">
                <div class="text-right">
                    <button type="submit" class="btn btn-info" id="btnEdit">Edit</button>
                </div>
            </div>
    </form>
</div>