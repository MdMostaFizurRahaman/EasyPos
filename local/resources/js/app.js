

window.Vue = require('vue');

import router from './routes'

window.onload = function () {
    const app = new Vue({
        el: '#app',
        router,
        components: {
            Home,
            Product
          },
    });
}
