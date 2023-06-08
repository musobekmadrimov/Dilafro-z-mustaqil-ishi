@extends('admin.layouts.main')
@section('title')
    {{ $greenhouse->name }}
@endsection
@section('content')
    <div class="row" style="padding-left: 15px">
        <div class="col-md-12">
            <h1 class="display-4 text-center" data-aos="fade-down" data-aos-delay="50" data-aos-duration="500">
                {{ $greenhouse->name }}</h1>
            <div class="card mb-0" data-aos="fade-down" data-aos-delay="250" data-aos-duration="500">
                <div class="card-header d-flex justify-content-between">
                    <h3 class="h4 mb-0">Issiqxona</h3>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-5" data-aos="fade-right" data-aos-delay="650" data-aos-duration="500">
                            <img class="w-100 h-auto" src="{{ asset('storage/images/greenhouses/' . $greenhouse->image) }}"
                                alt="{{ $greenhouse->name }} tovari sur'ati">
                        </div>
                        <div class="col-md-7" data-aos="fade-right" data-aos-delay="950" data-aos-duration="500">
                            <p><strong>Nomi:</strong> {{ $greenhouse->name }}</p>
                            <p><strong>Narxi:</strong> {{ number_format((int) $greenhouse->price, 0, '', ' ') }} so'm</p>
                            <p><strong>Qisqacha ma'lumot:</strong> {{ $greenhouse->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
