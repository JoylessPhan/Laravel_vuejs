import OFFComponent from './components/manager/request/OFFComponent';
import OTComponent from './components/manager/request/OTComponent';
import DetailComponent from './components/manager/request/DetailComponent';

const routes = [
    {path: '/request-off', name: 'request_off', component: OFFComponent},
    {path: '/request-ot', name: 'request_ot', component: OTComponent},
    {path: '/request/show/:id', name: 'request_show', component: DetailComponent},
];

export default routes;
