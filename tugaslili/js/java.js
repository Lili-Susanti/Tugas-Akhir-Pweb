function cari() {
var kata = document.formcari.keyword.value;//fungsinya untuk membuat variabel kata yang isinya diambil dari data isi form 
var hasil = "http://www.google.com/search?q=" + kata ;////Fungsi mendeklarasikan variabel hasil yang di gunakan untuk pencarian google
window.open(hasil, 'google', config='height=500, width=750, scrollbars=yes location=yes')//Membuka jendela dimana nanti jendela terbuka sesuai dengan keyword yang kita masukan
}   
document.getElementById("calendar").innerHTML=calendarBody;