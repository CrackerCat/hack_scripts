<?php if(!defined('__CP__'))die();

define('LNG_TITLE',          'CP');
define('LNG_YES',            'Yes');
define('LNG_NO',             'No');
define('LNG_ACCESS_DEFINED', 'Access defined.');
define('LNG_ACTION_APPLY',   '&#62;&#62;');

//Форматы данных.
define('LNG_FORMAT_DATE',   'd.m.Y');
define('LNG_FORMAT_TIME',   'H:i:s');
define('LNG_FORMAT_DT',     'd.m.Y H:i:s');
define('LNG_FORMAT_NOTIME', '--:--:--');

//Список ботнетов.
define('LNG_BOTNET_ALL',   '[All]');
define('LNG_BOTNET_APPLY', '&#62;&#62;');

//Список страниц.
define('LNG_PAGELIST_TITLE', 'Pages:');
define('LNG_PAGELIST_NEXT',  'Next');
define('LNG_PAGELIST_PREV',  'Prev');
define('LNG_PAGELIST_FIRST', '&#171;');
define('LNG_PAGELIST_LAST',  '&#187;');

//Меню действий.
define('LNG_MBA_SEPARATOR',         '----------------------------------------------');

define('LNG_MBA_FULLINFO',        'Full information');
define('LNG_MBA_FULLINFOSS',      'Full information + screenshot');
define('LNG_MBA_TODAY_DBREPORTS', 'Today reports');
define('LNG_MBA_WEEK_DBREPORTS',  'Reports for last 7 days');
define('LNG_MBA_ALL_DBREPORTS',   'All reports');
define('LNG_MBA_FILES',           'Files');
define('LNG_MBA_COOKIES',         'Cookies');

define('LNG_MBA_REMOVE',          'Remove from database');
define('LNG_MBA_REMOVE_REPORTS',  'Remove from database including reports');

define('LNG_MBA_PORT_SOCKS',      'Check socks');
define('LNG_MBA_NEWSCRIPT',       'Create new command');

define('LNG_BA_FULLINFO_TITLE',       'Full information about bots');
define('LNG_BA_FULLINFO_EMPTY',       '-- Information not founded --');
define('LNG_BA_FULLINFO_BOTID',       'Bot ID:');
define('LNG_BA_FULLINFO_BOTID_FAV',   'Make favorite');
define('LNG_BA_FULLINFO_BOTID_FAV_UN','Clear favorite');
define('LNG_BA_FULLINFO_BOTNET',      'Botnet:');
define('LNG_BA_FULLINFO_FLAGS',       'Flags:');
define('LNG_BA_FULLINFO_VERSION',     'Version:');
define('LNG_BA_FULLINFO_OS',          'OS Version:');
define('LNG_BA_FULLINFO_OSLANG',      'OS Language:');
define('LNG_BA_FULLINFO_TIMEBIAS',    'GMT:');
define('LNG_BA_FULLINFO_COUNTRY',     'Country:');
define('LNG_BA_FULLINFO_WHOIS',       'Whois:');
define('LNG_BA_FULLINFO_IPV4',        'IP:');
define('LNG_BA_FULLINFO_LATENCY',     'Latency:');
define('LNG_BA_FULLINFO_TCPPORT_S1',  'Direct Socks5:');
define('LNG_BA_FULLINFO_TFIRST',      'Time of first report:');
define('LNG_BA_FULLINFO_TLAST',       'Time of last report:');
define('LNG_BA_FULLINFO_TONLINE',     'Online time:');
define('LNG_BA_FULLINFO_NEW',         'In the list of new bots:');
define('LNG_BA_FULLINFO_USED',        'In the list of used:');
define('LNG_BA_FULLINFO_COMMENT',     'Comment:');
define('LNG_BA_FULLINFO_SCREENSHOT',  'Screenshot:');
define('LNG_BA_FULLINFO_ACTION_SAVE', 'Save');

define('LNG_BA_FULLINFO_WEBINJECTS_HISTORY',            'WebInjects History');
define('LNG_BA_FULLINFO_WEBINJECTS_TH_BUNDLE',          'Campaign');
define('LNG_BA_FULLINFO_WEBINJECTS_TH_LOADED',          'Loaded');
define('LNG_BA_FULLINFO_WEBINJECTS_TH_ERRORS',          'Errors');
define('LNG_BA_FULLINFO_WEBINJECTS_PENDING',            'pending');

define('LNG_BA_REMOVE_TITLE',    'Removing bots from database');
define('LNG_BA_REMOVE_Q1',       'You really want to remove %u bots from database?');
define('LNG_BA_REMOVE_Q2',       'You really want to remove %u bots from database, including reports?');
define('LNG_BA_REMOVE_ABORTED',  'Removing aborted by user.');
define('LNG_BA_REMOVE_REMOVED',  'Removed %u rows.');
define('LNG_BA_REMOVE_FREMOVED', 'Removed.');
define('LNG_BA_REMOVE_FERROR',   'ERROR.');

define('LNG_BA_PORT_SOCKS_TITLE',    'Check socks');
define('LNG_BA_PORT_SOCKS_CHECKING', 'CHECKING...');
define('LNG_BA_PORT_SOCKS_SUCCESS',  'SUCCESSFULLY.');
define('LNG_BA_PORT_SOCKS_FAILED',   'FAILED.');
define('LNG_BA_PORT_SOCKS_ERROR',    'ERROR!');

