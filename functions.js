function onAnimals() {
    var x = document.getElementsByClassName("animal");
    if (x.style.opacity === "0" || x.style.filter === 'alpha(opacity=0)') {
        x.style.opacity = "100";
        x.style.filter = "alpha(opacity=100)";
    } else {
        x.style.opacity = "0";
        x.style.filter = "alpha(opacity=0)";
    }
}