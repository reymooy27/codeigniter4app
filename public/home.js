	const nav = document.getElementById('nav');
		const btn = document.getElementById('btn');
		btn.addEventListener('click', () => {
			console.log(nav.style.top)
			if (nav.style.top === '-100%') {
				nav.style.top = '0%'
			} else {
				nav.style.top = '-100%'
			}
		})