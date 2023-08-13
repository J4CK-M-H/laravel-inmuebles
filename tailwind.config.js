export default {
  content: ["./resources/**/*.blade.php", "./resources/**/*.js", "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php"],
  theme: {
    extend: {
      fontFamily: {
        'Rokkit': ["Rokkit"]
      },
      gridTemplateColumns: {
        "columns-4": 'repeat(auto-fill, minmax(21rem, 1fr))'
      }
    },
  },
  plugins: [],
}

