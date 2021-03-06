<?php defined('SYSPATH') OR die('No direct access allowed.');
// DO NOT EDIT
// This file is automatically generated from the matching PO file
// Updates should be made through Transifex
// I18n generated at: 2014-03-15 06:25+0000
// PO revision date:  2014-03-14 13:17+0000
$lang = array(
	'actions' => array(
		'add_to_category' => 'Cela ajoute un rapport aux catégories additionnelles. Si vous sélectionnez la Catégorie 1 ici et que le rapport est déjà joint à la Catégorie 2, le rapport sera alors dans les deux catégories, 1 et 2.',
		'approve' => 'Approuver un rapport ou pas. Si approuvé, il apparaîtra publiquement.',
		'assign_badge' => 'Vous  serez en mesure d\'attribuer un badge à l\'utilisateur déclenchant. Choisissez le badge assigné ici.',
		'between_times' => 'Il s\'agit d\'une plage d\'heures et / ou minutes entre deux heures au format 24 heures. Si vous entrez un temps plus court dans le deuxième champ, il sera basculé avec le premier. Ces délais doivent être en une seule journée. En outre, ce temps est vérifiée par rapport à l\'heure que vous avez configuré sur votre site dans les paramètres du site et <strong> pas </ strong> nécessairement le fuseau horaire de l\'utilisateur inteférant avec votre déploiement. Laissez cela à 00 heures 00-00h00 pour ignorer ce qualificatif.',
		'category' => 'Si vous souhaitez activer les déclencheurs seulement quand une certaine catégorie est utilisée, vous pouvez régler cela ici. Cela permettra à un déclencheur d\'être activé si l\'une des catégories est utilisée. Pour instace, si vous sélectionnez des catégories 1 et 2 ici et un rapport est présenté à l\'aide de catégories 2 et 3, il va passer le test.',
		'days_of_the_week' => 'Si ces actions se produisent sur ​​certains jours de la semaine, réglez-le ici. Gardez à l\'esprit de la journée est déterminée par le fuseau horaire configuré sur votre déploiement. Maintenez la touche shift ou de contrôle pour la sélection de plusieurs jours.',
		'email_body' => 'Corps de l\'e-mail qui sera envoyé.',
		'email_subject' => 'Sujet de l\'e-mail qui sera envoyé.',
		'feed_id' => 'Le flux peut être tous les flux ou un flux spécifique. Si vous souhaitez un flux spécifiques pour activer un déclencheur, vous voudrez le sélectionner ici. Sinon, laissez su "tous"',
		'from' => 'Nom d\'utilisateur auteur Twitter(ou plusieurs noms d\'utilisateurs séparés par des virgules). Si vous souhaitez que le déclencheur ne se déclenche que pour les messages Twitter d\'un utilisateur particulier, entrez son pseudo ici (à l\'exclusion de @)',
		'keywords' => 'Vous pouvez choisir de laisser ce champ vide si vous ne voulez plus vérifier les mots clés. Si vous ajoutez des mots ici, vous aurez besoin de les séparer par une virgule (,). Par exemple, si vous souhaitez activer un déclencheur lorsque quelqu\'un mentionne «amour» ou «paix» dans leur message, vous voudrez ajouter «amour,paix" dans la zone des mots clés.',
		'location' => 'Vous pouvez sélectionner n\'importe où ou un emplacement spécifique. Si vous sélectionnez un emplacement spécifique, vous serez invité à tracer un cadre autour de la zone qui qualifie une action. Par exemple, si vous voulez que ce déclencheur soit activé lorsque quelqu\'un soumet un rapport au Brésil, vous devrez sélectionner "zone spécifique" puis dessiner la zone autour du Brésil. Vous pouvez effectuer ces boîtes aussi petite ou aussi grande que vous le souhaitez. Vous pouvez également dessiner plusieurs boîtes.',
		'on_specific_count' => 'Ce qualificatif va activer la règle au bout de la N-ième fois, soit pour l\'ensemble de la base d\'utilisateurs collectif ou pour chaque utilisateur individuel. Laissez ce champ vide pour l\'ignorer.',
		'report_title' => 'Ceci est le titre par défaut à ajouter au signalement.',
		'response' => 'Si tous les qualificatifs ci-dessus sont valides, le déclencheur lancera une réponse. Cela peut aller de l\'approbation d\'un rapport à l\'envoi d\'un mail à  un utilisateur. Sélectionnez la réponse ici pour activer des options supplémentaires pour les réponses spécifiques.',
		'send_to' => 'Si vous sélectionnez "Déclencheur personnalisé", l\'e-mail sera envoyé à l\'utilisateur qui aura effectué l\'action. Si vous sélectionnez le bouton radio à côté de la zone de saisie, vous serez en mesure de saisir une adresse email personnalisée. Ceci est utile si vous mettez en place des déclencheurs pour informer les gens lorsque certaines parties de la carte voient des rapports, vérifictions ou une autre activité.',
		'specific_days' => 'Vous pouvez sélectionner plusieurs jours ici. Les dates sont déterminées par le paramètre de fuseau horaire de déploiement. Par défaut pour toutes les dates, ne sélectionnez pas de dates.',
		'trigger' => 'Le déclencheur est la composante de base de la configuration de vos déclencheurs d\'action. C\'est là que vous déterminez si vous souhaitez que quelque chose se passe lorsque quelqu\'un soumet un rapport, effectue un enregistrement, etc Vous serez en mesure de filtrer les réponses à ces actions après en avoir sélectionné une.',
		'user' => 'L\'utilisateur peut être n\'importe qui ou un utilisateur spécifique. Si vous souhaitez seulement que des utilisateurs spécifiques pour activer un déclencheur, vous voudrez les sélectionner ici. Autrement vous voudrez bien laisser «n\'importe qui» puisque la plupart des éléments déclencheurs sont mis en place pour tous les utilisateurs interagissant avec le système',
		'verify' => 'Indiquer si un signalement est vérifié ou non.',
	) ,
	'change_picture' => 'Les pages de profil sur ce site utilisent Gravatar. En cliquant sur l\'image, vous serez redirigé vers le site Gravatar où vous pouvez changer votre photo de profil.',
	'default_value' => 'Sépare chaque valeur avec une virgule, ex. valeur1, valeur2.',
	'radio_choices' => 'Séparez chaque valeur par une virgule, par exemple valeur1, valeur2. Dans le cas où vous souhaitez définir une valeur par défaut, mettre fin à votre liste d\'options avec par exemple :: Si vous voulez faire valeur3 la valeur par défaut, la liste sera valeur1, valeur2, valeur3 :: valeur3',
	'dropdown_choices' => 'Sépare chaque choix avec une virgule, ex. Item 1, Item 2 etc.',
	'private_to' => 'Commencez à taper à la liste des membres.',
	'private_subject' => 'Sujet du message privé',
	'private_message' => 'Message privé',
	'profile_color' => 'Vous pouvez sélectionner une couleur qui apparaîtra sous votre photo de profil sur votre profil public. Cette couleur sera également le point de couleur qui apparaît sur ​​la carte pour vos vérifications.',
	'profile_email' => 'Votre adresse email',
	'profile_name' => 'Votre nom',
	'profile_new_password' => 'S\'il est défini, ce sera votre nouveau mot de passe. Laissez ce champ vide si vous souhaitez garder votre mot de passe actuel.',
	'profile_new_users_password' => 'C\'est une exigence lors de la création d\'un nouvel utilisateur et sera le mot de passe des utilisateurs. Vous devez inviter votre nouvel utilisateur à changer son mot de passe après s\'être connecté pour la première fois.',
	'profile_notify' => 'Choisissez OUI pour recevoir une alerte par email quand un nouveau rapport ou un commentaire est envoyé sur votre site.',
	'profile_password' => 'Votre mot de passe. Laisser vide si vous ne désirez pas le changer.',
	'profile_public' => 'Votre profil peut être consulté par n\'importe qui sur Internet si vous cochez cette option. C\'est aussi la meilleure façon de montrer les rapports que vous avez soumis, vos vérifications, insignes, etc tous sur une seule page.',
	'profile_public_url' => 'Ceci est l\'adresse ou votre profil public peut être accessible.',
	'profile_username' => 'Vous ne pouvez pas changer votre nom d\'utilisateur.',
	'settings_access_level' => 'Les niveaux d\'accès sont utilisés pour restreindre l\'accès aux données de champ de formulaire personnalisés. Des niveaux d\'accès plus élevés peuvent accéder aux champs des niveaux inférieurs. Superadmin a le niveau d\'accès le plus élevé (100). Les données publiques sont affichées au niveau de l\'accès le plus bas (0). Les membres ont un niveau d\'accès 10. Admin est le niveau d\'accès 90 par défaut.',
	'settings_alert_email' => 'Adresse à laquelle seront envoyées les alertes email.',
	'settings_allow_alerts' => 'Autoriser les utilisateurs de souscrire à des alertes via le web.',
	'settings_allow_clustering' => 'Cela permet le regroupement des rapports similaires en un seul point sur la carte',
	'settings_allow_comments' => 'Autoriser les utilisateurs a formuler des commentaires aux rapports sur le site web principal.',
	'settings_allow_feed' => 'Ceci autorise l\'affichage des flux de nouvelles RSS sur le site principal.',
	'settings_allow_feed_category' => 'Cela permet la création d\'une nouvelle catégorie provenant des flux de nouvelles RSS.',
	'settings_allow_reports' => 'Autorise les utilisateurs à envoyer des informations via le formulaire du site web.',
	'settings_api_default_record_limit' => 'Nombre par défaut d\\\'enregistrement à extraire par requête API',
	'settings_api_max_record_limit' => 'Nombre maximum d\\\'enregistrements à extraire par requête API',
	'settings_api_max_requests_per_ip' => 'Nombre maximum de requêtes de l\\\'API par dresse IP',
	'settings_banner' => 'La bannière du site apparaît dans la partie supérieure de la page public de votre site web si le thème que vous utilisez le prend en charge. La taille recommandée pour cette bannière dépendra du thème que vous utilisez. Gardez à l\'esprit que cela va remplacer le titre du site et le slogan en haut de la page.',
	'settings_blocks_per_row' => 'Nombre de blocs colonnes qui seront affichés sur chaque ligne.',
	'settings_cache_pages' => 'Activer ou désactiver la mise en cache. Les pages s\'affichent plus rapidement en réduisant les temps de réponse. Nous vous recommandons d\'utiliser la mise en cache sur des sites à fort trafic. ** Rappelez-vous que les rapports seront remplis sur les pages publiques sur ​​la base du calendrier que vous définissez ci-dessous (temps de vie du cache).',
	'settings_cache_pages_lifetime' => 'Définir la durée de vie du cache.',
	'settings_checkins' => 'Ce réglage permet des vérifications sur votre déploiement. Il s\'agit d\'un type de rapport simplifié qui n\'est pas modérée avant qu\'il ne passe sur la page d\'accueil et nécessite que votre site soit configuré d\'une certaine manière. Lorsque vous activez cette option, assurez-vous que votre réglage de fuseau horaire est UTC et sur ​​votre thème supporte les vérifications. Lorsque vous activez cette option, seul les thèmes type a vérifier seront activées sous vos addons / page Paramètres des thèmes.',
	'settings_configure_map' => 'Configurez la carte pour couvrir un emplacement spécifique.',
	'settings_default_category_colors' => 'Définir une couleur pour toutes les catégories sur ce site.',
	'settings_default_category_icons' => 'Défini une icône pour toutes les catégories sur ce site.',
	'settings_default_location' => 'Ceci est le pays depuis lequel le site web a été déployé.',
	'settings_display_contact' => 'Visibilité de l\'onglet Contact.',
	'settings_display_howtohelp' => 'Activer ou désactiver l\'onglet Comment Aider sur le site principal.',
	'settings_display_items_per_page' => 'Ceci est le nombre de signalements affichés par page sur le site principal.',
	'settings_display_items_per_page_admin' => 'Ceci est le nombre de signalements affichés par page sur l\'interface d\'administration.',
	'settings_flsms_download' => 'C\'est le lieu pour les messages entrants.',
	'settings_flsms_synchronize' => 'Cela permet de synchroniser les messages avec la plate-forme Ushahidi.',
	'settings_flsms_text_1' => 'Numéros de téléphones sur lesquels les messages sont reçus.',
	'settings_google_analytics' => 'Suit les visiteurs de votre site. Obtenez des statistiques détaillées pour les visiteurs.',
	'settings_locale' => 'La langue utilisée sur votre site.',
	'settings_manually_approve_users' => 'Si vous définissez cette option à oui, vous devez approuver chaque utilisateur individuel qui crée un compte sur votre site en leur attribuant des rôles (c.-à-Membre, Admin, Superadmin).',
	'settings_map_provider' => 'Ceci définit la carte qui doit être utilisée sur le site.',
	'settings_map_timeline' => 'Cela montre une ligne temporelle basé sur la date et l\'heure de soumission des rapports',
	'settings_private_deployment' => 'La définition de cette valeur sur vrai ou oui rendra votre déploiement privé de sorte que seuls les utilisateurs disposant de comptes que vous spécifiez seront en mesure d\'accéder au déploiement.',
	'settings_require_email_confirmation' => 'Les utilisateurs recevront par courriel avec un lien de confirmation à cliquer avant qu\'ils ne soient autorisés à se connecter sur le déploiement si ce paramètre est réglé sur Oui. Si vous activez cette option après que votre déploiement ai été accepté par les utilisateurs, ils seront invités à confirmer leur compte avant qu\'ils ne soient autorisés à continuer à l\'utiliser.',
	'settings_server_host' => 'C\'est ici que résident les e-mails',
	'settings_server_password' => 'C\'est le mot de passe pour l\'adresse e-mail qui reçoit des rapports.',
	'settings_server_port' => 'Cela est nécessaire pour accepter des connexions entrantes à partir de l\'adresse e-mail.',
	'settings_server_ssl_support' => 'Ceci est requis pour améliorer la sécurisation de la connexion.',
	'settings_server_type' => 'Cela est nécessaire pour récupérer les e-mails à partir du serveur hôte.',
	'settings_server_username' => 'Ceci est l\'adresse e-mail qui recevra les signalements.',
	'settings_share_site_stats' => 'Les statistiques sont stockés sur un serveur contrôlé par Ushahidi. En activant cette option, vous aurez accès aux statistiques directement dans votre panneau d\'administration. En désactivant, vous allez arrêter de collecter des statistiques et ne serez pas en mesure de récupérer les statistiques de trafic collectées pendant que cette option est désactivée.',
	'settings_site_copyright_statement' => 'Ce que les autres ont le droit de publier de textes, images, vidéo et / ou des thèmes de conception que vous et vos utilisateurs créez? Aller à https://creativecommons.org/choose/ si vous êtes intéressé à préciser ce que les autres sont capables de faire avec votre travail. Et n\'oubliez pas d\'être précis sur les éléments du site, que vous soumettez à licence!',
	'settings_site_email' => 'Adresse email à laquelle les rapports et les messages seront envoyés.',
	'settings_site_message' => 'Ceci est un texte qui apparaîtra au-dessus de la carte sur la page d\'accueil. Ceci est utile pour donner des informations importantes pour les visiteurs sur le site. Pour supprimer la boîte, il suffit de supprimer le message ici.',
	'settings_site_name' => 'Nom de votre site (visite en haut de la page principale).',
	'settings_site_submit_report_message' => 'C\'est un message qui s\'affichera sur la page de soumission de  rapport. C\'est utile pour les avertissements ou des instructions supplémentaires pour vos visiteurs qui font des rapports.',
	'settings_site_tagline' => 'Décrivez votre site en quelques mots.',
	'settings_site_timezone' => 'C\'est le fuseau horaire que votre site va opérer. Cela a un impact sur ​​toutes les actions que vous avez mis en place qui utilisent l\'heure et la date, ainsi que l\'heure actuelle par défaut pour les rapports sur la partie public et privée du site.',
	'settings_twitter_configuration' => 'Défini le hashtag Twitter qui sera utilisé dans les tweets.',
	'feed_geolocation_user' => 'Si vous voulez géocoder vos entrées de flux, saisissez un utilisateur http://geonames.org, permettez les webservices gratuits et entrez les ici. Laissez vide pour désactiver cette fonction.<br /><br />. Attention aux limites d\'utilisation !',
);
