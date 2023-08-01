$("table")
    .addClass("table")
    .addClass('table-responsive')
    .removeAttr('style')
    .removeAttr('border');
$("thead").children("tr").children("th:first-child").addClass("text-center");
$("tbody").children().children("td:first-child").addClass("text-center");

$('td').children('img').closest('td').addClass("text-center");

$('p').children('img').addClass('img-fluid rounded');