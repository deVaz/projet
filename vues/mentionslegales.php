<div id="mentionslegales">
    <div id="body">
        <center>
        <fieldset id="conditionsFR">
            <legend style="color:brown;"><?php
            if ($_SESSION['langue'] == "fr") {
                echo "Mentions l&eacute;gales";
            } elseif ($_SESSION['langue'] == "en") {
                echo "Legal notices";
            } elseif ($_SESSION['langue'] == "de") {
                echo "Gesetzliche Erwähnungen";
            } elseif ($_SESSION['langue'] == "es") {
                echo "Menciones legales";
            }
            ?> </legend>


       
        <?php
        function replace($var){
$var = str_replace('é','&eacute',$var);
$var = str_replace("è","&egrave",$var);
$var = str_replace("ê","&ecirc)",$var);
$var = str_replace("à","&agrave",$var);
$var = str_replace("ä","&auml;",$var);
$var = str_replace("ö","&ouml;",$var);
$var = str_replace('ó','&oacute',$var);
$var = str_replace('á','&aacute',$var);
$var = str_replace('í','&iacute',$var);
$var = str_replace('ú','&uacute',$var);
$var = str_replace("ü","&uuml;",$var);
return $var;
        }
        if($_SESSION['langue'] == "fr"){
            
            $accent="Introduction</br>
</br>
Bienvenue sur esk’immo.com ou l’un de ses sous-domaines.</br>
</br>
Ce Site permet de publier des petites annonces  de logement pour les étudiants et de vous mettre en relation avec eux.</br>
Seuls les étudiants inscrits sur ce site peuvent consulter coordonnées des autres membres.</br>
</br>
Ce Site est géré par la société SARL ESK’IMMO, dont le siège social est basé à l’Institut Supérieur d’Electronique de Paris, 28 rue Notre-Dame des Champs, 75006 Paris.</br>
</br>
En accédant à ce Site, vous acceptez les Conditions d'utilisation ci-dessous, qui ont été conçues pour que le Site fonctionne de manière satisfaisante pour tous.</br>
Les présentes Conditions d'utilisation sont applicables à compter du 1er janvier 2012.</br>
1. Mentions Légales</br>
Editeur </br>
SARL ESK’IMMO</br>
Institut Supérieur d’Electronique de Paris, 28 rue Notre-Dame des Champs</br>
75006 Paris - France</br>
E-mail: groupe7d@gmail.com</br>
 </br>
Déclaration CNIL </br>
En application de la loi n°78-17 du 6 janvier 1978 relative à l'informatique, aux fichiers et aux libertés, le site esk’immo.com est enregistré à la Commission Nationale de l'Informatique et des Libertés (CNIL) selon la déclaration simplifiée n°48 (récépissé n°1375638). </br>
</br>
Droit d'accès et de modification </br>
Conformément à la loi n°78-17 du 6 janvier 1978 relative à l'informatique, aux fichiers et aux libertés, toute personne peut obtenir communication et, le cas échéant, rectification ou suppression des informations la concernant, en s'adressant par courrier à :</br>
SARL ESK’IMMO</br>
Institut Supérieur d’Electronique de Paris, 28 rue Notre-Dame des Champs</br>
75006 Paris - France </br>
Ou par message électronique à groupe7d@gmail.com</br>
</br>
2. Charte d'utilisation du Site</br>
 </br>
L’utilisation du Site esk’immo.com et de ses sous-domaines implique l'acceptation sans réserve des présentes conditions d'utilisation. Elles pourront être modifiées à tout moment au gré des changements ou additions effectués sur ce Site. En accédant à ce Site, vous vous engagez à prendre connaissance de nos conditions et à vous tenir informé de toute modification ou ajout. Si vous n'êtes pas en accord avec ces conditions, vous ne devez en aucun cas faire usage de ce Site. Ces conditions ont été modifiées pour la dernière fois le 5 janvier 2011.</br>
 </br>
Nos engagements</br>
1. Validité des annonces : ESK’IMMO ne conservera pas d'annonces dépassées afin d'accroître artificiellement sa base de données.</br>
2. Contrôle des annonces : ESK’IMMO s’efforcera de supprimer toute annonce contraire à la loi et contraire à sa charte.</br>
</br>
Utilisation du Site</br>
Les annonces doivent être placées dans la catégorie appropriée. Les comportements suivants sont strictement interdits :</br>
- violer des lois en vigueur ou le Règlement sur les Contenus Interdits</br>
- donner des informations fausses ou de nature à induire leur destinataire en erreur</br>
- porter atteinte aux droits détenus par des tiers</br>
- envoyer des courriers électroniques non sollicités à caractère commercial (spamming) ou proposer des systèmes de chaînes d'argent ou pyramides financières </br>
- diffuser des virus ou autres technologies de nature à porter atteinte au Site ou aux intérêts et biens d'autres utilisateurs de ce Site</br>
- imposer une charge déraisonnable sur notre infrastructure ou interférer avec le bon fonctionnement du Site</br>
- reproduire tout ou partie de ce Site, sur un autre serveur ou dans un autre lieu </br>
- copier, modifier, ou distribuer tout contenu appartenant à autrui</br>
- utiliser des robots, spiders, scrapers ou d'autres moyens utilisés pour accéder au Site et pour collecter du contenu du Site dans quelque but que ce soit, sans notre autorisation explicite et écrite</br>
- collecter ou vous procurer de toute autre manière des informations relatives à autrui, notamment les adresses e-mail et autres données nominatives, sans y avoir été autorisé- collecter ou vous procurer de toute autre manière des informations relatives à autrui, notamment les adresses e-mail et autres données nominatives, sans y avoir été autorisé</br>
- redistribuer ou divulguer toute information obtenue sur ce Site à un tiers (qu'il s'agisse d'un site internet ou autre)</br>
- vendre, modifier ou produire des travaux dérivés de l'information obtenue sur ce Site, ou altérer ou supprimer tout copyright ou référence à du matériel protégé</br>
- contourner les mesures destinées à prévenir ou restreindre l'accès au Site.</br>
 </br>
Cette liste est non exhaustive et nous nous réservons le droit de retirer sans avertissement ou autre notification tout contenu qui ne serait pas compatible avec les règles et les valeurs de notre communauté.</br>
</br>
Abus</br>
Afin de préserver ensemble l'intégrité du Site, nous vous invitons à utiliser le système de signalement pour nous informer des problèmes et des contenus inappropriés. Si nous estimons que certains utilisateurs adoptent un comportement contraire à nos règlements, nous nous réservons le droit de limiter ou de résilier leur accès à nos services, de retirer certains contenus hébergés et de prendre à leur encontre les dispositions techniques et juridiques qui s'imposent. Toutefois, quelle que soit notre décision, nous déclinons toute responsabilité quant à la légitimité du contenu publié, ainsi qu'à la surveillance et à l'usage du Site.</br>
</br>
Propriété intellectuelle</br>
Ce Site contient des informations, images et autres matériaux qui sont la propriété de ESK’IMMO et/ou des utilisateurs de ce Site.</br>
Vous n'êtes pas autorisé à reproduire, quel qu'en soit le moyen ou le support, ces éléments sans le consentement express du directeur de la publication du Site.</br>
 </br>
Un grand nombre de produits très variés sont proposés sur ce Site par des particuliers et professionnels. Les parties habilitées, en particulier les titulaires de droits d'auteur, de droits de marque ou d'autres droits détenus par des tiers, peuvent signaler les annonces qui portent atteinte à leurs droits et demander leur retrait du Site. Si un représentant légal de la partie habilitée nous signale de telles offres de manière appropriée, les produits portant atteinte aux droits de propriété intellectuelle seront retirés par nos services.</br>
Il vous suffit de nous envoyer un mail à :</br>
- groupe7d@gmail.com</br>
Vous pouvez utiliser cette adresse pour signaler les annonces qui portent atteinte à vos droits de propriété intellectuelle. Ces informations doivent nous permettre d'identifier les annonces à retirer du Site. </br>
</br>
3. Règles de fonctionnement</br>
</br>
Afin de servir au mieux les utilisateurs dans la limite de nos moyens limités, nous établissons ici les règles générales de fonctionnement de notre Site. Ces règles peuvent inclure la limitation de la taille des messages, la durée de publication des annonces ainsi que toute activité annexe. Vous êtes conscient qu'il est de votre responsabilité d'archiver toute information que vous pourriez transmettre à ce Site. ESK’IMMO n'est en aucun cas responsable de toute suppression d'information ou de l'incapacité à stocker cette information. </br>
</br>
Liens</br>
Tout contenu placé sur ce Site peut contenir des liens vers des sites étrangers. ESK’IMMO se réserve néanmoins le droit de supprimer des liens ou de les bloquer dans certaines rubriques. ESK’IMMO ne vérifie ou n'exerce aucun contrôle sur de tels sites ou informations étrangers et ne cautionne de tels sites ou informations étrangers. ESK’IMMO ne peut en aucun cas être rendu responsable de toute information, produits ou services contenus dans ces sites étrangers.</br>
</br>
Pas de Spam</br>
ESK IMMO n'autorise ni ne tolère aucune communication non sollicitée par les utilisateurs de notre Site, incluant mais non limité à démarchage, sollicitation publicitaire, courriel non sollicité, 'Junk mail', 'chaînes' ou 'organisations pyramidales'. Si vous avez le sentiment d'avoir reçu des communications non sollicitées suite à votre utilisation de notre Site, contactez-nous.</br>
</br>
Contenu retiré du site</br>
ESK’IMMO a le droit mais non l'obligation, de refuser, de déplacer ou de retirer du Site tout contenu jugé non conforme aux buts et à l'esprit de sa charte. Nous pouvons vous suspendre ou vous interdire l'accès au Site si nous considérons que vos actions dérangent l'activité de tout autre utilisateur du Site ou puisse engager la responsabilité de ESK’IMMO ou de tout autre utilisateur de ce Site. </br>
</br>
Annonces multiples et doublons</br>
Vous ne pouvez pas publier des annonces dont le contenu est similaire ou proche (plusieurs annonces pour la vente/location d'un même bien, pour un même service, etc.). </br>
</br>
4. Déni de garantie</br>
</br>
ESK’IMMO, et tout tiers impliqué dans la création du Site, ne donnent aucune garantie, explicite ou implicite, et n'assument aucune responsabilité relative à l'utilisation du Site. À ce titre, ils ne peuvent être redevables à un utilisateur ou à une autre partie, des dommages directs ou indirects, spéciaux, particuliers ou accessoires découlant de l'utilisation de ce Site ou d'un autre site relié par un hyperlien.</br>
Ce Site est fourni 'Tel Quel', sans aucune garantie.</br>
ESK’IMMO n'accepte aucune responsabilité d'aucune sorte en ce qui concerne la précision, le contenu, l'exhaustivité, la légitimité, la fiabilité, l'opérabilité ou la disponibilité des informations ou des données affichées dans les résultats obtenus par le Site. ESK’IMMO n'accepte aucune responsabilité en ce qui concerne la suppression, l'impossibilité de stockage, la transmission incorrecte ou la transmission inopportune desdites informations ou données. ESK’IMMO n'accepte aucune responsabilité en ce qui concerne les dommages susceptibles de résulter du téléchargement ou de l'utilisation des informations ou des données disponibles sur Internet via les Services de ce Site.</br>
 </br>
ESK’IMMO exclut expressément et dans toute la mesure permise par les lois applicables toutes garanties explicites, implicites et légales, y compris et sans restriction les garanties de succès commercial, d'adaptation à un objet spécifique, et de non infraction de droits propriétaires. ESK’IMMO exclut toutes garanties en matière de sécurité, de fiabilité, d'opportunité et de performance des services de ESK’IMMO. ESK’IMMO n'apporte aucune garantie pour aucune information ou aucun conseil obtenu via le Site. ESK’IMMO n'apporte aucune garantie pour les services ou les biens reçus via (ou dont la promotion est assurée via) les services d’ ESK’IMMO ou via les liens proposés par les services de ESK’IMMO, ni pour aucune information ou aucun conseil reçu via les liens proposés dans les services de ESK’IMMO.</br>
Vous déclarez comprendre et accepter que vous téléchargez ou utilisez d'une manière ou d'une autre des informations ou des données via les services de ESK’IMMO à votre discrétion et à vos risques et périls, et que vous restez seul responsable des éventuels dommages causés à votre système informatique ou des pertes de données qui pourraient résulter du téléchargement et/ou de l'utilisation de ces informations ou de ces données. </br>
Certaines juridictions et certains pays n'autorisant pas l'exclusion des garanties implicites, il est possible que les exclusions ci-dessus ne vous concernent pas. Il est possible par ailleurs que vous disposiez d'autres droits, ceux-ci variant selon les juridictions et selon les pays.</br>
 </br>
</br>
5. Limitation de responsabilité</br>
 </br>
Ce Site est un lieu dans lequel les utilisateurs peuvent échanger de l'information. ESK’IMMO ne fournit ni ne vend les produits ou services décrits dans les annonces du Site. ESK’IMMO ne peut contrôler la qualité, véracité, sincérité ou légalité de toute l'information, produits ou services placés sur le Site et en conséquence il est envisageable que vous soyez confronté à certains contenus choquants, indécents ou répréhensibles. Vous êtes conscient que vous, et non ESK’IMMO, êtes entièrement responsables pour toute information placée par vous sur notre Site et vous vous engagez à respecter les lois et régulations applicables. Vous pouvez placer de l'information dans la limite de vos droits.</br>
</br>
ESK’IMMO ne pourra en aucun cas être tenu responsable vis à vis d'un utilisateur en matière d'utilisation ou utilisation incorrecte des services de ce site.</br>
Si toutefois ESK’IMMO venait à être dans l'impossibilité de limiter sa responsabilité, l'étendue de cette responsabilité devrait être le minimum autorisé.</br>
ESK’IMMO décline toute responsabilité en cas de dommages directs ou indirects causés à l'utilisateur, quelle qu'en soit la nature, résultant du contenu, de l'accès, ou de l'utilisation du Site.</br>
En cas d'utilisation anormale ou d'une exploitation illicite du Site, l'utilisateur est alors seul responsable des dommages causés aux tiers et des conséquences des réclamations ou actions qui pourraient en découler. L'utilisateur renonce également à exercer tout recours contre ESK’IMMO dans le cas de poursuites diligentées par un tiers à son encontre du fait de l'utilisation et/ou de l'exploitation illicite du Site.</br>
L'utilisateur du Site reconnaît avoir vérifié que sa configuration informatique ne contient aucun virus et qu'elle est en parfait état de fonctionnement. </br>
</br>
L'utilisateur reconnaît avoir été informé que le Site est accessible 24h/24h et 7 jours/7, à l'exception des cas de force majeure, difficultés informatiques, difficultés liées aux réseaux de télécommunications ou difficultés techniques. Pour des raisons de maintenance, ESK’IMMO pourra interrompre l'accès au Site et s'efforcera d'en avertir préalablement les utilisateurs.</br>
ESK’IMMO ne saurait être tenu pour responsable des dommages directs ou indirects qui pourraient résulter de l'accès ou de l'utilisation du Site, y compris l'inaccessibilité, les pertes de données, l'usurpation d’identité, détériorations, destructions ou virus qui pourraient affecter l'équipement informatique de l'utilisateur, et/ou de la présence de virus sur son Site.</br>
ESK’IMMO ne saurait en aucun cas être tenu responsable des retards ou des baisses de performance résultant directement ou indirectement de catastrophes naturelles, de forces ou de causes qui échappent à son contrôle raisonnable y compris mais non seulement problèmes spécifiques au réseau Internet, pannes des équipements informatiques, pannes des réseaux ou des équipements de télécommunication, pannes d'autres équipements, pannes de courant, grèves, conflits sociaux, émeutes, insurrections, troubles de l'ordre public, manque de personnel ou d'équipement, incendies, inondations, tempêtes, explosions, cas de force majeure, guerre, actions du gouvernement, injonctions de tribunal national ou étranger, résultats insuffisants d'une ou plusieurs tierces parties, perte ou fluctuations en matière de chaleur, de lumière ou de climatisation.</br>
L'utilisateur déclare que le coût de l'accès et de la navigation sur le Site est à sa charge exclusive. Dans l'hypothèse où l'utilisateur accèderait au Site à partir d'un autre Etat que la France, il s'engage à s'assurer également du respect de la législation localement applicable.</br>
ESK’IMMO se réserve la possibilité de saisir toutes voies de droit à l'encontre de toute personne qui n'aurait pas respecté les dispositions relatives aux articles 323-1 à 323-7 du code pénal, et notamment qui accéderait frauduleusement, à tout ou partie d'un système de traitement automatisé de données du Site.</br>
</br>
6. Confidentialité et données personnelles</br>
Les données personnelles nominatives et non nominatives relatives aux utilisateurs, collectées par l'intermédiaire du Site, et toutes informations futures, ne sont destinées qu'à un usage exclusif de la société ESK’IMMO, dans le cadre de la mise en œuvre des services offerts aux utilisateurs sur le Site, et ne font l'objet d'aucune communication ou cession à des tiers, autres que les prestataires techniques en charge de la gestion du Site, lesquels sont tenus de respecter la confidentialité des informations et de ne les utiliser que pour l'opération bien précise pour laquelle ils doivent intervenir.</br>
Nous sommes amenés à collecter un certain nombre de données nécessaires au bon fonctionnement du service et à la publication des annonces. Seules les informations figurant dans l'annonce et les informations strictement nécessaires à la mise en relation sont accessibles au public. Sur les formulaires de collecte de données personnelles, il est mentionné le caractère obligatoire ou facultatif de cette collecte. Nous sommes les seuls destinataires des données qui nous sont transmises. </br>
Les informations collectées peuvent également contribuer à mieux vous connaître et à mettre en adéquation nos offres avec vos attentes, à gérer les réclamations, à appliquer nos règles de fonctionnement, à résoudre d'éventuels différents entre utilisateurs, ou encore à vous tenir au courant de notre actualité.</br>
</br>
Elles permettent enfin d’adresser des offres spéciales de la part de nos partenaires uniquement à l'attention des utilisateurs qui en auront explicitement fait la demande. Dans ce cadre, les données sont susceptibles d'être louées mais ne seront en aucun cas vendues ou cédées à des tiers.</br>
</br>
7. Votre relation avec ESK’IMMO</br>
</br>
Vous et ESK’IMMO êtes contractuellement indépendants l'un de l'autre et ces termes ne doivent en aucun cas être interprétés comme étant une association ou partenariat entre nous. Vous ne pouvez suggérer que ESK’IMMO cautionne vos annonces, produits, services ni vous même. Vous ne pouvez encadrer ce Site (ou toute information contenue dans ce Site) ou créer une bordure autour de ce Site ou de son contenu.</br>
Divers.</br>
Vous acceptez que toute réclamation ou tout litige avec ESK’IMMO soit réglé devant un tribunal à Paris, en France sauf convention contraire. La non-imposition de notre part de l'application d'une disposition particulière n'implique aucunement que nous renonçons à nous en prévaloir ultérieurement. Dans l'hypothèse où un tribunal établirait la nullité de l'une de ces conditions, les autres conditions demeureront pleinement d'application.</br>
A l'exception des notifications relatives aux contenus illégaux ou contrevenants, vos notifications doivent nous être adressées par courrier recommandé à ESK’IMMO, Institut Supérieur d’Electronique de Paris, 28 rue Notre-Dame des Champ, 75006 Paris - France</br>
                </br></br>";
            $accent = replace ($accent);
            
   echo $accent;
        }elseif ($_SESSION['langue'] == "en") {
               $accent="Introduction</br>
            </br>
Welcome on Esk'immo.com or one of its subdomains. </br>
</br>
This site lets you post classified ads for housing for students and put you in touch with them. </br>
Only students registered on this site can view details of other members. </br>
</br>
This site is managed by the ESK'IMMO SARL, with headquarters based at the Institut Supérieur d'Electronique de Paris, 28 rue Notre-Dame des Champs, 75006 Paris. </br>
</br>
By accessing this Site, you accept the Terms of Service below, which were designed for the site works satisfactorily for all. </br>
These Terms of Use are applicable from 1 January 2012. </br>
1. Legal </br>
Publisher </br>
ESK'IMMO LLC </br>
Higher Institute of Electronics, Paris, 28 rue Notre-Dame des Champs </br>
75006 Paris - France </br>
E-mail: groupe7d@gmail.com </br>
 </br>
CNIL </br>
Pursuant to Law No. 78-17 of 6 January 1978 relating to computers, files and freedoms, the site esk'immo. Com is registered with the Commission Nationale Informatique et Libertés (CNIL) under the simplified declaration No. 48 (receipt No. 1375638). </br>
</br>
Right to access and change </br>
According to the law n ° 78-17 of 6 January 1978 relating to computers, files and freedom, any person may obtain and, where appropriate, correct or delete information about it, by contacting by e to: </br>
ESK'IMMO LLC </br>
Higher Institute of Electronics, Paris, 28 rue Notre-Dame des Champs </br>
75006 Paris - France </br>
Or by e-mail to groupe7d@gmail.com </br>
</br>
2. Terms of use Site </br>
 </br>
Use of the Site esk'immo. Com and its subdomains implies the unconditional acceptance of these terms of use. They may be modified at any time because of changes or additions made to this site. By accessing this site, you agree to read our terms and keep you informed of any changes or additions. If you do not agree with these terms, you should under no circumstances make use of this Site. These conditions have been changed for the last time January 5, 2011. </br>
 </br>
Our commitment </br>
1. Validity of ads: ESK'IMMO not keep outdated ads to artificially increase its database. </br>
2. Control of ads: ESK'IMMO strive to remove any advertisement is contrary to law and contrary to its charter. </br>
</ Br>
Using the site </ br>
Ads must be placed in the appropriate category. The following behaviors are strictly prohibited: </br>
- Violate any applicable laws or Regulations Prohibited Content </br>
- Give false or likely to mislead the recipient in error </br>
- Violate the rights held by others </br>
- Send unsolicited email commercial (spamming) or propose systems silver chains or pyramid schemes </br>
- Distribute viruses or other technologies that interfere with the Site or the interests or property of other users of this site </br>
- Impose an unreasonable burden on our infrastructure or interfere with the proper working of the Site </br>
- Reproduce all or part of this Site on any other server or another location </br>
- Copy, modify, or distribute any content belonging to others </br>
- Use robots, spiders, scrapers or other means used to access the Site and to collect the contents of the Site for any purpose whatsoever, without our express written permission </br>
- Collect or obtain any other manner of information about others, including email addresses and other personal data, without having been authorized to collect, or obtain in any other manner of information about others, including e -mail and other personal data, without having been authorized </br>
- Redistribute or disclose any information obtained from this Site to a third party (either a website or other) </br>
- Sell, modify or make derivative works of the information obtained from this Site, or alter or remove any copyright or reference material protected </br>
- Circumvent measures intended to prevent or restrict access to the Site. </br>
 </br>
This list is not exhaustive and we reserve the right to remove without warning or other notice any content that is not compatible with the rules and values ​​of our community. </ Br>
</br>
Abuse </ br>
To preserve the integrity of the entire site, please use the reporting system to inform us of problems and inappropriate content. If we feel that some users engage in conduct contrary to our regulations, we reserve the right to limit or terminate access to our service, remove hosted content and take against them the provisions necessary technical and legal . However, regardless of our decision, we assume no responsibility for the legitimacy of the content published as well as monitoring and the use of the Site. </br>
</br>
Intellectual Property </br>
This Site contains information, images and other materials are the property of ESK'IMMO and / or users of this Site. </br>
You are not allowed to reproduce, regardless of the way or means, these elements without the express consent of the Director of the publication of the Site. </br>
 </br>
Many products are very diverse on this Site by individuals and professionals. The parties entitled, especially holders of copyrights, trademark rights or other rights held by third parties can report listings that infringe their rights and demand their withdrawal from the Site. If a legal representative of the party entitled to our attention such offers as appropriate, products infringing intellectual property rights will be removed by us. </br>
Just send us an email to: </br>
- Groupe7d@gmail.com </ br>
You can use this address to report ads that violates your intellectual property rights. This information should enable us to identify the ads removed from the site. </ Br>
</ Br>
3. Operating rules </ br>
</ Br>
In order to best serve the users within our limited means, we establish here the general rules of operation of our Site. These rules may include limiting the size of messages, the duration of publication of advertisements and any additional activity. You are aware that it is your responsibility to check any information you may transmit to the Site. ESK'IMMO is not responsible for any deletion of information or failure to store this information. </br>
</br>
Links </br>
Any content placed on this Site may contain links to foreign sites. ESK'IMMO nevertheless reserves the right to remove links or block in some sections. ESK'IMMO only checks or has no control over such sites and foreign information and does not endorse these sites or information from abroad. ESK'IMMO in no way be held responsible for any information, products or services contained in these foreign sites. </br>
</ Br>
No Spam </ br>
ESK IMMO neither authorizes nor tolerate any unsolicited communication by the users of our site, including but not limited to canvassing, soliciting advertising, unsolicited e-mail, 'junk mail', 'chain' or 'pyramidal organizations'. If you feel you have received unsolicited communications due to your use of our Site, please contact us. </br>
</br>
Removed from the site content </br>
ESK'IMMO has the right but not the obligation, to refuse, move or remove from the Site any content deemed inconsistent with the purposes and spirit of its charter. We can suspend or terminate your access to the Site if we believe your actions disrupt the activity of other users of the Site or may incur liability ESK'IMMO or any other user of this Site. </br>
</br>
Ads multiple duplicates </br>
You can not publish advertisements whose content is similar or close (several ads for the sale / lease of the same property, for the same service, etc.).. </br>
</br>
4. Disclaimer of Warranty </br>
</br>
ESK'IMMO, and any third party involved in creating the site, make no warranty, express or implied, or assumes any liability for the use of the Site. As such, they can not be liable to a user or another party for any direct or indirect, special, special or incidental arising from the use of this site or another site connected by a hyperlink. </ br>
This Site is provided 'as is' without warranty. </br>
ESK'IMMO accepts no liability of any kind with respect to the accuracy, content, completeness, legality, reliability, or operability or availability of information or data displayed in the results obtained by the site. ESK'IMMO accepts no responsibility for the deletion, failure to store, transmit incorrect or improper transmission of such information or data. ESK'IMMO accepts no responsibility with regard to the harm resulting from downloading or using the information or data available on the Internet Services Site. </br>
 </br>
ESK'IMMO expressly excludes and to the extent permitted by applicable law all warranties expressed, implied and statutory, including without limitation warranties of commercial success, fitness for a particular purpose, and noninfringement of proprietary rights. ESK'IMMO excludes all guarantees of security, reliability, timeliness and performance of services ESK'IMMO. ESK'IMMO makes no warranties for any information or advice obtained through the Site. ESK'IMMO makes no warranties for services or goods received through (or who is promoted via) the services of ESK'IMMO or via the links by ESK'IMMO services, or for any information or any advice received via the links in services ESK'IMMO. </br>
You understand and agree that you download or use in one way or other information or data services via ESK'IMMO at your discretion and your own risk and that you remain solely responsible for any damage caused to your computer system or data loss that could result from downloading and / or use of such information or data. </ Br>
Some states and some countries do not allow the exclusion of implied warranties, it is possible that the above exclusions may not apply to you. It is possible that you also have other rights, they vary in different jurisdictions and countries. </ Br>
 </ Br>
</ Br>
5. Limitation of Liability </ br>
 </ Br>
This site is a place where users can exchange information. ESK'IMMO does not provide or sell products or services described in the advertisements of the Site. ESK'IMMO can not control the quality, accuracy, truthfulness or legality of any information, products or services posted on the site and therefore it is possible that you are facing some content offensive, indecent or objectionable. You understand that you, not ESK'IMMO, are entirely responsible for any information posted by you on our Site and you agree to comply with applicable laws and regulations. You can place the information within your rights. </br>
</ Br>
ESK'IMMO not in any way be held responsible to a user in the use or misuse of the services on this site. </br>
If, however ESK'IMMO were to be unable to limit his liability, the extent of this responsibility should be the minimum allowed. </br>
ESK'IMMO assumes no liability for direct or indirect damage caused to the user, whatever their nature, resulting from the content, access, or use the Site. </br>
In case of abnormal use or illegal use of the Site, the user is solely responsible for damage to third parties and the consequences of actions or claims that may arise. The user also waive all recourse against ESK'IMMO in the case of prosecutions conducted by a third party against because of the use and / or illegal use of the Site. </br>
The user of the site acknowledges having verified that the configuration does not contain any computer viruses and is in perfect condition. </ Br>
</br>
The user acknowledges having been informed that the site is available 24/24 and 7 / 7, with the exception of force majeure, computer difficulties, difficulties linked to telecommunications networks or technical difficulties. For maintenance reasons, ESK'IMMO may suspend access to the Site and try to warn users in advance. </br>
ESK'IMMO can not be held liable for any direct or indirect damage resulting from accessing or using the Site, including inaccessibility, data loss, identity theft, damage, destruction or viruses that may infect computer equipment of the user, and / or the presence of viruses on its site. </br>
ESK'IMMO shall in no event be liable for delays or reductions in performance resulting directly or indirectly from natural disasters, forces or causes beyond its reasonable control including but not limited to issues specific to the Internet, failures computer equipment failures networks or telecommunications equipment, other equipment failures, power failures, strikes, labor disputes, riots, insurrections, civil disturbances, shortages of personnel or equipment, fires, floods, storms, explosions, acts of God, war, governmental actions, orders of domestic or foreign court, poor performance of one or more third parties, loss or fluctuations in heat, light or air conditioning. </br>
The user declares that the cost of accessing and browsing the Site is at his sole expense. In the event that the user accesses the site from a country other than France, it also undertakes to ensure compliance with applicable local laws. </br>
ESK'IMMO reserves the right to use every legal means against any person who has not complied with the provisions in Articles 323-1 to 323-7 of the Criminal Code, including who gain unauthorized access to any or part of a system of automated data processing of the Site. </br>
</br>
6. Privacy and personal data </br>
The personal data relating to personal and non-users, collected through the Site, and any future information, are intended only for exclusive use of the company ESK'IMMO, as part of the implementation services offered to users on the Site, and are not subject to any communication or transfer to third parties other than the technical service responsible for managing the site, which are required to respect the confidentiality of information and only use for the specific operation for which they must respond. </br>
We need to collect a certain amount of data necessary for the proper operation of the service and publication announcements. Only information contained in the announcement and the information strictly necessary for linking are publicly available. Form of collection of personal data, noted the obligatory or optional nature of this collection. We are the only recipients of the data transmitted to us. </br>
The information collected may also help to know you better and to align our offerings with your expectations, manage claims, to enforce our rules of procedure, to resolve any disputes between users, or to keep you informed of our news. </br>
</br>
Finally, they allow to send special offers from our partners only for the attention of users who have explicitly requested. In this context, the data may be rented but shall in no circumstances be sold or transferred to third parties. </br>
</br>
7. Your relationship with ESK'IMMO </br>
</br>
You are contractually ESK'IMMO and independent of each other and these terms shall in no way be construed as an association or partnership between us. You can suggest that ESK'IMMO endorse ads, products, services or yourself. You may not frame this Site (or any information contained on this Site) or create a border around this site or its contents. </br>
Miscellaneous. </br>
You agree that any claim or dispute with ESK'IMMO be resolved before a court in Paris, France, unless otherwise agreed. The non-taxation of us to the application of a particular provision does not imply that we renounce our advantage later on. In the event that a court would establish the invalidity of any of these conditions, other conditions will remain fully applicable. </br>
Except for notices relating to illegal content or offenders, your notification should be sent to us by registered mail to ESK'IMMO, Institut Supérieur d'Electronique de Paris, 28 rue Notre-Dame des Champs, 75006 Paris - France </br>
                </br> </br> ";
            $accent = replace ($accent);
            } elseif ($_SESSION['langue'] == "de") {
                $accent="Introduction</br>
                </br>
Willkommen esk'immo.com oder einer ihrer Untergebiete. </br>
</br>
Auf dieser Website können Sie nach Kleinanzeigen für Wohnungen für Studenten und bringen Sie in Kontakt mit ihnen. </br>
Nur Studierende, auf dieser Website registriert sind, können Informationen von anderen Benutzern ansehen. </br>
</br>
Diese Website wird von der ESK'IMMO SARL verwaltet, mit Sitz am Institut Supérieur d'Electronique de Paris, 28 rue Notre-Dame des Champs, 75006 Paris. </br> Basis
</br>
Mit dem Zugriff auf diese Website akzeptieren Sie die Nutzungsbedingungen unten, die waren für den Standort entwickelt arbeitet zufriedenstellend für alle. </br>
Diese Nutzungsbedingungen gelten ab dem 1. Januar 2012. </br>
1. Legal </br>
Publisher </br>
ESK'IMMO LLC </br>
Higher Institute of Electronics, Paris, 28 rue Notre-Dame des Champs </br>
75006 Paris - Frankreich </br>
E-mail: groupe7d@gmail.com </br>
CNIL </br>
Gemä&szlig; Gesetz Nr. 78-17 vom 6. Januar 1978 im Zusammenhang mit Computern, Dateien und Freiheiten, die Website Esk'immo. Com ist mit der Commission Nationale Informatique et Libertés (CNIL) unter der Registernummer die vereinfachte Zollanmeldung Nr. 48 (Eingang Nr. 1375638). </br>
<br>
Recht auf Zugang und Änderung </ br>
Nach dem Gesetz Nr. 78-17 vom 6. Januar 1978 im Zusammenhang mit Computern, Dateien und die Freiheit erhalten, jede Person und kann gegebenenfalls berichtigen oder löschen zu Informationen darüber, durch Kontaktaufnahme per E zu: </br>
ESK'IMMO LLC </br>
Higher Institute of Electronics, Paris, 28 rue Notre-Dame des Champs </br>
75006 Paris - Frankreich </br>
Oder per E-Mail an groupe7d@gmail.com </br>
</br>
2. Nutzungsbedingungen Site </br>
 </br>
Die Nutzung der Website esk'immo. Com und deren Subdomains setzt die bedingungslose Annahme dieser Nutzungsbedingungen. Sie können jederzeit aufgrund von Änderungen oder Ergänzungen zu dieser Seite geändert werden. Durch Zugriff auf diese Website erklären Sie sich mit unseren Geschäftsbedingungen gelesen und halten Sie über alle Änderungen oder Ergänzungen informiert. Wenn Sie nicht mit diesen Bedingungen nicht zustimmen, sollten Sie unter keinen Umständen machen die Nutzung dieser Website. Diese Bedingungen haben zum letzten Mal geändert worden 5. Januar 2011. </ Br>
 </br>
Unser Engagement </br>
1. Gültigkeit der Anzeigen:. ESK'IMMO nicht halten veraltete Anzeigen künstlich zu erhöhen seine Datenbank </br>
2. Kontrolle der Anzeigen:. ESK'IMMO bestrebt, entfernen Sie alle Werbung ist im Gegensatz zu Recht und im Gegensatz zu ihrer Charta </br>
</br>
Mit der Website </br>
Anzeigen müssen in der entsprechenden Kategorie platziert werden. Die folgenden Verhaltensweisen sind streng verboten: </ br>
- Gegen geltende Gesetze oder Regelungen verboten Content </br>
- Geben Sie falsche oder irreführen der Empfänger in error </br>
- Verletzung der Rechte von anderen </br> statt
- Senden unerwünschter E-Mail Werbung (Spam) oder schlagen Systeme Silberketten oder Schneeballsysteme </br>
- Verteilen Sie Viren oder andere Technologien, die mit der Website oder die Interessen oder das Eigentum von anderen Nutzern dieser Website </br> stören
- Impose eine unzumutbare Belastung für unsere Infrastruktur oder beeinträchtigen das reibungslose Funktionieren der Site </br>
- Reproduzieren aller oder eines Teils dieser Site auf einem anderen Server oder einen anderen Standort </br>
- Kopieren, Ändern oder Verteilen von Inhalten, die anderen gehören </br>
- Verwenden Sie Robots, Spider, Scraper oder andere Mittel benutzt, um die Website zugreifen und die Inhalte der Website für jeden beliebigen Zweck zu sammeln, ohne unsere ausdrückliche schriftliche Erlaubnis </br>
- Sammeln oder erhalten eine andere Art und Weise der Informationen über andere, einschließlich E-Mail-Adressen und andere persönliche Daten, ohne die Genehmigung zu sammeln, oder erhalten in irgendeiner anderen Weise von Informationen über andere, einschließlich e -Mails und andere persönliche Daten, ohne dass bereits </br> autorisierten
- Verteilen oder zur Offenlegung von Informationen aus dieser Site erhalten an einen Dritten (entweder eine Website oder andere) </br>
- Sell, zu ändern oder abgeleitete Werke der Informationen aus dieser Site erhalten oder zu verändern oder das Entfernen von Urheberrechts-oder Referenz-Material geschützt </br>
-. Circumvent Maßnahmen zur Verhinderung oder den Zugriff auf die Site </br>
 </br>
Diese Liste ist nicht erschöpfend, und wir behalten uns das Recht vor, ohne Vorwarnung oder andere Ankündigung zu entfernen Inhalte, die nicht kompatibel ist mit den Regeln und Werte unserer Gemeinschaft. </br>
</ Br>
Missbrauch </br>
Zur Wahrung der Integrität der gesamten Website, nutzen Sie bitte das Reporting-System, um uns von Problemen und unangemessenen Inhalten zu informieren. Wenn wir, dass einige Benutzer in Verhalten gegen unsere Regelungen beteiligen fühlen wir uns das Recht zu beschränken oder zu beenden, den Zugang zu unserem Service behalten, entfernen gehosteten Inhalten und gegen sie die Bestimmungen erforderlichen technischen und rechtlichen nehmen . Doch unabhängig von unserer Entscheidung, übernehmen wir keine Haftung für die Rechtmäßigkeit der veröffentlichten Inhalte sowie die Überwachung und die Nutzung der Website. </br>
</br>
Intellectual Property </br>
Diese Website enthält Informationen, Bilder und andere Materialien im Eigentum der ESK'IMMO und / oder Nutzer dieser Website. </br>
Sie sind nicht berechtigt, zu reproduzieren, unabhängig von der Art oder Mittel, diese Elemente ohne ausdrückliche Zustimmung des Direktors der Veröffentlichung der Website. </br>
 </br>
Viele Produkte sind sehr vielfältig auf dieser Website von Privatpersonen und Profis. Die Parteien berechtigt, vor allem den Inhabern von Urheberrechten, Marken oder andere Rechte von Dritten gehalten werden Inserate, die ihre Rechte verletzen und fordern ihren Rückzug aus der Seite zu melden. Wenn ein gesetzlicher Vertreter der Partei, um unsere Aufmerksamkeit solche Angebote gegebenenfalls berechtigt, Produkte zu verletzen Rechte am geistigen Eigentum werden von uns entfernt werden. </br>
Schicken Sie uns einfach eine Email an: </br>
- Groupe7d@gmail.com </ br>
Sie können diese Adresse, um Anzeigen, die Ihrer Schutzrechte verletzt zu melden. Diese Informationen sollten es uns ermöglichen, die Anzeigen von der Website entfernt zu identifizieren. </ Br>
</br>
3. Betriebsvorschriften </br>
</br>
Um am besten dienen den Nutzern im Rahmen unserer begrenzten Mitteln schaffen wir hier die allgemeinen Regeln der Betrieb unserer Website. Diese Bestimmungen können insbesondere die Begrenzung der Größe der Nachrichten, die Dauer der Veröffentlichung von Anzeigen und alle weiteren Aktivitäten. Sie sind sich bewusst, dass es in Ihrer Verantwortung, Informationen, die Sie auf die Site übertragen kann überprüfen ist. ESK'IMMO ist nicht verantwortlich für die Löschung von Informationen oder Nichtnutzung der dargebotenen Informationen speichern. </br>
</ Br>
Links </br>
Alle Inhalte auf dieser Website platziert enthält möglicherweise Links zu fremden Seiten. ESK'IMMO behält sich jedoch das Recht vor, Links zu entfernen oder zu sperren in einigen Abschnitten. ESK'IMMO nur Schecks oder hat keine Kontrolle über solche Websites und fremde Informationen und nicht den Inhalt dieser Internetseiten oder Informationen aus dem Ausland. ESK'IMMO in keiner Weise haftbar gemacht werden für Informationen, Produkte oder Dienstleistungen in diesen fremden Websites enthalten sind. </br>
</br>
Kein Spam </br>
ESK IMMO weder gestattet noch dulden unerbetene Nachrichten durch die Nutzer unserer Website, einschließlich aber nicht beschränkt auf Akquisition, Kundenwerbung Werbung, unaufgeforderte E-Mail, Junk-Mail , Kette \"oder\" pyramidal Organisationen beschränkt. Wenn Sie das Gefühl haben unerbetene Nachrichten durch die Nutzung unserer Seiten, kontaktieren Sie uns bitte. </br>
</br>
Losgelöst von der Inhalt der Website </br>
ESK'IMMO hat das Recht aber nicht die Pflicht, sich zu weigern, zu verschieben oder von der Website, jeden Inhalt als unvereinbar mit den Zielen und dem Geist ihrer Charta entfernen. Wir können auszusetzen oder zu beenden Ihren Zugriff auf die Site, wenn wir glauben deine Handlungen stören die Aktivität anderer Benutzer der Site oder Haftung ESK'IMMO oder von anderen Nutzern dieser Website entstehen. </br>
</br>
Anzeigen mehrerer Duplikate </br>
Sie können nicht veröffentlichen Anzeigen, deren Inhalt ähnlich oder in der Nähe (mehrere Anzeigen für den Verkauf / Vermietung der gleichen Eigenschaft, für die gleiche Dienstleistung, etc.) .. </br>
</br>
4. Haftungsausschluss </br>
</br>
ESK'IMMO und Dritte bei der Erstellung der Website beteiligt sind, geben keine Garantie, weder ausdrücklich noch stillschweigend, oder übernimmt keine Haftung für die Nutzung der Website. Als solche kann sie nicht haftbar für einen Benutzer oder eine andere Partei für jegliche direkte oder indirekte, spezielle, besondere oder zufällige sich aus der Nutzung dieser Website oder einer anderen Seite durch einen Hyperlink verwiesen wird. </br>
Diese Website wird Ihnen \"wie besehen\" ohne Garantie. </br>
ESK'IMMO übernimmt keine Haftung irgendwelcher Art in Bezug auf die Genauigkeit, Inhalt, Vollständigkeit, Rechtmäßigkeit, Zuverlässigkeit, Betriebsfähigkeit oder Verfügbarkeit von Informationen oder Daten in den Suchergebnissen angezeigt durch die erhaltenen Website. ESK'IMMO übernimmt keine Verantwortung für die Beseitigung, das Versagen der Speicherung, Übermittlung falscher oder unsachgemäßer Übermittlung solcher Informationen oder Daten. ESK'IMMO übernimmt keine Verantwortung in Bezug auf den Schaden, die durch das Herunterladen oder die Verwendung der Informationen oder Daten auf der Internet-Site. </br>
 </br>
ESK'IMMO ausdrücklich und soweit nach anwendbarem Recht jegliche Gewährleistung ausdrücklich, stillschweigend und gesetzlich, einschließlich und ohne Einschränkung Garantien der kommerzielle Erfolg, der Eignung für einen bestimmten Zweck und Nichtverletzung von Schutzrechten erlaubt. ESK'IMMO schließt alle Garantien für Sicherheit, Zuverlässigkeit, Pünktlichkeit und Erbringung von Dienstleistungen ESK'IMMO. ESK'IMMO übernimmt keine Haftung für Informationen oder Ratschläge über die Website erhalten. ESK'IMMO übernimmt keine Garantie für Dienstleistungen oder Waren durch (oder wer via gefördert) die Dienste von ESK'IMMO oder über die Links von ESK'IMMO empfangene Leistung ganz oder für weitere Informationen oder Ratschläge über die Links in Diensten ESK'IMMO erhalten.
<br>
Sie verstehen und stimmen zu, dass Sie herunterladen oder den Einsatz in der einen oder anderen Informationen oder Daten-Dienste über ESK'IMMO in Ihrem Ermessen und auf eigenes Risiko und Sie sind allein verantwortlich für alle Schäden verursacht an Ihrem Computersystem oder Datenverluste, die durch das Herunterladen und / oder Verwendung solcher Informationen oder Daten entstehen könnten. </br>
Einige Staaten und einige Länder erlauben nicht den Ausschluss der gesetzlichen Gewährleistung, ist es möglich, dass die oben genannten Ausschlüsse möglicherweise nicht auf Sie zutreffen. Es ist möglich, dass Sie auch andere Rechte haben, sie variieren in verschiedenen Rechtsordnungen und Ländern. </br>
 </br>
</br>
5. Haftungsbeschränkung </br>
 </br>
Diese Website ist ein Ort, an dem Nutzer Informationen austauschen können. ESK'IMMO bietet keine oder Verkauf von Produkten oder Dienstleistungen in der Werbung der Website beschrieben. ESK'IMMO können nicht kontrollieren, die Qualität, Richtigkeit, Wahrhaftigkeit oder die Rechtmäßigkeit der Informationen, Produkte oder Dienstleistungen auf der Website veröffentlicht und es ist daher möglich, dass Sie konfrontiert sind einige Inhalte der beleidigend, anstößig oder verwerflich. Sie verstehen, dass Sie nicht ESK'IMMO, die gesamte Verantwortung für alle Informationen, die Sie auf unserer Website veröffentlicht werden und Sie stimmen mit den geltenden Gesetzen und Vorschriften einzuhalten. Sie können die Informationen in Ihren Rechten statt. </br>
</br>
ESK'IMMO in keiner Weise verantwortlich gemacht, um einen Benutzer in den Gebrauch oder Missbrauch der Dienste auf dieser Website. </br>
Wenn jedoch ESK'IMMO waren nicht in der Lage, seine Haftung zu beschränken, das Ausmaß dieser Verantwortung sollte der Mindestsatz. </br>
ESK'IMMO übernimmt keine Haftung für direkte oder indirekte Schäden, die dem Benutzer, unabhängig von ihrer Art, die sich aus dem Inhalt, Zugang, oder die Nutzung der Website. </br>
Im Falle einer fehlerhaften Verwendung oder illegale Nutzung der Website ist der Benutzer allein verantwortlich für Schäden, die Dritten und die Folgen von Handlungen oder Ansprüche, die entstehen können. Der Nutzer verzichten auf alle Rechtsmittel gegen ESK'IMMO im Falle einer Strafverfolgung, die von einem Dritten gegen leitungsgebundene wegen der Verwendung und / oder illegale Nutzung der Website. </br>
Der Nutzer der Website bestätigt, dass er überprüft, ob die Konfiguration enthält keine Computerviren und ist in perfektem Zustand. </br>
</br>
Der Nutzer erkennt in Kenntnis gesetzt worden, dass die Website verfügbar ist 24/24 und 7 / 7, mit Ausnahme von höherer Gewalt, Computer Schwierigkeiten, Schwierigkeiten im Zusammenhang mit Telekommunikationsnetzen oder technische Schwierigkeiten. Für Wartungs-Gründen kann ESK'IMMO auszusetzen Zugriff auf die Website und versuchen, Benutzer im Voraus. </br> warnen
ESK'IMMO haftet nicht für direkte oder indirekte Schäden, die aus der Nutzung oder Verwendung der Website, einschließlich Unzugänglichkeit, Datenverlust, Identitätsdiebstahl, Beschädigung, Zerstörung werden oder Viren, die EDV-Ausstattung des Benutzers und / oder das Vorhandensein von Viren auf dieser Website können zu infizieren. </br>
ESK'IMMO in keinem Fall haftbar für Verzögerungen oder Reduzierungen in der Leistung, die direkt oder indirekt aus Naturkatastrophen, Kräfte oder Ursachen außerhalb ihrer Kontrolle, einschließlich aber nicht beschränkt auf spezifische Aspekte des Internets, Ausfällen EDV-Anlagen Ausfälle Netzwerken oder Telekommunikationseinrichtungen, andere Geräteausfälle, Stromausfälle, Streik, Arbeitskämpfe, Unruhen, Aufstände, Unruhen, Mangel an Personal oder Ausrüstung, Brände, Überschwemmungen, Stürme, Explosionen, höhere Gewalt, Krieg, staatliche Maßnahmen, Anordnungen inländischer oder ausländischen Gericht, schlechte Leistung eines oder mehrerer Dritter, Verlust oder Schwankungen in Wärme, Licht oder Klimaanlage. </br>
Der Nutzer erklärt, dass die Kosten für den Zugriff und das Durchblättern der Website auf seine alleinigen Kosten ist. Für den Fall, dass der Benutzer die Website aus einem anderen Land als Frankreich greift sie auch verpflichtet, die Einhaltung der geltenden lokalen Gesetze zu gewährleisten. </br>
ESK'IMMO behält sich das Recht vor, alle rechtlichen Mittel gegen jede Person, die nicht mit den Bestimmungen in Artikel 323-1 muss 323-7 des Strafgesetzbuches erfüllt Verwendung, einschließlich der nicht autorisierten Zugriff auf alle oder Teil eines Systems der automatisierten Datenverarbeitung der Website. </br>
</br>
6. Datenschutz und persönliche Daten </ br>
Die persönlichen Daten in Bezug auf persönliche und Nicht-Nutzern, die über die Website gesammelt, und alle zukünftigen Informationen sind nur für den ausschließlichen Gebrauch der Firma ESK'IMMO gedacht, als Teil des Implementierungs-Services angeboten, um Benutzer auf der Site und unterliegen nicht alle Mitteilungen oder die Weitergabe an Dritte außer den technischen Service für die Verwaltung der Website, die erforderlich, um die Vertraulichkeit der Informationen zu wahren sind und nur für die spezifische Maßnahme, für die sie reagieren muss. </br>
Wir müssen eine bestimmte Menge an Daten, die für den ordnungsgemäßen Betrieb des Dienstes und die Veröffentlichung Ankündigungen zu sammeln. Nur Informationen in der Ankündigung und dem unbedingt erforderlichen Angaben für die Verknüpfung enthalten sind öffentlich zugänglich. Form der Erhebung personenbezogener Daten, stellte die obligatorische oder fakultative Charakter dieser Kollektion. Wir sind der einzige Empfänger der Daten an uns übermittelt. </br>
Die gesammelten Informationen können auch helfen, Sie besser kennenlernen und unser Angebot Ihren Erwartungen auszurichten, zu verwalten Ansprüche, unsere Geschäftsordnung durchsetzen, um Streitigkeiten zwischen den Nutzern zu lösen, oder um Sie über informiert unsere News. </ br>
</br>
Schlie&szlig;lich erlauben sie es, spezielle Angebote unserer Partner senden nur um die Aufmerksamkeit der Nutzer, die ausdrücklich angefordert haben. In diesem Zusammenhang können die Daten gemietet werden, aber unter keinen Umständen verkauft oder an Dritte weitergegeben. </ Br>
</br>
7. Ihre Beziehung mit ESK'IMMO </ br>
</br>
Sie sind vertraglich ESK'IMMO und unabhängig von einander, und diese Bedingungen sind in keiner Weise als ein Verein oder eine Partnerschaft zwischen uns ausgelegt werden. Sie können zeigen, dass ESK'IMMO Anzeigen, Produkte, Dienstleistungen oder sich selbst zu unterstützen. Sie können nicht Frame dieser Site (oder die gewünschten Informationen auf dieser Website enthaltenen) oder erstellen Sie einen Rahmen um diese Website oder ihren Inhalt handeln. </br>
Verschiedenes. </br>
Sie bestätigen, dass alle Streitigkeiten oder Konflikte mit ESK'IMMO vor einem Gericht in Paris, Frankreich gelöst werden, sofern nicht anders vereinbart. Die Nichtbesteuerung von uns, um die Anwendung einer bestimmten Vorschrift bedeutet nicht, dass wir unseren Vorteil später zu verzichten. In dem Fall, dass ein Gericht die Ungültigkeit einer dieser Bedingungen zu schaffen, werden andere Bedingungen bleiben in vollem Umfang anwendbar. </br>
Frankreich </ br - Mit Ausnahme der Mitteilungen im Zusammenhang mit illegalen Inhalten oder Täter, sollte Ihre Mitteilung an uns per Einschreiben werden ESK'IMMO, Institut Supérieur d'Electronique de Paris, 28 rue Notre-Dame des Champs, 75006 Paris geschickt >
                </br> </br> ";
                 $accent = replace ($accent);
            } elseif ($_SESSION['langue'] == "es") {
              $accent="Introduction</br>   
                </br>
Bienvenido en Esk'immo. Com o uno de sus subdominios. </br>
</br>
Este sitio te permite publicar anuncios de viviendas para los estudiantes y ponerle en contacto con ellos. </br>
Sólo los estudiantes inscritos en este sitio se pueden ver los detalles de los otros miembros. </br>
</br>
Este sitio es manejado por la SARL ESK'IMMO, con sede con sede en el Institut Supérieur d'Electronique de Paris, 28 rue Notre-Dame-des-Champs, 75006 París. </br>
</br>
Al acceder a este sitio, usted acepta las Condiciones del servicio a continuación, que fueron diseñados para el sitio funciona de manera satisfactoria para todos. </br>
Estos Términos de uso son aplicables desde el 1 de enero de 2012. </br>
1. Legal </br>
Autor </br>
ESK'IMMO LLC </br>
Instituto Superior de Electrónica, París, 28 rue Notre-Dame-des-Champs </br>
75006 Paris - Francia </br>
E-mail: groupe7d@gmail.com </br>
 </br>
CNIL </br>
De conformidad con la Ley N º 78-17 del 6 de enero de 1978 relativa a las computadoras, archivos y libertades, la esk'immo sitio. Com está registrado con la Comisión Nacional Informática y Libertades (CNIL) bajo la declaración simplificada N º 48 (N º 1375638 recibo). </br>
</br>
Derecho a acceder y modificar </ br>
De acuerdo con la ley n ° 78-17 del 6 de enero de 1978 relativa a las computadoras, archivos y libertades, toda persona puede obtener y, en su caso, corregir o eliminar información sobre el mismo, poniéndose en contacto por correo a: </br>
ESK'IMMO LLC </br>
Instituto Superior de Electrónica, París, 28 rue Notre-Dame-des-Champs </br>
75006 Paris - Francia </br>
O por correo electrónico a groupe7d@gmail.com </br>
</br>
2. Condiciones de uso del sitio </br>
 </br>
El uso del sitio esk'immo. Com y sus subdominios supone la plena aceptación de estas condiciones de uso. Pueden ser modificados en cualquier momento debido a los cambios o adiciones a este sitio. Al acceder a este sitio, usted acepta nuestros Términos y mantenerlo informado de cualquier cambio o adición. Si usted no está de acuerdo con estos términos, en ningún caso hacer uso de este sitio. Estas condiciones se han modificado por última vez 05 de enero 2011. </br>
 </br>
Nuestro compromiso </br>
1. Validez de los anuncios:. ESK'IMMO no tener anuncios antiguo a aumentar artificialmente su base de datos </br>
2. Control de los anuncios:. ESK'IMMO tratar de eliminar toda publicidad es contraria a la ley y en contra de su carta </br>
</ Br>
Utilizando el sitio </ br>
Los anuncios deben ser colocados en la categoría correspondiente. Las siguientes conductas están estrictamente prohibidas: </br>
- Violar leyes o regulaciones aplicables Contenido Prohibido </br>
- Dar falsas o que puedan inducir a error al destinatario de error </br>
- Cualquier vulneración de los derechos que tienen los demás </br>
- Enviar correos electrónicos no solicitados comerciales (spam) o proponer sistemas de cadenas de plata o esquemas piramidales </br>
- Distribuir virus u otras tecnologías que interfieren con el Sitio o los bienes o intereses de otros usuarios de este sitio web </br>
- Imponer una carga poco razonable a nuestra infraestructura o interferir en el correcto funcionamiento del sitio </br>
- Reproducción total o parcial de este sitio en cualquier otro servidor o en otro lugar </br>
- Copiar, modificar o distribuir cualquier contenido que pertenecen a otros </br>
- Utilice los robots, arañas, raspadores u otros medios utilizados para acceder al Sitio y para recoger el contenido del sitio para cualquier propósito, sin nuestro permiso expreso por escrito </br>
- Recoger u obtener cualquier otra forma de información sobre terceros, incluidas direcciones de correo electrónico y otros datos personales, sin haber sido autorizada a cobrar, u obtener en cualquier otra forma de información acerca de otros, incluido el correo electrónico y otros datos personales, sin haber sido autorizado </br>
- Redistribuir o revelar cualquier información obtenida de este sitio a un tercero (ya sea un sitio web o de otro tipo) </br>
- Venta, modificar ni crear trabajos derivados de la información obtenida de este sitio, o alterar o eliminar los derechos de autor o material de referencia protegidos </br>
-. Eludir las medidas destinadas a impedir o restringir el acceso al sitio </ br>
 </ Br>
Esta lista no es exhaustiva, y nos reservamos el derecho de eliminar sin previo aviso u otros avisos de cualquier contenido que no es compatible con las normas y valores de nuestra comunidad. </br>
</br>
Abuso </ br>
Para preservar la integridad de todo el sitio, por favor utilice el sistema de información que nos informen de los problemas y contenido inapropiado. Si sentimos que algunos usuarios participar en una conducta contraria a nuestras normas, nos reservamos el derecho de limitar o cancelar el acceso a nuestro servicio, eliminar el contenido alojado y emprender contra ellos las disposiciones técnicas y jurídicas necesarias . Sin embargo, a pesar de nuestra decisión, nosotros no asumimos ninguna responsabilidad por la legitimidad de los contenidos publicados, así como el seguimiento y el uso del sitio. </br>
</br>
Propiedad Intelectual </br>
Este Sitio contiene información, imágenes y otros materiales son propiedad de ESK'IMMO y / o usuarios de este sitio. </br>
Usted no está autorizado a reproducir, sin importar el medio o el soporte, estos elementos sin el consentimiento expreso del Director de la publicación del sitio. </br>
 </br>
Muchos productos son muy diversos en este Sitio por particulares y profesionales. Las partes tienen derecho, especialmente los titulares de derechos de autor, marca registrada u otros derechos de propiedad de terceras partes pueden denunciar anuncios que infrinjan sus derechos y exigir su retirada del sitio. Si el representante legal de la persona con derecho a la atención de las ofertas que resulten apropiadas, productos que infrinjan los derechos de propiedad intelectual serán retirados por nosotros. </br>
Sólo tienes que enviar un correo electrónico a: </ br>
- Groupe7d@gmail.com </ br>
Usted puede utilizar esta dirección para reportar anuncios que infringe sus derechos de propiedad intelectual. Esta información nos debe permitir identificar los anuncios retirados del lugar. </br>
</br>
3. Normas de funcionamiento </br>
</br>
Con el fin de servir mejor a los usuarios dentro de nuestros limitados medios, se establecen aquí las reglas generales de operación de nuestro sitio. Estas reglas pueden incluir limitar el tamaño de los mensajes, la duración de la publicación de anuncios y cualquier otra actividad adicional. Usted es consciente de que es su responsabilidad verificar toda la información que transmita al Sitio. ESK'IMMO no se hace responsable de la eliminación de información o falta de almacenamiento de esta información. </br>
</br>
Enlaces </br>
Cualquier contenido publicado en este sitio puede contener enlaces a sitios extranjeros. ESK'IMMO sin embargo se reserva el derecho a eliminar los enlaces o bloquear en algunas secciones. ESK'IMMO sólo comprueba o no tiene control alguno sobre dichos sitios y la información exterior y no avala estos sitios o la información del exterior. ESK'IMMO en ningún caso responsable de la información, productos o servicios contenidos en estos sitios extranjeros. </br>
</br>
No es spam </br>
ESK IMMO Ni autoriza ni tolera ninguna comunicación no solicitada por los usuarios de nuestro sitio, incluyendo pero no limitado a prospección, acoso publicitario, no solicitado por correo electrónico, \"correo basura\", \"cadena\" o \"las organizaciones piramidales. Si usted siente que ha recibido comunicaciones no solicitadas, debido a su uso de nuestro sitio, por favor póngase en contacto con nosotros. </br>
</br>
Retirado de los contenidos del sitio </br>
ESK'IMMO tiene el derecho pero no la obligación, de rechazar, mover o eliminar del sitio cualquier contenido considerado incompatible con los propósitos y el espíritu de su carta. Podemos suspender o cancelar su acceso al Sitio si creemos que sus acciones perturban la actividad de otros usuarios de la web o puede incurrir en responsabilidad ESK'IMMO o cualquier otro usuario de este sitio. </br>
</br>
Varios anuncios duplicados </br>
No se puede publicar anuncios cuyo contenido es similar o cercano (varios anuncios para la venta / arriendo de la misma propiedad, por el mismo servicio, etc) .. </br>
</br>
4. Renuncia de garantía </br>
</br>
ESK'IMMO, y una tercera parte involucrada en la creación del sitio, no ofrecemos ninguna garantía, expresa o implícita, ni asume ninguna responsabilidad derivada del uso del sitio. Por lo tanto, no pueden ser objeto de un usuario o un tercero para aquellas que se planteen directa o indirecta, especial, especial o incidental del uso de este sitio o en otro sitio conectado mediante un hipervínculo. </br>
Este sitio es proporcionado \"tal cual\" sin garantía. </br>
ESK'IMMO no se hace responsable de ningún tipo con respecto a la exactitud, contenido, integridad, legalidad, confiabilidad, operabilidad o disponibilidad de la información o datos que aparecen en los resultados obtenidos por el sitio. ESK'IMMO no asume ninguna responsabilidad por la supresión, la falta de almacenar, transmitir la transmisión incorrecta o no de dicha información o de datos. ESK'IMMO no acepta ninguna responsabilidad con respecto a los daños resultantes de descargar o utilizar la información o datos disponibles en el sitio de servicios de Internet. </br>
 </br>
ESK'IMMO excluye expresamente y en la medida permitida por la ley aplicable a todas las garantías expresas, implícitas y estatutarias, incluyendo, sin limitación, garantías de éxito comercial, idoneidad para un propósito particular y no violación de los derechos de propiedad. ESK'IMMO excluye todas las garantías de seguridad, fiabilidad, puntualidad y el rendimiento de los servicios de ESK'IMMO. ESK'IMMO asume ninguna responsabilidad por cualquier información o consejos obtenidos a través del Sitio. ESK'IMMO asume ninguna responsabilidad por los bienes o servicios recibidos a través de (o que se promueve a través de) los servicios de ESK'IMMO oa través de los enlaces de los servicios de ESK'IMMO, o para cualquier información o el asesoramiento recibido a través de los enlaces en los servicios de ESK'IMMO. </br>
Usted entiende y acepta que usted descarga o el uso de una manera u otros servicios de información o datos a través de ESK'IMMO a su discreción y bajo su propio riesgo y que usted es el único responsable de cualquier daño causado a su sistema informático o pérdida de datos que podrían resultar de la descarga y / o uso de tal información o datos. </br>
Algunos estados y algunos países no permiten la exclusión de garantías implícitas, es posible que las exclusiones anteriores no se apliquen a usted. Es posible que usted también tenga otros derechos, que varían en las distintas jurisdicciones y países. </br>
 </br>
</br>
5. Limitación de responsabilidad </br>
 </br>
Este sitio es un lugar donde los usuarios pueden intercambiar información. ESK'IMMO no proporcionan o venden productos o servicios descritos en los anuncios del sitio. ESK'IMMO no puede controlar la calidad, exactitud, veracidad o legalidad de cualquier información, productos o servicios anunciados en el sitio y por lo tanto, es posible que se enfrentan a un contenido ofensivo, indecente u objetable. Usted entiende que usted no ESK'IMMO, es enteramente responsable por la información publicada por usted en nuestro sitio y se compromete a cumplir con las leyes y reglamentos aplicables. Usted puede colocar la información en su derecho. </br>
</br>
ESK'IMMO de ninguna manera ser considerado responsable de un usuario en el uso o mal uso de los servicios en este sitio. </br>
Si, sin embargo ESK'IMMO iban a ser incapaces de limitar su responsabilidad, el alcance de esta responsabilidad debe ser el mínimo permitido. </br>
ESK'IMMO no asume ninguna responsabilidad por los daños directos o indirectos causados ​​al usuario, cualquiera que sea su naturaleza, resultante de los contenidos, el acceso o uso del Sitio. </br>
En caso de uso o uso indebido del sitio, el usuario es el único responsable de los daños a terceros y las consecuencias de las acciones o reclamos que puedan surgir. Asimismo, el usuario renuncia a cualquier acción contra ESK'IMMO en el caso de procedimientos penales por un tercero contra por el uso y / o el uso ilegal del sitio. </br>
El usuario del sitio reconoce haber verificado que la configuración no contiene ningún virus y está en perfectas condiciones. </br>
</br>
El usuario reconoce haber sido informado de que el sitio está disponible 24/24 y 7 / 7, con la excepción de fuerza mayor, dificultades de equipo, las dificultades relacionadas con las redes de telecomunicaciones o dificultades técnicas. Por razones de mantenimiento, ESK'IMMO podrá suspender el acceso al sitio y tratar de advertir a los usuarios con antelación. </br>
ESK'IMMO no se hace responsable de los daños directos o indirectos resultantes del acceso o uso del Sitio, incluyendo la inaccesibilidad, la pérdida de datos, robo de identidad, daño, destrucción o virus que puedan infectar el equipo informático del usuario, y / o la presencia de virus en su sitio. </br>
ESK'IMMO no será en ningún caso será responsable por demoras o reducciones en el rendimiento resultantes directa o indirectamente de los desastres naturales, fuerzas o causas más allá de su control razonable, incluyendo pero no limitado a cuestiones específicas de la Internet, los fracasos fallas de equipos informáticos o redes de equipos de telecomunicaciones, fallos de otros equipos, fallas de energía, huelgas, conflictos laborales, disturbios, insurrecciones, disturbios civiles, escasez de personal o equipo, incendios, inundaciones, tormentas, explosiones, actos de Dios, guerra, acciones gubernamentales, órdenes de tribunales nacionales o extranjeros, los malos resultados de uno o más terceros, pérdida o fluctuaciones en el calor, la luz o el aire acondicionado. </ br>
El usuario declara que el costo de acceder y navegar por el sitio es a su exclusivo cargo. En el caso de que el usuario acceda al sitio desde un país distinto de Francia, también se compromete a garantizar el cumplimiento de las leyes locales aplicables. </ Br>
ESK'IMMO se reserva el derecho a utilizar todos los medios legales contra cualquier persona que no ha cumplido con lo dispuesto en los artículos 323-1 a 323-7 del Código Penal, incluidos los que tienen acceso no autorizado a cualquier o parte de un sistema de tratamiento automatizado de datos del sitio. </ br>
</br>
6. Privacidad y datos personales </br>
Los datos personales de los usuarios no-personal y, recogidos a través del Sitio, y cualquier información en el futuro, están destinados únicamente a uso exclusivo de la ESK'IMMO empresa, como parte de los servicios de implementación ofrece a los usuarios en el sitio, y no están sujetos a cualquier comunicación o cesión a terceros que no sea el servicio técnico responsable de la gestión del sitio, que están obligados a respetar la confidencialidad de la información y el uso de sólo para la operación específica de que tiene que responder. </br>
Tenemos que recoger una cierta cantidad de datos necesarios para el buen funcionamiento del servicio y los anuncios de publicación. Sólo la información contenida en el anuncio y la información estrictamente necesaria para la vinculación están disponibles al público. Forma de recogida de datos personales, señaló el carácter obligatorio o facultativo de esta colección. Somos los únicos destinatarios de los datos transmitidos a nosotros. </br>
La información recopilada también puede ayudar a conocerle mejor y para alinear nuestra oferta a sus expectativas, gestionar las reclamaciones, para hacer cumplir nuestras normas de procedimiento, para resolver los conflictos entre los usuarios, o para mantenerle informado de nuestras noticias. </br>
</br>
Por último, se permite el envío de ofertas especiales de nuestros socios sólo para la atención de los usuarios que han solicitado expresamente. En este contexto, los datos se pueden alquilar, pero en ningún caso podrán ser vendidos o cedidos a terceros. </br>
</br>
7. Su relación con ESK'IMMO </br>
</br>
Usted está contractualmente ESK'IMMO e independientes el uno del otro y estos términos no será en ningún modo deberán interpretarse como una asociación o sociedad entre nosotros. Usted puede sugerir que ESK'IMMO aprueba anuncios, productos, servicios o usted mismo. Usted no puede enmarcar este Sitio (o cualquier información contenida en este sitio) o crear un borde alrededor de este sitio o su contenido. </br>
Varios. </br>
Usted acepta que cualquier reclamo o disputa con ESK'IMMO resolverse ante un tribunal en París, Francia, a menos que se acuerde otra cosa. La no imposición de nosotros a la aplicación de una disposición particular no implica que renunciemos a nuestra ventaja más adelante. En el caso de que un tribunal establezca la invalidez de alguna de estas condiciones, otras condiciones, siguen siendo plenamente aplicables. </br>
Excepción de los avisos relativos a contenidos ilegales o delincuentes, la notificación debe ser enviada a nosotros por correo certificado a ESK'IMMO, Institut Supérieur d'Electronique de Paris, 28 rue Notre-Dame-des-Champs, 75006 París - Francia </br>
                </br> </br> ";
                   $accent = replace ($accent);
            }
        
        ?>
         </fieldset>  
        </center>
    </div>
</div>
