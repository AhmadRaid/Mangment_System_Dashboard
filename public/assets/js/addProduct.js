const select = document.querySelector("select#available");
const quantityField = document.querySelector(".quantity-field");
select.onchange = (event) => {
    quantityField.classList.toggle("hidden");
};

$(".add-form").on("click", function () {
    const box = document.querySelector(".forms-box");
    console.log(box);
    let row = document.createElement("div");
    row.classList.add("row", "justify-content-between");
    row.innerHTML = `<div class="form-group col-sm-12 col-md-6 d-flex mb-3 field">
                                <label for="#product-quantity" class="col-4 mb-2"
                                >كمية البيع</label
                                >
                                <input
                                    type="text"
                                    name="product-quantity"
                                    id="product-quantity"
                                    class="form-control"

                                />
                            </div>

                            <div class="form-group col-sm-12 col-md-6 d-flex mb-3 after">
                                <label for="#product-quantity" class="col-4 mb-2"
                                >العمولة</label
                                >
                                <input
                                    type="text"
                                    name="product-quantity"
                                    id="product-quantity"
                                    class="form-control"

                                />
                            </div>`;
    box.appendChild(row);
});
$("#department-name").on("change", function () {
    const optionsText = this.options[this.selectedIndex].text;
    const optionValue = this.options[this.selectedIndex].value;

    const option = $(`<option value=${optionValue}>${optionsText}</option>`);
    // console.log(option);
    $("#department2").html(option)
    // console.log(optionValue)
});
