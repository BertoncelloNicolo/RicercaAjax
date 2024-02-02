function ShowSuggerimenti(str) {
    var xhttp;
    if (str.length === 0) {
        document.getElementById("suggerimenti").innerHTML = "";
        return;
    }
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var suggerimenti = JSON.parse(this.responseText);
            var suggerimentiList = document.getElementById("suggerimenti");
            suggerimentiList.innerHTML = "";
            suggerimenti["data"].forEach(function (parola) {
                var listItem = document.createElement("li");
                listItem.textContent = parola;
                suggerimentiList.appendChild(listItem);
            });
        }
        xhttp.open("GET","https://localhost:63342/getParole.php?parola=" + str, true);
        xhttp.send();
    }
}