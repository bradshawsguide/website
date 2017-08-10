const rollup = require('rollup');
const babel = require('rollup-plugin-babel');
const commonjs = require('rollup-plugin-commonjs');
const resolve = require('rollup-plugin-node-resolve');
const uglify = require('rollup-plugin-uglify');

module.exports = (modules, logger, callback) => {
  modules.forEach((module, i) => {
    rollup.rollup({
      entry: module.entry,
      plugins: [
        resolve({
          browser: true,
          jsnext: true,
          main: true
        }),
        commonjs(),
        babel({
          exclude: 'node_modules/**'
        }),
        uglify()
      ]
    })
    .then(bundle => {
      bundle.write({
        dest: module.dest,
        format: 'iife',
        sourceMap: true,
        moduleName: module.name
      });

      if (i === modules.length - 1) {
        callback();
      }
    })
    .catch(err => logger.log(err));
  });
};
