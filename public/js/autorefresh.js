$(document).ready(function() {
    $("#autorefresh").load("/pengajuan/");
    var refreshId = setInterval(function() {
        $("#autorefresh").load('/pengajuan?randval=' + Math.random());
    }, 1000);
});