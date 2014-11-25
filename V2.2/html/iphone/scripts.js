


	var content = "iphone";
	var breadcrumb = "";
	

	function swap_content() {
	document.getElementById('includeContent').innerHTML = document.getElementById(content).innerHTML
	document.getElementById('last_breadcrumb').innerHTML = breadcrumb
	if (content == "iphone") {
		content = "iphone_detail";
		breadcrumb = " // achtergrond";
	} else {
		content = "iphone";
		breadcrumb = "";
	}
}
