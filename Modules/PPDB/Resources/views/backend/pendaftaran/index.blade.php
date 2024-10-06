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

                                <!-- Nama Panggilan -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="nama_panggilan">Nama Panggilan</label>
                                        <input type="text" class="form-control" name="nama_panggilan" placeholder="Nama Panggilan" />
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

                                <!-- NISN -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="nisn">NISN</label>
                                        <input type="text" class="form-control" name="nisn" placeholder="NISN" />
                                    </div>
                                </div>

                                <!-- NIK -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="nik">NIK</label>
                                        <input type="text" class="form-control" name="nik" placeholder="NIK" />
                                    </div>
                                </div>

                                <!-- No KK -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="no_kk">No KK</label>
                                        <input type="text" class="form-control" name="no_kk" placeholder="Nomor KK" />
                                    </div>
                                </div>

                                <!-- No Akta Kelahiran -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="no_akta_kelahiran">No Akta Kelahiran</label>
                                        <input type="text" class="form-control" name="no_akta_kelahiran" placeholder="No Akta Kelahiran" />
                                    </div>
                                </div>

                                <!-- Tempat Lahir -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="tempat_lahir">Tempat Lahir</label>
                                        <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir" />
                                    </div>
                                </div>

                                <!-- Tanggal Lahir -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="tgl_lahir">Tanggal Lahir</label>
                                        <input type="date" class="form-control" name="tgl_lahir" />
                                    </div>
                                </div>

                                <!-- Agama -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="agama">Agama</label>
                                        <select name="agama" class="form-control">
                                            <option value="">-- Pilih Agama --</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Katolik">Katolik</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Buddha">Buddha</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Alamat -->
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="alamat">Alamat Lengkap</label>
                                        <textarea name="alamat" class="form-control" rows="3" placeholder="Alamat Lengkap"></textarea>
                                    </div>
                                </div>

                                <!-- RT -->
                                <div class="col-2">
                                    <div class="form-group">
                                        <label for="rt">RT</label>
                                        <input type="text" class="form-control" name="rt" placeholder="RT" />
                                    </div>
                                </div>

                                <!-- RW -->
                                <div class="col-2">
                                    <div class="form-group">
                                        <label for="rw">RW</label>
                                        <input type="text" class="form-control" name="rw" placeholder="RW" />
                                    </div>
                                </div>

                                <!-- Desa/Kelurahan -->
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="desa_kelurahan">Desa/Kelurahan</label>
                                        <input type="text" class="form-control" name="desa_kelurahan" placeholder="Desa/Kelurahan" />
                                    </div>
                                </div>

                                <!-- Kecamatan -->
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="kecamatan">Kecamatan</label>
                                        <input type="text" class="form-control" name="kecamatan" placeholder="Kecamatan" />
                                    </div>
                                </div>

                                <!-- Kota/Kabupaten -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="kota_kabupaten">Kota/Kabupaten</label>
                                        <input type="text" class="form-control" name="kota_kabupaten" placeholder="Kota/Kabupaten" />
                                    </div>
                                </div>

                                <!-- Kewarganegaraan -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="kewarganegaraan">Kewarganegaraan</label>
                                        <input type="text" class="form-control" name="kewarganegaraan" placeholder="Kewarganegaraan" />
                                    </div>
                                </div>

                                <!-- Anak Ke -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="anak_ke">Anak Ke-</label>
                                        <input type="text" class="form-control" name="anak_ke" placeholder="Anak Ke" />
                                    </div>
                                </div>

                                <!-- Jumlah Saudara Kandung -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="jumlah_saudara_kandung">Jumlah Saudara Kandung</label>
                                        <input type="text" class="form-control" name="jumlah_saudara_kandung" placeholder="Jumlah Saudara Kandung" />
                                    </div>
                                </div>

                                <!-- Jumlah Saudara Tiri -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="jumlah_saudara_tiri">Jumlah Saudara Tiri</label>
                                        <input type="text" class="form-control" name="jumlah_saudara_tiri" placeholder="Jumlah Saudara Tiri" />
                                    </div>
                                </div>

                                <!-- Jumlah Saudara Angkat -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="jumlah_saudara_angkat">Jumlah Saudara Angkat</label>
                                        <input type="text" class="form-control" name="jumlah_saudara_angkat" placeholder="Jumlah Saudara Angkat" />
                                    </div>
                                </div>

                                <!-- Bahasa Sehari-hari -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="bahasa_sehari_hari">Bahasa Sehari-hari</label>
                                        <input type="text" class="form-control" name="bahasa_sehari_hari" placeholder="Bahasa Sehari-hari" />
                                    </div>
                                </div>

                                <!-- Berat Badan -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="berat_badan">Berat Badan</label>
                                        <input type="text" class="form-control" name="berat_badan" placeholder="Berat Badan (kg)" />
                                    </div>
                                </div>

                                <!-- Tinggi Badan -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="tinggi_badan">Tinggi Badan</label>
                                        <input type="text" class="form-control" name="tinggi_badan" placeholder="Tinggi Badan (cm)" />
                                    </div>
                                </div>

                                <!-- Golongan Darah -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="golongan_darah">Golongan Darah</label>
                                        <input type="text" class="form-control" name="golongan_darah" placeholder="Golongan Darah" />
                                    </div>
                                </div>

                                <!-- Riwayat Penyakit -->
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="riwayat_penyakit">Riwayat Penyakit</label>
                                        <textarea name="riwayat_penyakit" class="form-control" rows="3" placeholder="Riwayat Penyakit"></textarea>
                                    </div>
                                </div>

                                <!-- No Handphone -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="no_hp">Nomor Handphone</label>
                                        <input type="text" class="form-control" name="no_hp" placeholder="Nomor Handphone" />
                                    </div>
                                </div>

                                <!-- Nomor HP Ayah -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="no_hp_ayah">Nomor HP Ayah</label>
                                        <input type="text" class="form-control" name="no_hp_ayah" placeholder="Nomor HP Ayah" />
                                    </div>
                                </div>

                                <!-- Nama Ayah -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="nama_ayah">Nama Ayah</label>
                                        <input type="text" class="form-control" name="nama_ayah" placeholder="Nama Ayah" />
                                    </div>
                                </div>

                                <!-- Pendidikan Ayah -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="pendidikan_ayah">Pendidikan Ayah</label>
                                        <input type="text" class="form-control" name="pendidikan_ayah" placeholder="Pendidikan Ayah" />
                                    </div>
                                </div>

                                <!-- Pekerjaan Ayah -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                                        <input type="text" class="form-control" name="pekerjaan_ayah" placeholder="Pekerjaan Ayah" />
                                    </div>
                                </div>

                                <!-- Nama Ibu -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="nama_ibu">Nama Ibu</label>
                                        <input type="text" class="form-control" name="nama_ibu" placeholder="Nama Ibu" />
                                    </div>
                                </div>

                                <!-- Pendidikan Ibu -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="pendidikan_ibu">Pendidikan Ibu</label>
                                        <input type="text" class="form-control" name="pendidikan_ibu" placeholder="Pendidikan Ibu" />
                                    </div>
                                </div>

                                <!-- Pekerjaan Ibu -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
                                        <input type="text" class="form-control" name="pekerjaan_ibu" placeholder="Pekerjaan Ibu" />
                                    </div>
                                </div>

                                <!-- Nomor HP Ibu -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="no_hp_ibu">Nomor HP Ibu</label>
                                        <input type="text" class="form-control" name="no_hp_ibu" placeholder="Nomor HP Ibu" />
                                    </div>
                                </div>

                                <!-- Status Anak (Yatim/Piatu) -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="status_anak">Status Anak</label>
                                        <select name="status_anak" class="form-control">
                                            <option value="">-- Pilih --</option>
                                            <option value="Yatim">Yatim</option>
                                            <option value="Piatu">Piatu</option>
                                            <option value="Yatim Piatu">Yatim Piatu</option>
                                            <option value="Lengkap">Lengkap</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Nama Wali -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="nama_wali">Nama Wali</label>
                                        <input type="text" class="form-control" name="nama_wali" placeholder="Nama Wali" />
                                    </div>
                                </div>

                                <!-- Pendidikan Wali -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="pendidikan_wali">Pendidikan Wali</label>
                                        <input type="text" class="form-control" name="pendidikan_wali" placeholder="Pendidikan Wali" />
                                    </div>
                                </div>

                                <!-- Pekerjaan Wali -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="pekerjaan_wali">Pekerjaan Wali</label>
                                        <input type="text" class="form-control" name="pekerjaan_wali" placeholder="Pekerjaan Wali" />
                                    </div>
                                </div>

                                <!-- Alamat Wali -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="alamat_wali">Alamat Wali</label>
                                        <input type="text" class="form-control" name="alamat_wali" placeholder="Alamat Wali" />
                                    </div>
                                </div>

                                <!-- Penghasilan Wali -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="penghasilan_wali">Penghasilan Wali</label>
                                        <input type="text" class="form-control" name="penghasilan_wali" placeholder="Penghasilan Wali" />
                                    </div>
                                </div>

                                <!-- Sekolah Asal -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="sekolah_asal">Sekolah Asal</label>
                                        <input type="text" class="form-control" name="sekolah_asal" placeholder="Sekolah Asal" />
                                    </div>
                                </div>

                                <!-- Alamat Sekolah Asal -->
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="alamat_sekolah_asal">Alamat Sekolah Asal</label>
                                        <textarea name="alamat_sekolah_asal" class="form-control" rows="3" placeholder="Alamat Sekolah Asal"></textarea>
                                    </div>
                                </div>

                                <!-- Tahun Lulus Sekolah Asal -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="tahun_lulus_sekolah_asal">Tahun Lulus</label>
                                        <input type="text" class="form-control" name="tahun_lulus_sekolah_asal" placeholder="Tahun Lulus Sekolah Asal" />
                                    </div>
                                </div>

                                <!-- Ijazah/Transkrip Nilai -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="ijazah">Ijazah/Transkrip Nilai</label>
                                        <input type="file" class="form-control" name="ijazah" />
                                    </div>
                                </div>

                                <!-- Jarak Rumah ke Sekolah -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="jarak_rumah_sekolah">Jarak Rumah ke Sekolah</label>
                                        <input type="text" class="form-control" name="jarak_rumah_sekolah" placeholder="Jarak Rumah ke Sekolah (km)" />
                                    </div>
                                </div>

                                <!-- Transportasi ke Sekolah -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="transportasi_ke_sekolah">Transportasi ke Sekolah</label>
                                        <select name="transportasi_ke_sekolah" class="form-control">
                                            <option value="">-- Pilih Transportasi --</option>
                                            <option value="Jalan Kaki">Jalan Kaki</option>
                                            <option value="Sepeda">Sepeda</option>
                                            <option value="Motor">Motor</option>
                                            <option value="Mobil">Mobil</option>
                                            <option value="Transportasi Umum">Transportasi Umum</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Jenis Tinggal (Tinggal Bersama Siapa) -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="jenis_tinggal">Jenis Tinggal</label>
                                        <select name="jenis_tinggal" class="form-control">
                                            <option value="">-- Pilih Jenis Tinggal --</option>
                                            <option value="Orang Tua">Orang Tua</option>
                                            <option value="Wali">Wali</option>
                                            <option value="Kost">Kost</option>
                                            <option value="Asrama">Asrama</option>
                                            <option value="Sendiri">Sendiri</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Tempat Tinggal (Sewa/Pribadi) -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="tempat_tinggal">Tempat Tinggal</label>
                                        <select name="tempat_tinggal" class="form-control">
                                            <option value="">-- Pilih Tempat Tinggal --</option>
                                            <option value="Sewa">Sewa</option>
                                            <option value="Pribadi">Pribadi</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Program Pendidikan yang Dituju -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="program_pendidikan">Program Pendidikan yang Dituju</label>
                                        <input type="text" class="form-control" name="program_pendidikan" placeholder="Program Pendidikan yang Dituju" />
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" name="email" placeholder="Email" />
                                    </div>
                                </div>

                                <!-- Petugas Pendaftaran -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="petugas_pendaftaran">Petugas Pendaftaran</label>
                                        <input type="text" class="form-control" name="petugas_pendaftaran" placeholder="Petugas Pendaftaran" />
                                    </div>
                                </div>

                                <!-- Upload Foto -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="foto">Upload Foto</label>
                                        <input type="file" class="form-control" name="foto" />
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
