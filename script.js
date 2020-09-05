function myFunction() {
  x.classList.toggle("change");
}

document.getElementById("sun").onclick = function functionName() {
  document.getElementById("sun").classList.add("sungone");
  document.getElementById("moon").classList.remove("moongone");
  document.body.classList.remove("dark");
}

document.getElementById("moon").onclick = function functionName() {
  document.getElementById("moon").classList.add("moongone");
  document.getElementById("sun").classList.remove("sungone");
  document.body.classList.add("dark");
}

var btn = document.getElementById("nav-toggle");

btn.onclick = function ok() {
  document.getElementById("nav-toggle").classList.toggle("change");
  document.getElementById("navbar").classList.toggle("change");
}

btn.onmouseover = function functionName() {
  document.getElementById("bar11").classList.add("whitebar");
  document.getElementById("bar12").classList.add("whitebar");
  document.getElementById("bar13").classList.add("whitebar");
}

btn.onmouseout = function functionName() {
  document.getElementById("bar11").classList.remove("whitebar");
  document.getElementById("bar12").classList.remove("whitebar");
  document.getElementById("bar13").classList.remove("whitebar");
}

var content;

function loadfunc() {
  content = setTimeout(showPage, 1500);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("main-content").style.display = "block";
}
