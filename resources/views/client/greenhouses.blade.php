@extends('client.layouts.main')
@section('title')
    Issiqxonalar
@endsection

@section('content')
    <div class="container" style="padding-bottom: 7rem!important">
        <div class="row py-5">
            <h2 class="display-3 text-danger text-center mt-3" data-aos="fade-down" data-aos-delay="50"
                data-aos-duration="500">Issiqxonalar</h2>

            @if ($message = Session::get('error'))
                <div class="alert alert-error">
                    <p>{{ $message }} &#9989;</p>
                </div>
            @endif

            <hr data-aos="fade-down" data-aos-delay="250" data-aos-duration="500">
            
            @foreach ($greenhouses as $greenhouse)
                <div class="col-md-3 mt-5">
                    <div class="card card-custom bg-white border-white border-0" data-aos="fade-right"
                        data-aos-delay="500" data-aos-duration="500">
                        <div class="card-custom-img"
                            style="background-image: url(http://res.cloudinary.com/d3/image/upload/c_scale,q_auto:good,w_1110/trianglify-v1-cs85g_cc5d2i.jpg);">
                        </div>
                        <div class="card-custom-avatar">
                            <img class="img-fluid" src="{{ asset('storage/images/greenhouses/' . $greenhouse->image) }}"
                                alt="{{ $greenhouse->name }}" />
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">{{ $greenhouse->name }}</h4>
                            <p class="card-text">{{ $greenhouse->description }}</p>
                        </div>
                        <div class="card-footer d-flex justify-content-end"
                            style="background: inherit; border-color: inherit;">
                            <a href="#" class="btn btn-danger rounded-circle" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop{{ $greenhouse->id }}"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop{{ $greenhouse->id }}" data-bs-backdrop="static"
                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">{{ $greenhouse->name }} issiqxonasi haqida
                                    batafsil ma'lumot</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="storage/images/greenhouses/{{ $greenhouse->image }}" alt="{{ $greenhouse->image }}"
                                            class="w-100">
                                    </div>
                                    <div class="col-md-6">
                                        <p><strong>Nomi:</strong> {{ $greenhouse->name }}</p>
                                        <p><strong>Narxi:</strong> {{ number_format((int)$greenhouse->price, 0, '', ' ') }} so'm</p>
                                        <p><strong>Qisqacha ma'lumot:</strong> {{ $greenhouse->description }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Yopish
                                    &times;</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-md-12">
            {{ $greenhouses->links() }}
                
            </div>
        </div>
        
    </div>
@endsection
