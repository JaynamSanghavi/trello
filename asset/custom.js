$("#list1, #list2").dragsort({ dragSelector: "div", dragBetween: true, dragEnd: saveOrder, placeHolderTemplate: "<li class='placeHolder'><div></div></li>" });

function saveOrder() {
  var data = $("#list1 li").map(function() { return $(this).attr('id'); }).get();
  $("input[name=list1SortOrder]").val(data.join("|"));
};