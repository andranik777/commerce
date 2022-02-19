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

/* account/order.html.twig */
class __TwigTemplate_0bedbaa2882038d8e48f4acc88fad2496c12cbc587396af20f330ad7f4bc7c64 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "account/order.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Mes commandes - La Boutique Française";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <h1>Mes commandes</h1>
    C'est dans cet espace que vous allez pouvoir gérer toutes vos commandes.<br/>
    <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
        echo "\">Retour</a>
    ";
        // line 9
        if ((0 === twig_compare(twig_length_filter($this->env, ($context["orders"] ?? null)), 0))) {
            // line 10
            echo "        <hr>
        <p class=\"text-center\">
            Vous n'avez pas encore passé de commande sur La Boutique Française.
        </p>
    ";
        } else {
            // line 15
            echo "        <table class=\"table mt-4\">
            <thead>
            <tr>
                <th scope=\"col\">Référence</th>
                <th scope=\"col\">Statut</th>
                <th scope=\"col\">Passée le</th>
                <th scope=\"col\">Produit(s)</th>
                <th scope=\"col\">Total</th>
                <th scope=\"col\"></th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 28
                echo "                <tr>
                    <td><span class=\"badge badge-secondary\">";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "reference", [], "any", false, false, false, 29), "html", null, true);
                echo "</span></td>
                    <td>
                        ";
                // line 31
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["order"], "state", [], "any", false, false, false, 31), 1))) {
                    // line 32
                    echo "                            Paiement accepté
                        ";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 33
$context["order"], "state", [], "any", false, false, false, 33), 2))) {
                    // line 34
                    echo "                            Préparation en cours
                        ";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,                 // line 35
$context["order"], "state", [], "any", false, false, false, 35), 3))) {
                    // line 36
                    echo "                            Livraison en cours
                        ";
                }
                // line 38
                echo "                    </td>
                    <td>";
                // line 39
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "createdAt", [], "any", false, false, false, 39), "d/m/Y"), "html", null, true);
                echo "</td>
                    <td>";
                // line 40
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "orderDetails", [], "any", false, false, false, 40)), "html", null, true);
                echo "</td>
                    <td>";
                // line 41
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["order"], "carrierPrice", [], "any", false, false, false, 41) + twig_get_attribute($this->env, $this->source, $context["order"], "getTotal", [], "any", false, false, false, 41)) / 100), 2, ",", "."), "html", null, true);
                echo " €</td>
                    <td class=\"text-right\"><a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_order_show", ["reference" => twig_get_attribute($this->env, $this->source, $context["order"], "reference", [], "any", false, false, false, 42)]), "html", null, true);
                echo "\">Voir ma commande</a></td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "            </tbody>
        </table>


    ";
        }
    }

    public function getTemplateName()
    {
        return "account/order.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 45,  132 => 42,  128 => 41,  124 => 40,  120 => 39,  117 => 38,  113 => 36,  111 => 35,  108 => 34,  106 => 33,  103 => 32,  101 => 31,  96 => 29,  93 => 28,  89 => 27,  75 => 15,  68 => 10,  66 => 9,  62 => 8,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/order.html.twig", "/Users/andranikhakobyan/Desktop/la-boutique-francaise/templates/account/order.html.twig");
    }
}
