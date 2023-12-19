// 緯度経度の範囲チェック関数
function isWithinBounds(lat, lng) {
  return (lat >= -90 && lat <= 90) && (lng >= -180 && lng <= 180);
}

// マーカーを設置して投稿画面に移動
function setMarkerAndRedirect(lat, lng) {
  // マーカーを設置
  L.marker([lat, lng]).addTo(map);

  // 投稿画面のURLに座標を追加してリダイレクト
  window.location.href = '/posts?lat=' + lat + '&lng=' + lng;
}

// 投稿画面に移動する関数
function redirectToPostPage(lat, lng) {
  // 投稿画面のURLに座標を追加してリダイレクト
  window.location.href = '/posts?lat=' + lat + '&lng=' + lng;
}

var map = L.map('view_map').setView([35.655385592286, 139.33946123176], 12);

L.tileLayer('https://{s}.tile.osm.org/{z}/{x}/{y}.png', {
  maxZoom: 18,
  attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, '
}).addTo(map);

var option = {
  position: 'topright',
  strings: {
    title: "現在地を表示",
    popup: ""
  },
  locateOptions: {
    maxZoom: 16
  }
}
var lc = L.control.locate(option).addTo(map);

var marker;
var click_latlng;

map.on('click', function (e) {
  click_latlng = e.latlng; // クリックした場所の座標
  console.log("クリック座標: " + click_latlng.lat + ", " + click_latlng.lng);
  if (isMarkerMode) {
    if (marker) {
      map.removeLayer(marker);
    }

    var lat = click_latlng.lat;
    var lng = click_latlng.lng;

    // 緯度経度の範囲をチェック
    if (isWithinBounds(lat, lng)) {
        marker = L.marker(click_latlng, {
            icon: redIcon,
            draggable: true // マーカーをドラッグ可能に設定
        }).addTo(map);

        // マーカーをクリックしたときのポップアップを設定
        marker.bindPopup("<div>マーカーをタップして投稿</div>").on('click', function () {
            redirectToPostPage(lat, lng);
        }).openPopup();

        // ドラッグが終了したときの処理
        marker.on('dragend', function (e) {
            var dragend_latlng = marker.getLatLng();
            this.openPopup();
            console.log("ドラッグ後の座標: " + dragend_latlng.lat + ", " + dragend_latlng.lng);

            // 緯度経度の範囲を再度チェック
            if (!isWithinBounds(dragend_latlng.lat, dragend_latlng.lng)) {
              alert('有効な緯度経度を選択してください。');
              // マーカーを削除
              map.removeLayer(marker);
            } else {
              // 新しい座標をセット
              click_latlng = dragend_latlng;
              lat = click_latlng.lat;
              lng = click_latlng.lng
            }
        });
    } else {
        alert('有効な緯度経度を選択してください。');
    }
  }
});

var isMarkerMode = false; // マーカー設置モードのトグル変数

document.getElementById('map_buttons').addEventListener('click', function () {
  event.stopPropagation(); // イベント伝播を停止
  isMarkerMode = !isMarkerMode; // トグル

  if (isMarkerMode) {
    // マーカー設置モードの場合のスタイルを適用
    document.getElementById('path2').classList.add('active');
  } else {
    // マーカー設置モードでない場合のスタイルを適用
    document.getElementById('path2').classList.remove('active');
  }
});

// LaravelのAPIからデータを取得
fetch('/api/posts')
    .then(response => response.json())
    .then(posts => {
        // マーカーを設置
        posts.forEach(post => {
          const popup_contents = `<img src="/storage/${post.photo_path}" width='190' height="150"><br><b><p style='text-align: center;'>${post.title}</p></b><p>${post.content}</p>`;
          const popup = L.popup({ maxWidth: 200 }).setContent(popup_contents);
          post_marker = L.marker([post.lat, post.lng]).addTo(map)
                .bindPopup(popup)
                post_marker.on('click', function () {
                  map.setView([post.lat+0.0003, post.lng], 30); // クリックされたマーカーを中心にしてズーム
              });
        });
    })
    .catch(error => console.error('Error fetching posts:', error));

// sessionStorageから座標を取得
var mapCoordinates = JSON.parse(sessionStorage.getItem('mapCoordinates'));

// 座標が取得できた場合
if (mapCoordinates && mapCoordinates.lat && mapCoordinates.lng) {
    // 投稿の座標に地図を移動
    map.setView([mapCoordinates.lat+0.0005, mapCoordinates.lng], 18);
    sessionStorage.removeItem('mapCoordinates');
}