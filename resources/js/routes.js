import OFFComponent from './components/manager/request/OFFComponent';
import OTComponent from './components/manager/request/OTComponent';

const routes = [
    {path: '/off', name: 'request_off', component: OFFComponent},
    {path: '/ot', name: 'request_ot', component: OTComponent},
];

export default routes;
