<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpalm' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '|Nwv{+Vj]f16?4fbuwbt{_s@^CwW#&Ainmw#,?;SZOs)Hn6dP{mq>3*oC+`{j v6' );
define( 'SECURE_AUTH_KEY',  'Kyk:eUj.9U_ZF}{&DQ`&HtRH$}R:s4]z>4|YDKH8RC8OiG@f/chdrcJvQBK5cm@:' );
define( 'LOGGED_IN_KEY',    'jfh?.>/t5<(L#^Et!g$r~OgqdWkW^/h`1n8Z-o/S80uS=-u!/h=8MR<>&)liF~fq' );
define( 'NONCE_KEY',        ',8E-;*l+Qn=c4kvNn[#^W8^</)wj=H#Q:k*9o(:<bG^Gwt~v=<0.^/k6Y<U&&hWc' );
define( 'AUTH_SALT',        'O9x4&995hoyAXPBmhgO*td3qN9=gxFQ_U0Z371//,$87F9(]@4n<uWIugrjZiNF8' );
define( 'SECURE_AUTH_SALT', '2{HB7]@^z?1^Rp52/falVgw.X(|F3cJNc1p1ag?-w$w^w3k+U>hcJeHF@,:2:uR}' );
define( 'LOGGED_IN_SALT',   '87st-YL+-}x5Wzg0{:bAr&AmGV.9@Io$- Mq0vVu<t#@GzT^A&9L`4`f$q.enDS=' );
define( 'NONCE_SALT',       ' z{~zU8>9dY.l;9RFFNA6_?jR1#LLgH8JL){Y-ZWjgI63P*s3DE8x&>!:-3C.1_8' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
