module.exports = {
  darkMode:"class", 
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
       
        spacing:{
            "big":"48rem"
        }
    },
    screens:{
      sm:"480px",
      md:"768px",
      lg:"1024px",
      xl:"1200px",
  }
    fontFamily: {
        Nunito:['Nunito', 'sans-serif'],
  },
  plugins: [],
}
};