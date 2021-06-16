require('./bootstrap');
import '../css/app.css'
import '../css/style.css'
import $ from 'jquery'
import axios from 'axios'
import {createApp} from 'vue/dist/vue.esm-bundler.js'
const app = createApp({
    data:()=>({
        test:'test',
    })
})
app.mount('#app')
