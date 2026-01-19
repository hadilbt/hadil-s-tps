# Projet de Réseau – Architecture Multi-Sites avec VLANs et Routage Statique de notre Université

## 📌 Description du Projet
Ce projet consiste à concevoir et implémenter une infrastructure réseau de notre université multi-sites.  
L’architecture repose sur la segmentation du réseau à l’aide de VLANs et sur l’utilisation du routage statique pour assurer la connectivité entre les différents bâtiments.

Le réseau relie cinq sites : quatre bâtiments opérationnels et un bâtiment de direction, avec une gestion centralisée, sécurisée et évolutive.

---

## 🎯 Objectifs du Travail
- Concevoir une architecture réseau multi-sites cohérente et évolutive  
- Segmenter le réseau à l’aide de VLANs pour améliorer la sécurité et la gestion  
- Mettre en place le routage statique entre les différents sites  
- Assurer la connectivité inter-VLAN et inter-sites  
- Tester et valider le bon fonctionnement du réseau  
- Documenter l’ensemble de l’infrastructure réseau  

---

## 🛠️ Technologies Utilisées
- **Cisco Packet Tracer**
- **Routeurs Cisco (2911, 3945)**
- **Switchs Cisco (2960)**
- **VLAN (802.1Q)**
- **Routage statique**
- **ACL (Access Control Lists)**
- **SNMP et Syslog**
- **Adressage IPv4**

---

## ▶️ Instructions pour Exécuter le Projet
1. Ouvrir **Cisco Packet Tracer**
2. Charger le fichier du projet (.pkt) fourni dans le dépôt
3. Vérifier les configurations des équipements :
   - VLANs sur les switchs
   - Sous-interfaces et routage statique sur les routeurs
4. Lancer les tests de connectivité :
   - `ping` entre les hôtes du même VLAN
   - `ping` entre VLANs différents
   - `ping` entre sites différents
   - `traceroute` pour vérifier les chemins réseau
5. Vérifier l’état du réseau à l’aide des commandes :
   - `show ip route`
   - `show vlan brief`
   - `show interfaces trunk`

---

## 👥 Membres du Groupe
- **Hadil BOUTAOUAR**
- **Mariyem AIT OUSSAYER**

---

## 📅 Année Universitaire
2024 – 2025
