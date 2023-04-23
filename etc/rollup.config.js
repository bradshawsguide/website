import commonjs from '@rollup/plugin-commonjs';
import { nodeResolve } from '@rollup/plugin-node-resolve';
import terser from '@rollup/plugin-terser';

const plugins = [
  commonjs(),
  nodeResolve(),
  terser()
];

export default [{
  input: 'src/patterns/assets/scripts/app.js',
  output: {
    file: 'www/assets/app.js',
    format: 'iife',
    name: 'app',
    sourcemap: true
  },
  plugins
}, {
  input: 'src/patterns/assets/scripts/map.js',
  output: {
    file: 'www/assets/map.js',
    format: 'es',
    name: 'map',
    sourcemap: true
  },
  plugins
}];
