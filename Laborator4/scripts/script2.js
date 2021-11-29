var index = 1;

function init(){
    document.getElementById("img1").style.display = "none"
    document.getElementById("img2").style.display = "none"
    document.getElementById("img3").style.display = "none"
    document.getElementById("img4").style.display = "none"
}



function nextImage(){
    init();
    index++;
    if(index > 4){
        index = 1;
    }
    switch(index){
        case 1:
            document.getElementById("img1").style.display = "block";
            break;
        case 2:
            document.getElementById("img2").style.display = "block";
            break;
        case 3:
            document.getElementById("img3").style.display = "block";
            break;
        case 4:
            document.getElementById("img4").style.display = "block";
            break;
    }

}

function prevImage(){
    init();
    index--;
    if(index < 1){
        index = 4;
    }
    switch(index){
        case 1:
            document.getElementById("img1").style.display = "block";
            break;
        case 2:
            document.getElementById("img2").style.display = "block";
            break;
        case 3:
            document.getElementById("img3").style.display = "block";
            break;
        case 4:
            document.getElementById("img4").style.display = "block";
            break;
    }
}