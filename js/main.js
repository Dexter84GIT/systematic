const mobileMenu = () => {
    const body = document.querySelector('body')
    const wrapper = document.querySelector('.mobile-wrapper')
    const btn = document.querySelector('.burger-btn')

    body.addEventListener('click', (e) => {
        if ((e.target.classList.contains('burger-btn')) || (e.target.closest('.burger-btn'))) {
            wrapper.classList.toggle('active')
            btn.classList.toggle('active')
        }
        else if (!e.target.closest('.mobile-menu')) {
            wrapper.classList.remove('active')
            btn.classList.remove('active')
        } 
    })
}
const servicesPrices = () => {
	const services = [
		{
			name: 'Услуги по разработке корпоративных веб-ресурсов, интернет-магазинов и клиентских порталов',
			code: '1.05',
			price: 'от 5 000,00 ₽',
		},
		{
			name: 'Услуги по сопровождению разработок, доработке и поддержанию работы корпоративных веб-ресурсов, интернет-магазинов и клиентских порталов',
			code: '1.05',
			price: 'от 4 000,00 ₽',
		},
		{
			name: 'Услуги по доработки и обновлению учетных программ на базе 1С предприятие - 1C:WMS, 1C:Бухгалтерия; 1C:KPI; 1C:ЗУП; 1C:УТ; 1C:БитФинанс',
			code: '1.01',
			price: 'от 4 000,00 ₽',
		},
		{
			name: 'Услуги по разработке и сопровождению мобильных приложений для корпоративных систем',
			code: '1.01',
			price: 'от 7 000,00 ₽',
		},
		{
			name: 'Услуги по разработке конфигурированию CRM систем на базе Битрикс числом пользователи до 1000',
			code: '1.01',
			price: 'от 7 000,00 ₽',
		},
		{
			name: 'Услуги по сопровождению разработок, доработке и поддержанию работы CRM систем на базе Битрикс числом пользователи до 1000',
			code: '1.01',
			price: 'от 5 000,00 ₽',
		},
		{
			name: 'Услуги по конфигурированию систем баз данных на базе MS SQL до 200 баз, общим объемом до 50 Тбайт',
			code: '3.01',
			price: 'от 5 000,00 ₽',
		},
		{
			name: 'Услуги по поддержке, сопровождению, оптимизации и развитию систем баз данных на базе MS SQL до 200 баз, общим объемом до 50 Тбайт',
			code: '1.06',
			price: 'от 4 000,00 ₽',
		},
		{
			name: 'Услуги по конфигурированию внутренней ИТ-инфраструктуры до 1000 рабочих мест',
			code: '1.06',
			price: 'от 5 000,00 ₽',
		},
		{
			name: 'Услуги по поддержке, сопровождению, оптимизации и развитию внутренней ИТ-инфраструктуры до 1000 рабочих мест',
			code: '1.06',
			price: 'от 2 000,00 ₽',
		},
		{
			name: 'Услуги по конфигурированию рабочих мест сотрудников до 1000 устройств и пользователей',
			code: '1.06',
			price: 'от 3 000,00 ₽',
		},
		{
			name: 'Услуги по конфигурированию рабочих мест сотрудников до 1000 устройств и пользователей',
			code: '1.06',
			price: 'от 3 000,00 ₽',
		},
		{
			name: 'Услуги по поддержке и развитию внутренней ИТ-инфраструктуры до 500 физических и виртуальных серверов',
			code: '1.06',
			price: 'от 1 000,00 ₽',
		},
		{
			name: 'Услуги по поддержке, сопровождению, оптимизации и развитию рабочих мест сотрудников до 1000 устройств и пользователей',
			code: '1.06',
			price: 'от 1 000,00 ₽',
		},
		{
			name: 'Услуги по поддержке, сопровождению, оптимизации и развитию систем удаленного терминального доступа до 1000 пользователей',
			code: '1.06',
			price: 'от 4 000,00 ₽',
		},
		{
			name: 'Услуги по поддержке, сопровождению, оптимизации и развитию систем почтового сервиса с выделением почтовых ящиков до 1000 пользователей, с объемом до 10 Гбайт на каждого',
			code: '1.06',
			price: 'от 2 000,00 ₽',
		},
		{
			name: 'Услуги по конфигурированию систем почтового сервиса с выделением почтовых ящиков до 1000 пользователей, с объемом до 10 Гбайт на каждого',
			code: '1.06',
			price: 'от 2 000,00 ₽',
		},
		{
			name: 'Услуги по поддержке, сопровождению, оптимизации и развитию систем видеонаблюдения до 1000 устройств',
			code: '1.06',
			price: 'от 3 000,00 ₽',
		},
		{
			name: 'Услуги по поддержке, сопровождению, оптимизации и развитию систем видеонаблюдения до 1000 устройств',
			code: '1.06',
			price: 'от 3 000,00 ₽',
		},
	];

	const servicesContainer = document.querySelector('.services-list');

	if (servicesContainer) {
		services.forEach((service) => {
			const item = document.createElement('div');
			item.classList.add('row');
			const name = document.createElement('p');
			name.classList.add('name');
			const code = document.createElement('p');
			code.classList.add('code');
			const price = document.createElement('p');
			price.classList.add('price');

			name.textContent = service.name;
			code.textContent = service.code;
			price.textContent = service.price;

			item.append(name, code, price);
			servicesContainer.append(item);
		});
	}
}

mobileMenu()
servicesPrices()