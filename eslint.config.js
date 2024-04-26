import js from "@eslint/js";
import prettier from "eslint-config-prettier";
import unicorn from "eslint-plugin-unicorn";
import webComponents from "eslint-plugin-wc";
import globals from "globals";

export default [
  js.configs.recommended,
  unicorn.configs["flat/recommended"],
  webComponents.configs["flat/recommended"],
  {
    files: ["public/assets/**/*.js"],
    languageOptions: { globals: { ...globals.browser } },
  },
  prettier,
];
