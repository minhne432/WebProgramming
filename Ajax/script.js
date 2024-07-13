document.getElementById("fetchButton").addEventListener("click", function () {
  var userId = document.getElementById("userId").value;
  console.log(userId);
  var xhr = new XMLHttpRequest();
  xhr.open("GET", "get_user.php?id=" + userId, true);
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      document.getElementById("userInfo").innerHTML = xhr.responseText;
    }
  };
  xhr.send();
});
