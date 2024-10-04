window.addEventListener("scroll", function () {
  const value = window.scrollY;

  document.getElementById("text").style.top = 10 + value * 0.15 + "%";
  document.getElementById("ll2").style.top = value * 0.4 + "px";
  document.getElementById("ll3").style.top = value * 2.3 + "px";
  document.getElementById("ll4").style.left = value * 0 + "px";
  document.getElementById("ll6").style.left = value * -3.6 + "px";
  document.getElementById("ll7").style.left = value * 3.6 + "px";
});
