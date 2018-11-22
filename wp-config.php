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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'model');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         '~O0N=6% V/$)k82qiLIY{83|{ trQR|,~?(35Pfy_04*f:0$D}|P PdKlWze~/!B');
define('SECURE_AUTH_KEY',  'OmxgSea%TvMhPveM9}1ltP`wL>rya/F6dU/Amxf0t7114,6um9<bU(h:vR?3kHio');
define('LOGGED_IN_KEY',    'XqI.M0$g[E;([Cq.B+qc.qcoh/?c&2WZ)uM$.`-j3O%G#XL/HSv(M3?o-EnM;uOf');
define('NONCE_KEY',        'ka:kFR}(q7,<9l[^|$Indkn=Ls-iQo^(lLrpLt3|e_gwV,vxxjE%>e WO|3-K(sp');
define('AUTH_SALT',        'b8lr}*}Cao=xPSEE@6-X}@~i1[zW(mmsd 53{`jbk>1 Fg>bswM3f=H,Hw+y|(IW');
define('SECURE_AUTH_SALT', 'L^>F?byRGsUlGTmm lw:4s3LMu8~fr8nT*A+9x&TWfNf-&JsO`-}1BCs)<O],$t]');
define('LOGGED_IN_SALT',   'K#^g%SBM!NrW}Ad~tCpQBFA0vtAOCKDUbR2M[|{,:u9TS[^&$T,pPp%l;zN9actP');
define('NONCE_SALT',       'h%bK<G]H~WEX`=Mz/#MKODcJ7f4<UY~^V25oQP I8bH[J}z~C-!NItwc@B? *a]C');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'md_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
