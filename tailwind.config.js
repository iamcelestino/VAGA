module.exports = {
    content: ["./App/views/**/*.{php,js}"],
    theme: {
      extend: {
        backgroundImage: {
          'section-pattern': "url('./public/assets/images/wave.svg')",
      },
      container: {
        center: true,
        padding: {
          DEFAULT: '1.5rem',
          sm: '1.5rem',
          md: '1rem',
          xl: '2rem'       
        }
      }
    },
    plugins: [],
}
}