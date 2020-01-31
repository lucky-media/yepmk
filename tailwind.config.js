module.exports = {
  theme: {
    extend: {
      borderRadius: {
        'xl': '0.75rem'
      },
    },
    fontFamily: {
      'sans': 'Archivo, -apple-system, BlinkMacSystemFont',
    },
    colors: {
      black: '#222228',
      white: '#fff',
      transparent: 'transparent',
      gray: {
        900: '#3E3E3E',
        500: '#737E86'
      },
      purple: {
        500: '#473288',
        400: '#7B66EF',
        300: '#372B7D',
        100: '#E4D9F9'
      },
      yellow: {
        100: '#FEF4CE',
        500: '#FCA80F'
      }
    },
  },
  variants: {
    margin: ['responsive', 'last']
  },
  corePlugins: {
    container: false,
  },
  plugins: [
    require('tailwind-bootstrap-grid')({
      gridGutterWidth: '32px',
    })
  ]
}