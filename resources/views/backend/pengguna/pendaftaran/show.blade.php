@extends('layouts.backend.app')

@section('title')
    Pendaftaran PPDB
@endsection

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            <div class="alert-body">
                <strong>{{ $message }}</strong>
                <button type="button" class="close" data-dismiss="alert">×</button>
            </div>
        </div>
    @elseif($message = Session::get('error'))
        <div class="alert alert-danger" role="alert">
            <div class="alert-body">
                <strong>{{ $message }}</strong>
                <button type="button" class="close" data-dismiss="alert">×</button>
            </div>
        </div>
    @endif
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
          <div class="row">
            <!-- User Sidebar -->
            <div class="col-xl-4 col-lg-5 order-1 order-md-0">
              <!-- User Card -->
              <div class="card mb-6">
                <div class="card-body pt-12">
                  <div class="user-avatar-section">
                    <div class="d-flex align-items-center flex-column">
                        {{-- foto calon siswa --}}
                      <img
                        class="img-fluid rounded mb-4"
                        src="{{asset('Assets/Backend/images/user.png')}}"
                        height="120"
                        width="120"
                        alt="User avatar" />
                      <div class="user-info text-center">
                        {{-- nama lengkap --}}
                        <h5>Lorem, ipsum.</h5>
                        {{-- jenis kelamin --}}
                        <span class="badge bg-label-secondary">Lorem, ipsum.</span>
                      </div>
                    </div>
                  </div>
                  <h5 class="pb-2 border-bottom mt-2">Data Diri</h5>
                  <div class="info-container">
                    <ul class="list-unstyled mb-6">
                      <li class="mb-2">
                        <span class="h6">Nama Lengkap:</span>
                        <span>Lorem, ipsum.</span>
                      </li>
                      <li class="mb-2">
                        <span class="h6">Nama Panggilan:</span>
                        <span>Lorem, ipsum.</span>
                      </li>
                      <li class="mb-2">
                        <span class="h6">Jenis Kelamin:</span>
                        <span>Lorem, ipsum.</span>
                      </li>
                      <li class="mb-2">
                        <span class="h6">Agama:</span>
                        <span>Lorem, ipsum.</span>
                      </li>
                      <li class="mb-2">
                        <span class="h6">Tempat Lahir:</span>
                        <span>Lorem, ipsum.</span>
                      </li>
                      <li class="mb-2">
                        <span class="h6">Tanggal Lahir:</span>
                        <span>Lorem, ipsum.</span>
                      </li>
                      <li class="mb-2">
                        <span class="h6">No HP:</span>
                        <span>+62 123</span>
                      </li>
                      <li class="mb-2">
                        <span class="h6">Email:</span>
                        <span>@example.com</span>
                      </li>
                    </ul>
                    <div class="d-flex justify-content-center">
                      <a href="javascript:;" class="btn btn-label-danger suspend-user">Delete</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /User Card -->
            </div>
            <!--/ User Sidebar -->

            <!-- User Content -->
            <div class="col-xl-8 col-lg-7 order-0 order-md-1">


              <div class="card card-action mb-4">
                <div class="card-header align-items-center flex-wrap gap-2">
                  <h5 class="card-action-title mb-0">Detail</h5>
                  <div class="card-action-element">
                  </div>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-xl-6 col-12">
                      <dl class="row mb-0 gx-2">
                        <dt class="col-sm-4 mb-sm-2 text-nowrap fw-medium text-heading">NISN</dt>
                        <dd class="col-sm-8">12345</dd>

                        <dt class="col-sm-4 mb-sm-2 text-nowrap fw-medium text-heading">NIK</dt>
                        <dd class="col-sm-8">12345</dd>

                      </dl>
                    </div>
                    <div class="col-xl-6 col-12">
                      <dl class="row mb-0 gx-2">
                        <dt class="col-sm-4 mb-sm-2 text-nowrap fw-medium text-heading">No KK:</dt>
                        <dd class="col-sm-8">12345</dd>

                        <dt class="col-sm-4 mb-sm-2 text-nowrap fw-medium text-heading">No Akte Kelahiran:</dt>
                        <dd class="col-sm-8">12345</dd>

                      </dl>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card card-action mb-4">
                <div class="card-header align-items-center flex-wrap gap-2">
                  <h5 class="card-action-title mb-0">File</h5>
                  <div class="card-action-element">
                  </div>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-xl-6 col-12">
                      <dl class="row mb-0 gx-2">
                        <dt class="col-sm-4 mb-sm-2 text-nowrap fw-medium text-heading">Foto Akte Kelahiran</dt>
                        <dd class="col-sm-12">
                            <a href="javascript:;" class="btn btn-label-warning suspend-user">Detail</a>
                        </dd>

                      </dl>
                    </div>
                    <div class="col-xl-6 col-12">
                      <dl class="row mb-0 gx-2">
                        <dt class="col-sm-4 mb-sm-2 text-nowrap fw-medium text-heading">Foto Kartu Keluarga:</dt>
                        <dd class="col-sm-12">
                            <a href="javascript:;" class="btn btn-label-warning suspend-user">Detail</a>
                        </dd>

                      </dl>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card card-action mb-4">
                <div class="card-header align-items-center flex-wrap gap-2">
                  <h5 class="card-action-title mb-0">Alamat</h5>
                  <div class="card-action-element">
                  </div>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-xl-6 col-12">
                      <dl class="row mb-0 gx-2">
                        <dt class="col-sm-4 mb-sm-2 text-nowrap fw-medium text-heading">Alamat Lengkap:</dt>
                        <dd class="col-sm-8">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, velit!</dd>

                        <dt class="col-sm-4 mb-sm-2 text-nowrap fw-medium text-heading">RT:</dt>
                        <dd class="col-sm-8">1</dd>

                        <dt class="col-sm-4 mb-sm-2 text-nowrap fw-medium text-heading">RW:</dt>
                        <dd class="col-sm-8">3</dd>

                      </dl>
                    </div>
                    <div class="col-xl-6 col-12">
                      <dl class="row mb-0 gx-2">
                        <dt class="col-sm-4 mb-sm-2 text-nowrap fw-medium text-heading">Kewanegaraan:</dt>
                        <dd class="col-sm-8">Lorem, ipsum.</dd>

                        <dt class="col-sm-4 mb-sm-2 text-nowrap fw-medium text-heading">Desa / kelurahan:</dt>
                        <dd class="col-sm-8">Lorem, ipsum.</dd>

                        <dt class="col-sm-4 mb-sm-2 text-nowrap fw-medium text-heading">Kecamatan:</dt>
                        <dd class="col-sm-8">Lorem, ipsum.</dd>

                        <dt class="col-sm-4 mb-sm-2 text-nowrap fw-medium text-heading">Kota / Kabupaten:</dt>
                        <dd class="col-sm-8">Lorem, ipsum.</dd>

                      </dl>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card card-action mb-4">
                <div class="card-header align-items-center flex-wrap gap-2">
                  <h5 class="card-action-title mb-0">Detail </h5>
                  <div class="card-action-element">
                  </div>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-xl-6 col-12">
                      <dl class="row mb-0 gx-2">
                        <dt class="col-sm-4 mb-sm-2 text-nowrap fw-medium text-heading">Anak Ke:</dt>
                        <dd class="col-sm-8">1</dd>

                        <dt class="col-sm-4 mb-sm-2 text-wrap fw-medium text-heading">Jumlah Saudara Kandung:</dt>
                        <dd class="col-sm-8">2</dd>

                      </dl>
                    </div>
                    <div class="col-xl-6 col-12">
                      <dl class="row mb-0 gx-2">
                        <dt class="col-sm-4 mb-sm-2 text-wrap fw-medium text-heading">Jumlah Saudara Tiri:</dt>
                        <dd class="col-sm-8">3</dd>

                        <dt class="col-sm-4 mb-sm-2 text-wrap fw-medium text-heading">Jumlah Saudara Angkat:</dt>
                        <dd class="col-sm-8">4</dd>

                      </dl>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card card-action mb-4">
                <div class="card-header align-items-center flex-wrap gap-2">
                  <h5 class="card-action-title mb-0">Data Diri </h5>
                  <div class="card-action-element">
                  </div>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-xl-6 col-12">
                      <dl class="row mb-0 gx-2">
                        <dt class="col-sm-4 mb-sm-2 text-wrap fw-medium text-heading">Bahasa Sehari-Hari:</dt>
                        <dd class="col-sm-8">Lorem, ipsum.</dd>

                        <dt class="col-sm-4 mb-sm-2 text-wrap fw-medium text-heading">Berat Badan:</dt>
                        <dd class="col-sm-8">20kg</dd>

                        <dt class="col-sm-4 mb-sm-2 text-wrap fw-medium text-heading">Riwayat Penyakit:</dt>
                        <dd class="col-sm-8">Lorem, ipsum.</dd>

                      </dl>
                    </div>
                    <div class="col-xl-6 col-12">
                      <dl class="row mb-0 gx-2">
                        <dt class="col-sm-4 mb-sm-2 text-wrap fw-medium text-heading">Tinggi Badan:</dt>
                        <dd class="col-sm-8">150cm</dd>

                        <dt class="col-sm-4 mb-sm-2 text-wrap fw-medium text-heading">Golongan Darah:</dt>
                        <dd class="col-sm-8">B</dd>

                      </dl>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card card-action mb-4">
                <div class="card-header align-items-center flex-wrap gap-2">
                  <h5 class="card-action-title mb-0">Data Asal Sekolah </h5>
                  <div class="card-action-element">
                  </div>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-xl-6 col-12">
                      <dl class="row mb-0 gx-2">
                        <dt class="col-sm-4 mb-sm-2 text-wrap fw-medium text-heading">Sekolah Asal:</dt>
                        <dd class="col-sm-8">Lorem, ipsum.</dd>

                        <dt class="col-sm-4 mb-sm-2 text-wrap fw-medium text-heading">Alamat Sekolah Asal:</dt>
                        <dd class="col-sm-8">Lorem, ipsum.</dd>

                        <dt class="col-sm-4 mb-sm-2 text-wrap fw-medium text-heading">Tahun Lulus:</dt>
                        <dd class="col-sm-8">Lorem, ipsum.</dd>

                      </dl>
                    </div>
                    <div class="col-xl-6 col-12">
                      <dl class="row mb-0 gx-2">
                        <dt class="col-sm-4 mb-sm-2 text-wrap fw-medium text-heading">Jarak Rumah Ke Sekolah:</dt>
                        <dd class="col-sm-8">150cm</dd>

                        <dt class="col-sm-4 mb-sm-2 text-wrap fw-medium text-heading">Transportasi Ke Sekolah:</dt>
                        <dd class="col-sm-8">B</dd>

                      </dl>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card card-action mb-4">
                <div class="card-header align-items-center flex-wrap gap-2">
                  <h5 class="card-action-title mb-0">Detail </h5>
                  <div class="card-action-element">
                  </div>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-xl-6 col-12">
                      <dl class="row mb-0 gx-2">
                        <dt class="col-sm-4 mb-sm-2 text-wrap fw-medium text-heading">Jenis Tinggal:</dt>
                        <dd class="col-sm-8">Lorem, ipsum.</dd>

                        <dt class="col-sm-4 mb-sm-2 text-wrap fw-medium text-heading">Tempat Tinggal:</dt>
                        <dd class="col-sm-8">Lorem, ipsum.</dd>

                      </dl>
                    </div>
                    <div class="col-xl-6 col-12">
                      <dl class="row mb-0 gx-2">
                        <dt class="col-sm-4 mb-sm-2 text-wrap fw-medium text-heading">Program Pendidikan Yang Dituju:</dt>
                        <dd class="col-sm-8">Lorem, ipsum.</dd>

                        <dt class="col-sm-4 mb-sm-2 text-wrap fw-medium text-heading">Petugas Pendaftaran:</dt>
                        <dd class="col-sm-8">Lorem, ipsum.</dd>

                      </dl>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card card-action mb-4">
                <div class="card-header align-items-center flex-wrap gap-2">
                  <h5 class="card-action-title mb-0">Data Orang Tua </h5>
                  <div class="card-action-element">
                  </div>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-xl-6 col-12">
                      <dl class="row mb-0 gx-2">
                        <dt class="col-sm-4 mb-sm-2 text-wrap fw-medium text-heading">Nama Ayah:</dt>
                        <dd class="col-sm-8">Lorem, ipsum.</dd>

                        <dt class="col-sm-4 mb-sm-2 text-wrap fw-medium text-heading">No HP Ayah:</dt>
                        <dd class="col-sm-8">+62 123</dd>

                        <dt class="col-sm-4 mb-sm-2 text-wrap fw-medium text-heading">Pendidikan Ayah:</dt>
                        <dd class="col-sm-8">Lorem, ipsum.</dd>

                        <dt class="col-sm-4 mb-sm-2 text-wrap fw-medium text-heading">Pekerjaan Ayah:</dt>
                        <dd class="col-sm-8">Lorem, ipsum.</dd>

                        <dt class="col-sm-4 mb-sm-2 text-wrap fw-medium text-heading">Nama Wali:</dt>
                        <dd class="col-sm-8">Lorem, ipsum.</dd>

                        <dt class="col-sm-4 mb-sm-2 text-wrap fw-medium text-heading">No HP Wali:</dt>
                        <dd class="col-sm-8">+62 123</dd>

                        <dt class="col-sm-4 mb-sm-2 text-wrap fw-medium text-heading">Pendidikan Wali:</dt>
                        <dd class="col-sm-8">Lorem, ipsum.</dd>

                        <dt class="col-sm-4 mb-sm-2 text-wrap fw-medium text-heading">Pekerjaan Wali:</dt>
                        <dd class="col-sm-8">Lorem, ipsum.</dd>

                        <dt class="col-sm-4 mb-sm-2 text-wrap fw-medium text-heading">Penghasilan Wali:</dt>
                        <dd class="col-sm-8">Lorem, ipsum.</dd>

                        <dt class="col-sm-4 mb-sm-2 text-wrap fw-medium text-heading">Status Anak:</dt>
                        <dd class="col-sm-8">Lorem, ipsum.</dd>

                      </dl>
                    </div>
                    <div class="col-xl-6 col-12">
                      <dl class="row mb-0 gx-2">
                        <dt class="col-sm-4 mb-sm-2 text-wrap fw-medium text-heading">Nama Ibu:</dt>
                        <dd class="col-sm-8">Lorem, ipsum.</dd>

                        <dt class="col-sm-4 mb-sm-2 text-wrap fw-medium text-heading">No HP Ibu:</dt>
                        <dd class="col-sm-8">+62 123</dd>

                        <dt class="col-sm-4 mb-sm-2 text-wrap fw-medium text-heading">Pendidikan Ibu:</dt>
                        <dd class="col-sm-8">Lorem, ipsum.</dd>

                        <dt class="col-sm-4 mb-sm-2 text-wrap fw-medium text-heading">Pekerjaan Ibu:</dt>
                        <dd class="col-sm-8">Lorem, ipsum.</dd>


                      </dl>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <!--/ User Content -->
          </div>
        </div>
        <!-- / Content -->

        <div class="content-backdrop fade"></div>
      </div>
      <!-- Content wrapper -->
@endsection
