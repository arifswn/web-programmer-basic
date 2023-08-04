//dikasih pembanding
function hitungGradePembanding(nilai) {
    let grade = "";
    // nilai pertama >= 90 dan nilai kedua <= 100
    // jika nilai nya 101 > tidak valid
    if (nilai >= 90 && nilai <= 100) {
      grade = "A";
    } else if (nilai >= 80 && nilai <= 89) {
      grade = "B";
    } else if (nilai >= 70 && nilai <= 79) {
      grade = "C";
    } else if (nilai >= 60 && nilai <= 69) {
      grade = "D";
    } else if (nilai >= 0 && nilai <= 59) {
      // jika nilai >= 0 dan nilai <= 59
      // maka grade nya E
      // tetapi jika nilainya -1 atau 101
      // maka grade nya tidak valid
      grade = "E";
    } else {
      grade = "Nilai tidak valid";
    }
    return grade;
  }