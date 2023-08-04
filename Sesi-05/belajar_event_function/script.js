/*
    default : "Klik aku"
    saat di Klik Aku mengganti menjadi : "Halo YAL"
    saat di Klik Halo YAL mengganti menjadi : "Klik aku"
*/

// 1. Ambil element yang akan dijadikan target
function ubahText() {
    var element = document.getElementById("tombol")
    if (element.innerHTML == "Klik aku") {
        element.innerHTML = "Halo YAL"
    }else{
        element.innerHTML = "Klik aku"
    }

}