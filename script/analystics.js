window.addEventListener("load", () => {

  const xhttp = new XMLHttpRequest();
  xhttp.open("POST", "./php/analystics.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("req=dataRequest");

  xhttp.onreadystatechange = function() {
    if (this.readyState === 4 && this.status === 200) {
        console.log(JSON.parse(this.responseText))
      }
    }
});
