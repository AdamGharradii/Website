function EbayScraper() {
    req = new XMLHttpRequest();
    req.open('GET', 'http://computer.ebay.de', false);
    req.send(null);
    var regex = new RegExp('http:\/\/computer\.listings\.ebay\.de\/Floppy-Zip-Streamer_Disketten_[a-zA-Z0-9]*');
    window.location = req.responseText.match(regex);
 }