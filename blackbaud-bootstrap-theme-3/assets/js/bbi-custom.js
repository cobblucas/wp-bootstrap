BBI
.register({
	alias: "MyApp",
	author: "First Last"
})
.action("global", function (app, bbi, $) {
	$(function () {
	
		bbi.log("Hello, World!");
		
		// Add custom code here...
		
	});
})
.build();