<template>
  <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">{{title | capitalize}}</h4>
                <div class="d-flex align-items-center">

                </div>
            </div>
 
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return {

        }
    },
    computed: {
        title() {
        return this.$route.name;
    }
}

}
</script>

<style>

</style>