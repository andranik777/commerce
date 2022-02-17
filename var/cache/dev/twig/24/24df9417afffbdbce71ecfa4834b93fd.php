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

/* base.html.twig */
class __TwigTemplate_4144488b01e86f1938ea52c93c056914 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'javascript' => [$this, 'block_javascript'],
            'content' => [$this, 'block_content'],
            'script' => [$this, 'block_script'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"La boutique qui vend uniquement du made in France.\">
    <meta name=\"author\" content=\"Mark Otto, Jacob Thornton, and Bootstrap contributors\">
    <meta name=\"generator\" content=\"Jekyll v4.1.1\">
    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\" integrity=\"sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/boutiquefrancaise.css"), "html", null, true);
        echo "\">
    ";
        // line 15
        $this->displayBlock('javascript', $context, $blocks);
        // line 17
        echo "    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
</head>
<body>
<header>
    <nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark\">
        <a class=\"navbar-brand\" href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">La Boutique Française</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products");
        echo "\">Nos produits</a>
                </li>
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a>
                </li>
            </ul>
            <a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart");
        echo "\" class=\"mr-md-3\">
                ";
        // line 53
        if ((twig_get_attribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 53, $this->source); })()), "getCart", [], "any", false, false, false, 53) > 0)) {
            echo "<span class=\"badge badge-success rounded-circle\" >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 53, $this->source); })()), "getCart", [], "any", false, false, false, 53), "html", null, true);
            echo "</span>";
        }
        // line 54
        echo "
                <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/shopping-cart.png"), "html", null, true);
        echo "\" class=\"cart-icon\" alt=\"Mon panier\">
            </a>
            <div class=\"navbar-item-custom\">
                ";
        // line 58
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "user", [], "any", false, false, false, 58)) {
            // line 59
            echo "                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
            echo "\">Mon compte <small>(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59), "firstname", [], "any", false, false, false, 59), "html", null, true);
            echo ")</small></a> | <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
                ";
        } else {
            // line 61
            echo "                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a> | <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\">Inscription</a>
                ";
        }
        // line 63
        echo "            </div>

        </div>
    </nav>
</header>

