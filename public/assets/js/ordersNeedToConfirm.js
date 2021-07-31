const popUp = document.querySelector(".popup"),
	popBox = document.querySelector(".popup .box"),
	closeBtn = document.querySelector(".popup .box i"),
	cancleOrderBtns = document.querySelectorAll(".cancle-order"),
	tableBody = document.querySelector(".table-body");

fetch(
	"https://spreadsheets.google.com/feeds/list/1XAUNQId4meq1ekgQqTkwxo-JUyjgMS7Zd0Xyu6jCijI/od6/public/values?alt=json"
)
	.then((res) => res.json())
	.then((res) => {
		// console.log(res.feed.entry[0].gsx$email.$t);
		console.log(res);
		res.feed.entry.forEach((row, index) => {
			console.log(row.gsx$email.$t, row.gsx$name.$t, row.gsx$phone.$t);
			const name = row.gsx$name.$t;
			const email = row.gsx$email.$t;
			const phone = row.gsx$phone.$t;

			const t = $("#dataTableExample1").DataTable();

			t.row
				.add([
					`<td class = 'sorting_1'>${index + 1}</td>`,
					`<td>${name}</td>`,
					`<td>${email}</td>`,
					`<td>${phone}</td>`,
					`<td class="center">
			<p
				class="btn btn-success btn-sm"
				data-toggle="tooltip"
				data-placement="right"
				title="اتصال واتساب "
				onclick="sendWhatsAppMessage()"
			>
				<i class="fab fa-whatsapp fa-lg"></i>
			</p>

			<p
				class="btn btn-primary btn-sm"
				data-toggle="tooltip"
				data-placement="left"
				title="تأكيد الطلب"
			>
				<i class="fas fa-check"></i>
			</p>

			<p
				class="btn btn-danger btn-sm cancle-order"
				data-toggle="tooltip"
				data-placement="right"
				title="الغاء الطلب "
			>
				<i class="fas fa-window-close"></i>
			</p>
		</td>`,
				])
				.draw(false);
		});
	});

// when click on whatsapp icon
const sendWhatsAppMessage = () => {
	window.open(
		"https://api.whatsapp.com/send/?phone=972595105833&text=مرحبا!",
		"_blank"
	);
};

cancleOrderBtns.forEach((btn) => {
	btn.onclick = () => {
		showPopUp();
	};
});

const classFunctions = (method) => {
	popUp.classList[method]("active");
	popBox.classList[method]("active");
};

// show the pupop
const showPopUp = () => {
	classFunctions("add");
};

// hide the popup
const hidePopUp = () => {
	classFunctions("remove");
};

// when click on these buttons the popup will hide
popUp.onclick = closeBtn.onclick = () => classFunctions("remove");

popBox.onclick = (event) => event.stopPropagation();

// res.feed.entry is array

// (async () => {
// 	const rawResponse = await fetch("https://httpbin.org/post", {
// 		method: "POST",
// 		headers: {
// 			Accept: "application/json",
// 			"Content-Type": "application/json",
// 		},
// 		body: JSON.stringify({ a: 1, b: "Textual content" }),
// 	});
// 	const content = await rawResponse.json();

// 	console.log(content);
// })();
