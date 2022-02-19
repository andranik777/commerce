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

/* account/order_show.html.twig */
class __TwigTemplate_a59c680e7eda2bba07a50735b1000f9bc4295bf182255ba170c2999419a6b19b extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "account/order_show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Ma commandes - La Boutique Française";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <h1>Ma commande ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "reference", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1>
    <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_order");
        echo "\">Retour</a>
    <hr><strong></strong>
    <strong>Statut de la commande : </strong>
    ";
        // line 10
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "state", [], "any", false, false, false, 10), 1))) {
            // line 11
            echo "        Paiement accepté
    ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 12
($context["order"] ?? null), "state", [], "any", false, false, false, 12), 2))) {
            // line 13
            echo "        Préparation en cours
    ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 14
($context["order"] ?? null), "state", [], "any", false, false, false, 14), 3))) {
            // line 15
            echo "        Livraison en cours
    ";
        }
        // line 17
        echo "    <br/>
    <strong>Commande passée le :</strong> ";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "createdAt", [], "any", false, false, false, 18), "d/m/Y"), "html", null, true);
        echo "<br/>
    <strong>Référence de ma commande :</strong> <small>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "reference", [], "any", false, false, false, 19), "html", null, true);
        echo "</small><br/>
    <strong>Transporteur choisi :</strong> ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "carriername", [], "any", false, false, false, 20), "html", null, true);
        echo "
    <hr>
    <strong>Détails:</strong>

    <table class=\"table mt-4\">
        <thead>
        <tr>
            <th scope=\"col\">Produit</th>
            <th scope=\"col\">Quantité</th>
            <th scope=\"col\">Prix unitaire</th>
            <th scope=\"col\">Total</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "orderDetails", [], "any", false, false, false, 34));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 35
            echo "        <tr>
            <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
            <td>x";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
            <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 38) / 100), 2, ",", "."), "html", null, true);
            echo " €</td>
            <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 39) / 100), 2, ",", "."), "html", null, true);
            echo " €</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </tbody>
    </table>

    <div class=\"text-right\">
        <strong>Sous-total :</strong> ";
        // line 46
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getTotal", [], "any", false, false, false, 46) / 100), 2, ",", "."), "html", null, true);
        echo " €<br/>
        <strong>Livraison :</strong> ";
        // line 47
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "carrierprice", [], "any", false, false, false, 47) / 100), 2, ",", "."), "html", null, true);
        echo " €<br/>
        <strong>Total : </strong> ";
        // line 48
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "carrierPrice", [], "any", false, false, false, 48) + twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getTotal", [], "any", false, false, false, 48)) / 100), 2, ",", "."), "html", null, true);
        echo " €
    </div>

    <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_order_download", ["reference" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "reference", [], "any", false, false, false, 51)]), "html", null, true);
        echo "\" class=\"btn btn-success\">Telecherger</a>
";
    }

    public function getTemplateName()
    {
        return "account/order_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 51,  155 => 48,  151 => 47,  147 => 46,  141 => 42,  132 => 39,  128 => 38,  124 => 37,  120 => 36,  117 => 35,  113 => 34,  96 => 20,  92 => 19,  88 => 18,  85 => 17,  81 => 15,  79 => 14,  76 => 13,  74 => 12,  71 => 11,  69 => 10,  63 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account/order_show.html.twig", "/Users/andranikhakobyan/Desktop/la-boutique-francaise/templates/account/order_show.html.twig");
    }
}