<main role=\"main\">

    ";
        // line 71
        if (        $this->hasBlock("carousel", $context, $blocks)) {
            // line 72
            echo "    <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
            ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 74, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["header"]) {
                // line 75
                echo "                <li data-target=\"#myCarousel\" data-slide-to=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" ";
                if (($context["key"] == 0)) {
                    echo "class=\"active\"";
                }
                echo "></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['header'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "        </ol>
        <div class=\"carousel-inner\">
            ";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 79, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["header"]) {
                // line 80
                echo "            <div class=\"carousel-item ";
                if (($context["key"] == 0)) {
                    echo "active";
                }
                echo "\" style=\"background: url('/uploads/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "illustration", [], "any", false, false, false, 80), "html", null, true);
                echo "');background-size:cover;\">
                <div class=\"container\">
                    <div class=\"carousel-caption text-left\">
                        <h1>";
                // line 83
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "title", [], "any", false, false, false, 83), "html", null, true);
                echo "</h1>
                        <p>";
                // line 84
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "content", [], "any", false, false, false, 84), "html", null, true);
                echo "</p>
                        <p><a class=\"btn btn-lg btn-info\" href=\"";
                // line 85
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "btnUrl", [], "any", false, false, false, 85), "html", null, true);
                echo "\" role=\"button\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "btnTitle", [], "any", false, false, false, 85), "html", null, true);
                echo "</a></p>
                    </div>
                </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['header'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "        </div>
        <a class=\"carousel-control-prev\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </div>
    ";
        }
        // line 101
        echo "
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class=\"container marketing ";
        // line 106
        if ( !        $this->hasBlock("carousel", $context, $blocks)) {
            echo "mt-5";
        }
        echo "\">

        ";
        // line 108
        $this->displayBlock('content', $context, $blocks);
        // line 110
        echo "
    </div><!-- /.container -->

    <!-- FOOTER -->

    <footer class=\"text-center text-lg-start  bg-dark text-light\">

        <!-- Section: Links  -->
        <section class=\"\">
            <div class=\"container text-center text-md-start mt-5\">
                <!-- Grid row -->
                <div class=\"row mt-3\" style=\"padding-top: 2rem\">
                    <!-- Grid column -->
                    <div class=\"col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 d-flex justify-content-center align-items-center flex-column\">
                        <!-- Content -->
                        <h6 class=\"text-uppercase fw-bold mb-4\">
                            <i class=\"fas fa-gem me-3\"></i> 2022 La Boutique Française
                        </h6>
                        <p>
                            La boutique 100% made in France
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class=\"col-md-2 col-lg-2 col-xl-2 mx-auto mb-4\">
                        <!-- Links -->
                        <h6 class=\"text-uppercase fw-bold mb-4\">
                            <a href=\"";
        // line 138
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products");
        echo "\" class=\"text-reset\">Products</a>
                        </h6>
                        <p>
                            <a href=\"";
        // line 141
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product", ["slug" => "perfect-v-neck-t-shirt-femme"]);
        echo "\" class=\"text-reset\">T-Shirt
                            </a>

                        </p>
                        <p>
                            <a href=\"";
        // line 146
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product", ["slug" => "grace-karin-femme-chemisier-col-en-v-dentelle-suisse-point-tops-casual-manches-longues-blouse-a-la-mode"]);
        echo "\" class=\"text-reset\">Chemisier</a>
                        </p>
                        <p>
                            <a href=\"";
        // line 149
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product", ["slug" => "sweat-a-capuche-longue"]);
        echo "\" class=\"text-reset\">Sweat à Capuche Longue</a>
                        </p>
                        <p>
                            <a href=\"";
        // line 152
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product", ["slug" => "jean-skinny-femme"]);
        echo "\" class=\"text-reset\">Jean Skinny Femme</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class=\"col-md-3 col-lg-2 col-xl-2 mx-auto mb-4\">
                        <!-- Links -->
                        <h6 class=\"text-uppercase fw-bold mb-4\">
                            <a href=\"";
        // line 161
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"text-reset\">LA BOUTIQUE</a>
                        </h6>
                        <p>
                            <a class=\"nav-link text-reset\" href=\"";
        // line 164
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products");
        echo "\" >Nos produits</a>
                        </p>
                        <p>
                            <a class=\"nav-link text-reset\" href=\"";
        // line 167
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Nous Contacter</a>
                        </p>
                        <p>
                            <a href=\"";
        // line 170
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("use_term");
        echo "\" class=\"text-reset\">Conditions d'utilisation</a>
                        </p>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class=\"col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4\">
                        <!-- Links -->
                        <h6 class=\"text-uppercase fw-bold mb-4\">Contact</h6>
                        <p><i class=\"fas fa-home me-3\"></i> Pl. de la Loge, 66000 Perpignan</p>
                        <p>
                            <i class=\"fas fa-envelope me-3\"></i>
                            boutique_francais@gmail.com
                        </p>
                        <p><i class=\"fas fa-phone me-3\"></i> + 01 234 567 88</p>
                        <p><i class=\"fas fa-print me-3\"></i> + 01 234 567 89</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

    </footer>


</main>
<script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
<script src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.bundle.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">

    /**
    function placeFooter() {
        if( \$(document.body).height() < \$(window).height() ) {
            \$(\"footer\").css({position: \"fixed\", bottom:\"0px\"});
        } else {
            \$(\"footer\").css({position: \"\"});
        }
    }

    placeFooter();

     **/

