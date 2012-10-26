<?php
/**
 * Part of the Sentry bundle for Laravel.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.  It is also available at
 * the following URL: http://www.opensource.org/licenses/BSD-3-Clause
 *
 * @package    Sentry
 * @version    1.0
 * @author     Cartalyst LLC
 * @license    BSD License (3-clause)
 * @copyright  (c) 2011 - 2012, Cartalyst LLC
 * @link       http://cartalyst.com
 */

return array(

	/** General Exception Messages **/
	'account_not_activated'  => 'Le compte n\'est pas activé.',
	'account_is_disabled'    => 'Le compte a été désactivé.',
	'invalid_limit_attempts' => 'Item de config Sentry: "limit.attempts" doit être une valeur numérique supérieure à 0',
	'invalid_limit_time'     => 'Item de config Sentry: "limit.time" doit être une valeur numérique supérieure à 0',
	'login_column_empty'     => 'Vous devez mettre une valeur à "login_column" dans la configuration Sentry.',

	/** Group Exception Messages **/
	'group_already_exists'      => 'Le nom du groupe ":group" existe déjà.',
	'group_level_empty'         => 'Vous devez spécifier un level au groupe.',
	'group_name_empty'          => 'Vous devez spécifier un nom au groupe.',
	'group_not_found'           => 'Le groupe ":group" n\'existe pas.',
	'invalid_group_id'          => 'L\'ID du groupe doit être une valeur numérique supérieure à 0.',
	'not_found_in_group_object' => '":field" n\'existe pas dans l\'objet "group".',
	'no_group_selected'         => 'Aucun groupe n\'a été sélectionné.',
	'user_already_in_group'     => 'L\'utilisateur est déjà dans le groupe ":group".',
	'user_not_in_group'         => 'L\'utilisateur n\'est pas dans le groupe ":group".',

	/** User Exception Messages **/
	'column_already_exists'           => 'Le champ :column existe déjà.',
	'column_and_password_empty'       => ':column et Mot de passe ne peuvent être vide.',
	'column_email_and_password_empty' => ':column, Courriel et Mot de passe ne peuvent être vide.',
	'column_is_empty'                 => ':column ne peut être vide.',
	'email_already_in_use'            => 'Ce courriel est déjà utilisé.',
	'invalid_old_password'            => 'L\'ancien mot de passe est invalide.',
	'invalid_user_id'                 => 'L\'ID de l\'utilisateur doit être une valeur numérique supérieure à 0.',
	'no_user_selected'                => 'Vous devez d\'abord sélectionner un utilisateur.',
	'no_user_selected_to_delete'      => 'Aucun utilisateur sélectionné pour supprimer.',
	'no_user_selected_to_get'         => 'Aucun utilisateur sélectionné.',
	'not_found_in_user_object'        => '":field" n\'existe pas dans l\'objet "user".',
	'password_empty'                  => 'Le mot de passe ne peut être vide.',
	'user_already_enabled'            => 'L\'utilisateur est déjà activé.',
	'user_already_disabled'           => 'L\'utilisateur est déjà désactivé.',
	'user_not_found'                  => 'L\'utilisateur n\'existe pas.',
	'username_already_in_use'         => 'Le nom d\'utilisateur est déjà pris.',

	/** Attempts Exception Messages **/
    'login_ip_required'    => 'L\'ID du login et l\'adresse IP sont requises pour ajouter une tentative de connexion.',
    'single_user_required' => 'Une tentative de connexion ne peut être ajouté que pour un utilisateur, un array a été envoyé.',
    'user_suspended'       => 'Vous avez été suspendu pour une période de :time minutes après plusieurs tentatives de connexion au compte ":account".',

    /** Hashing **/
    'hash_strategy_null'      => 'La stratégie Hashing est null ou vide. Une stratégie hashing doit être configurée.',
    'hash_strategy_not_exist' => 'Le fichier de Hashing strategy n\'existe pas.',

	/** Permissions Messages **/
	'no_rules_added'    => 'Oops, vous avez oublié de spécifier des règles.',
	'rule_not_found'    => 'La règle :rule, n\'existe pas dans les règles configurées. Vérifiez les règles de le fichier de configuration Sentry.',
	'permission_denied' => 'Oops, vous n\'avez pas la permission d\'accéder à :resource',

);
