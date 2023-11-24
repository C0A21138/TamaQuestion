var map = L.map('view_map').setView([35.655385592286, 139.33946123176], 12);

L.tileLayer('https://{s}.tile.osm.org/{z}/{x}/{y}.png', {
  maxZoom: 18,
  attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, '
}).addTo(map);

var option = {
  position: 'topright',
  strings: {
    title: "現在地を表示",
    popup: "現在地"
  },
  locateOptions: {
    maxZoom: 16
  }
}
var lc = L.control.locate(option).addTo(map);

var contents_information1 = "<img src='images/Hachioji_Station.jpg' width='190' height='150'><br><b><p style='text-align: center;'>八王子駅</p></b><p>JRの3路線が乗り入れている駅で、東京や、新宿、横浜まで乗り換えなしでいける利便性が良い駅です。</p>"

var popup1 = L.popup({ maxWidth: 200 }).setContent(contents_information1);
L.marker([35.655385592286, 139.33946123176]).bindPopup(popup1).bindTooltip("八王子駅").addTo(map)
  .bindPopup(popup1)
  .on('click', function (e) {
    this.openPopup();
  })
  .bindTooltip("八王子駅").openTooltip();


var isMarkerMode = False; // マーカー設置モードのトグル変数

mode = document.getElementById('Layer_1')
  console.log(mode);
  mode.addEventListener('click', function() {
  alert('ボタンがクリックされました');
  isMarkerMode = !isMarkerMode; // トグル

  if (isMarkerMode) {
    // マーカー設置モードの場合のスタイルを適用
    getElementById('path2').classList.add('active');
} else {
    // マーカー設置モードでない場合のスタイルを適用
    getElementById('path2').classList.remove('active');
}
});

map.on('click', function(e) {
  var latlng = e.latlng; // クリックした場所の座標
    console.log("クリック座標: " + latlng.lat + ", " + latlng.lng);
  if (isMarkerMode) {
      if (marker) {
          map.removeLayer(marker);
      }
      marker = L.marker([35.955385592286, 139.33946123176]).addTo(map);
  }
});

// マーカーをクリックしてポップアップを表示する
marker.bindPopup("ここを選択").openPopup();