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

                            <div class="row">
                                <!-- Nama Lengkap -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="nama_lengkap">Nama Lengkap</label>
                                        <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap" />
                                    </div>
                                </div>

                                <!-- Jenis Kelamin -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                        <select name="jenis_kelamin" class="form-control">
                                            <option value="">-- Pilih --</option>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Tanggal Lahir -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="tgl_lahir">Tanggal Lahir</label>
                                        <input type="date" class="form-control" name="tgl_lahir" />
                                    </div>
                                </div>

                                <!-- NISN -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="nisn">NISN</label>
                                        <input type="text" class="form-control" name="nisn" placeholder="NISN" />
                                    </div>
                                </div>

                                <!-- Kota Kelahiran -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="Kota_kelahiran">Kota Kelahiran</label>
                                        <input type="text" class="form-control" name="Kota_kelahiran" placeholder="Kota kelahiran" />
                                    </div>
                                </div>

                                <!-- Asal Sekolah -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="asal_sekolah">Asal Sekolah</label>
                                        <input type="text" class="form-control" name="asal_sekolah" placeholder="Asal Sekolah" />
                                    </div>
                                </div>

                                <!--Tahun Kelulusan -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="tahun_kelulusan">Tahun Kelulusan</label>
                                        <input type="text" class="form-control" name="tahun_kelulusan" placeholder="Tahun Kelulusan" />
                                    </div>
                                </div>

                                <!-- No Handphone -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="no_hp">No Handphone</label>
                                        <input type="text" class="form-control" name="no_hp" placeholder="No Handphone" />
                                    </div>
                                </div>

                                <!-- Alamat -->
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="alamat">Alamat Lengkap</label>
                                        <textarea name="alamat" class="form-control" rows="3" placeholder="Alamat Lengkap"></textarea>
                                    </div>
                                </div>

                                <!-- Upload Foto -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="foto">Upload Foto 4x6</label>
                                        <input type="file" class="form-control" name="foto 4x6" />
                                    </div>
                                </div>

                                <!-- Upload Akta Kelahiran -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="akta_kelahiran">Upload Akta Kelahiran</label>
                                        <input type="file" class="form-control" name="akta_kelahiran" />
                                    </div>
                                </div>

                                <!-- Upload Kartu Keluarga -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="kartu_keluarga">Upload Kartu Keluarga</label>
                                        <input type="file" class="form-control" name="kartu_keluarga" />
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
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
