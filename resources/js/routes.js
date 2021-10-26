export default [
    {
        path: "/dashboard",
        component: require("./components/Dashboard.vue").default
    },
    {
        path: "/profile",
        component: require("./components/Profile.vue").default
    },
    {
        path: "/timesheets/create",
        component: require("./components/timesheets/Create.vue").default
    },
    {
        path: "/forms/general",
        component: require("./components/forms/General.vue").default
    },
    {
        path: "/forms/advanced",
        component: require("./components/forms/Advanced.vue").default
    },
    {
        path: "/forms/editors",
        component: require("./components/forms/Editors.vue").default
    },
    {
        path: "/forms/validation",
        component: require("./components/forms/Validation.vue").default
    },
    {
        path: "/developer",
        component: require("./components/Developer.vue").default
    },
    { path: "/users", component: require("./components/Users.vue").default },
    {
        path: "/products",
        component: require("./components/product/Products.vue").default
    },
    {
        path: "/product/tag",
        component: require("./components/product/Tag.vue").default
    },
    {
        path: "/product/category",
        component: require("./components/product/Category.vue").default
    },
    {
        path: "/pay/listcreditnotes",
        component: require("./components/pay/Listcreditnotes.vue").default
    },
    {
        path: "/pay/listinvoice",
        component: require("./components/pay/Listinvoice.vue").default
    },
    {
        path: "/pay/search",
        component: require("./components/pay/Search.vue").default
    },    
    {
        path: "/sales/listcreditnotes",
        component: require("./components/sales/Listcreditnotes.vue").default
    },
    {
        path: "/sales/purchaseorder",
        component: require("./components/sales/Purchaseorder.vue").default
    },
    {
        path: "/sales/listinvoice",
        component: require("./components/sales/Listinvoice.vue").default
    },
    {
        path: "/sales/search",
        component: require("./components/sales/Search.vue").default
    },
    {
        path: "/sales/createpurchaseorder",
        component: require("./components/sales/CreatePurchaseorder.vue").default
    },
    {
        path: "/myaccount/personaldetails",
        component: require("./components/myaccount/Personaldetails.vue").default
    },
    {
        path: "/myaccount/notification",
        component: require("./components/myaccount/Notification.vue").default
    },
    {
        path: "/setting/configuration",
        component: require("./components/setting/Configuration.vue").default
    },
    { path: "*", component: require("./components/NotFound.vue").default }
];
