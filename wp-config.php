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
define( 'DB_NAME', 'bestmilhas' );

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
define( 'AUTH_KEY',         '2NagT.B1Z=k!64sMbwa#jxO>6FhO2G&;0>e7:BlO]Z7A}QW`*vBwh~rA,^x]qokx' );
define( 'SECURE_AUTH_KEY',  'J=w(G5^jL2 zW?`g=L>F^p}KI);6tpZ2S&3AW)KY1}%)|`?Aa?IJg+C=agl$<c.=' );
define( 'LOGGED_IN_KEY',    '#EwFWk> ;]$FElvPt/v{$v3ZhQTv+SwC{y~$~DP[RAXbj4#jT$O*v,OLKQc3nkSQ' );
define( 'NONCE_KEY',        '4BitL7E{tY#~O>HZ}8.9`n%cA./%_{;9Tl~%J&#p((@l{PU9:#SvxW]bq|iH*Oj;' );
define( 'AUTH_SALT',        'V_j*GXbgZ8mAmNcy:@5a;qLSs2^j0xSK}P>1Q&[k&8{8`iwgiBN@jC~=8Dv~5e2M' );
define( 'SECURE_AUTH_SALT', '9$EGvR{#3:m*>:lRDamI>2{du2!+4?o u;>rQwx>Y8~K+R8teqBVvkxP:JIN |zp' );
define( 'LOGGED_IN_SALT',   'kFPcLsJ&W~+t~,&?rnH1e~;<e2~&N0OLvz2+q/m8Kk@ps,0ZOL%3zu/c4oQ&]}_p' );
define( 'NONCE_SALT',       '%W97bVVcU$TZBB3+Cc!3V+J_L}y`vskH4TEv0Z>IllwKSd!l3R2L~1HjYAX<ml,^' );

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
