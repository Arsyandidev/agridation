@extends('user.layouts.app')
@section('title')
  Detail Workshop
@endsection
@section('content')
  <div class="card">
    <div class="card-header">
      <h6 class="m-0 font-weight-bold text-primary">
        Workshop
      </h6>
    </div>
    <div class="card-body">
    <p>Kegiatan ini akan dilakukan secara daring, dengan metode
      konferensi video, diadakan menjadi dua sesi yang berbeda topik
      pembahasan. Workshop ditargetkan dapat meningkatkan pengetahuan
      dan kesadaran milenial terhadap pentingnya pertanian untuk
      mencapai Indonesia emas. Sedangkan workshop diharapkan
      menjadi forum yang dapat meningkatkan hard skill dan soft skill
      pada bidang pertanian.</p>
    </div>
  </div>
  <div class="card mt-4">
    <div class="card-header">
      <ul class="nav nav-pills custom-pills" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
            aria-selected="true">Informasi Workshop</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
            aria-selected="false">Pengumpulan Karya</a>
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
          <p>Link grup workshop :<a href="#">link channel</a></p>
          <p>Link zoom :<a href="#">link channel</a></p>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
          <form role="form" action="#" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="exampleInputEmail1">Link Karya</label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="nama_lengkap"
                placeholder="Masukkan Link">
            </div>
          </form>
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