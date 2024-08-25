$(document)
    .on("click", "button.open-add-category", function () {
        $("div.category-modal").modal("show");
    });