import { circleMarker, map as createMap, geoJSON, tileLayer } from "leaflet";
import { LitElement, html } from "lit";
import styles from "./map.styles.js";

export class MapElement extends LitElement {
  constructor() {
    super();
    this.accessToken = "d3e9601592c94e29ba6a599abb5b0e93";
    this.center = "51.5,-1.25";
    this.subdomains = ["a", "b", "c"];
    this.urlTemplate = `https://{s}.tile.thunderforest.com/transport/{z}/{x}/{y}@2x.png?apikey=${this.accessToken}`;
    this.minZoom = 4;
    this.zoom = 8;
  }

  static styles = styles;

  static properties = {
    center: {
      type: String,
    },
    minZoom: {
      type: Number,
      attribute: "min-zoom",
    },
    src: {
      type: String,
    },
    zoom: {
      type: Number,
    },
  };

  get attribution() {
    const slot = this.shadowRoot.querySelector("slot[name=attribution]");
    const elements = slot.assignedElements({ flatten: true });
    return elements[0].outerHTML;
  }

  #featurePoint = (feature, latLng) => {
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

    return circleMarker(latLng, {
      color: "#d63636",
      opacity,
      fillColor,
      fillOpacity: 1,
      radius: this.zoom * (1 / 3),
      weight: this.zoom * (1 / 3),
    });
  };

  #featurePopup = ({ properties }, layer) => {
    if (properties.title) {
      const popupContent = `<a target="_parent" href="${properties.url}">${properties.title}</a>`;
      layer.bindPopup(popupContent);
    }
  };

  get #featureStyle() {
    return {
      color: "#d63636",
    };
  }

  async #geojson() {
    const response = await fetch(this.src);

    if (!response.ok) {
      throw new Error(response.statusText);
    }

    const data = await response.json();

    return data;
  }

  async firstUpdated() {
    super.connectedCallback();

    const {
      attribution,
      minZoom,
      shadowRoot,
      src,
      subdomains,
      urlTemplate,
      zoom,
    } = this;
    const center = this.center.split(",");

    const mapElement = shadowRoot.querySelector("#map");
    const map = createMap(mapElement, {
      center,
      zoom,
      minZoom,
      scrollWheelZoom: false,
      touchZoom: false,
    });

    map.addLayer(tileLayer(urlTemplate, { attribution, subdomains, minZoom }));

    if (src) {
      const data = await this.#geojson();
      const geoJSONLayer = geoJSON(data, {
        style: this.#featureStyle,
        pointToLayer: this.#featurePoint,
        onEachFeature: this.#featurePopup,
      });

      map.addLayer(geoJSONLayer);

      if (zoom) {
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
  }

  render() {
    return html`
      <div id="map">
        <slot name="attribution"></slot>
      </div>
    `;
  }
}
