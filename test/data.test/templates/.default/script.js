$(".table .table-row").on("click", async function () {
    let req = await fetch("request_test.php");
    let res = await req.json();
    $(this).css("background-color", res.color);
});


