<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* administratif/index.html.twig */
class __TwigTemplate_93193838539090a7606b877c0aeffb56b66db2270caaedccec10d7a48c89e58f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "administratif/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " CONDITIONS D'UTILISATION";
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    <style>
        .accordion {
            background-color: #eee;
            color: #444;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
            transition: 0.4s;
        }

        .active, .accordion:hover {
            background-color: #ccc;
        }

        .panel {
            padding: 0 18px;
            display: none;
            background-color: white;
            overflow: hidden;
        }
    </style>


    <h1>CONDITIONS D'UTILISATION</h1>
    <main class=\"container mt-5\">
    <button class=\"accordion\">SECTION 1 – CONDITIONS D'UTILISATION DE LA BOUTIQUE EN LIGNE
    </button>
    <div class=\"panel\">
        <p>   En acceptant les présentes Conditions d'utilisation, vous déclarez avoir atteint ou dépassé l'âge de la majorité dans votre région, province ou État et nous avoir donné l'autorisation de permettre à toute personne mineure à votre charge d'utiliser ce site.

            Vous ne devez en aucune façon utiliser nos produits à des fins illégales ou non autorisées, ni violer des lois de votre juridiction lorsque vous utilisez le Service (y compris, sans toutefois s'y limiter, les lois relatives aux droits d'auteur).

            Vous ne devez pas transmettre de vers informatique, de virus ou tout code de nature destructrice</p>
    </div>

    <button class=\"accordion\"> SECTION 2 – CONDITIONS GÉNÉRALES</button>
    <div class=\"panel\">
        Nous nous réservons le droit de refuser de servir quelqu'un à tout moment et pour quelque raison que ce soit.

        Vous comprenez que votre contenu (à l'exception des informations relatives à votre carte de crédit) peut être transféré sans chiffrement et que cela comprend (a) des transmissions sur plusieurs réseaux ; et (b) des changements effectués dans le but de se conformer et de s'adapter aux exigences techniques de la connexion de réseaux ou d'appareils. Les informations de votre carte de crédit sont toujours chiffrées lors de leur transfert sur les réseaux.

        Vous acceptez de ne pas reproduire, dupliquer, copier, vendre, revendre ou exploiter toute partie du Service, toute utilisation du Service ou tout accès au Service, ou encore tout contact sur le site web à travers lequel le Service est fourni, sans notre autorisation écrite expresse.

        Les titres utilisés dans le présent accord sont inclus à titre indicatif uniquement et ne limiteront ni n'affecteront aucunement ces Conditions.    </div>

    <button class=\"accordion\">SECTION 3 – EXACTITUDE, EXHAUSTIVITÉ ET ACTUALITÉ DES INFORMATIONS
    </button>
    <div class=\"panel\">
        Nous ne saurions être tenus responsables si les informations proposées sur ce site sont inexactes, incomplètes ou caduques. Le contenu de ce site est fourni à titre d'information générale uniquement et ne doit pas être considéré ou utilisé comme seule base pour la prise de décisions sans consulter des sources d'information plus importantes, plus exactes, plus complètes ou plus actuelles. Si vous vous fiez au contenu de ce site, vous le faites à vos propres risques.

        Ce site peut contenir certaines données historiques. Par définition, les données historiques ne sont pas actuelles et sont fournies uniquement à titre de référence. Nous nous réservons le droit de modifier les contenus de ce site à tout moment, mais nous n'avons aucune obligation de mettre à jour les informations qu'il contient, quelles qu'elles soient. Vous reconnaissez qu'il vous incombe de surveiller les changements apportés à notre site.
    </div>

    <button class=\"accordion\">SECTION 4 – MODIFICATIONS DU SERVICE ET DES PRIX

    </button>
    <div class=\"panel\">
        Les prix de nos produits sont modifiables sans préavis.

        Nous nous réservons le droit de modifier ou de mettre fin au Service (ou à une quelconque partie de celui-ci) à tout moment et sans préavis.

        Nous ne pourrons être tenus responsables envers
        vous ou tout tiers de tout changement de prix, ou encore de toute modification,
        suspension ou interruption du Service.
    </div>

    <button class=\"accordion\">SECTION 5 – PRODUITS OU SERVICES (le cas échéant)</button>
    <div class=\"panel\">
        Il est possible que certains produits ou services ne soient disponibles qu'en ligne à travers le site web. Il se peut que les quantités de ces produits ou services soient limitées et que leur retour ou leur échange soit strictement assujetti à notre Politique de retour.

        Nous nous sommes efforcés de présenter aussi précisément que possible les couleurs et images des produits figurant sur la boutique. Nous ne pouvons cependant pas garantir la précision d'affichage des couleurs sur l'écran de votre ordinateur.
        Nous nous réservons le droit, sans toutefois y être obligés, de limiter la vente de nos produits ou Services à n'importe quelle personne, région géographique ou juridiction donnée. Nous nous autorisons à exercer ce droit au cas par cas. Nous nous réservons le droit de limiter les quantités des produits ou services que nous offrons. Toutes les descriptions des produits et leur tarification sont modifiables à tout moment, sans préavis et à notre entière discrétion. Nous nous réservons le droit d'interrompre la vente d'un produit à tout moment. Toute offre de produit ou service sur ce site est nulle là où la loi l'interdit.

        Nous ne garantissons pas que la qualité des produits, services, informations ou autres matériels que vous achetez ou que vous vous procurez répondra à vos attentes ni que les erreurs que comporte éventuellement le Service seront corrigées.
    </div>
    <button class=\"accordion\">SECTION 6 – EXACTITUDE DE LA FACTURATION ET DES INFORMATIONS DE COMPTE
    </button>
    <div class=\"panel\">
        Nous nous réservons le droit de refuser toute commande que vous passez auprès de nous. Nous pouvons, à notre seule discrétion, limiter ou annuler les quantités achetées par personne, par foyer ou par commande. Ces restrictions peuvent inclure les commandes passées par ou sur le même compte client, la même carte de crédit et/ou des commandes utilisant la même adresse de facturation et/ou d'expédition. Si nous modifions ou annulons une commande, il se peut que nous tentions de vous en aviser en vous contactant au moyen de l'adresse e-mail et/ou de l'adresse de facturation ou du numéro de téléphone fournis au moment de la commande. Nous nous réservons le droit de limiter ou d'interdire les commandes qui, selon nous, semblent avoir été passées par des négociants, des revendeurs ou des distributeurs.
        Vous acceptez de fournir des informations d'achat et de compte actuelles, complètes et exactes pour tous les achats effectués dans notre boutique. Vous acceptez de mettre rapidement à jour votre compte et toute autre information, y compris votre adresse e-mail et vos numéros de cartes de crédit et leurs dates d'expiration, afin que nous puissions finaliser vos transactions et vous contacter en cas de besoin.

        Pour plus d'informations, veuillez consulter notre Politique de retour.
    </div>
    <button class=\"accordion\">SECTION 7 – OUTILS FACULTATIFS</button>
    <div class=\"panel\">
        Nous sommes susceptibles de vous fournir l'accès à des outils tiers que nous ne surveillons, ne contrôlons et ne gérons pas.

        Vous reconnaissez et acceptez que nous vous fournissons l'accès à ces outils « tels quels » et « sous réserve de disponibilité », sans garantie, représentation ou condition d'aucune sorte et sans la moindre approbation. Nous ne saurions être tenus responsables de quoi que ce soit à l'égard de ce qui pourrait résulter de ou être relié à votre utilisation des outils facultatifs tiers.

        Toute utilisation par vous des outils facultatifs proposés par le biais du site est entièrement à votre discrétion et à vos propres risques. En outre, il vous appartient de vous renseigner sur les conditions dans lesquelles ces outils sont fournis par le(s) fournisseur(s) tiers concerné(s) et accepter ces conditions.

        Il se peut également qu'à l'avenir, nous proposions de nouveaux services et/ou de nouvelles fonctionnalités à travers le site web (y compris le lancement de nouveaux outils et ressources). Ces nouveaux services et/ou fonctionnalités seront aussi assujettis aux présentes Conditions d'utilisation.
    </div>

    <button class=\"accordion\">ARTICLE 8 – LIENS DE TIERS</button>
    <div class=\"panel\">
        Certains contenus, produits et services accessibles via notre Service peuvent inclure des éléments provenant de tiers.

        Les liens de tiers sur ce site peuvent vous rediriger vers des sites web de tiers qui ne sont pas affiliés à nous. Nous ne sommes pas tenus d’examiner ou d’évaluer leur contenu ou leur exactitude, de même que nous ne garantissons pas et n’assumons aucune responsabilité quant aux contenus ou sites web, ou aux autres contenus, produits ou services de sources tierces.

        Nous ne sommes pas responsables des préjudices ou dommages liés à l’achat ou à l’utilisation de biens, services, ressources, contenus ou de toute autre transaction reliée à ces sites web tiers. Veuillez lire attentivement les politiques et pratiques de ces tiers et assurez-vous de bien les comprendre avant de vous engager dans une transaction. Les plaintes, réclamations, préoccupations ou questions concernant les produits de tiers doivent être adressées à ces mêmes tiers.
    </div>

    <script>
        var acc = document.getElementsByClassName(\"accordion\");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener(\"click\", function() {
                this.classList.toggle(\"active\");
                var panel = this.nextElementSibling;
                if (panel.style.display === \"block\") {
                    panel.style.display = \"none\";
                } else {
                    panel.style.display = \"block\";
                }
            });
        }
    </script>

</main>
";
    }

    public function getTemplateName()
    {
        return "administratif/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 7,  54 => 6,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "administratif/index.html.twig", "/Users/andranikhakobyan/Desktop/la-boutique-francaise/templates/administratif/index.html.twig");
    }
}
