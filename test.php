<!DOCTYPE html>
<html>
<body>
<p id="demo">Kích vào button để lấy vị trí.</p>

<button onclick="getLocation()">Lấy vị trí</button>

<div id="mapholder"></div>

<script>
var x = document.getElementById("demo");

function getLocation() {
if (navigator.geolocation) {
navigator.geolocation.getCurrentPosition(showPosition, showError);
} else {
x.innerHTML = "Geolocation không được hỗ trợ bởi trình duyệt này.";
}
}

function showPosition(position) {
var latlon = position.coords.latitude + "," + position.coords.longitude;

var img_url = "https://maps.googleapis.com/maps/api/staticmap?center="
+latlon+"&zoom=14&size=400x300&sensor=false";
document.getElementById("mapholder").innerHTML = "<img src='"+img_url+"'>";
}
function showError(error) {
switch(error.code) {
case error.PERMISSION_DENIED:
x.innerHTML = "Người sử dụng từ chối cho xác định vị trí."
break;
case error.POSITION_UNAVAILABLE:
x.innerHTML = "Thông tin vị trí không có sẵn."
break;
case error.TIMEOUT:
x.innerHTML = "Yêu cầu vị trí người dùng vượt quá thời gian quy định."
break;
case error.UNKNOWN_ERROR:
x.innerHTML = "Một lỗi xảy ra không rõ nguyên nhân."
break;
}
}
</script> 
</body> 
</html> 