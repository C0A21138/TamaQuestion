function setMapCoordinates(lat, lng) {
    sessionStorage.setItem('mapCoordinates', JSON.stringify({ lat, lng }));
}