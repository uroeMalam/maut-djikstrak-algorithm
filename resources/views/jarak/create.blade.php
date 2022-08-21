<div class="container-fluid">
    <form method="POST" id="formCreate">
        @csrf
        @method("POST")
        <div class="row">
            <div class="col-sm-8">
                <div class="form-group">      
                    <label for="kecamatan">TItik Awal</label>              
                    <select class="form-control" id="id_kecamatan_a" name="id_kecamatan_a">
                        <option value="">Pilih Titik A</option>
                        @foreach ($kecamatan as $k)
                            <option value="{{ $k->id }}">{{ $k->kecamatan}}</option>
                        @endforeach
                    </select>
                    <small class="d-none text-danger" id="id_kecamatan_a"></small>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-8">
                <div class="form-group">     
                    <label for="kecamatan">Titik Akhir</label>               
                    <select class="form-control" id="id_kecamatan_b" name="id_kecamatan_b">
                        <option value="">Pilih Titik B</option>
                        @foreach ($kecamatan as $k)
                            <option value="{{ $k->id }}">{{ $k->kecamatan}}</option>
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
                    <input type="text" class="form-control" id="jarak" name="jarak" value="" aria-describedby="jarak">
                    <small class="d-none text-danger" id="jarak"></small>
                </div>
            </div>
        </div>
        <div class="form-actions">
                <div class="text-right">
                    <button type="submit" class="btn btn-success" id="btnCreate">Tambah</button>
                </div>
            </div>
    </form>
</div>