</script>
</body>
";
        // line 218
        $this->displayBlock('script', $context, $blocks);
        // line 220
        echo "</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "La Boutique Française - 100% Made in France";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 15
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 16
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 108
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 109
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 218
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  475 => 218,  465 => 109,  455 => 108,  445 => 16,  435 => 15,  416 => 9,  406 => 220,  404 => 218,  383 => 200,  350 => 170,  344 => 167,  338 => 164,  332 => 161,  320 => 152,  314 => 149,  308 => 146,  300 => 141,  294 => 138,  264 => 110,  262 => 108,  255 => 106,  248 => 101,  235 => 90,  222 => 85,  218 => 84,  214 => 83,  203 => 80,  199 => 79,  195 => 77,  182 => 75,  178 => 74,  174 => 72,  172 => 71,  162 => 63,  154 => 61,  144 => 59,  142 => 58,  136 => 55,  133 => 54,  127 => 53,  123 => 52,  117 => 49,  111 => 46,  101 => 39,  93 => 34,  74 => 17,  72 => 15,  68 => 14,  64 => 13,  57 => 9,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"La boutique qui vend uniquement du made in France.\">
    <meta name=\"author\" content=\"Mark Otto, Jacob Thornton, and Bootstrap contributors\">
    <meta name=\"generator\" content=\"Jekyll v4.1.1\">
    <title>{% block title %}La Boutique Française - 100% Made in France{% endblock %}</title>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\" integrity=\"sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />

    <!-- Bootstrap core CSS -->
    <link href=\"{{ asset('assets/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/boutiquefrancaise.css') }}\">
    {% block javascript %}
    {% endblock %}
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href=\"{{ asset('assets/css/carousel.css') }}\" rel=\"stylesheet\">
</head>
<body>
<header>
    <nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark\">
        <a class=\"navbar-brand\" href=\"{{ path('home') }}\">La Boutique Française</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"{{ path('products') }}\">Nos produits</a>
                </li>
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"{{ path('contact') }}\">Contact</a>
                </li>
            </ul>
            <a href=\"{{ path('cart') }}\" class=\"mr-md-3\">
                {% if panier.getCart > 0 %}<span class=\"badge badge-success rounded-circle\" >{{ panier.getCart }}</span>{% endif %}

                <img src=\"{{ asset('assets/img/shopping-cart.png') }}\" class=\"cart-icon\" alt=\"Mon panier\">
            </a>
            <div class=\"navbar-item-custom\">
                {% if app.user %}
                    <a href=\"{{ path('account') }}\">Mon compte <small>({{ app.user.firstname }})</small></a> | <a href=\"{{ path('app_logout') }}\">Déconnexion</a>
                {% else %}
                    <a href=\"{{ path('app_login') }}\">Connexion</a> | <a href=\"{{ path('register') }}\">Inscription</a>
                {% endif %}
            </div>

        </div>
    </nav>
</header>

