import Leaflet from "leaflet";

async function getMap() {
  const container = document.querySelector("#map");
  const zoomDefault = 8;
  const zoomValue = container.dataset.zoom;
  const url = container.dataset.geojson;

  const getZoom = function () {
    if (zoomValue) {
      return zoomValue;
    }
    return zoomDefault;
  };

  const featurePoint = function (feature, latlng) {
    const property = feature.properties || {};
    let fillColor;
    let opacity;

    switch (property["marker-size"]) {
      case "small": {
        fillColor = "#d63636";
        opacity = 0;
        break;
      }
      case "large": {
        fillColor = "#f9f7f5";
        opacity = 1;
        break;
      }
      default:
    }

    return Leaflet.circleMarker(latlng, {
      color: "#d63636",
      opacity,
      fillColor,
      fillOpacity: 1,
      radius: getZoom() * (1 / 3),
      weight: getZoom() * (1 / 3),
    });
  };

  const featureStyle = function () {
    return {
      color: "#d63636",
    };
  };

  const featurePopup = function (feature, layer) {
    if (feature.properties && feature.properties.title) {
      const popupContent = `<a target="_parent" href="${feature.properties.url}">${feature.properties.title}</a>`;
      layer.bindPopup(popupContent);
    }
  };

  const response = await fetch(url);

  if (!response.ok) {
    throw new Error(response.statusText);
  }

  const data = await response.json();

  const map = Leaflet.map(container, {
    center: [51.5, -1.25],
    zoom: getZoom(),
    minZoom: 2,
    scrollWheelZoom: false,
    touchZoom: false,
  });

  const geoJSONLayer = Leaflet.geoJSON(data, {
    style: featureStyle,
    pointToLayer: featurePoint,
    onEachFeature: featurePopup,
  }).addTo(map);

  Leaflet.tileLayer(
    "https://{s}.tile.thunderforest.com/transport/{z}/{x}/{y}@2x.png?apikey=d3e9601592c94e29ba6a599abb5b0e93",
    {
      attribution:
        '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>',
      subdomains: ["a", "b", "c"],
    },
  ).addTo(map);

  if (zoomValue) {
    map.setView(geoJSONLayer.getBounds().getCenter());
  } else {
    map.fitBounds(geoJSONLayer.getBounds());
  }

  map.on("zoomend", () => {
    const currentZoom = map.getZoom();

    geoJSONLayer.setStyle({
      radius: currentZoom * (1 / 3),
      weight: currentZoom * (1 / 3),
    });
  });
}

document.addEventListener("DOMContentLoaded", async () => {
  await getMap();
});
