<?php
defined('VALID') or die();

$debug = false;

$folder = "output";
$mediaFolder = "media";

$menu_width = "30%";

$valid_ids = array("ui_codex", "ui_tutorial", "ui_tutotial");
$not_valid_ids = array("ui_codex_unlockTotal", "ui_tutorial_cont_hardcore_combat_advance", "ui_tutorial_cont_hardcore_horse", "ui_tutorial_cont_hardcore_injury");
$fixations = array(
	"ui_codex_name_" => "ui_codex_name_slechta",
	"ui_codex_name_klasterni_hier" => "ui_codex_name_klaster_hier",
	"ui_codex_name_kumani_v_cechach" => "ui_codex_name_kumani",
	"ui_codex_name_mincmistr" => "ui_codex_name_minscmistr",
	"ui_codex_name_pastime_lov" => "ui_codex_name_lov",
	"ui_codex_name_ppraviste" => "ui_codex_name_popraviste",
	"ui_codex_name_taboreni" => "ui_codex_name_teboreni",
	"ui_codex_name_zivot_v_klast" => "ui_codex_name_zivot_v_klaster",
	"ui_tutorial_name_napravnik" => "ui_codex_name_napravnik",
	"ui_tutorial_name_pansky_urednik" => "ui_codex_name_pansky_urednik",
	"ui_tutorial_name_stavebni_hut" => "ui_codex_name_stavebni_hut",
	"ui_tutorial_name_shadiness" => "ui_tutotial_name_shadiness"
);

$m_general = array(
	"cats" => array("general", "blank"),
	"text" => "ui_tab_general"
);
$m_location = array(
	"cats" => array("location"),
	"text" => "ui_tab_locations"
);
$m_events = array(
	"cats" => array("event"),
	"text" => "ui_tab_events"
);
$m_society = array(
	"cats" => array("craft", "specifics", "rod", "society", "pani", "opati", "zul"),
	"text" => "ui_tab_society"
);
$m_character = array(
	"cats" => array("character"),
	"text" => "ui_tab_characters"
);
$m_tutorials = array(
	"cats" => array("tutorial"),
	"text" => "ui_tab_tutorials"
);

$nachazoUrl = '<a href="http://twitter.com/nachazo" target="_blank">@nachazo</a>';
$kcdName = '<b>Kingdom Come: Deliverance</b>';
$kcdUrl = '<a href="https://www.kingdomcomerpg.com" target="_blank">Kingdom Come: Deliverance</a>';
$kcdWarhorse = '<a href="https://warhorsestudios.cz/" target="_blank">Warhorse Studios</a>';
$issuesLink = '<a href="https://github.com/kingdomcomecodex/kingdomcomecodex.github.io/issues" target="_blank">GitHub</a>';

