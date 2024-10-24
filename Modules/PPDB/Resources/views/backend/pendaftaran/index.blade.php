@extends('layouts.backend.app')

@section('title')
    Form Pendaftaran
@endsection

@section('content')
<div class="content-wrapper container-xxl p-0">
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2>Form Pendaftaran PPDB SPKBM Sabilun Najjah</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ url('ppdb/form-pendaftaran', Auth::id()) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="step">
                                <div class="row">
                                    <!-- Nama Lengkap -->
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="nama_lengkap"><strong>Nama Lengkap</strong><span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" required />
                                        </div>
                                    </div>
                                    <!-- Jenis Kelamin -->
                                    <div class="col-md-6 col-sm-12">
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
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="nik"><strong>NIK</strong><span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="nik" name="nik" placeholder="Nomor NIK" required/>
                                        </div>
                                    </div>
                                    <!-- NIK -->
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="nokk"><strong>Nomor Kartu Keluarga</strong><span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="nokk" name="nokk" placeholder="Nomor Kartu Keluarga" required/>
                                        </div>
                                    </div>
                                    <!-- Kota Kelahiran -->
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="kota_kelahiran"><strong>Kota Kelahiran</strong><span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="kota_kelahiran" name="kota_kelahiran" placeholder="Kota kelahiran" required/>
                                        </div>
                                    </div>
                                    <!-- Tanggal Lahir -->
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="tgl_lahir"><strong>Tanggal Lahir</strong><span class="text-danger">*</span></label>
                                            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required />
                                        </div>
                                    </div>
                                    <!-- NISN -->
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="nisn"><strong>NISN</strong> <span class="text-muted font-italic">Lupa NISN? <a href="https://nisn.data.kemdikbud.go.id/">Cek Disini</a></span></label>
                                            <input type="text" class="form-control" id="nisn" name="nisn" placeholder="NISN" />
                                        </div>
                                    </div>
                                    <!-- Asal Sekolah -->
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="asal_sekolah"><strong>Asal Sekolah</strong></label>
                                            <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" placeholder="Asal Sekolah" />
                                        </div>
                                    </div>
                                    <!--Tahun Kelulusan -->
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="tahun_kelulusan"><strong>Tahun Kelulusan</strong></label>
                                            <input type="text" class="form-control" id="tahun_kelulusan" name="tahun_kelulusan" placeholder="Tahun Kelulusan" />
                                        </div>
                                    </div>
                                    <!-- No Handphone -->
                                    <div class="col-md-6 col-sm-12">
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
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="foto"><strong>Upload Foto 4x6</strong></label>
                                            <input type="file" class="form-control" id="foto" name="foto 4x6" required />
                                        </div>
                                    </div>
                                    <!-- Upload Akta Kelahiran -->
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="akta_kelahiran"><strong>Upload Akta Kelahiran</strong></label>
                                            <input type="file" class="form-control" id="akta_kelahiran" name="akta_kelahiran" required />
                                        </div>
                                    </div>
                                    <!-- Upload Kartu Keluarga -->
                                    <div class="col-md-6 col-sm-12">
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
                                            <input type="text" class="form-control @error('nama_ayah') is-invalid @enderror" name="nama_ayah" value=" {{old('nama_ayah')}} " placeholder="Nama Ayah" required />
                                            @error('nama_ayah')
                                                <div class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="basicInput">No. Telepon Ayah</label>
                                            <input type="text" class="form-control @error('telp_ayah') is-invalid @enderror" name="telp_ayah" value=" {{old('telp_ayah')}} " placeholder="telp Ayah" required />
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
                                            <select name="pendidikan_ayah" class="form-control" required>
                                                <option value="">-- Pilih --</option>
                                                <option value="Tidak Sekolah" {{old('pendidikan_ayah') == 'Tidak Sekolah' ? 'selected' : ''}} >Tidak Sekolah</option>
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
                                            <select name="pekerjaan_ayah" class="form-control" required>
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
                                            <textarea name="alamat_ayah" class="form-control @error('alamat_ayah') is-invalid @enderror" cols="30" rows="3" required> {{old('alamat_ayah')}} </textarea>
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
                                            <input type="text" class="form-control @error('nama_ibu') is-invalid @enderror" name="nama_ibu" value=" {{old('nama_ibu')}} " placeholder="Nama Ibu" required/>
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
                                            <input type="text" class="form-control @error('telp_ibu') is-invalid @enderror" name="telp_ibu" value=" {{old('telp_ibu')}} " placeholder="telp Ibu" required/>
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
                                            <select name="pendidikan_ibu" class="form-control" required>
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
                                            <select name="pekerjaan_ibu" class="form-control" required>
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
                                            <textarea name="alamat_ibu" class="form-control @error('alamat_ibu') is-invalid @enderror" cols="30" rows="3" required> {{old('alamat_ibu')}} </textarea>
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
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="basicInput">Kartu Keluarga</label>
                                            <input type="file" class="form-control @error('kartu_keluarga') is-invalid @enderror" name="kartu_keluarga" required/>
                                            @error('kartu_keluarga')
                                                <div class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="basicInput">Akte Kelahiran</label>
                                            <input type="file" class="form-control @error('akte_kelahiran') is-invalid @enderror" name="akte_kelahiran" required/>
                                            @error('akte_kelahiran')
                                                <div class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="basicInput">Surat Kelakuan Baik</label>
                                            <input type="file" class="form-control @error('surat_kelakuan_baik') is-invalid @enderror" name="surat_kelakuan_baik" required/>
                                            <small class="text-danger">Surat Kelakuan Baik dari sekolah asal.</small>
                                            @error('surat_kelakuan_baik')
                                                <div class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="basicInput">Surat Sehat</label>
                                            <input type="file" class="form-control @error('surat_sehat') is-invalid @enderror" name="surat_sehat" required/>
                                            <small class="text-danger">Surat Sehat dari RS/Puskesmas atau Klinik.</small>
                                            @error('surat_sehat')
                                                <div class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="basicInput">Surat Tidak Buta Warna</label>
                                            <input type="file" class="form-control @error('surat_tidak_buta_warna') is-invalid @enderror" name="surat_tidak_buta_warna" required/>
                                            <small class="text-danger">Surat Tidak Buta Warna dari RS/Puskesmas atau Klinik.</small>
                                            @error('surat_tidak_buta_warna')
                                                <div class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="basicInput">Rapor</label>
                                            <input type="file" class="form-control @error('rapor') is-invalid @enderror" name="rapor" required/>
                                            <small class="text-danger">Rapor Semester 1-4, harap satukan pada 1 file .pdf.</small>
                                            @error('rapor')
                                                <div class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="basicInput">Foto</label>
                                            <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto" required/>
                                            <small class="text-danger">Pas Foto ukuran 3x4 dengan latar belakang merah dan memakai baju sekolah.</small>
                                            @error('foto')
                                                <div class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="basicInput">Ijazah</label>
                                            <input type="file" class="form-control @error('ijazah') is-invalid @enderror" name="ijazah" required/>
                                            <small class="text-danger">Dapat menyusul.</small>
                                            @error('ijazah')
                                                <div class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Submit Button -->
                            <div class="row">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-secondary mt-1" id="btnKembali" onclick="nextPrev(-1)">Kembali</button>
                                <button type="button" class="btn btn-primary mt-1" id="btnLanjut" onclick="nextPrev(1)">Selanjutnya</button>
                                <button type="submit" class="btn btn-danger mt-1 float-right" id="btnPermanen">Simpan Permanen</button>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
