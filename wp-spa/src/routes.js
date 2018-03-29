import showPosts from './components/showPosts.vue'
import addPost from './components/addPost.vue'
import aboutPg from './components/About.vue'
import contactPg from './components/Contact.vue'
import singlePost from './components/singlePost.vue'
import editPost from './components/editPost.vue'


export default [
	{path: '/', component: showPosts},
	{path: '/add', component: addPost},
	{path: '/about', component: aboutPg},
	{path: '/contact', component: contactPg},
	{path: '/post/:id', component: singlePost},
	{path: '/postEdit/:id', component: editPost},
]