//Информация.
define('LNG_INFO',          'Information:');
define('LNG_INFO_USERNAME', 'Current user:');
define('LNG_INFO_DATE',     'GMT date:');
define('LNG_INFO_TIME',     'GMT time:');

//Главное меню.
define('LNG_MM_STATS',          'Statistics:');
define('LNG_MM_STATS_MAIN',     'Summary');
define('LNG_MM_STATS_OS',       'OS');
define('LNG_MM_STATS_SOFT',     'Installed Software');

define('LNG_MM_BOTNET',         'Botnet:');
define('LNG_MM_BOTNET_BOTS',    'Bots');
define('LNG_MM_BOTNET_WEBINJECTS',    'Web-Injects');
define('LNG_MM_BOTNET_SCRIPTS', 'Commands');
define('LNG_MM_BOTNET_SOCKS',   'SOCKS');
define('LNG_MM_BOTNET_VNC',     'VNC');
define('LNG_MM_BOTNET_TOKENSPY','TokenSpy_DevelMode');

define('LNG_MM_REPORTS',        'Reports:');
define('LNG_MM_REPORTS_DB',     'Search in database');
define('LNG_MM_REPORTS_NEUROSTAT',     'Neuromodel');
define('LNG_MM_REPORTS_FAV',    'Favorite reports');
define('LNG_MM_REPORTS_FILES',  'Search in files');
define('LNG_MM_REPORTS_IMAGES', 'View screenshots');
define('LNG_MM_REPORTS_VIDEOS', 'View videos');
define('LNG_MM_REPORTS_CMDLIST','CMD Parser');
define('LNG_MM_REPORTS_DOMAINS','Links');
define('LNG_MM_REPORTS_BALGRABBER',     'Balance Grabber');
define('LNG_MM_REPORTS_JN',     'Jabber notifier');
define('LNG_MM_REPORTS_ACCPARSE', 'Account-parser');

define('LNG_MM_SYSTEM',         'System:');
define('LNG_MM_SYSTEM_INFO',    'Information');
define('LNG_MM_SYSTEM_OPTIONS', 'Options');
define('LNG_MM_SYSTEM_USER',    'User');
define('LNG_MM_SYSTEM_USERS',   'Users');

define('LNG_MM_SERVICES',       'Services');
define('LNG_MM_SERVICE_NOTES',  'Notes');
define('LNG_MM_SERVICE_CRYPT',  'Crypt exe');
define('LNG_MM_SERVICE_IFRAMER', 'FTP iframer');
define('LNG_MM_SERVICE_FILEHUNTER','File Hunter');
define('LNG_MM_SERVICE_MAILER',                 'Mailer');

define('LNG_MM_LOGOUT',         'Logout');

//Типы отчетов.
define('LNG_BLT_UNKNOWN',               'Unknown report');
define('LNG_BLT_COOKIES',               'Cookies of browsers');
define('LNG_BLT_FILE',                  'File');
define('LNG_BLT_DEBUG',                 'Debug');
define('LNG_BLT_HTTPX_REQUEST',         'HTTP or HTTPS request');
define('LNG_BLT_HTTP_REQUEST',          'HTTP request');
define('LNG_BLT_HTTPS_REQUEST',         'HTTPS request');
define('LNG_BLT_LUHN10_REQUEST',        'CC request');
define('LNG_BLT_LOGIN_FTP',             'FTP login');
define('LNG_BLT_LOGIN_POP3',            'POP3 login');
define('LNG_BLT_FILE_SEARCH',           'Found files');
define('LNG_BLT_GRABBED_X',             'All grabbed data');
define('LNG_BLT_GRABBED_UI',            'Grabbed data [UI]');
define('LNG_BLT_GRABBED_HTTP',          'Grabbed data [HTTP(S)]');
define('LNG_BLT_GRABBED_WSOCKET',       'Grabbed data [WinSocket]');
define('LNG_BLT_GRABBED_FTPSOFTWARE',   'Grabbed data [FTP client]');
define('LNG_BLT_GRABBED_EMAILSOFTWARE', 'Grabbed data [E-mail]');
define('LNG_BLT_GRABBED_BALANCE',       'Balance Grabber');
define('LNG_BLT_GRABBED_OTHER',         'Grabbed data [Other]');
define('LNG_BLT_COMMANDLINE_RESULT',    'Command Line result');
define('LNG_BLT_ANALYTICS_SOFTWARE',    'Installed software');
define('LNG_BLT_ANALYTICS_FIREWALL',    'Installed firewall');
define('LNG_BLT_ANALYTICS_ANTIVIRUS',   'Installed antivirus');
define('LNG_BLT_KEYLOGGER',             'Keylogger');
define('LNG_BLT_FLASHINFECT',           'FlashInfect');

define('LNG_HINT_CONTEXT_MENU',		'<div class="hint context-menu-hint">Hint: use the right-mouse-button to open a context menu</div>');

define('LNG_FLASHMSG_MUST_BE_WRITABLE',             ':name must exist and be writable!');
define('LNG_FLASHMSG_READ_FAILED',                  'Failed to read from :name!');
define('LNG_FLASHMSG_WRITE_FAILED',                 'Failed to write to :name!');

define('LNG_NO_RESULTS',                            'Nothing found');
define('LNG_LOAD_MORE',                             'Load more');
