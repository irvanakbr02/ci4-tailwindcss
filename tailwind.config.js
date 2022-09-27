/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./app/Views/**.php",
    "./app/Views/**/*.php",
    "./app/Views/**/**/*.php",
    "./node_modules/flowbite/**/*.js",
  ],
  theme: {
    container:{
      center:true,
      padding :'16px',
    },
    extend: {
      fontFamily:{
        Montserrat:['Montserrat'],
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}
