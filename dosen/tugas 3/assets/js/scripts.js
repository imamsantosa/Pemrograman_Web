function showTime() {
	var today = new Date();
	var jam = today.getHours();
	var menit = today.getMinutes();
	var detik = today.getSeconds();
	var tanggal = today.getDate();
	var bulan = today.getMonth();
	var tahun = (today.getYear() < 1000) ? today.getYear() + 1900 : today.getYear();
	jam = checkTime(jam);
	menit = checkTime(menit);
	detik = checkTime(detik);
	var bln = ['', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
	document.getElementById('clock').innerHTML=jam + ":" + menit + ":" + detik;
	document.getElementById('date').innerHTML=checkTime(tanggal) + " " + bln[bulan] + " " + tahun;
	
}

function checkTime(i) {
	if (i < 10) {
		i = "0" + i;
	}
	return i;
}

setInterval(showTime, 500);