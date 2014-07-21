#!/bin/bash

# check si ruby et git sont installes
$ ruby -e 'puts "Welcome to Ruby"' Welcome to Ruby $ git --version git version 1.7.11.1

#Installation de ruby et git en tant qu'administrateur
sudo apt-get install ruby-full rubygems git-core

#Installation d'Openshift
sudo gem install rhc

#Connexion a Openshift (login : charlesdevazelhes@gmail.com  mdp : tYkRg3Fdk9)
rhc setup

#Creation d'une application PHP et ajout des extensions mysql et phpmyadmin pour gérer la base de données
rhc app create -a dossierOS -r /git/repo -t php-5.4 -t mysql-5.5 -t phpmyadmin

# Ajouter mannuellement la base de données sur l'interface phpmyadmin via le dump bdd.sql

#Ajout de la clé SSH sur Openshift
rhc sshkey add cat ~/.ssh/id_rsa.pub
# Ajout manuel de la base de donnees et reglages des parametres dans le fichier const.php
#Ajout de la cle SSH pour lier Openshift a Github
set ssh://536a4da04382ecb232000018@dossieros-wkerrand.rhcloud.com/~/git/dossieros.git/ dossierOS admin71IshSFn 2ZyDK7anjqJy


#La suite de ce fichier bash permet soit de cloner, de 'commit' ou de 'pudh' les changements faits dans le repository 'github' du projet
#Notes :
#  - Verifier d'etre dans le bon directory avant de cloner
#  - Spécifier l'argument demandé avant de 'commit' (./deploy.sh file.txt ) 
#  - 'Push' le travail seulement apres avoir clone

PS3="Pick an option (1-4):" 
select i in Init Clone Add Commit Push Exit; do
	case $i in 
		Add) git add ;;
 		Commit) git commit -m "Some changes have been added to the project, please refer to the author for more details.";;
		Push) git push origin master;; 
		Exit) echo "Goodbye!"; break;;
		*) echo "Invalid option. Try another one."; continue;;
 	esac 
done
