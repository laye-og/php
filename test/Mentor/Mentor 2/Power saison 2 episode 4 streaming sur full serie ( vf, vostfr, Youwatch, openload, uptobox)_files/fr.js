define("translations",["require"],function(define){return define.amd=!0,function(a){"function"==typeof define&&define.amd?define(["moment"],a):"object"==typeof exports?module.exports=a(require("../moment")):a(window.moment)}(function(a){return a.defineLocale("fr",{months:"janvier_février_mars_avril_mai_juin_juillet_août_septembre_octobre_novembre_décembre".split("_"),monthsShort:"janv._févr._mars_avr._mai_juin_juil._août_sept._oct._nov._déc.".split("_"),weekdays:"dimanche_lundi_mardi_mercredi_jeudi_vendredi_samedi".split("_"),weekdaysShort:"dim._lun._mar._mer._jeu._ven._sam.".split("_"),weekdaysMin:"Di_Lu_Ma_Me_Je_Ve_Sa".split("_"),longDateFormat:{LT:"HH:mm",L:"DD/MM/YYYY",LL:"D MMMM YYYY",LLL:"D MMMM YYYY LT",LLLL:"dddd D MMMM YYYY LT"},calendar:{sameDay:"[Aujourd'hui à] LT",nextDay:"[Demain à] LT",nextWeek:"dddd [à] LT",lastDay:"[Hier à] LT",lastWeek:"dddd [dernier à] LT",sameElse:"L"},relativeTime:{future:"dans %s",past:"il y a %s",s:"quelques secondes",m:"une minute",mm:"%d minutes",h:"une heure",hh:"%d heures",d:"un jour",dd:"%d jours",M:"un mois",MM:"%d mois",y:"un an",yy:"%d ans"},ordinal:function(a){return a+(1===a?"er":"")},week:{dow:1,doy:4}})}),{"Edit profile":"Modifier le profil",Private:"Privé",Following:"Abonné",Follow:"Suivre",Avatar:"Avatar","1 comment":"1 commentaire","%(numPosts)s comments":"%(numPosts)s commentaires","Also on %(forumName)s":"Également sur %(forumName)s","%(guestCount)s Guest Votes":"%(guestCount)s votes anonymes","1 Guest Vote":"1 vote anonyme","%(guestCount)s Others":"%(guestCount)s de plus","1 Other":"1 de plus",Channels:"Chaînes","Places to start your own discussions.":"Endroits où démarrer vos discussions.",Dismiss:"Fermer","Please enter your name.":"Veuillez saisir votre nom.","Please enter your email address.":"Veuillez saisir votre adresse e-mail.","Invalid email address.":"Adresse email non conforme ou erronée. ","Please enter a password.":"Veuillez saisir un mot de passe.","Password must have at least 6 characters.":"Le mot de passe doit contenir au moins 6 caractères.","Name must have at least %(minLength)s characters.":"Le nom doit contenir au moins %(minLength)s caractères.","Name must have less than %(maxLength)s characters.":"Le nom doit contenir moins de %(maxLength)s caractères.","Location must have less than %(maxLength)s characters.":"L'emplacement doit contenir moins de %(maxLength)s caractères.","Site must have less than %(maxLength)s characters.":"Le nom du site doit contenir moins de %(maxLength)s caractères.","Please enter a valid site.":"Veuillez entrer un site valide.","Comments can't be blank.":"Le champ commentaire ne peut pas être vide.","Comments must have at least 2 characters.":"Le champ commentaire doit contenir au moins 2 caractères.","Please sign in or enter a name and email address.":"Veuillez vous identifier ou saisir un nom et une adresse e-mail.","Please enter both a name and email address.":"Veuillez saisir un nom et une adresse e-mail.","Invalid email address format.":"Format d'adresse e-mail incorrect.","Upload Images":"Transférer des images",Attach:"Joindre","Media attachment":"Pièce jointe","Media preview placeholder":"Emplacement pour l'aperçu des médias","Unfortunately your image upload failed. Please verify that the file is valid and in a supported format (JPEG, PNG, or GIF).":"Malheureusement le téléchargement de votre image a échoué. Veuillez vérifier la validité de celle-ci et que le format de votre image est supporté (JPEG, PNG ou GIF).","Unfortunately your image upload failed. Please verify that the file is in a supported format (JPEG, PNG, or GIF).":"Malheureusement le téléchargement de votre image a échoué. Veuillez vérifier que le format de votre image est supporté (JPEG, PNG ou GIF).","Unfortunately your image upload failed. Please verify that your image is under 5MB.":"Malheureusement le téléchargement de votre image a échoué. Veuillez vérifier que celle-ci ne depasse pas les 5Mo.","You must be logged in to upload an image.":"Vous devez être connecté pour télécharger une image.","Unfortunately your image upload failed. Please verify that your image is in a supported format (JPEG, PNG, or GIF) and under 5MB. If you continue seeing this error, please try again later.":"Malheureusement le téléchargement de votre image a échoué. Veuillez vérifier que le format de votre image est supporté (JPEG, PNG ou GIF) et qu'elle pèse moins de 5Mo. Si vous continuez de rencontrer cette erreur, réessayez ultérieurement.","Sorry we didn't catch that. Try again?":"Désolé, nous n'avons pas compris. Pouvez-vous réessayer ?","Did you know you can drag and drop images too? Try it now!":"Saviez-vous que vous pouviez glisser-déposer vos images ici ? Essayez maintenant !","Join the discussion…":"Participer à la discussion…","Start the discussion…":"Commencer la discussion…","Please wait until your images finish uploading.":"Veuillez patienter pendant que vos images sont envoyées.","Oops! We're having trouble posting your comment. Check your internet connection and try again.":"Oups ! Nous n'arrivons pas à publier votre commentaire. Vérifiez votre connexion internet avant de recommencer.","Description must have at least %(minLength)s characters.":"La description doit contenir au moins %(minLength)s caractères.","Description must have less than %(maxLength)s characters.":"La description doit contenir moins de %(maxLength)s caractères.",Gray:"Gris",Blue:"Bleu",Green:"Vert",Yellow:"Jaune",Orange:"Orange",Red:"Rouge",Purple:"Violet","That email address is already registered with a Disqus account. Log in or enter another email.":"Cette adresse e-mail est déjà associée à un compte Disqus. Connectez-vous ou saisissez une autre adresse email.","The e-mail address you specified is already in use.":"L'adresse e-mail indiquée est déjà utilisée.","Try logging in.":"Essayez de vous connecter.",Thumbnail:"Icone",Play:"Démarrer",Hide:"Cacher",View:"Voir","One other person is typing…":"Une autre personne est en train d'écrire... ","%(num)s other people are typing…":"%(num)s autres personnes sont en train d'écrire...","Featured by %(forum)s":"Approuvé par %(forum)s","Sponsored on Disqus":"Parrainé sur Disqus","Hold on, this is waiting to be approved by %(forum)s.":"Merci de patienter pour l'approbation de %(forum)s.","Are you sure you want to flag this comment?":"Êtes-vous sûr de vouloir signaler ce commentaire ?","Are you sure you want to block this user?":"Êtes-vous certain de vouloir bloquer cet utilisateur?","Something went wrong while trying to block this user. Please try again later.":"Quelque chose n'a pas fonctionné lors de la tentative de bloquage de cet utilisateur. Veuillez réessayer plus tard.","Unfortunately this user could not be blocked; you have reached the limit for number of users blocked.":"Malheureusement cet utilisateur n'a pas pu etre bloqué; vous avez atteint le nombre limite d'utilisateurs bloqués.","Are you sure you want to delete this comment? You cannot undo this action.":"Êtes-vous sûr de vouloir supprimer ce commentaire ? Vous ne pouvez pas annuler cette action.","This discussion has been closed.":"Cette discussion a été fermée.","Be the first to comment.":"Soyez le premier à commenter.","Nothing in this discussion yet.":"Aucun élément dans cette discussion actuellement.","You must sign in to down-vote this post.":"Vous devez être connecté pour voter contre ce commentaire.","You must sign in to up-vote this post.":"Vous devez être connecté pour voter pour ce commentaire.","Ban User":"Bannir l'utilisateur","Last 30 days of comments:":"Commentaires des 30 derniers jours","Do nothing":"Ne rien faire",Delete:"Supprimer","Mark as spam":"Marquer comme spam",Note:"Note",Save:"Sauvegarder",Cancel:"Annuler",User:"Utilisateur",Email:"Courriel","IP Address":"Adresse IP","We are unable to post your comment because you have been banned by %(blocker)s.":"Nous ne pouvons pas publier votre commentaire car vous avez été bloqué(e) par %(blocker)s.","Find out more.":"En savoir plus.","Save Edit":"Enregistrer les modifications","%(forumName)s requires you to verify your email address before posting.":"Vous devez vérifier votre adresse e-mail avant de pouvoir écrire dans %(forumName)s","Verify Email":"Vérifier l'adresse courriel","Send verification email to %(email)s":"Envoyer le courriel de vérification à %(email)s","Drag and drop your images here to upload them.":"Glissez-déposez vos images ici pour les transférer.","Post as %(name)s":"Poster en tant que %(name)s","Log in with":"S'identifier avec","or sign up with Disqus":"ou inscrivez-vous sur Disqus","or pick a name":"ou choisissez un nom","Disqus is a discussion network":"Disqus est un réseau de discussion","Disqus never moderates or censors. The rules on this community are its own.":"Disqus ne modère et ne censure jamais. La communauté utilise ses propres règles.","Your email is safe with us. It's only used for moderation and optional notifications.":"Votre e-mail est en sécurité avec nous. Il est utilisé uniquement pour la modération ainsi que des notifications facultatives.","Don't be a jerk or do anything illegal. Everything is easier that way.":"Ne faites rien d'illégal, et ne soyez pas désagréable. Tout sera plus facile ainsi.","Read full terms and conditions":"Lire les conditions générales d'utilisation",Name:"Nom",Password:"Mot de passe","Privacy Policy":"Politique de confidentialité","Terms of Service":"Conditions d'utilisation","Basic Rules":"Règles de base","By signing up, you agree to the %(Disqus)s %(basicRules)s, %(serviceTerms)s, and %(privacyPolicy)s.":"En vous inscrivant, vous acceptez les %(basicRules)s, %(serviceTerms)s, et %(privacyPolicy)s de %(Disqus)s.","By posting, you agree to the %(Disqus)s %(basicRules)s, %(serviceTerms)s, and %(privacyPolicy)s.":"En publiant, vous acceptez les %(basicRules)s, %(serviceTerms)s, et %(privacyPolicy)s de %(Disqus)s.","I'd rather post as a guest":"Je préfère publier en tant qu'invité",Post:"Publier",Next:"Suivant","Connect with %(forumName)s":"Se connecter avec %(forumName)s","%(forumName)s needs permission to access your account.":"%(forumName)s a besoin de votre permission pour accéder à votre compte.","Featured Comment":"Commentaire à la une",MOD:"MODO","1 vote":"1 vote","%(numLikesReceived)s votes":"%(numLikesReceived)s votes","Full profile":"Profil complet","Comments continue after advertisement":"Les commentaires se poursuivent après la publicité.","Load more comments":"Charger d'autres commentaires","Powered by Disqus":"Propulsé par Disqus","Subscribe and get email updates from this discussion":"Abonnez-vous pour être notifié des évolutions de cette discussion.",Subscribe:"S'abonner","yourname@email.com":"votrenom@email.com","Add Disqus to your site":"Ajoutez Disqus à votre site web !","Add Disqus":"Ajouter Disqus",Add:"Ajouter",Privacy:"Vie Privée",Best:"Les meilleurs",Newest:"Les plus récents",Oldest:"Les plus anciens","Sort by Best":"Les meilleurs","Sort by Newest":"Les plus récents","Sort by Oldest":"Les plus anciens",Comments:"Commentaires",Community:"Communauté","Recommend this discussion":"Recommander cette discussion",Recommend:"Recommander",Recommended:"Recommandées","Your 1st recommended discussion!":"Votre première discussion recommandée !","Recommending means this is a discussion worth sharing. It gets shared to your followers' %(Disqus)s feeds if you log in, and gives the creator kudos!":"Recommander une discussion signifie qu'elle vaut la peine d'être partagée. Elle sera partagée sur le fil d'actualité %(Disqus)s des personnes qui vous suivent si vous êtes connecté, et les créateurs seront félicités ! ","Discussion Recommended!":"Discussion recommandée !","Recommending means this is a discussion worth sharing. It gets shared to your followers' %(Disqus)s feeds, and gives the creator kudos!":"Recommander une discussion signifie qu'elle vaut la peine d'être partagée. Elle sera partagée sur le fil d'actualité %(Disqus)s des personnes qui vous suivent et les créateurs seront félicités!","See Your Feed":"Voir votre flux","Find More Discussions":"Trouver plus de discussions",Share:"Partager","Share this discussion on":"Partager la discussion sur","Welcome to %(Disqus)s! Discover more great discussions just like this one. We're a lot more than comments.":"Bienvenue sur %(Disqus)s ! Découvrez d'autre discussions  aussi passionnantes que celle-ci. Nous sommes bien plus que des commentaires.","Get Started":" Commencer","see more":"afficher plus","All-Star":"Les meilleurs",Mod:"Modo","This comment has no content.":"Ce commentaire est vide.","Vote down":"Voter contre","Vote up":"Voter pour",Collapse:"Réduire",Expand:"Afficher plus","Mark as Spam":"Signaler comme Spam",Moderate:"Modérer","Block User":"Bloquer l'utilisateur.","Stop featuring":"Ne plus distinguer","Feature this comment":"Distinguer ce commentaire","Flag as inappropriate":"Signaler un abus",Edit:"Modifier",Reply:"Répondre","View all comments":"Voir tous les commentaires","All Comments":"Tous les commentaires",Link:"Lien","Leave Feedback":"Donnez votre avis","You've featured a comment! This comment will now also appear at the top of the discussion.":"Vous avez distingué ce commentaire! Il apparaîtra désormais en haut de la discussion.","This user is blocked.":"Cet utilisateur est bloqué.","This comment was deleted.":"Ce commentaire a été supprimé.","This comment is awaiting moderation.":"Ce commentaire est en attente de modération.","Comment score below threshold.":"Score de commentaire sous le seuil.","Show comment.":"Afficher le commentaire.","Your comment is awaiting moderation.":"Votre commentaire est en attente de modération.","See your comment.":"Voir votre commentaire.","Why?":"Pourquoi ?","Show One New Comment":"Afficher un nouveau commentaire","Show %(comments)s New Comments":"Afficher %(comments)s nouveaux commentaires ","Show 1 new reply":"Afficher 1 nouvelle réponse","Show %(replies)s new replies":"Afficher %(replies)s nouvelles réponses","One new comment above.":"Un nouveau commentaire ci-dessus.","%(num)s new comments above.":"%(num)s nouveaux commentaires ci-dessus","One new comment below.":"Un nouveau commentaire ci-dessous.","%(num)s new comments below.":"%(num)s nouveaux commentaires ci-dessous.","in this conversation":"dans cette discussion",Login:"S'identifier","Your Profile":"Votre Profil","Display Media":"Afficher les médias","Hide Media":"Cacher les médias","Edit Settings":"Modifier les paramètres","Open Thread":"Ouvrir la discussion","Close Thread":"Fermer la discussion",Help:"Aide",Debug:"Déboguer",Repair:"Réparer",Logout:"Déconnexion","The Disqus comment system is temporarily in maintenance mode. You can still read comments during this time, however posting comments and other actions are temporarily delayed.":"Le système de discussions Disqus est temporairement en maintenance. Vous pouvez continuer à lire les commentaires, mais certaines actions comme publier de nouveaux commentaires sont temporairement indisponibles.","Comments for this thread are now closed.":"Cette discussion est fermée.","An error occurred while opening the thread. Please try again.":"Une erreur est survenue lors de l'ouverture du fil de discussion. Veuillez réessayer.","An error occurred while closing the thread. Please try again.":"Une erreur est survenue lors de la fermeture du fil de discussion. Veuillez réessayer.","Click to copy post link":"Cliquez pour copier le lien","%(numPosts)s comment":"%(numPosts)s commentaires","Adding this person to the whitelist will automatically approve his or her new comments from now on.":"Ajouter cette personne à la liste blanche approuvera automatiquement ses commentaires dès maintenant.","Notifies the banned user that they are banned and will block them from commenting on this site in the future unless unbanned.":"Notifie les utilisateurs bannis qu'ils ont été bloqués et les empêchera à l'avenir de commenter sur ce site à moins qu'ils ne soient retirés de la liste d'interdiction.","Shadow Ban":"Bannissement silencieux",PRO:"PRO","Does not notify the banned user.  Only the banned user can see their comments.":"Ne notifie pas l'utilisateur banni. Seul l'utilisateur banni peut voir ses commentaires.","Good for preventing banned users from creating multiple accounts":"Bon pour empêcher les utilisateurs bannis de créer plusieurs comptes","User:":"Utilisateur :","Email:":"Courriel","IP Address:":"Adresse IP:","Note:":"Note:","Adding an IP address to the banned list may also unintentionally block others who may share this IP address.":"Le fait d'ajouter une adresse IP à la liste des adresses bannies peut aussi non intentionnellement bloquer d’autres utilisateurs qui partagent aussi cette même adresse.","Reason for banning:":"Raison du bannissement:","Add to Trusted List":"Ajouter à la liste de confiance","Add to Banned List":"Ajouter à la liste d'interdiction","1 day":"1 jour","1 week":"1 semaine","2 weeks":"2 semaines",Timeout:"Date d’expiration","Restrict a user's ability to comment for a period of time. This notifies the user of their timeout.":"Empêche un utilisateur de commenter pendant une certaine période de temps. L’utilisateur se sera notifié de la date de fin de cette restriction.",Custom:"Personnalisé","Restrict a user's ability to coment for a period of time. This notifies the user of their timeout.":"Empêche un utilisateur de commenter pendant une certaine période de temps. L’utilisateur se sera notifié de la date de fin de cette restriction.","Ban the user without them knowing. Shadow banned users can still comment, however their posts will no longer be visible to anyone except the banned user.":"Banni l'utilisateur sans qu’il le sache. Les utilisateurs bannis peuvent encore commenter, mais leurs publications ne seront plus visibles pour quiconque à l'exception d'eux-mêmes.","Ban commenters who violate your commenting policy. Permanently banned users cannot post comments, vote on comments, or flag comments on your site. You can remove the user from the ban list at any time.":"Banni les commentateurs qui enfreignent votre politique de commentaires. Les utilisateurs bannis en permanence ne peuvent pas publier de commentaires, ni voter des commentaires ou signaler des commentaires sur votre site. Vous pouvez supprimer un utilisateur de la liste des bannis à tout moment.","We are unable to post your comment because %(blocker)s has placed your account in a timeout. You will be able to comment again when your timeout expires.":"Nous ne pouvons pas publier votre commentaire car %(blocker)s a placé votre compte en attente. Vous pourrez à nouveau publier vos commentaires une fois ce délai passé.","Restrict a user's ability to comment for a period of time. This notifies the user of their timeout. If discussions get heated, enforce timeouts so that users cool off and improve their behavior.":"Restreint la possibilité d'un utilisateur à commenter pour un laps de temps. L'utilisateur en question est notifié de son incapacité a commenter. Si la discussion s'échauffe, le temps d'incapacité a commenter est augmentée pour que la conversation se calme et que l'utilisateur améliore son comportement. ","Ban a user without them knowing. The user can still comment, however, their posts will only be visible to themselves. Use it against trolls and spammers who attempt to circumvent a ban with new accounts.":'Banni un utilisateur sans qu\'il le sache. L\'utilisateur peut toujours commenter, cependant, ses commentaires ne seront visibles que par lui même. Utilisez ceci contre les "trolls" et les "spammers" qui essayent de contourner le bannissement via de nouveaux comptes.',"Permanently ban the user so they can no longer post, vote, or flag comments on your site. If the user repeatedly violates your comment policy, revoke their ability to participate.":"Banni un utilisateur de manière permanente pour qu'ils ne puissent plus commenter, voter ou signaler les commentaires sur votre site. Si l'utilisateur viole la politique de commentaires de manière répétée, toute possibilité de participer aux discussions est aussi supprimée.","You can remove the user from the banned list at any time.":"Vous pouvez retirer l'utilisateur de la liste des personnes bannies à tout moment.","Targeted harassment":"Harcèlement ciblé","posted harassing comments or discussions targeting me, or encouraged others to do so":"a posté des commentaires de harcèlement ou des propos me visant, ou a encouragé d’autres à le faire",Spam:"Spam","posted spam comments or discussions":"a posté des commentaires, ou discussions spam","Inappropriate profile":"Profil inapproprié","profile contains inappropriate images or text":"le profil contient des images ou du texte inappropriés","Threatening content":"Contenu menaçant","posted directly threatening content":"a posté du contenu injurieux ou menaçant",Impersonation:"Imitation","misrepresents themselves as someone else":"se font passer pour quelqu'un d'autre","Private information":"Informations privées","posted someone else's personally identifiable information":"a posté des informations d'identification personnelles de quelqu'un d'autre","I disagree with this user":"Je suis en désaccord avec cet utilisateur","Why are you flagging this comment?":"Pourquoi signaler ce commentaire?","Before flagging, please keep in mind that %(disqus)s does not moderate communities. Your username will be shown to the moderator, so you should only flag this comment for one of the reasons listed above.":"Avant de faire un signalement, considérez le fait que %(disqus)s ne modère pas les communautés. Votre nom d'utilisateur sera affiché au modérateur, ainsi vous ne devriez signaler ce commentaire que pour une des raisons mentionnées ci-dessus.","Flag Comment":"Signaler ce commentaire","Blocked User":"Utilisateur bloqué","You've blocked %(user)s":"Vous avez bloqué %(user)s","You won't see comments from this user on %(disqus)s in discussions, notifications, and more.":"Vous ne verrez pas les commentaires de cet utilisateur sur %(disqus)s dans les discussions, notifications et autre.",Done:"Terminer","Manage Blocked Users":"Gérer les Utilisateurs Bloqués","Thanks for your feedback!":"Merci de votre retour !","Other tools for you:":"Autres outils pour vous :","Blocking this user will hide all of their activity and comments from your %(disqus)s content, feeds, and notifications.":"Bloquer cet utilisateur cachera toutes ses activités et ses commentaires des contenus de vos %(disqus)s discussions, des flux et des notifications.","Would you like to block %(user)s?":"Désirez-vous bloquer  %(user)s?","No Thanks":"Non merci",Flagged:"Signalé","You've blocked %(user)s.":"Vous avez bloqué %(user)s.","Disqus Pro gives you access to exclusive features like auto-moderation, shadow banning, and customization options.":"Disqus Pro vous donne accès à diverses fonctionnalités exclusives, telles que l'auto-modération, l'exclusion en mode \"shadow\" et des options de personnalisation.","Subscriptions and Billing":"Souscriptions et facturation","We are unable to post your comment because %(blocker)s has placed your account in a timeout. You will be able to comment again when your timeout expires in %(expirationRelative)s.":"Nous ne pouvons pas publier votre commentaire car %(blocker)s a placé votre compte en attente. Vous pourrez à nouveau publier des commentaires lorsque votre délai d'attente aura expiré, dans %(expirationRelative)s.","Comment Policy":"Politique relative aux commentaires","Please read our %(commentPolicyLink)s before commenting.":"Nous vous prions de lire notre %(commentPolicyLink)savant de commenter.","Disqus Blog's Comment Policy":"Politique des blogs Disqus relative aux commentaires","%(forumName)s Comment Policy":"Politique relative aux commentaires de %(forumName)s","We are unable to post your comment because %(blocker)s has placed your account in a timeout. You will be able to comment again when your timeout expires %(expirationRelative)s.":"Nous ne pouvons pas publié votre commentaire car %(blocker)s a mis votre compte en attente. Vous pourrez à nouveau publier des commentaires lorsque votre délai d'attente aura expiré %(expirationRelative)s.","Edited %(relativeTime)s by author":"Édité %(relativeTime)s fois par l'auteur","Edited %(relativeTime)s by moderator":"Édité %(relativeTime)s fois par le modérateur","posted %(relativeTime)s":"posté %(relativeTime)s fois","edited %(relativeTime)s":"édité %(relativeTime)s fois","Comments on this entire site are premoderated (only moderators can see this message).":"Les commentaires sur ce site sont pré-modéré (seuls les modérateurs peuvent voir ce message)","Change site settings.":"Modifier les paramètres du site","Comments on this thread are premoderated (only moderators can see this message).":"Les commentaires sur cette discussion sont pré-modérés (seuls les modérateurs peuvent voir ce message)","Don't Premoderate Thread":"N'utilise pas pré-modération.","Premoderate Thread":"Mettez cette discussion en pré-modération.","An error occurred while updating the thread. Please try again.":"Une erreur est survenue pendant la mise à jour de ce sujet. Merci de réessayer."}});