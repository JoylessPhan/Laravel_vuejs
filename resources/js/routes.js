/* Quản lý phần vùng và quản lý tập trung router */

import OFFComponent from './components/manager/request/OFFComponent';
import OTComponent from './components/manager/request/OTComponent';
import DetailComponent from './components/manager/request/DetailComponent';
import FormComponent from './components/manager/request/FormComponent';

const routes = [
    {path: '/request-off', name: 'request-off', component: OFFComponent},
    {path: '/request-ot', name: 'request-ot', component: OTComponent},
    {path: '/request/show/:id', name: 'request-show', component: DetailComponent},
    {path: '/request/create', name: 'request-form', component: FormComponent},
];

export default routes;
