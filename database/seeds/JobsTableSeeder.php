<?php

use Illuminate\Database\Seeder;
use App\Model\Job;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $data = [
                    [
                    'name' => 'Aide à la personne, aide à domicile',
                    'description' => 'L\'aide à domicile aide au maintien à domicile d\'une personne âgée, handicapée, malade, accidentée, en perte d\'autonomie, en assurant un travail matériel, moral, social ou sanitaire et les tâches liées à cette fonction à l\'exclusion de tout acte relevant d\'une autre profession que la sienne',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Assistante maternelle',
                    'description' => 'L\'assistante maternelle agréée accueille à son domicile en journée un à trois enfants de moins de six ans. Elle effectue l\'ensemble des tâches nécessaires à l\'accueil, à la garde et à l\'éveil d\'un ou plusieurs nourrissons ou jeunes enfants. Elle est salariée d\'un particulier ou d\'une crèche familiale gérée par une municipalité ou une association.',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Employé de maison',
                    'description' => 'L\'employé de maison assure au domicile d\'un ou plusieurs particuliers tout ou partie des tâches ménagères : ménage, repassage, cuisine. Peut aussi garder des enfants ou s\'occuper momentanément de personnes adultes ou âgées.',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Sage-femme',
                    'description' => 'L\'exercice de la profession de sage-femme comporte la pratique des actes nécessaires au diagnostic, à la surveillance de la grossesse et à la préparation psychoprophylactique à l\'accouchement, ainsi qu\'à la surveillance et à la pratique de l\'accouchement et des soins postnataux en ce qui concerne la mère et l\'enfant. L\'examen postnatal peut être pratiqué par une sage-femme si la grossesse a été normale et l\'accouchement eutocique. L\'exercice de la profession de sage-femme peut comporter également la participation aux consultations de planification familiale.',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Aide-soignant',
                    'description' => 'Réalise les soins d\'hygiène et de confort de la personne (toilette, repas), participe aux soins curatifs (prise de température, courbe de poids) et à la prise en charge psychologique du patient. Joue le rôle d\'intermédiaire entre la personne, son entourage et l\'équipe soignante. Peut participer à l\'accueil des stagiaires en milieu hospitalier. Travaille sous la responsabilité de l\'infirmier, souvent en binôme avec lui.',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Infirmier',
                    'description' => 'Un infirmier est un professionnel de la santé qui soigne les patients tout en s\'assurant de leur confort, leur hygiène et leur bien-être. Les infirmiers sont proches des patients et agissent selon les conseils des médecins. Un infirmier peut travailler au sein d\'un hôpital, d\'une clinique, d\'une structure médicalisée ou comme libéral. Pour devenir infirmier, il faut impérativement être diplômé mais aussi avoir des qualités humaines, être constamment vigilant et surtout être passionné.',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Chef de rayon',
                    'description' => 'Le responsable de rayon anime et gère un rayon ou un espace de vente de produits alimentaires ou non alimentaires à partir d\'objectifs fixés par l\'entreprise.
                        Le responsable de rayon peut assurer la responsabilité d\'un des rayons d\'une grande surface ou de l\'ensemble d\'une petite surface de proximité, vendant des produits non alimentaires ou plus rarement alimentaires.
                        Il encadre généralement une équipe d\'employés libre-service, de vendeurs et parfois de caissiers.',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Vendeur',
                    'description' => 'En magasin spécialisé, en grande surface, dans une petite boutique... face à une clientèle informée et exigeante, les vendeurs doivent argumenter et adapter leur discours en fonction des besoins de chacun pour vendre les produits.',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Directeur de magasin',
                    'description' => 'Responsable d\'un point de vente (hypermarché, supermarché...) aux couleurs d\'une enseigne, le directeur de grande surface gère et développe l\'activité en appliquant la politique commerciale de la chaîne.

',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Cuisinier',
                    'description' => 'Le cuisinier traditionnel est un salarié ou un artisan de niveau CAP à BTS qui assure la préparation des repas pour une clientèle de restaurant, à la table ou parfois en buffet, en vue d\'un service direct. Il peut travailler en restauration privée ou collective. La cuisine en liaison chaude ou froide sera traitée ailleurs.',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Employé de restauration',
                    'description' => 'Selon la taille de l\'établissement qui l\'emploie, l\'employé de restaurant, relais entre la cuisine et la salle de restaurant, peut endosser une partie ou la totalité du rôle de serveur, de chef de rang, de maître d\'hôtel...

',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Directeur d\'hotel et/ou de restaurant',
                    'description' => 'Animateur d\'équipe, gestionnaire et commercial, le directeur d\'hôtel restaurant a tout du chef d\'entreprise. Ses responsabilités varient fortement selon le type d\'établissement qu\'il dirige, mais exigent une présence de tous les instants.

',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Grutier',
                    'description' => 'À partir du sol ou du haut d\'une cabine, le grutier déplace des charges lourdes, répartit les matériaux sur le chantier et distribue les éléments préfabriqués. Acteur incontournable d\'un chantier, il en assure aussi, pour une part, la sécurité.

',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Conducteur d\'engins de BTP',
                    'description' => 'Pas de chantier sans bulldozer ni pelle mécanique. Pilote de ces puissantes machines, le conducteur d\'engins de chantier prépare et déblaie le terrain avant d\'effectuer les travaux de terrassement ou de nivellement. Un professionnel très sollicité.



',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Chauffeur routier',
                    'description' => 'Poids lourd, camionnette, véhicule léger... au volant de son véhicule du matin au soir, le conducteur routier a pour mission de livrer la marchandise en bon état et en respectant les délais impartis.

',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Main d\'oeuvre dans le BTP',
                    'description' => 'Prépare le terrain, les outils, les matériaux nécessaires à l\'exécution des travaux de construction, de réparation et d\'entretien et de démolition de bâtiments.',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Chef de chantier',
                    'description' => 'Le chef de chantier joue un rôle de premier plan dans les entreprises du BTP. Il dirige les équipes, contrôle, coordonne et planifie les travaux. Associé aux phases préparatoires comme à la gestion financière, il assure également l\'organisation du chantier.

',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Ingénieur énergies vertes',
                    'description' => 'De l\'abri solaire qui recharge un véhicule électrique à la centrale qui produit de l\'électricité, l\'ingénieur en énergie solaire conçoit et pilote des projets au coeur de l\'énergie " verte ".

',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Technicien d\'études en rénovation énergétique du bâtiment',
                    'description' => 'L\'ingénieur efficacité énergétique du bâtiment réalise des études permettant de diminuer la consommation d\'énergie ou d\'intégrer les énergies renouvelables dans un édifice. Il travaille avec les maîtres d\'ouvrage avant ou après la construction.

',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Militaire',
                    'description' => 'Volontaire de l\'armée de terre (VDAT) ou engagé volontaire de l\'armée de terre (Evat) sous contrat à durée déterminée, le militaire du rang est un soldat qui a reçu une formation militaire et technique dans un centre de formation initiale des militaires (CFIM) adossé à un régiment dans lequel il sera plus tard engagé.

',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Agent de gardiennage et de sécurité',
                    'description' => 'À l\'entrée de bâtiments ou d\'espaces publics, lors de rondes de nuit ou de vérifications, l\'agent de sécurité assure la protection des biens et des personnes, et fait appliquer le règlement du site dont il assure la surveillance.

',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Ingénieur de l\'industrie chimique',
                    'description' => 'Pétrochimie, agroalimentaire, pharmaceutique, colorants, transformation des plastiques... Dans de nombreuses industries, l\'ingénieur chimiste participe à la recherche et développement, à la production... L\'environnement fait aussi partie de ses missions.

',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Ingénieur de l\'industrie pharmaceutique',
                    'description' => 'Garant de la qualité et de la sécurité du médicament, le pharmacien est présent à toutes les étapes du processus industriel, de la découverte de la molécule jusqu\'à la commercialisation du produit. Un processus qui s\'étale sur 10 ans en moyenne...

',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Chef de missions humanitaires',
                    'description' => 'C\'est le capitaine d\'une mission humanitaire. Il suit de près l\'évolution de la situation pour orienter au mieux les actions de terrain. En relation constante avec son ONG (organisation non gouvernementale), il détermine la stratégie de la mission, tout en dirigeant une équipe.



',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Comptable',
                    'description' => 'Essentiel à toute organisation, le comptable enregistre les dépenses, les recettes et les investissements de l\'entreprise au quotidien. En plongeant dans la comptabilité analytique, il étudie les coûts de revient ou le chiffre d\'affaires par produit.

',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Analyste financier',
                    'description' => 'Spécialiste du placement en Bourse, l\'analyste financier a la cote. Son rôle : aider les investisseurs à choisir les valeurs les moins risquées et les plus rentables grâce à des études approfondies.

',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Employé des banques',
                    'description' => 'Connaissant parfaitement les produits proposés par sa banque et le profil de ses clients, le chargé de clientèle banque cherche la solution la plus adaptée et la plus rentable pour les deux parties. C\'est un métier à la fois technique et commercial.

',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Employé d\'assurances',
                    'description' => 'Il gère un portefeuille de clients, auxquels il propose et vend des contrats d\'assurances (habitation, automobile, épargne...). Prospecter une nouvelle clientèle sur une zone géographique précise, et la fidéliser font aussi partie de ses missions.



',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Employé d\'exploitation agricole',
                    'description' => 'Bras droit de l\'agriculteur, l\'ouvrier agricole participe à tous les travaux d\'une exploitation. C\'est une occupation pointue et un bon marchepied pour s\'installer ensuite à son compte.

',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Agriculteur',
                    'description' => 'Passionné de nature, doté d\'une solide formation technique et assisté d\'outils informatisés, l\'agriculteur est un véritable chef d\'entreprise, qu\'il produise des céréales, des légumes, des fruits, du lait ou de la viande...

',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Ingénieur agronome',
                    'description' => 'Sélection des plantes, des animaux ou des agroéquipements pour les adapter aux besoins de l\'agriculture d\'aujourd\'hui (productivité, qualité, respect de l\'environnement)... Les compétences de l\'agronome sont avant tout scientifiques.



',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Trader',
                    'description' => 'Parier sur la hausse ou la baisse d\'une monnaie, d\'un indice ou d\'une action représente le travail quotidien du trader. Les yeux rivés sur les cours de la Bourse, ce professionnel des salles de marché brasse des millions d\'euros par jour.

',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Danseur',
                    'description' => 'Arabesque, tour de valse, spin... Les pas de danse varient autant que les genres. En danse classique comme en hip-hop, le danseur allie expression artistique et performance physique. Son quotidien : échauffements, auditions et représentations.

',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Musicien',
                    'description' => 'Créer des mélodies, les interpréter, transmettre son savoir... Le métier de musicien recouvre une multitude de spécificités : à chacun de choisir sa propre musique, de jouer sa propre histoire !



',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Peintre décorateur',
                    'description' => 'Sur un chantier, le peintre décorateur se charge des finitions. Chez des particuliers, il apporte son savoir-faire et ses conseils en termes de décoration. Plus rarement, il travaille pour le théâtre, où il réalise ou restaure les décors peints.







',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Administrateur de spectacles',
                    'description' => 'Gestion économique, financière, du personnel... rien n\'échappe à l\'administrateur de spectacle. Il intègre les données administratives et budgétaires aux éléments artistiques afin qu\'un spectacle voie le jour.









',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Contrôleur de gestion',
                    'description' => 'Qu\'il travaille dans une usine, un service commercial ou une entreprise, le contrôleur de gestion n\'a qu\'un objectif : rechercher la performance. De la mise en place de tableaux de bord au suivi du budget, il dispose de nombreux outils de pilotage.

',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Ingénieur informatique',
                    'description' => 'À la demande du client utilisateur, l\'ingénieur support intervient en cas de problème informatique, qu\'il soit logiciel ou matériel. Réactif, il pose un diagnostic et trouve une solution le plus rapidement possible, puis accompagne sa mise en oeuvre.

',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Développeur',
                    'description' => 'Expert des langages informatiques, le développeur informatique traduit la demande d\'un client en lignes de code informatique. La révolution numérique le place parmi les professionnels les plus recherchés, surtout s\'il sait s\'adapter et élargir ses compétences.

',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Consultant en stratégie digitale',
                    'description' => 'Spécialiste des bases de données, le consultant en informatique décisionnelle propose et met en place des solutions informatiques pour les dirigeants des entreprises qui le sollicitent. Sa ligne de mire : améliorer les performances de leur entreprise.

',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Community manager',
                    'description' => 'Garant de la présence et de la (bonne !) réputation d\'une marque ou d\'une entreprise sur les réseaux sociaux, le community manager anime une communauté d\'internautes, publie des tweets, répond aux questions sur le Net, alimente la page Facebook...

',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Cadre commercial',
                    'description' => 'L\'ingénieur technico-commercial se distingue par sa double compétence : la négociation commerciale et la connaissance parfaite des produits qu\'il vend. Spécialiste du sur-mesure, il sait adapter son offre et ses services aux besoins de ses clients.

',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Attaché de presse',
                    'description' => 'Un article dans la presse écrite, un sujet de 1 min 30 au journal télévisé... voilà de quoi satisfaire tout attaché de presse ! Faire en sorte que les médias parlent de l\'entreprise qu\'il représente, tel est son pari au quotidien.

',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Mixeur son',
                    'description' => 'Le mixeur son mélange les voix, les musiques, les ambiances... pour donner à un film ou à un disque une ambiance sonore. Une technique complexe qui exige une certaine sensibilité musicale.



',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Graphiste',
                    'description' => 'Affiches, logos, emballages, sites web... l\'empreinte du designer graphique est partout : dans la presse, l\'édition en passant par la publicité, la communication et le design... Sa mission : concevoir un visuel, alliant sens artistique aux enjeux commerciaux et marketing, qui saura séduire le public.

',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Prothésiste dentaire',
                    'description' => 'Le prothésiste dentaire fabrique des prothèses (couronnes, bagues, appareils dentaires). À partir des empreintes prises par le dentiste, il façonne des moules et utilise la céramique, des matériaux composites et des métaux précieux.

',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Enseignant spécialisé',
                    'description' => 'Instruire et accompagner des élèves souffrant de troubles du comportement ou de handicaps, tel est le rôle de l\'enseignant spécialisé. Un métier où le travail en équipe (éducateurs, psychologues, médecins, assistants sociaux...) est primordial.

',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Professeur de collège et lycée',
                    'description' => 'Le professeur de collège et de lycée est spécialiste d\'une discipline (français, maths, histoire...) qu\'il enseigne à des classes de 20 à 30 élèves. Pédagogue, il transmet ses connaissances dans le respect des programmes de l\'Éducation nationale.

',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Coiffeur',
                    'description' => 'Balayage, permanente, coupe au carré, brushing... Aussi habile à manier les ciseaux, le pinceau, la tondeuse, la brosse... le coiffeur se plie au moindre désir de ses clients. Son savoir-faire se double d\'un certain sens de l\'esthétique et de qualités relationnelles.



',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Photographe',
                    'description' => 'Faire des prises de vue, tel est l\'objectif de tout photographe. Pourtant, les emplois se situent surtout dans le tirage et la vente, sous des statuts variés, et les lieux d\'exercice sont très divers : laboratoire, studio, extérieur.





',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Conseiller en environnement',
                    'description' => 'Les missions du conseiller en environnement sont entièrement tournées vers l\'amélioration du cadre de vie et le développement durable : gestion de nouveaux sites industriels, assainissement des rivières, protection des arbres...

',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Paysagiste',
                    'description' => 'Voilà longtemps que le paysagiste ne se contente plus de fleurir les carrefours. En véritable architecte des espaces verts, il modèle les villes et les campagnes. Faisant appel à sa créativité sans jamais perdre le sens des réalités, il s\'efforce d\'améliorer notre cadre de vie.

',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Medecin',
                    'description' => 'Le médecin spécialiste examine les malades, établit un diagnostic et met en place un traitement adapté. De la dermatologie à la pédiatrie, la profession compte une trentaine de disciplines. Actuellement, la France manque d\'anesthésistes-réanimateurs, de pédiatres, de gynécologues-obstétriciens et de psychiatres.

',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Pilote d\'avions',
                    'description' => 'Aujourd\'hui Tokyo, demain New York, Dakar la semaine prochaine... Le métier de pilote de ligne fascine. Mais ce professionnel du ciel doit garder les pieds sur terre : il est responsable de la vie de centaines de passagers.

',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Conducteur de bus',
                    'description' => 'Sécurité, ponctualité et qualité de service sont les préoccupations premières du conducteur de bus. Cet amoureux de la conduite n\'assure pas seulement le transport : il accueille, informe et conseille les usagers.

',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Guide interprète',
                    'description' => 'Véritable passionné d\'histoire et de vestiges culturels, le guide-interprète transmet aux touristes l\'histoire d\'un lieu, d\'un site ou d\'un monument historique, le tout dans la langue d\'origine du voyageur.',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Steward / Hotesse de l\'air',
                    'description' => 'D\'un bout à l\'autre du monde, à bord des avions, les hôtesses et les stewards assurent la sécurité et le confort des passagers pendant le vol. Ils sont les représentants des compagnies aériennes dont ils doivent donner la meilleure image.

',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Modiste',
                    'description' => 'Le modiste imagine et réalise sur mesure, à l\'unité ou en petites séries, des chapeaux, véritables accessoires de mode, qu\'il vend ensuite dans sa boutique à une clientèle presque exclusivement féminine ou aux professionnels du monde du spectacle ou de la mode.

',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Sapeur pompier',
                    'description' => 'Incendie, accidents de la route, inondations... le sapeur-pompier est sur tous les fronts. Volontaire, professionnel ou militaire, il exerce un métier à risques, qui demande une solide vocation.

',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Masseur Khinésithérapeute',
                    'description' => 'Une bronchiolite, une hospitalisation, une chute de vélo... Autant de situations où le masseur-kinésithérapeute intervient. Ce spécialiste de la rééducation utilise les massages et la gymnastique médicale pour aider ses patients à recouvrer leurs capacités.

',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Maroquinnier',
                    'description' => 'Sacs, gants, ceintures, portefeuilles… Le maroquinier conçoit et fabrique des articles en cuir. Entre tradition et modernité, il perpétue un savoir-faire ancestral tout en adaptant ses modèles aux évolutions de la mode.

',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Administrateur de bases de données',
                    'description' => 'Fichiers clients, catalogues produits, comptes financiers..., l\'administrateur de base de données est le garant des milliers d\'informations stockées dans les bases de données d\'une entreprise. Il en assure la disponibilité, la qualité et la sécurité.

',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Vétérinaire',
                    'description' => 'Les vétos ? En ville, leurs patients sont des chiens, des chats, des rongeurs... À la campagne, ce sont les animaux de la ferme. Dans les deux cas, les vétérinaires conseillent les propriétaires des animaux de compagnie ou les éleveurs. Sans oublier les vétérinaires qui travaillent dans l\'agroalimentaire, la recherche...

',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Avocat',
                    'description' => 'Défendre les personnes et les entreprises engagées dans un procès, telle est la principale mission de l\'avocat. Il joue aussi un rôle de conseiller pour régler les conflits avant qu\'ils ne soient portés sur la scène judiciaire.

',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Magistrat',
                    'description' => 'Rendre la justice et veiller au respect des textes législatifs et réglementaires, telles sont les missions du magistrat. Si cette profession attire de nombreux candidats, elle reste extrêmement difficile d\'accès.

',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Secrétaire',
                    'description' => 'Avec le sourire, le secrétaire jongle avec le téléphone, la souris de l\'ordinateur et de nombreux dossiers. Qu\'il exerce dans une PME (petite ou moyenne entreprise), dans un service technique ou chez un avocat, sa discrétion et ses initiatives sont appréciées.

',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Conseiller d\'insertion et de probation',
                    'description' => 'Le conseiller pénitentiaire d\'insertion et de probation assure le suivi des personnes condamnées par la justice, que celles-ci soient emprisonnées ou en semi-liberté. Ses objectifs : veiller au respect des obligations et aider à la réinsertion.

',
                    'note' => '0',
                    ],
                    [
                    'name' => 'Gardien de la paix',
                    'description' => 'Agent de la police nationale, le gardien de la paix effectue des missions de contrôle et de surveillance. En fonction de son affectation, il intervient dans les commissariats, les rues, sur les routes ou lors de manifestations publiques.

',
                    'note' => '0',
                    ],
               ];

         Job::insert($data);
    }
}
