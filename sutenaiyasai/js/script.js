	// toggleボタンアニメーション 
	var toggleBtn = document.getElementById("header-toggle");
	var toggle_nav = document.getElementById("toggle-nav");
	toggleBtn.onclick = function() {
		toggleBtn.classList.toggle("toggle_anime_show");
		toggle_nav.classList.toggle("toggle-nav_show");
		document.documentElement.classList.toggle("overflowY");
		document.body.classList.toggle("overflowY");
	}

	// scrollしたらヘッダーを表示/非表示
	var header = document.getElementById("header");
	

	function menu_view() {
		var scrollTop = document.documentElement.scrollTop;
		// console.log(scrollTop);
		if(scrollTop > 190 ) {
			header.classList.add("header_hide");
			header.classList.remove("header_show");
			toggleBtn.classList.add("toggle_anime_scroll_show");
		} else if(scrollTop <= 190) {
			header.classList.remove("header_hide");
			header.classList.add("header_show");
			toggleBtn.classList.remove("toggle_anime_scroll_show");
		}
	}