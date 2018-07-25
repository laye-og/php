Auto completion sur champs texte--------------------------------
Url     : http://codes-sources.commentcamarche.net/source/41154-auto-completion-sur-champs-texteAuteur  : ryosamaDate    : 07/08/2013
Licence :
=========

Ce document intitulé « Auto completion sur champs texte » issu de CommentCaMarche
(codes-sources.commentcamarche.net) est mis à disposition sous les termes de
la licence Creative Commons. Vous pouvez copier, modifier des copies de cette
source, dans les conditions fixées par la licence, tant que cette note
apparaît clairement.

Description :
=============

Voici un code qui permet d'int&eacute;grer un champs texte qui se compl&egrave;t
e automatiquement (via Ajax) au fur et &agrave; mesure de votre saisie.
<br />U
n bout de code PHP va chercher une liste de valeur (base SQL, repertoires, fichi
ers, XML, Pages Web, etc ...) et la renvoi &agrave; la page web qui vous propose
 une completion en rapport avec votre saisie.
<br />
<br />D&eacute;mo visible
 ici : <a href='http://www.coopmcs.com/demo/completion/completion.html' target='
_blank'>http://www.coopmcs.com/demo/completion/completion.html</a>
<br /><a nam
e='source-exemple'></a><h2> Source / Exemple : </h2>
<br /><pre class='code' d
ata-mode='basic'>
&lt;html&gt;
&lt;head&gt;
&lt;title&gt;Auto complete (auto 
completion)&lt;/title&gt;
&lt;!-- appel du script d'auto completion --&gt;
&lt
;script language=&quot;JavaScript&quot; src=&quot;completion.js&quot;&gt;&lt;/sc
ript&gt;

&lt;script language=&quot;JavaScript&quot;&gt;
&lt;!--
	// nombre 
de caractere minimum à tapé avant de lancer la recherche Ajax
	var minimum_cara
ctere = 1;
	// on se moque la hauteur de case
	var case_sensitive    = 0 ;
//
--&gt;
&lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;

&lt;br&gt;&lt;br&gt;&lt;
br&gt;

&lt;!-- debut du code HTML --&gt;
&lt;!-- déclaration du formulaire -
-&gt;
&lt;form name=&quot;completion_form&quot; method=&quot;POST&quot; action=
&quot;une_action.html&quot;&gt;

&lt;!-- obliger de laissé un autre champs tex
t invisible pour pallier a la gestion de la touche entrée sur les formulaires --
&gt;
&lt;INPUT TYPE=&quot;text&quot; NAME=&quot;dummy&quot; value=&quot;dummy&q
uot; style=&quot;display:none;&quot;&gt;

&lt;!-- déclaration du champs dans l
equel on va tapé sa recherche --&gt;
Auto completion : &lt;input	type=&quot;tex
t&quot;
							class=&quot;texte&quot;
							id=&quot;completion_text&quot;

							name=&quot;completion_text&quot;
							onkeyup=&quot;recup_email(event)
;&quot;
							autocomplete=&quot;off&quot;&gt;
&lt;BR&gt;
&lt;!-- délacarati
on du SELECT a choix unique pour la completion --&gt;
&lt;select id=&quot;compl
etion_select&quot;
		name=&quot;completion_select&quot;
		size=&quot;1&quot;

		onclick=&quot;recup_mail_click();&quot;
		style=&quot;margin-left:110px;borde
r:solid 1px black;border-top:none;display:none;&quot;&gt;&lt;/select&gt;

&lt;
BR&gt;
&lt;input type=&quot;button&quot; onclick=&quot;completion_form.submit()
;&quot; value=&quot;Envoyer&quot;&gt;
&lt;!-- fin du code HTML --&gt;

&lt;/f
orm&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<br /><a name='conclusion'></a><h
2> Conclusion : </h2>
<br />Fonctionne avec IE et Firefox (pas test&eacute; su
r les autres navigateurs).
<br />Necessite PHP + Javascript (fonctionne avec Aj
ax)
<br />
<br />- On peut choisir de respecter la hauteur de case ou pas
<br
 />- On peut choisir &agrave; partir de combien de caract&egrave;re on lance la 
recherche.
<br />
<br />Amusez vous bien.
