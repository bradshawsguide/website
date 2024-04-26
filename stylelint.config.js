export default {
  extends: "stylelint-config-standard",
  plugins: ["stylelint-order"],
  rules: {
    "selector-class-pattern": null,
    "order/order": ["custom-properties", "declarations"],
    "order/properties-alphabetical-order": true,
  },
};
