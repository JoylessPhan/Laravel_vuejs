<template>
    <div class="">
        <div class="card">
            <div class="card-header">
               <div class="row">
                   <div class="col-6">List</div>
                   <div class="col-6 float-right">
                       <button class="btn btn-sm btn-success float-right" @click="$router.push('/request/create')">Create</button>
                   </div>
               </div>
            </div>
            <div class="card-body">
                <DataTable :theads="theads" :params="params">
                    <template #filter>
                        <h4>Request OFF</h4>
                    </template>
                    <template #tbody="props">
                        <tr v-for="item in props.items">
                            <th scope="row">{{item.id}}</th>
                            <th @click="$router.push('/request/show/'+item.id)">{{item.last_name + item.first_name}}</th>
                            <th>{{item.email}}</th>
                            <th>{{item.phone}}</th>
                            <th>{{item.address}}</th>
                            <th>
                                <button class="btn btn-info btn-sm" @click="$router.push('/request/show/'+item.id)">Detail</button>
                            </th>
                            <th>
                                <button class="btn btn-danger btn-sm">Edit</button>
                            </th>
                        </tr>
                    </template>
                </DataTable>
            </div>
        </div>
    </div>
</template>

<script>
    import DataTable from '../../../commons/DataTable'

    export default {
        data() {
            return {
                theads: [
                    {title: '#ID', key: 'id', sort: true, width: '66px'},
                    {title: 'Name', key: 'name', sort: false},
                    {title: 'Email', key: 'email', sort: true},
                    {title: 'Phone', key: 'phone', sort: true},
                    {title: 'Address', key: 'address', sort: true},
                    {title: 'Action', key: 'action', sort: false},
                ],
                params: {
                    page: 1,
                    sort_column: 'id',
                    direction: 'desc',
                    per_page: 10
                },
            }
        },
        components: {
            DataTable,
        },
    }
</script>
