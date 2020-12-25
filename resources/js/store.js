import Vuex from 'vuex';
import Vue from 'vue';

Vue.use(Vuex);

export const store = new Vuex.Store({
    state: {
        auth_id: '',
        my_url: "",
        file_default: {},
        file_form_field: {},
        file_table: {},
    },
    getters: {
        

    },
    mutations: {
        setAuth: function(state, auth_id){
            state.auth_id = auth_id;
        },
        setUrl: function(state, payload){
            state.my_url = payload.our_domain;
        },
        setDefault: function(state, payload){
            state.file_default = payload.default_lang_file;
        },
        setFormField: function(state, payload){
            state.file_form_field = payload.file_form_field;
        },
        setTableFile: function(state, payload){
            state.file_table = payload.file_table;
        }
    }
});
