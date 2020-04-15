
<h2>Известные проблемы:</h2>
		<p>Из-за сложости и нагруженности логики на третьем шаге может выбросить из системы, Нудно вернуться на первый шаг и пройти заново.<br>
		Все внесённые настройки соответствий должны сохраниться</p>

<h2>Шаг 1: Основные настройки</h2>
<p>
	Выберите магазин для импорта товаров: Из списка нужно выбрать магазин для которого нужно запустить синхронизацию<br>
	Email (или список через запятую), на который будут отправляться сообщения:	Здесь через запятую можно прописать неограниченное количество адресов на которые будет отправлен отчёт по завершении процедуры<br>
	Ссылка на xml файл:	Нужна для переноса товаров со старого сайта, пока заблокирована</p>

<p>Настройка обновления товаров и предложений*:</p>
<ul>
	<li>Обновлять цену:</li> 
	<li>Обновлять поля и свойства (кроме картинок):</li>	
	<li>Обновлять картинки:</li> 
</ul>

<p>*каждая включенная опция увеличивает нагрузку и соответственно время обновления уже добавленных товаров, на время добавления новых товаров данные опции никак не влияют.</p>

<h2>Шаг 2: Настройка сопоставления разделов из файла ИнфоБлокам.</h2>
<p>Настройки нужно пройти один раз, они запоминаются для каждого магазина, но в файле могут появится новые разделы, поэтому проглядывать на неопределённые разделы нужно каждый раз.</p>
	
<h2>Шаг 3: Сопоставление св-в из файла св-вам ИнфоБлоков</h2>
<p>На странице представлены отдельные блоки для каждого ИнфоБлока.
	А также обязательные предустановленные св-ва, их нельзя изменить, эти записи носят информационный характер.</p>

<p>В блоке ИнфоБлока нужно выбрать с каким св-вом или полем* ИнфоБлока нужно сопоставить св-во из файла,
	здесь же можно создать новое св-во в Инфоблоке, кликнув на соответствующую ссылку в колонке "Создать свойство",
	можно указать, что это св-во не нужно синхронизировать - галочка в колонке "Игнорировать"
	а так же можно указать, что это св-во должно принадлежать не товару или не только товару, но и торговому предложению. Например "цвет".
	при установленной галочке "Сопоставить поле для инфоблока ТП" ниже блока св-в для ИнфоБлока появится дополнительный блок со св-вами торговых предложений.</p>

<p>*Св-ва - это то что создано вручную, поля - системные св-ва битрикса, например картинка для анонса или детальный текст.</p>

<p>Если на этом шаге нет св-в для сопоставления - значит в файле представлены только обязательные поля без доп параметров.</p>	

<p>Настройки нужно пройти один раз, они запоминаются для каждого магазина, но в файле могут появится новые св-ва, поэтому проглядывать на неопределённые св-ва стоит каждый раз.</p>
	
<h2>Шаг 4 Запуск скрипта</h2>
<p>После запуска через некоторое время появится счётчик.<br>
	Даже если вас выбросило из системы не закрывайте страницу - счётчик будет продолжать меняться.<br>
	Дождитесь пока число счётчика не сравняется с общим числом.<br>
</p>

<p>Во время загрузки рекомендуем работать с сайтом и запускать скипт в разных браузерах.</p>