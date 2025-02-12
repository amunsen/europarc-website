<?php snippet('container', slots: true)?>
  <div class="my-8 sm:my-16 lg:my-24">
    <div id="map"></div>
  </div>
<?php endsnippet()?>
<script>
  const geojson = {
    type: 'FeatureCollection',
    features: [
      {
        type: "Feature",
        properties: {
          title: '<strong style="font-size:18px">Gebäude G4</strong>',
          description: `<p style="font-size:12px">Albert-Einstein-Ring 11+15<br/>14532 Kleinmachnow</p>`,
        },
        geometry: {
          type: "Point",
          coordinates: [13.189094353318351, 52.40884137741874],
        },
      },
      {
        type: "Feature",
        properties: {
          title: '<strong style="font-size:18px">Gebäude F2</strong>',
          description: `<p style="font-size:12px">Teerofendamm 1, 3 und 5<br/>14532 Kleinmachnow-Dreilinden</p>`,
        },
        geometry: {
          type: "Point",
          coordinates: [13.18513, 52.40696],
        },
      },
      {
        type: "Feature",
        properties: {
          title: '<strong style="font-size:18px">Gebäude G1</strong>',
          description: `<p style="font-size:12px">Albert-Einstein-Ring 5 – 9<br/>14532 Kleinmachnow</p>`,
        },
        geometry: {
          type: "Point",
          coordinates: [13.19062114, 52.40919161],
        },
      },
      {
        type: "Feature",
        properties: {
          title: '<strong style="font-size:18px">Gebäude G2</strong>',
          description: `<p style="font-size:12px">Albert-Einstein-Ring 27<br/>14532 Kleinmachnow</p>`,
        },
        geometry: {
          type: "Point",
          coordinates: [13.18683497, 52.40864418],
        },
      },
      {
        type: "Feature",
        properties: {
          title: '<strong style="font-size:18px">Gebäude E2</strong>',
          description: `<p style="font-size:12px">Heinrich-Hertz-Straße 4<br/>14532 Kleinmachnow</p>`,
        },
        geometry: {
          type: "Point",
          coordinates: [13.18631447, 52.40462219],
        },
      },
      {
        type: "Feature",
        properties: {
          title: '<strong style="font-size:18px">Parkhaus</strong>',
          description: `<p style="font-size:12px">im europarc</p>`,
        },
        geometry: {
          type: "Point",
          coordinates: [13.18666718, 52.40714096],
        },
      },
    ]
  };

	mapboxgl.accessToken = "pk.eyJ1IjoiYW11bnNlbiIsImEiOiJjbTA4N2xzOHMxYmJsMmtyMGRwZXN0YzlmIn0.6-GGzGt9vrcEKOZEaaFGbg";
    const map = new mapboxgl.Map({
        style: 'mapbox://styles/mapbox/light-v11',
        center: [13.1886, 52.4065],
        zoom: 16,
        pitch: 45,
        bearing: -17.6,
        container: 'map',
        antialias: true
    });

    map.on('style.load', () => {
        // Insert the layer beneath any symbol layer.
        const layers = map.getStyle().layers;
        const labelLayerId = layers.find(
            (layer) => layer.type === 'symbol' && layer.layout['text-field']
        ).id;

        // The 'building' layer in the Mapbox Streets
        // vector tileset contains building height data
        // from OpenStreetMap.
        map.addLayer(
            {
                'id': 'add-3d-buildings',
                'source': 'composite',
                'source-layer': 'building',
                'filter': ['==', 'extrude', 'true'],
                'type': 'fill-extrusion',
                'minzoom': 15,
                'paint': {
                    'fill-extrusion-color': '#aaa',

                    // Use an 'interpolate' expression to
                    // add a smooth transition effect to
                    // the buildings as the user zooms in.
                    'fill-extrusion-height': [
                        'interpolate',
                        ['linear'],
                        ['zoom'],
                        15,
                        0,
                        15.05,
                        ['get', 'height']
                    ],
                    'fill-extrusion-base': [
                        'interpolate',
                        ['linear'],
                        ['zoom'],
                        15,
                        0,
                        15.05,
                        ['get', 'min_height']
                    ],
                    'fill-extrusion-opacity': 0.6
                }
            },
            labelLayerId
        );
        // add markers to map
for (const feature of geojson.features) {

  // code from step 5-1 will go here

  // make a marker for each feature and add to the map
  new mapboxgl.Marker().setLngLat(feature.geometry.coordinates).addTo(map);  // Replace this line with code from step 5-2
  new mapboxgl.Marker()
  .setLngLat(feature.geometry.coordinates)
  .setPopup(
    new mapboxgl.Popup({ offset: 25 }) // add popups
      .setHTML(
        `<h3>${feature.properties.title}</h3><p>${feature.properties.description}</p>`
      )
  )
  .addTo(map);
   //code from step 6 will go here
}
    });
</script>
