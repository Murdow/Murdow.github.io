//Functions que serão ativadas conforme selecionadas
function cookies(functions) {
	const container = document.querySelector('.cookies-container');
	const save = document.querySelector('.cookies-save');

	if(!container || !save) return null;

	//Verifica se existem opções salvas e executa
	const localPref = JSON.parse(window.localStorage.getItem('cookies-pref'));
	if(localPref) activateFunctions(localPref);

	function getFormPref() {
		/*
		Recebe os checkboxes e transforma em array. 
		Filtra o array para ficar apenas com os checkboxes ativos
		mapeia para pegar apenas o nome dentro do atribute 'data-function'
		*/
		return [...document.querySelectorAll('[data-function]')]
		.filter(el => el.checked)
		.map((el) => el.getAttribute('data-function'));
	}

	function activateFunctions(pref) {
		//Ativa tds as funções marcadas
		pref.forEach(f => functions[f]());

		container.style.display = 'none';

		//Salva as opçoes no localStorage
		window.localStorage.setItem('cookies-pref', JSON.stringify(pref));
	}

	//Verifica o estados das opções
	function handleSave() {
		const pref = getFormPref();
		activateFunctions(pref);
	}

	save.addEventListener('click', handleSave);
}

function marketing() {
	console.log('Função Marketing');
}

function analytics() {
	console.log('Função Analytics');

	//Analytics
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-91928812-1', 'auto');
	ga('send', 'pageview');


	//Hotjar
	 (function(h,o,t,j,a,r){
	        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
	        h._hjSettings={hjid:792489,hjsv:6};
	        a=o.getElementsByTagName('head')[0];
	        r=o.createElement('script');r.async=1;
	        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
	        a.appendChild(r);
	    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
}


cookies({
	marketing,
	analytics
});