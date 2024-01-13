@extends('pelanggan.layout.index')

@section('content')
    <div class="row mt-5 align-items-center">
        <div class="col-md-6">
            <div class="content-text" style="margin-top: 15%;">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi accusantium illum quas nesciunt! Id maxime in
                labore impedit eius repudiandae voluptatibus ducimus facilis amet earum dolorem veritatis, facere quibusdam
                a
                commodi placeat quae voluptatem. Similique, perferendis enim quisquam possimus eum cupiditate, consequuntur
                quia
                expedita veritatis repellat suscipit atque necessitatibus pariatur. Temporibus earum reprehenderit dolores
                aliquam reiciendis porro totam, repellendus eaque error, nulla similique voluptate eveniet iusto nam in
                alias
                quia. Ducimus esse eum soluta eos fugit id natus quisquam quidem velit similique magni, molestias ipsum,
                quasi,
                voluptatum at ullam exercitationem dicta cum. Repellendus sed a quaerat illum, adipisci eum fuga fugit,
                neque,
                doloremque vitae accusantium minima velit odio obcaecati eos numquam! Suscipit deserunt repellat repellendus
                ipsum sed necessitatibus quibusdam beatae.
            </div>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('assets/images/landscape-5172224_640-removebg-preview.png') }}" style="width: 100%;"
                alt="">
        </div>
    </div>
    <div class="d-flex justify-content-lg-between mt-5">
        <div class="d-flex align-items-lg-center gap-4"><i class="fa fa-users fa-2x"></i>
            <p class="mt-0 fs-5">+300 Pelanggan</p>
        </div>
        <div class="d-flex align-items-lg-center gap-4"><i class="fa fa-home fa-2x"></i>
            <p class="mt-0 fs-5">+300 Seller</p>
        </div>
        <div class="d-flex align-items-lg-center gap-4"><i class="fa fa-shirt fa-2x"></i>
            <p class="mt-0 fs-5">+300 Product</p>
        </div>
    </div>

    <h4 class="text-center mt-md-5 mb-md-2"> contact</h4>
    <hr class="mb-5">
    <div class="row mb-md-5">
        <div class="col-md-5">
            <div class="bg-secondary" style="width: 100%; height:50vh; border-radius:10px;"></div>
        </div>
        <div class="col-md-7">
            <div class="card">
                <div class="card-header text-center">
                    <h4>Kritik Dan Saran</h4>
                </div>
                <div class="card-body">
                    <p class="p-0 mb-5 text-lg-center"> Masukan Kritik Dan Saran Anda Pada Aplikasi Kami</p>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" readonly class="form-control-plaintext" id="email"
                                value="" placeholder="Masukan Email Anda">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="pesan" class="col-sm-2 col-form-label">Pesan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="pesan" placeholder="Masukan Pesan Anda">
                        </div>
                    </div>
                    <button class="btn btn-primary mt-4 w-100 mb-4">Kirim Pesan Anda</button>
                </div>
            </div>
        </div>
    </div>
@endsection
