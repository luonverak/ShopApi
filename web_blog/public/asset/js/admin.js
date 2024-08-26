$(document)
    .on("click", "button.open-add-category", function () {
        $("div.category-modal").modal("show");
    }).on("click", "div.choose-image", function () {
        $(this).siblings("input#logo").click();

        $("input#logo").on("change", function (event) {
            let file = event.target.files[0];
            $("div.choose-image").find("img").attr("src", URL.createObjectURL(file));
        });

    });