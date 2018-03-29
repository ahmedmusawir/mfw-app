import Vue from 'vue'
import App from './App.vue'
import Header from './components/Header.vue'
import Footer from './components/Footer.vue'
import VueRouter from 'vue-router'
import Routes from './routes'

Vue.use(VueRouter);

Vue.component('app-header', Header);
Vue.component('app-footer', Footer);


export const router = new VueRouter({

	// mode: 'history',
	routes: Routes

});


new Vue({

  el: '#customer-spa',
  render: h => h(App),
  router: router

})
