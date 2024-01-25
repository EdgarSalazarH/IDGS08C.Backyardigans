let myMap = L.map('myMap').setView([25.692431, -100.511702], 13)

L.tileLayer('https://maps.wikimedia.org/osm-intl/{z}/{x}/{y}.png' , {
	maxZoom: 18,
}).addTo(myMap);

let marker = L.marker([25.692431, -100.511702]).addTo(myMap)

let iconMarker = L.icon({
	iconUrl: 'Img/Perro.png',
	iconSize: [60, 60],
	iconAnchor: [30, 60]
})

let marker2 = L.marker([25.781490, -100.586756], { icon: iconMarker }).addTo(myMap)
myMap.doubleClickZoom.disable()
myMap.on('dblclick', e => {
	let latLng = myMap.mouseEventToLatLng(e.originalEvent);

	L.marker([latLng.lat, latLng.lng], { icon: iconMarker }).addTo(myMap)
})

navigator.geolocation.getCurrentPosition(
(pos) => {
	const {coords } = pos
	const { latitude, longitude } = coords
	L.marker([latitude, longitude], { icon: iconMarker }).addTo(myMap)

setTimeout(() => {
	myMap.panTo(new L.latLng(latitude, longitude))
}, 5000)
},
(error) => {
	console.log(error)
},
{
	enableHighAccuracy: true,
	timeout: 5000,
	maximumAge: 0
})