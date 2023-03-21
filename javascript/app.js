//dark mode
let darkBtn = document.getElementById("dark");
let cssLink = document.getElementById("switch-Theme");
darkBtn.addEventListener("click", (e) => {
  e.preventDefault();
  console.log("im here");
  if (cssLink.getAttribute("href") === "./styles/darktheme.css") {
    console.log("its dark");
    cssLink.setAttribute("href", "./styles/lightTheme.css");
  } else {
    cssLink.setAttribute("href", "./styles/darktheme.css");
    console.log("its day");
  }
});
console.log("tes");
// let cancelBtn = document.getElementById("cancel");
// cancelBtn.addEventListener("click", () => {
//   console.log("canceled");
//   window.location.href("../index.php");
// });
