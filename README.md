Pimp my Fractale

Langage : PHP, JS, HTML, CSS

Notions
Vous savez maintenant manipuler les nombres complexes et les placer sur un plan complexe, en fonction de leurs parties réelles et imaginaires. Nous allons revoir plusieurs notions liées aux nombres complexes et les appliquer dans un projet un peu plus axé sur le graphisme. Il portera sur les fractales.

Quel est le rapport entre les fractales et les nombres complexes (qui sont censés être un ensemble de nombres "abstrait") me direz-vous ? Et bien, cela va nous permettre de générer des fractales dans un plan. S'il existe différentes sortes de fractales, nous allons nous concentrer sur une sorte, les fractales de Mandelbrot. Un peu comme ceci :


La grosse forme qui ressemble presque à un cercle est appelée cardioïde. Comme vous pouvez le voir, le cercle à gauche de la cardioïde est lui-même entouré de cercles de différentes tailles et cela se répète tout au long de la fractale de manière infinie. Et si vous zoomez :


L'ensemble de Mandelbrot de degré k est une fractale qui est définie comme l'ensemble des points c du plan complexe pour lesquels la suite récurrente définie par Zn+1 = Znk + c et la condition Z0 = 0 ne tend pas vers l'infini (en module). En réalité, ce genre de calcul est bien compliqué pour nos têtes et pour notre pauvre ordinateur et donc, nous avons seulement besoin de tester si le module de Zn dépasse 2 à un moment. S'il ne le dépasse pas, c'est qu'il fait partie de la fractale.




De quoi a-t-on besoin ?
- Waaaa c'est un ouf le prof !
- Mais grave... De quoi il parle ?? Plan complexe, fractales, vers l'infini en module. 
- C'est mort, moi j'fais pas ce projet...
- Faut lui dire c'est plus la maternelle ! C'est pas une UE coloriage ziva.



Il vous faut des pré-recquis pour débuter ce projet :
Les cours sur les nombres complexes
Le cours sur les suites numériques
Savoir créer une interface Web
Savoir utiliser la librairie GD (oui, souvenir d'Image Panel), afin de générer la fractale
Générer une fractale demande beaucoup de resources.
Imaginez que vous génériez une balise par pixel, et que vous mettiez ça dans un fichier HTML... Il est donc fortement recommandé de générer une image plutôt. Heureusement, vous savez - grâce au projet ImagePanel - créer des images. Servez-vous en !



Que faut-il faire ?
L'ensemble de Mandelbrot de degré k est une fractale qui est définie comme l'ensemble des points c du plan complexe pour lesquels la suite récurrente définie par Zn+1 = Znk + c et la condition Z0 = 0 ait un module qui ne dépasse pas 2.
Le but du projet sera de créer une interface Web qui pourra créer une fractale de Mandelbrot sous forme d'image. Votre interface proposera une formulaire qui aura les champs suivants :
"Nombre d'itération" : le nombre n maximum de la suite Zn. Par défaut, c'est-à-dire en l'absence de valeurs, ce champs aura pour valeur 50.
"Degré" : correspond au degré k auquel sera porté la suite Zn pour chaque itération. Par défaut, ce champs aura pour valeur 2.
Le bouton "Valider" permettra alors de générer une image de la fractale par la librairie gd et de l'afficher sur votre interface.



Exemples
Vous constaterez 2 choses en manipulant n et k :
Plus n sera grand, plus la fractale sera "précise".
Plus k sera grand, plus il y aura de ramifications.
Vous trouverez en dessous des exemples de fractales avec différents nombres d'itération et degrés
Exemples de fractales de Mandelbroot de différents degrés et nombres d'itérations
Fractale de Mandelbroot 3ème degré
20 itérations   Fractale de Mandelbroot 7ème degré
20 itérations   Fractale de Mandelbroot 10ème degré
20 itérations   Fractale de Mandelbroot 2nd degré
7 itérations   Fractale de Mandelbroot 3ème degré
5 itérations   Fractale de Mandelbroot 4ème degré
5 itérations
Bon courage !
