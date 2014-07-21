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
rhc app create -a projet -r /git/repo -t php-5.4 -t mysql-5.5 -t phpmyadmin

# Ajouter mannuellement la base de données sur l'interface phpmyadmin en important le fichier sql

#Ajout de la clé SSH sur Openshift
rhc sshkey add cat ~/.ssh/id_rsa.pub
# Ajout manuel de la base de donnees et reglages des parametres dans le fichier const.php


#Ajout de la cle SSH pour lier Openshift a Github
set ssh://53cd7362e0b8cd96a40000dd@projet-devazelhes.rhcloud.com/~/git/projet.git/ projet admint8tjU77 Cd2J2G6v-1QQ

#Ajout du site web
git init
git clone ssh://53cd7362e0b8cd96a40000dd@projet-devazelhes.rhcloud.com/~/git/projet.git/

#Copie du projet APP (dossier site) dans projet
cd projet
rm index.php
cd
cp -r projetapp/* projet
cd projet

#Modification des identifiants de la base de données

#OPENSHIFT_<projet>_DB_HOST
#OPENSHIFT_<projet>_DB_USERNAME
#OPENSHIFT_<projet>_DB_PASSWORD

#Commit
git add -A :/
git commit -m "Ajout du site"
git push origin master
