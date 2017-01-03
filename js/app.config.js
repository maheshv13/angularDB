app.config(function($routeProvider) {
    $routeProvider
    .when("/", {
        templateUrl : "templates/home.html"
    })
    .when("/about", {
        templateUrl : "templates/about.html",
		controller:'aboutUs'
    })
    .when("/blog", {
        templateUrl : "templates/blog.html",
		controller:'blog'
    })
    .when("/contact", {
        templateUrl : "templates/contact.html",
		controller:'contactUs'
    });
});