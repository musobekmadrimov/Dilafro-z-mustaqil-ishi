@extends('admin.layouts.main')
@section('title')
    Issiqxonalar ro'yxati
@endsection
@section('content')
    <div class="row" style="padding-left: 15px">
        <div class="col-md-12">
            <h1 class="display-4 text-center" data-aos="fade-down" data-aos-delay="50" data-aos-duration="500">Issiqxonalar</h1>
            <div class="card mb-0" data-aos="fade-down" data-aos-delay="300" data-aos-duration="500">
                <div class="card-header d-flex justify-content-between">
                    <h3 class="h4 mb-0">Issiqxonalar</h3>
                    <div class="pull-right">
                        <a class="btn btn-success float-right" href="{{ route('greenhouses.create') }}"> Yangi issiqxona
                            qo'shish
                            &rarr;</a>
                    </div>
                </div>

                <div class="card-body">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }} &#9989;</p>
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table mb-0 table-striped mb-3">
                            <thead>
                                <tr>
                                    <th>№</th>
                                    <th>Nomi</th>
                                    <th>Narxi</th>
                                    <th>Izoxi</th>
                                    <th>Rasmi</th>
                                    <th>Amallar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($greenhouses as $greenhouse)
                                    <tr>
                                        <th scope="row">
                                            {{ $greenhouses->currentPage() * $greenhouses->perPage() + $loop->iteration - $greenhouses->perPage() }}
                                        </th>
                                        <td>{{ $greenhouse->name }}</td>
                                        <td>{{ number_format((int) $greenhouse->price, 0, '', ' ') }} so'm</td>
                                        <td>{{ $greenhouse->description }}</td>
                                        <td><img src="{{ asset('storage/images/greenhouses/' . $greenhouse->image) }}"
                                                alt="{{ $greenhouse->name }}"
                                                style="width: 100px; height: 100px; border-radius: 10%" /></td>

                                        <td>
                                            <form action="{{ route('greenhouses.destroy', $greenhouse->id) }}"
                                                method="POST" id="deleteForm">
                                                <a class="btn btn-outline-primary btn-sm"
                                                    href="{{ route('greenhouses.show', $greenhouse->id) }}"><i
                                                        class="fa fa-eye"></i></a>
                                                <a class="btn btn-outline-success btn-sm"
                                                    href="{{ route('greenhouses.edit', $greenhouse->id) }}"><i
                                                        class="fa fa-edit"></i></a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="btn btn-outline-danger btn-sm"
                                                    onclick='deleteProduct("{{ $greenhouse->name }}")'><i
                                                        class="fa fa-trash"></i></button>

                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        {{ $greenhouses->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function deleteProduct(name) {
            // event.preventDefault();
            let form = document.getElementById('deleteForm');

            swal({
                    title: `${name} issiqxonasini rostdan ham o'chirishni xohlaysizmi ?`,
                    text: "Mahsulot o'chirilgach, siz uni orqaga qaytara olmaysiz!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                        swal(`${name} issiqxonasi o'chirildi!`, {
                            icon: "success",
                        });
                    } else {
                        swal(`${name} issiqxonasi o'chirilmadi!`);
                    }
                });
        }
    </script>
@endsection
