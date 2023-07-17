$("figure")
.addClass("table-responsive")
.removeClass("table");
$("table").addClass("table");
$("thead").children("tr").children("th:first-child").addClass("text-center");
$("tbody").children().children("td:first-child").addClass("text-center");

$('td').children('img').closest('td').addClass("text-center");