$(document).ready(function() {
    var currentStep = 0;
    var steps = $(".step");
    steps.hide();
    $(steps[currentStep]).show();

    function showStep(n) {
        $(steps).hide();
        $(steps[n]).show();
        if (n == 0) {
            $("#btnKembali").hide().attr("disabled", true);
            $("#btnPermanen").hide().attr("disabled", true);
        } else {
            $("#btnKembali").show().attr("disabled", false);
            $("#btnPermanen").show().attr("disabled", false);
        }
        if (n == (steps.length - 1)) {
            $("#btnLanjut").text("Simpan Sementara");
            $("#btnPermanen").hide().attr("disabled", false);
        } else {
            $("#btnLanjut").text("Selanjutnya");
            $("#btnPermanen").show().attr("disabled", true);
        }
    }

    function nextPrev(n) {
        if (n == 1 && !validateForm()) return false;
        currentStep = currentStep + n;
        if (currentStep >= steps.length) {
            $("form").submit();
            return false;
        }
        showStep(currentStep);
    }

    function validateForm() {
        var valid = true;
        var inputs = $(steps[currentStep]).find("input, select, textarea");
        inputs.each(function() {
            if ($(this).prop("required") && $(this).val() == "") {
                $(this).addClass("is-invalid");
                valid = false;
            } else {
                $(this).removeClass("is-invalid");
            }
        });
        return valid;
    }

    $("#btnKembali").click(function() {
        nextPrev(-1);
    });

    $("#btnLanjut").click(function() {
        nextPrev(1);
    });

    showStep(currentStep);
});
</script>
@endsection
