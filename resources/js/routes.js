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
    { path: "*", component: require("./components/NotFound.vue").default }
];
