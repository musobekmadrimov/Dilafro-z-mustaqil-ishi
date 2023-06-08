@extends('client.layouts.main')
@section('title')
    Xizmatlar
@endsection

@section('content')
    <div class="container" style="padding-bottom: 7rem">
        <div class="row py-5">
            <h2 class="display-3 text-danger text-center mt-3" data-aos="fade-down" data-aos-delay="50"
                data-aos-duration="500">Xizmatlar</h2>
            @if ($message = Session::get('error'))
                <div class="alert alert-error">
                    <p>{{ $message }} &#9989;</p>
                </div>
            @endif
            <hr data-aos="fade-down" data-aos-delay="250" data-aos-duration="500">
            <form action="{{ route('filterServices') }}" method="POST" data-aos="fade-down" data-aos-delay="450"
                data-aos-duration="500">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select" id="category" name="category">
                                        <option selected></option>
                                        @foreach ($servicesCategories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    <label for="category">Kategoriya</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary px-5">Saralash</button>
                    </div>
                </div>
            </form>
            @foreach ($services as $service)
                <div class="col-md-3 mt-5">
                    <div class="card card-custom bg-white border-white border-0" data-aos="fade-right"
                        data-aos-delay="500" data-aos-duration="500">
                        <div class="card-custom-img"
                            style="background-image: url(http://res.cloudinary.com/d3/image/upload/c_scale,q_auto:good,w_1110/trianglify-v1-cs85g_cc5d2i.jpg);">
                        </div>
                        <div class="card-custom-avatar">
                            <img class="img-fluid" src="{{ asset('storage/images/services/' . $service->image) }}"
                                alt="{{ $service->name }}" />
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">{{ $service->name }}</h4>
                            <p class="card-text">{{ $service->description }}</p>
                        </div>
                        <div class="card-footer d-flex justify-content-end"
                            style="background: inherit; border-color: inherit;">
                            <a href="#" class="btn btn-danger rounded-circle" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop{{ $service->id }}"><i class="fas fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop{{ $service->id }}" data-bs-backdrop="static"
                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">{{ $service->name }} xizmati haqida
                                    batafsil ma'lumot</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="storage/images/services/{{ $service->image }}"
                                            alt="{{ $service->image }}" class="w-100">
                                    </div>
                                    <div class="col-md-6">
                                        <p><strong>Nomi:</strong> {{ $service->name }}</p>
                                        <p><strong>Narxi:</strong> {{ number_format((int)$service->price, 0, '', ' ') }} so'm</p>
                                        <p><strong>Tannarxi:</strong> {{ number_format((int)$service->cost_price, 0, '', ' ') }} so'm</p>
                                        <p><strong>Xizmat samaradorlik ko'rsatkichi:</strong> {{ $service->efficiency }}
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
            {{ $services->links() }}
            </div>
        </div>
    </div>
@endsection
