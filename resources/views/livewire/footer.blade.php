<div class="2xl:h-72 xl:h-64 h-56 w-full" id="map"></div>
<footer class="dark:bg-dark-bg bg-light-bg pt-10">
    <div class="max-w-6xl m-auto  flex flex-wrap justify-center">
        <!-- Col-1 -->
    <!-- Copyright Bar -->
    <div class="pt-2">
        <div class="flex pb-5 px-3 m-auto pt-5
            border-t border-gray-500 dark:text-dark-primary text-light-primary text-sm
            flex-col md:flex-row max-w-6xl">
            <div class="mt-2">
                © Copyright 2021-year. Marcc Atayde All Rights Reserved.
            </div>

        </div>
    </div>
</footer>

<script
  src="https://maps.googleapis.com/maps/api/js?key={{ config('app.googlemap') }}&map_ids={{ config('app.mapid') }}&callback=initMap&libraries=&v=weekly"
  async
></script>
<script type="text/javascript">
let marker;

function initMap() {
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 13,
    mapId:"{{ config('app.mapid') }}",
    center: { lat: 25.2633375, lng: 55.3267093 }
  });
  marker = new google.maps.Marker({
    map,
    draggable: true,
    animation: google.maps.Animation.DROP,
    position: { lat: 25.2633375, lng: 55.3267093 },
  });
  marker.addListener("click", toggleBounce);
}

function toggleBounce() {
  if (marker.getAnimation() !== null) {
    marker.setAnimation(null);
  } else {
    marker.setAnimation(google.maps.Animation.BOUNCE);
  }
}

</script>
