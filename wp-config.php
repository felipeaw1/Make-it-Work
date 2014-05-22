<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'makeitwork');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'makeitwork');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'makeitwork');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '^DX+p[{dm3bL@a!CX~l({gy=~^(mTEdLrs+cFG~#27)9Rc{C*QX5h=KlfsZlFC!#');
define('SECURE_AUTH_KEY',  'TQf{h@YiU<Vy{60C4l{KqR-EiFamVh/HOOS%/mQLK:=g!|w|8d)~ZL)Ro#ytNX|;');
define('LOGGED_IN_KEY',    '0%:3za1&LSEH-H:c+|cX7+bS-A5(F3@UC-8N}[gEDO3eq@u8~U^.atxQqGx&;(w ');
define('NONCE_KEY',        ')/3^bP`?H4Mo6UY*l9Ab@}+T|DZ5e<1GT( s,< @@!aL9mxaJO{=Lien1yo^63_j');
define('AUTH_SALT',        '_I$.t==|i(Xi?M+:dO`~H?ILa-Q^nY4KtVrf7iDQy*79|C!ZV5FiHaw`-3iwa`e,');
define('SECURE_AUTH_SALT', 'C6tA W`^{i(eF$KO;NJIaz.XF,&6MI{[7W+?)?=R]RO%2L7^fDB^Gn+83++;$nMr');
define('LOGGED_IN_SALT',   '|Q%,p}8nuq+hmO`~Louy=sFMPd&z`p~9;Z)8f~/lTO/a9kltuGE3Fa}](%B`1mTC');
define('NONCE_SALT',       'geS>TByW,z~Qw*So~.` cR|~Y)tX)N%.[U-EAV[oatxK4~raSm$$WI;c:F`{4:~X');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
