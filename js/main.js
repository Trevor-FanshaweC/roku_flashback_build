// components will go here
import LoginComponent from './components/LoginComponent.js'; // this is like doing a php include 
import UsersComponent from './components/UsersComponent.js';   

const routes = [
    { path: '/', redirect: { name: "login"} },
    { path: "/login", name: "login", component: LoginComponent },
    { path: "/users", name: "users", component: UsersComponent }
];

const router = new VueRouter({
    routes
});

const vm = new Vue({
    data: {
        message: "sup from vue!",
        authenticated : false,
        administrator: false,

        mockAccount: {
            username: "tvr",
            password: "password"
        },

        user: [],

        currentUser: {}
    },

    created: function() {
        console.log('parent is live');
    },

    methods: {
        logParent(message) {
            console.log("from the parent", message);
        },

        logMainMessage(message) {
            console.log("called from inside a child, lives in the parent", message);
        },

        setAuthenticated(status) {
            this.authenticated = status;
        },

        logout() {
            this.$router.push({ path: "/login" });
            this.authenticated = false;            
        },

        setCurrentUser(user) {
            // stub
            console.log('hit setCurrentUser');
        }
    },

    router: router
    
}).$mount("#app");

// make the router check all of the routes and bounce back if we're not authenticated
router.beforeEach((to, from, next) => {
    console.log("router guard fired!");

    if (vm.authenticated == false) {
        next("/login");
    } else {
        next();
    }
});
