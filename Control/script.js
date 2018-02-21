var figureImage = document.querySelector("aside figure img");

function showHide(contentID)
{
    $("#"+contentID).slideToggle("fast");
    figureImage.src = ("../Namespace/"+contentID+".png");
}

