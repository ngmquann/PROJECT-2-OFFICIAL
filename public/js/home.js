document.getElementById("next").onclick = function () {
    const widthItem = document.querySelector(".model-card").offsetWidth;
    document.getElementById("formList").scrollLeft += widthItem;
};
document.getElementById("prev").onclick = function () {
    const widthItem = document.querySelector(".model-card").offsetWidth;
    document.getElementById("formList").scrollLeft -= widthItem;
};
