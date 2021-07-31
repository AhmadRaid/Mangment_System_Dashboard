$(document).ready(function () {
    const tableBody = document.querySelector(".table-body");

    const putPrice = () => {
        $(".footer .price").html($(".price_after_all").attr("value"));
    }
    putPrice();
    $(document).on("change", event => {
        let id = event.target.value;
        if (event.target.getAttribute("id") === "product-sector") {
            $.ajax({
                url: ` http://127.0.0.1:8000/order/specify_department/${id}`,
                type: "GET",
                data: {_token: "{{ csrf_token() }}"},
                success: function (data) {
                    $("#product-name").empty();
                    for (const dataKey in data) {
                        let option = document.createElement("option");
                        option.value = data[dataKey].id;
                        option.innerText = data[dataKey].name;
                        $("#product-name").append(option);
                    }
                },
                error: function () {
                    alert("error");
                }
            });
        }
    });


    if ($('#free').is(':checked')) {
        $(".delivery .ask-box").addClass("hidden");
    } else if ($('#paid').is(':checked')) {
        $(".delivery .ask-box").removeClass("hidden");
    }
    const changeAfterState = () => {
        const value = parseFloat($(".price_after_all").val());
        const commissin = parseFloat($(".delivery-commission").html());
        if (value) {
            $(".original-price").html(value);
            $(".bill").html(value + commissin);
        } else {
            $(".original-price").html("لم يتم تحديد قيمة المنتج بعد");
            $(".bill").html("لم يتم تحديد قيمة المنتج بعد");
        }
    }
// put the commission based on the selected city
    $(".delivery-commission").html(
        $("#customer-state")
            .find(":selected")
            .data("delivery")
    );
    changeAfterState();

// put the commission based on the selected city when the selected changes
    $("#customer-state").on("change", function (e) {
        $(".delivery-commission").html(
            $(this)
                .find(":selected")
                .data("delivery")
        );
        changeAfterState();
    });

// when clicking on discount button
    const addDiscount = event => {
        event.preventDefault();
        if ($(".price_after_all").val()) {
            const discountValue = $("#discount-value").val();
            const value_after_discount =
                $(".price_after_all").val() - discountValue;
            $(".before-discount").html($(".price_after_all").val());
            $(".after-discount").html(value_after_discount);
            $(".price_after_all").val(value_after_discount);
            // show values
            document.querySelector(".discountInfo").classList.remove("hidden");
        } else {
            $("#discount-value").val("");
            $(".discount-msg").css({display: "block"});
            let clear = setTimeout(function () {
                $(".discount-msg").css({display: "none"});
            }, 1000);
        }
        putPrice();

    };


// for discount
    $(".fields span").on("click", () => {
        const value = parseFloat($(".edit-field").val());
        const product_price = parseFloat($(".price_after_all").val());

        if (value === "") {
            return;
        }
        if (product_price) {
            $(".edit-field").val("");
            $(".delivery-commission").html(value);
            $(".original-price").html(product_price);
            $(".bill").html(product_price + value);
            $(".price_after_all").val(product_price + value);
        } else {
            $(".edit-field").val("");
            $(".delivery-commission").html(value);
        }
        putPrice();

    });

// for delivery
    $("input[type=radio][name=check]").on("change", e => {
        let commission = document.querySelector(".delivery-commission");
        if (e.target.value == 1) {
            const value = parseFloat($(".price_after_all").val());
            $(".original-price").html(value);
            const value_after_delivery = value + parseFloat(commission.textContent);
            $(".bill").html(value_after_delivery);
            $(".price_after_all").attr("value", value_after_delivery);
        } else {
            // put price in the final final input
            $(".price_after_all").attr("value", $(".final-price input").val());
        }
        putPrice();

    });

    $(".checkbox-edit").on("change", function (e) {
        if ($(this).prop("checked") == true) {
            //do something
            $(".fields ").removeClass("hidden");
        } else {
            $(".fields ").addClass("hidden");
        }
    });

    $(".phone").on("keyup", function (e) {
        const phone = e.target.value;
        $.ajax({
            url: `http://127.0.0.1:8000/order/check_Customer/${phone || -1}`,
            type: "GET",
            data: {
                _token: "{{ csrf_token() }}"
            },
            success: function (data) {
                if (data[0]) {
                    $(".number").removeClass("hidden");
                    const url = `http://127.0.0.1:8000/order/displayOrder/${data[0].id}`;
                    $("small a").attr("href", url);
                } else {
                    $(".number").addClass("hidden");
                }

            }
        });
    });

    $(".add-quantity").on("click", function () {
        const productID = $("#product-name").val();
        const productQuantity = $("#product-quantity").val();
        const originalPrice = $(".original-price");
        const bill = $(".bill");
        if (productQuantity == 0 || productID == "") {
            $("#product-quantity").val("");
            $(".msg").css({display: "block"});
            let clear = setTimeout(function () {
                $(".msg").css({display: "none"});
            }, 1000);
            return;
        }

        $.ajax({
            url: `http://127.0.0.1:8000/order/specify_product/${productID}`,
            type: "GET",
            data: {
                _token: "{{ csrf_token() }}",
                quantity: productQuantity
            },
            success: function (data) {
                let product = data[0];
                let message = ``;
                let danger = true;
                if (product["quantity_stock"] > productQuantity) {
                    message = "الكمية متوفرة";
                } else {
                    message = "الكمية غير متوفرة";
                    danger = false;
                }

                const productName = product.name;
                const productDescreption = product.description;
                const productPrice = product.price;
                const finalPrice = productPrice * productQuantity;
                let row = `
                 <th scope="row">${productID}</th>
                 <td>${productName} <input type = 'hidden' value = ${productName} /> </td>
                  <td>${productDescreption} <input type = 'hidden' value = ${productDescreption} /> </td>
                   <td>${productQuantity}<span class="d-block message">${message}</span>  <input type = 'hidden' value = ${productQuantity} /></td>
                   <td class="final-price">${finalPrice} <input type = 'hidden' value = ${finalPrice} /></td>
                <td>
                    <span class="btn btn-success  delete-tr">
                      <span
                   ><i class="fa fa-minus" aria-hidden="true"></i>
                    </span>
                       حذف
                  </span>
                  </td>
                       `;
                const tr = document.createElement("tr");
                tr.setAttribute("data-id", productID);
                tr.classList.add(`row${productID}`);
                tr.innerHTML = row;
                tableBody.innerHTML = "";
                tableBody.appendChild(tr);
                document.querySelectorAll("table tbody tr").forEach(tr => {
                    if (tr.getAttribute("data-id")) {
                    } else {
                        tr.innerHTML = row;
                        document.querySelector(".table-body").appendChild(tr);
                    }

                    // put price in the final final input
                    $(".price_after_all").attr(
                        "value",
                        $(".final-price input").val());
                });
                putPrice();

            },
            error: function () {
                alert("error");
            }
        });
    });

});
