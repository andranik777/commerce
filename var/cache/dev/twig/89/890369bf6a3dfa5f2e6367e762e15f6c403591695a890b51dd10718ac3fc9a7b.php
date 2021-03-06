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
class __TwigTemplate_cfedfd2e972a83cef06234a0c0213e347351d4543b02d6dc3809562da74a9a5d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "administratif/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "administratif/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "administratif/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " CONDITIONS D'UTILISATION";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

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
    <button class=\"accordion\">SECTION 1 ??? CONDITIONS D'UTILISATION DE LA BOUTIQUE EN LIGNE
    </button>
    <div class=\"panel\">
        <p>   En acceptant les pr??sentes Conditions d'utilisation, vous d??clarez avoir atteint ou d??pass?? l'??ge de la majorit?? dans votre r??gion, province ou ??tat et nous avoir donn?? l'autorisation de permettre ?? toute personne mineure ?? votre charge d'utiliser ce site.

            Vous ne devez en aucune fa??on utiliser nos produits ?? des fins ill??gales ou non autoris??es, ni violer des lois de votre juridiction lorsque vous utilisez le Service (y compris, sans toutefois s'y limiter, les lois relatives aux droits d'auteur).

            Vous ne devez pas transmettre de vers informatique, de virus ou tout code de nature destructrice</p>
    </div>

    <button class=\"accordion\"> SECTION 2 ??? CONDITIONS G??N??RALES</button>
    <div class=\"panel\">
        Nous nous r??servons le droit de refuser de servir quelqu'un ?? tout moment et pour quelque raison que ce soit.

        Vous comprenez que votre contenu (?? l'exception des informations relatives ?? votre carte de cr??dit) peut ??tre transf??r?? sans chiffrement et que cela comprend (a) des transmissions sur plusieurs r??seaux??; et (b) des changements effectu??s dans le but de se conformer et de s'adapter aux exigences techniques de la connexion de r??seaux ou d'appareils. Les informations de votre carte de cr??dit sont toujours chiffr??es lors de leur transfert sur les r??seaux.

        Vous acceptez de ne pas reproduire, dupliquer, copier, vendre, revendre ou exploiter toute partie du Service, toute utilisation du Service ou tout acc??s au Service, ou encore tout contact sur le site web ?? travers lequel le Service est fourni, sans notre autorisation ??crite expresse.

        Les titres utilis??s dans le pr??sent accord sont inclus ?? titre indicatif uniquement et ne limiteront ni n'affecteront aucunement ces Conditions.    </div>

    <button class=\"accordion\">SECTION??3 ??? EXACTITUDE, EXHAUSTIVIT?? ET ACTUALIT?? DES INFORMATIONS
    </button>
    <div class=\"panel\">
        Nous ne saurions ??tre tenus responsables si les informations propos??es sur ce site sont inexactes, incompl??tes ou caduques. Le contenu de ce site est fourni ?? titre d'information g??n??rale uniquement et ne doit pas ??tre consid??r?? ou utilis?? comme seule base pour la prise de d??cisions sans consulter des sources d'information plus importantes, plus exactes, plus compl??tes ou plus actuelles. Si vous vous fiez au contenu de ce site, vous le faites ?? vos propres risques.

        Ce site peut contenir certaines donn??es historiques. Par d??finition, les donn??es historiques ne sont pas actuelles et sont fournies uniquement ?? titre de r??f??rence. Nous nous r??servons le droit de modifier les contenus de ce site ?? tout moment, mais nous n'avons aucune obligation de mettre ?? jour les informations qu'il contient, quelles qu'elles soient. Vous reconnaissez qu'il vous incombe de surveiller les changements apport??s ?? notre site.
    </div>

    <button class=\"accordion\">SECTION??4 ??? MODIFICATIONS DU SERVICE ET DES PRIX

    </button>
    <div class=\"panel\">
        Les prix de nos produits sont modifiables sans pr??avis.

        Nous nous r??servons le droit de modifier ou de mettre fin au Service (ou ?? une quelconque partie de celui-ci) ?? tout moment et sans pr??avis.

        Nous ne pourrons ??tre tenus responsables envers
        vous ou tout tiers de tout changement de prix, ou encore de toute modification,
        suspension ou interruption du Service.
    </div>

    <button class=\"accordion\">SECTION??5 ??? PRODUITS OU SERVICES (le cas ??ch??ant)</button>
    <div class=\"panel\">
        Il est possible que certains produits ou services ne soient disponibles qu'en ligne ?? travers le site web. Il se peut que les quantit??s de ces produits ou services soient limit??es et que leur retour ou leur ??change soit strictement assujetti ?? notre Politique de retour.

        Nous nous sommes efforc??s de pr??senter aussi pr??cis??ment que possible les couleurs et images des produits figurant sur la boutique. Nous ne pouvons cependant pas garantir la pr??cision d'affichage des couleurs sur l'??cran de votre ordinateur.
        Nous nous r??servons le droit, sans toutefois y ??tre oblig??s, de limiter la vente de nos produits ou Services ?? n'importe quelle personne, r??gion g??ographique ou juridiction donn??e. Nous nous autorisons ?? exercer ce droit au cas par cas. Nous nous r??servons le droit de limiter les quantit??s des produits ou services que nous offrons. Toutes les descriptions des produits et leur tarification sont modifiables ?? tout moment, sans pr??avis et ?? notre enti??re discr??tion. Nous nous r??servons le droit d'interrompre la vente d'un produit ?? tout moment. Toute offre de produit ou service sur ce site est nulle l?? o?? la loi l'interdit.

        Nous ne garantissons pas que la qualit?? des produits, services, informations ou autres mat??riels que vous achetez ou que vous vous procurez r??pondra ?? vos attentes ni que les erreurs que comporte ??ventuellement le Service seront corrig??es.
    </div>
    <button class=\"accordion\">SECTION??6 ??? EXACTITUDE DE LA FACTURATION ET DES INFORMATIONS DE COMPTE
    </button>
    <div class=\"panel\">
        Nous nous r??servons le droit de refuser toute commande que vous passez aupr??s de nous. Nous pouvons, ?? notre seule discr??tion, limiter ou annuler les quantit??s achet??es par personne, par foyer ou par commande. Ces restrictions peuvent inclure les commandes pass??es par ou sur le m??me compte client, la m??me carte de cr??dit et/ou des commandes utilisant la m??me adresse de facturation et/ou d'exp??dition. Si nous modifions ou annulons une commande, il se peut que nous tentions de vous en aviser en vous contactant au moyen de l'adresse e-mail et/ou de l'adresse de facturation ou du num??ro de t??l??phone fournis au moment de la commande. Nous nous r??servons le droit de limiter ou d'interdire les commandes qui, selon nous, semblent avoir ??t?? pass??es par des n??gociants, des revendeurs ou des distributeurs.
        Vous acceptez de fournir des informations d'achat et de compte actuelles, compl??tes et exactes pour tous les achats effectu??s dans notre boutique. Vous acceptez de mettre rapidement ?? jour votre compte et toute autre information, y compris votre adresse e-mail et vos num??ros de cartes de cr??dit et leurs dates d'expiration, afin que nous puissions finaliser vos transactions et vous contacter en cas de besoin.

        Pour plus d'informations, veuillez consulter notre Politique de retour.
    </div>
    <button class=\"accordion\">SECTION??7 ??? OUTILS FACULTATIFS</button>
    <div class=\"panel\">
        Nous sommes susceptibles de vous fournir l'acc??s ?? des outils tiers que nous ne surveillons, ne contr??lons et ne g??rons pas.

        Vous reconnaissez et acceptez que nous vous fournissons l'acc??s ?? ces outils ????tels quels???? et ????sous r??serve de disponibilit??????, sans garantie, repr??sentation ou condition d'aucune sorte et sans la moindre approbation. Nous ne saurions ??tre tenus responsables de quoi que ce soit ?? l'??gard de ce qui pourrait r??sulter de ou ??tre reli?? ?? votre utilisation des outils facultatifs tiers.

        Toute utilisation par vous des outils facultatifs propos??s par le biais du site est enti??rement ?? votre discr??tion et ?? vos propres risques. En outre, il vous appartient de vous renseigner sur les conditions dans lesquelles ces outils sont fournis par le(s) fournisseur(s) tiers concern??(s) et accepter ces conditions.

        Il se peut ??galement qu'?? l'avenir, nous proposions de nouveaux services et/ou de nouvelles fonctionnalit??s ?? travers le site web (y compris le lancement de nouveaux outils et ressources). Ces nouveaux services et/ou fonctionnalit??s seront aussi assujettis aux pr??sentes Conditions d'utilisation.
    </div>

    <button class=\"accordion\">ARTICLE??8 ??? LIENS DE TIERS</button>
    <div class=\"panel\">
        Certains contenus, produits et services accessibles via notre Service peuvent inclure des ??l??ments provenant de tiers.

        Les liens de tiers sur ce site peuvent vous rediriger vers des sites web de tiers qui ne sont pas affili??s ?? nous. Nous ne sommes pas tenus d???examiner ou d?????valuer leur contenu ou leur exactitude, de m??me que nous ne garantissons pas et n???assumons aucune responsabilit?? quant aux contenus ou sites web, ou aux autres contenus, produits ou services de sources tierces.

        Nous ne sommes pas responsables des pr??judices ou dommages li??s ?? l???achat ou ?? l???utilisation de biens, services, ressources, contenus ou de toute autre transaction reli??e ?? ces sites web tiers. Veuillez lire attentivement les politiques et pratiques de ces tiers et assurez-vous de bien les comprendre avant de vous engager dans une transaction. Les plaintes, r??clamations, pr??occupations ou questions concernant les produits de tiers doivent ??tre adress??es ?? ces m??mes tiers.
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} CONDITIONS D'UTILISATION{% endblock %}


