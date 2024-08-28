@extends('blog.backend.backend_master')
@section('admin-content')
    <button class="btn  btn-primary bg-main-color text-white m-2 open-add-category  ">
        <i class="fa-solid fa-plus"></i>
        Add category
    </button>
    <div class="m-0 p-0 row category-list">

    </div>
    @include('blog.modal.category')

    <script>
        jQuery(function() {
            let records = "";
            $.ajax({
                type: "POST",
                url: "/api/admin/get-category",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                beforeSend: function() {

                },
                success: function(response) {

                    if (response.status != "success") {
                        // message error
                        return;
                    }
                    response.records.forEach(category => {
                        records += `
                                <div class="col-3 category p-2">
                                    <div class="col w-100 h-100 bg-second-color cart-category rounded" data-id="${btoa(category.id)}">
                                        <div class="m-0 p-0 category-iamge d-flex justify-content-center p-1">
                                            <img class=" h-100 rounded-circle" src="${category.logo}" alt="">
                                        </div>
                                        <p class="text-center fs-5 fw-semibold text-white pt-2">${category.name}</p>
                                    </div>
                                </div>
                                `;
                    });
                    $("div.category-list").html(records);
                },
                error: function(xhr, status, error) {

                }
            });
        });
    </script>
@endsection
