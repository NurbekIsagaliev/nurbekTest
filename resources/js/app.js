


const files = require.context('./',true,/\.vue$/i);
files.keys().map(key=>vue.component(key.split('/').pop().split('.')[0], files(key).default));


