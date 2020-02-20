<template>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-6">List</div>
                <div class="col-6 float-right">
                    <button class="btn btn-sm btn-danger float-right">Delete</button>
<!--                    <button class="btn btn-sm btn-success float-right">Create</button>-->
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row justify-content-center" style="margin-top: 60px">
                <form class="col-sm-6">
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Name</label>
                        <p class="align-middle">{{request.last_name}}</p>
                        <div class="col-sm-10 align-middle">
                            <!--                    <input type="text" class="form-control" id="" value="">-->
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Date</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Time</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Reason</label>
                        <div class="col-sm-10">
                            <textarea name="" id="" cols="52" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">TO</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="">
                            <!--<ul v-if="results.length > 0">
                                <li v-for="result in results" :key="result.id" v-text="result.email" v-html="highlight(result.title)"></li>
                            </ul>-->
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">CC</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    import {showRequest, deleteRequest, searchEmail} from "../../../api/request";


    export default {
        data() {
            return {
                request: {},
                titile: '.: Create :.'
            }
        },
        created() {
            this.fetchData();
        },
        /*watch: {
            keywords(after, before) {
                this.fetch();
            }
        },*/
        methods: {
            fetchData() {
                showRequest(this.$route.params.id)
                    .then(res => this.request = res.request)
                    .catch(error => console.log(error))
            },
            remove() {
                if (confirm('Are you sure delete?')) {
                    deleteRequest(this.$route.params.id)
                        .then(res => {
                            if (res.deleted === true) {
                                this.$router.push('/request-off');
                            }
                        })
                        .catch(error => console.log(error))
                }
            },
            /*fetch() {
                searchEmail(this.keywords)
                    .then(res => console.log(res))
                    .catch(error => console.log(error))
            }*/
        }
    }
</script>
