@extends('user.layouts.app')
@section('title')
  Detail Webinar
@endsection
@section('content')
  <div class="card">
    <div class="card-header">
      <h6 class="m-0 font-weight-bold text-primary">
        Karya Tulis Ilmiah
      </h6>
    </div>
    <div class="card-body">
    <p>Merupakan lomba karya tulis ilmiah tentang pemikiran terbaharukan dan cerdas seputar pertanian dalam menghadapi krisis dengan inovasi terbaru pada bidang pertanian berbentuk karya tulis yang diperuntukkan bagi Masyarakat Umum dengan umur 17-25 tahun. Kegiatan karya
                        tulis berupa perlombaan yang bersifat kelompok dengan pilihan 4 topik, yaitu “Teknologi Pertanian Berbasis Industri 4.0”, “Inovasi Sistem Pertanian dalam Mewujudkan Indonesia Emas 
                        2045”, “Pemanfaatan Limbah Hasil Pertanian Menuju Indonesia Emas 2045”, dan “Pengolahan Industri Pertanian 
                        untuk Menaikkan Sektor Perekonomian”.</p>
    </div>
  </div>
  <div class="card mt-4">
    <div class="card-header">
      <ul class="nav nav-pills custom-pills" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
            aria-selected="true">Informasi Lomba</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="absent-tab" data-toggle="tab" href="#absen" role="tab" aria-controls="absen"
            aria-selected="false">Absensi</a>
        </li>
      </ul>
    </div>
    <div class="card-body">
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
          <p>Timeline Lomba</p>
          <ul>
            <li>Pendaftaran : 15 Juli - 31 Agustus 2021</li>
            <li>Pengumpulan Karya : 30 Juli - 15 September 2021</li>
            <li>Pengumuman : 26 September 2021</li>
          </ul>
          <p>Link grup lomba :<a href="#">link channel</a></p>
        </div>
        <div class="tab-pane fade" id="absen" role="tabpanel" aria-labelledby="absen-tab">
          <form role="form" action="#" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="exampleInputEmail1">Absensi</label>
            </div>
            <button type="submit" class="btn btn-primary">Absen</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
  <script>
    $('#myTab a').on('click', function(event) {
      event.preventDefault()
      $(this).tab('show')
    })
  </script>
@endpush
