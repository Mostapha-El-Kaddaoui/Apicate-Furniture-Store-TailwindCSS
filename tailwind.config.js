/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{html,js,php}"],
  theme: {
    extend: {
      fontSize: {
        mk:'10',
      },
      colors: {
        transparent: 'transparent',
        ogray:'#c5c5c5',
        fobg:'#28282894',
        obg:'#2828282e',
        mobg:'#2828286b'
      },
      fontFamily: {
        secret:['Secret Code'],
        disco:['DISCO'],
        Amster:['Amster Style'],
        starf:['Starfighter'],
      },
      spacing: {
        '130': '36rem',
        '128': '32rem',
        '120': '390px',
        '124': '450px',
        '122': '415px'
      },boxShadow: {
        '3xl': '0px 0px 15px 1px #323232de',
      }
  },
  plugins: [],
}
}
