const rollup = require('rollup');
const commonjs = require('@rollup/plugin-commonjs');
const {nodeResolve} = require('@rollup/plugin-node-resolve');
const {terser} = require('rollup-plugin-terser');

module.exports = (modules, logger, callback) => {
  modules.forEach((module, i) => {
    rollup.rollup({
      input: module.input,
      plugins: [
        nodeResolve({
          browser: true
        }),
        commonjs(),
        terser()
      ]
    })
      .then(bundle => {
        bundle.write({
          file: module.file,
          format: 'iife',
          sourcemap: true,
          name: module.name
        });

        if (i === modules.length - 1) {
          callback();
        }
      })
      .catch(error => logger.log(error));
  });
};
