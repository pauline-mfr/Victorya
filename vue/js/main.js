function openForm() {
  document.getElementById("popupForm").style.display="block";
};
function closeForm() {
  document.getElementById("popupForm").style.display="none";
};
function checkingPassword() {
  let firstPassword = document.getElementById('firstPassword').value;
  let secondPassword = document.getElementById('secondPassword').value;
  if (firstPassword != secondPassword) {
    document.getElementById('error').innerHTML = "Password are not matching";
  }
};
