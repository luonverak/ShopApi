var file = "";

$(document).on("click", "button.open-add-category", function () {
    $("div.category-modal").modal("show");
}).on("click", "div.choose-image", function () {
    $(this).siblings("input#logo").click();
    $("input#logo").on("change", function (event) {
        file = event.target.files[0];
        $("div.choose-image").find("img").attr("src", URL.createObjectURL(file));
    });
}).on("click", "button.accept-save-category", function () {
    let name = $("input#name");
    let description = $("textarea#description").val();

    if (name.val() === "") {
        name.addClass("border-danger");
        return;
    } else {
        name.removeClass("border-danger");
    }
    addCategory(name.val(), description, file);
});

function addCategory(name, description, file) {

    let form = new FormData();
    form.append("name", name);
    form.append("description", description ?? "");
    form.append("logo", file ?? "");

    $.ajax({
        type: "POST",
        url: "/api/admin/add-category",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: form,
        processData: false,
        contentType: false,
        beforeSend: function () {

        },
        success: function (response) { },
        error: function (xhr, status, error) {

        }
    });
}

