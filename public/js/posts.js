document.addEventListener('DOMContentLoaded', function () {
    // URLから座標を取得して表示
    const urlParams = new URLSearchParams(window.location.search);
    const lat = urlParams.get('lat');
    const lng = urlParams.get('lng');

    // 座標を表示する要素にセット
    document.getElementById('lat').value = lat;
    document.getElementById('lng').value = lng;
});

function setMapCoordinates(lat, lng) {
    sessionStorage.setItem('mapCoordinates', JSON.stringify({ lat, lng }));
}

// 写真のプレビュー関数
function previewImage(event) {
    const input = event.target;
    console.log(input);

    if (input.files && input.files[0]) {
        const reader = new FileReader();

        reader.onload = function (e) {
            const imagePreview = document.getElementById('imagePreview');
            imagePreview.innerHTML = '<img id="preview_pic" src="' + e.target.result + '" width="275" height="225">';
        };

        reader.readAsDataURL(input.files[0]);
    } else {
        imagePreview.innerHTML = '';
    }
}

function moveToMap() {
    // 地図画面に移動する処理を追加
    window.location.href = '/map'; // ページのURLやパスを適切なものに変更
}

// 緯度・経度のバリデーション
function validateCoordinates() {
    const latInput = document.getElementById('lat');
    const lngInput = document.getElementById('lng');
    
    const latPattern = /^-?([1-8]?\d(\.\d+)?|90(\.0+)?)$/; // 正規表現での緯度のパターン
    const lngPattern = /^-?((1[0-7]\d(\.\d+)?)|180(\.0+)?|([1-9]?\d(\.\d+)?))$/; // 正規表現での経度のパターン

    if (!latPattern.test(latInput.value) || !lngPattern.test(lngInput.value)) {
        document.getElementById('latlng_error-message').innerText = '有効な緯度・経度を入力してください。';
        latInput.value = ''; // 緯度の入力をクリア
        lngInput.value = ''; // 経度の入力をクリア
        return false; // バリデーションエラー
    } else {
        document.getElementById('latlng_error-message').innerText = ''; // エラーメッセージをクリア
        return true; // バリデーション成功
    }
}

// 写真の非同期バリデーション
function validatePhotoAsync() {
    return new Promise((resolve, reject) => {
        const photoInput = document.getElementById('photo_path');
        const allowedFormats = ['jpeg', 'jpg', 'png', 'gif'];

        // ファイルが選択されているか確認
        if (photoInput.files.length > 0) {
            const fileName = photoInput.value.toLowerCase();

            // fileExtension を計算
            let fileExtension;
            if (fileName.includes('.')) {
                fileExtension = fileName.split('.').pop();
            }

            const errorMessageElement = document.getElementById('photo-error-message');

            if (!allowedFormats.includes(fileExtension)) {
                errorMessageElement.innerText = '有効な写真ファイルを選択してください。';
                photoInput.value = ''; // ファイルをクリア
                imagePreview.innerHTML = '';
                reject(); // バリデーションエラー
            } else {
                errorMessageElement.innerText = ''; // エラーメッセージをクリア
                resolve(); // バリデーション成功
            }
        } else {
            // ファイルが選択されていない場合は何もせずに成功とみなす
            resolve();
        }
    });
}





// フォームが送信される前にバリデーションを実行
document.querySelector('form').addEventListener('submit', async function (event) {
    event.preventDefault(); // フォーム送信をデフォルトでキャンセル

    const isCoordinatesValid = validateCoordinates();
    let isPhotoValid = false;

    try {
        await validatePhotoAsync(); // ファイルの非同期バリデーションを待つ
        isPhotoValid = true;
    } catch (error) {
        // ファイルバリデーションがエラーの場合
        isPhotoValid = false;
    }

    if (isCoordinatesValid && isPhotoValid) {
        // バリデーションが成功した場合、フォーム送信を実行
        this.submit();
    }
});
