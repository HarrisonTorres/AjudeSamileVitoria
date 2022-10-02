<?php
define( 'WP_CACHE', true );

/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'luzia' );

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
define( 'AUTH_KEY',         'Pc/pEcO!Ao!>p9N|A1F;6Jne`a&DM3 a^,Yxt5l :R15s1*f,TYznUR{a(LMYk?B' );
define( 'SECURE_AUTH_KEY',  'LZ[(Zg*orPO& ,$dScKr]+aLh2ocfSt#o/}N$uSSg!GmX)9dss7;_nqQUN$H|}]K' );
define( 'LOGGED_IN_KEY',    '.m+E^z%SeL&-kPC7RW[.r/Rcjauk%_+#a)p2A0^frl?od!-<$FgxG9qi&5&(Of<j' );
define( 'NONCE_KEY',        'SOcg@MAeGWwn~qn.naiN@^~0<^8Mh4g(Tx_3iNRqV:CczPyo?ZfS]]i=ac+e3v9,' );
define( 'AUTH_SALT',        'Tv??Fu(&7>/jZCQct#0``<uZxD6Y$qb%7fMJ}N;i;Bvp}ZN$>i=*JYcBW(L|XRb(' );
define( 'SECURE_AUTH_SALT', 'mDYd^q7P+_^:FY/Gw+Wb17<HU-%%zq_zR!*f=CDo!T-Zb/PcAchhwWN}f+B^KmL^' );
define( 'LOGGED_IN_SALT',   '4<@5RMa|.#]X6dM-a**>YP@!3`x= 1w%3Z,9uubyFkM,f_N[iRH[Ug~oOcdR`0#H' );
define( 'NONCE_SALT',       'hb(FMb)U[t8>Hc@j,,H#.{vvh{$Q1@IXc@lh,6!#hdl%n4+fSRs,UOMVJHpC]X#]' );

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

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