<main role=\"main\">

    {% if block('carousel') is defined %}
    <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
            {% for key,header in headers %}
                <li data-target=\"#myCarousel\" data-slide-to=\"{{ key }}\" {% if key == 0 %}class=\"active\"{% endif %}></li>
            {% endfor %}
        </ol>
        <div class=\"carousel-inner\">
            {% for key,header in headers %}
            <div class=\"carousel-item {% if key == 0 %}active{% endif %}\" style=\"background: url('/uploads/{{ header.illustration }}');background-size:cover;\">
                <div class=\"container\">
                    <div class=\"carousel-caption text-left\">
                        <h1>{{ header.title }}</h1>
                        <p>{{ header.content }}</p>
                        <p><a class=\"btn btn-lg btn-info\" href=\"{{ header.btnUrl }}\" role=\"button\">{{ header.btnTitle }}</a></p>
                    </div>
                </div>
            </div>
            {% endfor %}
        </div>
        <a class=\"carousel-control-prev\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </div>
    {% endif %}

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class=\"container marketing {% if block('carousel') is not defined %}mt-5{% endif %}\">

        {% block content %}
        {% endblock %}

    </div><!-- /.container -->

    <!-- FOOTER -->

    <footer class=\"text-center text-lg-start  bg-dark text-light\">

        <!-- Section: Links  -->
        <section class=\"\">
            <div class=\"container text-center text-md-start mt-5\">
                <!-- Grid row -->
                <div class=\"row mt-3\" style=\"padding-top: 2rem\">
                    <!-- Grid column -->
                    <div class=\"col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 d-flex justify-content-center align-items-center flex-column\">
                        <!-- Content -->
                        <h6 class=\"text-uppercase fw-bold mb-4\">
                            <i class=\"fas fa-gem me-3\"></i> 2022 La Boutique Française
                        </h6>
                        <p>
                            La boutique 100% made in France
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class=\"col-md-2 col-lg-2 col-xl-2 mx-auto mb-4\">
                        <!-- Links -->
                        <h6 class=\"text-uppercase fw-bold mb-4\">
                            <a href=\"{{ path('products') }}\" class=\"text-reset\">Products</a>
                        </h6>
                        <p>
                            <a href=\"{{ path( 'product', {'slug': 'perfect-v-neck-t-shirt-femme'}) }}\" class=\"text-reset\">T-Shirt
                            </a>

                        </p>
                        <p>
                            <a href=\"{{ path( 'product', {'slug': 'grace-karin-femme-chemisier-col-en-v-dentelle-suisse-point-tops-casual-manches-longues-blouse-a-la-mode'}) }}\" class=\"text-reset\">Chemisier</a>
                        </p>
                        <p>
                            <a href=\"{{ path( 'product', {'slug': 'sweat-a-capuche-longue'}) }}\" class=\"text-reset\">Sweat à Capuche Longue</a>
                        </p>
                        <p>
                            <a href=\"{{ path( 'product', {'slug': 'jean-skinny-femme'}) }}\" class=\"text-reset\">Jean Skinny Femme</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class=\"col-md-3 col-lg-2 col-xl-2 mx-auto mb-4\">
                        <!-- Links -->
                        <h6 class=\"text-uppercase fw-bold mb-4\">
                            <a href=\"{{ path('home') }}\" class=\"text-reset\">LA BOUTIQUE</a>
                        </h6>
                        <p>
                            <a class=\"nav-link text-reset\" href=\"{{ path('products') }}\" >Nos produits</a>
                        </p>
                        <p>
                            <a class=\"nav-link text-reset\" href=\"{{ path('contact') }}\">Nous Contacter</a>
                        </p>
                        <p>
                            <a href=\"{{ path('use_term') }}\" class=\"text-reset\">Conditions d'utilisation</a>
                        </p>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class=\"col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4\">
                        <!-- Links -->
                        <h6 class=\"text-uppercase fw-bold mb-4\">Contact</h6>
                        <p><i class=\"fas fa-home me-3\"></i> Pl. de la Loge, 66000 Perpignan</p>
                        <p>
                            <i class=\"fas fa-envelope me-3\"></i>
                            boutique_francais@gmail.com
                        </p>
                        <p><i class=\"fas fa-phone me-3\"></i> + 01 234 567 88</p>
                        <p><i class=\"fas fa-print me-3\"></i> + 01 234 567 89</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

    </footer>


</main>
<script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
<script src=\"{{ asset('assets/js/bootstrap.bundle.js') }}\"></script>
<script type=\"text/javascript\">

    /**
    function placeFooter() {
        if( \$(document.body).height() < \$(window).height() ) {
            \$(\"footer\").css({position: \"fixed\", bottom:\"0px\"});
        } else {
            \$(\"footer\").css({position: \"\"});
        }
    }

    placeFooter();

     **/

</script>
</body>
{% block script %}
{% endblock %}
</html>", "base.html.twig", "/Users/andranikhakobyan/Desktop/la-boutique-francaise-master 2/templates/base.html.twig");
    }
}
