<template>
    <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
            </li>
            <li class="nav-item">
                <router-link class="nav-link" tag="a" to="/request-off" id="request-off-tab" data-toggle="tab" href="#request-off" role="tab" aria-controls="request-off" aria-selected="false">Request OFF</router-link>
            </li>
            <li class="nav-item">
                <router-link class="nav-link" tag="a" to="/request-ot" id="request-ot-tab" data-toggle="tab" href="#request-ot" role="tab" aria-controls="request-ot" aria-selected="false">Request OT</router-link>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="container">
                    <router-view></router-view>
                </div>
            </div>
            <div class="tab-pane fade" id="request-off" role="tabpanel" aria-labelledby="request-off-tab">
                <div class="container">
                    <router-view></router-view>
                </div>
            </div>
            <div class="tab-pane fade" id="request-ot" role="tabpanel" aria-labelledby="request-ot-tab">
                <div class="container">
                    <router-view></router-view>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

    }
</script>
