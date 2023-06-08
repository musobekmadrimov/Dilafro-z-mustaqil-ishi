@extends('admin.layouts.main')
@section('title')
    Yangi issiqxona qo'shish
@endsection
@section('content')
    <div class="row" style="padding-left: 15px">
        <div class="col-md-12">
            <h1 class="display-4 text-center" data-aos="fade-down" data-aos-delay="50" data-aos-duration="500">Yangi issiqxona
                qo'shish</h1>
            <div class="pull-left mb-3">
                <a class="btn btn-danger" href="{{ route('greenhouses.index') }}">&larr; Orqaga</a>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger my-3">
                    <strong>Kechirasiz!</strong> Siz kiritgan ma'lumotlar bilan quyidagi muammolar yuzaga keldi:<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-0" data-aos="fade-down" data-aos-delay="350" data-aos-duration="500">
                        <div class="card-body">
                            <form action="{{ route('greenhouses.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 d-flex align-items-end">
                                        <div class="input-material-group mb-3 w-100">
                                            <input type="text" id="name" name="name" class="input-material">
                                            <label class="label-material" for="name">Issiqxona nomi</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-flex align-items-end">
                                        <div class="input-material-group mb-3 w-100">
                                            <input type="number" id="price" name="price" class="input-material">
                                            <label class="label-material" for="name">Issiqxona narxi</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6 d-flex align-items-end">
                                        <div class="input-material-group mb-3 w-100">
                                            <input type="file" id="image" name="image" class="input-material pb-0"
                                                onchange="previewFile(this)">
                                            <label class="label-material top-0" for="image">Issiqxona rasmi</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-material-group mb-3">
                                            <label class="label-material top-0" for="description">Qisqacha ma'lumot</label>
                                            <textarea id="description" name="description" class="input-material pt-3" style="outline: none" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row h-100 d-flex justify-content-between pb-3">
                                            <div class="col-md-8">
                                                <div
                                                    class="form-group d-flex align-align-items-center justify-content-center">
                                                    <img alt="Profile Photo" id="previewImg"
                                                        style="max-width: 140px; height:auto; margin: 20px auto 0 auto; border-radius: 10%; display: none">
                                                </div>
                                            </div>
                                            <div class="col-md-4 d-flex align-items-end">
                                                <button type="submit" class="btn btn-block btn-primary w-100">Qo'shish
                                                    &rarr;</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    <script>
        function previewFile(input) {
            // const removeElements = document.querySelectorAll('.forRemove');
            $('#previewImg').css('display', 'block');
            let file = $('input[type=file]').get(0).files[0];
            if (file) {
                let reader = new FileReader();
                reader.onload = function() {
                    $('#previewImg').attr('src', reader.result);
                }
                reader.readAsDataURL(file);
            }
        }
    </script>
@endsection
