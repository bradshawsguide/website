module.exports = ({
  map: {
    inline: false
  },
  plugins: [
    require('postcss-easy-import'),
    require('postcss-nested'),
    require('postcss-simple-vars'),
    require('postcss-color-mod-function'),
    require('postcss-extend-rule'),
    require('cssnano')({
      preset: ['default']
    })
  ]
});