{% block content %}
    <style>
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
    <button class=\"accordion\">SECTION 1 ??? CONDITIONS D'UTILISATION DE LA BOUTIQUE EN LIGNE
    </button>
    <div class=\"panel\">
        <p>   En acceptant les pr??sentes Conditions d'utilisation, vous d??clarez avoir atteint ou d??pass?? l'??ge de la majorit?? dans votre r??gion, province ou ??tat et nous avoir donn?? l'autorisation de permettre ?? toute personne mineure ?? votre charge d'utiliser ce site.

            Vous ne devez en aucune fa??on utiliser nos produits ?? des fins ill??gales ou non autoris??es, ni violer des lois de votre juridiction lorsque vous utilisez le Service (y compris, sans toutefois s'y limiter, les lois relatives aux droits d'auteur).

            Vous ne devez pas transmettre de vers informatique, de virus ou tout code de nature destructrice</p>
    </div>

    <button class=\"accordion\"> SECTION 2 ??? CONDITIONS G??N??RALES</button>
    <div class=\"panel\">
        Nous nous r??servons le droit de refuser de servir quelqu'un ?? tout moment et pour quelque raison que ce soit.

        Vous comprenez que votre contenu (?? l'exception des informations relatives ?? votre carte de cr??dit) peut ??tre transf??r?? sans chiffrement et que cela comprend (a) des transmissions sur plusieurs r??seaux??; et (b) des changements effectu??s dans le but de se conformer et de s'adapter aux exigences techniques de la connexion de r??seaux ou d'appareils. Les informations de votre carte de cr??dit sont toujours chiffr??es lors de leur transfert sur les r??seaux.

        Vous acceptez de ne pas reproduire, dupliquer, copier, vendre, revendre ou exploiter toute partie du Service, toute utilisation du Service ou tout acc??s au Service, ou encore tout contact sur le site web ?? travers lequel le Service est fourni, sans notre autorisation ??crite expresse.

        Les titres utilis??s dans le pr??sent accord sont inclus ?? titre indicatif uniquement et ne limiteront ni n'affecteront aucunement ces Conditions.    </div>

    <button class=\"accordion\">SECTION??3 ??? EXACTITUDE, EXHAUSTIVIT?? ET ACTUALIT?? DES INFORMATIONS
    </button>
    <div class=\"panel\">
        Nous ne saurions ??tre tenus responsables si les informations propos??es sur ce site sont inexactes, incompl??tes ou caduques. Le contenu de ce site est fourni ?? titre d'information g??n??rale uniquement et ne doit pas ??tre consid??r?? ou utilis?? comme seule base pour la prise de d??cisions sans consulter des sources d'information plus importantes, plus exactes, plus compl??tes ou plus actuelles. Si vous vous fiez au contenu de ce site, vous le faites ?? vos propres risques.

        Ce site peut contenir certaines donn??es historiques. Par d??finition, les donn??es historiques ne sont pas actuelles et sont fournies uniquement ?? titre de r??f??rence. Nous nous r??servons le droit de modifier les contenus de ce site ?? tout moment, mais nous n'avons aucune obligation de mettre ?? jour les informations qu'il contient, quelles qu'elles soient. Vous reconnaissez qu'il vous incombe de surveiller les changements apport??s ?? notre site.
    </div>

    <button class=\"accordion\">SECTION??4 ??? MODIFICATIONS DU SERVICE ET DES PRIX

    </button>
    <div class=\"panel\">
        Les prix de nos produits sont modifiables sans pr??avis.

        Nous nous r??servons le droit de modifier ou de mettre fin au Service (ou ?? une quelconque partie de celui-ci) ?? tout moment et sans pr??avis.

        Nous ne pourrons ??tre tenus responsables envers
        vous ou tout tiers de tout changement de prix, ou encore de toute modification,
        suspension ou interruption du Service.
    </div>

    <button class=\"accordion\">SECTION??5 ??? PRODUITS OU SERVICES (le cas ??ch??ant)</button>
    <div class=\"panel\">
        Il est possible que certains produits ou services ne soient disponibles qu'en ligne ?? travers le site web. Il se peut que les quantit??s de ces produits ou services soient limit??es et que leur retour ou leur ??change soit strictement assujetti ?? notre Politique de retour.

        Nous nous sommes efforc??s de pr??senter aussi pr??cis??ment que possible les couleurs et images des produits figurant sur la boutique. Nous ne pouvons cependant pas garantir la pr??cision d'affichage des couleurs sur l'??cran de votre ordinateur.
        Nous nous r??servons le droit, sans toutefois y ??tre oblig??s, de limiter la vente de nos produits ou Services ?? n'importe quelle personne, r??gion g??ographique ou juridiction donn??e. Nous nous autorisons ?? exercer ce droit au cas par cas. Nous nous r??servons le droit de limiter les quantit??s des produits ou services que nous offrons. Toutes les descriptions des produits et leur tarification sont modifiables ?? tout moment, sans pr??avis et ?? notre enti??re discr??tion. Nous nous r??servons le droit d'interrompre la vente d'un produit ?? tout moment. Toute offre de produit ou service sur ce site est nulle l?? o?? la loi l'interdit.

        Nous ne garantissons pas que la qualit?? des produits, services, informations ou autres mat??riels que vous achetez ou que vous vous procurez r??pondra ?? vos attentes ni que les erreurs que comporte ??ventuellement le Service seront corrig??es.
    </div>
    <button class=\"accordion\">SECTION??6 ??? EXACTITUDE DE LA FACTURATION ET DES INFORMATIONS DE COMPTE
    </button>
    <div class=\"panel\">
        Nous nous r??servons le droit de refuser toute commande que vous passez aupr??s de nous. Nous pouvons, ?? notre seule discr??tion, limiter ou annuler les quantit??s achet??es par personne, par foyer ou par commande. Ces restrictions peuvent inclure les commandes pass??es par ou sur le m??me compte client, la m??me carte de cr??dit et/ou des commandes utilisant la m??me adresse de facturation et/ou d'exp??dition. Si nous modifions ou annulons une commande, il se peut que nous tentions de vous en aviser en vous contactant au moyen de l'adresse e-mail et/ou de l'adresse de facturation ou du num??ro de t??l??phone fournis au moment de la commande. Nous nous r??servons le droit de limiter ou d'interdire les commandes qui, selon nous, semblent avoir ??t?? pass??es par des n??gociants, des revendeurs ou des distributeurs.
        Vous acceptez de fournir des informations d'achat et de compte actuelles, compl??tes et exactes pour tous les achats effectu??s dans notre boutique. Vous acceptez de mettre rapidement ?? jour votre compte et toute autre information, y compris votre adresse e-mail et vos num??ros de cartes de cr??dit et leurs dates d'expiration, afin que nous puissions finaliser vos transactions et vous contacter en cas de besoin.

        Pour plus d'informations, veuillez consulter notre Politique de retour.
    </div>
    <button class=\"accordion\">SECTION??7 ??? OUTILS FACULTATIFS</button>
    <div class=\"panel\">
        Nous sommes susceptibles de vous fournir l'acc??s ?? des outils tiers que nous ne surveillons, ne contr??lons et ne g??rons pas.

        Vous reconnaissez et acceptez que nous vous fournissons l'acc??s ?? ces outils ????tels quels???? et ????sous r??serve de disponibilit??????, sans garantie, repr??sentation ou condition d'aucune sorte et sans la moindre approbation. Nous ne saurions ??tre tenus responsables de quoi que ce soit ?? l'??gard de ce qui pourrait r??sulter de ou ??tre reli?? ?? votre utilisation des outils facultatifs tiers.

        Toute utilisation par vous des outils facultatifs propos??s par le biais du site est enti??rement ?? votre discr??tion et ?? vos propres risques. En outre, il vous appartient de vous renseigner sur les conditions dans lesquelles ces outils sont fournis par le(s) fournisseur(s) tiers concern??(s) et accepter ces conditions.

        Il se peut ??galement qu'?? l'avenir, nous proposions de nouveaux services et/ou de nouvelles fonctionnalit??s ?? travers le site web (y compris le lancement de nouveaux outils et ressources). Ces nouveaux services et/ou fonctionnalit??s seront aussi assujettis aux pr??sentes Conditions d'utilisation.
    </div>

    <button class=\"accordion\">ARTICLE??8 ??? LIENS DE TIERS</button>
    <div class=\"panel\">
        Certains contenus, produits et services accessibles via notre Service peuvent inclure des ??l??ments provenant de tiers.

        Les liens de tiers sur ce site peuvent vous rediriger vers des sites web de tiers qui ne sont pas affili??s ?? nous. Nous ne sommes pas tenus d???examiner ou d?????valuer leur contenu ou leur exactitude, de m??me que nous ne garantissons pas et n???assumons aucune responsabilit?? quant aux contenus ou sites web, ou aux autres contenus, produits ou services de sources tierces.

        Nous ne sommes pas responsables des pr??judices ou dommages li??s ?? l???achat ou ?? l???utilisation de biens, services, ressources, contenus ou de toute autre transaction reli??e ?? ces sites web tiers. Veuillez lire attentivement les politiques et pratiques de ces tiers et assurez-vous de bien les comprendre avant de vous engager dans une transaction. Les plaintes, r??clamations, pr??occupations ou questions concernant les produits de tiers doivent ??tre adress??es ?? ces m??mes tiers.
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
{% endblock %}
", "administratif/index.html.twig", "/Users/andranikhakobyan/Desktop/la-boutique-francaise-master 2/templates/administratif/index.html.twig");
    }
}
