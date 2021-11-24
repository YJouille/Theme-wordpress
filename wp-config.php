<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpressacs' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'G9Z#zL/2yYW ImkJ^OS!85$)ExPNI Lbeo n5pnnU;Vhnc/JLx4}{D4ciI],O.6C' );
define( 'SECURE_AUTH_KEY',  'xgk=Ul.YqZCp)I r.LU@oHgJ{Voy</hj?wG+%puQ.#}(Jb@l1B.wE/!M:sXPI)_[' );
define( 'LOGGED_IN_KEY',    'Rxiol*ttc nwDsu~lEC!qEs.{r=XVM&WJ.8&u,zQL;E78+HMvp<+_( ?-z(uA([(' );
define( 'NONCE_KEY',        'n-/CR+`>fYk2Z9QxTIEMb&*y5dATOR0,RbxPn,w@L48&_Ols14@0F_,wK2/#bnPY' );
define( 'AUTH_SALT',        ';=Y2Ox}n5G}0]LV`xq5LYj-]LJ63{0cLg4]kMh>pX,Ookml&,>nqb3_bs^Tia:26' );
define( 'SECURE_AUTH_SALT', '$+`kJeezdA~EhuHVB(vUU5mZuix8=KdD]4E%SvvL;#lp* Lf7z-a?6d!F*2TSJK;' );
define( 'LOGGED_IN_SALT',   '4N~Q`o&c&<5wbt$9MEK@h[/fW4rO55tj;olGabC]]7[/G[<JW;tx)fxF?5U[g(aD' );
define( 'NONCE_SALT',       'VD}^&0Z${LsPniVeh+*_D6+r&fn=mGM_Krke#!XTc2q>cMLRo&ENxNm>s@hgM~CE' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wpacs_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
