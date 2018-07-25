Moteur de recherche PHP-----------------------
Url     : http://codes-sources.commentcamarche.net/source/101280-moteur-de-recherche-phpAuteur  : CecilCordheleyDate    : 09/12/2015
Licence :
=========

Ce document intitul� � Moteur de recherche PHP � issu de CommentCaMarche
(codes-sources.commentcamarche.net) est mis � disposition sous les termes de
la licence Creative Commons. Vous pouvez copier, modifier des copies de cette
source, dans les conditions fix�es par la licence, tant que cette note
appara�t clairement.

Description :
=============

Bonsoir à tous,
<br />J'ai décidé de réaliser une base de connaissances en 
PHP pour une activité. Cependant j'avais besoins d'un outil qui maintienne un �
�quilibre entre la performance et l'ergonomie (retrouver une information et la r
etrouver vite).
<br />Pour ce faire j'ai créé un moteur de recherche qui cher
che à émuler celui de google 
<br />et trie les articles par pertinence. 
<b
r />Le moteur fonctionne grâce à PDO
<br /><pre class="code" data-mode="php">
$db = new PDO("mysql:host=127.0.0.1;dbname=queryengine;charset=utf8","root","");
</pre>
<br />
<br /><b>L'instanciation</b> attend 1 paramètre obligatoire mai
s vous devrez obligatoirement vous servir du second
<br /><pre class="code" dat
a-mode="php">$sqe=new Query_Engine($db,[
    "CONTENT"=&gt;"CONTENT_ARTICLE",
  
  "TITRE"=&gt;"TITRE_ARTICLE",
    "RESUME"=&gt;"RESUME_ARTICLE"
]);</pre>
<br 
/>Le premier c'est le PDO et le second assigne les champs sur lesquels le moteur
 devra faire les recherches.
<br />
<br />CONTENT =&gt; Correspond au contenu 
de l'article
<br />TITRE =&gt; Titre de l'article
<br />RESUME =&gt; Résumé 
de l'article
<br />
<br /><b>Requête SQL</b> / vous devez paramétrer la requ
ête SQL permettant de récupérer les articles
<br /><pre class="code" data-mo
de="php">$sqe-&gt;setQuery("SELECT * FROM article_tbl WHERE CONTENT_ARTICLE LIKE
 "%{:query:}%" OR TITRE_ARTICLE LIKE "%{:query:}%"");</pre>
<br /><b>{:query:}<
/b> sera substitué par le critère de recherche appelé par la fonction -&gt;qu
ery()
<br />Paramètrez les coeficients 
<br /><pre class="code" data-mode="ph
p">$sqe-&gt;setCoef("chapitre", 0.03);
$sqe-&gt;setCoef("tagcontent", 0.7);
$sqe
-&gt;setCoef("title", 6);
$sqe-&gt;setCoef("resume", 0.06);
$sqe-&gt;setCoef("ta
g", 0.01);</pre>
<br />
<br />&quot;chapitre&quot; correspond au nombre de cha
pitres dans l'article
<br />&quot;tagcontent&quot; correspond au nombre de fois
 où la recherche se trouve entre des balises
<br />&quot;title&quot; détermin
e quand la recherche correspond au titre
<br />&quot;resume&quot; correspond au
 nombre de fois où la recherche se trouve dans le resumé
<br />&quot;tag&quot
; correspond au nombre de tags
<br />
<br />Ajoutez les critères supplémenta
ires
<br /><pre class="code" data-mode="php">$query="assurance";
$sqe-&gt;Perti
nence_criteria("NB_CHAP", "/&lt;h2/is");
$sqe-&gt;Pertinence_criteria("TAG", "/&
lt;[^&gt;]+&gt;/is");
$sqe-&gt;Pertinence_criteria("COUNT_RELIEF", "/&lt;[^&gt;]
+&gt;($query)&lt;[^&gt;]+&gt;/is");</pre>
<br />
<br />pour finir exécuter la
 requête
<br />
<br /><pre class="code" data-mode="php">$result=$sqe-&gt;quer
y($query);</pre>
<br />
<br />Vous constaterez que quelque soit la requête sa
isie, le premier article sera toujours le plus pertinent.
<br />
<br />Le ZIP 
contient l'exemple décrit plus haut ainsi que la base de données utilisée que
 vous pouvez importer.
<br />
