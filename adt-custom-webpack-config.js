const path = require('path');

module.exports = (env) => {
  const mode = env && env.mode ? env.mode : 'development';

  return {
    entry: [ 
      './src/assets/js/main.js',
    ],
    output: {
      filename: 'theme-main-scripts.js',
      path: path.resolve(__dirname, 'assets/js'),
    },
    mode: mode,
  };
};