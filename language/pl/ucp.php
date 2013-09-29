<?php
/**
*
* ucp [Polski]
*
* @package language
* @version $Id$
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @Polish locale 2012-06-15 21:42:45 Zespół Olympus.pl $
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// Privacy policy and T&C
$lang = array_merge($lang, array(
	'TERMS_OF_USE_CONTENT'	=> 'Rejestrując się na witrynie „%1$s” akceptujesz wyszczególnione poniżej postanowienia. Jeśli ich nie akceptujesz, opuść to miejsce, naciskając przycisk „Nie akceptuję”. Administracja witryny „%1$s” ma prawo w dowolnym czasie zmienić poniższe postanowienia, informując cię o zmianach, niemniej wskazane jest, aby użytkownicy sami regularnie zaglądali do tego regulaminu. Korzystanie z witryny „%1$s” po zmianach regulaminu oznacza, że akceptujesz te zmiany ze wszelkimi konsekwencjami prawnymi.<br/>
	<br />
	Nasze fora zwane też „one”, „ich”, „je”, „phpBB software”, „www.phpbb.com”, „phpBB Group”, „phpBB Teams” działają w oparciu o oprogramowanie wykorzystujące technologię phpBB, która jest środowiskiem typu witryny (bulletin board), wydane na licencji „<a href="http://opensource.org/licenses/gpl-license.php">General Public License</a>” zwanej też „GPL”. Oprogramowanie jest dostępne do pobrania ze strony <a href="https://www.phpbb.com/downloads/">www.phpbb.com</a>. Oprogramowanie phpBB tylko ułatwia dyskusje przez internet, a jego autorzy nie kontrolują tekstów zamieszczanych w internecie za jego pomocą. Więcej informacji o phpBB można znaleźć na stronie <a href="https://phpbb.com/">www.phpbb.com/</a>.<br />
	<br />
	Akceptujesz zakaz publikowania wypowiedzi o charakterze obraźliwym, oszczerczym, propagującym treści niezgodne z polskim prawem lub naruszającym cudze prawa autorskie i dobra osobiste. Naruszenie tego zakazu może skutkować dla ciebie całkowitym zablokowaniem dostępu do tej witryny, a twój dostawca internetu zostanie powiadomiony o twoim niewłaściwym zachowaniu. Wyrażasz zgodę na to, że „%1$s” może w każdej chwili usunąć, zmienić, przenieść lub zamknąć każdy twój temat, post. Wyrażasz zgodę na zapisywanie wszystkich podanych przez ciebie informacji w naszej bazie danych. Informacje te nie będą przekazywane nikomu bez twojej zgody, ale ani „%1$s”, ani phpBB nie ponosi odpowiedzialności za włamania do witryny, podczas których może dojść do kradzieży danych.
	',

	'PRIVACY_POLICY'		=> 'Ten tekst opisuje, w jaki sposób „%1$s” i firmy stowarzyszone zwane dalej „my”, „nas”, „nasz”, „%1$s”, „%2$s” i phpBB zwane dalej „oni”, „ich”, „oprogramowanie phpBB”, „www.phpbb.com”, „phpBB Group”, „Zespoły phpBB”, korzystają z informacji zwanymi dalej „informacjami o tobie” zebranych w czasie dowolnej twojej sesji na forum.<br/>
	<br />
	Informacje o tobie są zbierane na dwa sposoby. Po pierwsze, przeglądanie „%1$s” powoduje, że aplikacja phpBB tworzy kilka ciasteczek, które są małymi plikami tekstowymi pobranymi do katalogu plików tymczasowych twojej przeglądarki. Pierwsze dwa ciasteczka zawierają identyfikator użytkownika zwany „user-id” i anonimowy identyfikator sesji zwany „session-id”, automatycznie przyznane ci przez aplikację phpBB. Trzecie ciasteczko zostanie utworzone, gdy przejrzysz chociaż jeden temat na „%1$s”. Jest ono używane do zapisania informacji, które tematy zostały przez ciebie przeczytane i służy do ułatwienia ci nawigacji na forum.<br />
	<br />
	W czasie przeglądania „%1$s” możemy też utworzyć ciasteczka niezależne od oprogramowania phpBB, ale ich ten dokument nie dotyczy – ma on opisywać tylko strony stworzone przez oprogramowanie phpBB. Drugi sposób, w jaki zbieramy informacje o tobie, to dane wysyłane przez ciebie do nas. Mogą być to między innymi posty napisane przez ciebie jako anonimowy użytkownik zwane dalej „anonimowe posty”, konta użytkownika założone na „%1$s” zwane dalej „twoje konto” i posty napisane przez ciebie po rejestracji i zalogowaniu zwane dalej „twoje posty”.<br />
	<br />
	Twoje konto będzie zawierać przynajmniej unikalną identyfikacyjną nazwę zwaną dalej „twoja nazwa użytkownika”, hasło używane do logowania zwane dalej „twoje hasło” i osobisty aktywny adres e-mail zwany dalej „twój adres e-mail”. Informacje podane dla twojego konta na „%1$s” są chronione przez prawa dotyczące ochrony danych osobowych w państwie, w którym stoi nasz serwer. Mamy prawo wymagać podania dodatkowych informacji przy rejestracji, i to my ustalamy czy podanie ich jest konieczne, czy nie. W każdym przypadku masz możliwość wybrania, które informacje o twoim koncie są wyświetlane publicznie. Co więcej, w panelu zarządzania kontem masz możliwość włączenia lub wyłączenia wysyłania do ciebie automatycznie generowanych przez oprogramowanie phpBB e-maili.<br />
	<br />
	Twoje hasło jest zaszyfrowane, więc jest bezpieczne, niemniej nie należy używać tego samego hasła na różnych witrynach internetowych. Hasło to umożliwia dostęp do twojego konta na „%1$s”, więc chroń je i w żadnym wypadku nie podawaj <strong>nikomu</strong>. Jeśli je zapomnisz, użyj funkcji „Nie pamiętam hasła”. Witryna poprosi cię o podanie nazwy użytkownika i adresu e-mail. Po podaniu tych danych zostanie wygenerowane nowe hasło i przesłane na podany przez ciebie adres e-mail. Umożliwi ono odzyskanie dostępu do twojego konta.<br />
	',
));

// Common language entries
$lang = array_merge($lang, array(
	'ACCOUNT_ACTIVE'				=> 'Twoje konto zostało aktywowane. Dziękujemy za zarejestrowanie.',
	'ACCOUNT_ACTIVE_ADMIN'			=> 'Konto zostało aktywowane.',
	'ACCOUNT_ACTIVE_PROFILE'		=> 'Twoje konto zostało ponownie aktywowane.',
	'ACCOUNT_ADDED'					=> 'Dziękujemy za zarejestrowanie. Twoje konto zostało utworzone. Teraz możesz zalogować się, używając swojej nazwy użytkownika i hasła.',
	'ACCOUNT_COPPA'					=> 'Twoje konto zostało utworzone, ale musi zostać zatwierdzone. Więcej informacji znajdziesz w wysłanej do ciebie wiadomości e-mail.',
	'ACCOUNT_EMAIL_CHANGED'			=> 'Twoje konto zostało zaktualizowane. Ta witryna jednak przy zmianie adresu e-mail wymaga ponownej aktywacji kont poprzez podanie klucza aktywującego. Klucz ten otrzymasz w specjalnej wiadomości na nowy adres e-mail. W niej też znajdziesz dalsze instrukcje.',
	'ACCOUNT_EMAIL_CHANGED_ADMIN'	=> 'Twoje konto zostało zaktualizowane. Ta witryna przy zmianie adresu e-mail wymaga ponownej aktywacji kont przez administratora. Została już do niego wysłana informacja w tej sprawie. Gdy twoje konto zostanie ponownie aktywowane, otrzymasz stosowne powiadomienie.',
	'ACCOUNT_INACTIVE'				=> 'Twoje konto zostało utworzone. Ta witryna jednak wymaga aktywacji kont poprzez podanie klucza aktywującego. Klucz ten otrzymasz w specjalnej wiadomości e-mail. W niej też znajdziesz dalsze instrukcje.',
	'ACCOUNT_INACTIVE_ADMIN'		=> 'Twoje konto zostało utworzone. Ta witryna wymaga aktywacji kont przez administratora. Został on już poinformowany o utworzeniu nowego konta. Z chwilą aktywowania konta otrzymasz stosowne powiadomienie.',
	'ACTIVATION_EMAIL_SENT'			=> 'E-mail aktywacyjny został wysłany na twój adres mailowy.',
	'ACTIVATION_EMAIL_SENT_ADMIN'	=> 'E-mail aktywacyjny został wysłany na adresy mailowe administratorów.',
	'ADD'							=> 'Dodaj',
	'ADD_BCC'						=> 'Dodaj [BCC]',
	'ADD_FOES'						=> 'Dodaj wroga',
	'ADD_FOES_EXPLAIN'				=> 'Możesz wpisać kilka nazw użytkownika, każdą w nowym, osobnym wierszu.',
	'ADD_FOLDER'					=> 'Dodaj folder',
	'ADD_FRIENDS'					=> 'Dodaj przyjaciela',
	'ADD_FRIENDS_EXPLAIN'			=> 'Można wpisać kilka nazw użytkownika, każdą w nowym, osobnym wierszu.',
	'ADD_NEW_RULE'					=> 'Dodaj nową regułę',
	'ADD_RULE'						=> 'Dodaj regułę',
	'ADD_TO'						=> 'Dodaj [Do]',
	'ADD_USERS_UCP_EXPLAIN'			=> 'Tutaj możesz dodawać nowych użytkowników do grupy oraz określić nową domyślną grupę dla wybranych użytkowników. Każdą nazwę użytkownika wprowadź w osobnym wierszu.',
	'ADMIN_EMAIL'					=> 'Administratorzy mogą wysyłać do mnie e-maile',
	'AGREE'							=> 'Akceptuję',
	'ALLOW_PM'						=> 'Użytkownicy mogą wysyłać do mnie prywatne wiadomości',
	'ALLOW_PM_EXPLAIN'				=> 'Administratorzy i moderatorzy zawsze mogą wysyłać do ciebie prywatne wiadomości.',
	'ALREADY_ACTIVATED'				=> 'Konto zostało już przez ciebie aktywowane.',
	'ATTACHMENTS_EXPLAIN'			=> 'To jest lista zamieszczonych przez ciebie załączników. Tutaj możesz usunąć dowolny załącznik. Zaznacz pole wyboru obok załączników, które chcesz usunąć i naciśnij przycisk <em><b>Usuń zaznaczone</b></em>.',
	'ATTACHMENTS_DELETED'			=> 'Załączniki zostały usunięte.',
	'ATTACHMENT_DELETED'			=> 'Załącznik został usunięty.',
	'AVATAR_CATEGORY'				=> 'Kategoria',
	'AVATAR_EXPLAIN'				=> 'Maksymalne wymiary: szerokość – %1$d px, wysokość – %2$d px, rozmiar pliku – %3$dkB.',
	'AVATAR_FEATURES_DISABLED'		=> 'Funkcje awatarów są wyłączone.',
	'AVATAR_GALLERY'				=> 'Galeria lokalna',
	'AVATAR_GENERAL_UPLOAD_ERROR'	=> 'Nie można wysłać awatara do %s.',
	'AVATAR_NOT_ALLOWED'			=> 'Nie można wyświetlić twojego awatara, ponieważ awatary są niedozwolone.',
	'AVATAR_PAGE'					=> 'Strona',
	'AVATAR_TYPE_NOT_ALLOWED'		=> 'Nie można wyświetlić twojego awatara, ponieważ jego typ nie jest dozwolny.',

	'BACK_TO_DRAFTS'			=> 'Wróć do kopii roboczych',
	'BACK_TO_LOGIN'				=> 'Wróć do strony logowania',
	'BIRTHDAY'					=> 'Urodziny',
	'BIRTHDAY_EXPLAIN'			=> 'Wpisanie roku spowoduje wyświetlenie w dniu urodzin twojego wieku.',
	'BOARD_DATE_FORMAT'			=> 'Format wyświetlania daty',
	'BOARD_DATE_FORMAT_EXPLAIN'	=> 'Składnia jest taka sama, jak składnia funkcji <a href="http://www.php.net/date">date()</a> w PHP.',
	'BOARD_DST'					=> 'Czas letni',
	'BOARD_LANGUAGE'			=> 'Język',
	'BOARD_STYLE'				=> 'Styl witryny',
	'BOARD_TIMEZONE'			=> 'Strefa czasowa',
	'BOOKMARKS'					=> 'Zakładki',
	'BOOKMARKS_EXPLAIN'			=> 'Możesz dodawać zakładki do tematów, aby później do nich łatwo powrócić. Jeśli chcesz usunąć zakładkę, zaznacz pole wyboru obok każdej zakładki, którą chcesz usunąć i naciśnij przycisk <em><b>Usuń zaznaczone zakładki</b></em>.',
	'BOOKMARKS_DISABLED'		=> 'Funkcje zakładek są wyłączone na tej witrynie.',
	'BOOKMARKS_REMOVED'			=> 'Zakładki zostały usunięte.',

	'CANNOT_EDIT_MESSAGE_TIME'	=> 'Nie możesz już edytować lub usunąć tej wiadomości.',
	'CANNOT_MOVE_TO_SAME_FOLDER'=> 'Wiadomości nie mogą zostać przeniesione do folderu, który chcesz usunąć.',
	'CANNOT_MOVE_FROM_SPECIAL'	=> 'Wiadomości nie mogą zostać przeniesione z folderu „Oczekujące na odbiór”.',
	'CANNOT_RENAME_FOLDER'		=> 'Nie można zmienić nazwy tego folderu.',
	'CANNOT_REMOVE_FOLDER'		=> 'Nie można usunąć tego folderu.',
	'CHANGE_DEFAULT_GROUP'		=> 'Zmień domyślną grupę',
	'CHANGE_PASSWORD'			=> 'Zmień hasło',
	'CLICK_GOTO_FOLDER'			=> '%1$sPrzejdź do swojego folderu „%3$s”%2$s',
	'CLICK_RETURN_FOLDER'		=> '%1$sPowrót do swojego folderu „%3$s”%2$s',
	'CONFIRMATION'				=> 'Potwierdzenie rejestracji',
	'CONFIRM_CHANGES'			=> 'Potwierdź zmiany',
	'CONFIRM_EMAIL'				=> 'Potwierdź adres e-mail',
	'CONFIRM_EMAIL_EXPLAIN'		=> 'Potwierdzenie jest konieczne tylko wtedy, gdy zmienisz adres e-mail.',
	'CONFIRM_EXPLAIN'			=> 'Aby zapobiec automatycznemu rejestrowaniu się użytkowników, witryna wymaga wpisania kodu potwierdzającego. Kod ten jest wyświetlony na obrazku poniżej. Jeśli jest on nieczytelny, skontaktuj się z %sadministratorem witryny%s.',
	'VC_REFRESH'				=> 'Odśwież kod',
	'VC_REFRESH_EXPLAIN'		=> 'Jeśli masz trudności z odczytaniem kodu, możesz poprosić o wyświetlenie nowego, naciskając przycisk.',

	'CONFIRM_PASSWORD'			=> 'Potwierdź hasło',
	'CONFIRM_PASSWORD_EXPLAIN'	=> 'W przypadku, gdy w polu powyżej zostało podane nowe hasło, należy je tutaj potwierdzić, podając je w takiej samej postacji, jak powyżej.',
	'COPPA_BIRTHDAY'			=> 'Aby kontynuować rejestrację podaj swoją datę urodzenia.',
	'COPPA_COMPLIANCE'			=> 'Przestrzeganie postanowień COPPA',
	'COPPA_EXPLAIN'				=> 'Naciśnięcie przycisku „Wyślij”, spowoduje utworzenie konta. Nie może jednak zostać ono aktywowane, póki rodzic lub prawny opiekun nie potwierdzi twojej rejestracji. Drogą mailową otrzymasz niezbędny do tego formularz i informacje dotyczące dalszego postępowania.',
	'CREATE_FOLDER'				=> 'Dodaj folder…',
	'CURRENT_IMAGE'				=> 'Aktualny awatar',
	'CURRENT_PASSWORD'			=> 'Aktualne hasło',
	'CURRENT_PASSWORD_EXPLAIN'	=> 'Zmianę nazwy użytkownika czy adresu e-mail musisz potwierdzić, podając swoje aktualne hasło.',
	'CURRENT_CHANGE_PASSWORD_EXPLAIN' => 'Aby zmienić swoje hasło, nazwę użytkownika lub adres e-mail, musisz podać swoje aktualne hasło.',
	'CUR_PASSWORD_EMPTY'		=> 'Nie wprowadzono aktualnego hasła.',
	'CUR_PASSWORD_ERROR'		=> 'Wprowadzone hasło jest nieprawidłowe.',
	'CUSTOM_DATEFORMAT'			=> 'Inny…',

	'DEFAULT_ACTION'			=> 'Domyślne działanie',
	'DEFAULT_ACTION_EXPLAIN'	=> 'To działanie zostanie wykonane, jeśli żadne z powyższych nie da się zastosować.',
	'DEFAULT_ADD_SIG'			=> 'Dołączaj podpis',
	'DEFAULT_BBCODE'			=> 'BBCode',
	'DEFAULT_NOTIFY'			=> 'Informuj o odpowiedziach',
	'DEFAULT_SMILIES'			=> 'Emotikony',
	'DEFINED_RULES'				=> 'Zdefiniowane reguły',
	'DELETED_TOPIC'				=> 'Temat został usunięty.',
	'DELETE_ATTACHMENT'			=> 'Usuń załącznik',
	'DELETE_ATTACHMENTS'		=> 'Usuń załączniki',
	'DELETE_ATTACHMENT_CONFIRM'	=> 'Czy na pewno chcesz usunąć ten załącznik?',
	'DELETE_ATTACHMENTS_CONFIRM'=> 'Czy na pewno chcesz usunąć te załączniki?',
	'DELETE_AVATAR'				=> 'Usuń awatar',
	'DELETE_COOKIES_CONFIRM'	=> 'Czy na pewno chcesz usunąć wszystkie ciasteczka utworzone przez tę witrynę?',
	'DELETE_MARKED_PM'			=> 'Usuń zaznaczone wiadomości',
	'DELETE_MARKED_PM_CONFIRM'	=> 'Czy na pewno chcesz usunąć wszystkie zaznaczone wiadomości?',
	'DELETE_OLDEST_MESSAGES'	=> 'Usuń najstarsze wiadomości',
	'DELETE_MESSAGE'			=> 'Usuń wiadomość',
	'DELETE_MESSAGE_CONFIRM'	=> 'Czy na pewno chcesz usunąć tą prywatną wiadomość?',
	'DELETE_MESSAGES_IN_FOLDER'	=> 'Usuń wszystkie wiadomości zawarte w usuwanym folderze',
	'DELETE_RULE'				=> 'Usuń regułę',
	'DELETE_RULE_CONFIRM'		=> 'Czy na pewno chcesz usunąć tę regułę?',
	'DEMOTE_SELECTED'			=> 'Zdegraduj zaznaczonych',
	'DISABLE_CENSORS'			=> 'Włącz cenzurę słów',
	'DISPLAY_GALLERY'			=> 'Pokaż galerię',
	'DOMAIN_NO_MX_RECORD_EMAIL'	=> 'Wprowadzona domena e-mail nie jest poprawnym rekordem MX.',
	'DOWNLOADS'					=> 'Pobrany',
	'DRAFTS_DELETED'			=> 'Wszystkie zaznaczone kopie robocze zostały usunięte.',
	'DRAFTS_EXPLAIN'			=> 'Tutaj możesz przeglądać, edytować i usuwać zapisane kopie robocze. Aby przeglądać/edytować kopię roboczą, kliknij jeden z odnośników <em><b>Wczytaj kopię roboczą</b></em> lub <em><b>Wyświetl/Edytuj</b></em>. Jeśli chcesz usunąć kopię roboczą, zaznacz pole wyboru obok kopii, którą chcesz usunąć i naciśnij przycisk <em><b>Usuń zaznaczone</b></em>.',
	'DRAFT_UPDATED'				=> 'Kopia robocza została zaktualizowana.',

	'EDIT_DRAFT_EXPLAIN'		=> 'Tutaj można edytować kopię roboczą. Kopie nie zawierają załączników i informacji zawartych w ankiecie.',
	'EMAIL_BANNED_EMAIL'		=> 'Wprowadzony adres e-mail nie może być użyty.',
	'EMAIL_REMIND'				=> 'Musi być to adres e-mail skojarzony z twoim kontem. Jeśli nie był zmieniany z poziomu panelu zarządzania kontem, jest to adres podany w czasie rejestracji.',
	'EMAIL_TAKEN_EMAIL'			=> 'Wprowadzony adres e-mail jest już używany.',
	'EMPTY_DRAFT'				=> 'Aby zapisać zmiany, należy wpisać wiadomość.',
	'EMPTY_DRAFT_TITLE'			=> 'Należy podać tytuł kopii roboczej.',
	'EXPORT_AS_XML'				=> 'jako XML',
	'EXPORT_AS_CSV'				=> 'jako CSV',
	'EXPORT_AS_CSV_EXCEL'		=> 'jako CSV (MS Excel)',
	'EXPORT_AS_TXT'				=> 'jako TXT',
	'EXPORT_AS_MSG'				=> 'jako MSG',
	'EXPORT_FOLDER'				=> 'Eksportuj',

	'FIELD_REQUIRED'					=> 'Pole „%s” musi być wypełnione.',
	'FIELD_TOO_SHORT'					=> 'Liczba znaków w polu „%1$s” jest za mała. Wymagane jest minimum %2$d znaków.',
	'FIELD_TOO_LONG'					=> 'Liczba znaków w polu „%1$s” jest za duża. Dozwolone jest maksimum %2$d znaków.',
	'FIELD_TOO_SMALL'					=> 'Wartość pola „%1$s” jest za mała. Minimalna wartość to %2$d.',
	'FIELD_TOO_LARGE'					=> 'Wartość pola „%1$s” jest za duża. Maksymalna dozwolona wartość to %2$d.',
	'FIELD_INVALID_CHARS_NUMBERS_ONLY'	=> 'Pole „%s” zawiera niewłaściwe znaki. Dozwolone są tylko cyfry.',
	'FIELD_INVALID_CHARS_ALPHA_ONLY'	=> 'Pole „%s” zawiera niewłaściwe znaki. Dozwolone są tylko litery i cyfry.',
	'FIELD_INVALID_CHARS_SPACERS_ONLY'	=> 'Pole „%s” zawiera niewłaściwe znaki. Dozwolone są tylko litery, cyfry, spacje i „_”, „-”, „+”, „[” i „]”.',
	'FIELD_INVALID_DATE'				=> 'Pole „%s” zawiera błędną datę.',
	'FIELD_INVALID_VALUE'				=> 'Pole „%s” ma nieprawidłową wartość.',

	'FOE_MESSAGE'				=> 'Wiadomość od wroga',
	'FOES_EXPLAIN'				=> 'Wrogowie, to użytkownicy domyślne ignorowani. Posty tych użytkowników nie będą w pełni widoczne – pojawią się tylko informacje, że zostały napisane. Prywatne wiadomości od wrogów są nadal dozwolone. Nie można ignorować moderatorów i administratorów.',
	'FOES_UPDATED'				=> 'Lista wrogów została zaktualizowana.',
	'FOLDER_ADDED'				=> 'Folder został dodany.',
	'FOLDER_MESSAGE_STATUS'		=> '%1$d z %2$d możliwych do przechowywania',
	'FOLDER_NAME_EMPTY'			=> 'Należy wprowadzić nazwę tego folderu.',
	'FOLDER_NAME_EXIST'			=> 'Folder o nazwie <strong>%s</strong> już istnieje.',
	'FOLDER_OPTIONS'			=> 'Opcje folderów',
	'FOLDER_RENAMED'			=> 'Nazwa folderu została zmieniona.',
	'FOLDER_REMOVED'			=> 'Folder został usunięty.',
	'FOLDER_STATUS_MSG'			=> 'Zapełnienie folderu: %1$d%%. Liczba wiadomości w folderze: %2$d z %3$d możliwych do przechowywania.',
	'FORWARD_PM'				=> 'Prześlij dalej PW',
	'FORCE_PASSWORD_EXPLAIN'	=> 'Przed kontynuowaniem przeglądania witryny musisz zmienić swoje hasło.',
	'FRIEND_MESSAGE'			=> 'Wiadomość od przyjaciela',
	'FRIENDS'					=> 'Przyjaciele',
	'FRIENDS_EXPLAIN'			=> 'Z tego miejsca masz szybki dostęp do użytkowników, z którymi często się komunikujesz. Jeśli szablon ma taką możliwość, każdy post napisany przez przyjaciela może być wyróżniony.',
	'FRIENDS_OFFLINE'			=> 'Offline',
	'FRIENDS_ONLINE'			=> 'Online',
	'FRIENDS_UPDATED'			=> 'Lista przyjaciół została zaktualizowana.',
	'FULL_FOLDER_OPTION_CHANGED'=> 'Domyślna czynność została zmieniona.',
	'FWD_ORIGINAL_MESSAGE'		=> '------- Wiadomość oryginalna -------',
	'FWD_SUBJECT'				=> 'Temat: %s',
	'FWD_DATE'					=> 'Data: %s',
	'FWD_FROM'					=> 'Od: %s',
	'FWD_TO'					=> 'Do: %s',

	'GLOBAL_ANNOUNCEMENT'		=> 'Ogłoszenie globalne',

	'HIDE_ONLINE'				=> 'Nie pokazuj statusu „online”',
	'HIDE_ONLINE_EXPLAIN'		=> 'Ta zmiana będzie działała dopiero po następnych odwiedzinach witryny.',
	'HOLD_NEW_MESSAGES'			=> 'Nie aprobuj nowych wiadomości – nowe wiadomości będą czekały do czasu, aż będzie dostępna odpowiednia ilość miejsca w folderze.',
	'HOLD_NEW_MESSAGES_SHORT'	=> 'Nowe wiadomości będą czekały',

	'IF_FOLDER_FULL'			=> 'Jeśli folder jest pełny',
	'IMPORTANT_NEWS'			=> 'Ważne ogłoszenia',
	'INVALID_USER_BIRTHDAY'			=> 'Wprowadzona data urodzenia ma nieprawidłowy format.',
	'INVALID_CHARS_USERNAME'	=> 'Nazwa użytkownika zawiera niedozwolone znaki.',
	'INVALID_CHARS_NEW_PASSWORD'=> 'Hasło nie zawiera wymaganych znaków.',
	'ITEMS_REQUIRED'			=> 'Pola oznaczone gwiazdką (*) są wymagane i muszą zostać wypełnione.',

	'JOIN_SELECTED'				=> 'Dołącz zaznaczone',

	'LANGUAGE'					=> 'Język',
	'LINK_REMOTE_AVATAR'		=> 'Odnośnik zewnętrzny',
	'LINK_REMOTE_AVATAR_EXPLAIN'=> 'Podaj zewnętrzny adres URL żądanego awatara.',
	'LINK_REMOTE_SIZE'			=> 'Wymiary awatara',
	'LINK_REMOTE_SIZE_EXPLAIN'	=> 'Określ wysokość i szerokość awatara. Pozostaw pola puste, aby wyskalować automatycznie.',
	'LOGIN_EXPLAIN_UCP'			=> 'Aby uzyskać dostęp do panelu zarządzania kontem należy się zalogować.',
	'LOGIN_REDIRECT'			=> 'Logowanie zostało wykonane poprawnie. Za chwilę nastąpi przekierowanie do indeksu witryny.',
	'LOGOUT_FAILED'				=> 'Nie można dokonać wylogowania, ponieważ nie znaleziono twojej sesji. Jeśli nadal będą występowały problemy, skontaktuj się z administratorem witryny.',
	'LOGOUT_REDIRECT'			=> 'Wylogowanie zostało wykonane poprawnie. Za chwilę nastąpi przekierowanie do indeksu witryny.',

	'MARK_IMPORTANT'				=> 'Zaznacz/odznacz jako ważne',
	'MARKED_MESSAGE'				=> 'Zaznaczona wiadomość',
	'MAX_FOLDER_REACHED'			=> 'Osiągnięto maksymalną dozwoloną liczbę folderów zdefiniowanych przez użytkownika.',
	'MESSAGE_BY_AUTHOR'				=> 'autor',
	'MESSAGE_COLOURS'				=> 'Kolory wiadomości',
	'MESSAGE_DELETED'				=> 'Wiadomość została usunięta.',
	'MESSAGE_EDITED'				=> 'Wiadomość została zmieniona.',
	'MESSAGE_HISTORY'				=> 'Historia wiadomości',
	'MESSAGE_REMOVED_FROM_OUTBOX'	=> 'Ta wiadomość została usunięta przez jej autora.',
	'MESSAGE_SENT_ON'				=> '',
	'MESSAGE_STORED'				=> 'Wiadomość została wysłana.',
	'MESSAGE_TO'					=> 'Do',
	'MESSAGES_DELETED'				=> 'Wiadomości zostały usunięte.',
	'MOVE_DELETED_MESSAGES_TO'		=> 'Przenieś wszystkie wiadomości z usuwanego folderu do',
	'MOVE_DOWN'						=> 'Przenieś w dół',
	'MOVE_MARKED_TO_FOLDER'			=> 'Przenieś do %s',
	'MOVE_PM_ERROR'					=> 'W czasie przenoszenia wiadomości do innego folderu wystąpił błąd. Przeniesiono tylko %1d z %2d wiadomości.',
	'MOVE_TO_FOLDER'				=> 'Przenieś do folderu',
	'MOVE_UP'						=> 'Przenieś w górę',

	'NEW_EMAIL_CONFIRM_EMPTY'		=> 'Nie wprowadzono potwierdzającego adresu e-mail.',
	'NEW_EMAIL_ERROR'				=> 'Podane adresy e-mail nie są takie same.',
	'NEW_FOLDER_NAME'				=> 'Nowa nazwa folderu',
	'NEW_PASSWORD'					=> 'Nowe hasło',
	'NEW_PASSWORD_CONFIRM_EMPTY'	=> 'Nie wprowadzono potwierdzającego hasła.',
	'NEW_PASSWORD_ERROR'			=> 'Podane hasła nie są takie same.',
	'NOTIFY_METHOD'					=> 'Sposób powiadamiania',
	'NOTIFY_METHOD_BOTH'			=> 'Oba sposoby',
	'NOTIFY_METHOD_EMAIL'			=> 'Tylko e-mail',
	'NOTIFY_METHOD_EXPLAIN'			=> 'Metoda wysyłania powiadomień za pośrednictwem tej witryny.',
	'NOTIFY_METHOD_IM'				=> 'Tylko Jabber',
	'NOTIFY_ON_PM'					=> 'Powiadamiaj o nowych PW',
	'NOT_ADDED_FRIENDS_ANONYMOUS'	=> 'Nie można dodać anonimowego użytkownika do listy przyjaciół.',
	'NOT_ADDED_FRIENDS_BOTS'		=> 'Botów nie można dodawać do listy znajomych.',
	'NOT_ADDED_FRIENDS_FOES'		=> 'Użytkowników będących na liście wrogów nie można dodawać do listy przyjaciół.',
	'NOT_ADDED_FRIENDS_SELF'		=> 'Nie można dodać siebie samego do listy przyjaciół.',
	'NOT_ADDED_FOES_MOD_ADMIN'		=> 'Administratorów i moderatorów nie można dodawać do listy wrogów.',
	'NOT_ADDED_FOES_ANONYMOUS'		=> 'Nie można dodawać anonimowego użytkownika do listy wrogów.',
	'NOT_ADDED_FOES_BOTS'			=> 'Botów nie można dodawać do listy wrogów.',
	'NOT_ADDED_FOES_FRIENDS'		=> 'Użytkowników będących na liście przyjaciół nie można dodawać do listy wrogów.',
	'NOT_ADDED_FOES_SELF'			=> 'Nie można dodać siebie samego do listy wrogów.',
	'NOT_AGREE'						=> 'Nie akceptuję',
	'NOT_ENOUGH_SPACE_FOLDER'		=> 'Docelowy folder „%s” prawdopodobnie jest pełny. Żądana czynność nie została wykonana.',
	'NOT_MOVED_MESSAGE'				=> 'Jedna prywatna wiadomość oczekuje na zwolnienie miejsca w folderze.',
	'NOT_MOVED_MESSAGES'			=> 'Prywatne wiadomości oczekujące na zwolnienie miejsca w folderze: %d',
	'NO_ACTION_MODE'				=> 'Nie określono żadnej czynności dla tej wiadomości.',
	'NO_AUTHOR'						=> 'Nie zdefiniowano autora tej wiadomości.',
	'NO_AVATAR_CATEGORY'			=> 'Brak',

	'NO_AUTH_DELETE_MESSAGE'		=> 'Nie masz uprawnień do usuwania prywatnych wiadomości.',
	'NO_AUTH_EDIT_MESSAGE'			=> 'Nie masz uprawnień do edytowania prywatnych wiadomości.',
	'NO_AUTH_FORWARD_MESSAGE'		=> 'Nie masz uprawnień do przesyłania dalej prywatnych wiadomości.',
	'NO_AUTH_GROUP_MESSAGE'			=> 'Nie masz uprawnień do wysyłania prywatnych wiadomości do grup.',
	'NO_AUTH_PASSWORD_REMINDER'		=> 'Nie masz uprawnień, by prosić o nowe hasło.',
	'NO_AUTH_READ_HOLD_MESSAGE'		=> 'Nie masz uprawnień, by czytać oczekujące prywatne wiadomości.',
	'NO_AUTH_READ_MESSAGE'			=> 'Nie masz uprawnień do czytania prywatnych wiadomości.',
	'NO_AUTH_READ_REMOVED_MESSAGE'	=> 'Nie możesz przeczytać tej wiadomości, ponieważ została usunięta przez autora.',
	'NO_AUTH_SEND_MESSAGE'			=> 'Nie masz uprawnień do wysyłania prywatnych wiadomości.',
	'NO_AUTH_SIGNATURE'				=> 'Nie masz uprawnień do zdefiniowania podpisu.',

	'NO_BCC_RECIPIENT'			=> 'Brak',
	'NO_BOOKMARKS'				=> 'Nie masz zakładek.',
	'NO_BOOKMARKS_SELECTED'		=> 'Nie wybrano żadnych zakładek.',
	'NO_EDIT_READ_MESSAGE'		=> 'Nie można zmienić tej prywatnej wiadomości, ponieważ została ona już przeczytana.',
	'NO_EMAIL_USER'				=> 'Nie można znaleźć podanego adresu e-mail/nazwy użytkownika',
	'NO_FOES'					=> 'Nie zdefiniowano wrogów',
	'NO_FRIENDS'				=> 'Nie zdefiniowano przyjaciół',
	'NO_FRIENDS_OFFLINE'		=> 'Nie ma niedostępnych przyjaciół',
	'NO_FRIENDS_ONLINE'			=> 'Nie ma dostępnych przyjaciół',
	'NO_GROUP_SELECTED'			=> 'Nie wybrano grupy.',
	'NO_IMPORTANT_NEWS'			=> 'Aktualnie nie ma żadnych ważnych ogłoszeń.',
	'NO_MESSAGE'				=> 'Nie znaleziono prywatnych wiadomości.',
	'NO_NEW_FOLDER_NAME'		=> 'Należy podać nową nazwę folderu.',
	'NO_NEWER_PM'				=> 'Nie ma nowszych wiadomości.',
	'NO_OLDER_PM'				=> 'Nie ma starszych wiadomości.',
	'NO_PASSWORD_SUPPLIED'		=> 'Nie można zalogować się bez podania hasła.',
	'NO_RECIPIENT'				=> 'Nie określono odbiorcy.',
	'NO_RULES_DEFINED'			=> 'Nie zdefiniowano żadnej reguły',
	'NO_SAVED_DRAFTS'			=> 'Nie masz zapisanych kopii roboczych.',
	'NO_TO_RECIPIENT'			=> 'Brak',
	'NO_WATCHED_FORUMS'			=> 'Nie obserwujesz żadnego forum.',
	'NO_WATCHED_SELECTED'		=> 'Nie obserwujesz żadnego tematu ani forum.',
	'NO_WATCHED_TOPICS'			=> 'Nie obserwujesz żadnego tematu.',

	'PASS_TYPE_ALPHA_EXPLAIN'	=> 'Hasło musi zawierać %1$d – %2$d znaków i składać się z liter różnej wielkości i cyfr.',
	'PASS_TYPE_ANY_EXPLAIN'		=> 'Hasło musi zawierać %1$d – %2$d znaków.',
	'PASS_TYPE_CASE_EXPLAIN'	=> 'Hasło musi zawierać %1$d – %2$d znaków i składać się z liter różnej wielkości.',
	'PASS_TYPE_SYMBOL_EXPLAIN'	=> 'Hasło musi zawierać %1$d – %2$d znaków i składać się z liter różnej wielkości, cyfr i symboli.',
	'PASSWORD'					=> 'Hasło',
	'PASSWORD_ACTIVATED'		=> 'Nowe hasło zostało aktywowane.',
	'PASSWORD_UPDATED'			=> 'Hasło zostało wysłane na twój adres e-mail podany w trakcie rejestracji.',
	'PERMISSIONS_RESTORED'		=> 'Przywrócono pierwotne uprawnienia.',
	'PERMISSIONS_TRANSFERRED'	=> 'Skopiowano uprawnienia od użytkownika <strong>%s</strong>. Możesz teraz przeglądać witrynę z jego uprawnieniami.<br/>Uprawnienia administratora nie zostały skopiowane. W każdej chwili możesz wrócić do swojego zestawu uprawnień.',
	'PM_DISABLED'				=> 'Na tej witrynie prywatne wiadomości są zablokowane.',
	'PM_FROM'					=> 'Od',
	'PM_FROM_REMOVED_AUTHOR'	=> 'Ta wiadomość została wysłana przez użytkownika, którego konto zostało usunięte.',
	'PM_ICON'					=> 'Ikona PW',
	'PM_INBOX'					=> 'Otrzymane',
	'PM_NO_USERS'				=> 'Wybrani użytkownicy nie istnieją.',
	'PM_OUTBOX'					=> 'Oczekujące na odbiór',
	'PM_SENTBOX'				=> 'Wysłane',
	'PM_SUBJECT'				=> 'Temat wiadomości',
	'PM_TO'						=> 'Wyślij do',
	'PM_USERS_REMOVED_NO_PM'	=> 'Nie dodano kilku użytkowników, ponieważ zablokowali oni otrzymywanie prywatnych wiadomości.',
	'POPUP_ON_PM'				=> 'Wyświetlaj okienko z powiadomieniem o nowej prywatnej wiadomości',
	'POST_EDIT_PM'				=> 'Edytuj wiadomość',
	'POST_FORWARD_PM'			=> 'Prześlij dalej wiadomość',
	'POST_NEW_PM'				=> 'Tworzenie wiadomości',
	'POST_PM_LOCKED'			=> 'Wysyłanie prywatnych wiadomości jest zablokowane',
	'POST_PM_POST'				=> 'Cytuj post',
	'POST_QUOTE_PM'				=> 'Cytuj wiadomość',
	'POST_REPLY_PM'				=> 'Odpowiedz na wiadomość',
	'PRINT_PM'					=> 'Podgląd wydruku',
	'PREFERENCES_UPDATED'		=> 'Twoje ustawienia zostały zaktualizowane.',
	'PROFILE_INFO_NOTICE'		=> 'Te informacje mogą być widoczne dla innych użytkowników. Zachowaj ostrożność przy zamieszczaniu informacji osobistych. Wszystkie pola oznaczone gwiazdką (*) muszą zostać wypełnione.',
	'PROFILE_UPDATED'			=> 'Twój profil został zaktualizowany.',

	'RECIPIENT'							=> 'Odbiorca',
	'RECIPIENTS'						=> 'Odbiorcy',
	'REGISTRATION'						=> 'Rejestracja',
	'RELEASE_MESSAGES'					=> 'Funkcja %sUwolnij wszystkie wstrzymane wiadomości…%s spowoduje umieszczenie tych wiadomości w odpowiednich folderach, jeśli zwolniono w nich wystarczającą ilość miejsca.',
	'REMOVE_ADDRESS'					=> 'Usuń adres',
	'REMOVE_SELECTED_BOOKMARKS'			=> 'Usuń zaznaczone zakładki',
	'REMOVE_SELECTED_BOOKMARKS_CONFIRM'	=> 'Czy na pewno chcesz usunąć wszystkie zaznaczone zakładki?',
	'REMOVE_BOOKMARK_MARKED'			=> 'Usuń zaznaczone zakładki',
	'REMOVE_FOLDER'						=> 'Usuń folder',
	'REMOVE_FOLDER_CONFIRM'				=> 'Czy na pewno chcesz usunąć ten folder?',
	'RENAME'							=> 'Zmień nazwę',
	'RENAME_FOLDER'						=> 'Zmień nazwę folderu',
	'REPLIED_MESSAGE'					=> 'Odpowiedziano na wiadomość',
	'REPLY_TO_ALL'						=> 'Odpowiedz nadawcy i wszystkim odbiorcom.',
	'REPORT_PM'							=> 'Zgłoś tę wiadomość',
	'RESIGN_SELECTED'					=> 'Wycofaj zaznaczone',
	'RETURN_FOLDER'						=> '%1$sWróć do poprzedniego folderu%2$s',
	'RETURN_UCP'						=> '%sWróć do panelu zarządzania kontem%s',
	'RULE_ADDED'						=> 'Reguła została dodana.',
	'RULE_ALREADY_DEFINED'				=> 'Reguła została zdefiniowana już wcześniej.',
	'RULE_DELETED'						=> 'Reguła została usunięta.',
	'RULE_LIMIT_REACHED'				=> 'Nie można dodawać więcej reguł. Limit został już osiągnięty.',
	'RULE_NOT_DEFINED'					=> 'Reguła nie została prawidłowo określona.',
	'RULE_REMOVED_MESSAGE'				=> 'Jedna prywatna wiadomość została usunięta przez filtry.',
	'RULE_REMOVED_MESSAGES'				=> 'Prywatne wiadomości usunięte przez filtry: %d .',

	'SAME_PASSWORD_ERROR'		=> 'Wprowadzone nowe hasło jest takie samo, jak aktualne.',
	'SEARCH_YOUR_POSTS'			=> 'Wyświetl moje posty',
	'SEND_PASSWORD'				=> 'Wyślij hasło',
	'SENT_AT'					=> 'Wysłano',			// Used before dates in private messages
	'SHOW_EMAIL'				=> 'Użytkownicy mogą kontaktować się ze mną za pomocą e-maili',
	'SIGNATURE_EXPLAIN'			=> 'Zawartość poniższego okna będzie dołączana jako twój podpis do napisanych przez ciebie postów/wiadomości. Maksymalna dozwolona liczba znaków: %d.',
	'SIGNATURE_PREVIEW'			=> 'Tak będzie wyglądał twój podpis',
	'SIGNATURE_TOO_LONG'		=> 'Podpis jest za długi.',
	'SORT'						=> 'Sortuj wg',
	'SORT_COMMENT'				=> 'Komentarz',
	'SORT_DOWNLOADS'			=> 'Pobrania',
	'SORT_EXTENSION'			=> 'Rozszerzenie',
	'SORT_FILENAME'				=> 'Nazwa pliku',
	'SORT_POST_TIME'			=> 'Czas wysłania',
	'SORT_SIZE'					=> 'Rozmiar pliku',

	'TIMEZONE'					=> 'Strefa czasowa',
	'TO'						=> 'Do',
	'TOO_MANY_RECIPIENTS'		=> 'Zbyt dużo odbiorców.',
	'TOO_MANY_REGISTERS'		=> 'Maksymalna dopuszczalna liczba prób rejestracji w tej sesji została wykorzystana. Proszę spróbować ponownie później.',

	'UCP'						=> 'Panel zarządzania kontem',
	'UCP_ACTIVATE'				=> 'Aktywuj konto',
	'UCP_ADMIN_ACTIVATE'		=> 'Przed aktywacją konta, należy podać ważny adres e-mail. Administrator sprawdzi konto i jeśli je zatwierdzi, na podany adres zostanie wysłane stosowne powiadomienie.',
	'UCP_AIM'					=> 'AOL Instant Messenger',
	'UCP_ATTACHMENTS'			=> 'Załączniki',
	'UCP_COPPA_BEFORE'			=> 'Przed %s',
	'UCP_COPPA_ON_AFTER'		=> 'W lub po %s',
	'UCP_EMAIL_ACTIVATE'		=> 'Przed aktywacją konta należy podać ważny adres e-mail. Na ten adres zostanie wysłana wiadomość zawierająca odnośnik aktywacyjny.',
	'UCP_ICQ'					=> 'Numer ICQ',
	'UCP_JABBER'				=> 'Adres Jabbera',

	'UCP_MAIN'					=> 'Ogólne',
	'UCP_MAIN_ATTACHMENTS'		=> 'Załączniki',
	'UCP_MAIN_BOOKMARKS'		=> 'Zakładki',
	'UCP_MAIN_DRAFTS'			=> 'Kopie robocze',
	'UCP_MAIN_FRONT'			=> 'Przegląd',
	'UCP_MAIN_SUBSCRIBED'		=> 'Obserwowane',

	'UCP_MSNM'					=> 'WL/MSN Messenger',
	'UCP_NO_ATTACHMENTS'		=> 'Nie załączono żadnych plików.',

	'UCP_PREFS'					=> 'Ustawienia witryny',
	'UCP_PREFS_PERSONAL'		=> 'Ustawienia globalne',
	'UCP_PREFS_POST'			=> 'Domyślne ustawienia pisania',
	'UCP_PREFS_VIEW'			=> 'Ustawienia wyświetlania',

	'UCP_PM'					=> 'Prywatne wiadomości',
	'UCP_PM_COMPOSE'			=> 'Tworzenie wiadomości',
	'UCP_PM_DRAFTS'				=> 'Kopie robocze',
	'UCP_PM_OPTIONS'			=> 'Reguły, foldery i ustawienia',
	'UCP_PM_POPUP'				=> 'Prywatne wiadomości',
	'UCP_PM_POPUP_TITLE'		=> 'Prywatne wiadomości – powiadomienia',
	'UCP_PM_UNREAD'				=> 'Nieprzeczytane wiadomości',
	'UCP_PM_VIEW'				=> 'Wiadomości w folderze',

	'UCP_PROFILE'				=> 'Profil',
	'UCP_PROFILE_AVATAR'		=> 'Awatar',
	'UCP_PROFILE_PROFILE_INFO'	=> 'Profil',
	'UCP_PROFILE_REG_DETAILS'	=> 'Ustawienia konta',
	'UCP_PROFILE_SIGNATURE'		=> 'Podpis',

	'UCP_USERGROUPS'			=> 'Grupy',
	'UCP_USERGROUPS_MEMBER'		=> 'Edycja członkostwa',
	'UCP_USERGROUPS_MANAGE'		=> 'Zarządzanie grupami',

	'UCP_REGISTER_DISABLE'			=> 'Utworzenie nowego konta jest aktualnie niemożliwe.',
	'UCP_REMIND'					=> 'Wyślij hasło',
	'UCP_RESEND'					=> 'Wyślij e-mail aktywacyjny',
	'UCP_WELCOME'					=> 'Witamy w panelu zarządzania kontem. Z tego miejsca możesz monitorować, przeglądać, edytować swój profil, ustawienia, obserwowane fora i tematy. Możesz także, jeśli administracja forum na to pozwala, wysyłać wiadomości do innych użytkowników. Przed wykonaniem dalszych czynności zapoznaj się ze wszystkimi informacjami i ogłoszeniami.',
	'UCP_YIM'						=> 'Yahoo Messenger',
	'UCP_ZEBRA'						=> 'Przyjaciele i wrogowie',
	'UCP_ZEBRA_FOES'				=> 'Wrogowie',
	'UCP_ZEBRA_FRIENDS'				=> 'Przyjaciele',
	'UNDISCLOSED_RECIPIENT'			=> 'Nieznany odbiorca',
	'UNKNOWN_FOLDER'				=> 'Nieznany folder',
	'UNWATCH_MARKED'				=> 'Nie obserwuj zaznaczonych',
	'UPLOAD_AVATAR_FILE'			=> 'Wczytaj ze swojego komputera',
	'UPLOAD_AVATAR_URL'				=> 'Wczytaj z sieci',
	'UPLOAD_AVATAR_URL_EXPLAIN'		=> 'Podaj adres URL pliku zawierającego obrazek. Zostanie on skopiowany na tę witrynę.',
	'USERNAME_ALPHA_ONLY_EXPLAIN'	=> 'Nazwa użytkownika musi zawierać %1$d – %2$d znaków i składać się tylko z liter i cyfr',
	'USERNAME_ALPHA_SPACERS_EXPLAIN'=> 'Nazwa użytkownika musi zawierać %1$d – %2$d znaków i składać się tylko z liter, cyfr, spacji oraz znaków „_”, „+”, „-”, „[” i „]”.',
	'USERNAME_ASCII_EXPLAIN'		=> 'Nazwa użytkownika musi zawierać %1$d – %2$d znaków i składać się tylko ze znaków ASCII bez symboli specjalnych.',
	'USERNAME_LETTER_NUM_EXPLAIN'	=> 'Nazwa użytkownika musi zawierać %1$d – %2$d znaków i składać się tylko z liter oraz cyfr.',
	'USERNAME_LETTER_NUM_SPACERS_EXPLAIN'=> 'Nazwa użytkownika musi zawierać %1$d – %2$d znaków i składać się tylko z liter, cyfr, spacji oraz znaków „_”, „+”, „-”, „[” i „]”.',
	'USERNAME_CHARS_ANY_EXPLAIN'	=> 'Nazwa musi zawierać %1$d – %2$d znaków.',
	'USERNAME_TAKEN_USERNAME'		=> 'Podana nazwa użytkownika jest już używana. Wybierz inną.',
	'USERNAME_DISALLOWED_USERNAME'	=> 'Podana nazwa użytkownika została zabroniona lub zawiera zabronione słowo. Wybierz inną.',
	'USER_NOT_FOUND_OR_INACTIVE'	=> 'Podane nazwy użytkownika nie zostały znalezione lub należą do nieaktywnych użytkowników.',

	'VIEW_AVATARS'				=> 'Wyświetlaj awatary',
	'VIEW_EDIT'					=> 'Wyświetl/Edytuj',
	'VIEW_FLASH'				=> 'Wyświetlaj animacje Flash',
	'VIEW_IMAGES'				=> 'Wyświetlaj obrazki w postach',
	'VIEW_NEXT_HISTORY'			=> 'Następna wiadomość w historii',
	'VIEW_NEXT_PM'				=> 'Następna wiadomość',
	'VIEW_PM'					=> 'Wyświetl wiadomość',
	'VIEW_PM_INFO'				=> 'Szczegóły wiadomości',
	'VIEW_PM_MESSAGE'			=> '1 wiadomość',
	'VIEW_PM_MESSAGES'			=> '%d wiadomości',
	'VIEW_PREVIOUS_HISTORY'		=> 'Poprzednia wiadomość w historii',
	'VIEW_PREVIOUS_PM'			=> 'Poprzednia wiadomość',
	'VIEW_SIGS'					=> 'Wyświetlaj podpisy',
	'VIEW_SMILIES'				=> 'Wyświetlaj emotikony jako obrazki',
	'VIEW_TOPICS_DAYS'			=> 'Wyświetlaj tematy z poprzednich',
	'VIEW_TOPICS_DIR'			=> 'Kierunek wyświetlania',
	'VIEW_TOPICS_KEY'			=> 'Wyświetlaj tematy wg',
	'VIEW_POSTS_DAYS'			=> 'Wyświetlaj posty z poprzednich',
	'VIEW_POSTS_DIR'			=> 'Kierunek wyświetlania',
	'VIEW_POSTS_KEY'			=> 'Wyświetlaj posty wg',

	'WATCHED_EXPLAIN'			=> 'Poniżej są wyświetlone obserwowane przez ciebie fora i tematy. Otrzymasz powiadomienie o każdym napisanym w nich nowym poście. Aby zaprzestać obserwacji forum lub tematu, zaznacz pole wyboru obok danego forum/tematu i naciśnij przycisk <em><b>Nie obserwuj zaznaczonych</b></em>.',
	'WATCHED_FORUMS'			=> 'Obserwowane fora',
	'WATCHED_TOPICS'			=> 'Obserwowane tematy',
	'WRONG_ACTIVATION'			=> 'Dostarczony klucz aktywacji jest nieprawidłowy.',

	'YOUR_DETAILS'				=> 'Aktywność użytkownika',
	'YOUR_FOES'					=> 'Twoi wrogowie',
	'YOUR_FOES_EXPLAIN'			=> 'Aby usunąć użytkowników z tej listy, zaznacz ich i naciśnij przycisk <em><b>Wyślij</b></em>.',
	'YOUR_FRIENDS'				=> 'Twoi przyjaciele',
	'YOUR_FRIENDS_EXPLAIN'		=> 'Aby usunąć użytkowników z tej listy, zaznacz ich i naciśnij przycisk <em><b>Wyślij</b></em>.',
	'YOUR_WARNINGS'				=> 'Poziom twoich ostrzeżeń',

	'PM_ACTION' => array(
		'PLACE_INTO_FOLDER'	=> 'Przenieś do folderu',
		'MARK_AS_READ'		=> 'Oznacz jako przeczytane',
		'MARK_AS_IMPORTANT'	=> 'Oznacz wiadomość',
		'DELETE_MESSAGE'	=> 'Usuń wiadomość'
	),
	'PM_CHECK' => array(
		'SUBJECT'	=> 'Temat',
		'SENDER'	=> 'Nadawca',
		'MESSAGE'	=> 'Wiadomość',
		'STATUS'	=> 'Status wiadomości',
		'TO'		=> 'Wysłano do'
	),
	'PM_RULE' => array(
		'IS_LIKE'		=> 'jest, jak',
		'IS_NOT_LIKE'	=> 'nie jest, jak',
		'IS'			=> 'jest',
		'IS_NOT'		=> 'nie jest',
		'BEGINS_WITH'	=> 'zaczyna się od',
		'ENDS_WITH'		=> 'kończy się na',
		'IS_FRIEND'		=> 'jest przyjacielem',
		'IS_FOE'		=> 'jest wrogiem',
		'IS_USER'		=> 'jest użytkownikiem',
		'IS_GROUP'		=> 'jest w grupie',
		'ANSWERED'		=> 'udzielono odpowiedzi',
		'FORWARDED'		=> 'przesłane dalej',
		'TO_GROUP'		=> 'do mojej domyślnej grupy',
		'TO_ME'			=> 'do mnie'
	),


	'GROUPS_EXPLAIN'	=> 'Grupy użytkowników umożliwiają administratorom witryny lepsze zarządzanie użytkownikami. Domyślnie zostaniesz przypisany/przypisana do określonej grupy. Ta grupa jest twoją grupą domyślną. Określa ona sposób wyświetlania twoich danych na forum, np. kolor nazwy użytkownika, awatar, rangę itp. Zależnie od tego czy administrator pozwala na zmianę grupy, będziesz mieć lub nie, możliwość zmiany swojej grupy domyślnej. Możesz również przyłączyć się lub zostać przypisany/przypisana do innych grup. Niektóre grupy mogą dać ci dodatkowe uprawnienia do oglądania zawartości lub powiększą twoje możliwości w innych obszarach.',
	'GROUP_LEADER'		=> 'Grupy, w których pełnisz rolę lidera',
	'GROUP_MEMBER'		=> 'Grupy, których jesteś członkiem',
	'GROUP_PENDING'		=> 'Grupy, w których oczekujesz na przyjęcie',
	'GROUP_NONMEMBER'	=> 'Grupy, których nie jesteś członkiem',
	'GROUP_DETAILS'		=> 'Szczegóły grupy',

	'NO_LEADER'		=> 'Nie jesteś liderem żadnej grupy',
	'NO_MEMBER'		=> 'Nie należysz do żadnej grupy',
	'NO_PENDING'	=> 'Nie oczekujesz na przyjęcie do żadnej grupy',
	'NO_NONMEMBER'	=> 'Nie ma żadnej grupy, do której nie należysz',
));

?>
