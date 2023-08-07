// tanggal sekarang

const getDate = new Date();
const getYear = getDate.getFullYear();
const getMonth = getDate.getMonth() + 1;
const getDay = getDate.getDate();

function bulan() {
    if (getMonth < 10) {
        bulan = `0${getMonth}`;
    } else {
        bulan = getMonth;
    }
    return bulan;
}

function hari() {
    if (getDay < 10) {
        hari = `0${getDay}`;
    } else {
        hari = getDay;
    }
    return hari;
}


const tanggal = `${getYear}-${bulan()}-${hari()}`;
console.log(tanggal)

// Jadwal Sholat Sekarang
function getJadwalSholat() {
    fetch(
        "https://api.banghasan.com/sholat/format/json/jadwal/kota/682/tanggal/" +
            tanggal
    )
        .then(response => response.json())
        .then(data => {
            const jadwal = data.jadwal.data;
            document.querySelector(".maghrib").textContent = jadwal.maghrib;
            document.querySelector(".terbit").textContent = jadwal.terbit;
            document.querySelector(".isya").textContent = jadwal.isya;
            document.querySelector(".subuh").textContent = jadwal.subuh;
            document.querySelector(".dzuhur").textContent = jadwal.dzuhur;
            document.querySelector(".ashar").textContent = jadwal.ashar;
            document.querySelector(".tanggal").textContent = jadwal.tanggal;
        });
}

getJadwalSholat();

// menitan jam digital
function updateClock() {
    var now = new Date();
    var hou = now.getHours(),
        min = now.getMinutes(),
        sec = now.getSeconds();

    Number.prototype.pad = function (digits) {
        for (var n = this.toString(); n.length < digits; n = 0 + n);
        return n;
    };

    var ids = ["hour", "minutes", "seconds"];
    var values = [hou.pad(2), min.pad(2), sec.pad(2)];
    for (var i = 0; i < ids.length; i++)
        document.getElementById(ids[i]).firstChild.nodeValue = values[i];
}
function initClock() {
    updateClock();
    window.setInterval("updateClock()", 1);
}
