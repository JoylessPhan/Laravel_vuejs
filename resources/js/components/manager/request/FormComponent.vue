<template>
    <div class="card">
        <div class="card-header">
            {{title}}
            <div class="row">
                <div class="col-6">List</div>
                <div class="col-6 float-right">
                    <button class="btn btn-sm btn-success float-right" @click="save()">Create</button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row justify-content-center" style="margin-top: 60px">
                <form class="col-sm-6">
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10 align-middle">
                            <input type="text" class="form-control" id="" value="" >
<!--                            <small class="text-danger" v-if="errors.name">{{errors.name[0]}}</small>-->
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Time off</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="" v-model="form.time_off">
<!--                            <small class="text-danger" v-if="errors.date">{{errors.date[0]}}</small>-->
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Time</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="" v-model="form.date">
<!--                            <small class="text-danger" v-if="errors.time">{{errors.time[0]}}</small>-->
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Reason</label>
                        <div class="col-sm-10">
                            <textarea style="width: 100%" name="" id="" rows="4" v-model="form.reason"></textarea>
                            <small class="text-danger" v-if="errors.reason">{{errors.reason[0]}}</small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">TO</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="" v-model="form.to">
                            <small class="text-danger" v-if="errors.to">{{errors.to[0]}}</small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">CC</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="" v-model="form.carbon_copy">
                            <small class="text-danger" v-if="errors.carbon_copy">{{errors.carbon_copy[0]}}</small>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    import {createRequest} from "../../../api/request";


    export default {
        data() {

            return {
                request: {},
                title: '.: Create :.',
                form: {
                    time_off: '',
                    date: '',
                    reason: '',
                    to: '',
                    carbon_copy: '',
                },
                errors: {},
            }
        },
        created() {

        },
        methods: {
            save() {
                let form = this.form;
                createRequest(form)
                .then(res => /*console.log(res)*/{
                    if (res.save === true) this.$router.push('/request-off');
                })
                .catch(error => {
                    if (error.status === 422) this.errors = error.data.errors;
                })
            }
        }
    }
</script>