$lang_texts = array(
	"en" => array(
		"home" => "Go to the welcome page",
		"category" => "Show whole category",
		"previous" => "Previous article",
		"next" => "Next article",
		"mark-as-read" => "Mark as read",
		"mark-as-unread" => "Mark as unread",
		"changeLang" => "Change language to",
		"codex" => "Codex",
		"name" => "ENGLISH",
		"search" => "Search...",
		"welcome" => "Welcome to the online {$kcdName} Codex reader. Made using language and image files from the game with love by {$nachazoUrl}.",
		"issues" => "You can send feedback and issues in {$issuesLink} project.",
		"change" => "You can change the language clicking in the desired flag on the list.",
		"lang" => "Selected language is:",
		"viewSection" => "View section",
		"viewMenu" => "Open/close menu",
		"mapOnline" => "Map online",
		"cookiesAdvise" => "This site use cookies for store last article read, the language and if you mark as read articles. If you want to delete that from your browser, remove all stored <code>kcd_codex_*</code> cookies.",
		"footer" => "The literal and graphical information presented on this site about {$kcdUrl}, including images and text, is copyright and property of {$kcdWarhorse}.",
		"plusSize" => "Increase width",
		"minusSize" => "Reduce width",
		"permalink" => "Permalink",
		"openInMap" => "Open this location in game map",
		"cookiesDeleteAll" => "Delete all cookies of this site",
		"spoilerModalTitle" => 'Could see spoilers...',
		"spoilerModalText" => 'We know many people worried about spoilers. Opening this link <b>could show you where are located some things that you maybe prefer to discover</b> during the game. This message is only showed for some places, not take account about first steps of the game. So:',
		"spoilerModalYesAlways" => 'Yes! Open it this time and always',
		"spoilerModalYesThis" => 'Yes! Open just this time...',
		"spoilerModalNoNever" => 'No! I prefer to discover myself'
	),
	"es" => array(
		"home" => "Ir a la ventana de bienvenida",
		"category" => "Mostrar toda la categoría",
		"previous" => "Artículo anterior",
		"next" => "Artículo siguiente",
		"mark-as-read" => "Marcar como leído",
		"mark-as-unread" => "Marcar como no leído",
		"changeLang" => "Cambiar lenguaje a",
		"codex" => "Códice",
		"name" => "CASTELLANO",
		"search" => "Buscar...",
		"welcome" => "Bienvenido al códice de {$kcdName}. Realizado utilizando las imágenes y archivos de idioma del juego, con mucho amor por {$nachazoUrl}.",
		"issues" => "Puedes notificar errores y solicitar modificaciones en el proyecto de {$issuesLink}.",
		"lang" => "El idioma seleccionado es: ",
		"change" => "Puedes cambiar el idioma pulsando en la bandera deseada de la lista.",
		"viewSection" => "Leer el apartado",
		"viewMenu" => "Abrir/cerrar menú",
		"mapOnline" => "Mapa online",
		"cookiesAdvise" => "Este sitio utiliza cookies para almacenar el último articulo visitado, el idioma y si marcas como leído un artículo. Si quieres borrar las cookies, elimina todas las que empiecen por <code>kcd_codex_*</code> almacenadas.",
		"footer" => "La información textual y gráfica presentada en este sitio web sobre {$kcdUrl} es propiedad y tiene copyright de {$kcdWarhorse}.",
		"plusSize" => "Aumentar ancho",
		"minusSize" => "Reducir ancho",
		"permalink" => "Permalink",
		"openInMap" => "Abrir esta localización en el mapa del juego",
		"cookiesDeleteAll" => "Eliminar todas las cookies de este sitio",
		"spoilerModalTitle" => 'Podría contener spoilers ...',
		"spoilerModalText" => 'Sabemos de mucha gente preocupada por los spoilers. Al abrir este enlace <b>podrías ver dónde se encuentran algunas cosas que tal vez prefieras descubrir</b> durante el juego. Este mensaje solo se muestra para algunos lugares, no se tienen en cuenta los primeros pasos del juego. Asi que:',
		"spoilerModalYesAlways" => '¡Sí! Ábrelo esta vez y siempre ',
		"spoilerModalYesThis" => '¡Sí! Ábrelo solo esta vez... ',
		"spoilerModalNoNever" => '¡No! Prefiero decubrirlo por mí mismo'
	),
	"ru" => array(
		"home" => "Перейти на страницу приветствия",
		"category" => "Показать всю категорию",
		"previous" => "Предыдущая статья",
		"next" => "Следующая статья",
		"mark-as-read" => "Марк прочитал",
		"mark-as-unread" => "Отметить как непрочитанное",
		"changeLang" => "Измените язык на",
		"codex" => "Кодекс",
		"name" => "РУССКИЙ",
		"search" => "Поиск...",
		"welcome" => "Добро пожаловать в онлайн {$kcdName} Читатель Codex. Сделано с использованием языков и файлов изображений из игры с любовью к {$nachazoUrl}.",
		"issues" => "Вы можете отправить отзыв и проблемы в проекте {$issuesLink}.",
		"change" => "Вы можете изменить язык, щелкнув нужным флажком в списке.",
		"lang" => "Выбранный язык:",
		"viewSection" => "View section",
		"viewMenu" => "Просмотр раздела",
		"mapOnline" => "Карта онлайн",
		"cookiesAdvise" => "Этот сайт использует файлы cookie для хранения последней прочитанной статьи, языка и если вы отмечаете как прочитанные статьи. Если вы хотите удалить это из своего браузера, удалите все сохраненные куки-файлы <code>kcd_codex_*</code>.",
		"footer" => "Литературная и графическая информация, представленная на этом сайте о {$kcdUrl} включая изображения и текст, является авторским правом и собственностью {$kcdWarhorse}.",
		"plusSize" => "Увеличить ширину",
		"minusSize" => "Уменьшить ширину",
		"permalink" => "Постоянная ссылка",
		"openInMap" => "Открыть это место в карте игры",
		"cookiesDeleteAll" => "Удалить все файлы cookie этого сайта",
		"spoilerModalTitle" => "Могут увидеть спойлеры...",
		"spoilerModalText" => "Мы знаем, что многие люди беспокоятся о спойлерах. Открытие этой ссылки <b>может показать вам, где расположены некоторые вещи, которые вы, возможно, предпочитаете обнаруживать</b> во время игры. Это сообщение отображается только в некоторых местах, а не о первых шагах игры. Так:",
		"spoilerModalYesAlways" => "Да! Откройте его на этот раз и всегда",
		"spoilerModalYesThis" => "Да! Откройте только на этот раз...",
		"spoilerModalNoNever" => "Нет! Я предпочитаю открыть себя",
	),
	"fr" => array(
		"home" => "Aller à la page d'accueil",
		"category" => "Afficher toute la catégorie",
		"previous" => "Article précédent",
		"next" => "Article suivant",
		"mark-as-read" => "Marquer comme lu",
		"mark-as-unread" => "Marquer comme non lu",
		"changeLang" => "Changer la langue pour",
		"codex" => "Codex",
		"name" => "FRANÇAIS",
		"search" => "Chercher...",
		"welcome" => "Bienvenue sur le site en ligne {$kcdName} lecteur du codex. Fabriqué en utilisant des fichiers de langue et d'image du jeu avec amour par {$nachazoUrl}.",
		"issues" => "Vous pouvez envoyer des commentaires et des problèmes dans le {$issuesLink} projet.",
		"change" => "Vous pouvez changer la langue en cliquant sur le drapeau désiré dans la liste.",
		"lang" => "La langue sélectionnée est:",
		"viewSection" => "Voir la section",
		"viewMenu" => "Ouvrir/fermer le menu",
		"mapOnline" => "Carte en ligne",
		"cookiesAdvise" => "Ce site utilise des cookies pour stocker le dernier article lu, la langue et si vous marquez comme des articles lus. Si vous voulez le supprimer de votre navigateur, supprimez tous les cookies <code>kcd_codex_*</code> stockés.",
		"footer" => "Les informations littérales et graphiques présentées sur ce site à propos de {$kcdUrl}, y compris les images et les textes, sont la propriété de {$kcdWarhorse}.",
		"plusSize" => "Augmenter la largeur",
		"minusSize" => "Réduire la largeur",
		"permalink" => "Permalien",
		"openInMap" => "Ouvrir cet emplacement dans la carte du jeu",
		"cookiesDeleteAll" => "Supprimer tous les cookies de ce site",
		"spoilerModalTitle" => "Pourrait voir les spoilers...",
"spoilerModalText" => "Nous savons que beaucoup de gens s'inquiètent des spoilers. L'ouverture de ce lien <b>pourrait vous montrer où se trouvent certaines choses que vous préférez peut-être découvrir</b> pendant le jeu. Ce message est seulement montré pour certains endroits, ne pas tenir compte des premières étapes du jeu. Alors:",
		"spoilerModalYesAlways" => 'Oui! Ouvrez-le cette fois et toujours',
		"spoilerModalYesThis" => 'Oui! Ouvrez juste cette fois...',
		"spoilerModalNoNever" => 'Non! Je préfère me découvrir',
	),
	"de" => array(
		"home" => "Gehe zur willkommensseite",
		"category" => "Ganze kategorie anzeigen",
		"previous" => "Vorheriger artikel",
		"next" => "Nächster artikel",
		"mark-as-read" => "Als gelesen markieren",
		"mark-as-unread" => "Als ungelesen markieren",
		"changeLang" => "Sprache ändern auf",
		"codex" => "Kodex",
		"name" => "DEUTSCHE",
		"search" => "Suche...",
		"welcome" => "Willkommen zum online Kodex von {$kcdName}! Erstellt mit Liebe von {$nachazoUrl} aus Text und Bilddateien des Spiels. Im Github Projekt können sie Feedback/Probleme senden.",
		"issues" => "Sie können feedback und probleme im projekt {$issuesLink} senden.",
		"change" => "Sie können die sprache ändern, indem sie auf die gewünschte flagge in der liste klicken.",
		"lang" => "Gewählte sprache ist:",
		"viewSection" => "Abschnitt anzeigen",
		"viewMenu" => "Menü öffnen/schließen",
		"mapOnline" => "Karte online",
		"cookiesAdvise" => "Diese website verwendet cookies zum speichern des letzten gelesenen artikels, der sprache und wenn sie als gelesene artikel markieren. Wenn sie diese in ihrem browser löschen möchten, entfernen sie alle gespeicherten <code>kcd_codex_*</code> cookies.",
		"footer" => "Die wörtlichen und grafischen informationen, die auf dieser seite über {$kcdUrl} präsentiert werden, einschließlich bildern und text, sind urheberrechtlich geschützt und eigentum von {$kcdWarhorse}.",
		"plusSize" => "Breite vergrößern",
		"minusSize" => "Breite reduzieren",
		"permalink" => "Permalink",
		"openInMap" => "Öffne diesen ort in der spielkarte",
		"cookiesDeleteAll" => "Löschen sie alle cookies dieser site",
		"spoilerModalTitle" => "Könnte spoiler sehen...",
		"spoilerModalText" => 'Wir kennen viele leute, die sich sorgen wegen spoilern machen. Wenn du diesen link <b>öffnest, kannst du sehen, wo sich einige dinge befinden, die du vielleicht während des spiels</b> entdecken möchtest. Diese nachricht wird nur für einige orte angezeigt, berücksichtigt nicht die ersten schritte des spiels. Damit:',
		"spoilerModalYesAlways" => 'Ja! Öffne es diesmal und immer',
		"spoilerModalYesThis" => 'Ja! Nur dieses mal öffnen...',
		"spoilerModalNoNever" => 'Nein! Ich entdecke mich lieber selbst',
	),
	"it" => array(
		"home" => "Vai alla pagina di benvenuto",
		"category" => "Mostra l'intera categoria",
		"previous" => "Articolo precedente",
		"next" => "Articolo successivo",
		"mark-as-read" => "Contrassegna come letto",
		"mark-as-unread" => "Contrassegna come non letto",
		"changeLang" => "Cambia lingua in",
		"codex" => "Codex",
		"name" => "ITALIANO",
		"search" => "Cerca...",
		"welcome" => "Benvenuto nel lettore online di {$kcdName} codici. Realizzato utilizzando il linguaggio e i file di immagini dal gioco con amore di {$nachazoUrl}.",
		"issues" => "Puoi inviare feedback e problemi nel progetto {$issuesLink}.",
		"change" => "Puoi cambiare la lingua facendo clic sulla bandiera desiderata nell'elenco.",
		"lang" => "La lingua selezionata è:",
		"viewSection" => "Visualizza sezione",
		"viewMenu" => "Apri/chiudi il menu",
		"mapOnline" => "Mappa online",
		"cookiesAdvise" => "Questo sito utilizza i cookie per memorizzare l'ultimo articolo letto, la lingua e se si contrassegnano come articoli letti. Se si desidera eliminarlo dal proprio browser, rimuovere tutti i cookie <code>kcd_codex_*</code> memorizzati. ",
		"footer" => "Le informazioni letterali e grafiche presentate in questo sito su {$kcdUrl}, incluse immagini e testo, sono copyright e proprietà di {$kcdWarhorse}.",
		"plusSize" => "Aumenta larghezza",
		"minusSize" => "Riduci larghezza",
		"permalink" => "Permalink",
		"openInMap" => "Apri questa posizione nella mappa di gioco",
		"cookiesDeleteAll" => "Elimina tutti i cookie di questo sito",
		"spoilerModalTitle" => 'Potrebbe vedere spoiler...',
		"spoilerModalText" => "Sappiamo che molte persone sono preoccupate per gli spoiler. L'apertura di questo link <b>potrebbe mostrarti dove si trovano alcune cose che forse preferisci scoprire</b> durante il gioco. Questo messaggio viene mostrato solo per alcuni posti, non tenendo conto dei primi passi del gioco. Così:",
		"spoilerModalYesAlways" => 'Sì! Aprila questa volta e sempre',
		"spoilerModalYesThis" => 'Sì! Apri solo questa volta... ',
		"spoilerModalNoNever" => 'No! Preferisco scoprirmi',
	),
	"zh" => array(
		"home"=>"转到欢迎页面",
		"category"=>"显示整个类别",
		"previous"=>"上一篇文章",
		"next"=>"下一篇文章",
		"mark-as-read"=>"标记为已读",
		"mark-as-unread"=>"标记为未读",
		"changeLang"=>"将语言更改为",
		"codex"=>"典籍",
		"name"=>"中文",
		"search"=>"搜索...",
		"welcome"=>"欢迎来到{$kcdName}在线阅读器。 使用{$nachazoUrl}爱的游戏中的语言和图像文件制作而成",
		"issues" => "您可以在{$issuesLink}项目中发送反馈和问题",
		"change"=>"您可以更改列表中所需标志的单击语言",
		"lang"=>"所选语言是：",
		"viewSection"=>"查看部分",
		"viewMenu"=>"打开/关闭菜单",
		"mapOnline"=>"在线地图",
		"cookiesAdvise"=>"本网站使用cookies存储上次阅读的文章,语言以及是否标记为已读文章。 如果您想从浏览器中删除,请删除所有存储的<code>kcd_codex_*</code> cookie",
		"footer"=>"本网站提供的关于{$kcdUrl}的文字和图片信息,包括图片和文字,均为{$kcdWarhorse}的版权和财产",
		"plusSize" => "增加宽度",
		"minusSize" => "减小宽度",
		"permalink" => "永久链接",
		"openInMap" => "在遊戲地圖中打開這個位置",
		"cookiesDeleteAll" => "删除本网站的所有cookies",
		"spoilerModalTitle"=>'可以看破坏者...',
		"spoilerModalText"=>'我们知道很多人担心剧透。 打开这个链接<b>可以告诉你在游戏过程中哪些地方有你喜欢发现的东西。 这条消息只显示了一些地方，没有考虑到游戏的第一步。</b> 所以：',
		"spoilerModalYesAlways"=>'是的！ 这次打开它，总是',
		"spoilerModalYesThis"=>'是的！ 这次打开...',
		"spoilerModalNoNever"=>'不！ 我更喜欢发现自己'
	),
	"cs" => array(
		"home" => "Přejít na uvítací stránku",
		"category" => "Zobrazit celou kategorii",
		"previous" => "Předchozí článek",
		"next" => "Další článek",
		"mark-as-read" => "Označit jako přečtené",
		"mark-as-unread" => "Označit jako nepřečtené",
		"changeLang" => "Změnit jazyk na",
		"codex" => "Kodex",
		"name" => "ČEŠTINA",
		"search" => "Hledat ...",
		"welcome" => "Vítejte v on-line {$kcdName} kodexu. Vytvořeno pomocí jazykových a obrazových souborů ze hry s láskou {$nachazoUrl}.",
		"issues" => "V projektu {$issuesLink} můžete odeslat zpětnou vazbu a nahlásit problémy.",
		"change" => "Jazyk můžete změnit kliknutím na vlajku v seznamu.",
		"lang" => "Zvolený jazyk je:",
		"viewSection" => "Zobrazit sekci",
		"viewMenu" => "Otevřít/zavřít nabídku",
		"mapOnline" => "Mapovat online",
		"cookiesAdvise" => "Tyto stránky používají soubory cookies pro zapamatování naposledy čteného článku, nastaveného jazyka a označení přečtených článků. Chcete-li to z vašeho prohlížeče odstranit, smažte všechny uložené soubory cookie <code>kcd_codex_*</code>.",
		"footer" => "Doslovné a grafické informace uvedené na tomto webu o {$kcdUrl}, včetně obrázků a textu, jsou autorskými právy a vlastnictvím z {$kcdWarhorse}.",
		"plusSize" => "Zvýšit šířku",
		"minusSize" => "Zmenšit šířku",
		"permalink" => "Permalink",
		"openInMap" => "Otevřete toto místo na mapě her",
		"cookiesDeleteAll" => "Smazat všechny cookies tohoto webu",
		"spoilerModalTitle" => "Mohli vidět spoilery...",
		"spoilerModalText" => "Víme, že mnoho lidí se obává o spoilery. Otevřením tohoto odkazu <b>můžete během hry vidět, kde se nacházejí některé věci, které byste raději objevili</b>. Tato zpráva je zobrazena pouze na některých místech, neberou v úvahu první kroky hry. Tak:",
		"spoilerModalYesAlways" => "Ano! Otevřete jej tentokrát a vždy",
		"spoilerModalYesThis" => "Ano! Otevřete právě tentokrát...",
		"spoilerModalNoNever" => "Ne! Dávám přednost tomu, abych se sám objevil"
	),	
	"pl" => array(
		"home" => "Przejdź do strony powitalnej",
		"category" => "Pokaż całą kategorię",
		"previous" => "Poprzedni artykuł",
		"next" => "Następny artykuł",
		"mark-as-read" => "Oznacz jako przeczytane",
		"mark-as-unread" => "Oznacz jako nieprzeczytane",
		"changeLang" => "Zmień język na",
		"codex" => "Kodeks",
		"name" => "POLSKIE",
		"search" => "Wyszukaj...",
		"welcome" => "Witamy w internetowej przeglądarce wpisów z kodeksu {$kcdName}. Stworzona z miłością przez {$nachazoUrl} przy pomocy języków i grafik z samej gry.",
		"issues" => "Opinie i problemy wysyłać można poprzez stronę projektu {$issuesLink}.",
		"change" => "Aby zmienić język wybierz jedną z dostępnych lokalizacji poniżej.",
		"lang" => "Wybrany język to:",
		"viewSection" => "Wyświetl sekcję",
		"viewMenu" => "Otwórz/zamknij menu",
		"mapOnline" => "Interaktywna mapa",
		"cookiesAdvise" => "Ta strona używa ciasteczek do przechowywania ostatniego przeczytanego artykułu, języka i jeśli oznaczysz jako przeczytane artykuły. Jeśli chcesz usunąć to z przeglądarki, usuń wszystkie zapisane pliki cookie <code>kcd_codex_*</code>. ",
		"footer" => "Dosłowne i graficzne informacje prezentowane na tej stronie o {$kcdUrl}, w tym zdjęcia i tekst, są chronione prawami autorskimi i własnością {$kcdWarhorse}.",
		"plusSize" => "Zwiększ szerokość",
		"minusSize" => "Zmniejsz szerokość",
		"permalink" => "Permalink",
		"openInMap" => "Otwórz tę lokalizację na mapie gry",
		"cookiesDeleteAll" => "Usuń wszystkie pliki cookie z tej strony",
		"spoilerModalTitle" => 'Zaraz zobaczysz spoilery...',
		"spoilerModalText" => "Wiemy, że wiele osób martwi się o spoilery. Otwarcie tego linku <b>może pokazać ci, gdzie znajdują się niektóre rzeczy, które być może wolisz odkryć</b> w trakcie gry. Ta wiadomość jest wyświetlana tylko w niektórych miejscach, nie biorąc pod uwagę pierwszych kroków w grze. Więc:",
		"spoilerModalYesAlways" => 'Tak! Zawsze otwieraj odnośniki',
		"spoilerModalYesThis" => 'Tak! Otwórz odnośnik jednorazowo',
		"spoilerModalNoNever" => 'Nie! Wolę odkrywać sam',
	),
	"tk" => array(
		"home" => "Karşılama sayfasına git",
		"category" => "Tüm kategoriyi göster",
		"previous" => "Önceki makale",
		"next" => "Sonraki makale",
		"mark-as-read" => "Okundu olarak işaretle",
		"mark-as-unread" => "Okunmamış olarak işaretle",
		"changeLang" => "Dili değiştirin",
		"codex" => "Kodeks",
		"name" => "TÜRK",
		"search" => "Ara ...",
		"welcome" => "Çevrimiçi {$kcdName} Codex okuyucusuna hoş geldiniz. Oyundan dil ve resim dosyalarını {$nachazoUrl} ile sevgiyle kullanın.",
		"issues" => "{$issuesLink} projesinde geri bildirim ve sorunlar gönderebilirsiniz.",
		"change" => "Listede istenen bayrakta bulunan dili değiştirebilirsiniz.",
		"lang" => "Seçilen dil:",
		"viewSection" => "Profili görüntüle",
		"viewMenu" => "Menüyü aç/kapat",
		"mapOnline" => "Harita çevrimiçi",
		"cookiesAdvise" => "Bu site son makaleyi oku, dil ve okunan makaleler olarak işaretlerseniz, çerezleri kullanır. Eğer bunu tarayıcınızdan silmek isterseniz, saklanan tüm <code>kcd_codex_*</code> çerezlerini kaldırın. ",
		"footer" => "Bu sitede sunulan resimler ve metin dahil olmak üzere {$kcdUrl} hakkında sunulan gerçek ve grafik bilgiler, telif hakkı ve {$kcdWarhorse} mülküdür.",
		"plusSize" => "Genişliği artır",
		"minusSize" => "Genişliği azalt",
		"permalink" => "Permalink",
		"openInMap" => "Oyun haritasında bu konumu aç",
		"cookiesDeleteAll" => "Bu sitenin tüm çerezlerini sil",
		"spoilerModalTitle" => 'Spoiler görebiliyor...',
		"spoilerModalText" => 'Birçok kişi spoiler hakkında endişeleniyor. Bu bağlantıyı açtığınızda, <b>oyun sırasında keşfedebileceğiniz yerleri bulabileceğiniz yerleri bulabilirsin</b>. Bu mesaj sadece bazı yerler için gösterilir, oyunun ilk adımları hakkında dikkate alınmaz. Yani:',
		"spoilerModalYesAlways" => 'Evet! Bu sefer aç ve her zaman',
		"spoilerModalYesThis" => 'Evet! Sadece bu sefer aç... ',
		"spoilerModalNoNever" => 'Hayır! Kendimi keşfetmeyi tercih ederim'
	)/*,
	"ee" => array(
		"home" => "Avage tervitusleht",
		"category" => "Näita kogu kategooriat",
		"previous" => "Eelmine artikkel",
		"next" => "Järgmine artikkel",
		"mark-as-read" => "Märgi loetuks",
		"mark-as-unread" => "Märgi mitteloetuks",
		"changeLang" => "Muuda keel",
		"codex" => "Koodeks",
		"name" => "EESTI",
		"search" => "Otsing...",
		"welcome" => "Tere tulemast võrgus {$kcdName} Codexi lugejasse. {$nachazoUrl} tegi mängu ja keelefailide abil mängu.",
		"issues" => "{$issuesLink} projektis saate saata tagasisidet ja küsimusi.",
		"change" => "Saate muuta loendis soovitud lippu klõpsates.",
		"lang" => "Valitud keel on:",
		"viewSection" => "Vaata osa",
		"viewMenu" => "Avage/sulgege menüü",
		"mapOnline" => "Kaart online",
		"cookiesAdvise" => "See sait kasutab küpsiseid viimase artikli lugemiseks, keelt ja kui märkisite lugenud artikliteks. Kui soovite selle oma brauserist kustutada, eemaldage kõik salvestatud <code>kcd_codex_ *</code> küpsised.",
		"footer" => "Sellel saidil {$kcdUrl}, sealhulgas piltide ja tekstiga, esitatud grammatiline ja graafiline teave on autoriõigus ja {$kcdWarhorse} vara.",
		"plusSize" => "Suurendage laiust",
		"minusSize" => "Vähendage laiust",
		"permalink" => "Permalink",
		"openInMap" => "Avage see koht mängukaardil",
		"cookiesDeleteAll" => "Kustuta kõik selle saidi küpsised",
		"spoilerModalTitle" => 'Ei näinud spoilerit ...',
		"spoilerModalText" => 'Me teame, et paljud inimesed on spoilerite pärast mures. Selle lingi avamine <b>võib näidata, kus asuvad mõned asjad, mida võiksite mängu ajal avastada</b>. Seda sõnumit näidatakse ainult mõnes kohas, mitte arvestada mängu esimesi samme. Nii:',
		"spoilerModalYesAlways" => 'Jah! Avage see seekord ja alati',
		"spoilerModalYesThis" => 'Jah! Avatud just sel ajal...',
		"spoilerModalNoNever" => 'Ei! Ma eelistan ennast ise avastada'
	),
	"ua" => array(
		"home" => "Перейдіть на сторінку запрошення",
		"category" => "Показати всю категорію",
		"previous" => "Попередня стаття",
		"next" => "Наступна стаття",
		"mark-as-read" => "Позначити як прочитане",
		"mark-as-unread" => "Позначити як непрочитане",
		"changeLang" => "Змінити мову на",
		"codex" => "Кодекс",
		"name" => "УКРАЇНСЬКА",
		"search" => "Шукати...",
		"welcome" => "Ласкаво просимо до читача кодексу онлайн {$kcdName}. Зроблено з використанням мови та графічних файлів з гри з любов'ю {$nachazoUrl}.",
		"issues" => "Ви можете надсилати відгуки та проблеми в проекті {$issuesLink}.",
		"change" => "Можна змінити мову, натиснувши потрібний прапор у списку.",
		"lang" => "Вибрана мова:",
		"viewSection" => "Переглянути розділ",
		"viewMenu" => "Відкрити/закрити меню",
		"mapOnline" => "Карта онлайн",
		"cookiesAdvise" => "Цей сайт використовує файли cookie для зберігання останньої прочитаної статті, мови та якщо ви позначили як прочитані статті. Якщо ви хочете видалити це зі свого веб-переглядача, видаліть усі збережені файли cookie <code>kcd_codex_ *</code>.",
		"footer" => "Літеральна та графічна інформація, представлена на цьому сайті про {$kcdUrl}, включаючи зображення та текст, є авторським правом та властивістю {$kcdWarhorse}.",
		"plusSize" => "Збільшити ширину",
		"minusSize" => "Зменшити ширину",
		"permalink" => "Постійне посилання",
		"openInMap" => "Відкрийте це розташування на карті гри",
		"cookiesDeleteAll" => "Видалити всі куки цього сайту",
		"spoilerModalTitle" => 'Можна побачити спойлери...',
		"spoilerModalText" => 'Ми знаємо, що багато людей стурбовані спойлерами. Відкриття цього посилання <b>може показати вам, де знаходяться деякі речі, які ви, можливо, віддаєте перевагу</b> під час гри. Це повідомлення показується лише для деяких місць, не враховує перші кроки гри. Тому:',
		"spoilerModalYesAlways" => 'Так! Відкрийте його цього разу і завжди',
		"spoilerModalYesThis" => 'Так! Відкрити лише цього разу...',
		"spoilerModalNoNever" => 'Ні! Я віддаю перевагу виявити себе'
	)*/
);

