import { css } from "lit";

export default css`
  #map {
    background-color: #addeff;
    block-size: 100%;
    display: block;
    inline-size: 100%;
    overflow: hidden;
  }

  a {
    color: var(--color-link);

    &:hover {
      color: var(--color-link-hover);
    }

    &:active {
      color: var(--color-link-active);
    }
  }

  .leaflet-pane,
  .leaflet-tile,
  .leaflet-marker-icon,
  .leaflet-marker-shadow,
  .leaflet-tile-container,
  .leaflet-pane > svg,
  .leaflet-pane > canvas,
  .leaflet-zoom-box,
  .leaflet-image-layer,
  .leaflet-layer {
    inset-block-start: 0;
    inset-inline-start: 0;
    position: absolute;
  }

  .leaflet-container {
    overflow: hidden;

    &.leaflet-touch-zoom {
      touch-action: pan-x pan-y;
    }

    &.leaflet-touch-drag {
      touch-action: pinch-zoom;
    }

    &.leaflet-touch-drag.leaflet-touch-zoom {
      touch-action: none;
    }
  }

  .leaflet-tile {
    -webkit-user-select: none;
    user-select: none;
    visibility: hidden;
  }

  .leaflet-tile-loaded {
    visibility: inherit;
  }

  .leaflet-popup-pane {
    z-index: 700;
  }

  .leaflet-overlay-pane,
  .leaflet-pane {
    z-index: 400;
  }

  .leaflet-tile-pane,
  .leaflet-map-pane svg {
    z-index: 200;
  }

  .leaflet-map-pane canvas {
    z-index: 100;
  }

  .leaflet-interactive {
    cursor: pointer;
  }

  .leaflet-grab {
    cursor: grab;
  }

  .leaflet-dragging .leaflet-grab,
  .leaflet-dragging .leaflet-grab .leaflet-interactive,
  .leaflet-dragging .leaflet-marker-draggable {
    cursor: grabbing;
  }

  .leaflet-image-layer,
  .leaflet-pane > svg path,
  .leaflet-tile-container {
    pointer-events: none;
  }

  .leaflet-image-layer.leaflet-interactive,
  .leaflet-pane > svg path.leaflet-interactive {
    pointer-events: auto;
  }

  .leaflet-bar {
    --focus-outline-offset: 0;

    background-color: white;
    box-shadow: var(--drop-shadow-shallow);
    margin: var(--space-s);
    outline: 1px solid var(--color-neutral-darkest-alpha);

    & a {
      block-size: 2rem;
      border-block-end: var(--line-solid);
      display: block;
      inline-size: 2rem;
      line-height: 2rem;
      text-align: center;
      -webkit-user-select: none;
      user-select: none;

      &:hover {
        background-color: var(--color-neutral-lightest);
        text-decoration: none;
      }

      &:last-child {
        border-block-end: none;
      }
    }
  }

  .leaflet-disabled:link {
    background-color: var(--color-neutral-lightest);
    color: var(--color-neutral-light);
    cursor: default;
  }

  .leaflet-control {
    clear: both;
    color: var(--color-neutral-mid);
    float: inline-start;
    pointer-events: auto;
    position: relative;
    z-index: 800;
  }

  .leaflet-top,
  .leaflet-bottom {
    pointer-events: none;
    position: absolute;
    z-index: 1000;
  }

  .leaflet-top {
    inset-block-start: 0;
  }
  .leaflet-right {
    inset-inline-end: 0;
  }
  .leaflet-bottom {
    inset-block-end: 0;
  }
  .leaflet-left {
    inset-inline-start: 0;
  }

  .leaflet-control-zoom-in,
  .leaflet-control-zoom-out {
    font: var(--font-label);
    font-weight: bold;
    text-decoration: none;
  }

  .leaflet-control-attribution {
    backdrop-filter: blur(2px);
    background: hsl(0deg 100% 100% / 75%);
    font: var(--font-caption);
    padding: var(--space-2xs);
  }

  .leaflet-popup {
    margin-block-end: 1.25rem;
    position: absolute;
  }

  .leaflet-popup-content-wrapper {
    font: var(--font-label);
    padding: var(--space-s);
    padding-inline-end: var(--space-xl);
    text-align: left;
  }

  .leaflet-popup-tip-container {
    block-size: 0.75rem;
    inline-size: 1.5rem;
    inset-inline-start: 50%;
    margin-inline-start: -0.75rem;
    overflow: hidden;
    pointer-events: none;
    position: absolute;
  }

  .leaflet-popup-tip {
    block-size: 1rem;
    inline-size: 1rem;
    margin-block: -0.5rem 0;
    margin-inline: auto;
    transform: rotate(45deg);
  }

  .leaflet-popup-content-wrapper,
  .leaflet-popup-tip {
    background: white;
    box-shadow: 0 4px 12px var(--color-neutral-dark-alpha);
  }

  .leaflet-popup-close-button {
    --focus-outline-offset: 0;

    border-inline-start: var(--line-solid);
    font: var(--font-label);
    font-weight: bold;
    inset-block: 0;
    inset-inline-end: 0;
    padding: var(--space-s);
    position: absolute;
    text-decoration: none;

    &:hover {
      background-color: var(--color-neutral-lightest);
    }
  }

  .leaflet-fade-anim .leaflet-tile {
    will-change: opacity;
  }

  .leaflet-fade-anim .leaflet-popup {
    opacity: 0;
    transition: opacity 0.2s linear;
  }

  .leaflet-fade-anim .leaflet-map-pane .leaflet-popup {
    opacity: 1;
  }

  .leaflet-zoom-animated {
    transform-origin: 0 0;
  }

  .leaflet-zoom-anim .leaflet-zoom-animated {
    transition: transform 0.25s cubic-bezier(0, 0, 0.25, 1);
    will-change: transform;
  }

  .leaflet-zoom-anim .leaflet-tile,
  .leaflet-pan-anim .leaflet-tile {
    transition: none;
  }

  .leaflet-zoom-anim .leaflet-zoom-hide {
    visibility: hidden;
  }
`;
