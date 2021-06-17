require('./bootstrap');
import '../css/app.css'
import '../css/style.css'
import $ from 'jquery'
import axios from 'axios'
import {createApp} from 'vue/dist/vue.esm-bundler.js'
const app = createApp({
    data:()=>({
        test:'test',
        id_item:0,
        type_item:0,
    }),
    methods:{
        show_dec_item(){
            axios.post('/show/item' , {id : this.id_item , type:this.type_item}).then((res)=>{
                $('.page-view-item').html(res.data)
            })
            $('.page-view-item').fadeIn(200)
            $('.blur').fadeIn(200)
        },
        btn_cls_page_dec_item(){
            $('.page-view-item').fadeOut(200)
            $('.blur').fadeOut(200)
        },
        set_item(id , type){
            this.id_item = id;
            this.type_item = type;
        }
    },

})
app.mount('#app')
