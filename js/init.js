$(document).ready(function() {
  $(".dropdown-trigger").dropdown({
    hover: false
  });
  $(".sidenav").sidenav();
  $(".parallax").parallax();
  $(".modal").modal();
  $(".carousel").carousel();

  setInterval(function() {
    $(".carousel").carousel("next");
  }, 2000);
});
