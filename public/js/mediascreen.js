var checkbox = document.querySelector("input[name=photo]");
var editphoto = document.getElementById('editphoto');



window.addEventListener('load', function () {
    if (this.screen.width < 500) {
        if (this.window.location.search != "?media=mobile")
            this.window.location.search = "?media=mobile";

    }
    else {
        if (this.window.location.search == "?media=mobile")
            this.window.location.search = "";
    }
})