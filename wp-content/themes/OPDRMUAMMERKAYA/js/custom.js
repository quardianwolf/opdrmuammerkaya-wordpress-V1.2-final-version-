console.log("test");

$(".randevu-al").click((e) => {
  e.preventDefault();
  $(".popup").removeClass("d-none");
});

$(".popup .close").click(() => {
  $(".popup").addClass("d-none");
});
