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
define('DB_NAME', 'solucao_teste');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'solucao_teste');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'solucao3A');

/** nome do host do MySQL */
define('DB_HOST', '186.202.188.230');

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
define('AUTH_KEY',         'RZVi?y.5B3PdrlxAi3$EV`Gac0M[CTb;CPo=&Gq63V2Y+/(6]e.A)lzW$?GZ!++,');
define('SECURE_AUTH_KEY',  '98edXL8twQ]$Qc#X1FsE:b<Z%qOdfM:]IJph-}+_ &8|29Vg.>%8R-k%/,#2;;=+');
define('LOGGED_IN_KEY',    'B6iohcOMT/ht.o%( JF3fWU kEp7@OIINqGx2@R7SHj5ICCC 1sm$rZYeIk|t8j(');
define('NONCE_KEY',        'eG6&A4zJLp(Qcn72l|OY/{Z [ARt!j-+X4F,B-_e9lzgLcCATx,qcoO|vS-(E.*|');
define('AUTH_SALT',        '|~75:>_5^^-?^1IuID}`5^B<^Vp+OMUdu6j4 je8&k5HS%)YKDk=)C:qo%J,^Op2');
define('SECURE_AUTH_SALT', '(|RJ6V1oxCRMMK]Tjft2uXKnrvVK.TqU$yZ_e%x;cpKG1T{.y@]inmT=0* +F%Z7');
define('LOGGED_IN_SALT',   '.-DkX8Nr|nWKWN/ATC&e+iHt|rVEnWN*a=lK~:t)Q4HsLiqTUi;-TRO|JD{g+7-G');
define('NONCE_SALT',       'xuyWwC0j65}DRVl]J$k/0WlHepDy(22ooDr@E)4K1@{qQ)i;-*8TvLL_},x1-VgG');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


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
