@extends('layouts.backend.app')

@section('title', 'Form Pendaftaran PPDB')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card">
                <div class="card-title">
                    <h4 class="text-center mt-2"><strong>Form Pendaftaran PPDB SPKBM Sabilun Najjah</strong></h4>
                </div>
                <form>
                    <div class="card-body">
                        <div class="step">
                            <div class="row">
                                            <!-- Nama Lengkap -->
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="nama_lengkap"><strong>Nama Lengkap</strong><span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" required />
                                                </div>
                                            </div>

                                            <!-- Jenis Kelamin -->
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="jenis_kelamin"><strong>Jenis Kelamin</strong><span class="text-danger">*</span></label>
                                                    <select name="jenis_kelamin" class="form-control" id="jenis_kelamin" required>
                                                        <option value="">-- Pilih --</option>
                                                        <option value="L">Laki-laki</option>
                                                        <option value="P">Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- NIK -->
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="nik"><strong>NIK</strong><span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="nik" name="nik" placeholder="Nomor NIK" required/>
                                                </div>
                                            </div>

                                            <!-- NIK -->
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="nokk"><strong>Nomor Kartu Keluarga</strong><span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="nokk" name="nokk" placeholder="Nomor Kartu Keluarga" required/>
                                                </div>
                                            </div>

                                            <!-- Kota Kelahiran -->
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="kota_kelahiran"><strong>Kota Kelahiran</strong><span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="kota_kelahiran" name="kota_kelahiran" placeholder="Kota kelahiran" required/>
                                                </div>
                                            </div>

                                            <!-- Tanggal Lahir -->
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="tgl_lahir"><strong>Tanggal Lahir</strong><span class="text-danger">*</span></label>
                                                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required />
                                                </div>
                                            </div>

                                            <!-- NISN -->
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="nisn"><strong>NISN</strong> <span class="text-muted font-italic">Lupa NISN? <a href="https://nisn.data.kemdikbud.go.id/">Cek Disini</a></span></label>
                                                    <input type="text" class="form-control" id="nisn" name="nisn" placeholder="NISN" />
                                                </div>
                                            </div>

                                            <!-- Asal Sekolah -->
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="asal_sekolah"><strong>Asal Sekolah</strong></label>
                                                    <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" placeholder="Asal Sekolah" />
                                                </div>
                                            </div>

                                            <!--Tahun Kelulusan -->
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="tahun_kelulusan"><strong>Tahun Kelulusan</strong></label>
                                                    <input type="text" class="form-control" id="tahun_kelulusan" name="tahun_kelulusan" placeholder="Tahun Kelulusan" />
                                                </div>
                                            </div>

                                            <!-- No Handphone -->
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="no_hp"><strong>No. Telepon</strong></label>
                                                    <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="No. Telepon" required/>
                                                </div>
                                            </div>

                                            <!-- Alamat -->
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="alamat"><strong>Alamat Lengkap</strong></label>
                                                    <textarea name="alamat" class="form-control" id="alamat" rows="3" placeholder="Alamat Lengkap" required></textarea>
                                                </div>
                                            </div>

                                            <!-- Upload Foto -->
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="foto"><strong>Upload Foto 4x6</strong></label>
                                                    <input type="file" class="form-control" id="foto" name="foto 4x6" required />
                                                </div>
                                            </div>

                                            <!-- Upload Akta Kelahiran -->
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="akta_kelahiran"><strong>Upload Akta Kelahiran</strong></label>
                                                    <input type="file" class="form-control" id="akta_kelahiran" name="akta_kelahiran" required />
                                                </div>
                                            </div>

                                            <!-- Upload Kartu Keluarga -->
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="kartu_keluarga"><strong>Upload Kartu Keluarga</strong></label>
                                                    <input type="file" class="form-control" id="kartu_keluarga" name="kartu_keluarga" required />
                                                </div>
                                            </div>
                            </div>
                        </div>
                        <div class="step">
                            {{-- Data Ayah --}}
                            <h4>Data Ayah</h4> <br>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="basicInput">Nama Ayah</label>
                                        <input type="text" class="form-control @error('nama_ayah') is-invalid @enderror" name="nama_ayah" value=" {{old('nama_ayah')}} " placeholder="Nama Ayah" />
                                        @error('nama_ayah')
                                            <div class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="basicInput">No Telp Ayah</label>
                                        <input type="text" class="form-control @error('telp_ayah') is-invalid @enderror" name="telp_ayah" value=" {{old('telp_ayah')}} " placeholder="telp Ayah" />
                                        @error('telp_ayah')
                                            <div class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="basicInput">Pendidikan Ayah</label>
                                        <select name="pendidikan_ayah" class="form-control">
                                            <option value="">-- Pilih --</option>
                                            <option value="SD" {{old('pendidikan_ayah') == 'SD' ? 'selected' : ''}} >SD</option>
                                            <option value="SMP" {{old('pendidikan_ayah') == 'SMP' ? 'selected' : ''}}>SMP</option>
                                            <option value="SMA/SMK" {{old('pendidikan_ayah') == 'SMA/SMK' ? 'selected' : ''}}>SMA/SMK</option>
                                            <option value="S1" {{old('pendidikan_ayah') == 'S1' ? 'selected' : ''}}>S1</option>
                                            <option value="S2" {{old('pendidikan_ayah') == 'S2' ? 'selected' : ''}}>S2</option>
                                            <option value="S3" {{old('pendidikan_ayah') == 'S3' ? 'selected' : ''}}>S3</option>
                                        </select>
                                        @error('pendidikan_ayah')
                                            <div class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="basicInput">Pekerjaan Ayah</label>
                                        <select name="pekerjaan_ayah" class="form-control">
                                            <option value="">-- Pilih --</option>
                                            <option value="Wiraswasta" {{old('pekerjaan_ayah') == 'Wiraswasta' ? 'selected' : ''}} >Wiraswasta</option>
                                            <option value="Wirausaha" {{old('pekerjaan_ayah') == 'Wirausaha' ? 'selected' : ''}}>Wirausaha</option>
                                            <option value="ASN" {{old('pekerjaan_ayah') == 'ASN' ? 'selected' : ''}}>ASN</option>
                                            <option value="Buruh" {{old('pekerjaan_ayah') == 'Buruh' ? 'selected' : ''}}>Buruh</option>
                                        </select>
                                        @error('pendidiakn_ayah')
                                            <div class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="basicInput">Alamat Lengkap</label>
                                        <textarea name="alamat_ayah" class="form-control @error('alamat_ayah') is-invalid @enderror" cols="30" rows="3"> {{old('alamat_ayah')}} </textarea>
                                        @error('alamat_ayah')
                                            <div class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <hr>
                            {{-- Data Ibu --}}
                            <h4>Data Ibu</h4> <br>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="basicInput">Nama Ibu</label>
                                        <input type="text" class="form-control @error('nama_ibu') is-invalid @enderror" name="nama_ibu" value=" {{old('nama_ibu')}} " placeholder="Nama Ibu" />
                                        @error('nama_ibu')
                                            <div class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="basicInput">No Telp Ibu</label>
                                        <input type="text" class="form-control @error('telp_ibu') is-invalid @enderror" name="telp_ibu" value=" {{old('telp_ibu')}} " placeholder="telp Ibu" />
                                        @error('telp_ibu')
                                            <div class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="basicInput">Pendidikan Ibu</label>
                                        <select name="pendidikan_ibu" class="form-control">
                                            <option value="">-- Pilih --</option>
                                            <option value="SD" {{old('pendidikan_ibu') == 'SD' ? 'selected' : ''}} >SD</option>
                                            <option value="SMP" {{old('pendidikan_ibu') == 'SMP' ? 'selected' : ''}}>SMP</option>
                                            <option value="SMA/SMK" {{old('pendidikan_ibu') == 'SMA/SMK' ? 'selected' : ''}}>SMA/SMK</option>
                                            <option value="S1" {{old('pendidikan_ibu') == 'S1' ? 'selected' : ''}}>S1</option>
                                            <option value="S2" {{old('pendidikan_ibu') == 'S2' ? 'selected' : ''}}>S2</option>
                                            <option value="S3" {{old('pendidikan_ibu') == 'S3' ? 'selected' : ''}}>S3</option>
                                        </select>
                                        @error('pendidikan_ibu')
                                            <div class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="basicInput">Pekerjaan Ibu</label>
                                        <select name="pekerjaan_ibu" class="form-control">
                                            <option value="">-- Pilih --</option>
                                            <option value="Ibu Rumah Tangga" {{old('pekerjaan_ibu') == 'Ibu Rumah Tangga' ? 'selected' : ''}}>Ibu Rumah Tangga</option>
                                            <option value="Wiraswasta" {{old('pekerjaan_ibu') == 'Wiraswasta' ? 'selected' : ''}} >Wiraswasta</option>
                                            <option value="Wirausaha" {{old('pekerjaan_ibu') == 'Wirausaha' ? 'selected' : ''}}>Wirausaha</option>
                                            <option value="ASN" {{old('pekerjaan_ibu') == 'ASN' ? 'selected' : ''}}>ASN</option>
                                            <option value="Buruh" {{old('pekerjaan_ibu') == 'Buruh' ? 'selected' : ''}}>Buruh</option>
                                        </select>
                                        @error('pendidiakn_ibu')
                                            <div class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="basicInput">Alamat Lengkap</label>
                                        <textarea name="alamat_ibu" class="form-control @error('alamat_ibu') is-invalid @enderror" cols="30" rows="3"> {{old('alamat_ibu')}} </textarea>
                                        @error('alamat_ibu')
                                            <div class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="step">

                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-secondary mt-1" id="btnKembali" onclick="nextPrev(-1)">Kembali</button>
                        <button type="button" class="btn btn-primary mt-1" id="btnLanjut" onclick="nextPrev(1)">Selanjutnya</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    let currentStep = 0;
    showStep(currentStep);

    function showStep(n) {
        let steps = document.getElementsByClassName("step");
        steps[n].style.display = "block";

        if (n == 0) {
            document.getElementById("btnKembali").style.display = "none";
        } else {
            document.getElementById("btnKembali").style.display = "inline";
        }

        if (n == (steps.length - 1)) {
            document.getElementById("btnLanjut").innerHTML = "Submit";
        } else {
            document.getElementById("btnLanjut").innerHTML = "Selanjutnya";
        }
    }

    function nextPrev(n) {
        let steps = document.getElementsByClassName("step");

        if (n == 1 && !validateForm()) return false;

        steps[currentStep].style.display = "none";
        currentStep = currentStep + n;

        if (currentStep >= steps.length) {
            document.getElementById("form-wrapper").submit();
            return false;
        }

        showStep(currentStep);
    }

    function validateForm() {
        let valid = true;
        let inputs = document.getElementsByClassName("step")[currentStep].getElementsByTagName("input");

        for (let i = 0; i < inputs.length; i++) {
            if (inputs[i].hasAttribute("required") && inputs[i].value == "") {
                inputs[i].className += " is-invalid";
                valid = false;
            } else {
                inputs[i].className = inputs[i].className.replace(" is-invalid", "");
            }
        }

        return valid;
    }
</script>
@endsection
