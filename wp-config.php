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
define( 'DB_NAME', 'deli' );

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
define( 'AUTH_KEY',         '0ckBG5yOetbG|7;t=S .N5WUDgWd&SC{GHnr:|<Naa>+=ZlRmKev>~gE3OY~TS?c' );
define( 'SECURE_AUTH_KEY',  ')K3c*IV|*ptCL+;>oM3GXqEcqi{>WI$(Wpb?O/2<4Gx[i{A{d<}TPv{b#{zYZfYo' );
define( 'LOGGED_IN_KEY',    '-d9xv~`TjgMZsA^?~Nfa)^FZNsS*`Rog6q@3QSD|/Ef3pR}P!AiP,J77YAxiar05' );
define( 'NONCE_KEY',        'LP7=jSUB<Ma<IL-HoXxbqhv.B$QAl`ylji9Jv038!xD!`x@{p2L4dgP^*ug4#^u^' );
define( 'AUTH_SALT',        '4.6cOdM$b.DZ^@9^3q6]5p|H)R=qig*X:tp!4yNK_?35eALPzPx%lPO59b)34JP4' );
define( 'SECURE_AUTH_SALT', '[1/WYS*cSDVpF<WEw*r]kU14fLXLOs(d{I;%@2qEd}H(21g6`?cP=2l!eKX *!W]' );
define( 'LOGGED_IN_SALT',   'Ba,~:URyV>zE{:VOLH--x0V*]DG#@pF+y($ISotZbo5|LA@JDP9Q;vz1VeB_0+HN' );
define( 'NONCE_SALT',       'McDJ+]$da$TU98x5,m*n>q{b@ijanlk4{RBJ2|5xm0NV?z-o29D6!?zp:T`c>(#S' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'ks_';

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
