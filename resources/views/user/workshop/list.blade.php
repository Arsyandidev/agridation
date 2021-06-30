@extends('user.layouts.app')

@section('title')
  List Workshopku
@endsection

@section('content')
  <div class="card">
    <div class="card-header">
      <h6 class="m-0 font-weight-bold text-primary">
        List Workshopku
      </h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Tema Workshop</th>
              <th scope="col">Deskripsi</th>
              <th scope="col">Harga</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td scope="row">Unggul dengan Budidaya Tanaman
                Organik Microgreens</td>
              <td>Kegiatan ini akan dilakukan secara daring, dengan metode
                                konferensi video, diadakan menjadi dua sesi yang berbeda topik
                                pembahasan. Webinarditargetkandapatmeningkatkanpengetahuan
                                dan kesadaran milenial terhadap pentingnya pertanian untuk
                                mencapai Indonesia emas. Sedangkan workshop diharapkan
                                menjadi forum yang dapat meningkatkan hard skill dan soft skill
                                pada bidang pertanian.</td>
              <td>Rp. 30.000</td>
              <td><a href="{{ route('user.detail.workshop') }}" class="btn btn-primary">Detail</a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
