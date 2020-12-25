<template>
    <div>
      
    </div>
</template>

<script>
    export default {
        props: ['auth_id', 'domain', 'default_lang', 'file_form_field', 'file_table'],
        mounted() {
            // these are for access necessary data from anywhere of the application

            this.$store.commit('setAuth', this.auth_id); // for access admin id 

            // for access domain
            this.$store.commit('setUrl', {
                our_domain: this.domain
            });

            // for language default file
            this.$store.commit('setDefault', {
              default_lang_file: this.default_lang 
            });

            // for language form field file
            this.$store.commit('setFormField', {
              file_form_field: this.file_form_field 
            });

            // for language table file
            this.$store.commit('setTableFile', {
              file_table: this.file_table 
            });
        }
    }
</script>
