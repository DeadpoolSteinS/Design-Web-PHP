let data = document.querySelectorAll(".table .common");

function getInput()
{
    let mainButton = document.querySelector(".mainButton");
    if(mainButton.classList.contains("active"))
    {
        mainButton.innerHTML = "Tambah Data";
        mainButton.classList.remove("active");
        document.getElementById("input").style.display = "none";
    }
    else
    {
        mainButton.innerHTML = "Cancel";
        mainButton.classList.add("active");
        document.getElementById("input").style.display = "grid";
    }
}

data.forEach(list => {
    list.addEventListener("click", () => {
        list.nextElementSibling.style.display = (list.nextElementSibling.style.display == "none") ? "flex" : "none";
    });
});