$menu_orig = array(
	"general" => $m_general,
	"location" => $m_location,
	"events" => $m_events,
	"society" => $m_society,
	"character" => $m_character,
	"tutorials" => $m_tutorials
);

$kcdMapLink = "https://kingdomcomemap.github.io/";
//$kcdMapLink = false;

$markers_common = array(
	"ui_codex_name_posazavi" => array(
		"id" => "CENTRO",
		"x" => "2048",
		"y" => "2048",
		"zoom" => "2"
	),
	"ui_codex_name_stribskalice" => array(
		"id" => "SKALITZ",
		//"x" => "3606","y" => "768"
		"x" => "3376","y" => "886"
	),
	"ui_codex_name_skalice" => array(
		"id" => "SKALITZ",
		//"x" => "3606","y" => "768"
		"x" => "3376","y" => "886"
	),
	"ui_codex_name_radzig" => array(
		"id" => "SKALITZ",
		//"x" => "3606","y" => "768"
		"x" => "3376","y" => "886"
	),
	"PRIBYSLAVITZ" => array(
		"id" => "PRIBYSLAVITZ",
		//"x" => "3774","y" => "1535",
		"x" => "3629","y" => "1657"
	),
	"ui_codex_name_rovna" => array(
		"id" => "ROVNA",
		//"x" => "3170","y" => "1299"
		"x" => "3118","y" => "1242"
	),
	"ui_codex_name_mrchojedy" => array(
		"id" => "MERHOJED",
		//"x" => "2733","y" => "1570",
		"x" => "2619","y" => "1636",
		"spoiler" => true
	),
	"ui_codex_name_talmberk" => array(
		"id" => "TALMBERG",
		//"x" => "2878","y" => "2279"
		"x" => "2845","y" => "2360"
	),
	"ui_codex_name_z_talmberka" => array(
		"id" => "TALMBERG",
		//"x" => "2878","y" => "2279"
		"x" => "2845","y" => "2360"
	),
	"ui_codex_name_divish" => array(
		"id" => "TALMBERG",
		//"x" => "2878","y" => "2279"
		"x" => "2845","y" => "2360"
	),
	"ui_codex_name_vilem_z_talmberka" => array(
		"id" => "TALMBERG",
		//"x" => "2878","y" => "2279"
		"x" => "2845","y" => "2360"
	),
	"ui_codex_name_uzice" => array(
		"id" => "UZHITZ",
		//"x" => "3400","y" => "3235"
		"x" => "3334","y" => "3047",
		"spoiler" => true
	),
	"ui_codex_name_jan_z_predboric" => array(
		"id" => "UZHITZ",
		//"x" => "3400","y" => "3235"
		"x" => "3334","y" => "3047",
		"spoiler" => true
	),	
	"ui_codex_name_samopse" => array(
		"id" => "SAMOPESH",
		//"x" => "2102","y" => "1158"
		"x" => "2242","y" => "1141",
		"spoiler" => true
	),
	"ui_codex_name_sazava" => array(
		"id" => "MONASTERY",
		//"x" => "1829","y" => "865",
		"x" => "1601","y" => "929",
		"spoiler" => true
	),
	"ui_codex_name_opati" => array(
		"id" => "MONASTERY",
		//"x" => "1829","y" => "865",
		"x" => "1601","y" => "929",
		"spoiler" => true
	),
	"ui_codex_name_zivot_v_klaster" => array(
		"id" => "MONASTERY",
		//"x" => "1829","y" => "865",
		"x" => "1601","y" => "929",
		"spoiler" => true
	),	
	"ui_codex_name_ledecko" => array(
		"id" => "LEDETCHKO",
		//"x" => "1423","y" => "1954",
		"x" => "1307","y" => "2057",
		"spoiler" => true
	),
	"ui_codex_name_sazava_m" => array(
		"id" => "SASAU",
		//"x" => "1034","y" => "913"
		"x" => "1186","y" => "897",
		"spoiler" => true
	),
	"ui_codex_name_vranik" => array(
		"id" => "VRANIK",
		//"x" => "810","y" => "968",
		"x" => "844","y" => "892",
		"spoiler" => true
	),
	"ui_codex_name_rataje" => array(
		"id" => "RATTAY",
		//"x" => "389","y" => "2712"
		"x" => "499","y" => "2518"
	),
	"ui_codex_name_rod_hronovcu" => array(
		"id" => "RATTAY",
		//"x" => "389","y" => "2712"
		"x" => "499","y" => "2518"
	),
	"ui_codex_name_hanush" => array(
		"id" => "RATTAY",
		//"x" => "389","y" => "2712"
		"x" => "499","y" => "2518"
	),
	"ui_codex_name_capon" => array(
		"id" => "RATTAY",
		//"x" => "389","y" => "2712"
		"x" => "499","y" => "2518"
	),	
	"ui_codex_name_neuhof" => array(
		"id" => "NEUHOF",
		//"x" => "1280","y" => "3515"
		"x" => "1445","y" => "3486",
		"spoiler" => true
	),

	"_ui_codex_name_teboreni" => array(
		"id" => "CAMPS",
		"x" => "2599","y" => "2270",
		"zoom" => "2"
	),
	"ui_codex_name_alchymie" => array(
		"id" => "ALQUIMIA",
		"x" => "1611","y" => "1966",
		"zoom" => "2",
		"spoiler" => true
	),
	"ui_codex_name_rychta" => array(
		"id" => "AYTO_RATAJE",
		"x" => "551","y" => "2514",
		"zoom" => "4"
	),
	"ui_codex_name_vodni_mlyn" => array(
		"id" => "MILL",
		"x" => "1840","y" => "1602",
		"zoom" => "2",
		"spoiler" => true
	),
	"ui_codex_name_beekeeper" => array(
		"id" => "ABEJAS",
		"x" => "1880","y" => "2303",
		"zoom" => "2"
	),
	"ui_codex_name_platner" => array(
		"id" => "ARMERO",
		"x" => "538","y" => "2527",
		"zoom" => "2",
		"spoiler" => true
	),
	"ui_codex_name_barber" => array(
		"id" => "BATHS",
		"x" => "1279","y" => "2040",
		"zoom" => "1",
		"spoiler" => true
	),
	"ui_codex_name_butcher" => array(
		"id" => "CARNICERO",
		"x" => "1360","y" => "2057",
		"zoom" => "1"
	),
	"ui_codex_name_hunter" => array(
		"id" => "CAZADOR",
		"x" => "2644","y" => "2445",
		"zoom" => "1"
	),
	"ui_codex_name_trh_obchod" => array(
		"id" => "COMERCIANTE",
		"x" => "1348","y" => "2025",
		"zoom" => "1",
		"spoiler" => true
	),
	"ui_codex_name_tanner" => array(
		"id" => "CURTIDOR",
		"x" => "1192","y" => "2102",
		"zoom" => "1"
	),
	"ui_codex_name_scribe" => array(
		"id" => "ESCRIBA",
		"x" => "1196","y" => "880",
		"zoom" => "1",
		"spoiler" => true
	),
	"ui_codex_name_swordsmith" => array(
		"id" => "ESPADERO",
		"x" => "541","y" => "2542",
		"zoom" => "1",
		"spoiler" => true
	),
	"ui_codex_name_apothecary" => array(
		"id" => "FARMACEUTICO",
		"x" => "561","y" => "2506",
		"zoom" => "3",
		"spoiler" => true
	),
	"ui_codex_name_blacksmith" => array(
		"id" => "HERRERO",
		"x" => "1337","y" => "1006",
		"zoom" => "2"
	),
	"ui_codex_name_rada_rychtar" => array(
		"id" => "MERINO",
		"x" => "551","y" => "2514",
		"zoom" => "4"
	),
	"ui_codex_name_miller" => array(
		"id" => "MOLINEROS",
		"x" => "1840","y" => "1602",
		"zoom" => "2",
		"spoiler" => true
	),
	"ui_codex_name_baker" => array(
		"id" => "PANADEROS",
		"x" => "1358","y" => "2116",
		"zoom" => "2"
	),
	"ui_codex_name_prostituce" => array(
		"id" => "PROST",
		"x" => "1279","y" => "2040",
		"zoom" => "1",
		"spoiler" => true
	),
	"ui_codex_name_tailor" => array(
		"id" => "SASTRE",
		"x" => "1323","y" => "2032",
		"zoom" => "1",
		"spoiler" => true
	),
	"ui_codex_name_hospoda" => array(
		"id" => "TAVERN",
		"x" => "1296","y" => "2040",
		"zoom" => "2",
		"spoiler" => true
	),
	"ui_codex_name_lov" => array(
		"id" => "CAZA",
		"x" => "1665","y" => "1878",
		"zoom" => "2",
		"spoiler" => true
	),
	"ui_codex_name_smirci_kriz" => array(
		"id" => "CROSSES",
		"x" => "2051","y" => "2592",
		"zoom" => "2"
	)
);