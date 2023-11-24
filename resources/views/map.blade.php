<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
  integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
  crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
  integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
  crossorigin=""></script>
<script src="{{ asset('js/leaflet.sprite.js') }}"></script>

<!-- 現在地マーカー plugin -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ asset('css/L.Control.Locate.min.css') }}" />
<script src="{{ asset('js/L.Control.Locate.min.js') }}"></script>
@extends('layouts.app')
@section('title', 'Map')

@section('content')
<script>
  var redIcon = L.icon({
    iconUrl: '{{ asset("images/RedMarker.svg") }}', // 画像ファイルのパス
    iconSize: [30, 43], // アイコンのサイズ
    iconAnchor: [15, 40], // アイコンのアンカーポイント
    popupAnchor: [1, -30] // ポップアップのアンカーポイント
  });
</script>
<link rel="stylesheet" href="{{ asset('css/map.css') }}">
<div id="view_map">
  <div id="map_buttons" class="leaflet-control">
    <a id="toggleMarkerModeButton">
      <svg
        version="1.1"
        id="Layer_1"
        x="0px"
        y="0px"
        viewBox="0 0 129.81667 239.13864"
        enable-background="new 0 0 169 294"
        xml:space="preserve"
        xmlns="http://www.w3.org/2000/svg"
        xmlns:svg="http://www.w3.org/2000/svg"><defs
        id="defs40" />&#10;&#10;
        <path
        id="path2"
        fill="black"
        opacity="1"
        stroke="none"
        d="M 54.729329,169.97057 C 50.249969,154.98888 43.084209,141.3048 33.930459,128.7369 28.947169,121.89499 23.233849,115.55764 17.572179,109.24157 -13.067571,75.060283 -2.3097011,23.766815 39.507049,4.9849582 c 0.45373,-0.203792 0.88747,-0.452102 2.00594,-0.870994 12.81783,-4.71316798 25.28826,-4.96328598 38.112108,-2.823651 0.75736,0.289399 1.32731,0.35083 2.20708,0.520829 0.74497,0.140966 1.18011,0.173364 1.84484,0.478012 10.25268,3.44347 19.055093,8.7218428 26.955423,16.0279458 25.66304,26.148941 24.94662,66.527043 1.63205,90.8529 -11.86647,12.38118 -22.473093,25.70903 -29.170243,41.73935 -2.52835,6.05191 -5.11246,12.08051 -7.922988,18.37281 -0.67044,2.3917 -2.282293,4.08841 -2.972523,6.38533 -0.48668,0.72647 -1.143661,1.73658 -1.639001,2.54884 l 9.378852,-0.17432 c 12.76463,-0.007 25.064263,-0.0472 37.363053,0.0354 3.48551,1.59519 3.63753,4.85713 2.95616,7.17206 -6.58132,16.64652 -13.27282,33.25113 -19.63989,49.97923 -1.197783,3.14696 -2.824473,3.86608 -5.863153,3.85711 -29.116128,-0.0861 -58.233128,-0.13218 -87.3483481,0.0525 -3.60534,0.0229 -5.16118,-1.16419 -5.54786,-4.45327 L 24.097189,182.27456 c 1.35724,-3.58394 3.16222,-4.39277 6.57434,-4.30502 7.65833,0.19693 22.516328,-0.20265 26.831723,-0.29077 l -0.920653,-1.94305 c -0.25043,-1.14351 -0.55046,-1.95566 -0.861,-3.09381 -0.33777,-1.10781 -0.66501,-1.88957 -0.99227,-2.67136 z" />&#10;&#10;&#10;&#10;&#10;&#10;&#10;&#10;&#10;&#10;&#10;&#10;&#10;&#10;&#10;&#10;&#10;&#10;&#10;&#10;&#10;&#10;&#10;&#10;&#10;&#10;&#10;&#10;&#10;&#10;&#10;&#10;&#10;&#10;&#10;&#10;&#10;&#10;&#10;
      </svg>
    </a>
  </div>
</div>
<script src="{{ asset('js/map.js') }}"></script>
@endsection
