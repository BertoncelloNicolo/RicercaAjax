function ShowSuggerimenti(str) {
    var xhttp;
    if (str.length == 0) {
        document.getElementById("suggerimenti").innerHTML = "";
        return;
    }
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var suggerimenti = JSON.parse(this.responseText);
            var suggerimentiList = document.getElementById("suggerimenti");
            suggerimentiList.innerHTML = ""; // Pulisci la lista prima di aggiungere nuovi suggerimenti
            console.log(suggerimenti);
            suggerimenti.forEach(function (parola) {
                var listItem = document.createElement("li");
                listItem.textContent = parola;
                suggerimentiList.appendChild(listItem);
            });
        }
    };
    xhttp.open("GET", "Server.php?Papa=" + str, true);
    xhttp.send();
}