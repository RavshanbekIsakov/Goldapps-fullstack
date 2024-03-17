@extends('admin.header_footer')

@section('images') active @endsection


@section('section')
    <main class="content teachers">
        <div class="container-fluid p-0">
            <div class="col-12 col-xl-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h5 class="card-title mb-0">Maqolalar bazasi</h5>
                        <button class="btn btn-primary add"><i class="align-middle" data-feather="user-plus"></i>
                            Qo'shish
                        </button>
                    </div>
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>Link</th>
                            <th>Rasm</th>
                            <th>O'chirish</th>
                            <th>Copy</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($news as $id => $item)
                            <tr>
                                <td>{{ asset('img/news/'.$item->name) }}</td>
                                <td class="w-25"><img src="../img/news/{{ $item->name }}" alt="" class="img-fluid"></td>

                                <td>
                                    <form action="{{ route('admin.delete.images') }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <input type="hidden" name="id" value="{{ $item->id }}">
                                        <button type="submit"
                                                class="btn btn-danger text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-trash-2 align-middle">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                <line x1="10" y1="11" x2="10" y2="17"></line>
                                                <line x1="14" y1="11" x2="14" y2="17"></line>
                                            </svg>
                                        </button>
                                    </form>
                                </td>
                                <td><button class="btn btn-warning text-dark copyButton" link="{{ asset('img/news/'.$item->name) }}">Copy</button> </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <main class="content forma" style="padding-bottom: 0; display: none">
        <div class="container-fluid p-0">
            <div class="col-md-8 col-xl-9">
                <div class="">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Yangi maqola qo'shish</h5>
                        </div>
                        <div class="card-body h-100">
                            <form action="{{ route('admin.add.image') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Rasm <span class="text-danger">*</span></label>
                                    <input name="image" required type="file" class="form-control" placeholder="" accept="image/*">
                                </div>
                                <div class=" text-end">
                                    <button type="button" class="btn btn-danger cancel">Bekor qilish</button>
                                    <input type="submit" class="btn btn-success" value="Qo'shish">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection


@section('js')
    <script>
        $(".add").on("click", function () {
            $('.forma').show();
            $('.teachers').hide();
        });

        $(".copyButton").on("click", function () {
            let btn = $(this);

            // Get the value of the 'link' attribute associated with the button
            let link = btn.attr('link');

            navigator.clipboard.writeText(link).then(function() {
                console.log("Copied to clipboard: " + link);
                // You can also provide feedback to the user here if needed
                alert("URL copied to clipboard: " + link);
            }, function(err) {
                console.error("Unable to copy: " + err);
            });
        });

        $(".cancel").on("click", function () {
            event.stopPropagation();
            $('.forma').hide();
            $('.teachers').show();
        });

        @if($errors->any())
        const notyf = new Notyf();

        @foreach ($errors->all() as $error)
        notyf.error({
            message: '{{ $error }}',
            duration: 5000,
            dismissible: true,
            position: {
                x: 'center',
                y: 'top'
            },
        });
        @endforeach

        @endif

        document.getElementsByClassName("copyButton").addEventListener("click", function() {
            var imageUrl = document.getElementById("imageUrl").innerText;
            navigator.clipboard.writeText(imageUrl).then(function() {
                console.log("Copied to clipboard: " + imageUrl);
                // You can also provide feedback to the user here if needed
                alert("URL copied to clipboard: " + imageUrl);
            }, function(err) {
                console.error("Unable to copy: " + err);
            });
        });

        @if(session('success') == 1)
        const notyf = new Notyf();

        notyf.success({
            message: 'Maqola qo\'shildi',
            duration: 10000,
            dismissible: true,
            position: {
                x: 'right',
                y: 'bottom'
            },
        });
        @endif

        @if(session('link') == 1)
        const notyf = new Notyf();

        notyf.error({
            message: 'Nimadir noto\'g\'ri',
            duration: 10000,
            dismissible: true,
            position: {
                x: 'right',
                y: 'bottom'
            },
        });
        @endif

        @if(session('delete') == 1)
        const notyf = new Notyf();

        notyf.warning({
            message: 'Maqola o\'chirildi!',
            duration: 10000,
            dismissible: true,
            position: {
                x: 'right',
                y: 'bottom'
            },
        });
        @endif
    </script>
@endsection
