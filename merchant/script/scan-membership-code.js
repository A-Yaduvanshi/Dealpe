function onScanSuccess(decodedText, decodedResult) {
    // alert("Member is F");
    console.log(decodedText);

    window.location.href="./customerFetchData.php?special_id="+decodedText;
    
}
var html5QrcodeScanner = new Html5QrcodeScanner(
    "qr-reader", { fps: 10, qrbox: 250 });
html5QrcodeScanner.render(onScanSuccess);
